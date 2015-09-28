<?php
	setcookie("userid", "", time() + (86400 * 30) * -1, "/");
	setcookie("level", "", time() + (86400 * 30) * -1, "/");
	header("location: login.php");
?>