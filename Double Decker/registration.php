<?php
	session_start();
	if (isset($_COOKIE["username"])){
		header("location:index.php");
		exit();
	}
?>
<?php include("templates/header.php"); ?>
<div id="backgrounds" data-src="assets/img/ss2.jpg">
	
</div>

<div class="fix-width" id="content">
<center>
	<h1>Register Now!</h1>
	<form name="signin" method="post">
	<table>
		<tr>
			<td><label>First name</label></td>
			<td>:</td>
			<td><input id="firstname" type="text" name="firstname"></td>
		</tr>
		<tr>
			<td><label>Last name</label></td>
			<td>:</td>
			<td><input id="lastname" type="text" name="lastname"></td>
		</tr>
		<tr>
			<td><label>Username</label></td>
			<td>:</td>
			<td><input id="username" type="text" name="username"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td>:</td>
			<td><input id="password" type="password" name="password"></td>
		</tr>
		<tr>
			<td><label>Repeat Password</label></td>
			<td>:</td>
			<td><input id="repeatpassword" type="password" name="repeatpassword"></td>
		</tr>
		<tr>
			<td><label>Date of Birth</label></td>
			<td>:</td>
			<td><input id="dob" name="dob"></td>
		</tr>
		<tr>
			<td><label>Place of Birth</label></td>
			<td>:</td>
			<td><select id="state" name="state" data-selected="">
				<option></option>
			</select>
			<select id="city" name="city"> 
				<option></option>
			</select>
			</td>
		</tr>
		<tr>
			<td><label>Gender</label></td>
			<td>:</td>
			<td><input type="radio" name="sex" value="male">Male
				<input type="radio" name="sex" value="female">Female</td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td>:</td>
			<td><input type="text" name="email" id="email"></td>
		</tr>
		<tr>
			<td colspan="3"><div id="messages"></div>
			</td>
		</tr>
		</center>
	</table>
	<input type="submit" value="submit">
	</form>

<script type="text/javascript">

$(window).ready(function(){
	$("#dob").datepicker({
		"dateFormat": "yy-mm-dd"
	});
	$.ajax({
		type:"get",
		data:"id=0",
		url:"controller/do_get_place.php",
		success:function(response){
			// $("#state").append("<option value=''></option>");
			// alert(response);
			var place = JSON.parse(response);
			$.each(place, function(key, value){
				$("#state").append("<option value='"+key+"'>"+value+"</option>");
			});
		}
	});
	$("#state").on("change",function(){
		// alert("aaa");
		var id_parent = $(this).val();
		$("#city").html("");
		$.ajax({
			type:"get",
			data:"id="+id_parent,
			url:"controller/do_get_place.php",
			success:function(response){
				// $("#state").append("<option value=''></option>");
				// alert(response);
				var place = JSON.parse(response);
				$.each(place, function(key, value){
					$("#city").append("<option value='"+key+"'>"+value+"</option>");
				});
			}
		});
	});
});
$("form").on("submit",function(e){
	e.preventDefault();
	$("#messages").html("");
	var firstname = $("#firstname").val();
	var lastname = $("#lastname").val();
	var username = $("#username").val();
	var password = $("#password").val();
	var dob = $("#dob").val();
	var repeatpassword = $("#repeatpassword").val();
	var state = $("#state option:selected").text();
	var city = $("#city option:selected").text();
	var sex = $('input:radio[name=sex]:checked').val();
	var email = $("#email").val();
	if (firstname=="") {
		$("#messages").html("firstname must be filled");
	}else if (username=="") {
		$("#messages").html("username must be filled");
	}else if (password=="") {
		$("#messages").html("password must be filled");
	}else if (email=="") {
		$("#messages").html("email must be filled");
	}else if (!IsEmail(email)) {
		$("#messages").html("invalid email format");
	}else if (dob=="") {
		$("#messages").html("please choose date");
	}else if (state=="") {
		$("#messages").html("please choose state");
	}else if (city=="") {
		$("#messages").html("please choose city");
	}else if (sex=="") {
		$("#messages").html("please choose gender");
	}else {
		var placeofbirth = state+","+city;
		$.ajax({
			type:"post",
			data:"firstname="+firstname+"&lastname="+lastname+"&username="+username+"&password="+password+"&email="+email+"&dob="+dob+"&placeofbirth="+placeofbirth+"&gender="+sex, 
			url:"controller/do_register.php",
			success:function(response){
				// alert(response);
				if (response=="success") {
					location.href="login.php";
				}else {
					$("#messages").html("failed");
					alert(response);
				}
			}
		});
	}
});

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}


</script>
</div>
<?php include("templates/footer.php"); ?>
