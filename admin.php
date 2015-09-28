<?php
session_start();
if(isset($_GET['logout']) AND $_GET['logout']=='1'){
    unset($_SESSION['login']);
    session_destroy();
}
if(!isset($_SESSION['login'])){
    header('location: index.php');
}
else{
    echo '<h3>SELAMAT DATANG : '.$_SESSION['login']['username'].'</h3>';
    echo 'Halaman ini kita asumsikan sebagai halaman Administrator, dimana halaman ini hanya bisa diakses ketika Admin sudah login';
    echo '<br/><a href="?logout=1">LOGOUT</a>';
}
?>