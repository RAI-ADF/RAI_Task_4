<?php
include '../authenticate.php';
require '../database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $db = Database::instance();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($_POST['_METHOD'] == 'PATCH') {
    $sql = "UPDATE mutations set name = ?, date = ?, type =?, amount =?, note=? WHERE id = ?";
    $q = $db->prepare($sql);
    if ($q->execute(array($_POST['name'],$_POST['date'],$_POST['type'],$_POST['amount'],$_POST['note'], $_POST['id']))) {
      $message = 'Update Success';
    } else {
      $message = 'Update failed';
    }
  } else if ($_POST['_METHOD'] == 'DELETE') {
    $sql = "DELETE FROM mutations  WHERE id = ?";
    $q = $db->prepare($sql);
    if ($q->execute(array($_POST['id']))) {
      $message = 'Delete Success';
    } else {
      $message = 'Delete failed';
    }
  } else {
    $sql = "INSERT INTO mutations (user_id, name,date,type,amount,note) values(?, ?, ?, ?, ?, ?)";
    $q = $db->prepare($sql);
    if ($q->execute(array($_SESSION["user_id"], $_POST['name'],$_POST['date'],$_POST['type'],$_POST['amount'],$_POST['note']))) {
      $message = 'Insert Success';
    } else {
      $message = 'Insert failed';
    }
  }
  Database::release();
  header("Location: index.php?message".$message);
} else {
?>

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

<div class="container">
  <table class="table" id="mutations">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Type</th>
        <th>Amount</th>
        <th>Note</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
     $db = Database::instance();
     $sql = 'SELECT * FROM mutations ORDER BY id DESC';
     foreach ($db->query($sql) as $data) {
        echo '<tr>';
        echo '<td>'. $data['id'] . '</td>';
        echo '<td>'. $data['name'] . '</td>';
        echo '<td>'. $data['date'] . '</td>';
        echo '<td>'. $data['type'] . '</td>';
        echo '<td>'. $data['amount'] . '</td>';
        echo '<td>'. $data['note'] . '</td>';
        ?>
        <td>
          <form action="show.php">
            <input type="hidden" name="_METHOD" value="GET" />
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            <button type="submit">Show</button>
          </form>
          <form action="edit.php">
            <input type="hidden" name="_METHOD" value="GET" />
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            <button type="submit">Edit</button>
          </form>
          <form method="post">
            <input type="hidden" name="_METHOD" value="DELETE" />
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            <button type="submit">Delete</button>
          </form>
        </td>
        <?php
        echo '</tr>';
     }
     Database::release();
    ?>
    </tbody>
  </table>
</div>
</body>
</html>
<?php } ?>
