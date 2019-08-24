<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
      <?php  if($type == "login") {
        $title = "Login";
      } else{
        $title = "Forgot Password";
      } ?>
    <title>Stay to enjoy | <?php echo $title;?> </title>
 
    <link rel="apple-touch-icon" href="<?php echo base_url() ;?>/img/logo.png">
    <link rel="shortcut icon" href="<?php echo base_url() ;?>/img/logo.png">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/vendor/flag-icon-css/flag-icon.css">
    <?php if($type == "login") {  ?>
        <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/css/login.css">
    <?php }else{ ?>
          <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/css/forgot-password.css">
    <?php } 
    ?>
    
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/admin_desigin/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!-- flash-message -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  
    
    <!-- Scripts -->
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <?php if($type == "login") {  ?>
  <body class="animsition page-login layout-full page-dark">
   
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="brand">
          <img class="brand-img" src="<?php echo base_url() ;?>/img/logo.svg" alt="..." height="100" width="100">
          <h2 class="brand-text">StayToEnjoy</h2>
        </div>
        <p>Sign into your pages account</p>
        <form method="post" action="<?php echo base_url()?>admin/login">
          
          <div class="form-group">
            <label class="sr-only" for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password"
              placeholder="Password">
          </div>
          <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
              <input type="checkbox" id="inputCheckbox" name="remember">
              <label for="inputCheckbox">Remember me</label>
            </div>
            <a class="float-right" href="<?php echo base_url('admin/forgot_password') ?>">Forgot password?</a>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>
       <!--  <p>Still no account? Please go to <a href="register.html">Register</a></p> -->

        <footer class="page-copyright page-copyright-inverse">
         
          <p>© Copyrights StayToEnjoy 2019. All RIGHT RESERVED.</p>
          
         <!-- 
          <div class="social">
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-twitter" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-facebook" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-dribbble" aria-hidden="true"></i>
        </a>
          </div> -->
        </footer>
      </div>
    </div>
    <!-- End Page -->

<?php }else{ ?>
 <body class="animsition page-forgot-password layout-full">
  <!-- Page -->
     <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <img class="brand-img" src="<?php echo base_url() ;?>/img/logo.svg" alt="..." height="100" width="100">
        <h2>Forgot Your Password ?</h2>
        <p>Input your registered email to reset your password</p>

        <form method="post" role="form" action="">
          <div class="form-group">
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Your Email">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="reset" value="reset">Reset Your Password</button>
          </div>
        </form>

        <footer class="page-copyright">
         <p>© Copyrights StayToEnjoy 2019. All RIGHT RESERVED.</p>         
        </footer>
      </div>
    </div>
    <?php } ?>


    <!-- Core  -->
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/popper-js/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/animsition/animsition.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/switchery/switchery.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/intro-js/intro.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="<?php echo base_url() ;?>/admin_desigin/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Component.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Base.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Config.js"></script>
    
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Section/Menubar.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Section/GridMenu.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Section/Sidebar.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Section/PageAside.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin/menu.js"></script>
    
    <script src="<?php echo base_url() ;?>/admin_desigin/js/config/colors.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/config/tour.js"></script>
    <script>Config.set('assets', '../../assets');</script>
    
    <!-- Page -->
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Site.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin/asscrollable.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin/slidepanel.js"></script>
    <script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin/switchery.js"></script>
        <script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin/jquery-placeholder.js"></script>
      <!-- flash-message -->  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- SHOW TOASTR NOTIFIVATION -->
<?php if ($this->session->flashdata('flash_message') != ""):?>

<script type="text/javascript">
  toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
</script>

<?php endif;?>

<?php if ($this->session->flashdata('error_message') != ""):?>

<script type="text/javascript">
  toastr.error('<?php echo $this->session->flashdata("error_message");?>');
</script>

<?php endif;?>
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>
