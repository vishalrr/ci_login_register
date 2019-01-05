<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<a href="index.php"><img src="<?php echo base_url(); ?>assets/images/footer-logo.png"></a>
			</div>
			<div class="col-sm-3 equal-wd1">
				<h3>Have Questions? call us!</h3>
				<ul>
					<li>1-833-4-Kyndoo</li>
					<li class="lowe-txt"><a href="telto:833-459-6366">(833-459-6366)</a></li>
				</ul>
			</div>
			<div class="col-sm-2 equal-wd2">
				<h3>About Kyndoo</h3>
				<ul class="">
					<li><a href="<?php echo base_url('about'); ?>">About us</a></li>
					<li><a href="<?php echo base_url('influencers'); ?>">For Influencers</a></li>
					<li><a href="<?php echo base_url('brand'); ?>">For Brands</a></li>
					<li><a href="#">Careers</a></li>
				</ul>
			</div>
		
			<div class="col-sm-2 equal-wd3">
				<h3>Trust & Safety</h3>
				<ul>
					<li><a href="<?php echo base_url('terms'); ?>">Terms of service</a></li>
					<li><a href="<?php echo base_url('privacy'); ?>">Privacy Policy</a></li>
					<li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
				</ul>
			</div>
			
			<div class="col-sm-2 equal-wd4">
				<h3 class="d-none d-lg-block">Social Media</h3>
				<ul class="social-media-links">
					<li><i class="fab fa-instagram"></i></li>
					<li><i class="fab fa-facebook-square"></i></li>
					<li><i class="fab fa-twitter-square"></i></li>
					<li><i class="fab fa-linkedin-square"></i></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="copy-right-footer">
					<p>Copyright 2019</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" ></script>
   
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    jQuery(function() {
        jQuery("#datepicker4").datepicker();
        jQuery("#datepicker").datepicker();
    });
</script>
<script>
    jQuery(function() {
        jQuery("#datepicker5").datepicker();
        jQuery("#datepicker").datepicker();
    });
</script>
  </body>
</html>

<!-- Modal -->
<div class="modal fade" id="newbrandpopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content Brand-popup">
            <div class="modal-header p-1 self-header">
                <h5 class="p-3 m-0 text-white text-uppercase">Request New offer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group ">
                            <label class="text-white">Number of post required</label>
                            <input type="email" class="form-control rounded-0 border-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <label class="text-white">Which Social Channels</label>
                        <div class="form-group ">
                            <textarea class="form-control h-25 rounded-0 border-0" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label class="text-white">Start Date</label>

                        <div class="form-group mb-0">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend ">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input type="text" class="form-control border-0 rounded-0" name="text" id="datepicker4">
                            </div>
                        </div>
                        <label class="text-white">End Date</label>
                        <div class="form-group mb-0">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input type="text" class="form-control border-0 rounded-0" name="text" id="datepicker5">
                            </div>
                        </div>
                        <label class="text-white">Budget</label>
                        <div class="form-group">
                            <div class="input-group mb-2">

                                <input type="text" class="form-control border-0 rounded-0" name="text" id="text">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <label class="text-white">Description of the product:</label>
                        <div class="form-group w-100 float-left">
                            <textarea class="form-control h-25 border-0 rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="text-white">Aim of the campaign:</label>
                        <div class="form-group w-100 float-left">
                            <textarea class="form-control border-0 h-25 rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="text-white">Website URL:</label>
                        <div class="form-group w-100 float-left">
                            <input type="email" class="form-control border-0 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="text-white">Who is your target audience:</label>
                        <div class="form-group w-100 float-left">
                            <textarea class="form-control h-25 border-0 rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="text-white">Are there any specific requirements on the campaign:</label>
                        <div class="form-group w-100 float-left">
                            <textarea class="form-control h-25 border-0 rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="text-white">Please Describe your desired "Look" , "Feel" , "Style" of the post:</label>
                        <div class="form-group w-100 float-left">
                            <textarea class="form-control h-25 border-0 rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 pt-3 pb-3">
                        <button type="button" class="btn btn-default float-right bg-dark text-white bottom-model-btn border-butn" data-dismiss="modal"> Submit for quote</button>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<!--- EndModal -->