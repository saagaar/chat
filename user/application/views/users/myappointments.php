<div class="rightSection">
  <div class="col-md-12 col-sm-12 col-xs-12 pull-left no-padding hederLogoSec">
    <div class="header-bottom-user">
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12"> </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
              <div class="nav" id="nav">
                <a href="index.html#" id="toggle"> <i class="fa fa-bars"> </i> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div role="tabpanel" class="tab-pane " id="MyAppointmentsArea" style="background-color: #f3f3f3">
    <div class="border-box" style="margin-top: 2px;">
      <div class=" custom-page-content"> </div>
      <div class="main-content">
        <div class="tab-section">
          <div class="row" style="background: #eee;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container" style="margin-top: 0px;">
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
                            <li class="active" role="presentation" onclick="appointments('Waiting')">
                                <a href="index.html#MyAppointmentsAreaSettings" MyContractsAreaCurrentContracts-controls="MyAppointmentsAreaSettings" role="tab" data-toggle="tab"> <i class="fa fa-calendar-plus-o" aria-hidden="true"> </i> Proposed </a>
                            </li>
                            <li role="presentation" onclick="appointments('Accepted')">
                                <a href="index.html#MyAppointmentsAreaOurFollower" MyContractsAreaCurrentContracts-controls="MyAppointmentsAreaOurFollower" role="tab" data-toggle="tab"> <i class="fa fa-calendar-check-o" aria-hidden="true"> </i> Accepted </a>
                            </li>
                            <li role="presentation" onclick="appointments('canceld')">
                                <a href="index.html#MyAppointmentsAreaAboutUs" MyContractsAreaCurrentContracts-controls="MyAppointmentsAreaAboutUs" role="tab" data-toggle="tab"> <i class="fa fa-calendar-times-o" aria-hidden="true"> </i> Canceld </a>
                            </li>
                            <li role="presentation" onclick="appointments('interviews')">
                                <a href="index.html#MyAppointmentsAreaOurTeam" MyContractsAreaCurrentContracts-controls="MyAppointmentsAreaOurTeam" role="tab" data-toggle="tab"> <i class="fa fa-coffee" aria-hidden="true"> </i> Interviews </a>
                            </li>
                          </ul>
                        </div><!-- /.navbar-collapse -->

                      </div><!-- /.container-fluid -->
                    </nav>

                    <div class="container" id="appointmentsInterviewsShow">
                      <div class="row">
                        <div class="col-md-12" >
                          <div class="table-responsive" style="background: #f3f3f3;">
                            <table id="mytable" class="table table-bordred table-striped">
                              <thead>
                                <th>No </th>
                                <th>Title </th>
                                <th>Work Type </th>
                                <th>Work Time </th>
                                <th>Work Start </th>
                                <th>Start Date </th>
                                <th>End Date </th>
                                <th>Option </th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>This is work title </td>
                                  <td>Fix</td>
                                  <td>20.03.2017 -13:00 Uhr</td>
                                  <td> </td>
                                  <td>20.03.2017 </td>
                                  <td>23.03.2017 </td>
                                  <td>
                                           <!--  <p data-toggle="modal" data-target="#InterviewsShowEdit" style="float:left;margin-right: 8px;">
                                                <button class="btn btn-primary btn-xs" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button>
                                              </p> -->
                                              <p data-placement="top" data-toggle="tooltip" title="" data-original-title="View" style="float:left;margin-right: 8px;">
                                                <button class="btn btn-primary btn-xs" data-title="View" data-toggle="modal" data-target="#view5" style=" padding-left: 0;background-color: #23709e;border: none;padding-bottom: 2px;"><span class="fa fa-eye" aria-hidden="true"></span></button>
                                              </p>
                                              <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left">
                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#removeInterviewModal" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button>
                                              </p>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>This is work title </td>
                                            <td>Fix</td>
                                            <td>20.03.2017 -13:00 Uhr</td>
                                            <td> </td>
                                            <td>20.03.2017 </td>
                                            <td>23.03.2017 </td>
                                            <td>
                                            <!-- <p data-toggle="modal" data-target="#InterviewsShowEdit" style="float:left;margin-right: 8px;">
                                                <button class="btn btn-primary btn-xs" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button>
                                              </p> -->
                                              <p data-placement="top" data-toggle="tooltip" title="" data-original-title="View" style="float:left;margin-right: 8px;">
                                                <button class="btn btn-primary btn-xs" data-title="View" data-toggle="modal" data-target="#view5" style=" padding-left: 0;background-color: #23709e;border: none;padding-bottom: 2px;"><span class="fa fa-eye" aria-hidden="true"></span></button>
                                              </p>
                                              <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left">
                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#removeInterviewModal" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button>
                                              </p>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>This is work title </td>
                                            <td>Fix</td>
                                            <td>20.03.2017 -13:00 Uhr</td>
                                            <td> </td>
                                            <td>20.03.2017 </td>
                                            <td>23.03.2017 </td>
                                            <td>
                                           <!--  <p data-toggle="modal" data-target="#InterviewsShowEdit" style="float:left;margin-right: 8px;">
                                                <button class="btn btn-primary btn-xs" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button>
                                              </p> -->
                                              <p data-placement="top" data-toggle="tooltip" title="" data-original-title="View" style="float:left;margin-right: 8px;">
                                                <button class="btn btn-primary btn-xs" data-title="View" data-toggle="modal" data-target="#view5" style=" padding-left: 0;background-color: #23709e;border: none;padding-bottom: 2px;"><span class="fa fa-eye" aria-hidden="true"></span></button>
                                              </p>
                                              <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left">
                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#removeInterviewModal" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button>
                                              </p>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <div class="clearfix"> </div>
                                      <ul class="pagination pull-right">
                                        <li class="disabled">
                                          <a href="#"> <span class="glyphicon glyphicon-chevron-left"> </span> </a>
                                        </li>
                                        <li class="active"> <a href="#">1 </a> </li>
                                        <li> <a href="#">2 </a> </li>
                                        <li> <a href="#">3 </a> </li>
                                        <li> <a href="#">4 </a> </li>
                                        <li> <a href="#">5 </a> </li>
                                        <li>
                                          <a href="#"> <span class="glyphicon glyphicon-chevron-right"> </span> </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-content m-t-35" id="appointmentsInterviews" style="display:block;">
                                <div role="tabpanel" class="tab-pane active" id="MyContractsAreaCurrentContracts" style="background: #eee; margin-bottom: -82px;">
                                  <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="tab-content no-bd mrgn0 pdng0">
                                          <div class="tab-pane active fade in" id="category1">
                                            <div class="panel widget container-fluid">
                                              <div class="row mrgn30-0 projectRow">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                  <div class="col-sm-4 brdRight"> <img src="img/mini.png" alt="" style="float: left;">
                                                    <div class="text-con">
                                                      <h4>Company Name</h4>
                                                      <p style="color: black;">Company ID</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-2 brdRight text-align">
                                                    <h4>Title</h4>
                                                    <p style="color: black;">16.3.2017-12:45</p>
                                                  </div>
                                                  <div class="col-sm-2 brdRight text-align">
                                                    <h4>Appointment Date</h4>
                                                    <p style="color: black;">20.03.2017 -13:00 Uhr</p>
                                                  </div>
                                                  <div class="col-sm-2 text-align brdRight">
                                                    <h4>Status </h4>
                                                    <h4 style="color: red;" id="appointmentsStatus">Waiting</h4> </div>
                                                    <div class="col-sm-2 text-align">
                                                      <h4 style="margin:0;">Options </h4>
                                                      <h4 class="text-height"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#proposedModal"><i class="fa fa-eye" aria-hidden="true"></i>View</button> </h4>
                                                      <h4 class="text-height" id="appointmentsCanceledReason"> <button type="button" class="btn btn-primary "><i class="fa fa-eye" aria-hidden="true"></i>Canceled Reason</button> </h4> </div>
                                                    </a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="clearfix"> </div>
                                      <br>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="MyContractsAreaContractsdisputes">
                                      <div class="row pdng10-0 searchBar">
                                        <form>
                                          <div class="col-md-2 col-md-offset-2">
                                            <div> <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"> </span>
                                              <input class="ui-autocomplete-input" type="text" placeholder="Contract ID" id="project-autocomplete" autocomplete="off"> </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div> <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"> </span>
                                                <input class="ui-autocomplete-input" type="text" placeholder="User Name" id="company-autocomplete" autocomplete="off"> </div>
                                              </div>
                                              <div class="col-md-2">
                                                <div>
                                                  <select>
                                                    <option value="" disabled="" selected="">Status </option>
                                                    <option value="1">On Hold </option>
                                                    <option value="2">Denied </option>
                                                    <option value="3">Blocked </option>
                                                    <option value="4">Removed </option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-md-2">
                                                <button type="button" class="btn vd_btn vd_bg-blue" data-toggle="modal" data-target="" style="max-height:32px;color: white;"> <span class="append-icon"> <i class="fa fa-search fa-fw"> </i> </span>Search Projects </button>
                                              </div>
                                            </form>
                                          </div>
                                          <div class="vd_content-section clearfix">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="tab-content no-bd mrgn0 pdng0">
                                                  <div class="tab-pane active fade in" id="category1">
                                                    <div class="panel widget container-fluid">
                                                      <div class="row mrgn30-0 projectRow">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                          <div class="col-sm-2 brdRight"> <img src="img/briant2.png" alt="" class="projectImg"> </div>
                                                          <div class="col-sm-4 brdRight">
                                                            <h4>Design Concept </h4>
                                                            <p class="mrgn5">Work Start: 05-07-2017 12:05:00 </p>
                                                            <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">In Progress </span> </p>
                                                          </div>
                                                          <div class="col-sm-2 brdRight">
                                                            <div class="circleBar" data-percent="65">
                                                              <div style="width: 100px; height: 100px;">
                                                                <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                  <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);"> <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65% </span> </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-sm-2 brdRight">
                                                            <h4>All Tasks </h4>
                                                            <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">0 </span> Pending </p>
                                                            <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">1 </span> Behind </p>
                                                          </div>
                                                          <div class="col-sm-2 contractLogo"> <img src="img/mini.png" alt=""> </div>
                                                        </a>
                                                      </div>
                                                      <div class="row mrgn30-0 projectRow">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                          <div class="col-sm-2 brdRight"> <img src="img/briant2.png" alt="" class="projectImg"> </div>
                                                          <div class="col-sm-4 brdRight">
                                                            <h4>Design Concept </h4>
                                                            <p class="mrgn5">Work Start: 05-07-2017 12:05:00 </p>
                                                            <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">In Progress </span> </p>
                                                          </div>
                                                          <div class="col-sm-2 brdRight">
                                                            <div class="circleBar" data-percent="65">
                                                              <div style="width: 100px; height: 100px;">
                                                                <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                  <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);"> <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65% </span> </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-sm-2 brdRight">
                                                            <h4>All Tasks </h4>
                                                            <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">0 </span> Pending </p>
                                                            <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">1 </span> Behind </p>
                                                          </div>
                                                          <div class="col-sm-2 contractLogo"> <img src="img/mini.png" alt=""> </div>
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="clearfix"> </div>
                                          <br>
                                        </div>
                                        <div role="tabpanel" class="tab-pane " id="MyContractsAreaCancelledContracts">
                                          <div class="row pdng10-0 searchBar">
                                            <form>
                                              <div class="col-md-2 col-md-offset-2">
                                                <div> <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"> </span>
                                                  <input class="ui-autocomplete-input" type="text" placeholder="Contract ID" id="project-autocomplete" autocomplete="off"> </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div> <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"> </span>
                                                    <input class="ui-autocomplete-input" type="text" placeholder="User Name" id="company-autocomplete" autocomplete="off"> </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div>
                                                      <select>
                                                        <option value="" disabled="" selected="">Status </option>
                                                        <option value="1">On Hold </option>
                                                        <option value="2">Denied </option>
                                                        <option value="3">Blocked </option>
                                                        <option value="4">Removed </option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <button type="button" class="btn vd_btn vd_bg-blue" data-toggle="modal" data-target="" style="max-height:32px;color: white;"> <span class="append-icon"> <i class="fa fa-search fa-fw"> </i> </span>Search Projects </button>
                                                  </div>
                                                </form>
                                              </div>
                                              <div class="vd_content-section clearfix">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                      <div class="tab-pane active fade in" id="category1">
                                                        <div class="panel widget container-fluid">
                                                          <div class="row mrgn30-0 projectRow">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                              <div class="col-sm-2 brdRight"> <img src="img/briant3.png" alt="" class="projectImg"> </div>
                                                              <div class="col-sm-4 brdRight">
                                                                <h4>Design Concept </h4>
                                                                <p class="mrgn5">Work Start: 05-07-2017 12:05:00 </p>
                                                                <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">In Progress </span> </p>
                                                              </div>
                                                              <div class="col-sm-2 brdRight">
                                                                <div class="circleBar" data-percent="65">
                                                                  <div style="width: 100px; height: 100px;">
                                                                    <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                      <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);"> <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65% </span> </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-sm-2 brdRight">
                                                                <h4>All Tasks </h4>
                                                                <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">0 </span> Pending </p>
                                                                <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">1 </span> Behind </p>
                                                              </div>
                                                              <div class="col-sm-2 contractLogo"> <img src="img/mini.png" alt=""> </div>
                                                            </a>
                                                          </div>
                                                          <div class="row mrgn30-0 projectRow">
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                              <div class="col-sm-2 brdRight"> <img src="img/briant3.png" alt="" class="projectImg"> </div>
                                                              <div class="col-sm-4 brdRight">
                                                                <h4>Design Concept </h4>
                                                                <p class="mrgn5">Work Start: 05-07-2017 12:05:00 </p>
                                                                <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">In Progress </span> </p>
                                                              </div>
                                                              <div class="col-sm-2 brdRight">
                                                                <div class="circleBar" data-percent="65">
                                                                  <div style="width: 100px; height: 100px;">
                                                                    <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                      <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);"> <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65% </span> </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-sm-2 brdRight">
                                                                <h4>All Tasks </h4>
                                                                <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">0 </span> Pending </p>
                                                                <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">1 </span> Behind </p>
                                                              </div>
                                                              <div class="col-sm-2 contractLogo"> <img src="img/mini.png" alt=""> </div>
                                                            </a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="clearfix"> </div>
                                              <br>
                                            </div>
                                            <div role="tabpanel" class="tab-pane " id="MyContractsAreaContractsDone">
                                              <div class="row pdng10-0 searchBar">
                                                <form>
                                                  <div class="col-md-2 col-md-offset-2">
                                                    <div> <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"> </span>
                                                      <input class="ui-autocomplete-input" type="text" placeholder="Contract ID" id="project-autocomplete" autocomplete="off"> </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                      <div> <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"> </span>
                                                        <input class="ui-autocomplete-input" type="text" placeholder="User Name" id="company-autocomplete" autocomplete="off"> </div>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <div>
                                                          <select>
                                                            <option value="" disabled="" selected="">Status </option>
                                                            <option value="1">On Hold </option>
                                                            <option value="2">Denied </option>
                                                            <option value="3">Blocked </option>
                                                            <option value="4">Removed </option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <button type="button" class="btn vd_btn vd_bg-blue" data-toggle="modal" data-target="" style="max-height:32px;color: white;"> <span class="append-icon"> <i class="fa fa-search fa-fw"> </i> </span>Search Projects </button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                  <div class="vd_content-section clearfix">
                                                    <div class="row">
                                                      <div class="col-md-12">
                                                        <div class="tab-content no-bd mrgn0 pdng0">
                                                          <div class="tab-pane active fade in" id="category1">
                                                            <div class="panel widget container-fluid">
                                                              <div class="row mrgn30-0 projectRow">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                                  <div class="col-sm-2 brdRight"> <img src="img/briant.png" alt="" class="projectImg"> </div>
                                                                  <div class="col-sm-4 brdRight">
                                                                    <h4>Design Concept </h4>
                                                                    <p class="mrgn5">Work Start: 05-07-2017 12:05:00 </p>
                                                                    <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">In Progress </span> </p>
                                                                  </div>
                                                                  <div class="col-sm-2 brdRight">
                                                                    <div class="circleBar" data-percent="65">
                                                                      <div style="width: 100px; height: 100px;">
                                                                        <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                          <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);"> <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65% </span> </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-sm-2 brdRight">
                                                                    <h4>All Tasks </h4>
                                                                    <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">0 </span> Pending </p>
                                                                    <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">1 </span> Behind </p>
                                                                  </div>
                                                                  <div class="col-sm-2 contractLogo"> <img src="img/mini.png" alt=""> </div>
                                                                </a>
                                                              </div>
                                                              <div class="row mrgn30-0 projectRow">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                                  <div class="col-sm-2 brdRight"> <img src="img/briant.png" alt="" class="projectImg"> </div>
                                                                  <div class="col-sm-4 brdRight">
                                                                    <h4>Design Concept </h4>
                                                                    <p class="mrgn5">Work Start: 05-07-2017 12:05:00 </p>
                                                                    <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">In Progress </span> </p>
                                                                  </div>
                                                                  <div class="col-sm-2 brdRight">
                                                                    <div class="circleBar" data-percent="65">
                                                                      <div style="width: 100px; height: 100px;">
                                                                        <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                          <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);"> <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65% </span> </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-sm-2 brdRight">
                                                                    <h4>All Tasks </h4>
                                                                    <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">0 </span> Pending </p>
                                                                    <p class="mrgn5"> <span class="label label-default vd_bg-blue vd_white">1 </span> Behind </p>
                                                                  </div>
                                                                  <div class="col-sm-2 contractLogo"> <img src="img/mini.png" alt=""> </div>
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="clearfix"> </div>
                                                  <br>
                                                </div>
                                              </div>

                                              <div class="tab-content m-t-35" id="approvedAppointmentsInterviews">
                                                <div role="tabpanel" class="tab-pane active" id="MyContractsAreaCurrentContracts" style="background: #eee;">
                                                  <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                                                    <div class="row">
                                                      <div class="col-md-12">
                                                        <div class="tab-content no-bd mrgn0 pdng0">
                                                          <div class="tab-pane active fade in" id="category1">
                                                            <div class="panel widget container-fluid">
                                                              <div class="row mrgn30-0 projectRow">
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                  <div class="col-sm-4 brdRight"> <img src="img/mini.png" alt="" style="float: left;">
                                                                    <div class="text-con">
                                                                      <h4>Company Name</h4>
                                                                      <p style="color: black;">Company ID</p>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-sm-2 brdRight text-align">
                                                                    <h4>Title</h4>
                                                                    <p style="color: black;">16.3.2017-12:45</p>
                                                                  </div>
                                                                  <div class="col-sm-2 brdRight text-align">
                                                                    <h4>Appointment Date</h4>
                                                                    <p style="color: black;">20.03.2017 -13:00 Uhr</p>
                                                                  </div>
                                                                  <div class="col-sm-2 text-align brdRight">
                                                                    <h4>Status </h4>
                                                                    <h4 style="color: red;" id="appointmentsStatus">Accepted</h4> </div>
                                                                    <div class="col-sm-2 text-align">
                                                                      <h4 style="margin:0;">Options </h4>
                                                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#approveAppointmentModal"><i class="fa fa-eye" aria-hidden="true"></i>View</button> 
                                                                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancelledAppointmentReasonModal"><i class="fa fa-eye" aria-hidden="true"></i>Canceled Reason</button> -->
                                                                    </div>
                                                                  </a>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                    <br>
                                                  </div>

                                                </div>

                                                <div class="tab-content no-t-m" id="cancelledAppointmentsInterviews">
                                                  <div role="tabpanel" class="tab-pane active m-t-35" id="MyContractsAreaCurrentContracts" style="background: #eee; margin-bottom: -82px;">
                                                    <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="tab-content no-bd mrgn0 pdng0">
                                                            <div class="tab-pane active fade in" id="category1">
                                                              <div class="panel widget container-fluid">
                                                                <div class="row mrgn30-0 projectRow">
                                                                  <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                    <div class="col-sm-4 brdRight"> <img src="img/mini.png" alt="" style="float: left;">
                                                                      <div class="text-con">
                                                                        <h4>Company Name</h4>
                                                                        <p style="color: black;">Company ID</p>
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight text-align">
                                                                      <h4>Title</h4>
                                                                      <p style="color: black;">16.3.2017-12:45</p>
                                                                    </div>
                                                                    <div class="col-sm-2 brdRight text-align">
                                                                      <h4>Appointment Date</h4>
                                                                      <p style="color: black;">20.03.2017 -13:00 Uhr</p>
                                                                    </div>
                                                                    <div class="col-sm-2 text-align brdRight">
                                                                      <h4>Status </h4>
                                                                      <h4 style="color: red;" id="appointmentsStatus">Waiting</h4> </div>
                                                                      <div class="col-sm-2 text-align">
                                                                        <h4 style="margin:0;">Options </h4>
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancelledAppointmentModal"><i class="fa fa-eye" aria-hidden="true"></i>View</button>
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancelledAppointmentReasonModal"><i class="fa fa-eye" aria-hidden="true"></i>Canceled Reason</button> 
                                                                      </div>
                                                                    </a>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="clearfix"> </div>
                                                      <br>
                                                    </div>

                                                  </div>

                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="clearfix"></div>


