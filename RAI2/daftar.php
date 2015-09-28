<?php 
	session_start();
	if (isset($_SESSION['username'])){
		header ("location:index.php");
	}
?>


<html>
	<head>
		<title>Pendaftaran</title>
		<link rel="stylesheet" href="jquery-ui.css">
		  <script src="js/jquery-1.10.2.js"></script>
		  <script src="js/jquery-ui.js"></script>
		  <script>
		  $(function() {
		    $( "#datepicker" ).datepicker();
		  });
		  </script>
		  <script language="JavaScript1.2">
			var testresults
			function checkemail(){
				var str=document.pendaftaran.email.value
				var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
				if (filter.test(str))
				testresults=true
				else{
				alert("Please input a valid email address!")
				testresults=false
			}
			return (testresults)
			}
			</script>

			<script>
			function checkbae(){
				if (document.layers||document.getElementById||document.all)
				return checkemail()
				else
				return true
			}
			</script>
			<script type="text/javascript">
			  function checkForm(form)
			  {
			    if(form.username.value == "") {
			      alert("Error: Username cannot be blank!");
			      form.username.focus();
			      return false;
			    }
			    re = /^\w+$/;
			    if(!re.test(form.username.value)) {
			      alert("Error: Username must contain only letters, numbers and underscores!");
			      form.username.focus();
			      return false;
			    }

			    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
			      if(form.pwd1.value.length < 6) {
			        alert("Error: Password must contain at least six characters!");
			        form.pwd1.focus();
			        return false;
			      }
			      if(form.pwd1.value == form.username.value) {
			        alert("Error: Password must be different from Username!");
			        form.pwd1.focus();
			        return false;
			      }
			      re = /[0-9]/;
			      if(!re.test(form.pwd1.value)) {
			        alert("Error: password must contain at least one number (0-9)!");
			        form.pwd1.focus();
			        return false;
			      }
			      re = /[a-z]/;
			      if(!re.test(form.pwd1.value)) {
			        alert("Error: password must contain at least one lowercase letter (a-z)!");
			        form.pwd1.focus();
			        return false;
			      }
			      re = /[A-Z]/;
			      if(!re.test(form.pwd1.value)) {
			        alert("Error: password must contain at least one uppercase letter (A-Z)!");
			        form.pwd1.focus();
			        return false;
			      }
			    } else {
			      alert("Error: Please check that you've entered and confirmed your password!");
			      form.pwd1.focus();
			      return false;
			    }

			    alert("You entered a valid password: " + form.pwd1.value);
			    return true;
			  }

			</script>
	</head>
		<body>
		<form method="post" name="pendaftaran" action="proses_daftar.php" onSubmit="return checkbae()">
		<table border=0 align="center" cellpadding=5 cellspacing=0>
			<tr>
				<td colspan=3><center><font size=5>PENDAFTARAN</font></center></td>
			</tr>
			<tr>
				<td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td><td>:</td><td><input type="text" name="email"></td>

			</tr>
			<tr>
				<td>
					Tempat Lahir<td>:<td>
							<select name="tempatlahir">
								<option value="DENPASAR">DENPASAR</option>
								<option value="SURABAYA">SURABAYA</option>
								<option value="BANDUNG">BANDUNG</option>
							</select>
					</td></td>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td><td>:</td><td> <input type="text" id="datepicker"></td>
			</tr>
			<tr>
				<td>Username</td><td>:</td><td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td><td>: </td>
				<td><input title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" onchange="
				  this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
				  if(this.checkValidity()) form.pwd2.pattern = this.value;
				"></td>
			</tr>
			<tr>
				<td>Confirm Password</td><td>: </td>
				<td><input title="Please enter the same Password as above" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2" onchange="
				  this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
				"></td>
			</tr>
			<tr>
				<td colspan=2></td>
				<td><input type="submit" name="submit" value="DAFTAR"></td>
			</tr>
			<tr>
				<td colspan=3><a href="login.php">LOGIN</a></td>
			</tr>
		</table>
		</form>
		</body>
</html>