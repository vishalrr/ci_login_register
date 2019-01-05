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
                <li class="breadcrumb-item"><a>Edit Employer Profile

</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">Edit Employer Profile
</h4>
                  
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    
                    <form class="form" id="editemployeprofile" action="<?php echo base_url();?>admin/Employer/customs?do=add&&tbl=employers&&redirect=Employer/index&&error=Employer/edit-employer-profile&&name=Company name" method="post">
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                            <div class="form-body">
                          	<h5><b>Account Details</b></h5>
							<div class="row">
							   <input type="hidden" name="id" value="<?= $employer[0]->id; ?>">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">First Name</label>
									  <input type="text" class="form-control" placeholder="First name" name="f_name" value="<?= $employer[0]->f_name; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Last Name</label>
									  <input type="text" class="form-control" placeholder="Last name" name="l_name" value="<?= $employer[0]->l_name; ?>">
									</div>
								</div>
								<!--div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Company Name</label>
									  <input type="text" class="form-control" placeholder="" name="" value="Demo">
									
									</div>
								</div-->
							</div>
							<div class="row closest">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Phone</label>
									  <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?= $employer[0]->phone; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Email</label>
									  <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $employer[0]->email; ?>" id="email">
									</div>
								</div>
							
								<div class="col-md-4">
									<div class="form-group">
									  <label for="eventInput1">Profile Photo</label>
									  <input type="file" class="form-control emp_profile" placeholder="Profile photo" >
									   
									</div>
								</div>
								
								<div class="col-md-2">
            						<?php
                						if(@$employer[0]->profile_photo){
                						    $image = base_url("assets/employer/images/".$employer[0]->profile_photo);
                					    }else{
                							$image = base_url('assets/employer/images/default.jpeg'); 
                						} 
            						?>
            						<input type="hidden" name="profile_photo" class="profile_image" value="<?php if(!empty($employer[0]->profile_photo)) {echo $employer[0]->profile_photo; } ?>">
            					    <img class="dynamic_image" src="<?= $image ?>" width="50" height="50">
								</div>
							
							</div>
							<!--div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Master Email</label>
									  <input type="text" class="form-control" placeholder="" name="" value="info@gmail.com">
									
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Type</label>
									  <input type="email" class="form-control" placeholder="Email" name="fullname" value="undefined" disabled="">
									</div>
								</div>
							</div-->
							<!--div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Membership Plan for Job Posting</label>
									  <input type="text" class="form-control" placeholder="" name="" value="Free" disabled="">
									
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Membership plan for Resume Access</label>
									  <input type="email" class="form-control" placeholder="" name="" value="Freee" disabled="">
									</div>
								</div>
							</div-->

							<hr>

							<h5><b>Company Details</b></h5>
							<div class="row ">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Company Name</label>
									  <input type="text" class="form-control" placeholder="Company Name" name="company_name" value="<?= $employer[0]->company_name; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Category</label>
									  <select class="form-control" name="category">
                                        <?php foreach($category_jobs as $cj){ ?>
									        <option value="<?= $cj->id; ?>" <?= ($cj->id==$employer[0]->category) ? 'selected' : ''; ?> > <?= $cj->category_name; ?> </option>
                                        <?php } ?>
									  </select>
									</div>
								</div>
							</div>
							<!--div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Industry Type</label>
									  <input type="text" class="form-control" placeholder="" name="" value="Consultant">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Contact Person</label>
									  <input type="text" class="form-control" placeholder="" name="" value="Shelton Bishop">
									
									</div>
								</div>
							</div-->
							<div class="row closest">
								<!--div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Designation</label>
									  <input type="text" class="form-control" placeholder="" name="" value="Not Mentioned" disabled="">
									
									</div>
								</div-->
							
								<div class="col-md-4 ">
									<div class="form-group">
									  <label for="eventInput1">Logo</label>
									  <input type="file" class="form-control emp_profile" placeholder="Company logo" >
									  
									</div>
								</div>
								<div class="col-md-2 ">
            						<?php
                						if(@$employer[0]->company_logo){
                						    $image = base_url("assets/employer/images/".$employer[0]->company_logo);
                					    }else{
                							$image = base_url('assets/employer/images/company.png');
                						} 
            						?>
            						<input type="hidden" name="company_logo" class="profile_image" value="<?php if(!empty($employer[0]->company_logo)) { echo $employer[0]->company_logo; } ?>">
            					    <img class="dynamic_image" src="<?= $image ?>" width="50" height="50">
								</div>
							
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Website</label>
									  <input type="text" class="form-control" placeholder="Website" name="website" value="<?= $employer[0]->website; ?>">
									</div>
								</div>
							</div>
							<!--div class="row">
								
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Company Profile</label>
									  <input type="email" class="form-control" placeholder="" name="" value="Not Mentioned" disabled="">
									</div>
								</div>
							</div-->

							<hr>

							<h5><b>Contact Details</b></h5>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Street Address</label>
									  <textarea rows="4" cols="50" name="address" value="<?= $employer[0]->address; ?>" placeholder="Street address"> <?= $employer[0]->address; ?> </textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Country</label>
									    
									  <select class="form-control" name="country" id="country">
									      <option value="">Select </option>
                                        <?php foreach($countries as $c){ ?>									      
									        <option value="<?= $c->id; ?>" <?= ($c->id==$employer[0]->country) ? 'selected' : ''; ?> > <?= $c->name; ?> </option>
                                        <?php } ?>
									  </select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">State</label>
									    <select class="form-control" name="state" id="state">
									  </select>
									</div>
								
									<input type="hidden" value="<?=  $employer[0]->state; ?>" id="stateid">
								</div><div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">City</label>
									  <input type="text" class="form-control" placeholder="City" name="city" value="<?= $employer[0]->city; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Pincode</label>
									  <input type="text" class="form-control" placeholder="pincode" name="pincode" value="<?= $employer[0]->pincode; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Mobile Number 1</label>
									  <input type="text" class="form-control" placeholder="Mobile no 1" name="mobile1" value="<?= $employer[0]->mobile1; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Mobile Number 2</label>
									  <input type="text" class="form-control" placeholder="Mobile no 2" name="mobile2" value="<?= $employer[0]->mobile2; ?>">
									
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Fax</label>
									  <input type="text" class="form-control" placeholder="Fax" name="fax" value="<?= $employer[0]->fax; ?>">
									</div>
								</div>
							</div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">
                                    <i class="la la-check-square-o"></i> Update
                                    </button>
                                    <a href="<?php echo base_url().'admin/employer/index';?>" class="btn btn-danger">
                                    <i class="la la-close"></i> Cancel
                                    </a>
                                </div>
                            </div>
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
    <script>
      $(document).ready(function() {
            $('#country').trigger('change');
        });
    
    
    
        $('body').on('change', '#country', function() {
        var country = $(this).val();
        var state = $("#stateid").val();
   
        $.ajax({
           type: 'post', 
           url: '<?php echo base_url('admin/employer/get-states'); ?>',
           data: {country:country,state:state},
           success: function(data)
           {
             $("#state").html(data);
           }
        });
    }); 
      
      
    $(document).ready(function(){
    $('.emp_profile').change(function(){
	var file_name = $(this).prop('files')[0];
    var findimg = $(this).closest('.closest').find(".profile_image");
    var findimage = $(this).closest('.closest').find(".dynamic_image");
	var formdata = new FormData();
    formdata.append('file', file_name);	
    $.ajax({
                url: '<?php echo base_url("admin/employer/emp_image"); ?>', 
                dataType: 'json',  
                cache: false,
				enctype: 'multipart/form-data',
                contentType: false,
                processData: false,
                data: formdata,                         
                type: 'post',
                success: function(data){
                   findimg.val(data['profile_image']);
                   var src = '<?php echo base_url("assets/employer/images/"); ?>';
                   findimage.attr('src',src+data['profile_image']);
                   
                }
          });
        });  
	});  
      
    </script>
    
    
    
