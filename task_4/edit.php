
<?php
include('config.php');
include('cek-login.php');
?>
<html>
<head>
<title>Update User</title>
<style type="text/css">
body {
    background-color: #d0e4fe;
}

h1 {
    color: orange;
    text-align: left;
}

p {
    font-family: "Times New Roman";
    font-size: 20px;
}
</style>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}
</style>
</head>
 
<body>
<h1>Form Update Data</h1>

 <?php
 
$user = $_GET['id'];
 
$query = mysql_query("select * from client where username='$user'") or die(mysql_error());
 
$data = mysql_fetch_array($query);
?>
 
<form name="update_data" action="update.php?id=<?php echo $data['username']; ?>" method="post">
<input type="hidden" name="username" value="<?php echo $user; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" maxlength="15" required="required" value="<?php echo $data['username']; ?>" disabled /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" maxlength="30" required="required" value="<?php echo $data['password']; ?>" /></td>
        </tr>
        <tr>
            <td>Nik</td>
            <td>:</td>
            <td><input type="text" name="nik" maxlength="12" required="required" value="<?php echo $data['nik']; ?>" /></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="30" required="required" value="<?php echo $data['nama']; ?>" /></td>
        </tr>        
        <tr>
            <td>Nomor HP</td>
            <td>:</td>
            <td><input type="text" name="nohp" maxlength="15" required="required" value="<?php echo $data['nohp']; ?>" /></td>
        </tr>
		<tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" maxlength="30" required="required" value="<?php echo $data['email']; ?>" /></td>
        </tr>
        <tr>
            <td align="right" colspan="3">
				<a href="adminPage.php">Batal</a>
				<input type="submit" name="submit" value="Simpan" />
			</td>
        </tr>
    </tbody>
</table>
</form>
<a href="adminPage.php">Lihat Data</a>
</body>
</html>