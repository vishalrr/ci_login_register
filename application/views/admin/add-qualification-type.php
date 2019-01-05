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
					<li class="breadcrumb-item"><a><?php if(!empty($industry[0])){ echo 'Edit Qualification'; }else{ echo 'Add Qualification'; } ?></a>
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
						  <h4 class="card-title" id="basic-layout-form-center"><?php if(!empty($industry[0])){ echo 'Edit Qualification'; }else{ echo 'Add Qualification'; } ?></h4>
						 
						</div>
						<div class="card-content collapse show">
							<div class="card-body">

								<form class="form" id="addqualification" action="<?php echo base_url(); ?>admin/job/custom?do=add&&tbl=qualification&&redirect=job/Qualification_type&&error=job/add-qualification-type&&name=Qualification Name&&message=Qualification" method="post">
									<div class="row justify-content-md-center">
										<div class="col-md-12">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
													    <input type="hidden" name="id" value="<?php if(!empty($industry[0])){ echo $industry[0]->id;}else{ echo'';} ?>">
														<div class="form-group">
														  <label for="eventInput1">Qualification Name</label>
														  <input type="text" class="form-control" name="qualification" value="<?php if(!empty($industry[0])){ echo $industry[0]->qualification;}else{ echo'';} ?>" >
														</div>
														</div>
														<div class="col-md-6">
													
														<div class="form-group">
															<label for="eventInput1">Meta Title</label>
															<input type="text" class="form-control" name="meta_title"  value="<?php if(!empty($industry[0])){ echo $industry[0]->meta_title;}else{ echo'';} ?>">	
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
															<a href="<?php echo base_url().'admin/job/Qualification-type';?>" class="btn btn-danger backLink">
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
