$(document).ready(function(){
  
   
   
   setTimeout(function() {
        $('.alert-success').hide();}, 5000);
        
         setTimeout(function() {
        $('.alert-danger').hide();}, 5000);
        
    	$("#myaccount").validate({
    	    rules: {
            first_name: {
                required: true
            },
            last_name: {
                required:true
            },
             email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number: true 
            },
    },
   
    	   	messages: {
         email: "Please Fill the valid Email"
       }

	});
	
	
	$('#OLDPASS').keyup(function(){
	   
	  var olp = $(this).val();
	 // alert(olp.length);
	  if(olp.length>=1)
	  {
	      $('#Newpass').attr('required',true);
	      $('#Confirmp').attr('required',true);
	  }
	  else
	  {
	      $('#Newpass').attr('required',false);
	       $('#Confirmp').attr('required',false);
	  }
	});
	
	/*	function validatepas()
        {
        var oldpas=document.getElementById("OLDPASS").value;
        var pas=document.getElementById("PASS").value;
        var pas1=document.getElementById("Newpass").value;
        var pas2=document.getElementById("Confirmp").value;
        var min=5;
        var max=20;
        if(oldpas=="")
        {
        alert(" Old Password Field cannot be Blank !!!!");
        return false;
        }
        if(md5(oldpas)!= pas){
            alert("Invalid Old Password !!!!");
        return false; 
        }
        
                if(pas1=="")
                {
                alert(" New Password Field cannot be Blank !!!!");
                return false;
                }
                if(pas2=="")
                {
                alert("Confirm Password Field cannot be Blank !!!!");
                return false;
                }
                if(pas1!=pas2)
                {
                alert("New Password do not match with Confirm Password");
                return false;
                }
                if(pas1.length<min) {
                alert("Password length Should be greater than 5 Characters ");
                return false;
                }
                if(pas1.length>max || pas2.length>max )
                {
                alert("Password length Should be less than 20 Characters ");
                return false;
                }
      
    }*/
    
    
    
   $('.btn').click(function() {
       /*var old_pass = $('#OLDPASS').val();
       var new_pass = $('#Newpass').val();
       var con_pass = $('#Confirmp').val();
       if(old_pass != "" || new_pass != "" || con_pass != ""){
           validatepas();
           return false;
       }
      */
       
       
       $(".forms").validate();  // This is not working and is not validating the form
      });
        
});


/*	$(document).ready(function(){
	  
	    
	  /*$("#myaccount").validate({

		rules: {			
			   "first_name": {
				required: true,
				//email: true,
			  }, "last_name": {
				required: true,
				//email: true,
			  }, "email": {
				required: true,
				//email: true,
			  }, "phone": {
				required: true,
				//email: true,
			  },

		}errorPlacement: function(error, element) {
				// error.insertAfter($(element).parent('.input-group')); 
		}

	
});
*/



$('.switchBootstrap').on('switchChange.bootstrapSwitch', function () {
    
   var d = $('.switchBootstrap').val();
   var id = $(this).attr('data-id');
   var tbl = $(this).attr('data-tbl');
   var action= $(this).attr('action');
    	        if($(this).bootstrapSwitch('state')==true)
    	        {
    	           $(this).val(1);
    	           var status=1;
    	        }if($(this).bootstrapSwitch('state')==false)
    	        {
    	            $(this).val(0);
    	           var status=0;
    	        }
                $.ajax({
                type:'POST',
                url:action,
                data:{id:id,tbl:tbl,status:status},
                success: function(data){
                  
                if(data.trim()=='done')
                {
                    document.body.scrollTop = 0;
                   document.documentElement.scrollTop = 0; 
                   $('.success11').show();
                    setTimeout(function() {
                    $('.success11').hide();}, 5000);
                }
                if(data.trim()=='notdone')
                {
                    document.body.scrollTop = 0;
                   document.documentElement.scrollTop = 0;
                   $('.danger11').show();
                    setTimeout(function() {
                    $('.danger11').hide();}, 5000);
                
                }
                
                }
                
                });
    	       
    	       
});

