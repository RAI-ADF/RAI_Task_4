<?php
include('connect.php');
session_start();
if($_SESSION['username'] == 'admin'){
//	echo "this is admin page";
//	echo "<br/>";
//	echo "welcome ";
//	echo @$_SESSION['username'];

}else{
	header("Location: index.php");
}


?>
<html>
<head>
<title> admin page</title>
<link href="asset/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="asset/jquery-1.11.3.min.js"></script>
<style>
.nav a {
  color: #5a5a5a;
  font-size: 11px;
  font-weight: bold;
  padding: 14px 10px;
  text-transform: uppercase;
}

.nav li {
  display: inline;
   
}
</style>
</head>
<body>
	<div class="nav" style="background-color: #c6e2ff"; >
      <div class="container">
        <ul class="pull-left">
          <li>welcome <? echo @$_SESSION['username'];?></?></li>
        </ul>
        <ul class="pull-right">
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
</body>
</html>