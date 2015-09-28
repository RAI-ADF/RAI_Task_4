<?php
session_start();

include "database.php";

	$username= isset($_POST['username'])?$_POST['username']:'';
	$password= isset($_POST['password'])?$_POST['password']:'';

		if(isset($_POST['login'])){
			session_start();
			$query= mysql_num_rows(mysql_query("select * from user where username='$username' and password='$password'"));
			$_SESSION['username']=$username;
			header('location:clientPage.php');
		}else{
			echo 'Anda gagal login. silahkan <a href="clientPage.php">Login kembali</a>;'
		echo mysql_error();
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>LOGIN</h1>
		<table>
			<form method="post" >
				<tr>
				 <td>Username</td>
				 <td><input type="text" name="username" maxlength="255" size="20"></td>
				</tr>
				<tr>
				 <td>Password</td>
				 <td><input type="password" name="password" maxlength="255" size="20"></td>
				</tr>
				<tr>
				 <td></td>
				 <td><input type="submit" value="Log in" name="login"></td>
				</tr>	
			</form>
		</table>

</body>
</html>

