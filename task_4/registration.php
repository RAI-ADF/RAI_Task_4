<?php
session_start();
?>

<!DOCTYPE>
<html>
<head>
  <title>コーヒーパンダ</title>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
  <link rel="Shortcut icon" href="panda.ico">
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" type="text/css" />
  <style type="text/css">
    body {
        background-color: black;
        height: auto;
        width: auto;
    }
p.one {
  font-size:30px;
  color: white;
}
</style>
<!-- reference for form : https://jqueryui.com/datepicker/ -->
<script type= "text/javascript" src = "dropdown.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  	$(function() {
    $( "#datepicker" ).datepicker({changeMonth: true,
								   changeYear: true,
								   yearRange:'1950:2015'});
  	});
  </script>
<script language="javascript">
function cek(){
	var password= document.getElementById('password').value;
	var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if(password.replace(/^\s+|\s+$/g, '')==''){
		alert('Fill your password, please ..');
		return false;
	}

	if (!filter.test(email.value)) {
    alert('Check again, your email address is invalid');
    email.focus;
    return false;
	}
	return true;
}
</script>
</head>
<body>
	<center>
    <div id="signupform">
      <b><label style="font-size:30px"> Registration Form </label></b>
    <div style= "margin-top:10px;">
      <form action="_registration.php" method="post">
      <table align="center" height="400" width="400" cellpadding="20">
	  <tr>
	  <td>
      <div style= "margin-left: auto;">

      <b><label style="color:#0d0e0e"><br>Full Name </label></b>
      <input id="nama" type="regis" name="nama" size="20px" placeholder="Name"></br>

      <b><label style="color:#0d0e0e">Username </label></b>
      <input id="username" type="regis" name="username" size="20px" placeholder="Username" required></input></br>

      <b><label style="color:#0d0e0e"><br>Password </label></b>
      <input id="password" type="regis" name="password" size="20px" placeholder="Your Password" required ></input></br>

      <b><label style="color:#0d0e0e"><br>Email </label> </br></b>
      <input id="email" type="regis" name="email" size="20px" placeholder="example@gmail.com" ></br></br>

      <script language="javascript">
			populateProvince("province", "city");
      </script>

      <b><label style="color:#0d0e0e">Place of Birth </label></b> </br>
      <select id="province" name ="place"></select>
      <select name ="place" id ="city"></select>
	  <script language="javascript">
			populateProvince("province", "city");
	  </script></br>

      <b><label style="color:#0d0e0e"></br>
      Date of Birth &nbsp</label> </b></br>
      <input name="tanggal" id="datepicker" type="text1"/> </br></br>

<center>
<input id="signup" type="submit" value="Sign Up" onClick="return cek(); window.location.href='login.php'"/>

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
