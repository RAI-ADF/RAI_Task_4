<?php
/**
 * Created by PhpStorm.
 * User: rizki
 * Date: 27/09/15
 * Time: 6:48
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'database.php';
    $data = $_POST["note"];
    $data = intval($data);
    $sql = "DELETE FROM notes WHERE notes.id =".$data;
    $conn->query($sql);
    header("Location: index.php");
}