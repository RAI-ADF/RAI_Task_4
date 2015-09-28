<?php session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
?>
<center>
 
<form action="prosesdaftar.php" method="post">
<table>
<tbody>
<tr>
<td colspan="2" align="center">
<h1>Daftar Baru</h1>
</td>
</tr>
<tr>
<td>Username</td>
<td>: <input name="username" type="text" /></td>
</tr>
<tr>
<td>Password</td>
<td>: <input name="password" type="password" /></td>
</tr>
<td>Nama</td>
<td>: <input name="nama" type="nama" /></td>
</tr>
<td>Email</td>
<td>: <input name="email" type="email" /></td>
</tr>
<td>Tempat Lahir</td>
<td>: <input name="pob" type="pob" /></td>
</tr>
<td>Tanggal Lahir</td>
<td>: <input name="dob" type="dob" /></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Daftar" /> <input type="reset" value="Batal" /></td>
</tr>
<tr>
<td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td>
</tr>
</tbody>
</table>
</form>
</center>