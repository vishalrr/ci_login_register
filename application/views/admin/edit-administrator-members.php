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
					<li class="breadcrumb-item"><a href="#">Edit Administrator Members Registration</a>
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
						  <h4 class="card-title" id="basic-layout-form-center">Edit Administrator Members Registration</h4>
						 
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
														  <input type="text" class="form-control" placeholder="User Name" name="fullname" value="admin">
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
