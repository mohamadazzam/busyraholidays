<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title>Busyra Holidays Sdn Bhd - Pengelola Umrah &amp; Pelancongan</title>
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Core Meta Data -->
	<meta content="BusyraHolidays" name="tripixeldotmy">
	<meta content="Pengelola Umrah &amp; Pelancongan Anda" name="description">
	<meta content="Umrah, Pelancongan, Mekah, Madinah, Tiket Murah" name="keywords"><!-- Open Graph Meta Data -->
	<meta content="Pakej Pelancongan &amp; Pakej Umrah">
	<meta content="BusyraHolidays">
	<meta content="BusyraHolidays">
	<meta content="website">
	<meta content="index.html"><!-- Twitter Card Meta Data -->
	<meta content="summary" name="twitter:card">
	<meta content="@busyraholidays" name="twitter:tripixeldotmy">
	<meta content="@busyraholidays" name="twitter:tripixeldotmy">
	<meta content="@busyraholidays" name="twitter:tripixeldotmy">
	<meta content="Busyra Holidays Sdn Bhd - Pengelola Umrah &amp; Pelancongan Anda" name="twitter:description">
	<link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">
	<!-- Bootstrap Core CSS -->
	<link href="assets/static/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--Custom Css -->
	<!-- Busyra CSS -->
	<link href="assets/static/css/reset.css" rel='stylesheet' type='text/css'>
	<link href="assets/static/css/normalize.css?v=05092018" rel="stylesheet">
	<link href="assets/static/css/busyra.css?v=05092018" rel="stylesheet">
	<link href="assets/static/css/loader.css?v=05092018" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<!-- Custom Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="preloader">
		<div class="loading">
			<h2>
				Loading...
			</h2>
			<span class="progress"></span>
		</div>
	</div>
	<!-- START HERE -->
	<nav class="navbar navbar-expand-lg navbar-light header-navfixed" data-toggle="affix" data-offset="50">
		<div class="container-fluid">
			<a class="navbar-brand navbar-default" href="#">
				<img class="img-responsive header-logo" src="assets/static/icons/busyra_white.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse navbar-collapse-default" id="collapsingNavbar">

				<ul class="nav navbar-nav ml-auto">
					<li class="nav-item nav-list">
						<a class="nav-link" href="pakej/umrah">Umrah</a>
						<span class="Header---shadow---anTEB"></span>
					</li>
					<li class="nav-item nav-list">
						<a class="nav-link" href="pakej/pelancongan">Pelancongan</a>
						<span class="Header---shadow---anTEB"></span>
					</li>
					<li class="nav-item nav-list">
						<a class="nav-link" href="pakej/promosi">Promosi</a>
						<span class="Header---shadow---anTEB"></span>
					</li>
					<li class="nav-item nav-list">
						<a class="nav-link" href="mengenai-kami">Mengenai Kami</a>
						<span class="Header---shadow---anTEB"></span>
					</li>
					<li class="nav-item nav-list">
						<a class="nav-link" href="hubungi-kami">Hubungi Kami</a>
						<span class="Header---shadow---anTEB"></span>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div id="carouselExampleIndicators" class="carousel slide caption-animate carousel-big" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php $i=true;foreach ($slider as $img => $k):?>
			<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $k['id'];?>" class="<?php echo $i ? ' active' : ''?>"></li>
			<?php $i=false;endforeach;?>
		</ol>

		<div class="carousel-inner">
			<?php $i=true;foreach ($slider as $img => $r):?>
			<div class="carousel-item <?php echo $i ? ' active' : ''?>">
				<img class="d-block w-100" src="<?php echo $r['path']; ?>" alt="<?php echo $r['title']; ?>">
				<div class="carousel-caption">
					<h3 data-animation="animated flipInX"><?php echo $r['title']; ?></h3>
					<p data-animation="animated bounceInUp"><?php echo $r['caption']; ?></p>
					<?php if(!empty($r['href'])):?>
						<a href="<?php echo $r['href']; ?>" class="btn btn-custom animated slideInLeft">Maklumat Lanjut <i class="fa fa-fw fa-angle-right"></i></a>
					<?php endif; ?>
				</div>
			</div>
			<?php $i=false;endforeach; ?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="separator" id="main"></div>
	<main role="main" class="container">
		<div class="container wrapper-main">
			<?php if($pCategory <= 6):?>
				<h1 class="header">Promosi Umrah 2018 
					<span class="ng-tns-c0-0" style="color:#38618C">
						<i class="fa fa-caret-right"></i> Penerbangan
						<b class="text-uppercase">Terus</b>
					</span>
					<a class="btn btn-link btn-link-custom pull-right" href="pakej/umrah">Lihat Pakej<i class="fa fa-fw fa-caret-right"></i></a>
				</h1>
				<div class="row">
					<?php 
					foreach ($pCategory as $cat => $c):
						echo '
						<div class="col-lg-4 col-sm-12 col-xs-12">
						<a href="pakej/'.$c['categoryName'].'/'.urlencode($c['categoryId']).'">
						<div class="card mb-4 box-shadow featured-post">
						<img class="card-img-top" data-src="assets/images/upload/packages/omra/omra.jpg" src="assets/images/upload/packages/omra/omra.jpg" data-holder-rendered="true">
						</div>
						</a>
						</div>
						';
					endforeach; ?>
				</div>
			<?php endif;?>
			<div class="highlight">
				<span class="title">Pakej Promosi Umrah <b><?php echo date('Y');?></b></span>
			</div>
			<div class="row">
				<?php foreach($pOmra as $p => $o):?>
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<a href="pakej/<?php echo $o['pOmraName'];?>/<?php echo urlencode($o['omraId']);?>">
							<div class="card mb-4 box-shadow featured-post">
								<img class="card-img-top" data-src="assets/images/upload/packages/omra/omra.jpg" src="assets/images/upload/packages/omra/omra.jpg" data-holder-rendered="true">
							</div>
						</a>
					</div>
				<?php endforeach;?>
			</div>

			<div class="jumbotron p-3 p-md-5 text-white highlight" style="margin:0 1rem 1rem 1rem; border-radius: 0;">
				<div class="col-md-12 px-0 special-block">
					<p class="special-text">Mahukan destinasi percutian dengan pakej murah &amp; menarik?
						<br>
						<strong>Hubungi kami<br>
							<span class="link-visit"><a href="tel:+60392006649">60127630372</a></span>
							<br>
							atau Whatsapp kami
							<br>
							<span>
								<a class="link-whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=60127630372&amp;text=I'm%20interested%20in:">
									<i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i>
								</a>
							</span>
						</strong>
						</p>
					</div>
				</div>

				<div class="row mb-2">
					<div class="col-md-6">
						<div class="card flex-md-row mb-4 shadow-sm h-md-250">
							<div class="card-body d-flex flex-column align-items-start">
								<strong class="d-inline-block mb-2 text-primary">World</strong>
								<h3 class="mb-0">
									<a class="text-dark" href="#">Featured post</a>
								</h3>
								<div class="mb-1 text-muted">Nov 12</div>
								<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
								<a href="#">Continue reading</a>
							</div>
							<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165f2a05e6e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165f2a05e6e%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22130.75625%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
						</div>
					</div>
					<div class="col-md-6">
						<div class="card flex-md-row mb-4 shadow-sm h-md-250">
							<div class="card-body d-flex flex-column align-items-start">
								<strong class="d-inline-block mb-2 text-success">Design</strong>
								<h3 class="mb-0">
									<a class="text-dark" href="#">Post title</a>
								</h3>
								<div class="mb-1 text-muted">Nov 11</div>
								<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
								<a href="#">Continue reading</a>
							</div>
							<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165f2a05e76%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165f2a05e76%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22130.75625%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
						</div>
					</div>
				</div>
			</main>
			<!-- END HERE -->
			<footer class="container-fluid footer-bg-default">
				<div class="footer">
					<div class="footer tab-12-footer">
						<div class="row padding-footer text-left">
							<div class="col col-md-4">
								<h5>Busyra Holidays Sdn Bhd</h5>
								<span class="info">No.27-2, Jalan TTDI Grove </span>
								<span class="info">7/1, Taman TTDI Grove</span>
								<span class="info">Kajang, Malaysia</span>
								<span class="info"><font class="strong">+60127630372</font></span>
								<span class="link-visit display-block"><a href="mailto:info@busyraholidays.com.my">info[at]busyraholidays.com.my</a></span>
							</div>
							<div class="col-md-2">
								<h5>Pakej Umrah</h5>
								<ul>
									<li>Umrah 2 Jumaat</li>
									<li>Umrah Awal Musim</li>
									<li>Umrah Cuti Sekolah</li>
									<li>Umrah Gold</li>
									<li>Umrah Ekonomi</li>
								</ul>
							</div>
							<div class="col-md-2">
								<h5>Jom Melancong</h5>
								<ul>
									<li>Outbound</li>
									<li>Inbound</li>
									<li>Domestic</li>
									<li>Ground Only</li>
								</ul>
							</div>
							<div class="col-md-2">
								<h5>Servis</h5>
								<ul>
									<li>Semakan Visa</li>
									<li>Semakan Mofa</li>
									<li>Agen Tiket</li>
								</ul>
							</div>
							<div class="col-md-2">
								<h5>Partners</h5>
								<ul>
									<li>
										<div class="partner-1"></div>
									</li>
								</ul>
							</div>
						</div>
						<div class="copyright">
							<div class="row padding-footer">
								<div class="col-md-4 float-left text-left">Busyra Holidays Sdn Bhd. All Right Reserved</div>
								<div class="col-md-8 float-right text-right"> 
									<span class="display-block">
										&copy; 2017 - <?php echo date("Y"); ?> Developed and maintained by 
										<span class="link-visit text-capitalize">
											<a href="https://www.tripixel.my" target="_blank">Tripixel Studios</a>
										</span>
									</span>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="assets/static/css/bootstrap/js/bootstrap.min.js"></script>
			<script src="assets/static/js/main.js"></script>
		</body>
		</html>