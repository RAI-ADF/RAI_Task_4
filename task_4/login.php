<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="assets/js/login.js">
		
	</script>
</head>
<body>
	<h1>Login</h1>
	<div>
		<form action="_login.php" method="post">
			<div>
				<label>username</label>
				<input id="username" type="text" name="username" placeholder="username">
			</div>
			<div>
				<label>password</label>
				<input id="password" type="password" name="password" placeholder="password">
			</div>
			<div id="error"></div>
			<div>
				<button type="button" onclick="ajaxFunction()">sign in</button>
			</div>
		</form>
	</div>
</body>
</html>
