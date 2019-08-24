<?php include 'include/header.php';?>
    <main role="main">
 
      <?php include 'include/white-feed-header.php';?>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      
      <section class="content-sec bg-light-blue pt-0 h-100vh position-relative">
        <div class="container-fluid"><!--  mini-container -->
          <!-- Example row of columns -->
          <div class="row">
            
            <div class="col-lg-8 col-md-4 offset-lg-2">
              <!--<h1 class="mb-4 font-weight-normal">Settings</h1>-->
            </div>
          </div>
        
          <div class="position-absolute t-60 l-0 w-20 pb-2 left-feed pb-2">
            <div class="bg-white rounded-10 border pb-3">
              <ul class="nav font-14 pt-2 bg-white px-0 d-flex justify-content-start z-index-9999 rounded-t-r-10 border-bottom">
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-3 text-dark border-bottom-3-hover active" data-toggle="pill" href="#main">Main</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-3 text-dark border-bottom-3-hover" data-toggle="pill" href="#stories">Stories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-3 text-dark border-bottom-3-hover" data-toggle="pill" href="#groups">Groups</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pb-2 px-0 mx-3 text-dark border-bottom-3-hover" data-toggle="pill" href="#explore">Explore</a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content bg-white">
                <div id="main" class="tab-pane active">
                  <?php include 'include/left-main.php';?>
                </div>
                <div id="stories" class="tab-pane">
                  <?php include 'include/left-stories.php';?>
                </div>
                <div id="groups" class="tab-pane">
                  <?php include 'include/left-groups.php';?>
                </div>
                <div id="explore" class="tab-pane">
                  <?php include 'include/left-explore.php';?>
                </div>
              </div>
            </div>
          </div>
          

          <div class="position-absolute t-60 w-35 offset-w-20 center-inbox-hide px-2">
            <?php include 'include/newsfeed-content.php';?>
          </div>

          <div class="offset-w-55 w-23 t-60 position-absolute px-3">
            <div class="bg-white border-bottom border-r-10 border mb-4">
              <div class="d-flex justify-content-start font-14 border-bottom p-3">
                <a href="javascript:void()" class="border-right pr-4">Featured Advertisment</a>
                <a href="javascript:void()" class="pl-4">Create Ad</a>
              </div>
              <div class="d-flex font-14 py-2 px-3 my-0" href="javascript:void(0)">
                <div class="notif-box-one">
                  <div class="profile-pic w-h-35px">
                    <img src="img/profile-img.jpg" class="w-100">
                  </div>
                </div>
                <div class="notif-box-two pl-2 w-100">
                  <div class="w-100">
                    <p class="text-dark border-right mb-0 d-inline-block font-weight-bold pr-3">Mary Good</p>
                    <span class="text-secondary font-12 pl-2">Tour Guide</span>
                  </div>
                  <div class="w-100 mt--5px">
                    <span class="text-secondary font-12 w-100">Sponsored
                      <i class="fa fa-globe"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="bg-light-blue mx-3 height160"></div>
              <div class="d-flex justify-content-around font-14 border-bottom p-3">
                <a href="javascript:void(0)">
                  <span class="bg-secondary w-h-35px rounded-circle p-1">
                    <img src="img/like-icon.svg" class="w-h-15 ml-1 mb-1">
                  </span>
                  <span class="font-12 pl-1">22</span>
                </a>
                <a href="javascript:void(0)">
                  <span class="bg-secondary w-h-35px rounded-circle p-1">
                    <img src="img/share-img-icon.svg" class="w-h-18">
                  </span>
                  <span class="font-12 pl-1">166</span>
                </a>
                <a href="javascript:void(0)">
                  <span class="bg-secondary w-h-35px rounded-circle p-1">
                    <img src="img/thunder-icon.svg" class="w-h-18">
                  </span>
                  <span class="font-12 pl-1">Follow</span>
                </a>
              </div>
              <div class="d-flex justify-content-around font-14 p-3">
                <button class="btn btn-primary bg-theme border-0 px-3 font-14">View more</button>
              </div>
            </div>

            <div class="bg-white border-bottom border-r-10 border mb-4">
              <div class="d-flex justify-content-start font-14 border-bottom p-3">
                <p>Suggested Pages</p>
                <a href="javascript:void(0)" class="pl-3 ml-auto">See All</a>
              </div>
              <p class="py-2 px-3 border-bottom"><a href="javascript:void(0)">Sean</a> Likes this.</p>
              <div class="d-flex font-14 py-2 px-3 my-0" href="javascript:void(0)">
                <div class="notif-box-one">
                  <div class="profile-pic w-h-35px">
                    <img src="img/profile-img.jpg" class="w-100">
                  </div>
                </div>
                <div class="notif-box-two pl-2 w-100">
                  <div class="w-100">
                    <p class="text-theme border-right mb-0 d-inline-block pr-3">200 Tage mit Gott/ 200 days</p>
                  </div>
                  <div class="w-100 mt--5px">
                    <span class="font-13 w-100">Book</span>
                  </div>
                </div>
              </div>
              <div class="bg-light-blue mx-3 height160"></div>
              <div class="text-dark font-14 p-3 border-top mt-3 text-center">
                <a href="javascript:void(0)">
                  <span class="bg-secondary w-h-35px rounded-circle p-1">
                    <img src="img/like-icon.svg" class="w-h-15 ml-1 mb-1">
                  </span>
                  <span class="font-12 pl-1">Like Page</span>
                </a>
              </div>
            </div>
          </div>

          <div class="position-fixed t-120 r-0 bg-trans-white p-0 w-20 d-flex">
            <?php include 'include/feed-right-chatbox.php';?>
          </div>

        </div> <!-- /container -->
      </section> <!-- //content section end here  -->

    </main> <!-- /main -->

    <div class="modal fade" id="posting-popup" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-md d-flex align-items-center justify-content-center h-100 my-0" role="document" style="max-width: 550px!important;">
        <div class="modal-content border-r-10">
          <div class="modal-body p-0 text-center">
            <div class="profile-setting w-100">
              <div class="border-bottom d-flex p-3">
                <div class="profile-pic" style="width: 45px;">
                  <img src="img/profile-img.jpg" class="w-100 h-100">
                </div>
                <textarea class="w-100 border-0 focus-none px-3 pt-0 scroll-d-none font-20 message-box" placeholder="What you want share today, Peter?" id="count-length"></textarea>
                <div class="d-flex ml-auto">
                  <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px mr-3" href="javascript:void(0)" style="padding: 5px 8px;">
                    <img src="img/streaming-icon.svg" style="width: 22px; height: 22px;">
                  </a>
                  <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px" href="javascript:void(0)" style="padding: 5px 8px;">
                    <img src="img/add-picture-icon.svg" style="width: 22px; height: 22px;">
                  </a>
                </div>
              </div>
              <div class="d-flex border-bottom px-3 pt-3 pb-4">
                <label class="position-relative mb-0 tooltip-hover">
                  <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px mr-4" href="javascript:void(0)" style="padding: 4px 7px;">
                    <img src="img/streaming-icon.svg" style="width: 22px; height: 22px;">
                    <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Stream Live</div>
                  </a>
                </label>
                <label class="position-relative mb-0 tooltip-hover">
                  <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px mr-4" href="javascript:void(0)" id="upload" style="padding: 4.5px 7px;">
                    <img src="img/add-picture-icon.svg" style="width: 22px; height: 22px;">
                    <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Upload Photo</div>
                  </a>
                  <div class="position-absolute l-0 z-index-999 bg-white border border-r-10 w-300 d-none upload-show">
                    <p class="border-bottom py-1">Choose</p>
                    <div class="d-flex justify-content-around">
                      <div class="w-100 py-4 font-12">
                        <label>
                          <input type="file" class="d-none">
                          <img src="img/upload-img.svg" class="w-28px pb-2"><br>image
                        </label>
                      </div>
                      <div class="w-100 py-4 border-left border-right font-12">
                        <img src="img/add-picture-icon.svg" class="w-28px pb-2"><br>
                          Carousel image
                      </div>
                      <div class="w-100 py-4 font-12">
                        <img src="img/add-picture-icon.svg" class="w-28px pb-2"><br>Video
                      </div>
                    </div>
                  </div>

                </label>
                <label class="position-relative mb-0 tooltip-hover">
                  <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px mr-4" href="javascript:void(0)" style="padding: 5px 8px;">
                    <img src="img/add-friends-ico.svg" style="width: 18px; height: 18px;">
                  </a>
                  <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Add Friends</div>
                </label>
                <label class="position-relative mb-0 tooltip-hover">
                  <a class="nav-link position-relative menu-icon rounded-circle w-h-38px mr-4" href="javascript:void(0)" style="padding: 5px 8px;">
                    <img src="img/imoji.svg" style="width: 18px; height: 18px;">
                  </a>
                  <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Insert an imoji</div>
                </label>
              </div>
              <div class="d-flex border-bottom p-3">
                <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14 mr-5">Newsfeed
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14 mr-5">Your story
                  <input type="checkbox">
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
                        <div class="d-flex justify-content-start align-items-center px-4 py-2 hover-grey border-top bg-white">
                          <div class="w-30px text-center"><i class="fa fa-globe font-25"></i></div>
                          <div class="text-left px-3">
                            <p class="text-theme">Public</p>
                            <p class="text-dark font-14">Anyone on StayToEnjoy</p>
                          </div>
                          <div class="ml-auto">
                            <label class="switch position-relative d-inline-block my-2">
                              <input type="checkbox" checked="">
                                <span class="slider round position-absolute c-pointer"></span>
                            </label>
                          </div>
                        </div>
                        <div class="d-flex justify-content-start align-items-center px-4 py-2 hover-grey border-top bg-white">
                          <div class="w-28px text-center">
                            <img src="img/user-dark.svg" class="w-100">
                          </div>
                          <div class="text-left px-3">
                            <p class="text-theme">Friends</p>
                            <p class="text-dark font-14">Friends on StayToEnjoy</p>
                          </div>
                          <div class="ml-auto">
                            <label class="switch position-relative d-inline-block my-2">
                              <input type="checkbox" checked="">
                                <span class="slider round position-absolute c-pointer"></span>
                            </label>
                          </div>
                        </div>
                        <div class="d-flex justify-content-start align-items-center px-4 py-2 hover-grey border-top bg-white">
                          <div class="w-28px text-center">
                            <img src="img/friendship-popup-icon.svg" class="w-100">
                          </div>
                          <div class="text-left px-3">
                            <p class="text-theme">Close Friends</p>
                            <p class="text-dark font-14">Only close friends</p>
                          </div>
                          <div class="ml-auto">
                            <label class="switch position-relative d-inline-block my-2">
                              <input type="checkbox" checked="">
                                <span class="slider round position-absolute c-pointer"></span>
                            </label>
                          </div>
                        </div>
                        <div class="d-flex justify-content-start align-items-center px-4 py-2 hover-grey border-top bg-white">
                          <div class="w-35px text-center rounded-circle border hover-border-white overflow-hidden" style="margin-left: -3px;">
                              <img src="img/profile-img.jpg" class="w-100">
                          </div>
                          <div class="text-left pr-2" style="padding-left: 12px;">
                            <p class="text-theme">Only me</p>
                            <p class="text-dark font-14">Only for me</p>
                          </div>
                          <div class="ml-auto">
                            <label class="switch position-relative d-inline-block my-2">
                              <input type="checkbox" checked="">
                                <span class="slider round position-absolute c-pointer"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-end p-3">
                <button class="btn btn-primary bg-theme border-0 px-4 font-14">Share</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    

    <!-- Bootstrap JavaScript start -->


<script type="text/javascript">

$(".message-box").keydown(function(e) {
    while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
        $(this).height($(this).height()+1);
    };
});

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

$('.active-bg-text-theme').click(function(){
  $('.active-bg-text-theme').removeClass('active');
  $(this).addClass('active');
});
$('.active-pop-text-theme').click(function(){
  $('.active-pop-text-theme').removeClass('active');
  $(this).addClass('active');
  /*var handler = $('.active-pop-text-theme .active').attr('src','img/fitness.svg');
  console.log(handler);
  $('.active-pop-text-theme active').attr('src','second.jpg');*/
});


$("#count-length").keydown(function(){
  var count = $(this).val().length;
  console.log(count);
});

$('#upload').click(function(){
  $('.upload-show').toggleClass('d-none');
});


$('#upload').click(function(){
  $('.upload-show').toggleClass('d-none');
});

$('#map-click').click(function(){
  $('.map-view').toggleClass('d-none');
  $('.map-view').toggleClass('trans100 trans0');
  $('.hotel-top-box').toggleClass('d-none');
});

$('.welcome-skip-btn').click(function(){
  $(this).closest('.welcome-pic-popup').hide();
});

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



</script>

  </body>
</html>
