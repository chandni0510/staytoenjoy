<?php include 'include/header.php';?>

<main role="main">
    <div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="account-overview.php" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover active">Account Overview</a></li>
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
                <h6 class="font-weight-bold text-dark my-3">Account Overview
                  <label class="position-relative tooltip-hover float-right mb--7">
                    <a href="javascript:void(0)" class="btn btn-primary bg-theme py-1 font-14 text-white" data-toggle="modal" data-target="#bio-edit">
                      Public <i class="fa fa-globe pl-2"></i>
                    </a>
                    <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Who shall see this?</div>
                  </label>
                </h6>
                <hr class="mt-4">
                <div class="form-group row select-intrst d-flex align-items-center">
                  <div class="col-sm-6 text-center">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="position-relative ml-4 mx-w-170">
                        <?php if(isset($users) && !empty($users->user_img)){
                               $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
                               $padding = "p-0";
                             }else{
                                $user_img = base_url().'img/account-overview-img.svg';
                                 $padding = "p-3";
                             }
                          ?>
                        <div class="m-auto account-profile-img  <?php echo $padding;?>" id="profile-container">
                           <img src="<?php echo $user_img; ?>" class="w-100 h-100 rounded-0 profileImage " id="profileImage">
                          <div class="position-absolute bg-theme icon">
                            <img src="<?php echo base_url('img/pencil-icon.svg')?>" class="w-h-15">
                          </div>
                          <div class="position-absolute camera-icon font-25 d-flex justify-content-center align-items-center t-0 r-0 b-0 l-0" style="background: #0000008f; border-radius: 50%; width: 150px; height: 146px;">
                             <input id="imageUpload" type="file" 
                               name="profile_photo" class="position-absolute w-100 t-0 l-0 b-0 opacity-0" capture>
                            <i class="fa fa-camera text-white"></i>
                          </div>
                        </div>
                      </div>
                      <div class="pr-4">
                        <h6 class="font-20"><?php echo isset($info->first_name)? $info->first_name.' '.$info->last_name : "" ?></h6>
                        <p class="font-12 text-theme">CEO & Founder StayToEnjoy</p>
                        <input type="button" class="btn btn-primary bg-light-blue mt-2 text-theme text-theme-hover w-100 py-2 border font-14" value="Member since <?php echo isset($info->creation) ? date('M,Y',strtotime($info->creation)) : ""?>">
                      </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 text-left border-left">
                    <div class="py-3 font-14">
                 <?php
                 
                    $dob= date('Y-m-d',strtotime($info->dateofbirth));
                    $diff = (date('Y') - date('Y',strtotime($dob)));
                   
                ?>

                      <p class="text-theme-blue mb-1 box">Age:
                        <span class="text-dark"><?php echo isset($diff) ? $diff : "37" ?></span>
                        <a href="javascript:void(0)" class="text-dark pr-5 visible-hover float-right">Edit</a>
                      </p>
                      <p class="text-theme-blue mb-1 box">From:
                      <?php
                      if($info->country == "IN"){
                          $con = "India";
                      }else{
                          $con = "";
                      }
                      ?>
                        <span class="text-dark"><?php echo isset($info->state)? $info->state.','.$con :"" ?></span>
                        <a href="javascript:void(0)" class="text-dark pr-5 visible-hover float-right">Edit</a>
                      </p>
                      <p class="text-theme-blue mb-1 box">Company:
                        <span class="text-dark">StayToEnjoy</span>
                        <a href="javascript:void(0)" class="text-dark pr-5 visible-hover float-right">Edit</a>
                      </p>
                      <p class="text-theme-blue mb-1 box">Role:
                        <span class="text-dark">CEO & Founder</span>
                        <a href="javascript:void(0)" class="text-dark pr-5 visible-hover float-right">Edit</a>
                      </p>
                      <p class="text-theme-blue mb-1 box">Username:
                        <span class="text-dark"><?php echo isset($info->first_name)? $info->first_name.' '.$info->last_name : "" ?></span>
                        <a href="javascript:void(0)" class="text-dark pr-5 visible-hover float-right">Edit</a>
                      </p>
                      <p class="text-theme-blue mb-1 box">Contact:
                        <span class="text-dark"><?php echo isset($info->email) ? $info->email : "" ?></span>
                        <a href="javascript:void(0)" class="text-dark pr-5 visible-hover float-right">Edit</a>
                      </p>
                      <p class="text-theme-blue mb-1 box">Email:
                        <span class="text-dark"><?php echo isset($info->email)? $info->email : "" ?></span>
                        <a href="javascript:void(0)" class="text-dark pr-5 visible-hover float-right">Edit</a>
                      </p>
                      
                      <p class="text-theme-blue mb-1 box">Telephone Nr:
                        <span class="text-theme-blue"><?php echo isset($info->landline)? $info->landline : "" ?></span>
                        <a href="javascript:void(0)" class="text-dark pr-5 visible-hover float-right">Edit</a>
                      </p>  
                    </div>
                  </div>
                </div>
                <hr class="hr-color-grey">
                <div class="d-flex justify-content-start px-3">
                  <div class="pr-5 text-center">
                    <p class="text-dark">Friends</p>
                    <h2 class="text-theme">50</h2>
                  </div>
                  <div class="pr-5 text-center">
                    <p class="text-dark">Followers</p>
                    <h2 class="text-theme">40</h2>
                  </div>
                  <div class="pr-5 text-center">
                    <p class="text-dark">Following</p>
                    <h2 class="text-theme">32</h2>
                  </div>
                  <div class="pr-5 text-center">
                    <p class="text-dark">Bookings</p>
                    <h2 class="text-theme">30</h2>
                  </div>
                  <div class="pr-5 text-center">
                    <p class="text-dark">Verifications</p>
                    <div class="mt-1">
                      <a href="javascript:void(0)" class="position-relative">
                        <img src="<?php echo  base_url('img/phone-inbox-icon.svg')?>" class="w-20px">
                        <img src="<?php echo  base_url('img/check-green-icon.svg')?>" class="position-absolute" style="bottom: 0px; right: -6px;">
                      </a>
                    </div>
                  </div>
                  <div class="pr-5 text-center">
                    <p class="text-dark">Connected Apps</p>
                    <div class="mt-1">
                      <a href="javascript:void(0)"><img src="<?php echo  base_url('img/twitter-icon.svg')?>" class="w-25px"></a>
                      <a href="javascript:void(0)" class="px-2"><img src="<?php echo  base_url('img/fb-icon.svg')?>" class="w-25px"></a>
                      <a href="javascript:void(0)"><img src="<?php echo  base_url('img/linkdin-icon.svg')?>" class="w-25px"></a>
                    </div>
                  </div>
                </div>
                <hr class="hr-color-grey">
              </div>
              
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

    <!-- //footer -->
    <!-- Bootstrap JavaScript start -->


<script type="text/javascript">
    $("#language-click").click(function(){
      $(this).hide();
      $('#text-show').toggleClass('d-inline-block');
    });


    $("#left-inbox-clps").click(function(){
      $(this).toggleClass('m-auto');
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
