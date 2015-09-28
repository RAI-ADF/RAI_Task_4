<!DOCTYPE html>
<?php
	require_once('./include/db.php'); //get the connection
	session_start();
	// require_once('./include/core_lib.php'); //get the library
	
	// Session(); //Make a session
    $user = $_SESSION['username'];
    // $cekdatapem = "";
    // $cekdataper ="";
    // $cekdataizin = "";
    // $ceklamp="";
    // $cektgl = "";
    // $cekskrd="";
    // $cekpem="";
    // $cekimb="";
    // $query1 = mysql_query("SELECT id_data_pemohon from berkas where username = '$user'");
    // $ridpem = mysql_fetch_array($query1);
    // $idpem = $ridpem['id_data_pemohon'];
    // if($idpem!=null){
        // $cekdatapem = "fa fa-check";
    // }
    // $query2 = mysql_query("SELECT id_perusahaan from berkas where username = '$user'");
    // $ridper = mysql_fetch_array($query2);
    // $idper = $ridper['id_perusahaan'];
    // if($idper!=null){
        // $cekdataper = "fa fa-check";
    // }
    // $query3 = mysql_query("SELECT nomor_izin from berkas where username = '$user'");
    // $rnomiz = mysql_fetch_array($query3);
    // $nomiz = $rnomiz['nomor_izin'];
    // if($nomiz!=null){
        // $cekdataizin = "fa fa-check";
    // }
    // $query4 = mysql_query("SELECT id_lampiran from berkas where username = '$user'");
    // $ridlam = mysql_fetch_array($query4);
    // $idlam = $ridlam['id_lampiran'];
    // if($idlam!=null){
        // $ceklamp = "fa fa-check";
    // }
    // $query5 = mysql_query("SELECT id_jadwal_lapangan from berkas join jadwal_pemeriksaan_lapangan using(id_berkas) where username='$user'");
    // $ridtgl = mysql_fetch_array($query5);
    // $idtgl = $ridtgl['id_jadwal_lapangan'];
    // if($idtgl!=null){
      // $cektgl = "fa fa-check";
    // }
    // $query6 = mysql_query("SELECT id_skrd from skrd join berkas using(id_berkas) where username = '$user'");
    // $rskrd = mysql_fetch_array($query6);
    // $idskrd = $rskrd['id_skrd'];
    // if($idskrd!=null){
        // $cekskrd = "fa fa-check";
    // }
    // $query7 = mysql_query("SELECT id_transaksi from transaksi join skrd using(id_skrd) join berkas using(id_berkas) where username='$user'");
    // $rpem = mysql_fetch_array($query7);
    // $idtrans = $rpem['id_transaksi'];
    // if($idtrans!=null){
        // $cekpem = "fa fa-check";
    // }
    // $query8 = mysql_query("SELECT id_imb from imb join berkas using(id_berkas) where username = '$user'");
    // $rimb = mysql_fetch_array($query8);
    // $idimb = $rimb['id_imb'];
    // if($idimb!=null){
        // $cekimb = "fa fa-check";
    // }
	
	// Add this to all pages required login
	// if(!Lock()){
		// header("Location: ./login.php");
	// }
    if($user!=''){
?>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Data Pegawai</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

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

    <a href="beranda.php" class="logo" align="center">
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
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search by Name">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <!--<img alt="" src="images/avatar1_small.jpg">!-->
                <span class="username"><?php echo $_SESSION['username']; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="homebanget.php">
                        <i class="fa fa-desktop"></i>
                        <span>Beranda</span>
                    </a>
                </li>
				<li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-edit"></i>
                        <span>Sistem Informasi Pegawai</span>
                    </a>
                    <ul class="sub">
						 <li><a href="beranda.php">Data Pegawai</a></li>
                        <li><a href="tambah.php">Tambah Data Pegawai</a></li>
                    </ul>
                </li>

				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-edit"></i>
                        <span>Sistem Surat</span>
                    </a>
                    <ul class="sub">
						<li class="sub-menu">
							<a href="javascript:;">
								<i class="fa fa-edit"></i>
								<span>Surat Instruksi Walikota</span>
							</a>
							<ul class="sub">
								 <li><a href="surat-instruksi-walikota.php">Data Surat Instruksi Walikota</a></li>
								<li><a href="form-instruksi-walikota.php">Tambah Surat Instruksi Walikota</a></li>
							</ul>
						</li>
                    </ul>
					<ul class="sub">
						<li class="sub-menu">
							<a href="javascript:;">
								<i class="fa fa-edit"></i>
								<span>Surat Edaran Walikota</span>
							</a>
							<ul class="sub">
								 <li><a href="surat-edaran-walikota.php">Data Surat Edaran Walikota</a></li>
								<li><a href="form-edaran-walikota.php">Tambah Surat Edaran Walikota</a></li>
							</ul>
						</li>
                    </ul>
					<ul class="sub">
						<li class="sub-menu">
							<a href="javascript:;">
								<i class="fa fa-edit"></i>
								<span>Surat Perintah Walikota</span>
							</a>
							<ul class="sub">
								 <li><a href="surat-perintah-walikota.php">Data Surat Perintah Walikota</a></li>
								<li><a href="form-perintah-walikota.php">Tambah Surat Perintah Walikota</a></li>
							</ul>
						</li>
                    </ul>
					<ul class="sub">
						<li class="sub-menu">
							<a href="javascript:;">
								<i class="fa fa-edit"></i>
								<span>Surat Keterangan Walikota</span>
							</a>
							<ul class="sub">
								 <li><a href="surat-keterangan-walikota.php">Data Surat Keterangan Walikota</a></li>
								<li><a href="form-keterangan-walikota.php">Tambah Surat Keterangan Walikota</a></li>
							</ul>
						</li>
                    </ul>
					<ul class="sub">
						<li class="sub-menu">
							<a href="javascript:;">
								<i class="fa fa-edit"></i>
								<span>Surat Walikota</span>
							</a>
							<ul class="sub">
								 <li><a href="surat-walikota.php">Data Surat Walikota</a></li>
								<li><a href="form-surat-walikota.php">Tambah Surat Walikota</a></li>
							</ul>
						</li>
                    </ul>
                </li>
            </ul>            
            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
    <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-md-12">
               <!--<section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-3">
                           <div class="profile-pic text-center">
                               <img src="images/lock_thumb.jpg" alt=""/>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="profile-desk">
                               <h1><?php echo $user; ?></h1>
                               <h3>
                                   Selamat Datang di Website Sistem Informasi Pegawai Diskominfo Bandung
                               </h3>
                           </div>
                       </div>
                       
                </section>
            </div>!-->
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading tab-bg-dark-navy-blue">
                        <ul class="nav nav-tabs nav-justified ">
                            <li class="active">
                                <a data-toggle="tab" href="#overview">
                                    <h3>
									Data Pegawai
									</h3>
								</a>
                            </li>
                        </ul>
                    </header>
					<table width=100% class="display table table-bordered table-striped" id="dynamic-table">
						<tr>
							<th>No. </th>
							<th>NIP </th>
							<th>Nama Pegawai </th>
							<th>Golongan </th>
							<th>Jabatan </th>
							<th>Aksi </th>
						</tr>
						<?php
							$query = "SELECT * FROM `tbl_data_pegawai` join tbl_data_golongan using (`nip_pegawai`) join tbl_data_jabatan using (`nip_pegawai`) join tbl_pendidikan using (`nip_pegawai`)";
							$hasil = mysql_query($query);
							$counter=0;
							while($row = mysql_fetch_array($hasil)){
							$counter++;
							$nip_pegawai = $row['nip_pegawai'];
						?>
						
						<tr>
							<td><?php echo $counter; ?> </td>
							<td><?php echo $row['nip_pegawai']; ?>  </td>
							<td><?php echo $row['nama_pegawai']; ?> </td>
							<td><?php echo $row['golongan']; ?> </td>
							<td><?php echo $row['jabatan']; ?> </td>
							<td> <a href="detail.php?id=<?php echo $nip_pegawai; ?>">Detail </a> | <a href="edit.php?id=<?php echo $nip_pegawai; ?>">Edit </a> | <a href="delete.php?id=<?php echo $nip_pegawai; ?>" onClick="return confirm('Apakah Anda Yakin ?');">Delete </a> </td>
						</tr>
							
						<?php	
							}
						?>
					
					</table>
					
					
                </section>
            </div>
        </div>
    </section>
    <!--main content end-->
<!--right sidebar start-->

<!--right sidebar end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/easypiechart/jquery.easypiechart.js"></script>
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

<!--common script init for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
<?php
	}
	else{
		header("location: index.php");
	
	}
?>