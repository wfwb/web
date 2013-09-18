
	<div id="book-secition" class="section">
		<div class="section-inner">
			<?php foreach ($book as $b) { ?>
			<div class="row-fluid" style="margin-top: 20px; margin-bottom: 50px;">
				<!-- <div style="text-align: center; margin-bottom: 50px;">
						<img src="<?php echo base_url()?><?php echo $b['cover_img_front'];?>" height="494" width="341" style="margin-right: 50px;">
					<img src="<?php echo base_url()?><?php echo $b['cover_img_back'];?>" height="494" width="341">
				</div> -->
				<div class="span5">
					<img src="<?php echo base_url()?><?php echo $b['cover_img_front'];?>">
					<!-- <img src="<?php echo base_url()?><?php echo $b['cover_img_back'];?>" height="494" width="341"> -->
				</div>
				<div class="book-description span6"style="margin-left: 50px;">
					<h1><?php echo $b['book_name'];?></h1>
					<h4 style="margin-top: 40px;"><?php echo $b['book_name_decor'];?></h4>
					<?php if($b['series'] != null) { ?>
						<p>นวนินยายชุด "<?php echo $b['series'];?>"</p>
					<?php } ?>
					<p>ผู้เขียน : <?php echo $b['author']; ?></p>
					<p>ประเภท​ : <?php echo $b['category']; ?></p>
					<p>ISBN : <?php echo $b['ISBN'];?></p>
					<p>พิมพ์ครั้งที่ 1 : <?php echo $b['publish'];?></p>
					<p>ปกและเนื้อใน : <?php echo $b['cover_inside'];?></p>
					<p>จำนวนหน้า : <?php echo $b['total_pages'];?> หน้า</p>
					<p>ราคา : <?php echo $b['price']; ?> บาท</p>
					<p>ส่วนลด : <?php echo $b['discount'];?>% เหลือ <?php echo ((100-$b['discount'])/100)*$b['price'];?> บาท</p>
					<p><i class="icon-download"></i>&nbsp;<a>ตัวอย่างทดลองอ่าน</a></p>
				</div>
			</div>
			<div>
				<hr>
				<h4>ข้อมูลหนังสือ</h4>
				<p><?php echo $b['book_info'];?></p>
				<?php if($b['series_info'] != null) { ?>
					<hr>
					<h4>ข้อมูลซีรีส์</h4>
					<p><?php echo $b['series_info'];?></p>
				<?php } ?>
				<?php if($b['about_author'] != null) { ?>
					<hr>
					<h4>เกี่ยวกับผู้เขียน</h4>
					<p><?php echo $b['about_author'];?></p>
				<?php } ?>
				<?php if($b['review'] != null) { ?>
					<hr>
					<h4>รีวิว</h4>
					<p><?php echo $b['review'];?></p>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>