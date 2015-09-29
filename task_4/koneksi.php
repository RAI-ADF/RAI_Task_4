<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "rai_task4";
	
	mysql_connect($dbhost, $dbuser, $dbpass);
	mysql_select_db($dbname) or die(mysql_error());
	
	
	// mysql_connect($dbhost, $dbuser, $dbpass) or die("Could not connect database");
		// mysql_select_db($dbname, $con) or die("Could not select database");
?>