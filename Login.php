<?php session_start(); ?>   
<!DOCTYPE html>
<html>
<head>
<title>Form Login</title>
<script type="text/javascript" src="script/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="script/my_script.js"></script>
<script language="javascript" type="text/javascript">
	var s = ”<?=$_SESSION['level']?>”;
	var l = document.getElementById("le");
	l.innerHTML = s;
	$(document).ready(function(){
		$("#add_err").css('display', 'none', 'important');
		 $("#submit").click(function(){
			 username = $("#username").val();
			 password = $("#password").val();
			 $.ajax({
				type: "POST",
				url: "window.location.href",
				data: "name="+username+"&pasword="+password,
				success: function(html){
					if(html == 'true'){
						if(s == "admin"){
							header('location:adminPage.php');
						}else if(s == "user"){
							header('location:userPage.php');
						}
					}else{
						$("#add_err").css('display', 'inline', 'important');
						$("add_err").html("<img src='alert.png' />Wrong username or password");
					}
				},
				beforeSend:function(){
					$("#add_err").css('display', 'inline', 'important');
					$("#add_err").html("<img src='ajax-loader.gif' /> Loading...")
				}
			 })
			 return false;
		 })
	})
</script>
</head>
<body>
<?php
	include_once "menu.php"; 
	//session_start();
	if(isset($_POST['submit'])){
		include "Konek.php";
		$username = $_POST['username'];
		$password = $_POST['password'];	
		$cek = mysql_num_rows(mysql_query("SELECT username FROM user WHERE username = '$username' and password = '$password'"));
		if($cek > 0){
			$ambil = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE username = '$username'"));
			$nama = $ambil['nama'];
			$level = $ambil['level'];
			setcookie("cookie","$nama",time()+3600,"/","",0);
			$_SESSION['user'] = $username;
			$_SESSION['level'] = $level;
			mysql_close($open);
			if($level == "user"){
				header('location:userPage.php');
			}else if($level == "admin"){
				header('location:adminPage.php');
			}
	}
	}
?>
<br><br>
<div class="loginform-in">
<h2>Form Login</h2>
<div class="err" id="add_err"></div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	USERNAME <input type="text" id="username" name="username">
	<br><br>
	PASSWORD <input type="password" id="password" name="password">
	<br><br>
	<input type="submit" id="submit" name="submit" value=" Login ">
</form>
<div id="le"></div>
</div>
</body>
</html>
