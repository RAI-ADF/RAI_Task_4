<html>
<head>
	<script>
		var ajaxRequest;
		function ajaxFunction(){
			if (window.XMLHttpRequest){
				ajaxRequest = new XMLHttpRequest();
			}else{
				ajaxRequest=new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			ajaxRequest.onreadystatechange = processQuery;
			
			var username = document.getElementById('username');
			var password = document.getElementById('password');
			
			ajaxRequest.open("POST","login.php",true);
			ajaxRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			ajaxRequest.send("username="+username.value+"&password="+password.value);
			// ajaxRequest.send();
		}
		
		function processQuery(){
			if(ajaxRequest.readyState !=4 && ajaxRequest.status != 200){
				document.getElementById("ajaxDiv").innerHTML = "Validating..";
				// if(ajaxRequest.responseText=="true"){
					// document.getElementById("ajaxDiv").innerHTML = "Tes";
				// }else{
					// document.getElementById("ajaxDiv").innerHTML="username/password is invalid";
				// }
			// }else{
				// document.getElementById("ajaxDiv").innerHTML = $error;
			}
		}
	</script>
</head>
<body>
	<form action="login.php" method="POST">
		Username:<input type="text" name="username" placeholder="Username"><br>
		Password:<input type="password" name="password" placeholder="Password"><br>
		<button onclick="ajaxFunction()">Login</button> 
	</form>
	<div id="ajaxDiv"></div>
	<br>
	Registrasi <a href="registration.php">di sini</a>
	
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
</body>
</html>


