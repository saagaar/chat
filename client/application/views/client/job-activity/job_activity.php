<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
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

	<style>
		.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #ffffff;
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

<body>

    <?php $this->load->view('client/shared/header'); ?> 
    
    <nav class="navbar navbar-inverse new-nav  " >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#new-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
         
            <a href="index.html" class="navbar-brand"> <img src="<?php echo base_url('assets/'); ?>img/header/logo.png" /> </a>
          
        </div>
           <div class=" collapse navbar-collapse " id="new-nav">
          
              <ul class="nav  navbar-nav  nav-resp" role="tablist" style="float:none">
                  <li role="presentation" class="active">
                    <a href="index.html#bids" aria-controls="bids" role="tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-bullhorn" style="width:auto" aria-hidden="true"></i> Bids </a>
                </li>
                <li role="presentation" class="">
                    <a href="index.html#denied" aria-controls="denied" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-hand-paper-o"style="width:auto" aria-hidden="true"></i> Denied </a>
                </li>
                <li role="presentation">
                    <a href="index.html#reported" aria-controls="reported" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-exclamation-triangle" aria-hidden="true"style="width:auto"></i> Reported </a>
                </li>
				<li role="presentation">
                    <a href="index.html#bookmark" aria-controls="bookmark" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-bookmark" style="width: 27px;" aria-hidden="true"style="width:auto"></i> Remember </a>
                </li>
               <ul class="nav navbar-nav navbar-right">
                     <li class="profile"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
			  
              <li class=""><a href="index.html#Settings" data-toggle="tab"><i class="fa fa-cogs" aria-hidden="true"></i></a></li>
                  
                </ul>
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
                            
                            <div class="border-box border-blue">
                                <!-- <div class="cover-upload" style="background:rgba(0, 0, 0, 0) url('http://clubgoodfood.com/freelance/user-deshboard/img/country_road_summer_drive.jpg') repeat scroll center center;"> <div class="single-image"> <div class="clear-bg-hight"> <input type="file" name="upload" class="cover-uploadimg"/> <div class="fa fa-camera"></div></div></div></div>--></div>
                            <div class="border-box custom-page-content" style="border-color: transparent;">
                               
                                
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="bids">
                                        <div class="vd_content-section clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-content no-bd mrgn0 pdng0 no-bd">
                                                        <div class="tab-pane active fade in" id="category1">
                                                            <div class="">
                                                                
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewbids" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                               
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewbids" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                                
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewbids" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div role="tabpanel" class="tab-pane active" id="denied">
                                        <div class="vd_content-section clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-content no-bd mrgn0 pdng0 no-bd">
                                                        <div class="tab-pane active fade in" id="category1">
                                                            <div class="">
                                                                
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#notifydenied" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">777777</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                               
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#notifydenied" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                                
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#notifydenied" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
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
                                    <div role="tabpanel" class="tab-pane active" id="bookmark">
                                        <div class="vd_content-section clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-content no-bd mrgn0 pdng0 no-bd">
                                                        <div class="tab-pane active fade in" id="category1">
                                                            <div class="">
                                                                
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                               
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                                
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
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
                                    <div class="modal right fade infoModal bookmarktab" id="viewThisJob" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index:1041;
