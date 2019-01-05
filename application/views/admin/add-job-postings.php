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
                <li class="breadcrumb-item"><a><?php if(!empty($packages[0])){ echo 'Edit Subscription';}else{ echo'Add Subscription';} ?></a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
        <!-- Zero configuration table -->
        <?php include('inc/message.php'); ?>
        <section id="configuration">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title"><?php if(!empty($packages[0])){ echo 'Edit Subscription';}else{ echo'Add Subscription';} ?>
								
							</h4>
						</div>
						<div class="card-content collapse show">
						    <form class="form" id="addpackagevalid" action="<?php echo base_url(); ?>admin/custom?do=add&&tbl=packages&&redirect=admin/job_postings&&error=add-job-postings&&name=Package Name" method="post">
							<div class="card-body">
							   
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <input type="hidden" name="id" value="<?php if(!empty($packages[0])){ echo $packages[0]->id;}else{ echo'';} ?>">
										  <label for="eventInput1">Subscription Name </label>
										  <input type="text" class="form-control"  name="package_name" value="<?php if(!empty($packages[0])){ echo $packages[0]->package_name;}else{ echo'';} ?>" >
										
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										  <label for="eventInput1">Period (In Days)</label>
										  <input type="text" class="form-control" <?php if(!empty($packages[0])){ if($packages[0]->id==1){ echo 'disabled';}else{?>validate="number" <?php }}else{?>validate="number" <?php } ?> name="valid_days" value="<?php if(!empty($packages[0])){ echo $packages[0]->valid_days;}else{ echo'';} ?>">
										</div>
									</div>
									<div class="col-md-4">
										
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										  <label for="eventInput1">No. of CV allowed to Download</label>
											<input type="text" class="form-control" <?php if(!empty($packages[0])){ if($packages[0]->id==1){ echo 'disabled';}} ?> value="<?php if(!empty($packages[0])){ echo $packages[0]->number_of_jobs;}else{ echo'';} ?>" name="number_of_jobs" <?php if(!empty($packages[0])){ if($packages[0]->id==1){ echo 'disabled';}else{?>validate="number" <?php }}else{?>validate="number" <?php } ?> />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										  <label for="eventInput1">Price ($) </label>
											<input type="text" class="form-control" <?php if(!empty($packages[0])){ if($packages[0]->id==1){?> id="priceperc" validate="regex:/[$0-9]\d+/i" <?php }else{?> id="dynumber" validate="regex:/[$0-9]\d+/i" <?php }}else{?> id="dynumber" validate="regex:/[$0-9]\d+/i" <?php } ?> value="<?php if(!empty($packages[0])){ echo $packages[0]->price;}else{ echo'';} ?>" name="price"/>
										</div>
									</div>
									
								</div>
																
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-success sb_btn">
											<i class="la la-check-square-o"></i> Save
										</button>
										<a href="<?php echo base_url().'admin/job-postings'?>" class="btn btn-danger backLink">
											<i class="la la-close"></i> Cancel
										</a>
									</div>
									
								</div>
							
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
        </section>
      </div>
    </div>
  </div>

  
 
  
 <?php include('footer.php') ?>
