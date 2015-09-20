<?php
require 'database.php';

$username = null;
$password = null;

if ($_GET['logout']) {
  session_start();
  $_SESSION["user_id"] = null;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $message = null;

  if(!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["password_confirmation"])) {
    if ($_POST["password"] != $_POST["password_confirmation"]) {
      $message = 'Password and Password Confirmation not match';
      header('Location: registration.php?message='.$message);
    } else {

      $username = $_POST["username"];
      $password = $_POST["password"];
      $password_confirmation = $_POST["password_confirmation"];
      $name = $_POST["name"];
      $email = $_POST["email"];
      $birthplace = $_POST["birthplace"];
      $birthdate = $_POST["birthdate"];

      $db = Database::instance();
      $sql = "INSERT INTO users (username,password,name,email,birthplace,birthdate) values(?, ?, ?, ?, ?, ?)";
      $q = $db->prepare($sql);
      $success = $q->execute(array($username,$password,$name,$email,$birthplace,$birthdate));
      Database::release();

      if($success) {
        $message = 'Registration successs';
        header('Location: login.php?message='.$message);
      }else {
        $message = 'Registration failed';
        header('Location: registration.php?message='.$message);
      }
    }
  } else {
    header('Location: registration.php');
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
</head>

<h1>Login</h1>
<form id="login" method="post">
  <?php if (isset($_GET['message'])) echo $_GET['message'].'<br>'; ?>
  <label for="username">Username:</label><br>
  <input id="username" name="username" type="text" required><br>

  <label for="password">Password:</label><br>
  <input id="password" name="password" type="password" required><br>

  <label for="password_confirmation">Password Confirmation:</label><br>
  <input id="password_confirmation" name="password_confirmation" type="password" required><br>

  <label for="name">Name::</label><br>
  <input id="name" name="name" type="name"><br>

  <label for="email">Email:</label><br>
  <input id="email" name="email" type="text"><br>

  <label for="birthplace">Birthplace:</label><br>
  <input id="birthplace" name="birthplace" type="text"><br>

  <label for="birthdate">Birthdate:</label><br>
  <input id="birthdate" name="birthdate" type="text"><br>

  <input type="submit" value="Register">
</form>

</body>
</html>
<?php } ?>
