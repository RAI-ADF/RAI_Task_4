<?php
session_start();
include "koneksi.php";


$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$tempatl = $_POST['tempatlahir'];
$tanggallahir = $_POST['tgl'];

if(mysql_query("INSERT INTO users VALUES('$nama','$username','$password','$email','$tempatl','$tanggallahir')")){
	echo "<script>Daftar Sukses</script>";
	include("login.php");
}else{
	header("Location : daftar.php");
}

?>

