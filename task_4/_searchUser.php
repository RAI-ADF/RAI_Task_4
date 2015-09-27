<?php
	include '_connection.php';

	$username = $_GET['username'];
	//echo $username;
	$sql = "SELECT * FROM user where username='{$username}'";
	//echo $sql;
	$res = $conn->query($sql);
	if($res->num_rows>0){
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
<?php
	}else{
		echo 0;
	}
?>