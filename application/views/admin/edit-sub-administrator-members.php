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
					<li class="breadcrumb-item"><a href="#">Sub Administrator Members Registration</a>
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
						  <h4 class="card-title" id="basic-layout-form-center">Sub Administrator Members Registration</h4>
						 
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
														  <label for="eventInput1">User Name  </label>
														  <input type="text" class="form-control" placeholder="User Name" name="fullname" value="priyanka">
														</div>
													</div>
												</div>
												<div class="row">	
													<div class="col-md-6">
														<div class="form-group">
														  <label for="eventInput1">Password   </label>
														  <input type="text" class="form-control" placeholder="Password" name="fullname" value="123456">
														
														</div>
													</div>
												</div>
												<div class="row">	
													<div class="col-md-6">
														<div class="form-group">
															<label for="eventInput1">User Type </label>
															<select class="form-control">
																<option value="1">Select user type</option>  
																<option value="2">Sub Admin</option>     
																<option value="3" selected="selected">Moderate</option>     
															</select>
														</div>
													</div>
												</div>
												<div class="row">	
													<div class="col-md-6">
														<div class="form-group">
															<label for="eventInput1">Role </label>
															<br />
															<label class="checkbox-inline"><input type="checkbox" class="set-it"value="" > Add</label>
															<label class="checkbox-inline"><input type="checkbox" class="set-it"value="" checked> Edit</label>
															<label class="checkbox-inline"><input type="checkbox" class="set-it"value="" > Delete</label>
															<label class="checkbox-inline"><input type="checkbox" class="set-it"value="" checked> View</label>
														</div>
													</div>
												</div>
												<div class="row">	
													<div class="col-md-6">
														<button type="submit" class="btn btn-success">
															<i class="la la-check-square-o"></i> Save
														</button>
														<button type="submit" class="btn btn-danger">
															<i class="la la-close"></i> Cancel
														</button>
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
