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
		ajaxFunction();
		return true;
	}else{
		return false;
	}
}