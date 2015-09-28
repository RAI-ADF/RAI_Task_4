<?php
	require('_authenticateUser.php');
	include '_connection.php';
	$sql = "SELECT * from todo where id={$_GET['id']}";
	$res = $conn->query($sql);
	$row = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>edit data</h1>
	<div>
		<form method="post" action="_editTodo.php">
			<div>
				<label>task</label>
				<input type="text" name="task" value="<?php echo $row['task']; ?>">
			</div>
			<div>
				<label>date</label>
				<input type="date" name="date" value="<?php echo $row['dates']; ?>">
			</div>
			<div>
				<label>time</label>
				<input type="time" name="time" value="<?php echo $row['time']; ?>">
			</div>
			<div>
				<button type="submit">submit</button>
			</div>
		</form>
	</div>
</body>
</html>