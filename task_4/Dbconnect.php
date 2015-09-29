<?php
if(!mysql_connect("localhost","root",""))
{
	die('Connection Problem! -->'.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
	die('oops database selection problem! -->'.mysql_error());
}
?>
