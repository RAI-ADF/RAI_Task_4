<?php
	if(!isset($_COOKIE["userid"])){
		header("location: login.php");
	}
	if($_COOKIE['level']!="user"){
		if($_COOKIE['level']=="admin"){
			header("location: adminPage.php");	
		}else{
			header("location: login.php");	
		}
	}

?>