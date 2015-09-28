<?php
session_start();
?>

<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type= "text/javascript" src = "javascript/provins.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  	$(function() {
    $( "#datepicker" ).datepicker({changeMonth: true,
								   changeYear: true, 
								   yearRange:'1970:2015'});
  	});
  </script>
<script language="javascript">
function cek(){
	var password= document.getElementById('password').value;
	var password1= document.getElementById('password1').value;
	var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if(password.replace(/^\s+|\s+$/g, '')==''){
		alert('Maaf, Password Anda masih kosong  !');
		return false;
	}
	if (password != password1) {
		alert("You have entered a different password!");  
		return false;  
	}
	if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
	}
	return true;
}
</script>
</head>
<body>
	<center>
    <div id="loginform">
    <div style= "margin-top:25px;">
      <form action="registration.php" method="post">
      <table align="center" height="400" width="400" cellpadding="10">
	  <tr>
	  <td>
      <div style= "margin-left: auto;">
      <label style="color:#009688">Username </label>
      <input id="username" type="regis" name="username" size="20px" placeholder="Username" required></input></br>
      
      <label style="color:#009688"><br>Password </label> 
      <input id="password" type="regis" name="password" size="20px" placeholder="Your Password" required ></input></br>
      <input id="password1" type="regis" name="password1" size="20px" placeholder="Confirm Password" required ></input></br>
      
      <label style="color:#009688"><br>Nama Lengkap </label> 
      <input id="nama" type="regis" name="nama" size="20px" placeholder="Nama Lengkap"></br>
    	
      <label style="color:#009688"><br>Email </label> </br>
      <input id="email" type="regis" name="email" size="20px" placeholder="Your Email" ></br></br>
      
      <script language="javascript">
			populateProvins("provinsi", "state");
      </script>
      <label style="color:#009688">Place of Birth </label> </br>
      <select id="provinsi" name ="place"></select>
      <select name ="place" id ="state"></select>	
	  <script language="javascript">
			populateProvins("provinsi", "state");
	  </script></br>
		
      <label style="color:#009688"></br>
      Date of Birth &nbsp</label> </br>
      <input name="tanggal" id="datepicker" type="text1"/> </br></br>
          
<center>         
<input id="signup" type="submit" value="Sign Me Up" onClick='return cek();'/>
<input type="button" value="Sign Me In" onclick="location.href='index.php';"/>

<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) >0 ) {
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
