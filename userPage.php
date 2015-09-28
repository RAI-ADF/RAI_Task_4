<!DOCTYPE html>
<?php
	session_start();
?>
<html>
<head>
<?php
	if(!isset($_SESSION['user'])){
		die("Maaf, anda belum melakukan login!");
	}else if($_SESSION['level'] == "admin"){
		die("Admin dilarang membuka halaman ini LOL :v");
	}
?>
<title>Halaman User</title>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript">
	$("document").ready(function(){
		$.getJSON('userPage.php', {get_param: 'value'}, function(data){
			$.each(data, function(index, element){
				$('#tabledata').find('tbody')
					.append($('<tr>')
						.append(
							'<td>'+element.username+'</td>'+
							'<td>'+element.nama+'<td>'+
							'<td>'+element.email+'<td>'+
							'<td>'+element.lahir+'<td>'+
							'<td>'+element.provinsi+'<td>'+
							'<td>'+element.kota+'<td>'+
							'<td>'+element.gender+'<td>'
						)
					)
			})
		})
	})
</script>
</head>
<body>
<?php
	include_once "menu.php";
	if(isset($_COOKIE["cookie"])){
		echo "<br><br><br>Welcome " .$_COOKIE["cookie"] ."<br />";
	}
	$username = $_SESSION['user'];
	include "Konek.php";
	$query = "SELECT * FROM user WHERE username ='$username'";
	$rquery = mysql_query($query);
	while($result = mysql_fetch_assoc($rquery)){
		$arrayjson[] = $result;
	}
	echo json_encode($arrayjson);
?>
<br><br><br>
<table border="1" width="60%" id="tabledata">
		<thead>
			<tr>
            	<th>Username</th>
            	<th>Nama</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Jenis Kelamin</th>
        	</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</body>
</html>
