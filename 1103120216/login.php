<?php
	session_start();
	mysql_connect("localhost", "root", "");
	mysql_select_db("registrasi");
	
	if(isset($_POST['login'])){
		$user = mysql_real_escape_string(htmlentities($_POST['username']));
		$pass = mysql_real_escape_string(htmlentities($_POST['password']));
	 
		if(isset($_POST['admin_check']) && $_POST['admin_check'] == 'yes') {
			$query = mysql_query("SELECT * FROM admindb WHERE username_a='$user' AND pass_admin='$pass'") or die(mysql_error());
			if(mysql_num_rows($query) == 0){
				echo '<script language="javascript">alert("Maaf, Anda belum terdaftar sebagai member!"); document.location="index.php";</script>';
			} else {
				$_SESSION['admin']=$user;
 				setcookie('username', $user, time() + 1*24*60*60);
                setcookie('password', $pass, time() + 1*24*60*60);				
				echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="adminPage.php";</script>';
			}
		} else {
			$query = mysql_query("SELECT * FROM userdb WHERE username_u='$user' AND pass_user='$pass'") or die(mysql_error());
			if(mysql_num_rows($query) == 0){
				echo '<script language="javascript">alert("Maaf, Anda belum terdaftar sebagai member!"); document.location="index.php";</script>';
			} else {
				$_SESSION['member']=$user;		
				setcookie('username', $user, time() + 1*24*60*60);
                setcookie('password', $pass, time() + 1*24*60*60);			
				echo '<script language="javascript">alert("Anda berhasil Login Member!"); document.location="clientPage.php";</script>';}
			}
	}
?>
