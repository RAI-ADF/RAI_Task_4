<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function validateEmail(){
			var email = document.getElementById('email');
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			//alert(email.value);
			if (!filter.test(email.value)) {
			    document.getElementById('emailError').innerHTML = "email is invalid";
			    return false;
			}else{
				document.getElementById('emailError').innerHTML = "";
				return true;
			}
		}

		function validatePassword(){
			var pass = document.getElementById('password');
			var rePass = document.getElementById('re-password');

			if(pass.value!=rePass.value){
				document.getElementById('repasswordError').innerHTML = "password not match";	
				return false;
			}else{
				document.getElementById('repasswordError').innerHTML = "";	
				return true;
			}
		}
		function cityOption(){
			var select = document.getElementById('province');
			if(select.value=="sulawesi selatan"){
				var text = "<option id='sulawesi' value='makassar'>makassar</option><option id='sulawesi' value='pare pare'>pare pare</option>";
				document.getElementById('city').innerHTML=text;
			}else if(select.value=="jawa barat"){
				var text = "<option id='jawa' value='bandung'>bandung</option><option id='jawa' value='garut'>garut</option>";
				document.getElementById('city').innerHTML=text;
			}
		}

		function validateForm() {
			if(validatePassword() && validateEmail()){
				return true;
			}else{
				return false;
			}
		}
	</script>
</head>
<body>
	<h1>registration</h1>
	<div>
		<form action="_registration.php" method="post" onsubmit="retun validateForm()">
			<div>
				<label>username</label>
				<input id="username" type="text" name="username" placeholder="username" />
				<div id="usernameError" class="error-message"></div>
			</div>
			<div>
				<label>password</label>
				<input id="password" type="password" name="password" placeholder="password">
				<div id="passwordError" class="error-message"></div>
			</div>
			<div>
				<label>re-password</label>
				<input id="re-password" type="password" name="re-password" placeholder="retype password" onblur="validatePassword()" >
				<div id="repasswordError" class="error-message"></div>
			</div>
			<div>
				<label>name</label>
				<input type="text" name="name" placeholder="fullname">
				<div id="nameError" class="error-message"></div>
			</div>
			<div>
				<label>email</label>
				<input id="email" type="email" name="email" placeholder="email" onblur="validateEmail()">
				<div id="emailError" class="error-message"></div>
			</div>
			<div>
				<label>place of birth</label>
				<select id="province" name="province" onchange="cityOption()">
					<option id="jawa" value="jawa barat">jawa barat</option>
					<option id="sulawesi" value="sulawesi selatan">sulawesi selatan</option>
				</select>
				<select id="city" name="city">
					<option id="jawa" value="bandung">bandung</option>
					<option id="jawa" value="garut">garut</option>
				</select>
			</div>
			<div>
				<label>date fo birth</label>
				<input type="date" name="date" placeholder="dd/mm/yyyy">
			</div>
			<div>
				<button type="submit" onclick="return validateForm()">submit</button>
			</div>
		</form>
	</div>
</body>
</html>
