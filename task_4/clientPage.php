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
         <li class='last'><a href='inputform.php'><span>Input Form</span></a>
         </li>
      </ul>
   </li>
    <li><a href='logout.php'><span>Logout </span></a></li>
</ul>
</div>
<div id="bodytopmainPan">
<div id="bodytopPan">
	<h1>Welcome</h1>
    <h2>Client Page</h2>
    <p>Silahkan pilih menu input</p>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
	
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
