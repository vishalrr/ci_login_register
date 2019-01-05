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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	</head>
	<body>
	<div class="login-header">
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light cs-sign-nav">
					<div class="col-sm-6 col-6">
						<a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/logo-login.png"></a>
					</div>
					
					<div class="col-sm-6 col-6">
					
						<a class="btn-head btn btn-default sigin-btn" href="#">Sign-in</a>
					</div>
				
			</div>

			<div class="row">	
				<div class="col-sm-12 navbar navbar-expand-lg sigin-navigation">
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="about-us.php">About <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="influencers.php">Influencers</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="brand.php">Brands</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="blog.php">Blog</a>
							</li>
					
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
</div>