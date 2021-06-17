	<?php
		$query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM db_pemasukan");
		$data = mysqli_fetch_array($query);
		$kode = $data['kodeTerbesar'];
		$urutan = (int) substr($kode, 7, 7);
		$urutan++;
		$huruf = "DBT-";
		$kode = $huruf . sprintf("%06s", $urutan);
	?>
	
	<form method="post" action="" class="form_validation" novalidate enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $kode;?>">
		
		<div class="form_grup_with_judul">
			<div class="judul">
				Pemasukan
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
							Cabang <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="username" value="" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Keterangan <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="keterangan" value="" required>
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
					<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah_pemasukan">
						Simpan
					</button>
				</div>
			</div>
		</div>
	</form>	
	
	
	<?php 
		if(isset($_POST['tambah_pemasukan']))
		{	
			$id				= $_POST['id']; 
			$username		= $_POST['username']; 
			$produk			= $_POST['produk']; 
			$harga			= $_POST['harga']; 
			$harga			= str_replace(".", "", $harga);
			$tanggal 		= date("Y-m-d H:i:s");
			$keterangan		= $_POST['keterangan']; 
			
			$query = mysqli_query($koneksi, "INSERT INTO db_pemasukan 
			(
				id,
				username,
				produk,
				tanggal,
				keterangan,
				harga
			) 
			VALUES (
				'$id',
				'$username',
				'$produk',
				'$tanggal',
				'$keterangan',
				'$harga'
				)
			");
		
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Ditambahkan!";
			header("location: main?pg=pemasukan");
			exit();
		}
	?>