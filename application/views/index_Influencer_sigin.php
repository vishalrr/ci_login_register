<?php include('header-orange.php'); ?>

<div class="banner register-form-banner login-main-cover signinpage">
    <div class="sigin-in-cover">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12 offset-xl-3 offset-lg-2">	
      
                <div class="container">
                    <div class="row">
                        <div class="pr-md-0 col-md-6 col-sm-12">
                            <div class="right-image right-sign-in-login signin-contentsection box-height">
                                <h1>Welcome</h1>
                                <span>Lorem Ipsum is simply dummy text !</span>
                                <ul>
                                    <li>Secure and reliable for users</li>
                                    <li>Works 15% faster then others</li>
                                    <li>Secure and reliable for users</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pl-md-0 col-md-6 col-sm-12">
                            <div class=" signin-section  main-login main-center box-height">
                                <h1 class="page-tablet-title">Sign In</h1>
                                <form class="form-horizontal" method="post" action="#">
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                        
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                           
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                                    </div>
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
        								<a href="<?php echo base_url(); ?>user/">
        									<input type="button" class="btn btn-primary btn-lg btn-block login-button" value="Sign-In" />
        								</a>
        							</div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>