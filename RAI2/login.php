<?php
include "koneksi.php";
?>
<html>
	<head>
		<title>LOGIN</title>
	</head>
	<body>
		<form method="post" name="login" action="cek_login.php">
		<table border=0 align="center" cellpadding=5 cellspacing=0>
		<tr>
			<td colspan=3><center><font size=5>LOGIN</font></center></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan=2></td>
		<td><input type="submit" name="submit" value="LOGIN"></td>
		</tr>
		<tr>
			<td><a href="daftar.php">DAFTAR</a></td>
			<td></td>
			<td><a href="login_admin.php">LOGIN ADMIN</a></td>
		</tr>
		</table>
		</form>
	</body>
</html>

