<?php
require_once("configure.php");

$sql = "SELECT username, nama, email, place, tanggal FROM user  WHERE 1 ORDER BY id asc";
$rs = mysqli_query($connection,$sql);
$result = '';

//Build Result String
$result = "<table>"; 
$result .= "<tr><th>Username</th>";
$result .= "<th>Name</th>";
$result .= "<th>Email</th>";
$result .= "<th>Place of Birth</th>";
$result .= "<th>Date of Birth</th></tr>";
// Insert a new row in the table for each person returned
while ($res = mysqli_fetch_array($rs)){
   $result .= "<tr>";
   $result .= "<td>$res[username]</td>";
   $result .= "<td>$res[nama]</td>";
   $result .= "<td>$res[email]</td>";
   $result .= "<td>$res[place]</td>";
   $result .= "<td>$res[tanggal]</td>";
   $result .= "</tr>";
}
$result .= "</table>";
echo $result;
?>
