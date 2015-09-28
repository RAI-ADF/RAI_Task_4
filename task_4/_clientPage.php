<?php
	function dpDateToDbDate($date){
		$time = strtotime($date);
		return date('Y-m-d', $time);
	}

	include('_connection.php');

	$task = $_POST['task'];
	$date = $_POST['date'];
	$mysql_date = dpDateToDbDate($date);
	$time = $_POST['time'];
	$formated_time = DateTime::createFromFormat('H:i', $time);
	$formatted = $formated_time->format('H:i:s');
	$mysql_time = date('H:m', $time);
	echo $mysql_time;
	echo $time;
	echo $formatted;
	
	$query = "INSERT into todo (userid, task, dates, time) values ({$_COOKIE['userid']}	,'{$task}', '{$date}', '{$formatted}')";
	//echo $date;
	if ($conn->query($query) === TRUE) {
	    echo "New record created successfully";
	    header("location: clientPage.php");
	} else {
	    echo "Error: " . $query . "<br>" . $conn->error;
	    header("location: clientPage.php");
	}
 	
	$conn->close();

?>