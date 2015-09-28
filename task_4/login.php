<?php
session_start();
if(isset($_SESSION['username'])!="")
{
    if(isset($_SESSION['leveluser'])=="admin"){
        header("Location: adminPage.php");   
    }else{
        header("Location: clientPage.php");   
    }
}
if(!mysql_connect("127.0.0.1","root","18081994"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("task_rai_4"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT Username,leveluser,password FROM users WHERE Username = '$username' AND Password = '$pass' ");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
   echo "Username Belum Terdaftar!";
   echo '<a href="index.php">Back</a>';
} else {
   if($pass <> $hasil['password']) {
     echo "Password Salah!";
     echo '<a href="index.php">Back</a>';
   } else {
     $_SESSION['username'] = $hasil['Username'];
     $_SESSION['leveluser'] = $hasil['leveluser'];
     if(($_SESSION['leveluser'])=="admin"){
        header("Location: adminPage.php");   
     }else{
        header("Location: clientPage.php");   
    }
   }
}
?>

