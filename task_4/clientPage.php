<?php require_once 'authenticate.php' ?>
<?php require 'database.php' ?>
<?php echo $current_user_id ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <table class="table">
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
        echo '<td>'. $row['id'] . '</td>';
        echo '<td>'. $row['name'] . '</td>';
        echo '<td>'. $row['date'] . '</td>';
        echo '<td>'. $row['type'] . '</td>';
        echo '<td>'. $row['amount'] . '</td>';
        echo '<td>'. $row['note'] . '</td>';
        echo '<td>Edit Delete</td>';
        echo '</tr>';
     }
     Database::release();
    ?>
    </tbody>
  </table>
</div>
</body>
</html>
