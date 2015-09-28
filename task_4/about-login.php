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
   <li class='active has-sub'><a href='#'><span>DATA</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>MY DATA</span></a>
         	<ul>
               <li><span><a href="update.php?username=<?php echo $row_login['username']; ?>">UPDATE DATA</a></span></li>
               <li class='last'><a href='view.php'><span>VIEW DATA</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='mysummary.php'><span>MY SUMMARY</span></a></li>
      </ul>
   </li>
   <li><a href='about-login.php'><span>ABOUT</span></a></li>
   <li class='last'><a href='contact-login.php'><span>CONTACT</span></a></li>
</ul>
</div>
</div>
<h1 align="center">Curriculum Vitae</h1>
    
    <table align="center">
      <tbody>
        <tr>
          <td width="25%"><h3>DATA PRIBADI</h3></td>
          <td width="1%"></td>
          <td></td>
          <td rowspan="9" width="150px"><img src="mypic.jpg" alt="cv puji" height="200px" width="150px"></td>
        </tr>
        <tr>
          <td>Nama Lengkap</td>
          <td>:</td>
          <td><b>Puji Muharani</b></td>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td>:</td>
          <td>Batam, 16 Juni 1994</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>Perempuan</td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>:</td>
          <td>Islam</td>
        </tr>
        <tr>
          <td>Tinggi Badan</td>
          <td>:</td>
          <td>160 cm</td>
        </tr>
        <tr>
          <td>Berat Badan</td>
          <td>:</td>
          <td>53 kg</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td>Karya Bakti 6 No. 160 A RT 03/RW 11, Kap. Pamoyanan Kel. Cigugur Tengah, Cimahi</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>:</td>
          <td>Mahasiswa</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><p><a href="mailto:pujmuharani@gmail.com">pujmuharani@gmail.com</a><a href="pujmuharani@gmail.com"></a></p>
          <p><a href="mailto:pujimuharani@student.telkomuniversity.ac.id">pujimuharani@student.telkomuniversity.ac.id</a></p></td>
        </tr>
        <tr><td><h6></h6></td></tr>
        <tr>
          <td><h3>DATA PENDIDIKAN</h3></td>
        </tr>
        <tr>
          <td>2000-2006</td>
          <td>:</td>
          <td>SD Kartini II, Batam</td>
        </tr>
        <tr>
          <td>2006-2009</td>
          <td>:</td>
          <td>SMP Negeri 4, Batam</td>
        </tr>
        <tr>
          <td>2009-2012</td>
          <td>:</td>
          <td>SMA Negeri 3, Batam</td>
        </tr>
        <tr>
          <td>2012-sekarang</td>
          <td>:</td>
          <td>Universitas Telkom, Jurusan Teknik Informatika, Bandung</td>
        </tr>
        <tr><td><h6></h6></td></tr>
  		<tr>
          <td><h3>PENGALAMAN KERJA</h3></td>
        </tr>
        <tr>
          <td>2014</td>
          <td>:</td>
          <td>Geladi di PT. Kisel, Batam</td>
        </tr>
        <tr>
          <td>2015</td>
          <td>:</td>
          <td>Kerja Praktek di Bank Negera Indonesia (BNI), Bandung</td>
        </tr>
        <tr><td><h6></h6></td></tr>
      	<tr>
          <td><h3>DATA KEMAMPUAN</h3></td>
        </tr>
        <tr>
          <td>Office</td>
          <td>:</td>
          <td><p>1. Ms Word</p>
          <p>2. Ms. Excel</p>
          <p>3. Ms. Power Point</p></td>
        </tr>
        <tr>
          <td>Grafis, Audio, dan Video</td>
          <td>:</td>
          <td><p>1. Adobe Photoshop</p>
          <p>2. Adobe Illustrator</p>
          <p>3. Adobe After Effect</p>
          <p>4.FL Audio</p>
          <p>5. Corel</p>
          <p>6. Blender</p></td>
        </tr>
        <tr>
          <td>Programming</td>
          <td>:</td>
          <td><p>1. Netbeans</p>
          <p>2. Matlab</p>
          <p>3. Adobe Dreamweaver</p></td>
        </tr>
      </tbody>
    </table>
</article>
</div>
</body>
</html>
<?php
mysql_free_result($SignUp);
?>
