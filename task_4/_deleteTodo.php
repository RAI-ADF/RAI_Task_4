<?php
	include '_connection.php';

	$sql="DELETE from todo where id={$_GET['id']}";
	if($conn->query($sql)){
		echo "data deleted";
		header("location: index.php");
	}
?>