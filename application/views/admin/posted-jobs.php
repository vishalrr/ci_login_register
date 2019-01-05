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
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/employer/index';?>">Employer's Profile</a></li>
                <li class="breadcrumb-item"><a>Company Jobs List
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
			  <strong>Success !</strong> Record Deleted SuccessFully
			</div>
			<div class="alert alert-danger danger" style="display:none;">
			  <strong>Error !</strong> Error Delete the record
			</div>
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Company Jobs List
				</h4>
                </div>
                <div class="card-content collapse show">
				   <div class="card-body card-dashboard">
						 <div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
						<th> S. No</th>
                          <th> 
							Posted date & Time 
						  </th>
                          <th>Job Title</th>
                          <th>	Responses	</th>
                           <th>		Action</th>
                         </tr>
                      </thead>
                      <tbody>
                           <?php 
                           $counter=1;
                          foreach($postedjobs as $job)
                          { ?>
                        <tr id="<?php echo $job->id; ?>">
							<td><?php echo $counter++; ?></td>
                          <td>
							 <?php $timestamp = strtotime($job->created_at); echo $date = date('d/m/Y h:i:s', $timestamp); ?>
						  </td>
						 
                         <td>
							<?php echo $job->title; ?>
						 </td>
						  <td><?php if(!empty($this->db->get_where('applied',array('job_id'=>$job->id,'status!='=>'3'))->num_rows())){?> <a href="<?php echo base_url("admin/employer/response?id=".$job->id); ?>"><?php echo $this->db->get_where('applied',array('job_id'=>$job->id,'status!='=>'3'))->num_rows(); ?></a><?php }else{ echo '0'; } ?> </td>
						 
                          <td>
						
						    <a href="javascript:void(0);" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $job->id; ?>" data-tbl="jobs" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
                        <?php } ?>
                      <!--tr>
						<td>2</td>
                          <td>
							22/05/2018 12:10:44
						  </td>
						 
                         <td>
							Job Two
						 </td>
						  <td><a href="">(12) </a> </td>
						 
                          <td>
							<a href="#" class="btn btn-info btn-table"><i class="la la-refresh"></i></a>
						    <a href="#" class="btn btn-danger btn-table"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
							<td>3</td>
                          <td>
							10/05/2018 12:10:44
						  </td>
						 
                         <td>
							Job Three
						 </td>
						  <td><a href="">(12) </a> </td>
						 
                          <td>
							<a href="#" class="btn btn-info btn-table"><i class="la la-refresh"></i></a>
						    <a href="#" class="btn btn-danger btn-table"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
						<td>4</td>
                          <td>
							16/05/2018 12:10:44
						  </td>
						 
                         <td>
							Job Four
						 </td>
						  <td><a href="">(12) </a> </td>
						 
                          <td>
							<a href="#" class="btn btn-info btn-table"><i class="la la-refresh"></i></a>
						    <a href="#" class="btn btn-danger btn-table"><i class="la la-trash"></i></a>
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
