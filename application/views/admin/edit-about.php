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
                <li class="breadcrumb-item"><a>About Us</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">About Us</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                   <form class="form" action="<?php echo base_url(); ?>admin/Updatehome" method="POST" id="AboutUs" enctype='multipart/form-data'>
						<div class="row justify-content-md-center">
							<div class="col-md-12">
								<div class="form-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="eventInput1">Heading</label>
												
												   <input type="text" class="form-control" placeholder="Heading" name="about_heading" value="<?php echo $about[10]->option_value; ?>">
											</div>
										</div>
									</div>
									
										<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									      <label for="eventInput1">Cover Image  </label>
									      <img id="imgFileUpload" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $about[11]->option_value; ?>" style="cursor: pointer;width:100%;" />
                   
                                    <span id="spnFilePath"></span>
                                    <input type="file" id="FileUpload1" name="about_cover_image" style="display: none" />
                                    <span class="uploaderror"></span>
									</div>
								</div>
								
							</div>
							<div class="row">
							    <div class="col-md-12">
									<div class="form-group">
									      <label for="eventInput1">Select Image  </label>
									      <img id="imgFileUpload1" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $about[12]->option_value; ?>" style="cursor: pointer;" />
                   
                                    <span id="spnFilePath1"></span>
                                    <input type="file" id="FileUpload12" name="about_image" style="display: none" />
                                    <span class="uploaderror2"></span>
									</div>
								</div>
							</div>
										
							<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">Job Addes </label>
												
												   <input type="text" class="form-control" placeholder="Heading" name="about_jobaddes" value="<?php echo $about[20]->option_value; ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">Active Resumes</label>
												
												   <input type="text" class="form-control" placeholder="Heading" name="about_active" value="<?php echo $about[21]->option_value; ?>">
											</div>
										</div>
											<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">Positive Matched</label>
												
												   <input type="text" class="form-control" placeholder="Heading" name="about_positive" value="<?php echo $about[22]->option_value; ?>">
											</div>
										</div>
									</div>
									
									
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											  <label for="eventInput1">Content   </label>
											  
												<textarea class="content-text" name="about_description"><?php echo $about[13]->option_value; ?></textarea>

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
var a=1;
var b=1;
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
                    a=0;
                    $('#AboutUs').attr('onsubmit','return false');
                }else
                {   a=1;
                    $('.uploaderror').html("");
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                    filePath.html("<b>Selected File: </b>" + fileName);
                     $('#AboutUs').attr('onsubmit','return true');
                }
        });
    });
    
    
     $(function () {
        var fileupload = $("#FileUpload12");
        var filePath = $("#spnFilePath1");
        var image = $("#imgFileUpload1");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
             var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror2').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror2').css({'color':'red'});
                    b=0;
                    $('#AboutUs').attr('onsubmit','return false');
                }else
                {
                    b=1
                    $('.uploaderror2').html("");
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                    filePath.html("<b>Selected File: </b>" + fileName);
                     $('#AboutUs').attr('onsubmit','return true');
                }
        });
    });
    
     $('#AboutUs').submit(function(){
            if(a==1 && b==1)
            {
                return true;
            }
            else
            {
                return false;
            }
            
        });
</script>
