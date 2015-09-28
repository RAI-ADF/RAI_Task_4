<?php
include('config.php');
include('cek-login.php');
?>
 
<html>

<head>
<title>Admin</title>
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
<h1>Welcome Admin</h1>

 
<body>
<h1>Data Client</h1>
<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil mengupdate data user!</h3>';
}
else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
    echo '<h3>Berhasil menghapus data user!</h3>';
}
else if (!empty($_GET['message']) && $_GET['message'] == 'baru') {
    echo '<h3>Berhasil menambah data user!</h3>';
}
?>
<a href="index.php">+ Tambah User</a>
<table border="2" cellpadding="6" cellspacing="1">
    <thead>
        <tr align="center">
            <td><b>Nomor</b></td>
            <td><b>Username</b></td>
            <td><b>Password</b></td>
            <td><b>Nik</b></td>
            <td><b>Nama</b></td>            
            <td><b>No. HP</b></td>
            <td><b>Email</b></td>
            
        </tr>
    </thead>
    <tbody>
    <?php
    $query = mysql_query("select * from client");
 
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr align="center">
            <td><?php echo $no; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['nik']; ?></td>
            <td><?php echo $data['nama']; ?></td>        
            <td><?php echo $data['nohp']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['username']; ?>">Edit</a> ||
                <a href="delete.php?id=<?php echo $data['username']; ?>">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
</br></br></br>

<form  method="post" name="logout" action="logout.php">
    <input type="submit" name="logout" value="Logout" />
</form>



</body>
</html>