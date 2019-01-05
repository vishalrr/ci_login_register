<?php include('header.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        
        <div class="row">
           <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger"><?php echo count($emp); ?></h3>
                      <h6>Total Influencer</h6>
                    </div>
                    <div>
                      <i class="icon-user-follow danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info"><?php echo count($job); ?></h3>
                      <h6>Total Brands</h6>
                    </div>
                    <div>
                      <i class="icon-user info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		   <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="primary"><?php echo count($remp); ?></h3>
                      <h6>Total Services</h6>
                    </div>
                    <div>
                      <i class="icon-briefcase primary font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-primary" role="progressbar" style="width: 75%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		 
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning"><?php echo count($seekers); ?></h3>
                      <h6>Total Categories	</h6>
                    </div>
                    <div>
                      <i class="icon-user warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
         
        </div>
        <!-- Products sell and New Orders -->
		 <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Recently Added Brands
				</h4>
                </div>
                <div class="card-content collapse show">
				<div class="card-body card-dashboard">
                    <div class="table-responsive">
					<table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <!--<th> 
							<div class=" skin skin-square">
								<input type="checkbox" id="input-11">
								<label for="input-11"></label>
							</div>
						  </th>-->
                          <th>	S.No</th>
                          <th>	Photo</th>
                          <th>	Name</th>
                          <th>	Email</th>
                          <th>	Contact</th>
                          <th>	Category</th>
                          <th>	Skill</th>
                         
                         </tr>
                      </thead>
                      <tbody>
                          <?php if(isset($seeker)){ 
                         $count = 1; foreach($seeker as $s){ ?>
                        <tr>
						  <td><?php echo $count++; ?></td>
                         <td>
                              <?php if(!empty($s->profile_pic)){ ?>
							<img src="<?php echo base_url(); ?>/<?php echo $s->profile_pic; ?>" width="70" class="table-img" style="cursor: default;">
								<?php }else{ ?>
							<img src="<?php echo base_url(); ?>assets/admin/app-assets/images/dummy_image1.jpg" width="70" class="table-img" style="cursor: default;">
							<?php } ?>
						 </td>
						  <td><a href="<?php echo base_url();?>admin/candidate/user-details?id=<?php echo $s->id; ?>"><?php echo $s->name ?></a> </td>
						  <td><?php echo $s->email; ?> </td>
						  <td><?php echo $s->phone; ?> </td>
						  <td><?php if(!empty($s->profile_for)){ echo $this->db->get_where('category_job',array('id'=>$s->profile_for))->row()->category_name; }; ?> </td>
						  <td><?php if(!empty($s->skills) && $s->skills!='null'){
						      
						   $dd= explode(',',$s->skills); 
						      $skils = array();
						      foreach($dd as $d)
						      {
						         $skils[]=  $this->db->get_where('skills',array('id'=>$d))->row()->skill;
						      }
						      if(!empty($skils)){ echo implode(',',$skils); }else{ echo '---'; }
						      
						  }
						   else{ echo '---'; } 
						  
	
						  ?>
						  
						  </td>
						  
                        </tr>
                        <?php } } ?>
                      </tbody>
                     
                    </table>
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		
		
		
        <!--div class="row match-height">
          <div class="col-xl-12 col-12" id="ecommerceChartView">
            <div class="card card-shadow">
              <div class="card-header card-header-transparent py-20">
                 <h4 class="card-title">Users Stats
                <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group btn-new-tb" role="group">
                  <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                </ul></h4>
              </div>
              <div class="widget-content tab-content bg-white p-20">
                <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
              </div>
            </div>
          </div>
         </div-->
        <!--/ Products sell and New Orders -->
        <!-- Recent Transactions -->
        <!--div class="row">
          <div id="recent-transactions" class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">New Users</h4>
                
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">Username</th>
                        <th class="border-top-0">Name</th>
                        <th class="border-top-0">Email</th>
                        <th class="border-top-0">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate">
							huongremo
						</td>
                        <td class="text-truncate">	Huong</td>
                        <td class="text-truncate">
                         	huongremo@gmail.com
                        </td>
                        <td class="text-truncate p-1">
                         	<span class="badge badge-success"> Active </span>
                        </td>
                      </tr>
					  <tr>
                        <td class="text-truncate">
							Sherry
						</td>
                        <td class="text-truncate">		Sweeney</td>
                        <td class="text-truncate">
                         	ssweeney.6@gmail.com
                        </td>
                        <td class="text-truncate p-1">
                         	<span class="badge badge-success"> 	Active </span>
                        </td>
                      </tr>
					  
					  <tr>
                        <td class="text-truncate">
							downdavid
						</td>
                        <td class="text-truncate">		David</td>
                        <td class="text-truncate">
                         	downdavid@aol.com
                        </td>
                        <td class="text-truncate p-1">
                         	<span class="badge badge-danger"> 	Inactive </span>
                        </td>
                      </tr>
					  <tr>
                        <td class="text-truncate">
							1$LandLord
						</td>
                        <td class="text-truncate">		Bradley</td>
                        <td class="text-truncate">
                         	brad.hansen@ymail.com
                        </td>
                        <td class="text-truncate p-1">
                         	<span class="badge badge-success"> 	Active </span>
                        </td>
                      </tr>
					  <tr>
                        <td class="text-truncate">
							bmiller
						</td>
                        <td class="text-truncate">			Barbara</td>
                        <td class="text-truncate">
                         	bmiller@c21mm.com
                        </td>
                        <td class="text-truncate p-1">
                         	<span class="badge badge-danger"> 	Inactive </span>
                        </td>
                      </tr>
					  <tr>
                        <td class="text-truncate">
							sibling
						</td>
                        <td class="text-truncate">		David</td>
                        <td class="text-truncate">
                         	dlonero@scpowder.com
                        </td>
                        <td class="text-truncate p-1">
                         	<span class="badge badge-success"> 	Active </span>
                        </td>
                      </tr>
					  
                     </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div-->
        <!--/ Recent Transactions -->
       
       
      </div>
    </div>
  </div>
  
  <?php include('footer.php') ?>
