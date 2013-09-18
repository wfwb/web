
	<script type="text/javascript">

		$(document).ready(function() {

			var $r_first = 0;
			var $r_last = 4;
			$('#recommended-list > li:gt('+($r_last-1)+')').hide();
			$('#recommended-list > li:lt('+($r_first+1)+')').hide();
			$('#recommended-prev').click(function() {
				if ($r_first > 0) {
					$r_first--;
					$r_last--;
					$('#recommended-list > li:gt('+($r_last-1)+')').hide();
					$('#recommended-list > li:lt('+$r_last+')').show();
					$('#recommended-list > li:lt('+($r_first+1)+')').hide();
				}
			});
			$('#recommended-next').click(function() {
				if ($r_last < 4) {
					$r_first++;
					$r_last++;
					$('#recommended-list > li:lt('+$r_last+')').show();
					$('#recommended-list > li:lt('+($r_first+1)+')').hide();
				}
			});

			var $new_first = 0;
			var $new_last = 4;
			$('#new-list > li:gt('+($new_last-1)+')').hide();
			$('#new-list > li:lt('+($new_first+1)+')').hide();
			$('#new-prev').click(function() {
				if ($r_first > 0) {
					$r_first--;
					$r_last--;
					$('#new-list > li:gt('+($new_last-1)+')').hide();
					$('#new-list > li:lt('+$new_last+')').show();
					$('#new-list > li:lt('+($new_first+1)+')').hide();
				}
			});
			$('#new-next').click(function() {
				if ($new_last < 4) {
					$new_first++;
					$new_last++;
					$('#new-list > li:lt('+$new_last+')').show();
					$('#new-list > li:lt('+($new_first+1)+')').hide();
				}
			});

			var $normal_first = 0;
			var $normal_last = 4;
			$('#normal-list > li:gt('+($normal_last-1)+')').hide();
			$('#normal-list > li:lt('+($normal_first+1)+')').hide();
			$('#normal-prev').click(function() {
				if ($r_first > 0) {
					$r_first--;
					$r_last--;
					$('#normal-list > li:gt('+($normal_last-1)+')').hide();
					$('#normal-list > li:lt('+$normal_last+')').show();
					$('#normal-list > li:lt('+($normal_first+1)+')').hide();
				}
			});
			$('#normal-next').click(function() {
				if ($normal_last < 4) {
					$normal_first++;
					$normal_last++;
					$('#normal-list > li:lt('+$normal_last+')').show();
					$('#normal-list > li:lt('+($normal_first+1)+')').hide();
				}
			});

			var $random = Math.floor((Math.random()*3)+1);
			$('.hero-list > li:gt('+$random+')').hide();
			$('.hero-list > li:lt('+$random+')').hide();

			$('.btn-to-hero').click(function() {
				$.scrollTo('#books-container', 800, {easing:'swing'} );
			});

		});

		function change_hero(index) {
			$('.hero-list > li:eq('+index+')').show();
			$('.hero-list > li:gt('+index+')').hide();
			$('.hero-list > li:lt('+index+')').hide();
		}

	</script>

	<div id="books-container" class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<div class="sidebar-nav" style="margin-top: 20px;">
					<ul class="nav nav-list">
						<li class="nav-header" style="font-size: 16px;">หมวดหมู่</li>
						<li><a href="#">โรแมนติกแฟนตาซี</a></li>
						<li><a href="#">โรแมนติกคอเมดี้</a></li>
						<li><a href="#">ดราม่า</a></li>
						<li class="nav-header" style="font-size: 16px;">นักเขียน</li>
						<li><a href="#">ดวงตะวัน</a></li>
						<li><a href="#">อรพิม</a></li>
						<li><a href="#">อยุทธ์</a></li>
					</ul>
				</div>
			</div>
			<div id="top" class="span10">
				<div class="hero-unit" style="background-color: white;">
					<ul class="hero-list">
						<li></li>
						<?php foreach ($books as $book) { ?> 
						<li>
							<div class="hero-div">
								<div class="row-fluid">
									<div class="span5">
										<img src="<?php echo base_url()?><?php echo $book['cover_img_front']; ?>">
									</div>
									<div class="span7" style="padding-left: 20px;">
										<h1 style="margin-bottom: 13px; font-size: 50px;"><?php echo $book['book_name']; ?></h1>
										<h4><?php echo $book['book_name_decor']; ?></h4>
										<?php if($book['series'] != null) { ?>
											<p>นวนินยายชุด "<?php echo $book['series'];?>"</p>
										<?php } ?>
										<p>ผู้เขียน : <?php echo $book['author']; ?></p>
										<p>ประเภท​ : <?php echo $book['category']; ?></p>
										<p>ISBN : <?php echo $book['ISBN'];?></p>
										<p>พิมพ์ครั้งที่ 1 : <?php echo $book['publish'];?></p>
										<p>ปกและเนื้อใน : <?php echo $book['cover_inside'];?></p>
										<p>จำนวนหน้า : <?php echo $book['total_pages'];?> หน้า</p>
										<p>ราคา : <?php echo $book['price']; ?> บาท</p>
										<p>ส่วนลด : <?php echo $book['discount'];?>% เหลือ <?php echo ((100-$book['discount'])/100)*$book['price'];?> บาท</p>
										<div style="display: inline;">
										<?php echo form_open(); ?>
											<p style="display: none;"><input name="id" value="<?php echo $book['id']; ?>"></input></p>
											<p style="float: left; margin-right: 10px;">จำนวน</p>
											<input type="text" value="1" style="float:left; margin-right: 10px; width: 30px;"></input>
											<p><button type="submit" class="btn btn-inverse btn-medium" style="float:left; margin-right: 10px;">ใส่ตะกร้า</button></p>
										<?php echo form_close(); ?>
										<?php echo form_open('books/book'); ?>
										<p style="display: none;"><input name="id" value="<?php echo $book['id']; ?>"></input></p>
										<p><button type="submit" class="btn btn-warning btn-medium" style="float:left;">ดูรายละเอียด</button></p>
										<?php echo form_close(); ?>
										</div>
									</div>	
								</div>
							</div>	
						</li>
						<?php } ?>
						<li></li>
					</ul>
				</div>

				<hr>
				<div class="row-type">
					<h4>หนังสือแนะนำ</h4>	
				</div>
				<div class="row">
					<button id="recommended-prev" class="prev-button btn btn-inverse" style="float: left; left: 35px; top: 0px; position: relative;"><</button>
					<ul id="recommended-list" class="related-list" style="margin-left: 80px; margin-top: 20px;">
						<li></li>
						<?php foreach ($recommended as $r) { ?>
						<li class="span3" style="margin-left: 30px; margin-right: 30px; margin-bottom: 10px; line-height: 9px;">
								<img src="<?php echo base_url(); ?><?php echo $r['cover_img_front'];?>" width="170" height="247">
								<p style="margin-top: 10px;"><?php echo $r['book_name'];?></p>
								<p>฿ <?php echo $r['price'];?></p>
								<button class="btn-to-hero btn btn-warning" type="button" onclick="change_hero(<?php echo $r['id']; ?>)">ดูรายละเอียด</button>
						</li>
						<?php } ?>
						<li></li>
					</ul>
					<button id="recommended-next" class="next-button btn btn-warning" style="float: right; right: 10px; top: 0px; position: relative;">></button>
				</div>
				
				<hr>
				<div class="row-type">
					<h4>หนังสือใหม่</h4>	
				</div>
				<div class="row">
					<button id="new-prev" class="prev-button btn btn-inverse" style="float: left; left: 35px; top: 0px; position: relative;"><</button>
					<ul id="new-list" class="related-list" style="margin-left: 80px; margin-top: 20px;">
						<li></li>
						<?php foreach ($new as $r) { ?>
						<li class="span3" style="margin-left: 30px; margin-right: 30px; margin-bottom: 10px; line-height: 9px;">
								<img src="<?php echo base_url(); ?><?php echo $r['cover_img_front'];?>" width="170" height="247">
								<p style="margin-top: 10px;"><?php echo $r['book_name'];?></p>
								<p>฿ <?php echo $r['price'];?></p>
								<button class="btn-to-hero btn btn-warning" type="button" onclick="change_hero(<?php echo $r['id']; ?>)">ดูรายละเอียด</button>
						</li>
						<?php } ?>
						<li></li>
					</ul>
					<button id="new-next" class="next-button btn btn-warning" style="float: right; right: 10px; top: 0px; position: relative;">></button>
				</div>

				<hr>
				<div class="row-type">
					<h4>หนังสือทั้งหมด</h4>	
				</div>
				<div class="row">
					<button id="new-prev" class="prev-button btn btn-inverse" style="float: left; left: 35px; top: 0px; position: relative;"><</button>
					<ul id="new-list" class="related-list" style="margin-left: 80px; margin-top: 20px;">
						<li></li>
						<?php foreach ($books as $r) { ?>
						<li class="span3" style="margin-left: 30px; margin-right: 30px; margin-bottom: 10px; line-height: 9px;">
								<img src="<?php echo base_url(); ?><?php echo $r['cover_img_front'];?>" width="170" height="247">
								<p style="margin-top: 10px;"><?php echo $r['book_name'];?></p>
								<p>฿ <?php echo $r['price'];?></p>
								<button class="btn-to-hero btn btn-warning" type="button" onclick="change_hero(<?php echo $r['id']; ?>)">ดูรายละเอียด</button>
						</li>
						<?php } ?>
						<li></li>
					</ul>
					<button id="new-next" class="next-button btn btn-warning" style="float: right; right: 10px; top: 0px; position: relative;">></button>
				</div>
			</div><!--/span-->
		</div><!--/row-->

	</div>

</div>