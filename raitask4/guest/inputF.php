<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname	= "raitask4";
$dbuser	= "root";
$dbpass	= "";
 
// database connection
$conn = new PDO("mysql:host=$dbhost; dbname=$dbname",$dbuser,$dbpass);
 
// new data

$alamat = $_POST['alamat'];
$nohp= ($_POST['nohp']);
 
if($alamat == '') {
	$errmsg_arr[] = 'You must enter your address';
	$errflag = true;
}
if($nohp == '') {
	$errmsg_arr[] = 'You must enter your telphone number';
	$errflag = true;
}

if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: inputF-index.php");
	exit();
}
// query

$sql = "INSERT INTO user (alamat,nohp) VALUES (:sas,:asas)";
$q = $conn->prepare($sql);
$q->execute(array(':sas'=>$alamat,':asas'=>$nohp));
header("location: inputF-index.php");
?>
