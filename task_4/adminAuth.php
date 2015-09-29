<?php
	session_start();

	if(!isset($_SESSION['admin'])){
		echo '<script language="javascript">
			alert("Akses dilarang! Silahkan login terlebih dahulu");
			document.location="index.php";
			</script>';
	}
?>
