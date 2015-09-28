<?php
	session_start();
	$session_id = session_id();
	require_once 'connect.php';
	if (isset($_POST)) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = $connection->query("select * from users where username like '".$username."' and password like '".$password."'");
		if ($result->num_rows==1) {
			echo "success";
			setcookie("session_id",$session_id,time()+3600,"/");
			setcookie("username",$username,time()+3600,"/");
		}else {
			echo "failed";
		}
	}else {
		header("location:../index.php");
		exit();
	}
