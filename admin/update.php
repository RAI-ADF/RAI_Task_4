<?php
 
include './koneksi.php';

$id = $_GET['id_user'];

$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggallahir'];

$update = mysql_query("update user set name='$name', username='$username', password='$pass', email='$email', tanggal_lahir='$tanggal_lahir' where id_user='$id'");
if ($update) {
    header("location:crud_users.php");
} else {
    echo "gagal mengupdate data";
}

?>