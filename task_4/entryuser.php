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

$judul 		= $_POST['judul'];
$karangan	= $_POST['karangan'];
$kategori 	= $_POST['kategori'];


$sql = "INSERT INTO `rai_task4`.`user_entry` (`id`, `judul`, `karangan`, `kategori`) 
VALUES ('', '$judul', '$karangan', 'kategori')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}

$conn->close();
?>