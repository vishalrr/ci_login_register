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
                <li class="breadcrumb-item"><a href="#">Online test - Users & Results	</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">Online test - Users & Results</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    
                    <form class="form">
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
							<div class="row">
								
								<div class="col-md-12">
									<div class="form-group">
									  <label for="eventInput1">Subject  </label>
									  <input type="text" class="form-control" placeholder="Subject" name="fullname" value="">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  <label for="eventInput1">Message   </label>
									  
										<textarea class="content-text" name="example"></textarea>

									</div>
								</div>
								
							</div>
							
                          </div>
                        </div>
                      </div>
                      <div class="form-actions left">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Send Now
                        </button>
						<button type="submit" class="btn btn-danger">
                          <i class="la la-close"></i> Cancel
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
