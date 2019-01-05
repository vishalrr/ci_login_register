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
                  <h4 class="card-title">Online test - Users & Results
				</h4>
                </div>
                <div class="card-content collapse show">
				<div class="secrh-sec">
					<h4 class="sb-ttl">
					Search 
				
					</h4>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label for="eventInput1">User Name </label>
							  <input type="text" class="form-control" placeholder="" name="Name" value="">
							
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label for="eventInput1">Category</label>
							 <select class="form-control">
								<option value="">Select Category</option>
								<option value="1">Business Analysis</option>
								<option value="2">testing</option>
							</select>
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label for="eventInput1">Percentage From</label>
								<select class="form-control">
									<option value="" style="text-align:center;" selected="selected">Select Percentsge%</option>
									<option value="10" style="text-align:center;">10%</option>
									<option value="20" style="text-align:center;">20%</option>
									<option value="30" style="text-align:center;">30%</option>
									<option value="40" style="text-align:center;">40%</option>
									<option value="50" style="text-align:center;">50%</option>
									<option value="60" style="text-align:center;">60%</option>
									<option value="70" style="text-align:center;">70%</option>
									<option value="80" style="text-align:center;">80%</option>
									<option value="90" style="text-align:center;">90%</option>
									<option value="100" style="text-align:center;">100%</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label for="eventInput1" class="w-100">Percentage To</label>
								<select class="form-control">
									<option value="" style="text-align:center;" selected="selected">Select Percentsge%</option>
									<option value="10" style="text-align:center;">10%</option>
									<option value="20" style="text-align:center;">20%</option>
									<option value="30" style="text-align:center;">30%</option>
									<option value="40" style="text-align:center;">40%</option>
									<option value="50" style="text-align:center;">50%</option>
									<option value="60" style="text-align:center;">60%</option>
									<option value="70" style="text-align:center;">70%</option>
									<option value="80" style="text-align:center;">80%</option>
									<option value="90" style="text-align:center;">90%</option>
									<option value="100" style="text-align:center;">100%</option>
								</select>
								
							</div>
						</div>
						
						
						
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label for="eventInput1">From Date</label>
							  <div class="input-group">
								<div class="input-group-prepend">
								  <span class="input-group-text"><i class="ft-calendar"></i></span>
								</div>
								<input type="text" class="form-control datepicker-default" />
							  </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label for="eventInput1">To Date</label>
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
							<button class="btn btn-success btn-sm"> Search  </button>
							<button class="btn btn-danger btn-sm" > Cancel</button>
						
						</div>
						
					</div>
				</div>
                  <div class="card-body card-dashboard">
					<h5 class="main-ttl-n"> Online test - Users & Results</h5>
                    <div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th> 
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </th>
                          <th>S.No</th>
                          <th>	User name	</th>
                          <th>	 Test Category		</th>
                          <th>	User Percentage			</th>
                          <th>	User Ip	</th>
                          <th>	Test Date		</th>
                          <th class="m-w-80">		Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </td>
						 
                         <td>
							1
						 </td>
						  <td> <a href="#">
							  Anu93!1
							</a> </td>
						<td>
							<a href="#">Business Analysis  </a>
							
						</td>
						  <td>	20 %</td>
						  <td>192.168.1.24</td>
                          <td>	26-04-2018 09:02:37 PM</td>
                          <td>
						  
							<a href="view-test-result.php" class="btn btn-info btn-table"><i class="la la-eye"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
                        <tr>
                          <td>
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </td>
						 
                         <td>
							2
						 </td>
						  <td> <a href="#">
							  	  Vidhyaa
							</a> </td>
						<td>
							<a href="#">Business Analysis  </a>
							
						</td>
						  <td>	0 %</td>
						  <td>122.164.235.0	</td>
                          <td>	26-03-2018 02:21:49 AM</td>
                          <td>
						  
							<a href="view-test-result.php" class="btn btn-info btn-table"><i class="la la-eye"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
                          <td>
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </td>
						 
                         <td>
							3
						 </td>
						  <td> <a href="#">
							  	    Sefisefi
							</a> </td>
						<td>
							<a href="#">Business Analysis  </a>
							
						</td>
						  <td>	0 %</td>
						  <td>92.75.16.190		</td>
                          <td>	24-03-2018 10:01:39 AM	</td>
                          <td>
						  
							<a href="view-test-result.php" class="btn btn-info btn-table"><i class="la la-eye"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
                          <td>
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </td>
						 
                         <td>
							4
						 </td>
						  <td> <a href="#">
							  	  Anu93!1
							</a> </td>
						<td>
							<a href="#">Business Analysis  </a>
							
						</td>
						  <td>	14 %</td>
						  <td>192.168.1.24	</td>
                          <td>	27-12-2017 09:59:46 AM	</td>
                          <td>
						  
							<a href="view-test-result.php" class="btn btn-info btn-table"><i class="la la-eye"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
                          <td>
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </td>
						 
                         <td>
							2
						 </td>
						  <td> <a href="#">
							  	  Vidhyaa
							</a> </td>
						<td>
							<a href="#">Business Analysis  </a>
							
						</td>
						  <td>	0 %</td>
						  <td>122.164.235.0	</td>
                          <td>	26-03-2018 02:21:49 AM</td>
                          <td>
						  
							<a href="view-test-result.php" class="btn btn-info btn-table"><i class="la la-eye"></i></a>
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
