<!-- copyright 2015 @ Sang Made Naufal 1103120146 -->

<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: h1-menulogin.php"); // Redirecting To Home Page
}
?>