	<div class="section" style="background: #FFFFFF; color: #231F20; margin-top: 50px;">
		<?php 
			$i = 1;
			foreach ($join_us as $thumbnail) { 
		?>
			<div class="custom-thumbnail">
				<div class="thumbnail-img">
					<img src="<?php echo base_url()?><?php echo $thumbnail['thumbnail_img']?>">	
				</div>	
				<div class="thumbnail-detail" style="overflow: hidden; text-overflow: ellipsis;">
					<h2><?php echo $thumbnail['heading']; ?></h2>
					<p id="detail<?php echo $i?>"><?php echo $thumbnail['detail']; ?></p>
				</div>
				<button class="btn btn-small btn-warning">อ่านต่อ ...</button>
			</div>
		<?php 
			$i++;
		} ?>
	</div>

</div> <!-- div #page -->