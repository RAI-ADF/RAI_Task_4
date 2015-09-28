<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
  }
?>
<html>
<style>
	body{
		background-color: #009688;
	}
	
	h1{
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
<head>


</head>


<body>
<!--Navigation-->
<ul id="nav">
    <li>
        <a href="#">Home</a>
    </li>

    <li>
        <a href="#">See</a>
        <ul>
            <li><a href="ViewDataUser.php">My Inventory</a></li>

            <li><a href="InputForm.html">Input Data</a></li>
        </ul>
    </li>
    <li>
	    <a href="logout.php">Logout</a>
    </li>
    
</ul>
<!--ENDOFNAV-->
	
	<div align="center">
		<h1>Welcome <?php echo $_SESSION['UNAME'];?></h1>
	
	</div>

</body>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.datepick.css"> 
<link rel="stylesheet" type="text/css" href="style.css"> 
<script type="text/javascript" src="jquery.plugin.js"></script> 
<script type="text/javascript" src="jquery.datepick.js"></script>
<?php
	//session_start();
	//echo "Hi " . $_SESSION["username"] . ".<br>";


?>

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

function validateForm() {
    var x = document.forms["form"]["username"].value;
    if (x == null || x == "" || !ValidateEmail(inputText)) {
        alert("The form must be filled out and filled correctly");
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
	validation &= validateForm();
	return validation;
	
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