<html>

<head>
    <meta charset="utf-8">
    <title>Ramraj Seller</title>
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

    <section class="about-connectlp">
        <img src="<?php echo base_url(); ?>assets/images/icons/about-2-bg-1.png" alt="" class="about-connectlp__bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-connectlp__images">
                        <img src="<?php echo base_url(); ?>assets/images/resources/Ramraj-Seller.jpg" alt="">
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

    <section class="spmbenefits mb-120">
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
                                            <img src="<?php echo base_url(); ?>assets/images/resources/Manufacturer_Panel.jpg" alt="Manufacturer_Panel">
                                            <caption class="text-center"><b>Manufacturer Panel</b></caption>
                                        </div><!-- /.team-card__image -->
                                        <!-- </div> -->
                                        <!-- /.team-card -->
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <!-- <div class="team-card"> -->
                                        <div class="team-card__image">
                                            <img src="<?php echo base_url(); ?>assets/images/resources/Wholesaler_Panel.jpg" alt="Wholesaler_Panel">
                                            <caption class="text-center"><b>Wholesaler Panel</b></caption>
                                        </div><!-- /.team-card__image -->
                                        <!-- </div> -->
                                        <!-- /.team-card -->
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <!-- <div class="team-card"> -->
                                        <div class="team-card__image">
                                            <img src="<?php echo base_url(); ?>assets/images/resources/Retailer_Panel.jpg" alt="Retailer_Panel">
                                            <caption class="text-center"><b>Retailer Panel</b></caption>
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
                            <!-- <p>Lorem ipsum is simply free text available. Aenean eu leo quam. Pellentesque ornare sem
                                    lacinia quam venenatis vestibulum. Aenean lacinia bibendum.</p> -->
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