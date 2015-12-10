<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NAIK GUNUNG YU</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <script type="text/javascript" src="jquery-1.7.min.js"></script> 
    <script type="text/javascript">
    
    $(document).ready(function(){
        $("#login").click(function(){
            
            var action = $("#lg-form").attr('action');
            var form_data = {
                username: $("#username").val(),
                password: $("#password").val(),
                is_ajax: 1
            };
            
            $.ajax({
                type: "POST",
                url: action,
                data: form_data,
                success: function(response)
                {
                    if(response == "success")
                        $("#lg-form").slideUp('slow', function(){
                            $("#message").html('<p class="success">You have logged in successfully!</p><p>Redirecting....</p>');
                            window.location.href = "http://localhost/rai2/homepage.php";

                        });
                    else if(response == "success1")  
                        $("#lg-form").slideUp('slow', function(){
                            $("#message").html('<p class="success">You have logged in successfully!</p><p>Redirecting....</p>');
                            window.location.href = "http://localhost/rai2/admin/index.php";

                        });
                    else
                        $("#message").html('<p class="error">ERROR: Invalid username and/or password.</p>');
                }   
            });
            return false;
        });
    });
    </script>

  
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>LOGIN FORM</strong></h1>
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to naik gunung site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
    
                            <div class="form-bottom">
			                    <form action="login.php" id="lg-form" name="lg-form"  method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
			                        </div>
			                        <button type="submit" class="btn" id = "login">Sign in!</button>
			                    </form>
                                <div id="message"></div>
                                </div>
                              
		                    </div>
                        </div>
                    </div>
        
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--
        <script type="text/javascript">
        function ajax_login(){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            $.ajax({
                url:"cek_login.php",
                type:"POST",
                data:{
                    username:username,
                    password:password
                },
                success:function(result){
                    $("#hasil").load("tables.html");
                 
                }
            });
        }
        </script> -->
    </body>

</html>