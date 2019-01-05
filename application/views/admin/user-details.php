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
                <li class="breadcrumb-item"><a>User Details

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
			  <strong>Success !</strong> Image  Removed Successfully 
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
                  <h4 class="card-title">Users Details

                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
					<div class="row">
						<div class="col-md-3">
							<h5 class="main-ttl-n">  Profile Picture</h5>
							<div class="pro-img-n">
							    <?php if(!empty($seekers[0]->profile_pic)){ $image= base_url('uploads/user_profile/'.$seekers[0]->profile_pic); }else { $image= base_url('assets/admin/app-assets/images/dummy_image1.jpg'); } ?>
								<img src="<?php echo $image; ?>" class="replaceimgs" style="max-width: 200px; object-fit: contain; height: auto;">
							</div>
							<!-- <div class="actions-btn">
							<span class="active-b"><input type="checkbox" class="switchBootstrap swtch" action="<?php echo base_url();?>admin/Employer/statusupdate" data-id="<?php echo $seekers[0]->id; ?>" data-tbl="users"  data-off-text="Inactive" data-on-text="Active" <?= ($seekers[0]->status=='1') ? 'checked' : ''; ?> /></span>
							<div class="mt-1 clearfix">
							<a href="<?php echo base_url().'admin/candidate/edituser-profile?id='.$seekers[0]->id;?>" class="btn btn-warning btn-table clickeve"><i class="la la-pencil"></i></a>
							&nbsp;
							<a href="javascript:void(0)" action="<?php echo base_url();?>admin/Employer/removeimg" data-id="<?php echo $seekers[0]->id; ?>" data-tbl="users" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								
								</div>
							</div> -->
						</div>
						<div class="col-md-9">
						   
							<h5 class="main-ttl-n">  User Details</h5>
							<div class="row">
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="table table-pro bx-shad value-left">
										  <tbody>
											<tr>
											  <th>Name	 :</th>
											  <td class="text-right"><?php echo $seekers[0]->name; ?></td>
											</tr>
											
											
											<tr>
											  <th>Email :</th>
											  <td class="text-right"><?php if(!empty($seekers[0]->email)){ echo $seekers[0]->email; }else { echo '---'; } ?></td>
											</tr>
											
											<tr>
											  <th>Mobile :</th>
											  <td class="text-right"><?php if(!empty($seekers[0]->phone)){ echo $seekers[0]->phone; }else { echo '---'; } ?></td>
											</tr>
											
											<tr>
											  <th>Category :</th>
											  <td class="text-right"><?php if(!empty($seekers[0]->category)){ echo $seekers[0]->category; }else { echo '---'; } ?>
											      <?php //if(!empty($seekers[0]->profile_for)){ echo $this->db->get_where('category_job',array('id'=>$seekers[0]->profile_for))->row()->category_name; }else { echo '---'; } ?></td>
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
