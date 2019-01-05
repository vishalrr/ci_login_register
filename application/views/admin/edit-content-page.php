<?php include('header.php');?>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>multifileupload/multicss.css">
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
          <div class="row breadcrumbs-top d-inline-block pull-left">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard';?>">Home</a>
                </li>
                <li class="breadcrumb-item"><a>Content</a>
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
                			
			<div class="alert alert-danger" style="display:none;">
			  
			</div>
			
			
			
			<div class="alert alert-success" style="display:none;">
			   
			</div>
			
				
				
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form-center">Home Content</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    
                     <div class="loader" style="display:none;" ></div>
                      <div class="loading" style="display:none;" ></div>

                   <form class="form" action="<?php echo base_url(); ?>admin/Updatehome" method="POST" id="Home" enctype='multipart/form-data'>
						<div class="row justify-content-md-center">
							<div class="col-md-12">
								<div class="form-body">
						 <fieldset>
						     <legend>Section 1</legend>
								<!-- <div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="eventInput1">Section1 Heading</label>
												
												   <input type="text" class="form-control" placeholder="Heading" name="sec1_heading" value="<?php echo $home[23]->option_value; ?>">
												  
											</div>
										</div>
									</div> -->
									<?php
									
									 if(!empty($home[58]->option_value))
									 { 
									 
									 $res = explode(',',$home[58]->option_value);
									  if(!empty($res))
									  {
									 ?>
									 <table role="presentation" class="table table-striped removetbl fileupload-preview" style="display: table;">
                             <tbody class="files">
                                  
                          <?php   foreach($res as $key=> $re) 
  { ?>
	<tr class="fileupload-previewrow remv<?php echo $re;  ?>" id="<?php echo 'file-'.$key.'20' ; ?>">
	<td>
	<img src="<?php echo base_url(); ?>assets/admin/app-assets/images/photos/<?php echo $re; ?>" alt="<?php echo $re; ?>" width="80px" height="80px" class="fileupload-previewimg">
	</td> 
	<td>
	<a href="javascript:void(0);" class="btn btn-danger removethisimg" value="<?php echo 'file-'.$key.'20' ; ?>" data-name="<?php echo $re; ?>"><i class="glyphicon glyphicon-ban-circle"></i>&nbsp;<span>Remove File</span></a>
	</td>
	</tr>
	<?php } ?>
                               </tbody>
                                 </table>
									 <?php
									  }
									 }
									 
									?>
									<input type="hidden" name="sec1_heading" value="null">
									<div class="row"> 
									<div class="col-md-12">
											<div class="form-group">
												<div id="new_Add">
		                            				<input type="hidden" name="all_images[]"  class="all_images">
		                                       <input type="hidden" name="what_to_do" id="what_to_do" value="EDIT">
		                                       <div class="fileupload-wrapper">
		                                        <div id="myUpload"></div>
		                                       </div>
		                                       </div>
											</div>	
									   </div>
										<div class="col-md-12">
											<div class="form-group">
											      <label for="eventInput1">Select Image  </label>
											      <img id="imgFileUpload1" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $home[29]->option_value; ?>" style="cursor: pointer;width:100%" />
		                   
		                                    <span id="spnFilePath1"></span>
		                                    <input type="file" id="FileUpload1" name="sec1_img" style="display: none" />
		                                    <span class="uploaderror"></span>
											</div>
										</div>
										
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											  <label for="eventInput1">Section1 Description</label>
											  
												<textarea class="des7" name="sec1_des"><?php echo $home[30]->option_value; ?></textarea>

											</div>
										</div>
										
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="eventInput1">Satisfied Client</label>
												
												   <input type="text" class="form-control" placeholder="Heading" name="Satisfied_client" value="<?php echo $home[24]->option_value; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="eventInput1">Linkedin Connection</label>
												
												   <input type="text" class="form-control" placeholder="Heading" name="linkedin" value="<?php echo $home[25]->option_value; ?>">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="eventInput1">Valued Clients</label>
												
												   <input type="text" class="form-control" placeholder="Heading" name="value_client" value="<?php echo $home[27]->option_value; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="eventInput1">Resumes</label>
												
												   <input type="text" class="form-control" placeholder="Heading" name="resumes" value="<?php echo $home[28]->option_value; ?>">
											</div>
										</div>
									</div>
									
									
								</fieldset>

								<fieldset>
									<legend>Section 2</legend>									
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="eventInput1">Section2 Heading</label>
													
													   <input type="text" class="form-control" placeholder="Heading" name="sec2_heading" value="<?php echo $home[36]->option_value; ?>">
												</div>
											</div>
											<div class="col-md-12">
											<div class="form-group">
											  <label for="eventInput1">Section2 Description</label>
											  
												<textarea class="des2" name="sec2_des"><?php echo $home[31]->option_value; ?></textarea>

											</div>
										</div>										
									</div>
									</fieldset>

									<fieldset>
										<legend>Section 3</legend>
										  <div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="eventInput1">Section3 Heading</label>
														
														   <input type="text" class="form-control" placeholder="Heading" name="sec3_heading" value="<?php echo $home[37]->option_value; ?>">
													</div>
												</div>
											</div>
									
										<div class="row">
											<div class="col-md-2">
												<div class="form-group">
												      <label for="eventInput1">Select Image  </label>
												</div>
											</div>
											<div class="col-md-2">
											      <img id="imgFileUpload2" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $home[26]->option_value; ?>" style="cursor: pointer" />
			                   
			                                    <span id="spnFilePath2"></span>
			                                    <input type="file" id="FileUpload2" name="sec3_img" style="display: none" />
			                                     <span class="uploaderror2"></span>
											</div>
								
										</div>									
											<div class="row">
											<div class="col-md-12">
												<div class="form-group">
												  <label for="eventInput1">Section3 Description</label>
												  
													<textarea class="form-control" name="sec3_des" row="8"><?php echo $home[32]->option_value; ?></textarea>
												</div>
											</div>
											
										</div>
								</fieldset>

								 <fieldset>
								 	<legend>Section 4</legend> 
									
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="eventInput1">Section6 Heading1</label>
													
													   <input type="text" class="form-control" placeholder="Heading" name="sec6_heading1" value="<?php echo $home[38]->option_value; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="form-group">
												      <label for="eventInput1">Select Image  </label>
												</div>
											</div>
											<div class="col-md-2">
											      <img id="imgFileUpload3" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $home[42]->option_value; ?>" style="cursor: pointer" />
			                   
			                                    <span id="spnFilePath3"></span>
			                                    <input type="file" id="FileUpload3" name="sec6_img1" style="display: none" />
			                                     <span class="uploaderror3"></span>
											</div>
								
										</div>									
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
												  <label for="eventInput1">Section6 Description1</label>
												  
												<textarea class="des63" name="sec6_des1" row="8"><?php echo $home[46]->option_value; ?></textarea>

												</div>
											</div>
											
										</div>
									</fieldset>

									<fieldset>
										<legend>Section 5</legend>					
									
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="eventInput1">Section6 Heading2</label>
													
													   <input type="text" class="form-control" placeholder="Heading" name="sec6_heading2" value="<?php echo $home[39]->option_value; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="form-group">
												      <label for="eventInput1">Select Image  </label>
												</div>
											</div>
											<div class="col-md-2">
											      <img id="imgFileUpload4" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $home[43]->option_value; ?>" style="cursor: pointer" />
			                   
			                                    <span id="spnFilePath4"></span>
			                                    <input type="file" id="FileUpload4" name="sec6_img2" style="display: none" />
			                                     <span class="uploaderror4"></span>
											</div>
								
										</div>									
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
												  <label for="eventInput1">Section6 Description2</label>
												  
													<textarea class="des3" name="sec6_des2" row="8"><?php echo $home[33]->option_value; ?></textarea>

												</div>
											</div>
											
										</div>
									</fieldset>

									<fieldset>
										<legend>Section 6</legend>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="eventInput1">Section6 Heading3</label>
													
													   <input type="text" class="form-control" placeholder="Heading" name="sec6_heading3" value="<?php echo $home[40]->option_value; ?>"> 
													  
												</div>
											</div>
										</div>
									
										<div class="row">
											<div class="col-md-2">
												<div class="form-group">
												      <label for="eventInput1">Select Image  </label>
												</div>
											</div>
											<div class="col-md-2">
											      <img id="imgFileUpload5" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $home[44]->option_value; ?>" style="cursor: pointer" />
			                   
			                                    <span id="spnFilePath5"></span>
			                                    <input type="file" id="FileUpload5" name="sec6_img3" style="display: none" />
			                                     <span class="uploaderror5"></span>
											</div>
								
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group"> 
												  <label for="eventInput1">Section6 Description3</label> 
												  
												<textarea class="des61" name="sec6_des3"><?php echo $home[34]->option_value; ?></textarea>

													
												</div>
											</div>
											
										</div>
									</fieldset>
									<fieldset>
										<legend>Section 7</legend>									
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="eventInput1">Section7 Heading</label> 
														
														   <input type="text" class="form-control" placeholder="Heading" name="sec7_heading" value="<?php echo $home[41]->option_value; ?>">
													</div>
												</div>
											</div>
									
										<div class="row">
											<div class="col-md-2">
												<div class="form-group">
												      <label for="eventInput1">Select Image  </label>
												</div>
											</div>
											<div class="col-md-2">
											      <img id="imgFileUpload6" alt="Select File" title="Select File" src="<?php echo base_url(); ?>/<?php echo $home[45]->option_value; ?>" style="cursor: pointer" />
			                   
			                                    <span id="spnFilePath6"></span>
			                                    <input type="file" id="FileUpload6" name="sec7_img" style="display: none" />
			                                     <span class="uploaderror6"></span>
											</div>
								
										</div>									
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">  
												  <label for="eventInput1">Section7 Description</label>
												  
													<textarea class="form-control" name="sec7_des" ><?php echo $home[35]->option_value; ?></textarea>

												</div>
											</div>
											
										</div>
								</fieldset>
									
								</div>
							</div>
						</div>
						<div class="form-actions left">
							<button type="submit" class="btn btn-success">
								<i class="la la-check-square-o"></i> Save
							</button>
							<a href="<?php echo base_url().'admin/content-pages'?>"  class="btn btn-danger">
								<i class="la la-close"></i> Cancel
							</a>
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
   <script type="text/javascript" src="<?php echo base_url();?>multifileupload/multijs.js "></script>
    <script type="text/javascript">
    var a=1;
    var b=1;
    var c=1;
    var d=1;
    var e=1;
    var f=1;
   
    $(function () {
        var fileupload = $("#FileUpload1");
        var filePath = $("#spnFilePath1");
        var image = $("#imgFileUpload1");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
             var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror').css({'color':'red'});
                    a=0;
                    $('#Home').attr('onsubmit','return false');
                }else
                {
                    a=1;
                    $('.uploaderror').html("");
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                    filePath.html("<b>Selected File: </b>" + fileName);
                    $('#Home').attr('onsubmit','return true');
                }
        });
    });
    
    
     $(function () {
        var fileupload = $("#FileUpload2");
        var filePath = $("#spnFilePath2");
        var image = $("#imgFileUpload2");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    b=0;
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror2').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror2').css({'color':'red'});
                    $('#Home').attr('onsubmit','return false');
                }else
                {
                    $('.uploaderror2').html("");
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                    filePath.html("<b>Selected File: </b>" + fileName);
                    b=1;
                    $('#Home').attr('onsubmit','return true');
                }
        });
    });
    
    $(function () {
        var fileupload = $("#FileUpload3");
        var filePath = $("#spnFilePath3");
        var image = $("#imgFileUpload3");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
              var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    c=0;
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror3').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror3').css({'color':'red'});
                    $('#Home').attr('onsubmit','return false');
                }else
                {
                     $('.uploaderror3').html("");
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                    c=1;
                    filePath.html("<b>Selected File: </b>" + fileName);
                    $('#Home').attr('onsubmit','return true');
                }
        });
    });
    
    $(function () {
        var fileupload = $("#FileUpload4");
        var filePath = $("#spnFilePath4");
        var image = $("#imgFileUpload4");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
           var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror4').html("Only formats are allowed : "+fileExtension.join(', '));
                    d=0;
                    $('.uploaderror4').css({'color':'red'});
                    $('#Home').attr('onsubmit','return false');
                }else
                {
                     $('.uploaderror4').html("");
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                    d=1;
                    filePath.html("<b>Selected File: </b>" + fileName);
                    $('#Home').attr('onsubmit','return true');
                }
        });
    });
    
    $(function () {
        var fileupload = $("#FileUpload5");
        var filePath = $("#spnFilePath5");
        var image = $("#imgFileUpload5");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    e=0;
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror5').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror5').css({'color':'red'});
                    $('#Home').attr('onsubmit','return false');
                }else
                {
                     $('.uploaderror5').html("");
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                    filePath.html("<b>Selected File: </b>" + fileName);
                    e=1;
                    $('#Home').attr('onsubmit','return true');
                }
        });
    });
    
    $(function () {
        var fileupload = $("#FileUpload6");
        var filePath = $("#spnFilePath6");
        var image = $("#imgFileUpload6");
        image.click(function () {
            fileupload.click();
        });
        fileupload.change(function () {
           var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                    f=0;
                    //alert("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror6').html("Only formats are allowed : "+fileExtension.join(', '));
                    $('.uploaderror6').css({'color':'red'});
                    $('#Home').attr('onsubmit','return false');
                }else
                {
                     $('.uploaderror6').html("");
                    var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                    f=1;
                    filePath.html("<b>Selected File: </b>" + fileName);
                    $('#Home').attr('onsubmit','return true');
                }
        });
    });
    
     $('#Home').submit(function(){
            if(a==1 && b==1 && c==1 && d==1 && e==1 && f==1)
            {
                return true;
            }
            else
            {
                return false;
            }
            
        });
