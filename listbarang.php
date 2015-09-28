<?php
try {
	session_start();
	  
    if (!isset($_GET["jtSorting"]))
        $jtSorting = "nomer";
    else
        $jtSorting = $_GET["jtSorting"];
      
    if (!isset($_GET["jtStartIndex"]))
        $jtStartIndex = 0;
    else
        $jtStartIndex = intval($_GET["jtStartIndex"]);   
         
    if (!isset($_GET["jtPageSize"]))
		$jtPageSize = 30;
    else
		$jtPageSize = intval($_GET["jtPageSize"]);   
    

    $koneksi = new mysqli("localhost", "root","", "bukutamu");
	
    // Peroleh jumlah record
    $sql = "SELECT count(*) AS jumrecord FROM barang;";
    $hasil = $koneksi->query($sql);
      $baris = $hasil->fetch_array();
      $jumlah_record = $baris[0];
      

    $sql = "SELECT * FROM barang ORDER BY " .
             $jtSorting . " LIMIT " . 
             $jtStartIndex . 
             "," . $jtPageSize.";";
    $daftar_baris; 
    $hasil = $koneksi->query($sql);
    while ($baris = $hasil->fetch_array()) 
        $daftar_baris[] = $baris;
      
    
    $hasilTabel = array();
    $hasilTabel["Result"] = "OK";
    $hasilTabel["TotalRecordCount"] = $jumlah_record;
    $hasilTabel["Records"] = $daftar_baris;
		 
    print(json_encode($hasilTabel));            
      
    
    $koneksi->close(); 
}catch(Exception $ex) {
	
		$hasilTabel = array();
		$hasilTabel["Result"] = "ERROR";
		$hasilTabel["Message"] = $ex->getMessage();
	  
		echo json_encode($hasilTabel);
	}	
?>

