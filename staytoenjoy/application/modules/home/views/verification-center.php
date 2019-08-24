<?php include 'include/header.php';?>
<main role="main">
    <div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="javascript:void(0)" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover active">Verify Telephone and Email</a></li>
          <li class="d-inline-block"><a href="verify-id.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Verify your ID</a></li>
          <li class="d-inline-block"><a href="kyc-verify.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">KYC Verifications</a></li>
          <li class="d-inline-block"><a href="connected-apps.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Connected Apps</a></li>
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
                <h6 class="font-weight-bold text-dark my-3">Telephone and Email Verifications
                  <i class="fa fa-info-circle pl-2 font-14"></i>
                </h6>
                <hr class="my-4">
                <div class="form-group row select-intrst d-flex align-items-center">
                  <div class="col-sm-12 text-center">
                    <div class="w-100 py-3 px-5">
                      <h2 class="py-3"> Set up 2-step login</h2>
                      <img src="<?php echo base_url('img/step-to-step.svg')?>">
                      <p class="font-14 text-secondary pt-3">Level up your account security by using your mobile phone to confirm your identity at login. You can change this number later in your account settings.</p>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 position-relative">
                    <select class="form-control custom-arrow font-14" style="padding-left: 35px!important;">
                      <option class="pl-0" style="padding-left: 0px!important;">Phone number</option>
                      <option>Phone number</option>
                      <option>Phone number</option>
                    </select>
                    <img src="<?php echo base_url('img/img-flag.svg')?>" class="position-absolute img-flag">
                    <img src="<?php echo base_url('img/down-arrow.png')?>" class="position-absolute img-arrow">
                  </div>
                  <div class="col-sm-6 position-relative">
                    <input type="text" class="form-control font-14" placeholder="Your number">
                    <a href="javascript:void(0)" class="font-14 float-right">Change Number</a>
                  </div>
                  <div class="col-sm-2 position-relative">
                    <button class="bg-primary d-inline-block text-white py-2 px-3 rounded border-0 c-pointer">
                      <i class="fa fa-refresh"></i>
                    </button>
                  </div>
                </div>
                <div class="col-md-4 offset-md-4">
                  <input type="button" class="btn btn-primary bg-primary w-100 font-14" value="Send Code" data-toggle="modal" data-target="#verify-modal">
                  <label class="text-theme-blue font-14 py-3">Didn't get the Code?
                    <a href="javascript:void(0)" class="font-weight-bold">Send again</a>
                  </label>
                </div>
                <hr class="my-4">
                <div class="form-group row select-intrst d-flex align-items-center">
                  <div class="col-sm-12 text-center">
                    <div class="w-100 py-3 px-5">
                      <img src="<?php echo  base_url('img/confirm-email.svg')?>"><br>
                      <input type="button" class="btn btn-primary bg-danger border-danger w-25 font-14 my-4" value="Confirm your Email">
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-group row select-intrst d-flex align-items-center">
                  <div class="col-sm-12 text-left">
                    <div class="w-100 py-3">
                      <h6>Email Address</h6>
                      <p class="font-14 mb-0">You have confirmed your email: <span class="text-theme-blue">kontakt@Jensbehrmann.co.</span> Aconfirmed email is important to allow us to securely communication with you</p>
                    </div>
                  </div>
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

 <?php include 'include/footer.php'?>
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
