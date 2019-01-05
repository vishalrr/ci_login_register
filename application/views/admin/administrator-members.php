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
                <li class="breadcrumb-item"><a href="#">Administrator User</a>
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
                  <h4 class="card-title">Administrator User
					<span class="pull-right"><a href="add-administrator-members.php" class="btn btn-primary btn-sm"> Add New </a> </span>
                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Username</th>
								<th>Password</th>
								<th class="m-n-180">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>admin</td>
								<td>393C1BEB4B7017F631E3AFA83F3F9556	</td>
								<td>
									<a href="edit-administrator-members.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>priyanka</td>
								<td>123456	</td>
								<td>
									<a href="edit-administrator-members.php" class="btn btn-warning btn-table"><i class="la la-pencil"></i></a>
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

  <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">User Details</h4>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
			<table class="table table-pro">
			  <tbody>
				<tr>
				  <th>Registration Date:</th>
				  <th class="text-right">	01-Mar-2018</th>
				</tr>
				<tr>
				  <th>User Id:</th>
				  <td class="text-right">	ccobb</td>
				</tr>
				<tr>
				  <th class="text-bold-800">Name:</th>
				  <th class="text-bold-800 text-right"> 	Cynthia Cobb</th>
				</tr>
				<tr>
				  <th>Address:</th>
				  <td class="text-right">	823 Terefi Ct., #3</td>
				</tr>
				<tr class="bg-grey bg-lighten-4">
				  <th class="text-bold-800">City:</th>
				  <td class="text-bold-800 text-right">	San Jose</td>
				</tr>
				<tr>
				  <th>State:	</th>
				  <td class="text-right">	California</td>
				</tr>
				<tr>
				  <th>Zip:		</th>
				  <td class="text-right">	95117</td>
				</tr>
				<tr>
				  <th>Phone:	</th>
				  <td class="text-right">	(408) 828-5127</td>
				</tr>
				<tr>
				  <th>Email:	</th>
				  <td class="text-right">	ccobb6@pacbell.net</td>
				</tr>
				<tr>
				  <th>Status:	</th>
				  <td class="text-right">	<span class="badge badge-success">Active</span></td>
				</tr>
			  </tbody>
		</table>
  </div>
      </div>
      
    </div>
  </div>
</div>
  
  
 
  
 <?php include('footer.php') ?>
