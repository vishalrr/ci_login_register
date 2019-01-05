<?php include('header.php');?>
<style>
    #imgFileUpload {
    background: #ccc;
    border: 1px solid #666;
    float: right;
    height: 85px;
   /* position: absolute;*/
    right: 20px;
    width: 100px;
}
</style>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard';?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a>My Account</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">My Account</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <?php include('inc/message.php'); ?>
                    <form class="forms"  action="<?php echo base_url(); ?>admin/updateprofile" method="POST"  id="myaccount" enctype="multipart/form-data">
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
    						<div class="row">
    							<div class="col-md-6">
    								<div class="form-group">
    								  <label for="eventInput1">First Name   </label>
    								  <input type="text" class="form-control" placeholder="First Name" name="first_name" value="<?php echo $user->first_name; ?>">
    								 
    								</div>
    							</div>
    							<div class="col-md-6">
    								<div class="form-group">
    								  <label for="eventInput1">Last Name </label>
    								  <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="<?php echo $user->last_name; ?>">
    								
    								</div>
    							</div>
    						</div>
    						<div class="row">
								
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Email   </label>
									  <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $user->email; ?>">
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Phone  </label>
									  <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $user->phone; ?>">
									
									</div>
								</div>
								</div>
								<div class="row">
								<div class="col-md-2">
									<div class="form-group">
									      <label for="eventInput1">Profile Image  </label>
									</div>
								</div>
								<div class="col-md-2">
								      <img id="imgFileUpload" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $user->avatar; ?>" style="cursor: pointer" />
                   
                                    <span id="spnFilePath"></span>
                                    <input type="file" id="FileUpload1" name="profile" style="display: none" />
                                    <span class="uploaderror" style="color: rgb(255, 0, 0);float:  right;inline-size: block;"></span>
								</div>
								
							</div>
							   
							<div class="row">
							    <div class="clearfix"></div>
						
								<div class="col-md-12">
								    	<h4 class="sb-ttl">
							Change your password
							<span>To change your password you have to fill up the following three fields properly. </span>
							</h4>
									
								</div>
								<div class="col-md-4">
								    <div class="form-group">
									  <label for="eventInput1">Old Password  </label>
									   <input type="hidden"  name="password" value="<?php echo $user->password; ?>" id="PASS">
									  <input type="password" class="form-control" placeholder="Old Password" name="opassword" value="" id="OLDPASS">
									
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									  <label for="eventInput1">New Password   </label>
									  <input type="password" class="form-control" placeholder="New Password" name="npassword" value="" id="Newpass">
									</div>
								</div>
							
								<div class="col-md-4">
									<div class="form-group">
									  <label for="eventInput1">Confirm Password  </label>
									  <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" value="" id="Confirmp">
									
									</div>
								</div>
								
								
							</div>
							
							<div class="row col-md-12">
								    <div class="form-group">
                         <button type="submit" name="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Save
                        </button>
					 </div>
								    
								</div>
                          </div>
                        </div>
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

<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
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
                    $('#myaccount').attr('onsubmit','return false');
                }else
                {
                     
                       $('.uploaderror').html('');
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                    filePath.html("<b>Selected File: </b>" + fileName);
                     $('#myaccount').attr('onsubmit','return true');
                }
        });
    });
</script>

