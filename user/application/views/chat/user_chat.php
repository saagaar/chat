<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>freelance Guru</title>
	<script src="<?=base_url('assets/')?>js/autobahn.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Bitter:400,700%7COpen+Sans:400,600i,700,800%7CRaleway:400,500i,700,800,900" rel="stylesheet">

	<!-- <link href="<?=base_url('assets/user/')?>css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css"> -->
	<link href="<?=base_url('assets/user/')?>css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
	<!-- <link href="<?=base_url('assets/user/')?>css/flag-icon.min.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/user/')?>css/plugin.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/user/')?>css/custom.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/user/')?>css/colors.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/user/')?>css/style.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/user/')?>css/style2.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/user/')?>css/style3.css" media="screen" rel="stylesheet" type="text/css"> -->

	<!-- update css indra2017 -->
	<link href="<?=base_url('assets/user/')?>css/fileupload.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/user/')?>css/chatboard.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/user/')?>css/main.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/user/')?>css/responsive.css" media="screen" rel="stylesheet" type="text/css">

	<link href="<?=base_url('assets/user/')?>img/favicon.png" rel="shortcut icon">
	<link href="<?=base_url('assets/user/')?>img/favicon.png" rel="icon">

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
							<li class="notifications-dropdown"><a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="noty-bubble">10</span> <i aria-hidden="true" class="fa fa-calendar-times-o"></i> Appointment</a></li>
							<li class="notifications-dropdown">
								<a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="noty-bubble">15</span> <i aria-hidden="true" class="fa fa-envelope-open-o"></i>Message</a>
								<div class="dropdown-menu notifications-tabs">
									<div>
										<div class="message-list-container">
											<h4>You have 15 new messages</h4>
											<ul class="clearfix">
												<li class="clearfix"><a class="message-thumb" href="index.html#"><img alt="image" src="<?=base_url('assets/user/')?>img/avatar/robertoortiz.jpg"></a> <a class="message-intro" href="index.html#"><span class="message-meta">Robertoortiz</span> Nunc aliquam dolor... <span class="message-time">today at 10:20 pm</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><span class="message-letter w_bg_purple">A</span></a> <a class="message-intro" href="index.html#"><span class="message-meta">Allisongrayce</span> In hac habitasse ... <span class="message-time">today at 8:29 pm</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><img alt="image" src="<?=base_url('assets/user/')?>img/avatar/michael-owens.jpg"></a> <a class="message-intro" href="index.html#"><span class="message-meta">Michael</span> Suspendisse ac mauris ... <span class="message-time">yesterday at 12:29 pm</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><span class="message-letter w_bg_blue">B</span></a> <a class="message-intro" href="index.html#"><span class="message-meta">Bobbyjkane</span> Vivamus lacinia facilisis... <span class="message-time">yesterday at 11:48 pm</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><img alt="image" src="<?=base_url('assets/user/')?>img/avatar/bobbyjkane.jpg"></a> <a class="message-intro" href="index.html#"><span class="message-meta">Bobbyjkane</span> Donec vel iaculis ... <span class="message-time">1 month ago</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><span class="message-letter w_bg_teal">C</span></a> <a class="message-intro" href="index.html#"><span class="message-meta">Chexee</span> Curabitur eget blandit...<span class="message-time">3 months ago</span></a></li>
												<li class="clearfix"><a class="message-thumb" href="index.html#"><img alt="image" src="<?=base_url('assets/user/')?>img/avatar/coreyweb.jpg"></a> <a class="message-intro" href="index.html#"><span class="message-meta">Coreyweb</span> Etiam molestie nulla... <span class="message-time">1 year ago</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="notifications-dropdown"><a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="noty-bubble">8</span> <i aria-hidden="true" class="fa fa-bell"></i>Job Offer</a></li>
							<li class="notifications-dropdown"><a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="noty-bubble">2</span> <i aria-hidden="true" class="fa fa-question-circle"></i>Info</a></li>
							<li class="notifications-dropdown"><a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="noty-bubble">10</span> <i class="fa fa-btc coins" aria-hidden="true"></i>Credit</a></li>
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
									<a class="dropdown-toggle" data-toggle="dropdown" href="index.html#"><span class="profile-ava"><img alt="" src="<?=base_url('assets/user/')?>img/avatar1_small.jpg"></span> <span class="username">Jenifer Smith</span> <b class="caret"></b></a>

								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="wrapper">
		<div class="container">
			<div class="desh-content">
				<div class="row">
					<div class="afix-content client-desh">


