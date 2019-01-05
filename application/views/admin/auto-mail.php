<?php include('header.php');?>
<div class="app-content content">
    <div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
				<div class="row breadcrumbs-top d-inline-block pull-left">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Email content editor</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
        <!-- Zero configuration table -->
			<section id="configuration">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Email content editor</h4>
							</div>
							<div class="card-content collapse show">
								<div class="card-body card-dashboard">
								
									<table class="table table-striped table-bordered zero-configuration">
										<thead>
											<tr>
												<th>Subject	</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Seeker Registration Mail contents</td>
												<td><a href="edit-auto-mail.php" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a></td>
											</tr>
											<tr>
												<td>Employer Registration Mail contents	</td>
												<td>
													<a href="edit-auto-mail.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
												</td>
											</tr>
											<tr>
												<td>Job Posting	</td>
												<td>
													<a href="edit-auto-mail.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
												</td>
											</tr>
											<tr>
												<td>Job Application	</td>
												<td>
													<a href="edit-auto-mail.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
												</td>
											</tr>
										</tbody>
									 
									</table>
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
        <h4 class="modal-title" id="myModalLabel">Add Business Category</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Category Name   </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="">
						</div>
					</div>
					<div class="col-md-12">
						
						 
						 <div class=" skin skin-square">
								<input type="checkbox" id="input-111">
								<label for="input-111">Active</label>
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
        <h4 class="modal-title" id="myModalLabel">Edit Business Category</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Category Name   </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="Appliances & Appliance Service">
						</div>
					</div>
					<div class="col-md-12">
						
						 
						 <div class=" skin skin-square">
								<input type="checkbox" id="input-111" checked="">
								<label for="input-111">Active</label>
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
  
 <?php include('footer.php') ?>
