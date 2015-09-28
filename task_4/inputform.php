<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/css/style.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <title>Client Page</title>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href='clientPage.php'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Input</span></a>
      <ul>
         <li class='last'><a href='#'><span>Input Form</span></a>
         </li>
      </ul>
   </li>
    <li><a href='logout.php'><span>Logout </span></a></li>
</ul>
</div>
<div id="bodytopmainPan">
<div id="bodytopPan">
<?php
session_start();
$aksi="/aksi_input.php";
	 echo " <h2>Input Data Disini</h2>";
	echo " <form method=POST action='aksi_input.php'>
          <table class='list'><tbody>
         <tr><td></td>  <td> <textarea name='isi' id='isi' style='width: 800px; height: 350px;'></textarea></td></tr>";
    echo "</td></tr>
          <tr><td class='left' colspan=2><input type=submit value=Simpan >
          <input type=button value=Batal onclick=self.history.back()></td></tr>
          </tbody></table></form>";
?>
</div>
</div>

<div id="footermainPan">
  <div id="footerPan">
  	<p class="copyright">©Surya Saputra - 1103124304.</p>
  	<ul class="templateworld">
    </ul>
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
