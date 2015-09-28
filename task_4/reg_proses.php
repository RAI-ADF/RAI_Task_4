<?php
include('connect.php');

$username=$_POST['username'];
$password=$_POST['password1'];

$query="insert into user (username,password) values('$username','$password')";

$hasil=mysql_query($query);

echo $hasil;

?>