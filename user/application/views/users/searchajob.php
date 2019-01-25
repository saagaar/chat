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
  .edit-btn, .save-btn, .cancel-btn {
    background: #ffffff none repeat scroll 0 0;
    border: 1px solid #cccccc;
    cursor: pointer;
    font-weight: 600;
    height: 35px;
    position: absolute;
    right: -1px;
    top: -1px;
    transition: all 0.3s ease 0s;
    width: 76px;

  }      
  .edit-btn:hover, .save-btn:hover, .cancel-btn:hover{
    background: white;
  }

  .projectRow {
    float: left;
    margin: -2px 0 -4px !important;
    padding: 10px;
    position: relative;
    transition: all 0.2s ease 0s;
    width: 100%;
  }

</style>
<!-- /Inline Style -->


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
	<div role="tabpanel" class="tab-pane " id="SearchaJobArea">
		<div class="border-box" style="margin-top: 2px;">
			<div class=" custom-page-content">
			</div>
			<div class="main-content">
				<div class="tab-section">
					<div class="" style="background: #eee;margin-top: -10px;">
						<div class="bhoechie-tab-container">
							<div class="bhoechie-tab">
								<div class="bhoechie-tab-content" style="background: #eee;">
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
															<a href="index.html#SearchaJobAreaMyDocuments" MyContractsAreaCurrentContracts-controls="SearchaJobAreaMyDocuments" role="tab" data-toggle="tab">
																<i class="fa fa-files-o" aria-hidden="true">
																</i> My Documents

															</a>
														</li>
														<li role="presentation">
															<a href="index.html#SearchaJobAreaMyjobSearchs" MyContractsAreaCurrentContracts-controls="SearchaJobAreaMyjobSearchs" role="tab" data-toggle="tab">
																<i class="fa fa-briefcase" aria-hidden="true">
																</i> My job Searches

															</a>
														</li>
														<li role="presentation">
															<a href="index.html#SearchaJobAreaMyOffersForWork" MyContractsAreaCurrentContracts-controls="SearchaJobAreaMyOffersForWork" role="tab" data-toggle="tab">
																<i class="fa fa-coffee" aria-hidden="true">
																</i> My Offers For Work

															</a>
														</li>
														<li role="presentation">
															<a href="index.html#SearchaJobAreaRejected" MyContractsAreaCurrentContracts-controls="SearchaJobAreaRejected" role="tab" data-toggle="tab">
																<i class="fa fa-eject" aria-hidden="true">
																</i> Rejected

															</a>
														</li>
													</ul>
												</div><!-- /.navbar-collapse -->

											</div><!-- /.container-fluid -->
										</nav>

										<div class="tab-content no-t-m" style="background: #eee;">
											<div role="tabpanel" class="tab-pane  active" id="MyContractsAreaCurrentContracts">



												<div class="tab-content no-t-m">
													<div role="tabpanel" class="tab-pane  active m-t-35" id="SearchaJobAreaMyDocuments">

														<div class="tab-main-content">
															<div class="row">
																<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

																	<div class="editabl" style="margin-top:30px">

																		<div class="edittable-title">
																			<h2>My documents</h2>
																		</div>

																		<div class="editable" style="padding-top:30px;">

																			<div class="newbutton" id="" style="float: right;background: white;">
																				<button type="button" class="btn_edit1" data-toggle="modal" data-target="#addDocumentModal" style="float:left;border: 1px solid #cdcdcd;background: white;margin-top: -30px;border-top: white;font-weight: 600;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add</button>
																			</div>

																			<div class="text">                                                              
																				<div class="col-md-12">
																					<div class="uploaded-doc">
																						<div class="row">

																							<div class="col-md-3 col-sm-4 col-xs-12 padding15">
																								<div class="uploaded-img">
																									<a href="">
																										<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
																										<div class="immer-img">
																											<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
																										</div>
																										<div class="position-absulute">
																											<div class="paper-doc1 paper-doc"></div>
																											<div class="paper-doc2 paper-doc"></div>
																											<div class="paper-doc3 paper-doc"></div>
																										</div>
																										<div class="abslt-text">
																											<h4>Document Name</h4>
																											<p>Sub Title</p>
																											<span>1 Document</span>
																										</div>
																									</a>
																								</div>
																								<div class="upload-actions">
																									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#editDocumentModal"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
																									<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#removeDocumentModal"><span class="fa fa-times" aria-hidden="true"></span></button>
																								</div>
																							</div>

																							<div class="col-md-3 col-sm-4 col-xs-12 padding15">
																								<div class="uploaded-img">
																									<a href="">
																										<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
																										<div class="immer-img">
																											<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
																										</div>
																										<div class="position-absulute">
																											<div class="paper-doc1 paper-doc"></div>
																											<div class="paper-doc2 paper-doc"></div>
																											<div class="paper-doc3 paper-doc"></div>
																										</div>
																										<div class="abslt-text">
																											<h4>Document Name</h4>
																											<p>Sub Title</p>
																											<span>1 Document</span>
																										</div>
																									</a>
																								</div>
																								<div class="upload-actions">
																									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#editDocumentModal"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
																									<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#removeDocumentModal"><span class="fa fa-times" aria-hidden="true"></span></button>
																								</div>
																							</div>

																							<div class="col-md-3 col-sm-4 col-xs-12 padding15">
																								<div class="uploaded-img">
																									<a href="">
																										<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
																										<div class="immer-img">
																											<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
																										</div>
																										<div class="position-absulute">
																											<div class="paper-doc1 paper-doc"></div>
																											<div class="paper-doc2 paper-doc"></div>
																											<div class="paper-doc3 paper-doc"></div>
																										</div>
																										<div class="abslt-text">
																											<h4>Document Name</h4>
																											<p>Sub Title</p>
																											<span>1 Document</span>
																										</div>
																									</a>
																								</div>
																								<div class="upload-actions">
																									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#editDocumentModal"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
																									<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#removeDocumentModal"><span class="fa fa-times" aria-hidden="true"></span></button>
																								</div>
																							</div>

																							<div class="col-md-3 col-sm-4 col-xs-12 padding15">
																								<div class="uploaded-img">
																									<a href="">
																										<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
																										<div class="immer-img">
																											<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
																										</div>
																										<div class="position-absulute">
																											<div class="paper-doc1 paper-doc"></div>
																											<div class="paper-doc2 paper-doc"></div>
																											<div class="paper-doc3 paper-doc"></div>
																										</div>
																										<div class="abslt-text">
																											<h4>Document Name</h4>
																											<p>Sub Title</p>
																											<span>1 Document</span>
																										</div>
																									</a>
																								</div>
																								<div class="upload-actions">
																									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#editDocumentModal"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
																									<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#removeDocumentModal"><span class="fa fa-times" aria-hidden="true"></span></button>
																								</div>
																							</div>

																							<div class="col-md-3 col-sm-4 col-xs-12 padding15">
																								<div class="uploaded-img">
																									<a href="">
																										<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
																										<div class="immer-img">
																											<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
																										</div>
																										<div class="position-absulute">
																											<div class="paper-doc1 paper-doc"></div>
																											<div class="paper-doc2 paper-doc"></div>
																											<div class="paper-doc3 paper-doc"></div>
																										</div>
																										<div class="abslt-text">
																											<h4>Document Name</h4>
																											<p>Sub Title</p>
																											<span>1 Document</span>
																										</div>
																									</a>
																								</div>
																								<div class="upload-actions">
																									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#editDocumentModal"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
																									<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#removeDocumentModal"><span class="fa fa-times" aria-hidden="true"></span></button>
																								</div>
																							</div>

																							<div class="col-md-3 col-sm-4 col-xs-12 padding15">
																								<div class="uploaded-img">
																									<a href="">
																										<img src="https://infograins.com/INFODE/pankaj/dj/inner-box.png">
																										<div class="immer-img">
																											<img src="https://infograins.com/INFODE/pankaj/dj/box.png">
																										</div>
																										<div class="position-absulute">
																											<div class="paper-doc1 paper-doc"></div>
																											<div class="paper-doc2 paper-doc"></div>
																											<div class="paper-doc3 paper-doc"></div>
																										</div>
																										<div class="abslt-text">
																											<h4>Document Name</h4>
																											<p>Sub Title</p>
																											<span>1 Document</span>
																										</div>
																									</a>
																								</div>
																								<div class="upload-actions">
																									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#editDocumentModal"><span class="fa fa-pencil-square-o" aria-hidden="true"></span></button>
																									<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#removeDocumentModal"><span class="fa fa-times" aria-hidden="true"></span></button>
																								</div>
																							</div>

																						</div>
																					</div>
																				</div>
																			</div>                                                                              
																			<div class="text_div" style="display:none">
																				<textarea id="in_text" class="form-control textarea"></textarea>
																			</div>
																		</div>
																	</div>       
																</div>
															</div>
														</div>
													</div>

													<div role="tabpanel" class="tab-pane m-t-35" id="SearchaJobAreaMyjobSearchs">
														<div class="vd_content-section clearfix" style="margin-top: -38px;">
															<div class="row">
																<div class="col-md-12" style="margin-top: 35px;">
																	<div class="tab-content no-bd mrgn0 pdng0">
																		<div class="tab-pane active fade in" id="category1">



																			<div class="container">
																				<div class="row">
																					<div class="col-md-12">

																						<div class="table-responsive">
																							<table id="mytable" class="table table-bordred table-striped">
																								<thead>

																									<th>No 
																									</th>
																									<th>Title
																									</th>
																									<th>Work Type
																									</th>                                             
																									<th>Work Time
																									</th>
																									<th>Work Start
																									</th>
																									<th>Start Date
																									</th>
																									<th>End Date
																									</th>
																									<th>Option
																									</th>
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

																											<p data-toggle="modal" data-target="#searchajobMyJObSearchEdit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" onclick="editmyjob()"><span class="glyphicon glyphicon-pencil"></span></button></p>

																											<p data-placement="top" data-toggle="tooltip" title="" data-original-title="View" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="View" data-toggle="modal" data-target="#viewJobSearchModal" style="background-color: #23709e;border: none;padding-bottom: 2px;"><span class="fa fa-eye" aria-hidden="true"></span></button></p>

																											<p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#removeJobModal" style="  padding-left: 6px;
																											padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
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

																											<p data-toggle="modal" data-target="#searchajobMyJObSearchEdit" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit5"><span class="glyphicon glyphicon-pencil"></span></button></p>

																											<p data-placement="top" data-toggle="tooltip" title="" data-original-title="View" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="View" data-toggle="modal" data-target="#viewJobSearchModal" style="background-color: #23709e;border: none;padding-bottom: 2px;"><span class="fa fa-eye" aria-hidden="true"></span></button></p>

																											<p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#removeJobModal" style="  padding-left: 6px;
																											padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
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
																										<td><p data-toggle="modal" data-target="#searchajobMyJObSearchEdit" style="float:left;margin-right: 8px;">

																											<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit5"><span class="glyphicon glyphicon-pencil"></span></button></p>

																											<p data-placement="top" data-toggle="tooltip" title="" data-original-title="View" style="float:left;margin-right: 8px;"><button class="btn btn-primary btn-xs" data-title="View" data-toggle="modal" data-target="#viewJobSearchModal" style="background-color: #23709e;border: none;padding-bottom: 2px;"><span class="fa fa-eye" aria-hidden="true"></span></button></p>

																											<p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete" style="float:left"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#removeJobModal" style="  padding-left: 6px;
																											padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button></p>
																										</td>
																									</tr>

																								</tbody>
																							</table>
																							<div class="clearfix">
																							</div>
																							<ul class="pagination pull-right">
																								<li class="disabled">
																									<a href="#">
																										<span class="glyphicon glyphicon-chevron-left">
																										</span>
																									</a>
																								</li>
																								<li class="active">
																									<a href="#">1
																									</a>
																								</li>
																								<li>
																									<a href="#">2
																									</a>
																								</li>
																								<li>
																									<a href="#">3
																									</a>
																								</li>
																								<li>
																									<a href="#">4
																									</a>
																								</li>
																								<li>
																									<a href="#">5
																									</a>
																								</li>
																								<li>
																									<a href="#">
																										<span class="glyphicon glyphicon-chevron-right">
																										</span>
																									</a>
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
																				<div class="modal-dialog">
																					<div class="modal-content">
																						<div class="modal-header">
																							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																								<span class="glyphicon glyphicon-remove" aria-hidden="true">
																								</span>
																							</button>
																							<h4 class="modal-title custom_align" id="Heading">Edit Your Detail
																							</h4>
																						</div>
																						<div class="modal-body">
																							<div class="form-group">
																								<input class="form-control " type="text" placeholder="Mohsin">
																							</div>
																							<div class="form-group">
																								<input class="form-control " type="text" placeholder="Irshad">
																							</div>
																							<div class="form-group">
																								<textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan">
																								</textarea>
																							</div>
																						</div>
																						<div class="modal-footer ">
																							<button type="button" class="btn btn-warning btn-lg" style="width: 100%;">
																								<span class="glyphicon glyphicon-ok-sign">
																								</span> Update
																							</button>
																						</div>
																					</div>
																					<!-- /.modal-content --> 
																				</div>
																				<!-- /.modal-dialog --> 
																			</div>
																			<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
																				<div class="modal-dialog">
																					<div class="modal-content">
																						<div class="modal-header">
																							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																								<span class="glyphicon glyphicon-remove" aria-hidden="true">
																								</span>
																							</button>
																							<h4 class="modal-title custom_align" id="Heading">Delete this entry
																							</h4>
																						</div>
																						<div class="modal-body">
																							<div class="alert alert-danger">
																								<span class="glyphicon glyphicon-warning-sign">
																								</span> Are you sure you want to delete this Record?
																							</div>
																						</div>
																						<div class="modal-footer ">
																							<button type="button" class="btn btn-success" >
																								<span class="glyphicon glyphicon-ok-sign">
																								</span> Yes
																							</button>
																							<button type="button" class="btn btn-default" data-dismiss="modal">
																								<span class="glyphicon glyphicon-remove">
																								</span> No
																							</button>
																						</div>
																					</div>
																					<!-- /.modal-content --> 
																				</div>
																				<!-- /.modal-dialog --> 
																			</div>


																		</div>

																	</div>
																	<!-- tab-content end -->
																</div>
																<!-- Projects List col-md-10 end -->
															</div>
															<!-- row end -->
														</div>
													</div>
													<div role="tabpanel" class="tab-pane " id="SearchaJobAreaMyOffersForWork">
														<div class="vd_content-section clearfix" style="margin-top: 31px; background: #eee; border-top: #eee;">
															<div class="row">
																<div class="col-md-12">
																	<div class="tab-content no-bd mrgn0 pdng0">
																		<div class="tab-pane active fade in" id="category1">
																			<div class="panel widget container-fluid">

																				<div class="row mrgn30-0 projectRow">
																					<a href="javascript:void(0);" data-toggle="modal" data-target="#MyOffersForWorkWaiting" title="" class="notice notice-success" style="color: black;">

																						<div class="col-sm-4 brdRight">
																							<img src="img/mini.png" alt="" style="float: left;">
																							<div class="text-con">
																								<h4>Company Name</h4>
																								<p style="color: black;">Company ID</p>
																							</div>
																						</div>
																						<div class="col-sm-2 brdRight text-align">
																							<h4>Request Time</h4>
																							<p style="color: black;">16.03.2017 -12:45</p>
																						</div>
																						<div class="col-sm-2 brdRight text-align">
																							<h4>Work Start</h4>
																							<p style="color: black;">20.03.2017 -13:00 Uhr</p>
																						</div>

																						<div class="col-sm-2 text-align brdRight">
																							<h4>Status</h4>
																							<h2 style="color: #ef9d1f;">Waiting</h2>
																						</div>
																						<div class="col-sm-2 text-align">
																							<h4 style="margin:0;">Options</h4>
																							<h4 class="text-height">
																								<button type="button" class="btn btn-primary "><i class="fa fa-eye" aria-hidden="true"></i>View</button>
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
															<div class="row">
																<div class="col-md-12">
																	<div class="tab-content no-bd mrgn0 pdng0">
																		<div class="tab-pane active fade in" id="category1">
																			<div class="panel widget container-fluid">
																				<div class="row mrgn30-0 projectRow">
																					<a href="javascript:void(0);" data-toggle="modal" data-target="#MyOffersForWorkCanceled" title="" class="notice notice-success" style="color: black;">

																						<div class="col-sm-4 brdRight">
																							<img src="img/mini.png" alt="" style="float: left;">
																							<div class="text-con">
																								<h4>Company Name</h4>
																								<p style="color: black;">Company ID</p>
																							</div>

																						</div>
																						<div class="col-sm-2 brdRight text-align">
																							<h4>Request Time</h4>
																							<p style="color: black;">16.03.2017 -12:45</p>
																						</div>
																						<div class="col-sm-2 brdRight text-align">
																							<h4>Work Start</h4>
																							<p style="color: black;">20.03.2017 -13:00 Uhr</p>
																						</div>


																						<div class="col-sm-2 text-align brdRight">
																							<h4>Status</h4>
																							<h2 style="color: #ff0000;">Canceled</h2>

																						</div>
																						<div class="col-sm-2 text-align">
																							<h4 style="margin:0;">Options
																							</h4>
																							<h4 class="text-height">
																								<button type="button" class="btn btn-primary "><i class="fa fa-eye" aria-hidden="true"></i>View</button></h4>
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
																<div class="row">
																	<div class="col-md-12">
																		<div class="tab-content no-bd mrgn0 pdng0">
																			<div class="tab-pane active fade in" id="category1">
																				<div class="panel widget container-fluid">
																					<div class="row mrgn30-0 projectRow">
																						<a href="javascript:void(0);" data-toggle="modal" data-target="#MyOffersForWorkAccepted" title="" class="notice notice-success" style="color: black;">

																							<div class="col-sm-4 brdRight">
																								<img src="img/mini.png" alt="" style="float: left;">
																								<div class="text-con">
																									<h4>Company Name</h4>
																									<p style="color: black;">Company ID</p>
																								</div>

																							</div>
																							<div class="col-sm-2 brdRight text-align">
																								<h4>Request Time</h4>
																								<p style="color: black;">16.03.2017 -12:45</p>
																							</div>
																							<div class="col-sm-2 brdRight text-align">
																								<h4>Work Start</h4>
																								<p style="color: black;">20.03.2017 -13:00 Uhr</p>
																							</div>


																							<div class="col-sm-2 text-align brdRight">
																								<h4>Status</h4>
																								<h2 style="color: #408e40;">Accepted</h2>

																							</div>
																							<div class="col-sm-2 text-align">
																								<h4 style="margin:0;">Options
																								</h4>
																								<h4 class="text-height">
																									<button type="button" class="btn btn-primary "><i class="fa fa-eye" aria-hidden="true"></i>View</button></h4>
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

																</div>
															</div>

															<div role="tabpanel" class="tab-pane  " id="SearchaJobAreaRejected">
																<div class="vd_content-section clearfix" style="margin-top: -3px; background: #eee;">

																	<div class="row">
																		<div class="col-md-12"  style="margin-top: 35px;">
																			<div class="tab-content no-bd mrgn0 pdng0">
																				<div class="tab-pane active fade in" id="category1">
																					<div class="panel widget container-fluid">
																						<div class="row mrgn30-0 projectRow">
																							<a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">

																								<div class="col-sm-4 brdRight">
																									<img src="img/mini.png" alt="" style="float: left;">
																									<div class="text-con">
																										<h4>Company Name</h4>
																										<p style="color: black;">Company ID</p>
																									</div>

																								</div>
																								<div class="col-sm-4 brdRight text-align">
																									<h4>Request Time</h4>
																									<p style="color: black;">16.03.2017 -12:45</p>
																								</div>

																								<div class="col-sm-4 text-align brdRight"  data-toggle="modal" data-target="#rejectedjob">
																									<h4>Status</h4>
																									<h2 style="color: #ff0000;">Rejected</h2>
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
															</div>
														</div>
														<!--second section-->

														<div class="clearfix">
														</div>
														<br>
													</div>
													<div role="tabpanel" class="tab-pane  " id="MyContractsAreaContractsdisputes">
														<div class="row pdng10-0 searchBar">
															<form>
																<div class="col-md-2 col-md-offset-2">
																	<div>
																		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
																		</span>
																		<input class="ui-autocomplete-input" type="text" placeholder="Contract ID" id="project-autocomplete" autocomplete="off">
																	</div>
																</div>
																<div class="col-md-2">
																	<div>
																		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
																		</span>
																		<input class="ui-autocomplete-input" type="text" placeholder="User Name" id="company-autocomplete" autocomplete="off">
																	</div>
																</div>
																<div class="col-md-2">
																	<div>
																		<select>
																			<option value="" disabled="" selected="">Status
																			</option>
																			<option value="1">On Hold
																			</option>
																			<option value="2">Denied
																			</option>
																			<option value="3">Blocked
																			</option>
																			<option value="4">Removed
																			</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-2">
																	<button type="button" class="btn vd_btn vd_bg-blue" data-toggle="modal" data-target="" style="max-height:32px;color: white;">
																		<span class="append-icon">
																			<i class="fa fa-search fa-fw">
																			</i>
																		</span>Search Projects
																	</button>
																</div>
															</form>
														</div>







														<!--second section-->
														<div class="vd_content-section clearfix">
															<div class="row">
																<div class="col-md-12">
																	<div class="tab-content no-bd mrgn0 pdng0">
																		<div class="tab-pane active fade in" id="category1">
																			<div class="panel widget container-fluid">
																				<div class="row mrgn30-0 projectRow">
																					<a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
																						<div class="col-sm-2 brdRight">
																							<img src="img/briant2.png" alt="" class="projectImg">
																						</div>
																						<div class="col-sm-4 brdRight">
																							<h4>Design Concept
																							</h4>
																							<p class="mrgn5">Work Start: 05-07-2017 12:05:00
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">In Progress
																								</span>
																							</p>
																						</div>
																						<div class="col-sm-2  brdRight">
																							<div class="circleBar" data-percent="65">
																								<div style="width: 100px; height: 100px;">
																									<div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
																										<div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
																											<span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
																											</span>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-sm-2 brdRight">
																							<h4>All Tasks
																							</h4>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">0
																								</span> Pending
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">1
																								</span> Behind
																							</p>
																						</div>
																						<div class="col-sm-2 contractLogo">
																							<img src="img/mini.png" alt="">
																						</div>
																					</a>
																				</div>
																				<div class="row mrgn30-0 projectRow">
																					<a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
																						<div class="col-sm-2 brdRight">
																							<img src="img/briant2.png" alt="" class="projectImg">
																						</div>
																						<div class="col-sm-4 brdRight">
																							<h4>Design Concept
																							</h4>
																							<p class="mrgn5">Work Start: 05-07-2017 12:05:00
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">In Progress
																								</span>
																							</p>
																						</div>
																						<div class="col-sm-2  brdRight">
																							<div class="circleBar" data-percent="65">
																								<div style="width: 100px; height: 100px;">
																									<div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
																										<div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
																											<span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
																											</span>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-sm-2 brdRight">
																							<h4>All Tasks
																							</h4>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">0
																								</span> Pending
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">1
																								</span> Behind
																							</p>
																						</div>
																						<div class="col-sm-2 contractLogo">
																							<img src="img/mini.png" alt="">
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
													<div role="tabpanel" class="tab-pane  " id="MyContractsAreaCancelledContracts">
														<div class="row pdng10-0 searchBar">
															<form>
																<div class="col-md-2 col-md-offset-2">
																	<div>
																		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
																		</span>
																		<input class="ui-autocomplete-input" type="text" placeholder="Contract ID" id="project-autocomplete" autocomplete="off">
																	</div>
																</div>
																<div class="col-md-2">
																	<div>
																		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
																		</span>
																		<input class="ui-autocomplete-input" type="text" placeholder="User Name" id="company-autocomplete" autocomplete="off">
																	</div>
																</div>
																<div class="col-md-2">
																	<div>
																		<select>
																			<option value="" disabled="" selected="">Status
																			</option>
																			<option value="1">On Hold
																			</option>
																			<option value="2">Denied
																			</option>
																			<option value="3">Blocked
																			</option>
																			<option value="4">Removed
																			</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-2">
																	<button type="button" class="btn vd_btn vd_bg-blue" data-toggle="modal" data-target="" style="max-height:32px;color: white;">
																		<span class="append-icon">
																			<i class="fa fa-search fa-fw">
																			</i>
																		</span>Search Projects
																	</button>
																</div>
															</form>
														</div>
														<!--second section-->
														<div class="vd_content-section clearfix">
															<div class="row">
																<div class="col-md-12">
																	<div class="tab-content no-bd mrgn0 pdng0">
																		<div class="tab-pane active fade in" id="category1">
																			<div class="panel widget container-fluid">
																				<div class="row mrgn30-0 projectRow">
																					<a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
																						<div class="col-sm-2 brdRight">
																							<img src="img/briant3.png" alt="" class="projectImg">
																						</div>
																						<div class="col-sm-4 brdRight">
																							<h4>Design Concept
																							</h4>
																							<p class="mrgn5">Work Start: 05-07-2017 12:05:00
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">In Progress
																								</span>
																							</p>
																						</div>
																						<div class="col-sm-2  brdRight">
																							<div class="circleBar" data-percent="65">
																								<div style="width: 100px; height: 100px;">
																									<div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
																										<div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
																											<span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
																											</span>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-sm-2 brdRight">
																							<h4>All Tasks
																							</h4>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">0
																								</span> Pending
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">1
																								</span> Behind
																							</p>
																						</div>
																						<div class="col-sm-2 contractLogo">
																							<img src="img/mini.png" alt="">
																						</div>
																					</a>
																				</div>
																				<div class="row mrgn30-0 projectRow">
																					<a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
																						<div class="col-sm-2 brdRight">
																							<img src="img/briant3.png" alt="" class="projectImg">
																						</div>
																						<div class="col-sm-4 brdRight">
																							<h4>Design Concept
																							</h4>
																							<p class="mrgn5">Work Start: 05-07-2017 12:05:00
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">In Progress
																								</span>
																							</p>
																						</div>
																						<div class="col-sm-2  brdRight">
																							<div class="circleBar" data-percent="65">
																								<div style="width: 100px; height: 100px;">
																									<div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
																										<div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
																											<span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
																											</span>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-sm-2 brdRight">
																							<h4>All Tasks
																							</h4>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">0
																								</span> Pending
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">1
																								</span> Behind
																							</p>
																						</div>
																						<div class="col-sm-2 contractLogo">
																							<img src="img/mini.png" alt="">
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
													<div role="tabpanel" class="tab-pane  " id="MyContractsAreaContractsDone">
														<div class="row pdng10-0 searchBar">
															<form>
																<div class="col-md-2 col-md-offset-2">
																	<div>
																		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
																		</span>
																		<input class="ui-autocomplete-input" type="text" placeholder="Contract ID" id="project-autocomplete" autocomplete="off">
																	</div>
																</div>
																<div class="col-md-2">
																	<div>
																		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
																		</span>
																		<input class="ui-autocomplete-input" type="text" placeholder="User Name" id="company-autocomplete" autocomplete="off">
																	</div>
																</div>
																<div class="col-md-2">
																	<div>
																		<select>
																			<option value="" disabled="" selected="">Status
																			</option>
																			<option value="1">On Hold
																			</option>
																			<option value="2">Denied
																			</option>
																			<option value="3">Blocked
																			</option>
																			<option value="4">Removed
																			</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-2">
																	<button type="button" class="btn vd_btn vd_bg-blue" data-toggle="modal" data-target="" style="max-height:32px;color: white;">
																		<span class="append-icon">
																			<i class="fa fa-search fa-fw">
																			</i>
																		</span>Search Projects
																	</button>
																</div>
															</form>
														</div>
														<!--second section-->
														<div class="vd_content-section clearfix">
															<div class="row">
																<div class="col-md-12">
																	<div class="tab-content no-bd mrgn0 pdng0">
																		<div class="tab-pane active fade in" id="category1">
																			<div class="panel widget container-fluid">
																				<div class="row mrgn30-0 projectRow">
																					<a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
																						<div class="col-sm-2 brdRight">
																							<img src="img/briant.png" alt="" class="projectImg">
																						</div>
																						<div class="col-sm-4 brdRight">
																							<h4>Design Concept
																							</h4>
																							<p class="mrgn5">Work Start: 05-07-2017 12:05:00
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">In Progress
																								</span>
																							</p>
																						</div>
																						<div class="col-sm-2  brdRight">
																							<div class="circleBar" data-percent="65">
																								<div style="width: 100px; height: 100px;">
																									<div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
																										<div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
																											<span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
																											</span>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-sm-2 brdRight">
																							<h4>All Tasks
																							</h4>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">0
																								</span> Pending
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">1
																								</span> Behind
																							</p>
																						</div>
																						<div class="col-sm-2 contractLogo">
																							<img src="img/mini.png" alt="">
																						</div>
																					</a>
																				</div>
																				<div class="row mrgn30-0 projectRow">
																					<a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
																						<div class="col-sm-2 brdRight">
																							<img src="img/briant.png" alt="" class="projectImg">
																						</div>
																						<div class="col-sm-4 brdRight">
																							<h4>Design Concept
																							</h4>
																							<p class="mrgn5">Work Start: 05-07-2017 12:05:00
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">In Progress
																								</span>
																							</p>
																						</div>
																						<div class="col-sm-2  brdRight">
																							<div class="circleBar" data-percent="65">
																								<div style="width: 100px; height: 100px;">
																									<div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
																										<div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
																											<span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">65%
																											</span>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="col-sm-2 brdRight">
																							<h4>All Tasks
																							</h4>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">0
																								</span> Pending
																							</p>
																							<p class="mrgn5">
																								<span class="label label-default vd_bg-blue vd_white">1
																								</span> Behind
																							</p>
																						</div>
																						<div class="col-sm-2 contractLogo">
																							<img src="img/mini.png" alt="">
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


