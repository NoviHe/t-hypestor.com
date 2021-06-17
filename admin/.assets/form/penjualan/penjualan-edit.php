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
					<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit_penjualan">
						Simpan
					</button>
				</div>
			</div>
		</div>
	</form>	
	
	
	<?php 
		if(isset($_POST['edit_penjualan']))
		{	
			$id				= $_POST['id']; 
			$tanggal 		= date("Y-m-d H:i:s");
			$produk			= $_POST['produk']; 
			$harga			= $_POST['harga']; 
			$harga			= str_replace(".", "", $harga);
			
			mysqli_query($koneksi,"UPDATE db_penjualan SET 
			
			tanggal		= '$tanggal',
			produk		= '$produk',
			harga		= '$harga'
			
			where id='$id'");
		
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Diedit!";
			header("location: main?pg=penjualan");
			exit();
		}
	?>