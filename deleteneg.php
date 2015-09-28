<?php
	try {
		// Lakukan koneksi database
		$koneksi = new mysqli("localhost", "root", 
							"", "bukutamu");
       
		if (!isset($_POST["nomer"]) || empty($_POST["nomer"]))
			throw new Exception("Salah penggunaan");
		else   
			$kode_negara = $_POST["nomer"];
            
      
      // Hapus data
      
      $sql = "DELETE FROM barang " . 
             "WHERE nomer = '" . $kode_negara . "';";

      $hasil = $koneksi->query($sql);
      
      // Hasil untuk jTable
      $hasilTabel = array();
      $hasilTabel["Result"] = "OK";
		 
      print(json_encode($hasilTabel));            
      
      // Tutup koneksi   
      $koneksi->close(); 
   }
   catch(Exception $ex) {
      // Untuk menentukan pesan kesalahan
	  $hasilTabel = array();
	  $hasilTabel["Result"] = "ERROR";
	  $hasilTabel["Message"] = $ex->getMessage();
	  
      print(json_encode($hasilTabel));
   }	
?>