">
                     <button type="button" class=" close " data-dismiss="modal" aria-label="Close" style="background-color: #fff; margin-left: 53px; float:left;opacity:1;font-size:4rem;padding: 10px"> 
                         <span aria-hidden="true">X</span> </button>

        <div class="modal-dialog" role="document">
            <div class="modal-content" >
                <div class="modal-header vd_bg-green text-center relative modal-header-projects" style="padding: 0">

                    <div class="row  vd_white ">
                        <div class="col-lg-12">

                        <div class="col-md-4 head-cust ">
                            <h5>User Offer</h5>
                        </div>
                        <div class="col-md-4 head-cust ">
                            <h5 >Job title</h5>
                        </div>
                        <div class="col-md-4 head-cust" style="border-right: none">
                            <h5 >Job ID</h5>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal-body h100" style="padding: 0">
                    
                    <div class="row" align="center" style=" border-bottom: 8px solid #9DC23A;margin: 0; background-color: #f3f3f3">
                    <div class=" col-lg-12 job-details" >
                            <ul class="nav   user-profile-menu job-list col-lg-12" align='center' style="border-bottom: none;width: 100%">
                 <li  class="col-sm-2">
                    <a >
                        <i aria-hidden="true" class="fa" >Offer Type</i>type </a>
                </li>
                <li class="col-sm-3">
                    <a >
                        <i  aria-hidden="true"class="fa">Contract Type</i> Standard</a>
                </li >
                <li class="col-sm-3">
                    <a >
                        <i  aria-hidden="true"class="fa" > Offer Duration</i> 2 weeks </a>
                </li>
                <li class="col-sm-2">
                    <a  >
                        <i  aria-hidden="true"class="fa" >Warranty</i> 3 weeks </a>
                </li>
                <li class="col-sm-2">
                    <a > 
                        <i  aria-hidden="true"class="fa" >Job ID</i>  2555512 </a>
                </li>
                
                
            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="row" style="padding: 15px; background-color: #f3f3f3">
                        
                        <div class="col-lg-4 text-center" style="    padding: 0px 15px;" >
                            <div class="col-lg-12" style="border-top: 8px solid #9DC23A;margin-bottom: 4px"></div>
                           <div class="col-lg-12 profile-bc">
                                <div class=" profile-bg">
                               <img class="profile-pic" src="<?php echo base_url('assets/'); ?>img/avatar/bobbyjkane.jpg">
                               </div>
                              <div class="col-lg-12" style="margin-top: 30px">
                               <h4><b>Mark Tailor</b></h4>
                               <p>User ID:2454</p>
                               <a href="index.html#Settings" class="btn btn-primary">View profile</a>
                               </div>
                            </div>
                            
                            <div class="col-lg-12" style="border: 1px solid #DDD; padding: 0; margin-top: 10px;">
                                <div class="col-lg-12" align='left' style="background-color: #286090; padding: 5px; color: #fff">
                                    <h5 style="color: #fff"><b>Google Inc.</b></h5>
                                    <small>Material design task</small>
                                </div>
                                <div class="col-lg-12" style="background-color: #fff">
                                   
                                    <div class="col-lg-4"style="border-right: 1px solid #DDD">
                                         <h6>45%</h6>
                                        <small>Complete</small>
                                    </div>
                                     <div class="col-lg-4" style="border-right: 1px solid #DDD">
                                        <h6>3</h6>
                                        <small>My Tasks</small>
                                    </div>
                                    <div class="col-lg-4">
                                         <h6>22</h6>
                                        <small>Days Due</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12" style="border: 1px solid #DDD; padding: 0; margin-top: 10px;">
                                <div class="col-lg-12" align='left' style="background-color: #5cb85c; padding: 5px; color: #fff">
                                    <h5 style="color: #fff"><b>Facebook Inc.</b></h5>
                                    <small>Material design task</small>
                                </div>
                                <div class="col-lg-12" style="background-color: #fff">
                                   
                                    <div class="col-lg-4"style="border-right: 1px solid #DDD">
                                         <h6>45%</h6>
                                        <small>Complete</small>
                                    </div>
                                     <div class="col-lg-4" style="border-right: 1px solid #DDD">
                                        <h6>3</h6>
                                        <small>My Tasks</small>
                                    </div>
                                    <div class="col-lg-4">
                                         <h6>22</h6>
                                        <small>Days Due</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 " style="padding:0;border-top: 8px solid #9DC23A;background-color: #f3f3f3">
                            

                             <div class=" col-lg-12"  align='center' style="border-bottom: 1px solid #dbdbdb;margin-bottom: 10px;background-color: #fff;padding-top:5px">
            <ul class="nav  user-profile-menu popup-list" align='center' style="border-bottom: none">
                 <li role="presentation">
                    <a  href="#">
                        <i class="fa fa-check-circle-o" aria-hidden="true" style="color: #9DC23A"></i>&nbsp;Accepted </a>
                </li>
                <li role="presentation">
                    <a href="#" >
                        <i class="fa fa-bookmark " aria-hidden="true" style="color:#ff6200"></i>&nbsp;Rememmber </a>
                </li>
                <li role="presentation" class="">
                    <a >
                        <i class="fa fa-ban " aria-hidden="true" style="color:red"></i> Rejected </a>
                </li>
                <li role="presentation">
                    <a href="#" >
                        <i class="fa fa-exclamation-triangle " aria-hidden="true" style="color:red"></i> Report </a>
                </li>
                <li role="presentation">
                    <a href="#" > 
                        <i class="fa fa-comments" aria-hidden="true" style="color:blue"></i>  Messgae </a>
                </li>
                <li role="presentation">
                    <a href="#" >
                     <i class="fa fa-print " aria-hidden="true" style="color:blue"></i>
                        &nbsp;Print 
                    </a>
                </li>
                
            </ul>
        </div> 
                        </div>
                        <div class="col-lg-8" style="background-color: #f3f3f3;padding-left: 0">
                            <div class="col-lg-12" style="padding:0px;">
                                <div class="col-lg-12" style="padding:0px;"> <textarea class="textareas">Hello there,I´m Planing my Birthday with Family and Friends and i´m looking for a Partyservice who can Deliver us with Drinks and Food .. I´m Planing my Birthday with Family and Friends and i´m looking for a Partyservice who can Deliver us with Drinks and Food ..</textarea> </div>
                            </div>
                           
                            <div class="col-lg-12" style="    background-color: #fff;padding:0 5px 5px 5px;margin-top: 10px">
                               
                                <div class="col-lg-12" style="padding:0px;">
                                    <h5 class="col-lg-12" style="background-color: #f3f3f3;padding: 10px;">Project Image</h5>
                                    <div class="borderpopmohamed" style="min-height: 340px; overflow: hidden;">
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
                            <div class="col-lg-12" style="padding:0px; background-color: #fff;padding:0 5px 5px 5px;margin-top: 10px">
                             <h5 class="col-lg-12" style="background-color: #f3f3f3;padding: 10px;">Project Tasks</h5>

                                <div class="col-lg-12" style="padding:0px;">
                                    <div class="borderspka" style="min-height: 200px; overflow: auto">
                                        <div class="col-lg-12">
                                            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <h5 class="mrgn0">Project desc.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-red brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <h5 class="mrgn0">Project desc.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <h5 class="mrgn0">Project desc.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12" style="padding:0px; background-color: #fff;padding:0 5px 5px 5px;margin-top: 10px">
                             <h5 class="col-lg-12" style="background-color: #f3f3f3;padding: 10px;">Company Skills</h5>

                                <div class="col-lg-12" style="padding:0px;">
                                    <div class="borderspka " style="background-color: #fff">
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
                                                    <h5 class="mrgn0">On Time</h5>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <h5 class="mrgn0">On Time</h5>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <h5 class="mrgn0">On Time</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-12" style="padding:0px; background-color: #fff;padding:0 5px 5px 5px;margin-top: 10px">
                                <h5 class="col-lg-12" style="background-color: #f3f3f3;padding: 10px;">Work delivery</h5>
                                <div class="col-lg-12" style="padding:0px;">
                                    <div class="borderspka2" style="height: 111px; overflow: hidden; text-align: center" >
                                        <div class="col-lg-12">
                                            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <div class="col-sm-6" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Work Start</h4>
                                                    <p>10.12.2017</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                    <h4 class="mrgn0">Work Delivery</h4>
                                                    <p>10.12.2017</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12" style="padding:0px; background-color: #fff;padding:0 5px 5px 5px;margin-top: 10px">
                                <h5 class="col-lg-12" style="background-color: #f3f3f3;padding: 10px;">Payments</h5>
                                <div class="col-lg-12" style="padding:0px;">
                                    <div class="borderspka2" style="height: 142px; overflow: hidden; text-align: center" >
                                        <div class="col-lg-12">
                                            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-red brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <div class="col-sm-3" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Budget Type</h4>
                                                    <p>Fix / Hourly / Agree</p>
                                                    </div>
                                                    <div class="col-sm-3" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Price</h4>
                                                    <p>200,$</p>
                                                    </div>
                                                    <div class="col-sm-3" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Price Type</h4>
                                                    <p>Fix / Agreement</p>
                                                    </div>
                                                    <div class="col-sm-3">
                                                    <h4 class="mrgn0">Payout</h4>
                                                    <p>After Finish / Agreement</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12" style="padding:0px; background-color: #fff;padding: 5px;">
                                
                                        <div class="col-lg-12" style=" background-color: #fff;padding: 5px;">
                                            <ul class="nav  user-profile-menu popup-list" align='center' style="border-bottom: none; width: 100%">
                                             <div class="col-sm-6">
                                                  <li role="presentation" style="float: right">
                                                <a  href="#" data-dismiss="modal">
                                                    <i class="fa fa-ban" aria-hidden="true" style="color: red"></i>&nbsp;Reject </a>
                                            </li>
                                                 </div>
                                                <div class="col-sm-6">
                                            <li role="presentation" class="">
                                                <a data-toggle="modal" data-target="#makeoffer" >
                                                    <i class="fa fa-bullhorn  " aria-hidden="true"  style="color:#ff6200"></i>&nbsp;Make Offer </a>
                                            </li>
                                                </div>
                                        </ul>
                                        
                                       
                                       
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                       
                    </div>
                </div>
            </div>
            
        </div>
                                    <div class="modal right fade infoModal" id="makeoffer" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index:1041;
