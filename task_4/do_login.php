<?php

session_start();

require db.php;

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = $db->query("SELECT * FROM users WHERE username = $username AND password = $password");

if($query->num_rows > 0){
	$data = $query->fetch_assoc();

	$_SESSION['username'] = $data['username'];
	$_SESSION['is_admin'] = $data['is_admin'];

	setcookie('username', $data['username'], time() + 3600 * 3);

	echo "success";
} else {
	echo "fail";
}