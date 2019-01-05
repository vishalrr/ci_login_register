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
                <li class="breadcrumb-item"><a href="#">Posted Jobs List

</a>
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
                  <h4 class="card-title">Posted Jobs List

				</h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                   <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Job Title		</th>
								<th>Keywords </th>
								<th>Description	 </th>
								<th>Experience </th>
								<th>Contact Person	 </th>
								<th>Phone No	  </th>
								<th>Qualification </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><a href="posted-job-details.php">marketing mgr</a></td>
								<td>sales</td>
								<td>Lorem ipsum dolor</td>
								<td>2-5 YRS	 </td>
								<td>Rajiv Mehta	 </td>
								<td>98989898</td>
								<td>B.Com</td>
							</tr>
							<tr>
								<td>2</td>
								<td><a href="posted-job-details.php">	web developer</a></td>
								<td>php</td>
								<td>Lorem ipsum dolor</td>
								<td>2-5 YRS		 </td>
								<td>vidhya	 </td>
								<td>8787865678</td>
								<td>B.E/B.Tech</td>
							</tr>
							<tr>
								<td>3</td>
								<td><a href="posted-job-details.php">marketing mgr</a></td>
								<td>sales</td>
								<td>Lorem ipsum dolor</td>
								<td>2-5 YRS	 </td>
								<td>Rajiv Mehta	 </td>
								<td>98989898</td>
								<td>B.Com</td>
							</tr>
							<tr>
								<td>4</td>
								<td><a href="posted-job-details.php">	web developer</a></td>
								<td>php</td>
								<td>Lorem ipsum dolor</td>
								<td>2-5 YRS		 </td>
								<td>vidhya	 </td>
								<td>8787865678</td>
								<td>B.E/B.Tech</td>
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
