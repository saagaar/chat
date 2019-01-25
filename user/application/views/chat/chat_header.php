<!DOCTYPE html>
<html>
<head>
<script src="<?=JS_URL?>chat/autobahn.js"></script>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>freelance Guru</title>
	
	<link href="https://fonts.googleapis.com/css?family=Bitter:400,700%7COpen+Sans:400,600i,700,800%7CRaleway:400,500i,700,800,900" rel="stylesheet">

	<!-- <link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css"> -->
	<link href="<?php echo base_url('assets/'); ?>css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/'); ?>css/chatboard.css" media="screen" rel="stylesheet" type="text/css">
	 <link href="<?php echo base_url('assets/'); ?>css/fileupload.css" media="screen" rel="stylesheet" type="text/css"><!--
	<link href="<?php echo base_url('assets/'); ?>css/custom.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/'); ?>css/colors.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/'); ?>css/style.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/'); ?>css/style2.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/'); ?>css/style3.css" media="screen" rel="stylesheet" type="text/css">
	
	<!-- update css indra2017 -->
	<link href="<?php echo base_url('assets/'); ?>css/main.css" media="screen" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url('assets/'); ?>img/favicon.png" rel="shortcut icon">
	<link href="<?php echo base_url('assets/'); ?>img/favicon.png" rel="icon">
	<script>
	var m_base_url = '<?=base_url()?>';
	var base_url = '<?=base_url()?>';
	var CHAT_UPLOADS='<?php echo CHAT_UPLOADS;?>';
	var c_user = 'client';

	</script>
<script src="<?=JS_URL?>jquery-2.1.0.js" type="text/javascript"></script>																																				
	

	<!-- <script src="<?=JS_URL?>jquery.cookie.js" type="text/javascript"></script> -->
	
	<script src="<?=JS_URL?>bootstrap.min.js" type="text/javascript">
	</script>

	<script src="<?=JS_URL?>fileupload.js" type="text/javascript">
	</script>
	<!-- <script src="<?=JS_URL?>plugin.js" type="text/javascript"></script> -->
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js">
	</script>
	<!-- <script src="<?=JS_URL?>index.js" type="text/javascript">
	</script> -->
	<script src="<?=JS_URL?>chat/app.js" type="text/javascript"></script>
	
	
	<!-- update js indra2017 
	<script src="<?=base_url('assets/')?>js/chat/main.js" type="text/javascript"></script>-->



	
</head>
<body>

