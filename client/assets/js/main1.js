$(document).ready(function(){var bodyheight=$(window).height();$('.frame').css('height',bodyheight-150);$(window).resize(function(){var bodyheight=$(window).height();$('.frame').css('height',bodyheight-150);});$('.searching-box-type ul li a').last().trigger('click');$('.chatHistoryTab').trigger('click');initiateChat();$(".mainnav li a.chatHistoryTab").on('click',function(){initiateChat();});$(".avatar img").hover(function(){var me=$(this).closest('.avatar').next().next().next();me.addClass('open');},function(){var me=$(this).closest('.avatar').next().next().next();me.removeClass('open');});});function initiateChat(){resetChat();startChat();}var me={};me.avatar="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48";var you={};you.avatar="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg";function formatAMPM(date){var hours=date.getHours();var minutes=date.getMinutes();var ampm=hours>=12?'PM':'AM';hours=hours%12;hours=hours?hours:12;minutes=minutes<10?'0'+minutes:minutes;var strTime=hours+':'+minutes+' '+ampm;return strTime;}function insertChat(who,text,time=0){var control="";var date=formatAMPM(new Date());if(who=="me"){control='<li style="width:100%">'+'<div class="msj macro">'+'<div class="avatar"><img class="img-circle" style="width:100%;" src="'+me.avatar+'" />'+'<span class="online">●</span>'+'</div>'+'<div class="message loading new">'+'<span></span>'+'</div>'+'<div class="text text-l hide">'+'<p>'+text+'</p>'+'<p><small>'+date+'</small></p>'+'</div>'+'</div>'+'</li>';}else{control='<li style="width:100%;">'+'<div class="msj-rta macro">'+'<div class="text text-r hide">'+'<p>'+text+'</p>'+'<p><small>'+date+'</small></p>'+'</div>'+'<div class="message loading new">'+'<span></span>'+'</div>'+'<div class="avatar" style="padding:0px 0px 0px 10px !important">'+'<img class="img-circle" style="width:100%;" src="'+you.avatar+'" />'+'<span class="online">●</span>'+'</div>'+'</li>';}setTimeout(function(){$("#chatHistory ul").append(control);setTimeout(function(){$('.message.loading').addClass('hide').removeClass('show');$('.text-l').removeClass('hide').addClass('show');$('.text-r').removeClass('hide').addClass('show');},1000);},time);}function resetChat(){$("#chatHistory ul").empty();}resetChat();function startChat(){insertChat("me","Hello Tom...",2000);insertChat("you","Hi, Pablo",5000);insertChat("me","What would you like to talk about today?",8000);insertChat("you","Tell me a joke",12000);insertChat("me","Spaceman: Computer! Computer! Do we bring battery?!",16000);insertChat("you","LOL",20000);}

$(document).ready(function() {
	var conn = new WebSocket('ws://localhost:8080');
	var chatForm = $('.chatForm'), 
	messageInputField = chatForm.find('#message'),
	messagesList = $('.messages-list'),
	usernameForm = $('.username-setter'),
	usernameInput = usernameForm.find('.username-input');

	chatForm.on('submit', function(e) {
		e.preventDefault();
		alert('we are here');
		var formData = new FormData();
		var x = document.getElementById("file");
		var message;
		
    		if (x.files.length > 0) 
    		{
    			$.ajax
    				({
					    url: m_base_url+'index.php/message/upload_file',
					    type: 'POST',
					    async: false,
					    data: new FormData( this ),
					    processData: false,
					    contentType: false,
					    success:function(data){
							message = {
								url: data,
								sender: 2,
								receiver:2,
								type: 'file',
								job_id:'1'
									 
							};
							console.log('message');
					    }
				   });
    		}
    		else
    		{
	    		message = 
	    		{
					text: messageInputField.val(),
					sender: 2,
					receiver:2,
					type: 'file',
					job_id:'1',
					type: 'message'
				};
    		}

		conn.send(JSON.stringify(message));
		if(message.type == 'message')
		{
			messagesList.append('<li class="label label-success">'+message.text+'</li>');	
		}
		else
		{
			messagesList.append('<li class="label label-success"><a download href="'+m_base_url+'assets/upload/'+message.url+'">'+message.url+'</a></li>');
		}	
	});

	usernameForm.on('submit', function(e) {
		var username = usernameInput.val();
		if(username.length > 0) {
			$.cookie('chat_name', username);
			$('.username').text(username);
		}
		e.preventDefault();
	});

	conn.onopen = function(e) {
		// alert('Connection established');
		// conn.send('Message test from a broswer client');
		var url="load_history.php";
		// $.ajax({
		// 	url: url,
		// 	dataType: 'json',
		// 	success:function(data) {
		// 		$.each(data, function() {
		// 			if(this.sender == $.cookie('chat_name')) {
		// 				messagesList.append('<li class="label label-success">'+this.text+'</li>');
		// 			} else {
		// 				messagesList.append('<li>' + this.text + '</li>');	
		// 			}				
		// 		});
		// 	}
		// });

		var chatname = $.cookie('chat_name');

		if(!chatname) {
			var timestamp = (new Date()).getTime();
			chatname = 'anonymous' + timestamp;
			$.cookie('chat_name', chatname);
		}

		$('.username').text(chatname);
	};

	conn.onmessage = function(e) {
		// console.log(e.data);
		messagesList.append('<li>'+e.data+'</li>');
	}
});