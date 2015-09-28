<?php
include('koneksisql.php');
if(isset($_POST['login'])){
	$user = mysql_real_escape_string(htmlentities($_POST['username']));
	$pass = mysql_real_escape_string(htmlentities(md5($_POST['pass'])));
 
	$sql = mysql_query("SELECT * FROM user WHERE username='$user' AND pass='$pass'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo '<script language="javascript">alert("User/Admin not found"); document.location="login.php";</script>';
	}else{
		$row = mysql_fetch_assoc($sql);
		if($row['id'] == 1){ 
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("Logged in as admin"); document.location="adminPage.php";</script>';
		}else{
			$_SESSION['user']=$user;
			echo '<script language="javascript">alert("Logged in as user"); document.location="clientPage.php";</script>';
		}
	}
}
?>
