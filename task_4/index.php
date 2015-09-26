<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
  <script type="text/javascript">

  $("button#submit").click( function() {
 
  if( $("#username").val() == "" || $("#password").val() == "" )
    $("div#ack").html("Please enter both username and password");
  else
    $.post( $("#form_login").attr("action"),
          $("#form_login :input").serializeArray(),
      function(data) {
        $("div#ack").html(data);
      });
 
  $("#form_login").submit( function() {
     return false;  
  });
 
});
</script>

</head>
<body>
<h2 align="center"> Login </h2>
<form id="form_login" action="login.php" method="POST">
    username: <input type="text" name="username" id="username"/> <br/>
    password: <input type="password" name="password" id="password"/> <br />

    <button id="submit">Login</button>
</form>
    <div id="ack"></div>
    <br>
    User baru,  <a href="registration.php">Registrasi disini</a>. 
<script type="text/javascript" src="script/jquery-1.8.2.min.js"></script>
</body>
</html>