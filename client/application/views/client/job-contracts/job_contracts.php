<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contract</title>
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
                                            <a href="index.html#ContractOffer" aria-controls="ContractOffer" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-bullhorn" style="width:auto"></i> Offer </a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="index.html#ContractStarted" aria-controls="ContractStarted" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-play" aria-hidden="true"style="width:27px;"></i> Started </a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="index.html#ContractDone" aria-controls="ContractDone" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-check-square-o" aria-hidden="true"style="width:auto"></i> Done </a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="index.html#ContractDeliverd" aria-controls="ContractDeliverd" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-thumbs-o-up" aria-hidden="true"style="width:auto"></i> Deliverd </a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="index.html#ContractDisputs" aria-controls="ContractDisputs" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-exclamation-triangle" aria-hidden="true"style="width:auto"></i>  Disputs </a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="index.html#ContractCanceled" aria-controls="ContractCanceled" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-ban" aria-hidden="true"style="width:auto"></i> Canceled  </a>
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
                                
                                <div class="tab-content" >
                                    <div role="tabpanel" class="tab-pane active" id="ContractOffer">
                                        <div class="vd_content-section clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="tab-content no-bd mrgn0 pdng0 no-bd">
                                                        <div class="tab-pane active fade in" id="category1">
                                                            <div class="">
                                                                
                                                    <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#contractoffer" title="">
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
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#contractoffer" title="">
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
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#contractoffer" title="">
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
                                        </div>>
                                        <div class="modal fade " id="contractoffer" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
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
                                                    <hr class="hfkaniei">
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-6 "><button type="button" class="btn vd_btn " data-toggle="modal" data-target="#selectusertoworkcontractoffer" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Accepte</button></div>
                                                        <div class="col-lg-6 "> <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/false.png" style="width:23px;margin-right: 31px;"></span>Denied</button> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
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
                                            <div id="ascrail2002" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2002-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                        </div>
                                        <div class="modal right fade " id="selectusertoworkcontractoffer" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index: 1052;display: none;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content" tabindex="15" style="overflow: hidden; outline: none;">
                                                    <div class="modal-header vd_bg-green text-center2"> <button type="button" class="vd_white close" data-dismiss="modal" aria-label="Close" style="float:left;opacity:1;font-size:3rem;"> <span aria-hidden="true"><i class="fa fa-arrow-circle-right"></i></span> </button>
                                                        <h4 class="modal-title vd_white">Select User</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="panel widget">
                                                            <div class="">
                                                                <div class="col-lg-4">
                                                                    <div class="ourteamdiver ourteamdiverclick">
                                                                        <div class="overflowhidde">
                                                                            <div class="ourteamblur"> </div>
                                                                        </div>
                                                                        <hr class="rulerourtema">
                                                                        <div class="imgeourteamperson"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
                                                                        <h3 class="ourteamjopposition text-center2">Web Developer </h3>
                                                                        <h3 class="ourteamviewmore text-center2">More description here </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="ourteamdiver ourteamdiverclick">
                                                                        <div class="overflowhidde">
                                                                            <div class="ourteamblur"> </div>
                                                                        </div>
                                                                        <hr class="rulerourtema">
                                                                        <div class="imgeourteamperson"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
                                                                        <h3 class="ourteamjopposition text-center2">Web Developer </h3>
                                                                        <h3 class="ourteamviewmore text-center2">More description here </h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="ourteamdiver ourteamdiverclick">
                                                                        <div class="overflowhidde">
                                                                            <div class="ourteamblur"> </div>
                                                                        </div>
                                                                        <hr class="rulerourtema">
                                                                        <div class="imgeourteamperson"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
                                                                        <h3 class="ourteamjopposition text-center2">Web Developer </h3>
                                                                        <h3 class="ourteamviewmore text-center2">More description here </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer vd_bg-white"> <button type="button" class="btn btn-secondary " data-dismiss="modal" aria-label="Close">Save</button> </div>
                                                </div>Extra Offers
                                                <div id="ascrail2044" class="nicescroll-rails" style="width: 5px; z-index: 1052; cursor: default; position: absolute; top: 0px; left: -5px; height: 100px; display: none; opacity: 0;">
                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                </div>
                                                <div id="ascrail2044-hr" class="nicescroll-rails" style="height: 5px; z-index: 1052; top: 95px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;">
                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; left: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                </div>
                                                <div id="ascrail2003" class="nicescroll-rails" style="width: 5px; z-index: 1052; cursor: default; position: absolute; top: 0px; left: -5px; height: 100px; display: none;">
                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                </div>
                                                <div id="ascrail2003-hr" class="nicescroll-rails" style="height: 5px; z-index: 1052; top: 95px; left: 0px; position: absolute; cursor: default; display: none;">
                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ContractStarted">
                                        <div class="vd_content-section clearfix" style=" padding-top: 0px;">
                                            <div class="row">
                                                <div class="col-lg-12" style="margin-top: 25px;">
                                                    <div class="pdng20">
                                                        <div class="">
                                                       <div class="row mrgn30-0 projectRow no-padmr" style="border-left: 4px solid #80D651;">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">Employer Name<br></p>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4 style="font-size:15px">Design Concept</h4>
                                                                        <p class="mrgn5">Start: 05-07-2017</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">In Progress</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <div style="width: 100px; height: 100px;">
																<h4 style="font-size:15px;">Status</h4>
                                                                                <div class="ab" style="position: relative; text-align: center; width: 88px; height: 88px; border-radius: 100%; background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%); background-color: rgb(239, 239, 239);">
                                                                                    <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 84px; height: 84px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 88px; height: 88px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);position:absolute;top:-5px;">65%</span></div>
                                                                                </div>
                                                                            </div>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>All Tasks</h4>
                                                                        <p class="mrgn5" style="margin-bottom:0px;"><span class="label label-default vd_bg-blue vd_white">0</span> Pending</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">1</span> Behind</p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4 style="font-size:15px;">Release Request</h4>
                                                                        <p class="mrgn5" data-toggle="modal" data-target="#ReleaseRequestsent" style="margin-bottom: 14px;"><span class="label label-default vd_bg-blue vd_white" style="padding:4px;font-size:14px;font-family: monospace; border-radius: 4px !important;">Sent Request</span></p>
                                                                        <p class="mrgn5" data-toggle="modal" data-target="#ReleaseRequestview"><span class="label label-default vd_bg-blue vd_white" style="padding:4px;font-size:14px;font-family: monospace; border-radius: 4px !important;">View Request</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                            <div class="row mrgn30-0 projectRow no-padmr" style=" border-left: 4px solid #9dc23a;">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">Employer Name<br></p>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4 style="font-size:15px">Design Concept</h4>
                                                                        <p class="mrgn5">Start: 05-07-2017</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">In Progress</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
															<h4 style="font-size:15px;">Status</h4>
                                                                <div style="width: 100px; height: 100px;">
                                                                                <div class="ab" style="position: relative; text-align: center; width: 88px; height: 88px; border-radius: 100%; background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%); background-color: rgb(239, 239, 239);">
                                                                                    <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 84px; height: 84px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 88px; height: 88px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);position:absolute;top:-5px;">65%</span></div>
                                                                                </div>
                                                                            </div>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>All Tasks</h4>
                                                                        <p class="mrgn5" style="margin-bottom:0px;"><span class="label label-default vd_bg-blue vd_white">0</span> Pending</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">1</span> Behind</p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4 style="font-size:15px;">Release Request</h4>
                                                                        <p class="mrgn5" data-toggle="modal" data-target="#ReleaseRequestsent" style="margin-bottom: 14px;"><span class="label label-default vd_bg-blue vd_white" style="padding:4px;font-size:14px;font-family: monospace; border-radius: 4px !important;">Sent Request</span></p>
                                                                        <p class="mrgn5" data-toggle="modal" data-target="#ReleaseRequestview"><span class="label label-default vd_bg-blue vd_white" style="padding:4px;font-size:14px;font-family: monospace; border-radius: 4px !important;">View Request</span></p>
                                                            </div>
                                                        </a>
                                                            </div>
                                                             <div class="row mrgn30-0 projectRow no-padmr" style=" border-left: 4px solid #9dc23a;">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">Employer Name<br></p>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight ">
                                                                <h4 style="font-size:15px">Design Concept</h4>
                                                                        <p class="mrgn5">Start: 05-07-2017</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">In Progress</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <div style="width: 100px; height: 100px;">
																<h4 style="font-size:15px;">Status</h4>
                                                                                <div class="ab" style="position: relative; text-align: center; width: 88px; height: 88px; border-radius: 100%; background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%); background-color: rgb(239, 239, 239);">
                                                                                    <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 84px; height: 84px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 88px; height: 88px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);position:absolute;top:-5px;">65%</span></div>
                                                                                </div>
                                                                            </div>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>All Tasks</h4>
                                                                        <p class="mrgn5" style="margin-bottom:0px;"><span class="label label-default vd_bg-blue vd_white">0</span> Pending</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">1</span> Behind</p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h4 style="font-size:15px;">Release Request</h4>
                                                                        <p class="mrgn5" data-toggle="modal" data-target="#ReleaseRequestsent" style="margin-bottom: 14px;"><span class="label label-default vd_bg-blue vd_white" style="padding:4px;font-size:14px;font-family: monospace; border-radius: 4px !important;">Sent Request</span></p>
                                                                        <p class="mrgn5" data-toggle="modal" data-target="#ReleaseRequestview"><span class="label label-default vd_bg-blue vd_white" style="padding:4px;font-size:14px;font-family: monospace; border-radius: 4px !important;">View Request</span></p>
                                                            </div>
                                                        </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade " id="ReleaseRequestsent" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">
                                            <div class="modal-dialog" style="width:600px;">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top:10px;">
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">Job Title </h3>
                                                        </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">2000,- €</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top:10px;margin-bottom:8px;">
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;padding:0px;"><input class="form-control" placeholder="Add Request Title" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;text-align:center;font-family:OpenSans-Regular;" type="text"></div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;padding:0px;"><input class="form-control" placeholder="Add Amount € " aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;text-align:center;font-family:OpenSans-Regular;" type="text"></div>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;"> <textarea style="width:100%;resize:none;font-family:OpenSans-Regular;">text box</textarea> </div>
                                                    <hr class="hfkaniei">
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-4 col-lg-offset-4"><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Send</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
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
                                            <div id="ascrail2006" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 1;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2006-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
                                            </div>
                                            <div id="ascrail2004" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2004-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                        </div>
                                        <div class="modal fade " id="ReleaseRequestview" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">
                                            <div class="modal-dialog" style="width:600px;">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:6px;">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Release History</h4>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top:10px;">
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">Job Title </h3>
                                                        </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">2000,- €</h3>
                                                        </div>
                                                    </div>
                                                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-3">Request Title</div>
                                                            <div class="col-sm-3">Date/ Time</div>
                                                            <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                                                            <div class="col-sm-1" style="padding-top: 7px;"><span class="label label-default vd_bg-green vd_white">Done</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-3">Request Title</div>
                                                            <div class="col-sm-3">Date/ Time</div>
                                                            <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                                                            <div class="col-sm-1" style="padding-top: 7px;"><span class="label label-default vd_bg-green vd_white">Done</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-3">Request Title</div>
                                                            <div class="col-sm-3">Date/ Time</div>
                                                            <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                                                            <div class="col-sm-1" style="padding-top: 7px;"><span class="label label-default vd_bg-red vd_white">Open</span></div>
                                                        </div>
                                                    </div>
                                                    <h4 class="text-center2 modal-title custom_align ">Refund History</h4>
                                                    <hr class="hfkaniei">
                                                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-3">Request Title</div>
                                                            <div class="col-sm-3">Date/ Time</div>
                                                            <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                                                            <div class="col-sm-1" style="padding-top: 7px;"><span class="label label-default vd_bg-green vd_white">Done</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="bacgcustom row margin6 projectRow vd_bdl-green brdl4" style="margin-bottom: 0px !important;padding:4px;">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-3 text-center2">Request Title</div>
                                                            <div class="col-sm-3 text-center2">Request Title</div>
                                                            <div class="col-sm-3 text-center2">Request Title</div>
                                                            <div class="col-sm-3 text-center2">Request Title</div>
                                                        </div>
                                                    </div>
                                                    <div class="bacgcustom row margin6 projectRow vd_bdl-gray brdl4" style="margin-top: 0px !important;background:#f6f6f6;color:black">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-3 text-center2">2000,- €</div>
                                                            <div class="col-sm-3 text-center2">2000,- €</div>
                                                            <div class="col-sm-3 text-center2">2000,- €</div>
                                                            <div class="col-sm-3 text-center2">2000,- €</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-4 col-lg-offset-4"><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Ok</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
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
                                            <div id="ascrail2006" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 1;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2006-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
                                            </div>
                                            <div id="ascrail2005" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2005-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ContractDisputs">
                                        <div class="vd_content-section clearfix" style=" padding-top: 0px;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pdng20">
                                                        <div class="" style=" margin-top: 25px;">
                                                            
															
															 <div class="row mrgn30-0 projectRow no-padmr" style=" border-left: 4px solid #9dc23a;">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJobDiputs" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                            <p class="mrgn0">Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight " style="width: 222px;">
                                                               <h4>Design Concept</h4>
                                                                        <p class="mrgn5">Work Start: 05-07-2017 12:05:00</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-red vd_white">In disputed</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
															<h4 style="font-size:15px;">Status</h4>
                                                                <div style="width: 100px; height: 100px;">
                                                                                <div class="ab" style="position: relative; text-align: center; width: 88px; height: 88px; border-radius: 100%; background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%); background-color: rgb(239, 239, 239);">
                                                                                    <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 84px; height: 84px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 88px; height: 88px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);position:absolute;top:-5px;">65%</span></div>
                                                                                </div>
                                                                            </div>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>All Tasks</h4>
                                                                        <p class="mrgn5" style="margin-bottom:0px;"><span class="label label-default vd_bg-blue vd_white">0</span> Pending</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">1</span> Behind</p>
                                                            </div>
                                                            <div class="col-sm-2" style="text-align: center;">
                                                               <h4>Tickets</h4>
																	
											
																	<button style="padding: 1px 15px;"  type="button" class="btn btn-primary btn-sm">Open Ticket</button>
																	
                                                            </div>
                                                        </a>
                                                            </div>
															<div class="row mrgn30-0 projectRow no-padmr" style=" border-left: 4px solid #9dc23a;">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#category1" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                            <p class="mrgn0">Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight " style="width: 222px;">
                                                               <h4>Design Concept</h4>
                                                                        <p class="mrgn5">Work Start: 05-07-2017 12:05:00</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-red vd_white">In disputed</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
															<h4 style="font-size:15px;">Status</h4>
                                                                <div style="width: 100px; height: 100px;">
                                                                                <div class="ab" style="position: relative; text-align: center; width: 88px; height: 88px; border-radius: 100%; background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%); background-color: rgb(239, 239, 239);">
                                                                                    <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 84px; height: 84px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 88px; height: 88px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);position:absolute;top:-5px;">65%</span></div>
                                                                                </div>
                                                                            </div>
                                                            </div>
                                                            <div class="col-sm-2 brdRight">
                                                                <h4>All Tasks</h4>
                                                                        <p class="mrgn5" style="margin-bottom:0px;"><span class="label label-default vd_bg-blue vd_white">0</span> Pending</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">1</span> Behind</p>
                                                            </div>
                                                            <div class="col-sm-2" style="text-align: center;">
                                                               <h4>Tickets</h4>
																	
											
																	<button style="padding: 1px 15px;"  type="button" class="btn btn-primary btn-sm">Ticket ID</button>
																	<div style=" margin-top:7px;">
																	<button style="padding: 1px 15px;" type="button" class="btn btn-primary btn-sm">Answer 2</button>
																	</div>
                                                            </div>
                                                        </a>
                                                            </div>
															
                                                            
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ContractCanceled">
                                        <div class="vd_content-section clearfix" style=" padding-top: 0px;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pdng20">
                                                        <div class="" style=" margin-top: 25px;">
                                                            
															<div class="row mrgn30-0 projectRow no-padmr" style=" border-left: 4px solid #9dc23a; text-align:center;">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob2" title="">
                                                            <div class="col-sm-3 brdRight no-padmr" style=" margin-top: 10px;">
                                                                <div class="col-lg-6 no-padmr"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImg no-padmr"> </div>
                                                                <div class="col-lg-6 ad-padmr" style="" >
                                                                    <p class="mrgn0">User ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
                                                                            <p class="mrgn0">Name: <span class="label label-default vd_bg-green vd_white">Mohamed alaa</span></p>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 brdRight " style="width: 222px;">
                                                               <h4>Design Concept</h4>
                                                                        <p class="mrgn5">Work Start: 05-07-2017 12:05:00</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">Canceld</span></p>
                                                            </div>
                                                            <div class="col-sm-2 brdRight" style="width: 222px;">
															<h4 style="font-size:15px;">Status</h4>
                                                                <div class="circleBar" data-percent="65">
                                                                            <div style="width: 100px; height: 100px;">
                                                                                <div class="ab" style="position: relative; text-align: center; width: 88px; height: 88px; border-radius: 100%; background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%); background-color: rgb(239, 239, 239);">
                                                                                    <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 84px; height: 84px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 88px; height: 88px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);position:absolute;top:-5px;">65%</span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                            </div>
                                                            <div class="col-sm-2 brdRight" style="width: 222px; border-right: white;">
                                                                                                                                        <h4>All Tasks</h4>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">0</span> Pending</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">1</span> Behind</p>
                                                            </div>
                                                            
                                                        </a>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ContractDone">
                                        <div class="vd_content-section clearfix" style=" padding-top: 0px;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pdng20">
                                                        <div class="" style=" margin-top: 25px;">
                                                           <div class="row mrgn30-0 projectRow no-padmr" style="border-left:4px solid rgba(17, 60, 154, 0.77); text-align: center;">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#" title="">
                                                                   
                                                                    <div class="col-sm-2 brdRight" style="margin-top: 10px; height: 106px;">
                                                                        <h4 style="font-size:15px">Design Concept</h4>
                                                                        <p class="mrgn5">Start: 05-07-2017</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">Done</span></p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style=" margin-top: 10px;width:20%; height: 106px;">
                                                                        <h4>All Tasks</h4>
                                                                        <p class="mrgn5" style="margin-bottom:0px;"><span class="label label-default vd_bg-blue vd_white">0</span> Pending</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">1</span> Behind</p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style=" margin-top: 10px;width:20%; height: 106px;">
                                                                        <h4 style="font-size:15px;">Close Job Request</h4>
                                                                        <p class="mrgn5" style="margin-bottom: 19px;" data-toggle="modal" data-target="#xc"><span class="label label-default vd_white" style="background: rgba(151, 190, 46, 0.72);border-radius: 4px !important; padding: 4px;font-size: 14px;font-family: monospace;">Close Job Request</span></p>
                                                                        <p class="mrgn5"><span class="label label-default vd_white" style="background: rgba(151, 190, 46, 0.72);border-radius: 4px !important; padding: 4px;font-size: 14px;font-family: monospace;">12.10.2017-17:30</span></p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style=" margin-top: 10px;width:20%; height: 106px;">
                                                                        <h4 style="font-size:15px;">Request Status</h4>
                                                                        <p class="mrgn5" style="margin-bottom: 19px;" data-toggle="modal" data-target="#deniedcontractdone"><span class="label label-default vd_white" style="background: red;border-radius: 4px !important; padding: 4px;font-size: 14px;font-family: monospace;">Denied (Date)</span></p>
                                                                    </div>
                                                                    <div class="col-sm-1 " style=" margin-top: 10px;width:20%">
                                                                        <h4 style="font-size:15px;">Release Request</h4>
                                                                        <p class="mrgn5" style="margin-bottom: 19px;" data-toggle="modal" data-target="#contractdoneReleaseRequestsent"><span class="label label-default vd_white" style="background: red;border-radius: 4px !important; padding: 4px;font-size: 14px;font-family: monospace;">Sent Request</span></p>
                                                                    </div>
                                                                </a>
                                                            </div>
															
															<div class="row mrgn30-0 projectRow no-padmr" style="border-left:4px solid rgba(17, 60, 154, 0.77); text-align: center;">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#" title="">
                                                                   
                                                                    <div class="col-sm-2 brdRight" style="margin-top: 10px; height: 106px;">
                                                                        <h4 style="font-size:15px">Design Concept</h4>
                                                                        <p class="mrgn5">Start: 05-07-2017</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">Done</span></p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style=" margin-top: 10px;width:20%; height: 106px;">
                                                                        <h4>All Tasks</h4>
                                                                        <p class="mrgn5" style="margin-bottom:0px;"><span class="label label-default vd_bg-blue vd_white">0</span> Pending</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">1</span> Behind</p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style=" margin-top: 10px;width:20%; height: 106px;">
                                                                        <h4 style="font-size:15px;">Close Job Request</h4>
                                                                        <p class="mrgn5" style="margin-bottom: 19px;" data-toggle="modal" data-target="#xc"><span class="label label-default vd_white" style="background: rgba(151, 190, 46, 0.72);border-radius: 4px !important; padding: 4px;font-size: 14px;font-family: monospace;">Close Job Request</span></p>
                                                                        <p class="mrgn5"><span class="label label-default vd_white" style="background: rgba(151, 190, 46, 0.72);border-radius: 4px !important; padding: 4px;font-size: 14px;font-family: monospace;">12.10.2017-17:30</span></p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style=" margin-top: 10px;width:20%; height: 106px;">
                                                                        <h4 style="font-size:15px;">Request Status</h4>
                                                                        <p class="mrgn5" style="margin-bottom: 19px;" data-toggle="modal" data-target="#deniedcontractdone"><span class="label label-default vd_white" style="background: red;border-radius: 4px !important; padding: 4px;font-size: 14px;font-family: monospace;">Denied (Date)</span></p>
                                                                    </div>
                                                                    <div class="col-sm-1 " style=" margin-top: 10px;width:20%">
                                                                        <h4 style="font-size:15px;">Release Request</h4>
                                                                        <p class="mrgn5" style="margin-bottom: 19px;" data-toggle="modal" data-target="#contractdoneReleaseRequestsent"><span class="label label-default vd_white" style="background: red;border-radius: 4px !important; padding: 4px;font-size: 14px;font-family: monospace;">Sent Request</span></p>
                                                                    </div>
                                                                </a>
                                                            </div>
															 
															 
										
													
													
													
													
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade " id="contractdoneReleaseRequestsent" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">
                                            <div class="modal-dialog" style="width:600px;">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top:10px;">
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">Job Title </h3>
                                                        </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">2000,- €</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top:10px;margin-bottom:8px;">
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;padding:0px;"><input class="form-control" placeholder="Add Request Title" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;text-align:center;font-family:OpenSans-Regular;" type="text"></div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;padding:0px;"><input class="form-control" placeholder="Add Amount € " aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;text-align:center;font-family:OpenSans-Regular;" type="text"></div>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;"> <textarea style="width:100%;resize:none;font-family:OpenSans-Regular;">text box</textarea> </div>
                                                    <hr class="hfkaniei">
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-4 col-lg-offset-4"><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Send</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
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
                                            <div id="ascrail2006" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 1;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2006-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
                                            </div>
                                            <div id="ascrail2017" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2017-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                        </div>
                                        <div class="modal fade " id="deniedcontractdone" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">
                                            <div class="modal-dialog">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:6px">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Client Denied</h4>
                                                    </div>
                                                    <div class="ourteamdiver" style="border-radius:0px;margin-top:0px;">
                                                        <div class="overflowhidde">
                                                            <div class="ourteamblur"> </div>
                                                        </div>
                                                        <hr class="rulerourtema">
                                                        <div class="imgeourteamperson"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
                                                        <h3 class="ourteamjopposition text-center2">Web Developer </h3>
                                                        <h3 class="ourteamviewmore text-center2" style="color:white">Project ID</h3>
                                                        <h3 class="ourteamviewmore text-center2" style="color:white">BS-123455</h3>
                                                    </div>
                                                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-bottom: 12px !important;">
                                                        <div class="col-sm-12">
                                                            <div class="progress red">
                                                                <div class="progress-bar" style="width:75%; background:red;">
                                                                    <div class="progress-value">75%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><textarea style="width:100%;resize:none;height:147px;"> User Text Job Shit/ Design Shit bla bla text </textarea>
                                                    <hr class="hfkaniei">
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-6 "><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Accepte</button></div>
                                                        <div class="col-lg-6 ">
                                                            <a href="index.html#ContractStarted" aria-controls="ContractStarted" role="tab" data-toggle="tab" aria-expanded="false"> <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/false.png" style="width:23px;margin-right: 31px;"></span>Denied</button> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
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
                                            <div id="ascrail2012" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 1;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2012-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
                                            </div>
                                            <div id="ascrail2018" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2018-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                        </div>
                                        <div class="modal fade " id="xc" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">
                                            <div class="modal-dialog">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:6px">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Close Job Request</h4>
                                                    </div>
                                                    <div class="ourteamdiver" style="border-radius:0px;margin-top:0px;">
                                                        <div class="overflowhidde">
                                                            <div class="ourteamblur"> </div>
                                                        </div>
                                                        <hr class="rulerourtema">
                                                        <div class="imgeourteamperson"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
                                                        <h3 class="ourteamjopposition text-center2">Web Developer </h3>
                                                        <h3 class="ourteamviewmore text-center2" style="color:white">Project ID</h3>
                                                        <h3 class="ourteamviewmore text-center2" style="color:white">BS-123455</h3>
                                                    </div>
                                                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-bottom: 12px !important;">
                                                        <div class="col-sm-12">
                                                            <div class="progress green">
                                                                <div class="progress-bar" style="width:75%; background:#5fad56;">
                                                                    <div class="progress-value">75%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4">
                                                        <div class="col-sm-12">
                                                            <div class="progress green">
                                                                <div class="progress-bar" style="width:75%; background:#5fad56;">
                                                                    <div class="progress-value">75%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12" style=" margin-top: 11px;">
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
                                                    <div class="sendtocolse">Sent request to Close the Job</div>
                                                    <hr class="hfkaniei">
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-6 col-lg-offset-3"><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Ok</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
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
                                            <div id="ascrail2012" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 1;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2012-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
                                            </div>
                                            <div id="ascrail2019" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2019-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ContractDeliverd">
                                        <div class="vd_content-section clearfix" style=" padding-top: 0px;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pdng20">
                                                        <div class="" style=" margin-top: 25px;">
                                                            <div class="row mrgn30-0 projectRow no-padmr" style=" border-left: 4px solid #9dc23a; text-align:center;">
                                                                <a href="javascript:void(0);" title="">
                                                                    
                                                                    <div class="col-sm-2 brdRight" style="margin-top: 10px;width:20%;height:106px">
                                                                        <h4 style="font-size:15px">Design Concept</h4>
                                                                        <p class="mrgn5">Start: 05-07-2017</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">Deliverd</span></p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style=" margin-top: 10px;width:20%;height:134px">
																	<h4 style="font-size:15px">Status</h4>
                                                                        <div class="circleBar" data-percent="65">
																		
                                                                            <div style="width: 100px; height: 100px;">
                                                                                <div class="ab" style="position: relative; text-align: center; width: 88px; height: 88px; border-radius: 100%; background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%); background-color: rgb(239, 239, 239);">
                                                                                    <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 84px; height: 84px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 88px; height: 88px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);position:absolute;top:-5px;">65%</span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style=" margin-top: 10px;width:20%;height:106px">
                                                                        <h4>All Tasks</h4>
                                                                        <p class="mrgn5" style="margin-bottom:0px;"><span class="label label-default vd_bg-blue vd_white">0</span> Pending</p>
                                                                        <p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">1</span> Behind</p>
                                                                    </div>
                                                                   
                                                                    <div class="col-sm-1 brdRight" style=" margin-top: 10px;width:20%;height:106px">
                                                                        <h4>Total earn</h4>
                                                                        <h5>400$</h5>
                                                                    </div>
                                                                    <div class="col-sm-1 " style=" margin-top: 10px;width:20%;height:106px">
                                                                        <h4>Review</h4> <img src="<?php echo base_url('assets/'); ?>img/149962454497.png" class="img-responsive"> </div>
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
    <div class="modal right fade infoModal" id="viewThisJob" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index:1041;">
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
                                                    <hr class="hfkaniei">
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-6 "><button type="button" class="btn vd_btn " data-toggle="modal" data-target="#selectusertoworkcontractoffer" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Accepte</button></div>
                                                        <div class="col-lg-6 "> <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/false.png" style="width:23px;margin-right: 31px;"></span>Denied</button> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
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
                                            <div id="ascrail2002" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2002-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
    </div>
   <div class="modal fade" id="viewThisJobDiputs" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
    <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
        <div class="modal-header" style="border-top:8px solid red"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align text-center2" id="Heading">Contract  Disputes</h4>
        </div>
        <div class="ourteamdiver2" style="margin-top:0px;">
            <div class="overflowhidde2">
                <div class="ourteamblur22"> </div>
            </div>
            <hr class="rulerourtema">
            <div class="imgeourteamperson2"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
            <h4 class="text-center2" style="font-size:15px;margin-top:46px"><strong style="color:#48962e">Project ID</strong></h4>
            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project Budget</strong></h4>
            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">200,$</strong></h4>
             <h4 class="text-center2" style="font-size:15px;"><strong style="color:red">Ticket Open it by</strong></h4>
            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">User/Client</strong></h4>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                <h3 style="margin: 3px;text-align:center;font-size:21px;color:#ddd">Work Start</h3>
            </div>
            <div class="col-lg-6" style="border:1px solid #aab7a2">
                <h3 style="margin: 3px;text-align:center;font-size:21px;color:#ddd">Work End</h3>
            </div>
        </div>
        <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
            <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                <h3 style="margin: 3px;text-align:center;font-size:21px; color:#ddd">17.07.2017</h3>
            </div>
            <div class="col-lg-6" style="border:1px solid #aab7a2">
                <h3 style="margin: 3px;text-align:center;font-size:21px;color:#ddd">17:00</h3>
            </div>
        </div>
        <hr class="hfkaniei">
        <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
            <div class="col-lg-6 col-lg-offset-3"><button type="button" class="btn vd_btn" data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Ok</button></div>
        </div>
    </div>
    </div>
    <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
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
    <div id="ascrail2038" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
    </div>
    <div id="ascrail2038-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
    <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
    </div>
    </div>
     <div class="modal fade" id="viewThisJob2" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
    <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
        <div class="modal-header" style="border-top:8px solid red"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align text-center2" id="Heading">Canceled  Contract</h4>
        </div>
        <div class="ourteamdiver2" style="margin-top:0px;">
            <div class="overflowhidde2">
                <div class="ourteamblur22"> </div>
            </div>
            <hr class="rulerourtema">
            <div class="imgeourteamperson2"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
            <h4 class="text-center2" style="font-size:15px;margin-top:46px"><strong style="color:#48962e">Project ID</strong></h4>
            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project Budget</strong></h4>
            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">200,$</strong></h4>
             <h4 class="text-center2" style="font-size:15px;"><strong style="color:red">Canceled by</strong></h4>
            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">User/Client</strong></h4>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                <h3 style="margin: 3px;text-align:center;font-size:21px;color:#ddd">Work Start</h3>
            </div>
            <div class="col-lg-6" style="border:1px solid #aab7a2">
                <h3 style="margin: 3px;text-align:center;font-size:21px;color:#ddd">Work End</h3>
            </div>
        </div>
        <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
            <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                <h3 style="margin: 3px;text-align:center;font-size:21px; color:#ddd">17.07.2017</h3>
            </div>
            <div class="col-lg-6" style="border:1px solid #aab7a2">
                <h3 style="margin: 3px;text-align:center;font-size:21px;color:#ddd">17:00</h3>
            </div>
        </div>
        <hr class="hfkaniei">
        <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
            <div class="col-lg-6 col-lg-offset-3"><button type="button" class="btn vd_btn" data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Ok</button></div>
        </div>
    </div>
    </div>
    <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
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
    <div id="ascrail2038" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
    </div>
    <div id="ascrail2038-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
    <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
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
