<?php
include('config.php');
session_start();
//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
    //kalau username dan password kosong
    header('location:index.php?error=1');
    break;
} else if (empty($username)) {
    //kalau username saja yang kosong
    header('location:index.php?error=2');
    break;
} else if (empty($password)) {
    //kalau password saja yang kosong
    //redirect ke halaman index
    header('location:index.php?error=3');
    break;
}
 
$q = mysql_query("select * from admin where username='$username' and password='$password'");
$c = mysql_query("select * from client where username='$username' and password='$password'");
if (mysql_num_rows($q) == 1) {
	$_SESSION['username'] = $username;
    //kalau username dan password sudah terdaftar di database	
		header('location:adminPage.php');
		break;	
} else if (mysql_num_rows($c) == 1) {
    $_SESSION['username'] = $username;
    //kalau client yang login
        header('location:clientPage.php');
        break;    
} else{
//kalau username ataupun password tidak terdaftar di database
    header('location:index.php?error=4');
}
?>