<?php 
require_once('./include/db.php'); //get the connection
session_start();
// require_once('./include/core_lib.php'); //get the library
// Session(); //Make a session
$nama = $_SESSION['nama_user'];

$nip_pegawai = $_GET['id'];

$query = "SELECT * FROM `tbl_data_pegawai` join tbl_data_golongan using (`nip_pegawai`) join tbl_data_jabatan using (`nip_pegawai`) join tbl_pendidikan using (`nip_pegawai`) where nip_pegawai='$nip_pegawai'";
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);
// $nip_pegawai = isset($_POST['nip_pegawai'])?$_POST['nip_pegawai']:'';
$nama_pegawai = $row['nama_pegawai'];
$jenis_kelamin = $row['jenis_kelamin'];
$tempat_lahir = $row['tempat_lahir_pegawai'];
$tanggal_lahir = $row['tanggal_lahir_pegawai'];
$alamat = $row['alamat'];
$golongan = $row['golongan'];
$tmt_golongan = $row['tmt_golongan'];
$jabatan = $row['jabatan'];
$tmt_jabatan = $row['tmt_jabatan'];
$tanggal_pengangkatan_cpns = $row['tanggal_pengangkatan_cpns'];
$latihan_jabatan = $row['latihan_jabatan'];
$pendidikan_terakhir = $row['tk_pendidikan'];
$nama_sekolah = $row['nama_sekolah'];
$fakultas = $row['fakultas'];
$jurusan = $row['jurusan'];
$tahun_lulus = $row['lulus'];


