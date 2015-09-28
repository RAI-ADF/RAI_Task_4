<?php
	session_start();
	session_destroy();
	setcookie("username",null,time()-3600,"/");
	setcookie("session_id",null,time()-3600,"/");
	header("location:../index.php");
	exit();