<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link href="style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            background-color: #333;
            height: auto;
            width: auto;
        }
		p.one {
			font-size:30px;
			color: white;
		}
	</style>
</head>
	<body>
	<div id="main">
	<div style= "background-color :#333 " align="center">
	<p class="one">Sign In</font></p>
    </div>
	<div id="login">
    <form action="login.php" method="post">

	<input id="name" name="username" placeholder="Username" type="text" required />
	<input id="password" name="password" placeholder="Password" type="password" required />
    
	<input name="login" type="submit" value=" Login ">
    <input name="submit" type="signup" onclick="location.href='regis-index.php';" value="Sign Up" />
    
	</form>
	</div>
	</div>
	</body>
</html>
