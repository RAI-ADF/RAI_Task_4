<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username)){
	echo "<script>alert('Username belum diisi')</script>";
	include "login.php";
}else if (empty($password)){
	echo "<script>alert('Password belum diisi')</script>";
	include "login.php";
}else{
	session_start();
	$login = mysql_query("select * from users where username='$username' and password='$password'");
	if (mysql_num_rows($login) > 0){
		$_SESSION['username'] = $username;
		header("location:index.php");
	}else{
		echo "<script>alert('Username atau Password salah')</script>";
		include "login.php";
	}
}
?>

