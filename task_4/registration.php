<html><head>
<meta charset="utf-8">
<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/register-css.css">
    <link rel="stylesheet" type="text/css" href="/code_examples/tutorial.css">
	<script type="text/javascript" src="/code_examples/passtest.js"></script>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
   	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 
	<script type="text/javascript">
    	$(function() {
        	$("#datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
       	});
    </script>
   	<script language="javascript">
		function checkEmail() {

		var email = document.getElementById('email');
		var message = document.getElementById('validEmail');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var goodColor = "#66cc66";
		var badColor = "#ff6666";	
			if (!filter.test(email.value)) {
				email.style.backgroundColor = badColor;
				message.style.color = badColor;
				message.innerHTML = "Please provide a valid email address!"
			}else{
				email.style.backgroundColor = goodColor;
				message.style.color = goodColor;
				message.innerHTML = "Email Valid!"
			}
		}
		
		function checkPass() {
			//Store the password field objects into variables ...
			var pass1 = document.getElementById('password');
			var pass2 = document.getElementById('co-password');
			//Store the Confimation Message Object ...
			var message = document.getElementById('confirmMessage');
			//Set the colors we will be using ...
			var goodColor = "#66cc66";
			var badColor = "#ff6666";
			//Compare the values in the password field 
			//and the confirmation field
			if(pass1.value == pass2.value){
				//The passwords match. 
				//Set the color to the good color and inform
				//the user that they have entered the correct password 
				pass2.style.backgroundColor = goodColor;
				message.style.color = goodColor;
				message.innerHTML = "Passwords Match!"
			}else{
				//The passwords do not match.
				//Set the color to the bad color and
				//notify the user.
				pass2.style.backgroundColor = badColor;
				message.style.color = badColor;
				message.innerHTML = "Passwords Do Not Match!"
			}
		}  
    </script>
</head>

<body>
	<form id="register">
        <h1>Register</h1>
        <fieldset id="inputs">
            <input id="username" type="text" placeholder="Username" autofocus="" required="">   
            <input id="password" type="password" placeholder="Password" required="">
            <input id="co-password" type="password" placeholder="Confirm Password" required="" onKeyUp="javascript:checkPass();">
            <span id="confirmMessage" class="confirmMessage"></span>
            <input id="name" type="text" placeholder="Name" required="">
        	<input id="email" type="text" placeholder="Email" required="" onKeyUp="javascript:checkEmail();">
            <span id="validEmail" class="validEmail"></span>
            <div class="form-group">
                        <div align="center">
                          <select id="prov">
                            <option value="0">Province of Birth</option>
                            <option value="1">Jawa Barat</option>
                            <option value="2">Jawa Tengah</option>
                            <option value="3">Jawa Timur</option>
                          </select>
                          <select id="city" disabled="true">
                            <option value="0">City of Birth</option>
                            <option value="1">Jawa Barat</option>
                            <option value="2">Jawa Tengah</option>
                            <option value="3">Jawa Timur</option>
                          </select>
                        </div>
            </div>
            <div align="center">
              <input id="datepicker" type="text" placeholder="Date of Birth" required="">
                </div>
        </fieldset>
        <fieldset id="actions">
        <input type="button" id="submit" value="Register" onClick="">
        </fieldset>
</form>
</body>
</html>