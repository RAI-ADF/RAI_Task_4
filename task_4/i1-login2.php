<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username2']) || empty($_POST['password2'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username2=$_POST['username2'];
$password2=$_POST['password2'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username2 = stripslashes($username2);
$password2 = stripslashes($password2);
$username2 = mysql_real_escape_string($password2);
$username2 = mysql_real_escape_string($password2);
// Selecting Database
$db = mysql_select_db("wikifiesto", $connection);
// SQL query to fetch information of registerd users and finds user match.

if (isset($_POST['username2']) && isset($_POST['password2'])){
	$query = mysql_query("select * from wikilogin2 where password2='$password2' AND username2='$username2'", $connection);
}
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username2; // Initializing Session
header("location: welcomeuser.php"); // Redirecting To Other Page
} else {
		$_SESSION['errors'] = array("Your username or password was incorrect.");
		header("Location:h1-menulogin.php");
	}
}
}
?>