<?php
include('header.php');
?>
    <div class="cover-about">
        <div class="container">
            <div class="row row mt-xl-5 mt-4">
                <div class="col-lg-12">
                    <div class="title">
                        <h3 class="text-center p-4 pb-2">Lorem Ipsum is simply dummy text of the printing and <br/>typesetting industry.</h3>
                        <p class="text-center text-muted p-0 mt-2 sm-mt-3">Nam libero tempore amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </br>
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            <br/>consequatduis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="about_boxes bg-white mt-3 text-center rounded ">
                        <div class="about_icon">
                            <i class="self-bg"> <img src="<?php echo base_url(); ?>assets/images/eye.png"></i>
                        </div>
                        <div class="about_content mt-3 mt-sm-4">
                            <h5 class="font-weight-bold mb-0">Our Vission</h5>
                            <p class="text-muted mb-0 p-0 mt-2 sm-mt-3">Everyone can earn an exceptional living sharing their absolute passions.</p>
                            <div id="target1" class="text-muted mb-0 ">Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</div>
                            <button class="Show1">Read More</button>
                            <button class="Hide1">Read Less</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sec-box">
                    <div class="about_boxes bg-white mt-3 text-center rounded ">
                        <div class="about_icon ">
                            <i class="self-bg"> <img src="<?php echo base_url(); ?>assets/images/flag.png"></i>
                        </div>
                        <div class="about_content mt-3 mt-sm-4">
                            <h5 class="font-weight-bold mb-0">Our Mission</h5>
                            <p class="text-muted mb-0 p-0 mt-2 sm-mt-3">We connect social media influencers with brands for markerting campaigns.<!-- Our technology at kyndoo makes influencer marketing a no-brainer. As a curated marketplace we represent both the influencers and the brands. Ensuring highest ROI fOR marketers and leading to client retention and growth for the influencers.--></p>
                        <div id="target2" class="text-muted mb-3 ">Our technology at kyndoo makes influencer marketing a no-brainer. As a curated marketplace we represent both the influencers and the brands. Ensuring highest ROI fOR marketers and leading to client retention and growth for the influencers.</div>
                        <button class="Show2">Read More</button>
<button class="Hide2">Read Less</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about_boxes bg-white mt-3 text-center rounded ">
                        <div class="about_icon">
                            <i class="self-bg"> <img src="<?php echo base_url(); ?>assets/images/auction.png"></i>

                        </div>
                        <div class="about_content mt-3 mt-sm-4">
                            <h5 class="font-weight-bold mb-0">Our Values</h5>
                            <p class="text-muted mb-0 mt-3 p-0">LISTEN,LISTEN,LISTEN</br>
                                No assholes! No Bureaucrats!</p>
                            <div id="target" class="text-muted mb-3 ">Save the drama for your mama Act as an Owner, You are one Executiob over everything The glass is half full it's aLWAYS NOW! No Spin Zone Data rules all</div>
                            <button class="Show">Read More</button>
<button class="Hide">Read Less</button>
                            <!--<div class="mt-3 about_btn">
                                <a href="#"><img src="./images/right-arrow.png"></a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=" bg-cta-img mt-5">
     
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="text-white">
                        <h4 class="font-weight-normal cta_title">Become a part of Kyndoo</h4>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-12">
                    <div class="hiring-text"><a class="btn-large" href="#">We are Hiring!</a></div>
                </div>
                    
                </div>
            </div>
        </div>
    </section>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" ></script>
<script>
    
    jQuery('.Show').click(function() {
    jQuery('#target').show(500);
    jQuery('.Show').hide(0);
    jQuery('.Hide').show(0);
});
jQuery('.Hide').click(function() {
    jQuery('#target').hide(500);
    jQuery('.Show').show(0);
    jQuery('.Hide').hide(0);
});
</script>
<script>
    
    jQuery('.Show2').click(function() {
    jQuery('#target2').show(500);
    jQuery('.Show2').hide(0);
    jQuery('.Hide2').show(0);
});
jQuery('.Hide2').click(function() {
    jQuery('#target2').hide(500);
    jQuery('.Show2').show(0);
    jQuery('.Hide2').hide(0);
});
</script>
<script>
    
    jQuery('.Show1').click(function() {
    jQuery('#target1').show(500);
    jQuery('.Show1').hide(0);
    jQuery('.Hide1').show(0);
});
jQuery('.Hide1').click(function() {
    jQuery('#target1').hide(500);
    jQuery('.Show1').show(0);
    jQuery('.Hide1').hide(0);
});
</script>
    <?php
include('footer.php');
?>