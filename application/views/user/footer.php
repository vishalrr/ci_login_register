<?php 
$cat_data = $this->Common->getData('categorys',array('status'=>1));
$user_id = $this->session->userId2;  
$user_data = $this->Common->getData('users',array('id'=>$user_id),"","",1);
$influential_in = array();
if($user_data->influential_in == ''){
    $influential_in = json_decode($user_data->influential_in);
}
?>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <a href="<?php echo base_url('user/index'); ?>"><img src="<?php echo base_url(); ?>assets/images/footer-logo.png"></a>
            </div>
            <div class="col-sm-3 equal-wd1">
                <h3>Have Questions? call us!</h3>
                <ul>
                    <li><a href="#">1-833-4-Kyndoo</a></li>
                    <li class="lowe-txt"><a href="#">(833-459-6366)</a></li>
                </ul>
            </div>
            <div class="col-sm-2 equal-wd2">
                <h3>About Kyndoo</h3>
                <ul class="">
                    <li><a href="<?php echo base_url('about'); ?>">About us</a></li>
                    <li><a href="<?php echo base_url('influencers'); ?>">For Influencers</a></li>
                    <li><a href="<?php echo base_url('brand'); ?>">For Brands</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
        
            <div class="col-sm-2 equal-wd3">
                <h3>Trust & Safety</h3>
                <ul>
                    <li><a href="<?php echo base_url('terms'); ?>">Terms of service</a></li>
                    <li><a href="<?php echo base_url('privacy'); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                </ul>
            </div>
            
            <div class="col-sm-2 equal-wd4">
                <h3 class="d-none d-lg-block">Social Media</h3>
                <ul class="social-media-links">
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-facebook-square"></i></li>
                    <li><i class="fab fa-twitter-square"></i></li>
                    <li><i class="fab fa-linkedin-square"></i></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="copy-right-footer">
                    <p>Copyright 2019</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content model-cover ">
            <div class="modal-header  p-tb-0">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body my-model-cover">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-5 left-logo border-right">
                            <img class="pt-5" src="<?php echo base_url(); ?>assets/images/logo-login.png">
                        </div>
                        <div class="col-sm-7 right-side-txt">
                            <h5 class="text-right text-white pt-5 "> We're Hard at work at tools that will make<br/>
your life easier. Check back soon!</h5>
                        </div>

                    </div>
                    <div class="modal-footer main-footr-model">
                        <a class="bg-dark text-white p-2 pl-3 pr-3" href="#" data-dismiss="modal">Return To Dashboard<i class="fa fa-angle-right pl-1" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EndModal -->
<!-- Modal -->
<div class="modal fade" id="addnewmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content add_new_popup">
            <div class="modal-header  p-tb-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0 pb-0">
                <div class="row">
                    <div class="col-lg-4 left-text-add p-0">
                        <img src="<?php echo base_url(); ?>assets/images/popupimage.jpg">

                    </div>
                    <div class="col-lg-8 right-side-add pt-50">
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Pick Offer Types</option>
                                <option>Sponsorships</option>
                                <option>Podcast Commerical</option>
                                <option>Sponsored Blog</option>
                                <option>Sponsored Video</option>
                                <option>Product Placement</option>
                                <option>Shout-out</option>
                                <option>In Person Event</option>
                                <option>Guest Blog</option>
                                <option>Guest Host</option>
                                <option>Guest on Podcast</option>
                                <option>AMA </option>
                                <option>Webinar Guest </option>
                                <option>Product Collaborations </option>
                                <option>Content Collaborations </option>
                                <option>Influencer Takeover </option>
                                <option>Contest and Giveaways</option>
                                <option>Coupon codes </option>
                                <option>Product reviews</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control text-dark h-25" id="exampleFormControlTextarea1" rows="3" placeholder="Provide a brief description of the offer and the target audience that would see this this offer."></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-sm-12 pr-0">
                                <h6 class="text-white">How long will this offer take to complete once booked?</h6>
                            </div>
                            <div class="col-lg-4 col-sm-12 pl-0">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>select</option>
                                        <option>Less than 1 week</option>
                                        <option>1 week</option>
                                        <option>2 week</option>
                                        <option>3 week</option>
                                        <option>4 week</option>
                                        <option>more than one month</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-sm-12 pr-0">
                                <h6 class="text-white">How much will you charge for this services?</h6></div>
                            <div class="col-lg-4 col-sm-12 pl-0 ">
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-usd"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="text" id="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer col-lg-12 float-right p-0 ">
                            <a href="#" data-dismiss="modal">Save</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--- EndModal -->
