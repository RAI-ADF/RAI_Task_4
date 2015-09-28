<?php
	include 'koneksi.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "SELECT id,level from user where username='{$username}' and password='{$password}'";
	$res = $conn->query($query);
	
	
?>