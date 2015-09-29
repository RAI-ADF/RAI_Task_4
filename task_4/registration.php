<?php
$host = "localhost";
$user = "root";
$password = "";

//nama database
$datbase = "database"; 

//query untuk menghubungkan kedalam database
mysql_connect($host,$user,$password);
mysql_select_db($datbase);
if(isset($_POST['btn-save']))
{
 // variabel yang digunakan untuk input data
 $username = $_POST['username'];
 $password = $_POST['password'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $tempat_lahir = $_POST['tempat_lahir'];
 $tanggal_lahir = $_POST['tanggal_lahir'];
 // variabel yang digunakan untuk input data

 // query untuk menyisipkan data kedalam database
 $sql_query = "INSERT INTO user(username,password,name, email, place, date_born) VALUES('$username','$password','$name','$email','$tempat_lahir','$tanggal_lahir')";
 // query untuk menyisipkan data kedalam database
 
 // kondisi untuk memberikan pop up agas menegaskan kembali pilihan yang di ambil user
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Disimpan ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // fungsi untuk mengeksekusi query di sql
}
?>
<!DOCTYPE html>
<html>
<body>

<form method="POST" >	
	<center>
	<fieldset style="width:40%">
	    <legend>Personal information</legend>
	    <table>
		    <tr>
		    	<td>username</td>
		    	<td style="text-align:center">:</td>
		    	<td><input type="text" name="username" required="required" ></td>
		    </tr>   
		    <tr>
		    	<td>password</td>
		    	<td style="text-align:center">:</td>
		    	<td><input type="text" name="password" required="required"></td>
		    </tr>   
		    <tr>
		    	<td>name</td>
		    	<td style="text-align:center">:</td>
		    	<td><input type="text" name="name" required="required"></td>
		    </tr>   
		    <tr>
		    	<td>email</td>
		    	<td style="text-align:center">:</td>
		    	<td><input type="email" name="email" required="required"></td>
		    </tr>   
		    <tr>
		    	<td>tempat lahir</td>
		    	<td style="text-align:center">:</td>
		    	<td><input type="text" name="tempat_lahir" required="required"></td>
		    </tr>   
		    <tr>
		    	<td>tanggal lahir</td>
		    	<td style="text-align:center">:</td>
		    	<td><input type="text" name="tanggal_lahir" required="required"></td>
		    </tr>   
		    <tr>
		    	<td><input type="reset" name="reset" value="reset"></td>
		    	<td></td>	    	
		    	<td style="text-align:right"><button type="submit" name="btn-save"><strong>SIMPAN</strong></button></td>
		    </tr>
		</table>	    
    </fieldset>
    </center>
</form>
</body>
</html>

