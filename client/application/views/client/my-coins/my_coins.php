<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Coins</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js" type="text/javascript"></script>

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
                    <a href="index.html#Purchase" aria-controls="Purchase" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-cart-plus " aria-hidden="true" style="width:auto"></i> Purchase </a>
                </li>
                <li role="presentation">
                    <a href="index.html#Used" aria-controls="Used" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-cart-arrow-down " aria-hidden="true" style="width:auto"></i> Used </a>
                </li>
               <ul class="nav navbar-nav navbar-right">
                   <li >
                        <button type="button" data-toggle="modal" data-target="#MatchedEmployeerCoins" class="btn btn-block btn-grey btn-xs aligncenter">+ | Add Coins</button>
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
          
 <div class="modal fade" id="MatchedEmployeerCoins" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 780px; padding:0; margin:auto;">
    <div style="border-top:10px solid #0000cc;" class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align text-center2" id="Heading">Buy Coins</h4>
    </div>
    <div class="container loaded" id="my1">
        <div style="padding-top:2%" class="row">
            <div class="col-lg-4">
                <div class="columns">
                    <ul class="price">
                        <li class="header">10 Coins</li>
                        <li class="grey">€</li>
                        <li class="highlight" style="margin-left:-15%"><span style="color: green; border-radius: 50%;padding: 1px;" class="fa fa-check" aria-hidden="true"></span><span style="padding-left:25%;">For more Bids</span></li>
                        <li class="highlight" style="margin-left:-4%"><span style="color: green; border-radius: 50%;padding: 1px;" class="fa fa-check" aria-hidden="true"></span><span style="padding-left:25%;">Contact Employers</span></li>
                        <li class="highlight" style="margin-left:-15%"><span style="color: red;padding: 1px;" class="fa fa-ban" aria-hidden="true"></span><span style="padding-left:25%;">Buy Services</span></li>
                        <li class="grey"><a href="#" class="button" data-toggle="modal" data-target="#paynow" onclick="testnew1()">Buy Now</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="columns">
                    <ul class="price">
                        <li class="header">20 Coins</li>
                        <li class="grey">10 €</li>
                        <li class="highlight" style="margin-left:-15%"><span style="color: green; border-radius: 50%;padding: 1px;" class="fa fa-check" aria-hidden="true"></span><span style="padding-left:25%;">For more Bids</span></li>
                        <li class="highlight" style="margin-left:-4%"><span style="color: green; border-radius: 50%;padding: 1px;" class="fa fa-check" aria-hidden="true"></span><span style="padding-left:25%;">Contact Employers</span></li>
                        <li class="highlight" style="margin-left:-15%"><span style="color: red;padding: 1px" class="fa fa-ban" aria-hidden="true"></span><span style="padding-left:25%;">Buy Services</span></li>
                        <li class="grey"><a href="#" data-toggle="modal" data-target="#paynow" class="button" onclick="testnew1()">Buy Now</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="columns">
                    <ul class="price">
                        <li class="header">40 Coins</li>
                        <li class="grey">20 €</li>
                        <li class="highlight" style="margin-left:-15%"><span style="color: green; border-radius: 50%;padding: 1px;" class="fa fa-check" aria-hidden="true"></span><span style="padding-left:25%;">For more Bids</span></li>
                        <li class="highlight" style="margin-left:-4%"><span style="color: green; border-radius: 50%;padding: 1px;" class="fa fa-check" aria-hidden="true"></span><span style="padding-left:25%;">Contact Employers</span></li>
                        <li class="highlight" style="margin-left:-15%"><span style="color: red; padding: 1px;" class="fa fa-ban" aria-hidden="true"></span><span style="padding-left:25%;">Buy Services</span></li>
                        <li class="grey"><a href="#my2" data-toggle="modal" data-target="#paynow" class="button" onclick="testnew1()">Buy Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style="display: none;" class="single5" id="my2">
        <div style="margin-top:-59px;border-bottom: 1px solid #e6e6e6; height:350px;padding-top:1%" class="col-lg-4">
            <div class="columns">
                <ul class="price">
                    <li class="header">40 Coins</li>
                    <li class="grey">20 €</li>
                    <li class="highlight" style="margin-left:-15%"><span style="color: green; border-radius: 50%;padding: 1px;" class="fa fa-check" aria-hidden="true"></span><span style="padding-left:25%;">For more Bids</span></li>
                    <li class="highlight" style="margin-left:-4%"><span style="color: green; border-radius: 50%;padding: 1px;" class="fa fa-check" aria-hidden="true"></span><span style="padding-left:25%;">Contact Employers</span></li>
                    <li class="highlight" style="margin-left:-15%"><span style="color: red; padding: 1px;" class="fa fa-ban" aria-hidden="true"></span><span style="padding-left:25%;">Buy Services</span></li>
                    <li class="grey"><a href="#a4" data-toggle="modal" data-target="#paynow" onclick="testback1()">Change</a></li>
                </ul>
            </div>
        </div>

</div>
     
    
        
    </div>
    
                                        </div>
                                        <div id="ascrail2066" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: 775px; height: 0px; display: none;">
                                            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                        </div>
                                        <div id="ascrail2066-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                        </div>
                                    </div>
                                    <!-- <div id="ascrail2008" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2008-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; left: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2010" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2010-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; left: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2020" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2020-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2007" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2007-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2013" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 1;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2013-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div></div><div id="ascrail2029" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: 515px; height: 16px; display: none; opacity: 1;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2029-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: 11px; left: 0px; position: absolute; cursor: default; display: none; opacity: 1;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div></div></div>-->
                                    <!-- removed addsearch from herer -->
                                    
                                    <div class="modal fade" id="paynow" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog" style="width:100%">
