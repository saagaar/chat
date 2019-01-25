<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale Services</title>
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
    <script src="<?php echo base_url('assets/'); ?>js/plugin.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/'); ?>https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/index.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url('assets/'); ?>https://s3-us-west-2.amazonaws.com/s.cdpn.io/2708/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

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
                   <li role="presentation" class="active presentationbestseller">
                                            <a href="index.html#BestSeller" aria-controls="BestSeller" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa  fa-thumbs-o-up" aria-hidden="true" style="width:auto"></i> Best Seller </a>
                                        </li>
                                        <li role="presentation" class="presentationmangeservice">
                                            <a href="index.html#ManageServices" aria-controls="ManageServices" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-cog" aria-hidden="true" style="width:auto"></i> Manage Services </a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="index.html#ManageItems" aria-controls="ManageItems" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-wrench" aria-hidden="true" style="width:auto"></i> Manage Items </a>
                                        </li>
                                        <li role="presentation" class="presentationselesservices">
                                            <a href="index.html#SaleHistory" aria-controls="SaleHistory" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-history" aria-hidden="true" style="width:auto"></i> Sale History </a>
                                        </li>
               <ul class="nav navbar-nav navbar-right">
                   <li >
                <button type="button" data-toggle="modal" data-target="#bestselleraddnewservice" class="btn btn-block btn-grey btn-xs aligncenter">
                    + | Add New Service</button>
                </li>
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
                                    <div role="tabpanel" class="tab-pane active" id="BestSeller">
                                        <div class="vd_content-section clearfix">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pdng20">
                                                        <div class="container-fluid">
                                                            <div class="container loaded">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="table-responsive">
                                                                            <table id="mytable" class="table table-bordred table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>No</th>
                                                                                        <th>Title</th>
                                                                                        <th>Sales Amount</th>
                                                                                        <th>Single Price</th>
                                                                                        <th>Offer Start</th>
                                                                                        <th>Offer End</th>
                                                                                        <th>Status</th>
                                                                                        <th>Option</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete5" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete5" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete5" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete5" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;">
                                                                                                <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete5" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="clearfix"></div>
                                                                            <ul class="pagination pull-right">
                                                                                <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                                                                <li class="active"><a href="#" style=" padding: 8px 14px 5px 14px;">1</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">2</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">3</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">4</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">5</a></li>
                                                                                <li><a href="#" style=""><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                    <div class="modal fade" id="view5" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
                                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                    <h4 class="modal-title custom_align" id="Heading">View Detail</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group"> <input class="form-control " placeholder="Mohsin" type="text"> </div>
                                    <div class="form-group"> <input class="form-control " placeholder="Irshad" type="text"> </div>
                                    <div class="form-group"> <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea> </div>
                                </div>
                                <div class="modal-footer "> <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Update</button> </div>
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
                        <div id="ascrail2022" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                        </div>
                        <div id="ascrail2022-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                        </div>
                    </div>
<!--
                    <div class="modal fade" id="edit5" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
                                                                                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                                    <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="form-group"> <input class="form-control " placeholder="Mohsin" type="text"> </div>
                                                                                    <div class="form-group"> <input class="form-control " placeholder="Irshad" type="text"> </div>
                                                                                    <div class="form-group"> <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea> </div>
                                                                                </div>
                                                                                <div class="modal-footer "> <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Update</button> </div>
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
                                                                        <div id="ascrail2023" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                        </div>
                                                                        <div id="ascrail2023-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                        </div>
                                                                    </div>
