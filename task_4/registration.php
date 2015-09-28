<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#datepicker" ).datepicker({
				dateFormat: 'yy-mm-dd'
			});
		});
	</script>
	<script src="assets/js/registrationValidation.js" type="text/javascript"></script>
</head>
<body>
	<?php include 'layout/header.php'; ?>
	<div class="content">
		<h1>registration</h1>
		<div>
			<form action="_registration.php" method="post" onsubmit="retun validateForm()">
				<div>
					<label>username</label>
					<input id="username" type="text" name="username" placeholder="username" />
					<div id="usernameError" class="error-message"></div>
				</div>
				<div>
					<label>password</label>
					<input id="password" type="password" name="password" placeholder="password">
					<div id="passwordError" class="error-message"></div>
				</div>
				<div>
					<label>re-password</label>
					<input id="re-password" type="password" name="re-password" placeholder="retype password" onblur="validatePassword()" >
					<div id="repasswordError" class="error-message"></div>
				</div>
				<div>
					<label>name</label>
					<input id="name" type="text" name="name" placeholder="fullname">
					<div id="nameError" class="error-message"></div>
				</div>
				<div>
					<label>email</label>
					<input id="email" type="email" name="email" placeholder="email" onblur="validateEmail()">
					<div id="emailError" class="error-message"></div>
				</div>
				<div>
					<label>place of birth</label>
					<select id="province" name="province" onchange="cityOption()">
						<option id="jawa" value="jawa barat">jawa barat</option>
						<option id="sulawesi" value="sulawesi selatan">sulawesi selatan</option>
					</select>
					<select id="city" name="city">
						<option id="jawa" value="bandung">bandung</option>
						<option id="jawa" value="garut">garut</option>
					</select>
				</div>
				<div>
					<label>date fo birth</label>
					<input id="datepicker" type="text" name="date" placeholder="">
				</div>
				<div>
					<button type="submit" onclick="return validateForm()">submit</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
