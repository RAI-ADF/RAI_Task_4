<?php
$host = 'localhost'; 
$user = 'root'; 
$pass = '';
$dbname = 'rai_task_4';
 
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
$dbselect = mysql_select_db($dbname);