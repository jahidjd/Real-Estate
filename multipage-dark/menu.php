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
	<div id="preloader"></div>
	<!-- Progress scroll totop -->
	<div class="progress-wrap cursor-pointer">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg">
		<?php
		include('connection.php');
		$data = $general->fetch_assoc();

		?>
		<!-- Logo -->
		<div class="logo-wrapper valign">
			<div class="logo">
				<a href="index.php">
					<img src="../NORA_FASHION/photo/<?php echo $data['logo']; ?>" class="logo-img" alt="">
					<h2><?php echo $data['logo_text_big'] ?><span><?php echo $data['logo_text'] ?></span></h2>
				</a>
			</div>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link " href="about.php">About</a></li>
				<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
				<li class="nav-item dropdown"> <span class="nav-link"> Projects <i class="ti-angle-down"></i></span>
					<ul class="dropdown-menu last">
						<!-- <li class="dropdown-item"><a href="projects.php">Projects 01</a></li>
						<li class="dropdown-item"><a href="projects2.php">Projects 02</a></li>
						<li class="dropdown-item"><a href="projects3.php">Projects 03</a></li> -->
						<li class="dropdown-item"><a href="projects4.php">Project</a></li>
						<li class="dropdown-item"><a href="project-gallery.php">Project Gallery</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown"> <span class="nav-link"> Pages <i class="ti-angle-down"></i></span>
					<ul class="dropdown-menu last">
						<li class="dropdown-item"><a href="pricing.php">Pricing</a></li>
						<li class="dropdown-item"><a href="team.php">Team</a></li>
						<li class="dropdown-item"><a href="testimonials.php">Testimonials</a></li>
						<!-- <li class="dropdown-item"><a href="faqs.php">Faqs</a></li> -->
						<li class="dropdown-item"><a href="gallery.php">Gallery</a></li>
						<!-- <li class="dropdown-item"><a href="video-gallery.php">Video Gallery</a></li> -->
						<li class="dropdown-item"><a href="process.php">Process</a></li>
						<!-- <li class="dropdown-item"><a href="coming-soon.php">Coming Soon</a></li> -->
						<!-- <li class="dropdown-item"><a href="not-found-404.php">404 Page</a></li> -->
						<!-- Dropdown 3. level
						<li class="dropdown-item"><span>Dropdown 2 <i class="ti-angle-right"></i></span>
                            <ul class="sub-menu">
                                <li class="dropdown-item"><a href="#">Dropdown 3</a></li>
                                <li class="dropdown-item"><a href="#">Dropdown 3</a></li>
                            </ul>
                        </li>
                        -->
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
			</ul>
		</div>
	</nav>
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