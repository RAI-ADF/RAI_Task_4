<?php
session_start();
session_destroy();

echo '<script language="javascript">alert("Youre leaving now, take care !"); document.location="login.php";</script>';
?>
