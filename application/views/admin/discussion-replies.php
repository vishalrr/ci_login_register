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
                <li class="breadcrumb-item"><a href="#">Member Discussion Details</a>
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
                  <h4 class="card-title">Member Discussion Details
					<span class="pull-right"><a href="discussion-details-list.php" class="btn btn-primary btn-sm"> Discussion Details	 </a> </span>
                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <h5 class="main-ttl-n">Comments </h5>
					<div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
						<thead>
							<tr>
								<th>
									Image
								</th>
								<th> Discussion </th>
								<th>Date</th>
								<th class="mn-w-250">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="app-assets/images/avatar1.png" width="70" class="table-img" style="cursor: default;">
								</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</td>
								<td>Jan 19,2018</td>
								<td>
									<input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
									 <a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-message"><i class="la la-pencil"></i></a>
									 <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<img src="app-assets/images/avatar2.png" width="70" class="table-img" style="cursor: default;">
								</td>
								<td>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</td>
								<td>Jan 19,2018</td>
								<td>
									<input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
									 <a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-message"><i class="la la-pencil"></i></a>
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

  
 
  
  
 <div class="modal fade" id="edit-message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Country</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Edit Message  </label>
						  <textarea class="form-control" placeholder="" name="fullname" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </textarea>
						</div>
					</div>
					
				</div>
				
			  </div>
			</div>
		  </div>
		 
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Update</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
  
  
  
 <?php include('footer.php') ?>
