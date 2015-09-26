<?php  
require_once 'connection.php';

session_start();
$username = $_POST['name'];
$password = $_POST['pwd'];
$query = "SELECT * FROM [rai_task4].[dbo].[user] WHERE username='{$username} and password='{$password}";
$serverName = "(local)";
$connectionInfo = array("Database"=>"rai_task4","UID"=>"root", "PWD"=>"");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false){
    echo "Error in connection.\n";
    die( print_r( sqlsrv_errors(), true));
}
$res = sqlsrv_query($conn, $query);  
if($result === false){
     die( print_r( sqlsrv_errors(), true));
}

if(sqlsrv_has_rows($result) != 1){
       echo "User/password not found";
}else{

#creates sessions
    while($row = sqlsrv_fetch_array($result)){
       $_SESSION['username'] = $row['username'];
       $_SESSION['name'] = $row['name'];
    }
}
?>