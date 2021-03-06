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
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/register.css"> -->

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
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
			<!-- <div class="navbar navbar-inverse visible-desktop">
				<div id="wfwbnav" class="navbar-inner">
					<button id="expander" type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse">
						<ul id="wfwbul" class="wfwbmenu nav pull-right">
							<li><a id="home-li" href="">หน้าบ้าน</a></li>
							<li><a id="books-li" href="">ชวนอ่านหนังสือ</a></li>
							<li><a id="news-li" href="">แจ้งข่าว</a></li>
							<li><a id="webboard-li" href="">พบปะพูดคุย</a></li>
							<li><a id="joinus-li" href="#">ร่วมงานกับเรา</a></li>	
						</ul>	
					</div>	
				</div>
			</div> -->
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">เข้าสู่ระบบ</a>
						<ul class="dropdown-menu" style="padding-left: 15px; padding-right: 15px; padding-top: 15px">
							<li><h4>กรุณาเข้าสู่ระบบ</h3></li>
							<?php echo form_open("auth/login");?>
								<input name="identity" id="username" type="text" placeholder="อีเมล"> 
								<input name="password" id="password" type="password" placeholder="รหัสผ่าน"><br>
								<input type="checkbox" name="remember" style="margin-top: -5px;"></input>
								<a id="forgot-password" class="forgot-password" href="#">&nbspลืมรหัสผ่าน</a><br>
								<button type="submit" class="btn btn-inverse" style="margin-top:5px;">เข้าสู่ระบบ</button>
							<?php echo form_close();?>
							<?php 
								$attributes = array('style' => 'margin-top: -55px; margin-left: 90px;',
													'action' => '<?php echo base_url()?>register');
								echo form_open("home/register", $attributes);
							?>
								<button type="submit" class="btn btn-warning" style="margin-top:5px;">สมัครสมาชิก</button>
							<?php echo form_close();?>
						</ul>
					</li>
					<li><a id="contactus-li" href="<?php echo base_url()?>contact_us">ติดต่อเรา</a></li>
					<li><a id="joinus-li" href="<?php echo base_url()?>join_us">ร่วมงานกับเรา</a></li>		
					<li><a id="webboard-li" href="http://forum.wordforwordbooks.com" target="_blank">พบปะพูดคุย</a></li>
					<li><a id="news-li" href="<?php echo base_url()?>news">แจ้งข่าว</a></li>
					<li><a id="books-li" href="<?php echo base_url()?>books">ชวนอ่านหนังสือ</a></li>
					<li><a id="home-li" href="<?php echo base_url()?>">หน้าบ้าน</a></li>
					
				</ul>

				<!-- TABLET -->
				<ul class="visible-tablet">
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">เข้าสู่ระบบ</a>
						<ul class="dropdown-menu" style="padding-left: 15px; padding-right: 15px; padding-top: 15px">
							<li><h4>กรุณาเข้าสู่ระบบ</h3></li>
							<?php echo form_open("auth/login");?>
								<input name="identity" id="username" type="text" placeholder="อีเมลแอด"> 
								<input name="password" id="password" type="password" placeholder="รหัสผ่าน"><br>
								<input type="checkbox" name="remember" style="margin-top: -5px;"></input>
								<a id="forgot-password" class="forgot-password" href="#">&nbspลืมรหัสผ่าน</a><br>
								<button type="submit" class="btn btn-inverse" style="margin-top:5px;">เข้าสู่ระบบ</button>
							<?php echo form_close();?>
							<?php 
								$attributes = array('style' => 'margin-top: -55px; margin-left: 90px;');
								echo form_open("home/register", $attributes);
							?>
								<button type="submit" class="btn btn-warning" style="margin-top:5px;">สมัครสมาชิก</button>
							<?php echo form_close();?>
						</ul>
					</li>	
				</ul>

				<!-- PHONE -->
				<ul class="visible-phone">
					<li id="brand-text" style="float: left"><a href="">คำต่อคำ</a></li>
					<li class="menu-toggle"><a href="#" style="margin-left: 15px;"><i class="icon-th-list icon-white" style="margin-top: 3px;"></i>&nbsp&nbspเมนู</a></li>
					<ul class="menu-vertical">
						<li><a id="home-li" href="<?php echo base_url()?>">หน้าบ้าน</a></li>
						<li><a id="books-li" href="<?php echo base_url()?>books">ชวนอ่านหนังสือ</a></li>
						<li><a id="news-li" href="<?php echo base_url()?>news">แจ้งข่าว</a></li>
						<li><a id="webboard-li" href="http://forum.wordforwordbooks.com" target="_blank">พบปะพูดคุย</a></li>
						<li><a id="joinus-li" href="<?php echo base_url()?>join_us">ร่วมงานกับเรา</a></li>	
						<li><a id="contactus-li" href="<?php echo base_url()?>contact_us">ติดต่อเรา</a></li>
						<li class="dropdown" style="float: left">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">เข้าสู่ระบบ</a>
							<ul class="dropdown-menu" style="padding-left: 15px; padding-right: 15px; padding-top: 15px">
								<li><h4>กรุณาเข้าสู่ระบบ</h3></li>
								<?php echo form_open("auth/login");?>
									<input name="identity" id="username" type="text" placeholder="อีเมลแอด"> 
									<input name="password" id="password" type="password" placeholder="รหัสผ่าน"><br>
									<input type="checkbox" name="remember" style="margin-top: -5px;"></input>
									<a id="forgot-password" class="forgot-password" href="#">&nbspลืมรหัสผ่าน</a><br>
									<button type="submit" class="btn btn-inverse" style="margin-top:5px;">เข้าสู่ระบบ</button>
								<?php echo form_close();?>
								<?php 
									$attributes = array('style' => 'margin-top: -55px; margin-left: 90px;');
									echo form_open("home/register", $attributes);
								?>
									<button type="submit" class="btn btn-warning" style="margin-top:5px;">สมัครสมาชิก</button>
								<?php echo form_close();?>
							</ul>
						</li>
						<li class="dropdown" style="float: left; margin-top: 50px; margin-left: -55px;">
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