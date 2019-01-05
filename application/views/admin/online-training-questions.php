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
                <li class="breadcrumb-item"><a href="#">Online training - Questions
</a>
                </li>
                
              </ol>
            </div>
          </div>
		  <span class="pull-right"> <a href="training-categories.php">View Categories </a> </span>
        </div>
      
      </div>
      <div class="content-body">
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Online training - Questions
				    <span class="pull-right"><a href="add-training-question.php" class="btn btn-primary btn-sm"> Add Question </a> </span>
				</h4>
                </div>
                <div class="card-content collapse show">
				 <div class="card-body card-dashboard">
					<div class="row">
						<div class="col-md-8">
							<div class="table-responsive">
								<table class="table tble-l-brdr">
								  <tbody>
									<tr>
									  <td>Title 	:</td>
									  <td class="text-right">Business Analysis Questions
</td>
									</tr>
									<tr>
									  <td>Question	:</td>
									  <td class="text-right">What does a Business Analyst do?
</td>
									</tr>
									<tr>
									  <td>Category Name :</td>
									  <td class="text-right"> Business Analysis
</td>
									</tr>
									<tr>
									  <td>Answer 	:</td>
									  <td class="text-right">
									 <pre>HERITAGE
										MAMMOTH
										VIPER/ SIR-RICHARDS
										ORANGE
										PREMIUM
										SUPREMO/ BLAST
										WAVES/ DYNASTY
										CUSTOM
										SUPER POWER
										POWER PLAY
										MAGNUM
										35910/-
										23940/-
										20520/-
										17955/-
										12825/-
										11970/-
										10605/-
										10260/-</pre>
</td>
									</tr>
									<tr>
									  <td>Answer  Time:</td>
									  <td class="text-right">31-12-1969 04:33:34 PM</td>
									</tr>
									
								  </tbody>
								</table>
							</div>
							<div class="text-center w-100">
								<a href="training-categories.php" class="text-center btn btn-info btn-sm">Close </a>
								<input type="checkbox" class="switchBootstrap" id="switchBootstrap2" checked="" data-off-text="Inactive" data-on-text="Active" checked="false" />
								<a href="edit-training-question.php" class="text-center btn btn-warning btn-sm">Edit </a>
								<a href="javascript:void(0)" class="text-center btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">Delete </a>
							</div>
						</div>
						
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
