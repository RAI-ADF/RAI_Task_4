<?php
if(!mysql_connect("127.0.0.1","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("task_rai_4"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>

