	<?php
		$query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM db_pengeluaran");
		$data = mysqli_fetch_array($query);
		$kode = $data['kodeTerbesar'];
		$urutan = (int) substr($kode, 7, 7);
		$urutan++;
		$huruf = "KRD-";
		$kode = $huruf . sprintf("%06s", $urutan);
	?>
	
	<form method="post" action="" class="form_validation" novalidate enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $kode;?>">
		
		<div class="form_grup_with_judul">
			<div class="judul">
				Pengeluaran
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Jenis Pengeluaran <sup class="wajib">*</sup>
						</label>
						<select class="form-control" name="jenis" required style="border:none; font-size: 0.72rem; outline: none; border-radius:0px; padding:0px 10px;">	
							<option value="">-- Jenis Pengeluaran --</option>
							<option value="Gaji">Gaji</option>
							<option value="Operasional">Operasional</option>
							<option value="Pembelanjaan">Pembelanjaan</option>
						</select>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Jumlah Pengeluaran <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="btn btn-secondary form_grup_data">
									Rp.
								</span>
							</div>
							<input type="text" class="form-control input text-left" onkeyup="convertToRupiah(this);" name="jumlah" placeholder="0" required>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Metode Pembayaran <sup class="wajib">*</sup>
						</label>
						<select class="form-control" name="metode" required style="border:none; font-size: 0.72rem; outline: none; border-radius:0px; padding:0px 10px;">	
							<option value="">-- Metode Pembayaran --</option>
							<option value="Modal">Modal</option>
							<option value="Cash">Cash</option>
						</select>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Keterangan <sup class="wajib">*</sup>
						</label>
						<select class="form-control" name="keterangan" required style="border:none; font-size: 0.72rem; outline: none; border-radius:0px; padding:0px 10px;">	
							<option value="">-- Keterangan --</option>
							<option value="Manual Input">Manual Input</option>
						</select>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-right">
					<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah_pengeluaran">
						Simpan
					</button>
				</div>
			</div>
		</div>
	</form>	
	
	
	<?php 
		if(isset($_POST['tambah_pengeluaran']))
		{	
			$id				= $_POST['id']; 
			$tanggal 		= date("Y-m-d H:i:s");
			$jenis			= $_POST['jenis']; 
			$jumlah			= $_POST['jumlah']; 
			$jumlah			= str_replace(".", "", $jumlah);
			$keterangan		= $_POST['keterangan']; 
			$metode			= $_POST['metode']; 
			
			$query = mysqli_query($koneksi, "INSERT INTO db_pengeluaran 
			(
				id,
				tanggal,
				jenis,
				jumlah,
				keterangan,
				metode
			) 
			VALUES (
				'$id',
				'$tanggal',
				'$jenis',
				'$jumlah',
				'$keterangan',
				'$metode'
				)
			");
		
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Ditambahkan!";
			header("location: main?pg=pengeluaran");
			exit();
		}
	?>