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
                <li class="breadcrumb-item"><a href="#">Online test - Categories
</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">Online test - Categories</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <h5 class="main-ttl-n"> Edit New Category </h5>
                    <form class="form">
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Category Name <sup> * </sup>	</label>
									  <input type="text" class="form-control" placeholder="" name="fullname" value="">
									 
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Test time<sup> * </sup>		</label>
										<select class="form-control">
											<option value="">Select test time</option>
											<option value="900">15 Mins</option>
											<option value="1800">30 Mins</option>
											<option value="3600">1 Hour</option>
											<option value="5400">1.30 Hours</option>
											<option value="7200">2.00 Hours</option>
											<option value="9000">2.30 Hours</option>
										</select>
									</div>
								</div>
							</div>
							 <div class="form-actions left">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-save"></i> Save Now
                        </button>
						<button type="submit" class="btn btn-danger">
                          <i class="la la-close"></i> Cancel
                        </button>
					 </div>
                    </form>
				</div>
						<h5 class="main-ttl-n m-t-30"> Category List </h5>
							<div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th> 
							S.No
						  </th>
						   <th> Category Name		</th>
							<th>Questions </th>
							<th>Test Time (hh:mm)</th>
							<th>Test Attend</th>
                           <th >Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
							1
						  </td>
						 
                         <td>
							<a href="all-questions.php">Business Analysis </a>
						 </td>
						  <td> 5 </td>
						  <td> 0 : 15 </td>
						  <td> 19 </td>
							<td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
							<a href="edit-category.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
                        <tr>
                          <td>
							2
						  </td>
						 
                         <td>
							<a href="all-questions.php">Testing </a>
						 </td>
						  <td> 0 </td>
						  <td> 0 : 15 </td>
						  <td> 1 </td>
							<td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
							<a href="edit-category.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
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
              </div>
            </div>
          </div>
       </div>
	     </div>	  	 </div>	   	
    <?php include('footer.php') ?>


