	<?php
		$data = mysqli_query($koneksi,"select * from db_design");
		while($d = mysqli_fetch_array($data)){
	?>		
	<form method="post" action="" class="form_validation" novalidate>
		<input type="hidden" name="id" value="design">
				
		<div class="form_grup_with_judul double">
			<div class="judul">
				Warna Dasar
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Warna Dasar <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="bg_dasar" value="<?php echo $d['bg_dasar'];?>" placeholder="#8505ce" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['bg_dasar'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Hover Warna Dasar <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="hover_bg_dasar" value="<?php echo $d['hover_bg_dasar'];?>" placeholder="#7704b9" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['hover_bg_dasar'];?>!important;">
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
				Warna Form
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Bg Judul Form <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="form_bg_judul" value="<?php echo $d['form_bg_judul'];?>" placeholder="#989998" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['form_bg_judul'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Bg Body Form <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="form_bg_body" value="<?php echo $d['form_bg_body'];?>" placeholder="#eee" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['form_bg_body'];?>!important;">
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
				Warna Lain
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Bg Menu <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="bg_menu" value="<?php echo $d['bg_menu'];?>" placeholder="#f7dfda" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['bg_menu'];?>!important;">
									&nbsp;
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Bg Body <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="bg_body" value="<?php echo $d['bg_body'];?>" placeholder="#f5f5f5" required>
							<div class="input-group-append">
								<a href="https://imagecolorpicker.com/color-code/000000" target="new" class="btn btn-secondary form_grup_data warna" style="background:<?php echo $d['bg_body'];?>!important;">
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
				<button class="mt-1 btn btn-primary save_data" style="margin:-10px 0px 30px 0px!important;" name="edit_data_pengaturan_warna">
					Simpan
				</button>
			</div>
		</div>
	</form>
	<?php 
	}
	?>
	<?php 
		if(isset($_POST['edit_data_pengaturan_warna']))
		{	
			$id 			 = $_POST['id']; 
			$color_dasar 	 = $_POST['bg_dasar']; 
			$bg_dasar 		 = $_POST['bg_dasar']; 
			$hover_bg_dasar  = $_POST['hover_bg_dasar']; 
			
			$form_bg_judul	 = $_POST['form_bg_judul']; 
			$form_bg_body	 = $_POST['form_bg_body']; 
			$bg_menu		 = $_POST['bg_menu']; 
			$bg_body		 = $_POST['bg_body']; 
			
			$query = mysqli_query($koneksi,"update db_design set 		
		
			color_dasar 	= '$color_dasar',
			bg_dasar 		= '$bg_dasar',
			hover_bg_dasar 	= '$hover_bg_dasar',
			form_bg_judul	= '$form_bg_judul',
			form_bg_body	= '$form_bg_body',
			bg_menu		 	= '$bg_menu',
			bg_body		 	= '$bg_body'
			
			where id='$id'");
				
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
			header("location: main?pg=pengaturan");
			exit();
		}
	?>