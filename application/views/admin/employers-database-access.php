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
                <li class="breadcrumb-item"><a href="#">Employers Database Access
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
                  <h4 class="card-title">Employers Database Access
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
                          <th>User Name</th>
                          <th>	Start date	</th>
                          <th>	Expire Date	</th>
                          <th>	Access	</th>
                          <th>	Action	</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
							1
						  </td>
						 
                         <td>
							<a href="user-details.php">
								john Smith
							</a>
						 </td>
						  <td>16-May-2018</td>
						  <td>26-May-2018 </td>
						  <td>	test</td>
						 <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Disapproved" data-on-text="Approved" checked="false" />
						   <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
                          <td>
							2
						  </td>
						 
                         <td>
							<a href="user-details.php">
								Hanry James
							</a>
						 </td>
						  <td>13-May-2018</td>
						  <td>21-May-2018 </td>
						  <td>	Demo text</td>
						 <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Disapproved" data-on-text="Approved" checked="false" />
						    <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
                          <td>
							3
						  </td>
						 
                         <td>
							<a href="user-details.php">
								Denny Thomson
							</a>
						 </td>
						  <td>03-May-2018</td>
						  <td>30-May-2018 </td>
						  <td>	Lorem Ipsum</td>
						 <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Disapproved" data-on-text="Approved" checked="false" />
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
