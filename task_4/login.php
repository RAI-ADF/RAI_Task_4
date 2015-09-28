<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else
	{
	// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "");
	// To protect MySQL injection for Security purpose
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	// Selecting Database
	$db = mysql_select_db("database", $connection);
	// SQL query to fetch information of registerd users and finds user match.
	$queryAdmin = mysql_query("select * from admin where password='$password' AND username='$username'", $connection);
	$queryUser = mysql_query("select * from user where password='$password' AND username='$username'", $connection);
	if (mysql_num_rows($queryAdmin) == 1) {
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: adminPage.php"); // Redirecting To Other Page
		break;
	} else if(mysql_num_rows($queryUser)){
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: clientPage.php"); // Redirecting To Other Page
		break;		
	} else {
		$error = "Username or Password is invalid";
	}
	mysql_close($connection); // Closing Connection
	}
	}
?>
