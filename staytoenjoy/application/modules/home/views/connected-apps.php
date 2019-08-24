<?php include 'include/header.php';?>

  <body class="shadow-none">

    <?php include 'include/after-login-header.php';?>
    
    <main role="main">


    <div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="verification-center.php" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover">Verify Telephone and Email</a></li>
          <li class="d-inline-block"><a href="verify-id.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Verify your ID</a></li>
          <li class="d-inline-block"><a href="kyc-verify.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">KYC Verifications</a></li>
          <li class="d-inline-block"><a href="javascript:void(0)" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover active">Connected Apps</a></li>
        </ul>
      </div>
    </div>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      
    <section class="content-sec bg-light-blue pt-0">
      <div class="container-fluid"><!--  mini-container -->
        <!-- Example row of columns -->
        <div class="row">
          
          <div class="col-lg-8 col-md-4 offset-lg-2">
            <!--<h1 class="mb-4 font-weight-normal">Settings</h1>-->
          </div>
        </div>

        <div class="row mt-5">
          <div class="w-15 position-md-fixed px-0 h-100 left-inbox-hide">
            <?php include 'include/left-settings-tab.php';?>
          </div>

          <div class="w-63 offset-w-15 center-inbox-hide pr-2">
            <div class="border p-3 pb-4 mb-4 profile-setting bg-white border-r-10">
                      
              <div class="contactForm">
                <h6 class="font-weight-bold text-dark my-3">Connected Apps
                  <i class="fa fa-info-circle pl-2"></i>
                </h6>
                <hr class="mt-4">
                <div class="form-group row">
                  <div class="col-sm-6 font-14">
                    <div class="box shadow-sm border p-3 mb-4 hover-shadow">
                      <div class="d-inline-block va-top position-relative">
                        <img src="img/stay-to-enjoy-icon.png" class="mt-1">
                        <img src="img/check-green-icon.svg" class="position-absolute" style="bottom: 0px; right: -6px;">
                      </div>
                      <div class="d-inline-block pl-3 font-14">
                        <h6 class="text-theme-blue">StayToEnjoy</h6>
                        <label class="mb-0">Connected to Nelly Porfavore</label>
                      </div>
                    </div>
                    <div class="box shadow-sm border p-3 mb-4 hover-shadow">
                      <div class="d-inline-block va-top position-relative">
                        <img src="img/twitter-icon.png" class="mt-1">
                        <img src="img/check-green-icon.svg" class="position-absolute" style="bottom: 0px; right: -6px;">
                      </div>
                      <div class="d-inline-block pl-3 font-14">
                        <h6 class="text-theme-blue">Twitter</h6>
                        <label class="mb-0">No Connected to Twitter</label>
                      </div>
                    </div>
                    <div class="box shadow-sm border p-3 mb-4 hover-shadow">
                      <div class="d-inline-block va-top">
                        <img src="img/g-plus-icon.png" class="mt-1">
                      </div>
                      <div class="d-inline-block pl-3 font-14">
                        <h6 class="text-theme-blue">Google +</h6>
                        <label class="mb-0">No Connected to Google +</label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-6 font-14">
                    <div class="box shadow-sm border p-3 mb-4 hover-shadow">
                      <div class="d-inline-block va-top position-relative">
                        <img src="img/fb-icon.png" class="mt-1">
                        <img src="img/check-green-icon.svg" class="position-absolute" style="bottom: 0px; right: -6px;">
                      </div>
                      <div class="d-inline-block pl-3 font-14">
                        <h6 class="text-theme-blue">Facebook</h6>
                        <label class="mb-0">Connected to Nelly Porfavore</label>
                      </div>
                    </div>
                    <div class="box shadow-sm border p-3 mb-4 hover-shadow">
                      <div class="d-inline-block va-top">
                        <img src="img/linkdin-icon.png" class="mt-1">
                      </div>
                      <div class="d-inline-block pl-3 font-14">
                        <h6 class="text-theme-blue">Linked In</h6>
                        <label class="mb-0">No Connected to Linked In</label>
                      </div>
                    </div>
                    <div class="box p-3 mb-4">
                      <input type="button" class="btn btn-primary bg-light-blue text-theme text-theme-hover w-100 py-2 border font-14" value="Add Social Network">
                    </div>
                  </div>
                  
                </div>

                <hr class="my-4">
              </div>
                
            </div>
          </div>

          <div class="w-22 px-2">
            <div class="border p-3 mb-4 profile-setting bg-white rounded-10">
              <div class="position-relative m-auto mx-w-120">
                <div class="m-auto profile-img p-3">
                  <img src="img/profile-img.svg" class="w-100 h-100 rounded-0">
                  <div class="position-absolute bg-theme icon">
                    <img src="img/pencil-icon.svg" class="w-h-15">
                  </div>
                  <div class="position-absolute camera-icon font-25" style="top: 30%; left:40%;">
                    <i class="fa fa-camera text-white"></i>
                  </div>
                </div>
              </div>

              <h6 class="text-dark font-weight-normal text-center mt-2">Jens Behrmann</h6>
              <hr class="mb-1">
              <div class="w-100 text-center">
                <div class="progress w-50 d-inline-block" style="height: 6px;">
                  <div class="progress-bar bg-danger w-75 text-danger" style="display: list-item;"></div>
                </div>
                <span class="font-12"> Profile Completion 75%</span>
              </div>

              <div class="colaps-right-box-show">
                <hr class="mt-2">
                <div class="row text-center">
                  <div class="col px-0">
                    <img src="img/photo-videos-profile-icon.svg">
                    <h6 class="font-12 text-theme-blue mt-1">222 Friends</h6>
                  </div>
                  <div class="col px-0">
                    <img src="img/photo-videos-profile-icon.svg">
                    <h6 class="font-12 text-theme-blue mt-1">222 Photos &amp; Videos</h6>
                  </div>
                  <div class="col px-0">
                    <img src="img/marketing-icon.svg">
                    <h6 class="font-12 text-theme-blue mt-1">Make Advertising</h6>
                  </div>
                </div>
                
              </div>
            </div>

            <div class="p-3 mb-4 profile-setting bg-white rounded-10 border position-relative">
              <button class="position-absolute bg-transparent border-0 c-pointer bx-2-vrify">
                <i class="fa fa-minus text-secondary font-12"></i>
              </button>
              <div class="d-flex justify-content-between align-items-center">
                <div class="pl-2">
                  <h6 class="text-dark font-weight-normal text-center mt-2">Verifications</h6>
                </div>
                <div class="pl-2 pr-0">
                  <img src="img/verification-img.svg" class="w-100 h-100 rounded-0">
                </div>
              </div>
              <div class="bx-hide">
                <hr class="clearfix">
                <h6 class="font-12 text-secondary">Your Email is verified
                  <button class="bg-transparent border-0 float-right c-pointer">
                    <i class="fa fa-ellipsis-h text-secondary"></i>
                  </button>

                  <label class="position-relative mb-0 tooltip-hover pr-5 float-right">
                    <i class="fa fa-check-circle text-success font-16"></i>
                    <div class="position-absolute tooltip-inner tool-l">Successfully checked</div>
                  </label>
                </h6>
                <h6 class="font-12 text-secondary">Your Mobile Number is not verified
                  <button class="bg-transparent border-0 float-right c-pointer">
                    <i class="fa fa-ellipsis-h text-secondary"></i>
                  </button>
                  <label class="position-relative mb-0 tooltip-hover pr-5 float-right">
                    <i class="fa fa-exclamation-circle text-warning font-16"></i>
                    <div class="position-absolute tooltip-inner tool-l">Please verify you Mobile Number</div>
                  </label>
                  
                </h6>
                <h6 class="font-12 text-secondary">Id Verification pending
                  <button class="bg-transparent border-0 float-right c-pointer">
                    <i class="fa fa-ellipsis-h text-secondary"></i>
                  </button>
                  <label class="position-relative mb-0 tooltip-hover pr-5 float-right">
                    <i class="fa fa-check-circle text-info font-16"></i>
                    <div class="position-absolute tooltip-inner tool-l">We check your sent documents</div>
                  </label>

                </h6>
                <h6 class="font-12 text-secondary">KYC Verification
                  <a href="javascript:void(0)" class="pl-2">Learn more</a>
                  <button class="bg-transparent border-0 float-right c-pointer">
                    <i class="fa fa-ellipsis-h text-secondary"></i>
                  </button>
                  <label class="position-relative mb-0 tooltip-hover pr-5 float-right">
                    <i class="fa fa-exclamation-circle text-dark font-16"></i>
                    <div class="position-absolute tooltip-inner tool-l">Your verification is in progress</div>
                  </label>
                  <!-- <span class="float-right font-12">In progress...</span> -->
                </h6>
                <hr>
                <h6 class="text-center font-12 mb-0 text-secondary">Welcome to StayToEnjoy</h6>
              </div>
            </div>

            <div class="border p-3 mb-4 profile-setting bg-white rounded-10 position-relative">
              <button class="position-absolute bg-transparent border-0 c-pointer bx-2-vrify">
                <i class="fa fa-minus text-secondary font-12"></i>
              </button>
              <h6 class="font-13 mb-0 text-dark">We are checking your documents</h6>
              <hr>
              <div class="w-100">
                  <img src="img/doc-img.svg" class="w-100 h-100 rounded-0">
              </div>

              <div class="bx-hide">
                <hr class="clearfix">
                <h6 class="font-12 mb-0 text-secondary">It should take us max. hours. If you have any question feel free to contact us.</h6>
              </div>
            </div>
          </div>
          
        </div>
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->

    </main> <!-- /main -->

    <footer class="bg-secondary d-flex align-items-center position-relative">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
        <ul class="list-group d-inline ul-list">
          <li class="list-inline-item"><a href=""> About </a></li>
          <li class="list-inline-item"><a href=""> Help </a></li>
          <li class="list-inline-item"><a href=""> Center </a></li>
          <li class="list-inline-item"><a href=""> List Your Offer </a></li>
          <li class="list-inline-item"><a href=""> Booking </a></li>
          <li class="list-inline-item"><a href="terms.php"> Terms </a></li>
          <li class="list-inline-item"><a href=""> Privacy Policy </a></li>
          <li class="list-inline-item"><a href=""> Imprint </a></li>
          <li class="list-inline-item"><a href=""> Cookies </a></li>
          <li class="list-inline-item"><a href=""> Ads Info </a></li>
          <li class="list-inline-item"><a href=""> Advertise </a></li>
          <li class="list-inline-item"><a href=""> Business Pages </a></li>
          <li class="list-inline-item"><a href=""> Profile </a></li>
          <li class="list-inline-item"><a href=""> Friends </a></li>
        </ul>
        <div class="drop-btn">
          <div class="dropdown d-inline">
            <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="modal" data-target="#modal"><img src="img/flag.png"> English
            <span class="caret"></span></button>
           </div>

           <div class="modal fade pr-0" id="modal">
            <div class="modal-dialog mw-100 h-100 m-0">
              <div class="modal-content rounded-0 mw-100 overflow-hidden h-100 h-auto-md" style="background: #3f4857;">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 text-right">
                      <a class="close-pop-btn" href="#"><img src="img/x.png" data-dismiss="modal"></a>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                      <img src="img/logo3.png">
                      <h3 class="text-white">CHOOSE YOUR COUNTRY</h3>
                      <p class="text-muted">Selecting a country may change the language and will deliver relevant content for your location.</p>
                    </div>
                    <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                      <div class="row border-right border-secondary">
                        <div class="col-md-6">
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/nederland.png">
                            <h6 class="d-inline-block text-white pl-3">nederland</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/united-state.png">
                            <h6 class="d-inline-block text-white pl-3">United State</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/espana.png">
                            <h6 class="d-inline-block text-white pl-3">Espana</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/belgique_belgie.png">
                            <h6 class="d-inline-block text-white pl-3">Belgique/Belgie</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/australia.png">
                            <h6 class="d-inline-block text-white pl-3">Australia</h6>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/united-kingdom.png">
                            <h6 class="d-inline-block text-white pl-3">United Kingdom</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/deutschland.png">
                            <h6 class="d-inline-block text-white pl-3">Deutschland</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/france.png">
                            <h6 class="d-inline-block text-white pl-3">France</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/canada.png">
                            <h6 class="d-inline-block text-white pl-3">Canada</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/new-zealand.png">
                            <h6 class="d-inline-block text-white pl-3">New Zealand</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group contactForm">
                        <label class="text-muted">Dont`t see your country? check the full list below</label>
                        <select class="form-control custom-arrow bg-language border-secondary border-r-20">
                          <option class="bg-language">Choose your country </option>
                          <option class="text-dark">Nederland</option>
                          <option class="text-dark">United State</option>
                          <option class="text-dark">Espana</option>
                        </select>
                      </div>
                      <p class="text-muted pt-3">Is your country not listed? you can always view our website in plain english</p>
                      <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2 w-50">
                        <img src="img/united-kingdom.png">
                        <h6 class="d-inline-block text-white pl-3">English</h6>
                      </div>
                    </div>
                    <div class="offset-md-1 col-lg-6 col-sm-12 col-xs-12 mt-4">
                      <p class="text-muted">If you have questions,suggestion or complaints concerning our localisation efforts, <a href="javascript:void(0)" class="text-blue-btm"> you can always contact us. </a> We`d love to hear from you.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="dropdown d-inline">
            <button class="btn btn-outline-secondary dropdown-toggle" id="show-drop2" type="button" data-toggle="dropdown"><img src="img/flag.png"> USD
            <span class="caret"></span></button>
            <ul class="dropdown-menu drop-menu" id="drop2">
              <li id="1" class="bg-light px-2"><a href="#" class="text-dark font-12">USD <img src="img/flag.png" class="float-right"></a></li>
              <li id="2" class="bg-white px-2"><a href="#" class="text-dark font-12">INR <img src="img/canada.svg" class="float-right"></a></li>
            </ul>
          </div>
        </div>
      </div> <!-- col-12-->

        <div class="col-md-12">
          <p class="text-secondary text-lg-right font-12 pt-2 mb-0">Copyrights 2018 StayToEnjoy </p> 
        </div>

      </div>  <!-- //Row -->
      </div> <!-- //Container --> 
    </footer> <!-- //footer -->

    <!-- Bootstrap JavaScript start -->


