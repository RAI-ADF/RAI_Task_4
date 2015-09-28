<?php
include '../authenticate.php';
$data = null;
$action = 'POST';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>RAI - New user</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/assets/javascript/application.js"></script>
</head>

<body>
<?php include "../header.php" ?>

<div class="container">
  <h2>New User</h2>
  <?php include '_form.php'; ?>
</div>
</body>
</html>
