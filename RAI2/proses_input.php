<?php
session_start();
include "koneksi.php";


$prov = $_POST['category'];
$kota = $_POST['subcategory'];


if(mysql_query("INSERT INTO tbinput (`id`, `provinsi`, `kota`) VALUES (NULL, '$prov', '$kota')")){
	echo "<script> alert ('Input Data Sukses');window.location='index.php';</script>";
}else{
	echo "<script> alert ('Input Data Gagal'); window.location='index.php';</script>";
}

?>