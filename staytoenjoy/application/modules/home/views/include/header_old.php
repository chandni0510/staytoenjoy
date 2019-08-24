<!DOCTYPE html>
<head>
  <title> Stay to enjoy </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
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
  
  <link rel="stylesheet" href="<?php echo base_url('css/tagit/tagit-simple-blue.css');?>">
<link rel="stylesheet" href="<?php echo base_url('css/tagit/tagit.css');?>">
  <!-- tagit
<link rel="stylesheet" href="<?php echo base_url('css/tagit/jquery-ui-base-1.8.20.css');?>">
<link rel="stylesheet" href="<?php echo base_url('css/tagit/tagit-simple-blue.css');?>">
<link rel="stylesheet" href="<?php echo base_url('css/tagit/tagit.css');?>">
<link rel="stylesheet" href="<?php echo base_url('css/tagit/demo.css');?>-->

   <link href="<?php echo base_url('css/flags.css');?>" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.css">

  <!-- css files end here  -->
</head>
  <body class="shadow-none">
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

   <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white border-bottom" id="toggle-bg">
  <div class="container-fluid mini-container px-15px justify-cntnt-unst-sm direction-rtl-sm">
    <a class="navbar-brand mr-0 w-45px" href="<?php echo base_url();?>"><img src="<?php echo base_url('img/logo.svg');?>" class="img-fluid"></a>
    <form class="my-2 my-lg-0 search-mob responsive d-none">
      <div class="position-relative">
        <input type="text" class="form-control" placeholder="Search for accomodation, shops, people and others">
        <a href="javascript:void(0)" class="back-icon d-none"><img src="<?php echo base_url('img/arrow-left.png');?>"></a>
      </div>
    </form>
    <span class="search-icon responsive mx-3"><i class="fa fa-search"></i></span>
    <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse direction-ltr-sm navbar-collapse d-flex justify-content-between" id="navbarsExampleDefault">
      <form class="my-2 my-lg-0 w-100 search-desk ml-3" style="max-width:430px;">
        <div class="position-relative mysearch-box">
          <?php if(!empty($session)){
            $mysearch = "mysearch_input";
          }else{
            $mysearch = "";
          } ?>

          <input class="form-control mysearch <?php echo $mysearch; ?>  bg-white mr-sm-2 border" type="text" placeholder="Search for accomodation, shops, people and others" aria-label="Search" id="serchBox">

          <span class="search-icon text-theme"><i class="fa fa-search"></i></span>
          <div class="position-absolute search-tab-big bg-white">
            <div class="d-flex w-100 bg-secondary border-bottom font-12 text-theme-blue">
              <div class="py-2 px-3">RECENT SEARCHES</div>
              <div class="py-2 px-3 ml-auto text-right">EDIT</div>
            </div>
            <?php
            for ($x = 0; $x <= 1; $x++) { ?>
            <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
              <div class="profile-pic position-relative">
                <img src="<?php echo base_url('img/profile-img.jpg');?>" class="w-100">
                <div class="online-circle red position-absolute rounded-circle"></div>
              </div>
              <div class="pl-2">
                <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
                <span class="text-secondary pl-2 font-12">Hamburg </span>
                <span class="text-secondary pl-2 font-12">4,970 friends</span>
              </div>
              <div class="pl-2 ml-auto mt-2">
                <input type="button" class="w-100 font-12 shadow py-1 px-3 btn btn-primary bg-primary d-none" value="Remove">
              </div>
            </div>
            <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
              <div class="profile-pic position-relative">
                <img src="<?php echo base_url('img/profile-img.jpg');?>" class="w-100">
                <div class="online-circle green position-absolute rounded-circle"></div>
              </div>
              <div class="pl-2">
                <p class="text-dark mb-0 font-14 pl-2">Marie Thomsen, Designer</p>
                <span class="text-secondary pl-2 font-12">Hamburg,</span>
                <span class="text-secondary pl-2 font-12">22 Mutual Friends</span>
              </div>
              <div class="pl-2 ml-auto mt-2">
                <input type="button" class="w-100 font-12 shadow py-1 px-3 btn btn-primary bg-primary d-none" value="Remove">
              </div>
            </div>
            <?php } ?>
            <div class="font-14 px-3 border-top py-2 text-center">
              <a href="javascript:void(0)" class="text-theme-blue">View All</a>
            </div>
          </div>
        </div>
      </form>
        
