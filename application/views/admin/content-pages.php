<?php include('header.php');?>
	<div class="app-content content">
    <div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
				<div class="row breadcrumbs-top d-inline-block pull-left">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
							<li class="breadcrumb-item"><a>Content Pages</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
		    <?php include('inc/message.php'); ?>
			<!-- Zero configuration table -->
			<section id="configuration">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Content Pages
								</h4>
							</div>
							<div class="card-content collapse show">
								<div class="card-body card-dashboard">
									<div class="table-responsive">
										<table class="table table-striped table-bordered zero-configuration">
											<thead>
												<tr>
													<th>Page Title</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											    <tr>
													<td>Home</td>
													<td><a href="edit-content-page" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a></td>
												</tr>
												<tr>
													<td>About us</td>
													<td><a href="edit-about" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a></td>
												</tr>
												<tr>
													<td>Terms and Conditions</td>
													<td><a href="edit-terms" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a></td>
												</tr>
												<tr>
													<td>Privacy Policy</td>
													<td><a href="edit-policy" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a></td>
												</tr>
												<tr>
													<td>Endorsements</td>
													<td><a href="edit-endorsements" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a></td>
												</tr>
												<tr>
													<td>Recommendations</td>
													<td><a href="edit-recommendations" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a></td>
												</tr>
												<tr>
													<td>Lucas group </td>
													<td><a href="edit-lucasgroup" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a></td>
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

 
  
 
  
 <?php include('footer.php') ?>
