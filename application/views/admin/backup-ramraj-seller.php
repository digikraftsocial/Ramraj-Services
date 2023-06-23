<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramraj-Seller</title>
    <?php $this->load->view('admin/includes/css'); ?>
</head>

<body>

    <!--------------  HEADER ------------>

    <?php $this->load->view('admin/includes/header'); ?>

    <section class="main-slider main-slider__two">
        <div class="main-slider__line-1"></div><!-- /.main-slider__line-1 -->
        <div class="main-slider__line-2"></div><!-- /.main-slider__line-2 -->
        <div class="main-slider__line-3"></div><!-- /.main-slider__line-3 -->
        <div class="main-slider__line-4"></div><!-- /.main-slider__line-4 -->
        <div class="main-slider__line-5"></div><!-- /.main-slider__line-5 -->
        <div class="main-slider__line-6"></div><!-- /.main-slider__line-6 -->
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{
"slidesPerView": 1,
"loop": true,
"effect": "fade",
"autoplay": {
    "delay": 5000
},
"navigation": {
    "nextEl": "#main-slider__swiper-button-next",
    "prevEl": "#main-slider__swiper-button-prev"
}
}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(<?php echo base_url(); ?>assets/images/main-slider/main-slider-2-1.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <span class="tagline">Welcome to Ramraj Services</span>
                                <h2>Ramraj Seller</h2>
                                <p>If You Are Ready To Take Your Business To The Next Level,<br>We Invite You To Join Our Community Of Sellers. Simply Sign Up And Start Selling Today!</p>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="footer-widget">
                                        <form class="form-inline" action="#">
                                            <div class="form-group">
                                                <input type="tel" class="form-control" id="number" placeholder="Phone No." name="phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="bt" placeholder="Business Type" name="bt">
                                            </div>
                                            <div class="form-group">
                                                <a href="#" class="thm-btn">Discover More</a>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container thm-swiper__slider -->
    </section><!-- /.main-slider -->

    <section class="aboutlp">
        <img src="<?php echo base_url(); ?>assets/images/icons/video-bg-1-1.png" class="video-one__bg" alt="">
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col-lg-6">
                    <div class="abot__image text-center">
                        <img src="<?php echo base_url(); ?>assets/images/resources/login_register.png" alt="" class="w-100 mt-80 mb-80">
                    </div><!-- /.abot__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="aboutlp__content">
                        <div class="block-title">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>our approach</p>
                            <h3>About Us</h3>
                        </div><!-- /.block-title -->
                        <div class="aboutlp__summery">
                            <p>Ramraj Services Pvt. Ltd. Is focused on "Transforming the nation
                                into a developed country". Ramraj Services is ready to help you to
                                reach a mass audience for you.

                                Our aim is to establish a Phygital (Physical + Digital) Platform to
                                connect businesses and consumers worldwide to provide them
                                with best of products and services at their doorstep.
                            </p>
                        </div><!-- /.aboutlp__summery -->
                    </div><!-- /.aboutlp__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.aboutlp -->

    <section class="module">
        <div class="container">
            <div class="block-title">
                <div class="block-title__image"></div><!-- /.block-title__image -->
                <p>Ramraj Packages</p>
                <h3>Seller Modules</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="module__box">
                        <i class="agrikon-icon-tractor-1"></i>
                        <p>Module 01</p>
                        <h3>Manufacturer</h3>
                    </div><!-- /.module__box -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-4">
                    <div class="module__box">
                        <i class="agrikon-icon-agriculture"></i>
                        <p>Module 02</p>
                        <h3>Wholesaler</h3>
                    </div><!-- /.module__box -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-4">
                    <div class="module__box">
                        <i class="agrikon-icon-farmer"></i>
                        <p>Module 03</p>
                        <h3>Retailer</h3>
                    </div><!-- /.module__box -->
                </div><!-- /.col-md-12 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.module -->

    <!-- manufacturer's features & benefits-->

    <section class="manufacturer">
        <div class="container">
            <div class="row pt-5 align-items-center">
                <div class="col-lg-6">
                    <div class="manufacturer__image">
                        <img src="<?php echo base_url(); ?>assets/images/resources/Manufacturer_Mobiledashboard.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="manufacturer__content">
                        <div class="block-title">
                            <h3>Mobile Application</h3>
                        </div>
                        <ul class="list-unstyled manufacturer__list">
                            <li>
                                <h3 class="manufacturerlist-title">Product Management</h3>
                                <p class="manufacturerlist-para">Area - Wholesaler Connectivity across india</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Order Management</h3>
                                <p class="manufacturerlist-para">Online order status</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Account Management</h3>
                                <p class="manufacturerlist-para">Edit products price at any time</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Logistics Management</h3>
                                <p class="manufacturerlist-para">Generate Offers for wholesaler to increase sale</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Bill Generation Tool</h3>
                                <p class="manufacturerlist-para">Logistics Support</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Wholesaler Details</h3>
                                <p class="manufacturerlist-para">Product Inventory Management</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="manufacturer__content">
                        <div class="block-title">
                            <h3>Website Panel</h3>
                        </div>
                        <ul class="list-unstyled manufacturer__list">
                            <li>
                                <h3 class="manufacturerlist-title">Admin Offer & Schemes</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Wallet</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Subscription</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Reports</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Live Support</h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="manufacturer__image text-right">
                        <img src="<?php echo base_url(); ?>assets/images/resources/Manufacturer_Websitedashboard.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- wholesaler's features & benefits-->

    <section class="wholesaler">
        <div class="container">
            <div class="row pt-5 align-items-center">
                <div class="col-lg-6">
                    <div class="wholesaler__image">
                        <img src="<?php echo base_url(); ?>assets/images/resources/Wholesaler-Mobiledashboard.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wholesaler__content">
                        <div class="block-title">
                            <h3>Mobile Application</h3>
                        </div>
                        <ul class="list-unstyled wholesaler__list">
                            <li>
                                <h3 class="wholesalerlist-title">Product Management</h3>
                                <p class="wholesalerlist-para">Retailer Connectivity</p>
                            </li>
                            <li>
                                <h3 class="wholesalerlist-title">Order Management</h3>
                                <p class="wholesalerlist-para">Online order status</p>
                            </li>
                            <li>
                                <h3 class="wholesalerlist-title">Account Management</h3>
                                <p class="wholesalerlist-para">Edit products price at any time</p>
                            </li>
                            <li>
                                <h3 class="wholesalerlist-title">Logistics Management</h3>
                                <p class="wholesalerlist-para">Offers for wholesaler to increase sale</p>
                            </li>
                            <li>
                                <h3 class="wholesalerlist-title">Manufacturer & Manufacturer Product Details</h3>
                                <p class="wholesalerlist-para">Product Inventory Management</p>
                            </li>
                            <li>
                                <h3 class="wholesalerlist-title">Bill Generation Tool</h3>
                                <p class="wholesalerlist-para">Multiple products from manufacturer in all category</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="wholesaler__content">
                        <div class="block-title">
                            <h3>Website Panel</h3>
                        </div>
                        <ul class="list-unstyled wholesaler__list">
                            <li>
                                <h3 class="wholesalerlist-title">Retailers Details</h3>
                                <p class="wholesalerlist-para">Logistics Support</p>
                            </li>
                            <li>
                                <h3 class="wholesalerlist-title">Admin Offer & Schemes </h3>
                                <p class="wholesalerlist-para">Manufacturer Connectivity across India</p>
                            </li>
                            <li>
                                <h3 class="wholesalerlist-title">Wallet, SMS & Subscription</h3>
                            </li>
                            <li>
                                <h3 class="wholesalerlist-title">Reports</h3>
                            </li>
                            <li>
                                <h3 class="wholesalerlist-title">Live Support</h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="wholesaler__image text-right">
                        <img src="<?php echo base_url(); ?>assets/images/resources/Wholesaler-Websitedashboard.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- retailer's features & benefits-->

    <section class="retailer">
        <div class="container">
            <div class="row pt-5 align-items-center">
                <div class="col-lg-6">
                    <div class="retailer__image">
                        <img src="<?php echo base_url(); ?>assets/images/resources/Retailer-Mobiledashboard.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="retailer__content">
                        <div class="block-title">
                            <h3>Mobile Application</h3>
                        </div>
                        <ul class="list-unstyled retailer__list">
                            <li>
                                <h3 class="manufacturerlist-title">Shop Slider Setting</h3>
                                <p class="manufacturerlist-para">Wholesaler Connectivity</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Product Shop Inventory and Catalogue</h3>
                                <p class="manufacturerlist-para">Online order status</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Order Management</h3>
                                <p class="manufacturerlist-para">Edit products price at any time</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Purchase from wholesaler</h3>
                                <p class="manufacturerlist-para">Offers for customer/service provider to increase sale</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Delivery option - wholesaler to Retailer</h3>
                                <p class="manufacturerlist-para">Product Inventory Management</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Wholesaler to customer, retailer to customer.</h3>
                                <p class="manufacturerlist-para">Logistics Support</p>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Bill Generation Tool</h3>
                                <p class="manufacturerlist-para">Multiple products from wholesaler in all category</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="retailer__content">
                        <div class="block-title">
                            <h3>Website Panel</h3>
                        </div>
                        <ul class="list-unstyled retailer__list">
                            <li>
                                <h3 class="manufacturerlist-title">Copan and code</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">SMS</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Advertisement</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Account Management</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Wallet</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Subscription</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Service Management</h3>
                            </li>
                            <li>
                                <h3 class="manufacturerlist-title">Reports</h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="retailer__image text-right">
                        <img src="<?php echo base_url(); ?>assets/images/resources/Retailer-Websitedashboard.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- new service provider section -->

    <section class="featureslp text-center">
        <div class="container">
            <div class="block-title">
                <div class="block-title__image" id="block-title__image"></div><!-- /.block-title__image -->
                <p>key elements</p>
                <h3>Features</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="featureslp__box">
                        <i class="agrikon-icon-farmer"></i>
                        <h4>Stock/ Purchase Management</h4>
                    </div><!-- /.featureslp__box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="featureslp__box">
                        <i class="agrikon-icon-agriculture"></i>
                        <h4>Complete Order Management</h4>
                    </div><!-- /.featureslp__box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="featureslp__box">
                        <i class="agrikon-icon-agriculture-1"></i>
                        <h4>Product/ Catalogue Management</h4>
                    </div><!-- /.featureslp__box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="featureslp__box">
                        <i class="agrikon-icon-agriculture-2"></i>
                        <h4>Reports and Analysis </h4>
                    </div><!-- /.featureslp__box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="featureslp__box">
                        <i class="agrikon-icon-planting"></i>
                        <h4>Connection across all over India</h4>
                    </div><!-- /.featureslp__box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="featureslp__box">
                        <i class="agrikon-icon-shopping-cart"></i>
                        <h4>Hand to Hand Service</h4>
                    </div><!-- /.featureslp__box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="featureslp__box">
                        <i class="agrikon-icon-customer"></i>
                        <h4>Multiple Sellers all over India</h4>
                    </div><!-- /.featureslp__box -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="featureslp__box">
                        <i id="truck" class="fal fa-truck"></i><!-- <i class="agrikon-icon-delivery"></i> -->
                        <h4>Logistics Management</h4>
                    </div><!-- /.featureslp__box -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.featureslp -->

    <section class="seller">
        <img src="<?php echo base_url(); ?>assets/images/icons/team-bg-1-1.png" alt="" class="seller__bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-5">
                    <div class="seller__content">
                        <div class="block-title">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>meet the sellers</p>
                            <h3>Expert Sellers</h3>
                        </div><!-- /.block-title -->
                        <div class="seller__summery">
                            <p>Look no further than our expert sellers! Our sellers has years of experience in the industry and a keen eye for sourcing only the best products for our customers.</p>

                        </div><!-- /.seller__summery -->

                        <!-- If we need navigation buttons -->
                        <div class="seller__nav">
                            <div class="swiper-button-prev" id="seller__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                            </div>
                            <div class="swiper-button-next" id="seller__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                        </div><!-- /.seller__nav -->

                    </div><!-- /.seller__content -->
                </div><!-- /.col-md-12 col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="seller__carousel-wrap">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "slidesPerGroup": 1, "autoplay": { "delay": 5000 }, "navigation": {
    "nextEl": "#seller__swiper-button-next",
    "prevEl": "#seller__swiper-button-prev"
},"breakpoints": {
    "0": {
        "spaceBetween": 0,
        "slidesPerView": 1,
        "slidesPerGroup": 1
    },
    "640": {
        "spaceBetween": 30,
        "slidesPerView": 2,
        "slidesPerGroup": 2
    },
    "992": {
        "spaceBetween": 30,
        "slidesPerView": 3,
        "slidesPerGroup": 3
    },
    "1200": {
        "spaceBetween": 30,
        "slidesPerView": 3,
        "slidesPerGroup": 3
    }
}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url(); ?>assets/images/team/RK-mishra.png" alt="Mr. RK Mishra">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Mr. Raj Kumar Mishra</h3>
                            <h6>Maa Kamaashi Khad Beej Bhandaar</h6>
                            <p>Wholesale Partner</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url(); ?>assets/images/team/satish-kumar-mishra.png" alt="Mr. SK Mishra">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Mr. Satish Kumar Mishra</h3>
                            <h6>Shree Aura Producer Company Ltd.</h6>
                            <p>Wholesale Partner</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url(); ?>assets/images/team/BN-tripathi.png" alt="Mr. BN Tripathi">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Mr. B.N Tripathi</h3>
                            <h6>Agri Junction</h6>
                            <p>Retail Partner</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url(); ?>assets/images/team/phool-singh-pal.png" alt="Mr. Phool Singh Pal">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Mr. Phool Singh Pal</h3>
                            <h6>Agri Junction Deeh</h6>
                            <p>Retail Partner</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url(); ?>assets/images/team/manish-sahu.png" alt="Mr. Manish Sahu">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Mr. Manish Sahu</h3>
                            <h6>CSC Centre</h6>
                            <p>Retail Partner</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->

            </div><!-- /.thm-swiper__slider -->
        </div><!-- /.seller__carousel-wrap -->
    </section><!-- /.seller -->

    <section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">
        <img class="call-to-action__bg jarallax-img" src="<?php echo base_url(); ?>assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
        <!-- /.call-to-action__bg -->
        <div class="container">
            <div class="call-to-action__content">
                <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
                <h3>We're popular leader in agriculture
                    market globally</h3>
            </div><!-- /.call-to-action__content -->
            <div class="call-to-action__button">
                <a href="https://seller.ramrajservices.com/" class="thm-btn">Discover More</a><!-- /.thm-btn -->
            </div><!-- /.call-to-action__button -->
        </div><!-- /.container -->
    </section><!-- /.call-to-action -->

    <section class="stats home-one__boxed">
        <section class="statsline">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="statsline__single">
                            <i class="agrikon-icon-tractor-1"></i>
                            <h3><span class="odometer" data-count="30">00</span>+</h3>
                            <p>Manufacturer</p>
                        </div><!-- /.statsline__single -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="statsline__single">
                            <i class="agrikon-icon-agriculture"></i>
                            <h3><span class="odometer" data-count="50">00</span>+</h3>
                            <p>Wholesaler</p>
                        </div><!-- /.statsline__single -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="statsline__single">
                            <i class="agrikon-icon-farmer"></i>
                            <h3><span class="odometer" data-count="500">00</span>+</h3>
                            <p>Retailer</p>
                        </div><!-- /.statsline__single -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.statsline -->
    </section><!-- /.stats -->

    <?php $this->load->view('admin/includes/footer'); ?>

</body>

</html>