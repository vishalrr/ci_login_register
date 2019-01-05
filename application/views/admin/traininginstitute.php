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
                <li class="breadcrumb-item"><a href="traininginstitute.php">Placement Training / Institutes</a>
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
					<h4 class="card-title">
						Placement Training / Institutes 
						<span class="pull-right">
							<a href="add-institutes.php" class="btn btn-primary btn-sm"> Add New </a> 
						</span>
					</h4>
                </div>
                <div class="card-content collapse show">
				
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
					<table class="table table-striped table-bordered file-export">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Institute Name</th>
                          <th>Institute Logo</th>
                          <th>Category</th>
                          <th>Type</th>
                          <th>Contact</th>
                          <th>Website URL</th>
                          <th class="mn-w-250">		Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
							<td>1</td>
							<td>taxmaster </td>
							<td>
								<a href="employer-details.php">
									<img src="app-assets/images/partner_1.jpg" width="70" class="squr-tb-img">
								</a>
							</td>
							<td>Accounting/Taxation</td>
							<td>FREE</td>
						  <td> 0 </td>
                          <td><a href="#"> www.abc.com </a></td>
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						  <a href="edit-institutes.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 
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
