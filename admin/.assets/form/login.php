	<?php
		$data = mysqli_query($koneksi,"select * from db_design");
		while($d = mysqli_fetch_array($data)){
	?>		
	<form method="post" action="" class="form_validation" novalidate>
		<input type="hidden" name="id" value="design">
				
		<div class="form_grup_with_judul double">
			<div class="judul">
				Background
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Warna Solid <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="bg_color_login" value="<?php echo $d['bg_color_login'];?>" placeholder="#8505ce" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['bg_color_login'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Images
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="bg_img_login" value="<?php echo $d['bg_img_login'];?>">
							<div class="input-group-append">
								<a data-toggle="modal" data-target="#modals_media_images" data-backdrop="static" data-keyboard="false" class="btn btn-secondary form_grup_data">
									+
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				
		<div class="form_grup_with_judul double f_right">
			<div class="judul">
				Logo &amp; Footer
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Ukuran Logo <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="number" class="form-control input text-left" name="ukuran_logo_login" value="<?php echo $d['ukuran_logo_login'];?>" placeholder="85" required>
							<div class="input-group-append">
								<span class="btn btn-secondary form_grup_data warna">
									PX
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Color Footer <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="color_footer" value="<?php echo $d['color_footer'];?>" placeholder="#fff" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['color_footer'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				
		<div class="form_grup_with_judul">
			<div class="judul">
				Button Login
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="position-relative form-group">
						<label class="data">
							Color Button <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="color_btn_login" value="<?php echo $d['color_btn_login'];?>" placeholder="#fff" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['color_btn_login'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="position-relative form-group">
						<label class="data">
							Background Button <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="bg_btn_login" value="<?php echo $d['bg_btn_login'];?>" placeholder="#8505ce" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['bg_btn_login'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="position-relative form-group">
						<label class="data">
							Hover Button <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="bg_btn_login_hover" value="<?php echo $d['bg_btn_login_hover'];?>" placeholder="#7704b9" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['bg_btn_login_hover'];?>!important;">
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
				<button class="mt-1 btn btn-primary save_data" style="margin:-10px 0px 30px 0px!important;" name="edit_data_halaman_login">
					Simpan
				</button>
			</div>
		</div>
	</form>
	<?php 
	}
	?>
	<?php 
		if(isset($_POST['edit_data_halaman_login']))
		{	
			$id 			 	= $_POST['id']; 
			$bg_color_login  	= $_POST['bg_color_login']; 
			$bg_img_login 	 	= $_POST['bg_img_login']; 
			$ukuran_logo_login	= $_POST['ukuran_logo_login']; 
			$color_footer		= $_POST['color_footer']; 
			$color_btn_login	= $_POST['color_btn_login']; 
			$bg_btn_login		= $_POST['bg_btn_login']; 
			$bg_btn_login_hover	= $_POST['bg_btn_login_hover']; 
			
			$query = mysqli_query($koneksi,"update db_design set 		
		
			bg_color_login 		= '$bg_color_login',
			bg_img_login 		= '$bg_img_login',
			ukuran_logo_login 	= '$ukuran_logo_login',
			color_footer 		= '$color_footer',
			color_btn_login 	= '$color_btn_login',
			bg_btn_login	 	= '$bg_btn_login',
			bg_btn_login_hover 	= '$bg_btn_login_hover'
			
			where id='$id'");
				
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
			header("location: main?pg=pengaturan");
			exit();
		}
	?>