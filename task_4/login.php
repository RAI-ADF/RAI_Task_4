<?php  

session_start();

$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "rai_task4";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysql_select_db($mysql_db_database, $con) or die("Could not select database");

// $username ="admin";
// $password ="1234";
if(isset($_POST["username"]) && isset($_POST["password"])) {

	$username = mysql_real_escape_string( $_POST["username"] );
	$password = mysql_real_escape_string( $_POST["password"] );


// echo $username;
// echo $password;

	$query = "SELECT * FROM user WHERE username='$username' and password='$password'";

	$result = mysql_query($query)or die(mysql_error());

	$num_row = mysql_num_rows($result);
	$row=mysql_fetch_array($result);
	if( $num_row >=1 ) {

		echo 'true';
		$_SESSION['username']=$row['username'];		
		$_SESSION['user_type'] =$row['user_type'];
		if ($_SESSION['user_type'] ==1) {
			echo "admin";
			header("Location: adminPage.php");
			
		}elseif ($_SESSION['user_type'] ==2) {
			echo "user";
			header("Location: clientPage.php");
		}
		
	}
	else{
		echo 'User not found  <a href=registration.php>Click Here to Register</a> ';
	}
}

?>