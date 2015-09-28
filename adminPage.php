<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

Selamat Datang   <?php echo $_SESSION['username'];?>
<a href="logout.php"> Logout</a>;

</body>
</html> 

