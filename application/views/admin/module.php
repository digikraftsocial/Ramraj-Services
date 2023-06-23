<html>

<head>
    <meta charset="utf-8">
    <title>Module</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php $this->load->view('admin/includes/css'); ?>
</head>

<body>

    <!--------------  HEADER ------------>

    <?php $this->load->view('admin/includes/header'); ?>

    <section class="spmbenefits mb-120">
        <img src="<?php echo base_url(); ?>assets/images/icons/team-bg-1-1.png" alt="" class="spmbenefits__bg">
        <div class="container">
            <div class="row">
                <div class="seller__content">
                    <div class="col-6">
                        <div class="block-title">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>Mobile & Web Panel</p>
                            <h3>Features & Benefits</h3>
                        </div><!-- /.block-title -->
                    </div>
                    <!-- If we need navigation buttons -->
                    <!-- <div class="seller__nav">
                            <div class="swiper-button-prev" id="seller__swiper-button-next"><i class="agrikon-icon-left-arrow"></i></div>
                            <div class="swiper-button-next" id="seller__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                        </div> -->
                    <!-- /.seller__nav -->
                </div>
                <div class="row spmbenefits__box">
                    <div class="col-6">
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
                                            <img src="<?php echo base_url(); ?>assets/images/resources/Manufacturer_Panel.jpg">
                                        </div><!-- /.team-card__image -->
                                        <!-- </div> -->
                                        <!-- /.team-card -->
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <!-- <div class="team-card"> -->
                                        <div class="team-card__image">
                                            <img src="<?php echo base_url(); ?>assets/images/resources/Wholesaler_Panel.jpg" alt=" ">
                                        </div><!-- /.team-card__image -->
                                        <!-- </div> -->
                                        <!-- /.team-card -->
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <!-- <div class="team-card"> -->
                                        <div class="team-card__image">
                                            <img src="<?php echo base_url(); ?>assets/images/resources/Retailer_Panel.jpg" alt=" ">
                                        </div><!-- /.team-card__image -->
                                        <!-- </div> -->
                                        <!-- /.team-card -->
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <!-- <div class="team-card"> -->
                                        <div class="team-card__image">
                                            <img src="<?php echo base_url(); ?>assets/images/resources/Manufacturer_Panel.jpg">
                                        </div><!-- /.team-card__image -->
                                        <!-- </div> -->
                                        <!-- /.team-card -->
                                    </div><!-- /.swiper-slide -->
                                </div><!-- /.swiper-wrapper -->

                            </div><!-- /.thm-swiper__slider -->
                        </div><!-- /.spmbenefits__carousel-wrap -->
                    </div>
                    <div class="col-5">
                        <div class="spmbenefits__content">
                            <div class="spmbenefits__summery">
                                <p>Product Management</p>
                                <p>Order Management</p>
                                <p>Account Management</p>
                                <p>Logistics Management</p>
                                <p>Bill Generation Tool</p>
                                <p>Admin Offers & Schemes</p>
                                <p>SMS Subscription</p>
                                <p>Live Support</p>
                                <p>Wallet</p>
                                <p>Reports</p>
                            </div><!-- /.spmbenefits__summery -->
                        </div><!-- /.spmbenefits__content -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
    </section><!-- /.spmbenefits -->

    <?php $this->load->view('admin/includes/footer'); ?>

</body>

</html>