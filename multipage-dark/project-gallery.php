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
		<section class="banner-header banner-img bg-img bg-fixed pb-0" data-background="img/banner.jpg" data-overlay-darkgray="5">
			<!-- Left Panel -->
			<div class="left-panel"></div>
		</section>
		<!-- Project Gallery -->
		<section class="section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="section-title">Project <span>Gallery</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="bauen-gallery-filter">
							<li class="active" data-filter="*">All</li>
							<li data-filter=".projects-progress">Projects in Progress</li>
							<li data-filter=".completed-projects">Completed Projects</li>
						</ul>
					</div>
				</div>
				<div class="row bauen-gallery-items">
					<div class="masonry-items">
						<?php
						$complete = 1;

						while ($pp = $project_photo->fetch_assoc()) {
							$complete++;
							if ($complete % 2 == 0) {
						?>
								<div class="col-md-6 gallery-masonry-wrapper single-item projects-progress">
									<a href="../NORA_FASHION/photo/<?php echo $pp['photo'] ?>" title="<?php echo $pp['title'] ?>" class="gallery-masonry-item-img-link img-zoom">
										<div class="gallery-box">
											<div class="gallery-img"> <img src="../NORA_FASHION/photo/<?php echo $pp['photo'] ?>" class="img-fluid mx-auto d-block" alt="work-img"> </div>
											<div class="gallery-masonry-item-img"></div>
											<div class="gallery-masonry-item-content">
												<h4 class="gallery-masonry-item-title"><?php echo $pp['c_name'] ?></h4>
												<div class="gallery-masonry-item-category"><?php echo $pp['title'] ?></div>
											</div>
										</div>
									</a>
								</div>
							<?php } else { ?>
								<div class="col-md-6 gallery-masonry-wrapper single-item completed-projects">
									<a href="../NORA_FASHION/photo/<?php echo $pp['photo'] ?>" title="<?php echo $pp['title'] ?>" class="gallery-masonry-item-img-link img-zoom">
										<div class="gallery-box">
											<div class="gallery-img"> <img src="../NORA_FASHION/photo/<?php echo $pp['photo'] ?>" class="img-fluid mx-auto d-block" alt="work-img"> </div>
											<div class="gallery-masonry-item-img"></div>
											<div class="gallery-masonry-item-content">
												<h4 class="gallery-masonry-item-title"><?php echo $pp['c_name'] ?></h4>
												<div class="gallery-masonry-item-category"><?php echo $pp['title'] ?></div>
											</div>
										</div>
									</a>
								</div>

						<?php
							}
						} ?>


					</div>
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