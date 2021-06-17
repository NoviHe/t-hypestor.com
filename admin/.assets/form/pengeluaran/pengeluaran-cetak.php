	<div id="printarea" class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="border:none;">
				<form class="no_print input_form_out" method="post" action="" enctype="multipart/form-data" novalidate>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-2"></div>
						<div class="col-sm-12 col-md-12 col-lg-3" style="padding-left:30px;">
							<div class="form_input" style="margin-top:15px;">
								<input type="date" class="form-control date" id="tanggal_awal" name="tanggal_awal" required style="z-index:100;">
								<label style="top:-20px;">Tanggal Awal<sup class="wajib">*</sup></label>
								<div class="invalid-feedback">
									Tanggal Awal <?php echo $feedback;?>
								</div>
							</div>	
						</div>
						<div class="col-sm-12 col-md-12 col-lg-3">
							<div class="form_input" style="margin-top:15px;">
								<input type="date" class="form-control date" id="tanggal_akhir" name="tanggal_akhir" required style="z-index:100;">
								<label style="top:-20px;">Tanggal Akhir<sup class="wajib">*</sup></label>
								<div class="invalid-feedback">
									Tanggal Akhir <?php echo $feedback;?>
								</div>
							</div>	
						</div>
						<div class="col-sm-12 col-md-12 col-lg-2">
							<button class="mt-1 btn btn-primary save_data" name="pencarian_data" style="margin:25px 0px 0px 0px!important; width:100%;">
								<i class="fa fa-search" style="margin-right:5px;"></i>
								Cari Data
							</button>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-2">
							<a href="" onclick="window.print();">
								<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin" style="margin-top:27px; font-size:25px;"> </i>
							</a>
						</div>
					</div>
				</form>
				<script>
					(function () {
					  'use strict'
					  var forms = document.querySelectorAll('.input_form_out')

					  Array.prototype.slice.call(forms)
						.forEach(function (form) {
						  form.addEventListener('submit', function (event) {
							if (!form.checkValidity()) {
							  event.preventDefault()
							  event.stopPropagation()
							}

							form.classList.add('was-validated')
						  }, false)
						})
					})()																
				</script>
				<?php	
					if(isset($_POST['pencarian_data'])){
						$tanggal_awal  = $_POST['tanggal_awal'];
						$tanggal_akhir = $_POST['tanggal_akhir'];
					}else{
						$tanggal_awal  = date('Y-m-d');
						$tanggal_akhir = date('Y-m-d');
					}
				?>
				<span class="print_notif">
					<strong class="informasi">
						Informasi :
					</strong>
					Laporan Pengeluaran Periode Tanggal :
					<?php if($tanggal_akhir!==date('Y-m-d') or $tanggal_awal!==date('Y-m-d')){ ?> 
						<strong>
							<?php echo date('d-m-Y', strtotime($tanggal_awal));?>
						</strong>
						s/d
						<strong>
							<?php echo date('d-m-Y', strtotime($tanggal_akhir));?>
						</strong>
					<?php 
					}else{
						echo "
						<strong>
							 ".tgl_Indonesia(date('D, d F Y'))."
						</strong>
						";
					}
					?>
				</span>
				<?php
					$no = 1;
					$query = mysqli_query($koneksi,"select * from db_pengeluaran where tanggal >= '$tanggal_awal 00:00:00' and tanggal <= '$tanggal_akhir 23:59:59'");
				?>					
				<div class="table-container desktop_overflow_none" style="overflow:hidden;">
					<table id="tabel" class="table table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th>No.</th>
								<th>Tanggal</th>
								<th>Invoice</th>
								<th>Jenis</th>
								<th>Metode</th>
								<th>Keterangan</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>					
							<?php
								while($d=mysqli_fetch_array($query)){
							?>	
							<tr>
								<td>
									<?php echo $no++;?>
								</td>
								<td>
									<?php echo date('d-m-Y', strtotime($d['tanggal']));?>
									-
									<?php echo date('H:i:s', strtotime($d['tanggal']));?>
								</td>
								<td>
									<?php echo $d['id'];?>
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
							<tr>		
								<td colspan="6" class="total_cetak">
									Total Pengeluaran Periode :&nbsp;
									<?php if($tanggal_akhir!==date('Y-m-d') or $tanggal_awal!==date('Y-m-d')){ ?> 
										<?php echo date('d-m-Y', strtotime($tanggal_awal));?>
										s/d
										<?php echo date('d-m-Y', strtotime($tanggal_akhir));?>
									<?php 
									}else{
										echo "
										<strong>
											 ".tgl_Indonesia(date('D, d F Y'))."
										</strong>
										";
									}
									?>
								</td>
								<td class="nominal_cetak" style="text-align:right; padding-right:8px; font-weight:bold;">
									<?php
										$data = mysqli_query($koneksi,"select sum(jumlah) as jml_pengeluaran_cetak from db_pengeluaran where tanggal >= '$tanggal_awal 00:00:00' and tanggal <= '$tanggal_akhir 23:59:59'");
										$d = mysqli_fetch_assoc($data);
										$jml_pengeluaran_cetak = $d['jml_pengeluaran_cetak'];
									?>
									Rp. 
									<?php 
										echo number_format($jml_pengeluaran_cetak,0,',','.');
									?>
								</td>				
							</tr>	
						</tbody>
					</table> 
					<?php
						if(mysqli_num_rows($query)==0){
							echo "<span class='cetak_data_tidak_ditemukan'>DATA TIDAK DITEMUKAN!</span>";
						}
					?> 
				</div>
			</div>
		</div>
	</div>