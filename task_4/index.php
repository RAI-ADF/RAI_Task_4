<?php
require_once('authenticate.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RAI - Home</title>
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
  <?php include "header.php" ?>

  <div class="container">
    <span><?php echo $_GET["message"] ?></span>
    <p id="center">
      Welcome, Please select menu from navigation above!
    </p>
  </div>
</div>
</body>
</html>
