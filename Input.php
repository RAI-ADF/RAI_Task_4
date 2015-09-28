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
   <title> <?php echo $user; ?> Page</title>
   
	<script type="text/javascript"
			src="jquery-1.9.1.js">         
    </script>
    <link rel="stylesheet" 
        href="jquery-ui/themes/base/jquery.ui.all.css">
    <script type="text/javascript" 
        src="jquery-ui/ui/jquery.ui.core.js">
    </script>        
    <script type="text/javascript" 
        src="jquery-ui/ui/jquery.ui.widget.js">
    </script>
    <script type="text/javascript" 
        src="jquery-ui/ui/jquery.ui.mouse.js">
    </script>        
    <script type="text/javascript" 
        src="jquery-ui/ui/jquery.ui.draggable.js">
    </script>        
    <script type="text/javascript" 
        src="jquery-ui/ui/jquery.ui.position.js">
    </script>        
    <script type="text/javascript" 
        src="jquery-ui/ui/jquery.ui.resizable.js">
    </script>        
    <script type="text/javascript" 
        src="jquery-ui/ui/jquery.ui.button.js">
    </script>              
    <script type="text/javascript" 
        src="jquery-ui/ui/jquery.ui.dialog.js">
    </script>      
    <script type="text/javascript" 
        src="jquery-ui/ui/jquery.ui.datepicker.js">
    </script>      
    <link href="jtable/themes/lightcolor/blue/jtable.css" 
        rel="stylesheet" type="text/css" />
    <script src="jtable/jquery.jtable.js">
    </script>      
    
	<script type="text/javascript">
		$(document).ready(function() {
            $("#wadah-tabel").jtable({
				title: "Data Barang",
				paging: true, 
				pageSize: 10, 
				sorting: true, 
				defaultDateFormat: "dd-mm-yy",
				actions: {
					listAction: "listbarang.php",
					deleteAction: "deleteneg.php",
					updateAction: "updateneg.php",
					createAction: "createneg.php"
				},
				fields: {
					nomer: {
                    title: "nomer",
						key: true,
						create: false,
						edit: false,
						list: false
					},
					nama_barang: {
						title: "Barang"
					}
				}
            });
            
            $("#wadah-tabel").jtable("load");
        });
    </script>
   
</head>
<body>
	<div class="container">
		<header>
			<h1>REGISTRATION PAGE</h1>
		</header>       
		<div id='fdw'>
	<h3> <?php echo $user; ?> Page</h3>
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
	Hi <?php echo $user; ?><br>
	This Is Form To CRUD the 'Barang'
	<br>
	<br>
	<div id="wadah-tabel">
	</div>
</body>
</html>