<?php
session_start();
session_destroy();
setcookie('username', '', time() - 1*24*60*60);
setcookie('password', '', time() - 1*24*60*60);
echo '<script language="javascript">alert("Anda berhasil Logout!"); document.location="index.php";</script>';
?>
