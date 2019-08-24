<?php include 'include/header.php';?>
  <style>
  .hide_footer{
    display:none!important;
  }
 
</style>   
    <main role="main">

      <?php include 'include/white-feed-header.php';?>

      <!-- Main jumbotron for a primary marketing message or call to action -->

      <div class="border-top pb-1 bg-light-blue pt-43px">
        <div class="cover-photos-profile border-bottom position-relative">
          <div class="position-absolute l-0 r-0 t-half text-center" style="transform: translateY(-50%)">
            <div class="position-relative mx-w-300 m-auto">
              <div class="cover-pic-popup bg-theme p-2">
                <div class="position-relative">Hello Jens, please upload a cover photo
                  <a href="javascript:void(0)" value="Skip" class="cover-skip-btn hover-theme hover-white">
                    <i class="fa fa-close"></i>
                  </a>
                    <div class="w-100 mt-2 d-flex border-top">
                    <button class="btn bg-theme border-r-0 text-white w-100 font-14">Skip</button>
                    <button class="btn bg-theme border-r-0 text-white border-left w-100 font-14">Next</button>
                  </div>
                </div>
              </div>
            </div> 

            
            <label class="py-2 px-3 cusor-pointer border-r-20 border upload" data-toggle="modal" data-target="#all-informations" style="background: #00000059;">
            
              <i class="fa fa-photo text-white"></i>
              <p class="d-inline-block pl-2 text-white">Upload</p>
            </label>
 


          </div>
          <div class="position-absolute t-half text-center mx-w-300" style="transform: translateY(-50%); right: 8%;">
            <div class="bg-white shadow-sm border-r-10">

              <div id="tour-cover-slide" class="carousel slide position-relative" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators" style="position: absolute; bottom: -30px;">
                  <li data-target="#tour-cover-slide" data-slide-to="0" class="active"></li>
                  <li data-target="#tour-cover-slide" data-slide-to="1"></li>
                  <li data-target="#tour-cover-slide" data-slide-to="2"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item border-r-10 overflow-hidden active">
                    <div class="h-150px">
                      <img src="<?php echo base_url() ?>/img/barcelona.jpg" alt="Los Angeles" class="w-100 h-100">
                    </div>
                    <div class="pl-3 pt-0 pb-3 d-flex bg-white justify-content-between align-items-center border-bottom">
                      <div class="bg-white text-left">
                        <h5 class="pt-4 mb-0">Munic Tour</h5>
                        <div class="mt--4px">
                          <i class="font-12">Be a part of the fantastic...</i>
                        </div>
                      </div>
                      <div class="float-right w-25">
                        <span class="font-10 pt-2 line-through red">from $50</span>
                        <div class="bg-theme text-white font-20 mt--4px font-weight-bold text-left pl-3 py-1 rounded-t-l-5">
                          $40 <div class="font-10 font-weight-normal mt--5px">p. Person</div>
                        </div>
                      </div>
                    </div>
                    <div class="w-100 p-3">
                      <button class="btn btn-primary bg-secondary text-theme border-0 px-4">View more</button>
                    </div>
                  </div>
                  <div class="carousel-item border-r-10 overflow-hidden">
                    <div class="h-150px">
                      <img src="<?php echo base_url() ?>/img/barcelona.jpg" alt="Los Angeles" class="w-100 h-100">
                    </div>
                    <div class="pl-3 pt-0 pb-3 d-flex bg-white justify-content-between align-items-center border-bottom">
                      <div class="bg-white text-left">
                        <h5 class="pt-4 mb-0">Munic Tour</h5>
                        <div class="mt--4px">
                          <i class="font-12">Be a part of the fantastic...</i>
                        </div>
                      </div>
                      <div class="float-right w-25">
                        <span class="font-10 pt-2 line-through red">from $50</span>
                        <div class="bg-theme text-white font-20 mt--4px font-weight-bold text-left pl-3 py-1 rounded-t-l-5">
                          $40 <div class="font-10 font-weight-normal mt--5px">p. Person</div>
                        </div>
                      </div>
                    </div>
                    <div class="w-100 p-3">
                      <button class="btn btn-primary bg-secondary text-theme border-0 px-4">View more</button>
                    </div>
                  </div>
                  <div class="carousel-item border-r-10 overflow-hidden">
                    <div class="h-150px">
                      <img src="<?php echo base_url() ?>/img/barcelona.jpg" alt="Los Angeles" class="w-100 h-100">
                    </div>
                    <div class="pl-3 pt-0 pb-3 d-flex bg-white justify-content-between align-items-center border-bottom">
                      <div class="bg-white text-left">
                        <h5 class="pt-4 mb-0">Munic Tour</h5>
                        <div class="mt--4px">
                          <i class="font-12">Be a part of the fantastic...</i>
                        </div>
                      </div>
                      <div class="float-right w-25">
                        <span class="font-10 pt-2 line-through red">from $50</span>
                        <div class="bg-theme text-white font-20 mt--4px font-weight-bold text-left pl-3 py-1 rounded-t-l-5">
                          $40 <div class="font-10 font-weight-normal mt--5px">p. Person</div>
                        </div>
                      </div>
                    </div>
                    <div class="w-100 p-3">
                      <button class="btn btn-primary bg-secondary text-theme border-0 px-4">View more</button>
                    </div>
                  </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev mb-5" href="#tour-cover-slide" data-slide="prev" style="bottom: 107px;">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next mb-5" href="#tour-cover-slide" data-slide="next" style="bottom: 107px;">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>

            </div>
          </div>
          <?php
          $cover_image = "";
           if(isset($users) && !empty($users->cover_image)){
                       $cover_image =   base_url().'uplaods/cover_image/'.$users->cover_image;
                     }else{
                        $cover_image = base_url().'img/cover-bg.jpg';
                     }
            ?>
           <div class="movecoverimage" >
          <img src="<?php echo $cover_image; ?>" class="cover_image" >
          </div> 
          <div class="p-3 timeline-profile-box align-items-center d-flex justify-content-center">   
            <div class="position-relative m-auto mx-w-120 pr-4 z-index-999">
              <div class="profile-pic-popup bg-theme p-2">
                <div class="position-relative">Please upload a profile picture
                  <a href="javascript:void(0)" value="Skip" class="profile-skip-btn hover-theme hover-white">
                    <i class="fa fa-close"></i>
                  </a>
                   <div class="w-100 mt-2 d-flex border-top">
                    <button class="btn bg-theme border-r-0 text-white w-100 font-14">Skip</button>

                    <button class="btn bg-theme border-r-0 text-white border-left w-100 font-14">Next</button>

                       <!-- <button class="movecoverleft">left</button>
                       <button class="movecoverright">right</button> -->
                  </div>
                </div>
              </div>
              
              <?php if(isset($users) && !empty($users->user_img)){
                       $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
                       $padding = "p-0";
                     }else{
                        $user_img = base_url().'/img/profile-img.svg';
                         $padding = "p-3";
                     }
                  ?>

              <div class="m-auto profile-img <?php echo $padding ;?> bg-theme" style="height: 120px; width: 120px;"
              id="profile-container">
                 
               
                <img src="<?php echo $user_img; ?>" class="w-100 h-100 rounded-0 profileImage" id="profileImage">

                <!-- <div id="profile-container">
                   <image  src="http://lorempixel.com/100/100" />
                </div> -->
                 
                <div class="online-circle green position-absolute rounded-circle b-10" style="right:5px;">
                    <div class="position-relative hover-visible">
                    <div class="position-absolute" style="top: -6px; left: -1px;">
                      <div class="dropdown d-inline-block">
                        <div data-toggle="dropdown" class="text-white">
                           <img src="<?php echo base_url() ?>img/drop-online-profile.png" style="width: 15px!important; height: 15px;">
                        </div>
                        <div class="dropdown-menu font-14">
                          <a class="dropdown-item px-3 hover-theme" href="javascript:void(0)">
                            <div class="d-inline-block w-h-8 rounded-circle bg-success mr-1"></div> Active
                          </a>
                          <a class="dropdown-item px-3 hover-theme" href="javascript:void(0)">
                            <div class="d-inline-block w-h-8 rounded-circle bg-warning mr-1"></div> Away</a>
                          <a class="dropdown-item px-3 hover-theme" href="javascript:void(0)">
                            <div class="d-inline-block w-h-8 rounded-circle bg-danger mr-1"></div> Do not disturb</a>
                          <a class="dropdown-item px-3 hover-theme" href="javascript:void(0)">
                            <div class="d-inline-block w-h-8 rounded-circle mr-1" style="background: #ccc"></div> Invisible</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="position-absolute camera-icon font-25 d-flex justify-content-center align-items-center t-0 r-0 b-0 l-0" style="background: #0000008f; border-radius: 50%; width: 120px; height: 120px;">

  
                <input id="imageUpload" type="file" 
                       name="profile_photo" class="position-absolute w-100 t-0 l-0 b-0 opacity-0" placeholder="Photo" required="" capture>
          

