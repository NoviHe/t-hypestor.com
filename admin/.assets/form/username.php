	<?php
		$data = mysqli_query($koneksi,"select * from db_usermanager where username='$username'");
		while($d = mysqli_fetch_array($data)){
	?>		
	<form method="post" action="" class="form_validation" novalidate>
		<input type="hidden" name="id" value="<?php echo $d['id'];?>">
				
		<div class="form_grup_with_judul">
			<div class="judul">
				Email
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Old Email <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input disabled" value="<?php echo $d['username'];?>" readonly>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							New Email <sup class="wajib">*</sup>
						</label>
						<input type="email" class="form-control input" name="username" value="" required>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 text-right">
				<button class="mt-1 btn btn-primary save_data" style="margin:-10px 0px 30px 0px!important;" name="edit_data_username">
					Simpan
				</button>
			</div>
		</div>
	</form>
	<?php 
	}
	?>
	<?php 
		if(isset($_POST['edit_data_username']))
		{	
			$id 			= $_POST['id']; 
			$username		= $_POST['username']; 
			
			$query = mysqli_query($koneksi,"update db_usermanager set 		
		
			username	 	= '$username'
			
			where id='$id'");
				
			session_start();
			$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
			header("location: main?pg=sign-out");
			exit();
		}
	?>