//Subscription to channel
var chatroom=$('#chatroomid').val();

ab.debug(true, true);
var conn = new ab.Session('ws://127.0.0.1:8080?id=sagar',
function() {
	 console.log("url: ", ws.upgradeReq.url);
// conn.onopen=function(session,details){
// console.log('we are inside open');
// alert('hey eth alrigh');
// };

conn.subscribe(chatroom, function(topic, data) {

console.log('connected to chat room');
var image_url = user_chat_attachment_path+data.url;


$('body').append('<audio id="chatAudio"><source src="'+notificationsound+'" type="audio/mpeg"></audio>');
    	$('#chatAudio')[0].play();
 setTimeout(function(){
 	$('#chatAudio').remove();
 },3000);

if (data.type=='message')
{	
    messagesList.append(
		'<div class="col-md-12">'+
		'<div class="message_received clearfix">'+
			'<div class="post_avatar ">'+
				'<div class="post_avatar_link" style="background-image: url('+user_profile_picture_url+');"><span class="online">●</span></div>'+
			'</div>'+
			'<div class="message_details text_message">'+
				'<p>'+data.text+'</p>'+
			'</div>'+
		'</div>'+
	'</div>'
	);
}
else if (data.type=='file' && data.url.match(/.(jpg|jpeg|png|gif)$/i))
{

	messagesList.append(
						'<div class="col-md-12">' +
						   '<div class="message_received clearfix">' +

						      '<div class="post_avatar ">'+
								'<div class="post_avatar_link" style="background-image: url('+user_profile_picture_url+');"><span class="online">●</span></div>'+
								'</div>'+

						      '<div class="message_details img_message">' +
						      	'<a href="'+user_chat_attachment_path+data.url+'" download>'+
						        	 '<img id="chatImg" src="'+user_chat_attachment_path+data.url+'" alt="'+data.url+'" width="300" height="200">' +
						         '</a>'+
						         '<!-- The Modal -->' +
						      '</div>' +
						   '</div>' +
						'</div>'
					);
	
}
else
{
	messagesList.append(
	'<div class="col-md-12">'+
		'<div class="message_received clearfix">'+
			'<div class="post_avatar ">'+
				'<div class="post_avatar_link" style="background-image: url('+user_profile_picture_url+');"><span class="online">●</span></div>'+
			'</div>'+
			'<div class="message_details text_message">'+
				'<p><a href="'+image_url+'" download>'+data.url+'</a></p>'+
			'</div>'+
		'</div>'+
	'</div>'
	);	
}
$("html, body"). scrollTop($("#chatHistory").height()+50);

},


);

},
function() {
console.warn('WebSocket connection closed');
},

{'skipSubprotocolCheck': true}
);