-->
                                                                    <div class="modal fade" id="delete5" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content" tabindex="6" style="overflow: hidden; outline: none;">
                                                                                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
                                                                                </div>
                                                                                <div class="modal-footer "> <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Yes</button> <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;No</button> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="ascrail2009" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                        </div>
                                                                        <div id="ascrail2009-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                            <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                        </div>
                                                                        <div id="ascrail2011" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                        </div>
                                                                        <div id="ascrail2011-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                            <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                        </div>
                                                                        <div id="ascrail2021" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                        </div>
                                                                        <div id="ascrail2021-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                            <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                        </div>
                                                                        <div id="ascrail2024" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                        </div>
                                                                        <div id="ascrail2024-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
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
                                    <div role="tabpanel" class="tab-pane" id="ManageServices">
                                        <div class="vd_content-section clearfix">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pdng20">
                                                        <div class="container-fluid">
                                                            <div class="container loaded">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="table-responsive">
                                                                            <table id="mytable" class="table table-bordred table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>No</th>
                                                                                        <th>Title</th>
                                                                                        <th>Sales Amount</th>
                                                                                        <th>Single Price</th>
                                                                                        <th>Offer Start</th>
                                                                                        <th>Offer End</th>
                                                                                        <th>Income</th>
                                                                                        <th>Status</th>
                                                                                        <th>Option</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#bestselleraddnewservice" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteClientmodel" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#bestselleraddnewservice" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteClientmodel" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>

                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#bestselleraddnewservice" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteClientmodel" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#bestselleraddnewservice" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#deleteClientmodel" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#bestselleraddnewservice" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewAccept" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete6" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="clearfix"></div>
                                                                            <ul class="pagination pull-right">
                                                                                <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                                                                <li class="active"><a href="#" style=" padding: 8px 14px 5px 14px;">1</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">2</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">3</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">4</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">5</a></li>
                                                                                <li><a href="#" style=""><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal fade" id="view6" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
                                                                        <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                            <h4 class="modal-title custom_align" id="Heading">View Detail</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group"> <input class="form-control " placeholder="Mohsin" type="text"> </div>
                                                                            <div class="form-group"> <input class="form-control " placeholder="Irshad" type="text"> </div>
                                                                            <div class="form-group"> <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea> </div>
                                                                        </div>
                                                                        <div class="modal-footer "> <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Update</button> </div>
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
                                                                <div id="ascrail2030" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                                <div id="ascrail2030-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="modal fade" id="edit6" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
                                                                        <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group"> <input class="form-control " placeholder="Mohsin" type="text"> </div>
                                                                            <div class="form-group"> <input class="form-control " placeholder="Irshad" type="text"> </div>
                                                                            <div class="form-group"> <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea> </div>
                                                                        </div>
                                                                        <div class="modal-footer "> <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Update</button> </div>
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
                                                                <div id="ascrail2031" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                                <div id="ascrail2031-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="modal fade" id="delete6" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content" tabindex="6" style="overflow: hidden; outline: none;">
                                                                        <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
                                                                        </div>
                                                                        <div class="modal-footer "> <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Yes</button> <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;No</button> </div>
                                                                    </div>
                                                                </div>
                                                                <div id="ascrail2009" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                </div>
                                                                <div id="ascrail2009-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                </div>
                                                                <div id="ascrail2011" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                </div>
                                                                <div id="ascrail2011-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                </div>
                                                                <div id="ascrail2032" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                                <div id="ascrail2032-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<!--
                                        <div class="modal fade " id="manageservicesaddnewservice" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">
                                            <div class="modal-dialog" style="width:100%">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;width:520px;padding:8px;margin:auto">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Manage Services</h4>
                                                    </div>
                                                    <div class="single2" id="a1" style="display: block;">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Add New Service</h3>
                                                        <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;"><input class="form-control" placeholder="Service Titlea" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;" type="text"></div>
                                                        <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;margin-top:10px;margin-bottom:15px"><textarea class="form-control" placeholder="Text Editor and Text Box here to add the Desc." aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;height:102px;resize:none"></textarea></div>
                                                    </div>
                                                    <div class="single2" id="b1">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Upload Imges </h3>
                                                        <div class="image-addon2 "></div>
                                                        <div class="add-more2 "> <button class="add_img_button2 "><img src="<?php echo base_url('assets/'); ?>img/image.svg"></button> </div>
                                                    </div>
                                                    <div class="single2" id="c1">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Price and Duration</h3>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none; margin-bottom: 8px;"><input class="form-control" placeholder="Start Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px;" type="text"> <img src="<?php echo base_url('assets/'); ?>img/cal.png" class="calimgae"> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;"><input class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px;" type="text"> <img src="<?php echo base_url('assets/'); ?>img/cal.png" class="calimgae"> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;border-right:none"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>YES</option> <option>NO</option> <option selected="" disabled="">Appointment</option> </select> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>0-100</option> <option>1-500</option> <option>501-1000</option> <option selected="" disabled="">Sale Amount</option> </select> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;border-right:none"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>inhert from Appointment</option> <option selected="" disabled="">Work Days</option> </select> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>inhert from Appointment</option> <option selected="" disabled="">Work Times</option> </select> </div>
                                                        <div class="col-lg-6 col-lg-offset-3" style="border:1px solid #aab7a2; margin-bottom: 8px;"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>1 Month</option> <option>2 Month</option> <option>3 Month</option> <option>4 Month</option> <option>5 Month</option> <option>6 Month</option> <option selected="" disabled="">validity after Purchase</option> </select> </div>
                                                        <div class="col-lg-6 col-lg-offset-3" style="border:1px solid #aab7a2; margin-bottom: 8px;"><input class="form-control" placeholder="Price" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" type="text"> </div>
                                                    </div>
                                                    <div class="single2" id="d1">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Notifications</h3>
                                                        <div class="notificationredsaleservice">
                                                            <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                                                            <h4 class="text-center2" style="color:white">Your Offer will be viewd form Admin</h4>
                                                        </div>
                                                    </div>
                                                    <div class="single2" id="e1">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Payments</h3>
                                                        <div class="col-lg-12 selectpayement">
                                                            <div class="col-lg-4 borderbottomtrans">
                                                                <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;">PayPal</h3>
                                                            </div>
                                                            <div class="col-lg-4 borderbottomtrans">
                                                                <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;">Giropay</h3>
                                                            </div>
                                                            <div class="col-lg-4 borderbottomtrans">
                                                                <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;">Sofort</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="notificationredsaleservice" style="margin-top:20px;">
                                                                <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                                                                <h4 class="text-center2" style="color:white">We charge for each Sale 20% Net </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="addsericenew">
                                                    <div class="col-lg-12">
                                                        <div type="button" class="back1">Previous</div>
                                                        <div type="button" class="closeds1" data-dismiss="modal">Close</div>
                                                        <ul class="div-link2">
                                                            <li class="active"><a href="#a1">A</a></li>
                                                            <li><a href="#b1">B</a></li>
                                                            <li><a href="#c1">C</a></li>
                                                            <li><a href="#d1">C</a></li>
                                                            <li><a href="#e1">C</a></li>
                                                        </ul>
                                                        <div type="button" class="next1" style="display: inline-block;">Next</div>
                                                        <div type="button" class="savebutton1">Save</div>
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
                                            <div id="ascrail2013" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 1;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2013-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
                                            </div>
                                            <div id="ascrail2033" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: 515px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2033-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                        </div>
