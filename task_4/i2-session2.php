
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("wikifiesto", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username2 from wikilogin2 where username2='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username2'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: h1-menulogin.php'); // Redirecting To Home Page
}
?>