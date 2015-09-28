<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link href="index.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            background-color: #2c3e50;
            height: auto;
            width: auto;
        }
		p.one {
			font-size:50px;
			color: white;
		}
	</style>
</head>
	<body>
	<div id="main">
	<div style= "background-color :#2c3e50 " align="center">
	<p class="one">Welcome!</font></p>
    </div>
	<div id="login">
    <form action="login.php" method="post">

	<input id="name" name="username" placeholder="Username" type="text" required />
	<input id="password" name="password" placeholder="Password" type="password" required />
    <input style="margin-left:112px; margin-top:10px" type="checkbox" name="admin_check" value="yes"><label>Login as Administrator</label>
	<input name="login" type="submit" value=" Login ">
    <input style="margin-bottom:8px" name="submit" type="signup" onclick="location.href='registration.php';" value="Sign Up" />
   
    
	</form>
	</div>
	</div>
	</body>
</html>
