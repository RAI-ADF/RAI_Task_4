<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['user'])){
		die("Maaf, anda belum melakukan login!");
	}else if($_SESSION['level'] == "user"){
		die("Maaf, halaman khusus Admin!");
	}
?>
<html>
<head>
<title>Halaman Admin</title>
<script type="text/javascript" language="javascript">
	var recReq = getXmlHttpRequestObject();
	var _documentid = 'content';
	function getXmlHttpRequestObject() {
		if(window.XMLHttpRequest) { 
			return new XMLHttpRequest();
		}else if(window.ActiveXObject) {
			return new ActiveXObject("Microsoft.XMLHTTP");
		}else{
			alert('Status: Cound not create XmlHttpRequest Object. Consider upgrading your browser.');
		}
	}

	function LoadData(){
		//document.getElementById(_documentid).innerHTML = 'Loading.... Please wait';
		if(recReq.readyState == 4 || recReq.readyState == 0) {
			recReq.open("GET", 'get_data.php', true);
			recReq.onreadystatechange = function() {
			if(recReq.readyState == 4 && recReq.status == 200) {
				document.getElementById(_documentid).innerHTML = recReq.responseText;
			}}
			recReq.send(null);
		}
	}
</script>
</head>
<body onLoad="LoadData();">
<?php 
	if(!isset($_GET['q'])):
	include_once "menu.php";
?>
<br><br><br>
<form name="form1" method="get" action=""> 
	Search : <input type="text" name="q" id="q"/> <input type="submit" value="Search"/> 
</form> 
<br>
<div id="result"></div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">
	var allow = true;
	$(document).ready(function(){
		$("#q").keypress(function(e){
			if(e.which == '13'){
				e.preventDefault();
				loadData1();
			}else if($(this).val().length >= 2){
				loadData1();
			}
		});
	});
	function loadData1(){
		if(allow){
			allow = false;
			$("#result").html('loading...');
			$.ajax({
				url:'adminPage.php?q='+escape($("#q").val()),
				success: function (data){
					$("#result").html(data);
					allow = true;
				}
			});
		}
	}
</script>
<?php endif;?>
<?php 
	if(isset($_GET['q']) && $_GET['q']){ 
 	include "Konek.php";
 	$q = $_GET['q']; 
 	$sql = "select * from user where username like '%$q%' or nama like '%$q%' or email like '%$q%'"; 
 	$result = mysql_query($sql); 
 	if(mysql_num_rows($result) > 0){ 
 ?> 
 	<table> 
 	<tr style="text-align:center">
		<td bgcolor="grey">Username</td>
		<td bgcolor="grey">Password</td>
		<td bgcolor="grey">Nama</td>
		<td bgcolor="grey">Email</td>
		<td bgcolor="grey">Tanggal Lahir</td>
		<td bgcolor="grey" colspan="2">Tempat Lahir</td>
		<td bgcolor="grey">Gender</td>
	</tr> 
 <?php 
 	while($hresult = mysql_fetch_array($result)){?> 
 	<tr> 
 		<td><?php echo $hresult['username'];?></td> 
 		<td><?php echo $hresult['password'];?></td> 
 		<td><?php echo $hresult['nama'];?></td> 
 		<td><?php echo $hresult['email'];?></td>
        <td><?php echo $hresult['lahir'];?></td>
        <td><?php echo "Provinsi: ".$hresult['provinsi'];?></td>
        <td><?php echo "Kota: ".$hresult['kota'];?></td>
        <td><?php echo $hresult['gender'];?></td> 
 	</tr> 
    <br><br>
 <?php }?> 
 	</table> 
 <?php 
 	}else{ 
 		echo 'Data not found!'; 
 	}} 
?>

<?php
	include "Konek.php";
	$sql="select * from user where username <> 'Admin'";
	$hs=mysql_query($sql);
	echo '<div style=" background-color:#eeeeee;"><table width="100%" border="0" cellpadding="0">
	<tr style="text-align:center">
		<td bgcolor="grey">Username</td>
		<td bgcolor="grey">Password</td>
		<td bgcolor="grey">Nama</td>
		<td bgcolor="grey">Email</td>
		<td bgcolor="grey">Tanggal Lahir</td>
		<td bgcolor="grey" colspan="2">Tempat Lahir</td>
		<td bgcolor="grey">Gender</td>
	</tr>';
	while($rs=mysql_fetch_array($hs)){
	echo'<tr>
		<td bgcolor="white">'.$rs['username'].'</td>
		<td bgcolor="white">'.$rs['password'].'</td>
		<td bgcolor="white">'.$rs['nama'].'</td>
		<td bgcolor="white">'.$rs['email'].'</td>
		<td bgcolor="white">'.$rs['lahir'].'</td>
		<td bgcolor="white">Provinsi: '.$rs['provinsi'].'</td>
		<td bgcolor="white">Kota: '.$rs['kota'].'</td>
		<td bgcolor="white">'.$rs['gender'].'</td>
	</tr>';
	}
	echo'</table></div>';
?>
<div id="content"></div>
</body>
</html>
