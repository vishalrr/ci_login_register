<?php include('header-orange.php'); ?>

<style type="text/css">
.register-bottom-main {
     margin-top: 0 !important; 
}
</style>
<div class="banner register-form-banner">
    <div class="container">
       
			<div class="row">
				<div class="pr-0 col-lg-4 col-md-5 col-sm-4">
					<div class="right-image">
						<h1>Welcome</h1>
						<span>Lorem Ipsum is simply dummy text !</span>
						<ul>
							<li>Secure and reliable for users</li>
							<li>Works 15% faster then others</li>
							<li>Secure and reliable for users</li>
						</ul>
					</div>
				</div>
				<div class="pl-md-0 col-lg-8 col-md-7 col-sm-12">
					<div class="main-login main-center">
						<h1 class="page-tablet-title">Registration Form</h1>
						<form class="form-horizontal" id="add_user_form">
						<input type="hidden" value="1" name="type">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
									<!--label for="name" class="cols-sm-2 control-label">Your Name</label-->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="name" placeholder="Enter your Name">
                                    </div>
                                </div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa fa-envelope"></i></div>
											</div>
											<input type="email" class="form-control" id="nombre" name="email" placeholder="Enter your Email Address">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
											<div class="input-group mb-2">
												<div class="input-group-prepend"><div class="input-group-text"><i class="fa fa-user"></i></div></div>
												<input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" />
											</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group mb-2">
											<div class="input-group-prepend"><div class="input-group-text"><i class="fa fa-phone"></i></div></div>
											<input type="text" class="form-control" name="phone" id="username" placeholder="Enter your Phone Number" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group mb-2">
											<div class="input-group-prepend"><div class="input-group-text"><i class="fa fa-lock"></i></div></div>
												<input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
											</div>
										
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group mb-2">
											<div class="input-group-prepend"><div class="input-group-text"><i class="fa fa-lock"></i></div></div>
												<input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" />
											</div>
										
									</div>
								</div>
							</div>

							<div class="form-group ">
								<!-- <a href="<?php echo base_url('Login'); ?>"> -->
									<input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Register" />
								<!-- </a> -->
							</div>

						</form>
						<div class="alert alert-success" style="display: none;">
						  			
						</div>

					</div>
					
				</div>

			</div>
 	</div>
</div>

<div class="register-bottom-main">
<?php include('footer.php'); ?>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){	
$(function($) {
	$('#add_user_form').validate({
		//ignore: " ",
    rules: {
      	name:
        {
        	required:true,
        	//alphabetsnspace: true
        },
        phone:
        {
        	required:true,
        	//alphabetsnspace: true
        },
       username:
        {
        	required:true,
        	//alphabetsnspace: true
        },        
        password:
        {
        	required:true,
        	minlength: 6,
        },
        confirm:
        {
        	required:true,
        	minlength: 6,
        	equalTo: "#confirm"

        },		
		email:
		{
			required: true,
			email: true	,
			 remote: {
                    url: "<?php echo base_url('user/checking'); ?>",
                    type: "post",                   

                 }
		}
	},	
	messages: 
        {       
		  name:
		  {
		  	required:"Please Enter Name",
		  	//alphabetsnspace: "Please Enter Only Letters"
		  },
		  phone:
		  {
		  	required:"Please Enter Phone number",
		  	//alphabetsnspace: "Please Enter Only Letters"
		  },
		  username:
		  {
		  	required:"Please Enter Username",
		  	//alphabetsnspace: "Please Enter Only Letters"
		  },		 
		  password:
		  {
		  	required:'Please Enter Password',
		  	minlength: "Password Should Be 6 Characheters Long", 
		  },
		  confirm:
		  {
		  	required:'Password Not Matched',
		  	minlength: "Password Should Be 6 Characheters Long",
		  },
		  email: 
          {
            required: "Please Enter  Email",
            email:"Your email address must be in the format of name@domain.com",
            remote: "Email already in use!"
          }
        },
		  highlight: function(element) {
		    $(element).parent().addClass('has-error');
		  },
		  unhighlight: function(element) {
		    $(element).parent().removeClass('has-error');
		  },
			  errorElement: 'span',
			  errorClass: 'validation-error-message help-block form-helper bold',
			  errorPlacement: function(error, element) {
			    if (element.parent('.input-group').length) {
			      error.insertAfter(element.parent());
			    } else {
			      error.insertAfter(element);
		       }
	 		 },
		submitHandler: function(form) 
		{ 
			$.ajax({
	 				type:'POST',
	 				url:'<?php echo base_url('user/user_register'); ?>',
	 				data: new FormData(form),
					contentType: false, 
					cache: false, 
					processData:false,
	 				success:function(hack)
	 				{ 
	 					
	 					if(hack>0)
	 					{
	 						$('.alert').addClass('alert-success').show().html('<strong>Success!</strong> Registered Successfully...').fadeOut(4000);
	 						$('#add_user_form').trigger('reset');
	 						  window.location.href='<?php echo base_url('Login');?>';
	 					}
	 					else{
	 						$('.alert').addClass('alert-danger').show().html('<strong>Error!</strong> Not Registered').fadeOut(4000);
	 						

	 					}
	 				}
	 		});
		} 
		
	});
});
});

</script>