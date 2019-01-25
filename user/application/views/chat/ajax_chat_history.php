	
				<input type="hidden" id="chatroomid" value="<?php echo $chatroomid;?>">
					<?php 
					if($chathistory):
					?>
				<a id="loadmorechat" style="text-align:center; cursor: pointer">Load More..</a>
					<div class="chat-loader hidden" style="text-align: center;">
						<img style="width: 40px" src="<?php echo IMG_URL.'chat-loader.gif';?>">
					 </div>
					<?php
					 // $user= $chathistory[0]->sender_id;
					 $sender=$chathistory[0]->sender;

					foreach(array_reverse($chathistory) as $eachchat):
						
					if($eachchat->sender=='u')
					{
						$pp=USER_PROFILE_PICTURE_PATH.$profilePicture;
						if($profilePicture=='' || $profilePicture==null)
						{
							$pp=DEFAULT_PROFILE_PICTURE;
						}
						$chatattachment=USER_CHAT_ATTACHMENT_PATH;
					}
					else
					{
						$pp=COMPANY_PROFILE_PICTURE.$profilePicture_company;
						if($profilePicture_company=='' || $profilePicture_company==null)
						{
							$pp=DEFAULT_PROFILE_PICTURE;
						}
						
						$chatattachment=COMPANY_CHAT_ATTACHMENT_PATH;
					}
						if($usertype==$eachchat->sender):
							
					?>
							<div class="col-md-12">
							<div class="message_send clearfix">
							<div class="post_avatar ">
								<div class="post_avatar_link" style="background-image: url(<?php echo $pp;?>);"><span class="online">●</span>
								</div>
							</div>
								<p>
								<?php 
									if($eachchat->type=='1') 
									{ 
									?>
										<div class="message_details text_message">
											<p><?php echo  $eachchat->text;?></p>
										</div>
									<?php
									}		
									else 
									{
										$ext='';
										$splitfilename=explode('.',$eachchat->url);
										$ext=end($splitfilename);
										if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif')
										{
										?>
										<div class="message_details img_message">
											<a href="<?php echo $chatattachment.$eachchat->url;?> " >
									         <img id="chatImg" src="<?php echo $chatattachment.$eachchat->url;?>" alt="<?php echo $eachchat->url;?>" width="300" height="200">
									         </a>
									    </div>
											<?php
										}
										else
										{
										?>
										<div class="message_details ">
											<a href="<?php echo $chatattachment.$eachchat->url;?>" download>
									         <?php echo $eachchat->url;?>
									         </a>
									    </div>
									    <?php
										}
									}
								?>
									
								</p>
							
							</div>
							</div>

					<?php 
						else:
					?>
						<div class="col-md-12">

							<div class="message_received clearfix">
							<div class="post_avatar ">
								<div class="post_avatar_link" style="background-image: url(<?php echo $pp;?>);"><span class="online">●</span>
								</div>
							</div>
							
								<p>
								<?php 
									if($eachchat->type=='1') 
									{ 
									?>
										<div class="message_details text_message">
											<p><?php echo  $eachchat->text;?></p>
										</div>
									<?php
									}
										
									else 
									{
										$ext='';

										 $splitfilename=explode('.',$eachchat->url);
										  $ext=end($splitfilename);
										if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif')
										{
										?>
										<div class="message_details img_message">
											<a href="<?php echo $chatattachment.$eachchat->url;?>" download>
									         <img id="chatImg" src="<?php echo $chatattachment.$eachchat->url;?>" alt="<?php echo $eachchat->url;?>" width="300" height="200">
									         </a>
									     </div>
										<?php
										}
										else
										{
										?>
										<div class="message_details">
											<a href="<?php echo $chatattachment.$eachchat->url;?>" download>
									       <?php echo $eachchat->url;?>
									         </a>
									     </div>
									    <?php
										}
									}
								?>
									
								</p>
							
							</div>
							</div>

					<?php
						endif;
					endforeach;
					else:
						if(!$chatroomid)
						{
							echo 'No chatroom Selected';
						}
						else{
							echo 'No previous chat history found';
						}
					?>
					
					<?php 
					endif;
					?>
<script type="text/javascript">
	var user_profile_picture_url='<?php echo USER_PROFILE_PICTURE_PATH.$profilePicture?>';
	var client_profile_picture_url='<?php echo CLIENT_PROFILE_PICTURE_PATH.$loggeduser.'/'.$profilePicture_company;?>';
</script>