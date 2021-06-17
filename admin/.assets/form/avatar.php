	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 profile_foto">
			<div class="btn-hover-shine">
				<img onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/foto/<?php echo $foto['foto'];?>" alt="avatar">
			</div>
			<form class="form_data" method="post" action="" enctype="multipart/form-data">
				<input type="hidden" name="username" value="<?php echo $username;?>">
				<input type="file" name="foto" id="foto" class="inputfile" accept="image/x-png, image/jpeg" required>
				<label for="foto"><span>Select Picture</span></label>
				<small class="rekomended_file">520 X 520 Pixel</small>
				<button class="mt-1 btn btn-primary save_data" name="update_foto">
					Simpan
				</button>
			</form>
		</div>			
	</div>
	<script src="../assets/js/custom-file-input.js"></script>
	<?php 
		if(isset($_POST['update_foto']))
		{	
			$username = $_POST['username']; 
			$temp = $_FILES['foto']['tmp_name'];
			$name = rand(0,9999).'_'.$_FILES['foto']['name'];
			$size = $_FILES['foto']['size'];
			$type = $_FILES['foto']['type'];
			$folder = "../assets/images/foto/";
			if ($size < 5048000 and ($type =='image/jpeg' or $type == 'image/png')) {
				move_uploaded_file($temp, $folder . $name);
				mysqli_query($koneksi, "update db_usermanager set 
				
					foto = '$name'
					
					where username='$username'
				");
				session_start();
				$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Avatar Berhasil Dirubah!";
				header("location: main?pg=pengaturan");
				exit();
			}else{
				echo "<b>Gagal Upload File</b>";
			}
		}
	?>