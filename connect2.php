<?php
$host='localhost';
$name='root';
$pass='';
$dbname='rai2';
$connect=mysql_connect($host,$name,$pass)or die(mysql_error());
$dbselect=mysql_select_db($dbname);
?>
