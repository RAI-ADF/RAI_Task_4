<?php
include '../authenticate.php';
require '../database.php';

$db = Database::instance();

$sql = 'SELECT * FROM mutations WHERE user_id="'.$_SESSION["user_id"].'" ORDER BY id DESC';
if (isset($_GET["search"])) {
  $sql = 'SELECT * FROM mutations WHERE name LIKE "%'. $_GET["search"] .'%" AND user_id="'.$_SESSION["user_id"].'" ORDER BY id DESC';
}

$data = array();

foreach ($db->query($sql) as $raw) {
  $data[] = array(
    'id' => $raw['id'],
    'name' => $raw['name'],
    'date' => $raw['date'],
    'type' => $raw['type'],
    'amount' => $raw['amount'],
    'note' => $raw['note']
  );
}
echo (json_encode($data));
Database::release();
?>
