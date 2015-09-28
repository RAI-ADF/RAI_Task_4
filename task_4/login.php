<!DOCTYPE html>
<html>
<head>
	<title>コーヒーパンダ</title>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
	<link rel="Shortcut icon" href="panda.ico">
	<link href="style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            background-color: black;
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
		<div style= "background-color:black" align="center">
			<img src="panda.png" align="center"/>
	<p class="one">ハロー</font></p>
    </div>
	<div id="login">
    <form action="_login.php" method="post">

	<input id="name" name="username" placeholder="Username" type="text" required />
	<input id="password" name="password" placeholder="Password" type="password" required />

	<input name="login" type="submit" value=" Login ">
    <input name="submit" type="signup" onclick="location.href='registration.php';" value="Sign Up" />

	</form>
	</div>
	</div>
	</body>
</html>