<div class="modal-content" tabindex="5" style="overflow: hidden; outline: none; width: 900px; padding:0; margin:auto;">
    <div style="border-top:10px solid #0000cc;" class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align text-center2" id="Heading">How you want to pay</h4>
    </div>
    <div class="container loaded" >
        <div style="padding-top:2%" class="row">
            <div class="col-xs-12">
             <div class="col-xs-4">
                 <div class="columns">
                <ul class="price">
                    <li class="header">40 Coins</li>
                    <li class="grey">20 €</li>
                    <li class="highlight" style="margin-left:-15%"><span style="color: green; border-radius: 50%;padding: 1px;" class="fa fa-check" aria-hidden="true"></span><span style="padding-left:25%;">For more Bids</span></li>
                    <li class="highlight" style="margin-left:-4%"><span style="color: green; border-radius: 50%;padding: 1px;" class="fa fa-check" aria-hidden="true"></span><span style="padding-left:25%;">Contact Employers</span></li>
                    <li class="highlight" style="margin-left:-15%"><span style="color: red; padding: 1px;" class="fa fa-ban" aria-hidden="true"></span><span style="padding-left:25%;">Buy Services</span></li>
                    <li class="grey"><a href="#a4" data-dismiss="modal" data-toggle="modal" data-target="#myModal" onclick="testback1()">Change</a></li>
           
                </ul>
            </div>
                 </div>
             <div class="col-xs-8">
                    <div typ class=" col-xs-3 pbutton pactive" style="margin-bottom:10px;padding-bottom:5%;height: 307px;width: 124px"> Cash 
                        <svg class="svg-cash" viewBox="0 0 512 512">
                            <path class="svg-cash-hand" d="M106.908,147h56.33h96.607c22.139,0,31.855-0.384,37.188-0.055c5.463,0.334,10.715,2.463,17.723,7.55 c7.719,5.749,21.205,9.042,32.086,20.779c10.906,11.666,32.221,35.637,37.277,42.137c5.01,6.46,32.637,72.549-38.697,77.367 c-71.357,4.78-125.639-8.428-137.912-8.914c-12.289-0.485-31.773-5.975-51.424-10.815c-38.977-9.601-36.828-17.492-57.422-19.182 c-20.619-1.691-29.092-3.55-29.092-3.55L79.035,147H106.908z"></path> <path class="svg-cash-money" d="M426.537,100.903c0,0-49.463,56.124-93.143,92.677c-67.695,56.555-160.115,96.963-160.115,96.963 s36.949,80.367,46.809,121.462c53.283-30.399,150.305-93.938,189.299-124.44c35.197-27.506,95.736-99.566,95.736-99.566 L426.537,100.903z"></path> <path class="svg-cash-money-inner" d="M297.721,266.825c0,22.905,18.574,41.479,41.48,41.479 c22.908,0,41.482-18.574,41.482-41.479c0-22.919-18.574-41.481-41.482-41.481C316.295,225.344,297.721,243.906,297.721,266.825"></path>
                            <path class="svg-cash-money-inner" d="M427.875,171.335c7.904,10.497,21.02,15.349,29.307,10.849 c8.346-4.563,8.65-16.735,0.715-27.284c-7.924-10.507-21.049-15.327-29.318-10.825 C420.305,148.616,419.969,160.839,427.875,171.335"></path> <path class="svg-cash-money-inner" d="M218.041,334.839c6.117,11.018,19.02,17.316,28.619,14.096 c9.697-3.181,12.477-14.663,6.301-25.642c-6.143-11.059-19.066-17.317-28.656-14.179 C214.619,312.355,211.881,323.83,218.041,334.839"></path> <path class="svg-cash-hand" d="M258.408,177.271c0,0,11.541,20.897,27.688,23.333c16.107,2.376,47.537,13.668,55.719,14.892 c8.143,1.148,27.1,5.382,27.1,21.029c0,8.212-5.717,34.513-27.863,34.513c-24.717,0-52.084-17.135-60.707-20.498 c-8.588-3.383-34.088-12.718-45.455-9.574c-11.262,3.09-35.111,2.374-50.895,0.941c-15.918-1.473-46.842-9.115-57.725-17.059 c0,0-18.08-9.965,20.4-28.777C185.225,177.282,242.934,162.21,258.408,177.271"></path> <path class="svg-cash-thumb" d="M258.408,177.271c0,0,11.541,20.897,27.688,23.333 c16.107,2.376,47.537,13.668,55.719,14.892c8.143,1.148,27.1,5.382,27.1,21.029c0,8.212-5.717,34.513-27.863,34.513 c-25.951,0-52.084-17.135-60.707-20.498c-8.588-3.383-34.088-12.718-45.455-9.574c-11.262,3.09-35.111,2.374-50.895,0.941 c-15.918-1.473-46.842-9.115-57.725-17.059c0,0-18.08-9.965,20.4-28.777C185.225,177.282,242.934,162.21,258.408,177.271z"></path> <path class="svg-cash-hand" d="M265.518,168.38l-16.447,17.848c0,0-48.854,11.748-74.717,19.733c-25.797,7.985-40.836,11.747-40.836,11.747 s-8.441,16.883-14.053,19.195c-5.65,2.386-20.699-8.41-10.391-31.398c10.391-23.032,20.254-46.032,77.559-47.435 c57.232-1.419,73.191-7.571,78.396,0.425C270.217,166.511,265.518,168.38,265.518,168.38"></path> <path class="svg-cash-shirt-inner" d="M57.346,142c-29.242,42-29.242,135-29.242,135H90V142H57.346z"></path> <path class="svg-cash-shirt-outer" d="M7,122v165.564c16,8.649,63,10.37,63,10.37V121.644c0,0-45,0.484-63,0"></path> </svg>
                 </div>
                   
                 <div class="col-xs-3 pbutton" style="margin-bottom:10px;height: 307px;width: 124px"> Debit 
                        <svg class="svg-debit" viewBox="0 0 32 23">
                        <path class="svg-debit-card" d="M1.993 0h28c1.104 0 2 .895 2 2v18.999c0 1.104-.896 2.001-2 2.001h-28c-1.104 0-2-.896-2-2.001v-18.999c0-1.105.895-2 2-2z"></path> <path class="svg-debit-data" d="M12.993 15v2h16v-2h-16zm0 5h10v-2h-10v2zm-4-5h-4c-1.104 0-2 .896-2 2v1c0 1.104.896 2 2 2h4c1.104 0 2-.896 2-2v-1c0-1.104-.896-2-2-2z"></path> <path class="svg-debit-sign" d="M2.993 9h26v3h-26v-3z"></path> <path class="svg-debit-read" d="M-.007 3h32v3h-32v-3z"></path> </svg>
                 </div>
                 <div class="col-xs-3 pbutton" style="margin-bottom:10px;height: 307px; width: 124px"> Credit Card <svg class="svg-visa" viewBox="0 0 512 512"> <path class="svg-visa-border" d="M482.722,103.198c13.854,0,25.126,11.271,25.126,25.126v257.9c0,13.854-11.271,25.126-25.126,25.126H30.99 c-13.854,0-25.126-11.271-25.126-25.126v-257.9c0-13.854,11.271-25.126,25.126-25.126H482.722 M482.722,98.198H30.99 c-16.638,0-30.126,13.488-30.126,30.126v257.9c0,16.639,13.488,30.126,30.126,30.126h451.732 c16.639,0,30.126-13.487,30.126-30.126v-257.9C512.848,111.686,499.36,98.198,482.722,98.198L482.722,98.198z"></path> <polygon class="svg-visa-letter" points="190.88,321.104 212.529,194.022 247.182,194.022 225.494,321.104 190.88,321.104"></polygon> <path class="svg-visa-letter" d="M351.141,197.152c-6.86-2.577-17.617-5.339-31.049-5.339c-34.226,0-58.336,17.234-58.549,41.94 c-0.193,18.256,17.21,28.451,30.351,34.527c13.489,6.231,18.023,10.204,17.966,15.767c-0.097,8.518-10.775,12.403-20.737,12.403 c-13.857,0-21.222-1.918-32.599-6.667l-4.458-2.016l-4.864,28.452c8.082,3.546,23.043,6.618,38.587,6.772 c36.417,0,60.042-17.035,60.313-43.423c0.136-14.447-9.089-25.446-29.071-34.522c-12.113-5.882-19.535-9.802-19.458-15.757 c0-5.281,6.279-10.93,19.846-10.93c11.318-0.179,19.536,2.292,25.912,4.869l3.121,1.468L351.141,197.152L351.141,197.152z"></path> <path class="svg-visa-letter" d="M439.964,194.144h-26.766c-8.295,0-14.496,2.262-18.14,10.538l-51.438,116.47h36.378 c0,0,5.931-15.66,7.287-19.1c3.974,0,39.305,0.059,44.363,0.059c1.027,4.447,4.206,19.041,4.206,19.041h32.152L439.964,194.144 L439.964,194.144z M397.248,276.062c2.868-7.326,13.8-35.53,13.8-35.53c-0.194,0.339,2.849-7.36,4.593-12.132l2.346,10.959 c0,0,6.628,30.336,8.022,36.703H397.248L397.248,276.062z"></path> <path class="svg-visa-letter" d="M161.828,194.114l-33.917,86.667l-3.624-17.607c-6.299-20.312-25.971-42.309-47.968-53.317l31.009,111.149 l36.649-0.048l54.538-126.844H161.828L161.828,194.114z"></path> <path class="svg-visa-corner" d="M96.456,194.037H40.581l-0.426,2.641c43.452,10.523,72.213,35.946,84.133,66.496l-12.133-58.41 C110.062,196.716,103.976,194.318,96.456,194.037L96.456,194.037z"></path> </svg> <svg class="svg-master" viewBox="0 0 512 512"> <path class="svg-master-border" d="M482.722,103.198c13.854,0,25.126,11.271,25.126,25.126v257.9c0,13.854-11.271,25.126-25.126,25.126H30.99 c-13.854,0-25.126-11.271-25.126-25.126v-257.9c0-13.854,11.271-25.126,25.126-25.126H482.722 M482.722,98.198H30.99 c-16.638,0-30.126,13.488-30.126,30.126v257.9c0,16.639,13.488,30.126,30.126,30.126h451.732 c16.639,0,30.126-13.487,30.126-30.126v-257.9C512.848,111.686,499.36,98.198,482.722,98.198L482.722,98.198z"></path> <path class="svg-master-circle2" d="M257.568,355.172c22.646,20.867,53.061,33.522,86.14,33.522 c71.037,0,128.538-57.941,128.538-129.207c0-71.482-57.501-129.424-128.538-129.424c-33.079,0-63.493,12.653-86.14,33.522 c-25.972,23.752-42.401,57.943-42.401,95.902C215.167,297.45,231.597,331.642,257.568,355.172L257.568,355.172z"></path> <path class="svg-master-circle1" d="M299.086,245.725c-0.444-4.662-1.331-9.102-2.223-13.764h-78.586 c0.888-4.662,2.217-9.103,3.549-13.543h71.266c-1.558-4.659-3.333-9.323-5.332-13.763h-60.382 c2.22-4.659,4.661-9.323,7.326-13.763h45.51c-2.887-4.662-6.215-9.325-9.769-13.542h-25.975 c3.996-4.883,8.438-9.545,13.097-13.763c-22.863-20.647-53.057-33.522-86.356-33.522c-70.817,0-128.538,57.942-128.538,129.424 c0,71.266,57.721,129.207,128.538,129.207c33.3,0,63.493-12.655,86.356-33.522l0,0l0,0c4.665-4.221,8.882-8.66,12.878-13.544 h-25.975c-3.552-4.439-6.66-8.879-9.767-13.763h45.51c2.885-4.439,5.327-8.879,7.546-13.764h-60.382 c-2.001-4.439-3.996-8.88-5.552-13.544h71.266c1.553-4.439,2.661-9.1,3.771-13.763c0.892-4.439,1.778-9.104,2.223-13.764 c0.443-4.44,0.666-8.879,0.666-13.544C299.752,254.828,299.529,250.165,299.086,245.725L299.086,245.725z"></path> <path class="svg-master-letter" d="M342.599,229.742l-2.443,14.207 c-4.886-2.441-8.438-3.552-12.434-3.552c-10.433,0-17.76,10.212-17.76,24.644c0,9.987,4.885,15.982,13.098,15.982 c3.33,0,7.326-1.106,11.766-3.332l-2.441,14.876c-5.106,1.332-8.436,2-12.209,2c-15.096,0-24.421-10.88-24.421-28.419 c0-23.309,12.877-39.735,31.302-39.735c2.441,0,4.662,0.222,6.44,0.666l5.549,1.332 C340.822,229.076,341.264,229.298,342.599,229.742L342.599,229.742z"></path> <path class="svg-master-letter" d="M297.755,239.509c-0.444,0-0.892,0-1.333,0 c-4.665,0-7.327,2.22-11.546,8.66l1.331-8.216h-12.651l-8.658,53.282h13.984c5.106-32.635,6.438-38.187,13.098-38.187 c0.443,0,0.443,0,0.888,0c1.332-6.436,3.108-11.1,5.33-15.318L297.755,239.509L297.755,239.509z"></path> <path class="svg-master-letter" d="M217.387,292.566c-3.771,1.332-6.878,1.775-9.987,1.775 c-7.105,0-11.102-3.995-11.102-11.762c0-1.332,0.222-3.113,0.444-4.664l0.889-5.328l0.665-4.221l5.997-36.406h13.763l-1.557,7.992 h7.104l-1.775,13.1h-7.104l-3.771,22.198c-0.224,0.889-0.224,1.552-0.224,2.221c0,2.664,1.332,3.776,4.664,3.776 c1.551,0,2.886,0,3.774-0.444L217.387,292.566L217.387,292.566z"></path> <path class="svg-master-letter" d="M163.887,256.824c0,6.66,3.107,11.323,10.433,14.876 c5.773,2.663,6.661,3.551,6.661,5.771c0,3.332-2.441,4.884-7.992,4.884c-4.218,0-7.992-0.664-12.432-1.995l-2,12.206l0.667,0.225 l2.443,0.444c0.887,0.219,1.998,0.444,3.774,0.444c3.108,0.443,5.771,0.443,7.548,0.443c14.652,0,21.534-5.551,21.534-17.76 c0-7.328-2.886-11.548-9.768-14.875c-5.994-2.663-6.661-3.333-6.661-5.771c0-2.888,2.443-4.221,6.883-4.221 c2.663,0,6.438,0.225,9.989,0.669l1.998-12.212c-3.552-0.666-9.101-1.111-12.209-1.111 C169.214,238.842,163.665,247.056,163.887,256.824L163.887,256.824z"></path> <path class="svg-master-letter" d="M448.935,293.235h-13.097l0.665-5.109 c-3.773,3.996-7.77,5.772-12.875,5.772c-10.215,0-16.874-8.654-16.874-21.979c0-17.758,10.435-32.854,22.646-32.854 c5.55,0,9.546,2.442,13.319,7.328l3.108-18.652h13.766L448.935,293.235L448.935,293.235z M428.511,280.804 c6.438,0,10.879-7.554,10.879-17.982c0-6.886-2.443-10.437-7.325-10.437c-6.217,0-10.881,7.327-10.881,17.759 C421.184,277.251,423.628,280.804,428.511,280.804L428.511,280.804z"></path> <path class="svg-master-letter" d="M260.013,292.122c-4.883,1.558-9.322,2.22-14.432,2.22 c-15.538,0-23.53-8.211-23.53-23.974c0-18.203,10.211-31.748,24.2-31.748c11.542,0,18.868,7.548,18.868,19.315 c0,3.996-0.445,7.768-1.776,13.321h-27.529c-0.222,0.662-0.222,1.106-0.222,1.55c0,6.222,4.218,9.329,12.21,9.329 c5.107,0,9.547-0.888,14.432-3.332L260.013,292.122L260.013,292.122z M252.241,260.375c0-1.107,0-1.994,0-2.663 c0-4.44-2.439-6.881-6.66-6.881c-4.439,0-7.547,3.331-8.879,9.544H252.241L252.241,260.375z"></path> <polygon class="svg-master-letter" points="110.828,293.235 97.065,293.235 105.056,242.839 87.074,293.235 77.527,293.235 76.418,243.282 67.981,293.235 55.106,293.235 65.984,227.741 85.964,227.741 86.63,268.367 99.949,227.741 121.706,227.741 110.828,293.235 "></polygon> <path class="svg-master-letter" d="M145.238,269.48c-1.332,0-1.998-0.226-3.107-0.226 c-7.771,0-11.767,2.889-11.767,8.217c0,3.332,1.776,5.328,4.884,5.328C141.021,282.8,145.017,277.472,145.238,269.48 L145.238,269.48z M155.45,293.235h-11.544l0.222-5.554c-3.552,4.44-8.215,6.441-14.652,6.441c-7.547,0-12.653-5.771-12.653-14.433 c0-13.1,8.879-20.646,24.418-20.646c1.554,0,3.554,0.224,5.773,0.443c0.444-1.775,0.444-2.438,0.444-3.327 c0-3.551-2.441-4.883-8.88-4.883c-3.996,0-8.436,0.444-11.543,1.332l-1.998,0.663l-1.332,0.224l1.998-11.988 c6.881-1.999,11.545-2.666,16.65-2.666c11.987,0,18.426,5.329,18.426,15.542c0,2.664-0.222,4.659-1.109,10.655l-3.11,18.872 l-0.444,3.327l-0.222,2.664l-0.221,1.999L155.45,293.235L155.45,293.235z"></path> <path class="svg-master-letter" d="M365.019,269.48c-1.555,0-2.22-0.226-3.108-0.226 c-7.991,0-11.987,2.889-11.987,8.217c0,3.332,1.998,5.328,5.106,5.328C360.579,282.8,364.797,277.472,365.019,269.48 L365.019,269.48z M375.229,293.235h-11.543l0.222-5.554c-3.551,4.44-8.213,6.441-14.65,6.441c-7.548,0-12.653-5.771-12.653-14.433 c0-13.1,8.879-20.646,24.418-20.646c1.554,0,3.552,0.224,5.551,0.443c0.443-1.775,0.665-2.438,0.665-3.327 c0-3.551-2.441-4.883-8.88-4.883c-3.995,0-8.656,0.444-11.766,1.332l-1.775,0.663l-1.332,0.224l1.998-11.988 c6.882-1.999,11.543-2.666,16.648-2.666c11.988,0,18.206,5.329,18.206,15.542c0,2.664,0,4.659-1.113,10.655l-2.883,18.872 l-0.446,3.327l-0.443,2.664l-0.223,1.999V293.235L375.229,293.235z"></path> <path class="svg-master-letter" d="M412.526,239.509c-0.444,0-0.889,0-1.332,0 c-4.662,0-7.325,2.22-11.544,8.66l1.331-8.216H388.33l-8.438,53.282h13.765c5.106-32.635,6.438-38.187,13.098-38.187 c0.444,0,0.444,0,0.889,0c1.331-6.436,3.107-11.1,5.327-15.318L412.526,239.509L412.526,239.509z"></path> </svg> <svg class="svg-amex" viewBox="0 0 512 512"> <path class="svg-amex-border" d="M482.722,103.198c13.854,0,25.126,11.271,25.126,25.126v257.9c0,13.854-11.271,25.125-25.126,25.125H30.99 c-13.854,0-25.126-11.271-25.126-25.125v-257.9c0-13.854,11.271-25.126,25.126-25.126H482.722 M482.722,98.198H30.99 c-16.638,0-30.126,13.488-30.126,30.126v257.9c0,16.639,13.488,30.125,30.126,30.125h451.731c16.64,0,30.126-13.486,30.126-30.125 v-257.9C512.848,111.686,499.36,98.198,482.722,98.198L482.722,98.198z"></path> <path class="svg-amex-letter" d="M263.488,241.026v-10.115c0,0-0.535-7.92-8.802-7.92h-12.852v18.035h-13.193v-51.994 h32.03c0,0,16.718-2.024,16.718,15.218c0,8.975-7.391,12.139-7.391,12.139s6.416,2.997,6.416,11.795v12.841L263.488,241.026 M241.835,210.762h13.643c3.961,0,7.219-2.201,7.219-4.926c0-2.73-3.258-4.93-7.219-4.93h-13.643V210.762L241.835,210.762"></path> <path class="svg-amex-letter" d="M419.223,241.026l-20.938-34.752v34.752h-11.352h-2.119h-12.394l-4.668-10.908h-24.105 l-4.583,10.908H326.92h-2.196h-6.339c0,0-17.768-2.549-17.768-24.545c0-28.862,20.154-27.716,20.851-27.893l16.278,0.444v11.7 l-13.367,0.172c0,0-8.715,0-9.775,11.355c-0.124,1.303-0.181,2.501-0.172,3.614c0.048,17.577,15.258,12.12,15.754,11.958 l16.364-38.799h18.473l19.792,47.159v-47.159h18.654l20.68,34.227v-34.227h13.29v51.994H419.223 M349.279,216.834h12.84 l-6.329-15.486L349.279,216.834L349.279,216.834"></path> <path class="svg-amex-letter" d="M159.92,241.026v-35.893l-16.536,35.893h-10.821l-16.631-35.72v35.72h-11.524h-1.762 H89.888l-4.573-10.908H61.208l-4.664,10.908h-14.43l21.906-51.994h18.569l20.058,47.774v-47.774h20.852l14.521,32.289 l14.436-32.289h20.851v51.994H159.92 M66.836,216.834h12.845l-6.42-15.486L66.836,216.834L66.836,216.834"></path> <polyline class="svg-amex-letter" points="180.6,241.026 180.6,189.033 221.786,189.033 221.786,201.172 193.89,201.172 193.89,209.177 221.08,209.177 221.08,220.968 193.89,220.968 193.89,229.77 221.786,229.77 221.786,241.026 180.6,241.026"></polyline> <polyline class="svg-amex-letter" points="282.85,241.203 282.85,189.033 296.13,189.033 296.13,241.203 282.85,241.203"></polyline> <path class="svg-amex-letter" d="M314.432,329.189v-10.121c0,0-0.533-7.914-8.802-7.914h-12.842v18.035h-13.204v-51.998 h32.03c0,0,16.718-2.023,16.718,15.223c0,8.975-7.389,12.145-7.389,12.145s6.34,2.988,6.34,11.78v12.851H314.432 M292.788,298.925h13.644c3.952,0,7.208-2.194,7.208-4.926c0-2.729-3.256-4.927-7.208-4.927h-13.644V298.925L292.788,298.925"></path> <path class="svg-amex-letter" d="M226.445,329.104h-11.533l-13.977-15.4l-14.091,15.4h-8.001h-41.091v-52.086h41.091 h6.951l15.142,16.543l15.219-16.457h10.119v-0.086h32.022c0,0,16.718-1.851,16.718,15.301c0,15.313-5.548,20.067-22.619,20.067 h-12.926v16.718H226.445 M209.909,303.508l16.363,18.12v-36.165L209.909,303.508L209.909,303.508 M151.042,317.85h27.801 l13.023-14.342l-13.023-14.264h-27.801v8.001h27.095v11.801h-27.095V317.85L151.042,317.85 M239.468,298.83h13.633 c3.961,0,7.217-2.196,7.217-4.926c0-2.721-3.256-4.928-7.217-4.928h-13.633V298.83L239.468,298.83"></path> <path class="svg-amex-letter" d="M404.441,329.018h-23.496v-11.973h20.595c0,0,7.39,0.88,7.39-4.123 c0-4.679-11.17-4.316-11.17-4.316s-18.216,1.586-18.216-15.484c0-16.984,16.449-16.016,16.449-16.016h25.347v12.14h-20.41 c0,0-7.046-1.412-7.046,3.705c0,4.296,9.585,3.685,9.585,3.685s20.153-1.488,20.153,14.168 c0,16.793-12.984,18.282-17.585,18.282C405.044,329.084,404.441,329.018,404.441,329.018"></path> <polyline class="svg-amex-letter" points="333.794,329.104 333.794,277.191 374.962,277.191 374.962,289.244 347.073,289.244 347.073,297.245 374.264,297.245 374.264,309.046 347.073,309.046 347.073,317.85 374.962,317.85 374.962,329.104 333.794,329.104"></polyline> <path class="svg-amex-letter" d="M450.984,329.018h-23.495v-11.973h20.507c0,0,7.477,0.88,7.477-4.123 c0-4.679-11.169-4.316-11.169-4.316s-18.218,1.586-18.218-15.484c0-16.984,16.449-16.016,16.449-16.016h25.262v12.14h-20.334 c0,0-7.038-1.412-7.038,3.705c0,4.296,9.597,3.685,9.597,3.685s20.144-1.488,20.144,14.168 c0,16.793-12.983,18.282-17.584,18.282C451.586,329.084,450.984,329.018,450.984,329.018"></path> </svg> </div>
                    <div class=" col-xs-3 pbutton"  style="margin-bottom:10px;height: 307px;width: 124px"> Sofort Banking <svg class="svg-sofort" viewBox="0 0 320 120"> <path class="svg-sofort-line1" d="M 54.41 20.44 C 58.06 17.90 62.66 17.68 66.95 17.52 C 77.24 17.46 87.53 17.53 97.82 17.49 C 92.87 20.72 88.53 24.84 85.18 29.73 C 78.81 29.83 72.43 29.65 66.06 29.79 C 64.26 29.58 63.24 31.19 62.08 32.25 C 62.19 32.82 62.41 33.97 62.52 34.55 C 66.90 37.22 73.32 36.94 75.98 42.01 C 78.27 47.09 75.96 52.87 73.47 57.43 C 69.38 64.46 61.01 67.55 53.21 67.61 C 41.73 67.93 30.24 67.67 18.76 67.74 C 20.35 63.33 21.95 58.92 23.56 54.51 C 34.38 54.43 45.20 54.61 56.02 54.43 C 58.83 54.92 61.58 50.92 58.92 49.02 C 54.92 46.96 49.71 46.95 46.72 43.15 C 44.26 40.63 44.77 36.75 45.77 33.69 C 47.46 28.69 49.87 23.46 54.41 20.44 Z"></path> <path class="svg-sofort-line1" d="M 106.39 17.63 C 112.36 16.33 119.54 16.30 124.29 20.72 C 128.40 24.81 128.33 31.21 127.24 36.51 C 125.46 43.80 122.30 50.81 117.81 56.83 C 113.36 62.90 106.52 67.39 98.97 68.25 C 93.44 69.01 87.08 68.26 83.01 64.09 C 78.48 58.90 79.30 51.29 81.21 45.18 C 85.02 33.04 93.51 20.99 106.39 17.63 Z"></path> <path class="svg-sofort-line1" d="M 141.74 19.75 C 145.14 17.82 149.15 17.49 152.98 17.48 C 162.18 17.50 171.38 17.50 180.58 17.49 C 175.46 20.78 170.71 24.72 167.18 29.73 C 161.47 29.90 155.75 29.50 150.06 29.91 C 147.70 31.68 147.51 34.96 146.41 37.49 C 150.85 37.50 155.29 37.49 159.73 37.51 C 158.46 41.01 157.18 44.50 155.92 48.00 C 151.44 48.00 146.97 47.98 142.50 48.04 C 140.14 54.61 137.72 61.16 135.37 67.74 C 130.20 67.76 125.03 67.74 119.87 67.76 C 124.46 55.06 129.10 42.36 133.71 29.66 C 135.18 25.59 137.86 21.81 141.74 19.75 Z"></path> <path class="svg-sofort-line1" d="M 189.37 17.53 C 195.10 16.42 201.94 16.34 206.57 20.44 C 210.95 24.53 211.04 31.22 209.77 36.68 C 208.01 43.81 204.88 50.65 200.55 56.59 C 195.95 62.94 188.83 67.63 180.91 68.33 C 175.44 68.92 169.01 68.18 165.28 63.66 C 161.30 58.93 161.84 52.15 163.38 46.56 C 166.98 33.74 175.79 20.88 189.37 17.53 Z"></path> <path class="svg-sofort-line1" d="M 252.53 17.49 C 269.25 17.53 285.97 17.44 302.69 17.54 C 301.27 21.63 299.74 25.68 298.25 29.75 C 292.35 29.76 286.45 29.75 280.55 29.75 C 275.85 42.39 271.32 55.09 266.68 67.76 C 261.98 67.75 257.27 67.77 252.57 67.73 C 257.09 55.05 261.75 42.42 266.35 29.77 C 263.37 29.75 260.39 29.75 257.41 29.78 C 257.89 25.10 256.09 20.55 252.53 17.49 Z"></path> <path class="svg-sofort-line1" d="M 221.18 17.47 C 229.41 17.79 237.77 16.78 245.90 18.47 C 250.28 19.33 254.22 23.26 253.77 27.95 C 253.56 36.65 246.64 43.48 238.88 46.39 C 242.22 53.14 243.84 60.53 245.76 67.76 C 240.25 67.75 234.74 67.74 229.22 67.77 C 227.84 62.02 226.44 56.28 225.08 50.53 C 222.93 56.27 220.79 62.02 218.60 67.75 C 213.36 67.76 208.11 67.74 202.87 67.77 C 208.92 50.98 215.09 34.24 221.18 17.47 Z"></path> <path class="svg-sofort-fill" d="M 231.49 28.21 C 234.14 28.46 238.63 27.32 239.26 30.99 C 238.82 34.00 237.35 37.06 234.67 38.68 C 232.41 40.06 229.65 39.87 227.11 40.12 C 228.51 36.13 230.05 32.18 231.49 28.21 Z"></path> <path class="svg-sofort-fill" d="M 106.31 29.06 C 108.24 28.26 110.78 28.01 112.46 29.49 C 114.15 32.11 112.72 35.28 112.09 38.01 C 110.25 43.51 108.42 49.22 104.86 53.88 C 102.74 56.68 98.15 58.01 95.28 55.64 C 93.39 51.98 95.40 47.86 96.39 44.23 C 98.48 38.60 100.78 32.16 106.31 29.06 Z"></path> <path class="svg-sofort-fill" d="M 188.40 29.29 C 190.08 28.27 192.16 28.29 194.02 28.73 C 196.72 30.31 195.69 33.80 195.13 36.26 C 193.43 42.07 191.43 47.93 188.08 53.01 C 186.18 56.09 182.06 57.84 178.65 56.29 C 175.82 54.05 177.40 50.01 178.06 47.11 C 180.20 40.64 182.42 33.23 188.40 29.29 Z"></path> <path class="svg-sofort-line2" d="M 160.29 98.99 C 159.70 89.26 167.92 79.52 177.85 79.23 C 180.86 78.92 183.83 79.66 186.50 81.03 C 186.06 82.70 185.52 84.35 184.90 85.97 C 182.71 84.95 180.56 83.56 178.08 83.48 C 171.25 83.45 165.75 90.28 166.04 96.84 C 166.88 100.70 171.45 101.07 174.57 99.94 C 175.23 98.04 175.91 96.15 176.60 94.26 C 174.84 94.25 173.08 94.22 171.32 94.18 C 171.83 92.85 172.35 91.52 172.89 90.20 C 176.25 90.26 179.61 90.23 182.97 90.31 C 182.07 94.60 180.47 98.73 178.71 102.73 C 176.02 104.89 172.17 104.84 168.88 105.02 C 165.15 105.14 160.66 103.17 160.29 98.99 Z"></path> <path class="svg-sofort-line2" d="M 26.76 81.66 C 27.48 78.80 30.88 79.59 33.07 79.45 C 35.96 79.61 39.40 79.24 41.58 81.55 C 43.69 85.23 40.49 89.43 37.16 91.03 C 38.28 91.88 39.70 92.68 39.74 94.29 C 39.74 98.51 36.53 102.27 32.63 103.59 C 28.17 105.17 23.36 104.37 18.74 104.38 C 20.92 96.65 24.01 89.20 26.76 81.66 Z"></path> <path class="svg-sofort-line2" d="M 56.22 80.94 C 57.77 78.57 61.09 79.81 63.44 79.40 C 63.74 87.68 63.43 95.98 63.26 104.27 C 61.36 104.84 59.38 104.81 57.47 104.38 C 57.62 102.59 57.73 100.80 57.84 99.01 C 54.79 98.99 51.74 99.00 48.70 98.99 C 47.38 100.86 46.25 102.93 44.54 104.48 C 43.05 104.79 41.52 104.71 40.02 104.75 C 40.52 103.17 41.29 101.69 42.31 100.38 C 47.04 93.97 51.51 87.36 56.22 80.94 Z"></path> <path class="svg-sofort-line2" d="M 75.90 81.85 C 76.95 78.52 81.02 79.47 83.59 80.08 C 84.66 85.65 85.61 91.24 86.31 96.87 C 88.19 91.52 90.01 86.14 92.10 80.87 C 92.83 78.72 95.59 79.86 97.25 79.53 C 95.34 85.71 92.88 91.70 90.77 97.82 C 89.92 100.03 89.33 102.40 87.90 104.33 C 85.96 104.65 84.00 104.45 82.05 104.35 C 80.80 98.27 79.73 92.13 79.05 85.96 C 77.05 92.22 74.64 98.34 72.46 104.53 C 70.86 104.60 69.27 104.63 67.67 104.61 C 70.25 96.97 73.03 89.39 75.90 81.85 Z"></path> <path class="svg-sofort-line2" d="M 104.08 79.75 C 105.89 79.59 107.71 79.55 109.53 79.61 C 108.32 83.24 106.97 86.82 105.65 90.42 C 109.02 87.18 112.37 83.92 115.80 80.75 C 117.50 78.81 120.24 79.62 122.44 79.85 C 118.99 84.14 114.50 87.40 110.49 91.13 C 111.69 95.53 113.38 99.82 114.01 104.36 C 112.08 104.61 110.13 104.69 108.19 104.60 C 107.10 100.53 105.95 96.49 104.91 92.42 C 103.49 96.46 102.01 100.47 100.54 104.50 C 98.78 104.67 97.01 104.66 95.26 104.45 C 98.05 96.16 101.34 88.05 104.08 79.75 Z"></path> <path class="svg-sofort-line2" d="M 127.23 79.78 C 128.97 79.62 130.72 79.51 132.46 79.43 C 130.14 87.93 126.46 96.00 123.77 104.39 C 121.96 104.65 120.12 104.71 118.30 104.48 C 121.21 96.23 124.33 88.04 127.23 79.78 Z"></path> <path class="svg-sofort-line2" d="M 137.99 83.88 C 138.68 82.29 139.10 80.07 141.09 79.63 C 142.91 79.24 144.74 79.75 146.54 80.01 C 147.55 85.57 148.49 91.14 149.31 96.72 C 151.17 91.03 153.41 85.48 155.28 79.80 C 156.92 79.65 158.57 79.61 160.22 79.67 C 157.58 87.26 154.79 94.79 152.03 102.34 C 151.26 105.52 147.35 104.32 144.99 104.35 C 143.70 98.31 142.66 92.21 141.97 86.08 C 139.82 92.17 137.86 98.36 135.29 104.28 C 133.80 105.07 132.12 104.56 130.55 104.45 C 133.00 97.58 135.57 90.76 137.99 83.88 Z"></path> <path class="svg-sofort-fill" d="M 31.34 83.43 C 33.02 83.57 34.69 83.74 36.36 83.92 C 37.51 88.37 32.65 90.34 29.04 89.89 C 29.78 87.73 30.56 85.58 31.34 83.43 Z"></path> <path class="svg-sofort-fill" d="M 51.48 94.74 C 53.73 91.50 55.95 88.24 58.26 85.05 C 58.27 88.29 58.06 91.53 57.95 94.76 C 55.79 94.75 53.64 94.74 51.48 94.74 Z"></path> <path class="svg-sofort-fill" d="M 27.60 93.66 C 29.64 94.04 33.85 92.93 33.99 96.02 C 33.46 100.35 28.56 100.78 25.10 100.57 C 25.92 98.26 26.77 95.96 27.60 93.66 Z"></path> </svg> </div>
             
                  </div>
           
        </div>
    </div>
         <div class="modal-footer ">
             <button type="button" class="btn btn-success btn-lg" style="width: 100%;">
                 <span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Pay Now</button>
                                                                    </div>
        </div>
    
            
           
        </div>
    </div>
    
