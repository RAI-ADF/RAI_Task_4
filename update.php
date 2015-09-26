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

$MM_restrictGoTo = "index-login.php";
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "myForm")) {
  $updateSQL = sprintf("UPDATE users SET username=%s, password=%s, fname=%s, lname=%s, email=%s, dob=%s WHERE id=%s",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['fname'], "text"),
                       GetSQLValueString($_POST['lname'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['dob'], "date"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($updateSQL, $koneksi) or die(mysql_error());

  $updateGoTo = "home-login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_koneksi, $koneksi);
$query_SignUp = "SELECT * FROM users";
$SignUp = mysql_query($query_SignUp, $koneksi) or die(mysql_error());
$row_SignUp = mysql_fetch_assoc($SignUp);
$totalRows_SignUp = mysql_num_rows($SignUp);

$colname_update = "-1";
if (isset($_GET['username'])) {
  $colname_update = $_GET['username'];
}
mysql_select_db($database_koneksi, $koneksi);
$query_update = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_update, "text"));
$update = mysql_query($query_update, $koneksi) or die(mysql_error());
$row_update = mysql_fetch_assoc($update);
$totalRows_update = mysql_num_rows($update);
?>
<!doctype html>
<html lang=''>
<head>
   <title>Sign Up</title>
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
   table {
	text-align: left;
	font-family: "Century Gothic";
}
   </style>
	<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
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
   <li><a href='home-login.php'><span>Home</span></a></li>
	<li class='active has-sub'><a href='info.php'><span>DATA</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>MY DATA</span></a>
         	<ul>
               <li><span><a href="update.php?username=<?php echo $_SESSION['MM_Username'] ?>">UPDATE DATA</a></span></li>
               <li class='last'><a href="view.php?username=<?php echo $_SESSION['MM_Username'] ?>"><span>VIEW DATA</span></a></li>
            </ul>
         </li>
         <li><a href='mysummary.php'><span>MY SUMMARY</span></a></li>
      </ul>
   </li>
   <li><a href='about-login.php'><span>About</span></a></li>
   <li class='last'><a href='contact-login.php'><span>Contact</span></a></li>
    </ul>
    </div>
    </div>
    <div id="isi">
  	<article>
		<form action="<?php echo $editFormAction; ?>" name="myForm" id="myForm" method="POST">
        <p>&nbsp;</p>
    	<h3><center>
    	  <p>Update your identity!    	</p>
    	</center>
    	</h3>
<table align="center" width="325" height="310" border="0">
	    <tr>
		    <th width="141" scope="row">Username</th>
		    <td width="21">:</td>
		    <td width="149"><span id="sprytextfield1">
            <input name="username" type="text" id="username" value="<?php echo $row_update['username']; ?>">
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
		  <tr>
		    <th scope="row">Password</th>
		    <td>:</td>
		    <td><span id="sprytextfield2">
            <input name="password" type="password" id="password" value="<?php echo $row_update['password']; ?>">
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row">First Name</th>
		    <td>:</td>
		    <td><span id="sprytextfield3">
            <input name="fname" type="text" value="<?php echo $row_update['fname']; ?>">
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row">Last Name</th>
		    <td>:</td>
		    <td><span id="sprytextfield4">
            <input name="lname" type="text" value="<?php echo $row_update['lname']; ?>">
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row">Email</th>
		    <td>:</td>
		    <td><span id="sprytextfield5">
            <label for="email"></label>
            <input name="email" type="text" id="email" value="<?php echo $row_update['email']; ?>">
            <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row">Date of Birth</th>
		    <td>:</td>
		    <td><span id="sprytextfield7">
            <label for="date"></label>
            <input name="dob" type="date" id="dob" value="<?php echo $row_update['dob']; ?>">
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row">Place of Birth</th>
		    <td>:</td>
		    <td><span id="sprytextfield8">
		      <label for="city"></label>
		      <input name="city" type="text" id="city" value="<?php echo $row_update['city']; ?>">
	        <span class="textfieldRequiredMsg">A value is required.</span></span> &nbsp;&nbsp;
	        <span id="sprytextfield9">
            <label for="region"></label>
            <input name="region" type="text" id="region" value="<?php echo $row_update['region']; ?>">
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row"></th>
		    <td><input name="id" type="hidden" id="id" value="<?php echo $row_SignUp['id']; ?>"></td>
		    <td><button id="submit">Update</button></td>
        </tr>
		  </table>
<p>&nbsp;</p>
<input type="hidden" name="MM_update" value="myForm">
		</form>
		
		<div id="ack" align="center"></div>
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>	
	<script type="text/javascript" src="script/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="script/my_script.js"></script>
    <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
    </script>
    <div id="halamanbawah">
<ul align=center class="horizon-menubawah"></ul></div>
</article>
</div>
</body>
</html>
<?php
mysql_free_result($SignUp);

mysql_free_result($update);
?>