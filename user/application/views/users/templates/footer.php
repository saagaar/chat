

    <!-- Footer -->
    <footer style="margin-top: -22px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="pull-left">
              <p>ALL RIGHTS RESERVED. COPYRIGHT © Heroic Technologies 2017.
              </p>
            </div>
            <div class="pull-right">
              <ul class="footer-social">
                <li>
                  <a href="index.html#">
                    <i aria-hidden="true" class="fa fa-facebook">
                    </i>
                  </a>
                </li>
                <li>
                  <a href="index.html#">
                    <i aria-hidden="true" class="fa fa-twitter">
                    </i>
                  </a>
                </li>
                <li>
                  <a href="index.html#">
                    <i aria-hidden="true" class="fa fa-instagram">
                    </i>
                  </a>
                </li>
                <li>
                  <a href="index.html#">
                    <i aria-hidden="true" class="fa fa-google-plus">
                    </i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->
  </div>
  <!-- /Left Section -->

  <!-- /Right Sidebar -->
  <!-- /Right Sidebar -->
  <div class="rightSidebar">

    <div class="sidebar-afix affix client-desh">
      <div class="col-sm-12 col-xs-12 no-padding">
        <div class="main-content">
          <div class="tab-section">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="user-img">

                  <div class="userImg">
                    <div class="placeMiddle">
                      <div class="item active">
                        <div class="">
                          <div class="cover-photo">
                            <div id="user" style="background-image: url(&quot;http://i.lv3.hbo.com/assets/images/series/silicon-valley/home/140411-hbo-go-600.jpg&quot;);"></div>
                          </div>
                          <div class="pro-info">
                            <div class="star">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            
                            <h4>
                              <!-- username -->
                              <?php echo $aside_userinfo['username'] ?>
                            </h4>
                            
                            <h5 style="line-height:3px;">
                              <!-- User ID -->
                              <?php echo $aside_userinfo['id'] ?>
                            </h5>    
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="bhoechie-tab-menu menubr">
                  <div class="list-group">
                    <ul>
                      <li <?php echo ($active_side == 'dashboard') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('dashboard') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-home">
                          </h4>
                          <span>Home</span>
                        </a>
                      </li>
                      <li <?php echo ($active_side == 'proposals') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('proposals') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-bullhorn">
                          </h4>
                          <span>My Proposals</span>
                        </a>
                      </li>
                      <li <?php echo ($active_side == 'posts') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('posts') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-paint-brush">
                          </h4>
                          <span>My Posts</span>
                        </a>
                      </li>
                      <li <?php echo ($active_side == 'contracts') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('contracts') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-handshake-o"></h4>
                          <span>My Contracts</span>
                        </a>
                      </li>
                      <li <?php echo ($active_side == 'job') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('job') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-tasks" aria-hidden="true"></h4>
                          <span>My Job Tasks</span>
                        </a>
                      </li>
                      <li <?php echo ($active_side == 'purchase') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('purchase') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-shopping-cart"></h4>
                          <span>My Purchase</span>
                        </a>
                      </li>
                      <li <?php echo ($active_side == 'payments') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('payments') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-money"></h4>
                          <span>My Payments</span>
                        </a>
                      </li>
                      <li <?php echo ($active_side == 'tickets') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('tickets') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-life-ring"></h4>
                          <span>Support Ticket</span>
                        </a>
                      </li>
                      <li <?php echo ($active_side == 'warranty') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('warranty') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-cogs"></h4>
                          <span>My Warranty</span>
                        </a>
                      </li>

                      <li <?php echo ($active_side == 'reviews') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('reviews') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-comments-o"></h4>
                          <span>My Reviews</span>
                        </a>
                      </li>
                      <li <?php echo ($active_side == 'appointments') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('appointments') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-calendar-check-o"></h4>
                          <span>My Appointments</span>
                        </a>
                      </li>
                      <li <?php echo ($active_side == 'searchajob') ? 'class="active"': '' ?>>
                        <a href="<?php echo base_url('searchjob') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-briefcase"></h4>
                          <span>Search a Job</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo base_url('auth/logout') ?>" class="list-group-item text-center">
                          <h4 class="fa fa-sign-out"></h4>
                          <span>Logout</span>
                        </a>
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
  <!-- /Right Sidebar -->

      </div>   
    </div>   
  </div>   
</div>


