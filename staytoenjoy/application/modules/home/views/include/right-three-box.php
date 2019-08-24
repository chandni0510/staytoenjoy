<div class="p-3 mb-4 profile-setting bg-white rounded-10 border">
  <div class="position-relative m-auto mx-w-120">
     <?php if(isset($users) && !empty($users->user_img)){
                       $user_img =   base_url().'/uplaods/profile/'.$users->user_img; 
                       $padding = "p-0";
                     }else{
                        $user_img = base_url().'/img/profile-img.svg';
                         $padding = "p-3";
                     }
                  ?>
   <div class="m-auto profile-img <?php echo $padding ;?>" id="profile-container">  
          <img src="<?php echo $user_img; ?>" class="w-100 h-100 rounded-0 profileImage" id="profileImage">
         
      <div class="position-absolute bg-theme icon">
        <img src="<?php echo base_url('img/pencil-icon.svg');?>" class="w-h-15">
      </div>
      <div class="position-absolute camera-icon font-25 d-flex justify-content-center align-items-center t-0 r-0 b-0" style="background: #0000008f; border-radius: 50%; width: 100px; height: 96px; left: 10px;">
          <input id="imageUpload" type="file" name="profile_photo" class="position-absolute w-100 t-0 l-0 b-0 opacity-0 imageUpload" capture>

        <i class="fa fa-camera text-white"></i>
      </div>
    </div>
  </div>
  <?php $session = $session['session'];?>
  <h6 class="text-dark font-weight-normal text-center mt-2"><?php echo isset($session->first_name)? $session->first_name." ".$session->last_name : " " ;?></h6>
  <hr class="mb-1">
  <div class="w-100 text-center">
    <div class="progress w-75 d-inline-block" style="height: 6px;">
      <div class="progress-bar bg-danger w-75 text-danger" style="display: list-item;"></div>
    </div>
    <span class="font-13">75%</span>
  </div>

  <div class="colaps-right-box-show">
    <hr class="mt-2">
    <div class="row text-center">
      <div class="col px-0">
        <img src="<?php echo base_url('img/photo-videos-profile-icon.svg');?>">
        <h6 class="font-12 text-theme-blue mt-1">222 Friends</h6>
      </div>
      <div class="col px-0">
        <img src="<?php echo base_url('img/photo-videos-profile-icon.svg');?>">
        <h6 class="font-12 text-theme-blue mt-1">222 Photos & Videos</h6>
      </div>
      <div class="col px-0">
        <img src="<?php echo base_url('img/marketing-icon.svg');?>">
        <h6 class="font-12 text-theme-blue mt-1">Make Advertising</h6>
      </div>
    </div>
    
    <ul class="nav nav-tabs text-center mt-2">
      <li class="nav-item w-30">
        <a class="nav-link active px-0 pb-5 mb-0 h-50-px" data-toggle="tab" href="#views">
          <h6 class="font-12 text-theme-blue">Views</h6>
          <h5 class="text-theme-blue font-weight-normal">445</h5>
        </a>
      </li>
      <li class="nav-item w-40">
        <a class="nav-link px-0 pb-5 mb-0 h-50-px" data-toggle="tab" href="#booking-reqst">
          <h6 class="font-12 text-theme-blue">Booking Requests</h6>
          <h5 class="text-dark font-weight-normal">387</h5>
        </a>
      </li>
      <li class="nav-item w-30">
        <a class="nav-link px-0 pb-5 mb-0 h-50-px" data-toggle="tab" href="#bookings">
          <h6 class="font-12 text-theme-blue">Bookings</h6>
          <h5 class="text-dark font-weight-normal">228</h5>
        </a>
      </li>
    </ul>
    <hr class="mt-0">
    <div class="tab-content">
      <div class="tab-pane container active px-0" id="views">
        <h6 class="font-13 text-secondary">Aufrufe uber Suche
          <span class="float-right text-danger"> (-20%) </span>
          <span class="float-right text-secondary pr-1"> 286 </span>
        </h6>
        <hr>
        <h6 class="font-13 text-secondary">Aufrufe uber Maps
          <span class="float-right text-success"> (+20%) </span>
          <span class="float-right text-secondary pr-1"> 159 </span>
        </h6>
        <h6 class="font-12 mt-3 text-secondary">Leistung in den letzten 28 Tagen letzte dri Tage nicht mitgeza)</h6>
      </div>
      <div class="tab-pane container fade px-0" id="booking-reqst">
        <h6 class="font-13 text-secondary">Aufrufe uber Suche
          <span class="float-right text-danger"> (-20%) </span>
          <span class="float-right text-secondary pr-1"> 286 </span>
        </h6>
        <hr>
        <h6 class="font-13 text-secondary">Aufrufe uber Maps
          <span class="float-right text-success"> (+20%) </span>
          <span class="float-right text-secondary pr-1"> 159 </span>
        </h6>
        <h6 class="font-12 mt-3 text-secondary">Leistung in den letzten 28 Tagen letzte dri Tage nicht mitgeza)</h6>
      </div>
      <div class="tab-pane container fade px-0" id="bookings">
        <h6 class="font-13 text-secondary">Aufrufe uber Suche
          <span class="float-right text-danger"> (-20%) </span>
          <span class="float-right text-secondary pr-1"> 286 </span>
        </h6>
        <hr>
        <h6 class="font-13 text-secondary">Aufrufe uber Maps
          <span class="float-right text-success"> (+20%) </span>
          <span class="float-right text-secondary pr-1"> 159 </span>
        </h6>
        <h6 class="font-12 mt-3 text-secondary">Leistung in den letzten 28 Tagen letzte dri Tage nicht mitgeza)</h6>
      </div>
    </div>
  </div>
