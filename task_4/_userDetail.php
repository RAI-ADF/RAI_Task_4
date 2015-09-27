<?php
	include '_connection.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM user where id={$id}";
	$res = $conn->query($sql);
	$row = $res->fetch_assoc();
?>
<p>
	<span>id : <?php echo $row['id']; ?></span><br>
	<span>name : <?php echo $row['name']; ?></span><br>
	<span>username : <?php echo $row['username']; ?></span><br>
	<span>birth place : <?php echo $row['birth_place']; ?></span><br>
	<span>birth date : <?php echo $row['birth_date']; ?></span><br>
	<span style="color: blue;"><a onclick="closeDetail()" href="#">close</a></span><br>
</p>