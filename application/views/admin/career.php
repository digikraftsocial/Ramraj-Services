<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
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
                <li><span>Career</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2>Career</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="career-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="career-card">
                        <div class="career-card__content">
                            <h3>Warehouse Partner</h3>
                            <a>Skills - Microsoft Word, Excel, Customer<br>Relationship Management, Business Management</a>
                            <p>Description - Ramraj Services is supply chain management system where a Warehouse Partner will handle Ramraj Warehouse. That includes warehouse management, stock management, supply management, product sales etc. As a warehouse partner you will handle it and report it to our BDM( Business Development Manager).</p>
                        </div><!-- /.career-card__content -->
                        <div class="career-button">
                            <a href="#" style="line-height: 2.125;" class="thm-btn">Apply</a><!-- /.thm-btn -->
                        </div>
                    </div><!-- /.career-card -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="career-card">
                        <div class="career-card__content">
                            <h3>Business Associate Partner</h3>
                            <a>Skills - Microsoft Word, Excel, Marketing, Excellent Communication, Customer Relationship Management</a>
                            <p>Description - As a Business Associate Partner you will be responsible for ground level activities, BAP will create/ register new Retailer & Retailer Logistics, Service Providers and will be providing technical & physical support to solve there queries about Ramraj Services. BAP will report there status to there State Head and be getting instructions from State Head of their State. As a BAP you will be visiting fields time to time to interact with Retailers, Service Providers and Farmers.</p>
                        </div><!-- /.career-card__content -->
                        <div class="career-button">
                            <div class="career-button-box">
                                <a href="#" style="line-height: 2.125;" class="thm-btn">Apply</a><!-- /.thm-btn -->
                            </div><!-- /.career-button-box -->
                        </div>
                    </div><!-- /.career-card -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="career-card">
                        <div class="career-card__content">
                            <h3>Business Development Manager</h3>
                            <a>Skills - Microsoft Word, Excel, Marketing, Communication<br>Skills, Management, Business Development, Problem Solving, Leadership</a>
                            <p>Description - A Business Development Manager will have 4-5 district within his jurisdiction and responsible for the business development. Business development managers are responsible for driving business growth within a company. They develop a network of contacts to attract new clients, research new market opportunities and oversee growth projects, making sales projections and forecasting revenue, in line with projected income.</p>
                        </div><!-- /.career-card__content -->
                        <div class="career-button">
                            <div class="career-button-box">
                                <a href="#" style="line-height: 2.125;" class="thm-btn">Apply</a><!-- /.thm-btn -->
                            </div><!-- /.career-button-box -->
                        </div>
                    </div><!-- /.career-card -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.career-details -->

    <?php $this->load->view('admin/includes/footer'); ?>

</body>

</html>