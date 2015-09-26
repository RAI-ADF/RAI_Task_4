<?php require_once('Connections/koneksi.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "home.html";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "0,1";
$MM_donotCheckaccess = "false";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "home-login.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_koneksi, $koneksi);
$query_SignUp = "SELECT * FROM users";
$SignUp = mysql_query($query_SignUp, $koneksi) or die(mysql_error());
$row_SignUp = mysql_fetch_assoc($SignUp);
$totalRows_SignUp = mysql_num_rows($SignUp);
?>
<!doctype html>
<html lang=''>
<head>
   <title>P's WEBSITE</title>
   <link rel="stylesheet" type="text/css" href="home.css">
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <style type="text/css">
   #halaman header div table tr td {
	text-align: center;
}
   #halaman header div table {
	text-align: right;
}
   #halaman table tr td {
	text-align: center;
	font-family: "Futura Md Bt";
}
   </style>
</head>
<body>

<div id="halaman">
  <header>
      <div align="center">
       <table width="128" border="0" align="right">
         <tr>
           <td width="43"><a href="<?php echo $logoutAction ?>">Logout</a></td>
           <td width="75"><a href="home-admin.php">Admin?</a></td>
         </tr>
       </table>
       <p>&nbsp;</p>
       <p><img src='bnw.jpg'/></p>
      </div></header>
  <td> </td>
  
<div class="align-center" id='cssmenu'>
<ul>
   <li><a href='home-login.php'><span>HOME</span></a></li>
   <li class='active has-sub'><a href='info.php'><span>DATA</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>MY DATA</span></a>
         	<ul>
               <li><span><a href="update.php?username=<?php echo $row_login['username']; ?>">UPDATE DATA</a></span></li>
               <li class='last'><a href='view.php'><span>VIEW DATA</span></a></li>
            </ul>
         </li>
         <li><a href='#'><span>MY SUMMARY</span></a></li>
      </ul>
   </li>
   <li><a href='about-login.php'><span>ABOUT</span></a></li>
   <li class='last'><a href='contact-login.php'><span>CONTACT</span></a></li>
</ul>
</div>
</div>
<div id="isi">
  	<article>
    	<h3><center>
    	  <p>&nbsp;</p>
    	  <p>WELCOME IN P's WEBSITE,   <?php echo $_SESSION['MM_Username'] ?> !!!!!</p>
    	</center></h3>
		<center><p>WHATS NEW?</p><a href="info.html"><img src='klik.png'></a></center>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<div id="halamanbawah">
<ul align=center class="horizon-menubawah"></ul></div>
</article>
</div>
</body>
</html>
<?php
mysql_free_result($SignUp);
?>