</div>

<div class="p-3 mb-4 profile-setting bg-white rounded-10 border position-relative">
  <button class="position-absolute bg-transparent border-0 c-pointer bx-2-vrify">
    <i class="fa fa-minus text-secondary font-12"></i>
  </button>
  <div class="d-flex justify-content-between align-items-center">
    <div class="pl-2">
      <h6 class="text-dark font-weight-normal text-center mt-2">Verifications</h6>
    </div>
    <div class="pl-2 pr-0">
      <img src="<?php echo base_url('img/verification-img.svg');?>" class="w-100 h-100 rounded-0">
    </div>
  </div>
  <div class="bx-hide">
    <hr class="clearfix">
    <h6 class="font-12 text-secondary">Your Email is verified
      <button class="bg-transparent border-0 float-right c-pointer">
        <i class="fa fa-ellipsis-h text-secondary"></i>
      </button>

      <label class="position-relative mb-0 tooltip-hover pr-5 float-right">
        <i class="fa fa-check-circle text-success font-16"></i>
        <div class="position-absolute tooltip-inner tool-l">Successfully checked</div>
      </label>
    </h6>
    <h6 class="font-12 text-secondary">Your Mobile Number is not verified
      <button class="bg-transparent border-0 float-right c-pointer">
        <i class="fa fa-ellipsis-h text-secondary"></i>
      </button>
      <label class="position-relative mb-0 tooltip-hover pr-5 float-right">
        <i class="fa fa-exclamation-circle text-warning font-16"></i>
        <div class="position-absolute tooltip-inner tool-l">Please verify you Mobile Number</div>
      </label>
      
    </h6>
    <h6 class="font-12 text-secondary">Id Verification pending
      <button class="bg-transparent border-0 float-right c-pointer">
        <i class="fa fa-ellipsis-h text-secondary"></i>
      </button>
      <label class="position-relative mb-0 tooltip-hover pr-5 float-right">
        <i class="fa fa-check-circle text-info font-16"></i>
        <div class="position-absolute tooltip-inner tool-l">We check your sent documents</div>
      </label>

    </h6>
    <h6 class="font-12 text-secondary">KYC Verification
      <a href="javascript:void(0)" class="pl-2">Learn more</a>
      <button class="bg-transparent border-0 float-right c-pointer">
        <i class="fa fa-ellipsis-h text-secondary"></i>
      </button>
      <label class="position-relative mb-0 tooltip-hover pr-5 float-right">
        <i class="fa fa-exclamation-circle text-dark font-16"></i>
        <div class="position-absolute tooltip-inner tool-l">Your verification is in progress</div>
      </label>
      <!-- <span class="float-right font-12">In progress...</span> -->
    </h6>
    <hr>
    <h6 class="text-center font-12 mb-0 text-secondary">Welcome to StayToEnjoy</h6>
  </div>
</div>

<div class="p-3 mb-4 profile-setting bg-white rounded-10 border position-relative">
  <button class="position-absolute bg-transparent border-0 c-pointer bx-2-vrify">
    <i class="fa fa-minus text-secondary font-12"></i>
  </button>
  <h6 class="font-13 mb-0 text-dark">We are checking your documents</h6>
  <hr>
  <div class="w-100">
      <img src="<?php echo base_url('img/doc-img.svg');?>" class="w-100 h-100 rounded-0">
  </div>

  <div class="bx-hide">
    <hr class="clearfix">
    <h6 class="font-12 mb-0 text-secondary">It should take us max. hours. If you have any question feel free to contact us.</h6>
  </div>
</div>