<!--  <div class="example-wrap">
                  <div class="example mt-0">
                    <input type="file" id="input-file-now-custom-1"  name="filefoto" class="dropify"
                    /> 
                   <label> <strong>Profile Image</strong></label>
                  </div>
                </div> -->
                  <i class="fa fa-camera text-white"></i>
                </div>
              </div>
            </div>
                     

            <div class="w-100 pl-3">
              <div class="float-left font-18 pr-3 text-white font-weight-bold">
                <?php echo isset($session['session'])? $session['session']->first_name :"Peter Mitchel"; ?>
              </div>
              <div class="w-1-box float-left" style="margin-top: 6px; background: #fff;"></div>
              <div class="float-left font-18 pl-3 text-white font-weight-bold">
                Tour Guide
                <div class="position-relative tooltip-hover float-right pl-2">
                  <img src="<?php echo base_url() ?>/img/verified-check.svg" class="w-h-30px">
                  <div class="position-absolute tooltip-inner" style="top: -42px; max-width: 250px; width: max-content;">This user has been <br> verified by StayToEnjoy
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid bg-white py-3 position-relative z-index-99" style="box-shadow: 0px 2px 6px #ccc;">  
          <div class="w-55 offset-w-20 px-3">
            <div class="pr-4 d-inline-block">
              <a class="nav-link rounded-circle px-0 d-inline-block" style="height: 38px; width: 30px;" href="javascript:void(0)">
                <img src="<?php echo base_url() ?>/img/streaming-icon.svg" class="w-h-22px">
              </a><span class="font-12">Go Live</span>
            </div>
            <div class="pr-4 d-inline-block">
              <a class="nav-link rounded-circle px-0 d-inline-block" style="height: 38px; width: 30px;" href="javascript:void(0)">
                <img src="<?php echo base_url() ?>/img/photos-img.svg" class="w-h-22px">
              </a><span class="font-12"> Photo </span> <span class="font-14 text-theme">300</span>
            </div>
            <div class="pr-3 d-inline-block">
              <div class="images-group mt-1">
                <div class="border">
                  <img src="<?php echo base_url() ?>/img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="border">
                  <img src="<?php echo base_url() ?>/img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="border">
                  <img src="<?php echo base_url() ?>/img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
                </div>
                <span class="font-12"> 222 Friends</span>
              </div>  
              <div class="pl-3 d-inline-block">
                <a href="javascript:void(0)" class="text-dark">
                  <i class="fa fa-ellipsis-h"></i>
                </a>
              </div>
            </div>
            <div class="px-3 d-inline-block float-right">
              <div class="images-group mt-2">
                <div class="border">
                  <img src="<?php echo base_url() ?>/img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="border">
                  <img src="<?php echo base_url() ?>/img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
                </div>
                <span class="text-secondary font-12 pr-3">You are frineds</span>
              </div>  
            </div>
          </div>
        </div>
      </div>
      


       <section class="content-sec bg-light-blue pt-0 h-100vh position-relative">
        <div class="container-fluid"><!--  mini-container -->
          <!-- Example row of columns -->
          <div class="row">
            
            <div class="col-lg-8 col-md-4 offset-lg-2">
              <!--<h1 class="mb-4 font-weight-normal">Settings</h1>-->
            </div>
          </div>
        
          <div class="position-absolute t-10 l-0 w-21 pb-2 left-feed pb-2">

            <div class="bg-white mb-4 rounded-10 border pb-3">
              <ul class="nav font-14 pt-2 px-0 d-flex justify-content-start z-index-9999 rounded-t-r-10 border-bottom">
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-3 text-dark border-bottom-3-hover active" data-toggle="pill" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-2 text-dark border-bottom-3-hover" data-toggle="pill" href="#today">Today</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-2 text-dark border-bottom-3-hover" data-toggle="pill" href="#weather">Weather</a>
                </li>
                <li class="nav-item ml-auto">
                  <a class="nav-link py-1 px-0 mx-2 text-dark" data-toggle="modal" data-target="#all-informations">
                    <input type="button" class="btn btn-primary hover-white font-12 bg-lt-blue border-0" value="Edit Profile" style="color: #007bff;">
                  </a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content bg-white">
                <div id="about" class="tab-pane active">
                  <?php include 'include/left-about.php';?>
                </div>
                <div id="today" class="tab-pane">
                  <?php include 'include/left-today.php';?>
                </div>
                <div id="weather" class="tab-pane">
                  <?php include 'include/left-weather.php';?>
                </div>
              </div>
            </div>

            <div class="bg-white mb-4 rounded-10 border pb-3">
              <ul class="nav font-14 pt-2 px-0 d-flex justify-content-start z-index-9999 rounded-t-r-10 border-bottom">
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 ml-3 mr-2 text-dark border-bottom-3-hover active" data-toggle="pill" href="#friends">Friends</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-2 text-dark border-bottom-3-hover" data-toggle="pill" href="#photos">Photos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-2 text-dark border-bottom-3-hover" data-toggle="pill" href="#you-m-know">Here too</a>
                </li>
                <li class="nav-item ml-auto">
                  <a class="nav-link pb-2 px-0 mx-3 text-dark" data-toggle="pill" href="#today"><i class="fa fa-ellipsis-h"></i></a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content bg-white">
                <div id="friends" class="tab-pane active">
                  <?php include 'include/left-friends.php';?>
                </div>
                <div id="photos" class="tab-pane">
                  <?php include 'include/left-photos.php';?>
                </div>
                <div id="you-m-know" class="tab-pane">
                  <?php include 'include/left-you-m-know.php';?>
                </div>
              </div>
            </div>

            <div class="bg-white mb-4 rounded-10 border p-3">
              <span class="bg-secondary w-h-35px rounded-circle p-1 mr-1">
                <img src="<?php echo base_url()?>img/star-img-icon.svg" class="w-h-18">
              </span>
              <span class="font-12 text-theme">English (US)</span>
              <img src="<?php echo base_url()?>img/noun_dot.svg">
              <span class="font-12">German</span>
              <img src="<?php echo base_url()?>img/noun_dot.svg">
              <span class="font-12">Spanish</span>
              <img src="<?php echo base_url()?>img/noun_dot.svg">
              <a href="javascript:void(0)" class="font-12" data-toggle="modal" data-target="#language-footer">All</a>

              <ul class="border-top mt-3 py-2">
                <li class="d-inline-block"><a href="javascript:void(0)" class="hover-theme font-12">Terms</a></li>
                <img src="<?php echo base_url()?>img/noun_dot.svg">
                <li class="d-inline-block"><a href="javascript:void(0)" class="hover-theme font-12">Privacy Policy</a></li>
                <img src="<?php echo base_url()?>img/noun_dot.svg">
                <li class="d-inline-block"><a href="javascript:void(0)" class="hover-theme font-12">Cookies</a></li>
                <img src="<?php echo base_url()?>img/noun_dot.svg">
                <li class="d-inline-block"><a href="javascript:void(0)" class="hover-theme font-12">Ads Info</a></li>
                <img src="<?php echo base_url()?>img/noun_dot.svg">
                <li class="d-inline-block"><a href="javascript:void(0)" class="hover-theme font-12">About</a></li>
                <img src="<?php echo base_url()?>img/noun_dot.svg">
                <li class="d-inline-block"><a href="javascript:void(0)" class="hover-theme font-12">Business Page</a></li>
                <img src="<?php echo base_url()?>img/noun_dot.svg">
                <li class="d-inline-block"><a href="javascript:void(0)" class="hover-theme font-12">Profile</a></li>
                <img src="<?php echo base_url()?>img/noun_dot.svg">
                <li class="d-inline-block"><a href="javascript:void(0)" class="hover-theme font-12">Friends</a></li>
                <img src="<?php echo base_url()?>img/noun_dot.svg">
                <li class="d-inline-block"><a href="javascript:void(0)" class="hover-theme font-12">Imprint</a></li>
              </ul>
            </div>
          </div>

          <div class="modal fade pr-0" id="language-footer">
            <div class="modal-dialog mw-100 h-100 m-0">
              <div class="modal-content rounded-0 mw-100 overflow-hidden h-100 h-auto-md" style="background: #fff;">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 text-right">
                      <a class="close-pop-btn" href="javascript:void(0)">
                        <img src="<?php echo base_url()?>img/x-dark.png" data-dismiss="modal">
                      </a>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                      <div class="w-300 m-auto">
                        <img src="<?php echo base_url()?>img/map-contact.svg" class="w-100">
                      </div>
                      <h3 class="text-dark my-3">CHOOSE YOUR COUNTRY</h3>
                      <p class="text-dark mb-5">Selecting a country may change the language and will deliver relevant content for your location.</p>
                    </div>
                    <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12 col-xs-12 pt-2">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="py-1 px-3 bg-secondary border border-r-20 lang-circle mb-2">
                            <img src="<?php echo base_url()?>img/nederland.png" class="va-text-b">
                            <h6 class="d-inline-block text-theme pl-3 mb-0">Nederland</h6>
                          </div>
                          <div class="py-1 px-3 bg-secondary border border border-r-20 lang-circle mb-2">
                            <img src="<?php echo base_url()?>img/united-state.png" class="va-text-b">
                            <h6 class="d-inline-block text-theme pl-3 mb-0">United States</h6>
                          </div>
                          <div class="py-1 px-3 bg-secondary border border border-r-20 lang-circle mb-2">
                            <img src="<?php echo base_url()?>img/espana.png" class="va-text-b">
                            <h6 class="d-inline-block text-theme pl-3 mb-0">Espana</h6>
                          </div>
                          <div class="py-1 px-3 bg-secondary border border-r-20 lang-circle mb-2">
                            <img src="<?php echo base_url()?>img/belgique_belgie.png" class="va-text-b">
                            <h6 class="d-inline-block text-theme pl-3 mb-0">Belgique/Belgie</h6>
                          </div>
                          <div class="py-1 px-3 bg-secondary border border-r-20 lang-circle mb-2">
                            <img src="<?php echo base_url()?>img/australia.png" class="va-text-b">
                            <h6 class="d-inline-block text-theme pl-3 mb-0">Australia</h6>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="py-1 px-3 bg-secondary border border-r-20 lang-circle mb-2">
                            <img src="<?php echo base_url()?>img/united-kingdom.png" class="va-text-b">
                            <h6 class="d-inline-block text-theme pl-3 mb-0">United Kingdom</h6>
                          </div>
                          <div class="py-1 px-3 bg-secondary border border-r-20 lang-circle mb-2">
                            <img src="<?php echo base_url()?>img/deutschland.png" class="va-text-b">
                            <h6 class="d-inline-block text-theme pl-3 mb-0">Deutschland</h6>
                          </div>
                          <div class="py-1 px-3 bg-secondary border border-r-20 lang-circle mb-2">
                            <img src="<?php echo base_url()?>img/france.png" class="va-text-b">
                            <h6 class="d-inline-block text-theme pl-3 mb-0">France</h6>
                          </div>
                          <div class="py-1 px-3 bg-secondary border border-r-20 lang-circle mb-2">
                            <img src="<?php echo base_url()?>img/canada.png" class="va-text-b">
                            <h6 class="d-inline-block text-theme pl-3 mb-0">Canada</h6>
                          </div>
                          <div class="py-1 px-3 bg-secondary border border-r-20 lang-circle mb-2">
                            <img src="<?php echo base_url()?>img/new-zealand.png" class="va-text-b">
                            <h6 class="d-inline-block text-theme pl-3 mb-0">New Zealand</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 border-left border-light ml-25px">
                      <div class="form-group contactForm pt-1 pl-3">
                        <label class="text-dark">Dont`t see your country? check the full list below</label>
                        <select class="form-control mt-3 text-theme custom-arrow bg-secondary blue-arrow border-r-20" style="background-color: #f1f2f2!important;">
                          <option class="bg-secondary">Choose your country </option>
                          <option class="text-dark">Nederland</option>
                          <option class="text-dark">United State</option>
                          <option class="text-dark">Espana</option>
                        </select>
                      </div>
                      <div class="form-group contactForm pt-1 pl-3">
                        <label class="text-dark">Choose</label>
                        <select class="form-control mt-3 custom-arrow bg-secondary border-r-20 blue-arrow" style="background-color: #f1f2f2!important;">
                          <option class="bg-secondary">Choose your Language </option>
                          <option class="text-dark">English</option>
                          <option class="text-dark">German</option>
                          <option class="text-dark">Spanish</option>
                          <option class="text-dark">Italien</option>
                        </select>


                        <!--<div class="py-1 px-3 mt-2 bg-secondary border border-r-20 lang-circle mb-2 w-50">
                          <img src="<?php echo base_url()?>img/united-kingdom.png" class="va-text-b">
                          <h6 class="d-inline-block text-dark pl-3 mb-0">English</h6>
                        </div>-->
                      </div>
                    </div>
                    <div class="offset-md-1 col-lg-6 col-sm-12 col-xs-12 mt-4">
                      <p class="text-dark">If you have questions,suggestion or complaints concerning our localisation efforts, <a href="javascript:void(0)" class="text-blue-btm"> you can always contact us. </a> We`d love to hear from you.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="position-absolute t-10 w-35 offset-w-21 center-inbox-hide px-2">
            <?php include 'include/newsfeed-content.php';?>
          </div>

        <div class="offset-w-56 w-23 position-absolute t-10 px-3">
            <div class="bg-white border rounded-10 pb-3">
              <ul class="nav font-14 pt-2 px-0 d-flex justify-content-start z-index-9999 border-bottom">
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 ml-3 mr-2 text-dark border-bottom-3-hover active" data-toggle="pill" href="#stories">Stories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-2 text-dark border-bottom-3-hover" data-toggle="pill" href="#groups">Groups</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-2 text-dark border-bottom-3-hover" data-toggle="pill" href="#explore">Explore</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-2 text-dark border-bottom-3-hover" data-toggle="pill" href="#trends">Trends</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-2 text-dark border-bottom-3-hover" data-toggle="pill" href="#news">News</a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div id="stories" class="tab-pane active">
                  <?php include 'include/left-stories.php';?>
                </div>
                <div id="groups" class="tab-pane">
                  <?php include 'include/left-groups.php';?>
                </div>
                <div id="explore" class="tab-pane">
                  <?php include 'include/left-explore.php';?>
                </div>
                <div id="main" class="tab-pane">
                  <?php include 'include/left-main.php';?>
                </div>
                <div id="trends" class="tab-pane">
                  <?php include 'include/left-trends.php';?>
                </div>
                <div id="news" class="tab-pane">
                  <?php include 'include/left-news.php';?>
                </div>
              </div>
            </div>
          </div>


          <div class="position-fixed b-0 border-bottom rounded-10 r-0 z-index-999 px-3 py-2 bg-white w-20 border d-none" id="small-box">
            <div class="d-flex justify-content-between align-items-center">
              <div class=""><a href="javascript:void(0)" class="font-20"><i class="fa fa-cog"></i></a></div>
              <div class="font-14">Search</div>
              <div class="">
                <a href="javascript:void(0)" id="small-contact-click">
                  <img src="<?php echo base_url()?>img/contact-chat.svg" class="w-h-32px">
                </a>
              </div>
              <div class="">
                <a href="javascript:void(0)" id="small-calendar-click">
                  <img src="<?php echo base_url()?>img/calendar.svg" class="w-h-22 pb-1">
                </a>
              </div>
              <div class="" id="bottom-chat-bar">
                <a href="javascript:void(0)" class="font-20">
                  <i class="fa fa-bars"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="position-absolute t-10 r-0 rounded-10 border bg-trans-white p-0 w-20 d-flex" id="right-chat-box">
            <?php include 'include/feed-right-chatbox.php';?>
          </div>

        </div> <!-- /container -->
      </section> <!-- //content section end here  -->

    </main> <!-- /main -->
