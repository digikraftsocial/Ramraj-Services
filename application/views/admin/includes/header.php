<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- favicons Icons -->

    <meta name="description" content="Agriculture, Training, Employment, Distribution, Ecommerce, Retail and Wholesale">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/odometer.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jarallax.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/agrikon-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nouislider.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nouislider.pips.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- template styles -->
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="<?php echo base_url(); ?>assets/images/loader.png" alt="">
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">

        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="https://www.facebook.com/Ramrajservices/" target="_blank" class="fab fa-facebook-square"></a>

                            <a href="https://www.instagram.com/ramrajservices/" target="_blank" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <p></p>
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <div class="dropdownt">
                            <a href="mailto:ramrajservices@gmail.com" target="_blank"><i class="agrikon-icon-email"></i>info@ramrajservices.in</a>
                        </div>

                        <div class="dropdownt">
                            <a href="https://registration.ramrajservices.com/" target="_blank">Register Now</a>
                        </div>

                        <!-- <a href="https://registration.ramrajservices.com/former-registration/" target="_blank">Register as Farmer</a> -->

                        <div class="dropdownt">
                            <a class="dropbtnt"><i class="fab fa-android"></i>Download Apps</a>
                            <div class="dropdownt-content">
                                <a href="https://play.google.com/store/apps/details?id=seller.ramrajservices.com" target="_blank">Ramraj Seller App</a>
                                <a href="https://play.google.com/store/apps/details?id=connect.ramrajservices.com" target="_blank">Ramraj Connect App</a>
                                <a href="https://play.google.com/store/apps/details?id=logistics.ramrajservices.com" target="_blank">Ramraj Logistix App</a>
                                <a href="https://play.google.com/store/apps/details?id=com.ramrajservices" target="_blank">Ramraj Ecommerce App</a>
                            </div>
                        </div>

                        <!-- <a href="https://play.google.com/store/apps/details?id=com.ramrajservices" target="_blank"><i class="fab fa-android"></i>Download App</a> -->

                        <div class="dropdownt">
                            <a href="<?php echo base_url('Admin/career'); ?>" target="_blank">Career</a>
                        </div>
                        <div class="dropdownt">
                            <a href="<?php echo base_url('Admin/contact'); ?>" target="_blank">Contact</a>
                        </div>
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->



            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="<?php echo base_url('Admin'); ?>" aria-label="logo image"><img src="<?php echo base_url(); ?>assets/images/ramraj_logo.png" width="153" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="<?php echo base_url('Admin'); ?>">Home</a>
                        </li>
                        <li class="dropdown"><a href="<?php echo base_url('Admin/aboutus'); ?>">About Us</a>

                        </li>
                        <li class="dropdown"><a>Our Platforms</a>
                            <ul>
                                <li><a href="<?php echo base_url('Services/ramrajseller'); ?>">Ramraj Seller</a></li>
                                <li><a href="<?php echo base_url('Services/ramrajconnect'); ?>">Ramraj Connect</a></li>
                                <li><a href="<?php echo base_url('Services/ramrajlogistics'); ?>">Ramraj Logistics</a></li>
                                <li><a href="<?php echo base_url('Services/ramrajecommerce'); ?>">Ramraj Ecommerce</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url('Admin/franchise'); ?>">Franchise</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url('Admin/news'); ?>">News and Events</a>
                        </li>

                    </ul>
                    <!-- /.main-menu__list -->

                    <div class="main-header__info">

                        <a href="tel:1800 8891689" class="main-header__info-phone">
                            <i class="agrikon-icon-phone-call"></i>
                            <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text">Toll Free No.</span>
                                <span class="main-header__info-phone-title">1800 889 1689</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->