">
                     <button type="button" class=" close " data-dismiss="modal" aria-label="Close" style="background-color: #fff; margin-left: 53px; float:left;opacity:1;font-size:4rem;padding: 10px"> 
                         <span aria-hidden="true">X</span> </button>

        <div class="modal-dialog" role="document">
            <div class="modal-content" >
                <div class="modal-header vd_bg-green text-center relative modal-header-projects" style="padding: 0">

                    <div class="row  vd_white ">
                        <div class="col-lg-12">

                        <div class="col-md-4 head-cust ">
                            <h5>User Offer</h5>
                        </div>
                        <div class="col-md-4 head-cust ">
                            <h5 >Job title</h5>
                        </div>
                        <div class="col-md-4 head-cust" style="border-right: none">
                            <h5 >Job ID</h5>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal-body h100" style="padding: 0">
                    
                    <div class="row" align="center" style=" border-bottom: 8px solid #9DC23A;">
                    <div class=" col-lg-12 job-details" >
                            <ul class="nav   user-profile-menu job-list col-lg-12" align='center' style="border-bottom: none;width: 100%">
                 <li  class="col-sm-2">
                    <a >
                        <i aria-hidden="true" class="fa" >Offer Type</i>type </a>
                </li>
                <li class="col-sm-3">
                    <a >
                        <i  aria-hidden="true"class="fa">Contract Type</i> Standard</a>
                </li >
                <li class="col-sm-3">
                    <a >
                        <i  aria-hidden="true"class="fa" > Offer Duration</i> 2 weeks </a>
                </li>
                <li class="col-sm-2">
                    <a  >
                        <i  aria-hidden="true"class="fa" >Warranty</i> 3 weeks </a>
                </li>
                <li class="col-sm-2">
                    <a > 
                        <i  aria-hidden="true"class="fa" >Job ID</i>  2555512 </a>
                </li>
                
                
            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="row" style="padding: 15px; background-color: #f3f3f3">
                        
                        <div class="col-lg-4 text-center" style="    padding: 0px 15px;">
                            <div class="col-lg-12" style="border-top: 8px solid #9DC23A;margin-bottom: 4px"></div>
                           <div class="col-lg-12 profile-bc">
                                <div class=" profile-bg">
                               <img class="profile-pic" src="<?php echo base_url('assets/'); ?>img/avatar/bobbyjkane.jpg">
                               </div>
                              <div class="col-lg-12" style="margin-top: 30px">
                               <h4><b>Mark Tailor</b></h4>
                               <p>User ID:2454</p>
                               <a href="index.html#Settings" class="btn btn-primary">View profile</a>
                               </div>
                            </div>
                            
                            <div class="col-lg-12" style="border: 1px solid #DDD; padding: 0; margin-top: 10px;">
                                <div class="col-lg-12" align='left' style="background-color: #286090; padding: 5px; color: #fff">
                                    <h5 style="color: #fff"><b>Google Inc.</b></h5>
                                    <small>Material design task</small>
                                </div>
                                <div class="col-lg-12" style="background-color: #fff">
                                   
                                    <div class="col-lg-4"style="border-right: 1px solid #DDD">
                                         <h6>45%</h6>
                                        <small>Complete</small>
                                    </div>
                                     <div class="col-lg-4" style="border-right: 1px solid #DDD">
                                        <h6>3</h6>
                                        <small>My Tasks</small>
                                    </div>
                                    <div class="col-lg-4">
                                         <h6>22</h6>
                                        <small>Days Due</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12" style="border: 1px solid #DDD; padding: 0; margin-top: 10px;">
                                <div class="col-lg-12" align='left' style="background-color: #5cb85c; padding: 5px; color: #fff">
                                    <h5 style="color: #fff"><b>Facebook Inc.</b></h5>
                                    <small>Material design task</small>
                                </div>
                                <div class="col-lg-12" style="background-color: #fff">
                                   
                                    <div class="col-lg-4"style="border-right: 1px solid #DDD">
                                         <h6>45%</h6>
                                        <small>Complete</small>
                                    </div>
                                     <div class="col-lg-4" style="border-right: 1px solid #DDD">
                                        <h6>3</h6>
                                        <small>My Tasks</small>
                                    </div>
                                    <div class="col-lg-4">
                                         <h6>22</h6>
                                        <small>Days Due</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 " style="padding:;">

                             <div class=" col-lg-12"  align='center' style="background-color: #fff;border-top: 8px solid #9DC23A ">
                                 <div class="col-lg-12" style="font-weight: bold;font-size: 20px;padding: 10px">
                                    <span>Select Offer Type</span>
                                    
                                </div>
             <div class="row pdng10-0 searchBar">
                                            <form>
                                                <div class="col-md-3 ">
                                                    <div class="filter-cell"> <select class="form-control"> <option value="*" disabled selected value>
                                                        Offer Type</option> 
                                                        <option value="fav">Verbidlish</option> 
                                                        <option value="fav">UnVerbidlish</option> </select> </div>
                                                </div>
                                               <div class="col-md-3 ">
                                                    <div class="filter-cell"> <select class="form-control">
                                                        <option value="*" disabled selected value>Offer Duration
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </option> 
                                                        <option value="fav">2 weeks</option> 
                                                        <option value="fav">3 weeks</option> </select> </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="filter-cell"> <select class="form-control"> <option value="*" disabled selected value>Warranty</option> 
                                                        <option value="fav">Yes</option> 
                                                        <option value="fav">No</option> </select> </div>
                                                </div>
                                                 <div class="col-md-3 ">
                                                    <div class="filter-cell"> <select class="form-control"> <option value="*" disabled selected value>
                                                        <span>Warranty Duration
                                                         <i class="fa fa-calendar"></i></span>
                                                        </option> 
                                                        <option value="fav">2 weeks</option> 
                                                        <option value="fav">3 weeks</option> </select> </div>
                                                </div>
                                            </form>
                                        </div>
        </div> 
                             
                            <div class="col-lg-12" style="padding:0px;padding-top: 8px;background-color: #fff">
                                <div class="col-lg-12 offertype">
                                    <span style="    margin-left: 100px;">Offer Type</span>
                                    <button class="btn " data-toggle="modal" data-target="#addtext" style="float: right; background-color: transparent;border: 1px solid #ddd;">
                                        +| Add Text</button>
                                </div>
                                                       
                            

                                <div class="col-lg-12" style="padding:0px;"> <textarea class="textareas">Hello there,I´m Planing my Birthday with Family and Friends and i´m looking for a Partyservice who can Deliver us with Drinks and Food .. I´m Planing my Birthday with Family and Friends and i´m looking for a Partyservice who can Deliver us with Drinks and Food ..</textarea> </div>
                            </div>
                           
                            <div class="col-lg-12" style="padding:0px;padding-top: 8px;background-color: #fff">
                               
                                <div class="col-lg-12" style="padding:0px;">
                                   <div class="col-lg-12 offertype">
                                    <span>Project Files</span>
                                    
                                </div>
                                    <div class="borderpopmohamed" style="min-height: 340px; overflow: hidden;background-color: #fff">
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
                            <div class="col-lg-12" style="padding:0px;padding-top: 8px;background-color: #fff">
                             <div class="col-lg-12 offertype">
                                    <span style="    margin-left: 100px;">Work Task</span>
                                    <button class="btn " type="button" data-toggle="modal" data-target="#addtask" style="float: right; background-color: transparent;border: 1px solid #ddd;">
                                        +| Add Task</button>
                                </div>

                                <div class="col-lg-12" style="padding:0px;">
                                    <div class="borderspka" style="min-height: 240px; overflow: hidden;background-color: #fff">
                                        <div class="col-lg-12">
                                            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <h5 class="mrgn0 col-xs-6">Project desc.</h5>
                                                    <h5 class="col-xs-4" >describtion</h5>
                                                    <span class="col-xs-2"><i class='fa fa-ban'></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-red brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <h5 class="mrgn0">Project desc.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <h5 class="mrgn0">Project desc.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12" style="padding:0px;padding-top: 8px;background-color: #fff">
                                <div class="col-lg-12 offertype">
                                    <span style="    margin-left: 100px;">Company Skills </span>
                                    <button class="btn " type="button" data-toggle="modal" data-target="#addskills" style="float: right; background-color: transparent;border: 1px solid #ddd;">
                                        +| Add Skills</button>
                                </div>
                                
                                <div class="col-lg-12" style="padding:0px;">
                                    <div class="borderspka" style="background-color: #fff">
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
                                                    <h5 class="mrgn0">On Time</h5>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <h5 class="mrgn0">On Time</h5>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <h5 class="mrgn0">On Time</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-12" style="padding:0px;padding-top: 8px;background-color: #fff">
                                <div class="col-lg-12 offertype">
                                    <span>Work and delivery Time </span>
                                    
                                </div>
                                <div class="col-lg-12" style="padding:0px;">
                                    <div class="borderspka2" style="height: 149px; overflow: hidden; text-align: center;background-color: #fff" >
                                        <div class="col-lg-12">
                                            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <div class="col-sm-6" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Work Start</h4>
                                                    <p>10.12.2017</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                    <h4 class="mrgn0">Work Delivery</h4>
                                                    <p>10.12.2017</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-12" style="margin-bottom: 5px;">
                                            <ul class="nav  user-profile-menu popup-list" align='center' style="border-bottom: none; width: 100%">
                                            
                                                <div class="col-sm-6">
                                            <li role="presentation" style="float: right">
                                                <a data-toggle="modal" data-target="#" >
                                                   <i class="fa fa-check-circle-o" aria-hidden="true" style="color: green"></i>&nbsp;Accepted </a>
                                            </li>
                                                </div>
                                                 <div class="col-sm-6">
                                                  <li role="presentation">
                                                <a  href="#" data-toggle='modal' data-target='#rejectoffer'>
                                                    <i class="fa fa-ban" aria-hidden="true" style="color: red"></i>&nbsp;Reject </a>
                                            </li>
                                                 </div>
                                        </ul>
                                        
                                       
                                       
                                    </div>
                                        </div>
                                       
                                       
                                    </div>
                                     
                                    
                                </div>
                            </div>
                            <div class="col-lg-12" style="padding:0px;padding-top: 8px;background-color: #fff">
                                <div class="col-lg-12 offertype">
                                    <span>Work and delivery Time </span>
                                    
                                </div>                     
                                <div class="col-lg-12" style="padding:0px;">
                                    <div class="borderspka2" style="height: 176px; overflow: hidden; text-align: center;background-color: #fff" >
                                        <div class="col-lg-12">
                                            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-red brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <div class="col-sm-3" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Budget Type</h4>
                                                    <p>Fix / Hourly / Agree</p>
                                                    </div>
                                                    <div class="col-sm-3" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Price</h4>
                                                    <p>200,$</p>
                                                    </div>
                                                    <div class="col-sm-3" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Price Type</h4>
                                                    <p>Fix / Agreement</p>
                                                    </div>
                                                    <div class="col-sm-3">
                                                    <h4 class="mrgn0">Payout</h4>
                                                    <p>After Finish / Agreement</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-12" style="margin-bottom: 5px" >
                                            <ul class="nav  user-profile-menu popup-list" align='center' style="border-bottom: none; width: 100%">
                                            
                                                <div class="col-sm-6">
                                            <li role="presentation" style="float: right">
                                                <a  >
                                                   <i class="fa fa-check-circle-o" aria-hidden="true" style="color: green"></i>&nbsp;Accepted </a>
                                            </li>
                                                </div>
                                                 <div class="col-sm-6">
                                                  <li role="presentation">
                                                <a  href="#" data-toggle='modal' data-target='#rejectoffer2'>
                                                    <i class="fa fa-ban" aria-hidden="true" style="color: red"></i>&nbsp;Reject </a>
                                            </li>
                                                 </div>
                                        </ul>
                                        
                                       
                                       
                                    </div>
                                        </div>
                                       
                                       
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-lg-12" style="padding:0px;background-color: #f3f3f3" >
                                <div class="col-lg-12" style="padding:0px;">
                                    
                                        <div class="col-lg-12">
                                            <ul class="nav  user-profile-menu popup-list" align='center' style="border-bottom: none; width: 100%">
                                             <div class="col-sm-6">
                                                  <li role="presentation" style="float: left">
                                                <a  href="#">
                                                    <i><input type="radio" ></i>&nbsp;Accept Policy and Terms </a>
                                            </li>
                                                 </div>
                                                <div class="col-sm-6">
                                            <li role="presentation" class="" style="float: right">
                                                <a data-toggle="modal" >
                                                    <i class="fa fa-bullhorn  " aria-hidden="true"  style="color:red"></i>&nbsp;Sent Offer </a>
                                            </li>
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
                                    <div class="modal fade" id="addtask" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 500px; padding:0; margin:auto;">
    <div style="border-top:10px solid #9DC23A;" class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align text-center2" id="Heading">Add Task</h4>
    </div>
    <div class="container loaded" >
        <div style="padding-top:2%" class="row">
            <div class="col-xs-12" align='center'>
                
                <div class="input-group col-xs-12">
      
      <input id="title" type="text" class="form-control" name="title" placeholder="Task Title" style="text-align: center;border-radius: 15px;padding: 10px;">
    </div>
                <br>
                <div class="input-group col-xs-12">
      
      <input id="desc" type="text" class="form-control" name="desc" placeholder="Desc." style="text-align: center;border-radius: 15px;padding: 10px">
    </div>
              
                
            </div>
           
             
    </div>
         <div class="modal-footer ">
             <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px; background-color: white;">
                                                                            <div class="col-lg-4 col-lg-offset-4 "><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>ok</button></div>
                                                                        </div>
               </div>
        </div>
    
            
           
        </div>
    </div>
    
