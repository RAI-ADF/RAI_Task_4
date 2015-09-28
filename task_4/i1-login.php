<!-- copyright 2015 @ Sang Made Naufal 1103120146 -->

<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['wikiuser']) || empty($_POST['wikipass'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$wikiuser=$_POST['wikiuser'];
$wikipass=$_POST['wikipass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$wikiuser = stripslashes($wikiuser);
$wikipass = stripslashes($wikipass);
$wikiuser = mysql_real_escape_string($wikiuser);
$wikipass = mysql_real_escape_string($wikipass);
// Selecting Database
$db = mysql_select_db("wikifiesto", $connection);
// SQL query to fetch information of registerd users and finds user match.

if (isset($_POST['wikiuser']) && isset($_POST['wikipass'])){
	$query = mysql_query("select * from wikilogin where wikipass='$wikipass' AND wikiuser='$wikiuser'", $connection);
}
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$wikiuser; // Initializing Session
header("location: a1-solusi.php"); // Redirecting To Other Page
} else {
		$_SESSION['errors'] = array("Your username or password was incorrect.");
		header("Location:h1-menulogin.php");
	}
}
}
?>