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
                <li class="breadcrumb-item"><a href="#">Edit Company
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
                  <h4 class="card-title" id="basic-layout-form-center">Edit Company</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <h5 class="main-ttl-n"> Edit Company </h5>
                    <form class="form">
                      <div class="row justify-content-md-center">
                        <div class="col-md-12">
                          <div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Edit Company Name <sup> * </sup>	</label>
									  <input type="text" class="form-control" placeholder="" name="fullname" value="GrowIndia">
									 
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Company Type<sup> * </sup>		</label>
										<select class="form-control">
											<option value=""> Select  </option>
											<option value="175" selected="">IT Company</option>
											<option value="339">Non-IT Company</option>
											
										</select>
									</div>
								</div>
							</div>
							 <div class="form-actions left">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-save"></i> Save Now
                        </button>
						<button type="submit" class="btn btn-danger">
                          <i class="la la-close"></i> Cancel
                        </button>
					 </div>
                    </form>
				</div>
						<h5 class="main-ttl-n"> Company List </h5>
							<div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th> 
							S.No
						  </th>
						   <th>	Company Name	</th>
							<th>Company Type	</th>
                           <th class="mn-w-250">		Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
							1
						  </td>
						 
                         <td>
							 GrowIndia
						 </td>
						  <td> NON-IT </td>
							<td>
						   
						     <a href="add-placement-paper.php" class="btn btn-info btn-table"><i class="la la-plus"></i></a>
							<a href="#" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
                        <tr>
                          <td>
							2
						  </td>
						 
                         <td>
								  Cisco
						 </td>
						  <td> IT </td>
							<td>
						   
						     <a href="add-placement-paper.php" class="btn btn-info btn-table"><i class="la la-plus"></i></a>
							<a href="#" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
                          <td>
							3
						  </td>
						 
                         <td>
								  Shriram
						 </td>
						  <td> NON-IT </td>
							<td>
						   
						     <a href="add-placement-paper.php" class="btn btn-info btn-table"><i class="la la-plus"></i></a>
							<a href="#" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
                          <td>
							4
						  </td>
						 
                         <td>
							   L&T Infotech
						 </td>
						  <td> IT </td>
							<td>
						   
						     <a href="add-placement-paper.php" class="btn btn-info btn-table"><i class="la la-plus"></i></a>
							<a href="#" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
							<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
						  </td>
                        </tr>
						<tr>
                          <td>
							5
						  </td>
						 
                         <td>
							 Infosys
						 </td>
						  <td> NON-IT </td>
							<td>
						   
						     <a href="add-placement-paper.php" class="btn btn-info btn-table"><i class="la la-plus"></i></a>
							<a href="#" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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


