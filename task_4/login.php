<?php
	include 'koneksi.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
	
	$result = mysql_query($query)or die(mysql_error());
	$num_row = mysql_num_rows($result);
	$row=mysql_fetch_array($result);
	if( $num_row >=1 ) {
		echo 'true';
		session_start();
		$_SESSION['username']=$row['username'];		
		$_SESSION['type'] =$row['type'];
		if ($_SESSION['type'] ==1) {
			// echo 'admin';
			// $_SESSION['counter'] += 1;
			header("Location: adminPage.php");
		}elseif ($_SESSION['type'] ==2) {
			// echo 'user';
			header("Location: clientPage.php");
		}
		// $msg = "visit this page ". $_SESSION['counter'];
		// echo ($msg);
	}else{
		echo 'User tidak terdaftar, silakan registrasi <a href="registration.php">di sini</a>';
		// header("Location: ./");
	}
?>