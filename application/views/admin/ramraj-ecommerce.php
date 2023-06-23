<html>

<head>
    <meta charset="utf-8">
    <title>Ramraj Ecommerce</title>
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
                                <h2>Ramraj eCommerce</h2>
                                <p>"Shop confidently and securely on our trusted ecommerce platform,<br>offering seamless transactions, reliable customer support, and a seamless shopping experience."</p>
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
                </div>
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container thm-swiper__slider -->
    </section><!-- /.main-slider -->

    <section class="about-ecommercelp">
        <img src="<?php echo base_url(); ?>assets/images/icons/about-2-bg-1.png" alt="" class="about-ecommercelp__bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-ecommercelp__images">
                        <img src="<?php echo base_url(); ?>assets/images/resources/Ramraj_Services.jpg" alt="">
                    </div><!-- /.about-ecommercelp__images -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="about-ecommercelp__content">
                        <div class="block-title">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>Our approach</p>
                            <h3>About Us</h3>
                        </div><!-- /.block-title -->
                        <div class="about-ecommercelp__summery">
                            <p>In the era of digitalization and technological advancements, e-commerce has emerged as a game-changer in the retail industry.
                                Among the numerous online platforms, Ramraj E-Commerce has established itself as a frontrunner in the field, offering a seamless
                                shopping experience to customers. With its extensive range of quality products, user-friendly interface, and exceptional customer service,
                                Ramraj E-Commerce has successfully transformed the way people shop.</p>
                            <ul class="list-unstyled about-connectlp__list">
                                <li><i class="fa fa-check-circle"></i>Wide Range of Quality Products</li>
                                <li><i class="fa fa-check-circle"></i>User-Friendly Interface</li>
                                <li><i class="fa fa-check-circle"></i>Exceptional Service</li>
                                <li><i class="fa fa-check-circle"></i>Convenience and Accessibility</li>
                            </ul><!-- /.list-unstyled about-connectlp__list -->
                        </div><!-- /.about-ecommercelp__summery -->
                        <img src="<?php echo base_url(); ?>assets/images/resources/sign-1-1.png" alt="">
                    </div><!-- /.about-ecommercelp__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-ecommercelp -->

    <section class="spmbenefits pt-0 mb-120">
        <img src="<?php echo base_url(); ?>assets/images/icons/team-bg-1-1.png" alt="" class="spmbenefits__bg">
        <div class="container">
            <div class="row">
                <div class="spmbenefits__content">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="block-title">
                            <div class="block-title__image"></div>
                            <p>Mobile & Web Panel</p>
                            <h3>Features & Benefits</h3>
                        </div>
                    </div>
                </div>
                <div class="row spmbenefits__box">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="team-card__image">
                            <img src="<?php echo base_url(); ?>assets/images/resources/Ramraj_Services-Panel.jpg" alt="Ramraj Services Panel">
                            <caption class="text-center"><b>Mobile & Website Layout</b></caption>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md- col-12">
                        <div class="spmbenefits__content">
                            <div class="spmbenefits__summery">
                                <ul>
                                    <li>
                                        <p>Varieties of Products and Categories</p>
                                    </li>
                                    <li>
                                        <p>Filtered Good and Services delivered at your door</p>
                                    </li>
                                    <li>
                                        <p>Product and price comparison</p>
                                    </li>
                                    <li>
                                        <p>Faster Buying saves time</p>
                                    </li>
                                    <li>
                                        <p>Save Energy, Money, Fuel</p>
                                    </li>
                                    <li>
                                        <p>Delivery Available in pan India Locations</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-one">
        <img src="<?php echo base_url(); ?>assets/images/icons/testimonials-bg-1-1.png" class="testimonials-one__bg" alt="">
        <div class="container">
            <h2 class="testimonials-one__title">Testimonials</h2>
            <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div><!-- /.testimonials-one__icons -->
                        <p>"Great technology to connect the local market with local people....it's truly appreciating the hashtag #vocalforlocal. The only plateform for online shopping which connect us with our trusted retailers, like- apne nukkad ki online dukan."</p>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div><!-- /.testimonials-one__icons -->
                        <p>"This app is really helpful in such tough time when its dangerous to go out, provides you with fresh vegetables with safe dilevery at modest rate"</p>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div><!-- /.testimonials-one__icons -->
                        <p>"Awesome pricing of goods. even in this hard time, ramraj services is satisfying its customers with its high quality services by providing easy, safe and quick delivery keep it up team ramraj."</p>
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /#testimonials-one__carousel -->

            <div id="testimonials-one__thumb" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="<?php echo base_url(); ?>assets/images/resources/testimonials-1-1.jpg" alt="">
                        </div><!-- /.testimonials-one__image -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="<?php echo base_url(); ?>assets/images/resources/testimonials-1-2.jpg" alt="">
                        </div><!-- /.testimonials-one__image -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="<?php echo base_url(); ?>assets/images/resources/testimonials-1-3.jpg" alt="">
                        </div><!-- /.testimonials-one__image -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /#testimonials-one__thumb.swiper-container -->

            <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Mr. Khemchand Patel</h4>
                            <span>Customer</span>
                        </div><!-- /.testimonials-one__meta -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Ms. Sapna Dua</h4>
                            <span>Customer</span>
                        </div><!-- /.testimonials-one__meta -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Ms. Nikita Rao</h4>
                            <span>Customer</span>
                        </div><!-- /.testimonials-one__meta -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /#testimonials-one__meta.swiper-container -->
            <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
        </div><!-- /.container -->
    </section><!-- /.testimonials-one -->

    <section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">
        <img class="call-to-action__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
        <!-- /.call-to-action__bg -->
        <div class="container">
            <div class="call-to-action__content">
                <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
                <h3>We're popular leader in agriculture
                    market globally</h3>
            </div><!-- /.call-to-action__content -->
            <div class="call-to-action__button">
                <a href="https://www.ramrajservices.com/" class="thm-btn">Discover More</a><!-- /.thm-btn -->
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
                            <h3><span class="odometer" data-count="1">00</span>k+</h3>
                            <p>App Downloads</p>
                        </div><!-- /.statsline__single -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="statsline__single">
                            <i class="agrikon-icon-agriculture"></i>
                            <h3><span class="odometer" data-count="4">00</span>k+</h3>
                            <p>Numbers of Products</p>
                        </div><!-- /.statsline__single -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="statsline__single">
                            <i class="agrikon-icon-farmer"></i>
                            <h3><span class="odometer" data-count="500">00</span>+</h3>
                            <p>Orders Delivered</p>
                        </div><!-- /.statsline__single -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.statsline -->
    </section><!-- /.stats -->

    <?php $this->load->view('admin/includes/footer'); ?>
</body>

</html>