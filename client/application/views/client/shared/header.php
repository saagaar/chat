<header id="header" class="set-scrol-bt">
    <div class="header-top" style="top:-6px" >
      <div class="wrapper">
        <div class="container">
          <div class="pull-left">
              
            <ul class="contact-bar " style="width:53px">

              <li class="hidden-xs">
                <div class="flag"> <a href="index.html#" data-target="#langmodal" data-toggle="modal"><span class="flag-icon flag-icon-us"></span></a> </div>
              </li>

                <li >
                    <button type="button" class="navbar-toggle cust-nav-head" data-toggle="collapse" data-target="#myNavbar" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar" ></span>
                    <span class="icon-bar" ></span>
                                          
                  </button>
                </li>
                
            </ul>
              
        
          
            </div>
            <div class="nav-right login-section hidden-lg  hidden-sm hidden-md " style="float:right">
            <div class="top-nav notification-row">
              <ul class="nav pull-right top-menu set-bs-menu">
                <li class='post-job' style="margin-top:5px">
                  <a href="http://clubgoodfood.com/freelance/post-job.html"> <i class="fa fa-plus-square" aria-hidden="true"></i> Post your Job </a>
                </li>
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#"> <span class="username">Jenifer Smith</span><span class="profile-ava"> <img alt="" src="<?php echo base_url('assets/'); ?>img/avatar1_small.jpg"> </span><b class="caret"></b> </a>
                  <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top"> <a href="index.html#"><i class="fa fa-user-o"></i>My Profile</a> </li>
                    <li> <a href="index.html#"><i class="fa fa-gear"></i> Settings</a> </li>
                    <li> <a href="index.html#"><i class="fa fa-question-circle"></i> Help</a> </li>
                    <li> <a href="<?php echo base_url('client/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
                  </ul>
                </li>
                  
              </ul>
            </div>
          </div>
          <div class="collapse navbar-collapse col-xs-8" id="myNavbar">
          <div class="bs-navigation" style="margin: 2px 0;">
            <ul class="nav navbar-nav">
              <li class="active">
                    <a href="MyAppointments.html"  aria-controls="myappointment">
                        <span class="noty-bubble">2
                        </span> 
                        <i aria-hidden="true" class="fa fa-calendar-times-o">
                        </i>Appointment
                    </a>
                </li>
              <li >
                <!-- <a href="" class="btn-notification dropdown-toggle" data-toggle="dropdown"> <span class="noty-bubble">15</span> <i class="fa fa-envelope-open-o" aria-hidden="true"></i>Message </a> -->
                <a href="<?php echo base_url('chat/room'); ?>" class="btn-notification"> <span class="noty-bubble"><?php 
                  $company_id=($this->session->userdata('employee_data'))['user_info']->company_id;
                  $this->load->library('general');
                  echo $this->general->get_unseen_message($company_id); ?></span> <i class="fa fa-envelope-open-o" aria-hidden="true"></i>Message </a>
              </li>
              <li>
                <a href="Offers.html" aria-controls="Offers"> <span class="noty-bubble">15</span> <i class="fa fa-bullhorn" aria-hidden="true"></i>Job Offers </a>
              </li>
              <li>
                <a href="Info.html" aria-controls="Info"> <span class="noty-bubble">2</span> <i class="fa fa-info-circle" aria-hidden="true"></i>Info </a>
              </li>
              <li>
                <a href="MyCoins.html" aria-controls="MyCoins"> <span class="noty-bubble" style="background: none;font-size: 12px;">10</span> <i class="fa fa-btc coins" aria-hidden="true"></i>Credit </a>
              </li>
              
            </ul>
              </div>
               
          </div>
            
         <div class="nav-right login-section hidden-xs  " style="float:right">
            <div class="top-nav notification-row">
              <ul class="nav pull-right top-menu set-bs-menu">
                <li class='post-job' style="margin-top:8px;">
                  <a href="http://clubgoodfood.com/freelance/post-job.html"> <i class="fa fa-plus-square" aria-hidden="true"></i> <span class="hidden-sm hidden-md">Post your Job </span></a>
                </li>
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#"> <span class="username hidden-sm hidden-md">Jenifer Smith</span><span class="profile-ava"> <img alt="" src="<?php echo base_url('assets/'); ?>img/avatar1_small.jpg"> </span><b class="caret"></b> </a>
                  <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top"> <a href="index.html#"><i class="fa fa-user-o"></i>My Profile</a> </li>
                    <li> <a href="index.html#"><i class="fa fa-gear"></i> Settings</a> </li>
                    <li> <a href="index.html#"><i class="fa fa-question-circle"></i> Help</a> </li>
                    <li> <a href="<?php echo base_url('client/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
                  </ul>
                </li>
                  
              </ul>
            </div>
          </div>
          
            
        </div>
      </div>
    </div> 
        
  </header>