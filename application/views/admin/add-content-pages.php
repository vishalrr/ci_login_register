<?php include('header.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Add/Edit Content</h3>
          <div class="row breadcrumbs-top d-inline-block pull-right">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Add/Edit Content</a>
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
                  <h4 class="card-title" id="basic-layout-form-center">Add/Edit Content</h4>
                 
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
									  <label for="eventInput1">Page Title  </label>
									  <select class="form-control">
										<option value="">Select menu</option>
										<option value="TmpnallXTjE=">Associate Members</option>
										<option value="TVRBM0kyRmpkUT09">Bills to Watch</option>
										<option value="TVRNM0kyRmpkUT09">Blog</option>
										<option value="TnpBallXTjE=">Business Partners</option>
										<option value="T0RBallXTjE=">Business Partners Documents</option>
										<option value="TnpJallXTjE=">BUSINESS PARTNERSNETWORK</option>
										<option value="TVRJNUkyRmpkUT09">Classes </option>
										<option value="TVRJeUkyRmpkUT09">CLASSES &amp; EVENTS</option>
										<option value="TVRJMkkyRmpkUT09">Classes and Event</option>
									 </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Permalink   </label>
									  <input type="text" class="form-control" placeholder="Permalink " name="fullname" value="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Page Image   </label>
									  <input type="file" class="form-control" placeholder="Permalink " name="fullname" value="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Meta Title   </label>
									  <input type="text" class="form-control" placeholder="Permalink " name="fullname" value="">
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Meta Keyword  </label>
									  <textarea class="form-control" placeholder="Meta Keyword" rows="4"></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									  <label for="eventInput1">Meta Description  </label>
									  <textarea class="form-control" placeholder="Meta Description" rows="4"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  <label for="eventInput1">Content   </label>
									  
										<textarea class="content-text" name="example"></textarea>

									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-12">
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
								</div>
							</div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions left">
                         <button type="submit" class="btn btn-success">
                          <i class="la la-check-square-o"></i> Save
                        </button>
						<button type="submit" class="btn btn-danger">
                          <i class="la la-close"></i> Cancel
                        </button>
					 </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
	     </div>	  	 </div>	   	
    <?php include('footer.php') ?>
