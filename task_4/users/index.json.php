<?php
include '../authenticate.php';
require '../database.php';

$db = Database::instance();
$sql = 'SELECT * FROM users ORDER BY id DESC';
$data = array();

foreach ($db->query($sql) as $raw) {
  $data[] = array(
    'id' => $raw['id'],
    'name' => $raw['name'],
    'date' => $raw['username'],
    'type' => $raw['password'],
    'amount' => $raw['email'],
    'note' => $raw['birthplace'],
    'note' => $raw['birthdate']
  );
}
echo (json_encode($data));
Database::release();
?>
