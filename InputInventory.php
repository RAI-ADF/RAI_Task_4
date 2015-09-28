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
	$total 		= $_POST['total'];
	$name 		= $_POST['name'];
	$id 		= $_POST['id'];
	
	$sql = "INSERT INTO inventory (id, username, name, total)
	VALUES ('$id','$username','$name','$total')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>