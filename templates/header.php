<div id="header" class="bg-dark py-3 border-bottom border-secondary">
	<div class="container">
		<div class="row text-center text-md-start  text-white">
			<div class="col-md-6">
				<div class="h4 serif">
					<a href="/" class="text-white text-decoration-none">
						Mosaico Light
					</a>
				</div>
			</div>
			<div class="col-md-6 text-center text-md-end">
				
			</div>
		</div>
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
</script>