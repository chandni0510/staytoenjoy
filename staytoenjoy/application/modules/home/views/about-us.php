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
              <form class="contactForm" method="post" action="<?php echo base_url()?>home/about_us" enctype='multipart/form-data'>                
                <div class="contactForm">
                  <h6 class="font-weight-bold text-dark my-3">About Us
                    <label class="position-relative mb-0 tooltip-hover float-right mb--7">
                      <a href="javascript:void(0)" class="btn btn-primary bg-theme py-1 font-14 text-white" data-toggle="modal" data-target="#bio-edit">
                        Public <i class="fa fa-globe pl-2"></i>
                      </a>
                      <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Who shall see this?</div>
                    </label>
                  </h6>
                  <hr class="mt-4">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label font-14">Tell something about you</label>
                        <div class="col-sm-10">
                          <div class="form-group mb-0">
                            <textarea class="form-control font-14" placeholder="Type" rows="4" name="user_about" value="<?php echo isset($about->user_about) ? $about->user_about : " " ;?>"><?php echo isset($about->user_about) ? $about->user_about : " " ;?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                       <label class="col-sm-2 col-form-label font-14">My life motto</label>
                        <div class="col-sm-10">
                          <div class="form-group mb-0">
                            <textarea class="form-control font-14" placeholder="Type" name="user_motto" rows="4" value="<?php echo isset($about->user_motto) ? $about->user_motto : " " ;?>"><?php echo isset($about->user_motto) ? $about->user_motto : " " ;?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                       <label class="col-sm-2 col-form-label font-14">My Hobbied</label>
                        <div class="col-sm-10">
                          <div class="form-group mb-0">
                            <textarea class="form-control font-14" placeholder="Type" name="user_hobbies" value="<?php echo isset($about->user_hobbies) ? $about->user_hobbies : " " ;?>" rows="4"><?php echo isset($about->user_hobbies) ? $about->user_hobbies : " " ;?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label font-14 pr-0">Define Hobbies</label>
                        <div class="col-sm-10 mb-3">
                          <input type="text" class="form-control font-14" placeholder="Type" name="user_define_hobbies" value="<?php echo isset($about->user_define_hobbies) ? $about->user_define_hobbies : " " ;?>">
                          <div class="border px-3 py-5 mt-2" style="border-style: dashed!important; border-width: 2px!important;">
                            <div class="font-14 text-center">
                            <?php if(isset($about->user_hobbies_upload)) {?>
                            <img src="<?php echo base_url();?>img/<?php echo $about->user_hobbies_upload; ?>" height="100" width="100">
                            <?php }else{?>
                                          <img src="<?php echo base_url()?>img/upload.svg" class="w-12">
                            <?php } ?>
                              <p class="text-theme-blue pt-4">Drag & Drop Files here and add Comapn Documents</p>
                              <p class="text-dark">Or</p>
                            </div>
                            <div class="custom-file px-3 text-center">
                              <label class="position-relative w-50 bg-primary text-white py-2 rounded-20">
                
                                <input type="file" class="custom-file-input d-none" id="customFile" name="user_hobbies_upload">
                                <div>Browse form your Computer</div>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label font-14">Favorite Books</label>
                        <div class="col-sm-10">
                          <div class="form-group mb-0">
                            <textarea class="form-control font-14" placeholder="Type" name="user_fav_book"  value="<?php echo isset($about->user_fav_book) ? $about->user_fav_book : " " ;?>" rows="4"><?php echo isset($about->user_fav_book) ? $about->user_fav_book : " " ;?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2 mb-3">
                          <div class="border px-3 py-5 mt-2" style="border-style: dashed!important; border-width: 2px!important;">
                            <div class="font-14 text-center">
                            <?php if(isset($about->user_book_upload)) {?>
                            <img src="<?php echo base_url();?>img/<?php echo $about->user_book_upload; ?>" height="100" width="100">
                            <?php } else{?>
                              <img src="<?php echo base_url()?>img/upload.svg" class="w-12">
                            <?php } ?>
                              <p class="text-theme-blue pt-4">Drag & Drop Files here and add Comapn Documents</p>
                              <p class="text-dark">Or</p>
                            </div>
                            <div class="custom-file px-3 text-center">
                              <label class="position-relative w-50 bg-primary text-white py-2 rounded-20">
                
                                <input type="file" class="custom-file-input d-none" id="customFile" name="user_book_upload">
                                <div>Browse form your Computer</div>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label font-14">Favorite Writes</label>
                        <div class="col-sm-10">
                          <div class="form-group mb-0">
                            <textarea class="form-control font-14" placeholder="Type" rows="4" name="user_fav_writes" value="<?php echo isset($about->user_fav_writes) ? $about->user_fav_writes : " " ;?>"><?php echo isset($about->user_fav_writes) ? $about->user_fav_writes : " " ;?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2 mb-3">
                          <div class="border px-3 py-5 mt-2" style="border-style: dashed!important; border-width: 2px!important;">
                            <div class="font-14 text-center">
                              <?php if(isset($about->user_writes_upload)) {?>
                              <img src="<?php echo base_url();?>img/<?php echo $about->user_writes_upload; ?>" height="100" width="100">
                              <?php }else{?>
                              <img src="<?php echo base_url()?>img/upload.svg" class="w-12">
                              <?php } ?>
                              <p class="text-theme-blue pt-4">Drag & Drop Files here and add Comapn Documents</p>
                              <p class="text-dark">Or</p>
                            </div>
                            <div class="custom-file px-3 text-center">
                              <label class="position-relative w-50 bg-primary text-white py-2 rounded-20">
                
                                <input type="file" class="custom-file-input d-none" id="customFile" name="user_writes_upload">
                                <div>Browse form your Computer</div>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label font-14">Your Favorite Club</label>
                        <div class="col-sm-10">
                          <div class="form-group mb-0">
                            <textarea name="user_fav_club" class="form-control font-14" value="<?php echo isset($about->user_fav_club) ? $about->user_fav_club : " " ;?>"  placeholder="Type" rows="4"><?php echo isset($about->user_fav_club) ? $about->user_fav_club : " " ;?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2 mb-3">
                          <div class="border px-3 py-5 mt-2" style="border-style: dashed!important; border-width: 2px!important;">
                            <div class="font-14 text-center">
                              <?php if(isset($about->user_club_upload)) {?>
                              <img src="<?php echo base_url();?>img/<?php echo $about->user_club_upload; ?>" height="100" width="100">
                              <?php }else{?>
                              <img src="<?php echo base_url()?>img/upload.svg" class="w-12">
                              <?php } ?>
                              <p class="text-theme-blue pt-4">Drag & Drop Files here and add Comapn Documents</p>
                              <p class="text-dark">Or</p>
                            </div>
                            <div class="custom-file px-3 text-center">
                              <label class="position-relative w-50 bg-primary text-white py-2 rounded-20">
                
                                <input type="file" class="custom-file-input d-none" id="customFile" name="user_club_upload">
                                <div>Browse form your Computer</div>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label font-14">Other Interests</label>
                        <div class="col-sm-10">
                          <div class="form-group mb-0">
                            <textarea class="form-control font-14" placeholder="Type" name="user_other_interest" value="<?php echo isset($about->user_other_interest) ? $about->user_other_interest : " " ;?>" rows="4"><?php echo isset($about->user_other_interest) ? $about->user_other_interest : " " ;?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2 mb-3">
                          <div class="border px-3 py-5 mt-2" style="border-style: dashed!important; border-width: 2px!important;">
                            <div class="font-14 text-center">
                            <?php if(isset($about->user_othert_upload)) {?>
                              <img src="<?php echo base_url();?>img/<?php echo $about->user_othert_upload; ?>" height="100" width="100">
                              <?php }else{?>
                                <img src="<?php echo base_url()?>img/upload.svg" class="w-12">
                              <?php } ?>
                                 <p class="text-theme-blue pt-4">Drag & Drop Files here and add Comapn Documents</p>
                              <p class="text-dark">Or</p>
                            </div>
                            <div class="custom-file px-3 text-center">
                              <label class="position-relative w-50 bg-primary text-white py-2 rounded-20">
                
                                <input type="file" class="custom-file-input d-none" id="customFile" name="user_othert_upload">
                                <div>Browse form your Computer</div>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <hr class="my-4">
                      <div class="row">
                        <div class="col-sm-6">
                          <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">
                        </div>
                        <div class="col-sm-6">
                          <input type="submit" class="btn btn-primary bg-primary float-right font-14" name="about" value="Save">
                        </div>
                      </div>
                    </div>
               </form>
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
