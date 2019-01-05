<?php $user_id = $this->session->userId2;  
$user_data = $this->Common->getData('users',array('id'=>$user_id),"","",1);
?>
<!doctype html>
<html lang="en">
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/log-css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light cs-nav">
					<div class="col-sm-6">
						<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png"></a>
					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="col-lg-6 col-12">
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="<?php echo base_url('about'); ?>">About <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url('influencers'); ?>">Influencers</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url('brand'); ?>">Brands</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url('blog'); ?>">Blog</a>
								</li>
								<li class="nav-item">
								<?php if($user_id){ ?>
									<a class="btn-head btn btn-default" href="<?php echo base_url('user'); ?>"><?php echo $user_data->name;?></a>
									
									<?php }else{ ?>
									<a class="btn-head btn btn-default" href="<?php echo base_url('Login'); ?>">Sign in</a>
									<?php } ?>
								</li>
								<?php if($user_id){ ?>
									<li class="nav-item">
										<a class="btn-head btn btn-default" href="<?php echo base_url('user/logout'); ?>">Logout</a>
									</li>
								<?php } ?>

							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>