<div aria-labelledby="myModalLabel" class="modal fade" id="langmodal" role="dialog" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
          <span aria-hidden="true">×
          </span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Select your Favorite Language
        </h4>
      </div>
      <div class="modal-body text-center">
        <a class="flags activeflag" href="index.html#">
        </a>
        <div class="flag-icon flag-icon-us flag-big">
        </div>
        <br> English
        <span>
          <i class="fa fa-fw fa-check-circle">
          </i>
        </span>
        <a class="flags" href="index.html#">
        </a>
        <div class="flag-icon flag-icon-in flag-big">
        </div>
        <br> Hindi
        <span>
          <i class="fa fa-fw fa-check-circle">
          </i>
        </span>
        <a class="flags" href="index.html#">
        </a>
        <div class="flag-icon flag-icon-ch flag-big">
        </div>
        <br> China
        <span>
          <i class="fa fa-fw fa-check-circle">
          </i>
        </span>
        <a class="flags" href="index.html#">
        </a>
        <div class="flag-icon flag-icon-af flag-big">
        </div>
        <br> Afria
        <span>
          <i class="fa fa-fw fa-check-circle">
          </i>
        </span>
      </div>
    </div>
  </div>
</div>
<div aria-labelledby="myModalLabel" class="modal fade" id="langmodal" role="dialog" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
          <span aria-hidden="true">×
          </span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Select your Favorite Language
        </h4>
      </div>
      <div class="modal-body text-center">
        <a class="flags activeflag" href="index.html#">
        </a>
        <div class="flag-icon flag-icon-us flag-big">
        </div>
        <br> English
        <span>
          <i class="fa fa-fw fa-check-circle">
          </i>
        </span>
        <a class="flags" href="index.html#">
        </a>
        <div class="flag-icon flag-icon-in flag-big">
        </div>
        <br> Hindi
        <span>
          <i class="fa fa-fw fa-check-circle">
          </i>
        </span>
        <a class="flags" href="index.html#">
        </a>
        <div class="flag-icon flag-icon-ch flag-big">
        </div>
        <br> China
        <span>
          <i class="fa fa-fw fa-check-circle">
          </i>
        </span>
        <a class="flags" href="index.html#">
        </a>
        <div class="flag-icon flag-icon-af flag-big">
        </div>
        <br> Afria
        <span>
          <i class="fa fa-fw fa-check-circle">
          </i>
        </span>
      </div>
    </div>
  </div>
</div>

</div>
</div>


<!-- Search top nav -->
<div id="topNavSearchJobModal" class="modal fade p-t-100" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="overflow: hidden; outline: none;width:520px;padding:0px;">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Search for work</h4>
      </div>
      <div class="modal-body">
        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;margin-top: 10px;margin-bottom: 20px">Work Details</h3>
        <div class="row" style="margin-bottom:30px">
          <div class="col-sm-4">
            <h4 align="center"> Post Start</h4>
            <div id="poststrat"  class="input-group date" style="margin-bottom: 20px"> 
              <input style="margin:0" class="form-control" type="text"> 
              <span class="add-on input-group-addon"> <span class="fa fa-calendar"></span> </span>
            </div>
            <div class="selectdiv">
              <select class="m-t-15" style="border-radius: 4px">
                <option>Work Type</option>
                <option>Full Time</option>
                <option>Part Time</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4"> 
            <h4 align="center"> Post End</h4>   
            <div id="postend"  class="input-group date" style="margin-bottom: 20px"> 
              <input style="margin:0" class="form-control" type="text"> 
              <span class="add-on input-group-addon"> <span class="fa fa-calendar"></span> </span>
            </div>
            <div class="selectdiv">
              <select class="m-t-15" style="border-radius: 4px">
                <option>Payment Type</option>
                <option>Fixed</option>
                <option>Hourly</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <h4 align="center"> Start work date</h4>
            <div  id="Selectdateinstartwork" class="input-group date" style="margin-bottom: 20px"> 
              <input style="margin:0" class="form-control" type="text"> 
              <span class="add-on input-group-addon"> <span class="fa fa-calendar"></span> </span>
            </div>
            <div class="selectdiv">
              <select class="m-t-15" style="border-radius: 4px">
                <option>Work Start</option>
                <option>Now</option>
                <option>Agreement</option>
              </select>
            </div>
          </div>
          <script>
            $('#poststrat').datetimepicker({
              language: 'pt-BR'
            });
            $('#postend').datetimepicker({
              language: 'pt-BR'
            });
            $('#Selectdateinstartwork').datetimepicker({
              language: 'pt-BR'
            });
          </script>
        </div>
      </div>
      <div class="modal-footer" style="background-color: grey;margin:0px;padding:0px">
        <div class="col-lg-12" style="padding:0px; height: 30px">
          <button type="button" class="btn okbnt pull pull-right" style="font-size: 18px;width:100px;height: 30px; background-color: #6cb5f3;border:none;border-radius: 0px;padding: 0px;">
            <span class="append-icon"></span>Search
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Search top navbar -->

    
</body>
</html>

