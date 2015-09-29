<?php
	include('_connection.php');

	if(isset($_POST['login'])){
		$user = mysql_real_escape_string(htmlentities($_POST['username']));
		$pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));

		$sql = mysql_query("SELECT * FROM userdata where username='$user' and password='$pass'") or die(mysql_error());
		if(mysql_num_rows($sql) == 0){
			echo 'Username tidak terdaftar';
		} else {
			$row = mysql_fetch_assoc($sql);
			if($row['id'] == 1){
				$_SESSION['admin']=$user;
				echo '<script language="javascript"> alert("Login Admin Berhasil !"); document.location="adminPage.php"; </script>';
			} else {
				$_SESSION['guest']=$user;
				echo '<script language="javascript"> alert("Login Client Berhasil !"); document.location="clientPage.php"; </script>';
			}
		}
	}
?>
