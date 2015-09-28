<!-- copyright 2015 @ Sang Made Naufal 1103120146 -->

<?php
include('i2-session.php');

?>
<!DOCTYPE html>

<html>

	<head>
		<title>Menu Admin</title>
	</head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">

	<body>
		<div class="navbar navbar-default navbar-static-top">
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
				<div style="color: #FFFF00" class="navbar-brand">OPAL</div>
				<div href="#" class="pull-left"><img style="max-width:50px; margin-left:-11px;" src="image/logo.png" class="img-circle"></div>
				

				<div class="collapse navbar-collapse">
						<ul class = "nav navbar-nav navbar-right">
							<li><a style="color: #FFFF00" href = "i3-logout.php">Logout</a></li>
						</ul>
				</div>
			</div>
		</div>

		<div class="col-sm-2">
			<style>
				.nav-pills  > li.active > a:hover,
				.nav-pills  > li.active > a {
					background: #c01515;
				}
			</style>

			<style>
				.nav-pills > li > a{
					color: black;
				}
			</style>
					<ul class="nav nav-pills nav-stacked nav-static"> <!--stacked untuk jadi vertical -->
						<li class="active"><a>Lihat Data</a></li>
						<li><a href="admin2.php">Atur Data</a></li>
					</ul>
		</div>

		<!-- ************************************* -->
		<div class="modal-dialog modal-lg">
			<style>
				.modal-dialog, .modal-lg{
					padding-bottom: 0px;
					margin-top: 0;
					border-color: #c01515;

				}
			</style>

			<div class="modal-content">
				<div class="modal-body">
						<style>
							.modal-body{
								margin-top: 35px;
							}
						</style>
				

					<div class="collapse navbar-collapse">
						<div class="row flush-col"> 
							<ul class="nav nav-pills">
							<style>
								.glyphicon{
								font-size: 30px;
								}
							</style>
							
							
								<div class="col-md-6 text-center"><li><a style="color: #c01515" href=""><p class="text-center"><div class="glyphicon glyphicon-pencil"></div>&nbsp;&nbsp;<div class="glyphicon glyphicon-briefcase"></div><br>Lihat Data Admin</p></a></li></div>
								<div class="col-md-6 text-center"><li><a style="color: #c01515" href=""><p class="text-center"><div class="glyphicon glyphicon-list-alt"></div><br>Lihat Data User</p></a></li></div>
							

							</ul>
						</div>
					</div>

				</div>

				<div class="modal-footer text-center"> 
					<style>
						.modal-footer, .col-md-8 {
							border-top-color: #c01515;
							margin-top: 10px;
							height: 100px;
							width: 100%;
							text-align: center;
							padding-top: 0px;
							
						}
					</style>
					<div class="col-md-8">
						<div class="col-md-8 container text-center">
							<div class="text-muted credit" style="color: #c01515"><b>Copyrights @ 2015 by Sang Made Naufal.
							<br>
							All Rights Reserved.
							<br>
							Powered by <i><a style="color: #c01515" href="http://getbootstrap.com">Bootstrap 3.</a></i></b>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>

		<script src="jquery/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>

</html>