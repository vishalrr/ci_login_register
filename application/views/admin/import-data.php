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
                <li class="breadcrumb-item"><a href="#">Import Data From Excel</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">Import Data From Excel</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="row">
						<div class="col-md-12">
							<p class="pull-right">Field marked with as asterisk (*) are mandatory</p>
						</div>
					</div>
                    <form class="form">
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  <label for="eventInput1">Browse For CSV File   </label>
									  <input type="file" class="form-control" placeholder="" name="fullname" value="">
									 
									</div>
								</div>
								
							</div>
							</div>
                        </div>
                      </div>
                      <div class="form-actions left">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Update
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
