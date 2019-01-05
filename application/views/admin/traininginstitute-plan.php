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
					<h4 class="card-title">Placement / Training Institute Plan					<span class="pull-right">
							<a href="add-traininginstitute-plan.php" class="btn btn-primary btn-sm">Add New</a> 
						</span>
					</h4>
                </div>
                <div class="card-content collapse show">
				
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
							<th>S.No</th>
							<th>Product name</th>
							<th>Description</th>
							<th>Duration</th>
							<th>Price</th>
							<th style="width:20%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
							<td>1</td>
							<td>FREE</td>
							<td>hunt faculty	</td>
							<td>30</td>
							<td>1000</td>
							<td>
								<a href="edit-traininginstitute-plan.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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
        </section>
      </div>
    </div>
  </div>

  
 
  
 <?php include('footer.php') ?>
