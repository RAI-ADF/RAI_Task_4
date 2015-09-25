<?php
include('config.php');
 
//tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$place_of_birth = $_POST['place_of_birth'];
$date_of_birth = $_POST['date_of_birth'];
 
//simpan data ke database
$query = mysql_query("insert into user values('$username', '$password', 
	'$name','$email', '$place_of_birth', '$date_of_birth')") or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=success');
}