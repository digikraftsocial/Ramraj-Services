  <?php $this->load->view('admin/includes/header'); ?>

  <section class="main-slider">
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
                  <div class="image-layer" style="background-image: url(<?php echo base_url(); ?>assets/images/main-slider/hero-1.jpg);">
                  </div>
                  <!-- /.image-layer -->
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-7 col-lg-7">
                              <span class="tagline">Welcome to Ramraj Services</span>
                              <h2><span>Connect</span> <br>
                                  & Grow</h2>
                              <p>India's largest Phygital (Physical + Digital) platform <br>for the world. Buying, Selling, Manufacturing and Wholesaling. <br>Make it possible with Ramraj Services</p>
                              <a href="https://registration.ramrajservices.com/" class=" thm-btn">Get Started.</a>
                              <!-- /.thm-btn dynamic-radius -->
                          </div><!-- /.col-lg-7 text-right -->
                      </div><!-- /.row -->
                  </div><!-- /.container -->
              </div><!-- /.swiper-slide -->
              <div class="swiper-slide">
                  <div class="image-layer" style="background-image: url(<?php echo base_url(); ?>assets/images/main-slider/hero-2.jpg);">
                  </div>
                  <!-- /.image-layer -->
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-7 col-lg-7">
                              <span class="tagline">Welcome to Ramraj Services</span>
                              <h2><span>Connect</span><br>
                                  & Grow</h2>
                              <p>Now Buying all goods and services on a single ecommerce <br> from your local vendor is possible.</p>
                              <a href="https://play.google.com/store/apps/details?id=com.ramrajservices" class=" thm-btn"><i class="fab fa-android"></i> Download App</a>
                              <!-- /.thm-btn dynamic-radius -->
                          </div><!-- /.col-lg-7 text-right -->
                      </div><!-- /.row -->
                  </div><!-- /.container -->
              </div><!-- /.swiper-slide -->
              <div class="swiper-slide">
                  <div class="image-layer" style="background-image: url(<?php echo base_url(); ?>assets/images/main-slider/hero-3.jpg);">
                  </div>
                  <!-- /.image-layer -->
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-7 col-lg-7">
                              <span class="tagline">Welcome to Ramraj Services</span>
                              <h2><span>Connect</span><br>
                                  & Grow</h2>
                              <p>Selling made easy. Look no further for a complete delivery network <br> for your business, manufacturers, retail and wholesaling.</p>
                              <a href="https://registration.ramrajservices.com/" class=" thm-btn">Register Now</a>
                              <!-- /.thm-btn dynamic-radius -->
                          </div><!-- /.col-lg-7 text-right -->
                      </div><!-- /.row -->
                  </div><!-- /.container -->
              </div><!-- /.swiper-slide -->
              <div class="swiper-slide">
                  <div class="image-layer" style="background-image: url(<?php echo base_url(); ?>assets/images/main-slider/hero-4.jpg);">
                  </div>
                  <!-- /.image-layer -->
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-7 col-lg-7">
                              <span class="tagline">Welcome to Ramraj Services</span>
                              <h2><span>Connect</span><br>
                                  & Grow</h2>
                              <p>Your Online Dukaan is one step away.<br> Register for Ramraj Seller Platform to sell online.</p>
                              <a href="https://registration.ramrajservices.com/" class=" thm-btn">Register Now</a>
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

  <section class="service-one">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                  <div class="service-one__box">
                      <img src="<?php echo base_url(); ?>assets/images/services/deliveryofproducts.jpg" alt="">
                      <div class="service-one__box-content">
                          <h3><a href="<?php echo base_url('admin/service-details'); ?>">Delivery of Products & Services</a></h3>
                      </div><!-- /.service-one__box-content -->
                  </div><!-- /.service-one__box -->
              </div><!-- /.col-md-12 col-lg-4 -->
              <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                  <div class="service-one__box">
                      <img src="<?php echo base_url(); ?>assets/images/services/kishansabha.jpg" alt="">
                      <div class="service-one__box-content">
                          <h3><a href="<?php echo base_url('Services/servicedetails'); ?>">Skilled Manpower & Employment</a></h3>
                      </div><!-- /.service-one__box-content -->
                  </div><!-- /.service-one__box -->
              </div><!-- /.col-md-12 col-lg-4 -->
              <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                  <div class="service-one__box">
                      <img src="<?php echo base_url(); ?>assets/images/services/agriculutralsolution.jpg" alt="">
                      <div class="service-one__box-content">
                          <h3><a href="<?php echo base_url('Services/servicedetails'); ?>">Agricultural Solutions</a></h3>
                      </div><!-- /.service-one__box-content -->
                  </div><!-- /.service-one__box -->
              </div><!-- /.col-md-12 col-lg-4 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
  </section><!-- /.service-one -->

  <section class="about-one">
      <div class="client-carousel client-carousel__has-border-top">
          <div class="block-title text-center">
              <div class="block-title__image"></div><!-- /.block-title__image -->
              <p>Partners and Incubators</p>
              <h3>Our Growth Co-ordinators</h3>
          </div><!-- /.block-title -->
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
                          <img src="<?php echo base_url(); ?>assets/images/resources/partner-incubation-agriculture-farmers-welfare.jpg" alt="">
                      </div>
                      <div class="swiper-slide">
                          <img src="<?php echo base_url(); ?>assets/images/resources/partner-incubation-msme.jpg" alt="">
                      </div>
                      <div class="swiper-slide">
                          <img src="<?php echo base_url(); ?>assets/images/resources/partner-incubation-startup-india.jpg" alt="">
                      </div>
                      <div class="swiper-slide">
                          <img src="<?php echo base_url(); ?>assets/images/resources/partner-incubation-ICAR.jpg" alt="">
                      </div>
                      <div class="swiper-slide">
                          <img src="<?php echo base_url(); ?>assets/images/resources/partner-incubation-IARI.jpg" alt="">
                      </div>
                      <div class="swiper-slide">
                          <img src="<?php echo base_url(); ?>assets/images/resources/partner-incubatoin-pusa-krishi.jpg" alt="">
                      </div>

                      <!-- <div class="swiper-wrapper">
                   
                    <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?>assets/images/resources/partner-incubation-IARI.jpg" alt="">
                    </div> -->
                      <!-- <div class="swiper-slide">
                        <img src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/images/resources/brand-1-1.png" alt="">
                    </div> -->
                      <!-- /.swiper-slide -->
                  </div><!-- /.swiper-wrapper -->
              </div><!-- /.thm-swiper__slider -->
          </div><!-- /.container -->
      </div><!-- /.client-carousel -->
      <img src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/images/icons/about-bg-icon-1-1.png" class="about-one__bg-shape-1" alt="">
      <div class="container">
          <div class="row">
              <div class="col-lg-5">
                  <div class="about-one__images">
                      <img src="<?php echo base_url(); ?>assets/images/resources/growingabettertommorrow.jpg" alt="">
                      <img src="<?php echo base_url(); ?>assets/images/resources/professionalframers.jpg" alt="">
                      <div class="about-one__count wow fadeInLeft" data-wow-duration="1500ms">
                          <span>Trusted by</span>
                          <h4>8900</h4>
                      </div><!-- /.about-one__count -->
                  </div><!-- /.about-one__images -->
              </div><!-- /.col-lg-6 -->
              <div class="col-lg-7">
                  <div class="about-one__content">
                      <div class="block-title text-left">
                          <div class="block-title__image"></div><!-- /.block-title__image -->
                          <p>Welcome to Ramraj Services</p>
                          <h3>Growing a better tomorrow, one seed at a time.</h3>
                      </div><!-- /.block-title -->
                      <div class="about-one__tagline">
                          <p>Turning Farmers into Stakeholders by growing their potential
                              and increasing sales.</p>
                      </div><!-- /.about-one__tagline -->
                      <div class="about-one__summery">
                          <p>Transforming the nation into a developed country, key areas
                              have been identified based on India’s core competence, natural
                              resources and talented manpower for integrated action to double
                              the growth rate of GDP and realize the vision of Aatmanirbhar Bharat.</p>
                      </div><!-- /.about-one__summery -->
                      <div class="about-one__icon-row">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="about-one__box">
                                      <i class="agrikon-icon-farmer"></i>
                                      <h4><a href="<?php echo base_url('Admin/aboutus'); ?>">Local
                                              to Global</a></h4>
                                  </div><!-- /.about-one__box -->
                              </div><!-- /.col-lg-6 -->
                              <div class="col-lg-6">
                                  <div class="about-one__box">
                                      <i class="agrikon-icon-agriculture"></i>
                                      <h4><a href="<?php echo base_url('Services'); ?>">Atmanirbhar
                                              Bharat</a></h4>
                                  </div><!-- /.about-one__box -->
                              </div><!-- /.col-lg-6 -->
                          </div><!-- /.row -->
                      </div><!-- /.about-one__icon-row -->
                      <a href="https://registration.ramrajservices.com/" class="thm-btn">Register Now</a><!-- /.thm-btn -->
                  </div><!-- /.about-one__content -->
              </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
  </section><!-- /.about-one -->

  <section class="service-two">
      <div class="service-two__bottom-curv"></div><!-- /.service-two__bottom-curv -->
      <div class="container">
          <div class="block-title text-center">
              <div class="block-title__image"></div><!-- /.block-title__image -->
              <p>Our Services list</p>
              <h3>What We're Offering</h3>
          </div><!-- /.block-title -->
          <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-3">
                  <div class="service-two__card">
                      <div class="service-two__card-image">
                          <img src="<?php echo base_url(); ?>assets/images/services/service-2-1.jpg" alt="">
                      </div><!-- /.service-two__card-image -->
                      <div class="service-two__card-content">
                          <div class="service-two__card-icon">
                              <i class="agrikon-icon-vegetable"></i>
                          </div><!-- /.service-two__card-icon -->
                          <h3><a href="<?php echo base_url('Services/servicedetails'); ?>">Ramraj <br> Seller</a></h3>
                          <p>Plat for Sellers and Vendor to sell products and manage it online. </p>
                      </div><!-- /.service-two__card-content -->
                  </div><!-- /.service-two__card -->
              </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                  <div class="service-two__card">
                      <div class="service-two__card-image">
                          <img src="<?php echo base_url(); ?>assets/images/services/service-2-2.jpg" alt="">
                      </div><!-- /.service-two__card-image -->
                      <div class="service-two__card-content">
                          <div class="service-two__card-icon">
                              <i class="agrikon-icon-organic-food"></i>
                          </div><!-- /.service-two__card-icon -->
                          <h3><a href="<?php echo base_url('Services/servicedetails'); ?>">Ramraj Connect</a></h3>
                          <p>A platform for Retailers, Wholesalers and Manufacturers to create a distribution network and manage it online.</p>
                      </div><!-- /.service-two__card-content -->
                  </div><!-- /.service-two__card -->
              </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                  <div class="service-two__card">
                      <div class="service-two__card-image">
                          <img src="<?php echo base_url(); ?>assets/images/services/service-2-3.jpg" alt="">
                      </div><!-- /.service-two__card-image -->
                      <div class="service-two__card-content">
                          <div class="service-two__card-icon">
                              <i class="agrikon-icon-tractor"></i>
                          </div><!-- /.service-two__card-icon -->
                          <h3><a href="<?php echo base_url('Services/servicedetails'); ?>">Ramraj Logistix</a></h3>
                          <p>A unique platform for Supply Chain Management to deliver goods and services.Completely managed online.</p>
                      </div><!-- /.service-two__card-content -->
                  </div><!-- /.service-two__card -->
              </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
              <div class="col-sm-12 col-md-6 col-lg-3">
                  <div class="service-two__card">
                      <div class="service-two__card-image">
                          <img src="<?php echo base_url(); ?>assets/images/services/service-2-4.jpg" alt="">
                      </div><!-- /.service-two__card-image -->
                      <div class="service-two__card-content">
                          <div class="service-two__card-icon">
                              <i class="agrikon-icon-dairy"></i>
                          </div><!-- /.service-two__card-icon -->
                          <h3><a href="<?php echo base_url('Services/servicedetails'); ?>">Ramraj Services</a></h3>
                          <p>Largest Hyperlocal Ecommerce platform for selling of Goods and Services online.</p>
                      </div><!-- /.service-two__card-content -->
                  </div><!-- /.service-two__card -->
              </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
  </section><!-- /.service-two -->

  <div class="projects-one project-one__home-one">
      <div class="container">
          <div class="block-title text-center">
              <div class="block-title__image"></div><!-- /.block-title__image -->
              <p>Latest projects</p>
              <h3>All That's Happening!</h3>
          </div><!-- /.block-title -->
          <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
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
        "slidesPerView": 2,
        "slidesPerGroup": 2
    }
}}'>
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <div class="projects-one__single">
                          <img src="<?php echo base_url(); ?>assets/images/projects/agriseller.png" alt="">
                          <div class="projects-one__content">
                              <h3>Harvest Innovation</h3>
                              <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                          </div><!-- /.projects-one__content -->
                      </div><!-- /.projects-one__single -->
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <div class="projects-one__single">
                          <img src="<?php echo base_url(); ?>assets/images/projects/agristartup.png" alt="">
                          <div class="projects-one__content">
                              <h3>Harvest Innovation</h3>
                              <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                          </div><!-- /.projects-one__content -->
                      </div><!-- /.projects-one__single -->
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <div class="projects-one__single">
                          <img src="<?php echo base_url(); ?>assets/images/projects/gal-1-event.png" alt="">
                          <div class="projects-one__content">
                              <h3>Harvest Innovation</h3>
                              <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                          </div><!-- /.projects-one__content -->
                      </div><!-- /.projects-one__single -->
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <div class="projects-one__single">
                          <img src="<?php echo base_url(); ?>assets/images/projects/gal-2-event.png" alt="">
                          <div class="projects-one__content">
                              <h3>Harvest Innovation</h3>
                              <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                          </div><!-- /.projects-one__content -->
                      </div><!-- /.projects-one__single -->
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <div class="projects-one__single">
                          <img src="<?php echo base_url(); ?>assets/images/projects/gal-3-agri.png" alt="">
                          <div class="projects-one__content">
                              <h3>Harvest Innovation</h3>
                              <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                          </div><!-- /.projects-one__content -->
                      </div><!-- /.projects-one__single -->
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <div class="projects-one__single">
                          <img src="<?php echo base_url(); ?>assets/images/projects/gal-4.png" alt="">
                          <div class="projects-one__content">
                              <h3>Harvest Innovation</h3>
                              <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                          </div><!-- /.projects-one__content -->
                      </div><!-- /.projects-one__single -->
                  </div><!-- /.swiper-slide -->
              </div><!-- /.swiper-wrapper -->
              <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
          </div><!-- /.swiper-container -->
      </div><!-- /.container -->
  </div><!-- /.projects-one -->

  <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
      <img class="call-to-action__three__bg jarallax-img" src="<?php echo base_url(); ?>assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
      <div class="container">
          <div class="row">
              <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                  <div class="call-to-action__three-image">
                      <img src="<?php echo base_url(); ?>assets/images/resources/highagroquality.png" alt="">
                      <img src="<?php echo base_url(); ?>assets/images/resources/highqualityagro.png" alt="">
                  </div><!-- /.call-to-action__three-image -->
              </div><!-- /.col-lg-5 -->
              <div class="col-lg-7">
                  <div class="call-to-action__three-content">
                      <h3>Providing High Quality
                          Products</h3>
                      <a href="https://registration.ramrajservices.com/" class="thm-btn">Register Now</a><!-- /.thm-btn -->
                  </div><!-- /.call-to-action__three-content -->
              </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
  </section><!-- /.call-to-action__three -->

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
                  </div><!-- /.swiper-slide -->
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
                          <h4>Mr. Manish Sahu</h4>
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
                          <h4>Mr. Manish Sahu</h4>
                          <span>Customer</span>
                      </div><!-- /.testimonials-one__meta -->
                  </div><!-- /.swiper-slide -->
              </div><!-- /.swiper-wrapper -->
          </div><!-- /#testimonials-one__meta.swiper-container -->
          <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
      </div><!-- /.container -->
  </section><!-- /.testimonials-one -->

  <section class="gray-boxed-wrapper home-one__boxed">
      <img src="<?php echo base_url(); ?>assets/images/icons/home-1-blog-bg.png" alt="" class="home-one__boxed-bg">
      <section class="blog-home-two blog-home-one">
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
                      <p class="block-text">Apart from our daily meets and events, there's much more get insights from.
                      </p>
                  </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                  <div class="col-md-12 col-lg-4">
                      <div class="blog-card">
                          <div class="blog-card__image">
                              <img src="<?php echo base_url(); ?>assets/images/blog/Conference.jpg" alt="Best Way to Do Eco and Agriculture">
                              <a href="<?php echo base_url('Blogdetail'); ?>"></a>
                          </div><!-- /.blog-card__image -->
                          <div class="blog-card__content">
                              <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                              <div class="blog-card__meta">
                                  <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-user-circle"></i> by Admin</a>
                                  <!-- <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-comments"></i> 2 Comments</a> -->
                              </div><!-- /.blog-card__meta -->
                              <h3><a href="<?php echo base_url('Blogdetail'); ?>">Best Way to Do Eco and Agriculture</a></h3>
                              <a href="<?php echo base_url('Blogdetail'); ?>" class="thm-btn">Read More</a><!-- /.thm-btn -->
                          </div><!-- /.blog-card__content -->
                      </div><!-- /.blog-card -->
                  </div><!-- /.col-md-12 col-lg-4 -->
                  <div class="col-md-12 col-lg-4">
                      <div class="blog-card">
                          <div class="blog-card__image">
                              <img src="<?php echo base_url(); ?>assets/images/blog/yogiadityanath.png" alt="Leverage agile frameworks to provide">
                              <a href="<?php echo base_url('Blogdetail'); ?>"></a>
                          </div><!-- /.blog-card__image -->
                          <div class="blog-card__content">
                              <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                              <div class="blog-card__meta">
                                  <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-user-circle"></i> by Admin</a>
                                  <!-- <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-comments"></i> 2 Comments</a> -->
                              </div><!-- /.blog-card__meta -->
                              <h3><a href="<?php echo base_url('Blogdetail'); ?>">Leverage agile frameworks to provide</a></h3>
                              <a href="<?php echo base_url('Blogdetail'); ?>" class="thm-btn">Read More</a><!-- /.thm-btn -->
                          </div><!-- /.blog-card__content -->
                      </div><!-- /.blog-card -->
                  </div><!-- /.col-md-12 col-lg-4 -->
                  <div class="col-md-12 col-lg-4">
                      <div class="blog-card">
                          <div class="blog-card__image">
                              <img src="<?php echo base_url(); ?>assets/images/blog/agristartup.png" alt="Organically grow the holistic world view">
                              <a href="<?php echo base_url('Blogdetail'); ?>"></a>
                          </div><!-- /.blog-card__image -->
                          <div class="blog-card__content">
                              <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                              <div class="blog-card__meta">
                                  <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-user-circle"></i> by Admin</a>
                                  <!-- <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-comments"></i> 2 Comments</a> -->
                              </div><!-- /.blog-card__meta -->
                              <h3><a href="<?php echo base_url('Blogdetail'); ?>">Organically grow the holistic world view</a></h3>
                              <a href="<?php echo base_url('Blogdetail'); ?>" class="thm-btn">Read More</a><!-- /.thm-btn -->
                          </div><!-- /.blog-card__content -->
                      </div><!-- /.blog-card -->
                  </div><!-- /.col-md-12 col-lg-4 -->
              </div><!-- /.row -->
              <hr />
          </div><!-- /.container -->
      </section><!-- /.blog-home-two -->

      <div class="blog-home__slogan">
          <div class="container">
              <div class="row">
                  <div class="col-lg-9">
                      <div class="blog-home__slogan-main">
                          <i class="agrikon-icon-farm"></i>
                          <div class="blog-home__slogan-content">
                              <h3>We Care About Our Agriculture Growth</h3>
                              <p>Farmers are committed to provide food to humankind and we are committed to help them reach it.</p>
                          </div><!-- /.blog-home__slogan-content -->
                      </div><!-- /.blog-home__slogan-main -->
                  </div><!-- /.col-lg-9 -->
                  <div class="col-lg-3">
                      <div class="blog-home__slogan-image">
                          <img src="<?php echo base_url(); ?>assets/images/resources/wecareaboutouragriculture.jpg" alt="">
                      </div><!-- /.blog-home__slogan-image -->
                  </div><!-- /.col-lg-3 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
      </div><!-- /.blog-home__slogan -->
  </section><!-- /.gray-boxed-wrapper -->

  <section class="contact-two">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                  <div class="contact-two__image">
                      <div class="contact-two__image-bubble-1"></div><!-- /.contact-two__image-bubble-1 -->
                      <div class="contact-two__image-bubble-2"></div><!-- /.contact-two__image-bubble-2 -->
                      <div class="contact-two__image-bubble-3"></div><!-- /.contact-two__image-bubble-3 -->
                      <img src="<?php echo base_url(); ?>assets/images/resources/contact-1-1.jpg" class="img-fluid" alt="">
                  </div><!-- /.contact-two__image -->
              </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-5 -->
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                  <div class="contact-two__content">
                      <div class="block-title">
                          <div class="block-title__image"></div><!-- /.block-title__image -->
                          <p>Contact now</p>
                          <h3>Leave Us A
                              Message</h3>
                      </div><!-- /.block-title -->
                      <div class="contact-two__summery">
                          <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor
                              incididunt
                              ut labore et dolore magna aliqua lonm andhn. Aenean tincidunt id mauris id auctor. Donec at
                              ligula lacus dignissim mi quis simply neque.</p>
                      </div><!-- /.contact-two__summery -->
                  </div><!-- /.contact-two__content -->
              </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                  <form action="<?php echo base_url(); ?>assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                      <div class="row">
                          <div class="col-lg-12">
                              <input type="text" name="name" placeholder="Full Name">
                          </div><!-- /.col-lg-6 -->
                          <div class="col-lg-12">
                              <input type="text" name="email" placeholder="Email Address">
                          </div><!-- /.col-lg-6 -->
                          <div class="col-lg-12">
                              <input type="text" name="phone" placeholder="Phone Number">
                          </div><!-- /.col-lg-6 -->
                          <div class="col-lg-12">
                              <textarea name="message" placeholder="Write Message"></textarea>
                          </div><!-- /.col-lg-12 -->
                          <div class="col-lg-12">
                              <button type="submit" class="thm-btn">Send Message</button><!-- /.thm-btn -->
                          </div><!-- /.col-lg-12 -->
                      </div><!-- /.row -->
                  </form>
              </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
  </section><!-- /.contact-two -->

  <div class="client-carousel client-carousel__has-border-top">
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
                      <img src="<?php echo base_url(); ?>assets/images/client-logo/Ananya_Seeds.png" alt="Ananya Seeds">
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <img src="<?php echo base_url(); ?>assets/images/client-logo/Cavalo.png" alt="Cavalo">
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <img src="<?php echo base_url(); ?>assets/images/client-logo/m-lense.png" alt="M-lense">
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <img src="<?php echo base_url(); ?>assets/images/client-logo/Plutus_Plus.png" alt="Plutus Plus">
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <img src="<?php echo base_url(); ?>assets/images/client-logo/Pooja_Seeds.png" alt="Pooja Seeds">
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <img src="<?php echo base_url(); ?>assets/images/client-logo/Satyukt.png" alt="Satyukt">
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <img src="<?php echo base_url(); ?>assets/images/client-logo/Suryans_Coolex.png" alt="Suryans Coolex">
                  </div><!-- /.swiper-slide -->
                  <div class="swiper-slide">
                      <img src="<?php echo base_url(); ?>assets/images/client-logo/VN_Organics.png" alt="VN Organics">
                  </div><!-- /.swiper-slide -->
              </div><!-- /.swiper-wrapper -->
          </div><!-- /.thm-swiper__slider -->
      </div><!-- /.container -->
  </div><!-- /.client-carousel -->

  <?php $this->load->view('admin/includes/footer'); ?>

  </body>

  </html>