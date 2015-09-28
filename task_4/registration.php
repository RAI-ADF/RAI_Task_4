<?php 
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['admin'])){ 
		if($_SESSION['admin'] == true){ 
 			header("Redirect:adminPage.php"); 
 		} else if ($_SESSION['admin'] == false){ 
 			header("Redirect:clientPage.php"); 
 		}
 		die();
 	}
 ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body onload="load_provinsi()">
	<div class="container">
		<div class="main">
			<form action="register.php" method="post" onsubmit="event.preventDefault(); validate();" id="form_register">
				<h1>REGISTRATION</h1><hr>
				<label>Username :</label>
				<input type="text" name="username" id="user" required>

				<label>Password :</label>
				<input type="password" name="pass" id="pass" required>

				<label>Confirm Password :</label>
				<input type="password" name="confpass" id="confpass" required>
				
				<label>Name :</label>
				<input type="text" name="name" id="name" required>

				<label>Place of Birth :</label>
				<select name="provinsi" id="provinsi" onchange="load_kota();" required>
					<option selected disabled>Choose a Province</option>
				</select>
				<select name="kota" id="kota" required>
					<option disabled>Choose a City</option>
				</select>

				<br><br><label>Date of Birth :</label>
				<input type="date" name="date" id="date" required>


				<br><label for="email">Email :</label> 
				<input type="email" name="email" id="email" required> 

				<input type="submit" value="Submit">
			</form>
		</div>
	</div>

	<script type="text/javascript" src="ajax_request.js"></script>
	<script type="text/javascript">
		function valid_mail(){
			var pattern = /^[a-z][\w_]*@[a-z0-9]+(\.[a-z]+)+$/;
			var mail = document.getElementById('email').value;

			return mail.match(pattern);
		}

		function valid_pass(){
			var pass = document.getElementById('pass').value;
			var conf = document.getElementById('confpass').value;
			if (pass.length == 0 || pass == "") {
				return false;
			}else if (conf == 0 || conf == "") {
				return false;
			} else{
				return (pass==conf);
			}
		}


		function validate(){
			var valpass = valid_pass();
			var valmail = valid_mail();

			if (valmail && valpass){
				document.getElementById('form_register').submit();
				return true;
			} else {
				var msg = "Failed! "
				if(!valmail){
					msg += "Email doesn't valid!\n";
				}
				if(!valpass){
					msg += "Password doesn't match!\n";
				}
				alert(msg);
				return false;
			}
		}

		function load_provinsi () { 
 			var provinsi = document.getElementById('provinsi'); 
 			 
 			create_ajax_request("GET", "get_kota.php", "",
 				function(response) { 
 					provinsi.innerHTML += response; 
 				}, 
  				function() { 
 					alert('Fail load province'); 
 				}
 			);
 		} 
  
 		function load_kota () { 
 			var provinsi = document.getElementById('provinsi').value; 
 			 
 			create_ajax_request("GET", "get_kota.php?province=" + provinsi, "", function(response) { 
 					document.getElementById('kota').innerHTML = response; 
 				},
  
 				function() { 
 					alert('Fail load city'); 
 				} 
 			); 
 		} 
	</script>
</body>
</html>