<!-- add document modal -->
<div class="modal fade" id="addDocumentModal" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content ">
            <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
                <h4 class="modal-title" id="myModalLabel"> Add your project image annd detail here </h4>
            </div>
            <form action="<?php echo base_url('searchjob/addDocument') ?>" method="POST">
            <div class="modal-body ">
                <div class="row ">
                    <div class="col-md-12">

                    		<div class="img-pop-data">
                                <div class="multi-img ">
                                    <input type="text" name="project_title" id="project_title" class="form-control" placeholder=" Project Title">
                                </div>
                                    
                                <div class="multi-img">
                                	<textarea class="form-control" name="project_detail" id="project_detail" placeholder=" Project detail here "></textarea>
                                    <div class="clearfix"></div>
                                </div>

                            	<label class="upload-bg">add your Project Image here</label>
                                <div class="multi-img ">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-preview thumbnail"></div><br><span class="btn btn-default btn-file svgimg "> <span class="fileupload-new">
                                        	<img src="<?php echo base_url('assets/users/img/upload.png') ?>"></span> <span class="fileupload-exists">Change</span>
                                        	<input type="file" name="document_file" id="document_file" /> </span> 
                                        	<a href="post-job.html#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">
                                        		<i class="fa fa-close"></i>
                                        	</a> 
									</div>
                                </div>
                            </div>

                            <?php /* ?>
                            <div class="tab-header">
                                <ul>
                                    <li class="active"><a href="#image" data-toggle="tab" class="tab-btn">image</a></li>
                                    <li><a href="#detail" data-toggle="tab" class="tab-btn">Title</a></li>
                                    <!-- <li><a href="#desc" data-toggle="tab " class="tab-btn">Description</a></li> -->
                                </ul>
                            </div>
                            <div class="tab-content">

                                <div class="tab-pane active" id="image">
                                    <div class="img-pop-data"><label class="upload-bg">add your Project Image here</label>
                                        <div class="multi-img ">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail"></div><br><span class="btn btn-default btn-file svgimg "> <span class="fileupload-new">
                                                	<img src="<?php echo base_url('assets/users/img/upload.png') ?>"></span> <span class="fileupload-exists">Change</span><input type="file"></span> <a href="post-job.html#" class="btn btn-default fileupload-exists" data-dismiss="fileupload"><i class="fa fa-close
                                                                "></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="detail">
                                    <div class="img-pop-data"><label class="upload-bg">add your Project Title here</label>
                                        <div class="multi-img ">
                                            <input type="text " class="form-control" placeholder=" Project Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="desc">
                                    <div class="img-pop-data"><label class="upload-bg">add your Project detail here</label>
                                        <div class="multi-img"><textarea class="form-control" placeholder=" Project detail here "></textarea>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                            <?php */ ?>
                        
                    </div>
                </div>
            </div>
            <!-- /body -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Create</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- add document modal -->


