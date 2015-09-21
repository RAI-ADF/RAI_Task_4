<?php
include '../authenticate.php';
include "../database.php";

if (!isset($_GET['id'])) {
  $message = 'Data not found';
  header('Location: index.php?message='.$message);
} else {
  $db = Database::instance();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM users where id = ?";
  $q = $db->prepare($sql);
  $q->execute(array($_GET['id']));
  $data = $q->fetch(PDO::FETCH_ASSOC);
  Database::release();

  $action = 'PATCH';
  include '_form.php';
}
?>
