	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="padding-bottom:0px;">
				<div class="card-header-tab card-header print_inventori_top">
					<div class="card-header-title judul_table">
						<a href="" onclick="window.print();">
							<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin" style="margin-top:3px; font-size:1.2rem;"> </i>
						</a>
						<span class="print_inventori_judul">Data Inventori</span>
						<a href="" style="font-size:10px; margin-left:9px; font-weight:500; text-decoration:none; text-transform:uppercase; border-radius:3px; padding:2px 10px;" class="btn-shadow btn-wide btn-pill btn btn-danger no_print">
							Import Data
						</a>
					</div>
					<div class="btn-actions-pane-right actions-icon-btn mobile_hide" style="margin-right:5px;">
						<div class="btn-group dropdown">
							<a href="main?pg=inventori-kategori" style="font-size:10px; margin-right:9px; font-weight:500; text-decoration:none; text-transform:uppercase; border-radius:3px; padding:2px 10px;" class="btn-shadow btn-wide btn-pill btn btn-focus">
								Kategori
							</a>
							<a class="text-danger" href="" data-toggle="modal" data-target="#modals_tambah_inventori" data-backdrop="static" data-keyboard="false">
								<i class="fa fa-plus-square"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="no_print" style="padding:15px;">
					<table id="tabel" class="table table-hover table-striped table-bordered" style="width:100%;">
						<thead>
							<tr>
								<th></th>
								<th>No.</th>
								<th>Kode Produk</th>
								<th>Nama Produk</th>
								<th>Tanggal Input</th>
								<th>Stok Produk</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$data = mysqli_query($koneksi, "select * from db_inventori");
							while ($d = mysqli_fetch_array($data)) {
							?>
								<tr>
									<td class="no_print">
										<a class="text-danger" href="" data-toggle="modal" data-target="#modals_hapus_inventori_<?php echo $d['id']; ?>" data-backdrop="static" data-keyboard="false">
											<i class="fa fa-trash"></i>
										</a>
									</td>
									<td>
										<?php echo $no++; ?>
									</td>
									<td>
										<a class="text-danger" href="" data-toggle="modal" data-target="#modals_edit_inventori_<?php echo $d['id']; ?>" data-backdrop="static" data-keyboard="false" style="text-decoration:none; font-weight:500;">
											<?php echo $d['id']; ?>
										</a>
									</td>
									<td>
										<?php echo $d['produk']; ?>
									</td>
									<td>
										<?php echo date('d-m-Y', strtotime($d['tanggal'])); ?>
										-
										<?php echo date('H:i:s', strtotime($d['tanggal'])); ?>
									</td>
									<td>
										<?php echo $d['stok']; ?>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="5" style="text-align:right; padding-right:10px;">Total Stok</th>
								<th style="padding:0px 8px; margin:0px; text-align:center; padding-left:10px; text-transform:capitalize">
									<?php
									echo number_format($jml_inventori, 0, ',', '.');
									?>
								</th>
							</tr>
						</tfoot>
					</table>
				</div>

				<!-- Print -->
				<div class="print_table_inventori" style="padding:15px;">
					<table id="tabel_inventori_print" class="table table-hover table-striped table-bordered" style="width:100%;">
						<thead>
							<tr>
								<th>No.</th>
								<th>Kode Produk</th>
								<th>Nama Produk</th>
								<th>Tanggal Input</th>
								<th>Stok Produk</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$data = mysqli_query($koneksi, "select * from db_inventori");
							while ($d = mysqli_fetch_array($data)) {
							?>
								<tr>
									<td class="no_print">
										<a class="text-danger" href="" data-toggle="modal" data-target="#modals_hapus_inventori_<?php echo $d['id']; ?>" data-backdrop="static" data-keyboard="false">
											<i class="fa fa-trash"></i>
										</a>
									</td>
									<td>
										<?php echo $no++; ?>
									</td>
									<td>
										<?php echo $d['id']; ?>
									</td>
									<td>
										<?php echo $d['produk']; ?>
									</td>
									<td>
										<?php echo $d['stok']; ?>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="4" style="text-align:right; padding-right:10px;">Total Stok</th>
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