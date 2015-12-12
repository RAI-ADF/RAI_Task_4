<?php
	session_start();
	$errmsg_arr = array();
	$errflag = false;
	// configuration
	$dbhost 	= "localhost";
	$dbname	= "raiabid";
	$dbuser	= "root";
	$dbpass	= "";
	// database connection
	$conn = new PDO("mysql:host=$dbhost; dbname=$dbname",$dbuser,$dbpass);
	// new data
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	
	if($username == '') {
		$errmsg_arr[] = 'You must enter your username';
		$errflag = true;
	}
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: registration.php");
		exit();
	}
	// query
	$sql = "INSERT INTO user (username,password,nama,email) VALUES (:sas,:asas,:abas,:acas,:adas,:aeas)";
	$q = $conn->prepare($sql);
	$q->execute(array(':sas'=>$username,':asas'=>$password,':abas'=>$nama,':acas'=>$email,':adas'=>$place,':aeas'=>$tanggal));
	header("location: index.php");
?>