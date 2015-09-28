<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<?php
				include "config.php";
				session_start();
                	
                $nama_siswa = isset($_POST['nama_siswa'])?$_POST['nama_siswa']:'';
				$nama_ortu = $_SESSION['username_ortu'];	
				
				$query1 = mysql_query("select*from siswa join ortu using (id_siswa) where username_ortu = '$nama_ortu'");
				$kol = mysql_fetch_array($query1);
				$nama = $kol['nama_siswa'];
				if(isset($_POST['submit'])){
					$query=mysql_query("select *from mapel where nama_siswa = '$nama'");
						
				}		
				
    ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>view user</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
</head>
<body>
	
	<div id="body">
		<div class="article">
			<table style="width:100%">
				<ul>
				<form method = "post" name="form1">
					<li>
						<span>NAMA :</span> <?php echo $nama ?>
						<input type="submit" name="submit" id="submit" value="nilai">
					</li>
					
					
				</ul>
				<br><br>
				<span> Nilai :</span>
				<?php while ($row = mysql_fetch_array($query) ) {?>		
					
				</li>
				<tr>
					<td><?php echo $row['nama_mapel'] ?></td>		
					<td><?php echo $row['nilai'] ?></td>
				</tr>
				<?php } ?>
  
			</table>
		</div>
	</div>
	<div id="footer">
		<div>
			<div class="connect">
				<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
				<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
				<a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
			</div>
			<p>
				&copy; copyright 2023 | all rights reserved.
			</p>
		</div>
	</div>
</body>
</html>