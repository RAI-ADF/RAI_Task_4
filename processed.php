<?php
session_start();

$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "task4";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysql_select_db($mysql_db_database, $con) or die("Could not select database");


$message=array();
if(isset($_POST['uname']) && !empty($_POST['uname'])){
    $uname=mysql_real_escape_string($_POST['uname']);
}else{
    $message[]='Please enter username';
}

if(isset($_POST['password']) && !empty($_POST['password'])){
    $password=mysql_real_escape_string($_POST['password']);
}else{
    $message[]='Please enter password';
}

$countError=count($message);

if($countError > 0){
     for($i=0;$i<$countError;$i++){
              echo ucwords($message[$i]).'<br/><br/>';
     }
}else{
    $query="select * from user where username='$uname' and password='$password'";

    $res=mysql_query($query);
    $checkUser=mysql_num_rows($res);
    if($checkUser > 0){
		$cookie_name = "user";
		$cookie_value = $uname;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/"); // 86400 = 1 day
		//
		//$_SESSION["username"] = $myusername;
		//$_SESSION["password"] = $mypassword;
         $_SESSION['LOGIN_STATUS']=true;
         $_SESSION['UNAME']=$uname;
         echo 'correct';
    }else{
         echo ucwords('please enter correct user details');
    }
}
?>

