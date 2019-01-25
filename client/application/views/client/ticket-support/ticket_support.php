<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Support</title>
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
        .new-nav .navbar-nav>.active>a{
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
                        <a href="index.html#CreateNewTicket" aria-controls="CreateNewTicket" role="tab" data-toggle="tab" aria-expanded="true">  <i class="fa fa-plus-square " aria-hidden="true"style="width:auto"></i><span class="noty-bubble-tickets noty-cuts"style="margin-left:0">2</span> Create&nbsp;New </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="index.html#NewTicket" aria-controls="NewTicket" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-plus-circle " aria-hidden="true" style="width:auto"></i><span class="noty-bubble-tickets noty-cuts"style="margin-left:0">2</span> New </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="index.html#AnsweredTicket" aria-controls="AnsweredTicket" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-commenting" aria-hidden="true"style="width:auto"></i><span class="noty-bubble-tickets noty-cuts" style="margin-left:0">2</span> Answered </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="index.html#OpenTickets" aria-controls="OpenTickets" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-folder-open" aria-hidden="true"style="width:auto"></i><span class="noty-bubble-tickets noty-cuts"style="margin-left:0">2</span> Open </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="index.html#ClosedTicket" aria-controls="ClosedTicket" role="tab" data-toggle="tab" aria-expanded="true"style="margin-left:0"> <i class="fa fa-folder " aria-hidden="true"style="width:auto"></i> Closed</a>
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
                            <div class="border-box border-blue custom-page-content" style="border-color: transparent;">
<!--
                                <section class="content-header">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <h4 style="border-right: 2px solid #ddd;"> <i class="fa fa-life-ring"></i> Ticket Support </h4>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                        <div class="row pdng10-0 searchBar">
                                            <form>
                                                <div class="col-md-3 space" style="margin-left: 60px;">
                                                    <div class="filter-cell"> <select class="form-control"> <option>Price</option> </select> </div>
                                                </div>
                                                <div class="col-md-3 space" style="margin-left: 60px;">
                                                    <div class="filter-cell"> <select class="form-control"> <option>Brand</option> </select> </div>
                                                </div>
                                                <div class="col-md-3 space" style="margin-left: 60px;"> <input placeholder="Search" type="search"> </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="pull-right pull-right-container">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td><button type="button" id="addnewservicevalue" class="btn btn-block btn-success btn-xs aligncenter" data-toggle="modal" data-target="#bestselleraddnewservice">Create New Ticket</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </section>
-->
                            </div>
                            <div class="bhoechie-tab-content">
                               
                                <div class="tab-content" style=" margin-top: 0px;">
                                    <div role="tabpanel" class="tab-pane active" id="CreateNewTicket">
                                        <div class="tab-main-content" style="padding:0px;">
                                            <div class="matter">
                                                <div class="navbar navbar-default" role="navigation">
                                                    <div class="container-fluid">
                                                        <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> </div>
                                                    </div>
                                                </div>
                                                <div class="container loaded">
                                                    <div class="row">
                                                        <div class="col-lg-3" style="padding-right:0px;">
                                                            <div class="box side-menu-main">
                                                                <div class="box-head-dark"><i class="fa fa-list" aria-hidden="true"></i> New Ticket Details</div>
                                                                <div class="box-content box-pad tickets-new-details">
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="select2-container" id="s2id_all_departments_2">
                                                                                        <a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-5">Department</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen5" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-5" id="s2id_autogen5" type="text">
                                                                                        <div class="select2-drop select2-display-none select2-with-searchbox">
                                                                                            <div class="select2-search"> <label for="s2id_autogen5_search" class="select2-offscreen"></label> <input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-5" id="s2id_autogen5_search" placeholder="" type="text"> </div>
                                                                                            <ul class="select2-results" role="listbox" id="select2-results-5"> </ul>
                                                                                        </div>
                                                                                    </div><select id="all_departments_2" data-placeholder="Department" name="tickets_department_id" tabindex="-1" title="" class="select2-offscreen"> <option></option> <option value="1">General Support</option> </select> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="select2-container" id="s2id_all_clients_2">
                                                                                        <a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-3">Client</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3" type="text">
                                                                                        <div class="select2-drop select2-display-none select2-with-searchbox">
                                                                                            <div class="select2-search"> <label for="s2id_autogen3_search" class="select2-offscreen"></label> <input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder="" type="text"> </div>
                                                                                            <ul class="select2-results" role="listbox" id="select2-results-3"> </ul>
                                                                                        </div>
                                                                                    </div><select id="all_clients_2" data-placeholder="Client" name="tickets_client_id" tabindex="-1" title="" class="select2-offscreen"> <option></option> <option value="2">Apple Inc</option><option value="1">Microsoft Inc</option> </select> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="select2-container" id="s2id_all_team_members_2">
                                                                                        <a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-8">Assigned To</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen8" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-8" id="s2id_autogen8" type="text">
                                                                                        <div class="select2-drop select2-display-none select2-with-searchbox">
                                                                                            <div class="select2-search"> <label for="s2id_autogen8_search" class="select2-offscreen"></label> <input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-8" id="s2id_autogen8_search" placeholder="" type="text"> </div>
                                                                                            <ul class="select2-results" role="listbox" id="select2-results-8"> </ul>
                                                                                        </div>
                                                                                    </div><select id="all_team_members_2" data-placeholder="Assigned To" name="tickets_assigned_to_id" tabindex="-1" title="" class="select2-offscreen"> <option></option> <option value="1">Fred Marks</option><option value="2">Sarah Jane</option> </select> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="select2-container" id="s2id_tickets_status_list_2">
                                                                                        <a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-7">New</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen7" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-7" id="s2id_autogen7" type="text">
                                                                                        <div class="select2-drop select2-display-none select2-with-searchbox">
                                                                                            <div class="select2-search"> <label for="s2id_autogen7_search" class="select2-offscreen"></label> <input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-7" id="s2id_autogen7_search" placeholder="" type="text"> </div>
                                                                                            <ul class="select2-results" role="listbox" id="select2-results-7"> </ul>
                                                                                        </div>
                                                                                    </div><select id="tickets_status_list_2" data-placeholder="Ticket Status" name="tickets_status" tabindex="-1" title="" class="select2-offscreen"> <option value="new">New</option> <option value="open">Open</option> <option value="answered">Answered</option> <option value="replied">Client Replied</option> <option value="closed">Closed</option> </select> </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="box" style="margin-bottom:20px;"> <input autocomplete="off" name="tickets_title" id="tickets_title" class="form-control" placeholder="Title" type="text"> </div>
                                                            <div class="box" >
                                                                <div class="box-content tickets-new" style="border:none; background-color:transparent;">
                                                                    <div > 
                                                                        <div class="reviewcontent" id="editor1">
                                                                       Type...

                                                                        </div>
                                                                             <script>
                                                                                // Replace the <textarea id="editor1"> with a CKEditor
                                                                                // instance, using default configuration.
                                                                                CKEDITOR.replace( 'editor1' );
                                                                            </script>
                                                                    </div>
                                                                    <div class="box-footer" align='center' style="margin-top:20px" >
                                                                        <div class=""> <input name="tickets_by_user_id" value="1" type="hidden"> <input name="tickets_by_user_type" value="team" type="hidden"> <input class="btn btn-primary btn-mid" value="Submit New Ticket" id="" name="submit" type="submit"> </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div><br></div>
                                    <div role="tabpanel" class="tab-pane " id="NewTicket">
                                        <div class="matter">
                                            <div class="container loaded">
                                                <div class="row fullscreen-mode">
                                                    <div class="col-md-12">
                                                        <div class="widget">
                                                            <div class="widget-content">
                                                                <table class="footable table table-bordered table-hover default footable-loaded">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width:45px;" data-hide="phone" class="footable-visible footable-first-column"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_ticketid/0">ID<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th class="col-md-5 col-lg-5 footable-visible">Title</th>
                                                                            <th data-hide="phone" class="footable-visible">Submitted By</th>
                                                                            <th data-hide="phone" class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_datecreated/0"> Date Created<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th data-hide="phone" class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_dateactive/0"> Last Active<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_status/0"> Status<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th style="width:30px; text-align:center; font-size:14px;" class="footable-visible footable-last-column"> <i class="fa fa-list" aria-hidden="true"></i> </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="tr-link" data-link="http://freelacedemov2.nextloop.net/admin/ticket/1/view">
                                                                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>1</td>
                                                                            <td class="footable-visible">Unable To Delete New Images</td>
                                                                            <td class="footable-visible"><label class="label label-purple">John Blogs</label></td>
                                                                            <td class="footable-visible">03-02-2016</td>
                                                                            <td class="footable-visible">03-02-2016</td>
                                                                            <td class="footable-visible"><span class="label label-success" id="bns-status-badge">New</span></td>
                                                                            <td class="tr-link-excluded footable-visible footable-last-column" style="width:15%; text-align:center">
                                                                                <button class="btn btn-xs btn-danger ajax-delete-record" data-toggle="modal" data-target="#deleteClientmodel"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                                                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#viewNewTicketModal">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                                                                
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="widget-foot">
                                                                    <ul class="pagination pull-right"> </ul>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="AnsweredTicket">
                                        <div class="matter">
                                            <div class="container loaded">
                                                <div class="row fullscreen-mode">
                                                    <div class="col-md-12">
                                                        <div class="widget">
                                                            <div class="widget-content">
                                                                <table class="footable table table-bordered table-hover default footable-loaded">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width:45px;" data-hide="phone" class="footable-visible footable-first-column"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_ticketid/0">ID<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th class="col-md-5 col-lg-5 footable-visible">Title</th>
                                                                            <th data-hide="phone" class="footable-visible">Submitted By</th>
                                                                            <th data-hide="phone" class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_datecreated/0"> Date Created<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th data-hide="phone" class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_dateactive/0"> Last Active<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_status/0"> Status<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th style="width:30px; text-align:center; font-size:14px;" class="footable-visible footable-last-column"> <i class="fa fa-list" aria-hidden="true"></i> </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="tr-link" data-link="http://freelacedemov2.nextloop.net/admin/ticket/1/view">
                                                                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>1</td>
                                                                            <td class="footable-visible">Unable To Delete New Images</td>
                                                                            <td class="footable-visible"><label class="label label-purple">John Blogs</label></td>
                                                                            <td class="footable-visible">03-02-2016</td>
                                                                            <td class="footable-visible">03-02-2016</td>
                                                                            <td class="footable-visible"><span class="label label-success" id="bns-status-badge">New</span></td>
                                                                            <td class="tr-link-excluded footable-visible footable-last-column" style="width:15%; text-align:center">
                                                                                <button class="btn btn-xs btn-danger ajax-delete-record" data-toggle="modal" data-target="#deleteClientmodel"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                                                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#viewNewTicketModal2">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                                                                
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="widget-foot">
                                                                    <ul class="pagination pull-right"> </ul>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="OpenTickets">
                                        <div class="matter">
                                            <div class="container loaded">
                                                <div class="row fullscreen-mode">
                                                    <div class="col-md-12">
                                                        <div class="widget">
                                                            <div class="widget-content">
                                                                <table class="footable table table-bordered table-hover default footable-loaded">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width:45px;" data-hide="phone" class="footable-visible footable-first-column"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_ticketid/0">ID<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th class="col-md-5 col-lg-5 footable-visible">Title</th>
                                                                            <th data-hide="phone" class="footable-visible">Submitted By</th>
                                                                            <th data-hide="phone" class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_datecreated/0"> Date Created<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th data-hide="phone" class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_dateactive/0"> Last Active<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_status/0"> Status<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th style="width:30px; text-align:center; font-size:14px;" class="footable-visible footable-last-column"> <i class="fa fa-list" aria-hidden="true"></i> </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="tr-link" data-link="http://freelacedemov2.nextloop.net/admin/ticket/1/view">
                                                                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>1</td>
                                                                            <td class="footable-visible">Unable To Delete New Images</td>
                                                                            <td class="footable-visible"><label class="label label-purple">John Blogs</label></td>
                                                                            <td class="footable-visible">03-02-2016</td>
                                                                            <td class="footable-visible">03-02-2016</td>
                                                                            <td class="footable-visible"><span class="label label-success" id="bns-status-badge">New</span></td>
                                                                            <td class="tr-link-excluded footable-visible footable-last-column" style="width:15%; text-align:center">
                                                                                <button class="btn btn-xs btn-danger ajax-delete-record"  data-toggle="modal" data-target="#deleteClientmodel"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                                                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#viewNewTicketModal3">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </button>
                                                                                
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="widget-foot">
                                                                    <ul class="pagination pull-right"> </ul>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="ClosedTicket">
                                        <div class="matter">
                                            <div class="container loaded">
                                                <div class="row fullscreen-mode">
                                                    <div class="col-md-12">
                                                        <div class="widget">
                                                            <div class="widget-content">
                                                                <table class="footable table table-bordered table-hover default footable-loaded">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width:45px;" data-hide="phone" class="footable-visible footable-first-column"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_ticketid/0">ID<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th class="col-md-5 col-lg-5 footable-visible">Title</th>
                                                                            <th data-hide="phone" class="footable-visible">Submitted By</th>
                                                                            <th data-hide="phone" class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_datecreated/0"> Date Created<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th data-hide="phone" class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_dateactive/0"> Last Active<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th class="footable-visible"><a href="http://freelacedemov2.nextloop.net/admin/tickets/list/open/0/desc/sortby_status/0"> Status<i class="icon-sort bns-padded-left"></i></a></th>
                                                                            <th style="width:30px; text-align:center; font-size:14px;" class="footable-visible footable-last-column"> <i class="fa fa-list" aria-hidden="true"></i> </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="tr-link" data-link="http://freelacedemov2.nextloop.net/admin/ticket/1/view">
                                                                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>1</td>
                                                                            <td class="footable-visible">Unable To Delete New Images</td>
                                                                            <td class="footable-visible"><label class="label label-purple">John Blogs</label></td>
                                                                            <td class="footable-visible">03-02-2016</td>
                                                                            <td class="footable-visible">03-02-2016</td>
                                                                            <td class="footable-visible"><span class="label label-success" id="bns-status-badge">New</span></td>
                                                                            <td class="tr-link-excluded footable-visible footable-last-column" style="width:15%; text-align:center">
                                                                                <button class="btn btn-xs btn-danger ajax-delete-record"  data-toggle="modal" data-target="#deleteClientmodel"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                                                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#viewNewTicketModal4">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                                                                
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="widget-foot">
                                                                    <ul class="pagination pull-right"> </ul>
                                                                    <div class="clearfix"></div>
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
    
    <div class="modal fade" id="viewNewTicketModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 780px; padding:0; margin:auto;">
    <div style="border-top:10px solid #0000cc;" class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align text-center2" id="Heading">Ticket</h4>

    </div>
    <div class="container loaded" id="my1" style="padding:0">
        <div class="modal-body" style="padding:0">
            <div class="col-xs-12" >
               
        <div class="ticket-title" style="margin-top:30px">
              <p type="text" class="form-control">title</p>
          </div>
                 <div class="ticket-description"align='center' style=" border:1px solid #DDD; padding:10px;border-radius:4px;min-height:100px">
            
            some texet heere      
            </div>
            </div>
          
      </div>
      
    </div>
    <hr class="hfkaniei"> 
    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
         <div class="col-lg-offset-4 col-lg-4"><button type="button" class="btn btn-primary" data-toggle="modal"  data-dismiss="modal" style=" width: 100%;"> <span class="append-icon" style="text-align:left;"><i class="fa fa-check-circle-o" aria-hidden="true" style=""></i></span>OK</button></div>
    </div>
    </div>
    
    
                                        </div>
                                       
                                        
                                    </div>
    
 <div class="modal fade" id="viewNewTicketModal2" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 780px; padding:0; margin:auto;">
    <div style="border-top:10px solid #0000cc;" class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align text-center2" id="Heading">Ticket</h4>

    </div>
    <div class="container loaded" id="my1" style="padding:0">
        <div class="modal-body" style="padding:0">
            <div class="col-xs-12" >
                <h5 class="modal-title" style="float:left">Ticket Title</h5>
                  <h5 class="modal-title" style="float:right">Ticket ID</h5>
        <div class="ticket-title" style="margin-top:30px">
              <p type="text" class="form-control">title</p>
          </div>
                 <div class="ticket-description"align='center' style=" border:1px solid #DDD; padding:10px;border-radius:4px;min-height:100px">
            
            some texet heere      
            </div>
            </div>
          
       
            <div class="col-xs-12" style="    border-top: 8px solid #9AC034;padding: 0;margin-top:10px; width: 100%; "></div>
         <div class="col-xs-12">
            <div class="modal-header" style="padding-top:30px">
            <h5 class="modal-title" style="float:left">User Answer</h5>
                  <h5 class="modal-title" style="float:right">Time and date</h5>
          </div>
          <div class="ticket-title">
              <p type="text" class="form-control">title</p>
          </div>
        <div class="ticket-description"align='center' style=" border:1px solid #DDD; padding:10px;border-radius:4px;min-height:100px">
            some texet heere   
             </div>
            </div>
      </div>
      
    </div>
    <hr class="hfkaniei"> 
    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
        <div class="col-lg-3 col-lg-offset-1"> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#replaytoreview" data-dismiss="modal" style=" width: 100%; "> <span class="append-icon" style="text-align:left;"><i class="fa fa-reply-all" aria-hidden="true" style=""></i> </span> Replay</button> </div>
        <div class="col-lg-3 "><button type="button" class="btn btn-primary" data-toggle="modal"  data-dismiss="modal" style=" width: 100%;"> <span class="append-icon" style="text-align:left;"><i class="fa fa-print" aria-hidden="true" style=""></i></span>print</button></div>
        <div class="col-lg-4"><button type="button" class="btn btn-danger" data-toggle="modal"  data-dismiss="modal" style=" width: 100%;"> <span class="append-icon" style="text-align:left;"><i class="fa fa-exclamation-triangle" aria-hidden="true" style=""></i></span>Close as Resolve</button></div>
    </div>
    </div>
    
    
                                        </div>
                                       
                                        
                                    </div>
    <!--for colsed ticket-->
    <div class="modal fade" id="viewNewTicketModal3" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 780px; padding:0; margin:auto;">
    <div style="border-top:10px solid #0000cc;" class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align text-center2" id="Heading">Ticket</h4>

    </div>
    <div class="container loaded" id="my1" style="padding:0">
        <div class="modal-body" style="padding:0">
            <div class="col-xs-12" >
                <h5 class="modal-title" style="float:left">Ticket Title</h5>
                  <h5 class="modal-title" style="float:right">Ticket ID</h5>
        <div class="ticket-title" style="margin-top:30px">
              <p type="text" class="form-control">title</p>
          </div>
                 <div class="ticket-description"align='center' style=" border:1px solid #DDD; padding:10px;border-radius:4px;min-height:100px">
            
            some texet heere      
            </div>
            </div>
          
       
            <div class="col-xs-12" style="    border-top: 8px solid #9AC034;padding: 0;margin-top:10px; width: 100%; "></div>
         <div class="col-xs-12">
            <div class="modal-header" style="padding-top:30px">
            <h5 class="modal-title" style="float:left">User Answer</h5>
                  <h5 class="modal-title" style="float:right">Time and date</h5>
          </div>
          <div class="ticket-title">
              <p type="text" class="form-control">title</p>
          </div>
        <div class="ticket-description"align='center' style=" border:1px solid #DDD; padding:10px;border-radius:4px;min-height:100px">
            some texet heere   
             </div>
            </div>
      </div>
      
    </div>
    <hr class="hfkaniei"> 
    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
         <div class="col-lg-offset-8 col-lg-4"><button type="button" class="btn btn-danger" data-toggle="modal"  data-dismiss="modal" style=" width: 100%;"> <span class="append-icon" style="text-align:left;"><i class="fa fa-exclamation-triangle" aria-hidden="true" style=""></i></span>Close</button></div>
    </div>
    </div>
    
    
                                        </div>
                                       
                                        
                                    </div>
    
    <div class="modal fade" id="viewNewTicketModal4" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 780px; padding:0; margin:auto;">
    <div style="border-top:10px solid #0000cc;" class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align text-center2" id="Heading">Ticket</h4>

    </div>
    <div class="container loaded" id="my1" style="padding:0">
        <div class="modal-body" style="padding:0">
            <div class="col-xs-12" >
                <h5 class="modal-title" style="float:left">Ticket Title</h5>
                  <h5 class="modal-title" style="float:right">Ticket ID</h5>
        <div class="ticket-title" style="margin-top:30px">
              <p type="text" class="form-control">title</p>
          </div>
                 <div class="ticket-description"align='center' style=" border:1px solid #DDD; padding:10px;border-radius:4px;min-height:100px">
            
            some texet heere      
            </div>
            </div>
          
       
            <div class="col-xs-12" style="    border-top: 8px solid #9AC034;padding: 0;margin-top:10px; width: 100%; "></div>
         <div class="col-xs-12">
            <div class="modal-header" style="padding-top:30px">
            <h5 class="modal-title" style="float:left">User Answer</h5>
                  <h5 class="modal-title" style="float:right">Time and date</h5>
          </div>
          <div class="ticket-title">
              <p type="text" class="form-control">title</p>
          </div>
        <div class="ticket-description"align='center' style=" border:1px solid #DDD; padding:10px;border-radius:4px;min-height:100px">
            some texet heere   
             </div>
            </div>
      </div>
      
    </div>
    <hr class="hfkaniei"> 
    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
         <div class="col-lg-offset-8 col-lg-4"><button type="button" class="btn btn-primary" data-toggle="modal"  data-dismiss="modal" style=" width: 100%;"> <span class="append-icon" style="text-align:left;"><i class="fa fa-exclamation-triangle" aria-hidden="true" style=""></i></span>Solved</button></div>
    </div>
    </div>
    
    
                                        </div>
                                       
                                        
                                    </div>
    
                                        <div class="modal fade" id="replaytoreview" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;padding-left: 17px;">
                                            <div class="modal-dialog" style="width: 820px;">
                                                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align text-center2" id="Heading">Replay</h4>
                                                    </div>
                                                    <div > 
                                                                        <div class="reviewcontent" id="editorReplay">
                                                                       Type...

                                                                        </div>
                                                                             <script>
                                                                                // Replace the <textarea id="editor1"> with a CKEditor
                                                                                // instance, using default configuration.
                                                                                CKEDITOR.replace( 'editorReplay' );
                                                                            </script>
                                                                    </div>
                                                    <div class="col-xs-12" style="margin-top:15px;">
                                                        <hr class="hfkaniei"> </div>
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-lg-3"><button type="button" class="btn btn-success " style="text-align: left; width: 100%;"> <span class="append-icon" style="text-align:left;margin-right:42"><i class="fa fa-reply-all" aria-hidden="true" style="width:19px;margin-right: 31px;"></i></span>Publish</button></div>
                                                        
                                                    </div>
                                                </div>
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

            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

            <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
