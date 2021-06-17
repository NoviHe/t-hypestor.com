	<?php
		$query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM db_penjualan");
		$data = mysqli_fetch_array($query);
		$kode = $data['kodeTerbesar'];
		$urutan = (int) substr($kode, 7, 7);
		$urutan++;
		$huruf = "PJL-";
		$kode = $huruf . sprintf("%06s", $urutan);
	?>
	
	<form method="post" action="" class="form_validation" novalidate enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $kode;?>">
		
		<div class="form_grup_with_judul">
			<div class="judul">
				Penjualan
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Nama Produk <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="produk" value="" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Harga <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="btn btn-secondary form_grup_data">
									Rp.
								</span>
							</div>
							<input type="text" class="form-control input text-left" onkeyup="convertToRupiah(this);" name="harga" placeholder="0" required>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-right">
					<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah_penjualan">
						Simpan
					</button>
				</div>
			</div>
		</div>
	</form>	
	
	
	<?php 
		if(isset($_POST['tambah_penjualan']))
		{	
			$id				= $_POST['id']; 
			$tanggal 		= date("Y-m-d H:i:s");
			$produk			= $_POST['produk']; 
			$harga			= $_POST['harga']; 
			$harga			= str_replace(".", "", $harga);
			
			$query = mysqli_query($koneksi, "INSERT INTO db_penjualan 
			(
				id,
				tanggal,
				produk,
				harga
			) 
			VALUES (
				'$id',
				'$tanggal',
				'$produk',
				'$harga'
				)
			");
		
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Ditambahkan!";
			header("location: main?pg=penjualan");
			exit();
		}
	?>