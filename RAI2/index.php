<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['username'])){
header ("location:login.php");
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
   <title>Menu Utama</title>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href='home.html'>Home</a></li>
   <li class='active has-sub'><a href='#'>Input</a>
      <ul>
         <li class='has-sub'><a href='#'>Contoh</a>
            <ul>
               <li><a href='#'>Contoh 1</a></li>
               <li><a href='#'>Contoh 2</a></li>
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

<script language="javascript" type="text/javascript">
 function dropdownlist(listindex)
 {

document.formname.subcategory.options.length = 0;
 switch (listindex)
 {

 case "Bali" :
 document.formname.subcategory.options[0]=new Option("Pilih Kota","");
 document.formname.subcategory.options[1]=new Option("Denpasar","Denpasar");
 document.formname.subcategory.options[2]=new Option("Tabanan","Tabanan");
 document.formname.subcategory.options[3]=new Option("Klungkung","Klungkung");

 break;

 case "Jawa Barat" :
 document.formname.subcategory.options[0]=new Option("Pilih Kota","");
 document.formname.subcategory.options[1]=new Option("Bandung","Bandung");
 document.formname.subcategory.options[2]=new Option("Bogor","Bogor");

 break;

 case "Jawa Timur" :
 document.formname.subcategory.options[0]=new Option("Pilih Kota","");
 document.formname.subcategory.options[1]=new Option("Surabaya","Surabaya");
 document.formname.subcategory.options[2]=new Option("Malang","Malang");


 break;

 }
 return true;
 }
 </script>
 </head>
 <title> Drop Down List</title>
 <body>

<form id="formname" name="formname" method="post" action="proses_input.php" >
 <table width="50%" border="0" cellspacing="0" cellpadding="5">
 <tr>
 <td width="41%" align="right" valign="middle">Pilih Provinsi :</td>
 <td width="59%" align="left" valign="middle"><select name="category" id="category" onchange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
 <option value="">Pilih Provinsi</option>
 <option value="Bali">Bali</option>
 <option value="Jawa Barat">Jawa Barat</option>
 <option value="Jawa Timur">Jawa Timur</option>
 </select></td>
 </tr>
 <tr>
 <td align="right" valign="middle">Pilih Kota :
 </td>
 <td align="left" valign="middle"><script type="text/javascript" language="JavaScript">
 document.write('<select name="subcategory"><option value="">Pilih Kota</option></select>')
 </script></td>
 </tr>
 <tr>
            <td colspan=1></td>
            <td><input type="submit" name="submit" value="Input"></td>
         </tr>
 </table>

</form>

</body>
<html>