$(document).ready(function(){
$('#message').	keypress(function(e){
	if(e.which==13)
	{
		$("#chat-form").submit();
	}
 })
$("html, body"). scrollTop($("#chatHistory").height()+50);

	// conn = new WebSocket('ws://localhost:8080');
	messagesList = $('.chatHistory');
	var chatForm = $("#chat-form");
	
	var exclude='';
	chatForm.on('submit', function(e) {
		var messageInputField = $("#message");
		var chatroom=$("#chatroomid").val();
		e.preventDefault();

		if(messageInputField.val() != "")
		{
			var message = 
						{
							text: messageInputField.val(),
							chatroom:chatroom,
							type:'message',
						};	
				$.ajax
		        ({
				    url: m_base_url+'index.php/chat/save_chat_message',
				    type: 'POST',
				    data: message,
				    dataType:'json',
				    success:function(data)
				    {
				    	console.log(data);
				    	if(data.success_message)
				    	{

				    		messagesList.append(
							'<div class="col-md-12">'+
							'<div class="message_send clearfix">'+
									'<div class="post_avatar ">'+
									'<div class="post_avatar_link" style="background-image: url('+client_profile_picture_url+');"><span class="online">●</span></div>'+
								'	</div>'+
									'<div class="message_details text_message">'+
									'<p>'+message.text+'</p>'+
									'</div>'+
								'</div>'+
							'</div>'
								);
				    		 conn.publish(chatroom,message,true);
				    		 
				    		$(messageInputField).val('');
				    	 }
				    	 else
				    	 {
				    	 	 $('.overlay_alert').removeClass('hidden');
		                     $('.overlay_alert').addClass('error');
		                     $('.overlay_alert').html(data.error_message);
				    	 	 setTimeout(function(){
		                    $('.overlay_alert').addClass('hidden');
		                    $('.overlay_alert').removeClass('success');
		                    $('.overlay_alert').removeClass('error');
		                     $('.overlay_alert').html('');
		                    
		                    },3000);
				    	 }
				    	 $("html, body"). scrollTop($("#chatHistory").height()+50);
					},
					error:function(error,status){
						console.log(error);
						console.log('we are  in error'+status);
						
					}
				});
		}
	});

	//Attachment in chat
$("#open_btn").click(function() 
{
var chatroom=$("#chatroomid").val();
$('.img-loader').removeClass('hidden');
$.FileDialog({multiple: true,accept:'image/*'}).on('files.bs.filedialog', function(ev) {
var files = ev.files;
var text = "";
files.forEach(function(f) {
// mfiles
var formData = new FormData();
formData.append('file',f);
formData.append('chatroom',chatroom);


text += f.name + "<br/>";

$.ajax({
url: m_base_url+'index.php/chat/save_chat_message',
type: 'POST',
async: false,
data: formData,
cache:false,
processData: false,
contentType: false,
success:function(data)
{
	$('.img-loader').addClass('hidden');
	data=jQuery.parseJSON(data);
	if(data.success_message)
	{

		message = 
		{
			chatroom:chatroom,	
			type:'file',
			url:data.url			
		}	
		conn.publish(chatroom,message,true);
		messagesList.append(
		'<div class="col-md-12">' +
		   '<div class="message_send clearfix">' +

		      '<div class="post_avatar ">'+
				'<div class="post_avatar_link" style="background-image: url('+client_profile_picture_url+');"><span class="online">●</span></div>'+
				'</div>'+

		      '<div class="message_details img_message">' +
		         '<img id="chatImg" src="'+company_chat_attachment_path+data.url+'" alt="'+data.url+'" width="300" height="200">'+
		         '<div id="chatImgModal" class="modal">' +
		            '<img class="modal-content" id="imgurl" style="overflow: hidden; outline: none;" tabindex="2">' +
		            '<div id="caption"></div>' +
		            '<span class="close">×</span>' +
		            '<div id="ascrail2003" class="nicescroll-rails" style="width: 5px; z-index: 1; cursor: default; position: absolute; top: 0px; left: 275px; height: 180px; display: none;">' +
		               '<div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>' +
		            '</div>' +
		            '<div id="ascrail2003-hr" class="nicescroll-rails" style="height: 5px; z-index: 1; top: 175px; left: 0px; position: absolute; cursor: default; display: none;">' +
		               '<div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div>' +
		            '</div>' +
		         '</div>' +
		      '</div>' +
		   '</div>' +
		'</div>'
	);	
$("html, body"). scrollTop($("#chatHistory").height()+50);
	}	
	else
	{
		$('.img-loader').addClass('hidden');
		$('.overlay_alert').removeClass('hidden');
        $('.overlay_alert').addClass('error');
        $('.overlay_alert').html(data.error_message);
	 	setTimeout(function(){
        $('.overlay_alert').addClass('hidden');
        $('.overlay_alert').removeClass('success');
        $('.overlay_alert').removeClass('error');
        $('.overlay_alert').html('');
        
        },3000);
	}
	
}
});

});
$("#output").html(text);
}).on('cancel.bs.filedialog', function(ev) {
	$('.img-loader').addClass('hidden');
$("#output").html("Cancelled!");
});
});

$(document).on('click','.filteroptname',function(e)
{
	e.preventDefault();
	curelement=$(this);
	var data=filterview(curelement);
})
$(document).on('click','.jobmsglisting',function()
{
	var curelement=$(this);
	oldroomid=$('#chatroomid').val();
	roomid=$(this).data('roomid');
	$('#chatroomid').val(roomid);
	if(!$(this).hasClass('active'))
	{
		$('.img-loader').removeClass('hidden');				   
		$('.jobmsglisting').removeClass('active');
		$(this).addClass('active');
		var url=window.location.href;
		if(url.match('chat/room/([A-z0-9])+(/)?$'))
		{
			if(url.match('(/)$'))
			 window.history.pushState('', '','/chat/room/'+roomid+'/');
			else
			 window.history.pushState('', '', roomid+'/');
			
		}
		else if(url.match('(room)$ || (room/)$'))
		{
			if(url.match('(room)$'))
			 window.history.pushState('','','room/'+roomid+'/');
			else 
		     window.history.pushState('','',roomid+'/');
		}
		else
		{
			window.history.pushState('','','chat/room/'+roomid+'/');
		}
	
	if(oldroomid)
		conn.unsubscribe(oldroomid);
		var url=$(this).data('url');
	$.ajax({
						url: url+'/'+roomid,
						type: "POST", 
						dataType:'html',
						success: function(data)   
						{
							curelement.find('.notification').remove();	
							$('.filterviewchat').html('');
							$('.filterviewchat').html(data);
							$('.img-loader').addClass('hidden');
							
										 conn.subscribe(roomid, function(topic, data) {
									    	var image_url = user_chat_attachment_path+data.url;
									    	$('body').append('<audio id="chatAudio"><source src="'+notificationsound+'" type="audio/mpeg"></audio>');
											  $('#chatAudio')[0].play();
											 setTimeout(function(){
											 	$('#chatAudio').remove();
											 },3000);

									    	if (data.type=='message')
									    	{
										        messagesList.append(
													'<div class="col-md-12">'+
													'<div class="message_received clearfix">'+
														'<div class="post_avatar ">'+
															'<div class="post_avatar_link" style="background-image: url('+user_profile_picture_url+');"><span class="online">●</span></div>'+
														'</div>'+
														'<div class="message_details text_message">'+
															'<p>'+data.text+'</p>'+
														'</div>'+
													'</div>'+
												'</div>'
												);
											}
											else if (data.type=='file' && data.url.match(/.(jpg|jpeg|png|gif)$/i))
											{

												messagesList.append(
																	'<div class="col-md-12">' +
																	   '<div class="message_received clearfix">' +

																	      '<div class="post_avatar ">'+
																			'<div class="post_avatar_link" style="background-image: url('+user_profile_picture_url+');"><span class="online">●</span></div>'+
																			'</div>'+

																	      '<div class="message_details img_message">' +
																	      	'<a href="'+user_chat_attachment_path+data.url+'" download>'+
																	        	 '<img id="chatImg" src="'+user_chat_attachment_path+data.url+'" alt="Chat image attachment" width="300" height="200">' +
																	         '</a>'+
																	         '<!-- The Modal -->' +
																	      '</div>' +
																	   '</div>' +
																	'</div>'
																);
												
											}
											else
											{
												messagesList.append(
												'<div class="col-md-12">'+
													'<div class="message_received clearfix">'+
														'<div class="post_avatar ">'+
															'<div class="post_avatar_link" style="background-image: url(https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif);"><span class="online">●</span></div>'+
														'</div>'+
														'<div class="message_details text_message">'+
															'<p><a href="'+image_url+'" download>'+data.url+'</a></p>'+
														'</div>'+
													'</div>'+
												'</div>'
												);	
											}

									    });
									$("html, body"). scrollTop($("#chatHistory").height()+50);
						}
		  	});	
		}
})





var page=1;
$(document).on('click','#loadmorechat',function(){
	
   var chatroomid=$('#chatroomid').val();
   // $('.img-loader').removeClass('hidden');
   $('.chat-loader').removeClass('hidden');
       $.ajax({
	            url:loadmorechat+'/'+chatroomid+'/'+page,
	            dataType:'html',
	            success:function(data){
	            	$('#loadmorechat').remove();
	                $('#chatHistoryload').prepend(data);
	                // $('.img-loader').addClass('hidden');
	                $('.chat-loader').addClass('hidden');
	            }
            });
       page=page+1;
        
});

});

