<?php

session_start();

if(isset($_SESSION['username']) && isset($_SESSION['is_admin'])){
	
	
} else {
	header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>


<body>
	
</body>

</html>
