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
                <li class="breadcrumb-item"><a href="#">Online training - Categories
</a>
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
                  <h4 class="card-title">Online training - Categories
 <span class="pull-right"><a href="add-training-category.php" class="btn btn-primary post-nw-btn"> Add New Category </a> </span>
				</h4>
                </div>
                <div class="card-content collapse show">
				 <div class="card-body card-dashboard">
					
                    <div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
							<th> 
								S.No
							</th>
							<th> Category Name		</th>
							<th>Questions </th>
							<th>Post Date	</th>
							<th >Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
							1
						  </td>
						 
                         <td>
							<a href="online-training-questions.php">	  Business Analysis</a>
						 </td>
						  <td> 2 </td>
						  <td> 25-03-2014 12:12:04 PM </td>
						 
							<td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
							<a href="edit-training-category.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
                        <tr>
                          <td>
							2
						  </td>
						 
                         <td>
							<a href="online-training-questions.php">Testing </a>
						 </td>
						  <td> 0 </td>
						  <td> 25-03-2014 06:34:47 PM	 </td>
						 
							<td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
							<a href="edit-training-category.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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
