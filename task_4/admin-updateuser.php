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
$MM_authorizedUsers = "1";
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

$MM_restrictGoTo = "home-login.html";
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "manageuser")) {
  $insertSQL = sprintf("INSERT INTO users (id) VALUES (%s)",
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());

  $insertGoTo = "updateuserolehadmin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_koneksi, $koneksi);
$query_manageuser = "SELECT * FROM users WHERE UserLevel = 0 ORDER BY Regdate ASC";
$manageuser = mysql_query($query_manageuser, $koneksi) or die(mysql_error());
$row_manageuser = mysql_fetch_assoc($manageuser);
$totalRows_manageuser = mysql_num_rows($manageuser);
$query_admin = "SELECT `id` ,  `username` ,  `password` ,  `fname` ,  `lname` ,  `email` ,  `dob` ,  `UserLevel` FROM `users` WHERE `UserLevel` =1";
$admin = mysql_query($query_admin, $koneksi) or die(mysql_error());
$row_admin = mysql_fetch_assoc($admin);
$totalRows_admin = mysql_num_rows($admin);
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
           <td width="43">&nbsp;</td>
           <td width="75"><a href="<?php echo $logoutAction ?>">Logout</a></td>
         </tr>
       </table>
       <p>&nbsp;</p>
       <p><img src='bnw.jpg'/></p>
      </div></header>
  <td> </td>
  
<div class="align-center" id='cssmenu'>
<ul>
   <li><a href='home-admin.php'><span>HOME</span></a></li>
   <li class='active has-sub'><a href='#'><span>ALL DATA</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>ADMIN</span></a>
         	<ul>
               <li><span><a href="update-admin.php?username=<?php echo $_SESSION['MM_Username'] ?>">UPDATE DATA</a></span></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>USER</span></a>
            <ul>
               <li><a href='admin-updateuser.php'><span>UPDATE DATA</span></a></li>
               <li><a href='admin-viewuser.php'><span>VIEW DATA</span></a></li>
               <li class='last'><a href='admin-deleteuser.php'><span>DELETE DATA</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>About</span></a></li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>
</div>
<div id="isi">
  	<article>
    	<h3><center>
    	  <p>&nbsp;</p>
    	  <p>UPDATE USER</p>
    	</center></h3>
		<center>
		  <form action="<?php echo $editFormAction; ?>" method="POST" name="manageuser" id="manageuser">
            <input name="id" type="hidden" id="id" value="<?php echo $row_manageuser['id']; ?>">
            <?php if ($totalRows_manageuser > 0) { // Show if recordset not empty ?>
              <?php do { ?>
            <table width="403" border="0">
              <tr>
                <th width="107" scope="row">Full Name :</th>
                <td width="182"><?php echo $row_manageuser['fname']; ?> <?php echo $row_manageuser['lname']; ?></td>
                <td width="122"><a href="updateuserolehadmin.php?username=<?php echo $row_manageuser['username'] ?>"><img src='klik.png'></a>
                <input type="hidden" name="MM_insert" value="manageuser"></td>
              </tr>
            </table>
            <?php } while ($row_manageuser = mysql_fetch_assoc($manageuser)); ?>
              <?php } // Show if recordset not empty ?>
		  </form>
	    <p>&nbsp;</p></center>
<div id="halamanbawah">
<ul align=center class="horizon-menubawah"></ul></div>
</article>
</div>
</body>
</html>
<?php
mysql_free_result($manageuser);
?>
