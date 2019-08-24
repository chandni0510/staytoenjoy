<div class="container-fluid bg-white z-index-9999 position-fixed" style="box-shadow: 0px 2px 6px #ccc;"> 
  <ul class="pl-0 mb-0 font-14 pt-3 pb-2 text-center position-relative">
  	<div class="d-flex align-items-center text-dark px-2 v-hidden header-timeline-profile">
      <div class="position-relative">

              <?php if(isset($users) && !empty($users->user_img)){
                       $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
                     }else{
                        $user_img = base_url().'/img/timeline-profile.png';
                     }
                  ?>
	      <img src="<?php echo $user_img ;?>" class="float-left mr-2 w-h-32px profileImage" style="    border-radius: 50%;">
        <div class="online-circle green position-absolute rounded-circle b-0 r-10">
          <div class="rounded-circle border border-white" style="width: 8px; height: 8px; background:#138e1d;"></div>
        </div>
      </div>
      <div class="float-left pr-2 pt-1">
	  <?php echo isset($session['session'])? $session['session']->first_name :"Peter Mitchel"; ?>
        <img src="<?php echo base_url('img/verified-check.svg')?>" class="w-h-22px">
      </div>
      <div class="mt-1 w-1-box"></div>
      <div class="float-left pl-3">
        Tour Guide
      </div>
  	</div>

    <li class="d-inline-block"><a href="avascript:void(0)" class="text-dark px-2 mx-2 pl-0 pb-2 border-bottom-3-hover">Home</a></li>
    <li class="d-inline-block"><a href="<?php echo base_url('home/newsfeed') ?>" class="text-dark px-2 mx-2 pb-2 border-bottom-3-hover active blue">Newsfeed</a></li>
    <li class="d-inline-block"><a href="javascript:void(0)" class="text-dark px-2 mx-2 pb-2 border-bottom-3-hover">Events</a></li>
    <li class="d-inline-block"><a href="javascript:void(0)" class="text-dark px-2 mx-2 pb-2 border-bottom-3-hover">Storyboard</a></li>
    <li class="d-inline-block"><a href="javascript:void(0)" class="text-dark px-2 mx-2 pb-2 border-bottom-3-hover">Travelbook</a></li>
     <li class="d-inline-block"><a href="javascript:void(0)" class="text-dark px-2 mx-2 pb-2 border-bottom-3-hover">Explore</a></li>

  </ul>
</div>
