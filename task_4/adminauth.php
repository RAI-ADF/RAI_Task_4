<?php
session_start();

if(!isset($_SESSION['admin'])){
	echo '<script language="javascript">alert("You Shall Not Pass!"); document.location="login.php";</script>';
}
?>
