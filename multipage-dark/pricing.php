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
	<!-- Preloader -->

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
		<!-- Pricing -->
		<section class="section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="section-title">Pricing <span>Plan</span></h2>
					</div>
				</div>
				<div class="row">
					<?php while ($p = $price->fetch_assoc()) { ?>
						<div class="col-md-4">
							<div class="pricing-card">
								<p class="pricing-card-name"><?php echo $p['plan_name'] ?></p>
								<h3 class="pricing-card-amount"><?php echo $p['price'] ?></h3>
								<div class="pricing-card-bottom">
									<ul class="list-unstyled pricing-card-list">
										<li><i class="ti-<?php if ($p['information_architecture'] == 'Yes') {
																echo "check";
															} else {
																echo "close unavailable";
															} ?>"></i> Information architecture</li>
										<li><i class="ti-<?php if ($p['lifetime_support'] == 'Yes') {
																echo "check";
															} else {
																echo "close unavailable";
															} ?>"></i>Lifetime support</li>
										<li><i class="ti-<?php if ($p['a-z_design'] == 'Yes') {
																echo "check";
															} else {
																echo "close unavailable";
															} ?>"></i>A-Z design</li>
										<li><i class="ti-<?php if ($p['full_concept'] == 'Yes') {
																echo "check";
															} else {
																echo "close unavailable";
															} ?>"></i>Full concept</li>
									</ul>
									<div class="butn-pricing"><a href="#0"><span>Discover</span></a></div>
								</div>
							</div>
						</div>
					<?php } ?>

				</div>
			</div>
		</section>
		<!-- Promo video - Testiominals -->

		<?php include('footer.php'); ?>
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