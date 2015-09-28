<?php
	include_once 'connect.php';
	
	$q = $_REQUEST["q"];
	$hint = "";

	$sql = "SELECT * FROM user_nya WHERE name = '$q'";
	$result = mysql_query($sql);
	
	if (mysql_num_rows($result) > 0) {
		while($row = mysql_fetch_array($result)) {
?>
						<table>
							<tr>
								<td>nama</td>
								<td> : </td>
								<td><?php echo $row['name'] ?></td>
							</tr>
							<tr>
								<td>email</td>
								<td> : </td>
								<td><?php echo $row['email'] ?></td>
							</tr>
							<tr>
								<td>date birth</td>
								<td> : </td>
								<td><?php echo $row['tanggal'] ?></td>
							</tr>
							<tr>
								<td>place birth</td>
								<td> : </td>
								<td><?php echo $row['Tempat'] ?></td>
							</tr>
						</table>
						<hr>
<?php
		
		}
	}else{
		$sql = "SELECT * FROM user_nya";
		$result = mysql_query($sql);
		if (mysql_num_rows($result) > 0) {
		while($row = mysql_fetch_array($result)) {
?>
						<table>
							<tr>
								<td>nama</td>
								<td> : </td>
								<td><?php echo $row['name'] ?></td>
							</tr>
							<tr>
								<td>email</td>
								<td> : </td>
								<td><?php echo $row['email'] ?></td>
							</tr>
							<tr>
								<td>date birth</td>
								<td> : </td>
								<td><?php echo $row['tanggal'] ?></td>
							</tr>
							<tr>
								<td>place birth</td>
								<td> : </td>
								<td><?php echo $row['Tempat'] ?></td>
							</tr>
						</table>
						<hr>
<?php
		
		}
	}
	}
?> 