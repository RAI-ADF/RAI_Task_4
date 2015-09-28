<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">


    <title>Ran</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <link rel="stylesheet" href="css/style.css">
		<script src="jquery-1.10.2.min.js" type="text/javascript"></script>
<script>
 
//Focus form
$(window).load(function(){
$("#username").focus();
$("#respon").hide();
});
 
//prevent the username and password fields empty
$("#login").click(function(){
var username = $("#username").val();
var pass = $("#pass").val();
 
if ( username == "" ){
alert("Empty Username");
$("#username").focus();
return false;
} else if ( pass == "" ){
alert("Empty Password");
$("#pass").focus();
return false;
}
 
//Jquery ajax
$.ajax({
url : "loginCheck.php",
//send username and password to the login script
data : "username="+username+"&pass="+pass,
type : "POST",
success : function (html){
if (html == true){
$("#respon").html("SUCCESS, Please Wait..");
setTimeout(function(){
/* Target if login success */
window.location = "home.php";
}, 700);
 
} else {
$("#respon").fadeIn(600);
$("#respon").html("Username or Password do not match.");
$("#username").val('');
$("#pass").val('');
$("#username").focus();
}
},
beforeSend:function() {
//change the inscription on the button when clicked
$("#respon").fadeIn(600);
$("#respon").html("Please Wait...");
}
});
return false;
});
 
});
 
</script>
        
</head>

  <body>

    <div class="login-card" align="center" valign="center">
    <h1>Login</h1>
  <form method="post" action="aksiganti.php" align="center">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    
    
    
    
  </body>
</html>
