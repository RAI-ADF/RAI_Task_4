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
    <!--HTML 5 + IE HACK--><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<?php include "header.php" ?>

<section id="login-box">
  <h1>Login</h1>
  <form id="login" method="post" class="minimal">
    <?php if (isset($_GET['message'])) echo $_GET['message'].'<br>'; ?>


    <input type="text" name="username" id="username" placeholder="Username" required="required" />
    <input type="password" name="password" id="password" placeholder="Password" required="required" />
    <button type="submit" class="btn-minimal">Sign in</button>
  </form>
</section>
<section id="login-help">
  <p>Don't have account? <a href="#">Click here to register.</a></p>
</section>

</body>
</html>
<?php } ?>
