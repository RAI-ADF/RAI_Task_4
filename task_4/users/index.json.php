<?php
include '../authenticate.php';
require '../database.php';

$db = Database::instance();
$sql = 'SELECT * FROM users ORDER BY id DESC';
if (isset($_GET["search"])) {
  $sql = 'SELECT * FROM users WHERE name LIKE "%'. $_GET["search"] .'%" ORDER BY id DESC';
}
$data = array();

foreach ($db->query($sql) as $raw) {
  $data[] = array(
    'id' => $raw['id'],
    'name' => $raw['name'],
    'username' => $raw['username'],
    'password' => $raw['password'],
    'email' => $raw['email'],
    'birthplace' => $raw['birthplace'],
    'birthdate' => $raw['birthdate']
  );
}
echo (json_encode($data));
Database::release();
?>
