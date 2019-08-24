<!DOCTYPE html>
<head>
  <title> Stay to enjoy </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/responsive.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.typekit.net/efj6wpg.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
	   <link rel="icon" href="<?php echo base_url() ?>img/logo.png" type="image/png" sizes="16x16">
  <!-- css files end here  -->
</head>
  <body>
    <!-- Modal -->
<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog video-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body video-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always"></iframe>
</div>
      </div>
    </div>
  </div>
</div> 

    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" id="toggle-bg">
      <div class="container-fluid mini-container justify-content-normal">
      <a class="navbar-brand float-left" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>img/logo.svg" class="img-fluid"></a>
      <div class="d-inline-flex justify-content-center w-100 w-md-82">
          <h5 class="text-center"> Forget Your Password? </h5>
    </div>
    </div> <!-- //container  -->
    </nav> <!-- //nav end here  -->

    <main role="main">
    <div class="container-fluid mini-container position-relative">
      <div class="col-md-12 position-absolute back-arrow"> <a href="<?php echo base_url() ?>home/login_register"><i class="fa fa-arrow-left"></i> <strong> Back </strong></a></div>
    </div>

    <section class="forgot-sec h-80 d-flex align-items-center justify-content-center position-relative">
      <div class="container-fluid mini-container">
        <!-- Example row of columns -->
        <div class="row">
        <div class="col-md-5 offset-md-4">
          <div>
          <h4 class="mb-0"> Find Your StayToEnjoy Account </h4>
          <p class="text-dark">Enter your email to get notifications and to reset your password</p>
          <form class="contactForm" method="post" action="<?php echo base_url() ?>home/forget_password">
          <input type="text" class="form-control" placeholder="Email or Telephone Number" name="unique_id" class="disabled-input">
          <p class="text-right"> <button type="submit"  class="btn btn-danger border-radius-50 font-weight-bold forget-search"> Search </button></p>		    </form>
      </div>
      </div>
      </div> <!-- /row -->
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->
  
</main>
<?php include "include/footer.php"; ?>