<?php
	session_start();
	include_once('connect.php');
	
	if(isset($_SESSION['user'])!=''){
		$user = $_SESSION['user'];
		if(strcmp($user,'administrator')==0){
			header("Location :admin.php");
		}else{
			header("Location : user_page.php");
		}
	}
?>

<script src="jquery-1.9.1.js" type="text/javascript" language="javascript"></script>
<script language="javascript">

$(document).ready(function()
{
	$("#login_form").submit(function()
	{

		$("#msgbox").removeClass().addClass('messagebox').text('Validating....').fadeIn(1000);

		$.post("validation.php",{ username:$('#user').val(),password:$('#password').val(),rand:Math.random() } ,function(data)
        {
		  if(data=='yes admin') 
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  
			{ 

			  $(this).html('Logging in.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 

				 document.location='admin.php';
			  });
			  
			});
		  }else
		  if(data=='yes') 
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() 
			{ 
			  
			  $(this).html('Logging in.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
			  
				 document.location='user_page.php';
			  });
			  
			});
		  }
		  else 
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  
			  $(this).html('Your login detail false...').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
				
        });
 		return false; 
	});
	
	
	$("#password").blur(function()
	{
		$("#login_form").trigger('submit');
	});
});
</script>


<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	table {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 11px;
	}
	input {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 11px;
		height: 20px;
	}
	.messagebox{
	position:absolute;
	width:100px;
	margin-left:30px;
	border:1px solid #c93;
	background:#ffc;
	padding:3px;
	}
	.messageboxok{
		position:absolute;
		width:auto;
		margin-left:30px;
		border:1px solid #349534;
		background:#C9FFCA;
		padding:3px;
		font-weight:bold;
		color:#008000;
		
	}
	.messageboxerror{
		position:absolute;
		width:auto;
		margin-left:30px;
		border:1px solid #CC0000;
		background:#F7CBCA;
		padding:3px;
		font-weight:bold;
		color:#CC0000;
	}
	
	</style>
<title>login</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    
	<script src="js/jquery-1.7.2.min.js"></script>
<script>  

$(function(){

	$('<select />').appendTo('nav');


	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Choise Page...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});


	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});


$(function(){
	$('nav ul li').hover(
		function () {

			$('ul', this).slideDown(150);
		}, 
		function () {

			$('ul', this).slideUp(150);			
		}
	);
});

</script>

</head>
<body>

<div class="container">
	<header>
		<h1>LOGIN PAGE</h1>
    </header>       
 
		<div id="fdw">

					<nav>
						<ul>
							<li><a href="index.html">home</a></li>
							<li class="current"><a href="login.php">Login</a></li>
							<li><a href="registration.php">Registration</a></li>
						</ul>
						<ul>
							<form id="login_form" method="POST" action="login.php">
								<table width="310" border="0" cellpadding="0" cellspacing="0">
							
									<tr>
										<td width="106" height="16">&nbsp;</td>
										<td width="180">&nbsp;</td>
									</tr>
									<tr>
										<td height="18" align="right">Username :&nbsp;</td>
										<td><input type="text" name="user" size="20" maxlength="9" id="user"></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td height="18" align="right" >Password :&nbsp;</td>
										<td><input type="password" name="password" size="20" id="password"></td>
									</tr>
									<tr>
										<td height="16">&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td height="18" align="top">&nbsp;</td>
										<td align="left"><input type="submit" value="Login"><span id="msgbox" style="display:none">asd</span></td>
									</tr>
									<tr>
										<td height="16">&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									
									
								</table>
							</form>
						</ul>	
					</nav>
				</div>
</div>
</body>
</html>