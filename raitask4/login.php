<?php
include('koneksi.php');
if(isset($_POST['login'])){
	$user = mysql_real_escape_string(htmlentities($_POST['username']));
	$pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));
 
	$sql = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo '<script language="javascript">alert("User tidak ditemukan"); document.location="login.php";</script>';
	}else{
		$row = mysql_fetch_assoc($sql);
		if($row['id'] == 1){ //pake rentang buat admin misal 1-10 admin 
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/adminPage.php";</script>';
		}else{
			$_SESSION['guest']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="guest/clientPage.php";</script>';
		}
	}
}
?>
