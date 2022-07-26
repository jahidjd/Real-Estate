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
		<!-- Process -->
		<section class="process section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
						<h2 class="section-title">Work <span>Process</span></h2>
					</div>
				</div>
				<div class="row text-center mt-60 mb-60">
					<?php
					$tobotm = 0;
					while ($p = $process->fetch_assoc()) {
						$tobotm++;
						if ($tobotm %= 2) {
					?>
							<div class="col-md-3">
								<div class="item first"> <img src="../NORA_FASHION/photo/<?php echo $p['arrow'] ?>" class="tobotm" alt=""> <span class="<?php echo $p['icon'] ?>"></span>
									<div class="cont">
										<h6><?php echo $p['p_name'] ?></h6>
										<div class="line"></div>
										<p><?php echo $p['details'] ?></p>
										<h3><?php echo $p['number'] ?></h3>
									</div>
								</div>
							</div>
						<?php } else { ?>
							<div class="col-md-3">
								<div class="item odd mb-md50"> <img src="../NORA_FASHION/photo/<?php echo $p['arrow'] ?>" alt=""> <span class="<?php echo $p['icon'] ?>"></span>
									<div class="cont">
										<h3><?php echo $p['number'] ?></h3>
										<h6><?php echo $p['p_name'] ?></h6>
										<div class="line"></div>
										<p><?php echo $p['details'] ?></p>
									</div>
								</div>
							</div>
					<?php }
					} ?>

				</div>
			</div>
		</section>
		<!-- Promo video - Testiominals -->
		<?php
		include('footer.php');
		?>