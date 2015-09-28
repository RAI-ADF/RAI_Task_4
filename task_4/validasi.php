<?php
include('config.php');
 
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
 
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 

if (empty($username) && empty($password)) {
    header('location:login.php?error=1');
    break;
} else if (empty($username)) {
    header('location:login.php?error=2');
    break;
} else if (empty($password)) {
    header('location:login.php?error=3');
    break;
} 


 
$q = mysql_query("select * from user where username='$username' and password='$password'");
 
if (mysql_num_rows($q) == 1) {
	$_SESSION['username'] = $username;
    header('location:clientPage.php');
} 
else if($password="admin" && $username="admin") {
    header('location:adminPage.php');
} 
else {
    header('location:login.php?error=4');
}