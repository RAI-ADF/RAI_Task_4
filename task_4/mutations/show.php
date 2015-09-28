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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/assets/javascript/application.js"></script>
</head>

<body>
  <?php include "../header.php" ?>

  Name: <?php echo $data['name']; ?>
  <br>
  Date: <?php echo $data['date']; ?>
  <br>
  Type: <?php echo $data['type']; ?>
  <br>
  Amount: <?php echo $data['amount']; ?>
  <br>
  Note: <?php echo $data['note']; ?>
</body>
</html>