-->
                                        <div class="modal right fade in" id="viewAccept" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="false" style="z-index: 1042; display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green text-center" style="padding:10px;">
		  <button type="button" class="vd_white close" data-dismiss="modal" aria-label="Close" style="float:left;opacity:1;font-size:3rem;">
          <span aria-hidden="true"><i class="fa fa-arrow-circle-right"></i></span>
        </button>
        <h4 class="modal-title vd_white">VIEW SERVICE</h4>
      </div>
      <div class="modal-body view-service">
        <!-- <form method="post">
		  <div class="form-group">
		    <h5>Attached PDF form</h5>
		  </div>
		</form> -->
		<div class="col-md-12 col-sm-12 col-xs-12 ">
            <div class="border-top"></div>
            <div class="title" style="text-align:center">
              <h2> Service Title </h2>
            </div>
            <div class="slider">
              <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                <div class="overlay"></div>
                <ol class="carousel-indicators">
                  <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
                  <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
                  <li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
                </ol>
                <ul>
                  <li> <a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span> </a>                    </li>
                  <li> <a class="right carousel-control" href="#bs-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span> </a>                    </li>
                </ul>
                <div class="carousel-inner">
                  <div class="item slides">
                    <div class="slide-1" style="background:url('img/ashi.jpg');background-size: 100%;background-position:center"></div>
                    <!--<div class="hero"><hgroup><h1>We are creative</h1> <h3>Get start your next awesome project</h3></hgroup><button class="btn btn-hero btn-lg" role="button">See all features</button> </div>--></div>
                  <div class="item slides active left">
                    <div class="slide-2" style="background:url('img/ashi.jpg');background-size: 100%;background-position:center"></div>
                  </div>
                  <div class="item slides next left">
                    <div class="slide-3" style="background:url('img/job_14.jpg');background-size: 100%;background-position:center"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-detail-single">
              <div class="post-single-job">
                <div class="single-content">
                  <h4 class="small-title">What I am Looking?</h4>
                  <p class="lead">100% Result Till now with 5/5 rating with Preferred Freelancer chosen by Freelancer itself..</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the, when an unknown printer took a galley of type and scrambled it to
                    make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                    PageMaker including versions of Lorem Ipsum.</p>
                  <p>Rremaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <h5 class="small-title">Job Features &amp; Overviews</h5>
                      <ul class="customlist">
                        <li>WordPress Expert</li>
                        <li>Opencart listed Partner </li>
                        <li>Magento Certified</li>
                        <li>Php Larvel ,Zend Framework</li>
                        <li>Certified Social Engine</li>
                        <li>Prestashop , CS cart and Drupal, ZenCart developer</li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <h5 class="small-title">Experience Requirements</h5>
                      <ul class="customlist">
                        <li>PSD TO HTML5 ( Elite author in themeforest)</li>
                        <li>Great experience with Linux, Server Optimizing, Failover Clustering, Security, Virtualization know
                          common used utilites, scripts and services such as Apache, PHP, MySQL, Nginx and many others.</li>
                        <li>Donec venenatis ante a imperdiet maximus. Sed in justo porta, rutrum velit non, blandit lorem.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="single-comp-review">
                  <div class="rev-box">
                    <div class="rev-box-data">
                      <h2><i class="fa fa-star-half-o"></i>Feedback</h2>
                      <div class="data">
                        <ul class="review-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="rev-box">
                    <div class="rev-box-data">
                      <h2><i class="fa fa-shopping-cart"></i>Sales</h2>
                      <div class="data">
                        <p>3025</p>
                      </div>
                    </div>
                  </div>
                  <div class="rev-box">
                    <div class="rev-box-data">
                      <h2><i class="fa fa-euro"></i>Price</h2>
                      <div class="data">
                        <p>45,00</p>
                      </div>
                    </div>
                  </div>


                </div>

                <div class="pull pull-left" style="width:100%">

						<button type="button" class="btn btn-danger" style="float:left" data-toggle="modal" data-target="#delete5">
							<span class="iconOption"><i class="fa fa-trash-o"></i></span>Remove
						</button>
			        </div>

              </div>
            </div>


          </div>
      </div>

      <div class="modal-footer vd_bg-white">
      </div>
    </div>
  </div>