<script type="text/javascript">
  $("#left-inbox-clps").click(function(){
    $(this).toggleClass('pl-4');
    $(".left-inbox-hide").toggleClass('w-15 w-5');
    $(".left-inbox-hide .hide-me > div").toggleClass('d-inline-block d-none');
    $(".add-hide-me").toggleClass('d-none');
    $(".left-inbox-hide .hide-me").toggleClass('m-auto');
    $(".center-inbox-hide").toggleClass('w-63 w-73');
    $(".center-inbox-hide").toggleClass('offset-w-15 offset-w-5');
  });


    $("#show-drop").click(function(){
  $("#drop1").toggleClass("show");

      $(function() {
  $(document).click(function (event) {
    $("#drop1").removeClass("show");

  });
});

});

  </script>

<script type="text/javascript">
    $("#show-drop2").click(function(){
      $("#drop2").toggleClass("show");

          $(function() {
  $(document).click(function (event) {
    $("#drop2").removeClass("show");

  });
});
      });
</script>

<script type="text/javascript">
    /*$("#toggle-bg").click(function(){
      $(".navbar").toggleClass("toggle-bg");
    });*/

    $(".img-hover").hover(function(){
      $(this).toggleClass('z-index-999');
    });


    $(".search-icon.responsive").click(function(){
      $('.search-mob.responsive').toggleClass('d-none');
      $('.back-icon').toggleClass('d-none');
    });

    $(".bx-2-vrify").click(function(){
        $(this).siblings('.bx-hide').toggleClass('d-none');
        $(this).find('i').toggleClass('fa-minus');
        $(this).find('i').toggleClass('fa-plus');
    });
    $(".bars-btn").click(function(){
      $('.bx-hide').toggleClass('d-none');
    });
    $(".add-phone").click(function(){
        $('.number-box').toggleClass('d-none');
    });
    $(".add-lang").click(function(){
        $(this).siblings('input').toggleClass('d-none');
        $(this).siblings('input').toggleClass('d-inline-block');
    });

</script>

  </body>
</html>
