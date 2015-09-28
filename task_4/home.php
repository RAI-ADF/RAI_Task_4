<?php include('auth.php'); ?>

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
<p class="one">ハロー</font></p></br>
<p class="one">おめでとうございます ! ! !</font></p>

<input id="logout" type="button" onclick="location.href='logout.php';" value="Logout" />
	</div>
</div>
</div>
</body>
</html>
