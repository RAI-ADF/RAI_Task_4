<?php

	include('koneksi.php');
	session_start();
	$username=$_SESSION['username'];
	
	$query = "select * from account where username='$username'";
	$jsonarr = array();
	$result=mysql_query($query);
	while($row=mysql_fetch_assoc($result))
	{
		$jsonarr []=$row;
	}
	
	echo json_encode($jsonarr);
	
?>