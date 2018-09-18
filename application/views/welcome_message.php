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
	<link href="assets/static/css/font-awesome.min.css" rel="stylesheet" >
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
	<div class="separator" id="main">
	</div>
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
			<?php for($x = 1; $x <= 6; $x++):?>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<a href="pakej/haha/hihi">
						<div class="card mb-4 box-shadow featured-post">
							<img class="card-img-top" data-src="assets/images/upload/packages/omra/omra.jpg" src="assets/images/upload/packages/omra/omra.jpg" data-holder-rendered="true">
						</div>
					</a>
				</div>
			<?php endfor;?>
		</div>
		<!-- END HERE -->
		<div id="container">

			<!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php //echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="assets/static/css/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/static/js/main.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="assets/static/css/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/static/js/main.js"></script>
	</body>
	</html>