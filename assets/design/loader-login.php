<!-- Loader --> 	
<style>    
    .loader {
        position:absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
	    z-index: 9999;
        background-color:#fff;
    }
    #loadingDiv {
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-color:#fff;
	    z-index: 9999;
        background-size:cover;
    }
	@media (max-width: 1024px) { 
		.loader {
			top: 50%;
		}
		#loadingDiv {
			height:100%;
		}
	}
    /* Warna */
    .ball-scale-multiple>div {
        background-color:<?php echo $bg_loader['bg_loader'];?>;
    }
	
</style>

<script>
    $('body').append(
        '<div id="loadingDiv"><div class="loader"><div class="ball-scale-multiple"><div></div><div></div><div></div></div></div></div>'
    );
    $(window).on('load', function()
    {
     setTimeout(removeLoader, <?php echo $waktu_loader['waktu_loader'];?>);
    });
    function removeLoader()
    {
        $( "#loadingDiv" ).fadeOut(500, function() {
            $( "#loadingDiv" ).remove();
        });  
        document.getElementById("loader").style.display = "block";
    }
</script>