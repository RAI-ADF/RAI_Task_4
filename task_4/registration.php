<?php 
include('navbar.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>

<link href="asset/form_style.css" rel="stylesheet" type="text/css" />
<link href="asset/main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
	function login(){
	var name=document.getElementById("name").value;
	var password=document.getElementById("password").value;
	console.log(name);
	console.log(password);
	alert(name);
	alert(password);
	
	}
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
        <input id="name" type="text" name="username" placeholder="Username" />
    </label>
    <label>
        <span>Password</span>
        <input id="password" type="text" name="password" placeholder="Password" />
    </label>
    <label>
		<span>Re-type Password</span>
        <input id="password" type="text" name="password" placeholder="Password" />
    </label> 	
        <span>&nbsp;</span> 
		</br>
		<input style="margin-left: 230px;" type="button" class="button" value="Send" onclick=login() /> 
       
</form>

</body>
</html>


