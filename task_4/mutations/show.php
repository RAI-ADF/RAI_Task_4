<?php
include '../authenticate.php';
include "../database.php";

if (!isset($_GET['id'])) {
  $message = 'Data not found';
  header('Location: index.php?message='.$message);
} else {
  $db = Database::instance();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM mutations where id = ?";
  $q = $db->prepare($sql);
  $q->execute(array($_GET['id']));
  $data = $q->fetch(PDO::FETCH_ASSOC);
  Database::release();
}
?>

Name: <?php echo $data['name']; ?>
<br>
Date: <?php echo $data['date']; ?>
<br>
Type: <?php echo $data['type']; ?>
<br>
Amount: <?php echo $data['amount']; ?>
<br>
Note: <?php echo $data['note']; ?>
