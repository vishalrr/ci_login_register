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
                <li class="breadcrumb-item"><a href="#">Online test - Users & Results
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
                  <h4 class="card-title">Test summary
				    <span class="pull-right"><a href="test-users.php" class="btn btn-primary btn-sm"> View - All test results </a> </span>
				</h4>
                </div>
                <div class="card-content collapse show">
				 <div class="card-body card-dashboard">
					<div class="row">
						<div class="col-md-8">
							<div class="table-responsive">
								<table class="table tble-l-brdr">
								  <tbody>
									<tr>
									  <td>Candidate Name	:</td>
									  <td class="text-right">Anupriya</td>
									</tr>
									<tr>
									  <td>Candidate Mail id	:</td>
									  <td class="text-right">anupriya.inet@gmail.com
</td>
									</tr>
									<tr>
									  <td>Category Name :</td>
									  <td class="text-right"> Business Analysis
</td>
									</tr>
									<tr>
									  <td>Test Mark	:</td>
									  <td class="text-right">2 / 10
</td>
									</tr>
									<tr>
									  <td>Test Percentage	:</td>
									  <td class="text-right">20%</td>
									</tr>
									<tr>
									  <td>Test Grade	:</td>
									  <td class="text-right">F</td>
									</tr>
									<tr>
									  <td>Test Time		:</td>
									  <td class="text-right">0 : 0 : 22	(hh:mm:ss)</td>
									</tr>
									<tr>
									  <td>No. Test Attend		:</td>
									  <td class="text-right">9</td>
									</tr>
									<tr>
									  <td>User Ip	:</td>
									  <td class="text-right">192.168.1.24</td>
									</tr>
								  </tbody>
								</table>
							</div>
							<div class="text-center w-100">
								<a href="javascript:void(0)" class="text-center btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">Delete </a>
								<a href="send-email.php" class="text-center btn btn-info btn-sm">Email </a>
								<a href="test-users.php" class="text-center btn btn-warning btn-sm">Back </a>
							</div>
						</div>
						
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
