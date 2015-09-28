<?php
$dbhost = 'localhost'; 
$dbuser = 'root'; 
$dbpass = '';
$dbname = 'rai_task_4';
$connect = mysql_connect($dbhost, $dbuser, $dbpass);
if (! $connect) {
	die('Could not connect: '.mysql_error());
}
	mysql_close($connect);
$dbselect = mysql_select_db($dbname);