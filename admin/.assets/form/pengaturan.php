	<?php
		$data = mysqli_query($koneksi,"select * from db_website where tipe='website'");
		while($d = mysqli_fetch_array($data)){
	?>		
	<form method="post" action="" class="form_validation" novalidate>
		<input type="hidden" name="tipe" value="website">
		
		<div class="form_grup_with_judul">
			<div class="judul">
				Perusahaan
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Url <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input disabled" name="url" value="<?php echo $d['url'];?>" readonly>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Nama Perusahaan <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="perusahaan" value="<?php echo $d['perusahaan'];?>" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Tagline <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="tagline" value="<?php echo $d['tagline'];?>" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							No. Telp <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input text-left" name="telp_web" value="<?php echo $d['telp_web'];?>" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Email <sup class="wajib">*</sup>
						</label>
						<input type="email" class="form-control input" name="email_web" value="<?php echo $d['email_web'];?>" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Alamat <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="alamat_web" value="<?php echo $d['alamat_web'];?>" required>
					</div>
				</div>
			</div>
		</div>
		
		<div class="form_grup_with_judul double">
			<div class="judul">
				Logo &amp; Favicon
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Logo <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="logo" value="<?php echo $d['logo'];?>" required>
							<div class="input-group-append">
								<a data-toggle="modal" data-target="#modals_media_images" data-backdrop="static" data-keyboard="false" class="btn btn-secondary form_grup_data">
									+
								</a>
							</div>
						</div>
					</div>
					<div class="position-relative form-group">
						<div class="position-relative form-group">
							<img onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/konten/<?php echo $d['logo'];?>" class="tampil_images_form">
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Favicon <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="text" class="form-control input" name="favicon" value="<?php echo $d['favicon'];?>" required>
							<div class="input-group-append">
								<a data-toggle="modal" data-target="#modals_media_images" data-backdrop="static" data-keyboard="false" class="btn btn-secondary form_grup_data">
									+
								</a>
							</div>
						</div>
					</div>
					<div class="position-relative form-group">
						<div class="position-relative form-group">
							<img onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/konten/<?php echo $d['favicon'];?>" class="tampil_images_form">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="form_grup_with_judul double f_right">
			<div class="judul">
				Other Setting's
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Halaman Login
						</label>
						<div class="input-group">
							<input type="text" class="form-control input disabled" value="Halaman Login" disabled>
							<div class="input-group-append">
								<a data-toggle="modal" data-target="#modals_halaman_login" data-backdrop="static" data-keyboard="false" class="btn btn-secondary form_grup_data">
									+
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Notifikasi
						</label>
						<div class="input-group">
							<input type="text" class="form-control input disabled" value="Notifikasi" disabled>
							<div class="input-group-append">
								<a href="" data-toggle="modal" data-target="#modals_notifikasi" data-backdrop="static" data-keyboard="false" class="btn btn-secondary form_grup_data">
									+
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Loader
						</label>
						<div class="input-group">
							<input type="text" class="form-control input disabled" value="Loader" disabled>
							<div class="input-group-append">
								<a href="" data-toggle="modal" data-target="#modals_loader" data-backdrop="static" data-keyboard="false" class="btn btn-secondary form_grup_data">
									+
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Warna Aplikasi
						</label>
						<div class="input-group">
							<input type="text" class="form-control input disabled" value="Warna Aplikasi" disabled>
							<div class="input-group-append">
								<a href="" data-toggle="modal" data-target="#modals_warna_dasar" data-backdrop="static" data-keyboard="false" class="btn btn-secondary form_grup_data">
									+
								</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit_data_pengaturan">
					Simpan
				</button>
				<a href="pengaturan" class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 10px!important;">
					Batal
				</a>
			</div>
		</div>
	</form>
	<?php 
	}
	?>
	<?php 
		if(isset($_POST['edit_data_pengaturan']))
		{	
			$tipe 			 = $_POST['tipe']; 
			$url 			 = $_POST['url']; 
			$perusahaan 	 = $_POST['perusahaan']; 
			$tagline 		 = $_POST['tagline']; 
			$favicon 		 = $_POST['favicon']; 
			$logo 			 = $_POST['logo']; 
			$telp_web 		 = $_POST['telp_web']; 
			$email_web 		 = $_POST['email_web']; 
			$alamat_web 	 = $_POST['alamat_web']; 
			
			$query = mysqli_query($koneksi,"update db_website set 		
		
			url		 		= '$url',
			perusahaan		= '$perusahaan',
			tagline		 	= '$tagline',
			favicon		 	= '$favicon',
			logo		 	= '$logo',
			telp_web		= '$telp_web',
			email_web		= '$email_web',
			alamat_web		= '$alamat_web'
			
			where tipe='$tipe'");
				
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
			header("location: main?pg=pengaturan");
			exit();
		}
	?>