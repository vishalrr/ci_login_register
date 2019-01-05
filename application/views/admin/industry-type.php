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
                <li class="breadcrumb-item"><a>Industry Type</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      
      <div class="content-body">
            <?php include('inc/message.php'); ?>
            	<div class="alert alert-success success" style="display:none;">
			  <strong>Success !</strong> You have succesfully deleted this Industry
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
                  <h4 class="card-title">Industry Type
					<span class="pull-right">
						<a href="<?php echo base_url(); ?>admin/job/add_industry_type" class="btn btn-primary btn-sm"> Add New </a> </span>
                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    
				
					<div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Industry Type	</th>
								
								
								<th class="m-n-180">Action</th>
							</tr>
						</thead>
						<tbody id="card-drag-area">
						    <?php
						    $counter = 1;
						    foreach($industry as $indust)
						    {
						    ?>
							<tr id="<?php echo $indust->id; ?>">
								<td><?php echo $counter++; ?></td>
								<td><?php echo $indust->category; ?></td>
							
								
								<td>
								     <input type="checkbox" class="switchBootstrap swtch" action="<?php echo base_url();?>admin/Employer/statusupdate" data-id="<?php echo $indust->id; ?>" data-tbl="industry_type"  data-off-text="Inactive" data-on-text="Active" <?= ($indust->status=='1') ? 'checked' : ''; ?> />
								    <?php /*if($indust->status==1){ 
						 	   $title = "Active"; 
						 	   } 
						 	   if($indust->status==0){ 
						 	    $title = "Inactive"; 
						 	    } */ ?>
									<a href="add-industry-type?id=<?php echo $indust->id; ?>" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									
<!--									<?php if($indust->status==1){ 
						 	  ?>
						 	  <a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/status" data-id="<?php echo $indust->id; ?>" data-status="<?php echo $indust->status; ?>" data-tbl="industry_type" class="btn btn-success btn-table status" data-toggle="modal" data-title="<?php echo $title; ?>" title="<?php echo $title; ?>" data-target="#Status"><i class="fa fa-toggle-on"></i></a>
						 	  <?php
						 	  
						 	   } 
						 	   if($indust->status==0){  ?>
						 	   <a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/status" data-id="<?php echo $indust->id; ?>" data-status="<?php echo $indust->status; ?>" data-tbl="industry_type" class="btn btn-danger btn-table status" data-toggle="modal" data-title="<?php echo $title; ?>" title="<?php echo $title; ?>" data-target="#Status"><i class="fa fa-toggle-off"></i></a>
						 	   <?php } ?>-->
									
									
									<a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $indust->id; ?>" data-tbl="industry_type" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<?php } ?>
							<!--tr>
								<td>2</td>
								<td>  Advertising/Event Management	</td>
								<td>IT Company</td>

								<td>
									<a href="edit-industry-type.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Agriculture/Dairy</td>
								<td>Non IT Company</td>
								<td>
									<a href="edit-industry-type.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Automobile</td>
								<td>Non IT Company</td>
								<td>
									<a href="edit-industry-type.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Banks/Insurance/Financial Services</td>
								<td>Non IT Company</td>
								<td>
									<a href="edit-industry-type.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							
							<tr>
								<td>6</td>
								<td>Call Center/BPO</td>
								<td>IT Company</td>
								<td>
									<a href="edit-industry-type.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Chemicals/ PetroChemical/Plastic/Rubber</td>
								<td>Non IT Company</td>

								<td>
									<a href="edit-industry-type.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>8</td>
								<td>Computers/Technology</td>
								<td>IT Company</td>
								<td>
									<a href="edit-industry-type.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>9</td>
								<td>Construction/Facilities</td>
								<td>IT Company</td>
								<td>
									<a href="edit-industry-type.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>10</td>
								<td>Education/Training</td>
								<td>IT Company</td>
								<td>
									<a href="edit-industry-type.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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
        <h4 class="modal-title" id="myModalLabel">Add Category</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Add Category   </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="">
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
        <h4 class="modal-title" id="myModalLabel">Edit Business Category</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Add Category   </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="">
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
