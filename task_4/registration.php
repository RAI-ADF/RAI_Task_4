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
    <title>RAI - Register</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/Aristo.css">
    <script src="/assets/javascript/jquery.min.js"></script>
    <script src="/assets/javascript/jquery-ui.min.js"></script>
    <script src="/assets/javascript/application.js"></script>
</head>

<?php include "header.php" ?>

<section id="login-box">
  <h1>Register</h1>
  <form id="login" method="post" class="minimal">
    <?php if (isset($_GET['message'])) echo $_GET['message'].'<br>'; ?>


    <input type="text" name="username" id="username" placeholder="Username" required="required" />
    <input type="password" name="password" id="password" placeholder="Password" onkeyup="validate_password(); return false;" required="required" />
    <input id="password_confirmation" name="password_confirmation" type="password"  placeholder="Password Confirmation" onkeyup="validate_password(); return false;" required>
    <input id="name" name="name" type="text" placeholder="Name">
    <input id="email" name="email" type="text" onkeyup="validate_email(); return false;" placeholder="Email">
    <select id="province" name="province" class="province">
      <option>Province</option>
      <option value="Aceh">Aceh</option>
      <option value="Jawa Barat">Jawa Barat</option>
      <option value="Papua">Papua</option>
    </select>
    <select id="city" name="city" class="city">
      <option>City</option>
    </select>
    <input type="hidden" id="birthplace" name="birthplace" value="">
    <input id="birthplace" name="birthplace" type="text" placeholder="birthplace">
    <input id="birthdate" name="birthdate" type="text" class="date" placeholder="Birthdate">
    <button type="submit" class="btn-minimal">Register</button>
  </form>
</section>

<section id="login-help">
  <p>Have account? <a href="login.php">Click here to login</a></p>
</section>

</body>
</html>
<?php } ?>
