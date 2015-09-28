<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="jquery-1.11.3.js"></script>
    <script src="Login.js"></script>
    </head>
    <body>
        <div class="login">
        	<div class="title">Page Login</div>
        	<form action="validate.php" method="POST" >
            	<input type="text" placeholder="Username" id="username" name="username">
                <input type="password" placeholder="Password" id="password" name="password">
                <div class="col"><a href="registrationPage.php" >Create an account now</a></div>
                <div></div>
                <div><center> <input type="submit" name="submit" value="LOGIN" id="submit"  > </center></div>
            </form>
        </section>
    </body>
</html>