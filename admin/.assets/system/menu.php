	<style>
		.app-sidebars{
			width: 80px;
			min-width: 80px;
		}
	</style>
	<div class="app-sidebar-wrapper no_print">
		<div class="app-sidebar sidebar-shadow">
			<div class="app-header__logo">
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $perusahaan['perusahaan'];?>" class="logo-src">
					<img onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/konten/<?php echo $logo['logo'];?>">
				</a>
				<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
			<div class="scrollbar-sidebar scrollbar-container">
				<div class="app-sidebar__inner">
					<ul class="vertical-nav-menu">
						
						<!-- Menu Awal -->
						<li class="app-sidebar__heading">Menu</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-rocket"></i>
								Dashboards
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="monitoring-active block-page-btn-example-1" href="main?pg=monitoring">
										Monitoring
									</a>
								</li>
							</ul>
						</li>
						
						<!-- Menu -->
						<li class="app-sidebar__heading">Penjualan</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-cart"></i>
								Penjualan
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="penjualan-active" href="main?pg=penjualan">
										Penjualan
									</a>
								</li>
							</ul>
						</li>
						
						<!-- Menu -->
						<li class="app-sidebar__heading">Laporan</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-wallet"></i>
								Laporan
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="pemasukan-active" href="main?pg=pemasukan">
										Pemasukan
									</a>
								</li>
								<li>
									<a class="pengeluaran-active" href="main?pg=pengeluaran">
										Pengeluaran
									</a>
								</li>
								<li>
									<a class="modal-active" href="main?pg=modal">
										Modal Awal
									</a>
								</li>
							</ul>
						</li>
						
						<!-- Menu -->
						<li class="app-sidebar__heading">Inventori</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-box2"></i>
								Inventori
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="inventori-active" href="main?pg=inventori">
										Inventori
									</a>
								</li>
							</ul>
						</li>
						
						<!-- Menu -->
						<li class="app-sidebar__heading">User Manager</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-lock"></i>
								User Manager
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="cabang-active" href="main?pg=cabang">
										Cabang
									</a>
								</li>
							</ul>
						</li>
						
						<!-- Menu -->
						<li class="app-sidebar__heading">Pengaturan</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-settings"></i>
								Pengaturan
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="media-active" href="main?pg=media">
										Media
									</a>
								</li>
								<li>
									<a class="pengaturan-active" href="main?pg=pengaturan">
										Pengaturan
									</a>
								</li>
								<li>
									<a class="ganti-password-active" href="main?pg=ganti-password">
										Ganti Password
									</a>
								</li>
							</ul>
						</li>
						
						<!-- Menu Terakhir -->
						<li class="app-sidebar__heading">Sign Out</li>
						<li class="mm-active">
							<a href="#">
								<i class="metismenu-icon pe-7s-back"></i>
								Sign Out
								<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
							</a>
							<ul class="menu_dropdown_show">
								<li>
									<a class="sign-out-active" href="main?pg=sign-out">
										Sign Out
									</a>
								</li>
							</ul>
						</li>
						<!-- End Menu -->
					</ul>
				</div>
			</div>
		</div>
	</div>