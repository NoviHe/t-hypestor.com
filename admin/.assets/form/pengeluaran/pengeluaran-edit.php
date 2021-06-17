	<form method="post" action="" class="form_validation" novalidate enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $d['id'];?>">
		
		<div class="form_grup_with_judul">
			<div class="judul">
				<?php echo $d['id'];?> - <?php echo $d['jenis'];?>
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Jenis Pengeluaran <sup class="wajib">*</sup>
						</label>
						<select class="form-control" name="jenis" required style="border:none; font-size: 0.72rem; outline: none; border-radius:0px; padding:0px 10px;">	
							<option value="" <?php if($d['jenis']==''){echo "selected";} ?>>-- Jenis Pengeluaran --</option>
							<option value="Gaji" <?php if($d['jenis']=='Gaji'){echo "selected";} ?>>Gaji</option>
							<option value="Operasional" <?php if($d['jenis']=='Operasional'){echo "selected";} ?>>Operasional</option>
							<option value="Pembelanjaan" <?php if($d['jenis']=='Pembelanjaan'){echo "selected";} ?>>Pembelanjaan</option>
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
							<input type="text" class="form-control input text-left" onkeyup="convertToRupiah(this);" name="jumlah" value="<?php echo $d['jumlah'];?>" required>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Metode Pembayaran <sup class="wajib">*</sup>
						</label>
						<select class="form-control" name="metode" required style="border:none; font-size: 0.72rem; outline: none; border-radius:0px; padding:0px 10px;">
							<option value="" <?php if($d['metode']==''){echo "selected";} ?>>-- Metode Pembayaran --</option>
							<option value="Modal" <?php if($d['metode']=='Modal'){echo "selected";} ?>>Modal</option>
							<option value="Cash" <?php if($d['metode']=='Cash'){echo "selected";} ?>>Cash</option>
						</select>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Keterangan <sup class="wajib">*</sup>
						</label>
						<select class="form-control" name="keterangan" required style="border:none; font-size: 0.72rem; outline: none; border-radius:0px; padding:0px 10px;">
							<option value="" <?php if($d['keterangan']==''){echo "selected";} ?>>-- Keterangan --</option>
							<option value="Manual Input" <?php if($d['keterangan']=='Manual Input'){echo "selected";} ?>>Manual Input</option>
						</select>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-right">
					<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit_pengeluaran">
						Simpan
					</button>
				</div>
			</div>
		</div>
	</form>	
	
	
	<?php 
		if(isset($_POST['edit_pengeluaran']))
		{	
			$id				= $_POST['id']; 
			$tanggal 		= date("Y-m-d H:i:s");
			$jenis			= $_POST['jenis']; 			
			$jumlah			= $_POST['jumlah']; 
			$jumlah			= str_replace(".", "", $jumlah);
			$keterangan		= $_POST['keterangan']; 
			$metode			= $_POST['metode']; 
			
			mysqli_query($koneksi,"UPDATE db_pengeluaran SET 
			
			tanggal			= '$tanggal',
			jenis			= '$jenis',
			jumlah			= '$jumlah',
			keterangan		= '$keterangan',
			metode			= '$metode'
			
			where id='$id'");
		
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Diedit!";
			header("location: main?pg=pengeluaran");
			exit();
		}
	?>