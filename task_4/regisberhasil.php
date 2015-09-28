
<?php
	define('dbname', 'wikifiesto');
	define('dbuser', 'root');
	define('dbpass', '');
	define('dbhost', 'localhost');

	$link = mysql_connect(dbhost, dbuser, dbpass);

	if(!$link){
		die('could not connect: ' . mysql_error());
	}

	$db_selected = mysql_select_db(dbname, $link);

	if(!$db_selected){
		die('can\'t use' . dbname . ': ' . mysql_error());
	}

	//$value = $_POST['name'];
	$username2 = $_POST['username2'];
	$password2 = $_POST['password2'];
	$name2 = $_POST['name2'];
	$email2 = $_POST['email2'];
	$placebirth = $_POST['placebirth'];
	$datebirth = $_POST['datebirth'];
	
	$sql = "INSERT INTO wikilogin2 (username2, password2, name2, email2, placebirth, datebirth) VALUES ('$username2','$password2','$name2','$email2',
			'$placebirth','$datebirth')";

	if(!mysql_query($sql)){
		die('Error : ' . mysql_error());
	}


	
?>

<!DOCTYPE html>

<html>

	<head>
		<title>Registrasi Berhasil</title>
	</head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">


	<body>
		
		<div class="navbar navbar-default navbar-static-top"> <!--header-->
		 <style>
			.navbar-default, .navbar-static-top{
				background-color: #c01515;
				height: 80px;
				width: 100%;
				padding: 10px;
				top: 0;
				bottom: auto;
			}
		 </style>

		 

		 


			<div class="container">
				<a style="color: #FFFF00" href= "#" class="navbar-brand">OPAL</a>
				<a href="#" class="pull-left"><img style="max-width:50px; margin-left:-11px;" src="image/logo.png" class="img-circle"></a>


			</div>

		</div>

		<div class="modal-dialog modal-lg"> <!-- modals ukuran small -->
			<style>
				.modal-dialog, .modal-lg{
					margin-top: 0px; 
					border-color: #c01515;
				}
			</style>
			
			<div class="modal-content">
				
				<div class="modal-body">
					<style>
						.modal-body{
							border-bottom-color: #c01515;
							color: #c01515;
						}
					</style>
					<div>
						<h1 class="text-center">Registrasi Berhasil</h1>
						<br>
						<br>
						<br>

						<div class="collapse navbar-collapse">
							<div class="row flush-col"> 
								<ul class="nav nav-pills">
								<style>
								.gi-30px{
								font-size: 30px;
								}
								</style>
						
							
									<div class="col-md-6 text-center"><li><a style="color: #c01515" href="h1-menulogin.php"><p class="text-center"><div class="glyphicon glyphicon-home gi-30px"></div>&nbsp;&nbsp;<div class="glyphicon glyphicon-briefcase gi-30px"></div><br>Kembali ke Menu Utama</p></a></li></div>
									

								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer text-center"> 
					<style>
						.modal-footer, .col-md-8 {
							border-top-color: #c01515;
							margin-top: 20px;
							height: 100px;
							width: 100%;
							text-align: center;
							padding-top: 0px;
						}
					</style>

					<div class="col-md-8 container text-center">
						<div class="text-muted credit" style="color: #c01515"><b>Copyrights @ 2015 by Sang Made Naufal.
						<br>
						All Rights Reserved.
						<br>
						Powered by <i><a style="color: #c01515" href="http://bootstrap.com"> Bootstrap 3.</a></i></b>
						</div>
					</div>
				</div>

			</div>

		</div>

		

		<script src="jquery/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>	

</html>