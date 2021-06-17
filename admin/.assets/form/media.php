	<!-- Media -->
	<div class="form_grup_with_judul">
		<?php
			$query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM db_media");
			$data = mysqli_fetch_array($query);
			$kode = $data['kodeTerbesar'];
			$urutan = (int) substr($kode, 6, 6);
			$urutan++;
			$huruf = "img_";
			$kode = $huruf . sprintf("%06s", $urutan);
		?>
		<form method="post" action="" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $kode;?>">
			<div class="judul">
				Media
				<button type="submit" class="tambah_media" name="upload_images">
					+
				</button>
				<input type="file" name="foto" id="foto" class="input_media_right" accept="image/x-png, image/jpeg" required>
			</div>
		</form>
		<?php 
			if(isset($_POST['upload_images']))
			{	
				$id 		= $_POST['id']; 
				$tanggal 	= date("Y-m-d H:i:s");
				$temp 		= $_FILES['foto']['tmp_name'];
				$name 		= rand(0,9999).'_'.$_FILES['foto']['name'];
				$size 		= $_FILES['foto']['size'];
				$type 		= $_FILES['foto']['type'];
				
				$folder = "../assets/images/konten/";
				if ($size < 5048000 and ($type =='image/jpeg' or $type == 'image/png')) {
					move_uploaded_file($temp, $folder . $name);
					mysqli_query($koneksi, "insert into db_media (id,file,tipe,ukuran,tanggal) values ('$id','$name','$type','$size','$tanggal')");
				
					session_start();
					$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Media Berhasil Di Upload!";
					header("location: main?pg=media");
					exit();
					
				}else{
					echo "<b>Gagal Upload File</b>";
				}
			}
		?>	
		<div class="row">	
			<?php
				$data = mysqli_query($koneksi,"select * from db_media");
				while($d = mysqli_fetch_array($data)){
			?>	
			<div class="col-sm-12 col-md-12 col-lg-3" style="margin-top:7px;">
				<div class="position-relative form-group">
					<div class="position-relative form-group">
						<img onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/konten/<?php echo $d['file'];?>" class="tampil_images_form">
					</div>
				</div>
				<div class="position-relative form-group">
					<div class="input-group">
						<input type="text" class="form-control input readonly" id="clipboard-source_<?php echo $d['id'];?>" value="<?php echo $d['file'];?>" readonly>
						<div class="input-group-append">
							<a href="" data-toggle="modal" data-target="#modals_hapus_media_images_<?php echo $d['id'];?>" data-backdrop="static" data-keyboard="false" class="btn btn-secondary form_grup_data media_copy bg_delete">
								<i class="pe-7s-trash"></i>
							</a>
						</div>
						<div class="input-group-append">
							<button type="button" data-clipboard-action="copy" data-clipboard-target="#clipboard-source_<?php echo $d['id'];?>" class="btn btn-secondary form_grup_data media_copy bg_copy" data-dismiss="modal" aria-label="Close">
								<i class="pe-7s-copy-file"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<?php 
			}
			?>
		</div>
	</div>