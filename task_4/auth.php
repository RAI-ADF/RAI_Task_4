<?php
session_start();
if(!isset($_SESSION['admin']) or !isset($_SESSION['guest'])){
	echo '<script language="javascript">alert("You must login first!"); document.location="login.php";</script>';
}
?>