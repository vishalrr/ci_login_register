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
                <li class="breadcrumb-item"><a>Employer's Profile
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
			  <strong>Success !</strong> You have succesfully deleted this Employer
			</div>
			<div class="alert alert-danger danger" style="display:none;">
			  <strong>Error !</strong> Enabel to delete
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
                  <h4 class="card-title">Employer's Profile
				</h4>
                </div>
				<div class="card-body card-dashboard">
                    <div class="table-responsive">
			<!-- table class -->		<table class=" table-striped table-bordered file-export">
                      <thead>
                        <tr>
                          
                          <th>Logo</th>
                          <th>	Company Name	</th>
                          <th>	Name	</th>
                          <th>	Email	</th>
                          <th>	Mobile	</th>
                          <th>	Location</th>
                          <th>	Reg Date	</th>
                          <th>	Posted Jobs	</th>
                          <th>	Downloaded Resumes		</th>
                          <th class="mn-w-250">		Action</th>
                         </tr>
                      </thead>
                      <tbody>
                          <?php foreach($employer as $empoye)
                          {?>
                        <tr id="<?php echo $empoye->id; ?>">
                          
						 
                         <td>
							<a href="<?php echo base_url(); ?>admin/Employer/employer-details?id=<?php echo $empoye->id;?>">
							    	<?php
                						if($empoye->company_logo){
                						    $image = base_url("assets/employer/images/$empoye->company_logo");
                					    }else{
                							$image = base_url('assets/employer/images/company.png');
                						} 
            						?>
								<img src="<?= $image; ?>" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="<?php echo base_url(); ?>admin/Employer/employer-details?id=<?php echo $empoye->id; ?>"><?= $empoye->name; ?> </a> </td>
						  <td><?= $empoye->f_name.' '.$empoye->l_name; ?></td>
						  <td><?= $empoye->email; ?></td>
						  <td><?= $empoye->phone; ?></td>
						  <td><?php if(!empty($empoye->country)){ echo $this->db->get_where('countries',array('id'=>$empoye->country))->row()->name;}else{ echo '--';} ?></td>
						  <td><?php $timestamp = strtotime($empoye->created_at); echo $date = date('d/m/Y', $timestamp); ?></td>
						  
						  
						  <td> <a <?php if(!empty($empoye->empid)){?> href="<?php echo base_url();?>admin/Employer/posted-jobs?id=<?php echo $empoye->empid; ?>" <?php }else {?> <?php } ?>> <?php if(!empty($empoye->empid)){ echo $this->db->get_where('jobs',array('employer_id'=>$empoye->empid,'status !='=>'3'))->num_rows();}else{ echo '--';} ?> </a> </td>
                          <td> <?php if(!empty($empoye->id)){
                          if(!empty($this->db->get_where('downloaded_resume',array('employer_id'=>$empoye->id))->row()->id)){
        
                          ?><a href="<?php echo base_url();?>admin/Employer/downloaded-resumes?id=<?php echo $empoye->id; ?>"> <?php echo $this->db->get_where('downloaded_resume',array('employer_id'=>$empoye->id))->num_rows(); ?> </a> <?php }else{?> <a href="javascript:void(0);"> 0 </a>  <?php } } ?></td>
                          <td>
						   <input type="checkbox"  class="switchBootstrap swtch" action="<?php echo base_url();?>admin/Employer/statusupdate" data-id="<?php echo $empoye->id; ?>" data-tbl="employers"  data-off-text="Inactive" data-on-text="Active" <?= ($empoye->status=='1') ? 'checked' : ''; ?> />
						  <a href="<?php echo base_url();?>admin/Employer/edit-employer-profile?id=<?php echo $empoye->id; ?>" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 
						    <a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $empoye->id; ?>" data-tbl="employers" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
                        <?php } ?>
                       <!--tr>
                          <td>
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </td>
						 
                         <td>
							<a href="employer-details.php">
								<img src="app-assets/images/partner_2.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="employer-details.php"> Company Two </a> </td>
						  <td>California </td>
						  <td>	19/05/1999</td>
						  <td> <a href="posted-jobs.php"> (0) </a> </td>
                          <td><a href="#"> Nill </a></td>
                          <td>
						   <input type="checkbox" class="switchBootstrap" value="<?= $empoye->status; ?>" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						  <a href="edit-employer-profile" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 
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
							<a href="employer-details.php">
								<img src="app-assets/images/partner_3.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="employer-details.php"> Company Three </a> </td>
						  <td>Alaska </td>
						  <td>	15/05/2005</td>
						  <td> <a href="posted-jobs.php"> (1) </a> </td>
                          <td><a href="#"> Resume </a></td>
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						  <a href="edit-employer-profile" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 
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
							<a href="employer-details.php">
								<img src="app-assets/images/partner_4.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="employer-details.php"> Company Four </a> </td>
						  <td>New York </td>
						  <td>	15/05/2002</td>
						  <td> <a href="posted-jobs.php"> (2) </a> </td>
                          <td><a href="#"> Resume </a></td>
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						  <a href="edit-employer-profile" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 
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
							<a href="employer-details.php">
								<img src="app-assets/images/partner_1.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="employer-details.php"> Company One </a> </td>
						  <td>Alaska </td>
						  <td>	15/05/1998</td>
						  <td> <a href="posted-jobs.php"> (2) </a> </td>
                          <td><a href="#"> Resume </a></td>
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						  <a href="edit-employer-profile" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 
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
                title: "Employer's Profile",
                exportOptions: {
                    columns: [ 1,2,3,4,5,6,7,8 ]
                }
            },
            {
                extend: 'excelHtml5',
                title: "Employer's Profile",
                exportOptions: {
                    columns: [ 1,2,3,4,5,6,7,8 ]
                }
            },
            {
                extend: 'pdfHtml5',
                title: "Employer's Profile",
                exportOptions: {
                    columns: [ 1,2,3,4,5,6,7,8 ]
                }
            },
             {
                extend: 'print',
                title: "Employer's Profile",
                exportOptions: {
                    columns: [ 1,2,3,4,5,6,7,8 ]
                }
            },
           
        ]
    } );
     $('.buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
} );
*/
    
    
    
    
 </script>
 
