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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
</head>
<body>
	<header class="bg-color">
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light "> 
					
						<a class="navbar-brand" href="<?php echo base_url('user/index'); ?>"><img src="<?php echo base_url(); ?>assets/images/logo2.png"></a>
				
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
						<div class="collapse navbar-collapse navbar-width" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
								</li>
							    <li class="nav-item mt-10">
									|
								</li>								
								<li class="nav-item ">
									<a class="nav-link" href="<?php echo base_url('influencers'); ?>">Influencers</a>
								</li>
							    <li class="nav-item mt-10">
									|
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url('brand'); ?>">Brands</a>
								</li>
							    <li class="nav-item mt-10">
									|
								</li>								
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url('blog'); ?>">Blog</a>
								</li>
								<?php if($user_id){ ?>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url('user/logout'); ?>">Logout</a>
									</li>
								<?php } ?>
							</ul>
					
					</div>
				</nav>
			</div>
		</div>
	</header>