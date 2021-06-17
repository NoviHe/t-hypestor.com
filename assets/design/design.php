	<?php	
		$sql="SELECT color_dasar FROM db_design";
		$result=$koneksi->query($sql);
		$color_dasar=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT bg_dasar FROM db_design";
		$result=$koneksi->query($sql);
		$bg_dasar=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT hover_bg_dasar FROM db_design";
		$result=$koneksi->query($sql);
		$hover_bg_dasar=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT bg_menu FROM db_design";
		$result=$koneksi->query($sql);
		$bg_menu=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT bg_body FROM db_design";
		$result=$koneksi->query($sql);
		$bg_body=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT form_bg_judul FROM db_design";
		$result=$koneksi->query($sql);
		$form_bg_judul=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT form_bg_body FROM db_design";
		$result=$koneksi->query($sql);
		$form_bg_body=$result->fetch_assoc();
	?>		
	<?php	
		$sql="SELECT ukuran_logo_login FROM db_design";
		$result=$koneksi->query($sql);
		$ukuran_logo_login=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT bg_img_login FROM db_design";
		$result=$koneksi->query($sql);
		$bg_img_login=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT bg_color_login FROM db_design";
		$result=$koneksi->query($sql);
		$bg_color_login=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT color_footer FROM db_design";
		$result=$koneksi->query($sql);
		$color_footer=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT bg_btn_login FROM db_design";
		$result=$koneksi->query($sql);
		$bg_btn_login=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT bg_btn_login_hover FROM db_design";
		$result=$koneksi->query($sql);
		$bg_btn_login_hover=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT color_btn_login FROM db_design";
		$result=$koneksi->query($sql);
		$color_btn_login=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT bg_notifikasi_valid FROM db_design";
		$result=$koneksi->query($sql);
		$bg_notifikasi_valid=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT color_notifikasi_valid FROM db_design";
		$result=$koneksi->query($sql);
		$color_notifikasi_valid=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT bg_notifikasi_invalid FROM db_design";
		$result=$koneksi->query($sql);
		$bg_notifikasi_invalid=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT color_notifikasi_invalid FROM db_design";
		$result=$koneksi->query($sql);
		$color_notifikasi_invalid=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT bg_loader FROM db_design";
		$result=$koneksi->query($sql);
		$bg_loader=$result->fetch_assoc();
	?>
	<?php	
		$sql="SELECT waktu_loader FROM db_design";
		$result=$koneksi->query($sql);
		$waktu_loader=$result->fetch_assoc();
	?>



	<!-- CSS Design -->
	<style>
		.app-inner-bar .inner-bar-center>.nav .nav-item .nav-link.active,
		.card-header>.nav .nav-link:hover,
		.card-header>.nav .nav-link.active,
		.nav-item.nav-item-header,
		.app-sidebar__heading,
		.vertical-nav-menu ul>li>a:hover
		{
			color:<?php echo $color_dasar['color_dasar'];?>!important;
		}
		.dropdown-item.active, .dropdown-item:active,
		.badge-primary,
		.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after,
		.vertical-nav-menu ul>li>a::before,
		.line-scale>div
		{
			background-color:<?php echo $bg_dasar['bg_dasar'];?>!important;
			background:<?php echo $bg_dasar['bg_dasar'];?>!important;
		}
		.app-theme-gray.app-container {
			background:<?php echo $bg_body['bg_body'];?>!important;
		}
		.form_grup_with_judul .judul {
			background:<?php echo $form_bg_judul['form_bg_judul'];?>!important;
		}
		.form_grup_with_judul {
			background:<?php echo $form_bg_body['form_bg_body'];?>!important;
		}	
		.dropdown-item:hover, .dropdown-item:focus {
			color:<?php echo $color_dasar['color_dasar'];?>;
		}
		.btn-primary {
			background-color:<?php echo $bg_dasar['bg_dasar'];?>!important;
			background:<?php echo $bg_dasar['bg_dasar'];?>!important;
			border-color:<?php echo $bg_dasar['bg_dasar'];?>!important;
		}
		.btn-primary:hover {
			background-color:<?php echo $hover_bg_dasar['hover_bg_dasar'];?>!important;
			border-color:<?php echo $hover_bg_dasar['hover_bg_dasar'];?>!important;
		}
		.page-item.active .page-link, .pagination .active.page-number .page-link {
			background-color:<?php echo $bg_dasar['bg_dasar'];?>!important;
			background:<?php echo $bg_dasar['bg_dasar'];?>!important;
			border-color:<?php echo $bg_dasar['bg_dasar'];?>!important;
		}
		.card-header.settings {
			background:<?php echo $form_bg_judul['form_bg_judul'];?>!important;
		}
		.inputfile:focus + label,
		.inputfile + label:hover {
			color:<?php echo $color_dasar['color_dasar'];?>!important;
		}
		.notifikasi_sukses {
			background-color: <?php echo $bg_notifikasi_valid['bg_notifikasi_valid'];?>;
			border-color: <?php echo $bg_notifikasi_valid['bg_notifikasi_valid'];?>;
			color: <?php echo $color_notifikasi_valid['color_notifikasi_valid'];?>;
		}
		.invalid-feedback,
		.notifikasi,
		.recover_password
		{
			background-color: <?php echo $bg_notifikasi_invalid['bg_notifikasi_invalid'];?>;
			border-color: <?php echo $bg_notifikasi_invalid['bg_notifikasi_invalid'];?>;
			color: <?php echo $color_notifikasi_invalid['color_notifikasi_invalid'];?>;
		}
		.was-validated .form-control:valid, .form-control.is-valid {
			border-color: <?php echo $bg_notifikasi_valid['bg_notifikasi_valid'];?>!important;
		}
		.was-validated .form-control:invalid, .form-control.is-invalid {
			border-color: <?php echo $bg_notifikasi_invalid['bg_notifikasi_invalid'];?>!important;
		}
	</style>