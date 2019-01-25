<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bitter:400,700%7COpen+Sans:400,600i,700,800%7CRaleway:400,500i,700,800,900" rel="stylesheet" />
  <link href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url('assets/'); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url('assets/'); ?>css/flag-icon.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url('assets/'); ?>css/plugin.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url('assets/'); ?>css/custom.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url('assets/'); ?>css/colors.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>img/favicon.png" />
  <link rel="icon" href="<?php echo base_url('assets/'); ?>img/favicon.png" />
  <link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2708/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="all" />
  <script>
     var base_url = '<?php echo base_url() ?>';
  </script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2708/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<style>
		.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #ffffff;
}
            .navbar-inverse .navbar-nav>.active>a{
            color:#9d9d9d
        }

a.list-group-item:hover{
    background-color: #f3f3f3!important
}
	div.bhoechie-tab-menu div.list-group li.active>a {
    border-bottom: 3px solid #9ac034;
    color: #9ac034;
    font-weight: 600;
    padding-left: 5px;
    padding-bottom: 11px;
}


</style>



</head>

<body data-base_url="<?php echo base_url(); ?>">
  <?php $this->load->view('client/shared/header'); ?>

   <nav class="navbar navbar-inverse new-nav  " >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#new-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <div class="logo">
            <a href="index.html"> <img src="<?php echo base_url('assets/'); ?>img/header/logo.png" /> </a>
          </div>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="new-nav">
          <ul class="nav navbar-nav">
              <li class="profile"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>

              <li class=""><a href="index.html#Settings" data-toggle="tab"><i class="fa fa-cogs" aria-hidden="true"></i></a></li>

          </ul>
        </div>
      </div>
   </nav>

     <div class="wrapper">
    <div class="container">
      <div class="desh-content">
        <div class="row">

          <?php $this->load->view('client/shared/side_navigation'); ?>

          <div class="afix-content client-desh">
            <div class="col-md-12 col-sm-12 col-xs-12 pull-left no-padding">
              <div class="border-box border-blue"> </div>
              <div class="border-box1">
                <div class="main-content">
                  <div class="tab-section">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                        <div class=" bhoechie-tab">
                          <div class="bhoechie-tab-content active" style="min-height:80vh">
                            <div>
                               <nav class="navbar navbar-inverse index-nav "  >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#index-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
           <div class=" collapse navbar-collapse " id="index-nav">

              <ul class="nav  navbar-nav  nav-resp index-nav-resp"  role="tablist" style="float:none">
                   <li role="presentation" class="active" >
                                  <a href="index.html#Statics5151" aria-controls="Statics5151" role="tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-bar-chart" aria-hidden="true"></i> Statics </a>
                                </li>
                                <li role="presentation">
                                  <a href="index.html#AboutUs" aria-controls="AboutUs" role="tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-address-book" aria-hidden="true"></i> About Us </a>
                                </li>
                                <li role="presentation">
                                  <a href="index.html#OurTeam" aria-controls="OurTeam" role="tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-users" aria-hidden="true"></i> Our Team </a>
                                </li>
                                <li role="presentation">
                                  <a href="index.html#OurServices" aria-controls="OurServices" role="tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-wrench" aria-hidden="true"></i> Our Services </a>
                                </li>
                                <li role="presentation">
                                  <a href="index.html#Portfolio" aria-controls="Portfolio" role="tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-picture-o" aria-hidden="true"></i> Portfolio </a>
                                </li>
                                <li role="presentation">
                                  <a href="index.html#OurFollower" aria-controls="OurFollower" role="tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> Our Follower </a>
                                </li>
                                <li role="presentation">
                                  <a href="index.html#Settings" aria-controls="Settings" role="tab" data-toggle="tab" id="settings_tab"> <i class="fa fa-cogs" aria-hidden="true"></i> Settings </a>
                                </li>

          </ul>
        </div>

      </div>
   </nav>
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="Statics5151">
                                  <div class="dashboard"> </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="AboutUs">
                                  <div class="tab-main-content">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="editabl" style="margin-top:30px">
                                          <div class="edittable-title">
                                            <h2>Company</h2>
                                          </div>
                                            <div class="company">
                                                <div class="company-fields">
                                                    <div class="formbox">
                                                        <a class="edit" href="javascript:void(0)">Edit</a>
                                                        <ul class="personal-info f-info">
                                                            <li>
                                                                <div class="form-group">
                                                                    <div style="text-align: left" class="col-md-12">
                                                                        <div class="form-value"> <span id="CompanyArea" contenteditable="false" class="">Company Information................... </span> </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="editabl">
                                          <div class="edittable-title">
                                            <h2>About Us</h2>
                                          </div>
                                            <div class="about">
                                                <div class="about-fields">
                                                    <div class="formbox">
                                                        <a class="edit" href="javascript:void(0)">Edit</a>
                                                        <ul class="personal-info f-info">
                                                            <li>
                                                                <div class="form-group">
                                                                    <div style="text-align: left" class="col-md-12">
                                                                        <div class="form-value"> <span id="AboutArea" contenteditable="false" class="">About Us...................... </span> </div>
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
                                <div role="tabpanel" class="tab-pane" id="OurTeam">
                                  <div class="editabl" style="margin-top:30px;">
                                    <div class="edittable-title">
                                      <h2>Our Team</h2>
                                    </div>
                                    <div class="editable">
                                      <div class="col-lg-12" style="margin-top: 25px;">

                                        <?php foreach($our_team as $team) { ?>
                                          <div class="col-lg-4">
                                            <div class="ourteamdiver" id="clListBox">
                                              <div class="overflowhidde" >
                                                <div class="ourteamblur"></div>
                                              </div>
                                              <hr class="rulerourtema">
                                              <div class="imgeourteamperson">
                                                <img src="<?php echo $team->profile_picture!='' ? PROFILE_PICTURE_PATH.$team->id.'/'.$team->profile_picture : MISC_PICTURE_PATH.'/no_image_size4.jpg'; ?>">
                                              </div>
                                              <h3 class="ourteamjopposition"><?php echo $team->role; ?></h3>
                                              <h3 class="ourteamviewmore">More description here </h3>
                                              <div class="clHover">
                                                <div class="col-md-12">
                                                  <a class="hover-eye" id="team_member_edit" data-toggle="modal" data-action="edit" data-target="#addnewteam" title="Edit" data-team_member_id="<?php echo $team->id; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                                  <button class="hover-eye fa fa-trash" id="deleteClient1" data-toggle="modal" data-target="#deleteClientmodel" title="Remove"></button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        <?php } ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="OurServices">
                                  <div class="tab-main-content">
                                    <div class="row">
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="editabl " style="margin-top:30px;">
                                          <div class="edittable-title">
                                            <h2>Our Services</h2>
                                          </div>
                                          <div class="editable" style="padding-top: 15px;">
                                            <div class="row">
                                              <?php
                                                foreach($our_services as $service) {
                                                  $img_url = !empty($service->service_images) ? SERVICE_PICTURE_PATH.$service->id.'/'.$service->service_images[0]->name : base_url('assets/employee-uploads/images/misc-images/no_image_size2.jpg');
                                              ?>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                  <div class="service-tab">
                                                    <div class="post-media">
                                                      <a href="#"><img src="<?php echo $img_url; ?>" alt="" class="img-responsive"></a>
                                                    </div>
                                                    <div class="service-title">
                                                      <h4><a href="#"><?php echo $service->title; ?></a></h4><small><a href="#">Read More</a></small>
                                                    </div>
                                                  </div>
                                                </div>
                                              <?php } ?>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Portfolio">
                                  <div class="tab-main-content">
                                    <div class="row">
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="editabl" style="margin-top:30px;">
                                          <div class="edittable-title">
                                            <h2>Our Portfolio</h2>
                                          </div>
                                          <div class="editable" style="margin-top:15px;">
                                            <div class="row">
                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="img-pop">
                                                  <div class="image-addon">
                                                    <div class="add-more">
                                                      <div class="multi-img">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-preview thumbnail"> <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg"> </div>
                                                        </div>
                                                          <div class="img__description">
                                                              <h4>Image Title</h4>
                                                              <a class="hover-eye" data-toggle="modal" data-target="#portfolioimgModal"><i class="fa fa-eye"></i></a>
                                                          </div>
                                                      </div>
                                                        <div id="portfolioimgModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg">
                                                                        <h3>Image Title</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat turpis in lorem mattis, rhoncus commodo nisi tincidunt. Vestibulum eu dolor ac velit iaculis molestie non ac elit. Vivamus sit amet nibh a ipsum lacinia ornare. Curabitur varius libero ut erat sagittis, quis semper dui tempor. Integer convallis lorem blandit fringilla accumsan. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="add-more">
                                                      <div class="multi-img">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-preview thumbnail"> <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg"> </div>
                                                        </div>
                                                          <div class="img__description">
                                                              <h4>Image Title</h4>
                                                              <a class="hover-eye" data-toggle="modal" data-target="#portfolioimgModal"><i class="fa fa-eye"></i></a>
                                                          </div>
                                                      </div>
                                                        <div id="portfolioimgModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg">
                                                                        <h3>Image Title</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat turpis in lorem mattis, rhoncus commodo nisi tincidunt. Vestibulum eu dolor ac velit iaculis molestie non ac elit. Vivamus sit amet nibh a ipsum lacinia ornare. Curabitur varius libero ut erat sagittis, quis semper dui tempor. Integer convallis lorem blandit fringilla accumsan. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="add-more">
                                                      <div class="multi-img">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-preview thumbnail"> <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg"> </div>
                                                        </div>
                                                          <div class="img__description">
                                                              <h4>Image Title</h4>
                                                              <a class="hover-eye" data-toggle="modal" data-target="#portfolioimgModal"><i class="fa fa-eye"></i></a>
                                                          </div>
                                                      </div>
                                                        <div id="portfolioimgModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg">
                                                                        <h3>Image Title</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat turpis in lorem mattis, rhoncus commodo nisi tincidunt. Vestibulum eu dolor ac velit iaculis molestie non ac elit. Vivamus sit amet nibh a ipsum lacinia ornare. Curabitur varius libero ut erat sagittis, quis semper dui tempor. Integer convallis lorem blandit fringilla accumsan. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="add-more">
                                                      <div class="multi-img">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-preview thumbnail"> <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg"> </div>
                                                        </div>
                                                          <div class="img__description">
                                                              <h4>Test Title</h4>
                                                              <a class="hover-eye" data-toggle="modal" data-target="#portfolioimgModal"><i class="fa fa-eye"></i></a>
                                                          </div>
                                                      </div>
                                                        <div id="portfolioimgModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg">
                                                                        <h3>Image Title</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat turpis in lorem mattis, rhoncus commodo nisi tincidunt. Vestibulum eu dolor ac velit iaculis molestie non ac elit. Vivamus sit amet nibh a ipsum lacinia ornare. Curabitur varius libero ut erat sagittis, quis semper dui tempor. Integer convallis lorem blandit fringilla accumsan. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="add-more">
                                                      <div class="multi-img">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-preview thumbnail"> <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg"> </div>
                                                        </div>
                                                          <div class="img__description">
                                                              <h4>Image Title</h4>
                                                              <a class="hover-eye" data-toggle="modal" data-target="#portfolioimgModal"><i class="fa fa-eye"></i></a>
                                                          </div>
                                                      </div>
                                                        <div id="portfolioimgModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg">
                                                                        <h3>Image Title</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat turpis in lorem mattis, rhoncus commodo nisi tincidunt. Vestibulum eu dolor ac velit iaculis molestie non ac elit. Vivamus sit amet nibh a ipsum lacinia ornare. Curabitur varius libero ut erat sagittis, quis semper dui tempor. Integer convallis lorem blandit fringilla accumsan. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="add-more">
                                                      <div class="multi-img">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-preview thumbnail"> <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg"> </div>
                                                        </div>
                                                          <div class="img__description">
                                                              <h4>Image Title</h4>
                                                              <a class="hover-eye" data-toggle="modal" data-target="#portfolioimgModal"><i class="fa fa-eye"></i></a>
                                                          </div>
                                                      </div>
                                                        <div id="portfolioimgModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg">
                                                                        <h3>Image Title</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat turpis in lorem mattis, rhoncus commodo nisi tincidunt. Vestibulum eu dolor ac velit iaculis molestie non ac elit. Vivamus sit amet nibh a ipsum lacinia ornare. Curabitur varius libero ut erat sagittis, quis semper dui tempor. Integer convallis lorem blandit fringilla accumsan. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="add-more">
                                                      <div class="multi-img">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-preview thumbnail"> <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg"> </div>
                                                        </div>
                                                          <div class="img__description">
                                                              <h4>Image Title</h4>
                                                              <a class="hover-eye" data-toggle="modal" data-target="#portfolioimgModal"><i class="fa fa-eye"></i></a>
                                                          </div>
                                                      </div>
                                                        <div id="portfolioimgModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg">
                                                                        <h3>Image Title</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat turpis in lorem mattis, rhoncus commodo nisi tincidunt. Vestibulum eu dolor ac velit iaculis molestie non ac elit. Vivamus sit amet nibh a ipsum lacinia ornare. Curabitur varius libero ut erat sagittis, quis semper dui tempor. Integer convallis lorem blandit fringilla accumsan. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="add-more">
                                                      <div class="multi-img">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-preview thumbnail"> <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg"> </div>
                                                        </div>
                                                          <div class="img__description">
                                                              <h4>Image Title</h4>
                                                              <a class="hover-eye" data-toggle="modal" data-target="#portfolioimgModal"><i class="fa fa-eye"></i></a>
                                                          </div>
                                                      </div>
                                                        <div id="portfolioimgModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg">
                                                                        <h3>Image Title</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat turpis in lorem mattis, rhoncus commodo nisi tincidunt. Vestibulum eu dolor ac velit iaculis molestie non ac elit. Vivamus sit amet nibh a ipsum lacinia ornare. Curabitur varius libero ut erat sagittis, quis semper dui tempor. Integer convallis lorem blandit fringilla accumsan. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="add-more">
                                                      <div class="multi-img">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-preview thumbnail"> <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg"> </div>
                                                        </div>
                                                          <div class="img__description">
                                                              <h4>Image Title</h4>
                                                              <a class="hover-eye" data-toggle="modal" data-target="#portfolioimgModal"><i class="fa fa-eye"></i></a>
                                                          </div>
                                                      </div>
                                                        <div id="portfolioimgModal" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="<?php echo base_url('assets/'); ?>img/job_14.jpg">
                                                                        <h3>Image Title</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat turpis in lorem mattis, rhoncus commodo nisi tincidunt. Vestibulum eu dolor ac velit iaculis molestie non ac elit. Vivamus sit amet nibh a ipsum lacinia ornare. Curabitur varius libero ut erat sagittis, quis semper dui tempor. Integer convallis lorem blandit fringilla accumsan. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <div class="add-more">
                                                          <a data-toggle="modal" data-target="#uploadPortfolioModal" href="#"><img src="<?php echo base_url('assets/'); ?>img/add_upload.png" alt=""></a>
                                                          <!-- Modal -->
                                                          <div id="uploadPortfolioModal" class="modal fade" role="dialog">
                                                              <div class="modal-dialog">
                                                                  <!-- Modal content-->
                                                                  <div class="modal-content">
                                                                      <div class="modal-header">
                                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                          <h4 class="modal-title">Add Your Project Image Annd Detail Here</h4>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                          <div class="wizard-portfolio">
                                                                              <div class="wizard-inner">
                                                                                  <ul class="nav nav-tabs" role="tablist">
                                                                                      <li role="presentation" class="active">
                                                                                          <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                                                                            Image
                                                                                          </a>
                                                                                      </li>
                                                                                      <li role="presentation" class="disabled">
                                                                                          <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                                                                            Title
                                                                                          </a>
                                                                                      </li>
                                                                                      <li role="presentation" class="disabled">
                                                                                          <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                                                                            Description
                                                                                          </a>
                                                                                      </li>
                                                                                  </ul>
                                                                              </div>
                                                                              <form role="form">
                                                                                  <div class="tab-content">
                                                                                      <div class="tab-pane active" role="tabpanel" id="step1">
                                                                                          <h3>Upload your portfolio image</h3>
                                                                                          <input type="file" name="fileToUpload" id="fileToUpload">
                                                                                          <br><br>
                                                                                          <ul class="list-inline pull-right">
                                                                                              <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                                                                          </ul>
                                                                                      </div>
                                                                                      <div class="tab-pane" role="tabpanel" id="step2">
                                                                                          <h3>Portfolio Title</h3>
                                                                                          <input type="text" placeholder="Portfolio Title" name="title">
                                                                                          <br><br>
                                                                                          <ul class="list-inline pull-right">
                                                                                              <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                                                                              <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                                                                          </ul>
                                                                                      </div>
                                                                                      <div class="tab-pane" role="tabpanel" id="complete">
                                                                                          <h3>Portfolio Description</h3>
                                                                                          <textarea placeholder="Portfolio Description" name="description" id="" cols="30" rows="10"></textarea>
                                                                                          <br><br>
                                                                                          <button type="submit" class="btn btn-default">Submit</button>
                                                                                      </div>
                                                                                      <div class="clearfix"></div>
                                                                                  </div>
                                                                              </form>
                                                                          </div>

                                                                      </div>
                                                                      <div class="modal-footer">
                                                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                      </div>
                                                                  </div>

                                                              </div>
                                                          </div>
                                                      </div>
                                                    </div>
                                              <!--       <div class="add-more" style="width:50%">
                                                      <div class="multi-img">
                                                        <div class="setting image_picker">
                                                          <div class="settings_wrap">
                                                            <label class="drop_target" >
                                                              <div class="image_preview"></div>
                                                              <input id="inputFile" type="file">
                                                            </label>
                                                            <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i> Choose from Uploads</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a></div>
                                                            <div class="image_details">
                                                              <label class="input_line image_title">
                                                                <input type="text" placeholder="Title">
                                                              </label>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>-->
                                                  </div>
                                                  <!--<div class="add-more"><button class="add_img_button"><img src="<?php echo base_url('assets/'); ?>img/image.svg"></button>-->

                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  <div role="tabpanel" class="tab-pane" id="OurFollower">
      <div class="tab-main-content">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="editabl" style="margin-top:30px;">
              <div class="edittable-title">
                <h2>Our Follower</h2>
              </div>
              <div class="editable" style="margin-top:26px;">
                <div class="col-lg-12">
                  <div class="col-lg-4">
                    <div class="ourteamdiver2" id="clListBox">
                      <div class="overflowhidde2">
                        <div class="ourteamblur2"></div>
                      </div>
                      <hr class="rulerourtema">
                      <div class="imgeourteamperson2"><img src="<?php echo base_url('assets/'); ?>img/testi_07.png"></div>
                      <h3 class="ourteamjopposition2">Script Eden </h3>
                      <div class="clHover">
                        <div class="col-md-12">
                          <a class="hover-eye" data-toggle="modal" data-target="#imgModal"><i class="fa fa-eye"></i></a>
                          <button class="hover-eye fa fa-trash" id="deleteClient1" data-toggle="modal" data-target="#deleteClientmodel" title="Remove"></button>
                        </div>
                      </div>
                        <div id="imgModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo base_url('assets/'); ?>img/testi_07.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div style="display: none;" id="clHover2">
                         <div class="col-md-12">
                           <a class="hover-eye" data-toggle="tooltip" title="" name="CL1" onclick="myFunc(this.name)" data-original-title="YES"><i class="fa fa-check"></i></a> <a class="hover-eye" data-toggle="tooltip" title="" id="noDelete1" data-original-title="NO"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="ourteamdiver2" id="clListBox">
                      <div class="overflowhidde2">
                        <div class="ourteamblur2"></div>
                      </div>
                      <hr class="rulerourtema">
                      <div class="imgeourteamperson2"><img src="<?php echo base_url('assets/'); ?>img/testi_07.png"></div>
                      <h3 class="ourteamjopposition2">Script Eden </h3>
                      <div class="clHover">
                        <div class="col-md-12">
                          <a class="hover-eye" data-toggle="modal" data-target="#imgModal"><i class="fa fa-eye"></i></a>                                                           <button class="hover-eye fa fa-trash" id="deleteClient1" data-toggle="modal" data-target="#deleteClientmodel" title="Remove"></button>
                        </div>
                      </div>
                        <div id="imgModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal img-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo base_url('assets/'); ?>img/testi_07.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div style="display: none;" id="clHover2">
                         <div class="col-md-12">
                           <a class="hover-eye" data-toggle="tooltip" title="" name="CL1" onclick="myFunc(this.name)" data-original-title="YES"><i class="fa fa-check"></i></a> <a class="hover-eye" data-toggle="tooltip" title="" id="noDelete1" data-original-title="NO"><i class="fa fa-times"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="ourteamdiver2" id="clListBox">
                      <div class="overflowhidde2">
                        <div class="ourteamblur2"></div>
                      </div>
                      <hr class="rulerourtema">
                      <div class="imgeourteamperson2"><img src="<?php echo base_url('assets/'); ?>img/testi_07.png"></div>
                      <h3 class="ourteamjopposition2">Script Eden </h3>
                      <div class="clHover">
                        <div class="col-md-12">
                          <a class="hover-eye" data-toggle="modal" data-target="#imgModal"><i class="fa fa-eye"></i></a>
                          <button class="hover-eye fa fa-trash" id="deleteClient1" data-toggle="modal" data-target="#deleteClientmodel" title="Remove"></button>
                        </div>
                      </div>
                        <div id="imgModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal img-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo base_url('assets/'); ?>img/testi_07.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div style="display: none;" id="clHover2">
                         <div class="col-md-12">
                           <a class="hover-eye" data-toggle="tooltip" title="" name="CL1" onclick="myFunc(this.name)" data-original-title="YES"><i class="fa fa-check"></i></a> <a class="hover-eye" data-toggle="tooltip" title="" id="noDelete1" data-original-title="NO"><i class="fa fa-times"></i></a>
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
    <div role="tabpanel" class="tab-pane" id="Settings">
      <div class="tab-main-content">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="picprofile" style="background-image:url(<?php
                echo isset($employee_detail->cover_picture) ? COVER_PICTURE_PATH.$employee_detail->id.'/'.str_replace('.', '_size1.', $employee_detail->cover_picture) : '';
              ?>);">
              <div class="picgraycolor"> <input id="cover_picture" style="display:none" type="file" name="cover_picture"> <i onclick="$('#cover_picture').trigger('click'); return false;" class="fa fa-camera caproimg1" aria-hidden="true"></i> </div>
              <div class="imgusersa" style="">
                <div class="framesa" style="background-image:url(<?php
                    echo isset($employee_detail->profile_picture) ? PROFILE_PICTURE_PATH.$employee_detail->id.'/'.str_replace('.', '_size3.', $employee_detail->profile_picture) : '';
                  ?>)">
                  <div class="upload"> <input id="profile_picture" style="display:none" type="file" name="profile_picture"> <i onclick="$('#profile_picture').trigger('click'); return false;" class="fa fa-camera caproimg" aria-hidden="true"></i> </div>
                </div>
              </div>
              <h2 class="card-title"><?php echo $employee_detail->full_name; ?></h2>
            </div>
            <div class="main-content">
              <div class="tab-section">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class=" bhoechie-tab">
                      <div class="bhoechie-tab-content active ">
                        <div>
                          <ul role="tablist" class="nav nav-tabs">
                            <li class="active" role="presentation">
                              <a data-toggle="tab" role="tab" aria-controls="" href="index.html#myprofile" aria-expanded="false"> <i aria-hidden="true" class="fa fa-id-card-o"></i> My Profile </a>
                            </li>

                            <li role="presentation">
                              <a data-toggle="tab" role="tab" aria-controls="" href="index.html#compsaswda" aria-expanded="false"> <i aria-hidden="true" class="fa fa-industry"></i> Company Information </a>
                            </li>
                            <li role="presentation">
                              <a data-toggle="tab" role="tab" aria-controls="" href="index.html#ownerinfo" aria-expanded="false"> <i aria-hidden="true" class="fa fa-user-circle"></i> Owner Informations </a>
                            </li>
                            <li role="presentation">
                              <a data-toggle="tab" role="tab" aria-controls="" href="index.html#Securityques" aria-expanded="false"> <i aria-hidden="true" class="fa fa-shield"></i> Security Questions </a>
                            </li>
                            <li role="presentation">
                              <a data-toggle="tab" role="tab" aria-controls="" href="index.html#upgrades" aria-expanded="false"> <i aria-hidden="true" class="fa fa-arrow-up"></i> Documents </a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="myprofile">
                              <div class="container loaded">
                              </div>
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="col-lg-6">
                                    <div>
                                      <div role="tabpanel" class="tab-pane active" id="Settings">
                                        <div class="col-lg-12">
                                          <div class="col-lg-12">
                                            <div id="Information" class="tabcontent" style="display: block;">
                                              <div class="tab-main-content">
                                                <div class="row">
                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="editable2277">
                                                      <div class="password">
                                                        <div class="password-fields">
                                                          <div class="formbox"> <label style="text-align: left" class="col-md-8 col-sm-8 col-xs-8 profupdate">PERSONAL INFORMATION</label>
                                                              <a class="edit" href="javascript:void(0)">Edit</a>

                                                            <ul class="personal-info f-info">
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-4 col-sm-5 col-xs-12 control-label">Gender</label>
                                                                  <div style="text-align: left" class="col-md-8 col-sm-7 col-xs-12">
                                                                    <div style="float: left" class="form-value"> <label class="control-label">Male </label> </div>
                                                                    <div style="float: left">
                                                                      <div style=" margin: 13px 20px;width: 40px;" class="material-switch pull-right"> <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"> <label for="someSwitchOptionDefault" class="label-default"></label> </div>
                                                                    </div>
                                                                    <div class="form-value"> <label class="control-label">Female</label> </div>
                                                                  </div>
                                                                </div>
                                                              </li>
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-4 col-sm-5 col-xs-12 control-label">Name</label>
                                                                  <div style="text-align: left" class="col-md-8 col-sm-7 col-xs-12">
                                                                    <div class="form-value"> <span id="CompanyName" class="canedit"><?php echo $employee_detail->last_name.', '.$employee_detail->first_name; ?></span>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </li>
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-4 col-sm-5 col-xs-12 control-label">Birthdate</label>
                                                                  <div style="text-align: left" class="col-md-8 col-sm-7 col-xs-12">
                                                                    <div class="form-value"> <span id="CompanyBirthdate"><?php echo date('M j\, Y', $employee_detail->dob); ?></span> </div>
                                                                  </div>
                                                                </div>
                                                              </li>
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-4 col-sm-5 col-xs-12 control-label">Location</label>
                                                                  <div style="text-align: left" class="col-md-8 col-sm-7 col-xs-12">
                                                                    <div class="form-value"> <span id="CompanyLocation"><?php echo $employee_detail->address.', '.$employee_detail->city.', '.$employee_detail->countryName ?></span> </div>
                                                                  </div>
                                                                </div>
                                                              </li>
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-4 col-sm-5 col-xs-12 control-label">Contact Number</label>
                                                                  <div style="text-align: left" class="col-md-8 col-sm-7 col-xs-12">
                                                                    <div class="form-value"> <span id="CompanyContactNumber"><?php echo $employee_detail->phone; ?></span> </div>
                                                                  </div>
                                                                </div>
                                                              </li>
                                                            </ul>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="editabl">
                                                      <div class="editable">
                                                        <div class="password">
                                                          <div class="password-fields">
                                                            <div class="formbox"> <label style="text-align: left" class="col-md-8 col-sm-8 col-xs-8 profupdate">Recent Activy</label>
                                                              <ul class="personal-info">
                                                                <li>
                                                                  <div class="form-group"> <label style="text-align: left" class="col-md-12 col-sm-12 col-xs-12 control-label">02.19.2016 21:00</label> </div>
                                                                  <div class="form-group">
                                                                    <div style="text-align: left" class="col-md-12 col-sm-12 col-xs-12">
                                                                      <div class="form-value"> <span id="CompanyActivy">- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eaque quasi neque nostrum.</span> </div>
                                                                    </div>
                                                                  </div>
                                                                </li>
                                                                <li>
                                                                  <div class="form-group"> <label style="text-align: left" class="col-md-12 col-sm-12 col-xs-12 control-label">02.19.2016 21:00</label> </div>
                                                                  <div class="form-group">
                                                                    <div style="text-align: left" class="col-md-12 col-sm-12 col-xs-12">
                                                                      <div class="form-value"> <span id="CompanyActivy">- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eaque quasi neque nostrum.</span> </div>
                                                                    </div>
                                                                  </div>
                                                                </li>
                                                                <li>
                                                                  <div class="form-group"> <label style="text-align: left" class="col-md-12 col-sm-12 col-xs-12 control-label">02.19.2016 21:00</label> </div>
                                                                  <div class="form-group">
                                                                    <div style="text-align: left" class="col-md-12 col-sm-12 col-xs-12">
                                                                      <div class="form-value"> <span id="CompanyActivy">- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eaque quasi neque nostrum.</span> </div>
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
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div>
                                        <div class="col-lg-12">
                                          <div id="Information" class="tabcontent" style="display: block;">
                                            <div class="tab-main-content">
                                              <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                  <div class="editabl">
                                                    <div class="editable">
                                                      <div class="password">
                                                        <div class="password-fields">
                                                          <div class="formbox"> <label style="text-align: left" class="col-md-8 col-sm-8 col-xs-8 profupdate">Email &amp; Password</label> <a href="javascript:void(0)" class="edit1 ">Edit</a>
                                                            <ul class="personal-info f-pass">
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-6 col-sm-6 col-xs-6 control-label">E-mail</label>
                                                                  <div style="text-align: left" class="col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-value"><span class='canedit' id="Companyemail"><?php echo $employee_detail->email; ?></span></div>
                                                                  </div>
                                                                </div>
                                                              </li>
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-6 col-sm-6 col-xs-6 control-label">Password</label>
                                                                  <div style="text-align: left" class="col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-value"><span id="CompanyPassword">**********</span></div>
                                                                  </div>
                                                                </div>
                                                              </li>
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-6 col-sm-6 col-xs-6 control-label">Repeat Password</label>
                                                                  <div style="text-align: left" class="col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-value"><span id="CompanyRepeatPassword">**********</span></div>
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
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                  <div class="editabl" style=" margin-top: 28px;">
                                                    <div class="editable">
                                                      <div class="password">
                                                        <div class="password-fields">
                                                          <div class="formbox"> <label style="text-align: left" class="col-md-8 col-sm-8 col-xs-8 profupdate">Summary</label>
                                                            <ul class="personal-info">
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 control-label">Date Joined</label>
                                                                  <div style="text-align: left" class="col-md-8 col-sm-8 col-xs-8">
                                                                    <div class="form-value"> <span id="CompanyDateJoined"><?php echo date('M j\, Y', $employee_detail->registration_date); ?></span> </div>
                                                                  </div>
                                                                </div>
                                                              </li>
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 control-label">Last Logged</label>
                                                                  <div style="text-align: left" class="col-md-8 col-sm-8 col-xs-8">
                                                                    <div class="form-value"> <span id="CompanyLastLogged"><?php echo timespan($employee_detail->last_login, time()).' ago'; ?></span> </div>
                                                                  </div>
                                                                </div>
                                                              </li>
                                                              <li>
                                                                <div class="form-group"> <label style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 control-label">Status</label>
                                                                  <div style="text-align: left" class="col-md-8 col-sm-8 col-xs-8">
                                                                    <div class="form-value"> <span id="CompanyStatus">Suspend / Active / On Hold</span> </div>
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
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="payment">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="col-lg-1"></div>
                                  <div class="col-lg-10">
                                    <div class="editable">
                                      <div class="table-responsive">
                                        <div class="table table-striped DataTables " id="Transation_DataTables">
                                          <div class="divTbody">

                                            <div class="row">
                                              <div class="datadiv">
                                                <ul class="">
                                                  <li><img style="width: 80px;height: 50px" src="<?php echo base_url('assets/'); ?>img/paypal.png"></li>
                                                  <li>paypal</li>
                                                  <li><span class="label label-success">Active</span></li>
                                                  <li class="hidden-print"><a data-toggle="tooltip" title="" class="btn btn-xs btn-primary" href="index.html#" data-original-title="Edit"><i class="fa fa-edit"></i></a></li>
                                                  <div class="paymentSetting">
                                                    <header class="panel-heading ">Payment Settings</header>
                                                    <div class="password-fields">
                                                      <div class="formbox"> <a class="edit" href="javascript:void(0)">Edit</a>
                                                        <ul class="personal-info">
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">PayPal Email <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="PayPalEmail">billing@freelanceguru.com</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">PayPal IPN url <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="IPNurl">paypal/t_ipn/ipn</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">PayPal Cancel url <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="PayPalCancel">PayPa lCancel</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">PayPal success url <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="paypalsuccess">paypal/success</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">PayPal Live <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="paypalsuccess">yes</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Status <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <select name="paypal_status" class="form-control"> <option selected="" value="active">Active</option> <option value="deactive">Deactive</option> </select> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </ul>
                                                <ul>
                                                  <li><img style="width: 80px;height: 50px" src="<?php echo base_url('assets/'); ?>img/stripe.jpg"></li>
                                                  <li>Stripe</li>
                                                  <li><span class="label label-success">Active</span></li>
                                                  <li class="hidden-print"><a data-toggle="tooltip" title="" class="btn btn-xs btn-primary" href="index.html#" data-original-title="Edit"><i class="fa fa-edit"></i></a></li>
                                                  <div class="paymentSetting">
                                                    <header class="panel-heading ">Payment Settings</header>
                                                    <div class="password-fields">
                                                      <div class="formbox"> <a class="edit" href="javascript:void(0)">Edit</a>
                                                        <ul class="personal-info">
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Stripe Private Key <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="StripeKey">pk_test_ARblMczqDw61NusMMs7o1RVK</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Stripe Public Key <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="StripePublicKey">pk_test_ARblMczqDw61NusMMs7o1RVK</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Status <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <select name="paypal_status" class="form-control"> <option selected="" value="active">Active</option> <option value="deactive">Deactive</option> </select> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </ul>
                                                <ul>
                                                  <li><img style="width: 80px;height: 50px" src="<?php echo base_url('assets/'); ?>img/2checkout.jpg.png"></li>
                                                  <li>2checkout</li>
                                                  <li><span class="label label-success">Active</span></li>
                                                  <li class="hidden-print"><a data-toggle="tooltip" title="" class="btn btn-xs btn-primary" href="index.html#" data-original-title="Edit"><i class="fa fa-edit"></i></a></li>
                                                  <div class="paymentSetting">
                                                    <header class="panel-heading ">Payment Settings</header>
                                                    <div class="password-fields">
                                                      <div class="formbox"> <a class="edit" href="javascript:void(0)">Edit</a>
                                                        <ul class="personal-info">
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">2checkout Publishable Key <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"><span id="2checkoutPublishable">checkoutkey</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">2checkout Private Key <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="2checkoutPrivate">privatekey</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">2checkout Seller ID <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="2checkoutSeller">Seled id</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Status <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <select name="paypal_status" class="form-control"> <option selected="" value="active">Active</option> <option value="deactive">Deactive</option> </select> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </ul>
                                                <ul>
                                                  <li><img style="width: 80px;height: 50px" src="<?php echo base_url('assets/'); ?>img/Authorizenet.png"></li>
                                                  <li>Authorize.net</li>
                                                  <li><span class="label label-success">Active</span></li>
                                                  <li class="hidden-print"><a data-toggle="tooltip" title="" class="btn btn-xs btn-primary" href="index.html#" data-original-title="Edit"><i class="fa fa-edit"></i></a></li>
                                                  <div class="paymentSetting">
                                                    <header class="panel-heading ">Payment Settings</header>
                                                    <div class="password-fields">
                                                      <div class="formbox"><a class="edit" href="javascript:void(0)">Edit</a>
                                                        <ul class="personal-info">
                                                          <li>
                                                            <div class="form-group"><label class="col-md-4 col-sm-5 col-xs-12 control-label">Authorize.net <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="Authorizenet">login id</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"><label class="col-md-4 col-sm-5 col-xs-12 control-label">Authorize Transaction key <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="Transactionkey">transfer key</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Status <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <select name="paypal_status" class="form-control"> <option selected="" value="active">Active</option> <option value="deactive">Deactive</option> </select> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </ul>
                                                <ul>
                                                  <li><img style="width: 80px;height: 50px" src="<?php echo base_url('assets/'); ?>img/CCAvenue.jpg"></li>
                                                  <li>CCAvenue</li>
                                                  <li><span class="label label-success">Active</span></li>
                                                  <li class="hidden-print"><a data-toggle="tooltip" title="" class="btn btn-xs btn-primary" href="index.html#" data-original-title="Edit"><i class="fa fa-edit"></i></a></li>
                                                  <div class="paymentSetting">
                                                    <header class="panel-heading ">Payment Settings</header>
                                                    <div class="password-fields">
                                                      <div class="formbox"> <a class="edit" href="javascript:void(0)">Edit</a>
                                                        <ul class="personal-info">
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">CCAvenue Merchant ID <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="MerchantID">Merchant ID</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">CCAvenue Working Key <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="CCAvenueWorkingKey ">CCAvenue Working Key</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Status <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <select name="paypal_status" class="form-control"> <option selected="" value="active">Active</option> <option value="deactive">Deactive</option> </select> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </ul>
                                                <ul>
                                                  <li><img style="width: 80px;height: 50px" src="<?php echo base_url('assets/'); ?>img/Braintree.png"></li>
                                                  <li>Braintree</li>
                                                  <li><span class="label label-success">Active</span></li>
                                                  <li class="hidden-print"><a data-toggle="tooltip" title="" class="btn btn-xs btn-primary" href="index.html#" data-original-title="Edit"><i class="fa fa-edit"></i></a></li>
                                                  <div class="paymentSetting">
                                                    <header class="panel-heading ">Payment Settings</header>
                                                    <div class="password-fields">
                                                      <div class="formbox"> <a class="edit" href="javascript:void(0)">Edit</a>
                                                        <ul class="personal-info">
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Braintree Merchant ID <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="BraintreeMerchantID">Braintree Merchant ID</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Braintree Private Key <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="BraintreePrivateKey">Braintree Private Key</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Braintree Public Key <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="BraintreePublicKey">Braintree Public Key</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Braintree Default Acount <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="BraintreeDefualallcount">Braintree Defual allcount</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Braintree Live or Sandbox <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="BraintreeLiveSandbox">Braintree Live or Sandbox</span> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                          <li>
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Status <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <select name="paypal_status" class="form-control"> <option selected="" value="active">Active</option> <option value="deactive">Deactive</option> </select> </div>
                                                              </div>
                                                            </div>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </ul>
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
                            <div role="tabpanel" class="tab-pane " id="compsaswda">
                              <div class="col-lg-12">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                  <div id="Information" class="tabcontent" style="display: block;">
                                    <div class="tab-main-content">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="editabl mR">
                                            <div class="editable">
                                              <div class="password">
                                                <div class="password-fields">
                                                  <div class="formbox"><a class=" editcompany" href="javascript:void(0)">Edit</a>
                                                    <ul class="personal-info c-info">
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Company Name <sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span class="canedit" id="editCompanyName"><?php echo $employee_detail->company_name; ?></span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Legal Name <sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="LegalName"><?php echo $employee_detail->company_name; ?></span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Contact Person<sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="ContactPerson">Ashish Sharma</span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Company Address <sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="CompanyAddress"><?php echo $employee_detail->company_address ?></span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Country <sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="Country"><?php echo $employee_detail->country_name; ?></span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">City <sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="City"><?php echo $employee_detail->company_city; ?></span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Zip Code <sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="ZipCode "><?php echo $employee_detail->company_zipcode; ?></span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Company Phone<sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="CompanyPhone "><?php echo $employee_detail->company_phone; ?></span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Company Email<sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="CompanyEmail"><?php echo $employee_detail->company_email; ?></span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Company VAT<sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="CompanyWebsite ">SE115689</span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">UMST ID<sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="CompanyWebsite ">2DF252</span> </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">HRB<sup class="text-danger">*</sup></label>
                                                          <div class="col-md-8 col-sm-7 col-xs-12">
                                                            <div class="form-value"> <span id="CompanyWebsite ">12345698</span> </div>
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
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="ownerinfo">
                              <div class="col-lg-12">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">

                                  <div id="Information" class="tabcontent" style="display: block;">
                                    <div class="tab-main-content">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="editabl" style="margin-top:30px">
                                            <div class="form-group" style="text-align:center; margin-bottom: 20px; margin-top: 34px;">
                                              <div class="btn-group">
                                                <div class="col-md-6"> <input id="s_male" name="gender" type="radio"><label for="s_male">&nbsp;&nbsp;Male</label> </div>
                                                <div class="col-md-6"> <input id="s_female" name="gender" type="radio"><label for="s_female">&nbsp;&nbsp;Female</label> </div>
                                              </div>
                                            </div>
                                            <hr class="ruler1">
                                            <div class="editable">
                                              <div class="password">
                                                <div class="password-fields O-info">
                                                  <div class="formbox"> <a class="editowner" href="javascript:void(0)">Edit</a>
                                                    <ul class="personal-info">
                                                      <li>
                                                        <div class="col-lg-12">
                                                          <div class="col-lg-6">
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Name <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="editOwnerName" class="canedit">Mohammed</span> </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-lg-6">
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Last Name <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="CompanyName">Alaa</span> </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="col-lg-12">
                                                          <div class="col-lg-6">
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Zipcode <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="CompanyName">44729</span> </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-lg-6">
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">House-No <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="CompanyName">123456</span> </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="col-lg-12">
                                                          <div class="col-lg-6">
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">STR-No <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="CompanyName">+5 nbm</span> </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-lg-6">
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">UTMS-ID <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="CompanyName">54285</span> </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="col-lg-12">
                                                          <div class="col-lg-6">
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">Phone No <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="CompanyName">01210407130</span> </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-lg-6">
                                                            <div class="form-group"> <label class="col-md-4 col-sm-5 col-xs-12 control-label">EMAIL <sup class="text-danger">*</sup></label>
                                                              <div class="col-md-8 col-sm-7 col-xs-12">
                                                                <div class="form-value"> <span id="CompanyName">54285</span> </div>
                                                              </div>
                                                            </div>
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
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="Securityques">
                              <div class="col-lg-12">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                  <div class="editabl topmaef">
                                    <div class="editable">
                                      <div class="password">
                                        <div class="password-fields s-info">
                                          <div class="formbox"><a class="editsecu" href="javascript:void(0)">Edit</a>
                                            <ul class="personal-info">
                                              <li>
                                                <div class="form-group"> <label class="col-md-12 col-sm-12 col-xs-12 control-label" style="text-align:left;">Security Questions <sup class="text-danger">*</sup></label>
                                                  <div class="clearfix"></div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="form-value"> <select name="paypal_status" class="form-control"> <option selected="" value="What is the first and last name of your first boyfriend or girlfriend?">What is the first and last name of your first boyfriend or girlfriend?</option> <option value="Which phone number do you remember most from your childhood?">Which phone number do you remember most from your childhood?</option> <option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child?</option> <option value="Who is your favorite actor, musician, or artist?">Who is your favorite actor, musician, or artist?</option> <option value="What is the name of your favorite pet?">What is the name of your favorite pet?</option> <option value="In what city were you born?">In what city were you born?</option> <option value="What high school did you attend?">What high school did you attend?</option> <option value="What is the name of your first school?">What is the name of your first school?</option> <option value="What is your favorite movie?">What is your favorite movie?</option> <option value="What is your mother's maiden name?">What is your mother's maiden name?</option> <option value="What street did you grow up on?">What street did you grow up on?</option> <option value="What was the make of your first car?">What was the make of your first car?</option> <option value="When is your anniversary?">When is your anniversary?</option> <option value="What is your favorite color?">What is your favorite color?</option> </select>                                                                                  </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="form-value"> <span class="canedit" id="secuCompanyName">Ashish Sharma</span> </div>
                                                  </div>
                                                </div>
                                              </li>
                                              <li>
                                                <div class="form-group"> <label class="col-md-12 col-sm-12 col-xs-12 control-label" style="text-align:left;">Security Questions <sup class="text-danger">*</sup></label>
                                                  <div class="clearfix"></div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="form-value"> <select name="paypal_status" class="form-control"> <option selected="" value="What is the first and last name of your first boyfriend or girlfriend?">What is the first and last name of your first boyfriend or girlfriend?</option> <option value="Which phone number do you remember most from your childhood?">Which phone number do you remember most from your childhood?</option> <option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child?</option> <option value="Who is your favorite actor, musician, or artist?">Who is your favorite actor, musician, or artist?</option> <option value="What is the name of your favorite pet?">What is the name of your favorite pet?</option> <option value="In what city were you born?">In what city were you born?</option> <option value="What high school did you attend?">What high school did you attend?</option> <option value="What is the name of your first school?">What is the name of your first school?</option> <option value="What is your favorite movie?">What is your favorite movie?</option> <option value="What is your mother's maiden name?">What is your mother's maiden name?</option> <option value="What street did you grow up on?">What street did you grow up on?</option> <option value="What was the make of your first car?">What was the make of your first car?</option> <option value="When is your anniversary?">When is your anniversary?</option> <option value="What is your favorite color?">What is your favorite color?</option> </select>                                                                                  </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="form-value"> <span id="CompanyName">Ashish Sharma</span> </div>
                                                  </div>
                                                </div>
                                              </li>
                                              <li>
                                                <div class="form-group"> <label class="col-md-12 col-sm-12 col-xs-12 control-label" style="text-align:left;">Security Questions <sup class="text-danger">*</sup></label>
                                                  <div class="clearfix"></div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="form-value"> <select name="paypal_status" class="form-control"> <option selected="" value="What is the first and last name of your first boyfriend or girlfriend?">What is the first and last name of your first boyfriend or girlfriend?</option> <option value="Which phone number do you remember most from your childhood?">Which phone number do you remember most from your childhood?</option> <option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child?</option> <option value="Who is your favorite actor, musician, or artist?">Who is your favorite actor, musician, or artist?</option> <option value="What is the name of your favorite pet?">What is the name of your favorite pet?</option> <option value="In what city were you born?">In what city were you born?</option> <option value="What high school did you attend?">What high school did you attend?</option> <option value="What is the name of your first school?">What is the name of your first school?</option> <option value="What is your favorite movie?">What is your favorite movie?</option> <option value="What is your mother's maiden name?">What is your mother's maiden name?</option> <option value="What street did you grow up on?">What street did you grow up on?</option> <option value="What was the make of your first car?">What was the make of your first car?</option> <option value="When is your anniversary?">When is your anniversary?</option> <option value="What is your favorite color?">What is your favorite color?</option> </select>                                                                                  </div>
                                                  </div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="form-value"> <span id="CompanyName">Ashish Sharma</span> </div>
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
                            <div role="tabpanel" class="tab-pane " id="upgrades">
                                <div class="col-md-12">
                                    <div class="edittable-title" style="margin-top:20px;" align='center'>
                                            <h2>Documents</h2>
                                          </div>
                                <div class="uploaded-doc" style="border:1px solid #cccccc; padding:43px 10px;margin-top: 13px; background-color: white;">
                        <div class="row">

                            <div class="col-md-2 col-sm-4 padding15">
                            	<div  class="uploaded-img">
                                    <a data-toggle="modal" data-target="#fileuploadModal" href="">
                                      <img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
                                        <div class="immer-img">
                                            <img src="https://infograins.com/INFODE/pankaj/dj/box.png">
                                        </div>
                                        <div class="position-absulute">
                                            <div class="paper-doc1 paper-doc"></div>
                                            <div class="paper-doc2 paper-doc"></div>
                                            <div class="paper-doc3 paper-doc"></div>
                                        </div>
                                        <div class="abslt-text">
                                            <h4>Document Name</h4>
                                            <p>Sub Title</p>
                                            <span>1 Document</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="fileuploadModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                                    Select file to upload:
                                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                                    <input type="submit" value="Upload File" name="submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2 col-sm-4 padding15">
                            	<div class="uploaded-img">
                                	<a data-toggle="modal" data-target="#fileuploadModal" href="">
                                	<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
                                    <div class="immer-img">
                                    	<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
                                    </div>
                                    <div class="position-absulute">
                                        <div class="paper-doc1 paper-doc"></div>
                                        <div class="paper-doc2 paper-doc"></div>
                                        <div class="paper-doc3 paper-doc"></div>
                                    </div>
                                    <div class="abslt-text">
                                        <h4>Document Name</h4>
                                        <p>Sub Title</p>
                                        <span>1 Document</span>
                                    </div>
                                </a>
                                </div>
                                <div id="fileuploadModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                                    Select file to upload:
                                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                                    <input type="submit" value="Upload File" name="submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-2 col-sm-4 padding15">
                                <div class="uploaded-img">
                                	<a data-toggle="modal" data-target="#fileuploadModal" href="">
                                	<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
                                    <div class="immer-img">
                                    	<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
                                    </div>
                                    <div class="position-absulute">
                                        <div class="paper-doc1 paper-doc"></div>
                                        <div class="paper-doc2 paper-doc"></div>
                                        <div class="paper-doc3 paper-doc"></div>
                                    </div>
                                    <div class="abslt-text">
                                        <h4>Document Name</h4>
                                        <p>Sub Title</p>
                                        <span>1 Document</span>
                                    </div>
                                </a>
                                </div>
                                <div id="fileuploadModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                                    Select file to upload:
                                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                                    <input type="submit" value="Upload File" name="submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-2 col-sm-4 padding15">
                                <div class="uploaded-img">
                                	<a data-toggle="modal" data-target="#fileuploadModal" href="">
                                	<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
                                    <div class="immer-img">
                                    	<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
                                    </div>
                                    <div class="position-absulute">
                                        <div class="paper-doc1 paper-doc"></div>
                                        <div class="paper-doc2 paper-doc"></div>
                                        <div class="paper-doc3 paper-doc"></div>
                                    </div>
                                    <div class="abslt-text">
                                        <h4>Document Name</h4>
                                        <p>Sub Title</p>
                                        <span>1 Document</span>
                                    </div>
                                </a>
                                </div>
                                <div id="fileuploadModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                                    Select file to upload:
                                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                                    <input type="submit" value="Upload File" name="submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-2 col-sm-4 padding15">
                                <div class="uploaded-img">
                                	<a data-toggle="modal" data-target="#fileuploadModal" href="">
                                	<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
                                    <div class="immer-img">
                                    	<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
                                    </div>
                                    <div class="position-absulute">
                                        <div class="paper-doc1 paper-doc"></div>
                                        <div class="paper-doc2 paper-doc"></div>
                                        <div class="paper-doc3 paper-doc"></div>
                                    </div>
                                    <div class="abslt-text">
                                        <h4>Document Name</h4>
                                        <p>Sub Title</p>
                                        <span>1 Document</span>
                                    </div>
                                </a>
                                </div>
                                <div id="fileuploadModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                                    Select file to upload:
                                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                                    <input type="submit" value="Upload File" name="submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-4 padding15">
                            	<div class="uploaded-img">
                                	<a data-toggle="modal" data-target="#fileuploadModal" href="">
                                	<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
                                    <div class="immer-img">
                                    	<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
                                    </div>
                                    <div class="position-absulute">
                                        <div class="paper-doc1 paper-doc"></div>
                                        <div class="paper-doc2 paper-doc"></div>
                                        <div class="paper-doc3 paper-doc"></div>
                                    </div>
                                    <div class="abslt-text">
                                        <h4>Document Name</h4>
                                        <p>Sub Title</p>
                                        <span>1 Document</span>
                                    </div>
                                </a>
                                </div>
                            </div>

                        </div>
                    </div>
