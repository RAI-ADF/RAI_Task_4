<!DOCTYPE html>
<?php
require_once('./include/db.php'); //get the connection
// require_once('./include/core_lib.php'); //get the library
// Session(); //Make a session
session_start();
$username= isset($_POST['username'])?$_POST['username']:'';
$password = isset($_POST['password'])?$_POST['password']:''; 
$error = '';
if(isset($_POST['login'])){
	$query = "select * from tbl_user where username = '$username' and password = '$password'";
	$hasil = mysql_query($query);
	$row = mysql_fetch_array($hasil);
	$num = mysql_num_rows($hasil);
	if($num == 1){
		
		header("location: homebanget.php");
		
		$_SESSION['id_user'] = $row['id_user'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['nama_user'] = $row['nama_user'];
	}
	else{
		header("location: index.php");
	}
}
// if(Lock()){
		// header("Location: ./beranda.php");
	// }
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Sistem Informasi Pegawai</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--icheck-->
    <link href="js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
    <link href="js/iCheck/skins/minimal/red.css" rel="stylesheet">
    <link href="js/iCheck/skins/minimal/green.css" rel="stylesheet">
    <link href="js/iCheck/skins/minimal/blue.css" rel="stylesheet">
    <link href="js/iCheck/skins/minimal/yellow.css" rel="stylesheet">
    <link href="js/iCheck/skins/minimal/purple.css" rel="stylesheet">

    <link href="js/iCheck/skins/square/square.css" rel="stylesheet">
    <link href="js/iCheck/skins/square/red.css" rel="stylesheet">
    <link href="js/iCheck/skins/square/green.css" rel="stylesheet">
    <link href="js/iCheck/skins/square/blue.css" rel="stylesheet">
    <link href="js/iCheck/skins/square/yellow.css" rel="stylesheet">
    <link href="js/iCheck/skins/square/purple.css" rel="stylesheet">

    <link href="js/iCheck/skins/flat/grey.css" rel="stylesheet">
    <link href="js/iCheck/skins/flat/red.css" rel="stylesheet">
    <link href="js/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="js/iCheck/skins/flat/blue.css" rel="stylesheet">
    <link href="js/iCheck/skins/flat/yellow.css" rel="stylesheet">
    <link href="js/iCheck/skins/flat/purple.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="" class="logo">
        <img src="images/Lambang Kota Bandung.png" alt="" width=50 height=50>
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
	
<div class="col-md-7">
	<div class="">
		<h3>
            Sistem Informasi Pegawai Diskominfo Bandung
        </h3>
		<h6>
            Jln. Wastukancana no 2, Bandung - Jawa Barat. Telepon : (022)4234892 Fax : (022)4234892
        </h6>
    </div>
</div>
<!--logo end-->
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">

            <li>
                <a href="index.php" class="active">
                    <i class="fa fa-user"></i>
                    <span>LOGIN</span>
                </a>
            </li>
        </ul></div>        
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content" class="">
        <section class="wrapper">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        LOGIN
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form class="form-horizontal" role="form" method="post">
                            <div class="col-lg-6">
                            <div class="input-group m-bot15">
                                <span class="input-group-addon btn-white"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                            <div class="input-group m-bot15">
                                <span class="input-group-addon btn-white"><i class="fa fa-lock"></i></span>
                                <input type="Password" class="form-control" placeholder="Password" name="password">
                            </div>
							<div class="input-group m-bot15">
							<p class="text-danger">
							<?php
							echo $error;
							?></p>
							</div>
                        </div>
						
						       <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-10">
                                    <input value="Login"  name="login" type="submit" class="btn btn-info"/></input>
									
                                </div>
                            </div>
							
                        </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
   
    

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>

<script src="js/iCheck/jquery.icheck.js"></script>

<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<!--icheck init -->
<script src="js/icheck-init.js"></script>

</body>
</html>
