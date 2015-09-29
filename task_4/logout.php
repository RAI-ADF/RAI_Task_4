<?php
	session_start();
	session_destroy();
	 
	echo '<script language="javascript">
	alert("Logout Berhasil !"); document.location="index.php";
	</script>';
?>
