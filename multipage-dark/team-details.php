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
        <!-- Team Details -->
        <?php

        $teams = $conn->query("SELECT team.*,department.department_name from team join department on team.department_id=department.id where team.id=" . $_GET['id']);

        $t = $teams->fetch_assoc();

        ?>
        <section class="team-details section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Team <span>Details</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-60">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="../NORA_FASHION/photo/<?php echo $t['photo'] ?>" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-7">
                                    <div class="text-content v-middle">
                                        <h3><?php echo $t['name'] ?></h3>
                                        <p><?php echo $t['department_name'] ?></p>
                                        <p>Arhitecture the sorem ac erat suscipit bibendum nulla facilisi sedeuter nunc voluna missiontion sapien veli, conseyer tureutionyer massa in libero semper sedeuter nunesapien vivenotions eros ut turpis interdum ornare.</p>
                                        <div class="team-details-info">
                                            <ul class="info-list clearfix">
                                                <li>
                                                    <div class="list-title">Age :</div>
                                                    <div class="list-description"><?php echo $t['age'] ?> Years</div>
                                                </li>
                                                <li>
                                                    <div class="list-title">Contact Me :</div>
                                                    <div class="list-description"><a href="tel:+12031230606" tabindex="0"><?php echo $t['contact'] ?></a></div>
                                                </li>
                                                <li>
                                                    <div class="list-title">Experience :</div>
                                                    <div class="list-description"><a href="tel:122-456-4567" tabindex="0"><?php echo $t['experience'] ?></a></div>
                                                </li>
                                                <li>
                                                    <div class="list-title">Email :</div>
                                                    <div class="list-description"><a href="mailto:jasonbrown@bauen.com"><?php echo $t['email'] ?></a></div>
                                                </li>
                                                <li>
                                                    <div class="list-title">Skills :</div>
                                                    <div class="list-description"><?php echo $t['skill'] ?></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="social-icons square">
                                            <li> <a href="#"><i class="ti-facebook"></i></a> </li>
                                            <li> <a href="#"><i class="ti-twitter"></i></a> </li>
                                            <li> <a href="#"><i class="ti-linkedin"></i></a> </li>
                                            <li> <a href="#"><i class="ti-pinterest"></i></a> </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-60">
                    <div class="col-md-12">
                        <h3 class="mb-15">My History</h3>
                        <p><?php echo $t['history'] ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Member -->
        <section class="team section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Other <span>Members</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 owl-carousel owl-theme">
                        <?php while ($tm = $team->fetch_assoc()) { ?>
                            <div class="item">
                                <a href="team-details.php?id=<?php echo $tm['id'] ?>"><img src="../NORA_FASHION/photo/<?php echo $tm['photo'] ?>" alt=""></a>
                                <div class="info">
                                    <h6><?php echo $tm['name'] ?></h6>
                                    <p><?php echo $tm['department_name'] ?></p>
                                    <div class="social valign">
                                        <div class="full-width">
                                            <p><?php echo $tm['skill'] ?></p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
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