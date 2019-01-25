	
<?php 

$this->load->view('client/shared/chat-header');?>

<div class="wrapper">
<div class="container">
<div class="desh-content">
<div class="row">
<div class="afix-content client-desh">
<div class="sidebar-afix affix nicescroll-rails client-desh-left" style="border-right: 2px solid #E0E4DD;">
	<div class="col-sm-12 col-xs-12 col-md-12 no-padding">
		<div class="main-content">
			<div class="tab-section">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="fixed-left">
							<div class="new-chat">
								<div class="avatar">
									<img src="<?= CLIENT_PROFILE_PICTURE_PATH.$loggeduser.'/'.$profilePicture;?>" alt="profile picture">
									<span class="online">●</span>
								</div>
								<div class="status">
									<ul>
										<li>
											<a href="#" class="active">
												<i class="fa fa-address-book-o" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<form method="post" action="">
								<div class="form-group searching-box" style="border:none;">
									<input type="text" class="form-control filtername" placeholder="Search User">
									 <button class="btn btn-pink filteroptname" ￼
data-searchtype="user" data-searchurl="<?php echo CHAT_MODULE.'get_user_search'?>">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="allcontentuser">
					<?php 
				
				
					foreach ($allchatroom as $value):
						$jobtitle=	$value[0]->job_name;
					?>
					<div class="col-md-12 col-sm-12 col-xs-12 search-result">
							<h5 class="jobtitle"><?php echo (substr($jobtitle, 0,12). '..');?> </h5>
							<div class="bhoechie-tab-menu menubr">
								<div class="list-group">
									<ul class=" companylist">
					<?php 
						foreach ($value as $eachvalue):
							$companyname=$eachvalue->client_name;
							$image=$eachvalue->photo;
					
					?>
						
										<li style="cursor:pointer" data-url="<?php echo CHAT_MODULE.'ajax_chat_history' ?>" class="company jobmsglisting <?php if($chatroomid==$eachvalue->roomid) echo 'active';?>" data-roomid="<?php echo $eachvalue->roomid;?>" >
											<div class="avatar">
												<img src="<?=USER_PROFILE_PICTURE_PATH.'/'.$eachvalue->profile_picture;?>" alt="Profile picture">
												<span class="online">●</span>
											</div>
											<div class="details">
												<h5><?php echo substr($companyname,0,18);?></h5>
												
											</div>
											<?php if($eachvalue->messagecount>1):?><span class="notification"><?php echo $eachvalue->messagecount;?></span><?php endif; ?>
											<div class="notifications-dropdown">
												<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
												<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
												</a>
												<div class="dropdown-menu notifications-tabs">
													<ul>
														<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
														<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
														<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
													</ul>
												</div>
											</div>
										</li>
									
					<?php 
						endforeach;
					?>
							</ul>

											
										</div>
									</div>
								</div>
					<?php
					endforeach;?>
		</div>
			
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-9 col-sm-9 col-xs-9 pull-right no-padding">
	<div class="border-box">
		<div class="main-content">
			<div class="tab-section">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container main-box">
						<div class=" bhoechie-tab">
							<div class="bhoechie-tab-content">
								<div>
									<ul class="nav nav-tabs mainnav" role="tablist">
										<li <?php if($view=='userprofile') echo 'class="active"'?>  style="border-left:1px solid #e0e4dd;" role="presentation"><a  aria-controls="Profile" data-toggle="tab" href="index.html#Profile" role="tab"><i class="fa fa-id-card-o" aria-hidden="true"></i> User Profile</a></li>
										<!-- <li style="border-left:1px solid #e0e4dd;" role="presentation"><a  aria-controls="Profile" data-toggle="tab" href="index.html#Profile" role="tab"><i class="fa fa-id-card-o" aria-hidden="true"></i> Client Profile</a></li> -->
										<li <?php if($view=='jobdetails') echo 'class="active"'?>  role="presentation"><a aria-controls="Statics" data-toggle="tab" href="index.html#Statics" role="tab"><i class="fa fa-terminal" aria-hidden="true"></i> Job Details</a></li>
										<li <?php if($view=='chat') echo 'class="active"'?> role="presentation"><a aria-controls="chatHistory" class="chatHistoryTab"  data-toggle="tab" href="<?php echo CHAT_MODULE;?>" role="tab"><i class="fa fa-comments-o" aria-hidden="true"></i> Chat History</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane " id="Statics" role="tabpanel">
										</div>
										<div class="tab-pane" id="Portfolio" role="tabpanel">
										</div>
										<div class="tab-pane" id="OurFollower" role="tabpanel">
										</div>
										<div class="tab-pane"  <?php if($view=='userprofile') echo 'active';?> id="Profile" role="tabpanel">
											<div class="tab-main-content">
												<div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12">
														<div class="picprofile" style="background-image:url(<?=base_url('assets/user/')?>img/index.jpg)">
															<!--
															<div class="picgraycolor">
																<input id="imgupload" style="display:none" type="file"><i aria-hidden="true" class="fa fa-camera caproimg1" onclick="$('#imgupload').trigger('click'); return false;"></i>
															</div>
															-->
															<div class="imgusersa imgusersa-circle" style="">
																<div class="framesa" style="background-image:url(<?=base_url('assets/user/')?>img/pro.jpg)">
																	<!--
																	<div class="upload">
																		<input id="imgupload2" style="display:none" type="file"><i aria-hidden="true" class="fa fa-camera caproimg" onclick="$('#imgupload2').trigger('click'); return false;"></i>
																	</div>
																	-->
																</div>
															</div>
															<h2 class="card-title">Pamela Anderson</h2>
														</div>
														<div class="main-content">
															<div class="tab-section">
																<div class="row">
																	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																		<div class=" bhoechie-tab">
																			<div class="bhoechie-tab-content active">
																				<div>
																					<ul class="nav nav-tabs subnav" role="tablist">
																						<li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#myprofile" role="tab"><i aria-hidden="true" class="fa fa-briefcase"></i>Current Job</a></li>
																						<li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#payment" role="tab"><i aria-hidden="true" class="fa fa-pencil-square-o"></i>Current Contracts</a></li>
																						<li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#compsaswda" role="tab"><i aria-hidden="true" class="fa fa-star-half-o"></i>Reviews</a></li>
																						<!-- <li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#ownerinfo" role="tab"><i aria-hidden="true" class="fa fa-facebook"></i>Social Logins</a></li>
																						<li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#Securityques" role="tab"><i aria-hidden="true" class="fa fa-shield"></i>Security Questions</a></li> -->
																					</ul>
																					<div class="tab-content">
																						<div class="tab-pane active" id="myprofile" role="tabpanel">
																						</div>
																						<div class="tab-pane" id="payment" role="tabpanel">
																						</div>
																						<div class="tab-pane" id="compsaswda" role="tabpanel">
																						</div>
																						<div class="tab-pane" id="ownerinfo" role="tabpanel">
																						</div>
																						<div class="tab-pane" id="Securityques" role="tabpanel">
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

										<!-- CHAT HISTORY -->
								<div class="tab-pane <?php if($view=='chat') echo 'active';?>" id="chatHistory" role="tabpanel">
									<!-- <div class="chatHistory"> -->

									<?php 

									if($view=='chat'):?>
										<!-- CHAT HISTORY -->
										<div style="text-align:center; class="tab-pane <?php if($view=='chat') echo 'active';?>" id="chatHistory" role="tabpanel">
										
											<div id="chatHistoryload" class="chatHistory filterviewchat" >

											<?php $this->load->view('client/chat/ajax_chat_history');?>
											</div>
											
										</div>
									<?php endif;?>
									<!-- </div> -->
								
								</div>
										<!-- /.CHAT HISTORY -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer style="border: 2px solid #E0E4DD;">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-xs-10" style="padding:0 0px 0px 10px;">
						<form method="post" id="chat-form" action="#">
							<div class="form-group message-box">
								<textarea class="form-control" rows="1" name="message" id="message" placeholder="Message"></textarea>
								<button type="submit" style="appearance: none;-webkit-appearance: none;-moz-appearance: none;outline: none;border: 0;background: transparent;">
								<i class="fa fa-paper-plane" aria-hidden="true"></i>
								</button>
							</div>
						</form>
					</div>
					<div class="col-md-2 col-xs-2 upload-box text-center">
						<button id="open_btn" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>
