
	<script type="text/javascript">

		$(document).ready(function() {

			var $first = 0;
			var $last = 4;
			$('.related-list > li:gt('+($last-1)+')').hide();
			$('.related-list > li:lt('+($first+1)+')').hide();
			$('.prev-button').click(function() {
				if ($first > 0) {
					$first--;
					$last--;
					$('.related-list > li:gt('+($last-1)+')').hide();
					$('.related-list > li:lt('+$last+')').show();
					$('.related-list > li:lt('+($first+1)+')').hide();
				}
			});
			$('.next-button').click(function() {
				if ($last < 11) {
					$first++;
					$last++;
					$('.related-list > li:lt('+$last+')').show();
					$('.related-list > li:lt('+($first+1)+')').hide();
				}
			});

			var $random = Math.floor((Math.random()*10)+1);
			$('.hero-list > li:gt('+$random+')').hide();
			$('.hero-list > li:lt('+$random+')').hide();

		});

		function change_hero(index) {
			$('.hero-list > li:eq('+index+')').show();
			$('.hero-list > li:gt('+index+')').hide();
			$('.hero-list > li:lt('+index+')').hide();
		}

	</script>

	<div id="books-container" class="container-fluid">
		<div class="row-fluid">
			<div class="span3">
				<div class="well sidebar-nav">
					<ul class="nav nav-list">
						<li class="nav-header">Sidebar</li>
						<li class="active"><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li class="nav-header">Sidebar</li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li class="nav-header">Sidebar</li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<div class="span9">
				<div class="hero-unit">
					<!-- <h1>Hello, world!</h1>
					<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
					<p><a href="#" class="btn btn-primary btn-large">Learn more »</a></p> -->
					<ul class="hero-list">
						<?php for ($i=0; $i <= 11 ; $i++) { ?> 
						<li>
							<div class="hero-div">
								<h1>Hello, world <?php echo $i; ?></h1>
								<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
								<p><a href="#" class="btn btn-primary btn-large">Learn more »</a></p>		
							</div>	
						</li>
						<?php } ?>
					</ul>
				</div>
				<div class="row-fluid">
					<div class="span4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!--/span-->
					<div class="span4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!--/span-->
					<div class="span4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!--/span-->
				</div><!--/row-->
				<div class="row-fluid">
					<div class="span4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!--/span-->
					<div class="span4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!--/span-->
					<div class="span4">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						<p><a class="btn" href="#">View details »</a></p>
					</div><!--/span-->
				</div><!--/row-->
			</div><!--/span-->
		</div><!--/row-->

	</div>

	<div class="section">
		<div class="section-inner">
			<div class="related">
				<div class="related-item">
					<button class="prev-button">prev</button>	
					<ul class="related-list">
						<?php
						for ($i=0; $i <= 11; $i++) { 
						?>
						<li>
							<div class="span4">
								<h2>Book <?php echo $i; ?></h2>
								<p>
									test test test
								</p>
								<button type="button" onclick="change_hero(<?php echo $i; ?>)">test</button>
							</div>
						</li>
						<?php } ?>
					</ul>	
					<button class="next-button">next</button>	
				</div>
			</div>	
		</div>
	</div>