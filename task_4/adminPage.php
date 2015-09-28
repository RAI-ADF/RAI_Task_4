<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Welcome, Admin</title>
    <link rel="stylesheet" href="normalize.css">
        <style>
		header {
				margin: center;
			}
		a {
			font-family:"Times New Roman";
			font-size: 30px;
			color:Red;
		}
		</style>
  </head>
  <body>
<head>
  <meta charset="UTF-8" />
  <title>Drop Menu</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
</head>
<body>
<div style= "margin-top:150px;">
<header>
	<center>
	<font color="White" size="5px">Welcome - <i><?php echo $_SESSION['admin']; ?></i></font>
    </center>
</header>
  <div class="wrapper">
    <div class="menu">
      <div class="table">  
        <ul class="menu__list hidden">
          <li class="menu__list__item item1"><a href="mainLoad.php">Load Data</a></li>
          <li class="menu__list__item item2"><a href="mainSearch.php">Search Data</a></li>
          <li class="menu__list__item item3"><a href="logout.php">Log Out</a></li>
        </ul>  
      </div>
    </div>
    <div class="button">
      <div class="line line__first"></div>
    </div>
  </div>
  </div>
</body>
</html>
</body>
</html>