<div class="sidebar-afix affix nicescroll-rails client-desh" style="border-left: 2px solid #E0E4DD;">
	<div class="col-sm-12 col-xs-12 col-md-12 no-padding">
		<div class="main-content">
			<div class="tab-section">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="fixed-right">
							<form method="post" action="#">
							<div class="form-group searching-box ">

								<input type="text" class="form-control filtername" placeholder="Search Documents">
								
								<!-- <span class="glyphicon glyphicon-search search-document searchoptbtn" aria-hidden="true"></span> -->
								<button class="btn btn-pink filteroptname" data-searchtype="document" data-searchurl="<?php echo CHAT_MODULE.'search_document'?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								</button>
							</div>
							</form>
							<div class="searching-box-type">
								<ul>
									<li >
										
										<a  class="filteroptname documenttype" data-searchtype="document" data-filetype="docx" data-searchurl="<?php echo CHAT_MODULE.'search_document'?>"  data-toggle="tab">
											<i class="fa fa-file-word-o" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a class="filteroptname documenttype" data-searchtype="document" data-filetype="img" data-searchurl="<?php echo CHAT_MODULE.'search_document'?>"  data-toggle="tab">
											<i class="fa fa-picture-o" aria-hidden="true"></i>
										</a>
									</li>
									<li>
									<a  class="filteroptname documenttype" data-searchtype="document" data-searchurl="<?php echo CHAT_MODULE.'search_document'?>" data-filetype="all" data-toggle="tab">
											<i class="fa fa-link" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 search-result">
						<div class="bhoechie-tab-menu menubr">
							<div class="list-group">
								<div class="tab-content">
										<div class="tab-pane active" id="tab_default_1">

											<div class="padding10">
												<div class="mybox allcontent">
												<?php
												if(!$documentlist['error_message']):
												 foreach($documentlist as $eachdocument):
											
												if($eachdocument->sender=='c')
												{
													$chat_upload=COMPANY_CHAT_ATTACHMENT_PATH;
												}
												else{
													$chat_upload=USER_CHAT_ATTACHMENT_PATH;
												}
												?>
												<div class="media">
												  <div class="pull-left">
												    <a href="#">
												     <i class="fa fa-paperclip" aria-hidden="true"></i>
												    </a>
												  </div>
												  <div class="media-body">
												    <h4 class="media-heading">
												     <a href="<?php echo $chat_upload.$eachdocument->url;?>" download>
												    <?php echo str_pad(substr($eachdocument->url, 0,15), 17,'...');?> 
												    </a>
												    <span class="pull-right"><?php echo $this->general->time_elapsed_string($eachdocument->created_at);?></span></h4>

												  </div>
												</div>
											<?php 
											endforeach;
											else:
											?>
											No Documents found
											<?php		
											endif;
											?>
												
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
<div aria-labelledby="myModalLabel" class="modal fade" id="langmodal" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
<h4 class="modal-title" id="myModalLabel">Select your Favorite Language</h4>
</div>
<div class="modal-body text-center">
<a class="flags activeflag" href="#">
	<div class="flag-icon flag-icon-us flag-big"></div><br>
	English<span><i class="fa fa-fw fa-check-circle"></i></span>
