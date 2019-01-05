<?php include('header.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
     <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
         <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard';?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a>Transaction Details

</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
          <?php include('inc/message.php'); ?>
          <div class="alert alert-success success2" style="display:none;">
			  <strong>Success !</strong> Image Removed Successfully 
			</div>
          <div class="alert alert-success success" style="display:none;">
			  <strong>Success !</strong>Image  Removed Successfully 
			</div>
			<div class="alert alert-danger danger" style="display:none;">
			  <strong>Error !</strong> Error To upload Image
			</div>
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Transaction Details

                 </h4> 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
					<div class="row">
						<div class="col-md-4">
							<h5 class="main-ttl-n">  Profile Picture</h5>
							<div class="pro-img-n">
							    <?php if(!empty($users[0]->profile_photo)){ $image= base_url('assets/employer/images/'.$users[0]->profile_photo); }else { $image= base_url('assets/admin/app-assets/images/dummy_image1.jpg'); } ?>
								<img src="<?php echo $image; ?>" class="">
							</div>
							<!--<div class="actions-btn">
							<span class="active-b"><input type="checkbox" class="switchBootstrap swtch" action="<?php echo base_url();?>admin/Employer/statusupdate" data-id="<?php echo $users[0]->id; ?>" data-tbl="candidates"  data-off-text="Inactive" data-on-text="Active" <?php   ($users[0]->status=='1') ? 'checked' : '';  ?> /></span>
							<a href="javascript:void(0)" action="<?php echo base_url();?>admin/Employer/removeimg" data-id="<?php echo $users[0]->id; ?>" data-tbl="candidates" class="btn btn-danger btn-table dlt pull-right" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								<a href="<?php  echo base_url().'admin/candidate/edituser-profile?id='.$users[0]->id;?>" class="btn btn-warning btn-table clickeve pull-right"><i class="la la-pencil"></i></a>
							</div>-->
						</div>
						<div class="col-md-8">
							<h5 class="main-ttl-n">  Transaction Details</h5>
							<div class="row">
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="table table-pro bx-shad value-left">
										  <tbody>
											<tr>
											  <th>Name	 </th>
											  <td class="text-right"><?php if(!empty($users[0]->f_name)) { echo $users[0]->f_name; }else{ echo '---'; } ?><?php if(!empty($users[0]->l_name)) { echo ' '.$users[0]->l_name; }else{ echo '---'; } ?></td>
											</tr>
											
											
											<tr>
											  <th>Email </th>
											  <td class="text-right"><?php if(!empty($users[0]->email)) { echo $users[0]->email; }else{ echo '---'; } ?></td>
											</tr>
											
											<tr>
											  <th>Mobile </th>
											  <td class="text-right"><?php if(!empty($users[0]->phone)) { echo $users[0]->phone; }else{ echo '---'; } ?></td>
											</tr>
											
											<tr>
											  <th>No of Downloads </th>
											  <td class="text-right"><?php if(!empty($transactions[0]->no_of_downloads)) { echo $transactions[0]->no_of_downloads; }else{ echo '0'; } ?></td>
											</tr>
											<tr>
											  <th>Package </th>
											  <td class="text-right"><?php if(!empty($packages[0]->package_name)) { echo Ucfirst($packages[0]->package_name); }else{ echo '0'; } ?></td>
											</tr>
											
											
											
											<tr>
											  <th>Transaction ID </th>
											  <td class="text-right">#<?php if(!empty($transactions[0]->transaction_id)) { echo $transactions[0]->transaction_id; }else{ echo '---'; } ?></td>
											</tr>
											<tr>
											  <th>Valid Days</th>
											  <td class="text-right"><?php if(!empty($transactions[0]->validity)) { echo $transactions[0]->validity; }else{ echo '---'; } ?></td>
											</tr>
											
											<tr>
											  <th>Transaction Source </th>
											  <td class="text-right">Paypal</td>
											</tr>
											
											<tr>
											  <th>Amount </th>
											  <td class="text-right">$<?php if(!empty($transactions[0]->amount)) { echo $transactions[0]->amount; }else{ echo '---'; } ?></td>
											</tr>
											
											<tr>
											  <th> Payment Status </th>
											  <td class="text-right"><?php if(!empty($transactions[0]->status)) { echo Ucfirst($transactions[0]->status); }else{ echo '---'; } ?></td>
											</tr>
											
										<!--	<tr>
											  <th>Qualification :</th>
											  <td class="text-right"></td>
											</tr>
											
											<tr>
											  <th>Location :</th>
											  <td class="text-right"></td>
											</tr>
											
											<tr>
											  <th>Skills:</th>
											  <td class="text-right"></td>
											</tr>
											<tr>
											  <th>Resume :</th>
											  <td class="text-right"></td>
											</tr>-->
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
        </section>
      </div>
    </div>
  </div>
  
 <?php include('footer.php') ?>
 <script type="text/javascript">
 $('.clickeve').click(function(){
    $('.prileoicupload')[0].reset(); 
    $('.uploaderror').html('');
 });
    $(function () {
        var fileupload = $(".profileimg");
        fileupload.change(function () {
                    
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($('.profileimg').val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').css({'color':'red'});
                    $('.prileoicupload').attr('onsubmit','return false');
                }else
                {
                     
                       $('.uploaderror').html('');
                    var fileName = $('.profileimg').val().split('\\')[$(this).val().split('\\').length - 1];
                     $('.prileoicupload').attr('onsubmit','return true');
                }
        });
    });
</script>
