<?php
include('config.php');
 
//tangkap data dari form
$user = $_GET['id'];
$password = $_POST['password'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
 
//update data di database sesuai username
$query = mysql_query("update client set password='$password', nik='$nik', nama='$nama', nohp='$nohp', email='$email' where username='$user'") or die(mysql_error());
 
if ($query) {
    header('location:adminPage.php');
}
?>