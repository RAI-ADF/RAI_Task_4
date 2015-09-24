<?php
include('connect.php');

$name=$_POST['name'];
$password=$_POST['password'];


$query="select * from user where username='$name' and password='$password'";
// echo $query;


$result=mysql_query($query);
$num_rows = mysql_num_rows($result);
$hasil=mysql_fetch_array($result);

$user=$hasil['username'];
// echo "num_rows=".$num_rows;
// echo "user ".$user;
if($num_rows == 1 ){	
		echo "$user";
		session_start();
		$_SESSION['username']=$user;

}else{
	echo "false";
}

?>