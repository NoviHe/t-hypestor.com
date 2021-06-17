	<table id="tabel" class="table table-hover table-striped table-bordered" style="width:100%; font-size:13px; margin-top:7px;">
		<thead>
			<tr>
				<th style="text-align:center; background:#eee;">No.</th>
				<th style="text-align:center; background:#eee;">Tanggal</th>
				<th style="text-align:center; background:#eee;">No. Invoice</th>
				<th style="text-align:center; background:#eee;">Jenis</th>
				<th style="text-align:center; background:#eee;">Metode</th>
				<th style="text-align:center; background:#eee;">Keterangan</th>
				<th style="text-align:center; background:#eee;">Jumlah</th>
			</tr>
		</thead>
		<tbody>			
		<?php
			$no = 1;
			$data = mysqli_query($koneksi,"select * from db_pengeluaran where date(tanggal)='$tgl_sekarang'");
			while($d = mysqli_fetch_array($data)){
		?>	
		<tr>
			<td style="text-align:center;">
				<?php echo $no++;?>
			</td>
			<td style="text-align:center;">
				<?php echo date('d-m-Y', strtotime($d['tanggal']));?>
				-
				<?php echo date('H:i:s', strtotime($d['tanggal']));?>
			</td>
			<td style="text-align:center;">
				<?php echo $d['id'];?>
			</td>
			<td style="text-align:center;">
				<?php echo $d['jenis'];?>
			</td>
			<td style="text-align:center;">
				<?php echo $d['metode'];?>
			</td>
			<td style="text-align:center;">
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
			<th colspan="6" style="text-align:right; padding-right:10px;">Total</th>
			<th style="padding:0px 8px; margin:0px; text-align:right; padding-left:10px; text-transform:capitalize">
				Rp. 
				<?php 
					echo number_format($jml_pengeluaran_hari,0,',','.');
				?>
			</th>
		</tr>
		</tfoot>
	</table>
	<span style="display:block; margin:20px 0px 30px 0px; font-weight:500; text-transform:uppercase; font-size:12px;">
		Total :
		<?php echo $jml_pengeluaran_hari_no;?> Data
	</span>