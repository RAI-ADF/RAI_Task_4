<?php
session_start();
?>

<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
<title>Input Form</title>
<style type="text/css">
		html {
 			width: 100% ;
  			height: 100% ;
  			background: radial-gradient(center, #FFF 0%, #CCC 70%, #CCC 100%) no-repeat;
  			background: -moz-radial-gradient(center, #FFF 0%, #CCC 70%, #CCC 100%) no-repeat;
  			background: -webkit-radial-gradient(center, #FFF 0%, #CCC 70%, #CCC 100%) no-repeat;
		}	
        #loginform {
			width: 370px;
			height: 350px;
			float: center;
			border-radius: 10px;
			background-color: white;
			font-family: "Myriad Pro", "Trebuchet MS", sans-serif;
			border: 1px solid #ccc;
			padding: 10px 30px 5px;
			margin-top: 150px;
			margin-left: 55px
		}
		input[type=submit], 
		input[type=button] {
			width:275px;
			background-color:#009688;
			color:#fff;
			border:2px solid #009688;
			padding:8px;
			font-size:15px;
			cursor:pointer;
			border-radius:10px;
			margin-bottom:2px;
			margin-top:8px
		}

		input[type=signup] {
			width:275px;
			background-color:#009688;
			color:#fff;
			border:2px solid #009688;
			padding:8px;
			font-size:15px;
			cursor:pointer;
			border-radius:10px;
			margin-bottom:2px;
			text-align:center;
			margin-top:8px
		}
		input[type=regis] {
			width: 350px;
			padding: 10px;
			margin-top: 8px;
			border: 1px solid #ccc;
			padding-left: 5px;
			font-size: 13px;
			font-family: "Myriad Pro", "Trebuchet MS", sans-serif;
		}
	</style>
</head>
<body>
	<center>
    <div id="loginform">
    <div style= "margin-top:-30px;">
      <form action="registration.php" method="post">
      <table align="center" height="400" width="400" cellpadding="10">
	  <tr>
	  <td>
      <div style= "margin-left: auto;">
      <label style="color:#009688">Address</label>
      <input id="alamat" type="regis" name="alamat" size="20px" placeholder="Address" required></input></br>
      
      <label style="color:#009688"><br>Handphone </label> 
      <input id="nohp" type="regis" name="nohp" size="20px" placeholder="08xx" required ></input></br>
<center>     
</br>  
<input id="signup" type="submit" value="S U B M I T"/>
<input type="button" value="H O M E" onclick="location.href='clientPage.php';"/>

<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) >0 ) {
	echo '<ul style="padding:0; font-size:15px; color:red;">';
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<li type="none">',$msg,'</li>'; 
	}
	echo '</ul>';
	unset($_SESSION['ERRMSG_ARR']);
}
?>
</center>
</form>
</div>
</div>
</center>
</body>
</html>
