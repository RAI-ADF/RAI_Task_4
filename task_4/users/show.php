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
}
?>

Name: <?php echo $data['username']; ?>
<br>
Password: <?php echo $data['password']; ?>
<br>
Name: <?php echo $data['name']; ?>
<br>
Email: <?php echo $data['email']; ?>
<br>
Birthplace: <?php echo $data['birthplace']; ?>
<br>
Birthdate: <?php echo $data['birthdate']; ?>
