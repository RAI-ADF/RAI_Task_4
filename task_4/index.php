<?php
session_start();
if(isset($_SESSION['username'])!="")
{
    if(isset($_SESSION['leveluser'])=="admin"){
        header("Location: adminPage.php");   
    }else{
        header("Location: clientPage.php");   
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Login</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<div id="main">
<h1></h1>

<div id="box">
<form action="login.php" method="post">
<label>Username</label> 
<input type="text" name="username" class="input" autocomplete="off" id="username"/>
<label>Password </label>
<input type="password" name="password" class="input" autocomplete="off" id="password"/><br/>
<input type="submit" class="button button-primary" value="Log In" id="login"/> 
<span class='msg'></span> 
    </br>
    </br>
<label><a href="registration.php"><b>Sign up</b></a></label>

<div id="error">

</div>	

</div>
</form>	
</div>

</div>
</body>