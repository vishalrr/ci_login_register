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
                <li class="breadcrumb-item"><a>Job Location</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
          <?php include('inc/message.php'); ?>
            	<div class="alert alert-success success" style="display:none;">
			  <strong>Success !</strong> You have succesfully deleted this Job Location
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
                  <h4 class="card-title">Job Location
					<span class="pull-right"><a href="<?php echo base_url(); ?>admin/job/add-job-location" class="btn btn-primary btn-sm"> Add New	 </a> </span>
                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    
					
					
					
					
					
					<div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
						<thead>
							<tr>
								<th>S.No</th>
								<th style="width:60%;">Location</th>
								
								<th class="m-n-180">Action</th>
							</tr>
						</thead>
						<tbody id="card-drag-area">
						    <?php
						    $counter=1;
						    foreach($location as $loc)
						    {?>
							<tr id="<?php echo $loc->id; ?>">
								<td><?php echo $counter++; ?></td>
								<td><?php echo $loc->location_name; ?></td>
								
								<td>
								    
								    <input type="checkbox" class="switchBootstrap swtch" action="<?php echo base_url();?>admin/Employer/statusupdate" data-id="<?php echo $loc->id; ?>" data-tbl="job_location"  data-off-text="Inactive" data-on-text="Active" <?= ($loc->status=='1') ? 'checked' : ''; ?> />
									
									<a href="add-job-location?id=<?php echo $loc->id; ?>" class="btn btn-warning btn-table" ><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $loc->id; ?>" data-tbl="job_location" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<?php } ?>
							<!--tr>
								<td>2</td>
								<td>Ahmadabad</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Ahmednagar</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Aizwal</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Amritsar</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
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

  
  
  <div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Location</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Add Location </label>
						  <input type="text" class="form-control" placeholder="Location Name" name="fullname" value="">
						</div>
					</div>
					<!--div class="col-md-12">
						<div class="form-group forms-radio">
						  <label for="eventInput1" class="label-full">Status    </label>
						  <div class="skin skin-flat">
							  <input type="radio" name="input-radio-4" id="input-radio-15">
							  <label for="input-radio-15">Active</label>
						  </div>
						  <div class="skin skin-flat">
							  <input type="radio" name="input-radio-4" id="input-radio-151">
							  <label for="input-radio-151">Inactive</label>
						  </div>
						</div>
					</div-->
				</div>
				
			  </div>
			</div>
		  </div>
		 
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Save</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
  
  
 <div class="modal fade" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Location</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Location Name   </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="Albania">
						</div>
					</div>
					<!--div class="col-md-12">
						<div class="form-group forms-radio">
						  <label for="eventInput1" class="label-full">Status    </label>
						  <div class="skin skin-flat">
							  <input type="radio" name="input-radio-4" id="input-radio-15">
							  <label for="input-radio-15">Active</label>
						  </div>
						  <div class="skin skin-flat">
							  <input type="radio" name="input-radio-4" id="input-radio-151" checked="">
							  <label for="input-radio-151">Inactive</label>
						  </div>
						</div>
					</div-->
				</div>
				
			  </div>
			</div>
		  </div>
		 
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Save</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
  
 <?php include('footer.php') ?>