<!-- edit document modal -->
<div class="modal fade" id="editDocumentModal" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-md">
    <div class="modal-content ">
      <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
        <h4 class="modal-title" id="myModalLabel"> Add your project image annd detail here </h4>
      </div>
      <form action="" method="POST">
        <div class="modal-body ">
          <div class="row ">
            <div class="col-md-12">

              <div class="tab-header">
                <ul>
                  <li class="active"><a href="#editimage" data-to-open="editImage" data-toggle="tab" class="tab-btn">image</a></li>
                  <li><a href="#editdetail" data-to-open="editDetail" data-toggle="tab" class="tab-btn ">Title</a></li>
                  <!-- <li><a href="#desc" data-toggle="tab " class="tab-btn">Description</a></li> -->
                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane active" id="editimage">
                  <div class="img-pop-data"><label class="upload-bg">add your Project Image here</label>
                    <div class="multi-img ">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail"></div><br><span class="btn btn-default btn-file svgimg "> <span class="fileupload-new"><img src="<?php echo base_url('assets/users/img/upload.png') ?>"></span> <span class="fileupload-exists">Change</span><input type="file"></span> <a href="post-job.html#" class="btn btn-default fileupload-exists " data-dismiss="fileupload"><i class="fa fa-close
                          "></i></a> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="editdetail">
                  <div class="img-pop-data"><label class="upload-bg">add your Project Title here</label>
                    <div class="multi-img "><input type="text " class="form-control" placeholder=" Project Title "></div>
                  </div>
                </div>
                <div class="tab-pane" id="desc">
                  <div class="img-pop-data"><label class="upload-bg">add your Project detail here</label>
                    <div class="multi-img"><textarea class="form-control" placeholder=" Project detail here "></textarea>
                      <div class="clearfix"></div>
                      <!-- <button type="submit " class="btn btn-primary pull-right">Submit</button></div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Save Changes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- edit document modal -->

