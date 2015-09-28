<!DOCTYPE html>

<html>

	<head>
		<title>Registrasi User Baru</title>
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
				
				<div class="modal-header">
					<style>
						.modal-header{
							border-bottom-color: #c01515;
							color: #c01515;
							padding-bottom: 0px;
							margin-top: 35px;
						}
					</style>
					<div class="collapse navbar-collapse">
						<div class="row flush-col"> 
						<ul class="nav nav-pills">
						
						<style>
						.gi-30px{
							font-size: 30px;
						}
						</style>
							
							
							<div class="col-md-6 text-center"><li><b><div style="color: #c01515"><p class="text-center"><div class="glyphicon glyphicon-pencil gi-30px"></div>&nbsp;&nbsp;<div class="glyphicon glyphicon-briefcase gi-30px"></div><br>Registrasi User Baru</p></div></b></li></div>
							

						</ul>
						</div>
					</div>

				</div>
				
				<div class="modal-body">
					<style>
						.modal-body{
							margin-top: 10px;
						}
					</style>

				<form class="form-horizontal" action="regisberhasil.php" method="post">
				
					<div class="form-group form-group-sm">
						<label class="col-sm-2 control-label">Username</label>
							<div class="col-xs-3">
								<input class="form-control" type="text" name="username2" >
							</div>
					</div>
					
					<div class="form-group form-group-sm">
						<label class="col-sm-2 control-label">Password</label>
							<div class="col-xs-3">
								<input class="form-control" type="text" name="password2">
							</div>
					</div>
					
					<div class="form-group form-group-sm">
						<label class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-xs-3">
								<input class="form-control" type="text" name="name2">
							</div>
					</div>
				
					<div class="form-group form-group-sm">
						<label class="col-sm-2 control-label">Email</label>
							<div class="col-xs-3">
								<input class="form-control" type="text" name="email2">
							</div>
					</div>
					
					<div class="form-group form-group-sm">
						<label class="col-sm-2 control-label">Tempat Lahir</label>
							<div class="col-xs-3">
								<input class="form-control" type="text" name="placebirth">
							</div>
					</div>
					
					<div class="form-group form-group-sm">
						<label class="col-sm-2 control-label">Tanggal Lahir</label>
							<div class="col-xs-5">
								<input class="form-control" rows="1" type="text" name="datebirth"></input>
							</div>
					</div>
					
					
					<button style="margin-left: 150px; background: #c01515; color: #FFFFFF" class="btn btn-default" type="submit">Registrasi</button>
					
				</form>
						

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
						Powered by <i><a style="color: #c01515" href="http://bootstrap.com"> Bootstrap 3.</i></b></div>
					</div>
				</div>

			</div>

		</div>

		

		

		<script src="jquery/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>	

</html>