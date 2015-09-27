<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var ajaxRequest;
		function ajaxFunction(){
			ajaxRequest = new XMLHttpRequest();
			ajaxRequest.onreadystatechange = processQuery;

			var username = document.getElementById('username');
			var password = document.getElementById('password');


			ajaxRequest.open("POST", "_login_ajax.php", true);
			ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			ajaxRequest.send("username="+username.value+"&password="+password.value);
		}

		function processQuery(){
			if(ajaxRequest.readyState==4){
				//redirect if success + display error if exist
				if(ajaxRequest.responseText==1){
					//alert("logged in");
					window.location.assign("index.php");
				}else{
					document.getElementById('error').innerHTML="username/password is invalid";
				}
			}
		}
	</script>
</head>
<body>
	<h1>Login</h1>
	<div>
		<form action="_login.php" method="post">
			<div>
				<label>username</label>
				<input id="username" type="text" name="username" placeholder="username">
			</div>
			<div>
				<label>password</label>
				<input id="password" type="password" name="password" placeholder="password">
			</div>
			<div id="error"></div>
			<div>
				<button type="button" onclick="ajaxFunction()">sign in</button>
			</div>
		</form>
	</div>
</body>
</html>
