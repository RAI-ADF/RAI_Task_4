<?php
   try {
		
		$koneksi = new mysqli("localhost", "root", 
								"", "bukutamu");
      
		
		$kode_negara = $_POST["nomer"];
		if (!isset($_POST["nama_barang"]) || empty($_POST["nama_barang"]))   
			throw new Exception("Nama barang perlu diisi");
		else
			$nama_negara = $_POST["nama_barang"];
      
		
		$sql = "UPDATE barang SET " . 
				"nama_barang = '" . $nama_negara . "' WHERE nomer = '" . $kode_negara . "';";

		$hasil = $koneksi->query($sql);
      
		
		$hasilTabel = array();
		$hasilTabel["Result"] = "OK";
		 
		print(json_encode($hasilTabel));            
      
		
		$koneksi->close(); 
	}
	catch(Exception $ex) {
		
		$hasilTabel = array();
		$hasilTabel["Result"] = "ERROR";
		$hasilTabel["Message"] = $ex->getMessage();
	  
		print(json_encode($hasilTabel));
	}	
?>

