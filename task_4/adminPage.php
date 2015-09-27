<?php
	require('_authenticateAdmin.php');
	include '_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Admin Page</h1>
	<div>
		<div style="float: left;">
			<table>
				<thead>
					<tr>
						<td>no</td>
						<td>username</td>
						<td>task</td>
						<td>date</td>
						<td>time</td>
					</tr>
				</thead>
				<tbody>
					<?php
						$i=1;
						$sql = "select * from todo join user on(todo.userid=user.id)";
						$res = $conn->query($sql);
						if($res->num_rows>0){
							while ($row=$res->fetch_assoc()) {
					?>
						<tr>
							<td><?php echo "$i"; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['task']; ?></td>
							<td><?php echo $row['dates']; ?></td>
							<td><?php echo $row['time']; ?></td>
						</tr>
					<?php
							$i++;
							}
						}
					?>
				</tbody>
			</table>
		</div>
		<div style="float: right;">
			<table>
				<thead>
					<tr>
						<td>no</td>
						<td>username</td>
						<td>name</td>
						<td>email</td>
						<td>level</td>
						<td>birth place</td>
						<td>birth date</td>
						<td>option</td>
					</tr>
				</thead>
				<tbody>
					<?php
						$i=1;
						$sql = "select * from user";
						$res = $conn->query($sql);
						if($res->num_rows>0){
							while ($row=$res->fetch_assoc()) {
					?>
					<tr>
						<td><?php echo "$i"; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['level']; ?></td>
						<td><?php echo $row['birth_place']; ?></td>
						<td><?php echo $row['birth_date']; ?></td>
						<td><a <?php echo "href='_deleteUser.php?id={$row['id']}'"; ?>>delete</a></td>
					</tr>
					<?php
							}
						}

					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
