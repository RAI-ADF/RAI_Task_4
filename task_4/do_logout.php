<?php

session_start();
session_destroy();
header("Location:index.php");
setcookie("username", "", time() - 3600);