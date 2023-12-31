<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-Details</title>
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
                <li><span>News Details</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2>News Details</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details__image">
                        <img src="<?php echo base_url(); ?>assets/images/blog/blog-d-1-1.jpg" class="img-fluid" alt="">
                    </div><!-- /.blog-details__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                        <div class="blog-card__meta">
                            <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="<?php echo base_url('Blogdetail'); ?>"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3><a href="<?php echo base_url('Blogdetail'); ?>">Best Way to Do Eco and Agriculture</a></h3>
                    </div><!-- /.blog-card__content -->
                    <div class="blog-details__content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some injected or words which don't look even slightly believable. If you are going
                            to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                            the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                            chunks as necessary, making this the first true generator on the Internet. It uses a dictionary
                            of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem
                            Ipsum which looks reasonable. </p>
                        <p>
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                            only five centuries, but also the leap into electronic typesetting.
                        </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                        </p>
                    </div><!-- /.blog-details__content -->

                    <div class="blog-details__meta">
                        <div class="blog-details__tags">
                            <span>Tags:</span>
                            <a href="#">Agriculture,</a>
                            <a href="#">Food,</a>
                            <a href="#">Economy</a>
                        </div><!-- /.blog-details__tags -->
                        <div class="blog-details__social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div><!-- /.blog-details__social -->
                    </div><!-- /.blog-details__meta -->

                    <div class="blog-author">
                        <div class="blog-author__image">
                            <img src="<?php echo base_url(); ?>assets/images/blog/blog-author-1-1.jpg" alt="">
                        </div><!-- /.blog-author__image -->
                        <div class="blog-author__content">
                            <h3>Kevin Martin</h3>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining unchanged. It was popularised in the sheets containing.</p>
                        </div><!-- /.blog-author__content -->
                    </div><!-- /.blog-author -->

                    <div class="blog-comment">
                        <h2>2 Comments</h2>
                        <div class="blog-comment__box">
                            <div class="blog-comment__image">
                                <img src="<?php echo base_url(); ?>assets/images/blog/comment-1-1.jpg" alt="">
                            </div><!-- /.blog-comment__image -->
                            <div class="blog-comment__content">
                                <h3>Jessica Brown</h3>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting
                                    unchanged. It was popularised in the sheets If you are going to use a passage of Lorem
                                    Ipsum, you need to be is simply free text.</p>
                                <a href="#" class="thm-btn">Reply</a><!-- /.thm-btn -->
                            </div><!-- /.blog-comment__content -->
                        </div><!-- /.blog-comment__box -->
                        <div class="blog-comment__box">
                            <div class="blog-comment__image">
                                <img src="<?php echo base_url(); ?>assets/images/blog/comment-1-2.jpg" alt="">
                            </div><!-- /.blog-comment__image -->
                            <div class="blog-comment__content">
                                <h3>Jessica Brown</h3>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting
                                    unchanged. It was popularised in the sheets If you are going to use a passage of Lorem
                                    Ipsum, you need to be is simply free text.</p>
                                <a href="#" class="thm-btn">Reply</a><!-- /.thm-btn -->
                            </div><!-- /.blog-comment__content -->
                        </div><!-- /.blog-comment__box -->
                    </div><!-- /.blog-comment -->
                    <div class="comment-form">
                        <h2>Leave a Comments</h2>

                        <form action="<?php echo base_url(); ?>assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">Submit Comment</button><!-- /.thm-btn -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.comment-form -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="blog-sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="agrikon-icon-magnifying-glass"></i></button>
                            </form>
                        </div><!-- /.blog-sidebar__search -->
                        <div class="blog-sidebar__posts">
                            <h3>Recent Posts</h3>
                            <ul>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/blog/blog-s-1-1.jpg" alt="">
                                    <span><i class="far fa-comments"></i> 2 Comments
                                    </span>
                                    <h4><a href="<?php echo base_url('Blogdetail'); ?>">Agriculture Miracle
                                            you Don't Know</a></h4>
                                </li>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/blog/blog-s-1-2.jpg" alt="">
                                    <span><i class="far fa-comments"></i> 2 Comments
                                    </span>
                                    <h4><a href="<?php echo base_url('Blogdetail'); ?>">Agriculture Miracle
                                            you Don't Know</a></h4>
                                </li>
                                <li>
                                    <img src="<?php echo base_url(); ?>assets/images/blog/blog-s-1-3.jpg" alt="">
                                    <span><i class="far fa-comments"></i> 2 Comments
                                    </span>
                                    <h4><a href="<?php echo base_url('Blogdetail'); ?>">Agriculture Miracle
                                            you Don't Know</a></h4>
                                </li>
                            </ul>
                        </div><!-- /.blog-sidebar__posts -->
                        <div class="blog-sidebar__categories">
                            <h3>Catgories</h3>
                            <ul>
                                <li>
                                    <a href="#"><i class="agrikon-icon-right-arrow"></i>Agriculture
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="agrikon-icon-right-arrow"></i>

                                        Organic Food</a>
                                </li>

                                <li>
                                    <a href="#"><i class="agrikon-icon-right-arrow"></i>Dairy Farm</a>
                                </li>

                                <li>
                                    <a href="#"><i class="agrikon-icon-right-arrow"></i>Economy Solution</a>
                                </li>

                                <li>
                                    <a href="#"><i class="agrikon-icon-right-arrow"></i>Harvests Innovations</a>
                                </li>
                            </ul>
                        </div><!-- /.blog-sidebar__categories -->
                        <div class="blog-sidebar__tags">
                            <h3>Tags</h3>
                            <div class="blog-sidebar__tags-links">
                                <a href="#">Agriculture,</a>
                                <a href="#">Food,</a>
                                <a href="#">Healthy,</a>
                                <a href="#">Dairy,</a>
                                <a href="#">Organic,</a>
                                <a href="#">Farm,</a>
                                <a href="#">Economy</a>
                            </div><!-- /.blog-sidebar__tags-links -->
                        </div><!-- /.blog-sidebar__tags -->
                    </div><!-- /.blog-sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-details -->

    <?php $this->load->view('admin/includes/footer'); ?>
</body>

</html>