</a>
<a class="flags" href="#">
	<div class="flag-icon flag-icon-in flag-big"></div><br>
	Hindi<span><i class="fa fa-fw fa-check-circle"></i></span>
</a>
<a class="flags" href="#">
	<div class="flag-icon flag-icon-ch flag-big"></div><br>
	China<span><i class="fa fa-fw fa-check-circle"></i></span>
</a>
<a class="flags" href="#">
	<div class="flag-icon flag-icon-af flag-big"></div><br>
	Afria<span><i class="fa fa-fw fa-check-circle"></i></span>
</a>
</div>
</div>
</div>
</div>
<div aria-labelledby="myModalLabel" class="modal fade" id="langmodal" role="dialog" tabindex="-1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
<h4 class="modal-title" id="myModalLabel">Select your Favorite Language</h4>
</div>
<div class="modal-body text-center">
<a class="fl
ags activeflag" href="index.html#"></a>
<div class="flag-icon flag-icon-us flag-big"></div><br>
English<span><i class="fa fa-fw fa-check-circle"></i></span> <a class="flags" href="index.html#"></a>
<div class="flag-icon flag-icon-in flag-big"></div><br>
Hindi<span><i class="fa fa-fw fa-check-circle"></i></span> <a class="flags" href="index.html#"></a>
<div class="flag-icon flag-icon-ch flag-big"></div><br>
China<span><i class="fa fa-fw fa-check-circle"></i></span> <a class="flags" href="index.html#"></a>
<div class="flag-icon flag-icon-af flag-big"></div><br>
Afria<span><i class="fa fa-fw fa-check-circle"></i></span>
</div>
</div>
</div>
</div>
</div>



 <script src="<?=base_url('assets/')?>js/jquery.min.js" type="text/javascript"></script> 

