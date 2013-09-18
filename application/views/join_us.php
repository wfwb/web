<<<<<<< HEAD
	<div id="join-us-section" class="section" style="background: #FFFFFF; color: #231F20;">
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
			<hr style="margin-bottom: 5px;">
		<?php 
			$i++;
		} ?>
=======
	
	<script type="text/javascript">

	</script>

	<div class="section" style="background: #FFFFFF; color: #231F20;">
		<div class="section-thumbnail" style="margin-top: 50px;">

		<?php foreach ($join_us as $thumbnail) { ?>
			<div id="thumbnail"class="row-fluid" style="height: 240px;">
				<div class="span12">
					<div class="row-fluid">
						<div class="span4">
							<!-- <img src="<?php echo base_url()?>assets/img/thumbnail-ex.jpg" style="margin: 20px;"> -->
						</div>
						<div class="span8" style="height: 240px;">
							<h3 style=""><?php echo $thumbnail['heading']; ?></h3>
							<p style="">	
								<?php echo $thumbnail['detail']; ?>
							</p>
							<a href="#myModal" role="button" class="btn btn-warning" data-toggle="modal" style="float: right; margin-right: 20px; margin-top: 10px;">อ่านต่อ</a>
						</div>	
					</div>
				</div>
			</div>	
		<?php } ?>

		</div>
		<!-- <div class="section-inner">
			<h2>หลักเกณฑ์การรับต้นฉบับของสำนักพิมพ์คำต่อคำ</h2>
			<br>
			<p>
				สำนักพิมพ์คำต่อคำยินดีพิจารณาต้นฉบับนวนิยายจากนักเขียนทุกท่าน
				โดยในช่วงปีแรกขอรับต้นฉบับเฉพาะนิยายรัก (ไม่จำกัดแนว 
				ได้ทั้งโรแมนติก ดราม่า คอมเมดี้ แฟนตาซี กุ๊กกิ๊ก ใสๆ ชิงไหวชิงพริบ 
				ชิงรักหักสวาท ย้อนยุค สืบสวนสอบสวน แอ็กชั่น ลึกลับ สยองขวัญ 
				ทริลเลอร์ ไซไฟ ซาตาน โรมานซ์ 18+ ที่เน้นฟิลลิ่ง แอ็กติ้งอย่าเยอะ 
				ฯลฯ และไม่จำกัดภูมิประเทศ เช่น ทะเลทราย ทุ่งหญ้า ป่าเขา ฯลฯ) 
				แต่ไม่รับแนว “วรรณกรรมเยาวชนแฟนตาซี”
			</p>
			<p>
				เรื่องที่ส่งต้องเป็นต้นฉบับที่จบสมบูรณ์แล้ว (ไม่รับพิจารณาพล็อต) 
				ไม่เคยจำหน่ายมาก่อนทั้งในรูปสิ่งพิมพ์หรือ ebook  เป็นผลงานที่สร้างสรรค์ขึ้นเอง ไม่ได้คัดลอก 
				หรือลอกเลียนแบบมาจากผลงานของผู้อื่น
				ทั้งในด้านลักษณะเด่นของตัวละครและโครงเรื่อง
				ต้นฉบับมีความยาวมากกว่า 150 หน้า A4 ขึ้นไป (ตัวอักษร 
				Angsana new ขนาด 14 pt.)  ต้องมีเรื่องย่อความยาว 2-4 
				หน้าแนบมาด้วย (เรื่องย่อมีความสำคัญมากต่อการพิจารณา
				นักเขียนพึงใส่ใจในการเขียนเรื่องย่อให้ดึงดูดชวนอ่าน)
				พร้อมประวัติส่วนตัวและรายชื่อผลงานนิยายที่เคยตีพิมพ์ (ถ้ามี)
			</p>
			<p>
				ส่งต้นฉบับถึงสำนักพิมพ์ทางอีเมล wordforwordbooks@gmail.com
				โดยตั้งชื่อ subject อีเมลว่า "ส่งต้นฉบับให้พิจารณา : เรื่อง..............."
				(ใส่ชื่อนิยาย)  อีเมลหนึ่งฉบับ ต่อต้นฉบับหนึ่งเรื่อง
			</p>
			<p>
				ไม่มีกำหนดระยะเวลาสิ้นสุดการรับต้นฉบับ
				บรรณาธิการจะแจ้งผลให้ทราบภายใน 3 เดือน
			</p>
			<p>
				ต้นฉบับทุกเรื่องที่ได้รับการตีพิมพ์
				สำนักพิมพ์มีระบบการจ่ายค่าลิขสิทธิ์ที่เป็นมาตรฐาน
				ให้ผลประโยชน์สูงสุดแก่นักเขียน ดังนี้
				<br>
				- จำนวนพิมพ์ที่ 1-5,000 เล่ม ค่าลิขสิทธิ์อัตราร้อยละ 10 
				ของราคาปกคูณด้วยจำนวนพิมพ์
				<br>
				- จำนวนพิมพ์ที่ 5,001-10,000 เล่ม ค่าลิขสิทธิ์อัตราร้อยละ 12 
				ของราคาปกคูณด้วยจำนวนพิมพ์
				<br>
				- จำนวนพิมพ์ที่ 10,001 เล่ม ขึ้นไป ค่าลิขสิทธิ์อัตราร้อยละ 15 
				ของราคาปกคูณด้วยจำนวนพิมพ์
				<br>
				ทั้งนี้นักเขียนจะต้องเสียภาษี ณ ที่จ่ายตามกฎหมายในอัตรา 5 % 
				ของค่าลิขสิทธิ์ที่ได้รับ (เช่นถ้าได้รับค่าลิขสิทธิ์ 90,000 บาท จะเสียภาษี 
				4,500 บาท) และสำนักพิมพ์จะชำระค่าลิขสิทธิ์ให้ภายใน 30 วัน 
				นับแต่วันที่หนังสือพิมพ์แล้วเสร็จ
			</p>
		</div> -->
>>>>>>> edit-home-page
	</div>

</div> <!-- div #page -->