<!-- Modal -->
<div class="modal fade" id="newbrandpopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content Brand-popup">
            <div class="modal-header p-1 self-header">
                <h5 class="p-3 m-0 text-white text-uppercase">Request New offer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group ">
                            <label class="text-white">Number of post required</label>
                            <input type="email" class="form-control rounded-0 border-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <label class="text-white">Which Social Channels</label>
                        <div class="form-group ">
                            <textarea class="form-control h-25 rounded-0 border-0" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label class="text-white">Start Date</label>

                        <div class="form-group mb-0">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend ">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input type="text" class="form-control border-0 rounded-0" name="text" id="datepicker1">
                            </div>
                        </div>
                        <label class="text-white">End Date</label>
                        <div class="form-group mb-0">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input type="text" class="form-control border-0 rounded-0" name="text" id="datepicker2">
                            </div>
                        </div>
                        <label class="text-white">Budget</label>
                        <div class="form-group">
                            <div class="input-group mb-2">

                                <input type="text" class="form-control border-0 rounded-0" name="text" id="text">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <label class="text-white">Description of the product:</label>
                        <div class="form-group w-100 float-left">
                            <textarea class="form-control h-25 border-0 rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="text-white">Aim of the campaign:</label>
                        <div class="form-group w-100 float-left">
                            <textarea class="form-control border-0 h-25 rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="text-white">Website URL:</label>
                        <div class="form-group w-100 float-left">
                            <input type="email" class="form-control border-0 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="text-white">Who is your target audience:</label>
                        <div class="form-group w-100 float-left">
                            <textarea class="form-control h-25 border-0 rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="text-white">Are there any specific requirements on the campaign:</label>
                        <div class="form-group w-100 float-left">
                            <textarea class="form-control h-25 border-0 rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="text-white">Please Describe your desired "Look" , "Feel" , "Style" of the post:</label>
                        <div class="form-group w-100 float-left">
                            <textarea class="form-control h-25 border-0 rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 pt-3 pb-3">
                        <button type="button" class="btn btn-default float-right bg-dark text-white bottom-model-btn border-butn" data-dismiss="modal"> Submit for quote</button>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<!--- EndModal -->
