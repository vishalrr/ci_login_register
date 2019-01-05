<?php include('header.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Add Newsletter</h3>
          <div class="row breadcrumbs-top d-inline-block pull-right">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Add Newsletter</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">Add Newsletter</h4>
                 
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
									  <label for="eventInput1">Newsletter Title  </label>
									  <input type="text" class="form-control" placeholder="" name="fullname" value="">
									  
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Newsletter Date  </label>
									 <div class="input-group">
										<div class="input-group-prepend">
										  <span class="input-group-text"><i class="ft-calendar"></i></span>
										</div>
										<input type="text" class="form-control datepicker-default" />
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  <label for="eventInput1">Newsletter Description  </label>
									  <textarea class="form-control" rows="4"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Newsletter Preview  </label>
									  <input type="file" class="form-control" placeholder="" name="fullname" value="">
									  
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Newsletter File (PDF)  </label>
									  <input type="file" class="form-control" placeholder="" name="fullname" value="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class=" skin skin-square">
										<input type="checkbox" id="input-111" >
										<label for="input-111">Newsletter Restriction</label>
									</div>
								</div>
							</div>
							
                          </div>
                        </div>
                      </div>
                      <div class="form-actions left">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Save
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
