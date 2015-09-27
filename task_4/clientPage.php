<?php
	require('_authenticateUser.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#datepicker" ).datepicker({
				dateFormat: 'yy-mm-dd'
			});
		});
	</script>
</head>
<body>
	<?php include 'layout/header.php'; ?>
	<div class="content">
		<h1>input data</h1>
		<h1>to do</h1>
		<div>
			<form method="post" action="_clientPage.php">
				<div>
					<label>task</label>
					<input type="text" name="task" placeholder="write down your task">
				</div>
				<div>
					<label>date</label>
					<input id="datepicker" type="text" name="date">
				</div>
				<div>
					<label>time</label>
					<input type="time" name="time">
				</div>
				<div>
					<button type="submit">submit</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
