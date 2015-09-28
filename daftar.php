<?php require_once("koneksi.php");

$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggallahir'];

$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
if(mysql_num_rows($cekuser) <> 0) {
echo "Username Sudah Terdaftar!";
// echo "<a href="daftar.php">&amp;amp;laquo; Back</a>";
} else {
if(!$username || !$pass) {
echo "Masih ada data yang kosong!";
// echo "<a href="daftar.php">&amp;amp;laquo; Back</a>";
} else {
$simpan = mysql_query("INSERT INTO user(username, password, name, email,tanggal_lahir) VALUES('$username','$pass','$nama','$email','$tanggal_lahir')");
if($simpan) {
// echo "Pendaftaran Sukses, Silahkan <a href="index.html">Login</a>";
} else {
echo "Proses Gagal!";
}
}
}
?> 