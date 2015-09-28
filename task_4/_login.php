<?php
	include '_connection.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT id,level from user where username='{$username}' and password='{$password}'";
	$res = $conn->query($query);

	if($res->num_rows==1){
		//authentication accepted
		$row = $res->fetch_assoc();
		setcookie("userid", $row["id"], time() + (86400 * 30), "/");
		setcookie("level", $row["level"], time() + (86400 * 30), "/");
		echo $res->num_rows;
		echo $row["id"];
		echo $row["level"];
		header("location: index.php");
	}else{
		echo $res->num_rows;
		//authentication rejected
		header("location: login.php");
	}
?>