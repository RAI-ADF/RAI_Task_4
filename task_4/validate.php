<?php

include('koneksi.php');
$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from account where username='$username' and password='$password'";

$result=mysql_query($query);
$outnum=mysql_num_rows($result);
$out=mysql_fetch_array($result);

$status=$out['status'];
if($outnum!=0){
	echo "$status";
	session_start();
	$_session['username']=$out['username'];
	$_session['status']=$out['status'];
	if ($status=="client") {
		header("Location: clientPage.php");
	}else{
		header("Location: adminPage.php");
	}
}else{
	echo "nothing";
}

?>