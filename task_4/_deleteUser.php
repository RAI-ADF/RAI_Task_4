<?php
	require('_authenticateAdmin.php');
	include '_connection.php';

	$sql="DELETE from user where id={$_GET['id']}";
	if($conn->query($sql)){
		echo "data deleted";
		header("location: adminPage.php");
	}
?>