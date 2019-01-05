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
                <li class="breadcrumb-item"><a href="#">Job Postings</a>
                </li>
                
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
							<h4 class="card-title">Edit Job Postings
								<!--span class="pull-right">
									<a href="add-database-access.php" class="btn btn-primary btn-sm">Add New</a> 
								</span-->
							</h4>
						</div>
						<div class="card-content collapse show">
							<div class="secrh-sec">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
										  <label for="eventInput1">Product Name</label>
										  <input type="text" class="form-control" placeholder="Product Name" name="Name" value="Bronze">
										
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
										  <label for="eventInput1">No of Days recruiter allowed to post job</label>
										  <input type="text" class="form-control" placeholder="Days recruiter allowed to post job" name="fullname" value="365">
										</div>
									</div>
									<div class="col-md-4">
										
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
										  <label for="eventInput1">No. of jobs allowed to Post</label>
											<input type="text" class="form-control" placeholder="No. of jobs allowed to Post" value="500" />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
										  <label for="eventInput1">Price </label>
											<input type="text" class="form-control" placeholder="No of email can send per day" value="1500" />
										</div>
									</div>
									
								</div>
								
								
								<div class="row">
									<div class="col-md-12">
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
				</div>
			</div>
        </section>
      </div>
    </div>
  </div>

  
 
  
 <?php include('footer.php') ?>
