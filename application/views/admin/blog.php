<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <?php $this->load->view('admin/includes/css'); ?>
</head>

<body>

    <!--------------  HEADER ------------>

    <?php $this->load->view('admin/includes/header'); ?>

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(<?php echo base_url(); ?>assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo base_url('Admin'); ?>">Home</a></li>
                <li>/</li>
                <li><span>News</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2>News Grid</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
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
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
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
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
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
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="<?php echo base_url(); ?>assets/images/blog/blog-grid-4.jpg" alt="Bring to the table win-win survival">
                            <a href="<?php echo base_url('Blogdetail'); ?>"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-user-circle"></i> by Admin</a>
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-comments"></i> 2 Comments</a>
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="<?php echo base_url('Blogdetail'); ?>">Bring to the table win-win survival</a></h3>
                            <a href="<?php echo base_url('Blogdetail'); ?>" class="thm-btn">Read More</a><!-- /.thm-btn -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="<?php echo base_url(); ?>assets/images/blog/blog-grid-5.jpg" alt="At the end of the day, going forward">
                            <a href="<?php echo base_url('Blogdetail'); ?>"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-user-circle"></i> by Admin</a>
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-comments"></i> 2 Comments</a>
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="<?php echo base_url('Blogdetail'); ?>">At the end of the day, going forward</a></h3>
                            <a href="<?php echo base_url('Blogdetail'); ?>" class="thm-btn">Read More</a><!-- /.thm-btn -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="<?php echo base_url(); ?>assets/images/blog/blog-grid-6.jpg" alt="User generated content in real-time">
                            <a href="<?php echo base_url('Blogdetail'); ?>"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-user-circle"></i> by Admin</a>
                                <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-comments"></i> 2 Comments</a>
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="<?php echo base_url('Blogdetail'); ?>">User generated content in real-time</a></h3>
                            <a href="<?php echo base_url('Blogdetail'); ?>" class="thm-btn">Read More</a><!-- /.thm-btn -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
            </div><!-- /.row -->
            <div class="text-center more-btn__box">
                <a href="#" class="thm-btn">Load More</a><!-- /.thm-btn -->
            </div><!-- /.text-center -->
        </div><!-- /.container -->
    </section><!-- /.blog-grid -->

    <?php $this->load->view('admin/includes/footer'); ?>

</body>

</html>