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
                <li class="breadcrumb-item"><a><?php echo $titles; ?>
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
                  <h4 class="card-title"><?php echo $titles; ?>
				</h4>
                </div>
                <div class="card-content collapse show">
				
				
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
                          <th >		Action</th>
                         </tr>
                      </thead>
                      <tbody>
                          <?php $count = 1; foreach($seekers as $seeker){ ?>
                        <tr id="<?php echo $seeker->id; ?>">
                          
						  <td><?php echo $count++; ?></td>
                         <td>
                             <?php if(!empty($seeker->profile_pic)){ ?>
							<img src="<?php echo base_url(); ?>uploads/user_profile/<?php echo $seeker->profile_pic; ?>" width="70" class="table-img" style="cursor: default;">
							<?php }else{ ?>
							<img src="<?php echo base_url(); ?>assets/admin/app-assets/images/dummy_image1.jpg" width="70" class="table-img" style="cursor: default;">
							<?php } ?>
							
						 </td>
						  <td><a href="<?php echo base_url();?>admin/candidate/user-details?id=<?php echo $seeker->id; ?>"> <?php echo $seeker->name; ?></a> </td>
						  <!--td>Ramgarh </td-->
						  <td> <?php echo $seeker->email; ?></td>
						  <td> <?php echo $seeker->phone; ?></td>
						  
						  <!--td><?php  if(!empty($seeker->skills) && $seeker->skills!= 'null'){ $dd= explode(',',$seeker->skills); 
						      $skil = array();
						      foreach($dd as $d)
						      {
						         $skil[]=  $this->db->get_where('skills',array('id'=>$d))->row()->skill;
						      }
						    if(!empty($skil)){ echo implode(',',$skil); }else{ echo '---'; }
						  }else{ echo '---'; } ?></td-->
                         
                          <td>
                              
                              
                              
                             <input type="checkbox" class="switchBootstrap swtch" action="<?php echo base_url();?>admin/Employer/statusupdate" data-id="<?php echo $seeker->id; ?>" data-tbl="users"  data-off-text="Inactive" data-on-text="Active" <?= ($seeker->status=='1') ? 'checked' : ''; ?> />
						  
						     <!--a href="<?php echo base_url(); ?>admin/candidate/user-details?id=<?php echo $seeker->id; ?>" class="btn btn-info btn-table"><i class="la la-eye"></i></a-->
						 <!--  <a href="<?php echo base_url(); ?>admin/candidate/edituser-profile?id=<?php echo $seeker->id; ?>" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
					
						    <a href="javascript:void(0);" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $seeker->id; ?>" data-tbl="users" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a> -->
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
