
<?php
include 'koneksi.php'; // hubungkan file php dengan file configurasi ke database
?>

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
        <!-- <link href="admin/assets/css/jquery.datepick.css" rel="stylesheet"> -->

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
 
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
       
         <script src="//code.jquery.com/jquery-1.10.2.js"></script>        
         <script src="assets/js/jquery-ui.js"></script>
  

    </head>

    <body onload='document.formulir.email.focus()'>

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>EDIT USER</strong></h1>
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Edit User to naik gunung site</h3>
                            		
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>

                            <?php
                            $id_user = $_GET['id_user'];
                                    $query = mysql_query("select * from user where id_user = $id_user");
                                    while ($q = mysql_fetch_array($query)) {
                                    ?>
                            <div class="form-bottom">
			                    <form name="formulir" role="form" action="update.php" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Nama</label>
                                        <input type="text" name="nama" value="<?php echo $q['name'] ?>" class="form-username form-control" id="form-username">
                                    </div>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" value="<?php echo $q['username'] ?>" class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="text" name="password" value="<?php echo $q['password'] ?>" class="form-password form-control" id="form-password">
			                        </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Email</label>
                                        <input type="text" name="email" value="<?php echo $q['email'] ?>" class="form-username form-control" id="form-email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Tempat Lahir</label>
                                        <input type="text" name="tempatlahir" value="<?php echo $q['tempat_lahir'] ?>" class="form-username form-control" id="form-tempatlahir">
                                    </div>
                                     <div class="form-group">
                                        <label class="sr-only" for="form-username">Tanggal Lahir</label>
                                        <input type="text" id="datepicker" name="tanggallahir" value="<?php echo $q['tanggal_lahir'] ?>" class="form-username form-control" id="form-tanggallahir">
                                    </div>

                                    <br></br>
			                        <button type="submit" class="btn" onclick="ValidateEmail(document.formulir.email)">EDIT</button>
			                    </form>

                                 <?php
                                    }
                                ?>
		                    </div>
                        </div>
                    </div>
        
                </div>
            </div>
            
        </div>

        <!-- Javascript -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="email-validation.js"></script>  
    

    </body>

</html>