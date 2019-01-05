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
                <li class="breadcrumb-item"><a href="#">Placement / Training Institute Plan</a>
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
							<h4 class="card-title">Edit Placement / Training Institute Plan
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
										  <label for="eventInput1">Product Name </label>
										  <input type="text" class="form-control" placeholder="Product Name" name="Name" value="Teachers Search">
										
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
										  <label for="eventInput1">Description </label>
										  <input type="text" class="form-control" placeholder="" name="fullname" value="hunt faculty">
										</div>
									</div>
									<div class="col-md-4">
										
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
										  <label for="eventInput1">Duration in days</label>
											<input type="text" class="form-control" placeholder="No. of jobs allowed to Post" value="30" />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
										  <label for="eventInput1">Price </label>
											<input type="text" class="form-control" placeholder="No of email can send per day" value="1000" />
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
