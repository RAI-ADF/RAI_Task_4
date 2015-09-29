<!DOCTYPE html5>
<html>
	<head>
		<title>Index Page</title>
		<link rel="stylesheet" href="style1.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="main">
			<div id="loginbox">
				<span>LOGIN</span>
				<form action="login.php" method="post">
				
				<input id="username" name="username" placeholder="Username" type="text">
				<input id="password" name="password" placeholder="**********" type="password">
				<input name="submit" type="submit" value="LOGIN ">
				<input name="register" type="button" onclick="location.href='registration.php';" value="REGISTER" />
			</div>
							
			<div id="bottomtext">
				rastaufiq production<sup>&copy</sup>
			</div>
		</div>
	</body>
</html>
