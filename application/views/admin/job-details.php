<?php include('header.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
     <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
        
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/employer/employers-posted-jobs';?>">Employer's Profile</a></li>
                
                <li class="breadcrumb-item"><a href="#">  Job Details 

</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
          <?php include('inc/message.php'); ?>
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">  Job Details 

                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<h5 class="main-ttl-n">  Job Details </h5>
									<div class="table-responsive">
										<table class="table table-pro bx-shad">
										  <tbody>
											<!--tr>
											  <th>Designation 	 :</th>
											  <td class="text-right">	marketing mgr</td>
											</tr-->
											<tr>
											  <th>Industry  :</th>
											  <td class="text-right">	<?php if(!empty($postedjobs[0]->industry) && $postedjobs[0]->industry!='null'){
											  
											  $dd1= explode(',',$postedjobs[0]->industry); 
						      $indu = array();
						      foreach($dd1 as $d1)
						      {
						         $indu[]=  $this->db->get_where('industry_type',array('id'=>$d1))->row()->category;
						      }
						    if(!empty($indu)){ echo implode(',',$indu); }else{ echo '---'; }
											  }else{ echo '--'; } ?> </td>
											</tr>
											<tr>
											  <th class="text-bold-800">Keywords  :</th>
											  <td class="text-bold-800 text-right"><?php  if(!empty($postedjobs[0]->skills)){ echo $postedjobs[0]->skills; }else{ echo '---'; }   ?></td>
											</tr>
											<tr>
											  <th>Location of Job :</th>
											  <td class="text-right"><?php  if(!empty($postedjobs[0]->job_location!='0')){ echo $this->db->get_where('job_location',array('id'=>$postedjobs[0]->job_location))->row()->location_name; }else{ echo '---'; }	?></td>
											</tr>
											<tr>
											  <th>Salary		 :</th>
											  <td class="text-right"><?php if(!empty($postedjobs[0]->salary)){ echo $postedjobs[0]->salary; }else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th>Job Role	 :</th>
											  <td class="text-right"><?php if(!empty($postedjobs[0]->job_category)){ echo $this->db->get_where('category_job',array('id'=>$postedjobs[0]->job_category))->row()->category_name; }else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th>Job Description	 :</th>
											  <td class="text-right"><textarea name="editor1"><?php if(!empty($postedjobs[0]->description)){ echo $postedjobs[0]->description; }else{ echo '---'; } ?></textarea></td>
											<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
											<script>
			CKEDITOR.replace( 'editor1' );
		</script></tr>
										</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-6">
									<h5 class="main-ttl-n">  Contact Details </h5>
									<div class="table-responsive">
										<table class="table table-pro bx-shad">
										  <tbody>
											<tr>
											  <th>Company Name 	 :</th>
											  <td class="text-right"><?php if(!empty($postedjobs[0]->corpid)){ echo $this->db->get_where('corporations',array('corpid'=>$postedjobs[0]->corpid))->row()->name; }else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th>Contact Name 	 :</th>
											  <td class="text-right"><?php if(!empty($postedjobs[0]->id)){ echo $this->db->get_where('employers',array('empid'=>$postedjobs[0]->employer_id))->row()->f_name.' '.$this->db->get_where('employers',array('id'=>$postedjobs[0]->employer_id))->row()->l_name; }else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th>Contact Email :</th>
											  <td class="text-right"><?php if(!empty($postedjobs[0]->employer_id)){ echo $this->db->get_where('employers',array('empid'=>$postedjobs[0]->employer_id))->row()->email; }else{ echo '---'; } ?></td>
											</tr><tr>
											  <th>Contact Website :</th>
											  <td class="text-right"><?php if(!empty($postedjobs[0]->id)){ echo $this->db->get_where('employers',array('empid'=>$postedjobs[0]->employer_id))->row()->website; }else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th>State :</th>
											  <td class="text-right"><?php if(!empty($postedjobs[0]->id)){ $stateid= $this->db->get_where('employers',array('empid'=>$postedjobs[0]->employer_id))->row()->state; if(!empty($stateid)){ echo  $this->db->get_where('states',array('id'=>$stateid))->row()->name; }  }else{ echo '---'; } ?></td>
											</tr>
											
											<tr>
											  <th>Contact Address :</th>
											  <td class="text-right"><?php if(!empty($postedjobs[0]->id)){ echo $this->db->get_where('employers',array('empid'=>$postedjobs[0]->employer_id))->row()->address; }else{ echo '---'; } ?></td>
											</tr>
											
											
										 </tbody>
										</table>
									</div>
									
									
								</div>
								
								
								
							</div>
					 </div>
					
					</div>
					
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php include('reponse_view.php'); ?>
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
						  <label for="eventInput1">Name   </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="">
						</div>
					</div>
					<div class="col-md-12">
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
					</div>
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
						  <label for="eventInput1">Name   </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="">
						</div>
					</div>
					<div class="col-md-12">
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
					</div>
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
  <script>
     $('.approv').click(function(){
       $('.jobapprob').submit();  
     });
     $('.approv2').click(function(){
       $('.jobapprobk').submit();  
     });
 </script>
