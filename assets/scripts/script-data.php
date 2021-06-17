	<?php		
		function tgl_Indonesia($indo_tgl){
			$tr   = trim($indo_tgl);
			$indo_tgl    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
			return $indo_tgl;
		}
	?>
	<?php $feedback = "Tidak Boleh Kosong!";?>
	<?php	
		$sql="SELECT perusahaan from db_website";
		$result=$koneksi->query($sql);
		$perusahaan=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT tagline from db_website";
		$result=$koneksi->query($sql);
		$tagline=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT logo from db_website";
		$result=$koneksi->query($sql);
		$logo=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT favicon from db_website";
		$result=$koneksi->query($sql);
		$favicon=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT url from db_website";
		$result=$koneksi->query($sql);
		$url=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT telp_web from db_website";
		$result=$koneksi->query($sql);
		$telp_web=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT email_web from db_website";
		$result=$koneksi->query($sql);
		$email_web=$result->fetch_assoc();
	?>	
	<?php	
		$sql="SELECT alamat_web from db_website";
		$result=$koneksi->query($sql);
		$alamat_web=$result->fetch_assoc();
	?>	
	<?php	
		$tgl_sekarang = date('Y-m-d');	
		$tgl_kemarin = date('Y-m-d',strtotime('-1 day', strtotime( date("Y-m-d") )));
		$tgl_seminggu = date('Y-m-d',strtotime('-7 day', strtotime( date("Y-m-d") )));
		$bulan=date('m');
		$tahun=date('Y');
	?>	
	
	<!-- Laporan Pemasukan -->
	<?php	
		$data = mysqli_query($koneksi,"select sum(harga) as jml_pemasukan_hari from db_pemasukan where date(tanggal)='$tgl_sekarang'");
		$d = mysqli_fetch_assoc($data);
		$jml_pemasukan_hari = $d['jml_pemasukan_hari'];
		
		$jml_pemasukan_hari_no = mysqli_query($koneksi,"select * from db_pemasukan where date(tanggal)='$tgl_sekarang'");
		$jml_pemasukan_hari_no = mysqli_num_rows($jml_pemasukan_hari_no);
	?>
	<?php	
		$data = mysqli_query($koneksi,"select sum(harga) as jml_pemasukan_kemarin from db_pemasukan where date(tanggal)='$tgl_kemarin'");
		$d = mysqli_fetch_assoc($data);
		$jml_pemasukan_kemarin = $d['jml_pemasukan_kemarin'];
		
		$jml_pemasukan_kemarin_no = mysqli_query($koneksi,"select * from db_pemasukan where date(tanggal)='$tgl_kemarin'");
		$jml_pemasukan_kemarin_no = mysqli_num_rows($jml_pemasukan_kemarin_no);
	?>
	<?php	
		$data = mysqli_query($koneksi,"select sum(harga) as jml_pemasukan_minggu from db_pemasukan where date(tanggal)>='$tgl_seminggu'");
		$d = mysqli_fetch_assoc($data);
		$jml_pemasukan_minggu = $d['jml_pemasukan_minggu'];
		
		$jml_pemasukan_minggu_no = mysqli_query($koneksi,"select * from db_pemasukan where date(tanggal)>='$tgl_seminggu'");
		$jml_pemasukan_minggu_no = mysqli_num_rows($jml_pemasukan_minggu_no);
	?>
	<?php
		$data = mysqli_query($koneksi,"select sum(harga) as jml_pemasukan_bulan from db_pemasukan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
		$d = mysqli_fetch_assoc($data);
		$jml_pemasukan_bulan = $d['jml_pemasukan_bulan'];
	
		$jml_pemasukan_bulan_no = mysqli_query($koneksi,"select * from db_pemasukan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
		$jml_pemasukan_bulan_no = mysqli_num_rows($jml_pemasukan_bulan_no);
	?>
	<?php	
		$data = mysqli_query($koneksi,"select sum(harga) as jml_pemasukan_tahun from db_pemasukan where year(tanggal)>='$tahun'");
		$d = mysqli_fetch_assoc($data);
		$jml_pemasukan_tahun = $d['jml_pemasukan_tahun'];
		
		$jml_pemasukan_tahun_no = mysqli_query($koneksi,"select * from db_pemasukan where year(tanggal)>='$tahun'");
		$jml_pemasukan_tahun_no = mysqli_num_rows($jml_pemasukan_tahun_no);
	?>
	
	<!-- Laporan Pengeluaran -->
	<?php	
		$data = mysqli_query($koneksi,"select sum(jumlah) as jml_pengeluaran_hari from db_pengeluaran where date(tanggal)='$tgl_sekarang'");
		$d = mysqli_fetch_assoc($data);
		$jml_pengeluaran_hari = $d['jml_pengeluaran_hari'];
		
		$jml_pengeluaran_hari_no = mysqli_query($koneksi,"select * from db_pengeluaran where date(tanggal)='$tgl_sekarang'");
		$jml_pengeluaran_hari_no = mysqli_num_rows($jml_pengeluaran_hari_no);
	?>
	<?php	
		$data = mysqli_query($koneksi,"select sum(jumlah) as jml_pengeluaran_kemarin from db_pengeluaran where date(tanggal)='$tgl_kemarin'");
		$d = mysqli_fetch_assoc($data);
		$jml_pengeluaran_kemarin = $d['jml_pengeluaran_kemarin'];
		
		$jml_pengeluaran_kemarin_no = mysqli_query($koneksi,"select * from db_pengeluaran where date(tanggal)='$tgl_kemarin'");
		$jml_pengeluaran_kemarin_no = mysqli_num_rows($jml_pengeluaran_kemarin_no);
	?>
	<?php	
		$data = mysqli_query($koneksi,"select sum(jumlah) as jml_pengeluaran_minggu from db_pengeluaran where date(tanggal)>='$tgl_seminggu'");
		$d = mysqli_fetch_assoc($data);
		$jml_pengeluaran_minggu = $d['jml_pengeluaran_minggu'];
		
		$jml_pengeluaran_minggu_no = mysqli_query($koneksi,"select * from db_pengeluaran where date(tanggal)>='$tgl_seminggu'");
		$jml_pengeluaran_minggu_no = mysqli_num_rows($jml_pengeluaran_minggu_no);
	?>
	<?php
		$data = mysqli_query($koneksi,"select sum(jumlah) as jml_pengeluaran_bulan from db_pengeluaran where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
		$d = mysqli_fetch_assoc($data);
		$jml_pengeluaran_bulan = $d['jml_pengeluaran_bulan'];
	
		$jml_pengeluaran_bulan_no = mysqli_query($koneksi,"select * from db_pengeluaran where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
		$jml_pengeluaran_bulan_no = mysqli_num_rows($jml_pengeluaran_bulan_no);
	?>
	<?php	
		$data = mysqli_query($koneksi,"select sum(jumlah) as jml_pengeluaran_tahun from db_pengeluaran where year(tanggal)>='$tahun'");
		$d = mysqli_fetch_assoc($data);
		$jml_pengeluaran_tahun = $d['jml_pengeluaran_tahun'];
		
		$jml_pengeluaran_tahun_no = mysqli_query($koneksi,"select * from db_pengeluaran where year(tanggal)>='$tahun'");
		$jml_pengeluaran_tahun_no = mysqli_num_rows($jml_pengeluaran_tahun_no);
	?>
	
	<!-- Laporan Penjualan -->
	<?php	
		$data = mysqli_query($koneksi,"select sum(harga) as jml_penjualan_hari from db_penjualan where date(tanggal)='$tgl_sekarang'");
		$d = mysqli_fetch_assoc($data);
		$jml_penjualan_hari = $d['jml_penjualan_hari'];
		
		$jml_penjualan_hari_no = mysqli_query($koneksi,"select * from db_penjualan where date(tanggal)='$tgl_sekarang'");
		$jml_penjualan_hari_no = mysqli_num_rows($jml_penjualan_hari_no);
	?>
	<?php	
		$data = mysqli_query($koneksi,"select sum(harga) as jml_penjualan_kemarin from db_penjualan where date(tanggal)='$tgl_kemarin'");
		$d = mysqli_fetch_assoc($data);
		$jml_penjualan_kemarin = $d['jml_penjualan_kemarin'];
		
		$jml_penjualan_kemarin_no = mysqli_query($koneksi,"select * from db_penjualan where date(tanggal)='$tgl_kemarin'");
		$jml_penjualan_kemarin_no = mysqli_num_rows($jml_penjualan_kemarin_no);
	?>
	<?php	
		$data = mysqli_query($koneksi,"select sum(harga) as jml_penjualan_minggu from db_penjualan where date(tanggal)>='$tgl_seminggu'");
		$d = mysqli_fetch_assoc($data);
		$jml_penjualan_minggu = $d['jml_penjualan_minggu'];
		
		$jml_penjualan_minggu_no = mysqli_query($koneksi,"select * from db_penjualan where date(tanggal)>='$tgl_seminggu'");
		$jml_penjualan_minggu_no = mysqli_num_rows($jml_penjualan_minggu_no);
	?>
	<?php
		$data = mysqli_query($koneksi,"select sum(harga) as jml_penjualan_bulan from db_penjualan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
		$d = mysqli_fetch_assoc($data);
		$jml_penjualan_bulan = $d['jml_penjualan_bulan'];
	
		$jml_penjualan_bulan_no = mysqli_query($koneksi,"select * from db_penjualan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
		$jml_penjualan_bulan_no = mysqli_num_rows($jml_penjualan_bulan_no);
	?>
	<?php	
		$data = mysqli_query($koneksi,"select sum(harga) as jml_penjualan_tahun from db_penjualan where year(tanggal)>='$tahun'");
		$d = mysqli_fetch_assoc($data);
		$jml_penjualan_tahun = $d['jml_penjualan_tahun'];
		
		$jml_penjualan_tahun_no = mysqli_query($koneksi,"select * from db_penjualan where year(tanggal)>='$tahun'");
		$jml_penjualan_tahun_no = mysqli_num_rows($jml_penjualan_tahun_no);
	?>
	
	<!-- Laporan Inventori -->
	<?php	
		$data = mysqli_query($koneksi,"select sum(stok) as jml_inventori from db_inventori");
		$d = mysqli_fetch_assoc($data);
		$jml_inventori = $d['jml_inventori'];
		
		$jml_inventori_no = mysqli_query($koneksi,"select * from db_inventori");
		$jml_inventori_no = mysqli_num_rows($jml_inventori_no);
	?>