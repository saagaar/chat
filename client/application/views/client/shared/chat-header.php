
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>freelance Guru</title>
<script src="<?=base_url('assets/')?>js/chat/autobahn.js"></script>
<link href="https://fonts.googleapis.com/css?family=Bitter:400,700%7COpen+Sans:400,600i,700,800%7CRaleway:400,500i,700,800,900" rel="stylesheet">

<link href="<?php echo base_url('assets/'); ?>css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/'); ?>css/chatboard.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/'); ?>css/fileupload.css" media="screen" rel="stylesheet" type="text/css">
<!-- update css indra2017 -->
<link href="<?php echo base_url('assets/'); ?>css/main.css" media="screen" rel="stylesheet" type="text/css">

<link href="<?php echo base_url('assets/'); ?>img/favicon.png" rel="shortcut icon">
<link href="<?php echo base_url('assets/'); ?>img/favicon.png" rel="icon">
</head>
<body>
<!--  <link href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
 <link href="<?php echo base_url('assets/'); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
 <link href="<?php echo base_url('assets/'); ?>css/flag-icon.min.css" rel="stylesheet" type="text/css" media="all" />	 -->
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
                  $company_id=($this->session->userdata('employee_data'))['user_info']->company_id;
                  $this->load->library('general');
                  echo $this->general->get_unseen_message($company_id); ?></span> <i class="fa fa-envelope-open-o" aria-hidden="true"></i>Message </a>
								<div class="dropdown-menu notifications-tabs">
									<div>
										<!-- <div class="message-list-container">
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
	
.overlay_alert { position: fixed; bottom: 15px; width: 85%; left: 0; right: 0; margin: 0 auto; padding: 25px; z-index: 1060; text-align:center;}
.overlay_alert.error{ background: #d04545; color: #fff; border: 1px solid #d04545; box-shadow: 3px 5px 8px -1px rgba(0, 0, 0, 0.56);}
.overlay_alert.success{ background:#52ad3b; color:#ffffff; border:1px solid #52ad3b; box-shadow:3px 5px 8px -1px rgba(0, 0, 0, 0.56);}	

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
<div class="overlay_alert alert hidden "> </div>
<div class="main_loader img-loader hidden" > 
  <i class="fa fa-spinner fa-spin"></i> </div>
	</header>