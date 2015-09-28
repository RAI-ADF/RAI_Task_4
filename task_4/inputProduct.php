<?php
include('config.php');
 
$orderID = $_POST['orderID'];
$productName = $_POST['productName'];
$quantity = $_POST['quantity'];

 
$query = mysql_query("insert into order values('$orderID', '$productName', 
	'$quantity')") or die(mysql_error());
 
if ($query) {
    header('location:clientPage.php?registered=true');
}