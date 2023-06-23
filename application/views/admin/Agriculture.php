<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture</title>
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
                                <span class="tagline">Welcome to Agriculture Farm</span>
                                <h2>Pure Agriculture <br>
                                    Products</h2>
                                <a href="#" class=" thm-btn">Register Now</a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(<?php echo base_url(); ?>assets/images/main-slider/main-slider-2-2.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <span class="tagline">Welcome to Agriculture Farm</span>
                                <h2>Pure Agriculture <br>
                                    Products</h2>
                                <a href="#" class=" thm-btn">Discover More</a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
            </div><!-- /.main-slider__nav -->

        </div><!-- /.swiper-container thm-swiper__slider -->
    </section><!-- /.main-slider -->

    <section class="about-two">
        <img src="<?php echo base_url(); ?>assets/images/icons/about-2-bg-1.png" alt="" class="about-two__bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-two__images">
                        <img src="<?php echo base_url(); ?>assets/images/resources/about-2-2.jpg" alt="">
                        <img src="<?php echo base_url(); ?>assets/images/resources/about-2-1.jpg" alt="">
                    </div><!-- /.about-two__images -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="about-two__content">
                        <div class="block-title">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>Our introduction</p>
                            <h3>Agriculture & Oragnic
                                Product Form</h3>
                        </div><!-- /.block-title -->
                        <div class="about-two__summery">
                            <p>Lorem ipsum is simply free text available. Aenean eu leo quam. Pellentesque ornare sem
                                lacinia quam venenatis vestibulum. Aenean lacinia bibendum.</p>
                        </div><!-- /.about-two__summery -->
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled about-two__list">
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        Lorem ipsum free text
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        Quam orance semin
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        Acinia simply free
                                    </li>
                                </ul><!-- /.list-unstyled about-two__list -->
                                <img src="<?php echo base_url(); ?>assets/images/resources/sign-1-1.png" alt="">
                                <span class="about-two__designation">Co Founder & CEO</span>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="about-two__progress">
                                    <div class="about-two__progress-box">
                                        <div class="circle-progress" data-options='{ "value": 0.90,"thickness": 2,"emptyFill": "#f6f5f2","lineCap": "square", "size": 118, "fill": { "color": "#49a760" } }'>
                                            <span>90%</span>
                                        </div><!-- /.circle-progress -->
                                    </div><!-- /.about-two__progress-box -->
                                    <div class="about-two__progress-content">
                                        <h3>Organic
                                            Solutions</h3>
                                    </div><!-- /.about-two__progress-content -->
                                </div><!-- /.about-two__progress -->
                                <div class="about-two__progress">
                                    <div class="about-two__progress-box">
                                        <div class="circle-progress" data-options='{ "value": 0.50,"thickness": 2,"emptyFill": "#f6f5f2","lineCap": "square", "size": 118, "fill": { "color": "#49a760" } }'>
                                            <span>50%</span>
                                        </div><!-- /.circle-progress -->
                                    </div><!-- /.about-two__progress-box -->
                                    <div class="about-two__progress-content">
                                        <h3>Quality
                                            Agriculture</h3>
                                    </div><!-- /.about-two__progress-content -->
                                </div><!-- /.about-two__progress -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.about-two__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-two -->

    <section class="feature-two">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="feature-two__box">
                        <i class="agrikon-icon-tractor-1"></i>
                        <p>Feature 01</p>
                        <h3>We Use <br>
                            New Technology</h3>
                    </div><!-- /.feature-two__box -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-4">
                    <div class="feature-two__box">
                        <i class="agrikon-icon-agriculture"></i>
                        <p>Feature 02</p>
                        <h3>Making <br>
                            Healthy Foods</h3>
                    </div><!-- /.feature-two__box -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-4">
                    <div class="feature-two__box">
                        <i class="agrikon-icon-farmer"></i>
                        <p>Feature 03</p>
                        <h3>Reforming <br>
                            in the Systems</h3>
                    </div><!-- /.feature-two__box -->
                </div><!-- /.col-md-12 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.feature-two -->

    <section class="service-two service-two__home-two">
        <div class="service-two__bottom-curv"></div><!-- /.service-two__bottom-curv -->
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__image"></div><!-- /.block-title__image -->
                <p>Our Services list</p>
                <h3>What We’re Offering</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="<?php echo base_url(); ?>assets/images/services/service-2-1.jpg" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <h3><a href="<?php echo base_url('Services/servicedetails'); ?>">Agriculture Products</a></h3>
                            <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="<?php echo base_url(); ?>assets/images/services/service-2-2.jpg" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <h3><a href="<?php echo base_url('Services/servicedetails'); ?>">Oragnic
                                    Products</a></h3>
                            <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="<?php echo base_url(); ?>assets/images/services/service-2-3.jpg" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <h3><a href="<?php echo base_url('Services/servicedetails'); ?>">Fresh
                                    Vegetables</a></h3>
                            <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="<?php echo base_url(); ?>assets/images/services/service-2-4.jpg" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <h3><a href="<?php echo base_url('Services/servicedetails'); ?>">Dairy
                                    Products</a></h3>
                            <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-two -->

    <section class="video-one">
        <img src="<?php echo base_url(); ?>assets/images/icons/video-bg-1-1.png" class="video-one__bg" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-one__image">
                        <img src="<?php echo base_url(); ?>assets/images/resources/video-1-1.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=isBJjWA4XWU" class="video-popup"><i class="fa fa-play"></i></a><!-- /.video-popup -->
                        <span class="video-one__text">8008 Projects are completed</span><!-- /.video-one__text -->
                    </div><!-- /.video-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="video-one__content">
                        <div class="block-title">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>Get to know us</p>
                            <h3>Growing Healthy Food</h3>
                        </div><!-- /.block-title -->
                        <div class="video-one__summery">
                            <p>Lorem ipsum dolor sit amet nsectetur cing elituspe ndisse suscipit sagitis leo sit.</p>
                        </div><!-- /.video-one__summery -->
                        <ul class="list-unstyled video-one__list">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Nsectetur cing elit.
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Suspe ndisse suscipit sagittis leo.
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Entum estibulum dignissim posuere.
                            </li>
                        </ul><!-- /.list-unstyled -->
                        <div class="video-one__count-wrap">
                            <div class="video-one__count">
                                <i class="agrikon-icon-investment"></i>
                                <div class="video-one__count-content">
                                    <h3><span class="odometer" data-count="870500">00</span></h3>
                                    <p>Agriculture, Oragnic and Dairy Products</p>
                                </div><!-- /.video-one__count-content -->
                            </div><!-- /.video-one__count -->
                        </div><!-- /.video-one__count-wrap -->
                    </div><!-- /.video-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.video-one -->

    <section class="team-one">
        <img src="<?php echo base_url(); ?>assets/images/icons/team-bg-1-1.png" alt="" class="team-one__bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-5">
                    <div class="team-one__content">
                        <div class="block-title">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>meet the team</p>
                            <h3>Expert Farmers</h3>
                        </div><!-- /.block-title -->
                        <div class="team-one__summery">
                            <p>Lorem ipsum is simply free text available. Aenean eu leo quam. Pellentesque ornare sem
                                lacinia quam venenatis vestibulum. Aenean lacinia bibendum.</p>
                        </div><!-- /.team-one__summery -->

                        <!-- If we need navigation buttons -->
                        <div class="team-one__nav">
                            <div class="swiper-button-prev" id="team-one__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                            </div>
                            <div class="swiper-button-next" id="team-one__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                        </div><!-- /.team-one__nav -->

                    </div><!-- /.team-one__content -->
                </div><!-- /.col-md-12 col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="team-one__carousel-wrap">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "slidesPerGroup": 1, "autoplay": { "delay": 5000 }, "navigation": {
            "nextEl": "#team-one__swiper-button-next",
            "prevEl": "#team-one__swiper-button-prev"
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
                                <img src="<?php echo base_url(); ?>assets/images/team/team-1-1.jpg" alt="Jessica Brown">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Jessica Brown</h3>
                            <p>Farmer</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url(); ?>assets/images/team/team-1-2.jpg" alt="Jessica Brown">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Jessica Brown</h3>
                            <p>Farmer</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url(); ?>assets/images/team/team-1-3.jpg" alt="Jessica Brown">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Jessica Brown</h3>
                            <p>Farmer</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url(); ?>assets/images/team/team-1-1.jpg" alt="Jessica Brown">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Jessica Brown</h3>
                            <p>Farmer</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url(); ?>assets/images/team/team-1-2.jpg" alt="Jessica Brown">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Jessica Brown</h3>
                            <p>Farmer</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url(); ?>assets/images/team/team-1-3.jpg" alt="Jessica Brown">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <h3>Jessica Brown</h3>
                            <p>Farmer</p>
                        </div><!-- /.team-card -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->

            </div><!-- /.thm-swiper__slider -->
        </div><!-- /.team-one__carousel-wrap -->
    </section><!-- /.team-one -->


    <div class="projects-one">
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__image"></div><!-- /.block-title__image -->
                <p>Closed projects</p>
                <h3>Latest Projects List</h3>
            </div><!-- /.block-title -->
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "slidesPerGroup": 1, "autoplay": { "delay": 5000 }, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
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
            }
        }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-1-1.jpg" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-1-2.jpg" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-1-3.jpg" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-1-4.jpg" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-1-5.jpg" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-1-6.jpg" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-1-1.jpg" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-1-2.jpg" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-1-3.jpg" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
                <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
            </div><!-- /.thm-swiper__slider -->
        </div><!-- /.container -->
    </div><!-- /.projects-one -->

    <section class="call-to-action__two call-to-action__two-home-two jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
        <img class="call-to-action__two__bg jarallax-img" src="<?php echo base_url(); ?>assets/images/backgrounds/cta-2-bg-1.jpg" alt="parallax-image" />
        <div class="container">
            <h3>Agriculture Matters to
                the Future</h3>
            <a href="<?php echo base_url('Admin/about'); ?>" class="thm-btn">Discover More</a><!-- /.thm-btn -->
        </div><!-- /.container -->
    </section><!-- /.call-to-action__two -->

    <section class="gray-boxed-wrapper home-one__boxed">
        <section class="funfact-one">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="funfact-one__single">
                            <i class="agrikon-icon-planting"></i>
                            <h3><span class="odometer" data-count="6420">00</span></h3>
                            <p>Agriculture Products</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="funfact-one__single">
                            <i class="agrikon-icon-agriculture-1"></i>
                            <h3><span class="odometer" data-count="8800">00</span></h3>
                            <p>Projects Completed</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="funfact-one__single">
                            <i class="agrikon-icon-customer"></i>
                            <h3><span class="odometer" data-count="9280">00</span></h3>
                            <p>Satisfied Clients</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="funfact-one__single">
                            <i class="agrikon-icon-farmer"></i>
                            <h3><span class="odometer" data-count="1800">00</span></h3>
                            <p>Expert Farmers</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.funfact-one -->
    </section><!-- /.gray-boxed-wrapper -->


    <div class="client-carousel  ">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /.thm-swiper__slider -->
        </div><!-- /.container -->
    </div><!-- /.client-carousel -->

    <section class="blog-home-two">
        <div class="container">
            <div class="row top-row">
                <div class="col-lg-6">
                    <div class="block-title">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p>From the blog post</p>
                        <h3>Latest News & Articles
                            Directly from Blog</h3>
                    </div><!-- /.block-title -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <p class="block-text">Lorem ipsum is simply free text available. Aenean eu leo quam. Pellentesque ornare
                        sem lacinia
                        quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="<?php echo base_url(); ?>assets/images/blog/blog-grid-1.jpg" alt="Best Way to Do Eco and Agriculture">
                            <a href="<?php echo base_url('Blogdetail'); ?>"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-user-circle"></i> by Admin</a>
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-comments"></i> 2 Comments</a>
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="<?php echo base_url('Blogdetail'); ?>">Best Way to Do Eco and Agriculture</a></h3>
                            <a href="<?php echo base_url('Blogdetail'); ?>" class="thm-btn">Read More</a><!-- /.thm-btn -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="<?php echo base_url(); ?>assets/images/blog/blog-grid-2.jpg" alt="Leverage agile frameworks to provide">
                            <a href="<?php echo base_url('Blogdetail'); ?>"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-user-circle"></i> by Admin</a>
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-comments"></i> 2 Comments</a>
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="<?php echo base_url('Blogdetail'); ?>">Leverage agile frameworks to provide</a></h3>
                            <a href="<?php echo base_url('Blogdetail'); ?>" class="thm-btn">Read More</a><!-- /.thm-btn -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="<?php echo base_url(); ?>assets/images/blog/blog-grid-3.jpg" alt="Organically grow the holistic world view">
                            <a href="<?php echo base_url('Blogdetail'); ?>"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-user-circle"></i> by Admin</a>
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-comments"></i> 2 Comments</a>
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="<?php echo base_url('Blogdetail'); ?>">Organically grow the holistic world view</a></h3>
                            <a href="<?php echo base_url('Blogdetail'); ?>" class="thm-btn">Read More</a><!-- /.thm-btn -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-12 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-home-two -->

    <section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">
        <img class="call-to-action__bg jarallax-img" src="<?php echo base_url(); ?>assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
        <!-- /.call-to-action__bg -->
        <div class="container">
            <div class="call-to-action__content">
                <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
                <h3>We’re popular leader in agriculture
                    market globally</h3>
            </div><!-- /.call-to-action__content -->
            <div class="call-to-action__button">
                <a href="<?php echo base_url('Services'); ?>" class="thm-btn">Discover More</a><!-- /.thm-btn -->
            </div><!-- /.call-to-action__button -->
        </div><!-- /.container -->
    </section><!-- /.call-to-action -->

    <?php $this->load->view('admin/includes/footer'); ?>

</body>

</html>