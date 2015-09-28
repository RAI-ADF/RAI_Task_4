<?php
session_start();
if($_SESSION['username'] == 'admin'){
	echo "this is admin page";
	echo "<br/>";
	echo "welcome ";
	echo @$_SESSION['username'];

}else{
	header("Location: index.php");
}


?>
