<?php include('header.php');?>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">My Account</h3>
          <div class="row breadcrumbs-top d-inline-block pull-right">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <!--li class="breadcrumb-item"><a href="index.php">Home</a>
                </li-->
               
                
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
                  <h4 class="card-title" id="basic-layout-form-center">FAQ</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <?php include('inc/message.php'); ?>
                     <form class="form" action="" method="POST" id="myaccount" >
						<div class="row justify-content-md-center">
							<div class="col-md-12">
								<div class="form-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="eventInput1">Question</label>
												<input type="text" class="form-control" placeholder="Title " name="question" value="">
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