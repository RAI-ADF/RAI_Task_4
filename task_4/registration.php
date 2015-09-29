<?php
	session_start();
	if(isset($_SESSION['username'])!="")
	{
		if(isset($_SESSION['status'])=="admin"){
			header("Location: adminPage.php");   
		}else{
			header("Location: clientPage.php");   
		}
	}
	include_once 'dbconfig.php';
	
	if(isset($_POST['btn-submit']))
	{
		$uname = mysql_real_escape_string($_POST['username']);
		$pass = md5(mysql_real_escape_string($_POST['password']));
		$name = mysql_real_escape_string($_POST['name']);
		$email = mysql_real_escape_string($_POST['email']);
		$place = mysql_real_escape_string($_POST['city']);
		$date = mysql_real_escape_string($_POST['datepicker']);
		
		if(mysql_query("INSERT INTO user(user_id, username, password, name, email, place, dateofbirth) VALUES ('', '$uname', '$pass', '$name', '$email', '$place', '$date')"))
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}
	}
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
	<!-- css register and validation -->
	<link rel="stylesheet" type="text/css" href="../css/register-css.css">
    <link rel="stylesheet" type="text/css" href="/code_examples/tutorial.css">
	<script type="text/javascript" src="/code_examples/passtest.js"></script>
	<!-- start jQuery datepicker -->
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
   	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 
	<script type="text/javascript">
		var ajaxRequest;
    
		$(function() {
        	$("#datepicker").datepicker({
			dateFormat: "yy-mm-dd", 
			changeMonth: true,
			changeYear: true
			}).val()
       	
		function load_prov () {
			var province = document.getElementById('prov');
			
			create_ajax_request("GET", "get_city.php", "", 
				function(response) {
					province.innerHTML += response;
				},

				function() {
					alert('Terjadi kesalahan ketika mengambil data provinsi');
				}
			);
		}

		function load_city () {
			var province = document.getElementById('prov').value;
			
			create_ajax_request("GET", "get_city.php?prov=" + province, "", 
				function(response) {
					document.getElementById('city').innerHTML = response;
				},

				function() {
					alert('Terjadi kesalahan ketika mengambil data kota');
				}
			);
		}
			function create_ajax_request(method, url, data, on_success, on_fail) {
	
		if (window.XMLHttpRequest) {
			ajaxRequest = new XMLHttpRequest();
		} else {
			ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
		}
	
		ajaxRequest.onreadystatechange = function(){
	
			if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
				var response = ajaxRequest.responseText;
				on_success(response);
			} else if (ajaxRequest.readyState == 4) {
				on_fail();
			}
	
		};
	
		ajaxRequest.open(method, url, true);
		ajaxRequest.send(data);
		});
    </script>
    <!-- end jQuery datepicker -->
   	<!--  start javascript validation email and password -->
	<script language="javascript">
		function checkEmail() {

		var email = document.getElementById('email');
		var message = document.getElementById('validEmail');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var goodColor = "#66cc66";
		var badColor = "#ff6666";	
			if (!filter.test(email.value)) {
				email.style.backgroundColor = badColor;
				message.style.color = badColor;
				message.innerHTML = "Please provide a valid email address!"
			}else{
				email.style.backgroundColor = goodColor;
				message.style.color = goodColor;
				message.innerHTML = "Email Valid!"
			}
		}
		
		function checkPass() {
			//Store the password field objects into variables ...
			var pass1 = document.getElementById('password');
			var pass2 = document.getElementById('co-password');
			//Store the Confimation Message Object ...
			var message = document.getElementById('confirmMessage');
			//Set the colors we will be using ...
			var goodColor = "#66cc66";
			var badColor = "#ff6666";
			//Compare the values in the password field 
			//and the confirmation field
			if(pass1.value == pass2.value){
				//The passwords match. 
				//Set the color to the good color and inform
				//the user that they have entered the correct password 
				pass2.style.backgroundColor = goodColor;
				message.style.color = goodColor;
				message.innerHTML = "Passwords Match!"
			}else{
				//The passwords do not match.
				//Set the color to the bad color and
				//notify the user.
				pass2.style.backgroundColor = badColor;
				message.style.color = badColor;
				message.innerHTML = "Passwords Do Not Match!"
			}
		}  
    </script>
    <!--  end javascript validation email and password -->
</head>

<body onLoad="load_prov()">
	<form id="register">
        <h1>Register</h1>
        <fieldset id="inputs">
            <input id="username" type="text" placeholder="Username" autofocus="" required="">   
            <input id="password" type="password" placeholder="Password" required="">
            <input id="co-password" type="password" placeholder="Confirm Password" required="" onKeyUp="javascript:checkPass();">
            <span id="confirmMessage" class="confirmMessage"></span>
            <input id="name" type="text" placeholder="Name" required="">
        	<input id="email" type="text" placeholder="Email" required="" onKeyUp="javascript:checkEmail();">
            <span id="validEmail" class="validEmail"></span>
            <div class="form-group">
                <div align="center">
                   	<select name="prov" id="prov" onchange="load_city();" required>
                        <option selected>Choose a province</option>
                    </select>
                    <select name="city" id="city" required>
                        <option>Choose a city</option>
                    </select>
                </div>
            </div>
            <div align="center">
              <input id="datepicker" type="text" placeholder="Date of Birth" required="">
                </div>
        </fieldset>
        <fieldset id="actions">
        <input type="button" id="submit" name="btn-submit" value="Register">
        </fieldset>
</form>
</body>
</html>