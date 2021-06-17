	<?php
	$query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM db_penjualan");
	$data = mysqli_fetch_array($query);
	$kode = $data['kodeTerbesar'];
	$urutan = (int) substr($kode, 7, 7);
	$urutan++;
	$huruf = "PJL-";
	$kode = $huruf . sprintf("%06s", $urutan);
	?>

	<script>
		$(document).ready(function() {
			$('#tabel-barang').DataTable({
				"ordering": false,
				"lengthChange": false,
				"processing": true,
				"ajax": {
					"url": "main?pg=proses-ajax",
					"type": "POST",
					"data": {
						produk: 1
					}
				}
			});
		});

		function selected(id) {
			var id_barang = id;
			$('#modals_tambah_penjualan form')[0].reset();
			$.ajax({
				url: "main?pg=proses-ajax",
				method: "POST",
				dataType: "JSON",
				data: {
					id_barang: id_barang
				},
				success: function(data) {
					console.log(data);
					$('#produk').val(data.nama_barang);
					$('#id_produk').val(data.id_barang);
					$('#stok').val(data.stok);
				}
			})
		}
	</script>
	<div class="row">
		<div class="col-lg-12">
			<div class="mbg-3 alert alert-info alert-dismissible fade show" role="alert" style="font-size:13px; letter-spacing:0.5px;">
				<span style="margin-right:2px;">
					<i class="fa fa-question-circle"></i>
				</span>
				Pilih Produk untuk menginput data Penjualan
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<form method="post" action="" class="form_validation" novalidate enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $kode; ?>">

				<div class="form_grup_with_judul">
					<div class="judul">
						Penjualan
					</div>
					<div class="row">
						<input type="hidden" name="stok" id="stok">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="position-relative form-group">
								<label class="data">
									ID Produk <sup class="wajib">*</sup>
								</label>
								<input onkeypress="return false" type="text" class="form-control input" id="id_produk" name="id_produk" value="" required>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="position-relative form-group">
								<label class="data">
									Nama Produk <sup class="wajib">*</sup>
								</label>
								<input onkeypress="return false" type="text" class="form-control input" id="produk" name="produk" value="" required>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="position-relative form-group">
								<label class="data">
									Harga <sup class="wajib">*</sup>
								</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="btn btn-secondary form_grup_data">
											Rp.
										</span>
									</div>
									<input type="text" class="form-control input text-left" onkeyup="convertToRupiah(this);" name="harga" placeholder="0" required>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 text-right">
							<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah_penjualan">
								Simpan
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-8">
			<div class="form_grup_with_judul">
				<div class="judul">
					Data Produk
				</div>
				<div class="row">
					<div class="col-md-12">
						<table id="tabel-barang" class="table table-hover table-striped table-bordered" style="width:100%;">
							<thead>
								<tr>
									<th>No.</th>
									<th>Kode Produk</th>
									<th>Nama Produk</th>
									<th>Stok Produk</th>
								</tr>
							</thead>
							<tbody></tbody>
							<tfoot>
								<tr>
									<th colspan="2" style="text-align:right; padding-right:10px;">Total Stok</th>
									<th style="padding:0px 8px; margin:0px; text-align:center; padding-left:10px; text-transform:capitalize">
										<?php
										echo number_format($jml_inventori, 0, ',', '.');
										?>
									</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	if (isset($_POST['tambah_penjualan'])) {
		$id				= $_POST['id'];
		$tanggal 		= date("Y-m-d H:i:s");
		$produk			= $_POST['produk'];
		$harga			= $_POST['harga'];
		$harga			= str_replace(".", "", $harga);
		$id_produk      = $_POST['id_produk'];
		$stok = $_POST['stok'];

		$query = mysqli_query($koneksi, "INSERT INTO db_penjualan 
			(
				id,
				tanggal,
				produk,
				harga
			) 
			VALUES (
				'$id',
				'$tanggal',
				'$produk',
				'$harga'
				)
			");
		if ($query) {
			$stok_baru = $stok - 1;
			mysqli_query($koneksi, "UPDATE db_inventori SET 
			
			stok		= '$stok_baru'
			
			where id='$id_produk'");
			if ($stok_baru <= 0) {
				mysqli_query($koneksi, "delete from db_inventori where id='$id_produk'");
			}
		}

		session_start();
		$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Ditambahkan!";
		header("location: main?pg=penjualan");
		exit();
	}
	?>