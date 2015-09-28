<html>
<head>
	<script>
		var ajaxRequest;
		function ajaxFunction(){
			if (window.XMLHttpRequest){
				ajaxRequest=new XMLHttpRequest();
			}else{
				ajaxRequest=new ActiveXObject("Microsoft.XMLHTTP");
			}
			ajaxRequest.onreadystatechange = processQuery;
			
			var username = document.getElementById('username');
			var password = document.getElementById('password');
			
			ajaxRequest.open("POST","server_login.php",true);
			ajaxRequest.send("username="+username.value+"&password="+password.value);
		}
		
		function processQuery(){
			if(ajaxRequest.readyState == 4){
				var ajaxDisplay = document.getElementById('ajaxDiv');
				ajaxDisplay.innerHTML = ajaxRequest.responseText;
			}
		}
	</script>
</head>
<body>
	<form method="post">
		Username:<input type="text" name="username" placeholder="Username"><br>
		Password:<input type="password" name="password" placeholder="Password"><br>
		<input type="submit" value="Submit" onclick="ajaxFunction"> 
	</form>
</body>
</html>

