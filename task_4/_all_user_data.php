<?php
	include '_connection.php';
	$i=1;
	$sql = "select id,username from user";
	$res = $conn->query($sql);
	if($res->num_rows>0){
		while ($row=$res->fetch_assoc()) {
?>
<tr>
	<td><?php echo "$i"; ?></td>
	<td><?php echo $row['username']; ?></td>
</tr>
<?php			
			$i++;
		}
	}
?>