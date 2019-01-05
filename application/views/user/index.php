<?php include('header.php'); ?>

    <div class="indexpage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="sidebar">
                        <img src="<?php echo base_url(); ?>assets/images/sidebar1.jpg">
                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#uploadprofile "><i class="fa fa-user-o" aria-hidden="true"></i> Update your profile</a></li>
                            <li><a href="<?php echo base_url('user/setting'); ?>"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter "><i class="fa fa-wrench" aria-hidden="true"></i>Tools</a></li>
                            <!-- Modal -->

                            <!--End Modal -->
                            <li><a href="<?php echo base_url('public-profile'); ?>"><i class="fa fa-user-o" aria-hidden="true"></i> Preview My Profile</a></li>
                            <li><a href="#"><i class="fa fa-umbrella" aria-hidden="true"></i> Vacation Mode</a></li>
                        </ul>

                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>

                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="bg-whites">
                        <div class="content">
                            <div class="bytton-inlineblock">
                                <h4>Yours Published Offers:</h4>

                            </div>

                            <div class="content-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                        <a href="<?php echo base_url('pending-job'); ?>">
                                            <div class="dashboard-stat color-1">
                                                <div class="dashboard-stat-content">
                                                    <h4>$200</h4> <span>Guest Hosting</span></div>
                                                <div class="dashboard-stat-icon"><i class="fa fa-handshake-o"></i></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                        <a href="<?php echo base_url('pending-job'); ?>">
                                            <div class="dashboard-stat color-1">
                                                <div class="dashboard-stat-content">
                                                    <h4>$350</h4> <span>Shout Out</span></div>
                                                <div class="dashboard-stat-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                        <a href="../pending-job.php">
                                            <div class="dashboard-stat color-1">
                                                <div class="dashboard-stat-content">
                                                    <h4>$300</h4> <span>Instagram Story</span></div>
                                                <div class="dashboard-stat-icon"><i class="fa fa-file-o" aria-hidden="true"></i></div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                        <a href="<?php echo base_url('pending-job'); ?>">
                                            <div class="dashboard-stat color-1">
                                                <div class="dashboard-stat-content">
                                                    <h4>$200</h4> <span>Product Review</span></div>
                                                <div class="dashboard-stat-icon"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                        <a href="#" class="offer-link" data-toggle="modal" data-target="#addnewmodel">
                                            <div class="dashboard-stat background-color">
                                                <span class="offer-txt"><i class="fa fa-plus" aria-hidden="true"></i> New offer</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-whites">
                        <div class="content ">
                            <div class="bytton-inlineblock">
                                <h4>Campaigns in Discussion:</h4>

                            </div>

                             <div class="content-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                        <a href="<?php echo base_url('pending-job'); ?>">
                                            <div class="dashboard-stat color-1">
                                                <div class="dashboard-stat-content">
                                                    <h5>Instagram Story</h5>
                                                    <h6>Pending brand Payment</h6></div>
                                                <div class="dashboard-stat-icon">
                                                    <h4>$500</h4></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="bg-whites">
                        <div class="content">

                            <div class="bytton-inlineblock">
                                <h4>Jobs Pending Completion:</h4>

                            </div>

                            <div class="content-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                        <a href="<?php echo base_url('pending-job'); ?>">
                                            <div class="dashboard-stat color-1">
                                                <div class="dashboard-stat-content">
                                                    <h5>Product Review</h5>
                                                    <h6>Completed 12/19/18</h6></div>
                                                <div class="dashboard-stat-icon">
                                                    <h4>$200</h4></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                        <a href="<?php echo base_url('pending-job'); ?>">
                                            <div class="dashboard-stat color-1 psoition"> <a href="<?php echo base_url('pending-job'); ?>"><span>2</span></a>
                                                <div class="dashboard-stat-content">
                                                    <h5>Shout Out</h5>
                                                    <h6>Due 12/19/18</h6></div>
                                                <div class="dashboard-stat-icon">
                                                    <h4>$350</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="bg-whites mb-0">
                        <div class="content">

                            <div class="bytton-inlineblock">
                                <h4>Recently Completed Jobs:</h4>

                            </div>

                            <div class="content-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                        <a href="<?php echo base_url('pending-job'); ?>">
                                            <div class="dashboard-stat color-1">
                                                <div class="dashboard-stat-content">
                                                    <h5>Product Review</h5>
                                                    <h6>Due 12/19/18</h6></div>
                                                <div class="dashboard-stat-icon">
                                                    <h4>$200</h4></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <?php 
include('footer.php');
?>