</div>
                                                            </div>
     <script>
    $('.pbutton').on('click', function(){
                                           
    $('.pbutton').removeClass('pactive');
    $(this).addClass('pactive');
});
    </script>
                    <div class="afix-content client-desh">
                        <div class="col-md-12 col-sm-12 col-xs-12 pull-left no-padding">
                          
                            <div class="border-box border-blue">
                                <!-- <div class="cover-upload" style="background:rgba(0, 0, 0, 0) url('http://clubgoodfood.com/freelance/user-deshboard/img/country_road_summer_drive.jpg') repeat scroll center center;"> <div class="single-image"> <div class="clear-bg-hight"> <input type="file" name="upload" class="cover-uploadimg"/> <div class="fa fa-camera"></div></div></div></div>--></div>
                            <div class="border-box border-blue custom-page-content" style="border-width:0px;min-height:90vh; background-color:#F0F0F0">
<!--
                                <section class="content-header" style="margin-top: 10px;">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <h4 style="border-right: 2px solid #ddd;"> <i class="fa fa-calendar-check-o"></i> My Coins </h4>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="row pdng10-0 searchBar">
                                            <form>
                                                <div class="col-md-2 space">
                                                    <div class="filter-cell"> <select class="form-control"> <option value="*">Category</option> <option value="fav">Favorites</option> </select> </div>
                                                </div>
                                                <div class="col-md-2 space">
                                                    <div class="filter-cell"> <select class="form-control"> <option value="*">Product Type</option> <option value="square">Square</option> <option value="circular">Circular</option> </select> </div>
                                                </div>
                                                <div class="col-md-2 space">
                                                    <div class="filter-cell"> <select class="form-control"> <option>Price</option> </select> </div>
                                                </div>
                                                <div class="col-md-2 space">
                                                    <div class="filter-cell"> <select class="form-control"> <option>Brand</option> </select> </div>
                                                </div>
                                                <div class="col-md-2 space"> <input placeholder="Search" type="search"> </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </section>
