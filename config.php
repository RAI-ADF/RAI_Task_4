<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rai";
$conn = mysql_connect($dbhost, $dbuser, $dbpass)
        or die ('Error connecting to mysql');

mysql_select_db($dbname,$conn);

?>