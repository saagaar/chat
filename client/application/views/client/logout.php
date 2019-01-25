<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title><?php //printr($this->session->userdata()); ?></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/logout.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/normailze.css">
    </head>
    <body>
        <div class="login-wrap">
            <div class="container">
                <div class="header">
                    <div class="loading">
                        <div class="block"></div>
                        <div class="block"></div>
                        <div class="block"></div>
                        <div class="block"></div>
                    </div>
                </div>
                <div class="main">
                    <div class="company-logo">
                        <a href="<?php echo base_url(); ?>"><img width="300px" src="<?php echo base_url('assets/'); ?>img/myservice.png" alt="myservice"></a>
                    </div>
                    <div class="login">
                        <form method="POST" action="<?php echo base_url('index.php/client/login'); ?>">
                            <?php $this->load->view('client/shared/flash_message'); ?>
                            <input id="username" name="username" required="required" type="text" placeholder="Username" />
                            <input id="password" name="password" required="required" type="password" placeholder="Password" />
                            <input type="hidden" name="redirurl" value="<?php echo $_SERVER['HTTP_REFERER']; ?>" />
                            <button type="submit" value="Login">Login</button>
                            <span class="form-toggle">Not Registered Yet?</span>
                        </form>
                    </div>
                </div>
               <!-- <div class="register">
                    <form>
                        <input id="firstname" name="firstname" required="required" type="text" placeholder="First name"/>
                        <input id="lastname" name="lastname" required="required" type="text" placeholder="Last name"/>
                        <input id="email" name="email" required="required" type="enail" placeholder="Email"/>
                        <input id="username" name="username" required="required" type="text" placeholder="Username"/>
                        <input id="password" name="password" required="required" type="password" placeholder="Password"/>
                        <button type="submit" value="Login">Register</button>
                        <span class="form-toggle">Return to Login</span>
                    </form>
                </div>-->
            </div>
            <div class="footer">
                <ul class="footer-nav">
                    <li class="link"><a target="_blank" href="http://myservicescout.de/help">Help</a></li>
                    <li class="link"><a target="_blank" href="#">Support</a></li>
                </ul>
            </div>
            
            <script src="<?php echo base_url('assets'); ?>/js/jquery-3.2.1.min.js"></script>
            <script>
            $(document).ready(function() {
                  setTimeout(function() {
                    $('.header').css('display','none');
                  }, 1000);
                });
            </script>
            </div>
    </body>
</html>