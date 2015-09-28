<?php
	include_once 'connect.php';
	session_start();
	
	$user		= $_POST['username'];
	$password	= md5($_POST['password']);
	$_SESSION['user'] = $user;
	
	if(strcmp($user,"admin")==0){
		if(strcmp($password,md5("admin"))==0){
			echo "yes admin";
		}else{
			echo "no";
		}
	}else{
	
	$sql = "SELECT USER_ID,PASS FROM user_nya where USER_ID='$user'";
	$result=mysql_query($sql);
	$row= mysql_fetch_array($result);
	

		if(mysql_num_rows($result)>0)
		{

			if(strcmp($row['PASS'],$password)==0)
			{
				echo "yes";

				$_SESSION['user']=$user; 
			}
			else
			{
				echo "no";
			} 
		}
		else
		{
			echo "no";
		}
		}
	mysql_close($Open);
?>