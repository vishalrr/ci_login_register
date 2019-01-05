<?php include('header.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
     <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
        
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard';?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a>Employer Details

</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div> 
      
      </div>
      <div class="content-body">
           <?php include('inc/message.php'); ?>
           <div class="alert alert-success success2" style="display:none;">
			  <strong>Success !</strong> Company logo Removed Successfully 
			</div>
          <div class="alert alert-success success" style="display:none;">
			  <strong>Success !</strong> Company logo Upload Successfully 
			</div>
			<div class="alert alert-danger danger" style="display:none;">
			  <strong>Error !</strong> Error To upload Company logo
			</div>
			<div class="alert alert-success success4" style="display:none;">
			  <strong>Success !</strong> Job Delete successfull 
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
                  <h4 class="card-title">Employer Details

                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
					<div class="row">
						<div class="col-md-3">
							<h5 class="main-ttl-n">  Company Logo</h5>
							<div class="pro-img-n">
							    <?php
                						if($employer[0]->company_logo){
                						    $image = base_url("assets/employer/images/".$employer[0]->company_logo);
                					    }else{
                							$image = base_url('assets/employer/images/company.png');
                						} 
            						?>
	<img src="<?php echo $image; ?>" class="logo_img replaceimgs" style="max-width: 200px; object-fit: contain; height: auto;">
							
							</div>
							<div class="actions-btn">
							<span class="active-b"><input type="checkbox" class="switchBootstrap swtch" action="<?php echo base_url();?>admin/Employer/statusupdate" data-id="<?php echo $employer[0]->id; ?>" data-tbl="employers"  data-off-text="Inactive" data-on-text="Active" <?= ($employer[0]->status=='1') ? 'checked' : ''; ?> /></span>
							
							<a href="javascript:void(0)" class="btn btn-warning btn-table clickeves" data-toggle="modal" data-target="#edit-image"><i class="la la-pencil"></i></a>
						  <!--a href="javascript:void(0);" id="imgFileUpload" class="btn btn-warning btn-table uloadimgs"><i class="la la-pencil"></i><form class="uploadimgform">
                                                <input type="file" name="file" id="FileUpload1" class="empire-upload uploadimg"  action="<?php echo base_url();?>admin/Employer/companylogopload?id=<?php echo $employer[0]->id; ?>"  />
                                            </form></a-->
						 
						    <a href="javascript:void(0);" action="<?php echo base_url();?>admin/Employer/removeimg" data-id="<?php echo $employer[0]->id; ?>" data-tbl="employers" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
							</div>
						</div>
						<div class="col-md-9">
							<h5 class="main-ttl-n">  Employer Details</h5>
							<div class="row">
								<div class="col-md-6">
									<div class="table-responsive">
										<table class="table table-pro bx-shad">
										  <tbody>
												<tr>
												    
												    <?php 
												    ?>
												  
											  <th class="text-bold-800">First name :</th>
											  <td class="text-bold-800 text-right"> <?php if(!empty($employer[0]->f_name)){echo $employer[0]->f_name;}else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th class="text-bold-800">Last name :</th>
											  <td class="text-bold-800 text-right"> <?php if(!empty($employer[0]->l_name)){echo $employer[0]->l_name;}else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th class="text-bold-800">Profile Image :</th>
											  <td class="text-bold-800 text-right"> 
                                                <?php
                                                if(@$employer[0]->profile_photo){
                                                $image = base_url("assets/employer/images/".$employer[0]->profile_photo);
                                                }else{
                                                $image = base_url('assets/employer/images/company.png');
                                                } 
                                                ?>
            					                <img class="dynamic_image" src="<?= $image ?>" width="50" height="50">
											  </td>
											</tr>
											<tr>
											  <th class="text-bold-800">Company name :</th>
											  <td class="text-bold-800 text-right"> 
											<?php if(!empty($employer[0]->corpid)){ echo $this->db->get_where('corporations',array('corpid'=>$employer[0]->corpid))->row()->name;}else{ echo '--';} ?>
											 </td>
											</tr>
											
											<tr>
											  <th>Contact Person	 :</th>
											  <td class="text-right">	 <?php if(!empty($employer[0]->mobile1)){echo $employer[0]->mobile1;}else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th>Email :</th>
											  <td class="text-right">	 <?php if(!empty($employer[0]->email)){echo $employer[0]->email;}else{ echo '---'; } ?>
</td>
											</tr>
											
											<tr>
											  <th>Website Url	 :</th>
											  <td class="text-right">		 <?php if(!empty($employer[0]->website)){echo $employer[0]->website;}else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th>Address	 :</th>
											  <td class="text-right">		 <?php if(!empty($employer[0]->address)){echo $employer[0]->address;}else{ echo '---'; } ?><br>
																				
</td>
											</tr>
										
											
											
											
											
										 </tbody>
										</table>
									</div>
								</div>
								<div class="col-md-6">
									<div class="table-responsive">
										<table class="table table-pro bx-shad">
										  <tbody>
										      <tr>
											  <th>Zipcode :</th>
											  <td class="text-right">		 <?php if(!empty($employer[0]->pincode)){echo $employer[0]->pincode;}else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th>Country :</th>
											  <td class="text-right">	<?php if(!empty($employer[0]->country)){ echo $this->db->get_where('countries',array('id'=>$employer[0]->country))->row()->name;}else{ echo '--';} ?>	 </td>
											</tr>
												<tr>
											  <th>City :</th>
											  <td class="text-right">		 <?php if(!empty($employer[0]->city)){echo $employer[0]->city;}else{ echo '---'; } ?></td>
											</tr><tr>
											  <!--th>Address :</th>
											  <td class="text-right">		john@gmail.com</td>
											</tr-->
											<tr>
											  <th>State :</th>
											  <td class="text-right">		<?php if(!empty($employer[0]->state)){ echo $this->db->get_where('states',array('id'=>$employer[0]->state))->row()->name;}else{ echo '--';} ?>	 </td>
											</tr>
											<tr>
											  <th>Phone :</th>
											  <td class="text-right">	 <?php if(!empty($employer[0]->phone)){echo $employer[0]->phone;}else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th>Fax Number		 :</th>
											  <td class="text-right">	 <?php if(!empty($employer[0]->fax)){echo $employer[0]->fax;}else{ echo '---'; } ?>
</td>
											</tr>
											<tr>
											  <th>Number of Jobs active	 :</th>
											  <td class="text-right">		<?php if(!empty($employer[0]->empid)){ echo $this->db->get_where('jobs',array('employer_id'=>$employer[0]->empid,'status'=>'1'))->num_rows();}else{ echo '--';} ?></td>
											</tr>
											<tr>
											  <th>Number of jobs posted		 :</th>
											  <td class="text-right">	<?php if(!empty($employer[0]->empid)){ echo $this->db->get_where('jobs',array('employer_id'=>$employer[0]->empid))->num_rows();}else{ echo '--';} ?></td>
											</tr>
											<tr>
											  <th>Activation Status	 :</th>
											  <td class="text-right">	<?php  if($employer[0]->status=='1'){ echo 'Active'; }else{ echo 'Deactive'; } ?></td>
											</tr>
											
											
											
										 </tbody>
										</table>
									</div>
								</div>
								
								
							</div>
					 </div>
					
					</div>
					<div class="row">
					<div class="col-md-12 m-t-30">
						<h5 class="main-ttl-n"> Posted Jobs
</h5>
						 <div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th> 
							Posted date & Time 
						  </th>
                          <th>Job Title</th>
                          <th>	Responses	</th>
                          <th>	Status	</th>
                           <th>		Action</th>
                         </tr>
                      </thead>
                      <tbody>
                          <?php 
                          foreach($postedjobs as $job)
                          {
                         
                          
                          ?>
                        <tr id="<?php echo $job->id; ?>">
                          <td>
                              <?php $timestamp = strtotime($job->created_at); echo $date = date('d/m/Y h:i:s', $timestamp); ?>
							
						  </td>
						 
                         <td>
							<?php echo $job->title; ?>
						 </td>
						  <td><?php if(!empty($this->db->get_where('applied',array('job_id'=>$job->id,'status!='=>'3'))->num_rows())){?> <a href="<?php echo base_url("admin/employer/response?id=".$job->id); ?>"><?php echo $this->db->get_where('applied',array('job_id'=>$job->id,'status!='=>'3'))->num_rows(); ?></a><?php }else{ echo '0'; } ?></td>
						 <td><?php if($job->approved==1){ echo 'Approved'; }else{ echo 'Unapproved'; } ?></td>
                          <td>
							<a href="<?php echo base_url(); ?>admin/employer/job-details?id=<?php echo $job->jobid; ?>" class="btn btn-warning btn-table " ><i class="la la-eye"></i></a>
						   <a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $job->id; ?>" data-tbl="jobs" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
                        <?php } ?>
                      <!--tr>
                          <td>
							22/05/2018 12:10:44
						  </td>
						 
                         <td>
							Job Two
						 </td>
						  <td><a href="">(12) </a> </td>
						 
                          <td>
							<a href="#" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						    <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
                          <td>
							10/05/2018 12:10:44
						  </td>
						 
                         <td>
							Job Three
						 </td>
						  <td><a href="">(12) </a> </td>
						 
                          <td>
							<a href="#" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						    <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
                          <td>
							16/05/2018 12:10:44
						  </td>
						 
                         <td>
							Job Four
						 </td>
						  <td><a href="">(12) </a> </td>
						 
                          <td>
							<a href="#" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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
						  <label for="eventInput1">Name   </label>
						  <input type="text" class="form-control " placeholder="Category Name" name="fullname" value="">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group forms-radio">
						  <label for="eventInput1" class="label-full">Status    </label>
						  <div class="skin skin-flat">
							  <input type="radio" name="input-radio-4" id="input-radio-15">
							  <label for="input-radio-15">Approved</label>
						  </div>
						  <div class="skin skin-flat">
							  <input type="radio" name="input-radio-4" id="input-radio-151">
							  <label for="input-radio-151">Unapproved</label>
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
        <h4 class="modal-title" id="myModalLabel">Edit Job</h4>
      </div>
       <form id="addjobpopup" class="form" action="<?php echo base_url(); ?>admin/Employer/custom?do=add&&tbl=jobs&&name=Title&&redirect=Employer/employer-details&&error=Employer/employer-details&&ids=<?php echo $_GET['id']; ?>" method="post" >
      <div class="modal-body">
        
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Job Name   </label>
						  <input type="hidden" name="id" class="jobid" value="">
						  <input type="text" class="form-control jobtitle" placeholder="title Name" name="title" value="">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group forms-radio">
						  <label for="eventInput1" class="label-full">Status    </label>
						  <div class="skin skin-flat">
							  <input type="radio" class="statusactive" value="1" name="status" id="input-radio-15">
							  <label for="input-radio-15">Approved</label>
						  </div>
						  <div class="skin skin-flat">
							  <input type="radio" class="statusdeactive" value="0" name="status" id="input-radio-151" >
							  <label for="input-radio-151">Unapproved</label>
						  </div>
						</div>
					</div>
				</div>
				
			  </div>
			</div>
		  </div>
		 
		
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="edit-image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Profile Picture</h4>
      </div>
        <form class="form" enctype='multipart/form-data' id="uplodcompanylog" action="<?php echo base_url(); ?>admin/employer/profileimgopload?tbl=employers&&redirect=Employer/employer-details&&error=Employer/employer-details&&ids=<?php echo $_GET['id']; ?>" method="post">
      <div class="modal-body">
      
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Profile Picture   </label>
						  <input type="file" class="form-control uplodcompanylog" placeholder="Category Name" name="file" value="">
						  <span class="uploaderror"></span>
						</div>
					</div>
					
				</div>
				
			  </div>
			</div>
		  </div>
		 
	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
      	</form>
    </div>
  </div>
</div>
  
 <?php include('footer.php') ?>
 <script>
 $('.clickeves').click(function(){
    $('#uplodcompanylog')[0].reset(); 
    $('.uploaderror').html('');
 });
 
     $(function () {
        var fileupload = $("#FileUpload1");
        //var filePath = $("#spnFilePath");
        var image = $("#imgFileUpload");
        image.click(function () {
            
            $("#FileUpload1").click();
        });
       
    });
    
    $('.uplodcompanylog').change(function(){
        var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').css({'color':'red'});
                    x=0;
                    $('#uplodcompanylog').attr('onsubmit','return false');
                }else
                {
                    $('.uploaderror').html("");
                    x=1;
                     $('#uplodcompanylog').attr('onsubmit','return true');
                }
    });
 </script>
