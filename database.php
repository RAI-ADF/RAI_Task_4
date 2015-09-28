<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "rai";

mysql_connect($host,$username,$password) or die("connect failed");
mysql_select_db($db_name) or die("database tidak terbuka");