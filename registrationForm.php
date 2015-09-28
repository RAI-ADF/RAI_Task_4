<!DOCTYPE html>
<html>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.datepick.css"> 
<script type="text/javascript" src="jquery.plugin.js"></script> 
<script type="text/javascript" src="jquery.datepick.js"></script>
<body>
<style>
	body{
		
			background-color: #009688;
			
	}
	input {
		
			width: 250px;
			height: 30px;
			background: transparent;
			border: 1px solid rgba(255,255,255,0.6);
			border-radius: 2px;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
	}
	
	select {
		
			width: 250px;
			height: 30px;
			background: transparent;
			border: 1px solid rgba(255,255,255,0.6);
			border-radius: 2px;
			color: #909EA3;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
	}
	
	button{
		
		width: 250px;
			height: 30px;
			background: transparent;
			border: 1px solid rgba(255,255,255,0.6);
			border-radius: 2px;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
	}
	
	.title{
			width: 350px;
			height: 50px;
			background: transparent;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 35px;
			font-weight: 400;
			padding: 4px;
				
	}
</style>
<?php
	//session_start();
	//echo "Hi " . $_SESSION["username"] . ".<br>";


?>
	
	<div align="center">
		<form  method="post" onsubmit="return validation()" name="form" id="form">
			
			<div class="title">Registration Form</div>
			
			<input type="text" name="username" required placeholder="Username">
			<br><br>
			
			<input type="password" name="password" required placeholder="Password">
			<br><br>
			
			<input type="password" name="password1" required placeholder="Re-type Password">
			<br><br>
			
			<input type="text" name="name" required placeholder="Name">
			<br><br>
			
			<input type="text" name="email" required placeholder="Email">
			<br><br>
			
			<select name="category" id="category" onchange="javascript: dropdownlist(this.options[this.selectedIndex].value);" required >
			 <option value="">Place of Birth</option>
			 <option value="Jawa Barat">Jawa Barat</option>
			 <option value="Jawa Timur">Jawa Timur</option>
			 <option value="Sumatra">Sumatra</option>
			 </select>
			 <script type="text/javascript" language="JavaScript">
			 document.write('<select name="subcategory" id="subcategory"><option value="">Select City</option></select>')
			 </script>
			
			<br><br>
			
			<input name="datepicker" id="datepicker" type="text" required placeholder="Date of Birth">
			
				<br><br>
			<input type="submit" value="Submit">
			<button type="reset" value="Reset">Reset</button>
			
			
		</form>
		
	</div>

</body>

<script type="text/javascript">
$('#datepicker').datepick({dateFormat: 'yyyy-mm-dd'});


function validateEmail(){  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
	var input = document.forms["form"]["email"].value;
	if(input == mailformat)  
	{  
		document.form.email.focus();  
		return true;  
	}  
	else  
	{  
		alert("You have entered an invalid email address!");  
		document.form.email.focus();  
		return false;  
	}  
}  


function validatePassword() {
    var x = document.forms["form"]["password"].value;
	var y = document.forms["form"]["password1"].value;
    if (x == y) {
		return true;
    }else{
		alert("You have entered a different password!");  
		document.form.password.focus();  
		return false;  
	}
}

function validate(){
	
	var validation = true;
	validation &= validateEmail();
	validation &= validatePassword();
	return validation;
	
}

function validation(){
	var validation = validate();
	
	if(validation = true){
		document.getElementsByTagName("form")[0].setAttribute("action", "insert.php");

	}else{
		
		document.getElementsByTagName("form")[0].setAttribute("action", "registrationForm.php");
	}
	
	
}

function dropdownlist(listindex)
	{
	
   //document.form.subcategory.options.length = 0;
	switch (listindex)
	{
	
	case "Jawa Barat" :
	document.form.subcategory.options[0]=new Option("Select City","");
	document.form.subcategory.options[1]=new Option("Bandung","Bandung");
	document.form.subcategory.options[2]=new Option("Cirebon","Cirebon");
	document.form.subcategory.options[3]=new Option("Tasikmalaya","Tasikmalaya");
	document.form.subcategory.options[4]=new Option("Bekasi","Bekasi");
	document.form.subcategory.options[5]=new Option("Depok","Depok");
	
	break;
	
	case "Jawa Timur" :
	document.form.subcategory.options[0]=new Option("Select City","");
	document.form.subcategory.options[1]=new Option("Malang","Malang");
	document.form.subcategory.options[2]=new Option("Surabaya","Surabaya");
	document.form.subcategory.options[3]=new Option("Kediri","Kediri");
	document.form.subcategory.options[4]=new Option("Banyuwangi","Banyuwangi");
	
	
	break;
	
	case "Sumatra" :
	document.form.subcategory.options[0]=new Option("Select City","");
	document.form.subcategory.options[1]=new Option("Medan","Medan");
	document.form.subcategory.options[2]=new Option("Palembang","Palembang");
	document.form.subcategory.options[3]=new Option("Lampung","Lampung");
	document.form.subcategory.options[4]=new Option("Aceh","Aceh");
	document.form.subcategory.options[5]=new Option("Padang","Padang");
	
	break;
	
	}
	return true;
 }
 
</script>
</html>