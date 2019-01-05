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
                <li class="breadcrumb-item"><a href="#">Online test - Questions for "Business Analysis" 
</a>
                </li>
                
              </ol>
            </div>
          </div>
		  <span class="pull-right"> <a href="test-categories.php">All Categories </a> </span>
        </div>
      
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
		 <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form-center">Online test - Questions for "Business Analysis" 
                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                     <h5 class="main-ttl-n"> Add New Question </h5>
                    <form class="form">
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  <label for="eventInput1">Question <sup> * </sup>	</label>
									  <textarea class="form-control" placeholder="" rows="3"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<fieldset>
										<legend> Options </legend>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-with-rad w-100">
													<label for="eventInput1" class="w-100">Option 1 <sup> * </sup>		</label>
													<input type="text" class="form-control">
													<div class="skin skin-flat rad-mr">
													  <input type="radio" name="input-radio-4" id="input-radio-15a">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-with-rad w-100">
													<label for="eventInput1" class="w-100">Option 2 <sup> * </sup>		</label>
													<input type="text" class="form-control">
													<div class="skin skin-flat rad-mr">
													  <input type="radio" name="input-radio-4" id="input-radio-15a">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-with-rad w-100">
													<label for="eventInput1" class="w-100">Option 3 <sup> * </sup>		</label>
													<input type="text" class="form-control">
													<div class="skin skin-flat rad-mr">
													  <input type="radio" name="input-radio-4" id="input-radio-15a">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-with-rad w-100">
													<label for="eventInput1" class="w-100">Option 4 <sup> * </sup>		</label>
													<input type="text" class="form-control">
													<div class="skin skin-flat rad-mr">
													  <input type="radio" name="input-radio-4" id="input-radio-15a">
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</div>
							</div>
							 <div class="form-actions left">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-plus"></i> Add Now
                        </button>
						<button type="submit" class="btn btn-info">
                          <i class="la la-angle-double-right"></i> Add Next
                        </button>
						<button type="submit" class="btn btn-danger">
                          <i class="la la-close"></i> Cancel
                        </button>
					 </div>
                    </form>
					 
					 <h5 class="main-ttl-n m-t-30"> Questions List </h5>
					 <div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th> 
							S.No
						  </th>
						   <th> Question</th>
							<th>	Answers </th>
							<th >Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
							<td>
								1
							</td>
							<td>
									How much is 3 + 4 ??
							</td>
							<td> 	a. 4
								<br>
								<span class="green"> b. 7 </span>
								<br>
								c. 10
								<br> d. 13 
							</td>
							<td>
								<input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
								<a href="edit-question.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
								<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
							</td>
                        </tr>
						<tr>
							<td>
								2
							</td>
							<td>
									excel has use of vlook up
							</td>
							<td> 
								<span class="green"> a. yes </span>
								<br>
								 b. no 
								<br>
								c. mico
								<br> d. left
							</td>
							<td>
								<input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
								<a href="edit-question.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
								<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
							</td>
                        </tr>
						<tr>
							<td>
								3
							</td>
							<td>
									Testing done at what level
							</td>
							<td> 	a. end
								<br>
								 b. middle 
								<br>
							<span class="green"> 	c. beginning </span>
								<br> d. not necessary
							</td>
							<td>
								<input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
								<a href="edit-question.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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


