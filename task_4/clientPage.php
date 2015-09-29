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
			<b id="welcome">Welcome <i><?php echo $login_session; ?></i></b>
			<b id="logout"><a href="logout.php">Log Out</a></b>
		</div>
	</body>
</html>