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
                <li class="breadcrumb-item"><a>Privacy Policy</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
		 <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form-center">Privacy Policy</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    
                   <form class="form" action="<?php echo base_url(); ?>admin/Updatehome" method="POST" id="Policy" enctype='multipart/form-data'>
						<div class="row justify-content-md-center">
							<div class="col-md-12">
								<div class="form-body">
								    <div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="eventInput1">Choose your heading to edit </label>
												
												   <input type="text" class="form-control" placeholder="Heading" name="policy_heading" value="<?php echo $policy[17]->option_value; ?>">
											</div>
										</div>
									</div>
									
										<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									      <label for="eventInput1">Cover Image  </label>
									      <img id="imgFileUpload" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $policy[18]->option_value; ?>" style="cursor: pointer;width:100%;" />
                   
                                    <span id="spnFilePath"></span>
                                    <input type="file" id="FileUpload1" name="privacy_cover_image" style="display: none" />
                                    <span class="uploaderror"></span>
									</div>
								</div>
								
							</div>
									
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											  <label for="eventInput1">Content   </label>
											  
												<textarea class="content-text" name="policy_description"><?php echo $policy[19]->option_value; ?></textarea>

											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="form-actions left">
							<button type="submit" class="btn btn-success">
								<i class="la la-check-square-o"></i> Save
							</button>
							<a href="<?php echo base_url().'admin/content-pages'?>"  class="btn btn-danger">
								<i class="la la-close"></i> Cancel
							</a>
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
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').css({'color':'red'});
                    $('#Policy').attr('onsubmit','return false');
                }else
                {
                    $('.uploaderror').html("");
                     $('#Policy').attr('onsubmit','return true');
                }
        });
    });
    </script>
