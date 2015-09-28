<?php
include('config.php');
 
$id = $_GET['id'];
 
$query = mysql_query("delete from client where username='$id'") or die(mysql_error());
 
if ($query) {
    header('location:adminPage.php');
}
?>