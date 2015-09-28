<DOCTYPE! html>
<html>
<title>Registration</title>
<head>
	<link rel="stylesheet" type="text/css" href="registration.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|PT+Sans' rel='stylesheet' type='text/css'>
    <script type= "text/javascript" src = "provins.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 	<script>
  		$(function() {
    	$( "#datepicker" ).datepicker({changeMonth: true,changeYear: true, yearRange:'1950:2015'});
  		});
  	</script>
    <script language="javascript">
		function required()  {  
			var name = document.forms["form"]["name"].value; 
			var dob = document.forms["form"]["date"].value; 
			var prov = document.forms["form"]["provinsi"].value; 
			var kota = document.forms["form"]["kota"].value; 
			var user = document.forms["form"]["username"].value; 
			var pass = document.forms["form"]["password"].value;
			var pass2 = document.forms["form"]["password2"].value;
			var email = document.getElementById('email');
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (name == "")  {  
				alert("Maaf, Nama Anda masih kosong!");  
				return false;
			} else if (dob =="") {
				alert("Maaf, tanggal lahir Anda masih kosong!");  
				return false;	
			} else if (prov == "") {
				alert("Maaf, provinsi Anda masih kosong!");  
				return false;	
			} else if (kota == "") {
				alert("Maaf, kota Anda masih kosong!");  
				return false;
			} else if (user == "") {
				alert("Maaf, username Anda masih kosong!");  
				return false;	
			} else if (pass == "") {
				alert("Maaf, password Anda masih kosong!");  
				return false;	
			} else if (pass != pass2) {
				alert("Password yang Anda masukkan berbeda!");  
				return false;  
			} else if (!filter.test(email.value)) {
				alert("Please provide a valid email address");				
				email.focus;				
				return false;	
			} else if (filter.test(email.value)) {
				alert("Anda telah berhasil menyelesaikan proses registrasi!");				
				email.focus;			
			} else {
				return true;	
			}
		}
    </script>
<body>
<form method="POST" action="insert-regis.php" name="form" onSubmit="required()">
	<div class="header">
    	<p style="margin-top:50px">Registration Form</p>
    </div>
     <div class="regist">
     	<br><label>Name</label><br>
     	<input id="name" name="name" placeholder="Your Name" type="text"><br>
        <br><label>Date of Birth</label><br>
        <input style="width:100px" name="date" id="datepicker" type="text"><br>
        <script language="javascript">
			populateProvins("provinsi", "state");
		</script>
        <br><label>Place of Birth</label><br>
        <select id="provinsi" name ="provinsi"></select>
        <select name ="kota" id ="state"></select>	
		<script language="javascript">
			populateProvins("provinsi", "state");
		</script><br>
        <br><label>Username</label><br>
     	<input id="username" name="username" placeholder="Your Username" type="text"><br>
        <br><label>Password</label><br>
        <input id="password" name="password" placeholder="Password" type="password"><br>
        <br><label>Confirm Password</label><br>
        <input id="password2" name="password2" placeholder="Password" type="password"><br>
        <br><label>Email</label><br>
     	<input id="email" name="email" placeholder="Your Email" type="text"><br><br><br>
        <input name="submit" type="submit" value=" Submit "><br>
        </div>
</form>
</body>
</head>

</html>


