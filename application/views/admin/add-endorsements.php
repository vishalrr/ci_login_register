<?php include('header.php');?>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
			<div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
				<div class="row breadcrumbs-top d-inline-block pull-left">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							 <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/endorsements">Endorsements</a>
                </li>
                <li class="breadcrumb-item"><a><?php if(!empty($endorsements[0])){ echo 'Edit Endorsements'; }else{ echo 'Add Endorsements'; } ?></a>
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
                  <h4 class="card-title" id="basic-layout-form-center"><?php if(!empty($endorsements[0])){ echo 'Edit Endorsements'; }else{ echo 'Add Endorsements'; } ?></h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <?php include('inc/message.php'); ?>
                     	<form class="form endorsementsform" action="<?php echo base_url(); ?>admin/customendorsements?do=add&&tbl=endorsements&&redirect=admin/endorsements&&error=add_endorsements" method="post" enctype='multipart/form-data'>
						<div class="row justify-content-md-center">
							<div class="col-md-12">
								<div class="form-body">
									<div class="row">
									    
									    
									    
										<div class="col-md-12">
										    <input type="hidden" name="id" value="<?php if(!empty($endorsements[0])){ echo $endorsements[0]->id; }else{ echo'';} ?>">
											<div class="form-group">
												<label for="eventInput1">Title</label>
												<input type="text" class="form-control" name="title" value="<?php if(!empty($endorsements[0])){ echo $endorsements[0]->title;}else{ echo'';} ?>" >
											</div>
										</div>
										
											<div class="col-md-12">
										    
											<div class="form-group">
												<label for="eventInput1">Name</label>
												<input type="text" class="form-control" name="name" value="<?php if(!empty($endorsements[0])){ echo $endorsements[0]->name;}else{ echo'';} ?>" >
											</div>
										</div>
										
									</div>
									
									<div class="form-group">
									<label for="eventInput1">Description</label>
									<textarea class="form-control" name="description"  rows="5" cols="10" required><?php if(!empty($endorsements[0])){ echo $endorsements[0]->description;}else{ echo'';} ?></textarea>
								
								</div>
								
								<div class="row">
								<div class="col-md-12">
								    <?php if(!empty($endorsements[0]->profile_img)){
									   
									        $imgt = $endorsements[0]->profile_img;
									
									    }
									    else
									    {
									      $imgt =  'assets/admin/app-assets/images/dummy_image1.jpg';
									    }  
									    
									    ?>
									<div class="form-group">
									      <label for="eventInput1">Cover Image  </label>
									      <img id="imgFileUpload" alt="Select File" title="Select File" src="<?php echo base_url(); ?><?php echo $imgt; ?>" style="cursor: pointer;width:25%;" />
                   
                                    <span id="spnFilePath"></span>
                                    <input type="file" id="FileUpload1" name="profile_img" style="display: none" />
                                    <span class="uploaderror"></span>
									</div>
								</div>
								
							</div>
								
								
									
								</div>
							</div>
						</div>
						<div class="form-actions left">
							<button type="submit" class="btn btn-success addendfrom">
								<i class="la la-check-square-o"></i> Save
							</button>
							<a href="<?php echo base_url(); ?>admin/endorsements" class="btn btn-danger">
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
    <script>
    
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
                    $('.endorsementsform').attr('onsubmit','return false');
                }else
                {   a=1;
                    $('.uploaderror').html("");
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                    filePath.html("<b>Selected File: </b>" + fileName);
                     $('.endorsementsform').attr('onsubmit','return true');
                }
        });
    });
     
    </script>
    