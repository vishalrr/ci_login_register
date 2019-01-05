<?php include('header.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard';?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a>Site Settings</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
           <?php include('inc/message.php'); ?>
        <!-- Basic form layout section start -->
		 <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form-center">Site Settings</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    
                    <form class="form" action="<?php echo base_url(); ?>admin/Updatesetting" method="POST" id="Settings" enctype='multipart/form-data'>
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="eventInput1">Website Name </label>
										<input type="text" class="form-control" placeholder="Admin Email" name="website_name" value="<?php echo $setting[47]->option_value; ?>">
									
									</div>
								
									<div class="form-group">
									  <label for="eventInput1">Website Keywords </label>
									  <input type="text" class="form-control" placeholder="Site Address" name="website_keywords" value="<?php echo $setting[48]->option_value; ?>">
									</div>
								
								
								
									<!--div class="form-group">
									  <label for="eventInput1">Website Team  </label>
									  <input type="text" class="form-control" placeholder="Facebook Url" name="fullname" value="We Hire Finance">
									</div-->
									<div class="form-group">
										<label for="eventInput1">Website url  </label>
										<input type="text" class="form-control" name="website_url" value="<?php echo $setting[49]->option_value; ?>">
									</div>
									<div class="form-group">
										<label for="eventInput1">Mail url  </label>
										<input type="email" class="form-control" name="mail_url" value="<?php echo $setting[50]->option_value; ?>">
									</div>
									<div class="form-group">
										<label for="eventInput1">Contact No </label>
										<input type="number" class="form-control" placeholder="" name="web_contact" value="<?php echo $setting[51]->option_value; ?>">
									</div>
								</div>
							
								<div class="col-md-6">
									<div class="form-group">
										<label for="eventInput1">Website Admin  </label>
										<input type="email" class="form-control" placeholder="Linkedin Url" name="webadmin_email" value="<?php echo $setting[52]->option_value; ?>">
									</div>
									<div class="form-group">
										<label for="eventInput1">Reply mail  </label>
										<input type="email" class="form-control" placeholder="Linkedin Url" name="employer_email" value="<?php echo $setting[53]->option_value; ?>">
									</div>
									
									<!-- <div class="form-group forms-radio w-100">
										<label for="eventInput1" class="label-full">Payment Method </label>
									
										<div class="skin skin-flat rad-mr">
										    	
											<input type="radio" name="payment_method" id="input-radio-15a" value="0" <?php if($setting[54]->option_value==0){  echo "checked"; } ?> >
										
											<label for="input-radio-15a">Free</label>
										</div>
										<div class="skin skin-flat rad-mr">
											<input type="radio" name="payment_method" id="input-radio-15b" value="1" <?php if($setting[54]->option_value==1){  echo "checked"; } ?> >
											
											<label for="input-radio-15b">Payment   </label>
										</div>
									   
									</div> -->
									
										
									<div class="form-group">
									      <label for="eventInput1">Existing Site Logo</label>
									      <img style="max-height: 80px;border: 1px dashed #ddd;
    padding: 10px;margin-left: 50px;" id="imgFileUpload" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $setting[57]->option_value; ?>" style="cursor: pointer" />
                   
                                    <span id="spnFilePath"></span>
                                    <input type="file" id="FileUpload1" name="site_logo" style="display: none" />
                                    <span class="uploadresum" style="float:left;"></span>
									</div>
									
								      
							
								
									
									<!--div class="form-group">
										<label for="eventInput1">Existing Site Logo  </label>
										<img src="app-assets/images/logo/logo.png" width="149" height="47" border="0" style="background: #000;height: 80px;padding: 10px 10px;">
									</div-->
									<!-- <div class="form-group">
										<label for="eventInput1">Paypal Email Id  </label>
										<input type="email" class="form-control" placeholder="Linkedin Url" name="paypal_email" value="<?php echo $setting[55]->option_value; ?>">
									</div> -->
									<!--div class="form-group">
										<label for="eventInput1">CC Avenue Merchant Id </label>
										<input type="email" class="form-control" placeholder="" name="fullname" value="">
									</div>
									<div class="form-group">
										<label for="eventInput1">CC Avenue Working Key </label>
										<input type="email" class="form-control" placeholder="" name="fullname" value="">
									</div>
									<div class="form-group">
										<label for="eventInput1">CC Avenue return URL </label>
										<input type="email" class="form-control" placeholder="" name="fullname" value="">
									</div-->
										
								</div>
								
								
							</div>
						<div class="row">
							<div class="col-md-12">
							    <div class="form-group">
										<label for="eventInput1">Website Description  </label>
										<textarea class="form-control" rows="5" cols="10" name="web_description"><?php echo $setting[56]->option_value; ?>
										</textarea>
										<!--input type="text" class="form-control" placeholder="Records Per Page" name="fullname" value="30"-->
									</div>
							</div>
								</div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions left brdr-none">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Save
                        </button>
					 </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
	     </div>	  	 </div>	   	
    <?php include('footer.php') ?>
    <script type="text/javascript">
    $(function () {
        var fileupload = $("#FileUpload1");
        var filePath = $("#spnFilePath");
        var image = $("#imgFileUpload");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
              var fileExtensions = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtensions) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploadresum').html("Only formats are allowed : "+fileExtensions.join(', '));
                    $('.uploadresum').css({'color':'red'});
                     $('#Settings').attr('onsubmit','return false');
                     
                }else
                {
                    $('.uploadresum').html('');
                     $('#Settings').attr('onsubmit','return true');
                   var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                     filePath.html(fileName);
                }
           
            // $('#imgFileUpload').attr('src', this.href);
        });
    });
    </script>
