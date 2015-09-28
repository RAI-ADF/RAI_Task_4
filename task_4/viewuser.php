<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/css/style.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <title>Admin Page</title>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href='adminPage.php'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>View</span></a>
      <ul>
         <li class='last'><a href='viewuser.php'><span>View Users</span></a>
         </li>
         <li class='last'><a href='viewdata.php'><span>View Data</span></a>
         </li>
      </ul>
   </li>
   <li><a href='logout.php'><span>Logout </span></a></li>
</ul>
</div>
<div id="bodytopmainPan">
<div id="bodytopPan">
	<?php
	include 'koneksi.php';
		$tampil = mysql_query("SELECT * FROM users  ORDER BY Username");
		echo "<table class='list'><thead>
          <tr>
          <td class='left'>username</td>
          <td class='left'>nama lengkap</td>
          <td class='left'>email</td>
		  <td class='left'>Tempat </td>
		  <td class='left'>Tgl.Lahir</td>
          <td class='left'>level</td>
          </tr></thead><tbody>";
		  echo " <h2>Data User</h2>";
		   while ($r=mysql_fetch_array($tampil)){
       echo "  <tr><td class='left'>$r[Username]</td>
             <td class='left'>$r[Fullname]</td>
		         <td class='left'><a href=mailto:$r[Email]>$r[Email]</a></td>
				 <td class='left'>$r[Tempat]</td>
				  <td class='left'>$r[Tanggal]</td>
				 <td class='left'>$r[leveluser]</td></tr>";
				 }
	?>
  
	
</div>
</div>
</body>
</body>

<script type="text/javascript">
    ( function( $ ) {
    $( document ).ready(function() {
    $('#cssmenu').prepend('<div id="menu-button">Menu</div>');
        $('#cssmenu #menu-button').on('click', function(){
            var menu = $(this).next('ul');
            if (menu.hasClass('open')) {
                menu.removeClass('open');
            }
            else {
                menu.addClass('open');
            }
        });
    });
    } )( jQuery );
</script>
<html>
