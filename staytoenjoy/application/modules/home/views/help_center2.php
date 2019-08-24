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

    <?php include 'include/help-center-header.php';?>

    <main role="main">
    
      

    <div class="d-flex flex-wrap" id="tabSection">

      <?php include 'include/help-center-left.php';?>

      <div class="tabs_right_part bg-white">
        <section class="container-fluid" id="helpBanner">
          <div class="row">
            <div class="container">
              <div class="help_banner_section">
                <div class="help_banner_content">
                  <div class="help_form_part">
                    <div class="help_form_heading">
                     <?php $session = $session['session'];?>

                      <h2 class="title"><span>Hello <?php echo isset($session->first_name)? $session->first_name : " " ;?>,</span> how can we help?</h2>
                    </div>
                    <div class="help_form">
                      <form method="post">
                        <input type="text" name="help" class="form-control" placeholder="Describe your issue">
                        <i class="fa fa-search"></i>
                      </form>
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
                        <a href="<?php echo base_url('home/helpcenter3')?>">Security notifications</a>
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
                            <img src="<?php echo  base_url('img/comuti.svg') ?>" alt="">
                          </figure>
                        </div>
                        <div class="looking_box_btn_part">
                          <a href="javascript:void(0)" class="visit_btn">Visit our Help Commutiy</a>
                        </div>
                        <div class="looking_box_description">
                          <p class="description">Get help from other people on StayToEnjoy with similar questions</p>
                        </div>
                      </div>

                      <div class="looking_box">
                        <div class="looking_box_img">
                          <figure>
                         <img src="<?php echo base_url('img/helpc.svg')?>" alt="">
                          </figure>
                        </div>
                        <div class="looking_box_btn_part">
                          <a href="javascript:void(0)" class="visit_btn">Visit Ads Help Center</a>
                        </div>
                        <div class="looking_box_description">
                          <p class="description">Learn more about promoting your business on StayToEnjoy</p>
                        </div>
                      </div>

                      <div class="looking_box">
                        <div class="looking_box_img">
                          <figure>
                              <img src="<?php echo base_url('img/business.svg')?>" alt="">
                          </figure>
                        </div>
                        <div class="looking_box_btn_part">
                          <a href="javascript:void(0)" class="visit_btn">Visit Business Help Center</a>
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

      <?php include 'include/footer.php';?>

    </footer> <!-- //footer -->

    <!-- Bootstrap JavaScript start -->


<script>
    var width = $(window).width();
    if (width < 991) {
      $(".search-icon").click(function(){
        $(".search-mob").toggleClass('d-none');
      });
    }

    $(".article_tabs_box .article_tabs_box_heading").click(function(){
      $(this).parent('.article_tabs_box').siblings('.article_tabs_box').removeClass('isOpen');
      $(this).parent('.article_tabs_box').toggleClass('isOpen');
      $(this).parent('.article_tabs_box').siblings('.article_tabs_box').find('.aricle_tabs_box_content').slideUp();
      $(this).parent('.article_tabs_box').find('.aricle_tabs_box_content').slideToggle();
    });

    $(".tabs_left_form_mobile a").click(function(){
      $(".tabs_left_content").slideToggle();
    });

    var wid = $(window).width();
    if (wid < 991) {
      $(document).click(function(e){
          var container = $(".tabs_left_form_mobile a");
          if(!container.is(e.target) && container.has(e.target).length === 0){
              $(".tabs_left_content").slideUp();
          }
      })
    }
  </script>
  </body>
</html>
