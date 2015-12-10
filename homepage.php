<?php
include('session.php');
include('koneksi.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>NAIK GUNUNG YU</title>
        
  <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/homecss/bootstrap.min.css" type="text/css">

  <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/css/homecss/animate.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nabil.css" type="text/css">

    <!-- <link rel="stylesheet" media="screen" href="fonts/font-awesome/font-awesome.min.css"> -->


	</head>

	<body id="page-top">
		
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Home Page</a>
            </div>

           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#catatanPejalanan">CATATAN PERJALANAN</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contactme">JADWAL PERJALANAN</a>
                    </li>
                   <li>
                        <a class="page-scroll" href="#contactme">PERLENGKAPAN</a>
                    </li>
                    <li class="dropdown">

                   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $login_session; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                         
                        
                        <li>
                            <a href="edit_user.php?username= <?php echo $login_session; ?>" ><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                 
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                  
                </li>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
    	</nav>


        <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>NAIK GUNUNG YU</h1>
            </div>
        </div>
   		</header>

   		<section class="bg-primary" id="catatanPerjalanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <img src="img/construction.jpg" >
                  
                </div>
            </div>
        </div>
    	</section>

    	<section class="bg-secondary">
		        <div class="container text-center">
		        	 <div class="row">
		           
		       		 </div>
		        </div>
    	</section>

    <!-- jQuery -->
    <script src="assets/js/homejs/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/homejs/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/homejs/jquery.easing.min.js"></script>
    <script src="assets/js/homejs/jquery.fittext.js"></script>
    <script src="assets/js/homejs/wow.min.js"></script>

    <script src="assets/js/homejs/scroll.js"></script>

	</body>
</html>

<!-- 
Created By : NABIL FARRAS / 1103124323 
Reference By : Geek and Creative Free Start Bootstrap and Font Awesome -->