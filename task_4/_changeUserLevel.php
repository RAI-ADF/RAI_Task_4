<?php
	include '_connection.php';
	$id =  $_GET['id'];

	$sql = "SELECT * from user where id = {$id}";
	$res = $conn->query($sql);
	$row= $res->fetch_assoc();

	if($row['level']=="user"){
		$sql="update user set level = 'admin' where id={$id}";
		setcookie("level", "admin", time() + (86400 * 30), "/");
		echo "level: admin";
	}else{
		$sql="update user set level = 'user' where id={$id}";
		setcookie("level", "user", time() + (86400 * 30), "/");
		echo "level: user";
	}

	$conn->query($sql);
	$conn->close();

?>