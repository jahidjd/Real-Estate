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
<?php
include('connection.php');
$data = $general->fetch_assoc();

?>

<body>
	<!-- eta include korbo -->
	<!-- Promo video - Testiominals -->
	<section class="testimonials">
		<div class="background bg-img bg-fixed section-padding pb-0" data-background="img/banner2.jpg" data-overlay-dark="3">
			<div class="container">
				<div class="row">
					<!-- Promo video -->
					<div class="col-md-6">
						<div class="vid-area">
							<div class="vid-icon">
								<a class="play-button vid" href="https://youtu.be/RziCmLzpFNY">
									<svg class="circle-fill">
										<circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
									</svg>
									<svg class="circle-track">
										<circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
									</svg> <span class="polygon">
										<i class="ti-control-play"></i>
									</span> </a>
							</div>
							<div class="cont mt-15 mb-30">
								<h5>View promo video</h5>
							</div>
						</div>
					</div>
					<!-- Testiominals -->
					<div class="col-md-5 offset-md-1">
						<div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
							<div class="head-box">
								<h4>What Client's Say?</h4>
							</div>
							<div class="owl-carousel owl-theme">
								<?php while ($msg = $message->fetch_assoc()) { ?>
									<div class="item"> <span class="quote"><img src="img/quot.png" alt=""></span>
										<p><?php echo $msg['message'] ?></p>
										<div class="info">
											<div class="author-img"> <img src="img/team/1.jpg" alt=""> </div>
											<div class="cont">
												<h6><?php echo $msg['name']; ?></h6> <span><?php echo $msg['company_name']; ?></span>
											</div>
										</div>
									</div>
								<?php } ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Clients -->
	<section class="clients">
		<div class="container">
			<div class="row">
				<div class="col-md-7 owl-carousel owl-theme">
					<div class="clients-logo">
						<a href="#0"><img src="img/clients/1.png" alt=""></a>
					</div>
					<div class="clients-logo">
						<a href="#0"><img src="img/clients/2.png" alt=""></a>
					</div>
					<div class="clients-logo">
						<a href="#0"><img src="img/clients/3.png" alt=""></a>
					</div>
					<div class="clients-logo">
						<a href="#0"><img src="img/clients/4.png" alt=""></a>
					</div>
					<div class="clients-logo">
						<a href="#0"><img src="img/clients/5.png" alt=""></a>
					</div>
					<div class="clients-logo">
						<a href="#0"><img src="img/clients/6.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer -->
	<footer class="main-footer dark">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-30">
					<div class="item fotcont">
						<div class="fothead">
							<h6>Phone</h6>
						</div>
						<p><?php echo $data['phone'] ?></p>
					</div>
				</div>
				<div class="col-md-4 mb-30">
					<div class="item fotcont">
						<div class="fothead">
							<h6>Email</h6>
						</div>
						<p><?php echo $data['email'] ?></p>
					</div>
				</div>
				<div class="col-md-4 mb-30">
					<div class="item fotcont">
						<div class="fothead">
							<h6>Our Address</h6>
						</div>
						<p><?php echo $data['address'] ?></p>
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