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
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/faq">FAQ</a>
                </li>
                <li class="breadcrumb-item"><a><?php if(!empty($faq[0])){ echo 'Edit FAQ'; }else{ echo 'Add FAQ'; } ?></a>
                </li>
						
						</ol>
					</div>
				</div>
			</div>
		</div>
      <div class="content-body">
        <!-- Basic form layout section start -->
		 <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form-center"><?php if(!empty($faq[0])){ echo 'Edit FAQ'; }else{ echo 'Add FAQ'; } ?></h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <?php include('inc/message.php'); ?>
                     	<form class="form faqform" action="<?php echo base_url(); ?>admin/job/customfaq?do=add&&tbl=faq&&redirect=faq" method="post">
						<div class="row justify-content-md-center">
							<div class="col-md-12">
								<div class="form-body">
									<div class="row">
									    
									    <div class="col-md-12">
									<div class="form-group">
									     <label for="eventInput1">Question For 	 </label>
								 
									  <?php  if(!empty($faq[0])){ $ques = explode(',',$faq[0]->question_for); } ?>
                                     <select data-placeholder="Choose a Question for..." name="questionfor[]" id="questionfor" style="border-radius: .25rem;width:200px;" class="form-control chosen-select" multiple tabindex="4" required>
                                        <option value=""></option>
                                          <option <?php if(!empty($ques)){ if(in_array('employer', $ques)){ echo 'selected '; } } ?> value="employer">Employer</option>
                                          <option <?php if(!empty($ques)){ if(in_array('candidate', $ques)){ echo 'selected '; } } ?> value="candidate">Candidate</option>
                                        </select>
                                        <span class="error questionsss" style="font-weight:400;"></span>
                                        </div>
                                        </div>
									    
									    
									    
									    
									    
										<div class="col-md-12">
										    <input type="hidden" name="id" value="<?php if(!empty($faq[0])){ echo $faq[0]->id;}else{ echo'';} ?>">
											<div class="form-group">
												<label for="eventInput1">Question</label>
												<input type="text" class="form-control" name="question" value="<?php if(!empty($faq[0])){ echo $faq[0]->question;}else{ echo'';} ?>" >
											</div>
										</div>
										
									</div>
									
									<div class="form-group">
															<label for="eventInput1">Answer</label>
															<textarea class="form-control" name="answer"  rows="5" cols="10" required>	<?php if(!empty($faq[0])){ echo $faq[0]->answer;}else{ echo'';} ?></textarea>
														
														</div>
									
								</div>
							</div>
						</div>
						<div class="form-actions left">
							<button type="submit" class="btn btn-success addfaq">
								<i class="la la-check-square-o"></i> Save
							</button>
							<a href="<?php echo base_url(); ?>admin/faq" class="btn btn-danger">
								<i class="la la-close"></i> Cancel
							</a>
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
    $('.faqform').on('submit', function(){
        var vl = $('#questionfor').val();
        if(vl=='')
        {
            $('.questionsss').html('Question For is Required');
            return false;
        }else
        {
            $('.questionsss').html('');
            return true;
        }
     });
     
     $('#questionfor').on('change', function(){
         var vl = $(this).val();
        if(vl=='')
        {
            $('.questionsss').html('Question For is Required');
            return false;
        }else
        {
            $('.questionsss').html('');
            return true;
        }
     });
     
    </script>
    