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
                <li class="breadcrumb-item"><a href="#">Employers Profile
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
                  <h4 class="card-title">Employers Profile
				</h4>
                </div>
                <div class="card-content collapse show">
				<div class="secrh-sec">
					<h4 class="sb-ttl">
					Search 
				
					</h4>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Employer name </label>
							  <input type="text" class="form-control" placeholder="" name="Name" value="">
							
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Email Id</label>
							  <input type="text" class="form-control" placeholder="" name="fullname" value="">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Company Name</label>
								<input type="text" class="form-control" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group forms-radio w-100">
							  <label for="eventInput1" class="label-full"><b> Company Type  </b></label>
							  <div class="skin skin-flat rad-mr">
								  <input type="radio" name="input-radio-4" id="input-radio-15a" checked="">
								  <label for="input-radio-15a">Consultant</label>
							  </div>
							  <div class="skin skin-flat rad-mr">
								  <input type="radio" name="input-radio-4" id="input-radio-15b" >
								  <label for="input-radio-15b">Company   </label>
							  </div>
							   <div class="skin skin-flat rad-mr">
								  <input type="radio" name="input-radio-4" id="input-radio-15c" >
								  <label for="input-radio-15c">Both</label>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Login From Date</label>
							  <div class="input-group">
								<div class="input-group-prepend">
								  <span class="input-group-text"><i class="ft-calendar"></i></span>
								</div>
								<input type="text" class="form-control datepicker-default" />
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Login To Date</label>
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
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Register From</label>
							  <div class="input-group">
								<div class="input-group-prepend">
								  <span class="input-group-text"><i class="ft-calendar"></i></span>
								</div>
								<input type="text" class="form-control datepicker-default" />
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Register  To </label>
							  <div class="input-group">
								<div class="input-group-prepend">
								  <span class="input-group-text"><i class="ft-calendar"></i></span>
								</div>
								<input type="text" class="form-control datepicker-default" />
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group forms-check w-100">
							  <label for="eventInput1" class="top-lab"><b> DB Access type  </b> </label>
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11137">
								<label for="input-11137">Resume   </label>
							</div>
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11216">
								<label for="input-11216"> Job post </label>
							</div>
							
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">	Last login before	</label>
								<select class="form-control">
									<option value="">Select Days</option>
									<option value="30">30 Days</option>
									<option value="60">60 Days</option>
									<option value="90">90 Days</option>
									<option value="120">120 Days</option>
									<option value="180">180 Days</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">	Industry Type	</label>
								<select class="form-control">
									<option value="">select</option>
									<option value="18"> Accounting/Taxation </option>
									<option value="19"> Advertising/Event Management </option>
									<option value="20"> Agriculture/Dairy </option>
									<option value="21"> Automobile </option>
									<option value="22"> Banks/Insurance/Financial Services </option>
									<option value="23"> Call Center/BPO </option>
									<option value="24"> Chemicals/ PetroChemical/Plastic/Rubber  </option>
									<option value="25"> Computers/Technology </option>
									<option value="26"> Construction/Facilities </option>
									<option value="27"> Education/Training </option>
									<option value="28"> Engineering </option>
									<option value="29"> Fashion/Garments/Merchandising </option>
									<option value="30"> Health Care/Pharma </option>
									<option value="31"> Hotel/Restaurant </option>
									<option value="32"> Human Resources/Admin/Recruitment </option>
									<option value="33"> Installation &amp; Maintenance </option>
									<option value="34"> Law Enforcement/Security </option>
									<option value="35"> Legal/Law </option>
									<option value="36"> Marketing/Sales </option>
									<option value="37"> Media/Journalism </option>
									<option value="38"> Production/Manufacturing/Maintenance </option>
									<option value="39"> Information Technology/Software </option>
									<option value="40"> Tours and Travel/Airline </option>
									<option value="41"> Transportation/Logistics </option>
									<option value="42"> KPO/Technical Support </option>
									<option value="43"> Other </option>
									<option value="44"> Strategy / Management Consulting Firms </option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Location </label>
							  <input type="text" class="form-control " />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">	Resume Access	</label>
								<select class="form-control">
									<option value="">Select</option>
									<option value="FREE">FREE	</option>
									<option value="JOB POSTING OFFER">	JOB POSTING OFFER	</option>
									<option value="test">	test </option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Job Posting 	</label>
								<select class="form-control">
									<option value="">Select</option>
									<option value="Bronze">	Bronze	</option>
									<option value="JOB POSTING OFFER">	JOB POSTING OFFER	</option>
									<option value="SUPER5">	SUPER5		</option>		
								</select>
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-success btn-sm"> Search </button>
							<button class="btn btn-warning btn-sm" > Clear All</button>
						
						</div>
						
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
							  <th>Logo</th>
							  <th>	Company Name	</th>
							  <th>	Reg Date	</th>
							  <th>	Type	</th>
							  <th>	City</th>
							</tr>
						</thead>
                      <tbody>
                        <tr>
                          <td>
							1
						  </td>
						 
                         <td>
							<a href="employer-details.php">
								<img src="app-assets/images/partner_1.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="employer-details.php"> Company One </a> </td>
						  <td>	15/05/1998</td>
						  <td>Company </td>
						  <td> Arbre </td>
                          
                        </tr>
                       <tr>
                          <td>
							2
						  </td>
						 
                         <td>
							<a href="employer-details.php">
								<img src="app-assets/images/partner_2.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="employer-details.php"> Company Two </a> </td>
						  <td>	19/05/1999</td>
						  <td>Company </td>
						  <td> Porto-novo </td>
                          
                        </tr>
						<tr>
                          <td>
							3
						  </td>
						 
                         <td>
							<a href="employer-details.php">
								<img src="app-assets/images/partner_3.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="employer-details.php"> Company Three </a> </td>
						  <td>	15/05/2005</td>
						  <td>undefined </td>
						  <td> Chittagong Port </td>
                          
                        </tr>
						<tr>
                          <td>
							4
						  </td>
						 
                         <td>
							<a href="employer-details.php">
								<img src="app-assets/images/partner_4.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="employer-details.php"> Company Four </a> </td>
						  <td>	15/05/2002</td>
						  <td>Company</td>
						  <td>Wavre</td>
                          
                        </tr>
						<tr>
                          <td>
							5
						  </td>
						 
                         <td>
							<a href="employer-details.php">
								<img src="app-assets/images/partner_1.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="employer-details.php"> Company One </a> </td>
						  <td>	15/05/1998</td>
						  <td>Company </td>
						  <td> Meerut </td>
                          
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
