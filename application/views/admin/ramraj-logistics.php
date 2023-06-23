<html>

<head>
    <meta charset="utf-8">
    <title>Ramraj Logistics</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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
                                <h2>Ramraj Logistics</h2>
                                <p>"Optimize your operations and reduce costs with our innovative logistics platform,<br>empowering your business to achieve greater productivity and customer satisfaction."</p>
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

    <section class="about-connectlp">
        <img src="<?php echo base_url(); ?>assets/images/icons/about-2-bg-1.png" alt="" class="about-connectlp__bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-connectlp__images">
                        <img src="<?php echo base_url(); ?>assets/images/resources/Ramraj_Logistix.jpg" alt="">
                    </div><!-- /.about-connectlp__images -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="about-connectlp__content">
                        <div class="block-title">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>Our approach</p>
                            <h3>About Us</h3>
                        </div><!-- /.block-title -->
                        <div class="about-connectlp__summery">
                            <p>Ramraj Services Pvt. Ltd. Is focused on "Transforming the nation
                                into a developed country". Ramraj Services is ready to help you to
                                reach a mass audience for you.
                                Our aim is to establish a Phygital (Physical + Digital) Platform to
                                connect businesses and consumers worldwide to provide them
                                with best of products and services at their doorstep.</p>
                        </div><!-- /.about-connectlp__summery -->
                        <img src="<?php echo base_url(); ?>assets/images/resources/sign-1-1.png" alt="">
                    </div><!-- /.about-connectlp__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-connectlp -->

    <section class="module">
        <div class="container">
            <div class="block-title">
                <div class="block-title__image"></div><!-- /.block-title__image -->
                <p>Ramraj Packages</p>
                <h3>Logistics Modules</h3>
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

    <section class="spmbenefits">
        <img src="<?php echo base_url(); ?>assets/images/icons/team-bg-1-1.png" alt="" class="spmbenefits__bg">
        <div class="container">
            <div class="row">
                <div class="spmbenefits__content">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="block-title">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>Mobile & Web Panel</p>
                            <h3>Features & Benefits</h3>
                        </div><!-- /.block-title -->
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="spmbenefits__nav">
                        <div class="swiper-button-prev" id="spmbenefits__swiper-button-prev"><i class="agrikon-icon-left-arrow"></i></div>
                        <div class="swiper-button-next" id="spmbenefits__swiper-button-next"><i class="agrikon-icon-right-arrow"></i></div>
                    </div>
                    <!-- /.seller__nav -->
                </div>
            </div>
            <div class="row spmbenefits__box">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="spmbenefits__carousel-wrap">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "slidesPerGroup": 1, "autoplay": { "delay": 5000 }, "navigation": {
                            "nextEl": "#spmbenefits__swiper-button-next",
                            "prevEl": "#spmbenefits__swiper-button-prev"
                            },"breakpoints": {
                                "0": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1,
                                    "slidesPerGroup": 1
                                },
                                "640": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1,
                                    "slidesPerGroup": 1
                                },
                                "992": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1,
                                    "slidesPerGroup": 1
                                },
                                "1200": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1,
                                    "slidesPerGroup": 1
                                }
                            }}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- <div class="team-card"> -->
                                    <div class="team-card__image">
                                        <img src="<?php echo base_url(); ?>assets/images/resources/Manufacturer_Logistics.jpg" alt="Manufacturer Logistics">
                                        <caption class="text-center"><b>Manufacturer Logistics</b></caption>
                                    </div><!-- /.team-card__image -->
                                    <!-- </div> -->
                                    <!-- /.team-card -->
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <!-- <div class="team-card"> -->
                                    <div class="team-card__image">
                                        <img src="<?php echo base_url(); ?>assets/images/resources/Wholesaler_Logistics.jpg" alt="Wholesaler Logistics">
                                        <caption class="text-center"><b>Wholesaler Logistics</b></caption>
                                    </div><!-- /.team-card__image -->
                                    <!-- </div> -->
                                    <!-- /.team-card -->
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <!-- <div class="team-card"> -->
                                    <div class="team-card__image">
                                        <img src="<?php echo base_url(); ?>assets/images/resources/Retailer_Logistics.jpg" alt="Retailer Logistics">
                                        <caption class="text-center"><b>Retailer Logistics</b></caption>
                                    </div><!-- /.team-card__image -->
                                    <!-- </div> -->
                                    <!-- /.team-card -->
                                </div><!-- /.swiper-slide -->
                            </div><!-- /.swiper-wrapper -->

                        </div><!-- /.thm-swiper__slider -->
                    </div><!-- /.spmbenefits__carousel-wrap -->
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="spmbenefits__content">
                        <div class="spmbenefits__summery">
                            <ul>
                                <li>
                                    <p>Product Management</p>
                                </li>
                                <li>
                                    <p>Order Management</p>
                                </li>
                                <li>
                                    <p>Account Management</p>
                                </li>
                                <li>
                                    <p>Logistics Management</p>
                                </li>
                                <li>
                                    <p>Bill Generation Tool</p>
                                </li>
                                <li>
                                    <p>Admin Offers & Schemes</p>
                                </li>
                                <li>
                                    <p>SMS Subscription</p>
                                </li>
                                <li>
                                    <p>Live Support</p>
                                </li>
                                <li>
                                    <p>Wallet</p>
                                </li>
                                <li>
                                    <p>Reports</p>
                                </li>
                            </ul>
                        </div><!-- /.spmbenefits__summery -->
                    </div><!-- /.spmbenefits__content -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.spmbenefits -->


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
                <a href="https://logistics.ramrajservices.com/" class="thm-btn">Discover More</a><!-- /.thm-btn -->
            </div><!-- /.call-to-action__button -->
        </div><!-- /.container -->
    </section><!-- /.call-to-action -->

    <?php $this->load->view('admin/includes/footer'); ?>

</body>

</html>