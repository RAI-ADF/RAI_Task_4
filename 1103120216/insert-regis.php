<?php
	// Create connection
	$conn = mysql_connect('localhost','root','');
	mysql_select_db("registrasi");

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} else {
	echo "Connected successfully";
	}
	$name = $_POST['name'];
	$dob = $_POST['date'];
	$provinsi = $_POST['provinsi'];
	$kota = $_POST['kota'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];
	$errflag = false;
	
	if($username == '') {
		$errflag = true;
	}
	if($password == '') {
		$errflag = true;
	}
	if($name == '') {
		$errflag = true;
	}
	if($email == '') {
		$errflag = true;
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errflag = true;
	}
	if($kota == '') {
		$errflag = true;
	}
	if($provinsi == '') {
		$errflag = true;
	}
	if($dob == '') {
		$errflag = true;
	}
	if($password != $password2){
		$errflag = true;	
	}
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: registration.php");
		exit();
	}

	$query = "INSERT INTO userdb (username_u,pass_user,nama_user,email_user,provinsi_user,kota_user,dob_user) VALUES ('$username','$password','$name','$email','$provinsi','$kota','$dob')"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data) { echo "YOUR REGISTRATION IS COMPLETED..."; }
	header("location: index.php");

?>


