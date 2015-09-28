<?php 
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['admin'])){ 
		if($_SESSION['admin'] == true){ 
 			header("Redirect:adminPage.php"); 
 		} else if ($_SESSION['is_admin'] == false){ 
 			header("Redirect:clientPage.php"); 
 		}
 		die();
 	}
 ?>

<html>
<head>
	<title>Page Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<div class="container">
		<div class="main">
			<form action="do_login.php" method="post">
				<h1>Login</h1><hr>
				<label>Username :</label>
				<input type="text" name="username">

				<label>Password :</label>
				<input type="password" name="pass">
				<input type="submit" value="Login">
			</form>
			<a href="registration.php">Register here.</a>
		</div>
	</div>
</body>
</html>