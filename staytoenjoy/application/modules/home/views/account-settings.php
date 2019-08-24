<?php include 'include/header.php';?>

<main role="main">

    <div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="javascript:void(0)" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover active">Notification</a></li>
          <li class="d-inline-block"><a href="blocked-accounts.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Blocked Accounts</a></li>
          <li class="d-inline-block"><a href="privacy-safety.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Privacy & Safety</a></li>
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
                <div class="d-flex justify-content-center align-items-center">
                  <div class="col-sm-5 text-left mb-4 px-0">
                    <h2 class="text-dark mt-0 mb-5 mb-sm-4">Account Settings</h2>
                  </div>
                  <div class="col-sm-7">
                    <img src="<?php echo base_url('img/account-setting-img.svg');?>" class="w-100">
                  </div>
                </div>
                <hr class="hr-color-grey">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0">Email is enabled</label>
                  <div class="col-sm-10">
                    <label class="switch position-relative d-inline-block my-2">
                      <input type="checkbox" checked>
                      <span class="slider round position-absolute c-pointer"></span>
                    </label>
                  </div>
                </div>
                <h6 class="text-dark mt-4 mb-3">Activity Related to you and posting</h6>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0">Email is enabled</label>
                  <div class="col-sm-10 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14 ">You have new notifications
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">You're sent a direct message
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Someones email a post to you
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                  </div>
                </div>
                <hr class="my-4">
                <h6 class="mt-4 mb-3 text-theme-blue">Activity from your social media</h6>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0">Email you with</label>
                  <div class="col-sm-10 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Top post and stories
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Update about the performance and posts
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                  </div>
                </div>
                <hr class="my-4">
                <h6 class="mt-4 mb-3 text-dark">Activity from your social media</h6>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0"></label>
                  <div class="col-sm-10 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">News about StayToEnjoy products and feature updates
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Tips on getting more out of StayToEnjoy
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Things you missed sinca you last logged into StayToEnjoy
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">News about StayToEnjoy on partner products and other third party services
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Participation in StayToEnjoy research survey
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Suggestions for recommended accounts
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Suggestions based on your recent follows
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                  </div>
                </div>
                <hr class="my-4">
                <h6 class="mt-4 mb-3 text-dark">Text Notification</h6>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0">Receive SMS notification to:</label>
                  <div class="col-sm-5 position-relative mt-2">
                    <input type="text" class="form-control font-14" placeholder="Number">
                    <label class="font-14">For change number <span class="text-theme-blue">Upload your identity</span></label>
                  </div>
                  <div class="col-sm-4 position-relative mt-2 pl-3 pl-sm-0">
                    <label class="font-14 text-theme-blue pt-10px">Confirmed</label>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0">Notify my when:</label>
                  <div class="col-sm-10 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Message
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Reservation Updates
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Account Changes
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                    <label class="container-box d-inline-block position-relative c-pointer font-14">Others
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label><br>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label font-14 pr-0">Email you with</label>
                  <div class="col-sm-10 position-relative mt-2">
                    <label class="container-box d-inline-block position-relative c-pointer font-14">News about StayToEnjoy products and features updates
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label><br>
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

   

      <?php include 'include/footer.php';?>

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
