
	<script type="text/javascript">

		$(document).ready(function(){
			$('.carousel').carousel('cycle');
		});

	</script>

	<div id="wfwb-carousel" class="carousel slide visible-desktop">
		<ol class="carousel-indicators middle">
			<li data-target="#wfwb-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#wfwb-carousel" data-slide-to="1"></li>
		</ol>	
		
		<div class="carousel-inner" style="border-radius: 10px;">
			<div class="active item">
				<img src="<?php echo base_url()?>assets/img/rose.jpg">	
			</div>
			<div class="item">
				<img src="<?php echo base_url()?>assets/img/ex-carousel-2.jpg">	
			</div>	
		</div>

		<a class="carousel-control left" href="#wfwb-carousel" data-slide="prev" style="margin-top: 15px;">&lsaquo;</a>
		<a class="carousel-control right" href="#wfwb-carousel" data-slide="next" style="margin-top: 15px;">&rsaquo;</a>
	</div>

	<div id="wfwb-carousel-responsive" class="carousel slide hidden-desktop">
		<ol class="carousel-indicators middle">
			<li data-target="#wfwb-carousel-responsive" data-slide-to="0" class="active"></li>
			<li data-target="#wfwb-carousel-responsive" data-slide-to="1"></li>
		</ol>

		<div class="carousel-inner hidden-desktop">
			<div class="active item">
				<img src="<?php echo base_url()?>assets/img/ex-carousel-1.jpg" style="height: 100%;">	
			</div>
			<div class="item">
				<img src="<?php echo base_url()?>assets/img/ex-carousel-2.jpg" style="height: 100%">	
			</div>	
		</div>

		<a class="carousel-control left" href="#wfwb-carousel-responsive" data-slide="prev" style="margin-top: 15px;">&lsaquo;</a>
		<a class="carousel-control right" href="#wfwb-carousel-responsive" data-slide="next" style="margin-top: 15px;">&rsaquo;</a>
	</div>

</div> <!-- div page -->