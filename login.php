<?php
  session_start();
  if(isset($_SESSION['LOGIN_STATUS']) && !empty($_SESSION['LOGIN_STATUS'])){
      header('location:index.php');
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

 <style>
     
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
		@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

		body{
			margin: 0;
			padding: 0;
			background: #009688;

			color: #009688;
			font-family: Arial;
			font-size: 12px;
		}


		.grad{
			position: absolute;
			top: -20px;
			left: -20px;
			right: -40px;
			bottom: -40px;
			width: auto;
			height: auto;
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
			z-index: 1;
			opacity: 0.7;
		}

		.header{
			position: absolute;
			top: calc(50% - 35px);
			left: calc(50% - 255px);
			z-index: 2;
		}

		.header div{
			float: left;
			color: #fff;
			font-family: 'Exo', sans-serif;
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
			border: 1px solid rgba(255,255,255,0.6);
			border-radius: 2px;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
		}

		.login input[type=password]{
			width: 250px;
			height: 30px;
			background: transparent;
			border: 1px solid rgba(255,255,255,0.6);
			border-radius: 2px;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
			margin-top: 10px;
		}

		.login input[type=submit]{
			width: 260px;
			height: 35px;
			background: #fff;
			border: 1px solid #fff;
			cursor: pointer;
			border-radius: 2px;
			color: #a18d6c;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 6px;
			margin-top: 10px;
		}

		.login input[type=submit]:hover{
			opacity: 0.8;
		}

		.login input[type=submit]:active{
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

		.login input[type=submit]:focus{
			outline: none;
		}

		::-webkit-input-placeholder{
		   color: rgba(255,255,255,0.6);
		}

		::-moz-input-placeholder{
		   color: rgba(255,255,255,0.6);
		}
		
		.title{
			width: 250px;
			height: 30px;
			background: transparent;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
		}
    </style>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
function validLogin(){
      var uname=$('#uname').val();
      var password=$('#password').val();

      var dataString = 'uname='+ uname + '&password='+ password;
      $("#flash").show();
      $.ajax({
      type: "POST",
      url: "processed.php",
      data: dataString,
      cache: false,
      success: function(result){
               var result=trim(result);
               $("#flash").hide();
               if(result=='correct'){
                     window.location='ClientPage.php';
               }else{
                     $("#errorMessage").html(result);
               }
      }
      });
}

function trim(str){
     var str=str.replace(/^\s+|\s+$/,'');
     return str;
}
</script>
</head>
<body>
<div id="container">
    
    <div></div>
		<div class="grad"></div>
		<div class="header">
			<div>Login</div>
		</div>
		<br>
		
			
		<div class="login">
			<form method="post"> 
				<input type="text" placeholder="username" name="uname" id="uname"><br>
				<input type="password" placeholder="password" name="password" id="password"><br>
				<input type="submit" value="Login" onclick="validLogin()">
			</form>
			<div class="title"><a href="registrationForm.php">Create Account</div>
		</div>

    
</div>
</body>
</html>
