<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','dynamicweb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Nama</th>
<th>Username</th>
<th>Password</th>
<th>Email</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['pwd1'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['tempatlahir'] . "</td>";
    echo "<td>" . $row['datepicker'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>