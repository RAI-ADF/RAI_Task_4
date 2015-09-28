<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>RAI</title>

<body>

  <div id="login">
  <form id="login_form" method="post">
	<h2> LOGIN ADMIN</h2>
	<br><br>
    <div class="field_container">
      <input type="text" name="username" id="username">
    </div>

    <div class="field_container">
      <input type="password" name="password" id="password">
		<button id="submit" type="submit" name="submit">
		
        <span class="button_text">Sign In</span>
      </button>
    </div>

    

</div>

</body>
  <?php	
                include "config.php";
				session_start();                
				
                $username = isset($_POST['username'])?$_POST['username']:'';
				$password = isset($_POST['password'])?$_POST['password']:'';
				
				
				if(isset($_POST['submit'])){
					
						$query=mysql_query("select * from admin where admin.username = '$username' and admin.password = '$password'");
						$num = mysql_num_rows($query);
						$row = mysql_fetch_array($query);
						$id_admin = $row['id_admin'];
						if($num==1) {
							$_SESSION['username'] = $username;
							$_SESSION['password'] = $password;
							echo "<script>eval(\"parent.location='viewuser.php'\");alert (' Login Berhasil ');</script>";
						}
						else{
							echo "<script>alert (' Maaf Login Gagal, Silahkan Isi Usernamed Password Anda Dengan Benar');</script>";
						}
				}
					
			
				
    ?>
</form>

</body>
</html>