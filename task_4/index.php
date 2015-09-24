<?php
	require('_authenticate.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>to do</h1>
	<div>
		<form method="post" action="_index.php">
			<div>
				<label>task</label>
				<input type="text" name="task" placeholder="write down your task">
			</div>
			<div>
				<label>date</label>
				<input type="date" name="date">
			</div>
			<div>
				<label>time</label>ss
				<input type="time" name="time">
			</div>
			<div>
				<button type="submit">submit</button>
			</div>
		</form>
	</div>
</body>
</html>
