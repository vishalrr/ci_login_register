<?php include('header.php');?>
<style>
.datetimepicker .datetimepicker-hours fieldset legend, .datetimepicker .datetimepicker-minutes fieldset legend {    margin-bottom: 0px !important; }
.datetimepicker td, .datetimepicker th {    width: 30px !important;
    height: 30px !important;     line-height: 30px !important;}
.datetimepicker {
	background: #b93252;
    color: #fff !important;
    padding: 10px !important;
	    font-family: Quicksand,Georgia,'Times New Roman',Times,serif;     min-width: 260px;
}
.datetimepicker table { width:100%; float:left; }
.datetimepicker legend {color:#fff !important; }
.datetimepicker table tr td span:hover, .datetimepicker table tr td.day:hover, .datetimepicker thead tr:first-child th:hover, .datetimepicker tfoot tr:first-child th:hover {
    background: #eeeeee;
    color: #b93251  !important;
    font-weight: 500 !important;
}
.datetimepicker-dropdown-bottom-right:before {
	    border-bottom: 7px solid #b93251;
    border-bottom-color: rgb(185, 50, 81) ;
}
[class*=" datetimepicker-dropdown"]:after {    border-bottom: 6px solid #b93251 !important;}
</style> 

 <div class="app-content content">
    <div class="content-wrapper">
     <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
  
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard';?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a>Employers Posted Jobs List
</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
          <?php include('inc/message.php'); ?>
          <div class="alert alert-success success" style="display:none;">
			  <strong>Success !</strong> Company logo Upload Successfully 
			</div>
			<div class="alert alert-danger danger" style="display:none;">
			  <strong>Error !</strong> Error To upload Company logo
			</div>
			
			<div class="alert alert-success success11" style="display:none;">
			  <strong>Success !</strong> Job Status Updated Successfully
			</div>
			<div class="alert alert-danger danger11" style="display:none;">
			  <strong>Error !</strong> Enabel to Update Status
			</div>
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Employers Posted Jobs List
				</h4>
                </div>
                <div class="card-content collapse show">
				<!--div class="secrh-sec">
					<h4 class="sb-ttl">
					Search 
				
					</h4>
					<div class="row">c
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">KeySkills </label>
							  <input type="text" class="form-control" placeholder="" name="Name" value="">
							
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">Location</label>
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
							  <label for="eventInput1" class="w-100">Experience</label>
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
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">	Functional Area	</label>
								<select class="form-control">
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
						
						
					</div>
					<div class="row">
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
							  <label for="eventInput1">From Date</label>
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
							<button class="btn btn-success btn-sm"> Search Now </button>
							<button class="btn btn-warning btn-sm" > Clear All</button>
						
						</div>
						
					</div>
				</div-->
                  <div class="card-body card-dashboard">
					<!--h5 class="main-ttl-n"> Manage Registered employer jobs </h5-->
                    <div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                         
                          <th>Job Title</th>
                          <th>	Company Name	</th>
                          <!--th>	Time Sheet	</th-->
                          <th>	Post Date		</th>
                          <th>	Keywords</th>
                          <th>	Response	</th>
                          <th> Featured </th>
                          <th class="mn-w-250">		Action</th>
                         </tr>
                      </thead>
                      <tbody>
                          <?php 
                          $count=1; foreach($jobs as $job) { 
                          
                          
                            if(!empty($this->db->get_where('employers',array('empid'=>$job->employer_id))->row()->id))
                            {
                          ?>
                        <tr id="<?php echo $job->id; ?>">
                          
						 
                         <td><?php if(!empty($job->title)){ ?>
							<a href="<?php echo base_url(); ?>admin/employer/job-details?id=<?php echo $job->jobid; ?>">
						  <?php echo $job->title; ?>
							</a>
							<?php } ?>
						 </td>
						  <td> <?php if(!empty($job->employer_id)){ $comp_name = $this->db->get_where('corporations',array('corpid'=>$job->corpid))->row()->name; if(!empty($comp_name)){ echo $comp_name; } } ?> </td>
						<!--td>
							<a href="#" class="datepicker-default"> <i class="la la-download"></i>  </a>
							
							<label for="date-edt" class="date-edt">
								<span> <i class="la la-edit"></i>  </span>
								<input type="text" class="date form_datetime" id="date-edt"/>
							</label>
							
						</td-->
						  <td>	<?php $timestamp = strtotime($job->created_at); echo $date = date('d/m/Y h:i:s', $timestamp); ?></td>
						  <td> 
						  <?php  if(!empty($job->skills)) { echo $job->skills;  }else{ echo '---'; } ?>
						  </td> 
                          <td>
                           
                              <?php if(!empty($this->db->get_where('applied',array('job_id'=>$job->jobid,'status!='=>'3'))->num_rows())){?> 
                              
                              <a href="<?php echo base_url("admin/employer/response?id=".$job->jobid); ?>">
                                  
                                  <?php echo $this->db->get_where('applied',array('job_id'=>$job->jobid,'status!='=>'3'))->num_rows(); ?></a><?php }else{ echo '0'; } ?></td>
                          <td><input type="checkbox" class="featured" id="input-12" action="<?php echo base_url();?>admin/Employer/updatefeature" data-id="<?php echo $job->id; ?>" data-tbl="jobs"  name="featured" value="<?php echo $job->featured; ?>" data-featured="<?php echo $job->featured; ?>"   <?= ($job->featured=='1') ? 'checked' : ''; ?>></td>
                          <td>
                            
						   <input type="checkbox" action="<?php echo base_url();?>admin/Employer/approvedjobupdate" class="switchBootstrap swtch" data-id="<?php echo $job->id; ?>" data-tbl="jobs"  data-off-text="Unapproved" data-on-text="Approved" <?= ($job->approved=='1') ? 'checked' : ''; ?> />
						     <!--a href="#" class="btn btn-info btn-table"><i class="la la-refresh"></i></a-->
							<a href="<?php echo base_url();?>admin/employer/edit-posted-jobs?id=<?php echo $job->id; ?>" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						  <a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $job->id; ?>" data-tbl="jobs" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>

						  </td>
                        </tr>
                        <?php } } ?>
                        <!--tr>
                          <td>
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </td>
						 
                         <td>
							<a href="job-details.php">
							Web developer
							</a>
						 </td>
						  <td> Company Two  </td>
						<td>
							<a href="#"> <i class="la la-download"></i>  </a>
							<label for="date-edt6" class="date-edt">
								<span> <i class="la la-edit"></i>  </span>
								<input type="text" class="date form_datetime" id="date-edt6"/>
							</label>
						</td>
						  <td>	2018-03-23, 10:11:52</td>
						  <td>php,programmer</td>
                          <td><a href="response.php"> 2 </a></td>
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						     <a href="#" class="btn btn-info btn-table"><i class="la la-refresh"></i></a>
							<a href="edit-posted-jobs" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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
							<a href="job-details.php">
							Web Designer
							</a>
						 </td>
						  <td> Company Three  </td>
						<td>
							<a href="#"> <i class="la la-download"></i>  </a>
							<label for="date-edt1" class="date-edt">
								<span> <i class="la la-edit"></i>  </span>
								<input type="text" class="date form_datetime" id="date-edt1"/>
							</label>
						</td>
						  <td>	2018-04-12, 00:11:52</td>
						  <td>web developer </td>
                          <td><a href="response.php"> 4 </a></td>
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						     <a href="#" class="btn btn-info btn-table"><i class="la la-refresh"></i></a>
							<a href="edit-posted-jobs" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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
							<a href="job-details.php">
							Wordpress Developer
							</a>
						 </td>
						  <td> Company Four  </td>
						<td>
							<a href="#"> <i class="la la-download"></i>  </a>
							<label for="date-edt2" class="date-edt">
								<span> <i class="la la-edit"></i>  </span>
								<input type="text" class="date form_datetime" id="date-edt2"/>
							</label>
						</td>
						  <td>	2018-04-21, 00:11:52</td>
						  <td>wordpress</td>
                          <td><a href="response.php"> 1 </a></td>
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						     <a href="#" class="btn btn-info btn-table"><i class="la la-refresh"></i></a>
							<a href="edit-posted-jobs" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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
							<a href="job-details.php">
							marketing mgr
							</a>
						 </td>
						  <td> Company Five  </td>
						<td>
							<a href="#"> <i class="la la-download"></i>  </a>
							<label for="date-edt3" class="date-edt">
								<span> <i class="la la-edit"></i>  </span>
								<input type="text" class="date form_datetime" id="date-edt3"/>
							</label>
						</td>
						  <td>	2018-04-27, 00:11:52</td>
						  <td>sales,</td>
                          <td><a href="response.php"> 0 </a></td>
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						     <a href="#" class="btn btn-info btn-table"><i class="la la-refresh"></i></a>
							<a href="edit-posted-jobs" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr-->
						
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
