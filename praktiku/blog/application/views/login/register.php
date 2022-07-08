<link href="<?php echo base_url()?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/back/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SigUp - Document Code</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        
      </div>
      <div class="register-box">
          <div class="login-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input type="text" id="username" name="username" placeholder=" " autofocus required class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
            <div class="form-group">
             <label class="control-label">EMAIL</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="" required="@">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" id="password" name="password" placeholder=" " required spellcheck="false" data-ms-editor="true">
          </div>
          
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                
              </div>
              <label>
                  <input type="checkbox" required ><span class="label-text">Trime and condition</span>
                </label>
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN UP</button>
          </div>
          <div class="animated-checkbox">
                  <p class="semibold-text mb-2 text-center"><a href="<?php echo base_url()?>" >Home</a></p>
              </div>
        </div>
        <?php echo form_close(); ?>
       
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url()?>assets/back/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/back/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/back/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/back/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url()?>assets/back/js/plugins/pace.min.js"></script>
    <script type="text/javascript"></script>
  </body>