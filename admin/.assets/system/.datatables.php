	<!-- Data Tables -->
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>
	<script>
		$('#myTable').dataTable({
			"order"			: [[ 3, "desc" ]],
			"scrollY"		: "200px",
			"scrollX"		: true,
			"scrollCollapse": true,
			<?php include "../assets/datatables/setting.php";?>
		});
	</script>
	<script>
		$('#tabel').dataTable({
			<?php include "../assets/datatables/setting.php";?>
		});
	</script>
	<script>
		$('#tabel_inventori_print').dataTable({
			<?php include "../assets/datatables/setting.php";?>
		});
	</script>