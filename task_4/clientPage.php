<!DOCTYPE html>
<html>
<head>
	<title>Daftar Member</title>
	<style type="text/css">
		h1	{background-color:darkorange;  font-family: verdana; color: white}
		h2	{font-family: verdana; color: white;}
		h3  {font-family: verdana; color: black;}
	</style>
</head>
<body>
	<h1>FORM PESAN</h1>
	
	<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil menambah data!</h3>';
}
?>

	<form name="input_data" action="insert.php" method="post">
	<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td>:</td>
            <td><input type="password" name="confirm_password" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="name" maxlength="100" required="required" /></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>:</td>
            <td><input type="email" name="email" required="required" /></td>
        </tr>
        <tr>
            <td>Place of Birth</td>
            <td>:</td>
            <td><input type="text" name="place_of_birth" required="required" /></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>:</td>
            <td><input type="text" name="date_of_birth" maxlength="14" required="required" /></td>
        </tr>
        <tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>
</body>
</html>