<!---Model -->
<div class="modal fade" id="uploadprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content model-cover ">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="firstPageEditProfile" action="">

                    <!-- One "tab" for each step in the form: -->
                    <div class="tab first-model">
                        <div class="row">
                            <div class="small-12 medium-2 large-2 columns col-lg-2">
                                <div class="circle">
                                    <img class="profile-pic" >

                                    <!-- Default Image -->
                                    <!-- <i class="fa fa-user fa-5x"></i> -->
                                </div>
                                <div class="p-images">
                                    <i class="fa fa-camera upload-buttons" data-toggle="modal" data-target="#main-model-text" data-backdrop="static" data-keyboard="false"></i>

                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <!--label for="name" class="cols-sm-2 control-label">Your Name</label-->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="username" placeholder="UserName" value="<?php echo $user_data->username; ?>" >
                                        <input type="hidden" name="old_image" value="<?php echo $user_data->profile_pic; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group mb-0">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                        <input type="text" class="form-control border-0 rounded-0" placeholder="Date of Birth" name="dob" id="datepicker3" value="<?php echo $user_data->dob; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 offset-2">
                                <div class="form-group">
                                    <!--label for="name" class="cols-sm-2 control-label">Your Name</label-->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="location" placeholder="Location" value="<?php echo $user_data->location; ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <input type="file" id="imgInp">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5 offset-2">
                                <div class="form-group">
                                    <!--label for="name" class="cols-sm-2 control-label">Your Name</label-->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa fa-book"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="speak_languages" placeholder="Languages i speak fluently" value="<?php echo $user_data->speak_languages; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <!--label for="name" class="cols-sm-2 control-label">Your Name</label-->
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-book"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="write_languages" placeholder="Languages i write fluently" value="<?php echo $user_data->write_languages; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Bio:" name="bio"><?php echo $user_data->bio; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Past Colleborations:" name="past_colleborations"><?php echo $user_data->past_colleborations; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div style="overflow:auto;" class="mt-3 float-right step-btns">
                        <button type="submit" id="nextBtn" onclick="nextPrev(1)">save and continue</button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="main-model-text" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content model-cover self-hide">
                                <div class="modal-header  p-tb-0">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="small-12 medium-2 large-2 columns col-lg-12">
                                        <div class="circle">
                                            <img class="profile-pic">

                                            <!-- Default Image -->
                                            <!-- <i class="fa fa-user fa-5x"></i> -->
                                        </div>
                                      <div class="p-image">
                                            
                                        <div class="upload-button">Upload a Photo</div>
                                            <input class="file-upload" type="file" accept="image/*" name="profile_pic"/>
                                          <a id="self-close" href="javascript:void(0)" class="submit-btn" type="" >
                                              Done</a>
                                            
                                            
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </form>
                <form>
                    <div class="tab second-tab">
                        <p class="text-white p-0">Add as many of your social media profiles and channels as possible here to help brands see you work on different networks. Authorizing other networks will add to your total follower count on kyndoo.com and make it easier for brands to see where you are a fit their campaigns.</p>
                        <strong>connected platforms:</strong>
                        <div class="container">
                            <div class="row">
                                <div class="">
                                    <div class="inner-tab">
                                        <i class="fa fa-instagram" aria-hidden="true"></i><a href="#">12,150 Followers</a>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="inner-tab">
                                        <i class="fa fa-youtube" aria-hidden="true"></i><a href="#">155,000 Followers</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 pl-0">
                                    <ul class="inner-main">
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-podcast" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-map-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="overflow:auto;" class="mt-3 float-right step-btns">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">save and continue</button>
                        </div>
                    </div>

                    </form>
                    <form id="thirdPageEditProfile">

                    <div class="tab third-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 pl-0 margin-third">
                                    <strong> Select the categories you are influential in.</strong>
                                </div>
                            </div>
                        <div class="row">
                           <?php
                            foreach ($cat_data as $key) { ?>
                                <div class="col-sm-4 pl-0">
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="influentialIn<?php echo $key->id; ?>" value="<?php echo $key->id; ?>" name="influentialin[]" <?php if(in_array($key->id,$influential_in)){ echo "checked"; } ?>>
                                        <label class="custom-control-label" for="influentialIn<?php echo $key->id; ?>"><?php echo $key->category_name; ?></label>
                                    </div>
                                </div>
                                                     
                            <?php  } ?>
                             </div>                            
                            <div class="row">
                                <div class="col-sm-12 pl-0 margin-third">
                                    <strong class="pb-0"> Select the ad campaigns you do not participate in or do not want to be contacted about.</strong>
                                </div>
                            </div>
                            <div class="row">
                            <?php
                                foreach ($cat_data as $key) { ?>
                                <div class="col-sm-4 pl-0 mb-3">
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="c<?php echo $key->id; ?>" name="influentialnotin[]" value="<?php echo $key->id; ?>">
                                        <label class="custom-control-label" for="c<?php echo $key->id; ?>"><?php echo $key->category_name; ?></label>
                                    </div>
                                </div>
                            <?php } ?>
                               
                                 <div class="col-sm-8 pl-0 mb-3">

                                    <div class="form-group input-typ">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type what are you uncomfortable representing?" name="uncon_represen" value="<?php echo $user_data->uncomfortable_representing; ?>">

                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                        <div style="overflow:auto;" class="mt-3 float-right step-btns">

                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="submit" id="nextBtn" onclick="nextPrev(1)">save and continue</button>
                        </div>

                    </div>
                    </form>
                    <form>

                    <div class="tab tab-four">
                        <p>Use this section to highlight products or brands (paid or unpaid) that you have promoted on your social media pages. This is a great way to show off the types of products and brands you like to work with and how you represent them with your own style and photography. You can Add photos, audio clips and links to blog postings or videos.</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-12">
                                    <div class="text-center">
                                        <h3 class="">Upload cover photo</h3>
                                        <!--<div class="input-group-prepend">

                                        </div>-->
                                        <!--<div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>-->
                                    </div>
                                </div>
                                
                                <div class="col-md-12 col-12">
            		                <div class="container-1 upload-box" role="main">
                						<form method="" action="" enctype="" novalidate class="box has-advanced-upload">
                
                		
                						<div class="box__input">
                							<i class="fas fa-cloud-upload-alt"></i>
                							<input type="file" name="files[]" id="file" class="box__file" data-multiple-caption="{count} files selected" multiple />
                							<label class="new-color-cls" for="file"><strong>Choose a file</strong><span class="box__dragndrop">  here</span>.</label>
                							<!--<label  for="file"><span class="box__dragndrop"> drag and drop here</span>.</label>-->
                							<!--<button type="submit" class="box__button">Upload</button>-->
                						
                						</div>
                
                		
                							<div class="box__uploading">Uploading&hellip;</div>
                							<div class="box__success">Done! <a href="" class="box__restart" role="button">Upload more?</a></div>
                							<div class="box__error">Error! <span></span>. <a href="" class="box__restart" role="button">Try again!</a></div>
                						</form>
            					    </div>
            		            </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6">

                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload">Upload Image</label>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload">Upload Image</label>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload">Upload Image</label>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload">Upload Image</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add a Link">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add a Link">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
            <!-- <div style="overflow:auto;" class="mt-3 float-right step-btns">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">save and continue</button>
            </div> -->

            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:20px;float:left;width:100%;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </div>
        </div>
        </form>

    </div>

