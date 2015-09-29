<?php
	session_start();

	if(!isset($_SESSION['guest'])){
		echo '<script language="javascript">
		alert("Akses dilarang! Silahkan login terlebih dahulu");
		document.location="index.php";
		</script>';
	}
?>
