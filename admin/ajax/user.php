
<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("naik_gunung") or die(mysql_error());

	$query = "select * from user";
	$rquery = mysql_query($query);
	while($result = mysql_fetch_assoc($rquery)){
		$arrayjson[] = $result;
	}
	echo json_encode($arrayjson);
?>