</div>
</div>
</div>
<!--EndModel-->
<!--Model-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
</script>
<script>
    $(function() {
        $("#datepicker2").datepicker();
        $("#datepicker").datepicker();
    });
</script>
<script>
    $(function() {
        $("#datepicker1").datepicker();
        $("#datepicker").datepicker();
    });
</script>
<script>
    $(function() {
        $("#datepicker3").datepicker();
        $("#datepicker").datepicker();
    });
</script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the crurrent tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Save and Continue";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        //if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("uploadprofile").style.display = "none";
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>
<script>
    $(document).ready(function() {

        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#self-close').click(function(){
            $('#main-model-text').hide();
        })
        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = label;

            if (input.length) {
                input.val(log);
            } else {
                if (log) alert(log);
            }

        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        });


        
});
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){  
 
$(function($) {
    $('#firstPageEditProfile').validate({
        //ignore: " ",
    rules: {
        
    },  
    messages: 
        {       
          
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
                    url:'<?php echo base_url('user/update_user_profile_page_one'); ?>',
                    data: new FormData(form),
                    contentType: false, 
                    cache: false, 
                    processData:false,
                    success:function(hack)
                    { 
                        
                        if(hack>0)
                        {
                            // $('.alert').addClass('alert-success').show().html('<strong>Success!</strong> Registered Successfully...').fadeOut(4000);
                            // $('#add_user_form').trigger('reset');
                            // // setTimeout(function(){  window.location.href='<?php echo base_url('admin/employee');?>';}, 3000);
                        }
                        else{
                            // $('.alert').addClass('alert-danger').show().html('<strong>Error!</strong> Not Registered').fadeOut(4000);
                            

                        }
                    }
            });
        } 
        
    });
});
$(function($) {
    $('#thirdPageEditProfile').validate({
        //ignore: " ",
    rules: {
        
    },  
    messages: 
        {       
          
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
                    url:'<?php echo base_url('user/update_user_profile_page_third'); ?>',
                    data: new FormData(form),
                    contentType: false, 
                    cache: false, 
                    processData:false,
                    success:function(hack)
                    { 
                        
                        if(hack>0)
                        {
                            
                        }
                        else{
                           

                        }
                    }
            });
        } 
        
    });
});
});
</script>
</body>

</html>