<?php 
//echo "hii";
//print_r($session);
if(!empty($session)) {?>

      
      <ul class="navbar-nav desk-ul pt-2 pl-5 ml-2" style="margin-right: 25%;>
        <li class="nav-item active">
          <a class="nav-link" href="javascript:void(0)"> <span class="sr-only"></span></a>
        </li>
        <li class="nav-item position-relative pl-2 pr-3" id="request-click">
          <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px" href="javascript:void(0)"> <img src="<?php echo base_url('img/user.svg');?>" class="w-h-22px mb-5px ml-1px"> <span class="notify-circle">5</span> </a>
        </li>
        <li class="nav-item dropdown hide-caret">
          <div class="white-bx-cst-shdow profile-setting border-0 dropdown-menu request-tab-big"> <!--  -->
            <div class="font-14 px-3 border-bottom pb-2">Friend Requests
              <a href="javascript:void(0)" class="float-right pl-3 text-theme-blue">Settings</a>
              <a href="javascript:void(0)" class="float-right">Find Friends</a>
            </div>

            <div class="p-2 max-h-320 overflow-auto scroll-design">
              <?php 
              for ($x = 0; $x <= 1; $x++) { ?>
              <div class="d-flex border-r-10 shadow-sm border font-14 border-bottom p-2 my-1 hover-grey">
                <div class="notif-box-one">
                  <div class="profile-pic">
                    <img src="<?php echo base_url('img/profile-img.jpg');?>" class="w-100">
                  </div>
                </div>
                <div class="notif-box-two px-2">
                  <div class="w-100">
                    <p class="text-dark mb-0 d-inline-block font-weight-bold pt-2">Marie Thomsen, Designer</p>
                  </div>
                  <div class="w-100 mt--5px">
                    <span class="text-secondary font-12">Hamburg, Germany</span>
                    <img src="<?php echo base_url('img/noun_dot.svg');?>">
                    <span class="text-secondary font-12">22 Mutual Friends</span>
                  </div>
                </div>
                <div class="notif-box-three ml-auto pr-2">
                  <input type="button" class="mt-2 font-12 shadow py-1 px-3 btn btn-primary bg-primary" value="Accept">
                  <input type="button" class="ml-2 mt-2 font-12 shadow py-1 px-3 btn btn-primary border text-dark bg-transparent" value="Decline">
                </div>
              </div>
              <?php } ?>
              <div class="text-dark font-14 mt-3 mb-2 px-2">People You May Know</div>
              <?php 
              for ($x = 0; $x <= 1; $x++) { ?>
              <div class="d-flex border-r-10 shadow-sm border font-14 border-bottom p-2 my-1 hover-grey">
                <div class="notif-box-one">
                  <div class="profile-pic">
                    <img src="<?php echo base_url('img/profile-img.jpg');?>" class="w-100">
                  </div>
                </div>
                <div class="notif-box-two px-2">
                  <div class="w-100">
                    <p class="text-dark mb-0 d-inline-block">Marie Thomsen, Designer</p>
                  </div>
                  <div class="w-100">
                    <span class="text-secondary font-12">Hamburg,</span>
                    <span class="text-secondary pl-2 font-12">22 Mutual Friends</span>
                  </div>
                </div>
                <div class="notif-box-three ml-auto pr-2">
                  <input type="button" class="mt-2 font-12 shadow py-1 px-3 btn btn-primary bg-primary" value="Accept">
                  <input type="button" class="ml-2 mt-2 font-12 shadow py-1 px-3 btn btn-primary border text-dark bg-transparent" value="Decline">
                </div>
              </div>
              <?php } ?>
            </div>
            
            <div class="font-14 px-3 border-top pt-2 text-center">
              <a href="javascript:void(0)" class="text-theme-blue">See All</a>
            </div>
          </div>
        </li>
        <li class="nav-item pl-2 pr-3">
          <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px" href="javascript:void(0)"> <img src="<?php echo base_url('img/msg.svg');?>" class="w-h-22px mb-5px ml-1px"> <span class="notify-circle" style="right: -3px;">3</span> </a>
        </li>
        <li class="nav-item pl-2 pr-3">
          <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px" href="javascript:void(0)"> <img src="<?php echo base_url('img/chat.svg');?>" class="w-h-25px mb-5px ml-1px"> <span class="notify-circle">8</span> </a>
        </li>
        <li class="nav-item pl-2 pr-3">
          <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px" href="javascript:void(0)"> <img src="<?php echo base_url('img/calendar.svg');?>" class="w-h-22px mb-5px ml-1px"> <span class="notify-circle" style="right: -3px;">9</span> </a>
        </li>
        <li class="nav-item pl-2 pr-3">
          <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px" href="javascript:void(0)"> <img src="<?php echo base_url('img/cart.svg');?>" class="w-h-22px mb-5px ml-1px"> <span class="notify-circle" style="right: 2px;">9</span> </a>
        </li>
        <li class="nav-item pl-2 pr-3" id="notif-click">
          <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px" href="javascript:void(0)"> <img src="<?php echo base_url('img/notification-tab.svg');?>" class="w-h-22px mb-5px ml-1px"> <span class="notify-circle" style="right: 1px;">8</span> </a>
        </li>
        <li class="nav-item dropdown hide-caret">
          <div class="white-bx-cst-shdow profile-setting border-0 dropdown-menu notif-tab-big"> <!--  -->
            <div class="font-14 px-3 border-bottom pb-2">Notifications
              <a href="javascript:void(0)" class="float-right pl-3 text-theme-blue">Settings</a>
              <a href="javascript:void(0)" class="float-right">Mark All as Read</a>
            </div>

            <ul class="nav nav-tabs px-2" id="myTab" role="tablist">
              <li class="nav-item mx-2">
                <a class="nav-link px-0 h-38 font-12 active bg-blue-light" data-toggle="tab" href="#all-notif" role="tab" aria-controls="home" aria-selected="true">All</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link px-0 h-38 font-12" data-toggle="tab" href="#discount-notif" role="tab" aria-controls="profile" aria-selected="false">Discount</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link px-0 h-38 font-12" data-toggle="tab" href="#voucher-notif" role="tab" aria-controls="contact" aria-selected="false">Voucher</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link px-0 h-38 font-12" data-toggle="tab" href="#events-notif" role="tab" aria-controls="contact" aria-selected="false">Events</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link px-0 h-38 font-12" data-toggle="tab" href="#bookings-notif" role="tab" aria-controls="contact" aria-selected="false">Bookings</a>
              </li>
            </ul>
            <div class="tab-content max-h-320 overflow-auto scroll-design" id="myTabContent">
              <div class="tab-pane fade show active p-2" id="all-notif" role="tabpanel">
                <?php 
                  for ($x = 0; $x <= 3; $x++) { ?>
                <div class="d-flex border-r-10 shadow-sm border font-14 border-bottom p-2 my-1 hover-grey" href="javascript:void(0)">
                  <div class="notif-box-one">
                    <div class="profile-pic">
                      <img src="<?php echo base_url('img/profile-img.jpg');?>" class="w-100">
                    </div>
                  </div>
                  <div class="notif-box-two px-2">
                    <div class="w-100">
                      <p class="text-dark mb-0 d-inline-block font-weight-bold pt-2">Marie Thomsen, Designer</p>
                      <img src="<?php echo base_url('img/noun_dot.svg');?>">
                      <span class="text-secondary font-12">San Fransisco</span>
                    </div>
                    <div class="w-100 mt--5px">
                      <a href="javascript:void(0)"><img src="<?php echo base_url('img/notif-thumsup.svg');?>"></a>
                      <span class="text-secondary font-12">liked your picture,</span>
                      <span class="text-secondary font-12">6 Min ago</span>
                    </div>
                  </div>
                  <div class="notif-box-three ml-auto pr-2">
                    <div class="dropdown">
                      <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-ellipsis-h"></i>
                      </a>
                      <div class="dropdown-menu white-bx-cst-shdow font-14" style="left:-170px;">
                        <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mute</a>
                        <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mark as read</a>
                        <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Remove</a>
                        <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Turn off Notifications</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex border-r-10 shadow-sm border font-14 border-bottom p-2 my-1 hover-grey" href="javascript:void(0)">
                  <div class="notif-box-one">
                    <div class="profile-pic">
                      <img src="<?php echo base_url('img/profile-img.jpg');?>" class="w-100">
                    </div>
                  </div>
                  <div class="notif-box-two px-2">
                    <div class="w-100">
                      <p class="text-dark mb-0 d-inline-block font-weight-bold pt-2">Marie Thomsen, Designer</p>
                      <img src="<?php echo base_url('img/noun_dot.svg');?>">
                      <span class="text-secondary font-12">San Fransisco</span>
                    </div>
                    <div class="w-100 mt--5px">
                      <a href="javascript:void(0)" ><img src="<?php echo base_url('img/noun_dot.svg');?>"></a>
                      <span class="text-secondary font-12">liked your picture,</span>
                      <span class="text-secondary font-12">6 Min ago</span>
                    </div>
                  </div>
                  <div class="notif-box-three ml-auto pr-2">
                    <div class="dropdown">
                      <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-ellipsis-h"></i>
                      </a>
                      <div class="dropdown-menu white-bx-cst-shdow font-14" style="left:-170px;">
                        <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mute</a>
                        <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mark as read</a>
                        <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Remove</a>
                        <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Turn off Notifications</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-theme-blue font-14 mt-3 mb-2 px-2">Earlier</div>
                <?php } ?>
              </div>
              <div class="tab-pane fade p-2 font-12" id="discount-notif" role="tabpanel">Discount</div>
              <div class="tab-pane fade p-2 font-12" id="voucher-notif" role="tabpanel">Voucher</div>
              <div class="tab-pane fade p-2 font-12" id="events-notif" role="tabpanel">Events</div>
              <div class="tab-pane fade p-2 font-12" id="bookings-notif" role="tabpanel">Bookings</div>
            </div>

             
            <div class="font-14 px-3 border-top pt-2 text-center">
              <a href="javascript:void(0)" class="text-theme-blue">See All</a>
            </div>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav align-self-end desk-ul pt-2>
        <li class="nav-item pl-2 pr-2">
          <a class="nav-link position-relative menu-icon pt-1" href="<?php echo base_url('home/helpcenter');?>"> <img src="<?php echo base_url('img/info.svg');?>" class="w-h-25px"></a>
        </li>
        <li class="nav-item pl-2 pr-1 position-relative dropdown hide-caret">
          <a class="nav-link position-relative menu-icon dropdown-toggle pt-4px" href="javascript:void(0)" role="button" data-toggle="dropdown"> <img src="<?php echo base_url('img/menu.svg');?>"> </a>
          <div class="white-bx-cst-shdow border-0 dropdown-menu appmenu-tab-big py-0 scroll-design">
            <div class="d-flex align-items-center">
              <div class="w-50 text-right pr-4">
                <h5 class="d-inline-block px-2 mt-3 mb-2 text-dark pt-2 pb-1">Explore</h5>
              </div>
              <div class="w-50 pt-3 pr-3">
                <img src="<?php echo base_url('img/search-big-idea.svg');?>" class="w-100">
              </div>
            </div>
            <div class="container-fluid pb-5">
              <div class="row mt-4">
                <div class="col-sm-4 mt-3 text-center">
                  <img src="<?php echo base_url('img/app-menu-my-business.svg');?>" class="w-75">
                  <h6 class="font-14 pt-2 mb-0 text-dark text-center">My Business</h6>
                </div>
                <div class="col-sm-4 mt-3 text-center">
                  <img src="<?php echo base_url('img/app-menu-my-business.svg');?>" class="w-75">
                  <h6 class="font-14 pt-2 mb-0 text-dark text-center">Shopping</h6>
                </div>
                <div class="col-sm-4 mt-3 text-center">
                  <img src="<?php echo base_url('img/app-menu-my-business.svg');?>" class="w-75">
                  <h6 class="font-14 pt-2 mb-0 text-dark text-center">Shop</h6>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-sm-4 mt-3 text-center">
                  <img src="<?php echo base_url('img/app-menu-calender.svg');?>" class="w-75">
                  <h6 class="font-14 pt-2 mb-0 text-dark text-center">Calender</h6>
                </div>
                <div class="col-sm-4 mt-3 text-center">
                  <img src="<?php echo base_url('img/app-menu-shipping.svg');?>" class="w-75">
                  <h6 class="font-14 pt-2 mb-0 text-dark text-center">Shipping</h6>
                </div>
                <div class="col-sm-4 mt-3 text-center">
                  <img src="<?php echo base_url('img/app-menu-my-business.svg');?>" class="w-75">
                  <h6 class="font-14 pt-2 mb-0 text-dark text-center">My Business</h6>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-sm-4 mt-3 text-center">
                  <img src="<?php echo base_url('img/app-menu-my-business.svg');?>" class="w-75">
                  <h6 class="font-14 pt-2 mb-0 text-dark text-center">Shopping</h6>
                </div>
                <div class="col-sm-4 mt-3 text-center">
                  <img src="<?php echo base_url('img/app-menu-my-business.svg');?>" class="w-75">
                  <h6 class="font-14 pt-2 mb-0 text-dark text-center">Shop</h6>
                </div>
                <div class="col-sm-4 mt-3 text-center">
                  <img src="<?php echo base_url('img/app-menu-calender.svg');?>" class="w-75">
                  <h6 class="font-14 pt-2 mb-0 text-dark text-center">Calender</h6>
                </div>
              </div>
              
            </div>
            <div class="font-14 px-3 border-top py-2 text-center bg-secondary">
              <a href="javascript:void(0)" class="text-theme-blue">More</a>
            </div>
          </div>
        </li>
        <li class="nav-item pl-1 pr-2 dropdown">
          <a class="nav-link position-relative menu-icon d-flex align-items-center pt-4px dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
            <img src="<?php echo base_url('img/profile-pic.svg');?>" style="width:25px; height:26px; padding-top:2px;">
              <?php //echo isset($session->first_name)? $session->first_name." ".$session->last_name : " " ;?>
          </a>
          <div class="white-bx-cst-shdow border-0 dropdown-menu profile-tab-big" >
            <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="<?php echo base_url('home/profile_setting')?>"><i class="fa w-10"></i> Settings & Privacy <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)"><i class="fa w-10"></i> Help and Support
              <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-file-text-o w-10"></i> Manage Pages <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-map-o w-10"></i> Local Area <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
            <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-edit w-10"></i> Edit Profile <i class="fa fa-angle-right float-right pt-1"></i>
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
            <a class="dropdown-item font-14 py-2 hover-red" href="<?php echo base_url('home/logout')?>"><i class="fa fa-sign-out w-10"></i> Logout <i class="fa fa-angle-right float-right pt-1"></i>
            </a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav align-self-end mr-auto mob-ul">
        <li class="nav-item active">
          <a class="nav-link" href="javascript:void(0)"> <span class="sr-only"></span></a>
        </li>
        <li class="nav-item seprater position-relative pl-2 pr-2">
          <a class="nav-link position-relative menu-icon" href="javascript:void(0)"> <img src="<?php echo base_url('img/user.svg');?>" style="width: 28px; height: 28px"> <strong> Friend Request </strong> </a>
          <span class="notify-circle notify-right">5</span>
        </li>
        <li class="nav-item position-relative pl-2 pr-2">
          <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="<?php echo base_url('img/msg.svg');?>"> <strong> Message </strong></a>
          <span class="notify-circle notify-right">3</span>
        </li>
        <li class="nav-item pl-2 pr-2 position-relative">
          <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="<?php echo base_url('img/chat.svg');?>" style="width: 26px; height: 26px"> <strong> Chat </strong> </a>
          <span class="notify-circle notify-right">8</span>
        </li>
        <li class="nav-item pl-2 pr-2 position-relative">
          <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="<?php echo base_url('img/calendar.svg');?>"> <strong> Calendar Date </strong> </a>
          <span class="notify-circle notify-right">9</span>
        </li>
        <li class="nav-item pl-2 pr-2 position-relative">
          <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="<?php echo base_url('img/cart.svg');?>" style="width: 26px; height: 26px"> <strong> Shopping Cart </strong> </a>
          <span class="notify-circle notify-right">9</span>
        </li>
        <li class="nav-item pl-2 pr-2 position-relative">
          <a class="nav-link menu-icon" href="<?php echo base_url('home/helpcenter')?>"> <img src="<?php echo base_url('img/info.svg');?>" style="width: 29px; height: 29px"> <strong> Help </strong> </a>
        </li>
        <li class="nav-item pl-2 pr-1 seprater position-relative">
          <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="<?php echo base_url('img/menu.png');?>"><strong> Category </strong></a>
        </li>
        <li class="nav-item pl-1 pr-2 dropdown">
          <a class="nav-link position-relative menu-icon dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown"> <img src="<?php echo base_url('img/profile.png');?>" style="width:28px; height:28px"><strong> Profile </strong>
          </a>
            <a class="dropdown-item" href="javascript:void(0)">Settings</a>
            <a class="dropdown-item" href="<?php echo base_url('home/logout')?>">Logout</a>
          </div>
        </li>
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

  