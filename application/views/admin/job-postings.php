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
                <li class="breadcrumb-item"><a>Subscriptions</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
          <?php include('inc/message.php'); ?>
          <div class="alert alert-success success" style="display:none;">
			  <strong>Success !</strong> You have succesfully deleted this Subscription Package
			</div>
			<div class="alert alert-danger danger" style="display:none;">
			  <strong>Error !</strong> Enabel to delete
			</div>
			<div class="alert alert-success success11" style="display:none;">
			  <strong>Success !</strong> Status Updated Successfully
			</div>
			<div class="alert alert-danger danger11" style="display:none;">
			  <strong>Error !</strong> Enabel to Update Status
			</div>
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
					<h4 class="card-title">Subscriptions
						<span class="pull-right">
							<a href="add-job-postings" class="btn btn-primary btn-sm">Add New</a> 
						</span>
					</h4>
                </div>
                <div class="card-content collapse show">
				
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
							<th>S.No</th>
							<th>Name</th>
							<th>Days Allowed	</th>
							<th>Number of Resume</th>
							<th>Price</th>
						
							<th style="width:30%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                          $counter=1;
                          foreach($packages as $package)
                          {?>
                        <tr id="<?php echo $package->id; ?>">
							<td><?php echo $counter++; ?></td>
							<td><?php echo $package->package_name; ?></td>
							<td><?php echo $package->valid_days; ?></td>
							<td><?php echo $package->number_of_jobs; ?></td>
							<td><?php if($package->id==1){ echo $package->price;}else{?> $<?php echo $package->price;} ?></td>
						
							<td>
							    <?php if($package->id !=1)
						 	    { ?>
						 	    <input type="checkbox" class="switchBootstrap swtch" action="<?php echo base_url();?>admin/Employer/statusupdate" data-id="<?php echo $package->id; ?>" data-tbl="packages"  data-off-text="Inactive" data-on-text="Active" <?= ($package->status=='1') ? 'checked' : ''; ?> />
							   <?php } ?>
								<a href="add-job-postings?id=<?php echo $package->id; ?>" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 	    
						 	     <?php if($package->id !=1)
						 	    { ?>
						 	    <!--<a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/status" data-id="<?php echo $package->id; ?>" data-status="<?php echo $package->status; ?>" data-tbl="packages" class="btn btn-danger btn-table status" data-toggle="modal" data-title="<?php echo $title; ?>" title="<?php echo $title; ?>" data-target="#Status"><i class="fa fa-tag"></i></a>-->
						 	    
						 	    <a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $package->id; ?>"  data-tbl="packages" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
							   <?php } ?>
							</td>
                        </tr>
                        <?php } ?>
						<!--tr>
							<td>2</td>
							<td>Job Posting Offer </td>
							<td>90</td>
							<td>15</td>
							<td>1500 </td>
							<td>
								<a href="edit-job-postings" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 	    <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
							</td>
                        </tr-->
						
                      </tbody>
                     
                    </table>
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  
 
  
 <?php include('footer.php') ?>
