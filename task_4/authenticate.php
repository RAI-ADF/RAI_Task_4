<?php
$current_user_id  = null;
session_start();
if(empty($_SESSION["user_id"]) || $_SESSION["user_id"] == null) {
    header('Location: login.php');
} else {
  $current_user_id = $_SESSION["user_id"];
}
?>
