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
					<li class="breadcrumb-item"><a href="#">Edit Categories - Industry Type</a>
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
						  <h4 class="card-title" id="basic-layout-form-center">Edit Categories Industry Type</h4>
						 
						</div>
						<div class="card-content collapse show">
							<div class="card-body">
								
								<form class="form">
									<div class="row justify-content-md-center">
										<div class="col-md-12">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
														  <label for="eventInput1">Add Category</label>
														  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="Advertising/Event Management">
														</div>
													
														<div class="form-group">
															<label for="eventInput1">Meta Title</label>
															<textarea class="form-control" rows="5" cols="10"></textarea>	
														</div>
														<div class="form-group forms-radio w-100">
															<label for="eventInput1" class="label-full">Category Type</label>
															<div class="skin skin-flat rad-mr">
																<input type="radio" name="input-radio-4" id="input-radio-15a" checked="">
																<label for="input-radio-15a">IT Company</label>
															</div>
															<div class="skin skin-flat rad-mr">
																<input type="radio" name="input-radio-4" id="input-radio-15b" >
																<label for="input-radio-15b">Non IT Company   </label>
															</div>
														</div>
														
														
														<div class="form-group">
															<button type="submit" class="btn btn-success">
																<i class="la la-check-square-o"></i> Save
															</button>
															<button type="submit" class="btn btn-danger">
																<i class="la la-close"></i> Cancel
															</button>
														</div>
															
													</div>
													
														<div class="col-md-6">
															
															<div class="form-group">
																<label for="eventInput1">Description</label>
																<textarea class="form-control" rows="4" cols="10"></textarea>	
															</div>
															<div class="form-group">
																<label for="eventInput1">Keywords</label>
																<textarea class="form-control" rows="4" cols="10"></textarea>	
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
