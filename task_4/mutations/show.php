<?php
include '../authenticate.php';
include "../database.php";

if (!isset($_GET['id'])) {
  $message = 'Data not found';
  header('Location: index.php?message='.$message);
} else {
  $db = Database::instance();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM mutations where id = ?";
  $q = $db->prepare($sql);
  $q->execute(array($_GET['id']));
  $data = $q->fetch(PDO::FETCH_ASSOC);
  Database::release();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/javascript/jquery.min.js"></script>
    <script src="/assets/javascript/application.js"></script>
</head>

<body>
<?php include "../header.php" ?>

<div class="container">
  <h2><?php echo $data['name']; ?></h2>

  <b>Name:</b>
  <p><?php echo $data['name']; ?></p>
  <br>
  <b>Date:</b>
  <p><?php echo $data['date']; ?></p>
  <br>
  <b>Type:</b>
  <p><?php echo $data['type']; ?></p>
  <br>
  <b>Amount:</b>
  <p><?php echo $data['amount']; ?></p>
  <br>
  <b>Note:</b>
  <p><?php echo $data['note']; ?></p>

  <br><br>

  <div class="form-inline">
    <form action="edit.php">
      <input type="hidden" name="_METHOD" value="GET" />
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
      <button type="submit" class="plain">Edit</button>
    </form> | 
    <form method="post">
      <input type="hidden" name="_METHOD" value="DELETE" />
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
      <button type="submit" class="plain">Delete</button>
    </form>
  </div>
</div>
</body>
</html>
