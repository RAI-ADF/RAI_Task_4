<?php
	session_start();

	if(!isset($_SESSION['user']))
	{
		header("Location: login.php");
	}
	else if(isset($_SESSION['user'])!='')
	{
		$user = $_SESSION['user'];
		if (strcmp($user,'administrator')==0){
			header("Location: admin.php");
		}else{
			header("Location: user_page.php");
		}
	}

	if(isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['user']);
?>
		<script>alert('Logout Success');</script>
<?php
		header("Location: index.html");
	}
?>