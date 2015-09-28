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
<script type="text/javascript" src="asset/jquery-1.11.3.min.js"></script>

<script type="text/javascript">
	// function login(){
	// var name=document.getElementById("name").value;
	// var password=document.getElementById("password").value;
	// console.log(name);
	// console.log(password);

	
	// var ajaxRequest;
	
	// if(window.XMLHttpRequest){
		// ajaxRequest=new XMLHttpRequest();
	// }else{
		// ajaxRequest=new ActiveXObject("Microsoft.XMLHttp");
	// }
	
	// if(ajaxRequest.readyState == 4){
	 // var ajaxDisplay = document.getElementById('ajaxDiv');
	 // ajaxDisplay.innerHTML = ajaxRequest.responseText;
  // }

	 // var queryString = "?name="+name+"&password="+password;
	// "name="+namevalue+"&age="+agevalue
	// ajaxRequest.open("GET","prosesLogin.php"+queryString,true);
	// ajaxRequest.send();
	
	
	//}
</script>
<script>
	$(document).ready(function(){
	
		$("#submit").click(function(){
		username=$("#name").val();
		password=$("#password").val();
		console.log(username);
		console.log(password);
		$.ajax({
		   type: "POST",
		   url: "prosesLogin.php",
			data: "name="+username+"&password="+password,
		   success: function(html){    
			 if((html=='admin')&& (html !='false'))    {
				window.location="adminpage.php";
			 }if((html !='admin') && (html !='false')){
				window.location="clientpage.php";
			 }if(html =='false'){
				alert("wrong username or password");
				window.location="login.php"
			 }
			 
		   },
		   beforeSend:function()
		   {
			// $("#add_err").css('display', 'inline', 'important');
			 $("#form-login").html("<img src='asset/loading_spinner.gif /> Loading...")
		   }
		  });
		});
	
	});
</script>

</head>
<body>

<h3> </h3>
<div id="form-login">
<form action=""  method="post" class="basic-grey">
    <h1>
		<span>Please fill username and password</span>
    </h1>
    <label>
        <span>Username</span>
        <input id="name" type="text" name="username" placeholder="Username" />
    </label>
    
    <label>
        <span>Password</span>
		<input id="password" type="password" name="password" value="" placeholder="Password">
    </label>   
        <span>&nbsp;</span> 
		</br>
		<input style="margin-left: 230px;" type="button" id="submit" class="button" value="Log in" onclick=login() /> 
       
</form>
</div>

</body>
</html>

