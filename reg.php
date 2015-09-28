<?php
	include_once('connect2.php');
	
	function clean($str){
		$str = @trim($str);
		if(get_magic_quotes_gpc()){
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//bersihkan post values
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
	$repassword = clean($_POST['repassword']);
	$name = clean($_POST['name']);
	$email = clean($_POST['email']);
	$tanggal = clean($_POST['tanggal']);
	$provinsi = clean($_POST['provinsi']);
	$kota = clean($_POST['kota']);
	$gender = clean($_POST['gender']);

	//Insert query
	$qry = "INSERT INTO member(username, password, name, email, provinsi, kota, tanggal, gender) Values ('$username','$password','$name','$email','$provinsi','$kota','$tanggal','$gender')";
	$data = mysql_query($qry) or die(mysql_error());
	if ($data) {
		echo "Registrasi Success";
	}
	
?>
