<?php
	require_once 'connect.php';
	if (isset($_POST)) {
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$dob = $_POST["dob"];
		$gender = $_POST["gender"];
		$placeofbirth = $_POST["placeofbirth"];
		$connection->query("insert into users (firstname, lastname, username, password, email, dateofbirth,placeofbirth,gender) values ('".$firstname."','".$lastname."','".$username."','".$password."','".$email."','".$dob."','".$placeofbirth."','".$gender."')") or die("failed");
		echo "success";
	}else {
		header("location:../index.php");
		exit();
	}
