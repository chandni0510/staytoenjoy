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

        <section class="container-fluid securityNotification" id="article">
          <div class="row">
            <div class="container">
              <div class="article_section">
                <div class="article_content">
                  <div class="article_tabs_part">
                    <div class="text-white bg-primary mb-4 p-2 px-3 d-inline-block border-r-5 font-weight-bold">ABOUT</div>
                    <div class="security_notification_header">
                      <h2 class="title">Security notifications</h2>
                      <p class="description">If StayToEnjoy needs to tell you about changes to your account, or if we find suspicious activity. we`ll let you know Depending on the info we have from you, we`ll get in touch by text, by emailing your main and recovery email addresses, or by doing both</p>
                    </div>

                    <div >
                      <div class="article_tabs_box">
                        <div class="article_tabs_box_heading">
                          <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <h2 class="title">Alerts for new sign-ins</h2>
                            <span class="fa fa-angle-down art_icon"></span>
                          </div>
                        </div>

                        <div class="aricle_tabs_box_content">
                          <ul>
                            <li>
                              <a href="<?php echo base_url('home/helpcenter2')?>">
                                General security information
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                2-Step Verification
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="article_tabs_box">
                        <div class="article_tabs_box_heading">
                          <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <h2 class="title">Common problems with alerts</h2>
                            <span class="fa fa-angle-down art_icon"></span>
                          </div>
                        </div>

                        <div class="aricle_tabs_box_content">
                          <ul>
                            <li>
                              <a href="<?php echo base_url('home/helpcenter2')?>">
                                General security information
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                2-Step Verification
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>  

                    <div class="helpful_part">
                      <div class="d-flex flex-wrap align-items-center justify-content-end">
                          <p class="helpful_text">Was this article helpful?</p>
                          <ul class="d-flex flex-wrap align-items-center">
                           <li>
                          <a href="#">Yes</a>
                           </li>
                           <li>
                          <a href="#">No</a>
                           </li>
                          </ul>
                      </div>    
                    </div>
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
