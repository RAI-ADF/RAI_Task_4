<html>
    <head>
        <title>Login</title>
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link rel="shortcut icon" href="image/MCD2.jpg">

    </head>

    <body>
        <div class="main" style="width: 35%;">
            <div class="inset">
                <!-----start-main---->
                <form name="formL" action="do_login.php" method="post">
                    <div>
                        <span><label>Login</label></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div>
                        <span><label for="username">Username</label></span>
                        <span><input type="text" class="textbox" name="username" required></span>
                    </div>
                    <div>
                        <span><label for="password">Password</label></span>
                        <span><input type="password" class="textbox" name="password" required></span>
                    </div>
                    <div class="sign">
                        <div >
                            <input type="submit" class="submit" value="LOGIN">
                            <a href="registration.php" style="margin-left: 200px;">Register</a>
                        </div>
                    </div>
                </form>
          	</div>
        </div></div>
            <!-----//end-main---->
    </body>
</html>
