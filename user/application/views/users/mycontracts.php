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

<div class="rightSection">
  <!-- Header -->

  <div class="col-md-12 col-sm-12 col-xs-12 pull-left no-padding hederLogoSec">
    <div class="header-bottom-user">
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">

            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
              <div class="nav" id="nav">
                <a href="index.html#" id="toggle">
                  <i class="fa fa-bars">
                  </i>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /Header -->
  <!-- Center -->
  <div role="tabpanel" class="tab-pane " id="MyContractsArea">
    <div class="border-box">
      <div class=" custom-page-content">
      </div>
      <!-- my contracts table -->
      <div class="main-content">
        <div class="tab-section">
          <div class="row" style="background: #f3f3f3; margin-top: -9px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
              <div class=" bhoechie-tab">
                <div class="bhoechie-tab-content">
                  <div>

                    <nav class="navbar navbar-default new-opp-top-nav nc-menu">
                      <div class="container top-menu-container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
                          <ul class="nav navbar-nav">
                            <li class="active" role="presentation">
                                <a href="index.html#MyContractsAreaCurrentContracts" MyContractsAreaCurrentContracts-controls="MyPostsAreaInCheck" role="tab" data-toggle="tab">
                                 <i class="fa fa-bullhorn"></i> Sending Offer 
                                </a>
                            </li>
                            <li role="presentation">
                              <a href="index.html#MyContractsAreaContractsStart" MyContractsAreaCurrentContracts-controls="MyContractsAreaContractsdisputes" role="tab" data-toggle="tab">
                                <i class="fa fa-play" aria-hidden="true"></i> Started 
                              </a>
                            </li>
                            <li role="presentation">
                              <a href="index.html#MyContractsAreaContractsDone" MyContractsAreaCurrentContracts-controls="MyContractsAreaCancelledContracts" role="tab" data-toggle="tab">
                                 <i class="fa fa-check-square-o" aria-hidden="true"></i> Done
                              </a>
                            </li>
                            <li role="presentation">
                              <a href="index.html#MyContractsAreaWorkRecieved" MyContractsAreaCurrentContracts-controls="MyContractsAreaContractsDone" role="tab" data-toggle="tab">
                                  <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Work Recieved
                              </a>
                            </li>
                            <li role="presentation">
                              <a href="index.html#MyContractsAreaContractsdisputes" MyContractsAreaCurrentContracts-controls="MyContractsAreaContractsDone" role="tab" data-toggle="tab">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Disputs
                              </a>
                            </li>
                            <li role="presentation">
                              <a href="index.html#MyContractsAreaCancelledContracts" MyContractsAreaCurrentContracts-controls="MyContractsAreaContractsDone" role="tab" data-toggle="tab">
                                <i class="fa fa-ban" aria-hidden="true"></i> Canceled
                              </a>
                            </li>
                          </ul>
                        </div><!-- /.navbar-collapse -->

                      </div><!-- /.container-fluid -->
                    </nav>

                    <ul class="nav nav-tabs" role="tablist">

                    </ul>
                    <div class="tab-content no-t-m">

                      <div role="tabpanel" class="tab-pane active m-t-35" id="MyContractsAreaCurrentContracts" style="margin-bottom: -100px;">

                        <!--second section-->
                        <div class="vd_content-section clearfix p-t-0" style=" background: #f3f3f3;">
                          <div class="row">
                            <div style="margin-top: 24px;margin-bottom: 20px;" class="col-md-12">
                              <div class="tab-content no-bd mrgn0 pdng0">
                                <div class="tab-pane active fade in" id="category1">
                                  <div class="panel widget container-fluid">
                                    <div class="row mrgn30-0 projectRow">


                                      <div class="col-sm-4 brdRight" data-toggle="modal" data-target="#viewContractOfferModal" >
                                        <img src="img/mini.png" alt="" style="float: left;">
                                        <div class="text-con">
                                          <h4>Company Name</h4>
                                          <p style="color: black;">Company ID</p>
                                        </div>

                                      </div>
                                      <div class="col-sm-2 brdRight text-align" data-toggle="modal" data-target="#viewContractOfferModal" >
                                        <h4>Project Title</h4>
                                        <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                      </div>
                                      <div class="col-sm-3 brdRight text-align" data-toggle="modal" data-target="#viewContractOfferModal" >
                                        <h4>Budget
                                        </h4>
                                        <h4 class="text-height">2500,-€ Fix
                                        </h4>
                                      </div>

                                      <!-- </a> -->

                                      <div class="col-sm-3 text-align">
                                        <h4>Options
                                        </h4>
                                        <h4 class="text-height">
                                          <button type="button" class="btn btn-primary btn-sm" style="width: 39%" data-toggle="modal" data-target="#viewSendingOfferModal"><i class="fa fa-eye" aria-hidden="true"></i>View</button></h4>
                                        </div>


                                      </div>

                                    </div>
                                  </div>
                                  <!--tab-pane end -->
                                </div>
                                <!-- tab-content end -->
                              </div>
                              <!-- Projects List col-md-10 end -->
                            </div>
                            <!-- row end -->
                          </div>
                          <div class="clearfix">
                          </div>
                          <br>
                        </div>

                        <div role="tabpanel" class="tab-pane m-t-35" id="MyContractsAreaWorkRecieved" style="margin-bottom: -100px;">

                          <!--second section-->
                          <div class="vd_content-section clearfix p-t-0">
                            <div class="row">
                              <div style="margin-top: 24px;margin-bottom: 20px;" class="col-md-12">
                                <div class="tab-content no-bd mrgn0 pdng0">
                                  <div class="tab-pane active fade in" id="category1">
                                    <div class="panel widget container-fluid">
                                      <div class="row mrgn30-0 projectRow">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                        class="notice notice-success" style="color: black;">

                                        <div class="col-sm-4 brdRight">
                                          <img src="img/mini.png" alt="" style="float: left;">
                                          <div class="text-con">
                                            <h4>Company Name</h4>
                                            <p style="color: black;">Company ID</p>
                                          </div>

                                        </div>
                                        <div class="col-sm-2 brdRight text-align">
                                          <h4>Project Title</h4>
                                          <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                        </div>
                                        <div class="col-sm-3  brdRight text-align">
                                          <h4>Waranty</h4>
                                          <p style="color: black;">12.12.2018</p>
                                        </div>


                                        <div class="col-sm-3 text-align">
                                          <h4 style="margin:0;">Options
                                          </h4>
                                          <h4 class="text-height" margin-top: 5px; margin-bottom: 5px;>

                                            <button type="button" class="btn btn-primary btn-sm" style="width:45%" data-toggle="modal" data-target="#viewWorkReceivedModal"><i class="fa fa-eye" aria-hidden="true"></i>View</button></h4>

                                          </div>

                                        </a>
                                      </div>

                                    </div>
                                  </div>
                                  <!--tab-pane end -->
                                </div>
                                <!-- tab-content end -->
                              </div>
                              <!-- Projects List col-md-10 end -->
                            </div>
                            <!-- row end -->
                          </div>
                          <div class="clearfix">
                          </div>
                          <br>
                        </div>
                        <div role="tabpanel" class="tab-pane m-t-35" id="MyContractsAreaContractsdisputes" style="margin-bottom: -100px;">

                          <!--second section-->
                          <div class="vd_content-section clearfix p-t-0">
                            <div class="row">
                              <div style="margin-top: 24px;margin-bottom: 7px;" class="col-md-12">
                                <div class="tab-content no-bd mrgn0 pdng0">
                                  <div class="tab-pane active fade in" id="category1">
                                    <div class="panel widget container-fluid">
                                      <div class="row mrgn30-0 projectRow">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                        class="notice notice-success" style="color: black;">

                                        <div class="col-sm-4 brdRight">
                                          <img src="img/mini.png" alt="" style="float: left;">
                                          <div class="text-con">
                                            <h4>ompany Name</h4>
                                            <p style="color: black;">Company ID</p>
                                          </div>

                                        </div>
                                        <div class="col-sm-2 brdRight text-align">
                                          <h4>Project Title</h4>
                                          <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                        </div>
                                        <div class="col-sm-3  brdRight">
                                          <div class="circleBar" data-percent="65">
                                            <div style="float: left;margin-left: 87px;">
                                              <div class="ab" style=" width:80px; height:80px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 76px; height: 76px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                  <span class="perc" style="display: block; line-height:79px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
                                                  </span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>


                                        <div class="col-sm-3 text-align">
                                          <h4 style="margin:0;">Ticket
                                          </h4>
                                          <h4 class="text-height" margin-top: 5px; margin-bottom: 5px;>

                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewDisputesModal"><i class="fa fa-eye" aria-hidden="true"></i>Open Ticek</button></h4>


                                          </div>

                                        </a>
                                      </div>

                                    </div>
                                  </div>
                                  <!--tab-pane end -->
                                </div>
                                <!-- tab-content end -->
                              </div>
                              <!-- Projects List col-md-10 end -->
                            </div>
                            <!-- row end -->
                          </div>
                          <div class="vd_content-section clearfix p-t-0">
                            <div class="row">
                              <div style="margin-top: 24px;margin-bottom: 7px;" class="col-md-12">
                                <div class="tab-content no-bd mrgn0 pdng0">
                                  <div class="tab-pane active fade in" id="category1">
                                    <div class="panel widget container-fluid">
                                      <div class="row mrgn30-0 projectRow">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                        class="notice notice-success" style="color: black;">

                                        <div class="col-sm-4 brdRight">
                                          <img src="img/mini.png" alt="" style="float: left;">
                                          <div class="text-con">
                                            <h4>Company Name</h4>
                                            <p style="color: black;">Company ID</p>
                                          </div>

                                        </div>
                                        <div class="col-sm-2 brdRight text-align">
                                          <h4>Project Title</h4>
                                          <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                        </div>
                                        <div class="col-sm-3  brdRight">
                                          <div class="circleBar" data-percent="65">
                                            <div style="float: left;margin-left: 87px;">
                                              <div class="ab" style=" width:80px; height:80px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 76px; height: 76px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                  <span class="perc" style="display: block; line-height:79px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
                                                  </span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>


                                        <div class="col-sm-3 text-align">
                                          <h4 style="margin:0;">Ticket
                                          </h4>
                                          <h4 class="text-height" margin-top: 5px; margin-bottom: 5px;>

                                            <button type="button" class="btn btn-primary btn-sm" style="width: 45%"><i class="fa fa-eye" aria-hidden="true"></i>Ticket ID</button></h4>
                                            <button type="button" class="btn btn-primary btn-sm" style="width: 120px;background: #ed7d31;border-color:#ed7d31;">New Answer 2</button>

                                          </div>

                                        </a>
                                      </div>

                                    </div>
                                  </div>
                                  <!--tab-pane end -->
                                </div>
                                <!-- tab-content end -->
                              </div>
                              <!-- Projects List col-md-10 end -->
                            </div>
                            <!-- row end -->
                          </div>
                          <div class="clearfix">
                          </div>
                          <br>
                        </div>

                        <div role="tabpanel" class="tab-pane m-t-35" id="MyContractsAreaCancelledContracts" style="margin-bottom: -100px;">

                          <!--second section-->
                          <div class="vd_content-section clearfix p-t-0">
                            <div class="row">
                              <div style="margin-top: 24px;margin-bottom: 24px;"

                              class="col-md-12">
                              <div class="tab-content no-bd mrgn0 pdng0">
                                <div class="tab-pane active fade in" id="category1">
                                  <div class="panel widget container-fluid">
                                    <div class="row mrgn30-0 projectRow">
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                      class="notice notice-success" style="color: black;">

                                      <div class="col-sm-4 brdRight">
                                        <img src="img/mini.png" alt="" style="float: left;">
                                        <div class="text-con">
                                          <h4>Company Name</h4>
                                          <p style="color: black;">Company ID</p>
                                        </div>

                                      </div>
                                      <div class="col-sm-2 brdRight text-align">
                                        <h4>Project Title</h4>
                                        <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                      </div>
                                      <div class="col-sm-3  brdRight">
                                        <div class="circleBar" data-percent="65">
                                          <div style="float: left;margin-left: 87px;">
                                            <div class="ab" style=" width:80px; height:80px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                              <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 76px; height: 76px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                <span class="perc" style="display: block; line-height:79px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>


                                      <div class="col-sm-3 text-align">
                                        <h4>Status
                                        </h4>
                                        <h4 style="margin:0; color: red;" data-toggle="modal" data-target="#contractCancelledModal">Canceled
                                        </h4>
                                      </div>

                                    </a>
                                  </div>

                                </div>
                              </div>
                              <!--tab-pane end -->
                            </div>
                            <!-- tab-content end -->
                          </div>
                          <!-- Projects List col-md-10 end -->
                        </div>
                        <!-- row end -->
                      </div>
                      <div class="clearfix">
                      </div>
                      <br>
                    </div>
                    <div role="tabpanel" class="tab-pane m-t-35" id="MyContractsAreaContractsStart" style="margin-bottom: -100px;">

                      <!--second section-->
                      <div class="vd_content-section clearfix p-t-0">
                        <div class="row">
                          <div style="margin-top: 24px;margin-bottom: 20px;" class="col-md-12">
                            <div class="tab-content no-bd mrgn0 pdng0">
                              <div class="tab-pane active fade in" id="category1">
                                <div class="panel widget container-fluid">
                                  <div class="row mrgn30-0 projectRow">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                    class="notice notice-success" style="color: black;">

                                    <div class="col-sm-4 brdRight">
                                      <img src="img/mini.png" alt="" style="float: left;">
                                      <div class="text-con">
                                        <h4>Company Name</h4>
                                        <p style="color: black;">Company ID</p>
                                      </div>

                                    </div>
                                    <div class="col-sm-2 brdRight text-align">
                                      <h4>Project Title</h4>
                                      <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                    </div>
                                    <div class="col-sm-3  brdRight">
                                      <div class="circleBar" data-percent="65">
                                        <div style="float: left;margin-left: 87px;">
                                          <div class="ab" style=" width:80px; height:80px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                            <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 76px; height: 76px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                              <span class="perc" style="display: block; line-height:79px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
                                              </span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>


                                    <div class="col-sm-3 text-align">
                                      <h4 style="margin:0;">Options
                                      </h4>
                                      <h4 class="text-height">
                                        <button type="button" class="btn btn-primary btn-sm" style="width: 45%" data-toggle="modal" data-target="#viewStartedContractModel"><i class="fa fa-eye" aria-hidden="true"></i>View</button>
                                      </h4>
                                      <button type="button" class="btn btn-primary btn-sm" style="width: 120px;background: #ed7d31;border-color:#ed7d31;">Release/Refund</button>


                                    </div>

                                  </a>
                                </div>
                              </div>
                            </div>
                            <!--tab-pane end -->
                          </div>
                          <!-- tab-content end -->
                        </div>
                        <!-- Projects List col-md-10 end -->
                      </div>
                      <!-- row end -->
                    </div>
                    <div class="clearfix">
                    </div>
                    <br>
                  </div>
                  <div role="tabpanel" class="tab-pane m-t-35" id="MyContractsAreaContractsDone" style="margin-bottom: -100px;">

                    <!--second section-->
                    <div class="vd_content-section clearfix">
                      <div class="row">
                        <div style="margin-top: 7px;margin-bottom: 20px;" class="col-md-12">
                          <div class="tab-content no-bd mrgn0 pdng0">
                            <div class="tab-pane active fade in" id="category1">
                              <div class="panel widget container-fluid">
                                <div class="row mrgn30-0 projectRow">
                                  <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                  class="notice notice-success" style="color: black;">

                                  <div class="col-sm-4 brdRight">
                                    <img src="img/mini.png" alt="" style="float: left;">
                                    <div class="text-con">
                                      <h4>Company Name</h4>
                                      <p style="color: black;">Company ID</p>
                                    </div>

                                  </div>
                                  <div class="col-sm-2 brdRight text-align">
                                    <h4>Project Title</h4>
                                    <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                  </div>
                                  <div class="col-sm-3  brdRight">
                                    <div class="circleBar" data-percent="65">
                                      <div style="float: left;margin-left: 87px;">
                                        <div class="ab" style=" width:80px; height:80px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                          <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 76px; height: 76px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                            <span class="perc" style="display: block; line-height:79px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-sm-3 text-align">
                                    <h4 style="margin:0;">Options
                                    </h4>
                                    <h4 class="text-height">
                                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#closeTheJobContractModal"><i class="fa fa-eye" aria-hidden="true"></i>Close The Job</button>
                                    </h4>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewDoneContractModal"><i class="fa fa-eye" aria-hidden="true"></i>View Contract</button>


                                  </div>

                                </a>
                              </div>
                            </div>
                          </div>
                          <!--tab-pane end -->
                        </div>
                        <!-- tab-content end -->
                      </div>
                      <!-- Projects List col-md-10 end -->
                    </div>
                    <!-- row end -->
                  </div>
                  <div class="clearfix">
                  </div>
                  <br>
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
<div class="clearfix">
</div>
<br />
</div>
<!-- /Center -->

