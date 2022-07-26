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
		<!-- Post -->
		<?php
		$blog = $conn->query("SELECT blog.*,blog_category.blog_category,blog_category.category_name FROM blog JOIN blog_category ON blog.blog_category_id=blog_category.id WHERE blog.id=" . $_GET['id']);
		$post = $blog->fetch_assoc();

		?>
		<section class="pb-90">
			<div class="container">
				<div class="row">
					<div class="col-md-12"> <img src="../NORA_FASHION/photo/<?php echo $post['blog_photo'] ?>" class="mb-30" alt="">
						<h2 class="section-title2"><?php echo $post['blog_category'] ?></h2>
						<p><?php echo $post['blog_details'] ?></p>
					</div>
				</div>

			</div>
		</section>
		<!-- Footer -->
		<?php
		$g = $general->fetch_assoc();
		?>
		<footer class="main-footer dark">
			<div class="container">
				<div class="row">
					<div class="col-md-4 mb-30">
						<div class="item fotcont">
							<div class="fothead">
								<h6>Phone</h6>
							</div>
							<p><?php echo $g['phone'] ?></p>
						</div>
					</div>
					<div class="col-md-4 mb-30">
						<div class="item fotcont">
							<div class="fothead">
								<h6>Email</h6>
							</div>
							<p><?php echo $g['email'] ?></p>
						</div>
					</div>
					<div class="col-md-4 mb-30">
						<div class="item fotcont">
							<div class="fothead">
								<h6>Our Address</h6>
							</div>
							<p><?php echo $g['address'] ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="text-left">
								<p>© 2022 Bauen. All right reserved.</p>
							</div>
						</div>
						<div class="col-md-4 abot">
							<div class="social-icon"> <a href="index.php"><i class="ti-facebook"></i></a> <a href="index.php"><i class="ti-twitter"></i></a> <a href="index.php"><i class="ti-instagram"></i></a> <a href="index.php"><i class="ti-pinterest"></i></a> </div>
						</div>
						<div class="col-md-4">
							<p class="right"><a href="#">Terms &amp; Conditions</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
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