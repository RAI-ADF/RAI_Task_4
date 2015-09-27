<?php
/**
 * Created by PhpStorm.
 * User: rizki
 * Date: 24/09/15
 * Time: 10:41
 */

$hostdb = "localhost";
$userdb = "rizki";
$passdb = "090808";
$db = "db_task4";

$conn = new mysqli($hostdb,$userdb,$passdb,$db);
if($conn->error){
    echo "Failed to connect : ".$conn->connect_error;
}