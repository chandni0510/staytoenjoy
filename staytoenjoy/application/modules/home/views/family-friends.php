<?php include 'include/header.php';?>

  
<main role="main">
   <div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="<?php echo base_url('home/profile_setting')?>" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover active">Profile Informations</a></li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/biography')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Biography</a></li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/interests')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Interests</a></li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/about_us')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">About Us</a></li>
        <li class="d-inline-block"><a href="<?php echo base_url('home/family_friends')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Family & Friends</a>
          </li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/relationship')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Relationship</a></li>
        </ul>
      </div>
    </div>

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
            <div class="p-3 pb-4 mb-4 profile-setting bg-white border-r-10 border">

              <div class="contactForm">
                <h6 class="font-weight-bold text-dark my-3">Family & Friends
                  <label class="position-relative mb-0 tooltip-hover float-right mb--7">
                    <a href="javascript:void(0)" class="btn btn-primary bg-theme py-1 font-14 text-white" data-toggle="modal" data-target="#bio-edit">
                      Public <i class="fa fa-globe pl-2"></i>
                    </a>
                    <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Who shall see this?</div>
                  </label>
                </h6>
                <hr class="mt-4">
                <div class="form-group row select-intrst">
                  <div class="col-sm-6 text-center">
                    <div class="text-theme-blue py-4 font-14">Add Your Family Members</div>
                    <div class="w-100">
                      <img src="<?php echo base_url('img/family-img.svg') ?>">
                    </div>
                    <div class="text-dark font-14 px-5 pt-3 pb-2">Upload a Pictures or make a Picture with you camera</div>
                    <div class="text-theme-blue pb-3 font-14">Drag and drop picture</div>
                    <div class="w-50 m-auto position-relative">
                      <div class="position-absolute img-hover" style="left: 0%;">
                        <img src="<?php echo base_url('img/family-user-img.svg') ?>">
                        <div class="text-theme-blue font-14">Jens</div>
                      </div>
                      <div class="position-absolute img-hover" style="left: 25%">
                        <img src="<?php echo base_url('img/family-user-img.svg') ?>">
                        <div class="text-theme-blue font-14">Jens</div>
                      </div>
                      <div class="position-absolute img-hover" style="left: 50%">
                        <img src="<?php echo base_url('img/family-user-img.svg') ?>">
                        <div class="text-theme-blue font-14">Jens</div>
                      </div>
                      <div class="position-absolute img-hover" style="left: 75%">
                        <img src="<?php echo base_url('img/family-user-img.svg') ?>">
                        <div class="text-theme-blue font-14">Jens</div>
                      </div>
                    </div>
                    <div class="height50"></div>
                    <div class="form-group row mb-2 mt-5">
                      <label class="position-relative m-auto pl-3">
                        <input type="text" class="form-control font-14 m-auto rounded-20" style="padding-left: 35px!important;" placeholder="Search">
                          <i class="fa fa-search position-absolute text-secondary" style="top: 14px; left: 30px;"></i>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6 text-center">
                    <div class="text-theme-blue py-4 font-14">Add Your Family Members</div>
                    <div class="w-100">
                      <img src="<?php echo base_url('img/family-enjoy-img.svg') ?>">
                    </div>
                    <div class="text-dark font-14 px-5 pt-3 pb-2">Upload a Pictures or make a Picture with you camera</div>
                    <div class="text-theme-blue pb-3 font-14">Drag and drop picture</div>
                    <div class="w-50 m-auto position-relative">
                      <div class="position-absolute img-hover" style="left: 0%;">
                        <img src="<?php echo base_url('img/family-user-img.svg') ?>">
                        <div class="text-theme-blue font-14">Jens</div>
                      </div>
                      <div class="position-absolute img-hover" style="left: 25%">
                        <img src="<?php echo base_url('img/family-user-img.svg') ?>">
                        <div class="text-theme-blue font-14">Jens</div>
                      </div>
                      <div class="position-absolute img-hover" style="left: 50%">
                        <img src="<?php echo base_url('img/family-user-img.svg') ?>">
                        <div class="text-theme-blue font-14">Jens</div>
                      </div>
                      <div class="position-absolute img-hover" style="left: 75%">
                        <img src="<?php echo base_url('img/family-user-img.svg') ?>">
                        <div class="text-theme-blue font-14">Jens</div>
                      </div>
                    </div>
                    <div class="height50"></div>
                    <div class="form-group row mb-2 mt-5">
                      <label class="position-relative m-auto pl-3">
                        <input type="text" class="form-control font-14 m-auto rounded-20" style="padding-left: 35px!important;" placeholder="Search">
                          <i class="fa fa-search position-absolute text-secondary" style="top: 14px; left: 30px;"></i>
                      </label>
                    </div>
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
    $("#language-click").click(function(){
      $(this).hide();
      $('#text-show').toggleClass('d-inline-block');
    });


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
      // body...
    

</script>

  </body>
</html>