$('.backLink').click(function(){
        parent.history.back();
        return false;
    });
    
    $('.dlt').click(function(){
        
        var id= $(this).attr('data-id');
        var action= $(this).attr('action');
         var tbl= $(this).attr('data-tbl');
         $('.del_id').attr('data-id',id);
         $('.action').attr('data-action',action);
         $('.del_tbl').attr('data-tbl',tbl);
     
    });
    
    $('.deleteaction').click(function(){
        var base = $(this).attr('data-src');
             
        var action= $('.action').attr('data-action');
      var del_id=  $('.del_id').attr('data-id');
      var del_tbl=  $('.del_tbl').attr('data-tbl');
      
        $.ajax({
    type:'POST',
    url:action,
    data:{del_id:del_id,del_tbl:del_tbl},
    success: function(data){
        if(data.trim()!='')
        {
            if(window.location.pathname!='/recruiter/admin/Employer/employer-details')
            { 
                 
                 
           
            $('#delete').modal('hide');
             document.body.scrollTop = 0;
             document.documentElement.scrollTop = 0;
            $('tr#'+del_id).remove();
             window.location.reload();
               $('.success').show();
               setTimeout(function() {
               $('.success').hide();}, 3000);
               
               if(base!='')
              { var img = base+'assets/admin/app-assets/images/dummy_image1.jpg';
                  $('.replaceimgs').attr('src',img);
              }
               
            }
            else
            { 
                $('#delete').modal('hide');
                  document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
                if(del_tbl=='jobs')
                {
                    
                     $('tr#'+del_id).remove();
                     $('.success4').show();
               setTimeout(function() {
               $('.success4').hide();}, 4000);
               
                }else
                {
                    if(base!='')
                    { var img = base+'assets/employer/images/company.png';
                    $('.replaceimgs').attr('src',img);
                    }
                    $('.success2').show();
               setTimeout(function() {
               $('.success2').hide();}, 3000); 
                }
            }
        }
        
    }

     })
});

$('.status').click(function(){
        var id= $(this).attr('data-id');
         var status= $(this).attr('data-status');
         var title= $(this).attr('data-title');
        var action= $(this).attr('action');
         var tbl= $(this).attr('data-tbl');
         $('.status_id').val(id);
         $('.Status').val(status);
         $('.action').val(action);
         $('.status_tbl').val(tbl);
         if(title=='Active'){
          $('.status-title').text('Inactive');
         }
         if(title=='Inactive'){
             $('.status-title').text('Active');
         }
          
    });
    
    
   
    
    $('.Statusaction').click(function(){
        var action= $('.action').val();
        var status= $('.Status').val();
      var status_id=  $('.status_id').val();
      var status_tbl=  $('.status_tbl').val();
     
        $.ajax({
        type:'POST',
        url:action,
        data:{status_id:status_id,status:status,status_tbl:status_tbl},
        success: function(data){
        if(data.trim()!='')
        {
            $('#Status').modal('hide');
               $('.success1').show();
               
               setTimeout(function(){
                   window.location.reload();
                 }, 2000);
        }
        
    }

     });
});


 $('.featured').click(function(){
       var action= $(this).attr('action');
        var feature= $(this).attr('data-featured');
        var id=  $(this).attr('data-id');
        var tbl= $(this).attr('data-tbl');
        $.ajax({
        type:'POST',
        url:action,
        data:{id:id,feature:feature,tbl:tbl},
        success: function(data){
           // alert(data);
         if(data.trim()!='')
         {
                  $('.success1').show();
                  setTimeout(function() { $(".success1").hide(); }, 3000);
         }
        
    }

     });
});

	
	$( ".sb_btn" ).click(function() {
	     $('.validation_error').show();
  	$('.form').validin({
			feedback_delay: 500,
// 			tests: {
// 				'state_abbreviation': {
// 					'regex': /[A-Z]{2}/,
// 					'error_message': "States are abbreviated two capital letters"
// 				}
// 			},
			onValidateInput: function(validation_info) {
				console.log(validation_info);
				console.log('valid');
			}
		});
});


		$('.form').submit(function() {
		    return true;
		});
		
		
		
		$('.addnew').click(function(){
		   
		   
		});
		
		$('.notification_see').click(function(){
		    
		  var aboutid= $(this).attr('about-id');
		   var newTabUrl= $(this).attr('data-baseurl');
		  var notifyid= $(this).attr('notify-id');
		  var tbl= $(this).attr('tbl');
		  var status='0';
		  var status_tbl= 'notifications';
		  var action =$(this).attr('action');
		   $.ajax({
        type:'POST',
        url:action,
        data:{notifyid:notifyid,status:status,status_tbl:status_tbl},
        success: function(data){
        if(data.trim()!='')
        {
          window.location=newTabUrl;
        }
        
        }

       });
		  
	});
		
		

 /*$('.switchBootstrap').change(function() {
     alert();
        if($(this).is(":checked")) {
            var returnVal = confirm("Are you sure?");
            $(this).attr("checked", returnVal);
        }
        else
        {
            alert('not checked');
        }
        $('.switchBootstrap').val($(this).is(':checked'));        
    });
     $('.switchBootstrap').change(function(){
         alert();
          var d = $('.switchBootstrap').val();
    	        if($('.bootstrap-switch-container .switchBootstrap').bootstrapSwitch('state')==true)
    	        {
    	            $('.status').val('1');
    	            
    	        }
    	        if($('.bootstrap-switch-container .switchBootstrap').bootstrapSwitch('state')==false)
    	        {
    	             $('.status').val('0');
    	           
    	        }
     });
 */
 
 $('.uploadimg').change(function(){
     
    var file_data = $('.uploadimg').prop('files')[0];
    var form_data = new FormData();
   form_data.append('file', file_data);
    var action = $(this).attr('action');
$.ajax({
url: action,
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
success: function(data){
    console.log(data);
 if(data.trim()=='notdone')
 {
     $('.danger').show();
      setTimeout(function() {
        $('.alert-danger').hide();}, 3000);
 }
 else
 {
     $('.success').show();
     $('.logo_img').attr('src',data);
     setTimeout(function() {
        $('.alert-success').hide();}, 3000);
        
        
 }
 
},
error: function(){} 	        
});
});

