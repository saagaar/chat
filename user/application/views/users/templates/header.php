<!DOCTYPE html>
<html>
<head>
    <!-- Website Title -->
    <title>freelance Guru</title>
    <!-- Meta tag Here -->
    <meta charset="utf-8">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- /Meta tag -->
    <!-- Stylesheet -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Bitter:400,700%7COpen+Sans:400,600i,700,800%7CRaleway:400,500i,700,800,900" rel="stylesheet">
    <!-- Iclude Bootstrap -->
    <link href="<?php echo base_url('assets/users/css/bootstrap.min.css') ?>" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- /Bootstrap -->
    <link href="<?php echo base_url('assets/users/css/font-awesome.min.css') ?>" media="all" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url('assets/users/css/flag-icon.min.css'); ?>" media="all" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/users/css/plugin.css'); ?>" media="all" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/users/css/custom.css'); ?>" media="all" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/users/css/colors.css'); ?>" media="all" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/users/css/style.css'); ?>" media="all" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/users/css/style2.css'); ?>" media="all" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/users/img/favicon.png') ?>" rel="shortcut icon">
    <link href="<?php echo base_url('assets/users/img/favicon.png') ?>" rel="icon">
    <link rel="stylesheet" href="<?php echo base_url('assets/users/js/chosen/chosen.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/users/css/style3.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/users/css/header-style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/users/css/custom-9-9-2017.css'); ?>">

    <!-- /Stylesheet -->
    <!-- Inline Style -->
    <style>
    #btn_edit{
        color:black;
    }
    #btn_edit:hover{
        background-color: white;
        color:black;
    }
    .btn_edit1:hover{
        color:blue;
    }
    .btn_edit2:hover{
        color:blue;
    }
</style>
<!-- /Inline Style -->

<!-- Javascript --> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script> -->
<!--  Jquery -->
<!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->
<!-- Include Bootstrat Js -->
<script src="<?php echo base_url('assets/users/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/users/js/plugin.js') ?>" type="text/javascript"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script src="<?php echo base_url('assets/users/js/index.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/users/js/chosen/chosen.jquery.js') ?>" type="text/javascript"></script>


<script type="text/javascript">
// $(document).ready(function(){
//    alert("I want to work with you, Rohan! Please help me to contact skype.Thanks.");
// });
$(function () {
  $('#datetimepicker1').datetimepicker();
});
$(function () {
  $('#datetimepicker2').datetimepicker();
});
$(function () {
  $('#datetimepicker3').datetimepicker();
});
</script>
<script src="<?php echo base_url('assets/users/js/custom.js') ?>"></script>




