<?php include('header.php');?>
<style>
    input[type="file"]
    {
            height: 40px;
    }
    .list-group a:hover {
   
    background-color: skyblue;
}
 .list-group a.anch1 {
      background-color: palegoldenrod;
 }
 .list-group a.anch1:hover {
      background-color: skyblue;
 }
</style>
	<div class="app-content content">
    <div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
			    <?php include('inc/message.php'); ?>
			   <div class="alert alert-danger notierror" style="display:none;">
			 
			</div>
			  <!-- <h3 class="content-header-title mb-0 d-inline-block">Post Job</h3> -->
			  <div class="row breadcrumbs-top d-inline-block ">
				<div class="breadcrumb-wrapper col-12">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo base_url().'employer/index';?>">Home</a>
					</li>
					<li class="breadcrumb-item"><a>Notifications</a>
					</li>
					
				  </ol>
				</div>
			  </div>
			</div>
		</div>
		
      <div class="content-body">
        <div class="row">
            <div class="col-md-12">
             <div class="card">
              <div class="card-header mb-0">
                <h4 class="card-title">Notifications
                
                <button class="btn btn-sm btn-danger dleteall pull-right">Delete </button>
                <span class="pull-right check-all"><input type="checkbox" id="checkAll"  /> Check All<br/></span>
				</h4>
              </div>
              <div class="card-content">
                <div class="card-content">
                  <div class="card-body  py-0 px-0 new-notifi">
                    <div class="list-group">
                        <?php
                        if(count($notifications)!=0)
                        {
                        foreach($notifications as $notification) { 
                        ?>
					<div class="check-new-sd">
                     <div class="media-left pr-1 pos-chk">
                     <input type="checkbox" name="deleteoo[]" data-id="<?php echo $notification->notify_id; ?>" id="notify<?php echo $notification->notify_id; ?>" value="<?php echo $notification->notify_id; ?>" class="noclick" >
                    </div>
                      <a href="javascript:void(0)" class="list-group-item notification_see anch<?= $notification->status; ?>" data-tbl="<?php echo $notification->about; ?>"    tbl="<?php echo $notification->about; ?>" about-id="<?php echo $notification->about_id; ?>" 
                      notify-id="<?php echo $notification->notify_id; ?>" <?php if($notification->from_for=='User'){?> data-baseurl="<?php echo base_url(); ?>admin/employer/response?id=<?php echo $notification->about_id; ?>" <?php }else{ ?> data-baseurl="<?php echo base_url(); ?>admin/employer/edit-posted-jobs?id=<?php echo $notification->about_id; ?>" <?php } ?>
                      action="<?php echo base_url();?>admin/employer/notificationstatusupdates">
                         
                        <div class="media">
                            
                          <div class="media-left pr-1">
                            <span class="avatar  rounded-circle">
                            <?php if($notification->from_for == 'Employe'){?>
                            <?php 
                            if(!empty($notification->from_id))
                            {
                                $imgs= $this->db->get_where('employers',array('id'=>$notification->from_id))
                                
                                ->row();
                                
                            
                            	if(!empty($imgs->profile_photo)){
                                $img = base_url("assets/employer/images/".$imgs->profile_photo);
                                }else{
                                $img = base_url('assets/employer/images/default.jpeg');
                                } 
                            }else
                            {
                                $img = base_url('assets/employer/images/default.jpeg');
                            }
               ?>
                         
                            <img src="<?php echo $img; ?>" alt="avatar"><i></i></span>
                            <?php }elseif($notification->from_for == 'User'){?>
                            <?php  $data= $this->db->get_where('candidates',array('id'=>$notification->from_id));
                              if(!empty($data->row()->profile_pic)){ ?>
							<img src="<?php echo base_url(); ?>/<?php echo $data->row()->profile_pic; ?>" width="70" class="table-img" style="cursor: default;">
							<?php }else{ ?>
							<img src="<?php echo base_url(); ?>assets/admin/app-assets/images/dummy_image1.jpg" width="70" class="table-img" style="cursor: default;">
							<?php } } ?>
                            
                            
                            
                            
                          </div>
                          <div class="media-body w-100">
                          <h6 class="media-heading mb-0"><?php if($notification->from_for=='Employe') { echo  'Employer'; }else{ echo 'Candidate'; } ?><span class="pull-right date-note"><i class="la la-clock-o" aria-hidden="true"></i> <?php 
                            
$datetime= $notification->created_at;
$full='';
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    echo  $string ? implode(', ', $string) . ' ago' : 'just now';


?> </span></h6>
                            <p class="font-small-2 mb-0 text-muted"><?php echo  $notification->message; ?></p>
                          </div>
                        </div>
                      </a>
					  </div>
                      <?php  } } else{?>
                       <p class="text-center">No Notification Found</p>
                       <?php } ?>
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
  <?php include('footer.php') ?>
 <script>
 
$('#checkAll').click(function () {    
     $('input:checkbox').prop('checked', this.checked);    
 });
  $('.dleteall').click( function () {
    var vl = $('input[name="deleteoo[]"]:checked').val();
 
var allVals = [];  
 $('input[name="deleteoo[]"]:checked').each(function() {  
 allVals.push($(this).attr('data-id'));
 });  
   
 if(allVals.length <=0)  
 {  
     $('.notierror').html('<strong>Error !</strong> Please check a checkbox to delete notifications').show();;
  setTimeout(function() {
        $('.notierror').css({'display':'none'}); }, 5000);
 }  
 else {  
 
 WRN_PROFILE_DELETE = "Are you sure you want to delete ?";  
 var check = confirm(WRN_PROFILE_DELETE);  
 if(check == true){ 
                     $.ajax({   
                 type: "POST",  
                 url: "<?php echo base_url();?>admin/employer/deletenotifications",  
                 cache:false,  
                 data: 'ids='+allVals,  
                 success: function(data)  
                 {   
                    window.location.reload();
                    /*if(data.trim()=='sucess')
                    {
                        window.location.reload();
                    }
                    if(data.trim()=='notdone')
                    {
                        window.location.reload(); 
                    }*/
                 }   
                 });
 }
 }
    
  
 });
</script>
