<?php
$host = "localhost";
$user = "root";
$password = "";

//nama database
$datbase = "database"; 

//query untuk menghubungkan kedalam database
mysql_connect($host,$user,$password);
mysql_select_db($datbase);
?>