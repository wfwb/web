<!DOCTYPE html>

<html lang="en">

<head>
	
	<meta charset="utf-8">

	<title>สำนักพิมพ์คำต่อคำ</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-responsive.css">
	<meta name="viewport" content="width=deivce-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/wfwb.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/wfwb-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dropdown.css">

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url()?>assets/js/dropdown.js"></script> -->

	<script type="text/javascript">
		
		$(document).ready(function(){
			
			$('.menu-toggle').click(function() {
				$('.navbar-custom').toggleClass('menu-expand');
				if ($('.menu-vertical').is(':visible')) {
					$('.menu-vertical').hide();
				}
				else {
					$('.menu-vertical').show();
				}
			});

			$('.menu-vertical').hide();

		});

	</script>

</head>

<body>

	<div id="page">
		<div id="head">
			<img class="logo hidden-phone" src="<?php echo base_url()?>assets/img/logo-color.png">
			<div class="navbar-custom">

				<!-- DESKTOP -->
				<ul class="visible-desktop">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search icon-white"></i>&nbsp&nbspค้นหา</a>
						<ul class="dropdown-menu" style="padding-left: 15px; padding-right: 15px; padding-top: 15px">
							<li><h4>ค้นหาหนังสือหรือนักเขียน</h3></li>
							<form class="form" id="formLogin"> 
								<input name="password" id="password" type="password" placeholder="ชื่อหนังสือหรือชื่อนักเขียน"><br>
								<button type="button" id="btnLogin" class="btn btn-warning">ค้นหา</button>
							</form>
						</ul>
					</li>
					<!-- <li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-shopping-cart icon-white"></i>&nbsp&nbspตะกร้า</a>
						<ul class="dropdown-menu" style="width: 200px; padding-left: 15px; padding-right: 15px; padding-top: 15px">
							<li><h5>คุณมีหนังสือในตะกร้า : 0 เล่ม</h5></li>
							<form class="form" id="formLogin">
								<button type="button" id="btnLogin" class="btn btn-inverse">สั่งซื้อหนังสือ</button>
								<button type="button" id="btnLogin" class="btn btn-warning" style="margin-top:5px;">ดูหนังสือในตะกร้า</button>
							</form>
						</ul>
					</li> -->
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลส่วนตัว</a>
						<ul class="dropdown-menu" style="padding-left: 15px; padding-right: 15px; padding-top: 15px">
							<li><h4>ข้อมูลส่วนตัว</h3></li>
							<?php echo form_open("auth/logout");?>
								<button type="submit" id="btnLogin" class="btn btn-warning" style="margin-top:5px;">ออกจากระบบ</button>
							<?php echo form_close();?>
						</ul>
					</li>
					<li><a id="contactus-li" href="<?php echo base_url()?>contact_us">ติดต่อเรา</a></li>
					<li><a id="joinus-li" href="<?php echo base_url()?>join_us">ร่วมงานกับเรา</a></li>		
					<li><a id="webboard-li" href="http://forum.wordforwordbooks.com"  target="_blank">พบปะพูดคุย</a></li>
					<li><a id="news-li" href="<?php echo base_url()?>news">แจ้งข่าว</a></li>
					<li><a id="books-li" href="<?php echo base_url()?>books">ชวนอ่านหนังสือ</a></li>
					<li><a id="home-li" href="<?php echo base_url()?>">แรกพบ</a></li>
					
				</ul>

				<!-- TABLET -->
				<ul class="visible-tablet">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search icon-white"></i>&nbsp;&nbsp;ค้นหา</a>
						<ul class="dropdown-menu" style="padding-left: 15px; padding-right: 15px; padding-top: 15px">
							<li><h4>ค้นหาหนังสือหรือนักเขียน</h3></li>
							<form class="form" id="formLogin"> 
								<input name="password" id="password" type="password" placeholder="ชื่อหนังสือหรือชื่อนักเขียน"><br>
								<button type="button" id="btnLogin" class="btn btn-warning">ค้นหา</button>
							</form>
						</ul>
					</li>
					<!-- <li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-shopping-cart icon-white"></i>&nbsp&nbspตะกร้า</a>
						<ul class="dropdown-menu" style="width: 200px; padding-left: 15px; padding-right: 15px; padding-top: 15px">
							<li><h5>คุณมีหนังสือในตะกร้า : 0 เล่ม</h5></li>
							<form class="form" id="formLogin">
								<button type="button" id="btnLogin" class="btn btn-inverse">สั่งซื้อหนังสือ</button>
								<button type="button" id="btnLogin" class="btn btn-warning" style="margin-top:5px;">ดูหนังสือในตะกร้า</button>
							</form>
						</ul>
					</li> -->
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลส่วนตัว</a>
						<ul class="dropdown-menu" style="padding-left: 15px; padding-right: 15px; padding-top: 15px">
							<li><h4>ข้อมูลส่วนตัว</h3></li>
							<?php echo form_open("auth/logout");?>
								<button type="submit" id="btnLogin" class="btn btn-warning" style="margin-top:5px;">ออกจากระบบ</button>
							<?php echo form_close();?>
						</ul>
					</li>	
				</ul>

				<!-- PHONE -->
				<ul class="visible-phone">
					<li id="brand-text" style="float: left"><a href="">คำต่อคำ</a></li>
					<li class="menu-toggle"><a href="#" style="margin-left: 15px;"><i class="icon-th-list icon-white" style="margin-top: 3px;"></i>&nbsp&nbspเมนู</a></li>
					<ul class="menu-vertical">
						<li><a id="home-li" href="<?php echo base_url()?>">แรกพบ</a></li>
						<li><a id="books-li" href="<?php echo base_url()?>books">ชวนอ่านหนังสือ</a></li>
						<li><a id="news-li" href="<?php echo base_url()?>news">แจ้งข่าว</a></li>
						<li><a id="webboard-li" href="http://forum.wordforwordbooks.com"  target="_blank">พบปะพูดคุย</a></li>
						<li><a id="joinus-li" href="<?php echo base_url()?>join_us">ร่วมงานกับเรา</a></li>	
						<li><a id="contactus-li" href="<?php echo base_url()?>contact_us">ติดต่อเรา</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลส่วนตัว</a>
							<ul class="dropdown-menu" style="padding-left: 15px; padding-right: 15px; padding-top: 15px">
								<li><h4>ข้อมูลส่วนตัว</h3></li>
								<?php echo form_open("auth/logout");?>
									<button type="submit" id="btnLogin" class="btn btn-warning" style="margin-top:5px;">ออกจากระบบ</button>
								<?php echo form_close();?>
							</ul>
						</li>
						<li class="dropdown" style="float: left;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search icon-white"></i>&nbsp;&nbsp;ค้นหา</a>
							<ul class="dropdown-menu" style="padding-left: 15px; padding-right: 15px; padding-top: 15px">
								<li><h4>ค้นหาหนังสือหรือนักเขียน</h3></li>
								<form class="form" id="formLogin"> 
									<input name="password" id="password" type="password" placeholder="ชื่อหนังสือหรือชื่อนักเขียน"><br>
									<button type="button" id="btnLogin" class="btn btn-warning">ค้นหา</button>
								</form>
							</ul>
						</li>	
					</ul>
				</ul>

			</div>			
		</div>	