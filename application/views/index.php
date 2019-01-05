<?php 
include('header.php'); $user_id = $this->session->userId2;
?>

<div class="banner home-pad">
	<div class="cover-wrap">
		<div class="inner-div">
			<h1>Get onboard with<br/> Influencer Marketing?</h1>
			<ul class="banner-btns">
				<?php if(!$user_id){ ?>
				<li><a href="<?php echo base_url('Influencer-register'); ?>" class="btn btn-default">Influencer</a></li>
				<li><a href="<?php echo base_url('Brand-register'); ?>" class="btn btn-default">Brand</button></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>

<?php 
include('footer.php');
?>