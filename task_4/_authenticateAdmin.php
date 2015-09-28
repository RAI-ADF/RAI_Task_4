<?php
	if(!isset($_COOKIE["userid"])){
		header("location: login.php");
	}
	if($_COOKIE['level']!="admin"){
		if($_COOKIE['level']=="user"){
			header("location: index.php");	
		}else{
			header("location: login.php");	
		}
	}

?>