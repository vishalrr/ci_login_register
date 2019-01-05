<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <title><?php if(!empty($title)){ echo $title; }else{ echo 'index'; } ?></title>
  <?php   $logo=  $this->db->get_where('site_settings',array('option_name'=>'site_logo'))->row()->option_value; 
        if(!empty($logo))
        {
        $img =   base_url().$logo; 
        }
        else
        {
        $img=  base_url().'assets/front/images/logo.png';
        } ?>
  <link rel="apple-touch-icon" href="<?php echo $img; ?>">
 <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/admin/app-assets/images/ico/favicon.png">-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
 <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/vendors.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/weather-icons/climacons.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/fonts/meteocons/style.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/charts/chartist.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/icheck/custom.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/app.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/pages/timeline.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/ui/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/pages/dashboard-ecommerce.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/plugins/forms/checkboxes-radios.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/core/colors/palette-switch.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/app-assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/app-assets/css/richtext.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/ui/dragula.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/app-assets/css/ssi-uploader.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/slideshow.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/plugins/ui/jqueryui.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/css/style.css">

  <!--link href="<?php echo base_url(); ?>assets/front/css/validin.css" rel="stylesheet"-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/employer/css/chosen.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/selects/selectivity-full.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/plugins/forms/selectivity/selectivity.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/css/pages/email-application.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/app-assets/vendors/css/forms/tags/tagging.css">

  
  
  </head>
  <style>




.dropdownt {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 256px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdownt:hover .dropdown-content {display: block;}

.alert-danger, .alert-success {  position: fixed;
        max-width: 50%;
        width: 100%;
        top: 15%;
        left: 0;
        right:0;
        margin: auto;
        z-index: 111111;
        box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.15);
        text-align: center;
      }
.alert.alert-danger{
    left: 0;
    right:0;
}


  </style>
