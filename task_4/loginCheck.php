<?php
session_start();
 
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    //redirect ke halaman login
    header('location:login.php');
}