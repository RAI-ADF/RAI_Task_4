<?php
include "koneksi.php";
$username = $_POST['usernamead'];
$password = $_POST['passwordad'];
if (empty($username)){
	echo "<script>alert('Username belum diisi')</script>";
	include "login_admin.php";
}else if (empty($password)){
	echo "<script>alert('Password belum diisi')</script>";
	include "login_admin.php";
}else{
	session_start();
	$login = mysql_query("select * from admin where username='$username' and password='$password'");
	if (mysql_num_rows($login) > 0){
		$_SESSION['usernamead'] = $username;
		header("location:home_admin.php");
	}else{
		echo "<script>alert('Username atau Password salah')</script>";
		include "login_admin.php";
	}
}
?>

