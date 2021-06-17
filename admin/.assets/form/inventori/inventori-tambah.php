	<?php
	$query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM db_inventori");
	$data = mysqli_fetch_array($query);
	$kode = $data['kodeTerbesar'];
	$urutan = (int) substr($kode, 7, 7);
	$urutan++;
	$huruf = "PRD-";
	$kode = $huruf . sprintf("%06s", $urutan);
	?>

	<form method="post" action="" class="form_validation" novalidate enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $kode; ?>">

		<div class="form_grup_with_judul">
			<div class="judul">
				Inventori
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
							Stok <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input text-left" onkeyup="convertToRupiah(this);" name="stok" placeholder="0" required>
							<div class="input-group-prepend">
								<span class="btn btn-secondary form_grup_data">
									Pcs
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-right">
					<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah_inventori">
						Simpan
					</button>
				</div>
			</div>
		</div>
	</form>


	<?php
	if (isset($_POST['tambah_inventori'])) {
		$id				= $_POST['id'];
		$produk			= $_POST['produk'];
		$stok			= $_POST['stok'];
		$stok			= str_replace(".", "", $stok);

		$query = mysqli_query($koneksi, "INSERT INTO db_inventori 
			(
				id,
				produk,
				stok
			) 
			VALUES (
				'$id',
				'$produk',
				'$stok'
				)
			");

		session_start();
		$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Ditambahkan!";
		header("location: main?pg=inventori");
		exit();
	}
	?>