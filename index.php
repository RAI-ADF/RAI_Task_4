<?php
  session_start();
  if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:userhome.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Index</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>

</head>
<style type="text/css">
#cv {
	background : gray;
	height : auto;
	width : 500px;
	margin : 0px auto;
	border : 2px solid black;
	border-collapse: collapse;
	text-align : center;
}

</style>
<body>
<div id="cv">
<?php include_once("menu.php"); ?>
<a href="logout.php" title="logout">logout</a>

<h1>Welcome <?php echo $_SESSION['UNAME'];?>
</div>
</body>
</html>