</div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div><br></div>
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
                    </div>
                  </div>
                </div>

              <footer>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 col-xs-12">
                      <div class="pull-left">
                        <p> ALL RIGHTS RESERVED. COPYRIGHT © Heroic Technologies 2017. </p>
                      </div>
                      <div class="pull-right">
                        <ul class="footer-social">
                          <li><a href="index.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                          <li><a href="index.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                          <li><a href="index.html#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                          <li><a href="index.html#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
            </div>
            </div>
          </div>
        </div>
      </div>
    <div class="modal fade" id="addnewteam" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">


        <!-- <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
        </div>
        <div id="ascrail2008-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;">
            <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; left: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
        </div>
        <div id="ascrail2010" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
        </div>
        <div id="ascrail2010-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;">
            <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; left: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
        </div>
        <div id="ascrail2020" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
        </div>
        <div id="ascrail2020-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
            <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
        </div>
        <div id="ascrail2007" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
        </div>
        <div id="ascrail2007-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
        </div>
        <div id="ascrail2016" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
        </div>
        <div id="ascrail2016-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;">
            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
        </div>
        <div id="ascrail2049" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
        </div>
        <div id="ascrail2049-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;">
            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
        </div>
        <div id="ascrail2062" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 1;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
        </div>
        <div id="ascrail2062-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;">
            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
        </div>
        <div id="ascrail2082" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
        </div>
        <div id="ascrail2082-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
        </div> -->
    </div>
  <div class="modal right fade infoModal" id="viewThisJob" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index:1041;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header vd_bg-green text-center relative modal-header-projects"> <button type="button" class="vd_white close" data-dismiss="modal" aria-label="Close" style="float:left;opacity:1;font-size:3rem;"> <span aria-hidden="true"><i class="fa fa-arrow-circle-right"></i></span> </button>
          <h4 class="modal-title vd_white modalProjectHeader">VIEW PROJECT</h4>
          <div class="row absoluteRow vd_white mrgn0">
            <div class="col-md-2 pdng5-0 col-md-offset-3">
              <h6 class="mrgn0">Project ID: <strong>112223443</strong></h6>
            </div>
            <div class="col-md-2 pdng5-0">
              <h6 class="mrgn0">Project Type: <strong>Offer</strong></h6>
            </div>
            <div class="col-md-2 pdng5-0">
              <h6 class="mrgn0">Budget: <strong>2.500 €</strong></h6>
            </div>
          </div>
        </div>
        <div class="modal-body h100">
          <h3>Nokia Design Concept2</h3>
          <div class="row">
            <div class="col-lg-2 text-center">
              <div class="userAvatar vd_bg-light-grey"> <img src="<?php echo base_url('assets/'); ?>img/testi_06.png" class="img-responsive"> </div>
              <div class="col-lg-12" style="padding-left:0px;margin-top: 10px;">
                <div class="col-lg-3" style="padding-left:3px;font-size: 22px;"><i class="fa fa-star-half-o" aria-hidden="true"></i></div>
                <div class="col-lg-9" style="padding:0px;">
                  <div class="stasmohamed"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
                  <div class="jssmohamed">
                    <div class="jssvaluemohamed"></div>
                  </div>
                </div>
              </div>
              <hr class="jsssmohamed">
              <div class="col-lg-12" style="padding-left:0px;margin-top: 10px;">
                <div class="col-lg-3" style="padding-left:3px;font-size: 22px;"><i class="fa fa-magic" aria-hidden="true"></i></div>
                <div class="col-lg-9" style="padding:0px;">
                  <div class=""> 80% Job Success </div>
                  <div class="jssmohamed">
                    <div class="jssvaluemohamed"></div>
                  </div>
                </div>
              </div>
              <hr class="jsssmohamed">
              <div class="col-lg-12" style="padding-left:0px;margin-top: 10px;">
                <div class="col-lg-3" style="padding-left:3px;font-size: 22px;"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                <div class="col-lg-9" style="padding:0px;">
                  <div class=""> 15 Hourly Jobs </div>
                  <div class="jssmohamed">
                    <div class="jssvaluemohamed"></div>
                  </div>
                </div>
              </div>
              <hr class="jsssmohamed">
              <div class="col-lg-12" style="padding-left:0px;margin-top: 10px;">
                <div class="col-lg-3" style="padding-left:3px;font-size: 22px;"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                <div class="col-lg-9" style="padding:0px;">
                  <div class=""> 15 Contracts </div>
                  <div class="jssmohamed">
                    <div class="jssvaluemohamed"></div>
                  </div>
                </div>
              </div>
              <hr class="jsssmohamed">
              <div class="col-lg-12" style="padding-left:0px;margin-top: 10px;">
                <div class="col-lg-3" style="padding-left:3px;font-size: 22px;"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                <div class="col-lg-9" style="padding:0px;">
                  <div class=""> 15 Current Jobs </div>
                  <div class="jssmohamed">
                    <div class="jssvaluemohamed100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 " style="padding:0px;">
              <div class="col-lg-12" style="padding:0px;margin-bottom:10px;">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Jop Desc.. </div>
                  </div>
                </div>
                <div class="col-lg-10" style="padding:0px;"> <textarea class="textareas">Hello there,I´m Planing my Birthday with Family and Friends and i´m looking for a Partyservice who can Deliver us with Drinks and Food .. I´m Planing my Birthday with Family and Friends and i´m looking for a Partyservice who can Deliver us with Drinks and Food ..</textarea>                  </div>
              </div>
              <div class="col-lg-12" style="padding:0px">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Jop Info.. </div>
                  </div>
                </div>
                <div class="col-lg-10" style="padding:0px;"> <textarea class="textareas2"></textarea> </div>
              </div>
              <div class="col-lg-12" style="padding:0px">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Project Files </div>
                  </div>
                </div>
                <div class="col-lg-10" style="padding:0px;">
                  <div class="borderpopmohamed">
                    <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                      <div class="vd_panel-menu">
                        <div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
                          <div data-action="click-trigger" class="menu-trigger"><i class="fa fa-cog"></i></div>
                          <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target" style="display: none;">
                            <div class="child-menu">
                              <div class="content-list content-menu">
                                <ul class="list-wrapper pd-lr-10">
                                  <li> <a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-minus"></i></span> Block</a> </li>
                                  <li> <a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 pdng5-0 text-center">
                        <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);"><img src="<?php echo base_url('assets/'); ?>img/svg.png" alt="" width="25" height="80"></a>
                      </div>
                      <div class="col-sm-9">
                        <div class="col-sm-3">06_plan.jpg</div>
                        <div class="col-sm-3"><i class="icon-user"></i> Vint Cerf</div>
                        <div class="col-sm-3">320 KB</div>
                        <div class="col-sm-3"><span class="label label-default vd_bg-green vd_white">Seen</span></div>
                      </div>
                    </div>
                    <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                      <div class="vd_panel-menu">
                        <div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
                          <div data-action="click-trigger" class="menu-trigger"><i class="fa fa-cog"></i></div>
                          <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target" style="display: none;">
                            <div class="child-menu">
                              <div class="content-list content-menu">
                                <ul class="list-wrapper pd-lr-10">
                                  <li> <a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-minus"></i></span> Block</a> </li>
                                  <li> <a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 pdng5-0 text-center">
                        <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);"><img src="<?php echo base_url('assets/'); ?>img/svg.png" alt="" width="25" height="80"></a>
                      </div>
                      <div class="col-sm-9">
                        <div class="col-sm-3">06_plan.jpg</div>
                        <div class="col-sm-3"><i class="icon-user"></i> Vint Cerf</div>
                        <div class="col-sm-3">320 KB</div>
                        <div class="col-sm-3"><span class="label label-default vd_bg-green vd_white">Seen</span></div>
                      </div>
                    </div>
                    <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                      <div class="vd_panel-menu">
                        <div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
                          <div data-action="click-trigger" class="menu-trigger"><i class="fa fa-cog"></i></div>
                          <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target" style="display: none;">
                            <div class="child-menu">
                              <div class="content-list content-menu">
                                <ul class="list-wrapper pd-lr-10">
                                  <li> <a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-minus"></i></span> Block</a> </li>
                                  <li> <a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 pdng5-0 text-center">
                        <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);"><img src="<?php echo base_url('assets/'); ?>img/ppt.png" alt="" width="25" height="80"></a>
                      </div>
                      <div class="col-sm-9">
                        <div class="col-sm-3">06_plan.jpg</div>
                        <div class="col-sm-3"><i class="icon-user"></i> Vint Cerf</div>
                        <div class="col-sm-3">320 KB</div>
                        <div class="col-sm-3"><span class="label label-default vd_bg-green vd_white">Seen</span></div>
                      </div>
                    </div>
                    <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                      <div class="vd_panel-menu">
                        <div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
                          <div data-action="click-trigger" class="menu-trigger"><i class="fa fa-cog"></i></div>
                          <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target" style="display: none;">
                            <div class="child-menu">
                              <div class="content-list content-menu">
                                <ul class="list-wrapper pd-lr-10">
                                  <li> <a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-minus"></i></span> Block</a> </li>
                                  <li> <a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 pdng5-0 text-center">
                        <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);"><img src="<?php echo base_url('assets/'); ?>img/png.png" alt="" width="25" height="80"></a>
                      </div>
                      <div class="col-sm-9">
                        <div class="col-sm-3">06_plan.jpg</div>
                        <div class="col-sm-3"><i class="icon-user"></i> Vint Cerf</div>
                        <div class="col-sm-3">320 KB</div>
                        <div class="col-sm-3"><span class="label label-default vd_bg-green vd_white">Seen</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Project Task </div>
                  </div>
                </div>
                <div class="col-lg-10" style="padding:0px;">
                  <div class="borderspka">
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Change background</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Change background</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Change background</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Change background</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Change background</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Change background</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Company Skill </div>
                  </div>
                </div>
                <div class="col-lg-10" style="padding:0px;">
                  <div class="borderspka2">
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">On Time</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Zuverlässig</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Erfahren</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Extras </div>
                  </div>
                </div>
                <div class="col-lg-10" style="padding:0px;">
                  <div class="borderspka2">
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Extra Stuff</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Extra Stuff</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Extra Stuff</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Work Start </div>
                  </div>
                </div>
                <div class="col-lg-10" style="padding:0px;">
                  <div class="borderspka2">
                    <div class="col-lg-5">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Start Date : Now / Date</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Deliver Date : Date</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Express</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Budget Hourly Budget Fix </div>
                  </div>
                </div>
                <div class="col-lg-10" style="padding:0px;">
                  <div class="borderspka4">
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Hourly</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">30 Hours</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">10 €</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Fix</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6" style="padding:0px;">
                      <div class="col-lg-6 paddingright0">
                        <div class="row nomar projectRow greenback vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0 text-center2" style="color:white">Release</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 paddingleft0">
                        <div class="row nomar projectRow vd_bg-light-grey vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0">After Finish</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6" style="padding:0px;">
                      <div class="col-lg-6 paddingright0">
                        <div class="row nomar projectRow greenback vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0 text-center2" style="color:white">300 €</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 paddingleft0">
                        <div class="row nomar projectRow vd_bg-light-grey vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0">Agreement</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Fix</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-5" style="padding:0px;">
                      <div class="col-lg-6 paddingright0">
                        <div class="row projectRow greenback vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0 text-center2" style="color:white">300 €</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 paddingleft0">
                        <div class="row projectRow vd_bg-light-grey vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0">Agreement</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-5" style="padding:0px;">
                      <div class="col-lg-6 paddingright0">
                        <div class="row projectRow greenback vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0 text-center2" style="color:white">Release</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 paddingleft0">
                        <div class="row projectRow vd_bg-light-grey vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0">After Finish</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="bordersaaemfbox1">
                <div class="col-lg-3" style="padding:1px;border-right:1px solid rgba(0, 0, 0, 0.44);"><i class="fa fa-exclamation-circle padding5px" aria-hidden="true"></i></div>
                <div class="col-lg-9">
                  <h3 class="text-center2" style="margin-bottom:0px;margin-top:3px;font-size:18px">Report</h3>
                </div>
              </div>
              <div class="bordersaaemfbox2">
                <div class="col-lg-3" style="padding:1px;border-right:1px solid rgba(0, 0, 0, 0.44);"><i class="fa fa-ban padding5px" aria-hidden="true"></i></div>
                <div class="col-lg-9">
                  <h3 class="text-center2" style="margin-bottom:0px;margin-top:3px;font-size:18px">Denied</h3>
                </div>
              </div>
              <div class="bordersaaemfbox3">
                <div class="col-lg-3" style="padding:1px;border-right:1px solid rgba(0, 0, 0, 0.44);"><i class="fa fa-print padding5px" aria-hidden="true"></i></div>
                <div class="col-lg-9">
                  <h3 class="text-center2" style="margin-bottom:0px;margin-top:3px;font-size:18px">Print</h3>
                </div>
              </div>
              <div class="bordersaaemfbox4">
                <div class="col-lg-3" style="padding:1px;border-right:1px solid rgba(0, 0, 0, 0.44);"><i class="fa fa-comments-o padding5px" aria-hidden="true"></i></div>
                <div class="col-lg-9" style="padding:0px;">
                  <h3 class="text-center2" style="margin-bottom:0px;margin-top:6px;font-size:15px">Sent Messgae</h3>
                </div>
              </div>
              <div class="bordersaaemfbox5makeoffer"> Make Offer </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer vd_bg-white"> <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button> </div>
    </div>
  </div>
  <div class="modal right fade infoModal" id="viewThisJob2" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index:1041;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header vd_bg-green text-center relative modal-header-projects"> <button type="button" class="vd_white close" data-dismiss="modal" aria-label="Close" style="float:left;opacity:1;font-size:3rem;"> <span aria-hidden="true"><i class="fa fa-arrow-circle-right"></i></span> </button>
          <h4 class="modal-title vd_white modalProjectHeader">VIEW PROJECT</h4>
          <div class="row absoluteRow vd_white mrgn0">
            <div class="col-md-2 pdng5-0 col-md-offset-3">
              <h6 class="mrgn0">Project ID: <strong>112223443</strong></h6>
            </div>
            <div class="col-md-2 pdng5-0">
              <h6 class="mrgn0">Project Type: <strong>Offer</strong></h6>
            </div>
            <div class="col-md-2 pdng5-0">
              <h6 class="mrgn0">Budget: <strong>2.500 €</strong></h6>
            </div>
          </div>
        </div>
        <div class="modal-body h100">
          <h3>Nokia Design Concept2</h3>
          <div class="row" style="padding-right: 11px;">
            <div class="col-lg-2 ">
              <div class="jopdtailes">
                <div class="jopdetailshead"> Job Details </div>
                <div class="jopdtailescontent2"> Job Desc. </div>
                <hr class="hremkmvnf">
                <div class="jopdtailescontent2"> Project Files </div>
                <hr class="hremkmvnf">
                <div class="jopdtailescontent2"> Project Taks </div>
                <hr class="hremkmvnf">
                <div class="jopdtailescontent2"> Company Skill </div>
                <hr class="hremkmvnf">
                <div class="jopdtailescontent2"> Extras </div>
                <hr class="hremkmvnf">
                <div class="jopdtailescontent2"> Work Start </div>
                <hr class="hremkmvnf">
                <div class="jopdtailescontent2"> Budgets </div>
              </div>
            </div>
            <div class="col-lg-10 " style="padding:0px;">
              <div class="col-lg-12" style="padding:0px;margin-bottom:10px;">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Offer </div>
                    <div class="jopdtailescontent"> Offer Type </div>
                  </div>
                </div>
                <div class="col-lg-10">
                  <div class="borderspka42">
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Offer Type</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Offer Duration</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Waranty</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Waranty duration</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Add </div>
                    <div class="jopdtailescontent"> Offer Desc. </div>
                  </div>
                </div>
                <div class="col-lg-8"> <textarea class="textareas2" id="editor548"></textarea>
                  <script>
                    // Replace the <textarea id="editor1"> with a CKEditor // instance, using default configuration. CKEDITOR.replace( 'editor548' );
                  </script>
                </div>
                <div class="col-lg-2">
                  <div class="jopdtailes">
                    <div class="jopdtailescontent" style=" font-family: 'Poppins', sans-serif;"> Add Text Module </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px;margin-top: 15px;">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Project Files </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="borderpopmohamed">
                    <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                      <div class="col-sm-3 pdng5-0 text-center">
                        <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);"><img src="<?php echo base_url('assets/'); ?>img/svg.png" alt="" width="25" height="80"></a>
                      </div>
                      <div class="col-sm-9">
                        <div class="col-sm-3">06_plan.jpg</div>
                        <div class="col-sm-3"><i class="icon-user"></i> Vint Cerf</div>
                        <div class="col-sm-3">320 KB</div>
                        <div class="col-sm-3"><span class="label label-default vd_bg-green vd_white">Seen</span></div>
                      </div>
                    </div>
                    <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                      <div class="col-sm-3 pdng5-0 text-center">
                        <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);"><img src="<?php echo base_url('assets/'); ?>img/svg.png" alt="" width="25" height="80"></a>
                      </div>
                      <div class="col-sm-9">
                        <div class="col-sm-3">06_plan.jpg</div>
                        <div class="col-sm-3"><i class="icon-user"></i> Vint Cerf</div>
                        <div class="col-sm-3">320 KB</div>
                        <div class="col-sm-3"><span class="label label-default vd_bg-green vd_white">Seen</span></div>
                      </div>
                    </div>
                    <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                      <div class="col-sm-3 pdng5-0 text-center">
                        <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);"><img src="<?php echo base_url('assets/'); ?>img/ppt.png" alt="" width="25" height="80"></a>
                      </div>
                      <div class="col-sm-9">
                        <div class="col-sm-3">06_plan.jpg</div>
                        <div class="col-sm-3"><i class="icon-user"></i> Vint Cerf</div>
                        <div class="col-sm-3">320 KB</div>
                        <div class="col-sm-3"><span class="label label-default vd_bg-green vd_white">Seen</span></div>
                      </div>
                    </div>
                    <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                      <div class="col-sm-3 pdng5-0 text-center">
                        <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);"><img src="<?php echo base_url('assets/'); ?>img/png.png" alt="" width="25" height="80"></a>
                      </div>
                      <div class="col-sm-9">
                        <div class="col-sm-3">06_plan.jpg</div>
                        <div class="col-sm-3"><i class="icon-user"></i> Vint Cerf</div>
                        <div class="col-sm-3">320 KB</div>
                        <div class="col-sm-3"><span class="label label-default vd_bg-green vd_white">Seen</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="jopdtailes">
                    <div class="jopdtailescontent" style=" font-family: 'Poppins', sans-serif;"> Check the files </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px;margin-top:15px;">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Project Task </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="borderspka20">
                    <div class="col-lg-12" style="">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-4">
                            <h5 class="mrgn0">Change background</h5>
                          </div>
                          <div class="col-sm-1 col-sm-offset-6"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:22px;"></div>
                          <div class="col-sm-1"><img src="<?php echo base_url('assets/'); ?>img/trueblack.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-4">
                            <h5 class="mrgn0">Change background</h5>
                          </div>
                          <div class="col-sm-1 col-sm-offset-6"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:22px;"></div>
                          <div class="col-sm-1"><img src="<?php echo base_url('assets/'); ?>img/trueblack.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="jopdtailes">
                    <div class="jopdtailescontent" style=" font-family: 'Poppins', sans-serif;"> Add new Task </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px;">
                <div class="col-lg-2" style="padding:0px;"> </div>
                <div class="col-lg-8">
                  <div class="borderspka20">
                    <div class="col-lg-12" style="">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-4">
                            <h5 class="mrgn0">Change background</h5>
                          </div>
                          <div class="col-sm-1 col-sm-offset-6"><img src="<?php echo base_url('assets/'); ?>img/delete.png" style="width:22px;"></div>
                          <div class="col-sm-1"><img src="<?php echo base_url('assets/'); ?>img/edit.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-4">
                            <h5 class="mrgn0">Change background</h5>
                          </div>
                          <div class="col-sm-1 col-sm-offset-6"><img src="<?php echo base_url('assets/'); ?>img/delete.png" style="width:22px;"></div>
                          <div class="col-sm-1"><img src="<?php echo base_url('assets/'); ?>img/edit.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="jopdtailes">
                    <div class="jopdtailescontent" style=" font-family: 'Poppins', sans-serif;"> Your Tasks </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px;margin-top:15px;">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Our Skill </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="borderspka201">
                    <div class="col-lg-4" style="">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">On Time</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/trueblack.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">Zuverlässig</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/trueblack.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">Erfahren</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/trueblack.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="jopdtailes">
                    <div class="jopdtailescontent" style=" font-family: 'Poppins', sans-serif;"> Add new Skill </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px;">
                <div class="col-lg-2" style="padding:0px;"> </div>
                <div class="col-lg-8">
                  <div class="borderspka201">
                    <div class="col-lg-4" style="">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">On Time</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/delete.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/edit.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">Zuverlässig</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/delete.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/edit.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">Erfahren</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/delete.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/edit.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="jopdtailes">
                    <div class="jopdtailescontent" style=" font-family: 'Poppins', sans-serif;"> Your Skill </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px;margin-top:15px;">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Extras </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="borderspka201">
                    <div class="col-lg-4" style="">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">On Time</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/trueblack.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">Zuverlässig</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/trueblack.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-red brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">Erfahren</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/trueblack.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="jopdtailes">
                    <div class="jopdtailescontent" style=" font-family: 'Poppins', sans-serif;"> Add Extras </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px;">
                <div class="col-lg-2" style="padding:0px;"> </div>
                <div class="col-lg-8">
                  <div class="borderspka201">
                    <div class="col-lg-4" style="">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">On Time</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/delete.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/edit.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">Zuverlässig</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/delete.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/edit.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <div class="col-sm-7" style="padding:0px">
                            <h5 class="mrgn0">Erfahren</h5>
                          </div>
                          <div class="col-sm-2 " style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/delete.png" style="width:22px;"></div>
                          <div class="col-sm-2 col-sm-2 col-sm-offset-1" style="padding:0px"><img src="<?php echo base_url('assets/'); ?>img/edit.png" style="width:22px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="jopdtailes">
                    <div class="jopdtailescontent" style=" font-family: 'Poppins', sans-serif;"> Your Extras </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px;margin-top:15px;">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Work Start </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="borderspka2012">
                    <div class="col-lg-4" style="">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Start Date : Now / Date</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0"> Deliver Date : Date</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Express</h5>
                        </div>
                      </div>
                    </div>
                    <hr class="rulerswe">
                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                      <div class="col-lg-3"><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 0px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/trueblack.png" style="width:19px;margin-right: 31px;"></span>Accept</button></div>
                      <div class="col-lg-3 col-lg-offset-6"> <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 0px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:19px;margin-right: 31px;"></span>Denied</button>                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="jopdtailes">
                    <div class="jopdtailescontent" style=" font-family: 'Poppins', sans-serif;"> User Work start </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding:0px;margin-top:15px;margin-bottom: 15px;">
                <div class="col-lg-2" style="padding:0px;">
                  <div class="jopdtailes">
                    <div class="jopdetailshead"> Job Details </div>
                    <div class="jopdtailescontent"> Budget Hourly Budget Fix </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="borderspka44">
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Hourly</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">30 Hours</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">10 €</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Fix</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6" style="padding:0px;">
                      <div class="col-lg-6 paddingright0">
                        <div class="row nomar projectRow greenback vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0 text-center2" style="color:white">Release</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 paddingleft0">
                        <div class="row nomar projectRow vd_bg-light-grey vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0">After Finish</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6" style="padding:0px;">
                      <div class="col-lg-6 paddingright0">
                        <div class="row nomar projectRow greenback vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0 text-center2" style="color:white">300 €</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 paddingleft0">
                        <div class="row nomar projectRow vd_bg-light-grey vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0">Agreement</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="row projectRow vd_bg-light-grey vd_bdl-green brdl4">
                        <div class="col-sm-12 pdng5-0">
                          <h5 class="mrgn0">Fix</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-5" style="padding:0px;">
                      <div class="col-lg-6 paddingright0">
                        <div class="row projectRow greenback vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0 text-center2" style="color:white">300 €</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 paddingleft0">
                        <div class="row projectRow vd_bg-light-grey vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0">Agreement</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-5" style="padding:0px;">
                      <div class="col-lg-6 paddingright0">
                        <div class="row projectRow greenback vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0 text-center2" style="color:white">Release</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 paddingleft0">
                        <div class="row projectRow vd_bg-light-grey vd_bdl-green ">
                          <div class="col-sm-12 pdng5-0">
                            <h5 class="mrgn0">After Finish</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="rulerswe">
                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                      <div class="col-lg-3"><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 0px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/trueblack.png" style="width:19px;margin-right: 31px;"></span>Accept</button></div>
                      <div class="col-lg-3 col-lg-offset-6"> <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 0px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:19px;margin-right: 31px;"></span>Denied</button>                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="rulerswe"> <button type="button" class="btn vd_btn " data-dismiss="modal" style=" display: block; margin:15px auto 0px auto; width: 139px; padding: 4px; border-radius: 0px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"></span>Sent your Offer</button>            </div>
        </div>
      </div>
      <div class="modal-footer vd_bg-white"> <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button> </div>
    </div>
  </div>
  <div class="modal fade" id="deleteClientmodel" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" tabindex="6" style="overflow: hidden; outline: none;">
        <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          <h4 class="modal-title custom_align" id="Heading">Delete</h4>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete?</div>
        </div>
        <div class="modal-footer" style=""> <button type="button" class="btn btn-success btn-primary mr-auto pull-left"><span class="glyphicon glyphicon-ok-sign"></span>Yes</button> <button type="button" class="btn btn-danger btn-secondary pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>          </div>
      </div>
    </div>
  </div>
      <!-- <script async src="//www.google-analytics.com/analytics.js"></script> -->
      <script>
    $(document).ready(function() {
          $('body').on('click', '.save', function(e) {
            $('input', $(this).parent().parent()).each(function() {
              var x = $(this); /*console.log(x);*/
              var id = x.attr('id');
              var v = x.val();
              var input = "<div class='form-value'><span id='" + id + "'>" + v + "</span></div>";
              x.parent().replaceWith(input);
            });
            var edit = "<a href='javascript:void(0)' class='edit'>Edit</a>";
            $(this).parent('.sc_btn').replaceWith(edit);
          });
          $('body').on('click', '.edit', function() {
            $('span', $(this).parent()).each(function() {
              var x = $(this); /*console.log(x);*/
              var id = x.attr('id');
              var v = x.text(); /* console.log(v);*/
              var span = "<input type='text' class='form-control' name='" + id + "' id='" + id + "' value='" + v + "'>";
              var hidden_el = "<span style='display:none;' class='or_value' id='" + id + "'>" + v + "</span>"
              x.replaceWith(span + hidden_el); /* console.log(x);*/
            });
            var save_cancel = "<div class='sc_btn'><a href='javascript:void(0)' class='save'>Save</a> <a href='javascript:void(0)' class='cancel'> cancel</a></div>";
            $(this).replaceWith(save_cancel);
          });

          $('body').on('click', '.cancel', function(e) {
            $('.or_value', $(this).parent().parent()).each(function() {
              var x = $(this);
              var id = x.attr('id');
              var v = x.text();
              var input = "<div class='form-value'><span id='" + id + "'>" + v + "</span></div>";
              x.parent('div').replaceWith(input);
            });
            var edit = "<a href='javascript:void(0)' class='edit'>Edit</a>";
            $(this).parent('.sc_btn').replaceWith(edit);
          });

          /*$('.user-profile-menu a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                var target = $(e.target).attr("href"); // activated tab if (target=="index.html#Settings"){$(".sidebar-afix.client-desh .userImg").slideUp();}else{$(".sidebar-afix.client-desh .userImg").slideDown();}});}); $(function(){$('<img/>').attr('src', 'http://lorempixel.com/1400/900/nature/3').load(function(){$('.bg-img').append($(this)); // simulate loading setTimeout(function(){$('.container').addClass('loaded');}, 1500) //$(this).remove(); // prevent memory leaks as @benweet suggested}); $('.form-toggle').on('click', function(){$('.container').toggleClass('show-register')})}); // removeClient/* // $("#deleteClient1").click(function(){// // $(".clHover").hide(); // $("#clHover2").show(); // $("#clHover2").addClass('clHover2'); //}); $("#noDelete1").click(function(){$("#clHover2").hide(); $("#clHover2").css("display", "none");}); $("#deleteClient2").click(function(){$("#clHover3").show(); $("#clHover3").addClass('clHover2');}); $("#noDelete2").click(function(){$("#clHover3").hide(); $("#clHover3").css("display", "none");}); $("#deleteClient3").click(function(){$("#clHover4").show(); $("#clHover4").addClass('clHover2');}); $("#noDelete3").click(function(){$("#clHover4").hide(); $("#clHover4").css("display", "none");}); $("#deleteClient4").click(function(){$("#clHover5").show(); $("#clHover5").addClass('clHover2');}); $("#noDelete4").click(function(){$("#clHover5").hide(); $("#clHover5").css("display", "none");}); $("#deleteClient5").click(function(){$("#clHover6").show(); $("#clHover6").addClass('clHover2');}); $("#noDelete5").click(function(){$("#clHover6").hide(); $("#clHover6").css("display", "none");}); $("#deleteClient6").click(function(){$("#clHover7").show(); $("#clHover7").addClass('clHover2');}); $("#noDelete6").click(function(){$("#clHover7").hide(); $("#clHover7").css("display", "none");}); function myFunc(id){var a="com"; var a=a+id; //alert(a); if (a=="comCL1"){comCL1.parentNode.removeChild(comCL1);}else if (a=="comCL2"){comCL2.parentNode.removeChild(comCL2);}else if (a=="comCL3"){comCL3.parentNode.removeChild(comCL3);}else if (a=="comCL4"){comCL4.parentNode.removeChild(comCL4);}else if (a=="comCL5"){comCL5.parentNode.removeChild(comCL5);}else if (a=="comCL6"){comCL6.parentNode.removeChild(comCL6);}}*/ // doument.getElementById('comCL1') //Added NEW AFF $('#try1').on('click', function(){$('#Optionsmyteam').modal('show'); $('#Optionsmyteam #testoption1').tab('show');}); $('#try2').on('click', function(){$('#Optionsmyteam').modal('show'); $('#Optionsmyteam #testoption2').tab('show');}); $('#try3').on('click', function(){$('#Optionsmyteam').modal('show'); $('#Optionsmyteam #testoption3').tab('show');}); $('#try4').on('click', function(){$('#Optionsmyteam').modal('show'); $('#Optionsmyteam #testoption4').tab('show');}); // $('#view18').on('click', function(){// $('#view18').modal('show');//}); function warrantyPop(){alert("show"); document.getElementById("view18").showModal();}function switchActiv(){document.getElementById('switchActivC').innerHTML="The Work has Stopped"; document.getElementById('switchActivC').style.color="red";}function switchdActiv(){document.getElementById('switchActivC').innerHTML="The Work has Started"; document.getElementById('switchActivC').style.color="green";}function switchPActiv(){document.getElementById('switchActivP').innerHTML="The Work is Paused";}function switchPdActiv(){document.getElementById('switchActivP').innerHTML="The Work is Active";}function testnew1(){document.getElementById('my1').setAttribute('style','display:none;'); document.getElementById('my2').setAttribute('style','display:block;');}function testback1(){document.getElementById('my2').setAttribute('style','display:none;'); document.getElementById('my1').setAttribute('style','display:block;');}$(document).ready(function(){$('.pbutton').on('click', function(){$('.pbutton').removeClass('active'); $(this).toggleClass('active');});
              });
          </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <!-- <script src="<?php /*echo base_url('assets'); */?>/js/jquery-3.2.1.min.js"></script>-->
        <script src="<?php echo base_url('assets/'); ?>js/plugin.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js" type="text/javascript"></script>

        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script src="<?php echo base_url('assets/'); ?>js/index.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
        <script src="<?php echo base_url('assets/'); ?>js/custom.js"></script>

</body>

</html>