</div>
       <div class="modal fade" id="rejectoffer" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 500px; padding:0; margin:auto;">
    <div style="border-top:10px solid #9DC23A;" class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align text-center2" id="Heading">Work Start</h4>
    </div>
    <div class="container loaded" >
        <div style="padding-top:2%" class="row">
            <div class="col-xs-12" align='center'>
            <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                <div class="col-sm-12 pdng5-0">
                                                    <div class="col-sm-12" >
                                                    <h4 class="mrgn0 col-xs-5">Work Start</h4>
                                                    <div id="datetimepicker1" class="input-group date col-xs-7"> <input style="margin:0" class="form-control" type="text"> <span class="add-on input-group-addon"> <span class="fa fa-calendar"></span> </span>
                                                    </div>
                                                    
                                                </div>
                                                    
                                                    <div class="col-sm-12 " style="margin-top: 10px">
                                                    <h4 class="mrgn0 col-xs-5">Work Delivery</h4>
                                                   <div id="datetimepicker2" class="input-group date col-xs-7"> <input style="margin:0" class="form-control" type="text"> <span class="add-on input-group-addon"> <span class="fa fa-calendar"></span> </span>
                                                    </div>
                                                    </div>
                                            </div>      
               
                
              <script>
                                                            $(function() {
                                                                $('#datetimepicker1').datetimepicker({
                                                                    language: 'pt-BR'
                                                                });
                                                                $('#datetimepicker2').datetimepicker({
                                                                    language: 'pt-BR'
                                                                });
                                                            });

                                                        </script>
                
            </div>
           
             
    </div>
         <div class="modal-footer ">
             <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px; background-color: white;">
                                                                            <div class="col-lg-4 col-lg-offset-4 "><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>ok</button></div>
                                                                        </div>
               </div>
        </div>
    
            
           
        </div>
    </div>
    
