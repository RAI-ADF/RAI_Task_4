<?php

session_start();
if(isset($_SESSION['username'])!="")
{
    if(isset($_SESSION['leveluser'])=="admin"){
        header("Location: admin(viewdata).php");   
    }else{
        header("Location: forminput.html");   
    }
}

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}

if(isset($_POST['fusername']))
{
$fusername = $_POST['fusername'];
$fpassword = $_POST['fpassword'];
$fpassword2 = $_POST['fpassword2'];
$femail = $_POST['femail'];
$fname = $_POST['fname'];
$fbirthdate = $_POST['fbirthdate'];
$fbirtplace = $_POST['city'];

} 
  
  $sql = "insert into registrasi values('$fusername', '$fpassword','$fpassword2','$femail','$fname','$fbirtplace','$fbirthdate','user')";
 
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