<!-- remove document -->
<div class="modal fade" id="removeDocumentModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;padding-left: 17px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align text-center2" id="Heading">Delete</h4>
      </div>
      <div class="modal-body" tabindex="5" style="overflow: hidden; outline: none;">                    
        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete?</div>
      </div>
      <!-- /.modal-content -->
      <div class="modal-footer"> 
        <button type="button" class="btn btn-success btn-primary mr-auto pull-left"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button> 
        <button type="button" class="btn btn-danger btn-secondary pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button> 
      </div> 
    </div>
  </div>
</div>
<!-- remove document -->


<div id="searchajobAddNewJobSearch" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style="overflow: hidden; outline: none;width:520px;padding:0px;margin:auto;padding-bottom: 0;">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Search For Work</h4>
            </div>
            <div class="modal-body">
                <div>
                    <input class="m-b-10" type="text" name="jobName" placeholder=" Title">
                    <textarea id="searchajobAddNewJobSearchcke" class="m-t-15" placeholder="Type here..."></textarea>
                    <script>
                        CKEDITOR.replace('searchajobAddNewJobSearchcke', {
                            extraPlugins: 'autogrow',
                            toolbarGroups: [
                                {"name":"basicstyles","groups":["basicstyles"]},
                                {"name":"paragraph","groups":["list","block"]}
                            ],                                    
                            removeButtons: 'Underline,Subscript,Superscript,Anchor,Styles,Specialchar'
                        });
                    </script>
                </div>
            </div>
            <div class="modal-footer" style="background-color: grey;margin:0px;padding:0px">
                    <div class="pull-right" style="border:none;height: 30px;">
                        <button  class="btn okbnt" style="font-size: 18px; width:100px;height: 30px;background-color: #6cb5f3;border:none;border-radius: 0px;" data-dismiss="modal" data-toggle="modal" data-target="#searchajobAddNewJobSearchNext">
                            <span class="append-icon"></span>Next</button>
                    </div>
            </div>
        </div>

    </div>
