	<?php
		include('../config.php');
		require '../assets/import-excel/autoload.php';
		 
		use PhpOffice\PhpSpreadsheet\Spreadsheet;
		use PhpOffice\PhpSpreadsheet\Reader\Csv;
		use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
		 
		$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

		if(isset($_FILES['file_kategori_produk']['name']) && in_array($_FILES['file_kategori_produk']['type'], $file_mimes)) {
		 
			$arr_file = explode('.', $_FILES['file_kategori_produk']['name']);
			$extension = end($arr_file);
		 
			if('csv' == $extension) {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
		 
			$spreadsheet = $reader->load($_FILES['file_kategori_produk']['tmp_name']);
			 
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			for($i = 1;$i < count($sheetData);$i++)
			{		
				$id			= $sheetData[$i]['1'];
				$produk 	= $sheetData[$i]['2'];
				$kategori	= $sheetData[$i]['3'];
				$stok		= $sheetData[$i]['4'];
				$tanggal 		= date("Y-m-d H:i:s");
				
				$query = mysqli_query($koneksi, "INSERT INTO db_inventori_kategori
					(
						id,
						produk,
						kategori
					) 
					VALUES 
					(
						'$id',
						'$produk',
						'$kategori'
					)
				");
				
				$query .= mysqli_query($koneksi, "INSERT INTO db_inventori
					(
						id,
						tanggal,
						produk,
						kategori,
						stok
					) 
					VALUES 
					(
						'$id',
						'$tanggal',
						'$produk',
						'$kategori',
						'$stok'
					)
				");
			}
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Ditambahkan!";
			header("location: main?pg=inventori-kategori");
			exit();
		}
	?>