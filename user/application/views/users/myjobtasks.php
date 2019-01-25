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

<div class="rightSection" >
  <!-- Header -->

  <div class="col-md-12 col-sm-12 col-xs-12 pull-left no-padding hederLogoSec" >
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
  <div role="tabpanel" class="tab-pane " id="MyJobArea">
    <div class="border-box">

      <!-- my contracts table -->
      <div style="background-color: #f3f3f3;" class="main-content">
        <div class="tab-section">
          <div class="row">
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container" style="margin-top:0px;">
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
                              <a href="index.html#tasksInProgress" MyContractsAreaCurrentContracts-controls="MyPostsAreaInCheck" role="tab" data-toggle="tab">
                                  <i class="fa fa-hourglass-half" aria-hidden="true"></i> progress
                                 
                              </a>
                            </li>
                            <li class="" role="presentation">
                              <a href="index.html#tasksInPause" MyContractsAreaCurrentContracts-controls="MyPostsAreaInCheck" role="tab" data-toggle="tab">
                                  <i class="fa fa-pause" aria-hidden="true"></i> Pause
                                  
                              </a>
                            </li>
                            <li role="presentation">
                              <a href="index.html#tasksStoped" MyContractsAreaCurrentContracts-controls="MyContractsAreaContractsdisputes" role="tab" data-toggle="tab">
                                 <i class="fa fa-stop-circle-o" aria-hidden="true"></i> Stoped
                                 
                              </a>
                            </li>
                            <li role="presentation">
                              <a href="index.html#tasksDone" MyContractsAreaCurrentContracts-controls="MyContractsAreaCancelledContracts" role="tab" data-toggle="tab">
                                  <i class="fa fa-check-square-o" aria-hidden="true"></i>  Done
                                  <div class='row'>
                                  <div class="col-md-5" style="text-align: right"></div> 

                                      <div >
                                      </div>
                                  </div>
                              </a>
                            </li>
                            <li role="presentation">
                              <a  href="index.html#tasksRepored" MyContractsAreaCurrentContracts-controls="MyContractsAreaContractsDone" role="tab" data-toggle="tab">
                                 <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Repored
                                  
                              </a>
                            </li>
                          </ul>
                        </div><!-- /.navbar-collapse -->

                      </div><!-- /.container-fluid -->
                    </nav>


                    <!--second section-->
                    <div class="tab-content no-t-m">
                      <div role="tabpanel" class="tab-pane active m-t-35" id="tasksInProgress">


                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -4px;">
                          <div class="row">
                            <div style="margin-top: 30px; margin-bottom: -89px;" class="col-md-12">
                              <div class="tab-content no-bd mrgn0 pdng0">
                                <div class="tab-pane active fade in" id="category1">
                                  <div class="panel widget container-fluid">
                                    <div class="row mrgn30-0 projectRow">
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                      class="notice notice-success" style="color: black;">

                                      <div class="col-sm-3 brdRight text-align">

                                        <div class="text-con">
                                          <h4>Task Name</h4>
                                          <p style="color: black;">Started: 16.8.2017</p>
                                        </div>

                                      </div>
                                      <div class="col-sm-6 brdRight">
                                        <div class="task-progressbar">
                                          <div class="progress blue">
                                            <div class="progress-bar" style="width:50%; background:#007bff;">
                                              <div class="progress-value">50%</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-3 text-align">

                                        <h4 class="text-height">
                                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewProgessModal" style="width: 39%"><i class="fa fa-eye" aria-hidden="true"></i>View</button></h4>
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


                      <div role="tabpanel" class="tab-pane m-t-35" id="tasksInPause">


                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                          <div class="row">
                            <div style="margin-top: 30px; margin-bottom: -89px;" class="col-md-12">
                              <div class="tab-content no-bd mrgn0 pdng0">
                                <div class="tab-pane active fade in" id="category1">
                                  <div class="panel widget container-fluid">
                                    <div class="row mrgn30-0 projectRow">
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                      class="notice notice-success" style="color: black;">

                                      <div class="col-sm-3 brdRight text-align">

                                        <div class="text-con">
                                          <h4>Task Name</h4>
                                          <p style="color: black;">Started: 16.8.2017</p>
                                        </div>

                                      </div>
                                      <div class="col-sm-6 brdRight">
                                        <div class="task-progressbar">
                                          <div class="progress yellow">
                                            <div class="progress-bar" style="width:70%; background:#ffc805;">
                                              <div class="progress-value">70%</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-3 text-align">

                                        <h4 class="text-height">
                                          <button type="button" class="btn btn-primary btn-sm" style="width: 39%" data-toggle="modal" data-target="#viewPauseActivityModal"><i class="fa fa-eye" aria-hidden="true"></i>View</button></h4>
                                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewPauseReasonActivityModal" style="width: 120px;background: #ed7d31;border-color:#ed7d31;">Reasion 2</button>
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
                      <div role="tabpanel" class="tab-pane m-t-35" id="tasksStoped">


                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                          <div class="row">
                            <div style="margin-top: 30px; margin-bottom: -89px;" class="col-md-12">
                              <div class="tab-content no-bd mrgn0 pdng0">
                                <div class="tab-pane active fade in" id="category1">
                                  <div class="panel widget container-fluid">
                                    <div class="row mrgn30-0 projectRow">
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                      class="notice notice-success" style="color: black;">

                                      <div class="col-sm-3 brdRight text-align">

                                        <div class="text-con">
                                          <h4>Task Name</h4>
                                          <p style="color: black;">Started: 16.8.2017</p>
                                        </div>

                                      </div>
                                      <div class="col-sm-6 brdRight">
                                        <div class="task-progressbar">
                                          <div class="progress red">
                                            <div class="progress-bar" style="width:20%; background:red;">
                                              <div class="progress-value">20%</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-3 text-align">

                                        <h4 class="text-height">
                                          <button type="button" class="btn btn-primary btn-sm" style="width: 39%" data-toggle="modal" data-target="#viewStopActivityModal"><i class="fa fa-eye" aria-hidden="true"></i>View</button></h4>
                                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewStopReasonActivityModal" style="width: 120px;background: #ed7d31;border-color:#ed7d31;">Reason</button>
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
                      <div role="tabpanel" class="tab-pane m-t-35" id="tasksDone">


                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                          <div class="row">
                            <div style="margin-top: 30px; margin-bottom: -89px;" class="col-md-12">
                              <div class="tab-content no-bd mrgn0 pdng0">
                                <div class="tab-pane active fade in" id="category1">
                                  <div class="panel widget container-fluid">
                                    <div class="row mrgn30-0 projectRow">
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                      class="notice notice-success" style="color: black;">

                                      <div class="col-sm-3 brdRight text-align">

                                        <div class="text-con">
                                          <h4>Task Name</h4>
                                          <p style="color: black;">Started: 16.8.2017</p>
                                        </div>

                                      </div>
                                      <div class="col-sm-6 brdRight">
                                        <div class="task-progressbar">
                                          <div class="progress green">
                                            <div class="progress-bar" style="width:100%; background:#70963c;">
                                              <div class="progress-value">100%</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-3 text-align">

                                        <h4 class="text-height">
                                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewDoneTaskModal" style="width: 39%"><i class="fa fa-eye" aria-hidden="true"></i>View</button></h4>
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
                      <div role="tabpanel" class="tab-pane m-t-35" id="tasksRepored">


                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                          <div class="row">
                            <div style="margin-top: 30px; margin-bottom: -89px;" class="col-md-12">
                              <div class="tab-content no-bd mrgn0 pdng0">
                                <div class="tab-pane active fade in" id="category1">
                                  <div class="panel widget container-fluid">
                                    <div class="row mrgn30-0 projectRow">
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title=""
                                      class="notice notice-success" style="color: black;">

                                      <div class="col-sm-3 brdRight text-align">

                                        <div class="text-con">
                                          <h4>Task Name</h4>
                                          <p style="color: black;">Started: 16.8.2017</p>
                                        </div>

                                      </div>
                                      <div class="col-sm-6 brdRight">
                                        <div class="task-progressbar">
                                          <div class="progress orange">
                                            <div class="progress-bar" style="width:80%; background:#db9f08;">
                                              <div class="progress-value">80%</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-3 text-align">

                                        <h4 class="text-height">
                                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewTaskReportedActivityModal" style="width: 120px;background: #ed7d31;border-color:#ed7d31;">Reason</button>
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


<script type="text/javascript">
$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });     
});
</script>