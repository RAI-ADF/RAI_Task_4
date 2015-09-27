<?php
/**
 * Created by PhpStorm.
 * User: rizki
 * Date: 24/09/15
 * Time: 10:48
 */

session_start();
if(empty($_SESSION["user"]) || $_SESSION["user"] == null){
    header("Location: login.php");
}