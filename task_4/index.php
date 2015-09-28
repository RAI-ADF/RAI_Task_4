<?php
include('login.php');

if(isset($_SESSION['login_user'])){
  header("location: clientPage.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Milarian | Login</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="main">
    <div id="login">
      <h1>Milarian</h1>
      <form action="" method="post">
        <input id="form" name="username" placeholder="username" type="text">
        <input id="form" name="password" placeholder="**********" type="password">
        <input id="logB" name="submit" type="submit" value="Login">
        <input id="regB" name="signup" type="button" onclick="location.href='regis-form.php';" value="Registration">
        <span><center><?php echo $error; ?></center></span>
      </form>
    </div>
  </div>
</body>

</html>
