<?php
  require '../database.php';

  if ( !empty($_POST)) {
    $db = Database::instance();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO mutations (name,date,type,amount,note) values(?, ?, ?, ?, ?)";
    $q = $db->prepare($sql);
    $q->execute(array($_POST['name'],$_POST['date'],$_POST['type'],$_POST['amount'],$_POST['note']));
    Database::release();
  }
?>