</div>

<!-- Next -->
<div id="searchajobAddNewJobSearchNext" class="modal fade p-t-100" role="dialog">
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
                    <div class="col-lg-6 " style="padding:0px; height: 30px"><button type="button" class="btn okbnt pull-left" style="font-size: 18px;width:100px;height: 30px; background-color: #6cb5f3;border:none;border-radius: 0px;padding: 0px;" data-dismiss="modal" data-toggle="modal" data-target="#searchajobAddNewJobSearch">
                            <span class="append-icon"></span>Back</button></div>
                    <div class="col-lg-6" style="padding:0px; height: 30px">
                        <button type="button" class="btn okbnt pull-right" style="font-size: 18px;width:100px;height: 30px; background-color: #6cb5f3;border:none;border-radius: 0px;padding: 0px;" data-dismiss="modal" data-toggle="modal" data-target="#searchajobAddNewJobSearchNextPublish">
                            <span class="append-icon"></span>Publish</button>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Next -->


<!-- Publish -->
<div id="searchajobAddNewJobSearchNextPublish" class="modal fade p-t-100" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="overflow: hidden; outline: none;width:520px;padding:0px;margin:auto;padding-bottom: 0;">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Notification</h4>
            </div>
            <div class="modal-body text-center">
                <h4 style="color:red;">!! Please Note !!</h5>
                <h4 style="color:red;">Your offer will be viewed from admin</h5>
            </div>
            <div class="modal-footer" style="background-color: grey;margin:0px;padding:0px">
                <div class="col-lg-12" style="padding:0px; height: 30px">
                    <div class="col-lg-6 " style="padding:0px; height: 30px"><button type="button" class="btn okbnt pull-left" style="font-size: 18px;width:100px;height: 30px; background-color: #6cb5f3;border:none;border-radius: 0px;padding: 0px;" data-dismiss="modal" data-toggle="modal" data-target="#searchajobAddNewJobSearchNext">
                            <span class="append-icon"></span>Back</button></div>
                    <div class="col-lg-6 " style="padding:0px; height: 30px">

                        <button type="button" class="btn okbnt" style="font-size: 18px;width:100px;height: 30px; background-color: #6cb5f3;border:none;border-radius: 0px;padding: 0px;" data-dismiss="modal" data-toggle="modal" data-target="#">
                            <span class="append-icon"></span>Send</button>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Publish -->


