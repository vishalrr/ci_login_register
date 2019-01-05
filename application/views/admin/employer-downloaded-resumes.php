<?php include('header.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
     <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dashboard">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/employer/index';?>">Employer's Profile</a></li>
                <li class="breadcrumb-item">Downloaded Resumes Detail


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
                  <h4 class="card-title">Downloaded Resumes Detail
					<!--span class="pull-right"><a href="employer-job-posting-access.php" class="btn btn-primary btn-sm"> Posting Access </a> </span-->
					</h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
							<table class="table table-striped table-bordered zero-configuration" >
								<thead>
									<tr>
										<th rowspan="2">S.No</th>
										<th rowspan="2"> Candidate Name</th>
										<th rowspan="2"> Email</th>
										<th rowspan="2"> Contact</th>
										<th rowspan="3">Downloaded At</th>
										<th rowspan="2">Download</th>
										<!--<th rowspan="2">Industry</th>
										<th colspan="2">Access</th>
										<th rowspan="2">Upgrade</th>-->
									</tr>
								<!--	<tr>
										<th>Usage (days)</th>
										<th> Total (days)</th>
									</tr>-->
								</thead>
								<tbody>
								    <?php  
								    $count=1;
								    foreach($resumes as $resum)
								    {
								    ?>
									<tr>
										<td><?= $count++ ?></td>
										<td>	<?= ucfirst($resum->first_name.' '.$resum->last_name); ?> </td>
										<td> <?= $resum->email; ?></td>
										<td> <?= $resum->phone; ?></td>
										<td> <?= date("Y-m-d h:i:s", strtotime($resum->created_at)); ?></td>
										<td> <a href="<?php echo base_url(); ?><?php echo $resum->resume; ?>" download><i class="fa fa-file" style="font-size:48px;color:green"></i></a></td>
										<!--<td> Consultant</td>
										<td> <b> 5 </b></td>
										<td> <b> 10 </b></td>
										<td>
											<a href="javascript:void(0)" class="btn btn-info btn-table"><i class="la la-upload"></i></a>
										</td>-->
									</tr>
									<?php } ?>
									<!--tr>
										<td>2</td>
										<td> <a href="employer-details.php">	KrishanFoundation </a></td>
										<td> Porto-novo	</td>
										<td> Company</td>
										<td> Consultant</td>
										<td> Not Yet</td>
										<td> Not Yet	</td>
										<td>
											<a href="javascript:void(0)" class="btn btn-info btn-table"><i class="la la-upload"></i></a>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td> <a href="employer-details.php">	MM company </a></td>
										<td> Chittagong Port	</td>
										<td> Company</td>
										<td> Consultant</td>
										<td> Not Yet</td>
										<td> Not Yet	</td>
										<td>
											<a href="javascript:void(0)" class="btn btn-info btn-table"><i class="la la-upload"></i></a>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td> <a href="employer-details.php">	Vidhyas solution </a></td>
										<td> Chennai	</td>
										<td> Company</td>
										<td> Consultant</td>
										<td> Not Yet</td>
										<td> Not Yet	</td>
										<td>
											<a href="javascript:void(0)" class="btn btn-info btn-table"><i class="la la-upload"></i></a>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td> <a href="employer-details.php">		Fairmode inc </a></td>
										<td> Bacolod	</td>
										<td> Company</td>
										<td> Consultant</td>
										<td> Not Yet</td>
										<td> Not Yet	</td>
										<td>
											<a href="javascript:void(0)" class="btn btn-info btn-table"><i class="la la-upload"></i></a>
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

  
  
  <div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Degree Name</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Add Degree Name </label>
						  <input type="text" class="form-control" placeholder="Degree Name" name="fullname" value="">
						</div>
					</div>
					<!--div class="col-md-12">
						<div class="form-group forms-radio">
						  <label for="eventInput1" class="label-full">Status    </label>
						  <div class="skin skin-flat">
							  <input type="radio" name="input-radio-4" id="input-radio-15">
							  <label for="input-radio-15">Active</label>
						  </div>
						  <div class="skin skin-flat">
							  <input type="radio" name="input-radio-4" id="input-radio-151">
							  <label for="input-radio-151">Inactive</label>
						  </div>
						</div>
					</div-->
				</div>
				
			  </div>
			</div>
		  </div>
		 
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Save</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
  
  
 <div class="modal fade" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Degree Name </h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Edit Degree Name   </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="B.A">
						</div>
					</div>
					<!--div class="col-md-12">
						<div class="form-group forms-radio">
						  <label for="eventInput1" class="label-full">Status    </label>
						  <div class="skin skin-flat">
							  <input type="radio" name="input-radio-4" id="input-radio-15">
							  <label for="input-radio-15">Active</label>
						  </div>
						  <div class="skin skin-flat">
							  <input type="radio" name="input-radio-4" id="input-radio-151" checked="">
							  <label for="input-radio-151">Inactive</label>
						  </div>
						</div>
					</div-->
				</div>
				
			  </div>
			</div>
		  </div>
		 
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Save</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
  
 <?php include('footer.php') ?>
