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
    $g = $general->fetch_assoc();
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
        <!-- Contact -->
        <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title">Contact <span>Us</span></h2>
                    </div>
                </div>
                <div class="row mb-90">
                    <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Bauen Architecture Firm</b></p>
                        <p><?php echo $g['footer_text'] ?></p>
                        <p><b>VAT :</b> USA002323065B06</p>
                    </div>
                    <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Contact Details</b></p>
                        <p><b>Phone :</b><?php echo $g['phone'] ?></p>
                        <p><b>Email :</b> <?php echo $g['email'] ?></p>
                        <p><b>Address :</b> <?php echo $g['address'] ?></p>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Contact Form</b></p>
                        <form method="post" class="row" action="u_message.php">
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" placeholder="Full Name">
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" id="email" placeholder="Your Email">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" id="message" cols="40" rows="4" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="butn-dark mt-15 btn btn-lg" value="SEND">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Map Section -->
                <div class="row">
                    <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <?php echo $g['map'] ?>
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