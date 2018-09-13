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
						<a class="nav-link" href="#">Umrah</a>
						<span class="Header---shadow---anTEB"></span>
					</li>
					<li class="nav-item nav-list">
						<a class="nav-link" href="#">Pelancongan</a>
						<span class="Header---shadow---anTEB"></span>
					</li>
					<li class="nav-item nav-list">
						<a class="nav-link" href="#">Promosi</a>
						<span class="Header---shadow---anTEB"></span>
					</li>
					<li class="nav-item nav-list">
						<a class="nav-link" href="#">Mengenai Kami</a>
						<span class="Header---shadow---anTEB"></span>
					</li>
					<li class="nav-item nav-list">
						<a class="nav-link" href="#">Hubungi Kami</a>
						<span class="Header---shadow---anTEB"></span>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	
	<div id="carouselExampleIndicators" class="carousel slide carousel-big" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php for($x = 1; $x <= 5; $x++):?>
				<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $x;?>" class="<?php if ($x == 1) echo 'active'; ?>"></li>
			<?php endfor;?>
		</ol>
		<div class="carousel-inner">
			<?php for($x = 1; $x <= 5; $x++):?>
				<div class="carousel-item <?php if ($x == 1) echo 'active'; ?>">
					<img class="d-block w-100" src="assets/images/upload/<?php echo $x;?>.jpg" alt="<?php echo $x; ?>">
					<div class="carousel-caption d-none d-md-block">
						<h5>...</h5>
						<p>...</p>
					</div>
				</div>
			<?php endfor;?>
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
		<h1 class="header">Promosi Umrah 2018 
			<span class="ng-tns-c0-0" style="color:#38618C">
				<i class="fa fa-caret-right"></i> Penerbangan
				<b class="text-uppercase">Terus</b>
			</span>
		</h1>
		<div class="row">
			<?php for($x = 1; $x <= 6; $x++):?>
				<div class="col-lg-4 col-sm-12 col-xs-12">
					<div class="card mb-4 box-shadow featured-post">
						<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165afa9bd43%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165afa9bd43%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.05625%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
					</div>
				</div>
			<?php endfor;?>
			<div class="col-xs-12 col-sm-6 col-md-9">
				<p>3 wolf moon retro jean shorts chambray sustainable roof party. Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore
					PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg
				sartorial tote bag distillery Portland before they sold out gastropub taxidermy Vice.</p>
			</div>
			<div class="col-xs-6 col-md-3">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt codeply condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.
					Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.
				</p>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra codeply varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt codeply condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.
					Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-4">
				<div class="card card-outline-primary">
					<div class="card-block">
						<h3 class="card-title">Card</h3>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-outline-secondary">Outline</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-4">
				<div class="card card-outline-primary">
					<div class="card-block">
						<h3 class="card-title">Card</h3>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-outline-secondary">Outline</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-4">
				<div class="card card-outline-primary">
					<div class="card-block">
						<h3 class="card-title">Card</h3>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-outline-secondary">Outline</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END HERE -->
	<div id="container">
		
		<!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php //echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="assets/static/css/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/static/js/main.js"></script>
</body>
</html>