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
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>


<body>
	<h1>Registration Page</h1>
	<form action="do_login.php">
		<label for="username">Username</label>
		<input type="text" name="username">
		<label for="password">Password</label>
		<input type="password" name="password">
		<label for="confirm_password">Confirm Password</label>
		<input type="password" name="confirm_password">
		<label for="email">Email</label>
		<input type="email" name="email">
		<label for="name">Name</label>
		<input type="text" name="name">
		<label for="place_of_birth">Place Of Birth</label>
		<select name="province" id="province">
			
		</select>
		<select name="city" id="city">
			<option disabled>Choose a province</option>
		</select>
		<label for="date_of_birth">Data Of Birth</label>
		<input type="date" name="date_of_birth">
		<input type="submit" value="Register">
	</form>


	<script type="text/javascript">

	</script>
</body>

</html>