<!-- view job search modal -->
<div class="modal fade" id="viewJobSearchModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;padding-left: 17px;">
    <div class="modal-dialog">
        <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align text-center2" id="Heading">View Search Job</h4>
            </div>
            <div class="ourteamdiver2">
                <div class="overflowhidde2">
                    <div class="ourteamblur22"> </div>
                </div>
                <hr class="rulerourtema">
                <div class="imgeourteamperson2"> <img src="<?php echo base_url('assets/img/testi_07.png') ?>"> </div>
                <h3 class="ourteamjopposition22 text-center2">Looking blog writer for our blog </h3>
                <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">Publisher :</strong> <a href="Profile.html">Amanda Sun</a></h4>
                <hr class="rulermatchserc">
                <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">In :</strong>Article Writing</h4>
                <hr class="rulermatchserc">
                <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">Date :</strong>23.06.2016</h4>
                <hr class="rulermatchserc">
                <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">Workstart :</strong>Agreement</h4>
                <hr class="rulermatchserc">
                <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">Payment :</strong>Fix</h4>
                <hr class="rulermatchserc">
                <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">Worktype :</strong>part time</h4>
                <hr class="rulermatchserc">
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
</div>
<!-- /view search job moda -->


<!-- remove job -->
<div class="modal fade" id="removeJobModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;padding-left: 17px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align text-center2" id="Heading">Delete</h4>
            </div>
            <div class="modal-body" tabindex="5" style="overflow: hidden; outline: none;">                    
                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete?</div>
            </div>
            <!-- /.modal-content -->
            <div class="modal-footer"> 
                <button type="button" class="btn btn-success btn-primary mr-auto pull-left"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button> 
                <button type="button" class="btn btn-danger btn-secondary pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button> 
            </div> 
        </div>
    </div>