<div class="sidebar-afix affix nicescroll-rails client-desh-left" style="border-right: 2px solid #E0E4DD;">
							<div class="col-sm-12 col-xs-12 col-md-12 no-padding">
								<div class="main-content">
									<div class="tab-section">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="fixed-left">
													<div class="form-group searching-box">
														<input type="email" class="form-control" placeholder="Search Documents">
														<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
													</div>
													<div class="searching-box-type searchbox-type">
														<ul>
															<li>
																<a href="#tab_default_1" data-type="all" data-toggle="tab">
																	<i class="fa fa-link" aria-hidden="true"></i>
																</a>
															</li>
															<li>
																<a href="#tab_default_2" data-type="img" data-toggle="tab">
																	<i class="fa fa-picture-o" aria-hidden="true"></i>
																</a>
															</li>
															<li>
																<a href="#tab_default_3" data-type="docx" data-toggle="tab" >
																	<i class="fa fa-file-word-o" aria-hidden="true"></i>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 search-result">
												<div class="bhoechie-tab-menu menubr">
													<div class="list-group">
															<div class="tab-content">
																<div class="tab-pane" id="tab_default_1">
																	<div class="padding10">
																		<div class="mybox">
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
																		    
																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		</div>
																	</div>
																</div>


																<div class="tab-pane" id="tab_default_2">
																	<div class="padding10">	
																	<div class="mybox">
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
																		    
																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		</div>
																	</div>
																</div>

																<div class="tab-pane" id="tab_default_3">
																	<div class="padding10">
																		
																		<div class="mybox">
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="img/doc.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Title <span class="pull-right">17:30</span></h4>
																		    
																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="img/doc.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Title <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="img/doc.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Title <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		</div>

																	</div>
																</div>



															</div>	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


















<!--

						<div class="sidebar-afix affix nicescroll-rails client-desh-left" style="border-right: 2px solid #E0E4DD;">
							<div class="col-sm-12 col-xs-12 col-md-12 no-padding">
								<div class="main-content">
									<div class="tab-section">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="fixed-left">
													<div class="new-chat">
														<div class="avatar">
															<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
															<span class="online">●</span>
														</div>
														<div class="status">
															<ul>
																<li>
																	<a href="#" class="active">
																		<i class="fa fa-address-book-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
													</div>
													<div class="form-group searching-box" style="border:none;">
														<input type="email" class="form-control" placeholder="Search Documents">
														<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="col-md-12 col-sm-12 col-xs-12 search-result">
												<h5 class="jobtitle">Job Title</h5>
												<div class="bhoechie-tab-menu menubr">
													<div class="list-group">

														<ul class=" companylist">
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>

													
													</div>
												</div>
											</div>
											 <div class="col-md-12 col-sm-12 col-xs-12 search-result" style="margin:0px;">
												<h5 class="jobtitle">Job Title</h5>
												<div class="bhoechie-tab-menu menubr">
													<div class="list-group">
														<ul class=" companylist">
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	<h6>15.07.2017</h6>
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div> 
										</div>
									</div>
								</div>
							</div>
						</div>
