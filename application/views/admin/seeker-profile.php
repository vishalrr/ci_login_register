<?php include('header.php');?>

  <div class="app-content content">
    <div class="content-wrapper">
     <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
                   <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard';?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a>Seeker's Profile List
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
			  <strong>Success !</strong> You have succesfully deleted this Seeker
			</div>
			<div class="alert alert-danger danger" style="display:none;">
			  <strong>Error !</strong> Enabel to delete
			</div>
			<div class="alert alert-success success1" style="display:none;">
			  <strong>Success !</strong> Status Updated Successfully
			</div>
				<div class="alert alert-success success11" style="display:none;">
			  <strong>Success !</strong> Status Updated Successfully
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
                  <h4 class="card-title">Seeker's Profile List
				</h4>
                </div>
                <div class="card-content collapse show">
				<!--div class="secrh-sec">
					<!--h4 class="sb-ttl">
					Search 
				
					</h4-->
					<!--div class="row">
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
					</div-->
					<!--div class="row">
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
						
					</div-->
					<!--div class="row">
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
					</div-->
					<!--div class="row">
						<div class="col-md-4">
							<div class="form-group">
							  <label for="eventInput1">From date</label>
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
							  <label for="eventInput1">To date</label>
							  <div class="input-group">
								<div class="input-group-prepend">
								  <span class="input-group-text"><i class="ft-calendar"></i></span>
								</div>
								<input type="text" class="form-control datepicker-default" />
							  </div>
							</div>
						</div>
					</div-->
					
					
					<!--div class="row">
						<div class="col-md-12">
							<button class="btn btn-success btn-sm"> Search Now</button>
							<button class="btn btn-warning btn-sm" > Clear All</button>
						
						</div>
						
					</div-->
				</div-->
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
				<!-- table class -->	<table class=" table-striped table-bordered file-export tbl11">
                      <thead>
                        <tr>
                          
                          <th>	S.No</th>
                          <th>	Photo</th>
                          <th>	Name</th>
                          <th>	Email</th>
                          <th>	Mobile</th>
                          <th>	Salary</th>
                          <!--th>	Skill</th>
                          <th>	Functional <br>Area	</th-->
                         
                          <th class="mn-w-250">		Action</th>
                         </tr>
                      </thead>
                      <tbody>
                          <?php $count = 1; foreach($seekers as $seeker){ ?>
                        <tr id="<?php echo $seeker->id; ?>">
                          
						  <td><?php echo $count++; ?></td>
                         <td>
                             <?php if(!empty($seeker->profile_pic)){ ?>
							<img src="<?php echo base_url(); ?>/<?php echo $seeker->profile_pic; ?>" width="70" class="table-img" style="cursor: default;">
							<?php }else{ ?>
							<img src="<?php echo base_url(); ?>assets/admin/app-assets/images/dummy_image1.jpg" width="70" class="table-img" style="cursor: default;">
							<?php } ?>
							
						 </td>
						  <td><a href="<?php echo base_url();?>admin/candidate/user-details?id=<?php echo $seeker->id; ?>"> <?php echo $seeker->first_name." ".$seeker->last_name; ?></a> </td>
						  <!--td>Ramgarh </td-->
						  <td> <?php echo $seeker->email; ?></td>
						  <td> <?php echo $seeker->phone; ?></td>
						  <td> <?php echo $seeker->current_salary; ?></td>
						  <!--td><?php  if(!empty($seeker->skills) && $seeker->skills!= 'null'){ $dd= explode(',',$seeker->skills); 
						      $skil = array();
						      foreach($dd as $d)
						      {
						         $skil[]=  $this->db->get_where('skills',array('id'=>$d))->row()->skill;
						      }
						    if(!empty($skil)){ echo implode(',',$skil); }else{ echo '---'; }
						  }else{ echo '---'; } ?></td-->
                         
                          <td>
                              
                              
                              
                             <input type="checkbox" class="switchBootstrap swtch" action="<?php echo base_url();?>admin/Employer/statusupdate" data-id="<?php echo $seeker->id; ?>" data-tbl="candidates"  data-off-text="Inactive" data-on-text="Active" <?= ($seeker->status=='1') ? 'checked' : ''; ?> />
						  
						     <!--a href="<?php echo base_url(); ?>admin/candidate/user-details?id=<?php echo $seeker->id; ?>" class="btn btn-info btn-table"><i class="la la-eye"></i></a-->
						  <a href="<?php echo base_url(); ?>admin/candidate/edituser-profile?id=<?php echo $seeker->id; ?>" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
					
						    <a href="javascript:void(0);" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $seeker->id; ?>" data-tbl="candidates" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
                        <?php } ?>
						
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
 <script>
     $(document).ready(function(){
       
 var table = $('#DataTables_Table_0').DataTable();
table.destroy();
 

  /*  $('#DataTables_Table_0').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            
            {
                extend: 'csvHtml5',
                title: "Seeker's Profile List",
                exportOptions: {
                    columns: [ 0,2,3,4,5 ]
                }
            },
            {
                extend: 'excelHtml5',
                title: "Seeker's Profile List",
                exportOptions: {
                    columns: [ 0,2,3,4,5 ]
                }
            },
            {
                extend: 'pdfHtml5',
                title: "Seeker's Profile List",
                exportOptions: {
                    columns: [ 0,2,3,4,5 ]
                }
            },
             {
                extend: 'print',
                title: "Seeker's Profile List",
                exportOptions: {
                    columns: [ 0,2,3,4,5 ]
                }
            },
           
        ]
    } );
    $('.buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
} ); */
    
 </script>
