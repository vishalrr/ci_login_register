<div class="login-register-form">
    <?php include('header.php'); ?>
</div>

<div class="banner register-form-banner login-main-cover signinpage">
    <div class="sigin-in-cover">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12 offset-xl-3 offset-lg-2">	
        <div class="container">
            <div class="row">
                <div class="pr-md-0 col-md-6 col-sm-12">
                    <div class="right-image right-sign-in-login signin-contentsection">
                        <h1>Welcome</h1>
                        <span>Lorem Ipsum is simply dummy text !</span>
                        <ul>
                            <li>Secure and reliable for users</li>
                            <li>Works 15% faster then others</li>
                            <li>Secure and reliable for users</li>
                        </ul>
                    </div>
                </div>
                <div class="pl-md-0 col-md-6 col-sm-12">
                    <div class=" signin-section  main-login main-center ">
                        <h1 class="page-tablet-title">Sign In</h1>
                        <form class="form-horizontal" id="user_login_form">
                        <?php include('inc/message.php'); ?>
                                    <div class="error_hendlar">
                                        
                                    </div>
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user"></i></div>
                                            </div>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">

                                    <div class="form-group">
                                   
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                            </div>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group ">
                                <!-- <a href="<?php echo base_url(); ?>logged.php"> -->
                                <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Sign-In">
                               <!--  </a> -->
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<?php include('footer.php'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){   
$(function($) {
    $('#user_login_form').validate({
        //ignore: " ",
    rules: {    
        password:
        {
            required:true,           
        },   
        email:
        {
            required: true,
            email: true ,
             remote: {
                    url: "<?php echo base_url('user/checking_user'); ?>",
                    type: "post",                   

                 }
        }
    },  
    messages: 
        {       
   
          password:
          {
            required:'Please Enter Password', 
          },         
          email: 
          {
            required: "Please Enter  Email",
            email:"Your email address must be in the format of name@domain.com",
            remote: "This Email is not registered with us!"
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
                    url:'<?php echo base_url('user/login'); ?>',
                    data: new FormData(form),
                    contentType: false, 
                    cache: false, 
                    processData:false,
                    success:function(data)
                    { 
                        
                      var hack=JSON.parse(data);                    
                      if(hack.status==102)
                      { 
                          $(".error_hendlar").css("display","block");                   
                        $(".error_hendlar").show().html(hack.message).fadeOut(5000);
                      }
                      if(hack.status==103)
                      {
                         /*$(".error_hendlar").css("display","block");  
                        $(".error_hendlar").show().html(hack.message).fadeOut(1000);*/
                        window.location.href='<?php echo base_url('user'); ?>';
                        
                        //setInterval(function(){  }, 0000);
                      }
                        //$('#challenge_form').trigger('reset');
                    }
            });
        } 
        
    });
});
});

</script>