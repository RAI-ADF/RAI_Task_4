<?php
session_start();
session_destroy();
echo '<script language="javascript">alert("Logged out"); document.location="index.php";</script>';
?>
