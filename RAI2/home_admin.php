<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['usernamead'])){
header ("location:login_admin.php");
}
?>

<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Menu Utama Admin</title>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href='#'>Home Admin</a></li>
   <li class='active has-sub'><a href='#'>Hasil input</a>
      <ul>
         <li class='has-sub'><a href='#'>Contoh</a>
            <ul>
               <li><a href='hasil.php'>Hasil input user</a></li>
               <li><a href='view_user.php'>View user table</a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'>Example</a>
            <ul>
               <li><a href='#'>Example 1</a></li>
               <li><a href='#'>Example 2</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'>About</a></li>
   <li><a href='#'>Contact</a></li>
</ul>
</div>
</body>
<html>