const intervals = [
  { label: 'y', seconds: 31536000 },
  { label: 'm', seconds: 2592000 },
  { label: 'd', seconds: 86400 },
  { label: 'h', seconds: 3600 },
  { label: 'min', seconds: 60 },
  { label: 'sec', seconds: 0 }
];

function timeSince(date) 
{
  count=0;
  var newdate=((new Date(date)));
  const seconds = Math.floor((Date.now() - newdate.getTime()) / 1000);
  const interval = intervals.find(i => i.seconds < seconds);

	if(parseInt(interval.seconds)===0)
	{
		count=0;
	}
	else
	{
		count = Math.floor(seconds / interval.seconds);
	}

	return `${count}${interval.label} ago`;
}

function filterview()
{	
		var name=   curelement.prev('.filtername').val();
		var searchtype=curelement.data('searchtype');
		var doctype=$('.documenttype').parent('li.active').children('a').data('filetype');
		var filterparams={};
		url=curelement.data('searchurl');
		if(doctype)
		{
			filterparams.doctype=doctype;
		}
		if(name)
		{
			filterparams.filtername=name;
		}
		if(status)
		{
			filterparams.filterstatus=status;
		}
		
		$('.img-loader').removeClass('hidden');
		$.ajax({
						url: url,
						type: "POST", 
						dataType:'json',
						data:filterparams,
						success: function(data)   
						{
						var allelement='';
						var allrow='';
						$('.img-loader').addClass('hidden');
						if(data.error_message)
						{
							if(searchtype=='document')
							{
								$('.allcontent').html('');
						  		$('.allcontent').html(data.error_message);
							}	
							else
							{
								  	$('.allcontentuser').html('');
								  		var element='<div class="col-md-12 col-sm-12 col-xs-12 search-result">'+
														'<h5 class="jobtitle">'+ data.error_message+'...'+'</h5>'+
															// '<div class="bhoechie-tab-menu menubr">'+
															// 	'<div class="list-group">'+
															// 		'<ul class=" companylist">';
														'</div>';
								  	$('.allcontentuser').html(element);
							}
						}
						else
						{
							if(searchtype=='document')
							{
								
									$('.allcontent').html('');
									$.each(data,function(i,v)
									{
										if(v.sender=='u')
										{
											var chatupload=user_chat_attachment_path;
										}
										else
										{
											var chatupload=company_chat_attachment_path;
										}
										if(doctype=='img') var thumbnail='<img class="media-object" src="'+chatupload+v.url+'" alt="...">';
										else if(doctype=='docx') var thumbnail='<i class="fa fa-file-word-o" aria-hidden="true"></i>';
										else var thumbnail='<i class="fa fa-paperclip" aria-hidden="true"></i>';
										var element='<div class="media">'+
															  '<div class="pull-left">'+
															    '<a href="">'+
															     thumbnail+
															    '</a>'+
															  '</div>'+
															  '<div class="media-body">'+
															    '<h4 class="media-heading">'+
															    '<a href="'+chatupload+v.url+'" download>'+
															    	v.url.substr(0,15) +
															    '..</a>'+
															    '<span class="pull-right">'+
															     timeSince(v.created_at)+
															    '</span>'+
															    '</h4>'+
															  '</div>'+
															'</div>'
											 allelement=allelement+element;
									});
									$('.allcontent').html(allelement);
							}
							else
							{	
								var allrow='';
								var allelement='';
								$('.allcontentuser').html('');
									$.each(data,function(index,chatcontent)
									{
										
										var jobtitle=chatcontent[0].job_name;
										var element='<div class="col-md-12 col-sm-12 col-xs-12 search-result">'+
														'<h5 class="jobtitle">'+ jobtitle.substr(0,10)+'...'+'</h5>'+
															'<div class="bhoechie-tab-menu menubr">'+
																'<div class="list-group">'+
																	'<ul class=" companylist">';
													var allrow='';
													var eachrow='';																																													
													$.each(chatcontent,function(i,eachcontent)
													{
														var notify='';
														if(eachcontent.messagecount>0){ 
															 notify='<span class="notification">'+eachcontent.messagecount+
																	'</span>';
														}	

														var companyname=eachcontent.client_name;
														var image=eachcontent.photo;

														var eachrow='<li style="cursor:pointer" data-url="'+CHAT_MODULE+'ajax_chat_history" class="company jobmsglisting" data-roomid="'+eachcontent.roomid+'" >'+
																	   '<div class="avatar">'+
																			'<img src="'+user_profile_picture_path+'/'+eachcontent.profile_picture +'" alt="Profile picture">'+
																				'<span class="online">●</span>'+
																		'</div>'+
																		'<div class="details">'+
																			'<h5>'+companyname.substr(0,15)+'</h5>'+
																		
																		'</div>'+
																		notify
																		+
																		'<div class="notifications-dropdown">'+
																				'<a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">'+
																				'<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>'+
																				'</a>'+
																				'<div class="dropdown-menu notifications-tabs">'+
																					'<ul>'+
																						'<li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>'+
																						'<li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>'+
																						'<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>'+
																					'</ul>'+
																				'</div>'+
																			'</div>'+
																		'</li>';
														allrow=allrow+eachrow;
													});
										var closeelement=			'</ul>'+	
																'</div>'+
															'</div>'+
														'</div>';
										 allelement=allelement+element+allrow+closeelement;
									});
									
									$('.allcontentuser').html(allelement);
										
								}	
						  }	
						  
					}

			});
}

