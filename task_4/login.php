<?php
require 'database.php';

$username = null;
$password = null;

if (isset($_GET['logout'])) {
  session_start();
  $_SESSION["user_id"] = null;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $message = null;

  if(!empty($_POST["username"]) && !empty($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $db = Database::instance();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM users where username = ?";
    $q = $db->prepare($sql);
    $q->execute(array($username));
    $user = $q->fetch(PDO::FETCH_ASSOC);
    Database::release();

    if($user && $user['password'] == $password) {
      session_start();
      $_SESSION["user_id"] = $user['id'];
      $message = 'Login successs';
      header('Location: index.php?message='.$message);
    }
    else {
      $message = 'Login failed';
      header('Location: login.php?message='.$message);
    }

    } else {
      $message = 'Login failed';
      header('Location: login.php?message='.$message);
    }
  } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="assets/javascript/application.js"></script>
</head>

<?php include "header.php" ?>

<h1>Login</h1>
<form id="login" method="post">
  <?php if (isset($_GET['message'])) echo $_GET['message'].'<br>'; ?>
  <label for="username">Username:</label><br>
  <input id="username" name="username" type="text" required><br>
  <label for="password">Password:</label><br>
  <input id="password" name="password" type="password" required><br>
  <input type="submit" value="Login">
</form>

</body>
</html>
<?php } ?>