</div>
    </div>
     <div class="modal fade" id="rejectoffer2" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 500px; padding:0; margin:auto;">
    <div style="border-top:10px solid #9DC23A;" class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align text-center2" id="Heading">Budget</h4>
    </div>
    <div class="container " >
        
            <div class="col-xs-12" align='center' style="padding-top: 10px">

                    <form>
                        <div class="col-md-6 ">
                            <div class="filter-cell"> <select class="form-control"> <option value="*" disabled selected value>
                                Budget Type DD</option> 
                                <option value="fav">option1</option> 
                                <option value="fav">option2</option> </select> </div>
                        </div>
                       <div class="col-md-6 ">
                            <div class="filter-cell"> <select class="form-control">
                                <option value="*" disabled selected value>Price Type
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </option> 
                                <option value="fav">1</option> 
                                <option value="fav">3 </option> </select> </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="filter-cell"> <select class="form-control"> <option value="*" disabled selected value>
                                Payout DD</option> 
                                <option value="fav">1</option> 
                                <option value="fav">2</option> </select> </div>
                        </div>
                         <div class="col-md-6 ">
                            <div class="filter-cell"> <select class="form-control"> <option value="*" disabled selected value>
                                <span>Price
                                 <i class="fa fa-calendar"></i></span>
                                </option> 
                                <option value="fav">1</option> 
                                <option value="fav">3 </option> </select> </div>
                        </div>
                    </form>
        </div>
             
    </div>
         <div class="modal-footer ">
             <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px; background-color: white;">
                 <div class="col-lg-4 col-lg-offset-4 "><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>ok</button></div>
                                                                        </div>
               </div>
        </div>
    
            
           
        </div>
    </div>
    

   
    <div class="modal fade" id="addskills" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 500px; padding:0; margin:auto;">
    <div style="border-top:10px solid #9DC23A;" class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align text-center2" id="Heading">Add Skills</h4>
    </div>
    <div class="container loaded" >
        <div style="padding-top:2%" class="row">
            <div class="col-lg-12" style="padding:0px;">
                  
                                    <div class="" style="">
                                        
                                        <div class="col-md-12">
        <a data-toggle="collapse" href="#collapse1">
        <div class="form-control " id="selectedSkill"  style="height: 36px;"></div>
        </a>
        <div id="collapse1" class="panel-collapse collapse" style="background-color: #ffffff;">
        <ul id="asd" role="menu">
            <li><label class="lbl" for="html"><input type="checkbox" class="a" id="html"> HTML</label></li>
        <!-- <li class="divider"></li> -->
            <li><label class="lbl" for="nodejs"><input type="checkbox" class="a" id="nodejs"> Node.js</label></li>
            <!-- <li><label class="lbl" for="javascript"><input type="checkbox" class="a" id="javascript">Javascript</label></li>
            <li><label class="lbl" for="css"><input type="checkbox" class="a" id="css">CSS</label></li>
            <li><label class="lbl" for="css3"><input type="checkbox" class="a" id="css3">CSS3</label></li> -->
            <li><label class="lbl" for="html5"><input type="checkbox" class="a" id="html5"> HTML5</label></li>
            <li><label class="lbl" for="angularjs"><input type="checkbox" class="a" id="angularjs"> Angularjs</label></li>
            <li><label class="lbl" for="reactjs"><input type="checkbox" class="a" id="reactjs"> React.js</label></li>
            <li class="divider"></li>
            <hr>
            <li> <center><a class="btn btn-success" data-toggle="collapse" href="#collapse1" style="margin-bottom: 20px;">Submit Skills</a></center></li>
        </ul>
        </div>
        </div>
                                                                    
                                      <script type="text/javascript">
                                                                        if($("#selectedSkill").html().length < 3)
                                                                        {
                                                                           $("#selectedSkill").html("Company Skills"); 
                                                                        }
                                                                        $("input.a").change(function(){
                                                                            console.log($(this));
                                                                            var line = ($("div.form-control").html()).replace("Company Skills","");
                                                                            if($(this).is(":checked")) { 
                                                                                  line += "<b class='skill1' id='"+ ($(this).closest('label').text()).replace(" ", "").replace(".", "").toLowerCase() +"'><a style='font-size:14px;margin-right:5px;' onclick='removeSkill($(this))' class='glyphicon glyphicon-remove'></a>"+$(this).closest('label').text() + "</b>";
                                                                                  $("#selectedSkill").html(line);
                                                                                }
                                                                            else {
                                                                                var t_id = ($(this).closest('label').text()).replace(" ", "").replace(".", "").toLowerCase();
                                                                                $('b#'+t_id).remove();
                                                                                if($("#selectedSkill").html().length < 3)
                                                                                {
                                                                                   $("#selectedSkill").html("Company Skills"); 
                                                                                }
                                                                            } 
                                                                        });
                                                                        $(".lbl").click(function(){
                                                                                if(($(this).closest('input.a')).is(":checked")) { 
                                                                                ($(this).closest('input.a')).prop('checked',false);
                                                                            }
                                                                            else {
                                                                                ($(this).closest('input.a')).prop('checked',true);
                                                                            }
                                                                        });
                                                                        function removeSkill(sp){
                                                                            sp.closest('b').remove();
                                                                            var c_id = sp.closest('b').attr('id');
                                                                            console.log(c_id);
                                                                            console.log(($("input[type=checkbox]#"+c_id)).attr('id'));
                                                                            $("input[type=checkbox]#"+c_id).prop('checked', false);
                                                                        }
                                                                        //  function aero(){
                                                                        //     if($('#aero').css.z-index == -1){
                                                                        //        $('#aero').css.z-index == 1;
                                                                        //     }
                                                                        //     else { 
                                                                        //         $('#aero').css.z-index == -1;
                                                                        //     } 
                                                                        //     console.log($('#aero'.css.z-index));
                                                                            
                                                                        // }
                                                                    </script>   
                                    </div>
                                </div>
           
             
    </div>
         <div class="modal-footer ">
             <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px; background-color: white;">
                                                                            <div class="col-lg-4 col-lg-offset-4 "><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>ok</button></div>
                                                                        </div>
               </div>
        </div>
    
            
           
        </div>
    </div>
    
