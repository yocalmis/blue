<!DOCTYPE html>
<html lang="tr">
<head>
	<title>
		<?php	if( $ayar ) :  foreach( $ayar  as $dizi ) :    ?>	
			<?php echo strip_tags($dizi["kisa_aciklama".$uz]);?>	
		<?php 	 endforeach;  endif;  ?>
	</title>
	<meta charset="UTF-8">
	<?php if( $ayar ) : foreach( $ayar  as $dizi ) : ?>	
		<meta name="description" content="<?php echo strip_tags($dizi["kisa_aciklama"]); ?>">
		<meta name="keyword" content="<?php echo strip_tags($dizi["seo_keywords"]);  ?>">
	<?php endforeach; endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php $this->load->view('favicon'); ?>
	<!-- materialize.css -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets_user/css/materialize.min.css"  media="screen,projection"/>
	<!-- master.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_user/css/master.css">
</head>
<body>
	<?php $this->load->view('header_alt'); ?>

	<main>
		<script>var getNav=document.querySelector("nav > .nav-wrapper:not(.main-menu)");window.screen.width<=768&&(getNav=document.querySelector("nav > .nav-wrapper")),getHeight=getNav.offsetHeight,document.querySelector("main").style.marginTop=getHeight+"px";</script>
		<div class="container">
			<section class="user-operation forgot-main">
				<div class="forgot-inner">
					<h5><?php echo $this->session->userdata('lng')["sfre_bslk"]; ?></h5>
					<p><?php echo $this->session->userdata('lng')["sfre_acklm"]; ?></p>

					<form action="<?php echo base_url(); ?>giris/new_pass_success_ok" method="POST" class="col s12">
						<div class="input-field">
							<input id="newPassword" name="ps" type="password">
							<label for="newPassword">
								<?php echo $this->session->userdata('lng')["yni_sfr"]; ?>
							</label>
						</div>
						<div class="input-field">
							<input id="cfmNewPassword" name="ps2" type="password">
							<input id="cfmNewPassword" name="pass" value="<?php echo $pass; ?>" type="hidden">							
							<label for="cfmNewPassword">
								<?php echo $this->session->userdata('lng')["yni_sfre_tkrr"]; ?>
							</label>
						</div>
						<p class="submit-paragraph">
							<button type="submit" id="send-pass" class="btn waves-effect submit-button">
								<?php echo $this->session->userdata('lng')["gndr_btn"]; ?>
							</button>
						</p>
					</form>

				</div>
			</section>
		</div>
	</main>
	<?php $this->load->view('footer'); ?>

	<!-- jQuery.js -->
	<script src="<?php echo base_url(); ?>assets_user/js/jquery-3.4.1.min.js"></script>
	<!-- materalize.js -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets_user/js/materialize.min.js"></script>
	<!-- function.js -->
	<script src="<?php echo base_url(); ?>assets_user/js/function.js"></script>
</body>
</html>