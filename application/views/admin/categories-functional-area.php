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
                <li class="breadcrumb-item"><a href="#">Categories Functional Area</a>
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
                  <h4 class="card-title">Categories Functional Area

					<span class="pull-right"><a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-category"> Add New	 </a> </span>
                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    
					
					
					
					
					
					<div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration drag-table">
						<thead>
							<tr>
								<th>S.No</th>
								<th style="width:60%;">Categories Functional Area	</th>
								<th class="m-n-180">Action</th>
							</tr>
						</thead>
						<tbody id="card-drag-area">
							<tr>
								<td>1</td>
								<td>Accountant</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td> Accounts Assistant	</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Administartion</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Animator</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Bank Assurance</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#edit-category"><i class="la la-pencil"></i></a>
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

  
  
  <div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Category</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Add Category   </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="">
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
        <h4 class="modal-title" id="myModalLabel">Edit Business Category</h4>
      </div>
      <div class="modal-body">
        <form class="form">
		  <div class="row justify-content-md-center">
			<div class="col-md-12">
			  <div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						  <label for="eventInput1">Category Name  </label>
						  <input type="text" class="form-control" placeholder="Category Name" name="fullname" value="Accountant">
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
