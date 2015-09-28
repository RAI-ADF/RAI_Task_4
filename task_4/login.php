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
if(!mysql_connect("127.0.0.1","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("db_task4"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
$email = $_POST['femail'];
$pass = $_POST['fpassword'];
$cekuser = mysql_query("SELECT username,leveluser,password FROM registrasi WHERE email = '$email' AND Password = '$pass' ");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
   echo "Username Belum Terdaftar!";
   echo '<a href="index.php">Back</a>';
} else {
   if($pass <> $hasil['password']) {
     echo "Password Salah!";
     echo '<a href="signup.html">Back</a>';
   } else {
     $_SESSION['username'] = $hasil['username'];
     $_SESSION['leveluser'] = $hasil['leveluser'];
     if(($_SESSION['leveluser'])=="admin"){
        header("Location: admin(viewdata).php");   
     }else{
        header("Location: forminput.html");   
    }
   }
}
?>