<!-- /Javascript --> 
</head>
<body>
<header class="set-scrol-bt" id="header">
    <div class="header-top">
      <div class="wrapper">
        <div class="container">
    
            <!--first-menu-->
          <div class="navbar-header main-top-navbar">
            <button type="button" class="navbar-toggle collapsed pull pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <div class="mob-right-nav"></div>

          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <div class="bs-navigation col-md-8 col-sm-8 col-xs-12">
              <ul>
                <li class="notifications-dropdown">
                  <!-- <div class="flag"> -->
                    <a data-target="#langmodal" data-toggle="modal" href="index.html#">
                      <span class="flag-icon flag-icon-us">
                      </span> English
                    </a>
                    <!-- </div> -->
                  </li>

                  <li class="notifications-dropdown">

                    <div class="dropdown-menu notifications-tabs">
                      <div>   
                      </div>

                    </div>
                  </li>

                  <li class="notifications-dropdown">
                    <a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#">
                      <span class="noty-bubble">2
                      </span> 
                      <i aria-hidden="true" class="fa fa-calendar-times-o">
                      </i>Appointment
                    </a>
                  </li>
                  <li class="notifications-dropdown">
                    <!-- <a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#">
                      <span class="noty-bubble">15
                      </span> 
                      <i aria-hidden="true" class="fa fa-envelope-open-o">
                      </i>Message
                    </a> -->
                     <a href="<?php echo base_url('chat/room'); ?>" class="btn-notification"> <span class="noty-bubble"><?php 
                  $userid=$this->session->userdata('id');
                  $this->load->library('general');
                  echo $this->general->get_unseen_message($userid); ?></span> <i class="fa fa-envelope-open-o" aria-hidden="true"></i>Message </a>
                    <div class="dropdown-menu notifications-tabs">
                      <div>
                  <!--     
                   <div class="message-list-container" style="overflow: hidden;" tabindex="1">
                          <h4>You have 15 new messages
                          </h4>
                         < ul class="clearfix">
                            <li class="clearfix">
                              <a class="message-thumb" href="index.html#">
                                <img alt="image" src="<?php echo base_url('assets/img/avatar/robertoortiz.jpg') ?>">
                              </a> 
                              <a class="message-intro" href="index.html#">
                                <span class="message-meta">Robertoortiz
                                </span> Nunc aliquam dolor... 
                                <span class="message-time">today at 10:20 pm
                                </span>
                              </a>
                            </li>
                            <li class="clearfix">
                              <a class="message-thumb" href="index.html#">
                                <span class="message-letter w_bg_purple">A
                                </span>
                              </a> 
                              <a class="message-intro" href="index.html#">
                                <span class="message-meta">Allisongrayce
                                </span> In hac habitasse ... 
                                <span class="message-time">today at 8:29 pm
                                </span>
                              </a>
                            </li>
                            <li class="clearfix">
                              <a class="message-thumb" href="index.html#">
                                <img alt="image" src="<?php echo base_url('assets/img/avatar/michael-owens.jpg') ?>">
                              </a> 
                              <a class="message-intro" href="index.html#">
                                <span class="message-meta">Michael
                                </span> Suspendisse ac mauris ... 
                                <span class="message-time">yesterday at 12:29 pm
                                </span>
                              </a>
                            </li>
                            <li class="clearfix">
                              <a class="message-thumb" href="index.html#">
                                <span class="message-letter w_bg_blue">B
                                </span>
                              </a> 
                              <a class="message-intro" href="index.html#">
                                <span class="message-meta">Bobbyjkane
                                </span> Vivamus lacinia facilisis... 
                                <span class="message-time">yesterday at 11:48 pm
                                </span>
                              </a>
                            </li>
                            <li class="clearfix">
                              <a class="message-thumb" href="index.html#">
                                <img alt="image" src="<?php echo base_url('assets/img/avatar/bobbyjkane.jpg') ?>">
                              </a> 
                              <a class="message-intro" href="index.html#">
                                <span class="message-meta">Bobbyjkane
                                </span> Donec vel iaculis ... 
                                <span class="message-time">1 month ago
                                </span>
                              </a>
                            </li>
                            <li class="clearfix">
                              <a class="message-thumb" href="index.html#">
                                <span class="message-letter w_bg_teal">C
                                </span>
                              </a> 
                              <a class="message-intro" href="index.html#">
                                <span class="message-meta">Chexee
                                </span> Curabitur eget blandit...
                                <span class="message-time">3 months ago
                                </span>
                              </a>
                            </li>
                            <li class="clearfix">
                              <a class="message-thumb" href="index.html#">
                                <img alt="image" src="<?php echo base_url('assets/img/avatar/coreyweb.jpg') ?>">
                              </a> 
                              <a class="message-intro" href="index.html#">
                                <span class="message-meta">Coreyweb
                                </span> Etiam molestie nulla... 
                                <span class="message-time">1 year ago
                                </span>
                              </a>
                            </li>
                          </ul> 
                        </div>
                      </div>
                   
                  </div>-->
                </li>
                <li class="notifications-dropdown">
                  <a class="btn-notification dropdown-toggle" data-toggle="dropdown" href="index.html#">
                    <span class="noty-bubble">2
                    </span> 
                    <i aria-hidden="true" class="fa fa-bell">
                    </i>Proposal
                  </a>
                </li>
                <li class="notifications-dropdown">
                  <a class="btn-notification dropdown-toggle" href="newinfo.html">
                    <span class="noty-bubble">2
                    </span> 
                    <i aria-hidden="true" class="fa fa-question-circle">
                    </i>Info
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4">
              <div class="pull-right login-section">
                <div class="top-nav notification-row">
                  <!-- notificatoin dropdown start-->
                  <ul class="nav pull-right top-menu set-bs-menu">
                    <li>

                      <div class="main-menu" id="menu">
                        <ul>
                          <li>
                            <a href="http://myservicescout.de/postjob">
                              <i aria-hidden="true" class="fa fa-plus-square">
                              </i> Post your Job
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="index.html#">
                        <span class="profile-ava">
                          <img alt="" src="<?php echo base_url('assets/users/img/avatar1_small.jpg') ?>">
                        </span> 
                        <?php /* ?>
                        <span class="username">
                          <!-- Jenifer Smith -->
                          <?php echo $aside_userinfo['username']; ?>
                        </span> 
                        <?php */ ?>
                        <b class="caret">
                        </b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                        <li style="list-style: none; display: inline">
                          <div class="log-arrow-up">
                          </div>
                        </li>
                        <li class="eborder-top">
                          <a href="index.html#">
                            <i class="fa fa-user-o">
                            </i>My Profile
                          </a>
                        </li>
                        <li>
                          <a href="index.html#">
                            <i class="fa fa-question-circle">
                            </i> Help
                          </a>
                        </li>
                        <li>
                          <a href="index.html#">
                            <i class="fa fa-puzzle-piece">
                            </i> Be Partner
                          </a>
                        </li>
                        <li>
                          <a href="index.html#">
                            <i class="fa fa-cogs">
                            </i> Settings
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo base_url('auth/logout') ?>">
                            <i class="fa fa-sign-out">
                            </i> Logout
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- user login dropdown end -->
                  </ul>
                  <!-- notificatoin dropdown end-->
                </div>
              </div>
            </div>

            <!--fm-end-->
          </div>
        </div>
      </div>
    </div>
  </header>        

<nav class="navbar navbar-default new-opp-top-nav">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.html" class='brand-color'> <img src="<?php echo base_url('assets/users/img/header/logo.png') ?>" /> </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right">
        <li class="profile"><a class="btn btn-default" href="#" data-toggle="modal" data-target="#topNavSearchJobModal">Search For Jobs</a></li>
        <li class="profile"><a href="#" data-title="View" data-toggle="modal" onclick="viewmyjob()"><i class="fa fa-search" aria-hidden="true"></i></a></li>
        <li class="signout"><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i></a></li>
      </ul>

    </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>