</div>
                                    </div>
    <div class="modal fade " id="bestselleraddnewservice" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">
            <div class="modal-dialog" style="width:100%">
                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;width:520px;padding:0px;margin:auto">
                    <div class="modal-header" style="padding:8px"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="text-center2" style="font-family:OpenSans-Regular;padding:8px">Add New Service</h4>
                    </div>
                    <div class="single" id="a" style="display: block;padding:8px">
                        <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;"><input class="form-control" placeholder="Service Titlea" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;" type="text"></div>

                        <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;margin-top:10px;margin-bottom:15px">
                            <div class="reviewcontent" id="editortest2">
       Type...

        </div>

        <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editortest2' );
            </script>
                                                            <script>
                                                                // Replace the <textarea id="editor1"> with a CKEditor // instance, using default configuration. CKEDITOR.replace( 'editor15' );

                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="single" id="b"style="padding:8px">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Upload Imges </h3>
                                                        <div class="image-addon2 "></div>
                                                        <div class="add-more2 hide-new  ">

                                                            <label for="upload_img" style="width:100%;height:100%">
                                                                <img src="<?php echo base_url('assets/'); ?>img/image.svg">
                                                            </label>
                                                            <input style="visibility:hidden;" type='file' id="upload_img" class="add_img_button2 ">
