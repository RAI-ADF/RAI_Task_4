<?php
	session_start();
	include_once 'connect.php';
	
	if(isset($_SESSION['user'])!='')
	{
		$user = $_SESSION['user'];
		if (strcmp($user,'administrator')==0){
			header("Location: admin.php");
		}else{
					header("Location: user_page.php");
		}
	}
	
	if(isset($_POST['btn-signup']))
	{
		$username = mysql_real_escape_string($_POST['uname']);
		$password = md5(mysql_real_escape_string($_POST['pass1']));
		$password1 = md5(mysql_real_escape_string($_POST['pass2']));
		$name     = mysql_real_escape_string($_POST['nama']);
		$email    = mysql_real_escape_string($_POST['email']);
		$place    = $_POST['place'];
		$place2    = $_POST['secondChoice'];
		$date     = mysql_real_escape_string($_POST['date']);
		
		if(strcmp($password,$password1)!=0 or $password==null or $username==null or $email==null){
?>			
			<script>alert('error while registering you...');</script>
<?php
		}else if(mysql_query("INSERT INTO user_nya VALUES('$username','$name','$place - $place2','$date','$email','$password')"))
		{
?>
			<script>alert('successfully registered ');</script>
<?php
		}else{
?>
			<script>alert('error while registering you...');</script>
<?php
		}
	}
?>

<script type="text/javascript">	 
	function cek(inputText, pass1, pass2)  
	{  
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		
		if(pass1.value.match(pass2.value))  
		{  
			if(inputText.value.match(mailformat))  
			{  
				document.form1.email.focus();  
				return true;  
			}  
			else  
			{	  
				alert("You have entered an invalid email address!");  
				document.form1.email.focus();  
				return false;  
			}  
		}  
		else  
		{  
			alert("You have entered an invalid Password!");  
			document.form1.pass1.focus();  
			return false;  
		}  
	}

	function addOption(selectbox,text,value )
	{
		var optn = document.createElement("OPTION");
		optn.text = text;
		optn.value = value;
		selectbox.options.add(optn);
	}
	
	function addOption_list(){
		var i;
		for(i=document.form1.secondChoice.options.length-1;i>=0;i--)
		{
			document.form1.secondChoice.remove(i);
		}
		var place = document.form1.place.value;
		if (place.match("Arizona")){
			var month = new Array("Bandung","Cimahi","Cibodas");
			for (var i=0; i<month.length; i++){
				addOption(document.form1.secondChoice, month[i], month[i]);
			}	
		}else if (place.match("California")){
			var month = new Array("Cicaheum","Ciamplas","Cimondok");
			for (var i=0; i<month.length; i++){
				addOption(document.form1.secondChoice, month[i], month[i]);
			}
		}else if (place.match("Florida")){
			var month = new Array("Tabanan","Sudimara","Kalanganyar");
			for (var i=0; i<month.length; i++){
				addOption(document.form1.secondChoice, month[i], month[i]);
			}
		}else if (place.match("New York")){
			var month = new Array("Ampadan","Penebel","Kerambitan");
			for (var i=0; i<month.length; i++){
				addOption(document.form1.secondChoice, month[i], month[i]);
			}
		}
	}

</script>

<!doctype html>
<html lang=''>
	<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    
	<script src="js/jquery-1.7.2.min.js"></script>

<script>  

$(function(){

	$('<select />').appendTo('nav');


	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Choise Page...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});


	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});


$(function(){
	$('nav ul li').hover(
		function () {

			$('ul', this).slideDown(150);
		}, 
		function () {

			$('ul', this).slideUp(150);			
		}
	);
});

</script>
		<title>Registration Page</title>
		
		<link rel="stylesheet" 
			href="jquery-ui/themes/base/jquery.ui.all.css">
		<script type="text/javascript"
			src="jquery-1.9.1.js">         
		</script>
		<script type="text/javascript" 
			src="jquery-ui/ui/jquery.ui.core.js">
		</script>        
		<script type="text/javascript" 
			src="jquery-ui/ui/jquery.ui.datepicker.js">
		</script>      
		<script type="text/javascript">
			$(document).ready(function() {
			$("#tanggal-lahir" ).datepicker({
					dateFormat: "dd-mm-yy",
					showOtherMonths: true,
					selectOtherMonths: true,
					changeYear: true,
					numberOfMonths: 2
				});
			});
		</script>
	</head>	
	<body>
		<div class="container">
		<header>
			<h1>REGISTRATION PAGE</h1>
		</header>       
		<div id='fdw'>
		<nav>
				<ul>
					<li><a href="index.html">home</a></li>
					<li><a href="login.php">Login</a></li>
					<li class="current"><a href="registration.php">Registration</a></li>
				</ul>
		</nav>
		</div>
			<ul>
			<form method="post" name="form1">
				<table>
					<tr>
						<td> Username 
						<td> : 
						<td> <input type="text" name="uname"/></td>
					</tr>
					<tr>
						<td> <label for="pass1">Password</label>
						<td> :
						<td> <input name="pass1" type="password">
					</tr>
					<tr>
						<td> <label for="pass2">Confirm Password</label>
						<td> : 
						<td> <input name="pass2" type="password">
					</tr>
					<tr>
						<td> Name    
						<td> : 
						<td> <input type="text" name="nama"/></td>
					</tr>
					<tr>
						<td> Email    
						<td> : 
						<td> <input type="text" name="email"/></td>
					</tr>
					<tr>
						<td> Place of Birth    
						<td> : 
						<td> 
							<select name="place" onchange="addOption_list()">
								<option value="">Select a Province</option>
								<option value="Arizona">Arizona</option>
								<option value="California">California</option>
								<option value="Florida">Florida</option>
								<option value="New York">New York</option>   
							</select>
							<select name="secondChoice" id="DropList">
								<option value="">Select a City</option>
							</select>
						</td>
					</tr>
					<tr>
						<td> Date of Birth    
						<td> : 
						<td><input type="text" id="tanggal-lahir" name="date"/></td>
					</tr>
					<tr>
						<td>
						<td>
						<td><button type="submit" name="btn-signup" onclick="cek(document.form1.email, document.form1.pass1, document.form1.pass2)"/>Sign Me Up</button></td>
					</tr>
				</table>
			</form>
			</ul>
		</div>
	</body>
</html>