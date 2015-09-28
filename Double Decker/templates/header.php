<?php
$isLogin = false;
if (isset($_COOKIE["username"])){
	$isLogin = true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Double Decker</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<body>
	<div id="header" class="full-width">
		<div class="fix-width act-table">
			<div class="act-cell">
				<a href="index.php"><img src="assets/img/logo.png" id="logo"></a>
			</div>
			<div class="act-cell">
				<ul>
					<a href="index.php"><li>Home</li></a>
					<a href="about.php"><li>About</li></a>
					<a href="contact_us.php"><li>Contact Us</li></a>
					<?php
						if ($isLogin==true){
					?>
					<a href="controller/do_logout.php"><li>Logout</li></a>
					<?php
						}else
						{
					?>
					<a href="registration.php"><li>Register Now</li></a>
					<a href="login.php"><li>Login</li></a>
					<?php
						}
					?>
					
				</ul>
			</div>
		</div>
	</div>
	<div id="site-content">