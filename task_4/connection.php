<?php 
$serverName = "(local)";
$connectionInfo = array("Database"=>"rai_task4","UID"=>"root", "PWD"=>"");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false){
    echo "Error in connection.\n";
    die( print_r( sqlsrv_errors(), true));
}
?>