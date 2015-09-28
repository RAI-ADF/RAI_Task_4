<?php
	include('connect.php');
	
	$user=$_POST['user'];
	
	$query="select username from user where username = '$user'";
	$query;
	$result=mysql_query($query);
	$hasil=mysql_fetch_array($result);
	$user=$hasil['username'];
	
	echo $user;
	

?>