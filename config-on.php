	<?php 
		$koneksi = mysqli_connect("localhost","u4714266_t-hypestor","hankcer0111","u4714266_t-hypestor");
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}		
		$salt="SOLUSIDIGITALID.COM";
	?>