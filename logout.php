<?php
session_start();
if(session_destroy()) // Menghapus Sessions
{
	header("Location: index.html"); // Langsung mengarah ke Home index.php
}
?>