	<?php 
		date_default_timezone_set('Asia/Jakarta');
		$username 	= $_SESSION['username'];
	?>
	<?php	
		$sql="SELECT nama from db_usermanager where username='$username'";
		$result=$koneksi->query($sql);
		$nama=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT no_telp from db_usermanager where username='$username'";
		$result=$koneksi->query($sql);
		$no_telp=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT foto from db_usermanager where username='$username'";
		$result=$koneksi->query($sql);
		$foto=$result->fetch_assoc();
	?>	