-->





						<div class="col-md-9 col-sm-9 col-xs-9 pull-right no-padding">
							<div class="border-box">
								<div class="main-content">
									<div class="tab-section">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container main-box">
												<div class=" bhoechie-tab">
													<div class="bhoechie-tab-content">
														<div>
															<ul class="nav nav-tabs mainnav" role="tablist">
																<li style="border-left:1px solid #e0e4dd;" role="presentation"><a  aria-controls="Profile" data-toggle="tab" href="index.html#Profile" role="tab"><i class="fa fa-id-card-o" aria-hidden="true"></i> User Profile</a></li>
																<!-- <li style="border-left:1px solid #e0e4dd;" role="presentation"><a  aria-controls="Profile" data-toggle="tab" href="index.html#Profile" role="tab"><i class="fa fa-id-card-o" aria-hidden="true"></i> Client Profile</a></li> -->
																<li role="presentation"><a aria-controls="Statics" data-toggle="tab" href="index.html#Statics" role="tab"><i class="fa fa-terminal" aria-hidden="true"></i> Job Details</a></li>
																<li class=" <?php if($view=='chat') echo ' in active';?>" role="presentation"><a aria-controls="chatHistory" class="chatHistoryTab"  data-toggle="tab" href="<?php echo base_url().'index.php/message/chat/user'?>" role="tab"><i class="fa fa-comments-o" aria-hidden="true"></i> Chat History</a></li>
															</ul>
															<div class="tab-content">
																<div class="tab-pane active" id="Statics" role="tabpanel">
																</div>
																<div class="tab-pane" id="Portfolio" role="tabpanel">
																</div>
																<div class="tab-pane" id="OurFollower" role="tabpanel">
																</div>
																<div class="tab-pane" id="Profile" role="tabpanel">
																	<div class="tab-main-content">
																		<div class="row">
																			<div class="col-md-12 col-sm-12 col-xs-12">
																				<div class="picprofile" style="background-image:url(<?=base_url('assets/user/')?>img/index.jpg)">
																					<!--
																					<div class="picgraycolor">
																						<input id="imgupload" style="display:none" type="file"><i aria-hidden="true" class="fa fa-camera caproimg1" onclick="$('#imgupload').trigger('click'); return false;"></i>
																					</div>
																					-->
																					<div class="imgusersa imgusersa-circle" style="">
																						<div class="framesa" style="background-image:url(<?=base_url('assets/user/')?>img/pro.jpg)">
																							<!--
																							<div class="upload">
																								<input id="imgupload2" style="display:none" type="file"><i aria-hidden="true" class="fa fa-camera caproimg" onclick="$('#imgupload2').trigger('click'); return false;"></i>
																							</div>
																							-->
																						</div>
																					</div>
																					<h2 class="card-title">Pamela Anderson</h2>
																				</div>
																				<div class="main-content">
																					<div class="tab-section">
																						<div class="row">
																							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																								<div class=" bhoechie-tab">
																									<div class="bhoechie-tab-content active">
																										<div>
																											<ul class="nav nav-tabs subnav" role="tablist">
																												<li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#myprofile" role="tab"><i aria-hidden="true" class="fa fa-briefcase"></i>Current Job</a></li>
																												<li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#payment" role="tab"><i aria-hidden="true" class="fa fa-pencil-square-o"></i>Current Contracts</a></li>
																												<li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#compsaswda" role="tab"><i aria-hidden="true" class="fa fa-star-half-o"></i>Reviews</a></li>
																												<!-- <li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#ownerinfo" role="tab"><i aria-hidden="true" class="fa fa-facebook"></i>Social Logins</a></li>
																												<li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#Securityques" role="tab"><i aria-hidden="true" class="fa fa-shield"></i>Security Questions</a></li> -->
																											</ul>
																											<div class="tab-content">
																												<div class="tab-pane active" id="myprofile" role="tabpanel">
																												</div>
																												<div class="tab-pane" id="payment" role="tabpanel">
																												</div>
																												<div class="tab-pane" id="compsaswda" role="tabpanel">
																												</div>
																												<div class="tab-pane" id="ownerinfo" role="tabpanel">
																												</div>
																												<div class="tab-pane" id="Securityques" role="tabpanel">
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																<!-- CHAT HISTORY -->
																<?php if($view=='chat'):?>
																<!-- CHAT HISTORY -->
																<div class="tab-pane <?php if($view=='chat') echo 'active';?>" id="chatHistory" role="tabpanel">
																<input type="hidden" id="chatroomid" value="<?php echo $chatroomid;?>">
																	
																	<div class="chatHistory">
																	<?php 
																	if($chathistory):
																	 $user= $chathistory[0]->sender_id;
																	 $sender=$chathistory[0]->sender;
																	foreach(array_reverse($chathistory) as $eachchat):	
																		if($user==$eachchat->sender_id && $sender==$eachchat->sender):
																			
																	?>
																			<div class="col-md-12">

																			<div class="message_send clearfix">
																			<div class="post_avatar ">
																				<div class="post_avatar_link" style="background-image: url(https://66.media.tumblr.com/avatar_a648d19f0830_64.png);"><span class="online">●</span>
																				</div>
																			</div>
																			
																				<p>
																				<?php 
																					if($eachchat->type=='1') 
																					{ 
																						
																					?>
																						<div class="message_details text_message">
																							<p><?php echo  $eachchat->text;?></p>
																						</div>
																					<?php
																					}
																					else 
																					{
																						$ext='';
																						$splitfilename=explode('.',$eachchat->url);
																					 	$ext=end($splitfilename);
																						if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif')
																						{
																						?>
																						<div class="message_details img_message">
																							<a href="<?php echo base_url().'assets/upload/'.$eachchat->url;?> download" download>
																					         <img id="chatImg" src="<?php echo base_url().'assets/upload/'.$eachchat->url;?>" alt="image-chat" width="300" height="200">
																					         </a>
																					     </div>
									         										<?php
																						}
																						else
																						{
																							
																						?>
																						<div class="message_details">
																							<a href="<?php echo base_url().'assets/upload/'.$eachchat->url;?> download" download>
																					         <?php echo $eachchat->url;?>
																					         </a>
																					     </div>
																					    <?php
																						}
																					}
																				?>
																					
																				</p>
																			
																			</div>
																			</div>

																	<?php 
																		else:
																	?>
																		<div class="col-md-12">

																			<div class="message_received clearfix">
																			<div class="post_avatar ">
																				<div class="post_avatar_link" style="background-image: url(https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif);"><span class="online">●</span>
																				</div>
																			</div>
																			
																				<p>
																				<?php 
																					if($eachchat->type=='1') 
																					{ 
																					?>
																						<div class="message_details text_message">
																							<p><?php echo  $eachchat->text;?></p>
																						</div>
																					<?php
																					}
																						
																					else 
																					{
																						$ext='';
																						$splitfilename=explode('.',$eachchat->url);
																						$ext=end($splitfilename);
																						if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif')
																						{
																							 
																						?>
																						<div class="message_details img_message">
																							<a href="<?php echo base_url().'assets/upload/'.$eachchat->url;?> download" download>
																					         <img id="chatImg" src="<?php echo base_url().'assets/upload/'.$eachchat->url;?>" alt="Trolltunga, Norway" width="300" height="200">
																					         </a>
																					    </div>
									         										<?php
																						}
																						else
																						{
																							
																						?>
																						<div class="message_details">
																							<a href="<?php echo base_url().'assets/upload/'.$eachchat->url;?> download" download>
																					         <?php echo $eachchat->url;?>
																					         </a>
																					    </div>
																					    <?php
																						}
																					}
																				?>
																					
																				</p>
																			
																			</div>
																			</div>

																	<?php
																		endif;
																	endforeach;
																	else:
																	?>
																		No chat history
																	<?php 
																	endif;
																	?>
																	</div>
																	
																</div>
															<?php endif;?>
																<!-- /.CHAT HISTORY -->
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<footer style="border: 2px solid #E0E4DD;">
									<div class="container">
										<div class="row">
											<div class="col-md-10 col-xs-10" style="padding:0 0px 0px 10px;">
												<form method="post" id="chat-form">
													<div class="form-group message-box">
														<textarea class="form-control" rows="1" name="message" id="message" placeholder="Message"></textarea>
														<button type="submit" style="appearance: none;-webkit-appearance: none;-moz-appearance: none;outline: none;border: 0;background: transparent;">
														<i class="fa fa-paper-plane" aria-hidden="true"></i>
														</button>
													</div>
												</form>
											</div>
											<div class="col-md-2 col-xs-2 upload-box text-center">
												<button id="open_btn" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
											</div>
										</div>
									</div>
								</footer>
							</div>
						</div>

							<div class="sidebar-afix affix nicescroll-rails client-desh" style="border-left: 2px solid #E0E4DD;">
							<div class="col-sm-12 col-xs-12 no-padding">
								<div class="main-content">
									<div class="tab-section">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="fixed-right">
													<div class="new-chat">
														<div class="avatar">
															<img src="img/ashi.jpg" alt="...">
															<span class="online">●</span>
														</div>
														<div class="status">
															<ul>
																<li>
																	<a href="#" class="active">
																		<i class="fa fa-address-book-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
													</div>
													<div class="form-group searching-box" style="border:none;">
														<input type="email" class="form-control" placeholder="Search Documents">
														<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
													</div>
												</div>
											</div>
											


											<div class="col-md-12 col-sm-12 col-xs-12 search-result">
												<h5 class="jobtitle">Job Title</h5>
												<div class="bhoechie-tab-menu menubr">
													<div class="list-group">

														

														<ul class=" companylist">
															<li class="company">
																<div class="avatar">
																	<img src="img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	<!-- <h6>15.07.2017</h6> -->
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Hold</a></li>
																			<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Deny</a></li>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	<!-- <h6>15.07.2017</h6> -->
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Hold</a></li>
																			<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Deny</a></li>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	<!-- <h6>15.07.2017</h6> -->
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Hold</a></li>
																			<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Deny</a></li>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															
															
														</ul>
													</div>
												</div>
											</div>

											<div class="col-md-12 col-sm-12 col-xs-12 search-result" style="margin:0px;">
												<h5 class="jobtitle">Job Title</h5>
												<div class="bhoechie-tab-menu menubr">
													<div class="list-group">
															

														
														<ul class=" companylist">
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																		</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="<?=base_url('assets/user/')?>img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
																			<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>


														 <ul class=" companylist">
															<li class="company">
																<div class="avatar">
																	<img src="img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Hold</a></li>
																			<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Deny</a></li>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Hold</a></li>
																			<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Deny</a></li>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Hold</a></li>
																			<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Deny</a></li>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Hold</a></li>
																			<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Deny</a></li>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Hold</a></li>
																			<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Deny</a></li>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
																		</ul>
																	</div>
																</div>
															</li>
															<li class="company">
																<div class="avatar">
																	<img src="img/ashi.jpg" alt="...">
																	<span class="online">●</span>
																</div>
																<div class="details">
																	<h5>Company Name</h5>
																	
																</div>
																<span class="notification">2</span>
																<div class="notifications-dropdown">
																	<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
																	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
																	</a>
																	<div class="dropdown-menu notifications-tabs">
																		<ul>
																			<li><a href="#"><i class="fa fa-pause" aria-hidden="true"></i> Hold</a></li>
																			<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Deny</a></li>
																			<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
																			<li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul> 
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="sidebar-afix affix nicescroll-rails client-desh" style="border-left: 2px solid #E0E4DD;">
							<div class="col-sm-12 col-xs-12 col-md-12 no-padding">
								<div class="main-content">
									<div class="tab-section">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="fixed-right">
													<div class="form-group searching-box ">
														<input type="email" class="form-control" placeholder="Search Documents">
														<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
													</div>
													<div class="searching-box-type">
														<ul>
															<li>
																<a href="#tab_default_1" data-toggle="tab">
																	<i class="fa fa-link" aria-hidden="true"></i>
																</a>
															</li>
															<li>
																<a href="#tab_default_2" data-toggle="tab">
																	<i class="fa fa-picture-o" aria-hidden="true"></i>
																</a>
															</li>
															<li>
																<a href="#tab_default_3" data-toggle="tab">
																	<i class="fa fa-file-word-o" aria-hidden="true"></i>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-sm-12 col-xs-12 search-result">
												<div class="bhoechie-tab-menu menubr">
													<div class="list-group">
														<div class="tab-content">
																<div class="tab-pane active" id="tab_default_1">

																	<div class="padding10">
																		<div class="mybox">
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="<?=base_url('assets/user/')?>img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>

																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="<?=base_url('assets/user/')?>img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="<?=base_url('assets/user/')?>img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		</div>
																	</div>


																</div>
																<div class="tab-pane" id="tab_default_2">
																	<div class="padding10">
																	<div class="mybox">
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="<?=base_url('assets/user/')?>img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>

																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="<?=base_url('assets/user/')?>img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="<?=base_url('assets/user/')?>img/app.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		</div>
																	</div>
																</div>
																<div class="tab-pane" id="tab_default_3">
																	<div class="padding10">

																		<div class="mybox">
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="<?=base_url('assets/user/')?>img/doc.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Title <span class="pull-right">17:30</span></h4>

																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="<?=base_url('assets/user/')?>img/doc.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Title <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		<div class="media">
																		  <div class="pull-left">
																		    <a href="#">
																		      <img class="media-object" src="<?=base_url('assets/user/')?>img/doc.png" alt="...">
																		    </a>
																		  </div>
																		  <div class="media-body">
																		    <h4 class="media-heading">Title <span class="pull-right">17:30</span></h4>
																		  </div>
																		</div>
																		</div>

																	</div>
																</div>
															</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<div aria-labelledby="myModalLabel" class="modal fade" id="langmodal" role="dialog" tabindex="-1">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title" id="myModalLabel">Select your Favorite Language</h4>
					</div>
					<div class="modal-body text-center">
						<a class="flags activeflag" href="#">
							<div class="flag-icon flag-icon-us flag-big"></div><br>
							English<span><i class="fa fa-fw fa-check-circle"></i></span>
						</a>
						<a class="flags" href="#">
							<div class="flag-icon flag-icon-in flag-big"></div><br>
							Hindi<span><i class="fa fa-fw fa-check-circle"></i></span>
						</a>
						<a class="flags" href="#">
							<div class="flag-icon flag-icon-ch flag-big"></div><br>
							China<span><i class="fa fa-fw fa-check-circle"></i></span>
						</a>
						<a class="flags" href="#">
							<div class="flag-icon flag-icon-af flag-big"></div><br>
							Afria<span><i class="fa fa-fw fa-check-circle"></i></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div aria-labelledby="myModalLabel" class="modal fade" id="langmodal" role="dialog" tabindex="-1">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title" id="myModalLabel">Select your Favorite Language</h4>
					</div>
					<div class="modal-body text-center">
						<a class="flags activeflag" href="index.html#"></a>
						<div class="flag-icon flag-icon-us flag-big"></div><br>
						English<span><i class="fa fa-fw fa-check-circle"></i></span> <a class="flags" href="index.html#"></a>
						<div class="flag-icon flag-icon-in flag-big"></div><br>
						Hindi<span><i class="fa fa-fw fa-check-circle"></i></span> <a class="flags" href="index.html#"></a>
						<div class="flag-icon flag-icon-ch flag-big"></div><br>
						China<span><i class="fa fa-fw fa-check-circle"></i></span> <a class="flags" href="index.html#"></a>
						<div class="flag-icon flag-icon-af flag-big"></div><br>
						Afria<span><i class="fa fa-fw fa-check-circle"></i></span>
					</div>
				</div>
			</div>
		</div>
	</div>
		<script>
		var m_base_url = '<?=base_url()?>';
		var c_user = 'user';
		var messagesList;
	</script>
	<script src="<?=base_url('assets/user/')?>js/jquery.min.js" type="text/javascript"></script>
	<script src="<?=base_url('assets/')?>js/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?=base_url('assets/')?>js/app.js" type="text/javascript"></script>
	<script src="<?=base_url('assets/user/')?>js/plugin.js" type="text/javascript"></script>
	<script src="<?=base_url('assets/user/')?>js/bootstrap.min.js" type="text/javascript">
	</script>
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js">
	</script>
	<script src="<?=base_url('assets/user/')?>js/index.js" type="text/javascript">
	</script>
	<!-- update js indra2017 -->
	<script src="<?=base_url('assets/user/')?>js/main.js" type="text/javascript"></script>

	<script src="<?=base_url('assets/user/')?>js/fileupload.js" type="text/javascript"></script>
	<script type="text/javascript">

			var messagesList = $('.chatHistory');
        $("#open_btn").click(function() {
        	var chatroom=$("#chatroomid").val();
			
            $.FileDialog({multiple: true}).on('files.bs.filedialog', function(ev) {
                var files = ev.files;
                var text = "";
                files.forEach(function(f) {
					// mfiles
					var formData = new FormData();
					formData.append('file',f);

					text += f.name + "<br/>";

					$.ajax({
					    url: m_base_url+'index.php/message/upload_file',
					    type: 'POST',
					    async: false,
					    data: formData,
					    processData: false,
					    contentType: false,
					    success:function(data){
							var message = {
								url: data,
								sender: 2,
								receiver: 2,
								jobid:1,
								type: 'file',
								send_by:'u',
								chatroom:chatroom
							};
							// conn.send(JSON.stringify(message));
							conn.publish(chatroom,message,true);
							if (data.match(/.(jpg|jpeg|png|gif)$/i))
	    					{
								messagesList.append(
									'<div class="col-md-12">' +
									   '<div class="message_send clearfix">' +

									      '<div class="post_avatar ">'+
											'<div class="post_avatar_link" style="background-image: url(https://66.media.tumblr.com/avatar_a648d19f0830_64.png);"><span class="online">●</span></div>'+
											'</div>'+

									      '<div class="message_details img_message">' +
									         '<img id="chatImg" src="'+m_base_url+'assets/upload/'+data+'" alt="Trolltunga, Norway" width="300" height="200">' +
									         '<!-- The Modal -->' +
									         '<div id="chatImgModal" class="modal">' +
									            '<img class="modal-content" id="imgurl" style="overflow: hidden; outline: none;" tabindex="2">' +
									            '<div id="caption"></div>' +
									            '<span class="close">×</span>' +
									            '<div id="ascrail2003" class="nicescroll-rails" style="width: 5px; z-index: 1; cursor: default; position: absolute; top: 0px; left: 275px; height: 180px; display: none;">' +
									               '<div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>' +
									            '</div>' +
									            '<div id="ascrail2003-hr" class="nicescroll-rails" style="height: 5px; z-index: 1; top: 175px; left: 0px; position: absolute; cursor: default; display: none;">' +
									               '<div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>' +
									            '</div>' +
									         '</div>' +
									      '</div>' +
									   '</div>' +
									'</div>'
								);
							}
							else
							{
								messagesList.append(
								'<div class="col-md-12">'+
									'<div class="message_send clearfix">'+
										'<div class="post_avatar ">'+
											'<div class="post_avatar_link" style="background-image: url(https://66.media.tumblr.com/avatar_a648d19f0830_64.png);"><span class="online">●</span></div>'+
										'</div>'+
										'<div class="message_details text_message">'+
											'<p><a href="'+m_base_url+'assets/upload/'+data.replace(/(\r\n|\n|\r)/gm," ")+'" download>'+data.replace(/(\r\n|\n|\r)/gm," ")+'</a></p>'+
										'</div>'+
									'</div>'+
								'</div>'
								);
							}

							var scrollBottom = $(window).scrollTop() + $(window).height();
							$('body, html').animate({scrollTop:scrollBottom});

					    }
					});
				});
                $("#output").html(text);
            }).on('cancel.bs.filedialog', function(ev) {
                $("#output").html("Cancelled!");
            });
        });
	</script>
	<script>
	// $(function(){
		var chatroom=$("#chatroomid").val();

       				 var conn = new ab.Session('ws://127.0.0.1:8081',
		        function() {
		            conn.subscribe(chatroom, function(topic, data) {

		            	console.log('connected to chat room');
		            	var image_url = m_base_url+'assets/upload/'+data.url;
		            	
		                if (data.type=='message')
				    	{
					        messagesList.append(
								'<div class="col-md-12">'+
								'<div class="message_received clearfix">'+
									'<div class="post_avatar ">'+
										'<div class="post_avatar_link" style="background-image: url(https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif);"><span class="online">●</span></div>'+
									'</div>'+
									'<div class="message_details text_message">'+
										'<p>'+data.text+'</p>'+
									'</div>'+
								'</div>'+
							'</div>'
							);
						}
						else if (data.type=='file' && data.url.match(/.(jpg|jpeg|png|gif)$/i))
						{

							messagesList.append(
												'<div class="col-md-12">' +
												   '<div class="message_received clearfix">' +

												      '<div class="post_avatar ">'+
														'<div class="post_avatar_link" style="background-image: url(https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif);"><span class="online">●</span></div>'+
														'</div>'+

												      '<div class="message_details img_message">' +
												      	'<a href="'+m_base_url+'assets/upload/'+data.url+'" download>'+
												        	 '<img id="chatImg" src="'+m_base_url+'assets/upload/'+data.url+'" alt="Trolltunga, Norway" width="300" height="200">' +
												         '</a>'+
												         '<!-- The Modal -->' +
												      '</div>' +
												   '</div>' +
												'</div>'
											);
							
						}
						else
						{
							messagesList.append(
							'<div class="col-md-12">'+
								'<div class="message_received clearfix">'+
									'<div class="post_avatar ">'+
										'<div class="post_avatar_link" style="background-image: url(https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif);"><span class="online">●</span></div>'+
									'</div>'+
									'<div class="message_details text_message">'+
										'<p><a href="'+image_url+'" download>'+data.url+'</a></p>'+
									'</div>'+
								'</div>'+
							'</div>'
							);	
						}

		            });
		        },
		        function() {
		            console.warn('WebSocket connection closed');
		        },

		        {'skipSubprotocolCheck': true}
		    );
	// });
        // Get the modal
        // var modal = document.getElementById('chatImgModal');

        // // Get the image and insert it inside the modal - use its "alt" text as a caption
        // var img = document.getElementById('chatImg');
        // var modalImg = document.getElementById("img01");
        // var captionText = document.getElementById("caption");

        // var span = document.getElementsByClassName("close")[0];
        // img.onclick = function(){
        //     modal.style.display = "block";
        //     modalImg.src = this.src;
        //     captionText.innerHTML = this.alt;
        //     span.onclick = function() {
        //         modal.style.display = "none";
        //     }
        // }

        // Get the <span> element that closes the modal


        // When the user clicks on <span> (x), close the modal

	</script>

</body>
</html>