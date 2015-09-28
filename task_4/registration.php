<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<style type="text/css" xml:space="preserve">
		BODY, P,TD{ 
			
			font-family: Arial,Verdana,Helvetica, sans-serif; 
			font-size: 10pt 
		}

		A {
			
			font-family: Arial,Verdana,Helvetica, sans-serif;
		}

		B {	
			
			font-family : Arial, Helvetica, sans-serif;	
			font-size : 12px;	
			font-weight : bold;
		}

		.error_strings	{ 
			
			font-family:Verdana;
			font-size:14px; 
			color:#660000;
		}

	</style><script language="JavaScript" src="gen_validatorv4.js"
	type="text/javascript" xml:space="preserve"></script>

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


	<script>
		$(function() {
			$(".datepicker").datepicker();
		});
	</script>

</head>
<body>
	<form name="register" id='register' action="" method='post'>
		<fieldset >
			<legend>Register</legend>
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<label for='name' >Your Full Name*: </label><br>
			<input type='text' name='name' id='name' maxlength="50" /><br>
			<br>

			<label for='email' >Email Address*:</label><br>
			<input type='text' name='email' id='email' maxlength="50" /> <br>
			<div id='register_Email_errorloc' class="error_strings"></div>
			<br>
			
			<label for='username' >UserName*:</label><br>
			<input type='text' name='username' id='username' maxlength="50" /> <br>
			
			<label for='password' >Password*:</label><br>
			<input type='password' name='password' id='password' maxlength="50" /> <br>

			<label for='confpassword' >Re Enter Password*:</label><br>
			<input type='password' name='confpassword' id='confpassword' maxlength="50" /> <br>
			<label for='dob'>Date of Birth:</label><br>
			<input type="text" class="datepicker" /> <br>
			<input type='submit' name='Submit' value='Submit' />
			<br>
			<div id="register_errorloc" class="error_strings"> </div>
			<br>
			
		</fieldset>
	</form>

	<script language="JavaScript" type="text/javascript"
   xml:space="preserve">//<![CDATA[
   var frmvalidator  = new Validator("register");
   frmvalidator.EnableOnPageErrorDisplaySingleBox();
   frmvalidator.EnableMsgsTogether();
   
   frmvalidator.addValidation("confpassword","eqelmnt=password","The confirmed password is not same as password");
   frmvalidator.addValidation("password","neelmnt=username","The password should not be same as username");
   
   frmvalidator.addValidation("email","email","The input for Email should be a valid email value");
   frmvalidator.addValidation("email","maxlen=50");
   frmvalidator.addValidation("email","req");
   //]]></script>

</body>
</html>
