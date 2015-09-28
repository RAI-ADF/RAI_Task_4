<?php

session_start();
if(isset($_SESSION['username'])!="")
{
    if(isset($_SESSION['leveluser'])=="admin"){
        header("Location: adminPage.php");   
    }else{
        header("Location: clientPage.php");   
    }
}
if(!mysql_connect("127.0.0.1","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("task_rai_4"))
{
     die('oops database selection problem ! --> '.mysql_error());
}

if(isset($_POST['btn-signup']))
{
    $uname = mysql_real_escape_string($_POST['username']);
    $name  = mysql_real_escape_string($_POST['name']);
    $email = mysql_real_escape_string($_POST['email']);
    $pass = mysql_real_escape_string($_POST['password']);
    $place = mysql_real_escape_string($_POST['city']);
 
 if(mysql_query("INSERT INTO users(Username,Fullname,Email,Password,Tempat,leveluser) VALUES('$uname','$name','$email','$pass','$place','client')"))
 {
        header("Location: index.php");
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>


<body onload="load_province()">
    <div id="emptyDiv"></div>
    <div id="description"></div>
    <!--container start-->
    <div id="container">
        <div id="container_body">
        <div id="container_body">
        <div>
            <h2 class="form_title">User Registration</h2>
        </div>
            <div id="form_name">
                <div class="firstnameorlastname">
                <form method="post" validate_form(); id="register_form">
                    <div id="email_form">
                        <input type="text" name="name" id="name" placeholder="Fullname"  class="input_name" required >
                    </div>
                    <div id="password_form">
                        <input type="password" name="password" id="password" class="input_password" placeholder="Password" required>
                    </div>
                    <div id="password_form">
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter Password" class="input_password" required>
                    </div>
                    <div id="email_form">
                        <input type="email" name="email" id="email" class="input_email" placeholder="Your Email" required>
                    </div>
                    <div id="email_form">
                        <input type="text" name="username" id="username" class="input_email" placeholder="Username" required>
                    </div>
                    
                    <label for="place_of_birth">Place Of Birth</label>
                    <div id="email_form">
                        <select name="province" id="province" onchange="load_city();" required>
                            <option selected disabled>Choose a province</option>
                        </select>
                        <select name="city" id="city" required>
                            <option disabled>Choose a city</option>
                        </select>
                    </div>
                    
                    <label for="date_of_birth">Data Of Birth</label>
                    <div id="email_form">
                        <input type="date" id="date" name="date_of_birth" required>
                    </div>
                    
                    <input id="sign_user" type="submit" name="btn-signup" value="Register">
                </form>
                </div>
            </div>
        </div>
    </div>
        
	<script type="text/javascript">
        
        var ajaxRequest;
        
		function validate_password () {
			var password = document.getElementById('password').value;
			var confirm_password = document.getElementById('confirm_password').value;

			if(password.length == 0 || password == ""){
				return false;
			} else if (confirm_password.length == 0 || confirm_password == "") {
				return false;
			} else {
				return(password == confirm_password);
			}
		}

		function validate_email () {
			var pattern = /^[a-z][\w_]*@[a-z0-9]+(\.[a-z]+)+$/;
			var email = document.getElementById('email').value;

			return email.match(pattern);
		}

		function validate_form () {
			var pass_check = validate_password();
			var email_check = validate_email();

			if(pass_check && email_check){

				document.getElementById('register_form').submit();
				return true;

			} else {
				var msg = "Data yang anda masukkan tidak valid! \nalasan :\n";

				if(!pass_check){
					msg += "password anda tidak sama\n";
				}

				if(!email_check){
					msg += "email anda tidak valid\n";
				}

				alert(msg);
				return false;
			}
		}

		function load_province () {
			var province = document.getElementById('province');
			
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
			var province = document.getElementById('province').value;
			
			create_ajax_request("GET", "get_city.php?province=" + province, "", 
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
}
	</script>

</body>

</html>
