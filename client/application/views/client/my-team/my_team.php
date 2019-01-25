<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Team</title>
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
                  <li role="presentation" class="active" id="myteambutton">
                    <a href="index.html#MyTeam235" aria-controls="MyTeam235" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-users " aria-hidden="true" style="width:auto"></i> My Team </a>
                </li>
                <li role="presentation" class="" id="OurTasks5154button">
                    <a href="index.html#OurTasks5154" aria-controls="OurTasks5154" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-tasks" aria-hidden="true"style="width:auto"></i> Our Tasks </a>
                </li>
               <ul class="nav navbar-nav navbar-right">
                   <li>
                       <button type="button" id="add_new_service" data-toggle="modal" data-target="#addnewteam" class="btn btn-block btn-grey btn-xs aligncenter"> + | Add New Employee</button>
                   </li>
                     <li class="profile"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
			  
              <li class=""><a href="index.html#Settings" data-toggle="tab"><i class="fa fa-cogs" aria-hidden="true"></i></a></li>
                  
                </ul>
          </ul>
        </div>

      </div>
   </nav>
    
    <div class="modal fade " id="addnewteam" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">
                                            <div class="modal-dialog" style="width: 820px;">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Add Emplyeer</h4>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImgfordocumnet"> </div>
                                                        <div class="col-lg-8" style="border-left:1px solid #d5d2d2;margin-top: 14px;padding:0px;">
                                                            <div class="col-lg-12">
                                                                <div class="col-lg-2" style="padding: 0;">
                                                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Gender :</h3>
                                                                </div>
                                                                <div class="col-lg-5 col-md-6 col-sm-6">
                                                                    <div class="input-group"> <span class="input-group-addon"> <input aria-label="..." required="" name="Quelleclinique" value="CliniqueAuditiveGougeon" type="radio"> </span> <span class="form-control" style="margin-bottom:0px;">Male</span> </div>
                                                                </div>
                                                                <div class="col-lg-1"></div>
                                                                <div class="col-lg-5 col-md-6 col-sm-6">
                                                                    <div class="input-group"> <span class="input-group-addon"> <input aria-label="..." required="" name="Quelleclinique" value="CliniquedeLacouphènedeMontréal" type="radio"> </span> <span class="form-control" style="margin-bottom:0px;">Female</span> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Position :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Name :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Last Name :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Birthday :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">E-Mail :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Phone :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Street No :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">City :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 43.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">PostCode :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 56.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12" style="margin-top:15px;">
                                                        <hr class="hfkaniei"> </div>
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-3 col-lg-offset-5 "><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Add</button></div>
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
                                            </div>
                                        </div>
    
 
    
  <div class="wrapper">
    <div class="container">
      <div class="desh-content">
        <div class="row">
          
          <?php $this->load->view('client/shared/side_navigation'); ?>      
          
            <div class="afix-content client-desh">
                        <div class="col-md-12 col-sm-12 col-xs-12 pull-left no-padding">
                          
                            <div class="border-box border-blue">
                                <!-- <div class="cover-upload" style="background:rgba(0, 0, 0, 0) url('http://clubgoodfood.com/freelance/user-deshboard/img/country_road_summer_drive.jpg') repeat scroll center center;"> <div class="single-image"> <div class="clear-bg-hight"> <input type="file" name="upload" class="cover-uploadimg"/> <div class="fa fa-camera"></div></div></div></div>--></div>
                            <div class="border-box border-blue custom-page-content" style="border-width:0px;">
                                
                                
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="MyTeam235">
                                        <div class="vd_content-section clearfix">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pdng20">
                                                        <div class="panel widget">
                                                            <div class="">
                                                                <div class="col-lg-4">
                                                                    <div class="ourteamdiver" id="clListBox">
                                                                        <div class="overflowhidde">
                                                                            <div class="ourteamblur"> </div>
                                                                        </div>
                                                                        <hr class="rulerourtema">
                                                                        <div class="imgeourteamperson"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
                                                                        <h3 class="ourteamjopposition text-center2">Web Developer </h3>
                                                                        <h3 class="ourteamviewmore text-center2">More description here </h3>
                                                                        <div class="clHover">
                                                                            <div class="col-md-12">
                                                                                <a class="hover-eye" data-toggle="modal" data-target="#addnewteam" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                                                                <button class="hover-eye fa fa-trash" id="deleteClient1" data-toggle="modal" data-target="#deleteClientmodel" title="Remove"></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="ourteamdiver" id="clListBox">
                                                                        <div class="overflowhidde">
                                                                            <div class="ourteamblur"> </div>
                                                                        </div>
                                                                        <hr class="rulerourtema">
                                                                        <div class="imgeourteamperson"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
                                                                        <h3 class="ourteamjopposition text-center2">Web Developer </h3>
                                                                        <h3 class="ourteamviewmore text-center2">More description here </h3>
                                                                        <div class="clHover">
                                                                            <div class="col-md-12"> <a class="hover-eye" data-toggle="modal" data-target="#addnewteam" title="Edit"><i class="fa fa-pencil-square-o"></i></a> <button class="hover-eye fa fa-trash" id="deleteClient1" data-toggle="modal" data-target="#deleteClientmodel" title="Remove"></button> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="ourteamdiver" id="clListBox">
                                                                        <div class="overflowhidde">
                                                                            <div class="ourteamblur"> </div>
                                                                        </div>
                                                                        <hr class="rulerourtema">
                                                                        <div class="imgeourteamperson"> <img src="<?php echo base_url('assets/'); ?>img/testi_07.png"> </div>
                                                                        <h3 class="ourteamjopposition text-center2">Web Developer </h3>
                                                                        <h3 class="ourteamviewmore text-center2">More description here </h3>
                                                                        <div class="clHover">
                                                                            <div class="col-md-12"> <a class="hover-eye" data-toggle="modal" data-target="#addnewteam" title="Edit"><i class="fa fa-pencil-square-o"></i></a> <button class="hover-eye fa fa-trash" id="deleteClient1" data-toggle="modal" data-target="#deleteClientmodel" title="Remove"></button> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="addnewteam" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">
                                            <div class="modal-dialog" style="width: 820px;">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Add Emplyeer</h4>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" class="projectImgfordocumnet"> </div>
                                                        <div class="col-lg-8" style="border-left:1px solid #d5d2d2;margin-top: 14px;padding:0px;">
                                                            <div class="col-lg-12">
                                                                <div class="col-lg-2" style="padding: 0;">
                                                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Gender :</h3>
                                                                </div>
                                                                <div class="col-lg-5 col-md-6 col-sm-6">
                                                                    <div class="input-group"> <span class="input-group-addon"> <input aria-label="..." required="" name="Quelleclinique" value="CliniqueAuditiveGougeon" type="radio"> </span> <span class="form-control" style="margin-bottom:0px;">Male</span> </div>
                                                                </div>
                                                                <div class="col-lg-1"></div>
                                                                <div class="col-lg-5 col-md-6 col-sm-6">
                                                                    <div class="input-group"> <span class="input-group-addon"> <input aria-label="..." required="" name="Quelleclinique" value="CliniquedeLacouphènedeMontréal" type="radio"> </span> <span class="form-control" style="margin-bottom:0px;">Female</span> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Position :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Name :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Last Name :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Birthday :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">E-Mail :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Phone :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Street No :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">City :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6" style="margin-top:16px;">
                                                                <div class="form-group">
                                                                    <div class="col-lg-2" style="padding:0px;width: 43.666667%;">
                                                                        <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">PostCode :</h3>
                                                                    </div>
                                                                    <div class="col-lg-10" style="width: 56.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="exampleInputName2" placeholder="Jane Doe" name="Nom2" required="" type="text"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12" style="margin-top:15px;">
                                                        <hr class="hfkaniei"> </div>
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-3 col-lg-offset-5 "><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Add</button></div>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="OurTasks5154">
                                        <div class="vd_content-section clearfix" style=" padding-top: 0px;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pdng20">
                                                        <div class="panel widget container-fluid" style="padding: 0px; margin-top: 25px; border-left:5px solid rgba(151, 190, 46, 0.72);">
                                                            <div class="row mrgn30-0 projectRow" style="padding:0;" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                                <a href="javascript:void(0);" title="">
                                                                    <div class="col-sm-2" style="padding:0x; width:15%"> <img src="<?php echo base_url('assets/'); ?>img/testi_03.png" alt="" style="padding: 0px;"> </div>
                                                                    <div class="col-sm-2 brdRight" style="height: 106px;width:14%">
                                                                        <h4 class="text-center2">Employer</h4>
                                                                        <p class="mrgn0" style="text-align:center;margin-top:15px !important;"> <span class=""> Mohammad</span></p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style="height: 106px;width:14%">
                                                                        <h4 style="font-size:18px" class="text-center2">Job Title</h4>
                                                                        <p class="mrgn5 text-center2">Job ID</p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style="width:12%; height: 106px;">
                                                                        <h4 class="text-center2">Task Done</h4>
                                                                        <p class="mrgn5" style="margin-bottom: 19px;text-align:center;margin-top: 33px;"><span class="label label-default vd_white" style="background: rgba(151, 190, 46, 0.72);border-radius: 4px !important;padding: 8px 11px 8px 11px;font-size: 14px;font-family: monospace;">1</span></p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style="width:14%; height: 106px;">
                                                                        <h4 class="text-center2">In progress</h4>
                                                                        <p class="mrgn5" style="margin-bottom: 19px;text-align:center;margin-top: 33px;"><span class="label label-default vd_white" style="background:rgba(35, 112, 158, 0.74);border-radius: 4px !important;padding: 8px 11px 8px 11px;font-size: 14px;font-family: monospace;">1</span></p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight" style="width:14%; height: 106px;">
                                                                        <h4 class="text-center2">Task Stoped</h4>
                                                                        <p class="mrgn5" style="margin-bottom: 19px;text-align:center;margin-top: 33px;"> <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i> <span class="label label-default vd_white" style="background:rgba(244, 16, 16, 0.63);border-radius: 4px !important;padding: 8px 11px 8px 11px;font-size: 14px;font-family: monospace;">1</span></p>
                                                                    </div>
                                                                    <div class="col-sm-2&nbsp;" style="">
                                                                        <h4 class="text-center2">Task Behind</h4>
                                                                        <p class="mrgn5" style="margin-bottom: 19px;text-align:center;margin-top: 33px;"> <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i> <span class="label label-default vd_white" style="background:rgba(230, 246, 11, 0.9);border-radius: 4px !important;padding: 8px 11px 8px 11px;font-size: 14px;font-family: monospace;">1</span></p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-12" style="padding-top: 1%;">
                                                                <div class="collapse" id="collapseExample">
                                                                    <div class="well">
                                                                        <div class="row margin6 projectRow2 vd_bg-light-grey vd_bdl-blue brdl4" style="padding-top:6%">
                                                                            <div class="col-sm-12">
                                                                                <div class="col-sm-3" style="margin-top:-12px">Task Title</div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="progress blue">
                                                                                        <div class="progress-bar" style="width:75%; background:#3485ef;">
                                                                                            <div class="progress-value">75%</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-1" style="margin-top:-14px; border-right: 1px solid rgba(168, 165, 165, 0.48);"><img src="<?php echo base_url('assets/'); ?>img/play.png" style="width:25px;"></div>
                                                                                <div class="col-sm-2 cursorpointer" style="padding-top: 7px;margin-top: -22px;" id="try1"><img src="<?php echo base_url('assets/'); ?>img/options.png" style="width:25px;margin-right:15px;" class="cursorpointer"> Options</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row margin6 projectRow2 vd_bg-light-grey vd_bdl-yellow brdl4">
                                                                            <div class="col-sm-12">
                                                                                <div class="col-sm-3" style="margin-top:-12px">Task Title</div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="progress yellow">
                                                                                        <div class="progress-bar" style="width:75%; background:#e8d324;">
                                                                                            <div class="progress-value">75%</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-1" style="margin-top:-14px; border-right: 1px solid rgba(168, 165, 165, 0.48);"><img src="<?php echo base_url('assets/'); ?>img/pause.png" style="width:25px;" data-toggle="modal" data-target="#jopstopedandpaused" class="cursorpointer"></div>
                                                                                <div class="col-sm-2 cursorpointer" style="padding-top: 7px;margin-top: -22px;" id="try2"><img src="<?php echo base_url('assets/'); ?>img/options.png" style="width:25px;margin-right:15px;" class="cursorpointer"> Options</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row margin6 projectRow2 vd_bg-light-grey vd_bdl-red brdl4">
                                                                            <div class="col-sm-12">
                                                                                <div class="col-sm-3" style="margin-top:-12px">Task Title</div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="progress red">
                                                                                        <div class="progress-bar" style="width:75%; background:red;">
                                                                                            <div class="progress-value">75%</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-1" style="margin-top:-14px; border-right: 1px solid rgba(168, 165, 165, 0.48);"><img src="<?php echo base_url('assets/'); ?>img/stop.png" style="width:25px;" data-toggle="modal" data-target="#jopstopedandpaused" class="cursorpointer"></div>
                                                                                <div class="col-sm-2 cursorpointer" style="padding-top: 7px;margin-top: -22px;" id="try3"><img src="<?php echo base_url('assets/'); ?>img/options.png" style="width:25px;margin-right:15px;"> Options</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row margin6 projectRow2 vd_bg-light-grey vd_bdl-green brdl4">
                                                                            <div class="col-sm-12">
                                                                                <div class="col-sm-3" style="margin-top:-12px">Task Title</div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="progress green2">
                                                                                        <div class="progress-bar" style="width:100%; background:#9DC23A ;">
                                                                                            <div class="progress-value">100%</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-1" style="margin-top:-14px; border-right: 1px solid rgba(168, 165, 165, 0.48);"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:25px;"></div>
                                                                                <div class="col-sm-2 cursorpointer" style="padding-top: 7px;margin-top: -22px;" id="try4"><img src="<?php echo base_url('assets/'); ?>img/options.png" style="width:25px;margin-right:15px;"> Options</div>
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
                                        <div class="modal fade " id="jopstopedandpaused" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;padding-left: 17px;">
                                            <div class="modal-dialog">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Job Stoped</h4>
                                                    </div>
                                                    <div class="col-lg-12 selectpayement" style="margin-bottom: 16px;">
                                                        <div class="col-lg-6 borderbottomtrans ">
                                                            <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;font-size: 18px;"><img src="<?php echo base_url('assets/'); ?>img/play.png" style="width:25px;"> Start the Task</h3>
                                                        </div>
                                                        <div class="col-lg-6 borderbottomtrans ">
                                                            <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;font-size: 18px;"><img src="<?php echo base_url('assets/'); ?>img/pause.png" style="width:25px;"> Pause the Task</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">Work Start</h3>
                                                        </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2">
                                                            <h3 style="margin: 3px;text-align:center;font-size:21px;">Work End</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12" style="margin-top:5px; margin-bottom: 10px;">
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none; margin-bottom: 8px;"><input class="form-control" placeholder="Date and Time" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px;" type="text"> <img src="<?php echo base_url('assets/'); ?>img/cal.png" class="calimgae"> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;"><input class="form-control" placeholder="Date and Time" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px;" type="text"> <img src="<?php echo base_url('assets/'); ?>img/cal.png" class="calimgae"> </div>
                                                    </div>
                                                    <hr class="hfkaniei">
                                                    <div class="col-lg-6 col-lg-offset-3"><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>Ok</button></div>
                                                </div>
                                            </div>
                                            <div id="ascrail2071" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2071-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
                                            </div>
                                            <div id="ascrail2083" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2083-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                        </div>
                                        <div class="modal fade " id="Optionsmyteam" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width: 620px;">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Options</h4>
                                                    </div>
                                                    <div class="bhoechie-tab-content" style=" margin-top: 15px;">
                                                        <ul class="nav nav-tabs user-profile-menu" role="tablist">
                                                            <li role="presentation" class="active" id="">
                                                                <a href="index.html#option1" aria-controls="option1" role="tab" data-toggle="tab" aria-expanded="false" id="testoption1"> <i><img src="<?php echo base_url('assets/'); ?>img/play.png" style="width:25px;"></i>Start the Task </a>
                                                            </li>
                                                            <li role="presentation" class="" id="">
                                                                <a href="index.html#option2" aria-controls="option2" role="tab" data-toggle="tab" aria-expanded="true" id="testoption2"> <i><img src="<?php echo base_url('assets/'); ?>img/pause.png" style="width:25px;"></i>Pause the Task </a>
                                                            </li>
                                                            <li role="presentation" class="" id="">
                                                                <a href="index.html#option3" aria-controls="option3" role="tab" data-toggle="tab" aria-expanded="true" id="testoption3"> <i><img src="<?php echo base_url('assets/'); ?>img/stop.png" style="width:25px"></i>Stop the Task </a>
                                                            </li>
                                                            <li role="presentation" class="" id="">
                                                                <a href="index.html#option4" aria-controls="option4" role="tab" data-toggle="tab" aria-expanded="true" id="testoption4"> <i><img src="<?php echo base_url('assets/'); ?>img/progress.png" style="width:25px;"></i>Progress </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="option1">
                                                            <div class="tasktitle">
                                                                <h3 class="text-center2" style="margin:0px;">Task Title</h3>
                                                            </div>
                                                            <div class="col-lg-8 col-lg-offset-2" style="margin-top:15px;">
                                                                <div class="col-lg-12">
                                                                    <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none;">
                                                                        <h3 style="margin: 3px;text-align:center;font-size:21px;">Work Start</h3>
                                                                    </div>
                                                                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                                                                        <h3 style="margin: 3px;text-align:center;font-size:21px;">Work End</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12" style="margin-top:5px; margin-bottom: 10px;">
                                                                    <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none; margin-bottom: 8px;"><input class="form-control" placeholder="Date and Time" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px;" type="text"> </div>
                                                                    <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;"><input class="form-control" placeholder="Date and Time" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px;" type="text"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="option2">
                                                            <div class="onoffswitch3" style="padding-top:2%"> <input name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked="" type="checkbox"> <label class="onoffswitch3-label" for="myonoffswitch3"> <span class="onoffswitch3-inner"> <span class="onoffswitch3-active"><span style="color:white" class="onoffswitch3-switch" onclick="switchActiv()">Started</span></span> <span class="onoffswitch3-inactive"><span style="color:red" class="onoffswitch3-switch" onclick="switchdActiv()">Stopped</span></span> </span> </label>
                                                                <div style="padding-left:15%; color:green" id="switchActivC">The Work has Started</div>
                                                            </div>
                                                            <div class="reviewcontent" id="editor1fef2" style="visibility: hidden; display: none;"> Type... </div>
                                                            <!-- Removed <script>// Replace the <textarea id="editor1"> with a CKEditor // instance, using default configuration. CKEDITOR.replace( 'editor1fef2' ); </script> -->
                                                            <div class="form-group" style="margin: 16px 0px;padding-top:5px; border-top: 1px solid rgb(217, 217, 217);">
                                                                <div class="col-sm-3"><label style=" margin-top: 6px;">Upload Image</label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group"> <span class="input-group-btn"> <span class="btn btn-default btn-file" style="margin-top:0px;"> Browse… <input id="imgInp" type="file"> </span> </span> <input class="form-control" readonly="" style=" margin-bottom: 0;" type="text"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="option3">
                                                            <div class="onoffswitch3" style="padding-top:2%"> <input name="onoffswitch31" class="onoffswitch3-checkbox1" style="display:none" id="myonoffswitch31" checked="" type="checkbox"> <label class="onoffswitch3-label1" for="myonoffswitch31"> <span class="onoffswitch3-inner1"> <span class="onoffswitch3-active1"><span style="color:white;" class="onoffswitch3-switch1" onclick="switchPActiv()">Active</span></span> <span class="onoffswitch3-inactive1"><span style="color:red;" class="onoffswitch3-switch1" onclick="switchPdActiv()">Inactive</span></span> </span> </label>
                                                                <div style="padding-left:15%; color:red" id="switchActivP">The Work is Active</div>
                                                            </div>
                                                            <!-- Removed2 <script>// Replace the <textarea id="editor1"> with a CKEditor // instance, using default configuration. CKEDITOR.replace( 'editor1fef65' ); </script> -->
                                                            <div class="form-group" style=" margin: 16px 0px; padding-top:5px; border-top: 1px solid rgb(217, 217, 217)">
                                                                <div class="col-sm-3"><label style=" margin-top: 6px;">Upload Image</label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group"> <span class="input-group-btn"> <span class="btn btn-default btn-file" style="margin-top:0px;"> Browse… <input id="imgInp" type="file"> </span> </span> <input class="form-control" readonly="" style=" margin-bottom: 0;" type="text"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="option4">
                                                            <div class="col-lg-12" style="margin-bottom: 1%; padding-top: 1%; border-bottom: 1px solid rgb(217, 217, 217);">
                                                                <div class="row margin6 projectRow2 vd_bg-light-grey vd_bdl-blue brdl4">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-3" style="margin-top:-12px">Task Title</div>
                                                                        <div class="col-sm-6">
                                                                            <div class="progress blue">
                                                                                <div class="progress-bar" style="width:75%; background:#3485ef;">
                                                                                    <div class="progress-value">75%</div>
                                                                                </div>
                                                                            </div>
                                                                        </div><input class="col-sm-3" style="margin-top:-12px; padding-left:10%;" value="75%"> </div>
                                                                </div>
                                                            </div>
                                                            <div class="reviewcontent" id="" style="visibility: hidden; display: none;"> Notification </div>
                                                            <div class="form-group" style="margin: 16px 0px;padding-top:5px; border-top: 1px solid rgb(217, 217, 217);">
                                                                <div class="col-sm-3"><label style=" margin-top: 6px;">Upload Image</label></div>
                                                                <div class="col-sm-9">
                                                                    <div class="input-group"> <span class="input-group-btn"> <span class="btn btn-default btn-file" style="margin-top:0px;"> Browse… <input id="imgInp" type="file"> </span> </span> <input class="form-control" readonly="" style=" margin-bottom: 0;" type="text"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="hfkaniei">
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-4 col-lg-offset-4 "><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;"></span>ok</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ascrail2084" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2084-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
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
                                <div class="col-lg-10" style="padding:0px;"> <textarea class="textareas">Hello there,I´m Planing my Birthday with Family and Friends and i´m looking for a Partyservice who can Deliver us with Drinks and Food .. I´m Planing my Birthday with Family and Friends and i´m looking for a Partyservice who can Deliver us with Drinks and Food ..</textarea> </div>
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
        </div>
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

                }}));
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
