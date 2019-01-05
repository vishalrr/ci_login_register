<?php include('header.php');?>
<style>
    #imgFileUpload {
    background: #ccc;
    border: 1px solid #666;
    float: right;
    height: 85px;
   /* position: absolute;*/
    right: 20px;
    width: 100px;
}
</style>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard';?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a>Edit User Details
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
                  <h4 class="card-title" id="basic-layout-form-center">Edit User Details</h4>
                 
                </div>
                <?php 
                 /* echo '<pre>';
                  print_r($applied);
                  print_r($reponsedjob);*/
                  
                ?>
                <div class="card-content collapse show">
                  <div class="card-body">
                    
                    <form class="form" id="seekereditvalid" action="<?php echo base_url(); ?>admin/candidate/edit_seekers" method="post" enctype="multipart/form-data">
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    
									      <input type="hidden" name="id" value="<?php if(!empty($seekers[0])){ echo $seekers[0]->id;}else{ echo'';} ?>">
									  <label for="eventInput1">First Name </label>
									  <input type="text" class="form-control" value="<?php if(!empty($seekers[0]->first_name)){ echo $seekers[0]->first_name; } ?>" placeholder="" name="first_name" value="">
									 
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Last Name </label>
									  <input type="text" class="form-control" placeholder="" name="last_name" value="<?php if(!empty($seekers[0]->last_name)){ echo $seekers[0]->last_name; } ?>">
									 
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Email ID	</label>
									  <input type="text" class="form-control" placeholder="" name="email" value="<?php if(!empty($seekers[0]->email)){ echo $seekers[0]->email; } ?>">
									
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Mobile	 </label>
									  <input type="text" class="form-control" placeholder="" name="phone" value="<?php if(!empty($seekers[0]->phone)){ echo $seekers[0]->phone; } ?>">
									 
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
									     <label for="eventInput1">Skills	 </label>
								 <?php 
                                     $skills = $this->db->get_where('skills', array('status' => 1))->result();
                                    
                                    $skil=   explode(',',$seekers[0]->skills); ?>
									  
                                    <select data-placeholder="Choose a Skills..." name="skills[]" style="border-radius: .25rem;width:200px;" class="form-control chosen-select" multiple tabindex="4">
                                        <option value=""></option>
                                           <?php foreach($skills as $skill)
									      {?>
									      <option <?php if(!empty($skil)){ if(in_array($skill->id, $skil)){ echo 'selected '; } } ?> value="<?php echo $skill->id; ?>"><?php echo $skill->skill; ?></option>
									      <?php } ?>
                                        </select>
                                        </div>
                                        </div>
                                        
                                <div class="col-md-6">
									<div class="form-group">
									    <?php 
                                     $categorys = $this->db->get_where('category_job', array('status' => 1))->result();
                                    
                                  ?>
									   <label for="eventInput1">	Category</label>
                                    <select  class="form-control" name="profile_for">
                                        <option value=""></option>
                                        
                                           <?php foreach($categorys as $category)
									      {?>
									      <option <?php  if(!empty($seekers[0]->profile_for)){if($category->id==$seekers[0]->profile_for){ echo 'selected '; } }?> value="<?php echo $category->id; ?>"><?php echo $category->category_name; ?></option>
									      <?php } ?>
                                        </select>
							</div>
								</div>
								 <div class="col-md-6">
									<div class="form-group">
									    <label for="eventInput1">	Eperience</label>
								<select name="experience"  class="form-control">
                                                        <?php foreach($exp as $e) { ?>
                                                        <option <?php if($seekers[0]->experience== $e->id){ echo 'selected';} ?> value="<?php echo $e->id; ?>"><?php echo $e->experience; ?></option>
                                              <?php } ?>          
                                                    </select>
                                                    </div>
                                                    </div>
                                                    
                                                   
									    
									    <div class="col-md-6">
									      <div class="form-group">
									     <label>Qulaification *</label>
                                                <div class="empire-profile-select">
                                                    <?php $edu1=   explode(',',$seekers[0]->education_level); ?>
                                                     <select data-placeholder="Choose a qualification..." name="education_level[]" style="border-radius: .25rem;width:200px;" class="chosen-select" multiple tabindex="4">
                                                    <?php foreach($edu as $e){ ?>
                                                     <option <?php if(!empty($edu1)){ if(in_array($e->id, $edu1)){ echo 'selected '; } } ?> value="<?php echo $e->id; ?>"><?php echo $e->qualification; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                </div>
                                                </div>
                                                
                                                <div class="col-md-6">
									      <div class="form-group">
                                                <label>Preffered Location </label>
                                                    <?php $prefer=   explode(',',$seekers[0]->location); ?>
                                                     <select data-placeholder="Choose a Location..." name="location[]" style="border-radius: .25rem;width:200px;" class="chosen-select" multiple tabindex="5">
                                                    <?php foreach($location as $l){ ?>
                                                     <option <?php if(!empty($prefer)){ if(in_array($l->id, $prefer)){ echo 'selected '; } } ?> value="<?php echo $l->id; ?>"><?php echo $l->location_name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
									          <div class="form-group">
                                                     <label>Current Salary *</label>
                                                <div class="empire-profile">
                                                <input type="number" name="current_salary" class="form-control" value="<?php echo $seekers[0]->current_salary; ?>">
                                                </div>
                                                </div>
                                                </div>
                                            
                                            <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="eventInput1">Resume</label>
                                            
                                            
                                            <input type="file"  class="form-control"  id="FileUpload2" name="resume"  />
                                            <span class="uploadresum"></span>
                                            </div>
                                            </div>
								
                                                 <div class="col-md-6">
									          <div class="form-group">
                                                     <label>Password</label>
                                                <div class="empire-profile">
                                                <input type="password" name="password" class="form-control pswd" id="password" value="">
                                                </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6">
									          <div class="form-group">
                                                     <label>Confirm Password</label>
                                                <div class="empire-profile">
                                                <input type="password" name="confpassword" class="form-control cpswd" value="">
                                                </div>
                                                </div>
                                                </div>
								
								
							
								<div class="col-md-6">
									    <div class="form-group">
									         <label for="eventInput1">Profile Image</label>
									         <div class="col-md-3 desin-ns">
									             <?php if(!empty($seekers[0]->profile_pic))
									             {
									                 $img= $seekers[0]->profile_pic;
									             }else
									             {
									                 $img= 'assets/admin/app-assets/images/dummy_image1.jpg';
									             }
									             
									             ?>
									             
								      <img id="imgFileUpload" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $img; ?>" style="cursor: pointer" />
                   
                                    <span id="spnFilePath"></span>
                                    <input type="file" id="FileUpload1" name="profile_pic" style="display: none" />
                                    </div>
                                    <span class="uploaderror" style="float:left;"></span>
                                    </div>
								</div>
								<?php if(!empty( $seekers[0]->resume)){ ?>
								<div class="col-md-6">
									    <div class="form-group">
									         <label for="eventInput1">Download Resume</label>&nbsp;<a href="<?php echo base_url(); ?><?php echo $seekers[0]->resume; ?>" target="_blank"><i class="fa fa-download" style="font-size:48px;color:green"></i></a>
									          </div>
								</div>
								<?php } ?>
								
							</div>
							<div class="row">
							    <div class="col-md-12">
								<div class="form-group">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Update
                        </button>
					
					 </div></div>
							</div>
					
						
						
                        </div>
                      </div>
                      
                  </div>
                    </form>
                    
                    <h4 class="card-title">Applied Jobs</h4>
                    <div class="table-responsive">
            <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          
                          <th>	S.No</th>
                          <th>	Job Title</th>
                          <th>	Company Logo</th>
                          <th>	Company Name</th>
                          <th>	Applied Date</th>
                          
                         </tr>
                      </thead>
                      <tbody>
                          <?php $count = 1;
                          
                          $applied= $this->Common->getData('applied',array('user_id'=>$seekers[0]->bullid,'status='=>1));
                          
                          
                          foreach($applied as $apply){ ?>
                        <tr>
                          
						  <td><?php echo $count++; ?></td>
                         <td><?php if(!empty($apply->job_id)){ echo $this->db->get_where('jobs',array('jobid'=>$apply->job_id))->row()->title; } ?></td>
						<td> <?php 
						 
						 if(!empty($apply->job_id)){ 
						     
                        	  $this->db->select("jobs.jobid,employers.company_logo");
                              $this->db->from('jobs');
                              $this->db->join('employers', 'jobs.employer_id = employers.empid');
						      $this->db->where('jobs.jobid',$apply->job_id);
						   $logo=   $this->db->get()->row()->company_logo;
						      }
						   //if(!empty($empoye->emp_id)){ echo $this->db->get_where('employers',array('id'=>$empoye->emp_id))->row()->company_name; }
						 if($logo){
                						    $image = base_url("assets/employer/images/$logo");
                					    }else{
                							$image = base_url('assets/employer/images/company.png');
                						}   ?> <img src="<?= $image; ?>" width="70" class="squr-tb-img" style="cursor: default;"></td>
						  
						  <td><?php  if(!empty($apply->job_id)){ 
						     
                        	 $this->db->select("jobs.jobid, corporations.name");
                              $this->db->from('jobs');
                              $this->db->join('employers', 'jobs.employer_id = employers.empid');
                               $this->db->join('corporations', 'corporations.corpid = employers.corpid');
						      $this->db->where('jobs.jobid',$apply->job_id);
						  echo   $this->db->get()->row()->name;
						      } ?></td>
						  
						  <td> <?php echo date("Y-m-d h:i:s", strtotime($apply->created_at)); ?></td>
						  
                         
                          
                        </tr>
                        <?php } ?>
						
                      </tbody>
                     
                    </table>
                    </div>
                    
                    <h4 class="card-title">InterView Jobs</h4>
                    <div class="table-responsive">
            <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          
                         
                          <th>	Job Title</th>
                          <th>	Company Logo</th>
                          <th>	Company Name</th>
                          <th>	Interview Start Date</th>
                          <th>	Interview End Date</th>
                          <th>	Interview Date</th>
                         </tr>
                      </thead>
                      <tbody>
                          <?php  $count2 = 1; foreach($reponsedjob as $reponsed){ 
						  
						  echo '<pre>'; print_r($reponsed); echo '</pre>';?>
                        <tr>
                        
						  <td> <?php if(!empty($reponsed->job_id)){ echo $this->db->get_where('jobs',array('jobid'=>$reponsed->job_id))->row()->title; } ?></td>
						   <td><?php if(!empty($reponsed->emp_id)){ $logos =  $this->db->get_where('employers',array('empid'=>$reponsed->emp_id))->row()->company_logo; }
						    if($logos){
                						    $images = base_url("assets/employer/images/$logo");
                					    }else{
                							$images = base_url('assets/employer/images/company.png');
                						} ?> <img src="<?= $images; ?>" width="70" class="squr-tb-img" style="cursor: default;"></td>
						   <td><?php if(!empty($reponsed->emp_id)){ echo $this->db->get_where('employers',array('id'=>$reponsed->emp_id))->row()->company_name; } ?></td>
						  <td> <?php echo date("Y-m-d h:i:s", strtotime($reponsed->start_date)); ?></td>
						  <td> <?php echo date("Y-m-d h:i:s", strtotime($reponsed->end_date)); ?></td>
						  <td> <?php echo date("Y-m-d h:i:s", strtotime($reponsed->candidate_date)); ?></td>
						 
                        </tr>
                        <?php } ?>
						
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
    <?php include('footer.php') ?>
    <script type="text/javascript">
    $(function () {
        var fileupload = $("#FileUpload1");
        var filePath = $("#spnFilePath");
        var image = $("#imgFileUpload");
        image.click(function () {
            fileupload.click();
        });
       var x=1;
        fileupload.change(function () {
             var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').css({'color':'red'});
                    x=0;
                    $('#seekereditvalid').attr('onsubmit','return false');
                }else
                {
                    $('.uploaderror').html("");
                    x=1;
                     $('#seekereditvalid').attr('onsubmit','return true');
                }
        });
        var y=1;
           $('#FileUpload2').change(function(){
             var fileExtensions = ['pdf', 'doc', 'docx', 'rft'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtensions) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploadresum').html("Only formats are allowed : "+fileExtensions.join(', '));
                    $('.uploadresum').css({'color':'red'});
                    y=0;
                     $('#seekereditvalid').attr('onsubmit','return false');
                     
                }else
                {
                     $('.uploadresum').html('');
                    y=1;
                     $('#seekereditvalid').attr('onsubmit','return true');
                }
        });
        
         $('#seekereditvalid').submit(function(){
            if(x==1 && y==1)
            {
                return true;
            }
            else
            {
                return false;
            }
            
        });
        
        $('.table-striped').DataTable();
    });
    
</script>