</div>
<!-- remove job -->


<!-- My Offer For Work -->
<div class="modal fade  " id="MyOffersForWorkWaiting" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;padding-left: 17px;">
    <div class="modal-dialog">
        <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align text-center2" id="Heading">New Appionemts</h4>
            </div>
            <div class="ourteamdiver2 text-center" style="margin-top:0px;">
                <div class="ov">
                    <div>
                        <div class="cardheader"></div>
                        <img class="img" src="<?php echo base_url('assets/users/img/logo_2.jpg') ?>" alt="">
                    </div>
                    <h3 class="username">
                        <b>Amanda Sun</b>
                    </h3>
                    <br>
                    <h5>
                        <b style="color: red">Notification</b>
                    </h5>
                    <p style="color: black;">The Follow Company asking to accsess<br> to your document</p>
                    <h5>
                        <b>Work Title</b>
                    </h5>
                    <h5 class="m-t--10" style="color: red;">
                        <b>Search Work as Driver</b>
                    </h5>
                </div>
            </div>
            <hr class="hfkaniei">
            <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                <div class="col-lg-6 "><button type="button" class="btn vd_btn " data-toggle="modal" data-target="#InfoNewAppionemtspop" data-dismiss="modal" style="text-align: left;
                                               width: 100%;
                                               padding: 4px;
                                               border-radius: 24px;
                                               color: black;
                                               background: white;
                                               border: 1px solid #cbcbcb;
                                               ">
                        <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/users/img/true.png') ?>" style="width:23px;margin-right: 31px;"></span>Accepte</button></div>
                <div class="col-lg-6 ">

                    <button type="button" class="btn vd_btn " data-toggle="modal" data-target="#MyOffersForWorkWaitingDenied" data-dismiss="modal" style="text-align: left;
                            width: 100%;
                            padding: 4px;
                            border-radius: 24px;
                            color: black;
                            background: white;
                            border: 1px solid #cbcbcb;
                            ">
                        <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/users/img/false.png') ?>" style="width:23px;margin-right: 31px;"></span>Denied</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
