	<?php
		$data = mysqli_query($koneksi,"select * from db_design");
		while($d = mysqli_fetch_array($data)){
	?>		
	<form method="post" action="" class="form_validation" novalidate>
		<input type="hidden" name="id" value="design">
				
		<div class="form_grup_with_judul double">
			<div class="judul">
				Valid
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Background <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="bg_notifikasi_valid" value="<?php echo $d['bg_notifikasi_valid'];?>" placeholder="#4cc989" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['bg_notifikasi_valid'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Color <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="color_notifikasi_valid" value="<?php echo $d['color_notifikasi_valid'];?>" placeholder="#fff" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['color_notifikasi_valid'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form_grup_with_judul double f_right">
			<div class="judul">
				Invalid
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Background <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="bg_notifikasi_invalid" value="<?php echo $d['bg_notifikasi_invalid'];?>" placeholder="#d23636" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['bg_notifikasi_invalid'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Color <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="color_notifikasi_invalid" value="<?php echo $d['color_notifikasi_invalid'];?>" placeholder="#fff" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['color_notifikasi_invalid'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 text-right">
				<button class="mt-1 btn btn-primary save_data" style="margin:-10px 0px 30px 0px!important;" name="edit_data_notifikasi">
					Simpan
				</button>
			</div>
		</div>
	</form>
	<?php 
	}
	?>
	<?php 
		if(isset($_POST['edit_data_notifikasi']))
		{	
			$id 			 			= $_POST['id']; 
			$bg_notifikasi_valid 		= $_POST['bg_notifikasi_valid']; 
			$color_notifikasi_valid 	= $_POST['color_notifikasi_valid']; 
			$bg_notifikasi_invalid 		= $_POST['bg_notifikasi_invalid']; 
			$color_notifikasi_invalid 	= $_POST['color_notifikasi_invalid']; 
			
			$query = mysqli_query($koneksi,"update db_design set 		
		
			bg_notifikasi_valid	 		= '$bg_notifikasi_valid',
			color_notifikasi_valid	 	= '$color_notifikasi_valid',
			bg_notifikasi_invalid	 	= '$bg_notifikasi_invalid',
			color_notifikasi_invalid	= '$color_notifikasi_invalid'
			
			where id='$id'");
				
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
			header("location: main?pg=pengaturan");
			exit();
		}
	?>