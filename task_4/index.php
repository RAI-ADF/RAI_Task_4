<?php
session_start();
if(isset($_SESSION['username'])!="")
{
    if(isset($_SESSION['status'])=="admin"){
        header("Location: adminPage.php");   
    }else{
        header("Location: clientPage.php");   
    }
}
?>
<html>
<head>
<title>Log In</title>
<link rel="stylesheet" type="text/css" href="../css/login-css.css">
</head>

<body>
	<form id="login" action="login.php" method="post">
        <h1>Log In</h1>
        <fieldset id="inputs">
            <input id="username" name="username" type="text" placeholder="Username" autofocus="" required="">   
            <input id="password" name="password" type="password" placeholder="Password" required="">
        </fieldset>
        <fieldset id="actions">
            <input type="submit" id="submit" value="Log in">
            <a href="">Forgot your password?</a><a href="registration.php">Register</a>
        </fieldset>
    </form>
</body>
</html>