<?php 

$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "rai_task4";

$conn = mysqli_connect($mysql_db_hostname, $mysql_db_user,$mysql_db_password,$mysql_db_database);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$name 		= $_POST['name'];
$email		= $_POST['email'];
$username 	= $_POST['username'];
$password 	= $_POST['password'];
$dob 		= mysql_real_escape_string($_POST['datepickers']);
//$dob 		= mysql_real_escape_string($_POST['datepicker']);

$sql = "INSERT INTO `rai_task4`.`user` (`username`, `password`, `name`, `place_of_birth`, `date_of_birth`, `user_type`, `email`) 
VALUES ('$username', '$password', '$name', 'solo', '$dob', '2', '$email')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}


$conn->close();
?>