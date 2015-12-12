<html>
    <head>
        <title>Registration</title>
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link rel="shortcut icon" href="image/bukanjoker.png">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script>
		  	$(function() {
		    $( "#datepicker" ).datepicker({changeMonth: true,
										   changeYear: true,
										   yearRange:'1950:2015'});
		  	});
		</script>
		<script language="javascript">
			function cek(){
				var password= document.getElementById('password').value;
				var email = document.getElementById('email');
			    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if(password.replace(/^\s+|\s+$/g, '')==''){
					alert('Fill your password, please ..');
					return false;
				}
				if (!filter.test(email.value)) {
			    alert('Sorry, your email address is invalid');
			    email.focus;
			    return false;
				}
				return true;
			}
		</script>

    </head>

    <body>
        <div class="main" style="width: 38%;">
            <div class="inset">
                <!-----start-main---->
                <form name="formL" action="do_regis.php" method="post">
                    <div>
                        <span><label>Registration</label></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div>
                        <span><label for="username">Username</label></span>
                        <span><input type="text" class="textbox" name="username" id="username" required></span>
                    </div>
                    <div>
                        <span><label for="username">Name</label></span>
                        <span><input type="text" class="textbox" name="name" id="name" required></span>
                    </div>
                    <div>
                        <span><label for="username">Email</label></span>
                        <span><input type="text" class="textbox" name="email" id="email" required></span>
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
                        <span><input type="password" class="textbox" name="password" id="password" required></span>
                    </div>
                    <div>
                        <span><label for="password">re-Enter Password</label></span>
                        <span><input type="password" class="textbox" name="cekpass" id="cekpass" required></span>
                    </div>
                    <div class="sign">
                        <div >
                            <input type="submit" class="submit" onclick="return cek(); window.location.href='registration.php'" value="SUBMIT">
                            <a href="login.php" style="margin-left: 20px;">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div></div>
            <!-----//end-main---->
    </body>
</html>