<body class="vertical-layout vertical-menu-modern 2-columns <?php if($this->uri->segment(2)=="message" || $this->uri->segment(2)=="compose" || $this->uri->segment(2)=="inbox" || $this->uri->segment(2)=="sent" || $this->uri->segment(2)=="draft" || $this->uri->segment(2)=="trash" || $this->uri->segment(2)=="starred" || $this->uri->segment(2)=="group" || $this->uri->segment(2)=="viewmail"){ echo "email-application"; }?> menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto">
            <a class="navbar-brand" href="<?php echo base_url().'admin/dashboard';?>">
                <?php $img = $this->db->get_where('site_settings',array('option_name'=>'site_logo'))->row()->option_value; 
                if(empty($img))
                {
                ?>
              <img class="brand-logo logo-1" alt="" src="<?php echo base_url(); ?>assets/admin/app-assets/images/logo/logo.png" >
              <?php }else
              {?>
              <img class="brand-logo logo-1" alt="" src="<?php echo base_url(); ?><?= $img; ?>">
              <?php } ?>
            </a>
          </li>
          <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
		 </ul>
          <ul class="nav navbar-nav float-right">
            
             <li class="dropdown dropdown-user nav-item">
                 <?php 
                   if($this->session->userdata('userId')!='')
                   {
                  $userdetail = $this->Common->getData('tbl_admin',array('id'=>$this->session->userdata('userId')),"","",1);
                   }
                
                if($userdetail==''){ ?>
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
               
                  <span class="user-name text-bold-700">John Doe</span>
               
                <span class="avatar avatar-online">
                  <img src="<?php echo base_url(); ?>assets/admin/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
              </a>
              <?php }else{ ?>
              
               <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
               
                  <span class="user-name text-bold-700"><?php echo Ucfirst($userdetail->first_name.' '.$userdetail->last_name); ?></span>
               
                <span class="avatar avatar-online">
                    <?php if(!empty($userdetail->avatar))
                    {
                        $img= $userdetail->avatar;
                    }else
                    {
                       $img= 'assets/admin/app-assets/images/portrait/small/avatar-s-19.png';
                    } ?>
                  <img src="<?php echo base_url(); ?>/<?php echo $img; ?>" alt="avatar"><i></i></span>
              </a>
              <?php } ?>
              <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="<?php echo base_url(); ?>admin/my-account"><i class="ft-user"></i>My Account</a>
        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url(); ?>admin/logout"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
         </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        
		<li class="<?php if($this->uri->segment(2)=="dashboard"){echo "active";}?>  nav-item"><a href="<?php echo base_url(); ?>admin/dashboard"><i class="la la-home"></i><span class="menu-title">Dashboard</span></a>
        </li>
        <li class="<?php if($this->uri->segment(2)=="site-setting"){echo "active";}?> nav-item"><a href="<?php echo base_url(); ?>admin/site-setting"><i class="fa fa-cog"></i><span class="menu-title">Site Settings</span></a>
        </li>
        <!-- <li class="<?php if($this->uri->segment(3)=="industry-type"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/job/industry-type"><i class="fa fa-industry"></i><span class="menu-title">Industry Type</span></a>
		</li> -->
		<li class="<?php if($this->uri->segment(3)=="Category-type"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/job/Category-type"><i class="la la-list"></i><span class="menu-title">Categories</span></a>
		</li>
		<!-- <li class="<?php if($this->uri->segment(3)=="Qualification-type"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/job/Qualification-type"><i class="fa fa-graduation-cap"></i><span class="menu-title">Job Qualification</span></a>
		</li>
		<li class="<?php if($this->uri->segment(3)=="job_location"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/job/job_location"><i class="la la-map-marker"></i><span class="menu-title">Job Location</span></a>
		</li>
		<li class="<?php if($this->uri->segment(2)=="skills"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/skills"><i class="fa fa-cogs"></i><span class="menu-title">Skills</span></a>
		</li> -->
		<li class=" nav-item">
      <a href="javascript:void(0)">
        <i class="la la-user"></i>
        <span class="menu-title">Users</span>
      </a>
      <ul class="menu-content">
        <li class="<?php if($this->uri->segment(2)=="influencer-users"){echo "active";}?>  nav-item"><a class="menu-item" href="<?php echo base_url(); ?>admin/influencer-users">Influencer</a>
          <li class="<?php if($this->uri->segment(2)=="brands-users"){echo "active";}?>  nav-item"><a class="menu-item" href="<?php echo base_url(); ?>admin/brands-users">Brands</a></li>
        
        </li>        
      </ul>
        </li>
		<!-- <li class=" nav-item">
			<a href="javascript:void(0)">
				<i class="la la-file-text-o"></i>
				<span class="menu-title">CMS</span>
			</a>
			<ul class="menu-content">
			    <li class="<?php if($this->uri->segment(2)=="contact-us"){echo "active";}?>  nav-item"><a class="menu-item" href="<?php echo base_url(); ?>admin/contact-us">Contact Us</a></li>
				<!--li><a class="menu-item" href="auto-mail.php">Email Contents</a></li-->
			<!-- 	<li class="<?php if($this->uri->segment(2)=="content-pages"){echo "active";}?>  nav-item"><a class="menu-item" href="<?php echo base_url(); ?>admin/content-pages">Content Pages</a></li> -->
				<!--li><a class="menu-item" href="<?php echo base_url(); ?>admin/content-upload-page">CMS Upload Page</a></li-->
				<!-- <li class="<?php if($this->uri->segment(2)=="faq"){echo "active";}?>  nav-item"><a class="menu-item" href="<?php echo base_url(); ?>admin/faq">FAQ</a></li>
				<li class="<?php if($this->uri->segment(2)=="endorsements"){echo "active";}?>  nav-item"><a class="menu-item" href="<?php echo base_url(); ?>admin/endorsements">Endorsements</a></li> -->
				<!--li><a class="menu-item" href="manage-front-menu.php">Manage Frontend Menu</a></li>
				<li><a class="menu-item" href="menu-permission.php">Menu Permission</a></li>
				<li><a class="menu-item" href="manage-ad-banner.php">Manage Ad Banner</a></li-->
			<!-- </ul>
        </li> --> 
        
       <!--  <li class="<?php if($this->uri->segment(3)=="seeker-profile"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/candidate/seeker-profile"><i class="la la-user"></i><span class="menu-title">Seeker's Profile</span></a>
        </li> -->
        
        <!-- <li class=" nav-item">
			<a href="javascript:void(0)"><i class="la la-briefcase"></i><span class="menu-title">Manage Employers</span></a>
			  <ul class="menu-content">
				<li class="<?php if($this->uri->segment(3)=="index"){echo "active";}?> nav-item">
				    <a class="menu-item" href="<?php echo base_url(); ?>admin/employer/index">Employer's Profile</a>
				</li>
				<li class="<?php if($this->uri->segment(3)=="employers-posted-jobs"){echo "active";}?> nav-item">
				    <a class="menu-item" href="<?php echo base_url(); ?>admin/employer/employers-posted-jobs">Employer's Posted jobs</a>
				</li>
			
				
			  </ul>
        </li> -->
        
        <!-- <li  class="<?php if($this->uri->segment(2)=="newsletters"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/newsletters"><i class="la la-paper-plane"></i><span class="menu-title">Newsletters</span></a>
        </li> -->
       <!--  <li  class="<?php if($this->uri->segment(2)=="message"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/message"><i class="la la-envelope"></i><span class="menu-title">Messages</span></a>
        </li>
        <li  class="<?php if($this->uri->segment(2)=="message"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/template"><i class="la la-envelope"></i><span class="menu-title">Email Templates</span></a>
        </li>
        
        <li class="<?php if($this->uri->segment(2)=="job-postings"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/job-postings"><i class="la la-dollar"></i><span class="menu-title">Subscription Settings</span></a>
        </li>
        <li class="<?php if($this->uri->segment(2)=="transaction"){echo "active";}?> nav-item">
			<a href="<?php echo base_url(); ?>admin/transaction"><i class="la la-money"></i><span class="menu-title">Transactions</span></a>
        </li> -->
		
	
		
		
      </ul>
    </div>
  </div>
  