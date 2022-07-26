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
    $about = $general->fetch_assoc();

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
        <!-- About -->
        <section class="about section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title">About <span>Bauen</span></h2>
                        <p><?php echo $about['about_text'] ?></p>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="about-img">
                            <div class="img"> <img src="../NORA_FASHION/photo/<?php echo $about['about_photo'] ?>" class="img-fluid" alt=""> </div>
                            <div class="about-img-2 about-buro">Dhaka Office</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team -->

        <section class="team section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Our <span>Team</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 owl-carousel owl-theme">
                        <?php while ($membar = $team->fetch_assoc()) { ?>
                            <div class="item">
                                <div class="img"> <a href="team-details.php?id=<?php echo $membar['id'] ?>"><img src="../NORA_FASHION/photo/<?php echo $membar['photo'] ?>" alt=""></a> </div>
                                <div class="info">
                                    <h6><?php echo $membar['name'] ?></h6>
                                    <p><?php echo $membar['department_name'] ?></p>
                                    <div class="social valign">
                                        <div class="full-width">
                                            <p><?php echo $membar['skill'] ?></p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- Promo video - Testiominals -->
        <?php
        include('footer.php');
        ?>
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