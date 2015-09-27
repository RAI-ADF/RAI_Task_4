<?php
include('config.php');
include('cek-login.php');
?>
<h1>Upload Data Pegawai</h1>
<form method="post" enctype="multipart/form-data" action="proses.php?msg=proses1">
Silakan Pilih File Excel : <input name="userfile" type="file">
<input name="upload" type="submit" value="Upload">
</form>

<form  method="post" name="logout" action="logout.php">
	<input type="submit" name="logout" value="Logout" />
</form>
 
 
</br>
<html>  
    <head>  
    <title>Data Pegawai</title> 
	<?php
		$tanggal = Date('d-m-Y');
		Echo "Tanggal sekarang adalah $tanggal <br>";
	?>
	<script type="text/javascript">  
		// 1 detik = 1000  
		window.setTimeout("waktu()",1000);    
		function waktu() {     
			var tanggal = new Date();    
			setTimeout("waktu()",1000);    
			document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();  
		}  
	</script>	
	</head>
	
	<body bgcolor="white" text="black" onload="waktu()">  	
		<table align=left style="border:1px solid black" bgcolor="#CFFCFF"><tr><td>  
			<div id="output">  
			</div></td></tr> 
		</table>  
	</body> 
	

</html>