<?php include('akses.php'); ?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Dropdown Menu Animation</title>
    <link rel="stylesheet" href="normalize.css">
        <link rel="stylesheet" href="styles.css">
        <style>
		header {
				margin: center;
				font-family: "Myriad Pro", "Trebuchet MS", sans-serif;	
			}
		a {
			text-decoration:none;
			font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
			font-size: 20px;
			color:black;
		}
		</style>
  </head>
  <body>

    <html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Drop Menu</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
</head>
<body>
<div style= "margin-top:150px;">
<header>
	<center>
	<font color="White" size="5px">Welcome - <i><?php echo $_SESSION['guest']; ?></i></font>
    </center>
</header>
  <div class="commander"><p>Press the Button!</p></div>
  <div class="wrapper">
    
    <div class="menu">
      <div class="table">
        
        <ul class="menu__list hidden">
          <li class="menu__list__item item1"><a href="inputF-index.php">Input Data</a></li>
          <li class="menu__list__item item2"><a href="#">View Data</a></li>
          <li class="menu__list__item item3"><a href="../logout.php">Log Out</a></li>
        </ul>
      
      </div>
    </div>
    <div class="button">
      <div class="line line__first"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  
  </div>
  </div>
</body>
</html>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
</body>
</html>
