<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

	<?php
		$q = intval($_GET['q']);
		
		$con = mysqli_connect('localhost','root','','task4');
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}

		mysqli_select_db($con,"ajax_demo");
		if($q == null) {
			$sql="SELECT * FROM user";
		}else{
			$sql="SELECT * FROM 'user' WHERE username = '".$q."'";
			
		}
		$result = mysqli_query($con,$sql);

		echo "<table>
		<tr>
		<th>Username</th>
		<th>Password</th>
		<th>Name</th>
		<th>Email</th>
		<th>Place Of Birth</th>
		<th>Date Of Birth</th>
		</tr>";
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['password'] . "</td>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['placeOfBirth'] . "</td>";
			echo "<td>" . $row['dateOfBirth'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);
	?>
</body>
</html>