<header class="set-scrol-bt" id="header">
		<div class="header-top">
			<div class="wrapper">
				<div class="container">
					<div class="pull-left">
						<ul class="contact-bar">
							<li>
								<div class="flag">
									<a data-target="#langmodal" data-toggle="modal" href="index.html#"><span class="flag-icon flag-icon-us"></span> English</a>
								</div>
							</li>
						</ul>
					</div><!--first-menu-->
					<div class="bs-navigation col-md-8">
						<ul>
							<li class="notifications-dropdown"><a href="index.html#"><i aria-hidden="true" class="fa fa-address-card"></i>Client ID</a></li>
							<li class="notifications-dropdown">
								<a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="noty-bubble">2</span> <i aria-hidden="true" class="fa fa-exclamation-triangle"></i>Report</a>
								<div class="dropdown-menu notifications-tabs">
									<div>
										<div class="message-list-container">
											<h4>You have 2 new Report</h4>
											<ul class="clearfix">
												<li class="clearfix"><a class="message-thumb" href="index.html#"><img alt="image" src="<?php echo base_url('assets/'); ?>img/avatar/robertoortiz.jpg"></a> <a class="message-intro" href="index.html#"><span class="message-meta">Robertoortiz</span> Nunc aliquam dolor... <span class="message-time">today at 10:20 pm</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><span class="message-letter w_bg_purple">A</span></a> <a class="message-intro" href="index.html#"><span class="message-meta">Allisongrayce</span> In hac habitasse ... <span class="message-time">today at 8:29 pm</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="notifications-dropdown"><a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="noty-bubble">2</span> <i aria-hidden="true" class="fa fa-cart-plus"></i>Sales</a></li>
							<li class="notifications-dropdown">
								<a href="<?php echo base_url('chat/room'); ?>" class="btn-notification"> <span class="noty-bubble"><?php 
                  $userid=$this->session->userdata('id');
                  $this->load->library('general');
                  echo $this->general->get_unseen_message($userid); ?></span> <i class="fa fa-envelope-open-o" aria-hidden="true"></i>Message </a>
								<!-- <div class="dropdown-menu notifications-tabs">
									<div>
										<div class="message-list-container">
											<h4>You have 15 new messages</h4>
											<ul class="clearfix">
												<li class="clearfix"><a class="message-thumb" href="index.html#"><img alt="image" src="<?php echo base_url('assets/'); ?>img/avatar/robertoortiz.jpg"></a> <a class="message-intro" href="index.html#"><span class="message-meta">Robertoortiz</span> Nunc aliquam dolor... <span class="message-time">today at 10:20 pm</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><span class="message-letter w_bg_purple">A</span></a> <a class="message-intro" href="index.html#"><span class="message-meta">Allisongrayce</span> In hac habitasse ... <span class="message-time">today at 8:29 pm</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><img alt="image" src="<?php echo base_url('assets/'); ?>img/avatar/michael-owens.jpg"></a> <a class="message-intro" href="index.html#"><span class="message-meta">Michael</span> Suspendisse ac mauris ... <span class="message-time">yesterday at 12:29 pm</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><span class="message-letter w_bg_blue">B</span></a> <a class="message-intro" href="index.html#"><span class="message-meta">Bobbyjkane</span> Vivamus lacinia facilisis... <span class="message-time">yesterday at 11:48 pm</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><img alt="image" src="<?php echo base_url('assets/'); ?>img/avatar/bobbyjkane.jpg"></a> <a class="message-intro" href="index.html#"><span class="message-meta">Bobbyjkane</span> Donec vel iaculis ... <span class="message-time">1 month ago</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><span class="message-letter w_bg_teal">C</span></a> <a class="message-intro" href="index.html#"><span class="message-meta">Chexee</span> Curabitur eget blandit...<span class="message-time">3 months ago</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><img alt="image" src="<?php echo base_url('assets/'); ?>img/avatar/coreyweb.jpg"></a> <a class="message-intro" href="index.html#"><span class="message-meta">Coreyweb</span> Etiam molestie nulla... <span class="message-time">1 year ago</span></a></li>
											</ul>
										</div>
									</div>
								</div> -->
							</li>
							<li class="notifications-dropdown"><a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="noty-bubble">2</span> <i aria-hidden="true" class="fa fa-bell"></i>Job Offer</a></li>
							<li class="notifications-dropdown"><a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="noty-bubble">2</span> <i aria-hidden="true" class="fa fa fa-info-circle"></i>Info</a></li>
						</ul>
					</div>
					<div class="pull-right login-section">
						<div class="top-nav notification-row">
							<!-- notificatoin dropdown start-->
							<ul class="nav pull-right top-menu set-bs-menu">
								<li class="dropdown">
									<ul class="dropdown-menu extended logout">
										<li style="list-style: none; display: inline">
											<div class="log-arrow-up"></div>
										</li>
										<li class="eborder-top"><a href="index.html#"><i class="fa fa-user-o"></i>My Profile</a></li>
										<li><a href="index.html#"><i class="fa fa-key"></i> Settings</a></li>
										<li><a href="index.html#"><i class="fa fa-key"></i> Logout</a></li>
									</ul>
									<a class="dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="profile-ava"><img alt="" src="<?php echo base_url('assets/'); ?>img/avatar1_small.jpg"></span> <span class="username">Jenifer Smith</span> <b class="caret"></b></a>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
<style type="text/css">


</style>

<?php
/**
 *Global error and success message display 
 
 *
 **/
	if($this->session->flashdata('error_message'))
{?>
<div class="overlay_alert alert  error"> <?php echo $this->session->flashdata('error_message');?> </div>
<script>
  setTimeout(function(){
    $('.overlay_alert').addClass('hidden');
      $('.overlay_alert').removeClass('error');
  },5000);
</script>
<?php 
}
if($this->session->flashdata('success_message'))
{
  ?>
<div class="overlay_alert alert  success"> <?php echo $this->session->flashdata('success_message');?> </div>
<script>
  setTimeout(function(){
      $('.overlay_alert').addClass('hidden');
      $('.overlay_alert').removeClass('success');
  },5000);
</script>
<?php 
} 
?>
<div class="overlay_alert alert  hidden"> </div>

<div class="main_loader img-loader hidden" > 
  <i class="fa fa-spinner fa-spin"></i> </div>
	</header>	