<!-- <script src="<?=base_url('assets/')?>js/jquery.cookie.js" type="text/javascript"></script> -->
<script src="<?=base_url('assets/')?>js/bootstrap.min.js" type="text/javascript">
</script>

<script src="<?=base_url('assets/')?>js/chat/app.js" type="text/javascript"></script>
<!-- <script src="<?=base_url('assets/users/')?>js/plugin.js" type="text/javascript"></script> -->

<script src="https://cloud.tinymce.com/stable/tinymce.min.js">
</script>
<script src="<?=base_url('assets/')?>js/index.js" type="text/javascript">
</script> 

<script>
var messagesList = $('.chatHistory');
var m_base_url = '<?=base_url()?>';
var CHAT_UPLOADS='<?php echo CHAT_UPLOADS;?>';
// var conn = new WebSocket('ws://127.0.0.1:8081');
var c_user = 'client';
</script>
<script>

$('body').on('click','.save',function(e){
$('input', $(this).parent().parent()).each(function () {
var x = $(this);
/*console.log(x);*/
var id =  x.attr('id');
var v = x.val();
var input = "<div class='form-value'><span id='"+id+"'>"+v+"</span></div>";
x.parent().replaceWith(input);

});
var edit = "<a href='javascript:void(0)' class='edit'>Edit</a>";
$(this).parent('.sc_btn').replaceWith(edit);

});

$('body').on('click','.edit',function(){
$('span', $(this).parent()).each(function () {
var x = $(this);
/*console.log(x);*/
var id =  x.attr('id');
var v = x.text();
/* console.log(v);*/
var span = "<input type='text' class='form-control' name='"+id+"' id='"+id+"' value='"+v+"'>";
var hidden_el = "<span style='display:none;' class='or_value' id='"+id+"'>"+v+"</span>"
x.replaceWith(span+hidden_el);
/* console.log(x);*/
});
var save_cancel = "<div class='sc_btn'><a href='javascript:void(0)' class='save'>Save</a> <a href='javascript:void(0)' class='cancel'> cancel</a></div>";
$(this).replaceWith(save_cancel);

});

$('body').on('click','.cancel',function(e){
$('.or_value', $(this).parent().parent()).each(function () {
var x = $(this);
var id =  x.attr('id');
var v = x.text();
var input = "<div class='form-value'><span id='"+id+"'>"+v+"</span></div>";
x.parent('div').replaceWith(input);
});

var edit = "<a href='javascript:void(0)' class='edit'>Edit</a>";
$(this).parent('.sc_btn').replaceWith(edit);
});


</script>

<script src="<?=base_url('assets/')?>js/fileupload.js" type="text/javascript"></script>
<script type="text/javascript">

</script>
<script>



var user_chat_attachment_path='<?php echo USER_CHAT_ATTACHMENT_PATH?>';
var company_chat_attachment_path='<?php echo COMPANY_CHAT_ATTACHMENT_PATH;?>';
var notificationsound='<?php echo RINGTONE_MESSAGE;?>';
var chat_upload='<?php CHAT_ATTACHMENT_PATH;?>';
var chatroom=$("#chatroomid").val();
var user_profile_picture_path='<?php echo USER_PROFILE_PICTURE_PATH; ?>'
var company_profile_picture_url='<?php echo COMPANY_PROFILE_PICTURE;?>';
var CHAT_MODULE='<?php echo CHAT_MODULE;?>';
var loadmorechat='<?php echo CHAT_MODULE.'ajax_chat_history' ?>';
</script>

</body>
</html>