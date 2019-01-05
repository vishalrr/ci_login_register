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
                <li class="breadcrumb-item"><a href="#">Edit Placement Papers	</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">Edit Placement Papers</h4>
                 
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
									  <label for="eventInput1">Company Name   </label>
									  <input type="text" class="form-control" placeholder="Subject" name="fullname" value="Accenture">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Company Type	</label>
										<select class="form-control">
											<option value=""> Select  </option>
											<option value="175" selected="'>IT Company</option>
											<option value="339">Non-IT Company</option>
											
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Categories 	</label>
										<select class="form-control">
											<option value=""> Select  </option>
											<option value="175">General</option>
											<option value="339" selected="">Banking</option>
											<option value="339">GD</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Title   </label>
									  <input type="text" class="form-control" placeholder="Subject" name="fullname" value="Accenture Placement Papers October 2010 and Candidate Experience">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  <label for="eventInput1">Placement Question   </label>
									  
										<textarea class="content-text" name="example"></textarea>

									</div>
								</div>
								
							</div>
							
                          </div>
                        </div>
                      </div>
                      <div class="form-actions left">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Add Now
                        </button>
						
					 </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
	     </div>	  	 </div>	   	
    <?php include('footer.php') ?>
