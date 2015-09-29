<?php
session_start();
if(isset($_SESSION['username'])!="")
{
    if(isset($_SESSION['status'])=="admin"){
        header("Location: adminPage.php");   
    }else{
        header("Location: clientPage.php");   
    }
}
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../css/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>User Page</title>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href='clientPage.php'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Input</span></a>
      <ul>
         <li><a href='#'><span>Input Form</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='logout.php'><span>Log Out</span></a></li>
</ul>
</div>

</body>
<html>