<?php include 'include/footer.php';?>

<div class="modal fade" id="posting-popup" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md d-flex align-items-center justify-content-center h-100 my-0" role="document" style="max-width: 550px!important;">
    <div class="modal-content border-r-10">
      <div class="modal-body p-0 text-center">
        <div class="profile-setting w-100">
        <form method="post" enctype="multipart/form-data" >
        <input type="hidden" name="user_id" value="<?php echo isset($session['session'])? $session['session']->user_id :NULL; ?>">
            <div class="border-bottom d-flex p-3">
            <div class="profile-pic" style="width: 45px;">
              <?php $users = individualUserDetails($session['session']->user_id);
              if(!empty($users->user_img)){
                 $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
              }else{
                $user_img =   base_url().'img/profile-img.jpg';
              } ?>

            <img src="<?php echo $user_img; ?>" class="w-100 h-100 profileImage">
             
            </div>

            <label class="position-relative w-100">
              <textarea class="w-100 border-0 focus-none pl-3 pr-5 pt-0 scroll-d-none font-20  message-box popuprtextarea"   placeholder="What you want share today, Peter?" id="count-length" name="post_detail" ></textarea>
              <a class="nav-link position-absolute menu-icon rounded-circle w-h-38px r-0 imoji" href="javascript:void(0)" style="padding: 5px 8px; bottom: 35px;">
                <img src="<?php echo base_url() ?>img/imoji.svg" style="width: 18px; height: 18px;">
              </a>
            </label>
          </div>

          <div id="upload-photos-show" class="d-none">
             <div id="media-file" style="display: none;">
                    <ul id="media-list" class="clearfix px-3 mt-3">
                        <li class="myupload ">
                            <span><i class="fa fa-plus text-theme font-20 " aria-hidden="true"></i><input type="file" click-type="type2"  class="picupload" multiple></span>
                        </li>
                    </ul>
              </div>

            <a href="javascript:void(0)" class="d-flex border-l-hover-theme p-2 justify-content-start align-items-center bg-lt-blue-hover border-bottom position-relative">


              <input class="position-absolute w-100 t-0 l-0 b-0 opacity-0 upload_photo picupload" type="file" click-type="type1" name="photo"  multiple>
              <input class="position-absolute w-100 t-0 l-0 b-0 opacity-0" checked="checked" name="image_type" value="photo_vedios" type="radio">
             <input type="hidden" name="imagefile[]" value="" id="imagefile">
             <input type="hidden" name="imagefile1[]" value="" id="imagefile1">
        
              <div class="w-30 pl-1 text-left"><img src="<?php echo base_url() ?>img/upload-photos-videos.svg" class="w-75"></div>  
              <div class="w-70 ml--10px">
                <h6 class="text-theme font-14 text-left mb-0">Upload Photos/Video</h6>
                <p class="text-secondary font-12 text-left">Add photos or video to your status.</p>
              </div>
            </a>
            <a href="javascript:void(0)" class="d-flex position-relative border-l-hover-theme p-2 justify-content-start align-items-center bg-lt-blue-hover border-bottom" data-toggle="modal" data-target="#photos-album-upload" data-dismiss="modal">
              <div class="w-30 pl-1 text-left"><img src="<?php echo base_url() ?>img/upload-photos-albums.svg" class="w-75"></div>  
              <div class="w-70 ml--10px">
                <h6 class="text-theme font-14 text-left mb-0">Create Photos Album</h6>
                <p class="text-secondary font-12 text-left">Build an album out of multiple photos.</p>
              </div>
            </a>
           <a href="javascript:void(0)" class="d-flex border-l-hover-theme position-relative p-2 justify-content-start align-items-center bg-lt-blue-hover border-bottom">
              <input class="position-absolute w-100 t-0 l-0 b-0 opacity-0" type="file">
              <div class="w-30 pl-1 text-left"><img src="<?php echo base_url() ?>img/upload-photos-carousel.svg" class="w-75"></div>  
              <div class="w-70 ml--10px">
                <h6 class="text-theme font-14 text-left mb-0">Create a Photo Carousel</h6>
                <p class="text-secondary font-12 text-left">Build a scrolling photo carousel with a link.</p>
              </div>
            </a>
            <a href="javascript:void(0)" class="d-flex border-l-hover-theme p-2 position-relative justify-content-start align-items-center bg-lt-blue-hover border-bottom" data-toggle="modal" data-target="#create-slideshow" data-dismiss="modal">
              <input class="position-absolute w-100 t-0 l-0 b-0 opacity-0" type="file">
              <div class="w-30 pl-1 text-left"><img src="<?php echo base_url() ?>img/upload-photos-slideshow.svg" class="w-75"></div>  
              <div class="w-70 ml--10px">
                <h6 class="text-theme font-14 text-left mb-0">Create Slideshow</h6>
                <p class="text-secondary font-12 text-left">Add 3 to 10 photos to create a video.</p>
              </div>
            </a>
          </div>

          <div class="d-flex border-bottom px-3 pt-3 pb-4">
            <label class="position-relative mb-0 tooltip-hover">
              <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px mr-4" href="javascript:void(0)" style="padding: 4px 7px;">
                <img src="<?php echo base_url() ?>img/streaming-icon.svg" style="width: 22px; height: 22px;">
                <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Stream Live</div>
              </a>
            </label>
            <label class="position-relative mb-0 tooltip-hover">
              <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px mr-4" href="javascript:void(0)" id="upload-photos-post" style="padding: 4.5px 7px;">
                <img src="<?php echo base_url() ?>img/add-picture-icon.svg" style="width: 22px; height: 22px;">
                <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Upload Photo</div>
              </a>
            </label>
            
            <label class="position-relative mb-0 tooltip-hover">
              <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px mr-4" href="javascript:void(0)" id="add-friends-post" style="padding: 4.5px 7px;">
                <img src="<?php echo base_url() ?>img/add-friends-ico.svg" style="width: 18px; height: 18px;">
                <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Add Friends</div>
              </a>
            </label>              

            <label class="position-relative mb-0 tooltip-hover">
              <a class="nav-link position-relative menu-icon rounded-circle w-h-38px mr-4" href="javascript:void(0)" style="padding: 5px 8px;">
                <img src="<?php echo base_url() ?>img/imoji.svg" style="width: 18px; height: 18px;">
              </a>
              <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Insert an imoji</div>
            </label>
          </div>

          <div class="d-flex border-bottom p-3">
            <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14 mr-5">Newsfeed
             <input type="radio"  name="post_type" checked="checked" value="1">
              <span class="checkmark"></span>
            </label>
            <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14 mr-5">Your story
           <input type="radio"  name="post_type" value="2">
              <span class="checkmark"></span>
            </label>
            <div class="dropdown">
              <a href="javascript:void(0)" class="btn btn-primary bg-transparent border-0 dropdown-toggle text-dark px-0 focus-none py-1" data-toggle="dropdown">
                <i class="fa fa-globe text-dark pr-2"></i> Public
              </a>
              <div class="dropdown-menu position-absolute p-0 l-0 t-0" style="transform: translate3d(0px, 35px, 0px); width:350px; will-change: transform;" x-placement="bottom-start">
                <div class="p-0 text-center overflow-hidden">
                  <div class="text-center border-top">
                    <h6 class="py-2 pl-4 bg-secondary text-left mb-0 text-theme">Who should see this post?</h6>
                    <div class="d-flex justify-content-start align-items-center px-4 py-2 bg-lt-blue-hover border-l-hover-theme border-top">
                      <div class="w-30px text-center"><i class="fa fa-globe font-25"></i></div>
                      <div class="text-left px-3">
                        <p class="text-theme">Public</p>
                        <p class="text-dark font-14">Anyone on StayToEnjoy</p>
                      </div>
                      <div class="ml-auto">
                        <label class="switch position-relative d-inline-block my-2">
                          <input type="checkbox" name="publish" checked="" value="1">
                            <span class="slider round position-absolute c-pointer"></span>
                        </label>
                      </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center px-4 py-2 bg-lt-blue-hover border-l-hover-theme border-top">
                      <div class="w-28px text-center">
                        <img src="<?php echo base_url() ?>img/user-dark.svg" class="w-100">
                      </div>
                      <div class="text-left px-3">
                        <p class="text-theme">Friends</p>
                        <p class="text-dark font-14">Friends on StayToEnjoy</p>
                      </div>
                      <div class="ml-auto">
                        <label class="switch position-relative d-inline-block my-2">
                          <input type="checkbox" name="publish" checked="" value="2">
                            <span class="slider round position-absolute c-pointer"></span>
                        </label>
                      </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center px-4 py-2 bg-lt-blue-hover border-l-hover-theme border-top">
                      <div class="w-28px text-center">
                        <img src="<?php echo base_url() ?>img/friendship-popup-icon.svg" class="w-100">
                      </div>
                      <div class="text-left px-3">
                        <p class="text-theme">Close Friends</p>
                        <p class="text-dark font-14">Only close friends</p>
                      </div>
                      <div class="ml-auto">
                        <label class="switch position-relative d-inline-block my-2">
                           <input type="checkbox" name="publish" checked="" value="3">
                            <span class="slider round position-absolute c-pointer"></span>
                        </label>
                      </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center px-4 py-2 bg-lt-blue-hover border-l-hover-theme border-top">
                      <div class="w-35px text-center rounded-circle border hover-border-white overflow-hidden" style="margin-left: -3px;">
                          <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                      </div>
                      <div class="text-left pr-2" style="padding-left: 12px;">
                        <p class="text-theme">Only me</p>
                        <p class="text-dark font-14">Only for me</p>
                      </div>
                      <div class="ml-auto">
                        <label class="switch position-relative d-inline-block my-2">
                        <input type="checkbox" name="publish" checked="" value="4">
                            <span class="slider round position-absolute c-pointer"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="add-friends-show" class="d-none max-h-333 overflow-auto scroll-design-blue border-bottom">

          <?php for ($x = 0; $x <= 20; $x++) { ?>

            <div class="py-2 px-3 clearfix d-flex border-bottom bg-lt-blue-hover border-l-hover-theme">
              <div class="profile-pic position-relative">
                <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                <div class="online-circle red position-absolute rounded-circle"></div>
              </div>
              <div class="pl-2 text-left">
                <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
                <span class="text-secondary pl-2 font-12">Hamburg </span>
                <span class="text-secondary pl-2 font-12">4,970 friends</span>
              </div>
              <div class="pl-2 ml-auto mt-2">
                <input type="button" class="w-100 font-12 shadow py-1 px-3 btn btn-primary bg-primary d-none" value="Add">
              </div>
            </div>

          <?php } ?>

          </div>

          <div class="d-flex justify-content-end p-3">
              <button class="btn btn-primary bg-theme border-0 px-4 font-14 submit_post" >Share</button>
          
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div> 

