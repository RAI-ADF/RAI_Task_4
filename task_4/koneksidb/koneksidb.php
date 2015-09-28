<?php
$server	= "localhost";
$user	= "root";
$pass	= "";
$db	= "wikifiesto";

$connection	= mysql_connect($server, $user, $pass, $db);
if (! $connection) {
  echo "Can't connect to the database";
  mysql_error();
}

mysql_select_db($db)
	 	or die ("Database not found".mysql_error());

?>