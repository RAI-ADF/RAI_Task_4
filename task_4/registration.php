<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript">

	<style type="text/css">
		h1	{background-color:darkorange;  font-family: verdana; color: white}
		h2	{font-family: verdana; color: white;}
		h3  {font-family: verdana; color: black;}
	</style>

	<script type="text/javascript">
	 	function passwordValidation(){
        	if(input_data.password.value!=input_data.confirm_password.value){
        		alert("Password not same");
        		return false;
        	}else{
        		return true;
        	}
        }

        $(function() {
   		 	$( "#datepicker" ).datepicker({dateFormat:'yy-mm-dd'});
  		});
    </script>

</head>
<body>

 	


	<h1>SIGN UP</h1>

	
	<form name="input_data" action="inputUser.php" method="post" onsubmit="return passwordValidation()">
	<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" maxlength="30" required="required" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" maxlength="30" required="required" /></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td>:</td>
            <td><input type="password" name="confirm_password" maxlength="30" required="required" /></td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="name" maxlength="50" required="required" /></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>:</td>
            <td><input type="email" name="email" required="required" /></td>
        </tr>
        <tr>
            <td>Place of Birth</td>
            <td>:</td>
            <td>
            	<select name="province">
            	<option value="Jawa Barat">Jawa Barat</option>
            	<option value="Sumatera Selatan">Sumatera Selatan</option>
            	</select>
            </td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>:</td>
            <td><input type="text" name="date_of_birth" id="datepicker" required="required" /></td>
        </tr>
       
        <tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan"  /></td>
        </tr>
    </tbody>
</table>
</form>
</body>
</html>