</div>


<!-- Denied -->
<div class="modal fade" id="MyOffersForWorkWaitingDenied" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;padding-left: 17px;">
    <div class="modal-dialog">
        <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align text-center2" id="Heading">Denied</h4>
            </div>
            <div class="ourteamdiver2 text-center" style="margin-top:0px;">

            </div>
            <div class="col-lg-6 col-lg-offset-3" style="border:1px solid #aab7a2; margin-bottom: 20px; margin-top: 26px;">
                <select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;">

                    <option selected="" disabled="">Work Times</option>


                </select>

            </div>
            <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                <div class="col-lg-6 col-lg-offset-3"><button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left;
                                                              width: 100%;
                                                              padding: 4px;
                                                              border-radius: 24px;
                                                              color: black;
                                                              background: white;
                                                              border: 1px solid #cbcbcb;

                                                              ">
                        <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/users/img/send.png') ?>" style="width:23px;margin-right: 31px;"></span>Sent</button></div>


            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
</div>
<!-- /Denied -->


<!-- Rejected -->
        <div class="modal fade" id="rejectedjob" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;padding-left: 17px;">
            <div class="modal-dialog">
                <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align text-center2" id="Heading">Rejected</h4>
                    </div>
                    <div class="ourteamdiver2 text-center" style="margin-top:0px;">

                    </div>
                    <div class="col-lg-6 col-lg-offset-3 ov-h4" style="border:1px solid #aab7a2;margin-bottom:20px;margin-top: 26px;">
                        <h4 class="text-center">Reason</h4>
                    </div>
                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                        <div class="col-lg-6 col-lg-offset-3">
                            <button type="button" class="btn vd_btn " data-dismiss="modal" style="text-align: left;
                                    width: 100%;
                                    padding: 4px;
                                    border-radius: 24px;
                                    color: black;
                                    background: white;
                                    border: 1px solid #cbcbcb;">
                                <span class="append-icon" style="text-align:left;margin-right:42"><img src="<?php echo base_url('assets/users/img/true.png') ?>" style="width:23px;margin-right: 31px;"></span>OK</button></div>
                    </div>
                </div>
                <!-- /.modal-content --> 
            </div>
        </div>
        <!-- /Rejected -->


<!--  Jquery -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Include Bootstrat Js -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>


<script>
	function editmyjob(){
		// setting modal parameter
		$("#searchajobAddNewJobSearch").modal('show');
	}
	function viewmyjob(){
		// setting modal parameter
		$("#searchajobAddNewJobSearchNext").modal('show');
	}

	$("#editDocumentModal .tab-header ul li a").on('click', function() {
		$("#editDocumentModal .tab-content div.tab-pane").removeClass('active');

		var id = $(this).data('to-open');
		$("#"+id).addClass('active');
	});

</script>    