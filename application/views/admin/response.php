<?php include('header.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
     <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Response List</a>
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
                  <h4 class="card-title" style="display: inline-block">List of Job Seeker
					
                 </h4> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                <h3 class="card-title" style="display: inline-block"><b>Job Title:</b> <?php if(!empty($appliedjobs[0]->title))
                 {
                     echo Ucfirst($appliedjobs[0]->title); 
                     
                 }?></h3>
                 &nbsp;&nbsp;&nbsp;
                 <h3 class="card-title" style="display: inline-block"><b>Company Name:</b>
                <?php if(!empty($appliedjobs[0]->corpid)){ echo $this->db->get_where('corporations',array('corpid'=>$appliedjobs[0]->corpid))->row()->name; }else{ echo '---'; } ?></td>
				
                 </h3>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                  
					<div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Name</th>
								<th>Email</th>
								<th>Contact Number</th>
								<th>Experience </th>
								<th>Qualification  </th>
								<th>Skills</th>
								<th class="mn-w-130">Action</th>
							</tr>
						</thead>
						<tbody id="card-drag-area">
						    <?php 
						    ///print_r($appliedjobs);
						    
						    
						    if(!empty($appliedjobs) && count($appliedjobs)!=0){ 
						        $count=1;
						    foreach($appliedjobs as $apply){
						    ?>
							<tr>
								<td><?= $count++; ?></td>
								<td><?= Ucfirst($apply->first_name.' '.$apply->last_name); ?></td>
								<td><?= Ucfirst($apply->email); ?></td>
								<td><?= $apply->phone; ?></td>
								<td><?php if(!empty($apply->experience)){ echo $this->db->get_where('experience',array('id'=>$apply->experience))->row()->experience;} else{ echo '---'; } ?></td>
								<td><?php if(!empty($apply->education_level) && $apply->education_level!='null'){ $ds= explode(',',$apply->education_level);
								$dd= array();
								foreach($ds as $d)
								{
								$dd[]=  $this->db->get_where('qualification',array('id'=>$d))->row()->qualification;
								}
								if(!empty($dd)){ echo implode(',',$dd); }else{ echo '---'; } 
								} else{ echo '---'; } ?></td>
								<td><?php if(!empty($apply->skills) && $apply->skills!='null'){ 
								    echo $apply->skills;
								} else{ echo '---'; } ?></td>
								<td> <?php   if(!empty($apply->status) && $apply->status=='1'){ ?>
								     <form class="jobapprob flo-l-10" action="<?php echo base_url();?>admin/employer/jobapproved?id=<?php echo $apply->id; ?>" method="post">
									  <input type="hidden" name="status" value="2">
									  <input type="hidden" name="ids" value="<?php if(!empty($apply->id)){ echo $apply->id; }?>">
									  <input type="hidden" name="job_id" value="<?php if(!empty($apply->job_id)){ echo $apply->job_id; }?>">
									  <input type="hidden" name="redirect" value="admin/Employer/response?id=<?php echo $_GET['id']; ?>">
									 <a href="javascript:void(0)" class="btn btn-info btn-sm approv">Assign</a>
									 </form>
									 <?php } if(!empty($apply->status) && $apply->status=='2'){ ?>
									 
									 <a href="javascript:void(0)" class="btn btn-info btn-sm">Assigned</a>
									 <?php } ?> &nbsp;
									 <?php  if(!empty($apply->status)){ ?>
									 <form class="jobapprobk flo-l-10" action="<?php echo base_url();?>admin/employer/jobapproved?id=<?php echo $apply->id; ?>" method="post">
									 <input type="hidden" name="status" value="3">
									  <input type="hidden" name="ids" value="<?php if(!empty($apply->id)){ echo $apply->id; }?>">
									  <input type="hidden" name="job_id" value="<?php if(!empty($apply->job_id)){ echo $apply->job_id; }?>">
									   <input type="hidden" name="redirect" value="admin/Employer/response?id=<?php echo $_GET['id']; ?>">
									 <a href="javascript:void(0)" class="btn btn-danger btn-sm approv2">Delete</a>
									 </form>
									 <?php } ?>
								</td>
							</tr>
							<?php } } ?>
							<!--<tr>
								<td>2</td>
								<td>Hanry James</td>
								<td>hanry@example.com</td>
								<td>+1111 567 890</td>
								<td>1 years</td>
								<td>Diploma</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								<td>
									 <a href="javascript:void(0)" class="btn btn-info btn-sm">Approved</a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Marry </td>
								<td>marry@example.com</td>
								<td>+1111 333 890</td>
								<td>4 years</td>
								<td>Doctorate</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
								<td>
									 <a href="javascript:void(0)" class="btn btn-info btn-sm">Approved</a>
								</td>
							</tr>-->
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
        <h4 class="modal-title" id="myModalLabel">Add Skill Name</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Add Skill Name   </label>
						  <input type="text" class="form-control" placeholder="Skill Name" name="fullname" value="">
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
        <h4 class="modal-title" id="myModalLabel">Edit Skill Name</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Edit Skill Name  </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="abc">
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
 <script>
     $('.approv').click(function(){
       $('.jobapprob').submit();  
     });
     $('.approv2').click(function(){
       $('.jobapprobk').submit();  
     });
 </script>
