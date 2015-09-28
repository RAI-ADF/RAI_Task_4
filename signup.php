<?php
  session_start();
  if(isset($_SESSION['SIGNUP_STATUS']) && !empty($_SESSION['SIGNUP_STATUS'])){
      header('location:index.php');
  }
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Login Form</title>
	
	<style>
	body{
		margin: 0;
		padding: 0;
		background: #ecf0f1;
		color: #ecf0f1;
		font-family: Century Gothic;
		font-size: 12px;
	}
	
	.body{
		position: absolute;
		top: -20px;
		left: -20px;
		right: -40px;
		bottom: -40px;
		width: auto;
		height: auto;
		background-image: url("img.jpg");
		background-size: cover;
		-webkit-filter: blur(5px);
		z-index: 0;
	}
	
	.header{
		position: absolute;
		top: calc(50% - 35px);
		left: calc(50% - 255px);
		z-index: 2;
	}
	
	.header div{
		float: left;
		color: #ecf0f1;
		font-size: 35px;
		font-weight: 200;
	}

	.header div span{
		color: #5379fa !important;
	}
	
	.login{
		position: absolute;
		top: calc(50% - 75px);
		left: calc(50% - 50px);
		height: 150px;
		width: 350px;
		padding: 10px;
		z-index: 2;
	}

	.login input[type=text]{
		width: 250px;
		height: 30px;
		background: transparent;
		border: 1px solid #ecf0f1;
		border-radius: 2px;
		color: #ecf0f1;
		font-family: Century Gothic;
		font-size: 16px;
		font-weight: 400;
		padding: 4px;
	}

	.login input[type=password]{
		width: 250px;
		height: 30px;
		background: transparent;
		border: 1px solid #ecf0f1;
		border-radius: 2px;
		color: #ecf0f1;
		font-family: Century Gothic;
		font-size: 16px;
		font-weight: 400;
		padding: 4px;
		margin-top: 10px;
	}
	
	.login input[type=button]{
		width: 260px;
		height: 35px;
		background: #fff;
		border: 1px solid #fff;
		cursor: pointer;
		border-radius: 2px;
		color: #a18d6c;
		font-family: Century Gothic;
		font-size: 16px;
		font-weight: 400;
		padding: 6px;
		margin-top: 10px;
	}
	
	.login input[type=button]:hover{
		opacity: 0.8;
	}

	.login input[type=button]:active{
		opacity: 0.6;
	}

	.login input[type=text]:focus{
		outline: none;
		border: 1px solid rgba(255,255,255,0.9);
	}

	.login input[type=password]:focus{
		outline: none;
		border: 1px solid rgba(255,255,255,0.9);
	}

	.login input[type=button]:focus{
		outline: none;
	}
	
	</style>
	
	</head>
	<body>
		<div class="body"></div>
			<div class="header">
				<div>Sign<span>Up</div></span>
			</div>
			<br>
			<div class="login">
				<input type="text" placeholder="username" name="user"><br>
				<br>
				<input type="password" placeholder="password" name="password"><br>
				<br>
				<input type="text" placeholder="name" name="name"><br>
				<br>
				<input type="text" placeholder="email" name="email"><br>
				<br>
				<input type="text" placeholder="place of birth" name="birthplace"><br>
				<br>
				<input type="text" placeholder="date of birth" name="birthdate"><br>
				<br>
				<input type="button" value="signup">
			</div>
			
	</body>
</html>