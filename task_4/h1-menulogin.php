<!-- copyright 2015 @ Sang Made Naufal 1103120146 -->

<?php
include('i1-login.php'); // Includes Login Script


if(isset($_SESSION['login_user'])){
header("location: a1-solusi.php");
}
?>


<!DOCTYPE html>

<html>
	<head>
		<title>Selamat Datang di Opal</title>
	</head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<body>
		<div class="navbar navbar-default">
			<style>
			.navbar-default{
				background-color: #c01515;
				height: 80px;
				width: 100%;
				padding: 10px;
				top: 0;
				bottom: auto;
				margin-bottom:0px;
			}
		 	</style>
			
			<div class="container">
				<a style="color: #ffff00" href= "#" class="navbar-brand">OPAL</a>
				<a href="#" class="pull-left"><img style="max-width:50px; margin-left:-11px;" src="image/logo.png" class="img-circle"></a>

				<div class="collapse navbar-collapse">
						<ul class = "nav navbar-nav navbar-right">
								


                <li><a data-controls-modal="myModal" data-backdrop="static" data-keyboard="false" style="color: #ffff00" class="btn" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-log-in"></span> Login User</a></li>
                      <div class="modal fade" id="myModal" role="form">
                                        <div class="modal-dialog">    
                                        <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                                        <h4 class="modal-title">Login User</h4>
                                                </div>
                                                <div class="modal-body">           
                                                    <form method="post" class="form-horizontal" role="form" action="i1-login2.php">
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="NIK">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="NIK" placeholder="" name="username2">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="pwd">Password</label>
                                                            <div class="col-sm-10">          
                                                                <input name="wikipass" type="password" class="form-control" id="password2" name="password2" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">        
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <div class="checkbox">
                                                                    <label><input type="checkbox"> Remember me</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">        
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <button name="submit" type="submit" class="btn btn-default">Login</button>
                                                            </div>
                                                        </div>

                                                        <br>

                                                        <a href="regis.php" style="color: #c01515">Belum memiliki akun? Registrasi disini</a>

                                                      
                                                    </form>

                                                      <?php if (isset($_SESSION['errors'])): ?>
                                <div class="form-errors">
                                    <?php foreach($_SESSION['errors'] as $error): ?>
                                        <p><?php echo $error ?></p>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>

								<li><a data-controls-modal="myModal" data-backdrop="static" data-keyboard="false" style="color: #ffff00" class="btn" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-log-in"></span> Login Admin</a></li>
        							<div class="modal fade" id="myModal" role="form">
                                        <div class="modal-dialog">    
                                        <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                                        <h4 class="modal-title">Login Admin</h4>
                                                </div>
                                                <div class="modal-body">           
                                                    <form method="post" class="form-horizontal" role="form" action="i1-login.php">
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="NIK">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="NIK" placeholder="" name="wikiuser">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="pwd">Password</label>
                                                            <div class="col-sm-10">          
                                                                <input name="wikipass" type="password" class="form-control" id="pwd" name="wikipass" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">        
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <div class="checkbox">
                                                                    <label><input type="checkbox"> Remember me</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">        
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <button name="submit" type="submit" class="btn btn-default">Submit</button>
                                                            </div>
                                                        </div>

                                                      
                                                    </form>

                                                      <?php if (isset($_SESSION['errors'])): ?>
    														<div class="form-errors">
        														<?php foreach($_SESSION['errors'] as $error): ?>
            														<p><?php echo $error ?></p>
        														<?php endforeach; ?>
    														</div>
														<?php endif; ?>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>

						</ul>
				</div>

			</div>

		</div>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<style>
				.carousel{
					margin-top: 0px;
					padding-top: 0px;

				}
			</style>
  		<!-- Indicators -->
  			<ol class="carousel-indicators">
    			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    			<li data-target="#myCarousel" data-slide-to="1"></li>
    			<li data-target="#myCarousel" data-slide-to="2"></li>
  			</ol>

  		<!-- Wrapper for slides -->
  			<div class="carousel-inner" role="listbox">
  				<style>
  				.carousel-inner > .item > img {
  					width: 880px;
  					height: 570px;
  					vertical-align: center;
  					text-align: center;
  					margin-top: 0px;
  					padding-top: 0px;
  				}

  				<style>
  				.carousel-inner > .item > img {
  					width: 880px;
  					height: 570px;
  					vertical-align: center;
  					text-align: center;
  					margin-top: 0px;
  					padding-top: 0px;
  				}
  				.carousel-inner > .item > .carousel-caption {
  					color:  #c01515;
  				}
  				.watermark{
  					opacity: 1;
  				}
  				.well{
  					opacity: 0.85;
  					padding-top: 0px;
  					padding-bottom: 5px;
  					padding-left: 5px;
  					padding-right: 5px;
  					margin-bottom: 5px;
  				}
  	
  				</style>
    				<div class="item active ">
      					<img class="center-block watermark" style="position: center" src="image/opal1.jpg" alt="wikifiesto">
      						<div class="carousel-caption">
      							<div class="well">
        						<h3>Selamat Datang di OPAL</h3>
        							<p>Sang Made Naufal | 1103120146</p>
        						</div>
      						</div>
    				</div>

    				<div class="item">
      					<img class="center-block watermark" style="position: center" src="image/opal2.jpg" alt="wikifiesto">
    						<div class="carousel-caption">
    							<div class="well">
        						<h3>Selamat Datang di OPAL</h3>
        							<p>Sang Made Naufal | 1103120146</p>
        						</div>
      						</div>
    				</div>

    				<div class="item">
      					<img class="center-block watermark" style="position: center" src="image/opal3.jpg" alt="Flower">
      						<div class="carousel-caption">
      							<div class="well">
        						<h3>Selamat Datang di OPAL</h3>
        							<p>Sang Made Naufal | 1103120146</p>
        						</div>
      						</div>
    				</div>
  			</div>

  			<!-- Left and right controls -->
  			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			
  			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>

		<script src="jquery/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>