$('.editjob').click(function(){
   var id = $(this).attr('data-id');
   var title = $(this).attr('data-title');
   var status = $(this).attr('data-status');
   if(status==1)
   {
       $('.statusactive').prop('checked',true);
       //$('.iradio_flat-green').parent().attr('class','checked');
       $('.statusactive').parent('.iradio_flat-green').attr('class','iradio_flat-green checked');
   }
   if(status==0)
   {
       $('.statusdeactive').prop('checked',true);
       // $('.iradio_flat-green').parent().attr('class','checked');
         $('.statusdeactive').parent('.iradio_flat-green').attr('class','iradio_flat-green checked');
      
   }
   $('.jobid').val(id);
   $('.jobtitle').val(title);
});



    $(document).ready(function(){
        $("#industyadd").validate({
         rules: {
           category: "required"
          },
        messages: {
        category: "Please fill the required information"
        
         }
        });

    $("#category").validate({
       rules: {
         category_name: "required"
       },
       messages: {
         category_name: "Please fill the required information"
    
       }
    });
    
    $('#addqualification').validate({
       rules: {
         qualification: "required"
       },
       messages: {
         qualification: "Please fill the required information"
    
       }
    });
    
    $('#addlocation').validate({
       rules: {
         location_name: "required"
       },
       messages: {
         location_name: "Please fill the required information"
    
       }
    });
    
     $('.addskill').validate({
       rules: {
         skill: "required"
       },
       messages: {
         skill: "Please fill the required information"
    
       }
    });
    $('#addskills').validate({
       rules: {
         skill: "required"
       },
       messages: {
         skill: "Please fill the required information"
    
       }
    });
    
    $('#addjobpopup').validate({
       rules: {
         title: "required"
       },
       messages: {
         title: "Please fill the required information"
    
       }
    });
    
    $('#editemployeprofile').validate({
       rules: {
         company_name: "required",
         phone: {
        required: true,
        digits: true,
        minlength: 10,
        maxlength:11
      },
       website: {
        required: true,
        url: true,
      },
      address: "required",
      city: "required",
      state: "required",
      pincode:{
        required: true,
        digits: true,
      },
      country: "required",
      mobile1: {
		        required: true,
		        digits: true,
		        minlength: 10,
		        maxlength:11
		      },
      mobile2: {
		        required: true,
		        digits: true,
		        minlength: 10,
		        maxlength:11
		      },
    fax: {
		        required: true,
		        digits: true,
		         minlength: 10,
		         maxlength:11
		      },

       },
       messages: {
         company_name: "Please fill the required information",
         phone: {
                  required: "Please fill the required information",
                  digits: "Please Enter The Digits Only"
                },
        website: {
                  required: "Please fill the required information",
                  url: "Please Enter Valid Url"
                },
    
       }
    });
    
    
    $('#addpackagevalid').validate({
       rules: {
         package_name: "required",
         valid_days: "required",
         number_of_jobs: "required",
         price: "required"
       },
       messages: {
         title: "Please fill the required information"
    
       }
    });
    
    $('#seekereditvalid').validate({
       rules: {
         first_name: "required",
         last_name: "required",
         email: {
                required: true,
                email: true,
            },
         phone: {
		        required: true,
		        digits: true,
		        minlength: 10,
		        maxlength:11
		      },
		  password : {
                    minlength : 6
                },
          confpassword : {
                    minlength : 6,
                    equalTo : "#password"
                },
		 profile_for: "required", 
    	
        
       },
       messages: {
         first_name: "Please fill the required information"
    
       }
    });
    
     $('#edit-post-job').validate({
       rules: {
         title: "required",
         industry: "required",
        apply: "required",
         salary: {
		        required: true,
		        digits: true
		      },
         level: "required",
         experience: {
		        required: true,
		        digits: true,
		      },
         qualification: "required",
         skills: "required",
        

       },
       submitHandler: function(form) {
    	    
    	        $('#edit-post-job').submit();
       }
    });
    
          $('.editpostss').click(function(){
                
            $(".form").validate(); 
            });
   
    

    $('#btn').click(function() {
        
       $(".form").validate();  // This is not working and is not validating the form
      });
      $('.btn').click(function() {
       $(".form").validate();  // This is not working and is not validating the form
      });
        
      
      
});
   
$(function() {
         
    $('#datetimepicker4').datetimepicker({
      pickTime: false
    });
  });







	