</div>

    <div class="modal fade" id="addtext" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 700px; padding:0; margin:auto;">
    <div style="border-top:10px solid #9DC23A;" class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align text-center2" id="Heading">Select Text</h4>
    </div>
    <div class="container loaded" >
        <div style="padding-top:2%" class="row">
            <div class="col-xs-12" align='center'>
                
                <span class="col-lg-offset-1 col-xs-3 sel-text">select text</span>
                <span class="col-xs-3 sel-text">select text</span>
                <span class="col-xs-3 sel-text">select text</span>
            </div>
            <div class="col-xs-12">
             <div > 
                <div class="reviewcontent" id="editor4">
               Type...

                </div>
                     <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor4' );
                    </script>
            </div>
                </div>
             
    </div>
         <div class="modal-footer ">
             <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px; background-color: white;">
                                                                            <div class="col-lg-4 col-lg-offset-4 "><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>ok</button></div>
                                                                        </div>
               </div>
        </div>
    
            
           
        </div>
    </div>
    
</div>
    
                                    <div role="tabpanel" class="tab-pane active" id="reported">
                                        <div class="vd_content-section clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-content no-bd mrgn0 pdng0 no-bd">
                                                        <div class="tab-pane active fade in" id="category1">
                                                            <div class="">
                                                                
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#notifydenied" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                               
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#notifydenied" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                                
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#notifydenied" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <br><span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                    <p class="mrgn0">User Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4>Design Concept</h4>
                                                                <p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
                                                                <p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Job Budget</h4>
                                                                <p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
                                                                <p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>Work Start</h4>
                                                                <p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
                                                                <p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">All Tasks</span></h4>
                                                                <p class="mrgn0"><span class="label label-default vd_bg-red vd_white">1</span></p>
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
    </div>
    <div class="modal fade " id="viewbids" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Contract Offer</h4>
                                                    </div>
                                                    <div class="ourteamdiver2" style="margin-top:0px;">
                                                        <div class="overflowhidde2">
                                                            <div class="ourteamblur22"> </div>
                                                        </div>
                                                        <hr class="rulerourtema">
                                                        <div class="imgeourteamperson2"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
                                                        <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                                                        <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project ID</strong></h4>
                                                        <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                                                        <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project Budget</strong></h4>
                                                        <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">2000,- €</strong></h4>
                                                        <h4 class="text-center2" style="font-size:15px;"><strong style="color:red">Offer Type</strong></h4>
                                                        <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">Verbindlich</strong></h4>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">Work Start</h3>
                                                        </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">Work End</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">17.07.2017</h3>
                                                        </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">17:00</h3>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
    <div class="modal fade" id="notifydenied" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content" tabindex="6" style="overflow: hidden; outline: none;">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title text-center2" id="Heading">Denied Reason</h4>
      </div>
          <div class="modal-body" style="background-color:#f0f0f0;">
       
       <div style="text-align: center; color:black;">New Offer Sent<br>Please wait for Response</div>
       
      </div>
        <div class="modal-footer text-center2">
        
            <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 25%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;">
            <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>OK</button>
            
            
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    <div id="ascrail2009" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2009-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2011" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2011-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2021" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2021-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2028" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2028-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2051" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2051-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div>
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
                                            <div class="col-lg-3 col-lg-offset-6"> <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 0px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:19px;margin-right: 31px;"></span>Denied</button> </div>
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
                                            <div class="col-lg-3 col-lg-offset-6"> <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 0px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/falseblack.png" style="width:19px;margin-right: 31px;"></span>Denied</button> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="rulerswe"> <button type="button" class="btn vd_btn " data-dismiss="modal" style=" display: block; margin:15px auto 0px auto; width: 139px; padding: 4px; border-radius: 0px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"></span>Sent your Offer</button> </div>
                </div>
            </div>
            <div class="modal-footer vd_bg-white"> <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button> </div>
        </div>
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
                <div class="modal-footer" style=""> <button type="button" class="btn btn-success btn-primary mr-auto pull-left"><span class="glyphicon glyphicon-ok-sign"></span>Yes</button> <button type="button" class="btn btn-danger btn-secondary pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button> </div>
            </div>
            <script async src="<?php echo base_url('assets/'); ?>//www.google-analytics.com/analytics.js"></script>
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
                            $('.user-profile-menu a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                                        var target = $(e.target).attr("href"); // activated tab if (target=="index.html#Settings"){$(".sidebar-afix.client-desh .userImg").slideUp();}else{$(".sidebar-afix.client-desh .userImg").slideDown();}});}); $(function(){$('<img/>').attr('src', 'http://lorempixel.com/1400/900/nature/3').load(function(){$('.bg-img').append($(this)); // simulate loading setTimeout(function(){$('.container').addClass('loaded');}, 1500) //$(this).remove(); // prevent memory leaks as @benweet suggested}); $('.form-toggle').on('click', function(){$('.container').toggleClass('show-register')})}); // removeClient/* // $("#deleteClient1").click(function(){// // $(".clHover").hide(); // $("#clHover2").show(); // $("#clHover2").addClass('clHover2'); //}); $("#noDelete1").click(function(){$("#clHover2").hide(); $("#clHover2").css("display", "none");}); $("#deleteClient2").click(function(){$("#clHover3").show(); $("#clHover3").addClass('clHover2');}); $("#noDelete2").click(function(){$("#clHover3").hide(); $("#clHover3").css("display", "none");}); $("#deleteClient3").click(function(){$("#clHover4").show(); $("#clHover4").addClass('clHover2');}); $("#noDelete3").click(function(){$("#clHover4").hide(); $("#clHover4").css("display", "none");}); $("#deleteClient4").click(function(){$("#clHover5").show(); $("#clHover5").addClass('clHover2');}); $("#noDelete4").click(function(){$("#clHover5").hide(); $("#clHover5").css("display", "none");}); $("#deleteClient5").click(function(){$("#clHover6").show(); $("#clHover6").addClass('clHover2');}); $("#noDelete5").click(function(){$("#clHover6").hide(); $("#clHover6").css("display", "none");}); $("#deleteClient6").click(function(){$("#clHover7").show(); $("#clHover7").addClass('clHover2');}); $("#noDelete6").click(function(){$("#clHover7").hide(); $("#clHover7").css("display", "none");}); function myFunc(id){var a="com"; var a=a+id; //alert(a); if (a=="comCL1"){comCL1.parentNode.removeChild(comCL1);}else if (a=="comCL2"){comCL2.parentNode.removeChild(comCL2);}else if (a=="comCL3"){comCL3.parentNode.removeChild(comCL3);}else if (a=="comCL4"){comCL4.parentNode.removeChild(comCL4);}else if (a=="comCL5"){comCL5.parentNode.removeChild(comCL5);}else if (a=="comCL6"){comCL6.parentNode.removeChild(comCL6);}}*/ // doument.getElementById('comCL1') //Added NEW AFF $('#try1').on('click', function(){$('#Optionsmyteam').modal('show'); $('#Optionsmyteam #testoption1').tab('show');}); $('#try2').on('click', function(){$('#Optionsmyteam').modal('show'); $('#Optionsmyteam #testoption2').tab('show');}); $('#try3').on('click', function(){$('#Optionsmyteam').modal('show'); $('#Optionsmyteam #testoption3').tab('show');}); $('#try4').on('click', function(){$('#Optionsmyteam').modal('show'); $('#Optionsmyteam #testoption4').tab('show');}); // $('#view18').on('click', function(){// $('#view18').modal('show');//}); function warrantyPop(){alert("show"); document.getElementById("view18").showModal();}function switchActiv(){document.getElementById('switchActivC').innerHTML="The Work has Stopped"; document.getElementById('switchActivC').style.color="red";}function switchdActiv(){document.getElementById('switchActivC').innerHTML="The Work has Started"; document.getElementById('switchActivC').style.color="green";}function switchPActiv(){document.getElementById('switchActivP').innerHTML="The Work is Paused";}function switchPdActiv(){document.getElementById('switchActivP').innerHTML="The Work is Active";}function testnew1(){document.getElementById('my1').setAttribute('style','display:none;'); document.getElementById('my2').setAttribute('style','display:block;');}function testback1(){document.getElementById('my2').setAttribute('style','display:none;'); document.getElementById('my1').setAttribute('style','display:block;');}$(document).ready(function(){$('.pbutton').on('click', function(){$('.pbutton').removeClass('active'); $(this).toggleClass('active');});});

            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

            <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
