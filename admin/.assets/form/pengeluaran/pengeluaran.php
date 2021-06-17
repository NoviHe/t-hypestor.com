	<div class="row">
		<div class="col-lg-12 col-xl-6">
			<a class="text-danger" href="" data-toggle="modal" data-target="#modals_pengeluaran_bulan" data-backdrop="static" data-keyboard="false" style="text-decoration:none;">
				<div class="main-card mb-3 card">
					<div class="grid-menu grid-menu-1col">
						<div class="no-gutters row">
							<div class="col-sm-12" style="border:none;">
								<div class="widget-chart widget-chart-hover" style="padding:65px 0px 230px 0px;">
									<h5 class="menu-header-title text-danger" style="margin-bottom:50px;">Pengeluaran Bulan Ini</h5>
									<div class="widget-numbers">
										Rp. 
										<?php 
											echo number_format($jml_pengeluaran_bulan,0,',','.');
										?>
									</div>
									<div class="widget-subheading text-danger" style="font-weight:500;">
										<?php echo tgl_Indonesia(date('F Y'));?>
										<br>
										<?php echo $jml_pengeluaran_bulan_no;?> Data
									</div>
									 <div class="widget-chart-wrapper">
										<div id="dashboard-sparklines-simple-2"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-12 col-xl-6">
			<div class="main-card mb-3 card">
				<div class="grid-menu grid-menu-1col">
					<div class="no-gutters row">
						<div class="col-sm-6">
							<a class="text-danger" href="" data-toggle="modal" data-target="#modals_pengeluaran_hari" data-backdrop="static" data-keyboard="false" style="text-decoration:none;">
								<div class="widget-chart widget-chart-hover" style="padding:20px 0px 94px 0px;">
									<h5 class="menu-header-title text-danger" style="font-size:13px; margin-bottom:30px;">
										Pengeluaran Hari Ini
									</h5>
									<div class="widget-numbers" style="font-size:20px; margin-bottom:20px;">
										Rp. 
										<?php 
											echo number_format($jml_pengeluaran_hari,0,',','.');
										?>
									</div>
									<div class="widget-subheading text-danger" style="font-weight:500; font-size:12px;">
										<?php echo tgl_Indonesia(date('d F Y', strtotime($tgl_sekarang)));?>
										<br>
										<?php echo $jml_pengeluaran_hari_no;?> Data
									</div>
									<div class="widget-chart-wrapper">
										<div id="dashboard-sparklines-1"></div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6">
							<a class="text-danger" href="" data-toggle="modal" data-target="#modals_pengeluaran_kemarin" data-backdrop="static" data-keyboard="false" style="text-decoration:none;">
								<div class="widget-chart widget-chart-hover" style="padding:20px 0px 94px 0px;">
									<h5 class="menu-header-title text-danger" style="font-size:13px; margin-bottom:30px;">
										Pengeluaran Kemarin
									</h5>
									<div class="widget-numbers" style="font-size:20px; margin-bottom:20px;">
										Rp. 
										<?php 
											echo number_format($jml_pengeluaran_kemarin,0,',','.');
										?>
									</div>
									<div class="widget-subheading text-danger" style="font-weight:500; font-size:12px;">
										<?php echo tgl_Indonesia(date('d F Y', strtotime($tgl_kemarin)));?>
										<br>
										<?php echo $jml_pengeluaran_kemarin_no;?> Data
									</div>
									<div class="widget-chart-wrapper">
										<div id="dashboard-sparklines-2"></div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6">
							<a class="text-danger" href="" data-toggle="modal" data-target="#modals_pengeluaran_minggu" data-backdrop="static" data-keyboard="false" style="text-decoration:none;">
								<div class="widget-chart widget-chart-hover" style="padding:20px 0px 94px 0px;">
									<h5 class="menu-header-title text-danger" style="font-size:13px; margin-bottom:30px;">
										Pengeluaran Minggu Ini
									</h5>
									<div class="widget-numbers" style="font-size:20px; margin-bottom:20px;">
										Rp. 
										<?php 
											echo number_format($jml_pengeluaran_minggu,0,',','.');
										?>
									</div>
									<div class="widget-subheading text-danger" style="font-weight:500; font-size:12px;">
										<?php echo date('d', strtotime($tgl_seminggu));?>
										- 
										<?php echo tgl_Indonesia(date('d F Y'));?>
										<br>
										<?php echo $jml_pengeluaran_minggu_no;?> Data
									</div>
									 <div class="widget-chart-wrapper">
										<div id="dashboard-sparklines-3"></div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6">
							<a class="text-danger" href="" data-toggle="modal" data-target="#modals_pengeluaran_tahun" data-backdrop="static" data-keyboard="false" style="text-decoration:none;">
								<div class="widget-chart widget-chart-hover" style="padding:20px 0px 94px 0px;">
									<h5 class="menu-header-title text-danger" style="font-size:13px; margin-bottom:30px;">
										Pengeluaran Tahun Ini
									</h5>
									<div class="widget-numbers" style="font-size:20px; margin-bottom:20px;">
										Rp. 
										<?php 
											echo number_format($jml_pengeluaran_tahun,0,',','.');
										?>
									</div>
									<div class="widget-subheading text-danger" style="font-weight:500; font-size:12px;">
										Tahun <?php echo tgl_Indonesia(date('Y'));?>
										<br>
										<?php echo $jml_pengeluaran_tahun_no;?> Data
									</div>
									 <div class="widget-chart-wrapper">
										<div id="dashboard-sparklines-4"></div>
									</div>
								</div>
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="padding-bottom:0px;">
				<div class="card-header-tab card-header">
					<div class="card-header-title judul_table">
						<a href="main?pg=pengeluaran-cetak">
							<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin" style="margin-top:5px; font-size:1.2rem;"> </i>
						</a>
						Laporan Pengeluaran : &nbsp;
						<strong>
							<?php echo tgl_Indonesia(date('F Y'));?> 
						</strong>
					</div>
					<div class="btn-actions-pane-right actions-icon-btn mobile_hide" style="margin-right:5px;">
						<div class="btn-group dropdown">
							<a class="text-danger" href="" data-toggle="modal" data-target="#modals_tambah_pengeluaran" data-backdrop="static" data-keyboard="false">
								<i class="fa fa-plus-square"></i>
							</a>
						</div>
					</div>
				</div>	
				<div class="mobile_hide" style="padding:15px;">
					<table id="tabel" class="table table-hover table-striped table-bordered" style="width:100%;">
						<thead>
							<tr>
								<th></th>
								<th>No.</th>
								<th>Tanggal</th>
								<th>No. Invoice</th>
								<th>Jenis</th>
								<th>Metode</th>
								<th>Keterangan</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>			
						<?php
							$no = 1;
							$data = mysqli_query($koneksi,"select * from db_pengeluaran where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
							while($d = mysqli_fetch_array($data)){
						?>	
						<tr>
							<td>
								<a class="text-danger" href="" data-toggle="modal" data-target="#modals_hapus_pengeluaran_<?php echo $d['id'];?>" data-backdrop="static" data-keyboard="false">
									<i class="fa fa-trash"></i>
								</a>
							</td>
							<td>
								<?php echo $no++;?>
							</td>
							<td>
								<?php echo date('d-m-Y', strtotime($d['tanggal']));?>
								-
								<?php echo date('H:i:s', strtotime($d['tanggal']));?>
							</td>
							<td>
								<a class="text-danger" href="" data-toggle="modal" data-target="#modals_edit_pengeluaran_<?php echo $d['id'];?>" data-backdrop="static" data-keyboard="false" style="text-decoration:none; font-weight:500;">
									<?php echo $d['id'];?>
								</a>
							</td>
							<td>
								<?php echo $d['jenis'];?>
							</td>
							<td>
								<?php echo $d['metode'];?>
							</td>
							<td>
								<?php echo $d['keterangan'];?>
							</td>
							<td style="text-align:right;">
								Rp. 
								<?php 
									echo number_format($d['jumlah'],0,',','.');
								?>
							</td>
						</tr>
						<?php 
						}
						?>			
						</tbody>
						<tfoot>
						<tr>
							<th colspan="7" style="text-align:right; padding-right:10px;">Total</th>
							<th style="padding:0px 8px; margin:0px; text-align:right; padding-left:10px; text-transform:capitalize">
								Rp. 
								<?php 
									echo number_format($jml_pengeluaran_bulan,0,',','.');
								?>
							</th>
						</tr>
						</tfoot>
					</table>
				</div>				
			</div>
		</div>
	</div>