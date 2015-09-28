<?php
	session_start();
	include_once 'connect.php';
	
	if(!isset($_SESSION['user']))
	{
		header("Location: login.php");
	}
	else if(isset($_SESSION['user'])!='')
	{
		$user = $_SESSION['user'];
		if (strcmp($user,'administrator')==0){
			header("Location: admin.php");
		}
	}
	
	$user = $_SESSION['user'];
?>

<!doctype html>
<html lang=''>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />

	<script src="js/jquery-1.7.2.min.js"></script>
		<title>User Page</title>
		
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
			<h1><?php echo $user; ?> Page</h1>
		</header>       
	<div id='fdw'>
	
	<nav>
						<ul>
							<li class="current"><a href="user_page.php">HOME<span class="arrow"></span></a></li>
							<li>
								<a href="http://www.freshdesignweb.com">MENU USER<span class="arrow"></span></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="input.php">INPUT DATA </a></li>
								</ul>
							</li>
							<li>
								<a href="logout.php?logout">LOGOUT</a>
							</li>
						</ul>
					</nav>

	</div>
	

<ul>	
	Hi <?php echo $user; ?> !<br>
	<br>
	This Is Application For Input 'Barang'<br>
	<br>
	To Use This Web Application Please <strong>Use Menu User</strong>
</ul>
</div>
</body>
<html>