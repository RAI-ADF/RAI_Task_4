<?php
include('config.php');
 
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$name = $_POST['name'];
$email = $_POST['email'];
$place_of_birth = $_POST['province'];
$date_of_birth = $_POST['date_of_birth'];
 
$query = mysql_query("insert into user values('$username', '$password', 
	'$name','$email', '$place_of_birth', '$date_of_birth')") or die(mysql_error());
 
if ($query) {
    header('location:login.php?registered=true');
}