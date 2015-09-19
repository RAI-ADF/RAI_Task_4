<?php

session_start();

if(isset($_SESSION['username']) && isset($_SESSION['is_admin'])){
	
	if($_SESSION['is_admin'] == true){
		header("Redirect:adminPage.php");
	} else if ($_SESSION['is_admin'] == false){
		header("Redirect:clientPage.php");
	}

	die();
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>


<body>
	<h1>Login Page</h1>
	<form action="do_login.php">
		<label for="">Username</label>
		<input type="text" name="username">
		<label for="">Password</label>
		<input type="password" name="password">
		<input type="submit" value="Login">
	</form>
	<a href="registration.php">Register</a>
</body>

</html>