if(isset($_POST['submit'])){
	$nip_pegawai = isset($_POST['nip_pegawai'])?$_POST['nip_pegawai']:'';
	$nama_pegawai = isset($_POST['nama_pegawai'])?$_POST['nama_pegawai']:'';
	$jenis_kelamin = isset($_POST['jenis_kelamin'])?$_POST['jenis_kelamin']:'';
	$tempat_lahir = isset($_POST['tempat_lahir'])?$_POST['tempat_lahir']:'';
	$tanggal_lahir = isset($_POST['tanggal_lahir'])?$_POST['tanggal_lahir']:'';
	$alamat = isset($_POST['alamat'])?$_POST['alamat']:''; 
	$golongan = isset($_POST['golongan'])?$_POST['golongan']:'';
	$tmt_golongan = isset($_POST['tmt_golongan'])?$_POST['tmt_golongan']:'';
	$jabatan = isset($_POST['jabatan'])?$_POST['jabatan']:'';
	$tmt_jabatan = isset($_POST['tmt_jabatan'])?$_POST['tmt_jabatan']:'';
	$tanggal_pengangkatan_cpns = isset($_POST['tanggal_pengangkatan_cpns'])?$_POST['tanggal_pengangkatan_cpns']:'';
	$latihan_jabatan = isset($_POST['latihan_jabatan'])?$_POST['latihan_jabatan']:'';
	$pendidikan_terakhir = isset($_POST['pendidikan_terakhir'])?$_POST['pendidikan_terakhir']:'';
	$nama_sekolah = isset($_POST['nama_sekolah'])?$_POST['nama_sekolah']:'';
	$fakultas = isset($_POST['fakultas'])?$_POST['fakultas']:'';
	$jurusan = isset($_POST['jurusan'])?$_POST['jurusan']:'';
	$tahun_lulus = isset($_POST['tahun_lulus'])?$_POST['tahun_lulus']:'';
	
	$query="UPDATE `tbl_data_pegawai` SET `nama_pegawai`='$nama_pegawai',`jenis_kelamin`='$jenis_kelamin',`tempat_lahir_pegawai`='$tempat_lahir',`tanggal_lahir_pegawai`='$tanggal_lahir',`alamat`='$alamat',`foto_pegawai`='' where `nip_pegawai` = '$nip_pegawai' ";
	mysql_query($query);
	$query="UPDATE `tbl_data_golongan` SET `golongan`='$golongan',`tmt_golongan`='$tmt_golongan' where `nip_pegawai` = '$nip_pegawai' ";
	mysql_query($query);
	$query="UPDATE `tbl_data_jabatan` SET `jabatan`='$jabatan',`tmt_jabatan`='$tmt_jabatan',`tanggal_pengangkatan_cpns`='$tanggal_pengangkatan_cpns',`latihan_jabatan`='$latihan_jabatan' where `nip_pegawai` = '$nip_pegawai' ";
	mysql_query($query);
	$query="UPDATE `tbl_pendidikan` SET `tk_pendidikan`='$pendidikan_terakhir',`nama_sekolah`='$nama_sekolah',`fakultas`='$fakultas',`jurusan`='$jurusan', `lulus`='$tahun_lulus' where `nip_pegawai` = '$nip_pegawai' ";
	mysql_query($query);
	// echo $nip_pegawai.'<br>';
	// echo $nama_pegawai.'<br>';
	// echo $jenis_kelamin.'<br>';
	// echo $tempat_lahir.'<br>';
	// echo $tgl_lahir.'<br>';
	// echo $alamat.'<br>';
	// echo $golongan.'<br>';
	// echo $tmt_golongan.'<br>';
	// echo $jabatan.'<br>';
	// echo $tmt_jabatan.'<br>';
	// echo $tanggal_pengangkatan_cpns.'<br>';
	// echo $latihan_jabatan.'<br>';
	// echo $pendidikan_terakhir.'<br>';
	// echo $nama_sekolah.'<br>';
	// echo $fakultas.'<br>';
	// echo $jurusan.'<br>';
	// echo $tahun_lulus.'<br>';
	header("location: beranda.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Edit Data Pegawai</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="js/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" href="css/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="js/jquery-multi-select/css/multi-select.css" />
    <link rel="stylesheet" type="text/css" href="js/jquery-tags-input/jquery.tagsinput.css" />


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

    <a href="index.html" class="logo">
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
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

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
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            EDIT DATA PEGAWAI
                            
                        </header>
						
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " method="post" role="form">
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">NIP</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="nip_pegawai" name="nip_pegawai" type="text" required="required" readonly value='<?php echo $nip_pegawai; ?>' />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Nama Pegawai</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="nama_pegawai" name="nama_pegawai" type="text" required="required" value='<?php echo $nama_pegawai; ?>' />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Jenis Kelamin</label>
                                        <div class="col-lg-6">
                                            <select class="form-control m-bot15" name="jenis_kelamin">
												<option>Pilih Jenis Kelamin</option>
												<option <?php if($jenis_kelamin=="Laki - Laki"){ echo 'selected'; } ?>>Laki - Laki</option>
												<option <?php if($jenis_kelamin=="Perempuan"){ echo 'selected'; } ?>>Perempuan</option>
										</select>
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Tempat Lahir</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="tempat_lahir" name="tempat_lahir" type="text" required="required"value='<?php echo $tempat_lahir; ?>'/>
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Tanggal Lahir</label>
                                        <div class="col-md-4 col-xs-11">

											<div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="<?php   echo $tanggal_lahir;  ?>"  class="input-append date dpYears">
											<input type="text" readonly="" size="16" class="form-control" name="tanggal_lahir" value='<?php echo $tanggal_lahir; ?>'>
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
											</div>
										</div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Alamat</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="alamat" name="alamat" type="text" required="required" value='<?php echo $alamat; ?>' />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Golongan</label>
                                        <div class="col-lg-6">
                                            <select class="form-control m-bot15" name="golongan">
												<option>Pilih Golongan</option>
												<option <?php if($golongan=="I/A"){ echo 'selected'; } ?>>I/A</option>
												<option <?php if($golongan=="I/B"){ echo 'selected'; } ?>>I/B</option>
												<option <?php if($golongan=="I/C"){ echo 'selected'; } ?>>I/C</option>
												<option <?php if($golongan=="I/D"){ echo 'selected'; } ?>>I/D</option>
												<option <?php if($golongan=="II/A"){ echo 'selected'; } ?>>II/A</option>
												<option <?php if($golongan=="II/B"){ echo 'selected'; } ?>>II/B</option>
												<option <?php if($golongan=="II/C"){ echo 'selected'; } ?>>II/C</option>
												<option <?php if($golongan=="II/D"){ echo 'selected'; } ?>>II/D</option>
												<option <?php if($golongan=="III/A"){ echo 'selected'; } ?>>III/A</option>
												<option <?php if($golongan=="III/B"){ echo 'selected'; } ?>>III/B</option>
												<option <?php if($golongan=="III/C"){ echo 'selected'; } ?>>III/C</option>
												<option <?php if($golongan=="III/D"){ echo 'selected'; } ?>>III/D</option>
												<option <?php if($golongan=="IV/A"){ echo 'selected'; } ?>>IV/A</option>
												<option <?php if($golongan=="IV/B"){ echo 'selected'; } ?>>IV/B</option>
												<option <?php if($golongan=="IV/C"){ echo 'selected'; } ?>>IV/C</option>
												<option <?php if($golongan=="IV/D"){ echo 'selected'; } ?>>IV/D</option>												
										</select>
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">TMT Golongan</label>
                                        <div class="col-md-4 col-xs-11">

											<div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="<?php   echo $tmt_golongan;  ?>"  class="input-append date dpYears">
											<input type="text" readonly="" size="16" class="form-control" name="tmt_golongan" value='<?php echo $tmt_golongan; ?>'>
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
											</div>
										</div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Jabatan</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="jabatan" name="jabatan" type="text" required="required" value='<?php echo $jabatan; ?>' />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">TMT Jabatan</label>
                                        <div class="col-md-4 col-xs-11">

											<div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="<?php   echo $tmt_jabatan;  ?>"  class="input-append date dpYears">
											<input type="text" readonly="" size="16" class="form-control" name="tmt_jabatan" value='<?php echo $tmt_jabatan; ?>'>
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
											</div>
										</div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Tanggal Pengangkatan CPNS</label>
                                        <div class="col-md-4 col-xs-11">

											<div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="<?php   echo $tanggal_pengangkatan_cpns;  ?>"  class="input-append date dpYears">
											<input type="text" readonly="" size="16" class="form-control" name="tanggal_pengangkatan_cpns" value='<?php echo $tanggal_pengangkatan_cpns; ?>'>
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
											</div>
										</div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Latihan Jabatan</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="latihan_jabatan" name="latihan_jabatan" type="text" required="required" value='<?php echo $latihan_jabatan; ?>' />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Pendidikan Terakhir</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" type="text" required="required" value='<?php echo $pendidikan_terakhir; ?>' />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Nama Sekolah</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="nama_sekolah" name="nama_sekolah" type="text" required="required" value='<?php echo $nama_sekolah; ?>' />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Fakultas</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="fakultas" name="fakultas" type="text" required="required" value='<?php echo $fakultas; ?>'/>
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Jurusan</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="jurusan" name="jurusan" type="text" required="required" value='<?php echo $jurusan; ?>'/>
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Tahun Lulus</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="tahun_lulus" name="tahun_lulus" type="text" required="required" value='<?php echo $tahun_lulus; ?>' />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Foto</label>
                                        <div class="col-lg-6">
                                            <input type='file' id="upFoto" /><br>
											<img id="foto" src="#" alt="Foto" style="max-width: 350px; max-height: 350px; border: 1px solid #000" />
                                        </div>
                                    </div>	
									 <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <input value="Update"  name="submit" type="submit" class="btn btn-round btn-primary"/></input>
											<!--<input value="Update"  name="update" type="submit"<?php echo $tombol;?> class="btn btn-round btn-success"/></input>!-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
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
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<script src="js/bootstrap-switch.js"></script>

<script type="text/javascript" src="js/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="js/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="js/jquery-multi-select/js/jquery.quicksearch.js"></script>

<script type="text/javascript" src="js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

<script src="js/jquery-tags-input/jquery.tagsinput.js"></script>

<script src="js/select2/select2.js"></script>
<script src="js/select-init.js"></script>
<!--Easy Pie Chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<script src="js/toggle-init.js"></script>

<script src="js/advanced-form.js"></script>
<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>


<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<!--this page script-->
<script src="js/validation-init.js"></script>


</body>
</html>
