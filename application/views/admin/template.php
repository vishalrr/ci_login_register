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
                <li class="breadcrumb-item"><a href="#">Email Template</a>
                </li>
                
              </ol>
            </div>
          </div>
        </div>
      
      </div>
      <div class="content-body">
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Email Templates
					<!-- <span class="pull-right"><a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-category"> <i class="ft-plus white"></i> Add New	 </a> </span> -->
                 </h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    
					
					
					
					
					
					<div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
						<thead>
							<tr>
								<th>S.No</th>
								<th style="width:60%;">Location</th>
								<th class="m-n-180">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Layout notify message</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#view-template"><i class="la la-eye"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Layout notify privacy</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#view-template"><i class="la la-eye"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Layout notify reminder</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#view-template"><i class="la la-eye"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Layout notify statement</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#view-template"><i class="la la-eye"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							<tr>
                <td>5</td>
                <td>Layout order shipped</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#view-template"><i class="la la-eye"></i></a>
                  <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
                </td>
              </tr>
                <td>5</td>
                <td>Layout user subscribe</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#view-template"><i class="la la-eye"></i></a>
                  <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
                </td>
              </tr>
                <td>6</td>
                <td>Layout user welcome</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#view-template"><i class="la la-eye"></i></a>
                  <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
                </td>
              </tr>
                <td>7</td>
                <td>Layout notify download</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#view-template"><i class="la la-eye"></i></a>
                  <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
                </td>
              </tr>
                <td>8</td>
                <td>Layout notify feedback</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#view-template"><i class="la la-eye"></i></a>
                  <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
                </td>
              </tr>
								<td>9</td>
								<td>Layout notify introduce</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-warning btn-table" data-toggle="modal" data-target="#view-template"><i class="la la-eye"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
								</td>
							</tr>
							
						</tbody>
                     
                    </table>
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

  
  
  
 <div class="modal fade" id="view-template" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Email Tempalte</h4>
      </div>
      <div class="modal-body">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#EEEEEE;" id="bodyTable">
  <tr>
    <td align="center" valign="top" style="padding-right:10px;padding-left:10px;" id="bodyCell">
    <!--[if (gte mso 9)|(IE)]><table align="center" border="0" cellspacing="0" cellpadding="0" style="width:600px;" width="600"><tr><td align="center" valign="top"><![endif]-->

    

    <!-- Email Header Open // -->
    <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperTable">
      <tr>
        <td align="center" valign="top">
          <!-- Content Table Open // -->
          <table border="0" cellpadding="0" cellspacing="0" width="100%" class="logoTable">
            <tr>
              <td align="center" valign="middle" style="padding-top:40px;padding-bottom:40px">
                <!-- Logo and Link // -->
                <a href="#" target="_blank" style="text-decoration:none;">
                  <img src="<?php echo base_url();?>assets/admin/app-assets/images/logo/logo-black.png" alt="" width="" border="0" style="height:auto; display:block;"/>
                </a>
              </td>
            </tr>
          </table>
          <!-- Content Table Close // -->
        </td>
      </tr>
    </table>
    <!-- Email Header Close // -->

    <!-- Email Body Open // -->
    <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperTable">
      <tr>
        <td align="center" valign="top">
          <!-- Card Table Open // -->
          <table border="0" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF" width="100%" class="oneColumn">
            <tr>
              <td align="center" valign="top" style="padding-bottom:40px" class="imgHero">
                <!-- Hero Image // -->
                <a href="#" target="_blank" style="text-decoration:none;">
                  <img src="<?php echo base_url();?>assets/admin/app-assets/images/house3.jpg" width="600" alt="" border="0" style="width:100%; max-width:600px; height:auto; display:block;" />
                </a>
              </td>
            </tr>

            <tr>
              <td align="center" valign="top" style="padding-bottom:5px;padding-left:20px;padding-right:20px;" class="title">
                <!-- Main Title Text // -->
                <h2 class="bigTitle" style="color:#313131; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:26px; font-weight:600; font-style:normal; letter-spacing:normal; line-height:34px; text-align:center; padding:0; margin:0;">
                  Introducing "Favorite"
                </h2>
              </td>
            </tr>

            <tr>
              <td align="center" valign="top" style="padding-bottom:20px;padding-left:20px;padding-right:20px;" class="subTitle">
                <!-- Sub Title Text // -->
                <h4 class="midTitle" style="color:#919191; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:18px; font-weight:400; font-style:normal; letter-spacing:normal; line-height:26px; text-align:center; padding:0; margin:0;">
                  Bookmarking your Favorite
                </h4>
              </td>
            </tr>

            <tr>
              <td align="center" valign="top" style="padding-bottom:40px;padding-left:20px;padding-right:20px;" class="description">
                <!-- Description Text // -->
                <p class="midText" style="color:#919191; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:14px; font-weight:400; line-height:22px; text-align:center; padding:0; margin:0;">
                  You can now save a articles of your favorite one with our new bookmarks feature! Read more about bookmarks on our blog, or start adding some now.
                </p>
              </td>
            </tr>

            <tr>
              <td align="center" valign="top" style="padding-bottom:40px;padding-left:20px;padding-right:20px;" class="btnCard">
                <!-- Button Table // -->
                <table align="center" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="center" class="postButton" style="background-color:#8D6CD1;padding-top:10px;padding-bottom:10px;padding-left:25px;padding-right:25px;border-radius:2px">
                      <!-- Button Link // -->
                      <a href="#" target="_blank" style="color:#FFFFFF; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:12px; font-weight:600; letter-spacing:1px; line-height:20px; text-transform:uppercase; text-decoration:none; display:block;" >
                        Bookmarks Now
                      </a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

            <tr>
              <td height="10" style="font-size:1px;line-height:1px;">&nbsp;</td>
            </tr>
          </table>
          <!-- Card Table Close // -->

          <!-- Space -->
          <table border="0" cellpadding="0" cellspacing="0" width="100%" class="space">
            <tr>
              <td height="30" style="font-size:1px;line-height:1px;">&nbsp;</td>
            </tr>
          </table>

        </td>
      </tr>
    </table>
    <!-- Email Body Close // -->
    <!-- Email Footer Open // -->
    <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%" class="wrapperTable">
      <tr>
        <td align="center" valign="top">
          <!-- Content Table Open// -->
          <table border="0" cellpadding="0" cellspacing="0" width="100%" class="">
            <tr>
              <td align="center" valign="top" style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;" class="socialLinks">
                <!-- Social Links (Facebook)// -->
                <a href="#facebook-link" target="_blank" style="display:inline-block;" class="facebook">
                  <img src="<?php echo base_url();?>assets/admin/app-assets/images/facebook.png" alt="" width="40" border="0" style="height:auto;margin:2px" />
                </a>
                <!-- Social Links (Twitter)// -->
                <a href="#twitter-link" target="_blank" style="display:inline-block;" class="twitter">
                  <img src="<?php echo base_url();?>assets/admin/app-assets/images/twitter.png" alt="" width="40" border="0" style="height:auto;margin:2px" />
                </a>
                <!-- Social Links (Pintrest)// -->
                <a href="#pintrest-link" target="_blank" style="display:inline-block;" class="pintrest">
                  <img src="<?php echo base_url();?>assets/admin/app-assets/images/pintrest.png" alt="" width="40" border="0" style="height:auto;margin:2px" />
                </a>
                <!-- Social Links (Instagram)// -->
                <a href="#instagram-link" target="_blank" style="display:inline-block;" class="instagram">
                  <img src="<?php echo base_url();?>assets/admin/app-assets/images/instagram.png" alt="" width="40" border="0" style="height:auto;margin:2px" />
                </a>
                <!-- Social Links (Linkdin)// -->
                <a href="#linkdin-link" target="_blank" style="display:inline-block;" class="linkdin">
                  <img src="<?php echo base_url();?>assets/admin/app-assets/images/linkdin.png" alt="" width="40" border="0" style="height:auto;margin:2px" />
                </a>
              </td>
            </tr>

            <tr>
              <td align="center" valign="top" class="footerLinks">
                <!-- Use Full Links (Privacy Policy)// -->
                <p class="smlText" style="color:#313131; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:12px; font-weight:400; line-height:18px; text-align:center; margin:0; padding:0;" >
                  <a href="#" style="color:#8D6CD1;text-decoration:none" target="_blank">Privacy Policy</a> | <a href="#" style="color:#8D6CD1;text-decoration:none" target="_blank">Help</a> | <a href="#" style="color:#8D6CD1;text-decoration:none" target="_blank">About Us</a>
                </p>
              </td>
            </tr>

            <tr>
              <td align="center" valign="top" style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;" class="brandInfo">
                <!-- Information of NewsLetter (Privacy Policy)// -->
                <p class="smlText" style="color:#313131; font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:11px; font-weight:400; line-height:18px; text-align:center; margin:0; padding:0;">
                  This email was sent to you by Weekly, Inc. You are receiving this email because you Subscribe on Weekly. <br /> If you wish to unsubscribe from all future emails, please <a href="#" style="color:#8D6CD1;text-decoration:none" target="_blank">click here</a><br />

                  <br />Weekly, | 800 Broadway, Suite 1500 | New York, NY 000123, USA
                </p>
              </td>
            </tr>

            <tr>
              <td align="center" valign="top" style="padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;" class="appLinks">
                <!-- App Links (Anroid)// -->
                <a href="#Play-Store-Link" target="_blank" style="display:inline-block;" class="play-store">
                  <img src="<?php echo base_url();?>assets/admin/app-assets/images/play-store.png" alt="" width="120" border="0" style="height:auto;margin:5px" />
                </a>
                <!-- App Links (IOs)// -->
                <a href="#App-Store-Link" target="_blank" style="display:inline-block;" class="app-store">
                  <img src="<?php echo base_url();?>assets/admin/app-assets/images/app-store.png" alt="" width="120" border="0" style="height:auto;margin:5px" />
                </a>
              </td>
            </tr>
          </table>
          <!-- Content Table Close// -->
        </td>
      </tr>

      <!-- Space -->
      <tr>
        <td height="30" style="font-size:1px;line-height:1px;">&nbsp;</td>
      </tr>
    </table>
    <style type="text/css">
    /*------ Reset Style ------ */
    *{-webkit-text-size-adjust:none;-webkit-text-resize:100%;text-resize:100%;}
    table{border-spacing: 0;}
    h1, h2, h3, h4, h5, h6{display:block; Margin:0; padding:0;}
    img, a img{border:0; height:auto; outline:none; text-decoration:none;}
    body, #bodyTable, #bodyCell{height:100%; margin:0; padding:0; width:100%;}
    
    /*------ Client-Specific Style ------ */
    @-ms-viewport{width:device-width;}
    table{mso-table-lspace:0pt; mso-table-rspace:0pt;}
    p, a, li, td, blockquote{mso-line-height-rule:exactly;}
    p, a, li, td, body, table, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
    #outlook a{padding:0;}
    .ReadMsgBody{width:100%;} .ExternalClass{width:100%;}
    .ExternalClass,.ExternalClass div,.ExternalClass font,.ExternalClass p,.ExternalClass span,.ExternalClass td,img{line-height:100%;}

    /*------ Google Font Style ------ */
    [style*="Open Sans"] {font-family: 'Open Sans', Helvetica, Arial, sans-serif !important;}
    [style*="Lora"] {font-family: 'Lora', Georgia, Times, serif !important;}

    /*------ General Style ------ */
    .wrapperTable{width:100%; max-width:600px; Margin:0 auto;}

    /*------ Column Layout Style ------ */
    .oneColumn {text-align:center; font-size:0;}
    
    /*------ Images Style ------ */
    .logo img{ width:100px; height:auto; }
    .imgHero img{ width:600px; height:auto; }
    .sponsorImg img{ width:600px; height:auto; }
  </style>

  <style type="text/css">
    /*------ Media Width 480 to 640 ------ */
    @media screen and (min-width: 480px) and (max-width: 640px) {
      td[class="imgHero"] img{ width:100% !important;}
      td[class="sponsorImg"] img{ width:100% !important; }
    }
  </style>

  <style type="text/css">
    /*------ Media Width 480 ------ */
    @media screen and (max-width:480px) {
      table[class="wrapperTable"]{width:100% !important; }
      td[class="title"] h2{font-size:26px !important;line-height:34px !important;}
      td[class="imgHero"] img{ width:100% !important;}
      td[class="sponsorImg"] img{ width:100% !important; }
    }
  </style>
    <!-- Email Footer Close // -->

    <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
    </td>
  </tr>
</table>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-success">Save</button> -->
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
 <?php include('footer.php') ?>
