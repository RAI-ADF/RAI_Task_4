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
  <form action="../mutations/index.php" method="post">
    <input type="hidden" name="_METHOD" value="<?php echo $action; ?>" />
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
    Name:<br>
    <input type="text" name="name" value="<?php echo $data['name']; ?>">
    <br>
    Date:<br>
    <input type="text" name="date" value="<?php echo $data['date']; ?>">
    <br>
    Type:<br>
    <input type="text" name="type" value="<?php echo $data['type']; ?>">
    <br>
    Amount:<br>
    <input type="text" name="amount" value="<?php echo $data['amount']; ?>">
    <br>
    Note:<br>
    <input type="text" name="note" value="<?php echo $data['note']; ?>">
    <br>
    <input type="submit" value="Save">
  </form>
</body>
</html>
