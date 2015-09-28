<?php
session_start();
include "database.php";

	$username= isset($_POST['username'])?$_POST['username']:'';
	$password= isset($_POST['password'])?$_POST['password']:'';
	$name= isset($_POST['name'])?$_POST['name']:'';
	$email= isset($_POST['email'])?$_POST['email']:'';
	$pob= isset($_POST['pob'])?$_POST['pob']:'';
	$dob= isset($_POST['dob'])?$_POST['dob']:'';
	
	if(isset($_POST['submit'])){
	$query=mysql_query("INSERT INTO `user`(`username`, `password`, `name`, `email`, `pob`, `dob`) 
	VALUES ('$username','$password','$name','$email','$pob','$dob')");
	header('location:registration.php');
	}
?>

<html lang="en">
<title> Registration User </title>
<h1> Registration </h1>
<head>
		  <meta charset="utf-8">
		  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		  <link rel="stylesheet" href="/resources/demos/style.css">
		  <script>
		  $(function() {
			$( "#datepicker" ).datepicker();
		  });
		  </script>
  
</head>
<body>
	
	<form method="post">
		<table>
			<tr>
			<td> Username </td>
			<td><input type="text" name="username"></td>
			</tr>
			<tr>
			<td> Password </td>
			<td><input type="password" name="password"></textarea></td>
			</tr>
			<tr> 
			<td> Nama </td>
			<td> <input type="text" name="name"></td>
			</tr>
			<tr>
			<td> Email </td>
			<td> <input type="email" name="email"></td>
			</tr>
			<td> Place Of Birth </td>
			<td> <input type="text" name="pob"></td>
			</tr>
			<td> Date of Birth </td>
			<td> <input type="date" id="date" name="dob"></td>
			</tr>
		</table>
		<input type="submit" value="Submit" name="submit"/>
		</div>
	</form>


</body>
</html>