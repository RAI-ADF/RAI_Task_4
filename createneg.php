<?php
	try {
		
		$koneksi = new mysqli("localhost", "root", 
								"", "bukutamu");
          
		// Validasi data         
		if (!isset($_POST["nama_barang"]) || empty($_POST["nama_barang"]))   
			throw new Exception("Nama barang perlu diisi");
		else
			$nama_negara = $_POST["nama_barang"];

		// Simpan data
   
		$sql = "INSERT INTO barang VALUES ( NULL ,'" . $nama_negara . "');";
      
		$hasil = $koneksi->query($sql);
		if ($koneksi->affected_rows < 1)
			throw new Exception("Gagal menambahkan data barang. " . 
								"Kesalahan " . $koneksi->error);
         
		$sql = "SELECT * FROM barang ";

		$hasil = $koneksi->query($sql);       
		$baris = $hasil->fetch_array();
            
		// Hasil untuk jTable
		$hasilTabel = array();
		$hasilTabel["Result"] = "OK";
		$hasilTabel["Record"] = $baris;

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

