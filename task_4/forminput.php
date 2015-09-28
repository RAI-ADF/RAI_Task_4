<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}

if(isset($_POST['fname']))
{
$fname = $_POST['fname'];
$fdeskripsi = $_POST['fdes'];


} 
  
  $sql = "insert into data values('$fname', '$fdeskripsi')";
 
mysql_select_db('db_task4');
$tambahdata = mysql_query( $sql, $koneksi );
if(! $tambahdata )
{
 ?>
        <script>alert('error while registering you...');</script>
        <?php
}
?>
        <script>alert('successfully registered ');</script>
        <?php
mysql_close($koneksi);
?>