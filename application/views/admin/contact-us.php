<?php include('header.php');?>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard'?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a>Contact Us</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">Contact Us</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <?php include('inc/message.php'); ?>
                     <form class="form" action="<?php echo base_url(); ?>admin/Updatecontactus" method="POST" id="myaccount" >
						<div class="row justify-content-md-center">
							<div class="col-md-12">
								<div class="form-body">
									<div class="row">
										<div class="col-md-6">
										    
											<div class="form-group">
												<label for="eventInput1">Choose your heading to edit </label>
												<input type="text" class="form-control" placeholder="Title " name="title" value="<?php echo $contact[0]->option_value; ?>">
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label for="eventInput1">Address </label>
												<input type="text" class="form-control" placeholder="Address " name="address" value="<?php echo $contact[1]->option_value; ?>">
											</div>
										</div>
									</div>
									<div class="row">
							<div class="col-md-12">
							    <div class="form-group">
										<label for="eventInput1">Contact Us Content  </label>
										<textarea class="form-control" name="content" placeholder="Content...." rows="5" value="<?php echo $contact[2]->option_value; ?>" >
										    <?php echo $contact[2]->option_value; ?>
										</textarea>
									
									</div>
							</div>
								</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">Email</label>
												<input type="text" class="form-control" placeholder="Email Address " name="email"  value="<?php echo $contact[3]->option_value; ?>">
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">Contact No. </label>
												<input type="text" class="form-control" placeholder="Contact Number " name="contact_no"  value="<?php echo $contact[4]->option_value; ?>">
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="form-group">
												<label for="eventInput1">FAX. </label>
												<input type="text" class="form-control" placeholder="Fax number " name="fax" value="<?php echo $contact[5]->option_value; ?>">
											</div>
										</div>
									</div>
									
									<div class="row">
										
									
										
										<div class="col-md-6">
											<div class="form-group">
												<label for="eventInput1">Facebook Link </label>
												<input type="text" class="form-control" placeholder="Facbook Link " name="fblink"  value="<?php echo $contact[6]->option_value; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="eventInput1">Twitter Link </label>
												<input type="text" class="form-control" placeholder="Twitter Link " name="twitter"  value="<?php echo $contact[7]->option_value; ?>">
											</div>
										</div>
									</div>
									
										<div class="row">
										
										
										
										<div class="col-md-6">
											<div class="form-group">
												<label for="eventInput1">Linkedin Link </label>
												<input type="text" class="form-control" placeholder="Linked Link " name="linedkin"  value="<?php echo $contact[8]->option_value; ?>">
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label for="eventInput1">Dribbble Link </label>
												<input type="text" class="form-control" placeholder="Dribbble Link " name="dribbble"  value="<?php echo $contact[9]->option_value; ?>">
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
							<a href="<?php echo base_url().'admin/dashboard'?>"  class="btn btn-danger">
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