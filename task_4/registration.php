<?php 
include('navbar.php');
include('connect.php');



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>

<link href="asset/form_style.css" rel="stylesheet" type="text/css" />
<link href="asset/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="asset/jquery-1.11.3.min.js"></script>

<script>
$(document).ready(function(){

		$("#submit").click(function(){
			password1=$("#password1").val();
			password2=$("#password2").val();
			username=$("#username").val();
			if(password1 === password2){
			$.ajax({
			type: "POST",
			url: "reg_proses.php",
			data: "username="+username+"&password1="+password1,
			success: function(html){    
			 
		   },
		  });
			//console.log("password sama");
			}else{
			alert("password tidak sama");
			}
		});
});
</script>
</head>
<body>

<h3> </h3>
<form action="" method="post" class="basic-grey">
    <h1>
		<span>Please fill this registration</span>
    </h1>
    <label>
        <span>Name</span>
        <input id="name" type="text" name="name" placeholder="Name" />
    </label>
	<label>
        <span>email</span>
        <input id="name" type="email" name="email" placeholder="email" />
    </label>
	<label>
	<span>place of birth</span>
	<select id="provinsi" name="provinsi" form="">
	<option value="">-</option>
	<option value="jawa-barat">jawa-barat</option>
	<option value="jawa-tengah">jawa-tengah</option>
	<option value="jawa-timur">jawa-timur</option>
	</select>
	<span></span>
	<select id="kota" name="kota" form="">
	<option value="bandung">bandung</option>
	<option value="tasik">tasik</option>
	<option value="cimahi">cimahi</option>
	</select>
	</label>
    <label>
        <span>Username</span>
		<input  type="text" id="username" name="username" placeholder="Username" />
    </label>
    <label>
        <span>Password</span>
		<input  type="password" id="password1" name="password" placeholder="Password" />
    </label>
	</br>
    <label>
		<span>Re-type Password</span>
		<input  type="password" id="password2" name="password" placeholder="Password" />
    </label> 	
        <span>&nbsp;</span> 
		</br>
		<input style="margin-left: 230px;" id="submit" type="button" class="button" value="Send"  /> 
       
</form>

</body>
</html>