</script>
<script type="text/javascript">
	$("#myUpload").bootstrapFileUpload({
 url: "<?php echo base_url('admin/Home/mulifileuploading'); ?>"+"/1.php"
});

	 $(document).on('click','.fileupload-remove',function(){ 
   var images=$('.all_images').val();
      var images2=JSON.parse(images);   
        var removeItem =$(this).attr('data-name'); 
        images2 = jQuery.grep(images2[0], function(value) 
        { 
          return value.slice(10) != removeItem;
      });
         var images3 =JSON.stringify(images2); 
         var images4=[];
          images4.push(images3);    
           console.log(JSON.stringify(images4)); 
         $('.all_images').val('['+images4+']');//=images3;
        
         $(this).closest('tr').remove(); 
             return false;
});

 $(document).on('click','.remove_local_file',function(){
     var dis=$(this);
     var images=$(this).closest('.form-group').find('.all_images').val();
      var images2=JSON.parse(images);     
        var removeItem =$(this).val(); 
        images2 = jQuery.grep(images2[0], function(value) {
        return value != removeItem;
      });
         var images3 =JSON.stringify(images2); 
         var images4=[];
          images4.push(images3);    
           console.log(JSON.stringify(images4)); 
         $(this).closest('.form-group').find('.all_images').val('['+images4+']');//=images3;
         $(this).closest('.form-group').find('.all_images2').val('['+images4+']');//=images3;
         $(this).closest('tr').remove(); 
             return false;
});

$('.removethisimg').click(function(){
    var name = $(this).attr('data-name');
    var id = $(this).attr('value');
    
     $.ajax({
                type:'POST',
                url:"<?php echo base_url(); ?>admin/removehomeimg",
                data:{name:name},
                success: function(data){
                  
                if(data.trim()=='done')
                {
                    //$('table.removetbl tr.remv'+name).remove();
                    document.body.scrollTop = 0;
                   document.documentElement.scrollTop = 0; 
                 //  $($(this).closest("tr")).remove();
                   $('#'+id).remove();
                    
                    $('.alert-success').html('<strong>Success !</strong> Image removed successfully')
                   $('.alert-success').show();
                    setTimeout(function() {
                    $('.alert-success').hide();}, 5000);
                }
                if(data.trim()=='notdone')
                {
                    document.body.scrollTop = 0;
                   document.documentElement.scrollTop = 0;
                   $('.alert-danger').html('<strong>Error !</strong> To remove the image');
                   $('.alert-danger').show();
                    setTimeout(function() {
                    $('.alert-danger').hide();}, 5000);
                
                }
                
                }
                
                });
});
</script>
    
