<?php
	session_start();
	include 'koneksiganti.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysql_query("select * from login where username='$username' and password='$password'");
	$isi=mysql_num_rows($query);
	if($isi==TRUE) {
		$_SESSION['username']=$username;
		header("location:homeganti.php");
	}else {
			header("location: index.html");
		}	
	
?>