<?php
include '../authenticate.php';
require '../database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $db = Database::instance();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($_POST['_METHOD'] == 'PATCH') {
    $sql = "UPDATE mutations set name = ?, date = ?, type =?, amount =?, note=? WHERE id = ?";
    $q = $db->prepare($sql);
    if ($q->execute(array($_POST['name'],$_POST['date'],$_POST['type'],$_POST['amount'],$_POST['note'], $_POST['id']))) {
      $message = 'Update Success';
    } else {
      $message = 'Update failed';
    }
  } else if ($_POST['_METHOD'] == 'DELETE') {
    $sql = "DELETE FROM mutations  WHERE id = ?";
    $q = $db->prepare($sql);
    if ($q->execute(array($_POST['id']))) {
      $message = 'Delete Success';
    } else {
      $message = 'Delete failed';
    }
  } else {
    $sql = "INSERT INTO mutations (user_id, name,date,type,amount,note) values(?, ?, ?, ?, ?, ?)";
    $q = $db->prepare($sql);
    if ($q->execute(array($_SESSION["user_id"], $_POST['name'],$_POST['date'],$_POST['type'],$_POST['amount'],$_POST['note']))) {
      $message = 'Insert Success';
    } else {
      $message = 'Insert failed';
    }
  }
  Database::release();
  header("Location: index.php?message".$message);
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RAI - Mutations</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/Aristo.css">
    <script src="/assets/javascript/jquery.min.js"></script>
    <script src="/assets/javascript/jquery-ui.min.js"></script>
    <script src="/assets/javascript/application.js"></script>
</head>

<body>
<?php include "../header.php" ?>

<div class="container">
  <form method="post" action="new.php">
    <button type="submit" class="btn-minimal">New</button>
  </form>
  <br>
  <table class="datatable" id="mutations">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Type</th>
        <th>Amount</th>
        <th>Note</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
</body>
</html>
<?php } ?>
