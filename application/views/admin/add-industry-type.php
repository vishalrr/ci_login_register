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
					<li class="breadcrumb-item"><a><?php if(!empty($industry[0])){ echo 'Edit Industry Type'; }else{ echo 'Add Industry Type'; } ?></a>
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
						  <h4 class="card-title" id="basic-layout-form-center"><?php if(!empty($industry[0])){ echo 'Edit Industry Type'; }else{ echo 'Add Industry Type'; } ?></h4>
						 
						</div>
						<div class="card-content collapse show">
							<div class="card-body">
							
								<form name="industyadd" id="industyadd" class="form" action="<?php echo base_url(); ?>admin/job/custom?do=add&&tbl=industry_type&&redirect=job/industry-type&&error=job/add-industry-type&&name=Industry Name&&message=Industry" method="post">
									<div class="row justify-content-md-center">
										<div class="col-md-12">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
													    <input type="hidden" name="id" value="<?php if(!empty($industry[0])){ echo $industry[0]->id;}else{ echo'';} ?>">
														<div class="form-group">
														  <label for="eventInput1">Industry Name</label>
														  <input type="text" class="form-control" name="category" value="<?php if(!empty($industry[0])){ echo $industry[0]->category;}else{ echo'';} ?>" >
														</div>
													</div>
													<div class="col-md-6">
													    <div class="form-group">
															<label for="eventInput1">Meta Title</label>
															<input type="text" class="form-control" name="meta_title" value="<?php if(!empty($industry[0])){ echo $industry[0]->meta_title;}else{ echo'';} ?>">	
														</div>
														
														
														
													</div>
													<div class="col-md-6">
															<div class="form-group">
																<label for="eventInput1">Meta Keyword</label>
																<textarea class="form-control" name="keywords"   rows="4" cols="10"><?php if(!empty($industry[0])){ echo $industry[0]->keywords;}else{ echo'';} ?></textarea>	
															</div>
															
															
														</div>
														<div class="col-md-6">
															
															<div class="form-group">
																<label for="eventInput1">Meta Description</label>
																<textarea class="form-control" name="description"  rows="4" cols="10"><?php if(!empty($industry[0])){ echo $industry[0]->description;}else{ echo'';} ?></textarea>	
															</div>
															</div>
															
														
														<div class="col-md-12">
														    <div class="form-group">
															<button type="submit" class="btn btn-success sb_btn">
																<i class="la la-check-square-o"></i> Save
															</button>
															<a hre="<?php echo base_url().'admin/job/industry-type';?>" class="btn btn-danger backLink" style="color:#fff;">
																<i class="la la-close"></i> Cancel
															</a>
														</div>
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
	</div>	   	
</div>	   	
    <?php include('footer.php') ?>
    <script>
   /* $(document).ready(function(){
        alert();
    });
    function validateLoginForm()
    {
        rules: {
	          category: "required",
	          
    	      
    	    },
    	    submitHandler: function(form) {
			   $( ".form" ).submit();
    	    }
    }*/
        
    
    
    </script>
