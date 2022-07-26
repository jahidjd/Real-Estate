<?php
include('menu.php');
include('connection.php');
?>
<!-- Slider -->
<header class="header slider-fade">
	<div class="owl-carousel owl-theme">
		<!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
		<?php while ($sl = $slider->fetch_assoc()) { ?>
			<div class="text-right item bg-img" data-overlay-dark="3" data-background="../NORA_FASHION/photo/<?php echo $sl['photo'] ?>">
				<div class="v-middle caption mt-30">
					<div class="container">
						<div class="row">
							<div class="col-md-7 offset-md-5">
								<h1><?php echo $sl['title'] ?></h1>
								<p><?php echo $sl['brief'] ?>
								</p>
								<div class="butn-light mt-30 mb-30"><a href="<?php echo $sl['action_url'] ?>"><span>Buy Now</span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

	</div>
	<!-- Corner -->
	<div class="hero-corner"></div>
	<div class="hero-corner3"></div>
	<!-- Left Panel -->
	<div class="left-panel">
		<ul class="social-left clearfix">
			<li><a href="#"><i class="ti-pinterest"></i></a></li>
			<li><a href="#"><i class="ti-instagram"></i></a></li>
			<li><a href="#"><i class="ti-twitter"></i></a></li>
			<li><a href="#"><i class="ti-facebook"></i></a></li>
		</ul>
	</div>
</header>
<!-- Content -->
<div class="content-wrapper">
	<!-- Lines -->
	<section class="content-lines-wrapper">
		<div class="content-lines-inner">
			<div class="content-lines"></div>
		</div>
	</section>
	<!-- About -->
	<section class="about section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
					<h2 class="section-title">About <span>Bauen</span></h2>
					<p><?php echo $data['about_text']; ?></p>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
					<div class="about-img">
						<div class="img"> <img src="../NORA_FASHION/photo/<?php echo $data['about_photo'] ?>" class="img-fluid" alt=""> </div>
						<div class="about-img-2 about-buro">Dhaka Office</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Projects -->

	<section class="projects section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Our <span>Projects</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme">
						<?php

						while ($pro = $project->fetch_assoc()) { ?>
							<div class="item">
								<div class="position-re o-hidden"> <img src="../NORA_FASHION/photo/<?php echo $pro['photo'] ?>" alt=""> </div>
								<div class="con">
									<h6><a href="project_details.php?id=<?php echo $pro['id'] ?>"><?php echo $pro['c_title'] ?></a></h6>
									<h5><a href="project_details.php?id=<?php echo $pro['id'] ?>"><?php echo $pro['c_name'] ?></a></h5>
									<div class="line"></div> <a href="cotton-house.php?id=<?php echo $pro['id'] ?>"><i class="ti-arrow-right"></i></a>
								</div>
							</div>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services -->
	<?php
	$conn = new mysqli('localhost', 'root', '', 'nora');

	$s = $conn->query("SELECT * FROM service WHERE status='active' limit 3");

	?>

	<section class="services section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Our <span>Services</span></h2>
				</div>
			</div>
			<div class="row">
				<?php while ($srv = $s->fetch_assoc()) { ?>
					<div class="col-md-4">
						<div class="item">
							<a href="architecture.php?id=<?php echo $srv['id'] ?>"> <img src="../NORA_FASHION/photo/<?php echo $srv['service_icon'] ?>" alt="">
								<h5><?php echo $srv['title'] ?></h5>
								<div class="line"></div>
								<p><?php echo $srv['details'] ?></p>
								<div class="numb"><?php echo $srv['number'] ?></div>
							</a>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</section>
	<!-- Blog -->
	<section class="bauen-blog section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Current <span>News</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme">
						<?php while ($news = $blog->fetch_assoc()) { ?>
							<div class="item">
								<div class="position-re o-hidden"> <img src="../NORA_FASHION/photo/<?php echo $news['blog_photo'] ?>" alt=""> </div>
								<div class="con">
									<span class="category">
										<a href="blog.php?id=<?php echo $news['id'] ?>"><?php echo $news['category_name'] ?> </a> - <?php echo $news['date'] ?>
									</span>
									<h5><a href="post.php?id=<?php echo $news['id'] ?>"><?php echo $news['blog_category'] ?></a></h5>
								</div>
							</div>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	include('footer.php');
	?>