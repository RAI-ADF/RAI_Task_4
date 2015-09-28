 <?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "databaserai";

mysql_connect($host,$username,$password) or die("Koneksi gagal");
mysql_select_db($db_name) or die("Database tidak bisa dibuka");
?>