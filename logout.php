<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
	session_start();
	session_destroy();
	header('location:indeks.php');
?>
</body>
</html>
