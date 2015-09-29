<?php
	require('clientAuth.php')
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Client Page</title>
		<link href="style1.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div id="main">
			<div style="text-align:center">Welcome!</div>

			<input id="logout" type="button" onclick="location.href='logout.php';" value="Logout" />
		</div>
	</body>
</html>