<!-- Model for profile setting-->

<div class="modal fade" id="photos-album-upload" tabindex="-1" role="dialog">

  <?php include 'include/crop-design.php';?>

  <div class="modal-dialog modal-md d-flex align-items-center justify-content-center h-100 my-0" role="document" style="max-width: 1200px!important;">
    <div class="modal-content border-r-10">
      <div class="modal-body p-0 text-center">
        <div class="profile-setting w-100">
          <div class="border-bottom d-flex p-3">
            <div class="pt-1">Create a Album</div>
            <button class="btn btn-primary bg-theme border-0 px-4 font-14 ml-auto">+ Add Images</button>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <div style="margin-left: 0.5px;"><img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="w-100"></div>
                <div class="bg-lt-blue py-2 text-center rounded-b-r-5 text-theme">Album Info</div>
                <div class="py-3">
                  <div class="pt-2 text-left">
                    <div class="text-theme font-14">Title</div>
                    <label class="border-bottom-1-hover w-100">
                      <input type="text" class="font-18 border-b-1-blue-focus w-100 pb-2" placeholder="Add a Title">
                    </label>
                  </div>
                  <div class="pt-2 text-left">
                    <div class="text-theme font-14">Description</div>
                    <label class="border-bottom-1-hover w-100">
                      <input type="text" class="font-18 border-b-1-blue-focus w-100 pb-2" placeholder="Describe your album">
                    </label>
                  </div>
                  <div class="pt-2 text-left">
                    <div class="text-theme font-14">Location</div>
                    <label class="border-bottom-1-hover w-100">
                      <input type="text" class="font-18 border-b-1-blue-focus w-100 pb-2" placeholder="Add Location">
                    </label>
                  </div>
                  <div class="pt-2 text-left">
                    <div class="text-theme font-14">Dates</div>
                    <div class="position-relative w-100">
                      <input type="text" class="font-18 border-b-1-blue-focus w-100 pb-2 position-absolute" placeholder="Pick date">
                      <div class="position-absolute r-0 bg-lt-blue rounded-circle w-h-35px d-flex justify-content-center align-items-center"><i class="fa fa-calendar text-theme"></i></div>
                    </div>
                  </div>
                  <div class="py-2 text-left mt-5">
                    <label class="container-box d-inline-block mr-2 position-relative c-pointer font-14">Hide from Newsfeed
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="row mt-4">
                  <div class="col-md-3 mb-4">
                    <label class="position-relative">
                      <img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="hover-shadow w-100 h-135px object-fit-cover border-r-10">
                      <div class="position-absolute l-5 t-5 r-5 d-flex justify-content-end">
                        <div class="bg-white rounded-circle text-theme w-h-25px font-12 p-3px shadow font-14 mr-auto">1</div>
                        <a href="javascript:void(0)" class="bg-dark rounded-circle text-theme w-h-25px font-12 shadow font-14  hover-for-blue">
                          <img src="<?php echo base_url() ?>img/newsfeed-icon/favorite-icon.svg" class="w-100 img-norm">
                          <img src="<?php echo base_url() ?>img/newsfeed-icon/favorite-icon-blue.svg" class="w-100 img-hover">
                        </a>
                        <div class="ml-1 bg-dark rounded-circle text-theme w-h-25px font-12 shadow font-14 hover-for-blue">
                          <img src="<?php echo base_url() ?>img/newsfeed-icon/more-icon.svg" class="w-100 drop-inner img-norm">
                          <img src="<?php echo base_url() ?>img/newsfeed-icon/more-icon-blue.svg" class="w-100 drop-inner img-hover">
                          <div class="drop-arrow-before shadow border bg-white border-r-5 text-left mt-3 position-absolute z-index-999 w-250 d-none drop-inner-down">
                            <div class="py-2 border-bottom">
                              <a class="d-block font-14 py-1 hover-theme px-3" href="javascript:void(0)">Add to My Favorites</a>
                            </div>
                            <div class="py-2 border-bottom">
                              <a class="d-block font-14 py-1 hover-theme px-3" href="javascript:void(0)">Rename</a>
                              <a class="d-block font-14 py-1 hover-theme px-3" href="javascript:void(0)">Create a Video</a>
                              <a class="d-block font-14 py-1 hover-theme px-3" href="javascript:void(0)">Preview
                                <span class="float-right font-12">Space</span>
                              </a>
                              <a class="d-block font-14 py-1 hover-theme px-3" href="javascript:void(0)">Hide Info
                                <span class="float-right font-12">Ctrl+I</span>
                              </a>
                            </div>
                            <div class="py-2 border-bottom">
                              <a class="d-block font-14 py-1 hover-theme px-3" href="javascript:void(0)" id="crop-popup-open">Crop Piture</a>
                              <a class="d-block font-14 py-1 hover-theme px-3" href="javascript:void(0)">Copy
                                <span class="float-right font-12">Ctrl+C</span>
                              </a>
                              <a class="d-block font-14 py-1 hover-theme px-3" href="javascript:void(0)">Cut
                                <span class="float-right font-12">Ctrl+X</span>
                              </a>
                              <a class="d-block font-14 py-1 hover-theme px-3" href="javascript:void(0)">Copy URL</a>
                              <a class="d-block font-14 py-1 hover-theme px-3" href="javascript:void(0)">Download</a>
                            </div>
                            <div class="py-2 hover-bg-red hover-text-white rounded-b-r-5">
                              <a class="d-block text-dark inner-txt-white font-14 py-1 px-3" href="javascript:void(0)" data-toggle="modal" data-target="#move-to-trash">Move to Trash</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <input type="text" placeholder="Say something about the photo" class="w-100 font-12 border-0 focus-outline-none">
                    </label>
                  </div>
                  <div class="col-md-3 mb-4">
                    <label class="position-relative">
                      <img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="w-100 h-135px object-fit-cover border-r-10">
                      <div class="position-absolute rounded-circle bg-white text-theme l-5 t-5 w-h-25px font-12 p-3px shadow font-14">2</div>
                      <input type="text" placeholder="Say something about the photo" class="w-100 font-12 border-0 focus-outline-none">
                    </label>
                  </div>
                  <div class="col-md-3 mb-4">
                    <label class="position-relative">
                      <img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="w-100 h-135px object-fit-cover border-r-10">
                      <div class="position-absolute rounded-circle bg-white text-theme l-5 t-5 w-h-25px font-12 p-3px shadow font-14">3</div>
                      <input type="text" placeholder="Say something about the photo" class="w-100 font-12 border-0 focus-outline-none">
                    </label>
                  </div>
                  <div class="col-md-3 mb-4">
                    <label class="position-relative">
                      <img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="w-100 h-135px object-fit-cover border-r-10">
                      <div class="position-absolute rounded-circle bg-white text-theme l-5 t-5 w-h-25px font-12 p-3px shadow font-14">4</div>
                      <input type="text" placeholder="Say something about the photo" class="w-100 font-12 border-0 focus-outline-none">
                    </label>
                  </div>
                  <div class="col-md-3 mb-4">
                    <label class="position-relative">
                      <img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="w-100 h-135px object-fit-cover border-r-10">
                      <div class="position-absolute rounded-circle bg-white text-theme l-5 t-5 w-h-25px font-12 p-3px shadow font-14">5</div>
                      <input type="text" placeholder="Say something about the photo" class="w-100 font-12 border-0 focus-outline-none">
                    </label>
                  </div>
                  <div class="col-md-3 mb-4">
                    <label class="w-100"><input type="file" class="d-none">
                    <div class="border overflow-hidden border-r-10" style="border-style: dashed!important; border-width: 2px!important;">
                      <div class="font-14 text-center">
                        <p class="text-theme hover-text-theme-dark font-60 bg-lt-blue pb-2 line-h-90">+</p>
                        <p class="text-theme hover-text-theme-dark py-2">Add Photos</p>
                      </div>
                    </div>
                    </label>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>



