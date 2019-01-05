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
             <?php if(!empty($postedjobs[0]->corpid)){ echo $this->db->get_where('corporations',array('corpid'=>$postedjobs[0]->corpid))->row()->name; }else{ echo '---'; } ?></td>
																	
             							
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
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="card-drag-area">
						    <?php 
						   
						    
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
								<td><?php if(!empty($apply->skills) && $apply->skills!='null'){ $dss= explode(',',$apply->skills);
								$dd2= array();
								foreach($dss as $ds1)
								{
								$dd2[]=  $this->db->get_where('skills',array('id'=>$ds1))->row()->skill;
								}
								if(!empty($dd2)){ echo implode(',',$dd2); }else{ echo '---'; } 
								} else{ echo '---'; } ?></td>
								<td> <?php   if(!empty($apply->status) && $apply->status=='1'){ ?>
								     <form class="jobapprob" action="<?php echo base_url();?>admin/employer/jobapproved?id=<?php echo $_GET['id']; ?>" method="post">
									  <input type="hidden" name="status" value="2">
    									  <input type="hidden" name="ids" value="<?php if(!empty($apply->id)){ echo $apply->id; }?>">
									  <input type="hidden" name="job_id" value="<?php if(!empty($apply->job_id)){ echo $apply->job_id; }?>">
									  <input type="hidden" name="redirect" value="admin/Employer/job-details?id=<?php echo $_GET['id']; ?>">
									 <a href="javascript:void(0)" class="btn btn-info btn-sm approv">Assign</a>
									 </form>
									 <?php } if(!empty($apply->status) && $apply->status=='2'){ ?>
									 
									 <a href="javascript:void(0)" class="btn btn-info btn-sm">Assigned</a>
									 <?php } ?> &nbsp;
									 <?php  if(!empty($apply->status)){ ?>
									 <form class="jobapprobk" action="<?php echo base_url();?>admin/employer/jobapproved?id=<?php echo $_GET['id']; ?>" method="post">
									 <input type="hidden" name="status" value="3">
									  <input type="hidden" name="ids" value="<?php if(!empty($apply->id)){ echo $apply->id; }?>">
									  <input type="hidden" name="job_id" value="<?php if(!empty($apply->job_id)){ echo $apply->job_id; }?>">
									   <input type="hidden" name="redirect" value="admin/Employer/job-details?id=<?php echo $_GET['id']; ?>">
									 <a href="javascript:void(0)" class="btn btn-info btn-sm approv2">Delete</a>
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