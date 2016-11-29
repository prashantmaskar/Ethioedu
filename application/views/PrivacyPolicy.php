<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
                 
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="Privacy_Policy_details">
                    
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Privacy Policy </h1>
                            </div>
                        </div><?php
                                foreach ($PrivacyPolicy as $row){ ?>
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading"><?php echo $row['post_title'];?></h1>
                            </div>
                        </div>
                        <div class="col s12 m12 ">
                            <p class="black-text">Last date Modified:  <?php echo $row['post_date']; ?></p>
                        </div>
                        </div>
                        <div class="col m12 s12">
                            <p class="black-text"><?php echo $row['post_desc']; ?></p>
                        </div>
                        <div class="col s12 m12 ">
                            
                        </div>
                        <?php } ?>

                    </div>
                </div>

                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>