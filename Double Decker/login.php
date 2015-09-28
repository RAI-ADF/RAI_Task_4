<?php
	session_start();
	if (isset($_COOKIE["username"])){
		header("location:index.php");
		exit();
	}
?>
<?php include("templates/header.php"); ?>
<div class="fix-width" id="content">
	<form name="login" method="post">
	<table>
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
			<td colspan="3"><div id="messages"></div>
			</td>
		</tr>
	</table>
	<input type="submit" value="submit">
	</form>

<script type="text/javascript">
$("form").on("submit",function(e){
	e.preventDefault();
	$("#messages").html("");
	var username = $("#username").val();
	var password = $("#password").val();
	if (username=="") {
		$("#messages").html("username must be filled");
	}else if (password=="") {
		$("#messages").html("password must be filled");
	}else {
		$.ajax({
			type:"post",
			data:"username="+username+"&password="+password, 
			url:"controller/do_login.php",
			success:function(response){
				// alert(response);
				if (response=="success") {
					location.href="index.php";
				}else {
					$("#messages").html("failed");
				}
			}
		});
	}
});

</script>
</div>
<?php include("templates/footer.php"); ?>
