<?php

session_start();

if(isset($_SESSION['username']) && isset($_SESSION['is_admin'])){
	
	if($_SESSION['is_admin'] == true){
		header("Redirect:adminPage.php");
	} else if ($_SESSION['is_admin'] == false){
		header("Redirect:clientPage.php");
	}

	die();
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>


<body onload="load_province()">

	<h1>Registration Page</h1>
	<form action="do_register.php" method="post" onsubmit="event.preventDefault(); validate_form();" id="register_form">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" required>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" required>
		<label for="confirm_password">Confirm Password</label>
		<input type="password" name="confirm_password" id="confirm_password" required>
		<label for="email">Email</label>
		<input type="email" name="email" id="email" required>
		<label for="name">Name</label>
		<input type="text" name="name" id="name" required>
		<label for="place_of_birth">Place Of Birth</label>
		<select name="province" id="province" onchange="load_city();" required>
			<option selected disabled>Choose a province</option>
		</select>
		<select name="city" id="city" required>
			<option disabled>Choose a province</option>
		</select>
		<label for="date_of_birth">Data Of Birth</label>
		<input type="date" name="date_of_birth" required>
		<input type="submit" value="Register">
	</form>

	<script type="text/javascript" src="ajax_request.js"></script>
	<script type="text/javascript">

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
	</script>

</body>

</html>
