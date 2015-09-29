<?php
	include 'koneksi.php';
	session_start();
?>
<html>
<head>
</head>
<body>
	<ul>
		<li>View user</li>
		<li><a href>View data</a></li>
	</ul>
	<h2>View User</h2>
	Search <input type="text" placeholder="search">
	<table>
		<?php
			$query = "SELECT * FROM `surat_instruksi_walikota`";
			$hasil = mysql_query($query);
			$counter=0;
			while($row = mysql_fetch_array($hasil)){
			$counter++;
			$nomor = $row['nomor'];
		?>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Tempat Lahir</th>
			<th>Tanggal lahir</th>
		</tr>
		<tr>
			<td><?php echo $counter; ?> </td>
			<td><?php echo $row['username']; ?>  </td>
			<td><?php echo $row['password']; ?> </td>
			<td><?php echo $row['nama']; ?> </td>
			<td><?php echo $row['email']; ?> </td>
			<td><?php echo $row['place_of_birth']; ?> </td>
			<td><?php echo $row['date_of_birth']; ?> </td>
		</tr>
	</table>
</body>
</html>
