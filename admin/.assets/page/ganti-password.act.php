	<?php
		session_start();
		include '../config.php';
		
		$username			= $_POST['username']; 
		$password			= $_POST['password']; 
		$password			= md5($password.$salt);
		
		$query = mysqli_query($koneksi, "update db_usermanager set 
		
			password 	='$password'
			
			where username='$username'
		");
		if ( $query ) {
			echo 1;
		}
	?>