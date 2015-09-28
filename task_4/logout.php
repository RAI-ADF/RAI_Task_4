<?php
session_start();
session_destroy();
header("location:indeks.php?info=logout");
?>