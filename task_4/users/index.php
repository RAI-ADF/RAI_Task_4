<?php
include '../authenticate.php';
require '../database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $db = Database::instance();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($_POST['_METHOD'] == 'PATCH') {
    $sql = "UPDATE users set name = ?, username = ?, password =?, email =?, birthplace=? , birthdate=? WHERE id = ?";
    $q = $db->prepare($sql);
    if ($q->execute(array($_POST['name'],$_POST['username'],$_POST['password'],$_POST['email'],$_POST['birthplace'],$_POST['birthdate'], $_POST['id']))) {
      $message = 'Update Success';
    } else {
      $message = 'Update failed';
    }
  } else if ($_POST['_METHOD'] == 'DELETE') {
    $sql = "DELETE FROM users  WHERE id = ?";
    $q = $db->prepare($sql);
    if ($q->execute(array($_POST['id']))) {
      $message = 'Delete Success';
    } else {
      $message = 'Delete failed';
    }
  } else {
    $sql = "INSERT INTO users (name, username, password, email, birthplace, birthdate) values(?, ?, ?, ?, ?, ?)";
    $q = $db->prepare($sql);
    if ($q->execute(array($_SESSION["name"], $_POST['username'],$_POST['password'],$_POST['email'],$_POST['birthplace'],$_POST['birthdate']))) {
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
    <title>RAI - Users</title>
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
  <div class='form-inline'>
    <form method="post" action="new.php">
      <button type="submit" class="btn-minimal">New</button>
    </form>
    <right>
      <form class="minimal">
        <input type="search" id="search" placeholder="Type and enter to search">
      </form>
    </right>
  </div>
  <br>

  <table class="datatable" id="users">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Birthplace</th>
        <th>Birthdate</th>
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
