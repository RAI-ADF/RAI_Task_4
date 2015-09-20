<?php require_once 'authenticate.php' ?>
<?php require 'database.php' ?>

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
        echo '<td>'. $data['id'] . '</td>';
        echo '<td>'. $data['name'] . '</td>';
        echo '<td>'. $data['date'] . '</td>';
        echo '<td>'. $data['type'] . '</td>';
        echo '<td>'. $data['amount'] . '</td>';
        echo '<td>'. $data['note'] . '</td>';
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
