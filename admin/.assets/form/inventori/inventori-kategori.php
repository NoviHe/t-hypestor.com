	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="padding-bottom:0px;">
				<div class="card-header-tab card-header print_inventori_top">
					<div class="card-header-title judul_table">
						<i class="header-icon pe-7s-box2 icon-gradient bg-ripe-malin" style="margin-top:0px; font-size:1.2rem;"> </i>
						<span class="print_inventori_judul">Data Inventori</span>
						<a href="" data-toggle="modal" data-target="#modals_tambah_inventori_kategori_import" data-backdrop="static" data-keyboard="false" class="btn-shadow btn-wide btn-pill btn btn-danger" style="font-size:10px; margin-left:9px; font-weight:500; text-decoration:none; text-transform:uppercase; border-radius:3px; padding:2px 10px;">
							Import Data
						</a>
					</div>
					<div class="btn-actions-pane-right actions-icon-btn mobile_hide" style="margin-right:5px;">
						<div class="btn-group dropdown">
							<a href="main?pg=inventori" style="font-size:10px; margin-right:9px; font-weight:500; text-decoration:none; text-transform:uppercase; border-radius:3px; padding:2px 10px;" class="btn-shadow btn-wide btn-pill btn btn-focus">
								Inventori
							</a>
							<a class="text-danger" href="" data-toggle="modal" data-target="#modals_tambah_inventori_kategori" data-backdrop="static" data-keyboard="false">
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
								<th>Kategori Produk</th>
							</tr>
						</thead>
						<tbody>			
						<?php
							$no = 1;
							$data = mysqli_query($koneksi,"select * from db_inventori_kategori");
							while($d = mysqli_fetch_array($data)){
						?>	
						<tr>
							<td>
								<a class="text-danger" href="" data-toggle="modal" data-target="#modals_hapus_inventori_kategori_<?php echo $d['id'];?>" data-backdrop="static" data-keyboard="false">
									<i class="fa fa-trash"></i>
								</a>
							</td>
							<td>
								<?php echo $no++;?>
							</td>
							<td>
								<a class="text-danger" href="" data-toggle="modal" data-target="#modals_edit_inventori_kategori_<?php echo $d['id'];?>" data-backdrop="static" data-keyboard="false" style="text-decoration:none; font-weight:500;">
									<?php echo $d['id'];?>
								</a>
							</td>
							<td>
								<?php echo $d['produk'];?>
							</td>
							<td>
								<?php echo $d['kategori'];?>
							</td>
						</tr>
						<?php 
						}
						?>			
						</tbody>
						<tfoot>
						<tr>
							<th></th>
							<th>No.</th>
							<th>Kode Produk</th>
							<th>Nama Produk</th>
							<th>Kategori Produk</th>
						</tr>
						</tfoot>
					</table>
				</div>	
				
			</div>
		</div>
	</div>