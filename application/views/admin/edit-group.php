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
                <li class="breadcrumb-item"><a href="#">Groups
</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
		 <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form-center">Edit Group</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <form class="form">
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Logo <sup> * </sup>	</label>
									  <input type="file" class="form-control" placeholder="" name="fullname" value="">
										<small>	Note: PNG, JPEG, or GIF only.(max size 2 MB). </small>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Group Name  <sup> * </sup>	</label>
									  <input type="text" class="form-control" placeholder="" name="fullname" value="Chennai IT Jobs">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Summary  <sup> * </sup>	</label>
									  <textarea class="form-control" placeholder="" name="fullname" value="" rows="4">A group for all the people connected to PHP programming. Anyone that programs PHP, learns PHP or having a business related to PHP programming...</textarea>
										<small>	Enter a brief description about your group and its purpose </small>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Description  <sup> * </sup>	</label>
									   <textarea class="form-control" placeholder="" name="fullname" value="" rows="4">A group for all the people connected to PHP programming. A</textarea>
									   	<small>	Your full description of this group. </small>
									</div>
								</div>
							</div>
							<div class="row">
								
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Group Owner Email  <sup> * </sup>	</label>
									  <input type="text" class="form-control" placeholder="" name="fullname" value="sharonjose438@gmail.com">
									</div>
								</div>
							</div>
							 <div class="form-actions left">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-plus"></i> Submit
                        </button>
						<button type="submit" class="btn btn-danger">
                          <i class="la la-close"></i> Cancel
                        </button>
					 </div>
                    </form>
				</div>
						<h5 class="main-ttl-n m-t-30"> Group List </h5>
							<div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th> 
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </th>
                          <th>S.No</th>
                          <th>Logo</th>
                          <th>	Group  Name	</th>
                          <th>	 Total Members	</th>
                          <th>	Members Discussion		</th>
                          <th>	Created Date		</th>
                          <th class="mn-w-250">		Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </td>
						 <td> 1 </td>
                         <td>
							<a href="view-group-details.php">
								<img src="app-assets/images/partner_1.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="view-group-details.php">   test group</a> </td>
						  <td>
							<table class="under-tbl">
								<tbody><tr><td colspan="2">
									<a href="group-member-list.php">
											6</a>
									</td></tr>
									<tr><td>Active</td><td>Inactive</td></tr>
									<tr><td>
										<a href="group-member-list.php">6</a>
										</td>
										<td>
										<a href="group-member-list.php">0</a>
										</td>
									</tr>
								</tbody>
							</table>
						  </td>
						  <td>	
							<table class="under-tbl"> 
								<tbody><tr><td colspan="2">
									<a href="discussion-details-list.php">1</a>
								</td></tr>
								<tr><td>Active</td><td>Inactive</td></tr>
										<tr><td>
										<a href="discussion-details-list.php">1</a>
										</td>
										<td>
										<a href="discussion-details-list.php">0</a>
										</td>
									</tr>
								</tbody>
							</table>
						  </td>
						  <td> 08-09-2012	 </td>
                         
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						  <a href="edit-group.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 
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
						 <td> 2 </td>
                         <td>
							<a href="view-group-details.php">
								<img src="app-assets/images/partner_2.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="view-group-details.php">   sample group </a> </td>
						  <td>
							<table class="under-tbl">
								<tbody><tr><td colspan="2">
									<a href="group-member-list.php">
											3</a>
									</td></tr>
									<tr><td>Active</td><td>Inactive</td></tr>
									<tr><td>
										<a href="group-member-list.php">3</a>
										</td>
										<td>
										<a href="group-member-list.php">0</a>
										</td>
									</tr>
								</tbody>
							</table>
						  </td>
						  <td>	
							<table class="under-tbl"> 
								<tbody><tr><td colspan="2">
									<a href="discussion-details-list.php">6</a>
								</td></tr>
								<tr><td>Active</td><td>Inactive</td></tr>
										<tr><td>
										<a href="discussion-details-list.php">6</a>
										</td>
										<td>
										<a href="discussion-details-list.php">0</a>
										</td>
									</tr>
								</tbody>
							</table>
						  </td>
						  <td> 08-09-2012	 </td>
                         
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						  <a href="edit-group.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 
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
						 <td> 3 </td>
                         <td>
							<a href="view-group-details.php">
								<img src="app-assets/images/partner_3.jpg" width="70" class="squr-tb-img">
							</a>
						 </td>
						  <td><a href="view-group-details.php">   Chennai IT Jobs</a> </td>
						  <td>
							<table class="under-tbl">
								<tbody><tr><td colspan="2">
									<a href="group-member-list.php">
											6</a>
									</td></tr>
									<tr><td>Active</td><td>Inactive</td></tr>
									<tr><td>
										<a href="group-member-list.php">6</a>
										</td>
										<td>
										<a href="group-member-list.php">0</a>
										</td>
									</tr>
								</tbody>
							</table>
						  </td>
						  <td>	
							<table class="under-tbl"> 
								<tbody><tr><td colspan="2">
									<a href="discussion-details-list.php">2</a>
								</td></tr>
								<tr><td>Active</td><td>Inactive</td></tr>
										<tr><td>
										<a href="discussion-details-list.php">2</a>
										</td>
										<td>
										<a href="discussion-details-list.php">0</a>
										</td>
									</tr>
								</tbody>
							</table>
						  </td>
						  <td> 04-09-2012	 </td>
                         
                          <td>
						   <input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
						  <a href="edit-group.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
						 
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
              </div>
            </div>
          </div>
       </div>
	     </div>	  	 </div>	   	
    <?php include('footer.php') ?>


