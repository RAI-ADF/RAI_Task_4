<?php
include('config.php');
 
$kodeOrder = $_POST['kodeOrder'];
$productName = $_POST['productName'];
$quantity = $_POST['quantity'];

$query = mysql_query("insert into pesan values ('$kodeOrder', '$productName', 
	'$quantity')") or die(mysql_error());
 
if ($query) {
    header('location:clientPage.php?registered=true');
}

mysql_close($connect);