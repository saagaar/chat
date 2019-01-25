  <!-- Left Section -->
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

    <div role="tabpanel" class="tab-pane active" id="HomeArea">
      <div style="background-color: #f3f3f3;" class="border-box">
        <div class="main-content">
          <div class="tab-section">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container" style="margin-top:0px;">
                <div class=" bhoechie-tab">
                  <div  class="bhoechie-tab-content">
                    <div >

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
                                  <a aria-controls="Statics" data-toggle="tab" href="index.html#Statics" role="tab">
                                      <i aria-hidden="true" class="fa fa-bar-chart">
                                      </i> Statics
                                  </a>
                              </li>
                              <li role="presentation">
                                  <a aria-controls="OurFollower" data-toggle="tab" href="index.html#OurFollower" role="tab">
                                      <i aria-hidden="true" class="fa fa-star">
                                      </i> My Favourite
                                  </a>
                              </li>
                              <li role="presentation">
                                  <a aria-controls="AboutUs" data-toggle="tab" href="index.html#ServiceOffers" role="tab">
                                      <i aria-hidden="true" class="fa fa-handshake-o">
                                      </i> Service offers
                                  </a>
                              </li>
                              <li role="presentation">
                                  <a aria-controls="OurTeam" data-toggle="tab" href="index.html#JobsOffers" role="tab">
                                      <i aria-hidden="true" class="fa fa-briefcase">
                                      </i> Jobs Offers
                                  </a>
                              </li>
                              <li role="presentation">
                                  <a href="index.html#Settings" aria-controls="Settings" role="tab" data-toggle="tab">
                                      <i class="fa fa-cogs" aria-hidden="true">
                                      </i> My Settings
                                  </a>
                              </li>
                            </ul>
                          </div><!-- /.navbar-collapse -->

                        </div><!-- /.container-fluid -->
                      </nav>


                      <div class="tab-content no-t-m">
                        <div class="tab-pane active m-t-35" id="Statics" role="tabpanel">
                        </div>
                        <div class="tab-pane m-t-35" id="ServiceOffers" role="tabpanel">
                          <div class="main-content">
                            <div class="tab-section ">
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class=" bhoechie-tab">
                                    <div class="bhoechie-tab-content active">
                                      <div>
                                        <ul style="background-color: white;" class="nav nav-tabs" role="tablist">
                                          <li class="active" role="presentation">
                                            <a style="margin-top: 10px;" aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#ServiceOffersn1" role="tab">
                                              <div class='row'>
                                                <div class='col-md-6' style="text-align: right">
                                                  <i aria-hidden="true" class="fa fa-industry"> 
                                                  </i>
                                                </div>
                                                <div class='col-md-6' style="text-align: left">Service Offers
                                                </div>
                                              </div>
                                            </a>
                                          </li>
                                          <li class="" role="presentation">
                                            <a style="margin-top: 10px;" aria-controls="" aria-expanded="true" data-toggle="tab" href="index.html#ServiceOffersn2" role="tab">
                                              <div class='row'>
                                                <div class='col-md-6' style="text-align: right"> 
                                                  <i aria-hidden="true" class="fa fa-cogs"> 
                                                  </i>
                                                </div>
                                                <div class='col-md-6' style="text-align: left">Items Offers
                                                </div>
                                              </div>
                                            </a>
                                          </li>
                                        </ul>
                                        <div class="tab-content">
                                          <div class="tab-pane active" id="ServiceOffersn1" role="tabpanel">
                                            <div class="">
                                              <!-- all service offer section -->
                                              <section style="margin-top: -37px;" class="cd-gallery filter-is-visible">
                                                <?php 
                                                // echo "<pre>";
                                                // print_r($service_offer_data);
                                                if($service_offer_data): ?>
                                                <ul id="MixItUp83A0F8">
                                                  <?php foreach ($service_offer_data as $k => $v): ?>   
                                                  <li class="mix web-designing front-end html option3" style="display: inline-block;" data-bound="">
                                                    <div class="thumbnail">
                                                      <div class="servbox" id="products">
                                                        <div class="service_details featured_service">
                                                          <div class="srvice_box ">
                                                            <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                            <div class="serves-hover">
                                                              <div class="hover-ser">
                                                                <d>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">
                                                                  <?php echo $v['title']; ?>
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p><?php echo $v['description']; ?></p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> <?php echo $v['rate']; ?>
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>

                                                    <?php endforeach ?>
                                                  </ul>
                                                <?php endif ?>
                                                  <div class="cd-fail-message">No results found
                                                  </div>
                                                </section>
                                                <div class="row">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="tab-pane" id="ServiceOffersn2" role="tabpanel">
                                              <section style="margin-top: -37px;" class="cd-gallery filter-is-visible">
                                                <ul id="MixItUp718A52">
                                                  <li class="mix web-designing front-end html option3" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 100px;">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;" class="title"> 
                                                            <a href="profile.html">Amanda Suns
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-devlopment back-end html option2" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 100px;">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;"  class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing graphics php option1" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 100px;">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;"  class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing graphics html option4" style="display: inline-block; margin-top: 54px;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 100px;" >
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;" class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing front-end php option2" style="display: inline-block; margin-top: 54px;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 100px;" >
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;" class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-devlopment back-end php option3" style="display: inline-block; margin-top: 54px;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 100px;">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;"  class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-devlopment back-end html option1" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 100px;">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;"  class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing front-end php option4" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 100px;">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;"  class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-devlopment front-end html option3" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 100px;" >
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;"  class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing graphics html option4" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 100px;">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;"  class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing graphics php option2" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 100px;" >
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;"  class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-devlopment front-end php option1" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 100px;" >
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;"  class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;" >
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="gap">
                                                  </li>
                                                  <li class="gap">
                                                  </li>
                                                  <li class="gap">
                                                  </li>
                                                </ul>
                                                <div class="cd-fail-message">No results found
                                                </div>
                                              </section>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <br>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                          <div class="tab-pane m-t-35" id="JobsOffers" role="tabpanel">
                            <div class="main-content">
                              <div class="tab-section">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="bhoechie-tab">
                                      <div class="bhoechie-tab-content active">
                                        <div>
                                          <div class="row pdng10-0 searchBar" style="margin-right: 0px; margin-top: 0px; background-color: white">
                                            <form>
                                              <div class="col-md-2 col-md-offset-2">

                                              </div>
                                              <!-- <div class="col-md-2">
                                                <div>
                                                  <select>
                                                    <option value="" disabled="" selected="">Select work time
                                                    </option>
                                                    <option value="1">Sort by Work Time
                                                    </option>
                                                    <option value="2">Sort by Work Time
                                                    </option>
                                                    <option value="3">Sort by Work Time
                                                    </option>
                                                    <option value="4">Sort by Work Time
                                                    </option>
                                                  </select>
                                                </div>                                                               
                                                
                                              </div> -->
                                              <div class="col-md-2">
                                                <div>
                                                  <select>
                                                    <option value="" disabled="" selected="">Select work time
                                                    </option>
                                                    <option value="1">Sort by Work Time
                                                    </option>
                                                    <option value="2">Sort by Work Time
                                                    </option>
                                                    <option value="3">Sort by Work Time
                                                    </option>
                                                    <option value="4">Sort by Work Time
                                                    </option>
                                                  </select>
                                                </div>
                                              </div>

                                              <div class="col-md-2">
                                                <input class="searchbox-ov" type="search" placeholder="Search">
                                              </div>
                                            </form>
                                          </div>






                                          <!--End search and select bar area-->
                                          <div class="tab-content">
                                            <div class="tab-pane active" id="JobsOffersn1" role="tabpanel">
                                              <section style="margin-top: -37px;" class="cd-gallery filter-is-visible">
                                                <?php if($job_offer_data): ?>
                                                <ul id="MixItUp718A52">
                                                  <?php foreach ($job_offer_data as $v): ?>
                                                    <li class="mix web-designing front-end html option3" style="display: inline-block;" data-bound="">
                                                      <div class="job-tab squre-logo" style="display: block;">
                                                        <div style="max-height: 540px; background-color: white;" class="card hovercard">
                                                          <div class="cardheader"> 
                                                          </div>
                                                          <div class="avatar2"> 
                                                            <img alt="" src="img/logo_2.jpg">
                                                          </div>
                                                          <div class="info">
                                                            <div class="title"> 
                                                              <a href="profile.html"><?php echo $v['company_detail']['name'] ?></a>
                                                            </div>
                                                            <h3>
                                                              <a href="job-single.html" title=""><?php echo $v['job_name'] ?>
                                                              </a>
                                                            </h3>
                                                          </div>
                                                          <ol>
                                                            <li>
                                                              <span>
                                                                <strong>Publisher :</strong> 
                                                                <a href="Profile.html"><?php echo $v['company_detail']['name'] ?></a>
                                                              </span>
                                                            </li>
                                                            <li>
                                                              <span>
                                                                <strong>In :</strong> <?php echo $v['job_in'] ?>
                                                              </span>
                                                            </li>
                                                            <li>
                                                              <span>
                                                                <strong>Date :</strong> <?php echo $v['job_date'] ?>
                                                              </span>
                                                            </li>
                                                            <li>
                                                              <span>
                                                                <strong>Workstart : </strong> <?php echo $v['job_workstart'] ?>
                                                              </span>
                                                            </li>
                                                            <li>
                                                              <span>
                                                                <strong>Payment : </strong> <?php echo $v['job_payment'] ?>
                                                              </span>
                                                            </li>
                                                            <li>
                                                              <span>
                                                                <strong>Worktype : </strong> <?php echo $v['job_worktype'] ?>
                                                              </span>
                                                            </li>
                                                            <li>
                                                              <a href="job-for-us.html#" data-toggle="modal" data-target="#myModal" style="width:120px;" class="btn btn-primary">Contact Us
                                                              </a>
                                                            </li>
                                                          </ol>
                                                        </div>
                                                      </div>
                                                    </li>
                                                  <?php endforeach;?>
                                                    
                                                </ul>
                                              <?php else: ?>
                                                <div class="cd-fail-message">No results found
                                                </div>
                                              <?php endif; ?>
                                              </section>
                                            </div>
                                            <div class="tab-pane " id="JobsOffersn2" role="tabpanel">
                                              <div class="">
                                                <section style="margin-top: -37px;" class="cd-gallery filter-is-visible">
                                                  <ul id="MixItUp83A0F8">
                                                    <li class="mix web-designing front-end html option3" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift ">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-devlopment back-end html option2" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing graphics php option1" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing graphics html option4" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing front-end php option2" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-devlopment back-end php option3" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-devlopment back-end html option1" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing front-end php option4" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-devlopment front-end html option3" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing graphics html option4" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing graphics php option2" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-devlopment front-end php option1" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="gap">
                                                    </li>
                                                    <li class="gap">
                                                    </li>
                                                    <li class="gap">
                                                    </li>
                                                  </ul>
                                                  <div class="cd-fail-message">No results found
                                                  </div>
                                                </section>
                                                <div class="row">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="tab-pane " id="JobsOffersn3" role="tabpanel">
                                              <section style="margin-top: -37px;" class="cd-gallery filter-is-visible">
                                                <ul id="MixItUp718A52">
                                                  <li class="mix web-designing front-end html option3" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Suns gggg
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-devlopment back-end html option2" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing graphics php option1" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing graphics html option4" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing front-end php option2" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-devlopment back-end php option3" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-devlopment back-end html option1" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing front-end php option4" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-devlopment front-end html option3" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 100px;">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div style="background-color: white; text-align: center;" class="title"> 
                                                            <a  href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3 style="background-color: white; text-align: center;">
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing graphics html option4" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-designing graphics php option2" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="mix web-devlopment front-end php option1" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo">
                                                      <div style="max-height: 350px;" class="card hovercard">
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="img/logo_2.jpg">
                                                        </div>
                                                        <div class="info">
                                                          <div class="title"> 
                                                            <a href="profile.html">Amanda Sun
                                                            </a>
                                                          </div>
                                                          <h3>
                                                            <a href="job-single.html" title="">Looking blog writer for our blog
                                                            </a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <li class="gap">
                                                  </li>
                                                  <li class="gap">
                                                  </li>
                                                  <li class="gap">
                                                  </li>
                                                </ul>
                                                <div class="cd-fail-message">No results found
                                                </div>
                                              </section>
                                            </div>
                                            <div class="tab-pane " id="JobsOffersn4" role="tabpanel">
                                              <div class="">
                                                <section style="margin-top: -37px;" class="cd-gallery filter-is-visible">
                                                  <ul id="MixItUp83A0F8">
                                                    <li class="mix web-designing front-end html option3" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift ">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-devlopment back-end html option2" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing graphics php option1" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing graphics html option4" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing front-end php option2" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-devlopment back-end php option3" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-devlopment back-end html option1" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="img/06.jpg" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing front-end php option4" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-devlopment front-end html option3" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing graphics html option4" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-designing graphics php option2" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="mix web-devlopment front-end php option1" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box ">
                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">create 300 EDU Backlinks for ANY WEBSITE &nbsp;
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p>Last January, a 21-year-old woman who worked in a small shop in West Delhi's Kirti Nagar area committed suicide. When police officials finally managed to get in touch with her mother in Assam 12 days later, she asked if her daughter's 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> 450
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <li class="gap">
                                                    </li>
                                                    <li class="gap">
                                                    </li>
                                                    <li class="gap">
                                                    </li>
                                                  </ul>
                                                  <div class="cd-fail-message">No results found
                                                  </div>
                                                </section>
                                                <div class="row">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <br>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="tab-pane m-t-35" id="Portfolio" role="tabpanel">
                            <div class="tab-main-content">
                              <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="editabl">
                                    <div class="edittable-title">
                                      <h2>Our Portfolio
                                      </h2>
                                    </div>
                                    <div class="editable">
                                      <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                          <div class="img-pop">
                                            <div class="image-addon">
                                              <div class="add-more">
                                                <div class="multi-img">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail">
                                                      <img src="img/job_14.jpg">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="add-more">
                                                <div class="multi-img">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail">
                                                      <img src="img/job_14.jpg">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="add-more">
                                                <div class="multi-img">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail">
                                                      <img src="img/job_14.jpg">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="add-more">
                                                <div class="multi-img">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail">
                                                      <img src="img/job_14.jpg">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="add-more">
                                                <div class="multi-img">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail">
                                                      <img src="img/job_14.jpg">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="add-more">
                                                <div class="multi-img">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail">
                                                      <img src="img/job_14.jpg">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="add-more">
                                                <div class="multi-img">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail">
                                                      <img src="img/job_14.jpg">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="add-more">
                                                <div class="multi-img">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail">
                                                      <img src="img/job_14.jpg">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="add-more">
                                                <div class="multi-img">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail">
                                                      <img src="img/job_14.jpg">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="add-more">
                                              <button class="add_img_button">
                                                <img src="img/image.svg">
                                              </button>
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
                          <div class="tab-pane m-t-35" id="OurFollower" role="tabpanel">
                            <div class="main-content">
                              <div class="tab-section">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class=" bhoechie-tab">
                                      <div class="bhoechie-tab-content active">
                                        <div>
                                          <ul style="background-color: white;" class="nav nav-tabs" role="tablist">
                                            <li class="active" role="presentation">
                                              <a style="margin-top: 10px;" aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#n1" role="tab">
                                                <div class='row'>
                                                  <div class='col-md-6' style="text-align: right;">
                                                    <i style="" aria-hidden="true" class="fa fa-industry"> 
                                                    </i>
                                                  </div>
                                                  <div class='col-md-6' style="text-align: left">
                                                    My Companies
                                                  </div>
                                                </div>
                                              </a>
                                            </li>
                                            <li class="" role="presentation">
                                              <a style="margin-top: 10px;" aria-controls="" aria-expanded="true" data-toggle="tab" href="index.html#n2" role="tab">
                                                <div class='row'>
                                                  <div class='col-md-6' style="text-align: right">
                                                    <i aria-hidden="true" class="fa fa-cogs"> 
                                                    </i>
                                                  </div>
                                                  <div class='col-md-6' style="text-align: left">
                                                    My Services
                                                  </div>
                                                </div>
                                              </a>
                                            </li>
                                            <li class="" role="presentation">
                                              <a style="margin-top: 10px;" aria-controls="" aria-expanded="true" data-toggle="tab" href="index.html#n3" role="tab">
                                                <div class='row'>
                                                  <div class='col-md-6' style="text-align: right">
                                                    <i aria-hidden="true" class="fa fa-cart-plus"> 
                                                    </i>
                                                  </div>
                                                  <div class='col-md-6' style="text-align: left"> My Items 
                                                  </div>
                                                </div>
                                              </a>
                                            </li>
                                          </ul>

                                          <div class="tab-content">
                                            <div class="tab-pane active" id="n1" role="tabpanel">
                                              <!-- my companies -->
                                              <section style="margin-top: -37px;" class="cd-gallery filter-is-visible">
                                                <?php if($employee_data): ?>
                                                <ul id="MixItUp718A52">
                                                  <?php foreach ($employee_data as $k => $v): ?>
                                                    <li class="mix web-designing front-end html option3" style="display: inline-block;" data-bound="">
                                                    <div class="job-tab squre-logo" style="display: block;">
                                                      <div style="max-height: 100px;" >
                                                        <div class="cardheader"> 
                                                        </div>
                                                        <div class="avatar2"> 
                                                          <img alt="" src="<?php echo base_url('assets/users/img/logo_2.jpg') ?>">
                                                        </div>
                                                        <div class="info">
                                                          <div style="text-align: center; background-color: white;" class="title"> 
                                                            <a href="profile.html"><?php echo $v['company_details']['name'] ?></a>
                                                          </div>
                                                          <h3 style="text-align: center; background-color: white;">
                                                            <a href="job-single.html" title=""><?php echo $v['company_details']['description'] ?></a>
                                                          </h3>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <?php endforeach ?>
                                                </ul>
                                              <?php endif; ?>

                                                <div class="cd-fail-message">No results found
                                                </div>
                                              </section>
                                            </div>
                                            <div class="tab-pane " id="n2" role="tabpanel">
                                              <div class="">
                                                <!-- service offer -->
                                                <section class="cd-gallery filter-is-visible">
                                                  <?php if($user_fav_service): ?>
                                                  <ul id="MixItUp83A0F8">
                                                    <?php foreach ($user_fav_service as $k => $v): ?>
                                                    <li class="mix web-designing front-end html option3" style="display: inline-block;" data-bound="">
                                                      <div class="thumbnail">
                                                        <div class="servbox" id="products">
                                                          <div class="service_details featured_service">
                                                            <div class="srvice_box">

                                                              <img src="<?php echo base_url('assets/users/img/06.jpg') ?>" alt="SEO - Search Engine Optimization">
                                                              <div class="serves-hover">
                                                                <div class="hover-ser">
                                                                  <div class="col-md-12">
                                                                    <a class="hover-eye" href="inner-service.html" data-toggle="tooltip" title="" data-original-title="View Detail">
                                                                      <i class="fa fa-eye">
                                                                      </i>
                                                                    </a>
                                                                    <i data-toggle="tooltip" title="" class="service_box_fav_btn favourite_serv_btn fa fa-gift" data-original-title="Sent it as Gift ">
                                                                    </i>
                                                                  </div>
                                                                  <div class="col-md-12 share-n">
                                                                    <h5>Share Now 
                                                                    </h5>
                                                                    <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                                                                      <i class="fa fa-facebook">
                                                                      </i>
                                                                    </a> 
                                                                    <a class="btn btn-social-icon btn-google-plus">
                                                                      <i class="fa fa-google-plus">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-linkedin">
                                                                      <i class="fa fa-linkedin">
                                                                      </i>
                                                                    </a>
                                                                    <a class="btn btn-social-icon btn-twitter">
                                                                      <i class="fa fa-twitter">
                                                                      </i>
                                                                    </a> 
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="list-td">
                                                              <div class="service_title">
                                                                <a href="buy-services.html#">
                                                                  <?php echo trim($v['title']); ?>
                                                                </a>
                                                                <div class="pro-descr">
                                                                  <p><?php echo trim($v['description']); ?> 
                                                                  </p>
                                                                </div>
                                                                <span> 
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                  <span class="glyphicon glyphicon-star star-active">
                                                                  </span>
                                                                </span>
                                                                <span class="item-price">
                                                                  <i class="fa fa-inr">
                                                                  </i> <?php echo $v['price'] ?>
                                                                </span>
                                                              </div>
                                                              <div class="service_meta">
                                                                <a href="buy-services.html#" class="by-now">
                                                                  <i class="fa fa-heart">
                                                                  </i>+ favorite
                                                                </a>
                                                                <a href="buy-services.html#" data-toggle="modal" data-target="#paymentmethod" class="by-now">
                                                                  <i class="fa fa-shopping-cart">
                                                                  </i>Buy now
                                                                </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </li>
                                                    <?php endforeach ?>
                                                  </ul>
                                                <?php endif; ?>
                                                  <div class="cd-fail-message">No results found
                                                  </div>
                                                </section>
                                                <div class="row">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="tab-pane" id="n3" role="tabpanel">
                                              <div class="col-lg-125">
                                                <div class="col-lg-12">
                                                  <div class="tabcontent" id="Information" style="display: block;">
                                                    <div class="tab-main-content">
                                                      <div class="row">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <br>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane m-t-35" id="Settings" role="tabpanel">
                            <div class="tab-main-content">
                              <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="picprofile" style="background-image:url(assets/users/img/index.jpg);margin-top: 0px;">
                                    <div class="picgraycolor">
                                      <input id="imgupload" style="display:none" type="file">
                                      <i aria-hidden="true" class="fa fa-camera caproimg1" onclick="$('#imgupload').trigger('click'); return false;">
                                      </i>
                                    </div>
                                    <div class="imgusersa" style="">
                                      <div class="framesa" style="background-image:url(assets/users/img/pro.jpg)">
                                        <div class="upload">
                                          <input id="imgupload2" style="display:none" type="file">
                                          <i aria-hidden="true" class="fa fa-camera caproimg" onclick="$('#imgupload2').trigger('click'); return false;">
                                          </i>
                                        </div>
                                      </div>
                                    </div>
                                    <h2 class="card-title">Pamela Anderson
                                    </h2>
                                  </div>
                                  <div class="main-content">
                                    <div class="tab-section">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class=" bhoechie-tab">
                                            <div class="bhoechie-tab-content active">
                                              <div>
                                                <ul style="background-color: white;" class="nav nav-tabs" role="tablist">
                                                  <li class="active" role="presentation">
                                                    <a aria-controls="" aria-expanded="true" data-toggle="tab" href="index.html#myprofile" role="tab">
                                                      <i aria-hidden="true" class="fa fa-id-card-o">
                                                      </i> My Profile
                                                    </a>
                                                  </li>
                                                  <li class="" role="presentation">
                                                    <a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#payment" role="tab">
                                                      <i aria-hidden="true" class="fa fa-money">
                                                      </i> Payments
                                                    </a>
                                                  </li>
                                                  <li class="" role="presentation">
                                                    <a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#compsaswda" role="tab">
                                                      <i aria-hidden="true" class="fa fa-industry">
                                                      </i> Notification
                                                    </a>
                                                  </li>
                                                  <li class="" role="presentation">
                                                    <a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#ownerinfo" role="tab">
                                                      <i aria-hidden="true" class="fa fa-facebook">
                                                      </i>Social Logins
                                                    </a>
                                                  </li>
                                                  <li class="" role="presentation">
                                                    <a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#Securityques" role="tab">
                                                      <i aria-hidden="true" class="fa fa-shield">
                                                      </i> Security Questions
                                                    </a>
                                                  </li>
                                                </ul>
                                                <div class="tab-content">
                                                  <div class="tab-pane active" id="myprofile" role="tabpanel">
                                                    <div class="row">
                                                      <div class="col-lg-12">

                                                        <hr class="">
                                                        <div class="col-lg-6">
                                                          <div class="tab-pane active" id="comp" role="tabpanel">
                                                            <div class="col-lg-12">
                                                              <div class="col-lg-12">
                                                                <div class="tabcontent" id="Information" style="display: block;">
                                                                  <div class="tab-main-content">
                                                                    <div class="row">
                                                                      <div style= "background: #f3f3f3;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="editabl">
                                                                          <div class="editable">
                                                                            <div class="password">
                                                                              <div class="password-fields">
                                                                                <div class="formbox">
                                                                                  <label style="text-align: left" class="col-md-8 col-sm-8 col-xs-8 profupdate">PERSONAL INFORMATION
                                                                                  </label> 
                                                                                  <a class="edit" href="javascript:void(0)">Edit
                                                                                  </a>
                                                                                  <ul class="personal-info">

                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-4 col-sm-5 col-xs-12 control-label">Gender
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-8 col-sm-7 col-xs-12">
                                                                                          <div style="float: left" class="form-value">
                                                                                            <label class="control-label">Male 
                                                                                            </label>
                                                                                          </div>
                                                                                          <div style="float: left">
                                                                                            <div style=" margin: 1px 20px;width: 40px;" class="material-switch pull-right">
                                                                                              <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox" />
                                                                                              <label for="someSwitchOptionDefault" class="label-default">
                                                                                              </label>
                                                                                            </div>
                                                                                          </div>
                                                                                          <div class="form-value">
                                                                                            <label class="control-label">Female
                                                                                            </label>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </li>
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-4 col-sm-5 col-xs-12 control-label">Name
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-8 col-sm-7 col-xs-12">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyName"><?php echo ($user_info['last_name']) ? trim($user_info['last_name']) . ', ' : ''; ?>
                                                                                              <?php echo trim($user_info['first_name']); ?> 
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </li>
                                                                                    <!-- <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-4 col-sm-5 col-xs-12 control-label">Birthdate
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-8 col-sm-7 col-xs-12">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyBirthdate">
                                                                                              <?php //echo $user_info['dob'] ?>
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </li> -->
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-4 col-sm-5 col-xs-12 control-label">Location
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-8 col-sm-7 col-xs-12">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyLocation">
                                              <?php 
                                              echo trim($user_info['address']) ? trim($user_info['address']).', ':'';
                                              echo trim($user_info['city']) ? trim($user_info['city']).', ':'';
                                              echo trim($user_info['country']) ? trim($user_info['country']):'';
                                               ?>
                                                                                              <!-- Address st., City, Germany -->
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </li>
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-4 col-sm-5 col-xs-12 control-label">Contact Number
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-8 col-sm-7 col-xs-12">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyContactNumber">
                                                                                              <?php echo str_replace(' ', '', trim($user_info['phone']));
                                                                                               ?>
                                                                                              
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
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
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                          <div class="tab-pane active" id="comp" role="tabpanel">
                                                            <div class="col-lg-12">
                                                              <div class="col-lg-12">
                                                                <div class="tabcontent" id="Information" style="display: block;">
                                                                  <div class="tab-main-content">
                                                                    <div class="row">
                                                                      <div style= "background: #f3f3f3;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="editabl">
                                                                          <div class="editable">
                                                                            <div class="password">
                                                                              <div class="password-fields">
                                                                                <div  class="formbox">
                                                                                  <label style="text-align: left;" class="col-md-8 col-sm-8 col-xs-8 profupdate">Email & Password
                                                                                  </label> 
                                                                                  <a class="edit" href="javascript:void(0)">Edit
                                                                                  </a>
                                                                                  <ul class="personal-info">
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-6 col-sm-6 col-xs-6 control-label">E-mail
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-6 col-sm-6 col-xs-6">
                                                                                          <div class="form-value">
                                                                                            <span id="Companyemail">
                                                                                              <?php echo trim($user_info['email']) ?>
                                                                                              <!-- email@gmail.com -->
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </li>
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-6 col-sm-6 col-xs-6 control-label">Password
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-6 col-sm-6 col-xs-6">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyPassword">
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </li>
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-6 col-sm-6 col-xs-6 control-label">Repeat Password
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-6 col-sm-6 col-xs-6">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyRepeatPassword">

                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
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
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                      <div class="col-lg-12">
                                                        <div class="col-lg-6">
                                                          <div class="tab-pane active" id="comp" role="tabpanel">
                                                            <div class="">
                                                              <div class="col-lg-12">
                                                                <div class="tabcontent" id="Information" style="display: block;">
                                                                  <div class="tab-main-content">
                                                                    <div class="row">
                                                                      <div style= "background: #f3f3f3;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="editabl">
                                                                          <div class="editable">
                                                                            <div class="password">
                                                                              <div class="password-fields">
                                                                                <div class="formbox">
                                                                                  <label style="text-align: left" class="col-md-8 col-sm-8 col-xs-8 profupdate">Recent Activy
                                                                                  </label>
                                                                                  <ul class="personal-info">
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-12 col-sm-12 col-xs-12 control-label">02.19.2016 21:00
                                                                                        </label>
                                                                                      </div>
                                                                                      <div class="form-group">
                                                                                        <div style="text-align: left" class="col-md-12 col-sm-12 col-xs-12">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyActivy">- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eaque quasi neque nostrum.
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </li>
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-12 col-sm-12 col-xs-12 control-label">02.19.2016 21:00
                                                                                        </label>
                                                                                      </div>
                                                                                      <div class="form-group">
                                                                                        <div style="text-align: left" class="col-md-12 col-sm-12 col-xs-12">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyActivy">- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eaque quasi neque nostrum.
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </li>
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-12 col-sm-12 col-xs-12 control-label">02.19.2016 21:00
                                                                                        </label>
                                                                                      </div>
                                                                                      <div class="form-group">
                                                                                        <div style="text-align: left" class="col-md-12 col-sm-12 col-xs-12">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyActivy">- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eaque quasi neque nostrum.
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
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
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                          <div class="tab-pane active" id="comp" role="tabpanel">
                                                            <div class="">
                                                              <div class="col-lg-12">
                                                                <div class="tabcontent" id="Information" style="display: block;">
                                                                  <div class="tab-main-content">
                                                                    <div class="row">
                                                                      <div style= "background: #f3f3f3;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="editabl">
                                                                          <div class="editable">
                                                                            <div class="password">
                                                                              <div class="password-fields">
                                                                                <div class="formbox">
                                                                                  <label style="text-align: left" class="col-md-8 col-sm-8 col-xs-8 profupdate">Summary
                                                                                  </label>
                                                                                  <ul class="personal-info">
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 control-label">Date Joined
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-8 col-sm-8 col-xs-8">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyDateJoined">
                                                                                              <?php echo $user_info['registration_date'] ?>
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </li>
                                                                                    <!-- <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 control-label">Last Logged
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-8 col-sm-8 col-xs-8">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyLastLogged">In 3 days ago
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </li> -->
                                                                                    <li>
                                                                                      <div class="form-group">
                                                                                        <label style="text-align: left" class="col-md-4 col-sm-4 col-xs-4 control-label">Status
                                                                                        </label>
                                                                                        <div style="text-align: left" class="col-md-8 col-sm-8 col-xs-8">
                                                                                          <div class="form-value">
                                                                                            <span id="CompanyStatus">
                                                                                              <?php 
                                                                                              if($user_info['active'] == 1) {
                                                                                                echo "Active";
                                                                                              }  
                                                                                              else if($user_info['active'] == 2) {
                                                                                                echo "On hold";
                                                                                              } else if($user_info['active'] == 3) {
                                                                                                echo 'Suspend';
                                                                                              }  
                                                                                               ?>
                                                                                              
                                                                                              
                                                                                              Suspend / Active / On Hold
                                                                                            </span>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
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
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="tab-pane" id="payment" role="tabpanel">
                                                    <div class="row">
                                                      <div class="col-lg-12">
                                                        <div class="col-lg-1">
                                                        </div>
                                                        <div class="col-lg-10">
                                                          <div class="editable">
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>


                                                  <div class="tab-pane" id="compsaswda" role="tabpanel">
                                                    <div class="col-lg-125">
                                                      <div class="col-lg-12">
                                                        <div class="tabcontent" id="Information" style="display: block;">
                                                          <div class="row">
                                                            <div class="notif">
                                                              <div style="height: 100%" class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="panel panel-default">
                                                                  <!-- Default panel contents -->
                                                                  <div style="text-align: center" class="panel-heading">
                                                                    Notification Settings
                                                                  </div>
                                                                  <!-- List group -->
                                                                  <ul class="list-group" style=" flex-direction: column;">
                                                                    <li class="list-group-item">
                                                                      Bootstrap Switch Default
                                                                      <div style=" margin: 0px 0;width: 300px;" class="material-switch pull-right">
                                                                        <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox" />
                                                                        <label for="someSwitchOptionDefault" class="label-default">
                                                                        </label>
                                                                      </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                      Bootstrap Switch Primary
                                                                      <div style=" margin: 0px 0;width: 300px;" class="material-switch pull-right">
                                                                        <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox" />
                                                                        <label for="someSwitchOptionPrimary" class="label-primary">
                                                                        </label>
                                                                      </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                      Bootstrap Switch Success
                                                                      <div style=" margin: 0px 0;width: 300px;" class="material-switch pull-right">
                                                                        <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox" />
                                                                        <label for="someSwitchOptionSuccess" class="label-success">
                                                                        </label>
                                                                      </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                      Bootstrap Switch Info
                                                                      <div style=" margin: 0px 0;width:300px;" class="material-switch pull-right">
                                                                        <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox" />
                                                                        <label for="someSwitchOptionInfo" class="label-info">
                                                                        </label>
                                                                      </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                      Bootstrap Switch Warning
                                                                      <div style=" margin: 0px 0;width:300px;" class="material-switch pull-right">
                                                                        <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox" />
                                                                        <label for="someSwitchOptionWarning" class="label-warning">
                                                                        </label>
                                                                      </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                      Bootstrap Switch Danger
                                                                      <div style=" margin: 0px 0;width: 300px;" class="material-switch pull-right">
                                                                        <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox" />
                                                                        <label for="someSwitchOptionDanger" class="label-danger">
                                                                        </label>
                                                                      </div>
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
                                                  <div class="tab-pane" id="ownerinfo" role="tabpanel">
                                                    <div style="background: #f3f3f3f3;" class="col-lg-12">
                                                      <div class="col-lg-1">
                                                      </div>
                                                      <div style="background: white;" class="col-lg-10">
                                                        <div class="socail-icns">
                                                          <h2>Facebook Account
                                                          </h2>
                                                          <p>You Guru account is linked with your Facebook account Rohan Sulaiman. This means you can log in with Facebook.
                                                          </p>
                                                          <p>
                                                            <a href="#">
                                                              <img src="img/1.png">
                                                            </a>
                                                          </p>
                                                          <p>
                                                          </p>
                                                          <hr>
                                                          <h2>Facebook Account
                                                          </h2>
                                                          <p>You Guru account is linked with your Facebook account Rohan Sulaiman. This means you can log in with Facebook.
                                                          </p>
                                                          <p>
                                                            <a href="#">
                                                              <img src="img/3.png">
                                                            </a>
                                                          </p>
                                                          <p>
                                                          </p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="tab-pane" id="Securityques" role="tabpanel">
                                                    <div class="col-lg-12">
                                                      <div class="col-lg-1"></div>
                                                      <div class="col-lg-10">
                                                        <br>
                                                        <div id="Security" role="tabpanel" class="tab-pane">
                                                          <div class="tab-main-content">
                                                            <div class="row">
                                                              <div style="background: #f3f3f3f3;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="editabl">
                                                                  <div class="edittable-title">
                                                                    <h2>Security Question
                                                                    </h2>
                                                                  </div>
                                                                  <div class="editable">
                                                                    <div class="password">
                                                                      <div class="password-fields">
                                                                        <div class="formbox">
                                                                          <a class="edit" href="javascript:void(0)">Edit
                                                                          </a>
                                                                          <ul class="personal-info">
                                                                            <li>
                                                                              <div class="form-group">
                                                                                <label class="col-md-12 col-sm-12 col-xs-12 control-label" style="text-align:left;">Security Questions 
                                                                                  <sup class="text-danger">*
                                                                                  </sup>
                                                                                </label>
                                                                                <div class="clearfix">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                  <div class="form-value">
                                                                                    <select name="paypal_status" class="form-control">
                                                                                      <option selected="" value="What is the first and last name of your first boyfriend or girlfriend?">What is the first and last name of your first boyfriend or girlfriend?</option>
                                                                                      <option value="Which phone number do you remember most from your childhood?">Which phone number do you remember most from your childhood?</option>
                                                                                      <option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child?</option>
                                                                                      <option value="Who is your favorite actor, musician, or artist?">Who is your favorite actor, musician, or artist?</option>
                                                                                      <option value="What is the name of your favorite pet?">What is the name of your favorite pet?
                                                                                      </option>
                                                                                      <option value="In what city were you born?">In what city were you born?</option>
                                                                                      <option value="What high school did you attend?">What high school did you attend?</option>
                                                                                      <option value="What is the name of your first school?">What is the name of your first school?
                                                                                      </option>
                                                                                      <option value="What is your favorite movie?">What is your favorite movie?</option>
                                                                                      <option value="What is your mother's maiden name?">What is your mother's maiden name?></option>
                                                                                      <option value="What street did you grow up on?">What street did you grow up on?</option>
                                                                                      <option value="What was the make of your first car?">What was the make of your first car?</option>
                                                                                      <option value="When is your anniversary?">When is your anniversary?</option>
                                                                                      <option value="What is your favorite color?">What is your favorite color?</option>
                                                                                    </select>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                  <div class="form-value">
                                                                                    <span id="CompanyName">Ashish Sharma</span>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
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
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
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



  <!-- 
  jquery 1.11
  ==================== 
  Attention: Before Remove this jquery or add any new version of jquer please try will it work or not. 
  -->

  <!-- Modal 1 -->
  <div id="newJobSearchModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Search for work</h4>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" placeholder="Title">
          <br>
          <input type="text" class="form-control" placeholder="Text Editor and Text Box here to add the Desc." style="height: 100px;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:left;">Close</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;" data-toggle="modal" data-target="#modal2">Next</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal 1 End -->

  <!-- Modal 2 -->
  <div id="modal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content" id="content_id">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Work Details</h4>
        </div>
        <div class="modal-body">
          <div class="row" style="margin-bottom:10px;">
            <div class="col-md-6">

              <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" placeholder="Post Start"/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>

            </div>
            <div class="col-md-6">
              <div class='input-group date' id='datetimepicker2'>
                <input type='text' class="form-control" placeholder="Post End"/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>

          <div class="row" style="margin-bottom:10px;">
            <div class="col-md-6">
              <select class="form-control">
                <option selected>Work Type</option>
                <option value="1">Full Time</option>
                <option value="2">Part Time</option>
              </select>
            </div>
            <div class="col-md-6">
              <select class="form-control">
                <option selected>Payment Type</option>
                <option value="1">Fix</option>
                <option value="2">Hourly</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <select class="form-control">
                <option selected>Work Start</option>
                <option value="1">Now</option>
                <option value="2">Agreement</option>
              </select>
            </div>
            <div class="col-md-6">              
              <div class='input-group date' id='datetimepicker3'>
                <input type='text' class="form-control" placeholder="By Select Date in Work Start"/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>              
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#myModal" style="float:left;">Back</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;">Publish</button>
        </div>
      </div>

    </div>
  </div>
  <!-- Modal 2 End -->



  <!-- Modal denied -->
  <div id="deniedModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Denied</h4>
        </div>
        <div class="modal-body" style="text-align:center;">
          <button type="button" class="btn btn-default" style="padding:15px 100px;"> Select Reason </button>
        </div>
        <div class="modal-footer" style="text-align: center;">
          <button type="button" class="btn vd_btn "  data-dismiss="modal" style="text-align: left;
          width: 200px;
          padding: 4px;
          border-radius: 24px;
          color: black;
          background: white;
          border: 1px solid #cbcbcb;">
          <span class="append-icon"><img src="<?php echo base_url('assets/users/img/true.png') ?>" style="width:23px;margin-right: 63px;"></span>OK</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal denied End -->

  <!-- Modal denied send-->
  <div id="deniedModal_send" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Denied</h4>
        </div>
        <div class="modal-body" style="text-align:center;">
          <button type="button" class="btn btn-default" style="padding:15px 100px;"> Select Reason </button>
        </div>
        <div class="modal-footer" style="text-align: center;">
          <button type="button" class="btn vd_btn "  data-dismiss="modal" style="text-align: left;
          width: 200px;
          padding: 4px;
          border-radius: 24px;
          color: black;
          background: white;
          border: 1px solid #cbcbcb;">
          <span class="append-icon"><img src="img/send.png" style="width:23px;margin-right: 63px;"></span>Send</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal denied send End -->

  <!-- Modal accepted -->
  <div id="acceptedModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Accepted</h4>
        </div>
        <div class="modal-body" style="text-align:center;">
          <button type="button" class="btn btn-default" style="padding:15px 100px;"> Date and Time </button>
        </div>
        <div class="modal-footer" style="text-align: center;">
          <button type="button" class="btn vd_btn "  data-dismiss="modal" style="text-align: left;
          width: 200px;
          padding: 4px;
          border-radius: 24px;
          color: black;
          background: white;
          border: 1px solid #cbcbcb;">
          <span class="append-icon"><img src="<?php echo base_url('assets/users/img/true.png') ?>" style="width:23px;margin-right: 63px;"></span>OK</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal accepted End -->


  <!-- Modal rejected -->
  <div id="rejectedModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Rejected</h4>
        </div>
        <div class="modal-body" style="text-align:center;">
          <button type="button" class="btn btn-default" style="padding:15px 100px;"> Reason </button>
        </div>
        <div class="modal-footer" style="text-align: center;">
          <button type="button" class="btn vd_btn "  data-dismiss="modal" style="text-align: left;
          width: 200px;
          padding: 4px;
          border-radius: 24px;
          color: black;
          background: white;
          border: 1px solid #cbcbcb;">
          <span class="append-icon"><img src="<?php echo base_url('assets/users/img/true.png') ?>" style="width:23px;margin-right: 63px;"></span>OK</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal rejected End -->

  <!-- Modal waiting -->
  <div id="waitingModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="ourteamdiver2" style="margin-top:0px;">
            <div class="overflowhidde2">
              <div class="ourteamblur22">

              </div>
            </div>
            <hr class="rulerourtema">
            <div class="imgeourteamperson2">
              <img src="img/testi_07.png">

            </div>
            <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>



            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Service Purchase ID</strong></h4>

            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>

            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Time and Date</strong></h4>

            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">12.07.2017 – 17:30</strong></h4>

            <h4 class="text-center2" style="font-size:15px;"><strong style="color:red">Expired Date</strong></h4>
            <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">12.10.2017 – 17:30</strong></h4>

          </div>
        </div>

        <!-- <hr class="hfkaniei"> -->
        <div class="modal-footer" style="text-align: center;">
          <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
            <div class="col-lg-6">
              <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left;
              width: 100%;
              padding: 4px;
              border-radius: 24px;
              color: black;
              background: white;
              border: 1px solid #cbcbcb;">
              <span class="append-icon" style="text-align:left;margin-right:50px;"><img src="<?php echo base_url('assets/users/img/true.png') ?>" style="width:23px;margin-right: 31px;"></span>Accepte</button></div>
              <div class="col-lg-6 ">
                <button type="button" class="btn vd_btn " data-toggle="modal" data-target="#deniedModal_send" data-dismiss="modal" style="text-align: left;
                width: 100%;
                padding: 4px;
                border-radius: 24px;
                color: black;
                background: white;
                border: 1px solid #cbcbcb;">
                <span class="append-icon" style="text-align:left;margin-right:50px;"><img src="<?php echo base_url('assets/users/img/false.png') ?>" style="width:23px;margin-right: 31px;"></span>Denied</button>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal waiting end -->

  <style>
    .input-group-addon{
      background-image: url('img/cal_icon.png');
      background-repeat: no-repeat;
      width: 33px!important;
      background-color: #fff;
    }
    .glyphicon-calendar:before {
      content: " "!important;
    }
    .input-group{
      width:100%;
    }
    .modal-content{
      overflow: visible!important;
    }
  </style>

  <style>

    .uploaded-img {
      padding-bottom: 50px;
      position: relative;
      margin-top:20px;
    }
    .uploaded-img img
    {
      max-width:100%;
    }
    .immer-img {
      left: 0;
      position: absolute;
      top: 50px;
      width: 100%;
      z-index:99
    }
    .position-absulute {
      position: absolute;
      top: 26px;
      width: 100%;
      z-index: 9;
    }
    .paper-doc
    {
      background: none repeat scroll 0 0 #fff;
      height: 30px;
      margin: auto;
      position: relative;
      border:1px solid #e1e1e1;
      transition:ease 0.4s
    }
    .paper-doc1 {
      width: 69%;
      top:0;
      transition:ease 0.4s
    }
    .paper-doc2 {
      top: -22px;
      width: 77%;
      transition:ease 0.6s;
    }
    .paper-doc3 {
      top: -43px;
      width: 80%;
    }
    .uploaded-img:hover .paper-doc1
    {
      transition:ease 0.4s;
      top: -8px;
    }
    .uploaded-img:hover .paper-doc2
    {
      transition:ease 0.6s;
      top: -26px;
    }
    .abslt-text {
      position: absolute;
      text-align: center;
      top: 72px;
      width: 100%;
      z-index: 99;
    }
    .abslt-text h4
    {
      font-size:16px;
    }
    .abslt-text p
    {
      font-size:12px;
    }
    .abslt-text span {
      background: none repeat scroll 0 0 #f5f5f5;
      border: 1px solid #e1e1e1;
      border-radius: 10px;
      font-size: 12px;
      padding: 1px 10px 2px;
    }
    .uploaded-img a
    {
      color:#555;
      text-decoration:none;
    }
  </style>


  <script>
    $(document).ready(function () {
      /***************/
      $('.show-details-btn').on('click', function (e) {
        e.preventDefault();
        $(this).closest('tr').next().toggleClass('open')
        $(this).find('.ace-icon').toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
      }
      );
      /***************/
    }
    );
    $('body').on('click', '.save', function (e) {
      $('input', $(this).parent().parent()).each(function () {
        var x = $(this);
        /*console.log(x);*/
        var id = x.attr('id');
        var v = x.val();
        var input = "<div class='form-value'><span id='" + id + "'>" + v + "<\/span><\/div>";
        x.parent().replaceWith(input);
      }
      );
      var edit = "<a href='javascript:void(0)' class='edit'>Edit<\/a>";
      $(this).parent('.sc_btn').replaceWith(edit);
    }
    );
    $('body').on('click', '.edit', function () {
      $('span', $(this).parent()).each(function () {
        var x = $(this);
        /*console.log(x);*/
        var id = x.attr('id');
        var v = x.text();
        v = v.trim();
        /* console.log(v);*/
        var span = "<input type='text' class='form-control' name='" + id + "' id='" + id + "' value='" + v + "'>";
        var hidden_el = "<span style='display:none;' class='or_value' id='" + id + "'>" + v + "<\/span>"
        x.replaceWith(span + hidden_el);
        /* console.log(x);*/
      }
      );
      var save_cancel = "<div class='sc_btn'><a href='javascript:void(0)' class='save'>Save<\/a> <a href='javascript:void(0)' class='cancel'> cancel<\/a><\/div>";
      $(this).replaceWith(save_cancel);
    }
    );
    $('body').on('click', '.cancel', function (e) {
      $('.or_value', $(this).parent().parent()).each(function () {
        var x = $(this);
        var id = x.attr('id');
        var v = x.text();
        var input = "<div class='form-value'><span id='" + id + "'>" + v + "<\/span><\/div>";
        x.parent('div').replaceWith(input);
      }
      );
      var edit = "<a href='javascript:void(0)' class='edit'>Edit<\/a>";
      $(this).parent('.sc_btn').replaceWith(edit);
    }
    );
  </script>
  <script type="text/javascript">
    //chosen select
    $(function () {
      $(".chosen-select").chosen()
      $('.chosen-container').css({
        "width": "100%"
      }
      );
    }
    );
    $(document).ready(function () {
      $('.user-profile-menu a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href");
    // activated tab
    if (target == "index.html#Settings") {
      $(".userImg").slideUp();
    } else {
      $(".userImg").slideDown();
    }
    }
    );
    }
    );
    $(document).ready(function () {
      $(".table-bordred #checkall").click(function () {
        if ($(".table-bordred #checkall").is(':checked')) {
          $(".table-bordred input[type=checkbox]").each(function () {
            $(this).prop("checked", true);
          }
          );
        } else {
          $(".table-bordred input[type=checkbox]").each(function () {
            $(this).prop("checked", false);
          }
          );
        }
      }
      );
      $("[data-toggle=tooltip]").tooltip();
    }
    );
    $(document).ready(function () {
      $("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
          $("#mytable input[type=checkbox]").each(function () {
            $(this).prop("checked", true);
          });

        } else {
          $("#mytable input[type=checkbox]").each(function () {
            $(this).prop("checked", false);
          });
        }
      });

      $("[data-toggle=tooltip]").tooltip();
    });
  </script>

