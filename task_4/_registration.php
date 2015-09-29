<?php
	session_start();
	$errmsg_arr = array();
	$errflag = false;

	$dbhost = "localhost";
	$dbname	= "rai_04";
	$dbuser	= "root";
	$dbpass	= "";

	$conn = new PDO("mysql:host=$dbhost; dbname=$dbname",$dbuser,$dbpass);

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$placeOfBirth = $_POST['placeOfBirth'];
	$dateOfBirth = $_POST['dateOfBirth'];

	if($name == '') {
		$errmsg_arr[] = 'Masukkan nama !';
		$errflag = true;
	}
	if($placeOfBirth == '') {
		$errmsg_arr[] = 'Masukkan tempat lahir !';
		$errflag = true;
	}
	if($dateOfBirth == '') {
		$errmsg_arr[] = 'Masukkan tanggal lahir !';
		$errflag = true;
	}
	if($username == '') {
		$errmsg_arr[] = 'Masukkan username !';
		$errflag = true;
	}
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: registration.php");
		exit();
	}

	$sql = "insert into userdata (username,password,name,email,placeOfBirth,dateOfBirth) values (:a,:b,:c,:d,:e,:f)";
	$q = $conn->prepare($sql);
	$q->execute(array(':a'=>$username,':b'=>$password,':c'=>$name,':d'=>$email,':e'=>$placeOfBirth,':f'=>$dateOfBirth));
	header("location: registration.php");
?>
