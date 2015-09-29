<?php
	session_start();
	if(isset($_SESSION['username'])!="")
	{
		if(isset($_SESSION['status'])=="admin"){
			header("Location: adminPage.php");   
		}else{
			header("Location: clientPage.php");   
		}
	}
	include_once 'dbconfig.php';
	
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$cekuser = mysql_query("SELECT username, password, status FROM user WHERE Username = '$username' AND Password = '$pass' ");
	$jumlah = mysql_num_rows($cekuser);
	$hasil = mysql_fetch_array($cekuser);
	if($jumlah == 0) {
	   echo "Username Belum Terdaftar!";
	   echo '<a href="index.php">Back</a>';
	} else {
	   if($pass <> $hasil['password']) {
		 echo "Password Salah!";
		 echo '<a href="index.php">Back</a>';
	   } else {
		 $_SESSION['username'] = $hasil['username'];
		 $_SESSION['status'] = $hasil['status'];
		 if(($_SESSION['status'])=="admin"){
			header("Location: adminPage.php");   
		 }else{
			header("Location: clientPage.php");   
		}
	   }
	}
?>

