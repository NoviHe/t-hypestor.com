	<!-- Loader -->
	<?php include "../assets/design/loader.php";?>
	
	<!-- Profing -->	
	<script>
		$(document).ready( function() {
			$("input[type='text'], textarea").attr('spellcheck',false);
		});
	</script>
	<script>
		$(document).ready( function() {
			$("input.form-control input").attr('spellcheck',false);
		});
	</script>
	<script>
		$(document).ready( function() {
			$("input[type='search']").attr('spellcheck',false);
		});
	</script>
	
	<!-- Copy File -->
	<script src="../assets/js/clipboard.min.js"></script>
	<script>
		var clipboard = new ClipboardJS('.media_copy');

		clipboard.on('success', function(e) {
			console.log(e);
		});

		clipboard.on('error', function(e) {
			console.log(e);
		});
	</script>	
	
	<!-- Time Out -->
	<script>
		window.setTimeout(function() {
			$(".notifikasi").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
			});
		}, 3000);
	</script>
	<script>
		window.setTimeout(function() {
			$(".notifikasi_sukses").fadeTo(6000, 0).slideUp(6000, function(){
			$(this).remove(); 
			});
		}, 3000);
	</script>
	
	<!-- Toastalert -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!--<script src="https://codeseven.github.io/toastr/build/toastr.min.js"></script>-->
	<script src="../assets/js/toastr.min.js"></script>
	<script>
		toastr.options = {
		  "closeButton": false,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": false,
		  "positionClass": "toast-top-right",
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "3000",
		  "hideDuration": "3000",
		  "timeOut": "3000",
		  "extendedTimeOut": "3000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
		toastr.options.onHidden = function(){
			window.location.reload();
		};
		function panggilToast(type,msg){
			toastr[type](msg);
		}
	</script>
	
	<!-- Back to Top -->
	<script>
		mybutton = document.getElementById("to_top");
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
	</script>
	
	<!-- Others -->
	<div class="app-drawer-overlay d-none animated fadeIn"></div>
	<script type="text/javascript" src="../assets/scripts/main.js"></script>  
	
	<!-- DataTables -->
	<?php include ".assets/system/.datatables.php";?>	
	
</div>
</body>
</html>
<?php include ".assets/system/.modals.php";?>