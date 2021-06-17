	<?php
		$data = mysqli_query($koneksi,"select * from db_usermanager where username='$username'");
		while($d = mysqli_fetch_array($data)){
	?>		
	<div class="form_grup_with_judul double">
		<div class="judul">
			My Info
		</div>
		<form method="post" action="" class="form_validation" novalidate>
			<input type="hidden" name="id" value="<?php echo $d['id'];?>">
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Email
						</label>
						<div class="input-group">
							<input type="text" class="form-control input disabled" name="username" value="<?php echo $d['username'];?>" readonly>
							<div class="input-group-append">
								<a data-toggle="modal" data-target="#modals_ganti_username" data-backdrop="static" data-keyboard="false" class="btn btn-secondary form_grup_data">
									<i class="pe-7s-edit"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Tanggal Registrasi
						</label>
						<input type="text" class="form-control input disabled" name="tgl_daftar" value="<?php echo $d['tgl_daftar'];?>" readonly>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Nama <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="nama" value="<?php echo $d['nama'];?>" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							No. Telp <sup class="wajib">*</sup>
						</label>
						<input type="number" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp'];?>" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 text-right">
					<button class="mt-1 btn btn-primary save_data" style="margin:5px 0px 5px 0px!important;" name="edit_data_user">
						Simpan
					</button>
				</div>
			</div>
		</form>
		<?php 
			if(isset($_POST['edit_data_user']))
			{	
				$id 			= $_POST['id']; 
				$username 		= $_POST['username'];
				$nama 			= $_POST['nama'];
				$no_telp 		= $_POST['no_telp'];
				$tgl_daftar 	= $_POST['tgl_daftar'];
				
				$query = mysqli_query($koneksi,"update db_usermanager set 		
			
				username		= '$username',
				nama		 	= '$nama',
				no_telp		 	= '$no_telp',
				tgl_daftar		= '$tgl_daftar'
				
				where id='$id'");
				
				session_start();
				$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
				header("location: main?pg=ganti-password");
				exit();
			}
		?>
	</div>	
	
	<div class="form_grup_with_judul double f_right">
		<div class="judul">
			Ganti Password
		</div>
		<form method="" action="" id="form_ganti_password">
			<input type="hidden" name="username" value="<?php echo $d['username'];?>">
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Password <sup class="wajib">*</sup>
							<span id="password_alert"></span>
						</label>
						<div class="input-group">
							<input type="password" class="form-control input" name="password" id="password" required>
							<div class="input-group-append">
								<span class="btn btn-secondary form_grup_data" id="eye_1" onclick="change()">
									<i class="fa fa-eye-slash"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Konfirmasi Password <sup class="wajib">*</sup>
							<span id="password_2_alert"></span>
						</label>
						<div class="input-group">
							<input type="password" class="form-control input" name="password" id="password_2" required>
							<div class="input-group-append">
								<span class="btn btn-secondary form_grup_data" id="eye_2" onclick="change_2()">
									<i class="fa fa-eye-slash"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 text-right">
					<button class="mt-1 btn btn-primary save_data" style="margin:5px 0px 5px 0px!important;" id="ganti_password">
						Simpan
					</button>
				</div>
			</div>
		</form>
		<script>
			$(document).ready(function() {
				$('#ganti_password').click(function(e) {
					e.preventDefault();
					var dataform = $('#form_ganti_password')[0];
					var data = new FormData(dataform);

					var password 	= $('#password').val();
					var password_2 	= $('#password_2').val();

					if (password == "") {
						document.getElementById("password_alert").innerHTML ="Password baru tidak boleh kosong!";
						setTimeout(function() {document.getElementById('password_alert').innerHTML='';},5000);
					} 
					else if (password_2 == "") {
						document.getElementById("password_2_alert").innerHTML = "Konfirmasi password baru tidak boleh kosong!";
						setTimeout(function() {document.getElementById('password_2_alert').innerHTML='';},5000);
					} 
					else if(password.length < 8) {
					  document.getElementById("password_alert").innerHTML = "Panjang password minimal 8 karakter";
					  setTimeout(function() {document.getElementById('password_alert').innerHTML='';},5000);
					  return false;
					}
					else if(password.length > 20) {
					  document.getElementById("password_alert").innerHTML = "Panjang password maksimal 15 karakter";
					  setTimeout(function() {document.getElementById('password_alert').innerHTML='';},100);
					  return false;
					}																	  
					else if(password != password_2) {
					  document.getElementById("password_2_alert").innerHTML = "Password tidak sama!";
					  return false;
					}
					else {
						$.ajax({
							url: 'main?pg=ganti-password.act',
							type: 'POST',
							data: data,
							enctype: 'multipart/form-data',
							processData: false,
							contentType: false,
							cache: false,
							success: function(hasil) {
								if (hasil == 1) {
									panggilToast("success","Password Berhasil Dirubah");
								} 
							}
						});
					}
				})
			});
			function change()
			{
				var x = document.getElementById('password').type;
	 
				if (x == 'password')
				{
				   document.getElementById('password').type = 'text';
				   document.getElementById('eye_1').innerHTML = '<i class="fa fa-eye"></i>';
				}
				else
				{
				   document.getElementById('password').type = 'password';
				   document.getElementById('eye_1').innerHTML = '<i class="fa fa-eye-slash"></i>';
				}
			};
			function change_2()
			{
				var y = document.getElementById('password_2').type;
	 
				if (y == 'password')
				{
				   document.getElementById('password_2').type = 'text';
				   document.getElementById('eye_2').innerHTML = '<i class="fa fa-eye"></i>';
				}
				else
				{
				   document.getElementById('password_2').type = 'password';
				   document.getElementById('eye_2').innerHTML = '<i class="fa fa-eye-slash"></i>';
				}
			};
		</script>
	</div>
	<?php 
	}
	?>