<?php require_once('Connections/koneksi.php'); ?>
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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "UserLevel";
  $MM_redirectLoginSuccess = "home-login.php";
  $MM_redirectLoginFailed = "index-login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_koneksi, $koneksi);
  	
  $LoginRS__query=sprintf("SELECT username, password, UserLevel FROM users WHERE username=%s AND password=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $koneksi) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'UserLevel');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!doctype html>
<html lang=''>
<head>
   <title>Login</title>
	<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
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
           <td width="43"><a href="index-login.php">Login</a></td>
           <td width="75"><a href="index.php">Register?</a></td>
         </tr>
       </table>
       <p>&nbsp;</p>
       <p><img src='bnw.jpg'/></p>
      </div></header>
  <td> </td>
  
<div class="align-center" id='cssmenu'>
<ul>
   <li><a href='home.html'><span>Home</span></a></li>
   <li><a href=''><span>DATA</span></a></li>
   <li><a href='about.html'><span>About</span></a></li>
   <li class='last'><a href='contact.html'><span>Contact</span></a></li>
   </ul>
</div>
</div>
<div id="isi">
  	<article>
    	 
<form ACTION="<?php echo $loginFormAction; ?>" id="myForm" method="POST">
<p>&nbsp;</p>
<h3><center>Fill your username and password!</center></h3>
<table align="center" width="200" height="130" border="0">
  <tr></tr>
<tr>
  <th scope="row">Username</th>
  <td>:</td>
  <td><span id="sprytextfield1">
    <input type="text" name="username" id="username"/>
    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
  <th scope="row">Password</th>
  <td>:</td>
  <td><span id="sprytextfield2">
    <input type="password" name="password" id="password"/>
    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
  <th scope="row"></th>
<td>&nbsp;</td>
<td><button id="submit">Login</button>&nbsp;&nbsp;<font size="-2"><a href="index.php">Not have account?</a></font></td>
</tr>
</table>
<p><br />
</p>
</form>
 
<div id="ack" align="center"></div>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type="text/javascript" src="script-login/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="script-login/my_script.js"></script>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<div id="halamanbawah">
  <ul align=center class="horizon-menubawah"></ul></div>
</article>
</div>
</body>
</html> 