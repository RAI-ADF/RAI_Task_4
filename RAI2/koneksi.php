<?Php
///////// Database Details , add  here  ////
$dbhost_name = "localhost";
$database = "dynamicweb";  // Your database name
$username = "root";                  //  Login user id 
$password = "";                  //   Login password
/////////// End of Database Details //////

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
$connect = mysql_connect($dbhost_name, $username, $password);
mysql_select_db($database,$connect);

?> 