<!--                                                            <button class="add_img_button2 "><img src="<?php echo base_url('assets/'); ?>img/image.svg"></button> -->
                                                        </div>
                                                    </div>

                                                    <div class="single" id="c"style="padding:8px">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Price and Duration</h3>
                                                       <div class="col-lg-6" style="padding-top:10px;padding-bottom:10px;border-right:none;">
                                                        <div id="datetimepicker1" class="input-group date"> <input style="margin:0" placeholder="Start Date" class="form-control" type="text"> <span class="add-on input-group-addon"> <span class="fa fa-calendar"></span> </span>
                                                            <!-- <input data-format="dd/MM/yyyy" type="text" style="width:80%;"> <span class="add-on" style="padding-left:-4px;padding-right:25px;padding-top:4px;float:right"><i data-time-icon="icon-time" class="fa fa-calendar fa-2x"></i></span> --></div>
                                                    </div>
                                                    <div class="col-lg-6" style="padding-top:10px;padding-bottom:10px;border-right:none; float:right">
                                                        <script>
                                                            $(function() {
                                                                $('#datetimepicker1').datetimepicker({
                                                                    language: 'pt-BR'
                                                                });
                                                            });

                                                        </script>
                                                        <div id="datetimepicker2" class="input-group date"> <input placeholder="End Date" style="margin:0" class="form-control" type="text"> <span class="add-on input-group-addon"> <span class="fa fa-calendar"></span> </span>
                                                            <!-- <input data-format="dd/MM/yyyy" type="text" style="width:80%;"> <span class="add-on" style="padding-left:-4px;padding-right:25px;padding-top:4px;float:right"><i data-time-icon="icon-time" class="fa fa-calendar fa-2x"></i></span> --></div>
                                                        <script>
                                                            $(function() {
                                                                $('#datetimepicker2').datetimepicker({
                                                                    language: 'pt-BR'
                                                                });
                                                            });

                                                        </script>
                                                    </div>
                                                        <div class="col-lg-6" style=" margin-bottom: 8px;">
                                                            <select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;">
                                                                <option>YES</option> <option>NO</option> <option selected="" disabled="">Appointment</option> </select> </div>
                                                        <div class="col-lg-6" style=" margin-bottom: 8px;"
                                                             ><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;">
                                                            <option>0-100</option> <option>1-500</option> <option>501-1000</option> <option selected="" disabled="">Sale Amount</option> </select> </div>
                                                        <div class="col-lg-6" style="margin-bottom: 8px;">
                                                            <select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style=";margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>inhert from Appointment</option> <option selected="" disabled="">Work Days</option> </select> </div>
                                                        <div class="col-lg-6" style= "margin-bottom: 8px;">
                                                            <select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>inhert from Appointment</option> <option selected="" disabled="">Work Times</option> </select> </div>
                                                        <div class="col-lg-6 col-lg-offset-3" style=" margin-bottom: 8px;">
                                                            <select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>1 Month</option> <option>2 Month</option> <option>3 Month</option> <option>4 Month</option> <option>5 Month</option> <option>6 Month</option> <option selected="" disabled="">validity after Purchase</option> </select> </div>
                                                        <div class="col-lg-6 col-lg-offset-3" style=" margin-bottom: 8px;">
                                                            <input class="form-control" placeholder="Price" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" type="text"> </div>
                                                    </div>
                                                    <div class="single" id="d"style="padding:8px">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Notifications</h3>
                                                        <div class="notificationredsaleservice">
                                                            <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                                                            <h4 class="text-center2" style="color:white">Your Offer will be viewd form Admin</h4>
                                                        </div>
                                                    </div>
                                                    <div class="single" id="e"style="padding:8px">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Payments</h3>
                                                        <div class="col-lg-12 selectpayement">
                                                            <div class="col-lg-4 borderbottomtrans">
                                                                <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;">PayPal</h3>
                                                            </div>
                                                            <div class="col-lg-4 borderbottomtrans">
                                                                <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;">Giropay</h3>
                                                            </div>
                                                            <div class="col-lg-4 borderbottomtrans">
                                                                <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;">Sofort</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="notificationredsaleservice" style="margin-top:20px;">
                                                                <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                                                                <h4 class="text-center2" style="color:white">We charge for each Sale 20% Net </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="addsericenew">
                                                    <div class="col-lg-12" style="background-color:#808080;padding:0">
                                                        <div type="button" class="back" style="background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:18px">Previous</div>
                                                        <div type="button" class="closeds" data-dismiss="modal" style="background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:18px">Close</div>
                                                        <ul class="div-link">
                                                            <li class="active"><a href="#a">A</a></li>
                                                            <li><a href="#b">B</a></li>
                                                            <li><a href="#c">C</a></li>
                                                            <li><a href="#d">C</a></li>
                                                            <li><a href="#e">C</a></li>
                                                        </ul>
                                                        <div type="button" class="next" style="display: inline-block;background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:19px">Next</div>
                                                        <div type="button" class="savebutton" style="background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:18px">Save</div>
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
                                            <div id="ascrail2013" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 1;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2013-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
                                            </div>
                                            <div id="ascrail2025" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: 515px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2025-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                        </div>
                                    <div role="tabpanel" class="tab-pane" id="ManageItems"> coming soon </div>
                                    <div role="tabpanel" class="tab-pane" id="SaleHistory">
                                        <div class="vd_content-section clearfix">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pdng20">
                                                        <div class="container-fluid">
                                                            <div class="container loaded">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="table-responsive">
                                                                            <table id="mytable" class="table table-bordred table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>No</th>
                                                                                        <th>Date</th>
                                                                                        <th>User Type</th>
                                                                                        <th>Price</th>
                                                                                        <th>offer Start-End</th>
                                                                                        <th>Status</th>
                                                                                        <th>Paid by</th>
                                                                                        <th>Used as</th>
                                                                                        <th>Option</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>
                                                                                            <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="clearfix"></div>
                                                                            <ul class="pagination pull-right">
                                                                                <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                                                                <li class="active"><a href="#" style=" padding: 8px 14px 5px 14px;">1</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">2</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">3</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">4</a></li>
                                                                                <li><a href="#" style=" padding: 8px 14px 5px 14px;">5</a></li>
                                                                                <li><a href="#" style=""><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal fade" id="view8" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
                                                                        <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                            <h4 class="modal-title custom_align" id="Heading">view Detail</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group"> <input class="form-control " placeholder="Mohsin" type="text"> </div>
                                                                            <div class="form-group"> <input class="form-control " placeholder="Irshad" type="text"> </div>
                                                                            <div class="form-group"> <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea> </div>
                                                                        </div>
                                                                        <div class="modal-footer "> <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Update</button> </div>
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
                                                                <div id="ascrail2034" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                                <div id="ascrail2034-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="modal fade" id="edit8" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;">
                                                                        <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group"> <input class="form-control " placeholder="Mohsin" type="text"> </div>
                                                                            <div class="form-group"> <input class="form-control " placeholder="Irshad" type="text"> </div>
                                                                            <div class="form-group"> <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea> </div>
                                                                        </div>
                                                                        <div class="modal-footer "> <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Update</button> </div>
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
                                                                <div id="ascrail2035" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                                <div id="ascrail2035-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="modal fade" id="delete8" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content" tabindex="6" style="overflow: hidden; outline: none;">
                                                                        <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
                                                                        </div>
                                                                        <div class="modal-footer "> <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Yes</button> <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;No</button> </div>
                                                                    </div>
                                                                </div>
                                                                <div id="ascrail2009" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                </div>
                                                                <div id="ascrail2009-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                </div>
                                                                <div id="ascrail2011" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                </div>
                                                                <div id="ascrail2011-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div>
                                                                </div>
                                                                <div id="ascrail2036" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                    <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                                <div id="ascrail2036-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                    <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade " id="salesservicesaddnew" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 17px;">
                                            <div class="modal-dialog" style="width:100%">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;width:520px;padding:8px;margin:auto">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Sales History</h4>
                                                    </div>
                                                    <div class="single3" id="a2" style="display: block;">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Add New Service</h3>
                                                        <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;"><input class="form-control" placeholder="Service Titlea" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;" type="text"></div>
                                                        <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;margin-top:10px;margin-bottom:15px"><textarea class="form-control" placeholder="Text Editor and Text Box here to add the Desc." aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;height:102px;resize:none"></textarea></div>
                                                    </div>
                                                    <div class="single3" id="b2">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Upload Imges </h3>
                                                        <div class="image-addon2 "></div>
                                                        <div class="add-more2 "> <button class="add_img_button2 "><img src="<?php echo base_url('assets/'); ?>img/image.svg"></button> </div>
                                                    </div>
                                                    <div class="single3" id="c2">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Price and Duration</h3>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2;border-right:none; margin-bottom: 8px;"><input class="form-control" placeholder="Start Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px;" type="text"> <img src="<?php echo base_url('assets/'); ?>img/cal.png" class="calimgae"> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;"><input class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px;" type="text"> <img src="<?php echo base_url('assets/'); ?>img/cal.png" class="calimgae"> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;border-right:none"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>YES</option> <option>NO</option> <option selected="" disabled="">Appointment</option> </select> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>0-100</option> <option>1-500</option> <option>501-1000</option> <option selected="" disabled="">Sale Amount</option> </select> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;border-right:none"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>inhert from Appointment</option> <option selected="" disabled="">Work Days</option> </select> </div>
                                                        <div class="col-lg-6" style="border:1px solid #aab7a2; margin-bottom: 8px;"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>inhert from Appointment</option> <option selected="" disabled="">Work Times</option> </select> </div>
                                                        <div class="col-lg-6 col-lg-offset-3" style="border:1px solid #aab7a2; margin-bottom: 8px;"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;"> <option>1 Month</option> <option>2 Month</option> <option>3 Month</option> <option>4 Month</option> <option>5 Month</option> <option>6 Month</option> <option selected="" disabled="">validity after Purchase</option> </select> </div>
                                                        <div class="col-lg-6 col-lg-offset-3" style="border:1px solid #aab7a2; margin-bottom: 8px;"><input class="form-control" placeholder="Price" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" type="text"> </div>
                                                    </div>
                                                    <div class="single3" id="d2">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Notifications</h3>
                                                        <div class="notificationredsaleservice">
                                                            <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                                                            <h4 class="text-center2" style="color:white">Your Offer will be viewd form Admin</h4>
                                                        </div>
                                                    </div>
                                                    <div class="single3" id="e2">
                                                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Payments</h3>
                                                        <div class="col-lg-12 selectpayement">
                                                            <div class="col-lg-4 borderbottomtrans">
                                                                <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;">PayPal</h3>
                                                            </div>
                                                            <div class="col-lg-4 borderbottomtrans">
                                                                <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;">Giropay</h3>
                                                            </div>
                                                            <div class="col-lg-4 borderbottomtrans">
                                                                <h3 class="text-center2 bngf" style="font-family:OpenSans-Regular;">Sofort</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="notificationredsaleservice" style="margin-top:20px;">
                                                                <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                                                                <h4 class="text-center2" style="color:white">We charge for each Sale 20% Net </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="addsericenew">
                                                    <div class="col-lg-12">
                                                        <div type="button" class="back2">Previous</div>
                                                        <div type="button" class="closeds2" data-dismiss="modal">Close</div>
                                                        <ul class="div-link3">
                                                            <li class="active"><a href="#a2">A</a></li>
                                                            <li><a href="#b2">B</a></li>
                                                            <li><a href="#c2">C</a></li>
                                                            <li><a href="#d2">C</a></li>
                                                            <li><a href="#e2">C</a></li>
                                                        </ul>
                                                        <div type="button" class="next2" style="display: inline-block;">Next</div>
                                                        <div type="button" class="savebutton2">Save</div>
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
                                            <div id="ascrail2013" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 1;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2013-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div>
                                            </div>
                                            <div id="ascrail2037" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: 515px; height: 0px; display: none;">
                                                <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                            <div id="ascrail2037-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
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
    <div class="modal fade" id="viewPurchase" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Warranty</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;margin-bottom:0px;">

                    <hr class="rulerourtema">

                    <h3 class="ourteamjopposition22 text-center2 col97be2e"> Warranty Invoice Template </h3>

                </div>
                <hr class="hfkaniei">
                <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px; background-color: white;">
                    <div class="col-lg-4 col-lg-offset-4 ">
                        <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;">
                            <span class="append-icon" style="text-align:left;margin-right:42">
                                <img src="<?php echo base_url('assets/'); ?>img/true.png" style="width:23px;margin-right: 31px;">
                            </span>ok</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="ascrail2079" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
        </div>
        <div id="ascrail2079-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
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

            </script></body>

</html>
