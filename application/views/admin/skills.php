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
                <li class="breadcrumb-item"><a>Skills</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
          <?php include('inc/message.php'); ?>
          <div class="alert alert-success success" style="display:none;">
			  <strong>Success !</strong> You have succesfully deleted this Skill
			</div>
			<div class="alert alert-danger danger" style="display:none;">
			  <strong>Error !</strong> Enabel to delete
			</div>
			<div class="alert alert-success success1" style="display:none;">
			  <strong>Success !</strong> Status Updated Successfully
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
                  <h4 class="card-title">Skills
					<span class="pull-right"><a href="javascript:void(0)" class="btn btn-primary btn-sm addnew" data-toggle="modal" data-target="#add-category"> Add New	 </a> </span>
                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    
					
					
					
					
					
					<div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
						<thead>
							<tr>
								<th>S.No</th>
								<th style="width:60%;">Skill Name</th>
							
								<th class="m-n-180">Action</th>
							</tr>
						</thead>
						<tbody id="card-drag-area">
						    <?php 
						    $counter=1;
						    foreach($skills as $skill)
						    { ?>
							<tr id="<?php echo $skill->id; ?>">
								<td><?php echo $counter++; ?></td>
								<td><?php echo $skill->skill; ?></td>
								
								<td>
								     <input type="checkbox" class="switchBootstrap swtch" action="<?php echo base_url();?>admin/Employer/statusupdate" data-id="<?php echo $skill->id; ?>" data-tbl="skills"  data-off-text="Inactive" data-on-text="Active" <?= ($skill->status=='1') ? 'checked' : ''; ?> />
									<a href="javascript:void(0)" data-id="<?php echo $skill->id; ?>" data-name="<?php echo $skill->skill; ?>" class="btn btn-warning btn-table skilledit" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									 
									
									
									<a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/delete"  data-tbl="skills" data-id="<?php echo $skill->id; ?>" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<?php } ?>
							<!--tr>
								<td>2</td>
								<td>ASP</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>C++</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Coludfusion</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Java</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>6</td>
								<td>javascript</td>
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
        <h4 class="modal-title" id="myModalLabel">Add Skill</h4>
      </div>
      <form class="form addskill" action="<?php echo base_url(); ?>admin/custom?do=add&&tbl=skills&&redirect=admin/skills&&error=skills&&name=Skill Name" method="post">
      <div class="modal-body">
        
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Skill Name   </label>
						  <input type="text" class="form-control" placeholder="Skill Name" name="skill" value="" >
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
		 
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success sb_btn"><i class="la la-check-square-o"></i> Save</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="la la-close"></i> Cancel</button>
      </div>
      	</form>
    </div>
  </div>
</div>
  
  
 <div class="modal fade" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Skill</h4>
      </div>
      <form class="form" id="addskills" action="<?php echo base_url(); ?>admin/custom?do=add&&tbl=skills&&redirect=admin/skills&&error=skills&&name=Skill Name" method="post">
      <div class="modal-body">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Skill Name  </label>
						  <input type="text" class="form-control names" placeholder="Category Name" name="skill" value="">
						  <input type="hidden" name="id" class="ids" value="">
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
		 
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success sb_btn"><i class="la la-check-square-o"></i> Save</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="la la-close"></i> Cancel</button>
      </div>
      	</form>
    </div>
  </div>
</div>
  
 <?php include('footer.php') ?>
 <script>
    
	    $('.skilledit').click(function(){
	     var id=  $(this).attr('data-id');
	      var name= $(this).attr('data-name');
	      $('.names').val(name);
	      $('.ids').val(id);
	    });
	    $('.addnew').click(function(){
	        $('.addskill')[0].reset();
	        $(".addskill").validate().resetForm();
	    });
 
 </script>
