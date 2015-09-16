<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$connection = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $connection ){
	  die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully';
	mysql_close($connection);
?>
