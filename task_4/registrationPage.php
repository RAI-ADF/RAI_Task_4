<?php
	include('koneksi.php');
	session_start();
	if(isset($_POST['simpan'])){
		$place=$_POST['tempatlahir'];
		$password=$_POST['pass'];
		$ret_password=$_POST['ret_password'];
		$fullname=$_POST['nama'];
		$email=$_POST['email'];
		$birthdate=$_POST['birthdate'];
		$username=$_POST['uname'];
		@$user=;
		
		if($password==$ret_password){
			if (isset($_SESSION['username'])){
				$status=$_SESSION['status'];
				$query="update account set password='$password',status='$status',name='$fullname',email='$email',placebirth='$place',datebirth'$birthdate' where username='$username'";
			}else{
				$query="insert into account (username,password,status,name,email,placebirth,datebirth) values ('$username','$password','client','$fullname','$email','$place','birthdate');";
			}
			
			$hasil=mysql_query($query);
			if($hasil == 1 ){
				echo "<div class='alert alert-info'> Successfully Saved. </div>";
			}		
		}
		
	} else{

	}
?>

<html>
	<head>

		<link rel="stylesheet" type="text/css" href="style.css" />
		<title>
			Registration Page
		</title>
		<script src="jquery-1.11.3.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script>
			$(function() {
			$( "#datepicker" ).datepicker();
			});
		</script>
		
	</head>

	<body>
	<form action="" method="POST">
		<div id="title"><h2>Registrasi</h2></div>
		<center><div class="konten" >
			<div class="form">
				<table>
					<tr>
						<td><label> Username </label></td>
						<td width="30px"></td>
						<td> <input type="text" name="uname" id="uname" value=<?php ?>> </td>
					</tr>
					<tr>
						<td> Password </td>
						<td></td>
						<td> <input type="text" name="pass" id="pass"> </td>
					</tr>

					<tr>
						<td> Re-type Password </td>
						<td></td>
						<td> <input type="text" name="ret_password" id="ret_password"> </td>
					</tr>

					<tr>
						<td> Full name </td>
						<td></td>
						<td> <input type="text" name="nama" id="name"> </td>
					</tr>

					<tr>
						<td> Email </td>
						<td></td>
						<td> <input type="text" name="email" id="email"> </td>
					</tr>

					<tr>
						<td> Place of Birth </td>
						<td></td>
						<td>
							<select name="tempatlahir">
								<option value="Bandung"> Bandung </option>
								<option value="Jakarta"> Jakarta </option>
								<option value="Jogjakarta"> Jogjakarta </option>
								<option value="Mataram"> Mataram </option>
								<option value="Bogor"> Bogor </option>
								<option value="Tegal"> Tegal </option>
								<option value="Surabaya"> Surabaya </option>
								<option value="Malang"> Malang </option>
							</select><br>
						</td>
					</tr>

					<tr>
						<td> Date of Birth </td>
						<td></td>
						<td> <input type="text" id="datepicker" name="birthdate"></td>
					</tr>
					<tr>
						<td colspan="3" align="center" ><input type="submit" name="simpan" id="simpan"></td>
					</tr>
				</select><br>
				</table>
				
				
			</div>
		</div></center>
	</form>
		
	</body>
</html>