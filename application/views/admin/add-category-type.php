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
					<li class="breadcrumb-item"><a href="#"><?php if(!empty($industry[0])){ echo 'Edit Category'; }else{ echo 'Add Category'; } ?></a>
					</li>
					
				  </ol>
				</div>
			  </div>
			</div>
		</div>
		<div class="content-body">
			<!-- Basic form layout section start -->
			  <?php include('inc/message.php'); ?>
			<div class="row match-height">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
						  <h4 class="card-title" id="basic-layout-form-center"><?php if(!empty($industry[0])){ echo 'Edit Category'; }else{ echo 'Add Category'; } ?> </h4>
						 
						</div>
						<div class="card-content collapse show">
							<div class="card-body">
							
								<form class="form" id="category" action="<?php echo base_url(); ?>admin/job/custom?do=add&&tbl=categorys&&redirect=job/Category_type&&error=job/add_category_type&&name=Category Name&&message=Category" method="post">
									<div class="row justify-content-md-center">
										<div class="col-md-12">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
													    <input type="hidden" name="id" value="<?php if(!empty($industry[0])){ echo $industry[0]->id;}else{ echo'';} ?>">
														<div class="form-group">
														  <label for="eventInput1">Category Name</label>
														  <input type="text" class="form-control" name="category_name" value="<?php if(!empty($industry[0])){ echo $industry[0]->category_name;}else{ echo'';} ?>" >
														</div>
														</div>
														
														
													
														
															
														<div class="col-md-12">
														
														
														<div class="form-group">
															<button type="submit" class="btn btn-success sb_btn">
																<i class="la la-check-square-o"></i> Save
															</button>
															<a href="<?php echo base_url().'admin/job/Category-type';?>" class="btn btn-danger backLink">
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
