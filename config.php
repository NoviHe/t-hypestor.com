	<?php 
		$koneksi = mysqli_connect("localhost","root","","db_thypestor");
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}		
		$salt="SOLUSIDIGITALID.COM";
	?>