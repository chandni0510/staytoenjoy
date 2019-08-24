<?php include 'include/header.php';?>
  
  <!-- css files end here  -->
  <body class="shadow-none">
    
    <?php include 'include/after-login-header.php';?>

    <main role="main">

    <div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="account-settings.php" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover">Notification</a></li>
          <li class="d-inline-block"><a href="blocked-accounts.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Blocked Accounts</a></li>
          <li class="d-inline-block"><a href="javascript:void(0)" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover active">Privacy & Safety</a></li>
          <li class="d-inline-block"><a href="login-history.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Login History</a></li>
          <li class="d-inline-block"><a href="password-settings.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Password</a></li>
          <li class="d-inline-block"><a href="manage-account.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Manage Account</a></li>
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
            <div class="p-3 pb-4 mb-4 profile-setting bg-white border border-r-10">
              
              <div class="contactForm">
                <h6 class="font-weight-bold text-dark my-3">Privacy & Safety</h6>
                <hr class="mt-4">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0">Post privacy</label>
                  <div class="col-sm-10 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Protect your Posting
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="font-14 text-secondary">If selected, only those you approve will receive your Tweets. Your future Tweets will not be available publicly. Tweets posted previously may still be publicly visible in some places. <span class="text-theme-blue">Learn more.</span></label>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0">Posting location</label>
                  <div class="col-sm-10 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Poting with a location
                      <input type="checkbox" checked="">
                      <span class="checkmark"></span>
                    </label>
                    <label class="font-14 text-secondary">If selected, you can add a location to your Tweets, such as your city or precise location, from the web and via third-party applications. This setting does not affect Twitter for iOS or Android. <span class="text-theme-blue">Learn more.</span></label>
                    <a href="javascript:void(0)" class="btn bg-primary border-r-20 text-white mt-3">Delete Location Informations</a>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0">Photo tagging</label>
                  <div class="col-sm-10 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Allow anyone to tag you in photos
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Only allow people you follow to tag you in photos
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
                  <label class="col-sm-2 col-form-label font-14 pr-0">Discoverability</label>
                  <div class="col-sm-10 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Let others find you by your email address
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Let others find you by your phone number
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="pl-0 text-secondary container-box d-block position-relative c-pointer font-14">This setting will take effect once you add a phone number. <span class="text-theme-blue">Add now</span></label><br>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0">Address Book</label>
                  <div class="col-sm-10 position-relative">
                    <a href="javascript:void(0)" class="btn bg-transparent border mb-2 border-r-20 text-dark font-14 border-primary">Manage your account</a>
                    <label class="pl-0 text-secondary container-box d-block position-relative c-pointer font-14">Contact you've uploaded to StayToEnjoy from your address book.
                    </label>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0 pt-0">Address Book</label>
                  <div class="col-sm-10 position-relative">
                    <label class="pl-0 container-box d-block position-relative c-pointer font-14">Allow some <span class="text-theme-blue">Edit</span>
                    </label>
                    <label class="pl-0 text-secondary container-box d-block position-relative c-pointer font-14">Control how Twitter personalizes content and collects and shares certain data.
                    </label>
                  </div>
                </div>
                <hr class="my-4">
                <h5 class="mt-4 mb-3 text-theme-blue">Safety</h5>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0 pt-0">Search</label>
                  <div class="col-sm-10 position-relative">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Hide sensitive content
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
                  <label class="col-sm-2 col-form-label font-14 pr-0 pt-0">Posting media</label>
                  <div class="col-sm-10 position-relative">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Display media that may contain sensitive content
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
                  <label class="col-sm-2 col-form-label font-14 pr-0 pt-0">Spcial connections</label>
                  <div class="col-sm-10 position-relative">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Share my activity my facebook friends
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0 pt-0">Your listing and profile in search engines</label>
                  <div class="col-sm-10 position-relative">
                    <label class="container-box d-inline-block clearfix position-relative c-pointer font-14">Search engines are important to attract traffic
                      <input type="checkbox" checked="">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              
              <hr class="my-4">
              <div class="row">
                <div class="col">
                  <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">
                </div>
                <div class="col">
                  <input type="button" class="btn btn-primary bg-primary float-right font-14" value="Save">
                </div>
              </div>
              
            </div>
          </div>

          <div class="w-22 px-2">
            <?php include 'include/right-three-box.php';?>
          </div>
          
        </div>
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->

    </main> <!-- /main -->

    <footer class="bg-secondary d-flex align-items-center position-relative footer-box-scroll">
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

  $('.toggle-switch').click(function(){
    $('.toggle-switch:before').attr("contact", "\f000");
  })

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
