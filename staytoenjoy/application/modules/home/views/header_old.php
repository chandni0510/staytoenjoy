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
   <link href="<?php echo base_url();?>css/flags.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.css">

  <!-- css files end here  -->
</head>
  <body>
    <!-- Modal -->
<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog video-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body video-body">

       <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
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

      <div class="container-fluid mini-container justify-cntnt-unst-sm direction-rtl-sm">
      <a class="navbar-brand mr-0" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>img/logo.svg" class="img-fluid"></a>
      <form class="my-2 my-lg-0 search-mob responsive d-none">
        <div class="position-relative">
          <input type="text" class="form-control" placeholder="Search for accomodation, shops, people and others">
          <a href="javascript:void(0)" class="back-icon d-none"><img src="<?php echo base_url() ?>img/arrow-left.png"></a>
        </div>
      </form>
      <span class="search-icon responsive mx-3"><i class="fa fa-search"></i></span>
      <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse direction-ltr-sm" id="navbarsExampleDefault">

        <form class="my-2 my-lg-0 mr-auto w-100 search-desk ml-3 max-w-570">
          <div class="position-relative">
          <input class="form-control mysearch mr-sm-2" type="text" placeholder="Search for accomodation, shops, people and others" aria-label="Search">
          <span class="search-icon"><i class="fa fa-search"></i></span>
        </div>
        </form>
        
<?php 
//echo "hii";
//print_r($session);
if(!empty($session)) {?>

        <ul class="navbar-nav align-self-end desk-ul">
          <li class="nav-item active">
            <a class="nav-link " href="#"> <span class="sr-only"></span></a>
          </li>
          <li class="nav-item position-relative pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="#">  <img src="<?php echo base_url() ?>img/user.svg" style="width: 28px; height: 28px"> <span class="notify-circle">5</span> </a>
          </li>
          <li class="nav-item pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="#"> <img src="<?php echo base_url() ?>img/msg.svg"> <span class="notify-circle">3</span> </a>
          </li>
          <li class="nav-item pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="#"> <img src="<?php echo base_url() ?>img/chat.svg" style="width: 26px; height: 26px"> <span class="notify-circle">8</span> </a>
          </li>
          <li class="nav-item pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="#"> <img src="<?php echo base_url() ?>img/calendar.svg"> <span class="notify-circle">9</span> </a>
          </li>
          <li class="nav-item pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="#"> <img src="<?php echo base_url() ?>img/cart.svg" style="width: 26px; height: 26px"> <span class="notify-circle">9</span> </a>
          </li>
          <li class="nav-item pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="#"> <img src="<?php echo base_url() ?>img/info.svg" style="width: 29px; height: 29px">  </a>
          </li>
          <li class="nav-item pl-2 pr-1 seprater position-relative">
            <a class="nav-link position-relative menu-icon" href="#"> <img src="<?php echo base_url() ?>img/menu.png">  </a>
          </li>
          <li class="nav-item pl-1 pr-2 dropdown">
            <a class="nav-link position-relative menu-icon d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"> <img src="<?php echo base_url() ?>img/profile.png" style="width:28px; height:28px">
			<?php echo isset($session->first_name)? $session->first_name." ".$session->last_name : " " ;?>
            </a>
			<div class="white-bx-cst-shdow border-0 dropdown-menu profile-tab-big" aria-labelledby="navbarDropdown" style="left: -48px;">
            <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="<?php echo base_url()?>home/profile_setting"><i class="fa w-10"></i> Settings &amp; Privacy <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)"><i class="fa w-10"></i> Help and Support
              <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-file-text-o w-10"></i> Manage Pages <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-map-o w-10"></i> Local Area <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-theme" href="<?php echo base_url()?>home/profile_setting"><i class="fa fa-edit w-10"></i> Edit Profile <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-theme" href="account-settings.php"><i class="fa fa-cog w-10"></i> Account Settings <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-life-ring w-10"></i> Verifications <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-lock w-10"></i> Change Password <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-list-alt w-10"></i> List Offers <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-edit w-10"></i> Edit Offers <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-pencil w-10"></i> Create Add <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-eye w-10"></i> View Add <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-exchange w-10"></i> View Transactions <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-red" href="<?php echo base_url()?>home/logout"><i class="fa fa-sign-out w-10"></i> Logout <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
          </div>
            <!--<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url()?>home/profile_setting">Settings</a>
          <a class="dropdown-item" href="<?php echo base_url()?>home/logout">Logout</a>
        </div> -->
          </li>
            <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
        </ul>
<?php } else{?>


        <ul class="navbar-nav align-self-end mr-auto w-100 justify-content-end desk-ul">
          <li class="nav-item active">
            <a class="nav-link" href="javascript:void(0)"> <span class="sr-only"></span></a>
          </li>
          <li class="nav-item position-relative pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="<?php echo base_url() ?>home/add_listing"> Add Listings </a>
          </li>
          <li class="nav-item pl-1 pr-1">
            <a class="nav-link position-relative menu-icon" href="javascript:void(0)"> Help </a>
          </li>
          <li class="nav-item pl-1 pr-1">
            <a class="nav-link position-relative menu-icon" href="<?php echo base_url() ?>home/login_register"> Signup/Login </a>
          </li>
            <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)">Another action</a>
              <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
            </div>
          </li> -->
        </ul>

        <ul class="navbar-nav align-self-end mr-auto mob-ul">
          <li class="nav-item active">
            <a class="nav-link " href="javascript:void(0)"> <span class="sr-only"></span></a>
          </li>
          <li class="nav-item pl-2 pr-2 position-relative">
            <a class="nav-link menu-icon" href="javascript:void(0)"><strong> Add Listings </strong> </a>
          </li>
          <li class="nav-item pl-2 pr-2 position-relative">
            <a class="nav-link menu-icon" href="javascript:void(0)"><strong> Help </strong> </a>
          </li>
          <li class="nav-item pl-2 pr-2 position-relative">
            <a class="nav-link menu-icon" href="login-register.html"><strong> Signup/Login </strong> </a>
          </li>
        </ul>

      <?php } ?>
      </div>

    </div> <!-- //container  -->
    </nav> <!-- //nav end here  -->