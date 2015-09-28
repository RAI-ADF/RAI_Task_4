<?php
session_start();

if(!isset($_SESSION['guest'])){
	echo '<script language="javascript">alert("You Shall Not Pass!"); document.location="login.php";</script>';
}
?>
