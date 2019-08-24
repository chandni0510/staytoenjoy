<!DOCTYPE html> 

<head> 

  <title> Stay to enjoy </title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('css/style.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('css/style-calendar.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('css/pbcalendar.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('fonts/font-awesome-css/all.css');?>">



  <link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css');?>">

  <link rel="stylesheet" href="https://use.typekit.net/efj6wpg.css">

  <link rel="stylesheet" href="<?php echo base_url('css/owl.theme.default.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.min.css');?>">

  <link rel="icon" href="<?php echo base_url('img/logo.png');?>" type="image/png" sizes="16x16">





  <link href="<?php echo base_url('css/flags.css');?>" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">



  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link rel="stylesheet" href="<?php echo base_url('css/password-meter.css') ?>"> 





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



    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-register z-index-99999" id="toggle-bg">

      <div class="container-fluid mini-container justify-cntnt-unst-sm direction-rtl-sm">

    <form class="d-flex w-100" method="post" action="<?php echo base_url()?>home/login">

      <a class="navbar-brand ml-auto mr-0" href="<?php echo base_url();?>"><img src="<?php echo base_url('img/logo.svg');?>" class="img-fluid">

      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>



      <div class="collapse navbar-collapse" id="navbarsExampleDefault">



        <ul class="navbar-nav align-self-end mr-auto w-100 justify-content-end desk-ul mt-3">

          <li class="nav-item position-relative pl-2 pr-2">

            <input type="text" name="unique_id" class="form-control py-0" placeholder="Email or phone">

          </li>

          <li class="nav-item pl-1 pr-1">

            <div class="position-relative">



            <input type="password" name="password" class="form-control py-0" placeholder="Password" id="showPassword">

            <span class="pwd-show position-absolute"> <a href="javascript:void(0)" onclick="showPass();">Show</a></span> 

            </div>

            <p class="small my-0 text-right font-12"><a href="<?php echo base_url('home/forget_password') ?>" class="text-dark"> <strong>Forgot Password?</strong></a>  </p>

          </li>

          <li class="nav-item pl-2 pr-3 mt-0">

            <button class="btn bg-logo text-white login-btn border-radius-50" style="padding: 1px 10px;">Login</button> 

          </li>

          <li class="nav-item pl-1 pr-1" style="height: 15px;"> or

            <a class="nav-link position-relative social-icon px-1 py-0" href="javascript:void(0)"> <i class="fa fa-facebook"></i> </a>

            <a class="nav-link position-relative social-icon px-1 py-0" href="javascript:void(0)"> <i class="fa fa-twitter"></i> </a>

            <a class="nav-link position-relative social-icon px-1 py-0" href="javascript:void(0)"> <i class="fa fa-google-plus"></i></a>

          </li>

        </ul>



  

      </div>

    </form>

    </div> <!-- //container  -->

    </nav> <!-- //nav end here  -->

<!-- 

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-register" id="toggle-bg">

  <div class="container-fluid mini-container justify-cntnt-unst-sm direction-rtl-sm">

        

  <form class="d-flex w-100" method="post" action="<?php echo base_url()?>home/login">

      <a class="navbar-brand ml-auto mr-0" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>img/logo.svg" class="img-fluid"></a>



      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>



      <div class="collapse navbar-collapse" id="navbarsExampleDefault">



        <ul class="navbar-nav align-self-end mr-auto w-100 justify-content-end desk-ul">

          <li class="nav-item position-relative pl-2 pr-2">

            <input type="text" name="unique_id" class="form-control py-1" placeholder="Email or phone" required="">

          </li>

          <li class="nav-item pl-1 pr-1">

            <div class="position-relative">

            <input type="password" name="password" class="form-control py-1" placeholder="Password" id="showPassword" required="">

            <span class="pwd-show position-absolute"> <a href="javascript:void(0)" onclick="showPass();">Show</a></span> 

            </div>

            <p class="small mt-0 text-right font-12"><a href="<?php echo base_url() ?>home/forget_password" class="text-dark"> <strong>Forgot Password?</strong></a>  </p>

          </li>

          <li class="nav-item pl-2 pr-3 mt-1">

              

           <button type="submit"class="btn btn-danger login-btn border-radius-50">Login</button> 

          </li>

          <li class="nav-item pl-1 pr-1"> or

            <a class="nav-link position-relative social-icon px-1" href="#"> <i class="fa fa-facebook"></i> </a>

            <a class="nav-link position-relative social-icon px-1" href="#"> <i class="fa fa-twitter"></i> </a>

            <a class="nav-link position-relative social-icon px-1" href="#"> <i class="fa fa-google-plus"></i></a>

          </li>

        </ul>



       

      </div>

    </form>

    </div>  //container  

    </nav> //nav end here 

 -->