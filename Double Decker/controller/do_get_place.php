<?php
	include("connect.php");
	$id = 0;
	if (isset($_GET["id"])) {
		$id = $_GET["id"];
	}
	$query = $connection->query("select * from place where id_parent='".$id."'");
	$result = array();
	while ($fetch=$query->fetch_assoc()) {
		$result[$fetch["id_place"]]=$fetch["place_name"];
	}
	echo json_encode($result);