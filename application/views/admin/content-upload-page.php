<?php include('header.php');?>
	<div class="app-content content">
    <div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
				<div class="row breadcrumbs-top d-inline-block pull-left">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Content Upload Page</a></li>
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
								<h4 class="card-title">Content Upload Page
									<span class="pull-right"><a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-upload"> Add New </a> </span>
								</h4>
							</div>
							<div class="card-content collapse show">
								<div class="card-body card-dashboard">
									<div class="table-responsive">
										<table class="table table-striped table-bordered zero-configuration">
											<thead>
												<tr>
													<th>Page Title</th>
													<th>Details</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Footer 1:</td>
													<td>Download PDF for registration process</td>
													<td>
														<a href="edit-content-page.php" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-title"><i class="la la-eye"></i></a>
														<a href="javascript:void(0)" class="btn btn-success btn-table"><i class="la la-download"></i></a>
													</td>
												</tr>
												<tr>
													<td>Footer 2:</td>
													<td>Download PDF for job post process</td>
													<td>
														<a href="edit-content-page.php" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-title"><i class="la la-eye"></i></a>
														<a href="javascript:void(0)" class="btn btn-success btn-table"><i class="la la-download"></i></a>
													</td>
												</tr>
												<tr>
													<td>Footer 3:</td>
													<td>Download PDF for resume access process</td>
													<td>
														<a href="edit-content-page.php" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-title"><i class="la la-eye"></i></a>
														<a href="javascript:void(0)" class="btn btn-success btn-table"><i class="la la-download"></i></a>
													</td>
												</tr>
												
											</tbody>
										</table>
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

  
  
  <div class="modal fade" id="add-upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page Title</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
				<div class="form-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							  <label for="eventInput1">Add Page Title  </label>
							  <input type="text" class="form-control" placeholder="Add Page Title" name="fullname" value="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group forms-radio">
							  <label for="eventInput1" class="label-full">Upload Pdf    </label>
							  <div class="skin skin-flat">
								  <input type="file" name="input-radio-4" id="input-radio-15">
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
  
  
	<div class="modal fade" id="edit-title" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Page Title</h4>
		  </div>
		  <div class="modal-body">
			<form class="form">
				<div class="row justify-content-md-center">
					<div class="col-md-12">
						<div class="form-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  <label for="eventInput1">Page Title  </label>
									  <input type="text" class="form-control" placeholder="Add Page Title" name="fullname" value="Footer 1:	">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group forms-radio">
									  <label for="eventInput1" class="label-full">Upload Pdf    </label>
									  <div class="skin skin-flat">
										  <input type="file" name="input-radio-4" id="input-radio-15" value="abc">
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
  
  
  
 
  
 
  
 <?php include('footer.php') ?>
