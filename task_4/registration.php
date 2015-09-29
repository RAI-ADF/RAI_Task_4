<?php
  session_start();
?>

<!DOCTYPE>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="style1.css" type="text/css" />
        <script type= "text/javascript" src = "placesMenu.js"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        
        <script>
        	$(function() {
                $( "#datepicker" ).datepicker({changeMonth: true,
              		changeYear: true, 
              		yearRange:'1970:2015'});
        	});
        </script>

        <script language="javascript">
            window.onload=function() {
                document.getElementById("register").onsubmit=function() {
                    window.location.replace("index.php");
                    return false;
                }
            }
            function checkInput(){
            	var password = document.getElementById('password').value;
            	var password_confirm = document.getElementById('password_confirm').value;
            	var email = document.getElementById('email');
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            	if(password.replace(/^\s+|\s+$/g, '')==''){
            		alert('Masukkan password !');
            		return false;
            	}
            	if (password != password_confirm) {
            		alert("Password tidak sama !");  
            		return false;  
            	}
            	if (!filter.test(email.value)) {
                    alert('Masukkan alamat email yang valid !');
                    email.focus;
                    return false;
            	}
            	return true;
            }
        </script>
    </head>
    <body>
      	<center>
            <div id="regisbox">
                <div>
                <form id="register" action="_registration.php" method="post">
                
                <div style= "text-align:left;">
                    <label><br>Nama Lengkap</label> 
                    <input id="name" type="text" name="name" size="20px" placeholder="Nama Lengkap Anda" required><br>
                  	
                    <label><br>Alamat Email</label> <br>
                    <input id="email" type="text" name="email" size="20px" placeholder="Email@contoh.com" required><br><br>
                    
                    <label>Username</label>
                    <input id="username" type="text" name="username" size="20px" placeholder="Username" required></input><br>
                    
                    <label><br>Password</label> 
                    <input id="password" type="password" name="password" size="20px" placeholder="********" required ></input><br>
                    <input id="password_confirm" type="password" name="password_confirm" size="20px" placeholder="********" required ></input><br>
                    
                    <label><br>Tempat Lahir </label><br>
                    <select id ="provinsi" name ="placeOfBirth"></select>
                    <select id ="kota" name ="placeOfBirth" ></select>	
                    <script language="javascript">
                    	populateProvince("provinsi", "kota");
                    </script><br>
                		
                    <label>
                        Tanggal Lahir
                    </label><br>
                    <input name="dateOfBirth" id="datepicker" type="text"/> <br><br>  

                    <center>         
                        <input id="signup" type="submit" value="Register" onClick="return checkInput(); window.location.href='index.php'"/>
                        <input type="button" value="Already have account? Login" onclick="window.location.href='index.php';"/>

                        <?php
                        if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) >0 ) {
                        	echo '<ul style="padding:0; font-size:15px; color:red;">';
                        	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                        		echo '<li type="none">',$msg,'</li>'; 
                        	}
                        echo '</ul>';
                        unset($_SESSION['ERRMSG_ARR']);
                        }
                        ?>
                    </center>
                  </form>
                </div>
            </div
        </center>
        <div id="bottomtext">
            rastaufiq production<sup>&copy</sup>
        </div>
    </body>
</html>
