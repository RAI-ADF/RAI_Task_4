<?php
session_start();
if(session_destroy()) // Menghapus Sessions
{
	header("Location: http://localhost/rai2/index.php"); // Langsung mengarah ke Home index.php
}
?>