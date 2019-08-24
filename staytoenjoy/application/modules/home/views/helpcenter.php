<?php include 'include/header.php';?>

<main role="main" class="bg-white">
    
      <!-- Content -->
    
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

              <div class="help_banner_img">
                <figure>
                  <img src="<?php echo base_url('img/helpBanner.svg');?>" alt="">
                </figure>
                <div class="help_logo">
                  <img src="<?php echo base_url('img/logo.svg');?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container-fluid" id="popularTopics">
      <div class="row">
        <div class="container">
          <div class="popular_topics_section">
            <div class="popular_topics_content">
              <div class="popular_box_part">
                <div class="d-flex flex-wrap justify-content-between">
                  <div class="popular_box">
                    <a href="<?php echo  base_url('home/helpcenter1')?>">
                      <div class="popular_box_img">
                        <figure>
                          <img src="<?php echo base_url('img/service.svg');?>" alt="">
                        </figure>
                      </div>
                      <div class="popular_box_heading">
                        <h2 class="title">Our Service</h2>
                      </div>
                    </a>  
                  </div>
                  <div class="popular_box">
                    <a href="#">
                      <div class="popular_box_img">
                        <figure>
                          <img src="<?php echo base_url('img/datapro.svg');?>" alt="">
                        </figure>
                      </div>
                      <div class="popular_box_heading">
                        <h2 class="title">Data Protection</h2>
                      </div>
                    </a>  
                  </div>
                  <div class="popular_box">
                    <a href="#">
                      <div class="popular_box_img">
                        <figure>
                          <img src="<?php echo base_url('img/ads.svg');?>" alt="">
                        </figure>
                      </div>
                      <div class="popular_box_heading">
                        <h2 class="title">Ads</h2>
                      </div>
                    </a>  
                  </div>
                  <div class="popular_box">
                    <a href="#">
                      <div class="popular_box_img">
                        <figure>
                          <img src="<?php echo base_url('img/calendar.svg');?>" alt="">
                        </figure>
                      </div>
                      <div class="popular_box_heading">
                        <h2 class="title">How to use your calendar</h2>
                      </div>
                    </a>  
                  </div>
                  <div class="popular_box">
                    <a href="#">
                      <div class="popular_box_img">
                        <figure>
                          <img src="<?php echo base_url('img/datapro.svg');?>" alt="">
                        </figure>
                      </div>
                      <div class="popular_box_heading">
                        <h2 class="title">Data Protection</h2>
                      </div>
                    </a>  
                  </div>
                  <div class="popular_box">
                    <a href="#">
                      <div class="popular_box_img">
                        <figure>
                          <img src="<?php echo base_url('img/ads.svg');?>" alt="">
                        </figure>
                      </div>
                      <div class="popular_box_heading">
                        <h2 class="title">Ads</h2>
                      </div>
                    </a>  
                  </div>
                  <div class="popular_box">
                    <a href="#">
                      <div class="popular_box_img">
                        <figure>
                          <img src="<?php echo base_url('img/calendar.svg');?>" alt="">
                        </figure>
                      </div>
                      <div class="popular_box_heading">
                        <h2 class="title">How to use your calendar</h2>
                      </div>
                    </a>  
                  </div>
                  <div class="popular_box">
                    <a href="#">
                      <div class="popular_box_img">
                        <figure>
                          <img src="<?php echo base_url('img/datapro.svg');?>" alt="">
                        </figure>
                      </div>
                      <div class="popular_box_heading">
                        <h2 class="title">Data Protection</h2>
                      </div>
                    </a>  
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
                            <img src="<?php echo base_url('img/comuti.svg');?>" alt="">
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
                            <img src="<?php echo base_url('img/helpc.svg');?>" alt="">
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
                            <img src="<?php echo base_url('img/business.svg');?>" alt="">
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
    <!-- / Content -->
</main>

<?php include 'include/footer.php';?>

