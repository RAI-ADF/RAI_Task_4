<?php$host = "localhost";$user = "root";$password = "";$database = "raitask4";if(!mysql_connect($host,$user,$password);){     die('oops connection problem ! --> '.mysql_error());}if(!mysql_select_db($database);){     die('oops database selection problem ! --> '.mysql_error());}?>