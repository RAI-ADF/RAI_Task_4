<?php

	include '_connection.php';

	$sql = "SELECT * from todo where userid={$_COOKIE['userid']}";
	//echo "$sql";;
	$res = $conn->query($sql);
	$emparray[] = array();
	while ($row = $res->fetch_assoc()) {
		$emparray[] = $row;
	}
	echo json_encode($emparray);
?>