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
                <li class="breadcrumb-item"><a>Recommendations</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">Recommendations</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <?php //echo "<prE>";print_r($endorsements);die;?>
                   <form class="form" action="<?php echo base_url(); ?>admin/Updatehome" method="POST" id="Endorsements" enctype='multipart/form-data'>
						<div class="row justify-content-md-center">
							<div class="col-md-12">
								<div class="form-body">
								    <div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="eventInput1">Heading </label>
												   <input type="text" class="form-control" placeholder="Heading" name="recommendations_heading" <?php if($recommendations[66]!=''){ ?> value="<?php echo $recommendations[66]->option_value; ?>" <?php } ?> >
											</div>
										</div>
									</div>
									
										<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <?php if($recommendations[68]!='')
									   { 
									        $imgt = $recommendations[68]->option_value;
									 
									    }
									    else
									    {
									      $imgt =  'assets/admin/app-assets/images/dummy_image1.jpg';
									    }  
									    
									    ?>
									      <label for="eventInput1">Cover Image  </label>
									      <img id="imgFileUpload" alt="Select File" title="Select File" src="<?php echo base_url(); ?><?php echo $imgt;  ?>" style="cursor: pointer;width:100%;" />
                   
                                    <span id="spnFilePath"></span>
                                    <input type="file" id="FileUpload1" name="recommendations_cover_image" style="display: none" />
                                    <span class="uploaderror"></span>
									</div>
								</div>
								
							</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="eventInput1">Sub Heading </label>
												
												   <input type="text" class="form-control" placeholder="Sub Heading" name="recommendations_subheading" <?php if($recommendations[67]!=''){ ?> value="<?php echo $recommendations[67]->option_value; ?>" <?php } ?>>
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
