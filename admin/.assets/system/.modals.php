	<!-- Modals Tambah Inventori Kategori Import -->
	<div id="modals_tambah_inventori_kategori_import" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Import Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/inventori/inventori-kategori-tambah-import.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Tambah Inventori Kategori -->
	<div id="modals_tambah_inventori_kategori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/inventori/inventori-kategori-tambah.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Edit Inventori Kategori-->
	<?php
	$data = mysqli_query($koneksi, "select * from db_inventori_kategori");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_inventori_kategori_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="margin-bottom:-30px;">
						<?php include ".assets/form/inventori/inventori-kategori-edit.php"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<!-- Modals Hapus Inventori Kategori -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_inventori_kategori");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_inventori_kategori_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php include ".assets/form/inventori/inventori-kategori-hapus.php"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- Modals Tambah Inventori -->
	<div id="modals_tambah_inventori" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/inventori/inventori-tambah.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Edit Inventori -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_inventori");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_inventori_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="margin-bottom:-30px;">
						<?php include ".assets/form/inventori/inventori-edit.php"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<!-- Modals Hapus Inventori -->
	<?php
	$data = mysqli_query($koneksi, "select id,produk from db_inventori");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_inventori_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php include ".assets/form/inventori/inventori-hapus.php"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- Modals Tambah Penjualan -->
	<div id="modals_tambah_penjualan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/penjualan/penjualan-tambah.php"; ?>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- Modals Edit Penjualan -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_penjualan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_penjualan_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="margin-bottom:-30px;">
						<?php include ".assets/form/penjualan/penjualan-edit.php"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<!-- Modals Hapus Penjualan -->
	<?php
	$data = mysqli_query($koneksi, "select id,produk from db_penjualan");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_penjualan_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php include ".assets/form/penjualan/penjualan-hapus.php"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<!-- Modals Penjualan Hari -->
	<div id="modals_penjualan_hari" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Penjualan :
						<strong>
							Hari ini,
							<?php echo tgl_Indonesia(date('d F Y', strtotime($tgl_sekarang))); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/penjualan/penjualan-tabel-hari.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Penjualan Kemarin -->
	<div id="modals_penjualan_kemarin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Penjualan :
						<strong>
							Kemarin,
							<?php echo tgl_Indonesia(date('d F Y', strtotime($tgl_kemarin))); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/penjualan/penjualan-tabel-kemarin.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Penjualan Minggu -->
	<div id="modals_penjualan_minggu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Penjualan :
						<strong>
							1 Minggu,
							<?php echo date('d', strtotime($tgl_seminggu)); ?>
							-
							<?php echo tgl_Indonesia(date('d F Y')); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/penjualan/penjualan-tabel-minggu.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Penjualan Bulan -->
	<div id="modals_penjualan_bulan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Penjualan :
						<strong>
							Bulan
							<?php echo tgl_Indonesia(date('F Y')); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/penjualan/penjualan-tabel-bulan.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Penjualan Tahun -->
	<div id="modals_penjualan_tahun" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Penjualan :
						<strong>
							Tahun
							<?php echo tgl_Indonesia(date('Y')); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/penjualan/penjualan-tabel-tahun.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Tambah Pemasukan -->
	<div id="modals_tambah_pemasukan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pemasukan/pemasukan-tambah.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Edit Pemasukan -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_pemasukan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_pemasukan_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="margin-bottom:-30px;">
						<?php include ".assets/form/pemasukan/pemasukan-edit.php"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<!-- Modals Hapus Pemasukan -->
	<?php
	$data = mysqli_query($koneksi, "select id,produk from db_pemasukan");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_pemasukan_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php include ".assets/form/pemasukan/pemasukan-hapus.php"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<!-- Modals Pemasukan Hari -->
	<div id="modals_pemasukan_hari" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Pemasukan :
						<strong>
							Hari ini,
							<?php echo tgl_Indonesia(date('d F Y', strtotime($tgl_sekarang))); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pemasukan/pemasukan-tabel-hari.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Pemasukan Kemarin -->
	<div id="modals_pemasukan_kemarin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Pemasukan :
						<strong>
							Kemarin,
							<?php echo tgl_Indonesia(date('d F Y', strtotime($tgl_kemarin))); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pemasukan/pemasukan-tabel-kemarin.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Pemasukan Minggu -->
	<div id="modals_pemasukan_minggu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Pemasukan :
						<strong>
							1 Minggu,
							<?php echo date('d', strtotime($tgl_seminggu)); ?>
							-
							<?php echo tgl_Indonesia(date('d F Y')); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pemasukan/pemasukan-tabel-minggu.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Pemasukan Bulan -->
	<div id="modals_pemasukan_bulan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Pemasukan :
						<strong>
							Bulan
							<?php echo tgl_Indonesia(date('F Y')); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pemasukan/pemasukan-tabel-bulan.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Pemasukan Tahun -->
	<div id="modals_pemasukan_tahun" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Pemasukan :
						<strong>
							Tahun
							<?php echo tgl_Indonesia(date('Y')); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pemasukan/pemasukan-tabel-tahun.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Tambah Pengeluaran -->
	<div id="modals_tambah_pengeluaran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pengeluaran/pengeluaran-tambah.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Edit Pengeluaran -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_pengeluaran where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_pengeluaran_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="margin-bottom:-30px;">
						<?php include ".assets/form/pengeluaran/pengeluaran-edit.php"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<!-- Modals Hapus Pengeluaran -->
	<?php
	$data = mysqli_query($koneksi, "select id,jenis from db_pengeluaran");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_pengeluaran_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php include ".assets/form/pengeluaran/pengeluaran-hapus.php"; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<!-- Modals Pengeluaran Hari -->
	<div id="modals_pengeluaran_hari" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Pengeluaran :
						<strong>
							Hari ini,
							<?php echo tgl_Indonesia(date('d F Y', strtotime($tgl_sekarang))); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pengeluaran/pengeluaran-tabel-hari.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Pengeluaran Kemarin -->
	<div id="modals_pengeluaran_kemarin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Pengeluaran :
						<strong>
							Kemarin,
							<?php echo tgl_Indonesia(date('d F Y', strtotime($tgl_kemarin))); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pengeluaran/pengeluaran-tabel-kemarin.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Pengeluaran Minggu -->
	<div id="modals_pengeluaran_minggu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Pengeluaran :
						<strong>
							1 Minggu,
							<?php echo date('d', strtotime($tgl_seminggu)); ?>
							-
							<?php echo tgl_Indonesia(date('d F Y')); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pengeluaran/pengeluaran-tabel-minggu.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Pengeluaran Bulan -->
	<div id="modals_pengeluaran_bulan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Pengeluaran :
						<strong>
							Bulan
							<?php echo tgl_Indonesia(date('F Y')); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pengeluaran/pengeluaran-tabel-bulan.php"; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Modals Pengeluaran Tahun -->
	<div id="modals_pengeluaran_tahun" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						Laporan Pengeluaran :
						<strong>
							Tahun
							<?php echo tgl_Indonesia(date('Y')); ?>
						</strong>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/pengeluaran/pengeluaran-tabel-tahun.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Avatar -->
	<div id="modals_ganti_foto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ganti Avatar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php include ".assets/form/avatar.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Halaman Login -->
	<div id="modals_halaman_login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Halaman Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/login.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Notifikasi -->
	<div id="modals_notifikasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Notifikasi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/notifikasi.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Loader -->
	<div id="modals_loader" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Loader</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/loader.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Warna Dasar -->
	<div id="modals_warna_dasar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Warna Aplikasi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/warna.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Ganti Username -->
	<div id="modals_ganti_username" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Username</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/username.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Detail Media Images -->
	<div id="modals_media_images" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Media</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<?php include ".assets/form/media.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Hapus Media Images -->
	<?php
	$data = mysqli_query($koneksi, "select id,file from db_media");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_media_images_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="">
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<span class="modals_notif_hapus">
								Anda yakin ingin menghapus data :
								<strong>
									<?php echo $d['file']; ?>
								</strong>
								?
							</span>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="hapus_media">
										Hapus
									</button>
									<button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
										Batal
									</button>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['hapus_media'])) {
							$id = $_POST['id'];
							$query = mysqli_query($koneksi, "delete from db_media where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Media Berhasil Dihapus!";
							header("location: main?pg=media");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- Validation -->
	<script src="../assets/js/validate.js"></script>
	<script>
		(function() {
			'use strict'
			var forms = document.querySelectorAll('.form_validation')

			Array.prototype.slice.call(forms)
				.forEach(function(form) {
					form.addEventListener('submit', function(event) {
						if (!form.checkValidity()) {
							event.preventDefault()
							event.stopPropagation()
						}

						form.classList.add('was-validated')
					}, false)
				})
		})()
	</script>
	<style>
		.was-validated .form-control:valid,
		.form-control.is-valid,
		.was-validated .form-control:invalid,
		.form-control.is-invalid {
			background-image: none;
			padding: 0px;
			padding-top: 1px;
			padding-left: .75rem;
			border-color: #ced4da;
		}

		.was-validated .form-control:valid,
		.form-control.is-valid {
			background: #fff;
		}

		.was-validated .form-control:invalid,
		.form-control.is-invalid {
			background: #fcf678;
		}

		.was-validated .form-control.input.nomor:valid,
		.form-control.input.nomor.is-valid,
		.was-validated .form-control.input.nomor:invalid,
		.form-control.input.nomor.is-invalid {
			padding-left: 0rem;
		}

		.was-validated .form-control.input.validasi_modals:valid,
		.form-control.input.validasi_modals.is-valid,
		.was-validated .form-control.input.validasi_modals:invalid,
		.form-control.input.validasi_modals.is-invalid {
			padding-top: 2px !important;
		}

		.modal-title {
			font-size: 12px;
		}

		.close {
			font-size: 18px;
		}

		.form-control.input {
			padding-top: 7px;
		}
	</style>

	<!-- Rupiah -->
	<script>
		function convertToRupiah(objek) {
			separator = ".";
			a = objek.value;
			b = a.replace(/[^\d]/g, "");
			c = "";
			panjang = b.length;
			j = 0;
			for (i = panjang; i > 0; i--) {
				j = j + 1;
				if (((j % 3) == 1) && (j != 1)) {
					c = b.substr(i - 1, 1) + separator + c;
				} else {
					c = b.substr(i - 1, 1) + c;
				}
			}
			objek.value = c;

		}

		function convertToAngka() {
			var nominal = document.getElementById("nominal").value;
			var angka = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
			document.getElementById("angka").innerHTML = angka;
		}

		function convertToAngka() {
			var nominal1 = document.getElementById("nominal1").value;
			var angka1 = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
			document.getElementById("angka1").innerHTML = angka;
		}
	</script>