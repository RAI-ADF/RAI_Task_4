<html>
	<head>
		<title></title>	
	</head>
	<body>
		<table border=1>
			<tr>
				<th>Number</th>
				<th>Provinsi</th>
				<th>Kota</th>
			</tr>
		<?php
		include "koneksi.php";
		$query="SELECT * FROM tbinput";

		if (mysql_query($query)) {     
		$result=mysql_query($query);    
		} else die ("Error menjalankan query". mysql_error());
		$n = 1;
		if (mysql_num_rows($result) > 0)    
		{    
		     //menampilkan hasil query     
		     while($row = mysql_fetch_array($result)) { 
		     	  echo "<tr>";
		     	  echo "<td>".$n++."</td>";
		          echo "<td>".$row['provinsi']."</td>";
		          echo "<td>".$row['kota']."</td>";    
		          echo "<td><a href='editform.php?id=".$row['id']."'>Edit</a></td>";
		          echo "</tr>";
		     }     
		}    
		else echo "Tidak ada Record didalam tabel";    
		?>
		</table>
	</body>
</html>