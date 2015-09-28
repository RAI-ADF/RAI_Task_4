<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Milarian | Registrasi</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <script type= "text/javascript" src = "provins.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type= "text/javascript" src = "datepick.js"></script>
    <script language= "javascript">
    function cek(){
      var password= document.getElementById('password').value;
      var password1= document.getElementById('password1').value;
      var email = document.getElementById('email');
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if(password.replace(/^\s+|\s+$/g, '')==''){
        alert('Maaf, Password Anda masih kosong  !');
        return false;
      }
      if (password != password1) {
        alert("You have entered a different password!");
        return false;
      }
      if (!filter.test(email.value)) {
        alert('Please provide a valid email address');
        email.focus;
        return false;
      }
      return true;
    }
    </script>
  </head>
  <body>
    <div id="main">
      <div id="login">
        <h1>Registration</h1>
        <form action="" method="post">
          <input id="form" name="username" placeholder="Username" type="text">
          <input id="form" name="email" placeholder="Email@mail.com" type="email">
          <br>
          <br>
          <input id="form" name="password" placeholder="Your Password" type="password">
          <input id="form" name="password1" placeholder="Confirm Password" type="password">
          <br>
          <br>
          <p>Place of Birth</p>
          <select class="form" id="provinsi" name ="place"></select>
          <select class="form" id="state" name ="place"></select>
          <script language="javascript">
          populateProvins("provinsi", "state");
          </script>
          <br>
          <br>
          <input id="datepicker" name="tanggal" placeholder="Date of Birth" type="text"/>
          <br>
          <input id="signup" type="submit" value="Sign Up" onClick='return cek();'/>
        </form>

      </div>
    </div>
  </body>
</html>
