<?php
echo "My first PHP script!";

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "task4";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	
	
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$POB 		= $_POST['subcategory'];
	$DOB 		= $_POST['datepicker'];//$year"-"$month"-"$day;//
	
	$sql = "INSERT INTO user (username, password, name, email, placeOfBirth, dateOfBirth)
	VALUES ('$username','$password','$name','$email','$POB','$DOB')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		echo "<br><br>";
		echo "<a href=login.php>Login</a>";
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>