<?php include 'include/header.php';?>

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

    <?php include 'include/before-login-header.php';?>

    <main role="main">
    
      <div class="d-flex flex-wrap" id="tabSection">
        <div class="tabs_left_part">
          <div class="tabs_left_form_mobile">
              <a href="javascript:;">
               <span class="fa fa-bars"></span>
              </a>  
          </div>
          <div class="tabs_left_content">
            <ul>
              <li>
                <a href="javascript:void(0)" class="d-flex flex-wrap align-items-center active">
                  <figure>
                    <img src="img/profile-setting-tab.svg" alt="">
                  </figure>
                  <p>Help Center</p>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="d-flex flex-wrap align-items-center">
                  <figure>
                    <img src="img/account-setting-tab.svg" alt="">
                  </figure>
                  <p>Business Pages</p>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="d-flex flex-wrap align-items-center">
                  <figure>
                    <img src="img/company-setting-tab.svg" alt="">
                  </figure>
                  <p>Community</p>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="d-flex flex-wrap align-items-center">
                  <figure>
                    <img src="img/payment-setting-tab.svg" alt="">
                  </figure>
                  <p>Developer</p>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="d-flex flex-wrap align-items-center">
                  <figure>
                    <img src="img/vertification-tab.svg" alt="">
                  </figure>
                  <p>Account Security</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="tabs_right_part bg-white">
          <section class="container-fluid" id="helpBanner">
            <div class="row">
              <div class="container">
                <div class="help_banner_section">
                  <div class="help_banner_content">
                    <div class="help_form_part">
                      <div class="help_form_heading">
                        <h2 class="title"><span>Hello Jens,</span> how can we help?</h2>
                      </div>
                      <div class="help_form">
                        <form method="post">
                          <input type="text" name="help" class="form-control" placeholder="Describe your issue">
                          <i class="fa fa-search"></i>
                        </form>
                      </div>
                    </div>

                    <div class="help_banner_img">
                      <figure>
                        <img src="img/helpBanner.svg" alt="">
                      </figure>
                      <div class="help_logo">
                        <img src="img/logo.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="container-fluid" id="generalSecurity">
            <div class="row">
              <div class="container">
                <div class="general_security_section">
                  <div class="general_security_content">
                    <div class="general_security_heading">
                      <h2 class="title">General security information</h2>
                    </div>
                    <div class="general_security_bottom_part">
                      <ul>
                        <li>
                          <a href="#">Security notifications</a>
                        </li>
                        <li>
                          <a href="#">Policies by product</a>
                        </li>
                        <li>
                          <a href="#">Make your account more secure</a>
                        </li>
                        <li>
                          <a href="#">Prevent phishing with Password Alert</a>
                        </li>
                        <li>
                          <a href="#">Protect accounts that have unsafe password</a>
                        </li>
                        <li>
                          <a href="#">Sign in on a device that`s not yours</a>
                        </li>
                        <li>
                          <a href="#">Find, lock or erase your lost phone or computer</a>
                        </li>
                        <li>
                          <a href="#">Get stronger account security with Advanced Protection </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <section  class="container-fluid" id="arrow">
            <div class="row">
              <div class="container">
                <div class="arrow_for_bottom">
                  <a href="#">
                    <span class="fa fa-angle-down"></span>
                  </a>
                </div>
              </div>
            </div>
          </section>

          <section  class="container-fluid" id="looking">
            <div class="row">
              <div class="container">
                <div class="looking_section">
                  <div class="looking_content">
                    <div class="looking_heading">
                      <h2 class="title">Looking For Something Else? </h2>
                      <p class="sub_title">Explore our Help Community or learn more about Facebook Ads</p>
                    </div>

                    <div class="looking_box_part">
                      <div class="d-flex flex-wrap justify-content-between">
                        <div class="looking_box">
                          <div class="looking_box_img">
                            <figure>
                              <img src="img/comuti.svg" alt="">
                            </figure>
                          </div>
                          <div class="looking_box_btn_part">
                            <a href="#" class="visit_btn">Visit our Help Commutiy</a>
                          </div>
                          <div class="looking_box_description">
                            <p class="description">Get help from other people on StayToEnjoy with similar questions</p>
                          </div>
                        </div>

                        <div class="looking_box">
                          <div class="looking_box_img">
                            <figure>
                              <img src="img/helpc.svg" alt="">
                            </figure>
                          </div>
                          <div class="looking_box_btn_part">
                            <a href="#" class="visit_btn">Visit Ads Help Center</a>
                          </div>
                          <div class="looking_box_description">
                            <p class="description">Learn more about promoting your business on StayToEnjoy</p>
                          </div>
                        </div>

                        <div class="looking_box">
                          <div class="looking_box_img">
                            <figure>
                              <img src="img/business-settings.svg" alt="">
                            </figure>
                          </div>
                          <div class="looking_box_btn_part">
                            <a href="#" class="visit_btn">Visit Business Help Center</a>
                          </div>
                          <div class="looking_box_description">
                            <p class="description">Learn more about promoting your business on StayToEnjoy</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>  
      </div>
      <!-- / Content -->

    </main>


    <footer class="p-0">

      <?php include 'include/footer-design.php';?>

    </footer> <!-- //footer -->

    <!-- Bootstrap JavaScript start -->


<script type="text/javascript">
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
    $(".search-icon.responsive").click(function(){
      $('.search-mob.responsive').toggleClass('d-none');
      $('.back-icon').toggleClass('d-none');
    });
</script>

<!-- text effect js -->
<script src="js/anime.min.js"></script>
<script type="text/javascript">
  // Wrap every letter in a span
$('.ml3').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: function(el, i) {
      return 150 * (i+1)
    }
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
<!-- text effect js end-->

<!-- carousel fun -->
<script type="text/javascript">
  
$('#carouselExample').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});

var width = $(window).width();
  if (width < 991) {
    $(".search-icon").click(function(){
      $(".search-mob").toggleClass('d-none');
    });
  }

  $(".feedback_input").change(function(){
    if ($(this).is(':checked')) {
      $(".feedback_btn_box").css('background-color','transparent');
      $(this).parent(".feedback_btn_box").css('background-color','#4285f4');
    }
  });


  $('#carouselExample').carousel({ 
                interval: 2000
        });


  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
</script>
  </body>
</html>
