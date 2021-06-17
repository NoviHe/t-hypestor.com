	<?php
		$data = mysqli_query($koneksi,"select * from db_design");
		while($d = mysqli_fetch_array($data)){
	?>		
	<form method="post" action="" class="form_validation" novalidate>
		<input type="hidden" name="id" value="design">
				
		<div class="form_grup_with_judul">
			<div class="judul">
				Loader
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Background <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="bg_loader" value="<?php echo $d['bg_loader'];?>" placeholder="#8505ce" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['bg_loader'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Waktu <sup class="wajib">*</sup> (1 Detik = 1.000)
						</label>
						<input type="text" class="form-control input" onkeyup="convertToRupiah(this);" name="waktu_loader" value="<?php echo number_format($d['waktu_loader'],0,',','.');?>" placeholder="2.000" required>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 text-right">
				<button class="mt-1 btn btn-primary save_data" style="margin:-10px 0px 30px 0px!important;" name="edit_data_loader">
					Simpan
				</button>
			</div>
		</div>
	</form>
	<?php 
	}
	?>
	<?php 
		if(isset($_POST['edit_data_loader']))
		{	
			$id 			= $_POST['id']; 
			$bg_loader		= $_POST['bg_loader']; 
			$waktu_loader 	= $_POST['waktu_loader']; 
			$waktu_loader	= str_replace(".", "", $waktu_loader);
			
			$query = mysqli_query($koneksi,"update db_design set 		
		
			bg_loader	 	= '$bg_loader',
			waktu_loader	= '$waktu_loader'
			
			where id='$id'");
				
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
			header("location: main?pg=pengaturan");
			exit();
		}
	?>