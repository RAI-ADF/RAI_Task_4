<?php

	session_start();
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="task4"; // Database name 
	$tbl_name="user"; // Table name 

	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	// username and password sent from form 
	$myusername=$_POST['username']; 
	$mypassword=$_POST['password']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	$sql="SELECT * FROM user WHERE username='$myusername' and password='$mypassword'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count > 0){

		// Register $myusername, $mypassword and redirect to file "login_success.php"
		//session_register("myusername");
		//session_register("mypassword");
		$cookie_name = "user";
		$cookie_value = $myusername;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/"); // 86400 = 1 day
		//
		$_SESSION["username"] = $myusername;
		$_SESSION["password"] = $mypassword;
		echo "correct";
		header("location:registrationForm.php");
	}
	else {
		echo "Wrong Username or Password";
	}
?>