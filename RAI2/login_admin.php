<?php
include "koneksi.php";
?>
<html>
	<head>
		<title>LOGIN ADMIN</title>
	</head>
	<body>
		<form method="post" name="login_admin" action="cek_login_admin.php">
		<table border=0 align="center" cellpadding=5 cellspacing=0>
		<tr>
			<td colspan=3><center><font size=5>LOGIN ADMIN</font></center></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="usernamead"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="passwordad"></td>
		</tr>
		<tr>
			<td colspan=2></td>
		<td><input type="submit" name="submit" value="LOGIN"></td>
		</tr>
		</table>
		</form>
	</body>
</html>