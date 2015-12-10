<?php
//Koneksi database
$koneksi = mysql_connect('localhost','root','');
mysql_select_db('naik_gunung', $koneksi);
 
//Mengambil isi parameter cari
$cari = $_GET['cari'];
 
if ( !empty ( $cari ) ) {
 
//Query sql untuk mencari data
$sql = mysql_query("SELECT * from user where name LIKE '%$cari%'");
 
//Cek apakah data ditemukan
$row = mysql_num_rows( $sql );
 
//Jika ditemukan maka tampilkan
if ( $row != 0 ) {
while ( $r = mysql_fetch_assoc( $sql ) ) {
// echo $r['id_user'] . "<br>";
// echo 	$r['id_user'] ."</h3>";
// echo $r['name'] . "<br>";
	 $array_data[] = array(
            "id_user"=>$r['id_user'],
            "name"=>$r['name']
        );
}
    echo(json_encode($array_data));
 
//Jika tidak ditemukan tampilkan pesan berikut
} else { echo "Tidak menemukan data"; }
 
}
?>