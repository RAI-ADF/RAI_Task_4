<?php
require_once("connect.php");

$sql = "SELECT username_u, nama_user, email_user, provinsi_user, kota_user, dob_user FROM userdb  WHERE 1 ORDER BY userid asc";
$rs = mysqli_query($conn,$sql);
$result = '';

//Build Result String
$result = "<table>"; 
$result .= "<tr><th>Username</th>";
$result .= "<th>Nama</th>";
$result .= "<th>Email</th>";
$result .= "<th>Provinsi</th>";
$result .= "<th>Kota</th>";
$result .= "<th>Tanggal Lahir</th></tr>";
// Insert a new row in the table for each person returned
while ($res = mysqli_fetch_array($rs)){
   $result .= "<tr>";
   $result .= "<td>$res[username_u]</td>";
   $result .= "<td>$res[nama_user]</td>";
   $result .= "<td>$res[email_user]</td>";
   $result .= "<td>$res[provinsi_user]</td>";
   $result .= "<td>$res[kota_user]</td>";
   $result .= "<td>$res[dob_user]</td>";
   $result .= "</tr>";
}
$result .= "</table>";
echo $result;
?>
