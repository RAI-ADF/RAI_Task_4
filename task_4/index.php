<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link href="style.css" type="text/css">
    <style type="text/css">
       body {
            background-color: #200;
            height: auto;
            width: auto;
        }
		p.one {
			font-size:30px;
			color: yellow;
		}
	</style>
</head>
	<body>
	<div id="main">
	<div style= "background-color :#150 " align="center">
	<p class="one">Log in</font></p>
    </div>
	<div id="login">
    <form action="login.php" method="post">

	<input id="name" name="username" placeholder="Username" type="text" required />
	<input id="password" name="password" placeholder="Password" type="password" required />
    
	<input name="login" type="submit" value="Login">
    <input name="submit" type="signup" onclick="location.href='signup-index.php';" value="Sign Up" />
    
	</form>
	</div>
	</div>
	</body>
</html>
