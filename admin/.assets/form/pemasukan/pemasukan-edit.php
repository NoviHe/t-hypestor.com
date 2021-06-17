	<form method="post" action="" class="form_validation" novalidate enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $d['id'];?>">
		
		<div class="form_grup_with_judul">
			<div class="judul">
				<?php echo $d['id'];?> - <?php echo $d['produk'];?>
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Nama Produk <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="produk" value="<?php echo $d['produk'];?>" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Cabang <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="username" value="<?php echo $d['username'];?>" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Keterangan <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="keterangan" value="<?php echo $d['keterangan'];?>" required>
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
							<input type="text" class="form-control input text-left" onkeyup="convertToRupiah(this);" name="harga" value="<?php echo $d['harga'];?>" required>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-right">
					<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit_pemasukan">
						Simpan
					</button>
				</div>
			</div>
		</div>
	</form>	
	
	
	<?php 
		if(isset($_POST['edit_pemasukan']))
		{	
			$id				= $_POST['id']; 
			$username		= $_POST['username']; 
			$produk			= $_POST['produk']; 
			$harga			= $_POST['harga']; 
			$harga			= str_replace(".", "", $harga);
			$tanggal 		= date("Y-m-d H:i:s");
			$keterangan		= $_POST['keterangan']; 
			
			mysqli_query($koneksi,"UPDATE db_pemasukan SET 
			
			username	= '$username',
			produk		= '$produk',
			keterangan	= '$keterangan',
			tanggal		= '$tanggal',
			harga		= '$harga'
			
			where id='$id'");
		
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Diedit!";
			header("location: main?pg=pemasukan");
			exit();
		}
	?>