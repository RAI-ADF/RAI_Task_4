<?php

session_start();

if(isset($_SESSION['username']) && isset($_SESSION['is_admin'])){
	
	if($_SESSION['is_admin'] == true){
		header("Location:adminPage.php");
	} else if ($_SESSION['is_admin'] == false){
		header("Location:clientPage.php");
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
	<div id="login_form">
		<form onsubmit="event.preventDefault(); do_login();">
			<label for="">Username</label>
			<input type="text" name="username" id="username">
			<label for="">Password</label>
			<input type="password" name="password" id="password">
			<input type="submit" value="Login">
		</form>
		<a href="registration.php">Register</a>
		<div id="message"></div>
	</div>

	<script type="text/javascript" src="ajax_request.js"></script>
	<script type="text/javascript">
	
		
	function do_login(){
		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;

		create_ajax_request('post', 'do_login.php', "username="+username+"&password="+password,
			function(response){
				if (response == "success"){
					window.location = "index.php";
				} else if(response == "failed") {
					document.getElementById('message').innerHTML = "Login gagal";
				}
			});
	}
	</script>
</body>

</html>
