<?php
//$con = mysql_connect('DATABASEHOST','USERNAME','PASSWORD') or die(mysql_error());
$con = mysql_connect('localhost','root','') or die(mysql_error());

if (!$con) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("logindb")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}
?>