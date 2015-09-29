<?php
	include 'koneksi.php';
	
	$username = isset($_POST['username'])?$_POST['username']:'';
	$password = isset($_POST['password'])?$_POST['password']:'';
	$name = isset($_POST['name'])?$_POST['name']:'';
	$email = isset($_POST['email'])?$_POST['email']:'';
	$place_of_birth = isset($_POST['place_of_birth'])?$_POST['place_of_birth']:'';
	$date_of_birth = isset($_POST['date_of_birth'])?$_POST['date_of_birth']:'';
		
	if(isset($_POST['save'])){
	$query="insert into user values ('$username','$password','$name','$email','$place_of_birth','$date_of_birth') ";
	mysql_query($query);
	header("location: index.php");	
}
?>
<html>
<head>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
			showOtherMonths: true,
			dateFormat:"dd/mm/yy",
			changeMonth: true,
			autoclose: true
		});
	  });
  </script>
</head>
<body>
	<form method="POST">
		Username:<input type="text"><br>
		Password:<input type="password"><br>
		Confirm password:<input type="password"><br> <!--confirm textfield-->
		Name:<input type="text"><br>
		Email:<input type="text"><br>  <!--butuh validasi-->
		Tempat lahir:<input type="text"><br> <!--2 dropdown list profinsi+kota-->
		Tanggal lahir:<input type="text" id="datepicker"><br>
		<input type="submit" name="save" value="Simpan">
	</form>
</body>
</html>
