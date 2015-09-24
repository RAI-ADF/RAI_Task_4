<?php
$host="localhost";
$user="root";
$pass="";
$name="latihan";

mysql_connect($host,$user,$pass);

mysql_select_db($name) or die (mysql_error());


?>