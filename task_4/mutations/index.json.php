<?php
include '../authenticate.php';
require '../database.php';

$db = Database::instance();
$sql = 'SELECT * FROM mutations ORDER BY id DESC';
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
