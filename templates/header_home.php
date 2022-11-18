<div id="header" class="bg-dark py-3 border-bottom border-secondary">
	<div class="container">
		<div class="row text-center text-md-start  text-white">
			<div class="col-md-6">
				<div class="h4 serif">
					<a href="/" class="text-white text-decoration-none">
						Made By Catholics
					</a>
				</div>
			</div>
		</div>
		<div id="ajax-message" class="text-center"></div>
	</div>
</div>
<script>
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	    if (scroll >= 200) {
	        $("#header").addClass("fixed-top");
	    } else {
	        $("#header").removeClass("fixed-top");
	    }
	});
	$("#buyWholesale").mouseover(function(){
		$("#navWholesale").removeClass('d-none');
	});
	$("#buyWholesale").mouseout(function(){
		$("#navWholesale").addClass('d-none');
	});
</script>