<div class="modal fade" id="create-slideshow" tabindex="-1" role="dialog" data-dismiss="modal">

  <?php include 'include/text-design.php';?>

  <div class="modal-dialog modal-md d-flex align-items-center justify-content-center h-100 my-0" role="document" style="max-width: 1200px!important;">
    <div class="modal-content border-r-10">
      <div class="modal-body p-0 text-center">
        <div class="profile-setting w-100">
          <div class="border-bottom d-flex p-3">
            <div class="pt-1">Create a Slideshow</div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <div style="margin-left: 0.5px;"><img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="w-100"></div>
                <div class="bg-lt-blue py-2 text-center text-theme">Album Info</div>
                <div class="py-3">
                  <div class="pt-2 text-left">
                    <div class="text-theme font-14">Title</div>
                    <label class="border-bottom-1-hover w-100">
                      <input type="text" class="font-18 border-b-1-blue-focus w-100 pb-2" placeholder="Add a Title">
                    </label>
                  </div>
                  <div class="pt-2 text-left">
                    <div class="text-theme font-14">Description</div>
                    <label class="border-bottom-1-hover w-100">
                      <input type="text" class="font-18 border-b-1-blue-focus w-100 pb-2" placeholder="Describe your album">
                    </label>
                  </div>
                  <div class="pt-2 text-left">
                    <div class="text-theme font-14">Location</div>
                    <label class="border-bottom-1-hover w-100">
                      <input type="text" class="font-18 border-b-1-blue-focus w-100 pb-2" placeholder="Add Location">
                    </label>
                  </div>
                  <div class="pt-2 text-left">
                    <div class="text-theme font-14">Dates</div>
                    <div class="position-relative w-100">
                      <input type="text" class="font-18 border-b-1-blue-focus w-100 pb-2 position-absolute" placeholder="Pick date">
                      <div class="position-absolute r-0 bg-lt-blue rounded-circle w-h-35px d-flex justify-content-center align-items-center"><i class="fa fa-calendar text-theme"></i></div>
                    </div>
                  </div>
                  <div class="py-2 text-left mt-5">
                    <label class="container-box d-inline-block mr-2 position-relative c-pointer font-14">Hide from Newsfeed
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="py-3 d-flex">
                      <p class="text-theme">My Project Libary</p>
                      <p class="text-theme ml-auto"><a href="javascript:void(0)" class="font-20"><i class="fa fa-angle-right"></i></a></p>
                    </div>
                    <div class="pb-3 d-flex justify-content-end">
                      <p class="mr-auto"><a href="javascript:void(0)" class="text-dark" data-toggle="modal" data-target="#add-slideshow-popup">+ Add</a></p>
                      <p class="ml-2">
                        <a href="javascript:void(0)"><i class="fa fa-user text-dark"></i></a>
                      </p>
                      <p class="ml-2">
                        <a href="javascript:void(0)"><i class="fa fa-user text-dark"></i></a>
                      </p>
                    </div>
                    <div class="mb-3 max-h-185 overflow-auto scroll-design-blue">
                      <?php for ($x = 0; $x <= 10; $x++) { ?>
                      <div class="w-33 d-inline-block float-left p-2">
                        <img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="w-100 rounded-5">
                      </div>
                      <div class="w-33 d-inline-block float-left p-2">
                        <img src="<?php echo base_url() ?>img/timeline/hair-old.jpg" class="w-100 rounded-5">
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="col-md-6 p-3">
                    <iframe class="w-100 h-100" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                  </div>
                  <div class="col-md-12 border-top">
                    <div class="d-flex my-4 justify-content-start">
                      <div class="mr-4 font-14">Storyboard</div>
                      <div class="mr-4 font-14"><i class="fa fa-clock-o pr-1"></i>Image Duration</div>
                      <div class="mr-4 font-14"><i class="fa fa-clock-o pr-1"></i>Aspect Ratio</div>
                      <div class="mr-4 font-14"><i class="fa fa-clock-o pr-1"></i>Movement</div>
                      <div class="mr-4 font-14" id="text-popup-open"><i class="fa fa-clock-o pr-1"></i>Text</div>
                      <div class="mr-4 font-14"><i class="fa fa-clock-o pr-1"></i>Background Music</div>
                      <div class="mr-4 font-14"><i class="fa fa-trash-o"></i></div>
                      <div class="ml-auto font-14 text-theme">Delete all</div>
                    </div>
                      <div class="mb-4 clearfix d-flex overflow-hidden max-w-76 w-fit-content float-left">
                        <?php for ($x = 0; $x <= 10; $x++) { ?>
                        <div class="w-h-150-200 float-left mr-2"><img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="h-100 object-fit-cover fit-img"></div>
                        <?php } ?>
                      </div>
                      <div class="mb-4 w-15 float-left">
                        <div class="border overflow-hidden ml-2 bg-lt-blue" style="border-style: dashed!important; border-width: 2px!important;">
                          <div class="font-14 text-center">
                            <p class="text-theme hover-text-theme-dark font-60 bg-lt-blue pb-2 line-h-190">+</p>
                          </div>
                        </div>
                      </div>
                      <div class="float-right h-200px px-3 text-dark d-flex justify-content-center align-items-center">
                        <a href="javascript:void(0)" class="bg-theme text-white w-h-35px d-flex rounded-circle justify-content-center align-items-center">
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Model for profile setting-->

    <div class="position-fixed b-0 z-index-99999 small-chat-container d-none">

      <?php include 'include/small-bottom-chat.php';?>

    </div>


  
<div class="modal fade" id="all-informations" tabindex="-1" role="dialog">
  <div class="modal-dialog d-flex align-items-center justify-content-center" style="max-width: 550px;" role="document">
    <div class="modal-content border-radius-20">
      <div class="modal-body p-0">

        <div class="py-2 px-3 border-bottom">
          <span>Edit Profile</span>
        </div>
        <div class="position-relative cover-photos-profile">

          <?php if(isset($users) && !empty($users->cover_image)){
                       $cover_image =   base_url().'uplaods/cover_image/'.$users->cover_image;
                     }else{
                        $cover_image = base_url().'img/cover-photo.jpg';
                     }
            ?>
         <div class="movecoverimage">
          <img src="<?php echo $cover_image; ?>"  class="w-100 mx-h-160 cover_image" style="max-height: 203px;width: 547px!important;">
        </div>
          <div class="position-absolute l-0 r-0 t-0 b-0 d-flex justify-content-center align-items-center">
            <label class="py-2 px-3 cusor-pointer border-r-20 upload border" data-toggle="modal" data-target="#add-slideshow-popup" style="background: #00000059;">
              <i class="fa fa-photo text-white"></i>
              <p class="d-inline-block pl-2 text-white">Upload</p>
            </label>
          </div>
        </div>

        <div class="hover-box-visible d-inline-block ml-5 position-relative top--30">
          <div class="profile-pic bg-theme mr-2 border position-relative" style="width: 70px; height: 70px; margin-top: -23px">
            <?php 
                  if(!empty($session['session']->user_id)){
                      $users = individualUserDetails($session['session']->user_id); 
                  if(!empty($users->user_img)){
                     $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
                     $padding = "p-0";
                  }else{
                    $user_img =   base_url().'img/profile-img.svg';
                     $padding = 'p-2';
                  } } ?>

            <img src="<?php echo $user_img; ?>" class="w-100 h-100 <?php echo $padding; ?>">
            
            <div class="online-circle b-5 w-h-8 green position-absolute rounded-circle border" style="right: 8px;"></div>
            <div class="position-absolute r-0 l-0 t-0 b-0 rounded-circle hover-content-visible d-flex justify-content-center align-items-center" style="background: #00000059">
              <i class="fa fa-camera font-20 text-white"></i>
            </div>
          </div>
        </div>

        <ul class="nav font-14 mt--20px px-0 d-flex justify-content-start z-index-9999 rounded-t-r-10 border-bottom">
          <li class="nav-item">
            <a class="nav-link pb-2 px-0 mx-3 text-dark border-bottom-3-hover active" data-toggle="tab" href="#general-info">
              <h6 class="text-dark">General Informations</h6>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link pb-2 px-0 mx-3 text-dark border-bottom-3-hover" data-toggle="tab" href="#account-settings">
              <h6 class="text-dark">Account Settings</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link pb-2 px-0 mx-3 text-dark border-bottom-3-hover" data-toggle="tab" href="#privacy-settings">
              <h6 class="text-dark">Privacy Settings</h6></a>
          </li>
        </ul>

        <div class="w-100 overflow-auto scroll-design-blue" style="max-height: calc(100vh - 455px);">
          <!-- Tab panes -->
          <div class="tab-content bg-white p-3">

            <div id="general-info" class="tab-pane active">
              <form method="post">
              <div class="py-2 text-left">
                <?php   if(isset($users) && !empty($users->first_name)){
                      $name = $users->first_name.' '.$users->last_name;
                   } else{ $name = "";}
                  ?>
              
                <div class="text-theme font-14">Your Name</div>
                <label class="border-bottom-1-hover w-100">
                  <input type="text" name="name" class="font-18 border-b-1-blue-focus w-100 pb-2" value="<?php echo $name; ?>" placeholder="Type">
                </label>
              </div>
              <div class="py-2 text-left">
                <?php   if(isset($users) && !empty($users->dateofbirth)){
                      $dob = $users->dateofbirth ;
                   } else{ $dob = "";}
                  ?>
                <div class="text-theme font-14">Date of Birth</div>
               <!--  <label class="border-bottom-1-hover w-100">
                  <input type="text" name="dob" class="font-18 border-b-1-blue-focus w-100 pb-2" value="<?php //echo $dob; ?>" placeholder="Type">
                </label> -->
              </div>
               <div class="py-2 text-left d-flex">
                <div class="position-relative w-33 mr-2 profile-setting">
                  <select class="border-0 focus-none w-100 custom-arrow font-14" name="day">
                   <option value="">Day</option>
                   <?php for($i=1;$i<=31;$i++){ ?>
                   <option value="<?php echo $i;?>"> <?php echo $i;?></option>
                     <?php }?>
                  </select>
                  <img src="http://localhost/staytoenjoy/img/down-arrow.png" class="img-arrow position-absolute r-0 m--t-b-0"> 
                </div>
                <div class="position-relative w-33 mx-2 profile-setting">
                  <?php $month = array(
                        'January', 
                        'February', 
                        'March', 
                        'April', 
                        'May', 
                        'June', 
                        'July', 
                        'August', 
                        'September', 
                        'October', 
                        'November', 
                        'December'
                        );

                        ?>
                  <select class="border-0 focus-none w-100 custom-arrow font-14" month="month">
                   <option value="">Month</option>
                    <?php for($m=0; $m<12; $m++) { ?>  
                   <option  value="<?php echo $month[$m];?>"><?php echo $month[$m];?></option>
                   <?php } ?>
                  </select>
                  <img src="http://localhost/staytoenjoy/img/down-arrow.png" class="img-arrow position-absolute r-0 m--t-b-0"> 
                </div>
                <div class="position-relative w-33 ml-2 profile-setting">
                  <select class="border-0 focus-none w-100 custom-arrow font-14" name="year">
                   <option value="">Year</option>
                   <?php $year = date('Y');
                              for($y=1920; $y<=$year; $y++) { ?>                
                              <option value="<?php echo $y; ?>" > <?php echo $y;  ?></option>
                    <?php } ?>
                  </select>
                  <img src="http://localhost/staytoenjoy/img/down-arrow.png" class="img-arrow position-absolute r-0 m--t-b-0"> 
                </div>


              </div>
              <div class="py-2 text-left">
                 <?php   if(isset($users) && !empty($users->username)){
                      $username = $users->username ;
                   } else{
                    $username = "";
                   }
                  ?>
                <div class="text-theme font-14">User Name</div>
                <label class="border-bottom-1-hover w-100">
                  <input type="text" name="username" class="font-18 border-b-1-blue-focus w-100 pb-2"  value="<?php echo $username;?>" placeholder="http://staytoenjoy.com/username">
                </label>
              </div>
              <div class="py-2 text-left">
                  <?php 
                  $hobbies = ""; 
                  if(isset($users) && !empty($users->user_id)){
                      $hob = get_user_about($users->user_id);
                      if(!empty($hob)){
                          $hobbies = $hob->user_hobbies;
                        }else{
                          $hobbies = "";
                        }
                    
                   } else{ $hobbies = "";}
                  ?>
                <div class="text-theme font-14">Your Hobbies</div>
                <label class="border-bottom-1-hover w-100">
                  <input type="text" name="hobbies" class="font-18 border-b-1-blue-focus w-100 pb-2" placeholder="Type (we Need a button here with a remove function) if a user type Hobby and click on enter" value="<?php echo $hobbies;?>">
                </label>
              </div>
              <div class="py-2 text-left">
                <?php  $coun = "";
                 if(isset($users) && !empty($users->country)){
                      $country =  getcountry_name_by_code($users->country);
                      if(!empty($country)){
                         $coun =  getcountry_name_by_code($users->country);
                      }else{
                         $coun = $users->country;
                      }
                   } else{$coun = "";}
                  ?>
                <div class="text-theme font-14">Your Location</div>
                <label class="border-bottom-1-hover w-100">
                  <input type="text" name="country" class="font-18 border-b-1-blue-focus w-100 pb-2" value="<?php echo $coun; ?>" placeholder="Type">
                </label>
              </div>
              <div class="py-2 text-left">
                <?php   if(isset($users) && !empty($users->jobs)){
                      $jobs = $users->jobs;
                   } else{$jobs = "";}
                  ?>
                <div class="text-theme font-14">Jobs</div>
                <label class="border-bottom-1-hover w-100">
                  <input type="text" value="<?php echo $jobs;?>" name="jobs" class="font-18 border-b-1-blue-focus w-100 pb-2" placeholder="Type">
                </label>
              </div>
              <div class="py-2 text-left">
                <?php   
                  $lang = ""; 
                if(isset($users) && !empty($users->user_lang)){
                      $user_lang =   getLang_name_by_code($users->user_lang);
                       if(!empty($user_lang)){
                         $lang =  getLang_name_by_code($users->user_lang);
                      }else{
                         $lang = $users->user_lang;
                      }
                   } else{$lang = "";}

                  ?>
                <div class="text-theme font-14">Add language you speak</div>
                <label class="border-bottom-1-hover w-100">
                  <input type="text" name="user_lang" class="font-18 border-b-1-blue-focus w-100 pb-2" placeholder="Type" value="<?php echo $lang;?>">
                </label>
              </div>
            </form>
            </div>
            <div id="account-settings" class="tab-pane">
             
              <span class="pr-2">Email is enabled</span>
              <label class="switch position-relative d-inline-block my-2">
                <input type="checkbox" checked="">
                <span class="slider round position-absolute c-pointer"></span>
              </label>

              <div class="bg-white mb-4 mt-2 border-bottom">
                <h6 class="font-weight-bold text-dark mb-3">Activity Related to you and posting</h6>
                <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">You have new notifications
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">You're send a  direct message
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-3 d-inline-block position-relative c-pointer font-14">Someones email a post to you
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="bg-white mb-4 border-bottom">
                <h6 class="font-weight-bold text-dark mb-3">Activity from your social media</h6>
                <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">News about StayToEnjoy products and feature updates
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">Tips on getting more out of StayToEnjoy
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">Things you missed sinca you last logged into StayToEnjoy
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">News about StayToEnjoy on partner products and other third party services
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">Participation in StayToEnjoy research survey
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">Suggestions for recommended accounts
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-3 d-inline-block position-relative c-pointer font-14">Suggestions based on your recent follows
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="bg-white mb-4 border-bottom">
              <h6 class="font-weight-bold text-dark mb-3">Text Notification</h6>
              <p>Receive SMS notification to:</p>
              <div class="row pb-3">
                <div class="col-sm-9 position-relative mt-2">
                        <input type="text" class="form-control font-14" placeholder="Number">
                        <label class="font-14">For change number <span class="text-theme-blue">Upload your identity</span></label>
                    </div>
                    <div class="col-sm-3 position-relative mt-2 pl-0">
                        <label class="font-14 text-theme-blue pt-2">Confirmed</label>
                    </div>
                </div>
              </div>

              <div class="bg-white mb-4 border-bottom">
              <h6 class="font-weight-bold text-dark mb-3">Notify my when:</h6>
              <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">Message
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">Reservation Updated
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-2 d-inline-block position-relative c-pointer font-14">Account Changes
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <label class="container-box w-100 pb-3 d-inline-block position-relative c-pointer font-14">Others
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="bg-white">
              <h6 class="font-weight-bold text-dark mb-3">Email you with</h6>
                <label class="container-box w-100 d-inline-block position-relative c-pointer font-14">News about StayToEnjoy products and features updates
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <div id="privacy-settings" class="tab-pane">

              <div class="w-100">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label font-14 pr-0">Post privacy</label>
                  <div class="col-sm-9 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14 mb-2">Protect your Posting
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="font-14 text-secondary">If selected, only those you approve will receive your Tweets. Your future Tweets will not be available publicly. Tweets posted previously may still be publicly visible in some places. <span class="text-theme-blue">Learn more.</span></label>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label font-14 pr-0">Posting location</label>
                  <div class="col-sm-9 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14 mb-2">Poting with a location
                      <input type="checkbox" checked="">
                      <span class="checkmark"></span>
                    </label>
                    <label class="font-14 text-secondary">If selected, you can add a location to your Tweets, such as your city or precise location, from the web and via third-party applications. This setting does not affect Twitter for iOS or Android. <span class="text-theme-blue">Learn more.</span></label>
                    <a href="javascript:void(0)" class="btn bg-primary border-r-20 text-white mt-3">Delete Location Informations</a>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label font-14 pr-0">Photo tagging</label>
                  <div class="col-sm-9 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14 mb-2">Allow anyone to tag you in photos
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14 mb-2">Only allow people you follow to tag you in photos
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Do not allow anyone to tag you in photos
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label font-14 pr-0">Discoverability</label>
                  <div class="col-sm-9 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14 mb-2">Let others find you by your email address
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14 mb-2">Let others find you by your phone number
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="pl-0 text-secondary container-box d-block position-relative c-pointer font-14">This setting will take effect once you add a phone number. <span class="text-theme-blue">Add now</span></label><br>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label font-14 pr-0">Address Book</label>
                  <div class="col-sm-9 position-relative">
                    <a href="javascript:void(0)" class="btn bg-transparent border mb-2 border-r-20 text-dark font-14 border-primary">Manage your account</a>
                    <label class="pl-0 text-secondary container-box d-block position-relative c-pointer font-14">Contact you've uploaded to StayToEnjoy from your address book.
                    </label>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label font-14 pr-0 pt-0">Address Book</label>
                  <div class="col-sm-9 position-relative">
                    <label class="pl-0 container-box d-block position-relative c-pointer font-14">Allow some <span class="text-theme-blue">Edit</span>
                    </label>
                    <label class="pl-0 text-secondary container-box d-block position-relative c-pointer font-14">Control how Twitter personalizes content and collects and shares certain data.
                    </label>
                  </div>
                </div>
                <hr class="my-4">
                <h5 class="mt-4 mb-3 text-theme-blue">Safety</h5>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label font-14 pr-0 pt-0">Search</label>
                  <div class="col-sm-9 position-relative">
                    <label class="container-box d-inline-block position-relative c-pointer font-14 mb-2">Hide sensitive content
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">This prevents Tweets with potentially sensitive content from displaying in your search results. <span class="text-theme-blue"> Learn more </span>
                      <input type="checkbox" checked="">
                      <span class="checkmark"></span>
                    </label><br>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label font-14 pr-0 pt-0">Posting media</label>
                  <div class="col-sm-9 position-relative">
                    <label class="container-box d-inline-block position-relative c-pointer font-14 mb-2">Display media that may contain sensitive content
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Mark media you Tweet as containing material that may be sensitive
                      <input type="checkbox" checked="">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <hr class="my-4">
                <h4 class="mt-4 mb-3 text-secondary">Stay connected</h4>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label font-14 pr-0 pt-0">Spcial connections</label>
                  <div class="col-sm-9 position-relative">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Share my activity my facebook friends
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label font-14 pr-0 pt-0">Your listing and profile in search engines</label>
                  <div class="col-sm-9 position-relative">
                    <label class="container-box d-inline-block clearfix position-relative c-pointer font-14">Search engines are important to attract traffic
                      <input type="checkbox" checked="">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
            
        </div>

        <div class="bg-white mb-4 border-bottom px-2">
          <input type="button" class="btn btn-primary bg-theme font-12 border-0 float-right mx-1 my-3 saveprofile" value="Save">
          <input type="button" class="btn btn-primary bg-success border-0 font-12 float-right mx-1 my-3 saveprofile" value="Edit profile">
        </div>
      </div>
  </div>
</div>

<!-- album slider -->

    <!-- Bootstrap JavaScript start -->
<script src="<?php echo base_url('js/multiple_imges.js'); ?>"></script>
<script type="text/javascript">


function reply_input(e,comment_id,post_id) {

if(e.which == 13) {

var reply_data = document.getElementById("reply_inputid"+comment_id).value;
       if(typeof(reply_data) != "undefined" && reply_data != ""){
           
         $.ajax({
                  type: 'POST',
                  url: "home/add_reply/",
                  data: {parent_id:comment_id,reply_data:reply_data,post_id:post_id},
                  cache: false,
                  success: function(data)
                          {   
                            if(data){
                                console.log('reply',data);
                              $('.reply_datadetail'+comment_id).html(data);

                               $('.reply_input').val('');
                             
                           
                            }
                          }
                 });
         }
   }
}
function commnent_boxextend(e,comment_id) {
var id =  document.getElementById("reply_inputid"+comment_id);

id.style.height = "20px";
id.style.height = id.scrollHeight+"px";

}

$(document).ready(function($){
  $('.picupload').on('change',function(){
     $('#media-file').show();
 
});
$('.submit_post').on('click',function(e){
    e.preventDefault();
    
        var title =[]; 
        var imagefile = "";
        var img = $('ul#media-list li a.remove-pic');
        var  upimg = $("input#imagefile1").val();
        var split = upimg.split(',');           
        if(img !="undefined"){
        $.each(img,function(i,v){

                  $(this).attr('imagefile',split[i]);

                  title.push($(this).attr('imagefile')); 
          })
          imagefile = $("input#imagefile").val(title);
         
        }

          var form = $('form').serialize(); 
      url = "<?php echo base_url('home/add_post_newsfeed')?>";
        $.ajax({
          type:"POST",
          url: url,
          data: {form},
          cache: false,
        
          success: function(data)
          {   
           $('div.post_divdata').prepend(data);
           $("textarea[name='post_detail']").val('');
           $("input[name='post_type']").val('');
           $("input[name='user_id']").val('');
           $("input[name='image_type']").val('');
           $("input[name='imagefile']").val('');
           $('#media-file').hide();
           $('#posting-popup').modal('hide');

          }
        });
    return false;
          
})   

 
$('.post_comments').on('keypress',function(e) {
    if(e.which == 13) {
   
   var commnets_data =  $(this).val();

   var user_id =  <?php echo isset($session['session'])? $session['session']->user_id :""?>;

  // var post_id = $('div.post_divdata').find('div.profile-setting').attr('feed');
   var post_id = $(this).attr('post_id');

   if(commnets_data == "undefined" && commnets_data ==""){
       alert('Please enter the commnents');
   }else{

         url = "<?php echo base_url('home/add_post_comment')?>";
          $.ajax({
          type:"POST",
          url: url,
          data: {commnets_data:commnets_data,user_id:user_id,post_id:post_id},
          cache: false,
        
          success: function(data)
          {   

            console.log('data',data);
                 $('div.comment_box').append(data);
                 $('.post_comments').val('');
                 $('.post_comments').css('height','20px');

                   var counter = $('.comment_count-'+post_id).html();
                 
                 counter++;

               $('.comment_count-'+post_id).html(counter);
                if(counter <= 4){
                   $('.comm_count_limit-'+post_id).html(counter);
                  
                 }
              
          }
        });
    return false;

     }
      
    }
});

$('.reply_click').on('click',function(e){
      var att = $(this).attr('reply');
      var post_id = $(this).attr('reppost_id');
      //$("div.replay_sec"+att).toggle();
       $.ajax({
                  type: 'POST',
                  url: "home/comment_box/",
                  data: {comment_id:att,post_id:post_id},
                  cache: false,
                  success: function(data)
                          {   

                            if(data){
                              $('.reply_data'+att).html(data);

                            // $('.reply_data'+att).remove();

                            //  $('.reply_input').css('height','20px');
                                   
                               // console.log(att);
                            }
                          }
                 });



});
///cover_image/////

$(".cover_image").click(function(e) {
    $("#upload_cover_img").click();
   
});

function fasterPreview2( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('.cover_image').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#upload_cover_img").change(function(e){
    fasterPreview2(this);
        var fileName = e.target.files[0];
        console.log(fileName);
        var form_data = new FormData();  
        form_data.append('file', fileName);
        var url = "home/update_cover_img/";
        $.ajax({
              type: 'POST',
              url: url,
              data: form_data,
              enctype: 'multipart/form-data',
              processData: false,
              contentType: false,
              cache: false,
              success: function(data)
                      {   
                      console.log('upload_cover_img',data);
                      }
             });
      //$('#profile-container').removeClass('p-3').addClass('p-0');
});

////cover_image////
$('.popuprtextarea').on('input', function() {
    $(this).css('height', "60px");
    $(this).css('height', this.scrollHeight+"px");
});




$('.popuprtextarea2').on('input', function() {
    $(this).css('height', "20px");
    $(this).css('height', this.scrollHeight+"px");
});

$('.saveprofile').on('click',function(e){
      
          var name =  $("input[name='name']").val();
          var dob = $("input[name='dob']").val();
          var username =  $("input[name='username']").val();
          var country =  $("input[name='country']").val();
          var jobs = $("input[name='jobs']").val();
          var hobbies = $("input[name='hobbies']").val();
          var user_lang = $("input[name='user_lang']").val();
         
     
        url = "<?php echo base_url('home/update_profile')?>";
        $.ajax({
          type:"POST",
          url: url,
          data: {name:name,dob:dob,username:username,country:country
            ,jobs:jobs,hobbies:hobbies,user_lang:user_lang},
          cache: false,
        
          success: function(data)
          {   
           $('#all-informations').modal('hide');

          }
        });
    return false;
          
})   


$('.movecoverleft').click(function() {
    $('.movecoverimage').finish().animate({
    'marginLeft' : "-=422px" //moves left
    });
  });

$('.movecoverright').click(function() {
    $('.movecoverimage').finish().animate({
    'marginLeft' : "+=422px" //moves right
    });
  });

// $(".message-box").keydown(function(e) {
//  // $(this).height($(this).height()+5);
//  console.log('scrollHeight',this.scrollHeight);
//  console.log('outerHeight',this.outerHeight);
//   if(this.scrollHeight > 81){
//       $(this).height($(this).height()+0.5);
//         // $(".imoji").css("bottom", "-=1px");
//   }
//     // while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
//     //     $(this).height($(this).height()+1);
//     // };
// });



 
$('a[href="#open-chat"]').click(function(){
  $("#show-chat").removeClass('d-none');
  $("#show-calendar").addClass('d-none');
});
$('a[href="#calendar"]').click(function(){
  $("#show-chat").addClass('d-none');
  $("#show-calendar").removeClass('d-none');
});
$('a[href="#your-contact"]').click(function(){
  $("#show-chat").addClass('d-none');
  $("#show-calendar").addClass('d-none');
});

$('#feedbar').click(function(){
  $('.left-feed').toggleClass('d-none');
  $('.center-inbox-hide').toggleClass('offset-w-20');
  $('.center-inbox-hide').toggleClass('w-35 w-55');
});

$('#calendar-click').click(function(){
  $('#show-me-calendar').removeClass('d-none');
});

$('#tabcalendar').click(function(){
  $('#show-me-calendar').addClass('d-none');
});

/*$('.calendar-clicks').click(function(){
  $('#calendar-inputs').toggleClass('l-100 l--1');
  $('#calendar-inputs').css("transition", "all 0.20s");
});
$('#close-calander-input').click(function(){
  $('#calendar-inputs').toggleClass('l--1 l-100');
});*/

$('#bell-in-calendar').click(function(){
  $('#calendar-show').toggleClass('d-none');
});


$('#add-custom-input').keydown(function(){
  $('#box-add-custom').toggleClass('d-none');
});
$('#add-employee').keydown(function(){
  $('#box-add-employee').toggleClass('d-none');
});
$('#select-services').keydown(function(){
  $('#box-select-services').toggleClass('d-none');
});

$('#hotel-click').click(function(){
  $('#hotel-inner-box').removeClass('d-none');
  $('.feed-explore-arrow > div').addClass('d-none');
});

$('.plus-click').click(function(){
  $(this).siblings('.minus-click').toggleClass('border-theme');
  $(this).siblings('.minus-click').toggleClass('text-light text-theme');
});


$('.profile-skip-btn').click(function(){
  $('.profile-pic-popup').hide();
});
$('.cover-skip-btn').click(function(){
  $('.cover-pic-popup').hide();
});
$('.welcome-skip-btn').click(function(){
  $(this).closest('.welcome-pic-popup').hide();
});



$('.active-bg-text-theme').click(function(){
  $('.active-bg-text-theme').removeClass('active');
  $(this).addClass('active');
});
$('.active-pop-text-theme').click(function(){
  $('.active-pop-text-theme').removeClass('active');
  $(this).addClass('active');
  /*var handler = $('.active-pop-text-theme .active').attr('src','<?php echo base_url() ?>/img/fitness.svg');
  console.log(handler);
  $('.active-pop-text-theme active').attr('src','second.jpg');*/
});


$(window).scroll(function() {
  if ($(document).scrollTop() > 420) {
    $(".header-timeline-profile").removeClass("v-hidden");
    $(".timeline-profile-box").removeClass("d-flex")
    $(".timeline-profile-box").addClass("d-none")
  } else {
    $(".header-timeline-profile").addClass("v-hidden");
    $(".timeline-profile-box").addClass("d-flex")
    $(".timeline-profile-box").removeClass("d-none");
  }
});

$("#count-length").keydown(function(){
  var count = $(this).val().length;
  console.log('count',count);
});



$('#upload').click(function(){
  $('.upload-show').toggleClass('d-none');
});

$('#map-click').click(function(){
  $('.map-view').toggleClass('d-none');
  $('.map-view').toggleClass('trans100 trans0');
  $('.hotel-top-box').toggleClass('d-none');
});


$(".small-chat-close").click(function(){
  $('.small-chat-container').toggleClass('d-none');
  $('.white-small-chat-box').toggleClass('d-none');
});

$(".small-bottom-chat > .left-click-clps").click(function(){
  $('.white-small-chat-box').toggleClass('d-none');
  $('#expand-small-chat').toggleClass('d-none');
});

$("#small-calendar-click").click(function(){
  $("#your-contact").removeClass('active');
  $("#right-chat-box").removeClass('d-none');
  $("#calendar").addClass('active show');
  $("#small-box").addClass('d-none');
  $("#open-chat").removeClass('active show');
  $('#show-me-calendar').removeClass('d-none');
  $('#contact-box-click').removeClass('active');
  $("#chat-box-click").removeClass('active');
  $("#calendar-click").addClass('active');
});

$("#small-chat-click").click(function(){
  $("#right-chat-box").removeClass('d-none');
  $("#open-chat").addClass('active show');
  $("#small-box").addClass('d-none');
  $("#your-contact").removeClass('active show');
  $("#show-me-calendar").addClass('d-none');
  $("#show-chat").removeClass('d-none');
  $("#show-chat").addClass('d-block');
  $("#calendar").removeClass('active show');
  $("#chat-box-click").addClass('active');
  $("#contact-box-click").removeClass('active');
  $("#calendar-click").removeClass('active');
});

$("#small-contact-click").click(function(){
  $("#right-chat-box").removeClass('d-none');
  $("#your-contact").addClass('active show');
  $("#small-box").addClass('d-none');
  $("#open-chat").removeClass('active show');
  $('#show-me-calendar').addClass('d-none');
  $('#contact-box-click').addClass('active');
  $("#chat-box-click").removeClass('active');
  $("#calendar-click").removeClass('active');
});

$("#contact-box-click").click(function(){
  $("#show-chat").addClass('d-none');
});

$("#expand-small-chat").click(function(){
  $(".small-chat-container").toggleClass('bg-chat-box');
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 475) {
    $("#right-chat-box").addClass("position-fixed");
    $("#right-chat-box").removeClass("t-10");
    $("#right-chat-box").addClass("b-0 t-115");
  } else {
    $("#right-chat-box").removeClass("position-fixed");
    $("#right-chat-box").removeClass("b-0 t-115");
    $("#right-chat-box").addClass("t-10");
  }
});



//owl-explore
$('.owl-explore').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    nav:true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

$('#tour-cover-slide').carousel({
        pause: true,
        interval: false
});


$(".chat-profile-btn > .notif-box-one, .chat-profile-btn > .notif-box-two").click(function(){

  $('.small-chat-container').toggleClass('d-none');

  $('.white-small-chat-box').removeClass('d-none');

  $('#expand-small-chat').removeClass('d-none');

});



$("#collapse-right-chat").click(function(){

  $('#right-chat-box').toggleClass('d-flex d-none');

  $('#right-chat-box').removeClass('d-flex');

  $('#small-box').removeClass('d-none');

});

$("#bottom-chat-bar").click(function(){

  $('#right-chat-box').toggleClass('d-flex d-none');

  $('#small-box').addClass('d-none');

});



});
</script>
<script type="text/javascript">

  $(document).ready(function($){

    $(".cstm-cmnt-btn").click(function(e){

      $('.cstm-cmnt-btn ~ .cstm-cmnt-dropdn').toggleClass('d-none');

    });

  $(".cstm-cmnt-btn1").click(function(e){

      var dot = $(this).attr('iddot');
      console.log('.cstm-cmnt-'+dot);
         $('.cstm-cmnt-'+dot).toggleClass('d-none');
    });

  $(".cstm-post-btn").click(function(e){

      var dot = $(this).attr('cust-post-id');
    
         $('.cust-post-'+dot).toggleClass('d-none');
    });

    $(".close").click(function(){

      $('.cstm-cmnt-dropdn').toggleClass('d-none');

    });

    $("#click-big-img").click(function(){

      $(".img-full-view").toggleClass('d-none');

    });

    $(".img-full-view .close").click(function(){

      $(".img-full-view").addClass('d-none');

    });

    $(".like").click(function(){

      $(".inner-likes").toggleClass('d-none');

    });


$('#upload-photos-post').click(function(){
  $('#upload-photos-show').toggleClass('d-none');
  $('#add-friends-show').addClass('d-none');
});
$('#add-friends-post').click(function(){
  $('#upload-photos-show').addClass('d-none');
  $('#add-friends-show').toggleClass('d-none');
});


//shareclick1 
$('img.shareclick1').on('click',function(){
var shareclick1 = $(this).attr('src');
var post_id = $('div.post_divdata').find('div.profile-setting').attr('feed');
    $('img.shareclick-'+post_id).attr('src',shareclick1);
 
});

 $(".drop-inner").click(function(){
      $(".drop-inner-down").toggleClass('d-none');
    });

    $("#crop-popup-open").click(function(){
      $("#crop-popup").removeClass('d-none');
    });

    $("#crop-popup-close").click(function(){
      $("#crop-popup").addClass('d-none');
    });

    $("#text-popup-open").click(function(){
      $("#text-popup").removeClass('d-none');
    });

    $("#text-popup-close").click(function(){
      $("#text-popup").addClass('d-none');
    });

});

</script>

  </body>
</html>
