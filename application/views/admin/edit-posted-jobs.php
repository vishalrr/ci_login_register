<?php include('header.php');?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/employer/css/datepicker.css">
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard';?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/employer/employers-posted-jobs';?>">Employers Jobs List</a>
                </li>
                <li class="breadcrumb-item"><a>Job Details</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">Job Details</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <form class="form" action="<?php echo base_url();?>admin/employer/editjobs" id="edit-post-job" name="job" method="post">
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
							<div class="row">
							    <input type="hidden" name="id" value="<?= $postedjobs[0]->id; ?>">
								<div class="col-md-6">
									<div class="form-group">
									   <label for="post-title">Job  Title</label>

										  <input type="text" class="form-control" placeholder="Post Title" name="title" id="title" value="<?php if(!empty($postedjobs[0]->title)){ echo $postedjobs[0]->title; } ?>">
									 
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">

									  <label for="apply-before">Apply Before</label>
                                      
  <div class='input-append' id='datetimepicker4'>
    <input data-format='yyyy-MM-dd' class="form-control" name="apply" type='text' value="<?= date( "Y-m-d", strtotime($postedjobs[0]->apply) ) ?>"/>
    <span class="add-on">
      <i data-date-icon="icon-calendar" data-time-icon="icon-time" class="icon-calendar">
      </i>
    </span>
  </div>

									  <!--input type="date" class="form-control" placeholder="" name="apply" value="<?= date( "d/m/Y", strtotime($job->apply) ) ?>"-->

									</div>

								   </div>
								   
								    <div class="col-md-6">

									<div class="form-group">

									  <label for="apply-before">Offered Salary</label>

									  <input type="text" class="form-control" placeholder="Offered Salary" name=
									  "salary" value="<?= $postedjobs[0]->salary ?>">

									</div>

								   </div>	
							
								
								<div class="col-md-6">

									<div class="form-group">

									  <label for="career-level">Career Level</label>

									  <input type="text" class="form-control" Placeholder="Career Level" name="level" value="<?= $postedjobs[0]->level ?>">

									</div>

								   </div>
								   
								   <div class="col-md-6">
									<div class="form-group">
									  <label for="apply-before">Job Category</label>
									 
									  <select class="form-control" name="job_category" required>
									      <option value=''>Select category</option>
									      <?php foreach($category as $c){ ?>
									      <option <?php if($c->id==$postedjobs[0]->job_category){ echo 'selected'; } ?> value="<?php echo $c->id; ?>"><?php echo $c->	category_name; ?></option>
									      
									      <?php } ?>
									   </select>
									
									</div>
								   </div>
								   <div class="col-md-6">
									<div class="form-group">
									  <label for="career-level">Job Location</label>
									   <select class="form-control" name="job_location" required>
									      <option value=''>Select Location</option>
									      <?php foreach($location as $c){ ?>
									      <option <?php if($c->id==$postedjobs[0]->job_location){ echo 'selected'; } ?> value="<?php echo $c->id; ?>"><?php echo $c->	location_name; ?></option>
									      
									      <?php } ?>
									   </select>
									</div>
								   </div>
								   
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Industry  <sup> * </sup>	</label>
										<?php $industry = $this->db->get_where('industry_type',array('status'=>1))->result(); 	?>
										<select class="form-control" placeholder="Industry" name="industry">
										    
											<option value="">select</option>
											<?php foreach($industry as $indust){ ?>
										<option <?php if(!empty($postedjobs[0]->industry)){ if($postedjobs[0]->industry==$indust->id){ echo 'selected'; } }?> value="<?php echo $indust->id; ?>"><?php echo $indust->category; ?></option>
										<?php } ?>
										</select>
									</div>
								</div>
							    
							   
								<div class="col-md-6">

									<div class="form-group">

									  <label for="experience">Experience</label>

									 
                                       <select  name="experience" style="border-radius: .25rem;" class="form-control " >
                                        <option value=""></option>
                                       <?php foreach($exp as $e) { ?>
                                                        <option <?php if($e->id==$postedjobs[0]->experience){ echo 'selected'; } ?> value="<?php echo $e->id; ?>"><?php echo $e->experience; ?></option>
                                              <?php } ?>  
                                              </select>
									</div>

								   </div>
						
								<div class="col-md-6">

										<div class="form-group">

									  <label for="gender">Gender</label>

									 <select class="form-control" name="gender">
									    <option value="">Select Gender</option>
										<option value="m" <?= ($postedjobs[0]->gender=='m') ? 'selected' : ''; ?> >Male</option>
										<option value="f" <?= ($postedjobs[0]->gender=='f') ? 'selected' : ''; ?> >Female</option>
									  </select>

									</div>

								   </div>
								 <div class="col-md-6">

									<div class="form-group">
									  <label for="Qualification">Qualification</label>
                                     <?php $qualifications = $this->db->get_where('qualification', array('status' => 1))->result();
                                       ?>
									 
									  <select data-placeholder="Choose a Qualification..." name="qualification[]" style="border-radius: .25rem;width:200px;" class="chosen-select" multiple tabindex="4">
                                        <option value=""></option>
                                        <?php  $jobq=   explode(',',$postedjobs[0]->qualification); 
                                          foreach($qualifications as $qualification)
									      { echo $qualification->id; ?>
									      <option <?php if (in_array($qualification->id, $jobq)){ echo 'selected '; } ?> value="<?php echo $qualification->id; ?>"><?php echo $qualification->qualification; ?></option>
									      <?php } ?>
                                        </select>
									 

									</div>

								   </div>
							
								<div class="col-md-12">
									<div class="form-group">

									  <label for="Qualification">Job Description</label>

									  <textarea rows="4" class="form-control"  id="editor" placeholder="Job Description" name="description" value="<?= $postedjobs[0]->description ?>"> <?= $postedjobs[0]->description ?> </textarea>
									  
									   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    
   
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/employer/js/datepicker.min.js"></script>
	<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script><script>
			CKEDITOR.replace( 'editor' );
		</script>

									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									  <label for="Qualification">What You Will Do</label>
									  <textarea rows="4" class="form-control" placeholder="What You Will Do" name="what_do"><?php echo $postedjobs[0]->what_do; ?></textarea>
									</div>
								   </div>
								   
								   
								   	 <div class="col-md-12">
									<div class="form-group">
									  <label for="Qualification">What we can offer you</label>
									  <textarea rows="4" class="form-control" placeholder="What we can offer you" name="what_offer"><?php echo $postedjobs[0]->what_offer; ?></textarea>
									</div>
								   </div>
								
								<div class="col-md-6">
									 <div class="form-group">

								       <label>Required skills</label>

								     
                                    <?php 
                                     $skills = $this->db->get_where('skills', array('status' => 1))->result();
                                    
                                    $skil=   explode(',',$postedjobs[0]->skills); ?>
									  
                                    <select data-placeholder="Choose a Country..." name="skills[]" style="border-radius: .25rem;width:200px;" class="chosen-select" multiple tabindex="4">
                                        <option value=""></option>
                                           <?php foreach($skills as $skill)
									      {?>
									      <option <?php if (in_array($skill->id, $skil)){ echo 'selected '; } ?> value="<?php echo $skill->id; ?>"><?php echo $skill->skill; ?></option>
									      <?php } ?>
                                        </select>
								     	</div>  
								</div>
								
							
								<div class="col-md-12">
								    <div class="form-group">
                                        <button type="submit" class="btn btn-success editpostss"><i class="la la-briefcase"></i> Save Job
                                        </button>
                                        
                                        <a href="<?php echo base_url().'admin/employer/employers-posted-jobs'?>" class="btn btn-danger"><i class="la la-close"></i> Cancel
                                        </a>
            					    </div>
								</div>
							
                        </div>
                      </div>
					  </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
	     </div>	  	 </div>	   	
    <?php include('footer.php') ?>
   
    <script>
   


    
    
        $(document).ready(function(){
            
            
    	        
  /* $('#edit-post-job').validate({
       rules: {
         title: "required",
         industry: "required",
        apply: "required",
         salary: {
		        required: true,
		        digits: true
		      },
         level: "required",
         experience: {
		        required: true,
		        digits: true,
		      },
         qualification[]: "required",
         skills[]: "required",
        

       },
       submitHandler: function(form) {
    	        
    	       
    	      
    	        $('#edit-post-job').submit();
       }
    });
    
          $('.editpostss').click(function(){
                
            $(".form").validate(); 
            });*/
            
            
    	        
        });
    </script>
    
   
