<?php
	include '_connection.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$birth_place = $_POST['province']." - ".$_POST['city'];
	$birth_date = $_POST['date'];

	$query = "SELECT id from user";
	$result = $conn->query($query);
	if($result->num_rows==0){
		$level="admin";
	}else{
		$level="user";
	}

	$query = "INSERT INTO user (username, password, name, email, level, birth_place, birth_date) values 
				('{$username}', '{$password}', '{$name}', '{$email}', '{$level}', '{$birth_place}', {$birth_date})";

	if ($conn->query($query) === TRUE) {
	    echo "New record created successfully";
	    header("location: index.php");
	} else {
	    echo "Error: " . $query . "<br>" . $conn->error;
	    header("location: registration.php");
	}
 
	$conn->close();

	//header("location: index.php");

?>