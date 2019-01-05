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
                <li class="breadcrumb-item"><a href="#">Seekers Profile List</a>
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
                  <h4 class="card-title">Seekers Profile List
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
							  <label for="eventInput1">Name</label>
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
							  <label for="eventInput1">KeySkills</label>
								<input type="text" class="form-control" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Location</label>
								<input type="text" class="form-control" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1" class="w-100">Experience</label>
								<select class="form-control">
									<option value="">From Exp</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="5">6</option>
									<option value="5">7</option>
									<option value="5">8</option>
									<option value="5">9</option>
									<option value="5">10+</option>
								</select>
								
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Experience</label>
								<select class="form-control">
									<option value="">To Exp</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="5">6</option>
									<option value="5">7</option>
									<option value="5">8</option>
									<option value="5">9</option>
									<option value="5">10+</option>
								</select>
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Gender</label>
								<select class="form-control">
									<option value="">Select</option>
									<option value="TWlOaFkzVT0=">Male</option>
									<option value="TXlOaFkzVT0=">Female</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">	Functional Area	</label>
								<select  class="form-control">
									<option value="">select</option>
									<option value="175">Accessory Designer</option>
									<option value="339">Accessory Designer</option>
									<option value="340">Accessory Designer</option>
									<option value="99">Accountant</option>
									<option value="73">Accounts Assistant</option>
									<option value="241">Accounts Manager</option>
									<option value="154">Administration</option>
									<option value="316">Air Hostess/Steward/Cabin Crew</option>
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
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Login From date</label>
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
							  <label for="eventInput1">Login To date</label>
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
							  <label for="eventInput1">Register To</label>
							  <div class="input-group">
								<div class="input-group-prepend">
								  <span class="input-group-text"><i class="ft-calendar"></i></span>
								</div>
								<input type="text" class="form-control datepicker-default" />
							  </div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="eventInput1">Resume Attchment</label> <br />
								<input type="checkbox" class="" style="height:auto !important;" /> <label> Has attachment </label>	
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="eventInput1">Photo Attchment</label> <br />
								<input type="checkbox" class="" style="height:auto !important;" /> <label> Has attachment </label>	
							</div>
						</div>
						<div class="col-md-4">
						<div class="form-group">
						  <label for="eventInput1">	Last login before (days)</label>
							<select  class="form-control">
								<option value="" selected="selected">Select days</option>
								<option value="4">30 days</option>
								<option value="1">60 days</option>
								<option value="2">90 days</option>
								<option value="3">180 days</option>
						</select>
						</div>
					</div>
					</div>
					
						
					
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-success btn-sm"> Search Now</button>
							<button class="btn btn-warning btn-sm" > Clear All</button>
						
						</div>
						
					</div>
				</div>
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
					<table class="table table-striped table-bordered file-export">
                      <thead>
                        <tr>
                         
                          <th>	S.No</th>
                          <th>	Photo</th>
                          <th>	Name</th>
                          <th>	Current Location</th>
                          <th>	Register Date</th>
                          <th>	Functional <br>Area	</th>
                          <th>	Last Login	</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
						  <td>1</td>
                         <td>
							<img src="app-assets/images/avatar1.png" width="70" class="table-img" style="cursor: default;">
						 </td>
						  <td><a href="user-details.php"> Raju </a> </td>
						  <td>Ramgarh </td>
						  <td>2017-05-30 </td>
						  <td>	php,ssfd..</td>
						  <td>2018-05-14 13:55:44 </td>
                         
                        </tr>
                       <tr>
                          
						  <td>2</td>
                         <td>
							<img src="app-assets/images/avatar2.png" width="70" class="table-img" style="cursor: default;">
						 </td>
						  <td><a href="user-details.php"> Hanry James </a> </td>
						   <td>California </td>
						  <td>2017-05-30 </td>

						  <td>	php,html,css</td>
						  						  <td>2018-05-14 13:55:44 </td>

                        </tr>
						<tr>
                        
						  <td>3</td>
                         <td>
							<img src="app-assets/images/avatar3.png" width="70" class="table-img" style="cursor: default;">
						 </td>
						  <td><a href="user-details.php"> Denny </a> </td>
						   <td>New York </td>
						  <td>2017-05-30 </td>

						  <td>	angular</td>
						   	<td>2018-05-14 13:55:44 </td>

                        </tr>
						<tr>
                          
						  <td>4</td>
                         <td>
							<img src="app-assets/images/avatar4.png" width="70" class="table-img" style="cursor: default;">
						 </td>
						  <td><a href="user-details.php"> Thomas </a> </td>
						   <td>Alaska </td>
						  <td>2017-05-30 </td>

						  <td>	html,css</td>
						   	<td>2018-05-14 13:55:44 </td>
                        </tr>
						<tr>
                          
						  <td>5</td>
                         <td>
							<img src="app-assets/images/avatar5.png" width="70" class="table-img" style="cursor: default;">
						 </td>
						  <td><a href="user-details.php"> Marry </a> </td>
						   <td>Japan </td>
						  <td>2017-05-30 </td>

						  <td>	wordpress</td>
						   						  <td>2018-05-14 13:55:44 </td>

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
