<?php include('header.php');?>
	<div class="app-content content">
    <div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
				<div class="row breadcrumbs-top d-inline-block pull-left">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							 <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a>
                </li>
                <li class="breadcrumb-item"><a>FAQ</a>
                </li>
						
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
		    <?php include('inc/message.php'); ?>
		    	<div class="alert alert-success success" style="display:none;">
			  <strong>Success !</strong> Delete Successfull
			</div>
			<div class="alert alert-danger danger" style="display:none;">
			  <strong>Error !</strong> Enabel to delete
			</div>
			<!-- Zero configuration table -->
			<section id="configuration">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">FAQ <span class="pull-right"><a href="<?php echo base_url(); ?>admin/add_faq" class="btn btn-primary btn-sm"> Add Faq</a> </span></h4>
							</div>
							<div class="card-content collapse show">
								<div class="card-body card-dashboard">
									<div class="table-responsive">
										<table class="table table-striped table-bordered zero-configuration">
											<thead>
												<tr>
												    <th>Id</th>
												    <th>Question For</th>
													<th>Question</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											    <?php
						                        $counter = 1;
						                        foreach($faq as $faq1){?>
												<tr id="<?php echo $faq1->id; ?>">
												    <td><?php echo $counter++; ?></td>
												    <td><?php  if(!empty($faq1->question_for)){ $dd = explode(',',$faq1->question_for); if(!empty($dd)){ $ddd = array(); foreach($dd as $d) {   echo  Ucfirst($d);  } }  } ?></td>
													<td><?php echo $faq1->question; ?></td>
													<td><a href="<?php echo base_url(); ?>admin/add_faq?id=<?php echo $faq1->id; ?>" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
														<a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/delete" data-id="<?php echo $faq1->id; ?>" data-tbl="faq" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
													
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
