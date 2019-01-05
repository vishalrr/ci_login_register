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
                <li class="breadcrumb-item"><a href="#">Manage Placement Papers
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
                  <h4 class="card-title">Manage Placement Papers 
				</h4>
                </div>
                <div class="card-content collapse show">
					<div class="secrh-sec">
					<h4 class="sb-ttl">
					Search 
				
					</h4>
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
							  <label for="eventInput1">Company Name </label>
							  <select class="form-control">
									<option value="1"> Select</option>
					  					  <option value="2"> Accenture</option>
					  					  <option value="4"> Adobe</option>
					  					  <option value="11"> AIG</option>
					  					  <option value="5"> Allahabad</option>
					  					  <option value="6"> Aspire</option>
					  					  <option value="7"> Aztec</option>
					  					  <option value="8"> Bajaj</option>
								</select>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
							  <label for="eventInput1" class="w-100">Categories</label>
								<select class="form-control">
									<option value=""> Select </option>
									<option value="1">Programming </option>
									 <option value="2">General </option>
									 <option value="3">Banking </option>
									 <option value="4">Aptitude </option>
									 <option value="5">GD </option>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<button class="btn btn-success srch-hrjnt"> Search Now </button>
						</div>
					</div>
					<div class="row">
						
						
					</div>
				</div>
				
				 <div class="card-body card-dashboard">
					
                    <div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th> 
							S.No
						  </th>
						   <th>	Company Name	</th>
							<th>Company Type	</th>
							<th>Category	</th>
							<th>Title	</th>
                           <th class="m-w-80">	Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
							1
						  </td>
						 
                         <td>
							 GrowIndia
						 </td>
						  <td> IT </td>
						  <td> Programming </td>
						  <td>   Accenture Placement Papers October 2010 and Candidate Experience </td>
							<td>
						   
							<a href="edit-placement-paper.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
                         <tr>
                          <td>
							2
						  </td>
						 
                         <td>
							  3I Infotech	
						 </td>
						  <td> IT </td>
						  <td> Programming </td>
						  <td>     Whole Testpaper HYDERABAD - 16 September 2007	</td>
							<td>
						   
							<a href="edit-placement-paper.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						 <tr>
                          <td>
							3
						  </td>
						 
                         <td>
							 Adobe
						 </td>
						  <td> IT </td>
						  <td> Programming </td>
						  <td>      Adobe Whole Testpaper		</td>
							<td>
						   
							<a href="edit-placement-paper.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						 <tr>
                          <td>
							4
						  </td>
						 
                         <td>
							  Allahabad
						 </td>
						  <td> NON-IT	 </td>
						  <td> General </td>
						  <td>      Allahabad Bank Placement Papers and Exam Sample Paper 2008	</td>
							<td>
						   
							<a href="edit-placement-paper.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						 <tr>
                          <td>
							5
						  </td>
						 
                         <td>
							 Aspire
						 </td>
						  <td> IT </td>
						  <td> Programming </td>
						  <td>      Aspire Test Paper	</td>
							<td>
						   
							<a href="edit-placement-paper.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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
