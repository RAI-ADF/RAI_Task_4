<?php
	
	
	include('connect.php');
	
	$query = "select * from movie";
	$jsonarray = array();

	$result=mysql_query($query);

	while($row=mysql_fetch_assoc($result))
	{
		$jsonarray []=$row;
	}
	
	echo json_encode($jsonarray);

	

?>