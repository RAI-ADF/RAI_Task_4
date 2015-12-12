<?php
 
include './config.php';
$id = $_GET['id_mhs'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$update = mysql_query("update mahasiswa set nim_mhs='$nim', nama_mhs='$nama', jur_mhs='$jurusan', alamat_mhs='$alamat', jk_mhs='$jk' where id_mhs='$id'");
if ($update) {
    header("location:lihat_mhs.php");
} else {
    echo "gagal mengupdate data";
}
?>