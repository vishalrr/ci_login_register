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
                <li class="breadcrumb-item"><a href="#">Page
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
                  <h4 class="card-title" id="basic-layout-form-center">Add New words</h4>
                 
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
									  <label for="eventInput1">Add Language <sup> * </sup>	</label>
									  <select class="form-control">
										<option>Select Language</option>
										<option value="2">Arabic</option>
										<option value="4">English</option>
									</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Add Page <sup> * </sup>	</label>
										 <select class="form-control">
											   <option value="58">empregistration.php</option>
											   <option value="57">forgotpassword.php</option>
											   <option value="56">onlinetraining.php</option>
											   <option value="55">emp_resume_pack.php</option>
											   <option value="54">changepassword.php</option>
											   <option value="53">emp_folders.php</option>
											   <option value="52">edit_resume_det.php</option>
											   <option value="51">emp_find_candidate.php</option>
											   <option value="50">edit_project_det.php</option>
											   <option value="49">emp_profile.php</option>
											   <option value="47">edit_educational_det.php</option>
											   <option value="46">emp_transaction.php</option>
											   <option value="45">topright.php</option>
											   <option value="44">profileright.php</option>
											   <option value="43">sub_user_managment.php</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Add pre_words<sup> * </sup>	</label>
										 <select class="form-control">
											   <option value="58">List of jobs available</option>
											  <option value="939">vidhya</option>
											   <option value="56">enter the captcha</option>
											   <option value="55">enter the captha</option>
											   <option value="935">Username is available</option>
											 <option value="934">Username Already Exists</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Add Word<sup> * </sup>	</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							
							 <div class="form-actions left">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-plus"></i> Add Now
                        </button>
						<button type="submit" class="btn btn-danger">
                          <i class="la la-close"></i> Cancel
                        </button>
					 </div>
                    </form>
				</div>
						<h5 class="main-ttl-n m-t-30"> Words List </h5>
						<div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Page ID</th>
								<th>Language ID	</th>
								<th>Pre_wordsID</th>
								<th>Words</th>
								<th class="mn-w-250">Action	 </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>	searchall.php</td>
								<td>Arabic</td>
								<td>List of jobs available	</td>
								<td>	قائمة الوظائف المتاحة</td>
								<td>
									<input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
									<a href="edit-word-management.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>	empregistration.php</td>
								<td>english</td>
								<td>enter the captcha		</td>
								<td>		أدخل كابتشا</td>
								<td>
									<input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
									<a href="edit-word-management.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>	register.php	</td>
								<td>Arabic</td>
								<td>	Username is available	</td>
								<td>	اسم المستخدم متوفر</td>
								<td>
									<input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
									<a href="edit-word-management.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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


