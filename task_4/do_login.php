<?php

session_start();

require "database.php";

$username = $_POST['username'];
$password = md5($_POST['pass']);

$query = $db->query("SELECT * FROM karyawan WHERE username = $username AND pass = $password");

if($query->num_rows > 0){
	$data = $query->fetch_assoc();

	$_SESSION['username'] = $data['username'];
	$_SESSION['admin'] = ($data['admin'] == '1') ? true : false;

	setcookie('username', $data['username'], time() + 3600 * 3);

	echo "success";
} else {
	echo "fail";
}
