<div class="border p-3 mb-4 profile-setting bg-white rounded-10">
  <div class="row">
    <div class="col pr-2">
      <div class="position-relative mx-w-100 m-auto">
        <?php if(isset($users) && !empty($users->user_img)){
                      $padding = "";
                       $user_img =   base_url().'/uplaods/profile/'.$users->user_img; 
                       $padding = "p-0";
                     }else{
                        $user_img = base_url().'/img/profile-img.svg';
                         $padding = "p-3";
                     }
                  ?>
        <div class="m-auto profile-img <?php echo $padding; ?>" id="profile-container">
          <img src="<?php echo $user_img; ?>" class="rounded-0 w-100 h-100 profileImage" id="profileImage">
          <div class="position-absolute bg-theme icon">
            <img src="<?php echo base_url('img/pencil-icon.svg')?>" class="w-h-15">
          </div>
          
          <div class="position-absolute camera-icon d-flex justify-content-center align-items-center t-0 r-0 b-0" style="background: #0000008f; border-radius: 50%; width: 73px; height: 73px; left: 5px;">
            <input id="imageUpload" type="file" name="profile_photo" class="position-absolute w-100 t-0 l-0 b-0 opacity-0" capture>

            <i class="fa fa-camera text-white"></i>
          </div>
        </div>
      </div>
      <h6 class="text-theme-blue font-weight-normal text-center mt-2 font-12">Owner</h6>
       <?php $session = $session['session'];?>
  
      <h5 class="text-dark font-weight-normal text-center mt-2 font-12"><?php echo isset($session->first_name)? $session->first_name." ".$session->last_name : " " ;?></h5>
    </div>
    <div class="col px-2 box-hide">
      <div class="position-relative not-hover mx-w-100 m-auto">
        <div class="m-auto profile-img p-3 bg-white">
          <img src="<?php echo base_url('img/seo-upload.svg')?>" class="rounded-0" style="width: 52px; height: 40px;">
          <div class="position-absolute bg-theme icon">
            <img src="<?php echo base_url('img/pencil-icon.svg')?>" class="w-h-15">
          </div>
        </div>
      </div>
      <h6 class="text-theme-blue font-weight-normal text-center mt-2 font-12">CEO</h6>
      <h5 class="text-dark font-weight-normal text-center mt-2 font-12">Charlie Balley</h5>
    </div>
    <div class="col pl-2 box-hide">
      <div class="position-relative mx-w-100 text-center py-2 m-auto">
        <img src="<?php echo base_url('img/company-logo.svg')?>" class="rounded-0">
      </div>
      <h6 class="text-theme-blue font-weight-normal text-center mt-2 font-12">Company Logo</h6>
      <h5 class="text-dark font-weight-normal text-center mt-2 font-12">StayToEnjoy</h5>
    </div>
  </div>

  
  <hr class="mb-1">
  <div class="w-100 text-center">
    <div class="progress w-75 d-inline-block" style="height: 6px;">
      <div class="progress-bar bg-danger w-75 text-danger" style="display: list-item;"></div>
    </div>
    <span class="font-13">75%</span>
  </div>
  
  <div class="colaps-right-box-show">
    <hr class="my-2">
    <ul class="nav nav-tabs text-center">
      <li class="nav-item w-30">
        <a class="nav-link active px-0 pb-5 mb-0 h-50-px" data-toggle="tab" href="#views">
          <h6 class="font-12 text-theme-blue">Advertising</h6>
          <h5 class="text-theme-blue font-weight-normal">445</h5>
        </a>
      </li>
      <li class="nav-item w-40">
        <a class="nav-link px-0 pb-5 mb-0 h-50-px" data-toggle="tab" href="#booking-reqst">
          <h6 class="font-12 text-theme-blue">Pictures</h6>
          <h5 class="text-dark font-weight-normal">387</h5>
        </a>
      </li>
      <li class="nav-item w-30">
        <a class="nav-link px-0 pb-5 mb-0 h-50-px" data-toggle="tab" href="#bookings">
          <h6 class="font-12 text-theme-blue">Views</h6>
          <h5 class="text-dark font-weight-normal">228</h5>
        </a>
      </li>
    </ul>
    <hr class="mt-0">
    <div class="tab-content">
      <div class="tab-pane container active px-0" id="views">
        <div class="row">
          <div class="col pr-1">
            <div class="border p-2 h-100 text-center">
              <h6 class="font-12 text-left">Start and make Advertising on StayToEnjoy</h6>
              <img src="<?php echo base_url('img/advertising.svg')?>" class="w-100">
              <input type="button" class="btn btn-primary w-75 font-14 bg-primary py-1 my-2" value="Create">
            </div>
          </div>
          <div class="col pl-1">
            <div class="border p-2 h-100 text-center">
              <h6 class="font-12 text-left">Wann wurde das Geschaft eroffnet? <br> kunden mitteilen. wie lange das Geschaft schon besteht</h6>
              <h6 class="font-12 text-left">kunden mitteilen. wie lange das Geschaft schon besteht</h6>
              <input type="button" class="btn btn-primary w-75 font-14 bg-primary py-1 my-2" value="Create">
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane container fade px-0" id="booking-reqst">
        <div class="row">
          <div class="col-sm-6 pr-1">
            <div class="border p-2 h-100 text-center">
              <h6 class="font-12 text-left">Start and make Advertising on StayToEnjoy</h6>
              <img src="<?php echo base_url('img/advertising.svg')?>" class="w-100">
              <input type="button" class="btn btn-primary w-75 font-14 bg-primary py-1 my-2" value="Create">
            </div>
          </div>
          <div class="col-sm-6 pl-1">
            <div class="border p-2 h-100 text-center">
              <h6 class="font-12 text-left">Wann wurde das Geschaft eroffnet? <br> kunden mitteilen. wie lange das Geschaft schon besteht</h6>
              <h6 class="font-12 text-left">kunden mitteilen. wie lange das Geschaft schon besteht</h6>
              <input type="button" class="btn btn-primary w-75 font-14 bg-primary py-1 my-2" value="Create">
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane container fade px-0" id="bookings">
        <div class="row">
          <div class="col-sm-6 pr-1">
            <div class="border p-2 h-100 text-center">
              <h6 class="font-12 text-left">Start and make Advertising on StayToEnjoy</h6>
              <img src="<?php echo base_url('img/advertising.svg')?>" class="w-100">
              <input type="button" class="btn btn-primary w-75 font-14 bg-primary py-1 my-2" value="Create">
            </div>
          </div>
          <div class="col-sm-6 pl-1">
            <div class="border p-2 h-100 text-center">
              <h6 class="font-12 text-left">Wann wurde das Geschaft eroffnet? <br> kunden mitteilen. wie lange das Geschaft schon besteht</h6>
              <h6 class="font-12 text-left">kunden mitteilen. wie lange das Geschaft schon besteht</h6>
              <input type="button" class="btn btn-primary w-75 font-14 bg-primary py-1 my-2" value="Create">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- right-box-scroll -->