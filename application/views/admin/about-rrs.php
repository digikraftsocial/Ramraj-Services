<html>

<head>
<meta charset="utf-8">
    <title>About Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php $this->load->view('admin/includes/css'); ?>
</head>

<?php $this->load->view('admin/includes/header'); ?>

<section class="page-header">

    <div class="page-header__bg" style="background-image: url(<?php echo base_url(); ?>assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><span>About Us</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>About Us</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="about-two">
    <img src="<?php echo base_url(); ?>assets/images/icons/about-2-bg-1.png" alt="" class="about-two__bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-two__images">
                    <img src="<?php echo base_url(); ?>assets/images/resources/1wecareaboutouragriculture.png" alt="">
                    <!-- <img src="<?php echo base_url(); ?>assets/images/resources/about-2-1.jpg" alt=""> -->
                </div><!-- /.about-two__images -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-two__content">
                    <div class="block-title">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p>Our introduction</p>
                        <h3>Empowering Innovation for a Better Future</h3>
                    </div><!-- /.block-title -->
                    <div class="about-two__summery">
                        <p>Welcome to Ramraj Services, we connect Wholesalers, Retailers, and Manufacturers through our Phigital Platform (Physical+Digital) in the realm of agrotech.
                            With our phigital platform, we offer you a one-of-a-kind, immersive experience. Explore a comprehensive range of information and services, all conveniently accessible at your fingertips.</p>
                    </div><!-- /.about-two__summery -->
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/images/resources/sign-1-1.png" alt="">
                            <!-- <span class="about-two__designation">Co Founder & CEO</span> -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.about-two__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-two -->

<section class="team-one">
    <img src="<?php echo base_url(); ?>assets/images/icons/team-bg-1-1.png" alt="" class="team-one__bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="team-one__content">
                    <div class="block-title">
                        <div class="block-title__image"></div>
                        <p>meet the team</p>
                        <h3>Leadership Beyond</h3>
                    </div>
                    <div class="team-one__summery">
                        <p>Know about our Leaders with their vision to provide people across world with quality services and platforms.</p>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="team-one__nav">
                        <div class="swiper-button-prev" id="team-one__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                        </div>
                        <div class="swiper-button-next" id="team-one__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
                            <img src="<?php echo base_url(); ?>assets/images/team/avinash-shukla.png" alt="Avinash K. Shukla">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h3>Avinash K. Shukla</h3>
                        <p>CEO</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="<?php echo base_url(); ?>assets/images/team/team-1-2.jpg" alt="Jessica Brown">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h3>Avinash K. Shukla</h3>
                        <p>CEO</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="<?php echo base_url(); ?>assets/images/team/team-1-3.jpg" alt="Jessica Brown">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h3>Avinash K. Shukla</h3>
                        <p>CEO</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="<?php echo base_url(); ?>assets/images/team/team-1-1.jpg" alt="Jessica Brown">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h3>Avinash K. Shukla</h3>
                        <p>CEO</p>
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
                    <p>"Thanks to Ramraj Services, I've been able to increase my crop yields and improve the quality of my harvest. Their innovative techniques and top-notch products have truly transformed my farming experience."</p>
                </div>
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p>"I highly recommend Ramraj Services to anyone looking to enhance their agricultural practices. From their exceptional customer service to their cutting-edge technology, they have proven to be a reliable partner in my farming journey. Thank you for helping me achieve success in my fields!"</p>
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p>"I have been a customer of Ramraj Services for several years now, and I am continually impressed by their commitment to sustainability and eco-friendly practices. Not only have they helped me increase my productivity, but they have also made a positive impact on the environment. I am proud to support such a responsible and ethical company."</p>
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
                        <h4>Mr. Satish Kumar Mishra</h4>
                        <span>Customer</span>
                    </div><!-- /.testimonials-one__meta -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__meta">
                        <h4>Mr. Manish Sahu</h4>
                        <span>Customer</span>
                    </div><!-- /.testimonials-one__meta -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__meta">
                        <h4>Mr. B.N Tripathi</h4>
                        <span>Customer</span>
                    </div><!-- /.testimonials-one__meta -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /#testimonials-one__meta.swiper-container -->
        <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
    </div><!-- /.container -->
</section><!-- /.testimonials-one -->

<section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">
    <img class="call-to-action__bg jarallax-img" src="<?php echo base_url(); ?>assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />

    <div class="container">
        <div class="call-to-action__content">
            <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
            <h3>We’re popular leader in agriculture
                market globally</h3>
        </div>
        <div class="call-to-action__button">
            <a href="https://registration.ramrajservices.com/" class="thm-btn">Register Now</a>
        </div>
    </div>
</section>

<?php $this->load->view('admin/includes/footer'); ?>
</body>

</html>