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
							Stok <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input text-left" onkeyup="convertToRupiah(this);" name="stok" value="<?php echo $d['stok'];?>" required>
							<div class="input-group-prepend">
								<span class="btn btn-secondary form_grup_data">
									Pcs
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-right">
					<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit_inventori">
						Simpan
					</button>
				</div>
			</div>
		</div>
	</form>	
	
	
	<?php 
		if(isset($_POST['edit_inventori']))
		{	
			$id				= $_POST['id']; 
			$produk			= $_POST['produk']; 
			$stok			= $_POST['stok']; 
			$stok			= str_replace(".", "", $stok);
			
			mysqli_query($koneksi,"UPDATE db_inventori SET 
			
			produk		= '$produk',
			stok		= '$stok'
			
			where id='$id'");
		
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Diedit!";
			header("location: main?pg=inventori");
			exit();
		}
	?>