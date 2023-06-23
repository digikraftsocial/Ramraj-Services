<html>

<head>
    <meta charset="utf-8">
    <title>Project Details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php $this->load->view('admin/includes/css'); ?>
</head>

<body>

    <?php $this->load->view('admin/includes/header'); ?>

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(<?php echo base_url(); ?>assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo base_url('Admin'); ?>">Home</a></li>
                <li>/</li>
                <li><span>Project Details</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2>Project Details</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="project-details">
        <div class="container">
            <img src="<?php echo base_url(); ?>assets/images/projects/project-d-1-1.jpg" class="img-fluid" alt="">
            <ul class="list-unstyled project-details__list">
                <li>
                    <span>Date:
                    </span>
                    20 July, 2020
                </li>
                <li>
                    <span>Client:
                    </span>
                    Mike Hardson
                </li>
                <li>
                    <span>Category:
                    </span>
                    Agriculture, Eco
                </li>
                <li>
                    <span>Service:
                    </span>
                    Organic Products
                </li>
            </ul><!-- /.list-unstyled project-details__list -->
            <h2>Harvest Innovations</h2>
            <p>
                Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed
                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var
                sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                only five centuries. Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum Take
                a look at our round up of the best shows coming soon to your telly box has been the is industrys. When an
                unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing.
            </p>
            <div class="bottom-content">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Most important and challenging
                            facts about this project</h3>
                        <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim
                            var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry.</p>
                        <ul class="list-unstyled project-details__check-list">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Take a look at our round up of the best shows
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                It has survived not only five centuries
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Lorem Ipsum has been the ndustry standard dummy text
                            </li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="project-details__images">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-d-2-1.jpg" alt="">
                            <img src="<?php echo base_url(); ?>assets/images/projects/project-d-2-2.jpg" alt="">
                        </div><!-- /.project-details__images -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.bottom-content -->
        </div><!-- /.container -->
    </section><!-- /.project-details -->

    <div class="projects-one project-page">
        <div class="container">
            <hr />
            <div class="block-title text-center">
                <div class="block-title__image"></div><!-- /.block-title__image -->
                <p>Closed projects</p>
                <h3>Latest Projects List</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="projects-one__single">
                        <img src="<?php echo base_url(); ?>assets/images/projects/project-1-1.jpg" alt="">
                        <div class="projects-one__content">
                            <h3>Harvest Innovation</h3>
                            <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                        </div><!-- /.projects-one__content -->
                    </div><!-- /.projects-one__single -->
                </div><!-- /.col-sm-12 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="projects-one__single">
                        <img src="<?php echo base_url(); ?>assets/images/projects/project-1-2.jpg" alt="">
                        <div class="projects-one__content">
                            <h3>Harvest Innovation</h3>
                            <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                        </div><!-- /.projects-one__content -->
                    </div><!-- /.projects-one__single -->
                </div><!-- /.col-sm-12 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="projects-one__single">
                        <img src="<?php echo base_url(); ?>assets/images/projects/project-1-3.jpg" alt="">
                        <div class="projects-one__content">
                            <h3>Harvest Innovation</h3>
                            <a href="<?php echo base_url('Project/projectdetails'); ?>" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                        </div><!-- /.projects-one__content -->
                    </div><!-- /.projects-one__single -->
                </div><!-- /.col-sm-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.projects-one-- >

    <?php $this->load->view('admin/includes/footer'); ?>
</body>

</html>