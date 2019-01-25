  <div class="sidebar-afix affix nicescroll-rails client-desh">
    <div class="col-sm-12 col-xs-12 no-padding">
      <div class="main-content">
        <div class="tab-section">
          <div class="row">
            <div class="col-md-12 col-sm-12 hidden-xs">
                
              <div class="user-img">
                
                <div class="userImg">
                    <div class="userName abslout border-box border-blue" style="border-bottom: none;">
                  <h2>Company Name <span>GmbH</span></h2>
                  <div class="border-r"></div>
                </div>
                  <div id="circle">
                    <div id="user" style="background-image: url(&quot;https://upload.wikimedia.org/wikipedia/it/9/91/Big_Bang_Theory,_Penny,_5x20.png&quot;);"></div>
                    <div id="circle-image" style="background-image: url(&quot;http://cdn.playbuzz.com/cdn/7b4f711d-2a46-45dc-bea7-85a15ffa587a/b9f955c1-d8ad-4778-862d-e66ec2c38df1.jpg&quot;);"></div>
                    <div id="rating" style="margin-top: 43px;"> <span>★</span> <span>★</span> <span>★</span> <span>☆</span> <span>☆</span> </div>
                    <div id="heart"> <span>♡</span> <span>92</span> </div>
                  </div>
                </div>
                <div class="profile-vedio-options">
                  <ul>
                    <li><i aria-hidden="true" class="fa fa-user"></i> Client ID</li>
                    <li class="bold"><i aria-hidden="true" class="fa fa-wrench"></i><?php echo $this->lang->line('upgrade_your_account'); ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 marginbar " style="padding-left:;">
              <div class="bhoechie-tab-menu">
                <div class="list-group" >
                  <ul style="direction:rtl" class="text-xs-center">
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='home') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('employee_dashboard'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-home hidden-sm hidden-xs"></h4> <span class="hidden-xs hidden-sm"><?php echo $this->lang->line('home'); ?></span>
                          <i class="fa fa-home hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='job offers') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('job_offers'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-bullhorn hidden-sm hidden-xs"></h4>
                          <span class="hidden-xs hidden-sm"><?php echo $this->lang->line('job_offers'); ?></span>
                          <i class="fa fa-bullhorn hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                      </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='job activity') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('job_activity'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-check-square-o hidden-sm hidden-xs"></h4>
                          <span class="hidden-xs hidden-sm"><?php echo $this->lang->line('job_activity'); ?></span>
                          <i class="fa fa-check-square-o hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                          </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='job contracts') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('job_contracts'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-pencil-square-o hidden-sm hidden-xs"></h4>              
                          <span class="hidden-sm hidden-xs"><?php echo $this->lang->line('job_contracts'); ?></span>
                          
                          <i class="fa fa-pencil-square-o hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='sale services') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('sale_services'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-cart-plus hidden-sm hidden-xs"></h4>
                          <span class="hidden-sm hidden-xs"><?php echo $this->lang->line('sale_services'); ?></span>
                          
                          <i class="fa fa-cart-plus hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='my payments') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('my_payments'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-money hidden-sm hidden-xs"></h4>
                             <span class="hidden-sm hidden-xs"><?php echo $this->lang->line('my_payments'); ?></span>
                          
                          <i class="fa fa-money hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='my coins') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('my_coins'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-btc hidden-sm hidden-xs" aria-hidden="true"></h4>  
                             <span class="hidden-sm hidden-xs"><?php echo $this->lang->line('my_coins'); ?></span>
                          
                          <i class="fa fa-btc hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='ticket support') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('ticket_support'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-life-ring hidden-sm hidden-xs"></h4> 
                              <span class="hidden-sm hidden-xs"><?php echo $this->lang->line('ticket_support'); ?></span>
                          
                          <i class="fa fa-life-ring hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='my appointments') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('my_appointments'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-calendar-check-o hidden-sm hidden-xs"></h4>
                        <span class="hidden-sm hidden-xs"><?php echo $this->lang->line('my_appointments'); ?></span>
                          
                          <i class="fa fa-calendar-check-o hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='purchase history') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('purchase_history'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-line-chart hidden-sm hidden-xs"></h4>  
                        <span class="hidden-sm hidden-xs"><?php echo $this->lang->line('purchase_history'); ?></span>
                          
                          <i class="fa fa-line-chart hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='search employer') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('search_employer'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-briefcase hidden-sm hidden-xs"></h4> 
                             <span class="hidden-xs hidden-sm "><?php echo $this->lang->line('search_employer'); ?></span>
                          
                          <i class="fa fa-briefcase hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='my reviews') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('my_reviews'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-comments-o hidden-sm hidden-xs"></h4> 
                        <span class=" hidden-sm hidden-xs"><?php echo $this->lang->line('my_reviews'); ?></span>
                          
                          <i class="fa fa-comments-o hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='my warranty') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('my_warranty'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-cogs hidden-sm hidden-xs"></h4>
                        <span class="hidden-sm hidden-xs"><?php echo $this->lang->line('my_warranty'); ?></span>
                          
                          <i class="fa fa-cogs hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='my team') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('my_team'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-users hidden-sm hidden-xs"></h4>
                        <span class="hidden-sm hidden-xs"><?php echo $this->lang->line('my_team'); ?></span>
                          
                          <i class="fa fa-users hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='my clients') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('my_clients'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-user-circle hidden-sm hidden-xs"></h4>
                         <span class="hidden-sm hidden-xs"><?php echo $this->lang->line('my_clients'); ?></span>
                          
                          <i class="fa fa-user-circle hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li <?php echo ($this->session->userdata('employee_data')['side_nav']=='my income') ? 'class="active"' : ''; ?>>
                      <a href="<?php echo base_url('my_income'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-pie-chart hidden-sm hidden-xs"></h4>
                         <span class="hidden-xs hidden-sm"><?php echo $this->lang->line('my_income'); ?></span>
                          
                          <i class="fa fa-pie-chart hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
                        </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('client/logout'); ?>" class="list-group-item text-center">
                        <h4 class="fa fa-sign-out hidden-sm hidden-xs"></h4><span class="hidden-sm hidden-xs"><?php echo $this->lang->line('logout'); ?></span> 
                        
                          <i class="fa fa-sign-out hidden-lg hidden-md" style="font-size:20px;margin-left:10px"></i>
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