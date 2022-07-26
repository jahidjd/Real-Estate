<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>B A U E N</title>
	<link rel="shortcut icon" href="img/favicon.png" />
	<link rel="stylesheet" href="css/plugins.css" />
	<link rel="stylesheet" href="css/style.css" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-144098545-1');
	</script>
</head>

<body>
	<?php
	include('menu.php');
	include('connection.php');
	?>
	<!-- Content -->
	<div class="content-wrapper">
		<!-- Lines -->
		<section class="content-lines-wrapper">
			<div class="content-lines-inner">
				<div class="content-lines"></div>
			</div>
		</section>
		<!-- Header Banner -->
		<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="img/banner.jpg">
			<!-- Left Panel -->
			<div class="left-panel"></div>
		</section>
		<!-- Services -->
		<section class="services section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
						<h2 class="section-title">Our <span>Services</span></h2>
					</div>
				</div>
				<div class="row">
					<?php while ($ss = $service->fetch_assoc()) { ?>
						<div class="col-md-4">
							<div class="item">
								<a href="architecture.php?id=<?php echo $ss['id'] ?>"> <img src="../NORA_FASHION/photo/<?php echo $ss['service_icon'] ?>" alt="">
									<h5><?php echo $ss['title'] ?></h5>
									<div class="line"></div>
									<p><?php echo $ss['details'] ?></p>
									<div class="numb"><?php echo $ss['number'] ?></div>
								</a>
							</div>
						</div>
					<?php } ?>

				</div>
			</div>
		</section>
		<!-- Promo video - Testiominals -->
		<?php

		include('footer.php') ?>
	</div>
	<!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/jquery.isotope.v3.0.2.js"></script>
	<script src="js/pace.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scrollIt.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="js/YouTubePopUp.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>