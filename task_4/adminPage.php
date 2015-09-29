<?php
$host = "localhost";
$user = "root";
$password = "";

//nama database
$datbase = "database"; 

//query untuk menghubungkan kedalam database
mysql_connect($host,$user,$password);
mysql_select_db($datbase);

// kondisi untuk men-delete_id
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM user WHERE id=".$_GET['delete_id'];
 mysql_query($sql_query); 
 header("Location: $_SERVER[PHP_SELF]");
}

//kondisi untuk logout
if(isset($_POST['btn-logout']))
{
 header("Location: index.php");
}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Admin</title>
<link rel="stylesheet" href="style2.css" type="text/css" /> <!-- link ke style.css -->
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Datanya mau diganti ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Yakin pengen dihapus ?'))
 {
  window.location.href='adminPage.php?delete_id='+id;
 }
}
</script>
</head>
<html>
	<head><title>Halaman Admin </title></head>
<body>
<center>

<div id="header">
	<div id="content">
	    <label>Halaman Admin</label>
	</div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="9">Daftar User</th>
    </tr>
    <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Name</th>
    <th>Email</th>
    <th>Place</th>
    <th>Date Born</th>
    <th colspan="2">Operasi</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM user";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="asset/b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="asset/b_delete.png" align="HAPUS" /></a></td>
        </tr>       

        <?php
 }
 ?>
    </table>
    </div>
<a href = "logout.php"><button><strong>Logout</strong></button></a>
</div>
</center>
</body>
</html>