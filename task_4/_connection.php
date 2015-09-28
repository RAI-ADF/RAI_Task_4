<?php
	$conn = new mysqli("localhost", "root", "", "raitask4");
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }
?>