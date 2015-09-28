<?php
	session_start();
?>
<DOCTYPE! html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="adminPage.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Admin Page</title>
</head>
<body>
    <div id='cssmenu'>
    <ul>
       <li><a href='adminPage.php'><span>Home</span></a></li>
       <li class='has-sub'><a href='#'><span>Data</span></a>
          <ul>
             <li class='has-sub'><a href='adminSearch.php'><span>View User</span></a>
             </li>
             <li class='has-sub'><a href='adminLoad.php'><span>View Data</span></a>
             </li>
          </ul>
       </li>
       <li><a href='logout.php'><span>Log Out</span></a></li>
    </ul>
    </div><br><br>
    <center><font>Welcome - <i><?php echo $_SESSION['admin']; ?></i></font></center>
</body>
<html>


