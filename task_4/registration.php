<html>
    <head>
        <title>Registration</title>
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="/image/bukanjoker.png" rel="shortcut icon" /> 

    </head>

    <body>
        <div class="main" style="width: 38%;">
            
            <div class="login">
                <div class="inset">
                    <!-----start-main---->
                    <form name="formL" action="login.php" method="post">
                        <div>
                            <span><label>Registration</label></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div>
                            <span><label for="username">Username</label></span>
                            <span><input type="text" class="textbox" name="username" required></span>
                        </div>
                        <div>
                            <span><label for="username">Name</label></span>
                            <span><input type="text" class="textbox" name="username" required></span>
                        </div>
                        <div>
                            <span><label for="username">Email</label></span>
                            <span><input type="text" class="textbox" name="email" required></span>
                        </div>
                        <div>
                            <span><label for="username">Place of Birth</label></span>
                            <span>
                            	<select name="divisi" class="textbox">
									<option selected value="none"><i>Select...</i>
									<option value="Amerika"><i>Amerika</i>
									<option value="Inggris"><i>Inggris</i>
									<option value="Indonesia"><i>Indonesia</i>
									<option value="Jepang"><i>Jepang</i>
								</select>
                            </span>
                        </div>
                        <div>
                            <span><label for="username">Date of Birth</label></span>
                            <span><input type="text" class="textbox" name="dob" required></span>
                        </div>
                        <div>
                            <span><label for="password">Password</label></span>
                            <span><input type="password" class="textbox" name="password" required></span>
                        </div>
                        <div>
                            <span><label for="password">re-Enter Password</label></span>
                            <span><input type="password" class="textbox" name="cekpass" required></span>
                        </div>
                        <div class="sign">
                            <div >
                                <input type="submit" class="submit" value="SUBMIT">
                            </div>
                            <span class="forget-pass">

                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-----//end-main---->
    </body>
</html>
