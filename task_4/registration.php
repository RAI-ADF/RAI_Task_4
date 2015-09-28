<?php
session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$tempatl = $_POST['tempatlhr'];
$tanggallahir = $_POST['tgllhr'];
$id = $_POST['id'];

if(mysql_query("INSERT INTO user VALUES('$username','$password','$nama','$email','$tempatl','$tanggallahir','$id')")){
	echo "<script>Registration Success</script>";
	include("login.php");
}else{
	header("Location : user-registration.html");
}

?>