-->
                                
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Purchase">
                                        <div class="container loaded">
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
                                                                                    <th>Coins Amount</th>
                                                                                    <th>Price</th>
                                                                                    <th>paid by</th>
                                                                                    <th>Options</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>01</td>
                                                                                    <td>10.02.2017</td>
                                                                                    <td>2 Coins</td>
                                                                                    <td>$10</td>
                                                                                    <td>Buy Bids</td>
                                                                                    <td>
 
                                                                                        <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
 
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>02</td>
                                                                                    <td>10.02.2017</td>
                                                                                    <td>2 Coins</td>
                                                                                    <td>$10</td>
                                                                                    <td>Buy Bids</td>
                                                                                    <td>
 
                                                                                        <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
 
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>03</td>
                                                                                    <td>10.02.2017</td>
                                                                                    <td>2 Coins</td>
                                                                                    <td>$10</td>
                                                                                    <td>Buy Bids</td>
                                                                                    <td>
 
                                                                                        <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
 
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>04</td>
                                                                                    <td>10.02.2017</td>
                                                                                    <td>2 Coins</td>
                                                                                    <td>$10</td>
                                                                                    <td>Buy Bids</td>
                                                                                    <td>
 
                                                                                        <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
 
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>05</td>
                                                                                    <td>10.02.2017</td>
                                                                                    <td>2 Coins</td>
                                                                                    <td>$10</td>
                                                                                    <td>Buy Bids</td>
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
                                                                    <div id="ascrail2026" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2026-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2052" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2052-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                <div id="ascrail2002" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></div>
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
                                                                    <div id="ascrail2027" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2027-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2053" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2053-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                <div id="ascrail2003" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2003-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></div>
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
                                                                    <div id="ascrail2028" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2028-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2055" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2055-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                <div id="ascrail2004" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2004-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                   <div role="tabpanel" class="tab-pane" id="Used">
                                        <div class="container loaded">
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
                                                                                    <th>Purchase</th>
                                                                                    <th>Coins</th>
                                                                                    <th>Options</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>01</td>
                                                                                    <td>10.02.2017</td>
                                                                                    <td>Buy Bids</td>
                                                                                    <td>2 Coins</td>
                                                                                    <td>
 
                                                                                        <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
 
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>02</td>
                                                                                    <td>10.02.2017</td>
                                                                                    <td>Buy Bids</td>
                                                                                    <td>2 Coins</td>
                                                                                    <td>
 
                                                                                        <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
 
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>03</td>
                                                                                    <td>10.02.2017</td>
                                                                                    <td>Buy Bids</td>
                                                                                    <td>2 Coins</td>
                                                                                    <td>
 
                                                                                        <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
 
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>04</td>
                                                                                    <td>10.02.2017</td>
                                                                                    <td>Buy Bids</td>
                                                                                    <td>2 Coins</td>
                                                                                    <td>
 
                                                                                        <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#viewPurchase" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 8px;"><i class="fa fa-eye" aria-hidden="true"></i></button></p>
 
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>05</td>
                                                                                    <td>10.02.2017</td>
                                                                                    <td>Buy Bids</td>
                                                                                    <td>2 Coins</td>
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
                                                                    <div id="ascrail2026" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2026-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2052" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2052-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                <div id="ascrail2002" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               </div></div></div></div>
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
                                                                    <div id="ascrail2027" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2027-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2053" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2053-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                <div id="ascrail2003" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2003-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></div>
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
                                                                    <div id="ascrail2028" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2028-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2055" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
                                                                        <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                    <div id="ascrail2055-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;">
                                                                        <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>
                                                                    </div>
                                                                <div id="ascrail2004" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2004-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></div>
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

            </script>}}</body>

</html>
