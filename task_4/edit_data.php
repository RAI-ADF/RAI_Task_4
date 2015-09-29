<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM user WHERE id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 
 //Untuk mendapatkan hasil baris/record yang digambarkan dalam bentuk array
 $fetched_row=mysql_fetch_array($result_set); 
}
if(isset($_POST['btn-update']))
{
 // variabel yang digunakan untuk input data
 $username = $_POST['username'];
 $password = $_POST['password'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $tempat_lahir = $_POST['tempat_lahir'];
 $tanggal_lahir = $_POST['tanggal_lahir']; // variabel yang digunakan untuk input data

 // query untuk menyisipkan data kedalam database
 $sql_query = "UPDATE user SET username='$username',password='$password',name='$name', email='$email', place='$tempat_lahir', date_born='$tanggal_lahir' WHERE id=".$_GET['edit_id'];
 // query untuk menyisipkan data kedalam database
 
 // fungsi untuk mengeksekusi query di sql
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='adminPage.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // fungsi untuk mengeksekusi query di sql
}
if(isset($_POST['btn-cancel']))
{
 header("Location: adminPage.php");
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Edit User</title>
<link rel="stylesheet" href="style2.css" type="text/css" /> <!-- link ke style.css -->
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Halaman Edit User</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="username" placeholder="Username" value="<?php echo $fetched_row['username']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="password" placeholder="Password" value="<?php echo $fetched_row['password']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="Nama" value="<?php echo $fetched_row['name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="tempat_lahir" placeholder="Tempat lahir" value="<?php echo $fetched_row['place']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="tanggal_lahir" placeholder="Tanggal lahir" value="<?php echo $fetched_row['date_born']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>Update</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>