<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css" type="text/css" />
	<title>Halaman Login</title>
<script type="text/javascript">
$(document).ready(function(){
	
   $("#login").click(function(){
		username=$("#user_name").val();
        password=$("#password").val();

         $.ajax({
            type: "POST",
           url: "login.php",
            data: "username="+username+"&password="+password,


            success: function(html){
			
			  if(html=='true')
              {
                $("#login_form").fadeOut("normal");
				$("#shadow").fadeOut();
				$("#profile").html("<a href='logout.php' class='red' id='logout'>Logout</a>");
				// You can redirect to other page here....
              }
              else
              {
                    $("#add_err").html("Wrong username or password");
              }
            },
            beforeSend:function()
			{
                 $("#add_err").html("Loading...")
            }
        });
         return false;
    });
});
</script>
	
</head>
<body>
	<?php session_start(); ?>
 	<div id="profile">
  	<?php if(isset($_SESSION['user_name'])){
  	?>
   	<a href='logout.php' id='logout'>Logout</a>
  	<?php } else {?>
   	<a id="login_a" href="#">login</a>
  	<?php } ?>

	<div id="login_form" class="loginform-in"</div>
	<h2 align="center">Login</h1>
	<div class="err" id="add_err"</div>
	<fieldset>
		<form action="login.php">
				<div> <label for="user_name">Username</label>
				<input type="text" size="30" name="user_name" id="user_name" /></div>
				<div> <label for="password">Password</label>
				<input type="password" size="30" name="password" id="password" /></div>
				<div><input type="submit" id="login" name="login" value="Login" class="loginbutton"> </div>
			
		</form>
	</fieldset>
	</div>
</body>
</html>