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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "myForm")) {
  $insertSQL = sprintf("INSERT INTO users (username, password, fname, lname, email, dob, city, region) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['fname'], "text"),
                       GetSQLValueString($_POST['lname'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['dob'], "date"),
                       GetSQLValueString($_POST['city'], "text"),
                       GetSQLValueString($_POST['region'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());

  $insertGoTo = "index-login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
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
	<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
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
       <li><a href='#'><span>DATA</span></a></li>
       <li><a href='about.html'><span>About</span></a></li>
       <li class='last'><a href='contact.html'><span>Contact</span></a></li>
    </ul>
    </div>
    </div>
    <div id="isi">
  	<article>
		<form action="<?php echo $editFormAction; ?>" name="myForm" id="myForm" method="POST">
        <p>&nbsp;</p>
    	<h3><center>
    	  <p>Fill your identity and join us!</p>
    	</center>
    	</h3>
<table align="center" width="325" height="310" border="0">
	    <tr>
		    <th width="141" scope="row">Username</th>
		    <td width="21">:</td>
		    <td width="149"><span id="sprytextfield1">
            <input type="text" name="username" id="username">
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
		  <tr>
		    <th scope="row">Password</th>
		    <td>:</td>
		    <td><span id="sprytextfield2">
            <input type="password" name="password" id="password">
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row">First Name</th>
		    <td>:</td>
		    <td><span id="sprytextfield3">
            <input type="text" name="fname">
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row">Last Name</th>
		    <td>:</td>
		    <td><span id="sprytextfield4">
            <input type="text" name="lname">
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row">Email</th>
		    <td>:</td>
		    <td><span id="sprytextfield5">
            <label for="email"></label>
            <input type="email" name="email" id="email">
            <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row">Date of Birth</th>
		    <td>:</td>
		    <td><span id="sprytextfield7">
            <label for="date"></label>
            <input type="date" name="dob" id="dob">
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row">Place of Birth</th>
		    <td>:</td>
		    <td><span id="spryselect1">
		      <label for="city"></label>
              <select name="city" id="city">
                <option value="None" selected <?php if (!(strcmp("None", $row_SignUp['city']))) {echo "selected=\"selected\"";} ?>></option>
                <option value="Jawa Barat" <?php if (!(strcmp("Jawa Barat", $row_SignUp['city']))) {echo "selected=\"selected\"";} ?>>Jawa Barat</option>
                <option value="Jawa Timur" <?php if (!(strcmp("Jawa Timur", $row_SignUp['city']))) {echo "selected=\"selected\"";} ?>>Jawa Timur</option>
                <option value="Sumatera Utara" <?php if (!(strcmp("Sumatera Utara", $row_SignUp['city']))) {echo "selected=\"selected\"";} ?>>Sumatera Utara</option>
                <?php
do {  
?>
<option value="<?php echo $row_SignUp['city']?>"<?php if (!(strcmp($row_SignUp['city'], $row_SignUp['city']))) {echo "selected=\"selected\"";} ?>><?php echo $row_SignUp['city']?></option>
                <?php
} while ($row_SignUp = mysql_fetch_assoc($SignUp));
  $rows = mysql_num_rows($SignUp);
  if($rows > 0) {
      mysql_data_seek($SignUp, 0);
	  $row_SignUp = mysql_fetch_assoc($SignUp);
  }
?>
              </select>
<span class="selectRequiredMsg">Please select an item.</span></span>&nbsp;&nbsp;
            <span id="spryselect2">
            <label for="region"></label>
            <select name="region" id="region">
              <option value="None" <?php if (!(strcmp("None", $row_SignUp['region']))) {echo "selected=\"selected\"";} ?>></option>
              <option value="Bandung" <?php if (!(strcmp("Bandung", $row_SignUp['region']))) {echo "selected=\"selected\"";} ?>>Bandung</option>
              <option value="Surabaya" <?php if (!(strcmp("Surabaya", $row_SignUp['region']))) {echo "selected=\"selected\"";} ?>>Surabaya</option>
              <option value="Medan" <?php if (!(strcmp("Medan", $row_SignUp['region']))) {echo "selected=\"selected\"";} ?>>Medan</option>
              <?php
do {  
?>
<option value="<?php echo $row_SignUp['region']?>"<?php if (!(strcmp($row_SignUp['region'], $row_SignUp['region']))) {echo "selected=\"selected\"";} ?>><?php echo $row_SignUp['region']?></option>
              <?php
} while ($row_SignUp = mysql_fetch_assoc($SignUp));
  $rows = mysql_num_rows($SignUp);
  if($rows > 0) {
      mysql_data_seek($SignUp, 0);
	  $row_SignUp = mysql_fetch_assoc($SignUp);
  }
?>
            </select>
            <span class="selectRequiredMsg">Please select an item.</span></span></td>
	      </tr>
		  <tr>
		    <th scope="row"></th>
		    <td>&nbsp;</td>
		    <td><button id="submit">Register</button>
		      &nbsp;&nbsp;&nbsp;<a href="index-login.php"><font size="-1">Login?</font></a></td>
        </tr>
		  </table>
<p>&nbsp;</p>
<input type="hidden" name="MM_insert" value="myForm">
		</form>
		
	  <div id="ack" align="center"></div>
        
	
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>	
	<script type="text/javascript" src="script/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="script/my_script.js"></script>
	<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
    <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
    </script>
    <script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
    </script>
    <div id="halamanbawah">
<ul align=center class="horizon-menubawah"></ul></div>
</article>
</div>
</body>
</html>
<?php
mysql_free_result($SignUp);
?>