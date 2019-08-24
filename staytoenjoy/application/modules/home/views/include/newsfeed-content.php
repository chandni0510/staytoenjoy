<!-- good morning user - start -->
<div class="mb-4 profile-setting bg-white border rounded-10 welcome-pic-popup">
  <div class="bg-white border-bottom border-r-10 position-relative">
    <a href="javascript:void(0)" value="Skip" class="welcome-skip-btn hover-theme hover-white">
      <i class="fa fa-close"></i>
    </a>
    <img src="<?php echo base_url() ?>img/barcelona.jpg" class="w-100 object-fit-cover border-r-10" style="max-height: 60px;">
    <p class="position-absolute t-20 font-18 text-white pl-4 font-weight-bold">Good morning Jens</p>
  </div>
</div>
<!-- good morning user - end -->

<!-- upload content on newsfeed - start -->

<div class="mb-4 profile-setting bg-white border rounded-10">
  <div class="bg-white border-bottom d-flex flex-row p-3 border-r-10">
    <div class="profile-pic">
       <?php if(isset($session['session'])){

       $users = individualUserDetails($session['session']->user_id);
          if(!empty($users->user_img)){
             $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
          }else{
            $user_img =   base_url().'img/profile-img.jpg';
          } }?>

      <img src="<?php echo $user_img; ?>" class="w-100 h-100 profileImage">
     
    </div>
    <p class="text-secondary font-14 pl-3 pt-2" data-toggle="modal" data-target="#posting-popup">What you want share today, Peter?</p>
    <div class="d-flex ml-auto">
      <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-38px mr-3" href="javascript:void(0)" style="padding: 5px 8px;">
        <img src="<?php echo base_url() ?>img/streaming-icon.svg" class="w-h-22px">
      </a>
      <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-38px" href="javascript:void(0)" style="padding: 5px 8px;">
        <img src="<?php echo base_url() ?>img/add-picture-icon.svg" class="w-h-22px">
      </a>
    </div>
  </div>
</div>

<!-- upload content on newsfeed - end -->
<div class="post_divdata">
<?php

if(!empty($newsfeeds)){ 
$feed ="";

foreach($newsfeeds as $feed){ 

  ?>
<div class="mb-4 profile-setting bg-white rounded-10 border" feed="<?php echo $feed['id'] ?>">
  <div class="border-bottom d-flex align-items-center p-3 rounded-t-r-10">
    <div class="profile-pic mr-2">
       <?php $users = individualUserDetails($feed['user_id']);
              if($session['session']->user_id == $feed['user_id']){
                $profileImage = "profileImage";
              }else{
                $profileImage = "";
              }
              if(!empty($users->user_img)){
                 $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
              }else{
                $user_img =   base_url().'img/profile-img.jpg';
              } ?>

            <img src="<?php echo $user_img; ?>" class="w-100 h-100 <?php echo $profileImage;?>">
      
    </div>
    <div class="pr-4 font-14">
    
     <a href="javascript:void(0)" class="font-weight-bold">
         <?php $user_detail = individualUserDetails($feed['user_id']);
          echo $user_detail->first_name.' '.$user_detail->last_name; ?>
      </a>
      <img src="<?php echo base_url() ?>img/noun_dot.svg">
      <span class="text-secondary font-12"><?php echo date('F d',strtotime($feed['creation']));?> at <?php echo date('h:i A',strtotime($feed['creation']));?></span>
      <a href="javascript:void(0)"><i class="fa fa-user pl-2"></i></a>

      <!-- <a href="javascript:void(0)" class="font-weight-bold">Jens</a>
        <span class="text-dark font-weight-bold">to</span>
      <a href="javascript:void(0)" class="font-weight-bold">Peter</a>
      <img src="<?php //echo base_url() ?>img/noun_dot.svg">
      <span class="text-secondary font-12">February 22 at 3:36 PM</span>
      <a href="javascript:void(0)"><i class="fa fa-user pl-2"></i></a> -->
    </div>


    <div class="bg-white ml-auto position-relative float-right">
      <a href="javascript:void(0)" class="text-dark cstm-post-btn" cust-post-id="<?php echo $feed['id'] ?>">
        <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15 c-pointer">
      </a>
      <div class="cust-post-<?php echo $feed['id'] ?> position-absolute d-none t-20 l-0 z-index-999 mn-w-120">

        <div class="border px-3 bg-white border-r-5 py-2">
            <a class="px-3 font-14 hover-theme" href="javascript:void(0)">Save Post</a>
            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Edit Post</a>
            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Change Date</a>
            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Embed</a>
            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Turn off notifications for post</a>
            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Show in tab</a>
            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Hide from timeline</a>
            <a href="javascript:void(0)" class="dropdown-item px-3 font-14 hover-theme" data-toggle="modal" data-target="#report-to-user-popup">Report</a>
            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Delete</a>
            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Turn off Translations</a>

          </div>

        <!-- <ul class="border px-3 bg-white border-r-5 py-2">
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Save post</a></li>
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Turn off notifications for post</a></li>
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Show in tab</a></li>
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Hide from timeline</a></li>
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme" data-toggle="modal" data-target="#report-to-user-popup">Report</a></li>
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Delete</a></li>
        </ul> -->

      </div>
    </div>
  </div>

  <div class="bg-white border-bottom p-3">
        <?php $postImagescount = postImagescount($feed['user_id'],$feed['id']);
        $photos = postImages($feed['user_id'],$feed['id']);
        if($postImagescount == 1){
         if(!empty($photos)){
             foreach($photos as $image){
                ?>
          <div class="pb-3" data-toggle="modal" data-target="#timeline-img-popup<?php echo $feed['id'];?>">
                <img src="<?php echo base_url('uplaods/posts/'). $image['images'] ?>" class="w-100 border-r-10">
           </div>
    
          <?php } } } ?>
      <div class="modal fade pr-0 bg-dark" id="timeline-img-popup<?php echo $feed['id']; ?>" tabindex="-1">

        <div class="position-absolute t-0 r-0 l-0 b-0 bg-dark img-full-view d-none">

            <?php if($feed['photo']){?>
           <img src="<?php echo base_url('uplaods/posts/').$feed['photo'] ?>" class="w-100 border-r-10">
            <?php } ?>
          <a href="javascript:void(0)" class="text-white close py-3 px-4 r-0 t-0 position-absolute">
            <i class="fa fa-close font-20"></i>
          </a>
        </div>

        <div class="modal-dialog modal-dialog-centered model-lg" style="max-width: 88%;">
          <div class="modal-content border-radius-20 overflow-hidden" style="height: 560px;">
            <div class="modal-body p-0 text-center overflow-hidden">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0 py-2">
                    <div class="bg-white d-flex align-items-center py-0 px-3">
                      <div class="profile-pic mr-2">
                        <?php $users = individualUserDetails($feed['user_id']);
                              if($session['session']->user_id == $feed['user_id']){
                                  $profileImage = "profileImage";
                                }else{
                                  $profileImage = "";
                                }
                                if(!empty($users->user_img)){
                                   $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
                                }else{
                                  $user_img =   base_url().'img/profile-img.jpg';
                                } ?>

                            <img src="<?php echo $user_img; ?>" class="w-100 h-100 <?php echo $profileImage;?>">                     
                
                      </div>
                      <div class="pr-4 font-14">
                       
                        <a href="javascript:void(0)" class="font-weight-bold"> <?php $user_detail = individualUserDetails($feed['user_id']);
                         echo $user_detail->first_name.' '.$user_detail->last_name;
                         ?></a>
                        <img src="<?php echo base_url() ?>img/noun_dot.svg">
                        <span class="text-secondary font-12"><?php echo date('F d',strtotime($feed['creation']));?> at <?php echo date('h:i A',strtotime($feed['creation']));?></span>
                        <a href="javascript:void(0)"><i class="fa fa-user pl-2"></i></a>
                      </div>
                      <a href="javascript:void(0)" class="font-14 text-dark ml-auto"></a>
                      <div class="dropdown d-inline-block"><a href="javascript:void(0)" class="font-14 text-dark ml-auto">
                        </a><div class="dropdown-menu font-14"><a href="javascript:void(0)" class="font-14 text-dark ml-auto">
                          </a><a class="dropdown-item px-3" href="javascript:void(0)"></a>
                        </div>
                      </div>
                      <div class="dropdown d-inline-block hide-caret">
                          <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15 c-pointer dropdown-toggle" data-toggle="dropdown">
                          <div class="dropdown-menu">
                            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Save Post</a>
                            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Edit Post</a>
                            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Change Date</a>
                            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Embed</a>
                            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Turn off notifications for post</a>
                            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Show in tab</a>
                            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Hide from timeline</a>
                            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Delete</a>
                            <a class="dropdown-item px-3 font-14 hover-theme" href="javascript:void(0)">Turn off Translations</a>
                          </div>
                      </div>
                    </div>
                    <div class="bg-white pt-1 px-3">
                      <p class="font-14 text-dark text-left"><?php echo $feed['post_detail'];?></p>
                    </div>

                    <div id="demo" class="carousel mt-2 slide pl-3" style="padding-right: 35px;" data-ride="carousel">

                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                      </ul>
                      
                      <!-- The slideshow -->

                      <div class="carousel-inner border-r-10 mb-2" style="max-height: 400px;">

                     <?php 
                        $photos = postImages($feed['user_id'],$feed['id']);
                          if(!empty($photos)){
                            foreach($photos as $image){?>
                      <div class="carousel-item active">
                       <img src="<?php echo base_url('uplaods/posts/').$image['images']; ?>" class="w-100 h-100">
                      </div>
                      <?php } }  ?>
                      </div>
                      
                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>
                    
                    <div class="bg-white d-flex justify-content-start px-3 py-2 position-relative">
                      <a href="javascript:void(0)" class="like font-14 text-theme">
                        <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-26px">
                      </a>

                      <div class="likes position-absolute rounded-20 w-auto bg-white border justify-content-around shadow px-3 py-2 z-index-999 h-55px" style="top: -45px; left: 10px;">
                        <a href="javascript:void(0)" class="px-1">
                          <label class="position-relative mb-0 tooltip-hover float-right">
                            <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-35px">
                            <div class="w-auto position-absolute tooltip-inner tool-t">Like</div>
                          </label>
                        </a>
                        <a href="javascript:void(0)" class="px-1">
                          <label class="position-relative mb-0 tooltip-hover float-right">
                            <img src="<?php echo base_url() ?>img/love-icon.svg" class="w-h-35px">
                            <div class="w-auto position-absolute tooltip-inner tool-t">Love</div>
                          </label>
                        </a>
                        <a href="javascript:void(0)" class="px-1">
                          <label class="position-relative mb-0 tooltip-hover float-right">
                            <img src="<?php echo base_url() ?>img/haha-icon.svg" class="w-h-35px">
                            <div class="w-auto position-absolute tooltip-inner tool-t">HaHa</div>
                          </label>
                        </a>
                        <a href="javascript:void(0)" class="px-1">
                          <label class="position-relative mb-0 tooltip-hover float-right">
                            <img src="<?php echo base_url() ?>img/wow-icon.svg" class="w-h-35px">
                            <div class="w-auto position-absolute tooltip-inner tool-t">Wow</div>
                          </label>
                        </a>
                        <a href="javascript:void(0)" class="px-1">
                          <label class="position-relative mb-0 tooltip-hover float-right">
                            <img src="<?php echo base_url() ?>img/sad-icon.svg" class="w-h-35px">
                            <div class="w-auto position-absolute tooltip-inner tool-t">Sad</div>
                          </label>
                        </a>
                        <a href="javascript:void(0)" class="px-1">
                          <label class="w-auto position-relative mb-0 tooltip-hover float-right">
                            <img src="<?php echo base_url() ?>img/angry-icon.svg" class="w-h-35px">
                            <span class="w-auto position-absolute tooltip-inner tool-t">Angry</span>
                          </label>
                        </a>
                      </div>

                      <div class="px-2 bg-white shadow border rounded-20 ml-2 mr-2 d-none inner-likes">
                        <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-17">
                        <img src="<?php echo base_url() ?>img/love-icon.svg" class="w-h-17 ml--10px">
                        <span class="font-12">2</span>
                      </div>
                      <label class="position-relative mb-0 mt-1 tooltip-hover">
                        <a href="javascript:void(0)" class="mr-3">
                          <span class="bg-secondary w-h-35px rounded-circle p-1">
                            <img src="<?php echo base_url() ?>img/comment-inner-icon.svg" class="w-h-18">
                          </span>
                          <span class="font-12 pl-1">166</span>
                        </a>
                        <div class="position-absolute tooltip-inner tool-t">Comment</div>
                      </label>


                      <label class="position-relative mb-0 mt-1 tooltip-hover">
                        <a href="javascript:void(0)" class="mr-3">
                          <span class="bg-secondary hover-bg-lt-red hover-for-blue w-h-35px rounded-circle p-1">
                            <img src="<?php echo base_url() ?>img/share-img-icon.svg" class="w-h-18 img-norm">
                            <img src="<?php echo base_url() ?>img/share-img-icon-red.svg" class="w-h-18 img-hover">
                          </span>
                          <span class="font-12 pl-1">166</span>
                        </a>
                        <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Share</div>
                      </label>

                      <label class="position-relative mb-0 mt-1 tooltip-hover">
                        <a href="javascript:void(0)" class="mr-3">
                          <span class="bg-secondary hover-bg-lt-yellow hover-for-blue w-h-35px rounded-circle p-1">
                            <img src="<?php echo base_url() ?>img/thunder-icon.svg" class="w-h-18 img-norm">
                            <img src="<?php echo base_url() ?>img/thunder-icon-yellow.svg" class="w-h-18 img-hover">
                          </span>
                          <span class="font-12 pl-1">166</span>
                        </a>
                        <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Top Story</div>
                      </label>

                      <label class="position-relative mb-0 mt-1 tooltip-hover">
                        <a href="javascript:void(0)" class="">
                          <span class="bg-secondary hover-bg-lt-green hover-for-blue w-h-35px rounded-circle p-1">
                            <img src="<?php echo base_url() ?>img/star-img-icon.svg" class="w-h-18 img-norm">
                            <img src="<?php echo base_url() ?>img/star-img-icon-green.svg" class="w-h-18 img-hover">
                          </span>
                          <span class="font-12 pl-1">166</span>
                        </a>
                        <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Follow</div>
                      </label>
<!-- 
                      <a href="javascript:void(0)" class="mr-3 pt-1 pl-2">
                        <span class="bg-secondary w-h-35px rounded-circle p-1">
                          <img src="<?php echo base_url() ?>img/comment-inner-icon.svg" class="w-h-18">
                        </span>
                        <span class="font-12 pl-1">166</span>
                      </a>
                      <a href="javascript:void(0)" class="mr-3 pt-1">
                        <span class="bg-secondary w-h-35px rounded-circle p-1">
                          <img src="<?php echo base_url() ?>img/share-img-icon.svg" class="w-h-18">
                        </span>
                        <span class="font-12 pl-1">166</span>
                      </a>
                      <a href="javascript:void(0)" class="mr-3 pt-1">
                        <span class="bg-secondary w-h-35px rounded-circle p-1">
                          <img src="<?php echo base_url() ?>img/thunder-icon.svg" class="w-h-22">
                        </span>
                        <span class="font-12 pl-1">166</span>
                      </a>
                      <a href="javascript:void(0)" class="mr-3 pt-1">
                        <span class="bg-secondary w-h-35px rounded-circle p-1">
                          <img src="<?php echo base_url() ?>img/star-img-icon.svg" class="w-h-18">
                        </span>
                        <span class="font-12 pl-1">166</span>
                      </a>
 -->
                      <div class="ml-auto mr-4 ul-list-inline">
                        <div class="mr-3 float-left"><a href="javascript:void(0)" class="text-dark"><i class="fa fa-user"> Tag</i></a></div>

                        <div class="dropdown d-inline-block">
                          <img src="<?php echo base_url() ?>img/dots-icon.svg" data-toggle="dropdown"  class="w-h-15">
                          <div class="dropdown-menu z-index-9999 font-14 mt-4" style="margin-left: -144px!important;">
                            <a class="dropdown-item px-3" href="javascript:void(0)">Download</a>
                            <a class="dropdown-item px-3" href="javascript:void(0)">Turn off notifications for post</a>
                            <a class="dropdown-item px-3" href="javascript:void(0)">Embed</a>
                            <a class="dropdown-item px-3" href="javascript:void(0)" data-toggle="modal" data-target="#report-to-user-popup">Give feedback or report photo</a>
                          </div>
                        </div>

                      </div>

                    </div>
                  </div>
                  <div class="col-md-6 px-0 py-2 border-left overflow-auto scroll-design-blue position-relative" style="max-height: 560px">
                  <div class="bg-white d-flex border-bottom flex-row p-3">
                      <div class="clearfix w-100">
                        <div class="d-flex justify-content-start hover-box-visible">
                          <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
                            <div class="notif-box-one pt-1 float-left">
                              <div class="profile-pic border w-h-30">
                                <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                              </div>
                            </div>
                            <div class="notif-box-two px-2 pr-3 py-1 float-left">
                              <div class="w-100">
                                <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2">Claudie Gradisch</p>
                                <span class="font-14 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
                              </div>
                            </div>
                          </div>
                          <div class="bg-white ml-3 position-relative mt-2 hover-content-visible ml-auto">
                            <a href="javascript:void(0)" class="text-dark cstm-cmnt-btn">
                              <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15">
                            </a>
                            <div class="cstm-cmnt-dropdn d-none position-absolute t-20 l-0 z-index-999 mn-w-120">
                              <ul class="border px-3 bg-white border-r-5 py-2">
                                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Edit</a></li>
                                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Delete</a></li>
                                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Hide</a></li>
                                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Report</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
                          <a href="javascript:void(0)" class="pr-3">Like</a>
                          <a href="javascript:void(0)" class="pr-3">Reply</a>
                          <p class="pr-3">6h</p>
                        </div>

                        <div class="ml-5 my-3">
                          <div class="d-flex justify-content-start">
                            <div class="border-r-25 bg-secondary clearfix" style="width:fit-content;">
                              <div class="notif-box-one pt-1 float-left">
                                <div class="profile-pic border w-h-30">
                                  <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                                </div>
                              </div>
                              <div class="notif-box-two px-2 pr-3 py-1 float-left">
                                <div class="w-100">
                                  <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2">Claudie Gradisch</p>
                                  <span class="font-14 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
                            <a href="javascript:void(0)" class="pr-3">Like</a>
                            <a href="javascript:void(0)" class="pr-3">Reply</a>
                            <p class="pr-3">6h</p>
                          </div>
                        </div>

                        <div class="d-flex clearfix border-lt-theme mt-2 ml-5 bg-lt-blue py-1 px-3 rounded-25">
                          <div class="notif-box-one rounded-t-l-10">
                            <div class="profile-pic border w-h-22">
                              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
                            </div>
                          </div>
                          <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
                            <textarea placeholder="Write a reply, petor" class="bg-lt-blue font-13 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none plchldr-text-theme overflow-moz-hide"></textarea>
                            <div class="d-flex align-items-end" style="margin-top: -4px;">
                              <div class="ml-1 tooltip-hover position-relative">
                                <img src="<?php echo base_url() ?>img/home-icons/picture-img.svg" class="w-h-18">
                                <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Add Picture</div>
                              </div>
                              <div class="ml-1 tooltip-hover position-relative">
                                <img src="<?php echo base_url() ?>img/gif-comment.svg" class="w-h-18">
                                <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Upload GIF</div>
                              </div>
                              <div class="ml-1 tooltip-hover position-relative">
                                <img src="<?php echo base_url() ?>img/emoji-comment.svg" class="w-h-18">
                                <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Emoji</div>
                              </div>
                              <div class="ml-2 tooltip-hover position-relative">
                                <img src="<?php echo base_url() ?>img/camera-comment.svg" class="w-h-21">
                                <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Video Reply</div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="bg-white d-flex border-bottom flex-row p-3 helloo">
                      <div class="clearfix w-100">
                        <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
                          <div class="notif-box-one pt-1">
                            <div class="profile-pic border w-h-30">
                              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                            </div>
                          </div>
                          <div class="notif-box-two px-2 pr-3 py-1">
                            <div class="w-100">
                              <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2">Claudie Gradisch</p>
                              <span class="font-14 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
                            </div>
                          </div>
                        </div>
                        <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
                          <a href="javascript:void(0)" class="pr-3">Like</a>
                          <a href="javascript:void(0)" class="pr-3">Reply</a>
                          <p class="pr-3">6h</p>
                        </div>

                        <div class="d-flex clearfix mt-2 ml-5 bg-lt-blue py-2 px-3 rounded-25">
                          <div class="notif-box-one rounded-t-l-10">
                            <div class="profile-pic border w-h-22">
                              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
                            </div>
                          </div>
                          <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
                            <textarea placeholder="Write a reply, petor" class="bg-lt-blue font-15 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none plchldr-text-theme overflow-moz-hide"></textarea>
                            <div class="d-flex align-items-end">
                                         <div class="ml-1 tooltip-hover position-relative">
                                <img src="<?php echo base_url() ?>img/home-icons/picture-img.svg" class="w-h-18">
                                <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Add Picture</div>
                              </div>
                              <div class="ml-1 tooltip-hover position-relative">
                                <img src="<?php echo base_url() ?>img/gif-comment.svg" class="w-h-18">
                                <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Upload GIF</div>
                              </div>
                              <div class="ml-1 tooltip-hover position-relative">
                                <img src="<?php echo base_url() ?>img/emoji-comment.svg" class="w-h-18">
                                <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Emoji</div>
                              </div>
                              <div class="ml-2 tooltip-hover position-relative">
                                <img src="<?php echo base_url() ?>img/camera-comment.svg" class="w-h-21">
                                <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Video Reply</div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="bg-white d-flex border-bottom flex-row p-3">
                      <div class="clearfix w-100">
                        <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
                          <div class="notif-box-one pt-1">
                            <div class="profile-pic border w-h-30">
                              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                            </div>
                          </div>
                          <div class="notif-box-two px-2 pr-3 py-1">
                            <div class="w-100">
                              <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2">Claudie Gradisch</p>
                              <span class="font-14 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
                              <div class="my-2">
                                <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 border-r-10">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
                          <a href="javascript:void(0)" class="pr-3">Like</a>
                          <a href="javascript:void(0)" class="pr-3">Reply</a>
                          <p class="pr-3">6h</p>
                        </div>


                        <div class="d-flex clearfix mt-2 ml-5 border-lt-theme bg-lt-blue py-2 px-3 rounded-25">
                          <div class="notif-box-one rounded-t-l-10">
                            <div class="profile-pic border w-h-22">
                              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
                            </div>
                          </div>
                          <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
                            <textarea placeholder="Write a reply, petor" class="bg-lt-blue font-15 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none plchldr-text-theme overflow-moz-hide"></textarea>
                            <div class="d-flex align-items-end">
                              <div class="ml-2">
                                <img src="<?php echo base_url() ?>img/gif-comment.svg" class="w-h-18">
                              </div>
                              <div class="ml-2">
                                <img src="<?php echo base_url() ?>img/img-comment.svg" class="w-h-18">
                              </div>
                              <div class="ml-2">
                                <img src="<?php echo base_url() ?>img/emoji-comment.svg" class="w-h-18">
                              </div>
                              <div class="ml-2">
                                <img src="<?php echo base_url() ?>img/camera-comment.svg" class="w-h-23">
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="d-flex border-bottom flex-row p-3">
                      <div class="clearfix w-100">
                        <div class="d-flex clearfix bg-lt-blue py-2 px-3 rounded-25">
                          <div class="notif-box-one rounded-t-l-10">
                            <div class="profile-pic border w-h-22">
                              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
                            </div>
                          </div>
                          <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
                            <textarea placeholder="Write your comment petor" class="bg-lt-blue font-15 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none plchldr-text-theme overflow-moz-hide"></textarea>
                            <div class="d-flex align-items-end">
                              <div class="ml-2">
                                <img src="<?php echo base_url() ?>img/gif-comment.svg" class="w-h-18">
                              </div>
                              <div class="ml-2">
                                <img src="<?php echo base_url() ?>img/img-comment.svg" class="w-h-18">
                              </div>
                              <div class="ml-2">
                                <img src="<?php echo base_url() ?>img/emoji-comment.svg" class="w-h-18">
                              </div>
                              <div class="ml-2">
                                <img src="<?php echo base_url() ?>img/camera-comment.svg" class="w-h-23">
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
         <p class="font-14 text-dark"><?php echo $feed['post_detail'];?></p>
        <label class="position-relative mt-2">
          <a href="javascript:void(0)" class="btn btn-primary bg-secondary py-0 px-2 font-12 text-dark border">Translate</a>
        </label>
 </div>
  
  <div class="bg-white d-flex justify-content-end border-bottom px-3 py-2 position-relative">
    <a href="javascript:void(0)" class="like font-14 mr-auto text-theme">
      <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-26px">
    </a>
    <div class="likes position-absolute rounded-20 w-auto bg-white border justify-content-around shadow px-3 py-2 z-index-999 h-55px" style="top: -45px; left: 10px;">
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Like</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/love-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Love</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/haha-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">HaHa</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/wow-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Wow</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/sad-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Sad</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="w-auto position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/angry-icon.svg" class="w-h-35px">
          <span class="w-auto position-absolute tooltip-inner tool-t">Angry</span>
        </label>
      </a>
    </div>

    <label class="position-relative mb-0 mt-1 tooltip-hover">
      <a href="javascript:void(0)" class="mr-3">
        <span class="bg-secondary w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/comment-inner-icon.svg" class="w-h-18">
        </span>
       <?php $comment_count = Comment_count($feed['id']);?>
        <span  class="font-12 pl-1 comment_count-<?php echo $feed['id'];?>" ><?php echo $comment_count; ?></span>
      </a>
      <div class="position-absolute tooltip-inner tool-t">Comment</div>
    </label>


    <label class="position-relative mb-0 mt-1 tooltip-hover">
      <a href="javascript:void(0)" class="mr-3">
        <span class="bg-secondary hover-bg-lt-red hover-for-blue w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/share-img-icon.svg" class="w-h-18 img-norm">
          <img src="<?php echo base_url() ?>img/share-img-icon-red.svg" class="w-h-18 img-hover">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
      <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Share</div>
    </label>

    <label class="position-relative mb-0 mt-1 tooltip-hover">
      <a href="javascript:void(0)" class="mr-3">
        <span class="bg-secondary hover-bg-lt-yellow hover-for-blue w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/thunder-icon.svg" class="w-h-18 img-norm">
          <img src="<?php echo base_url() ?>img/thunder-icon-yellow.svg" class="w-h-18 img-hover">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
      <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Top Story</div>
    </label>

    <label class="position-relative mb-0 mt-1 tooltip-hover">
      <a href="javascript:void(0)" class="">
        <span class="bg-secondary hover-bg-lt-green hover-for-blue w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/star-img-icon.svg" class="w-h-18 img-norm">
          <img src="<?php echo base_url() ?>img/star-img-icon-green.svg" class="w-h-18 img-hover">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
      <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Follow</div>
    </label>
  </div>
 <?php $comment_count = Comment_count($feed['id']);
        $comment_count_limit = Comment_count($feed['id'],4);
        if(!empty($comment_count)){
        ?>
  <div class="bg-white d-flex border-bottom flex-row p-3">
    
    <div class="font-14">
      <label class="position-relative mb-0 mb--7">
        <a href="javascript:void(0)" class="btn btn-primary bg-secondary py-0 px-2 font-12 text-dark border">View 45 more replies</a>
      </label>
    </div>
     <div class="font-12 ml-auto">
       
      <span><span class="comm_count_limit-<?php echo $feed['id'];?>"><?php echo $comment_count_limit; ?></span> of <span class="comment_count-<?php echo $feed['id'];?>"><?php echo $comment_count; ?></span></span>
    </div>

  </div>
  <?php } ?>
  <div class="bg-white d-flex border-bottom flex-row p-3">
    <div class="comment_box clearfix w-100">
      <?php 
      $comm = "";
        //  $commnets_data  = getCommnet_newsfeed("",$feed['id'],0); 
        $commnets_data  = Commnet_newsfeed($feed['id']); 
       
            if(!empty($commnets_data)){
                foreach ($commnets_data as $comments) {
                        $comm[] = $comments['comment_id'];
                        $comments_detail  = $comments['comments']; ?>
      <div>                
      <div class="d-flex justify-content-start hover-box-visible">
        <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
          <div class="notif-box-one pt-1 float-left">
            <div class="profile-pic border w-h-30">

              <?php $users = individualUserDetails($comments['user_id']);
              if($session['session']->user_id == $comments['user_id']){
                                $profileImage = "profileImage";
                              }else{
                                $profileImage = "";
                              }
              if(!empty($users->user_img)){
                 $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
              }else{
                $user_img =   base_url().'img/profile-img.jpg';
              } ?>
            <img src="<?php echo $user_img; ?>" class="w-100 h-100 <?php echo $profileImage;?>">
            </div>
          </div>

          <div class="notif-box-two px-2 pr-3 py-1 float-left">
            <div class="w-100">
              <span class="font-14 d-inline-block pt-8px line-h-15 commnet_detail wrd-brk-all"> 
                <span class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2 user_commnet"><?php $user_detail = individualUserDetails($comments['user_id']);
                  echo $user_detail->first_name.' '.$user_detail->last_name; ?></span>
                <?php echo isset($comments_detail) ?  $comments_detail : "" ?></span>
            </div>
          </div>
        </div>

        <div class="bg-white ml-3 position-relative mt-2 hover-content-visible ml-auto">
          <a href="javascript:void(0)" class="text-dark cstm-cmnt-btn1" iddot="drop-<?php echo $comments['comment_id'];?>">
            <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15">
          </a>
          <div class="cstm-cmnt-drop-<?php echo $comments['comment_id'];?> d-none position-absolute t-20 l-0 z-index-999 mn-w-120" iddrop="drop-<?php echo $comments['comment_id'];?>">
            <ul class="border px-3 bg-white border-r-5 py-2">
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Edit</a></li>
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Delete</a></li>
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Hide</a></li>
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Report</a></li>
            </ul>
          </div>
        </div>
      </div> 
      <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
        <a href="javascript:void(0)" class="pr-3">Like</a>
        <a href="javascript:void(0)" class="pr-3 reply_click" reppost_id="<?php echo $feed['id'];?>"  reply="<?php echo $comments['comment_id'];?>">Reply</a>
        <p class="pr-3">6h</p>
      </div>
       <div class="reply_datadetail<?php echo $comments['comment_id'];?>"></div>
      <div class="reply_data<?php echo $comments['comment_id'];?>"></div>
      </div>   
 
        <?php }} ?>
        <!-- reply section-->  

          <?php
           $array =  array();
           $recommnets = reply_newsfeed($comm,$feed['id'],"");
          //$commnets_data1  = getCommnet_newsfeed("",$feed['id'],$comments['comment_id']);
           
            if(!empty($recommnets)){
                  $commnets_data1 = array();
                       foreach ($recommnets as  $value) {
                            if(!empty($value))
                            {
                            foreach ($value as $key_data => $value_data) {
                             $commnets_data1[] = $value_data;
                               }
                            }
                      }
           
                foreach ($commnets_data1 as $comments1) {
                        $replaysection =  newfeed_comment_by_id($comments1,$feed['id']);
                      
                        $comments_detail1  = $replaysection[0]['comments']; 
         ?>
      <div class="ml-5 my-3">
        <div class="d-flex justify-content-start">
          <div class="border-r-25 bg-secondary clearfix" style="width:fit-content;">
            <div class="notif-box-one pt-1 float-left">
              <div class="profile-pic border w-h-30">
                     <?php $users = individualUserDetails($replaysection[0]['user_id']);
                         if($session['session']->user_id == $replaysection[0]['user_id']){
                                    $profileImage = "profileImage";
                                  }else{
                                    $profileImage = "";
                                  }
                  if(!empty($users->user_img)){
                     $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
                  }else{
                    $user_img =   base_url().'img/profile-img.jpg';
                  } ?>

                <img src="<?php echo $user_img; ?>" class="w-100 h-100 <?php echo $profileImage;?>">
              </div>
            </div>
            <div class="notif-box-two px-2 pr-3 py-1 float-left">
              <div class="w-100">
               
                 <span class="font-14 d-inline-block pt-8px line-h-15 wrd-brk-all"> 
                  <span  class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2"><?php $user_detail = individualUserDetails($replaysection[0]['user_id']);
                  echo $user_detail->first_name.' '.$user_detail->last_name; ?></span><?php echo isset($comments_detail1) ?  $comments_detail1 : ""?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
        <a href="javascript:void(0)" class="pr-3">Like</a>
        <a href="javascript:void(0)" class="pr-3 reply_click"  reppost_id="<?php echo $feed['id'];?>" reply="<?php echo $replaysection[0]['comment_id'];?>">Reply</a>
        <p class="pr-3">6h</p>
   
        </div>
          
      </div>
       <div class="reply_datadetail<?php echo $replaysection[0]['comment_id'];?>"></div>
      
     <div class="reply_data<?php echo $replaysection[0]['comment_id'];?>"></div>
            <?php }}?>

    </div>
  </div>


 
  <div class="d-flex border-bottom flex-row p-3">
    <div class="clearfix w-100">
      <div class="d-flex clearfix bg-lt-blue py-2 px-3 rounded-25">
        <div class="notif-box-one rounded-t-l-10">
          <div class="profile-pic border w-h-22">

            <?php if(isset($session['session'])){
             $users = individualUserDetails($session['session']->user_id);
            if(!empty($users->user_img)){
               $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
            }else{
              $user_img =   base_url().'img/profile-img.jpg';
            } }?>
            <img src="<?php echo $user_img; ?>" class="w-100 h-100 profileImage" style="margin-top: -5px;">
      
          </div>
        </div>
        <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
          <textarea placeholder="Write your comment petor" post_id="<?php echo $feed['id'];?>" class="bg-lt-blue font-15 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none plchldr-text-theme popuprtextarea2 post_comments overflow-moz-hide" name="comments"></textarea>
          <div class="d-flex align-items-end">
            <div class="ml-2">
              <img src="<?php echo base_url() ?>img/gif-comment.svg" class="w-h-18">
            </div>
            <div class="ml-2">
              <img src="<?php echo base_url() ?>img/img-comment.svg" class="w-h-18">
            </div>
            <div class="ml-2">
              <img src="<?php echo base_url() ?>img/emoji-comment.svg" class="w-h-18">
            </div>
            <div class="ml-2">
              <img src="<?php echo base_url() ?>img/camera-comment.svg" class="w-h-23">
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php } } ?>
</div>


<!-- special offers section - start -->
<div class="mb-4 profile-setting bg-white rounded-10 border">
  <div class="border-bottom">
    <div class="position-relative overflow-hidden mx-h-160">
      <img src="<?php echo base_url() ?>img/cover-photo.jpg" class="w-100 border-r-10">
      <div class="position-absolute t-0 r-0 p-2">
        <div class="d-flex align-items-center justify-content-end">
          <div class="font-12 float-left">
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-secondary"></i>
          </div>
          <div class="w-h-30px float-left ml-2 text-white bg-theme rounded-circle font-12" style="padding:6px 7px;">4.9
          </div>
        </div>
        <p class="font-12 font-weight-bold text-white" style="text-shadow:1px 1px 0 #4c4c4c;">Based on 111 Reviews</p>
      </div>
      <div class="position-absolute b-0 l-0 r-0 d-flex justify-content-start px-3 align-items-center px-2 py-1 rounded-t-r-10" style="background: #0000004f;">
        <div class="profile-pic bg-theme mr-2 border position-relative" style="width: 50px; height: 50px; margin-top: -23px">
          <img src="<?php echo base_url() ?>img/profile-img.svg" class="w-100 p-2">
          <div class="online-circle b-5 w-h-8 green position-absolute rounded-circle border" style="right: 0px;"></div>
        </div>
        <div class="font-14">
          <a href="javascript:void(0)" class="font-weight-bold text-white">Beauty Spa Shop</a>
        </div>
        
        <div class="font-12 pl-1">
          <div class="position-relative tooltip-hover float-right">
            <img src="<?php echo base_url() ?>img/verified-check.svg" class="w-h-30px">
            <div class="position-absolute tooltip-inner" style="top: -42px; max-width: 250px; width: max-content;">This user has been <br> verified by StayToEnjoy
            </div>
          </div>
        </div>
        <div class="pl-1 font-12" style="margin-left:-5px">
          <p class="text-white">111 Follower</p>
        </div>
        <div class="border font-10 bg-lt-blue border-0 text-success border-r-20 py-1 px-2 ml-auto mr-2">Open</div>
      </div>

    </div>
    <div class="px-3 pt-3">
      <div class="d-flex justify-content-start align-items-center mb-2">
        <h5 class="mb-0">Our Special Offer today</h5>
        <img src="<?php echo base_url() ?>img/single-dots-icon.svg" class="w-h-4 mx-2">
        <p class="text-dark">Sponsored</p>
        <img src="<?php echo base_url() ?>img/single-dots-icon.svg" class="w-h-4 mx-2">
        <i class="fa fa-globe"></i>
        
        <a href="javascript:void(0)" class="font-14 text-dark ml-auto mb-1">
          <div class="bg-white ml-3 position-relative">
            <a href="javascript:void(0)" class="text-dark cstm-cmnt-btn">
              <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15">
            </a>
            <div class="cstm-cmnt-dropdn d-none position-absolute t-20 l-0 z-index-999 mn-w-120">
              <ul class="border px-3 bg-white border-r-5 py-2">
                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Save Post</a></li>
                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Edit Post</a></li>
                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Change Date</a></li>
                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Embed</a></li>
                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Turn off notifications for post</a></li>
                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Show in tab</a></li>
                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Hide from timeline</a></li>
                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Delete</a></li>
                <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Turn off Translations</a></li>
              </ul>
            </div>
          </div>
        </a>

      </div>
      
      <?php for ($x = 0; $x <= 1; $x++) { ?>
      <div class="d-flex justify-content-start align-items-center font-12 border-top py-2">
        <p class="mr-2">Keratin Treatment</p>
        <div class="border font-12 bg-lt-blue border-0 text-danger border-r-20 py-1 px-2" style="background: #fff6e5;">2hr</div>
        <div class="border font-12 bg-lt-blue border-0 text-theme border-r-20 py-1 px-2 ml-auto mr-2">Save up to 20%</div>
        <div class="font-14 font-weight-bold"><span class="font-12 font-weight-normal">from</span> $99</div>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="d-flex justify-content-between border-bottom px-3 py-2 position-relative">
    <a href="javascript:void(0)" class="like font-14 text-theme d-flex align-items-center">
      <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-26px">
    </a>

    <div class="likes position-absolute rounded-20 w-auto bg-white border justify-content-around shadow px-3 py-2 z-index-999 h-55px" style="top: -45px; left: 10px;">
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Like</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/love-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Love</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/haha-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">HaHa</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/wow-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Wow</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/sad-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Sad</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="w-auto position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/angry-icon.svg" class="w-h-35px">
          <span class="w-auto position-absolute tooltip-inner tool-t">Angry</span>
        </label>
      </a>
    </div>

    <div class="px-2 bg-white shadow border rounded-20 ml-2 mr-2 d-none inner-likes">
      <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-17">
      <img src="<?php echo base_url() ?>img/love-icon.svg" class="w-h-17 ml--10px">
      <span class="font-12">2</span>
    </div>

    <div class="likes position-absolute rounded-20 w-auto bg-white border justify-content-around shadow px-3 py-2 z-index-999 h-55px" style="top: -45px; left: 10px;">
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Like</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/love-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Love</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/haha-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">HaHa</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/wow-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Wow</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/sad-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Sad</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="w-auto position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/angry-icon.svg" class="w-h-35px">
          <span class="w-auto position-absolute tooltip-inner tool-t">Angry</span>
        </label>
      </a>
    </div>

    <div class="">
      <label class="position-relative mb-0 mt-1 tooltip-hover">
        <a href="javascript:void(0)" class="mr-3">
          <span class="bg-secondary hover-bg-lt-blue w-h-35px rounded-circle p-1">
            <img src="<?php echo base_url() ?>img/comment-inner-icon.svg" class="w-h-18">
          </span>
          <span class="font-12 pl-1">166</span>
        </a>
        <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Comment</div>
      </label>

      <label class="position-relative mb-0 mt-1 tooltip-hover">
        <a href="javascript:void(0)" class="mr-3">
          <span class="bg-secondary hover-bg-lt-red hover-for-blue w-h-35px rounded-circle p-1">
            <img src="<?php echo base_url() ?>img/share-img-icon.svg" class="w-h-18 img-norm">
            <img src="<?php echo base_url() ?>img/share-img-icon-red.svg" class="w-h-18 img-hover">
          </span>
          <span class="font-12 pl-1">166</span>
        </a>
        <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Share</div>
      </label>

      <label class="position-relative mb-0 mt-1 tooltip-hover">
        <a href="javascript:void(0)" class="mr-3">
          <span class="bg-secondary hover-bg-lt-yellow hover-for-blue w-h-35px rounded-circle p-1">
            <img src="<?php echo base_url() ?>img/thunder-icon.svg" class="w-h-18 img-norm">
            <img src="<?php echo base_url() ?>img/thunder-icon-yellow.svg" class="w-h-18 img-hover">
          </span>
          <span class="font-12 pl-1">166</span>
        </a>
        <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Top Story</div>
      </label>

      <label class="position-relative mb-0 mt-1 tooltip-hover">
        <a href="javascript:void(0)" class="">
          <span class="bg-secondary hover-bg-lt-green hover-for-blue w-h-35px rounded-circle p-1">
            <img src="<?php echo base_url() ?>img/star-img-icon.svg" class="w-h-18 img-norm">
            <img src="<?php echo base_url() ?>img/star-img-icon-green.svg" class="w-h-18 img-hover">
          </span>
          <span class="font-12 pl-1">166</span>
        </a>
        <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Follow</div>
      </label>
    </div>

    <div class=""><button class="btn btn-primary bg-theme font-12 py-1">View</button></div>
  
  </div>
</div>

<!-- special offers section - end -->


<!-- birthday section - start -->

<div class="mb-4 profile-setting bg-white border rounded-10 welcome-pic-popup welcome-pic-popup">
  <div class="bg-white border-bottom border-r-10 position-relative py-2 text-center">
    <a href="javascript:void(0)" value="Skip" class="welcome-skip-btn hover-theme hover-white">
      <i class="fa fa-close"></i>
    </a>
    <h3 class="text-center py-3 pb-4 text-theme">Happy Birthday Peter</h3>
    <img src="<?php echo base_url() ?>img/happy-birthday-img.jpg" class="w-75">
    <p class="font-14 text-dark py-3">From StayToEnjoy all the best to your 45th Birthday.</p>
  </div>
</div>

<!-- birthday section - end -->

<!-- post section - strat -->  

<div class="mb-4 profile-setting bg-white rounded-10 border">
  
  <div class="border-bottom d-flex align-items-center p-3 rounded-t-r-10">
    <div class="profile-pic mr-2">
      <img src="<?php echo base_url() ?>img/profile-pic-new.png" class="w-100">
    </div>
    <div class="pr-4 font-14">
      <a href="javascript:void(0)" class="font-weight-bold">Mark shared to Peter</a>
      <img src="<?php echo base_url() ?>img/noun_dot.svg">
      <span class="text-secondary font-12">February 22 at 3:36 PM</span>
      <a href="javascript:void(0)"><i class="fa fa-user pl-2"></i></a>
    </div>
    <a href="javascript:void(0)" class="font-14 text-dark ml-auto">
      <div class="bg-white ml-3 position-relative">
        <a href="javascript:void(0)" class="text-dark cstm-cmnt-btn">
          <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15">
        </a>
        <div class="cstm-cmnt-dropdn d-none position-absolute t-20 l-0 z-index-999 mn-w-120">
          <ul class="border px-3 bg-white border-r-5 py-2">
            <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Save Post</a></li>
            <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Turn off notifications for post</a></li>
            <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Show in tab</a></li>
            <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Hide from timeline</a></li>
            <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme" data-toggle="modal" data-target="#report-to-user-popup">Report</a></li>
            <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Delete</a></li>
          </ul>
        </div>
      </div>
    </a>
  </div>

  <div class="border-bottom p-3 clearfix rounded-b-r-5">
    <div class="float-left w-100">
      <div class="w-100 d-flex align-items-center border position-relative border-r-10 ">
        <div class="w-h-130-100 border-r-10 overflow-hidden"><img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover"></div>
        <div class="pl-3">
          <p class="text-secondary">PFAELZISCHER-MERKUR.DE</p>
          <p class="text-dark">What a wonderful day. Many Visitors enjoy the Festival in Saarlouis.</p>
        </div>
        <div class="position-absolute bg-white r--10 hover-border-theme t--10 border rounded-circle w-h-35px d-flex align-items-center justify-content-center">
          <i class="fa fa-info text-hover-dark-theme"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- for one picture -->
<div class="mb-4 profile-setting bg-white rounded-10 border">
  <?php include 'new-feed-inner/top-profile-or-header.php';?>  
  <div class="bg-white border-bottom p-3">
    <div class="float-left w-100">
      <div class="overflow-hidden border-r-10 w-100" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
    </div>
    <p class="font-14 text-dark pt-2 clearfix d-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
  </div>
  <?php include 'new-feed-inner/content-other-section.php';?>  
</div>
<!-- for one picture -->

<!-- for sort picture -->
<div class="mb-4 profile-setting bg-white rounded-10 border">
  <?php include 'new-feed-inner/top-profile-or-header.php';?>  
  <div class="bg-white border-bottom p-3">
    <div class="float-left w-100">
      <div class="h-166 overflow-hidden border-r-10 mb-2 w-100" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
    </div>
    <p class="font-14 text-dark pt-2 clearfix d-block">Peter is changing his background picture</p>
  </div>
  <?php include 'new-feed-inner/content-other-section.php';?>  
</div>
<!-- for sort picture -->

<!-- for two picture -->
<div class="mb-4 profile-setting bg-white rounded-10 border">
  <?php include 'new-feed-inner/top-profile-or-header.php';?>  
  <div class="bg-white border-bottom p-3">
    <div class="float-left w-50">
      <div class="overflow-hidden pr-1 border-r-10 h-332 w-100 float-left" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
    </div>
    <div class="float-left w-50">
      <div class="overflow-hidden border-r-10 h-332 w-100 float-left" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
    </div>
    <p class="font-14 text-dark pt-2 clearfix d-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
  </div>
  <?php include 'new-feed-inner/content-other-section.php';?>  
</div>
<!-- for two picture -->

<!-- for three picture -->
<div class="mb-4 profile-setting bg-white rounded-10 border">
  <?php include 'new-feed-inner/top-profile-or-header.php';?>  
  <div class="bg-white border-bottom p-3">
    <div class="float-left w-50">
      <div class="overflow-hidden pr-1 border-r-10 h-332 w-100 float-left" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
    </div>
    <div class="float-left w-50">
      <div class="overflow-hidden border-r-10 pb-1 h-166 w-100 float-left" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
      <div class="overflow-hidden border-r-10 h-166 w-100 float-left" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
    </div>
    <p class="font-14 text-dark pt-2 clearfix d-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
  </div>
  <?php include 'new-feed-inner/content-other-section.php';?>  
</div>
<!-- for three picture -->

<!-- for four picture -->
<div class="mb-4 profile-setting bg-white rounded-10 border">
  <?php include 'new-feed-inner/top-profile-or-header.php';?>  
  <div class="bg-white border-bottom p-3">
    <div class="float-left w-50">
      <div class="overflow-hidden pr-1 border-r-10 h-166 pb-1 w-100" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
      <div class="overflow-hidden pr-1 border-r-10 h-332 w-100" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
    </div>
    <div class="float-left w-50">
      <div class="overflow-hidden border-r-10 pb-1 h-332 w-100" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
      <div class="overflow-hidden border-r-10 h-166 w-100" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
    </div>
    <p class="font-14 text-dark pt-2 clearfix d-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
  </div>
  <?php include 'new-feed-inner/content-other-section.php';?>  
</div>
<!-- for four picture -->

<!-- for five picture -->
<div class="mb-4 profile-setting bg-white rounded-10 border">
  <?php include 'new-feed-inner/top-profile-or-header.php';?>  
  <div class="bg-white border-bottom p-3">
    <div class="float-left">
      <div class="overflow-hidden pb-1 border-r-10 h-237 w-50 float-left" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
      <div class="overflow-hidden pl-1 pb-1 border-r-10 h-237 w-50 float-left" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
      <div class="overflow-hidden border-r-10 h-237 w-33 float-left" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
      <div class="overflow-hidden pl-1 border-r-10 h-237 w-33 float-left" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
      </div>
      <div class="overflow-hidden pl-1 border-r-10 h-237 w-33 float-left position-relative" data-toggle="modal" data-target="#timeline-img-popup">
        <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 h-100 object-fit-cover border-r-10">
        <div class="position-absolute t-0 b-0 font-60 r-0 l-0 d-flex justify-content-center border-r-10 ml-1 align-items-center text-white bg-lt-drk-trns">
          + <spna> 4 </spna>
        </div>
      </div>
    </div>

   
    <p class="font-14 text-dark pt-2 clearfix d-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
  </div>
  <?php include 'new-feed-inner/content-other-section.php';?>  
</div>
<!-- for five picture -->



<div class="mb-4 profile-setting bg-white rounded-10 border">
  <div class="border-bottom d-flex p-3 rounded-t-r-10">
    <div class="profile-pic mr-2 mt-0 border-2-theme" style="width: 40px!important; height:40px!important">
      <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
    </div>
    <div class="pr-4 font-14">
      <h6 href="javascript:void(0)" class="mb-0">mensdresser.com</h6> 
      <div class="d-flex justify-content-between">
        <div class="font-12">
          <i class="fa fa-star text-theme-blue"></i>
          <i class="fa fa-star text-theme-blue"></i>
          <i class="fa fa-star text-theme-blue"></i>
          <i class="fa fa-star text-theme-blue"></i>
          <i class="fa fa-star text-muted"></i>
        </div>
        <div class="text-theme font-12 pl-3">Hervorragend</div>
        <img src="<?php echo base_url() ?>img/noun_dot.svg">
        <div class="text-secondary font-12">.335 Bewertungen</div>
      </div>
      <h6 class="font-12 mb-0">Sponsored <img src="<?php echo base_url() ?>img/noun_dot.svg"> <i class="fa fa-globe"></i> </h6>
    </div>


    <a href="javascript:void(0)" class="font-14 text-dark ml-auto">
      <div class="bg-white ml-3 position-relative">
        <a href="javascript:void(0)" class="text-dark cstm-cmnt-btn">
          <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15">
        </a>
        <div class="cstm-cmnt-dropdn d-none position-absolute t-20 l-0 z-index-999 mn-w-120">
          <ul class="border px-3 bg-white border-r-5 py-2">
            <li class="py-1 font-14">
              <a href="javascript:void(0)" class="hover-red">Hide Add
                <div class="text-secondary font-12">Mark ad as irrelevant or repetitive.</div>
              </a>
            </li>
            <li class="py-1 font-14">
              <a href="javascript:void(0)" class="hover-theme">Save post
                <div class="text-secondary font-12">Add this to your save items</div>
              </a>
            </li>
            <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Why am i seeing this ad?</a></li>
            <li class="py-1 font-14">
              <a href="javascript:void(0)" class="hover-red">Report ad
                <div class="text-secondary font-12">Tell us about a problem with this ad</div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </a>

  </div>
  <div class="bg-white border-bottom px-3 pt-3 pb-1">                
    <p class="font-14 font-weight-bold text-dark pb-3">More offers you find in our Online Shop</p>
    <div class="owl-carousel owl-theme">
      <div class="item" data-merge="2">
        <div class="p-2 pb-0 border border-bottom-0 rounded-t-r-10">
          <img src="<?php echo base_url() ?>img/newsfeed/jacket.jpg" class="w-100 rounded-0 mn-h-250 object-fit-contain">
        </div>
        <div class="border border-bottom-0 border-top-0 pb-2 px-1 bg-white d-flex justify-content-between">
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/jacket.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/jacket.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/jacket.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/jacket.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/jacket.jpg" class="w-100 h-100 object-fit-contain">
          </div>
        </div>
        <div class="border px-2 py-1 rounded-b-r-10">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-block">
              <p class="font-14 text-dark">Joop! Jacke Lima</p>
              <p class="font-14 text-dark">2620013/150000626/205</p>
              <p class="font-13">$3,2322</p>
            </div>
            <div class="d-block">
              <button class="btn btn-primary font-12">Shop Now</button>
            </div>
          </div>
          <div class="d-flex justify-content-between">
          <div class=" font-12">
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-muted"></i>
          </div>
          <div class="text-theme font-12">Hervorragend</div>
          <div class="text-secondary font-12">.335 Bewertungen</div>
          </div>
        </div>
      </div>
      <div class="item" data-merge="2">
        <div class="p-2 pb-0 border border-bottom-0 rounded-t-r-10">
          <img src="<?php echo base_url() ?>img/newsfeed/Jacket-brown.jpg" class="w-100 rounded-0 mn-h-250 object-fit-contain">
        </div>
        <div class="border border-bottom-0 border-top-0 pb-2 px-1 bg-white d-flex justify-content-between">
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/Jacket-brown.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/Jacket-brown.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/Jacket-brown.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/Jacket-brown.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/Jacket-brown.jpg" class="w-100 h-100 object-fit-contain">
          </div>
        </div>
        <div class="border px-2 py-1 rounded-b-r-10">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-block">
              <p class="font-14 text-dark">Joop! Jacke Lima</p>
              <p class="font-14 text-dark">2620013/150000626/205</p>
              <p class="font-13">$3,2322</p>
            </div>
            <div class="d-block">
              <button class="btn btn-primary font-12">Shop Now</button>
            </div>
          </div>
          <div class="d-flex justify-content-between">
          <div class=" font-12">
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-muted"></i>
          </div>
          <div class="text-theme font-12">Hervorragend</div>
          <div class="text-secondary font-12">.335 Bewertungen</div>
          </div>
        </div>
      </div>
      <div class="item" data-merge="2">
        <div class="p-2 pb-0 border border-bottom-0 rounded-t-r-10">
          <img src="<?php echo base_url() ?>img/newsfeed/shoe.jpg" class="w-100 rounded-0 mn-h-250 object-fit-contain">
        </div>
        <div class="border border-bottom-0 border-top-0 pb-2 px-1 bg-white d-flex justify-content-between">
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/shoe.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/shoe.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/shoe.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/shoe.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/shoe.jpg" class="w-100 h-100 object-fit-contain">
          </div>
        </div>
        <div class="border px-2 py-1 rounded-b-r-10">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-block">
              <p class="font-14 text-dark">Joop! Jacke Lima</p>
              <p class="font-14 text-dark">2620013/150000626/205</p>
              <p class="font-13">$3,2322</p>
            </div>
            <div class="d-block">
              <button class="btn btn-primary font-12">Shop Now</button>
            </div>
          </div>
          <div class="d-flex justify-content-between">
          <div class=" font-12">
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-muted"></i>
          </div>
          <div class="text-theme font-12">Hervorragend</div>
          <div class="text-secondary font-12">.335 Bewertungen</div>
          </div>
        </div>
      </div>
      <div class="item" data-merge="2">
        <div class="p-2 pb-0 border border-bottom-0 rounded-t-r-10">
          <img src="<?php echo base_url() ?>img/newsfeed/watch.jpg" class="w-100 rounded-0 mn-h-250 object-fit-contain">
        </div>
        <div class="border border-bottom-0 border-top-0 pb-2 px-1 bg-white d-flex justify-content-between">
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/watch.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/watch.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/watch.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/watch.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/watch.jpg" class="w-100 h-100 object-fit-contain">
          </div>
        </div>
        <div class="border px-2 py-1 rounded-b-r-10">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-block">
              <p class="font-14 text-dark">Joop! Jacke Lima</p>
              <p class="font-14 text-dark">2620013/150000626/205</p>
              <p class="font-13">$3,2322</p>
            </div>
            <div class="d-block">
              <button class="btn btn-primary font-12">Shop Now</button>
            </div>
          </div>
          <div class="d-flex justify-content-between">
          <div class=" font-12">
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-muted"></i>
          </div>
          <div class="text-theme font-12">Hervorragend</div>
          <div class="text-secondary font-12">.335 Bewertungen</div>
          </div>
        </div>
      </div>
      <div class="item" data-merge="2">
        <div class="p-2 pb-0 border border-bottom-0 rounded-t-r-10">
          <img src="<?php echo base_url() ?>img/newsfeed/charm.jpg" class="w-100 rounded-0 mn-h-250 object-fit-contain">
        </div>
        <div class="border border-bottom-0 border-top-0 pb-2 px-1 bg-white d-flex justify-content-between">
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/charm.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/charm.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/charm.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/charm.jpg" class="w-100 h-100 object-fit-contain">
          </div>
          <div class="rounded-5 border p-1 mx-1 w-100 bg-white height47">
            <img src="<?php echo base_url() ?>img/newsfeed/charm.jpg" class="w-100 h-100 object-fit-contain">
          </div>
        </div>
        <div class="border px-2 py-1 rounded-b-r-10">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-block">
              <p class="font-14 text-dark">Joop! Jacke Lima</p>
              <p class="font-14 text-dark">2620013/150000626/205</p>
              <p class="font-13">$3,2322</p>
            </div>
            <div class="d-block">
              <button class="btn btn-primary font-12">Shop Now</button>
            </div>
          </div>
          <div class="d-flex justify-content-between">
          <div class=" font-12">
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-theme-blue"></i>
            <i class="fa fa-star text-muted"></i>
          </div>
          <div class="text-theme font-12">Hervorragend</div>
          <div class="text-secondary font-12">.335 Bewertungen</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="bg-white d-flex justify-content-end border-bottom px-3 py-2 position-relative rounded-b-r-10">
    <a href="javascript:void(0)" class="like font-14 mr-auto text-theme">
      <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-26px">
    </a>
    <div class="likes position-absolute rounded-20 w-auto bg-white border justify-content-around shadow px-3 py-2 z-index-999 h-55px" style="top: -45px; left: 10px;">
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Like</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/love-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Love</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/haha-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">HaHa</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/wow-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Wow</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/sad-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Sad</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="w-auto position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/angry-icon.svg" class="w-h-35px">
          <span class="w-auto position-absolute tooltip-inner tool-t">Angry</span>
        </label>
      </a>
    </div>
    


  </div>
</div>

<div class="mb-4 profile-setting bg-white rounded-10 border">
  <div class="border-bottom d-flex align-items-center p-3 rounded-t-r-10">
    <div class="profile-pic mr-2">
      <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
    </div>
    <div class="pr-4 font-14">
      <!--<a href="javascript:void(0)">Uta Ordemann</a> to <a href="javascript:void(0)"> Claudia Gradisch</a>-->
      <a href="javascript:void(0)" class="font-weight-bold">Jens</a>
        <span class="text-dark font-weight-bold">to</span>
      <a href="javascript:void(0)" class="font-weight-bold">Peter</a>
      <img src="<?php echo base_url() ?>img/noun_dot.svg">
      <span class="text-secondary font-12">February 22 at 3:36 PM</span>
      <a href="javascript:void(0)"><i class="fa fa-user pl-2"></i></a>
    </div>

    <div class="bg-white ml-auto position-relative float-right">
      <a href="javascript:void(0)" class="text-dark cstm-cmnt-btn">
        <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15">
      </a>
      <div class="cstm-cmnt-dropdn position-absolute d-none t-20 l-0 z-index-999 mn-w-120">
        <ul class="border px-3 bg-white border-r-5 py-2">
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Save post</a></li>
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Turn off notifications for post</a></li>
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Show in tab</a></li>
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Hide from timeline</a></li>
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme" data-toggle="modal" data-target="#report-to-user-popup">Report</a></li>
          <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Delete</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="bg-white border-bottom p-3">
    <div class="pb-3"><img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 border-r-10"></div>
    <p class="font-14 text-dark">This is only for home page not for newsfeed</p>
    <label class="position-relative mt-2">
      <a href="javascript:void(0)" class="btn btn-primary bg-secondary py-0 px-2 font-12 text-dark border">Translate</a>
    </label>
  </div>
  
  <div class="bg-white d-flex justify-content-end border-bottom px-3 py-2 position-relative">
    <a href="javascript:void(0)" class="like font-14 mr-auto text-theme">
      <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-26px">
    </a>
    <div class="likes position-absolute rounded-20 w-auto bg-white border justify-content-around shadow px-3 py-2 z-index-999 h-55px" style="top: -45px; left: 10px;">
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/like-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Like</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/love-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Love</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/haha-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">HaHa</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/wow-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Wow</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/sad-icon.svg" class="w-h-35px">
          <div class="w-auto position-absolute tooltip-inner tool-t">Sad</div>
        </label>
      </a>
      <a href="javascript:void(0)" class="px-1">
        <label class="w-auto position-relative mb-0 tooltip-hover float-right">
          <img src="<?php echo base_url() ?>img/angry-icon.svg" class="w-h-35px">
          <span class="w-auto position-absolute tooltip-inner tool-t">Angry</span>
        </label>
      </a>
    </div>

    <label class="position-relative mb-0 mt-1 tooltip-hover">
      <a href="javascript:void(0)" class="mr-3">
        <span class="bg-secondary w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/comment-inner-icon.svg" class="w-h-18">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
      <div class="position-absolute tooltip-inner tool-t">Comment</div>
    </label>


    <label class="position-relative mb-0 mt-1 tooltip-hover">
      <a href="javascript:void(0)" class="mr-3">
        <span class="bg-secondary hover-bg-lt-red hover-for-blue w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/share-img-icon.svg" class="w-h-18 img-norm">
          <img src="<?php echo base_url() ?>img/share-img-icon-red.svg" class="w-h-18 img-hover">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
      <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Share</div>
    </label>

    <label class="position-relative mb-0 mt-1 tooltip-hover">
      <a href="javascript:void(0)" class="mr-3">
        <span class="bg-secondary hover-bg-lt-yellow hover-for-blue w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/thunder-icon.svg" class="w-h-18 img-norm">
          <img src="<?php echo base_url() ?>img/thunder-icon-yellow.svg" class="w-h-18 img-hover">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
      <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Top Story</div>
    </label>

    <label class="position-relative mb-0 mt-1 tooltip-hover">
      <a href="javascript:void(0)" class="">
        <span class="bg-secondary hover-bg-lt-green hover-for-blue w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/star-img-icon.svg" class="w-h-18 img-norm">
          <img src="<?php echo base_url() ?>img/star-img-icon-green.svg" class="w-h-18 img-hover">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
      <div class="position-absolute tooltip-inner tool-t w-auto" style="top: -35px!important;">Follow</div>
    </label>

  </div>

  <div class="bg-white d-flex border-bottom flex-row p-3">
    <div class="font-14">
      <label class="position-relative mb-0 mb--7">
        <a href="javascript:void(0)" class="btn btn-primary bg-secondary py-0 px-2 font-12 text-dark border">View 45 more replies</a>
      </label>
    </div>
    <div class="font-12 ml-auto">
      <span>4 of 51</span>
    </div>
  </div>

  <div class="bg-white d-flex border-bottom flex-row p-3">
    <div class="clearfix w-100">
      <div class="d-flex justify-content-start hover-box-visible">
        <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
          <div class="notif-box-one pt-1 float-left">
            <div class="profile-pic border w-h-30">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
            </div>
          </div>
          <div class="notif-box-two px-2 pr-3 py-1 float-left">
            <div class="w-100">
              <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2">Claudie Gradisch</p>
              <span class="font-14 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
            </div>
          </div>
        </div>
        <div class="bg-white ml-3 position-relative mt-2 hover-content-visible ml-auto">
          <a href="javascript:void(0)" class="text-dark cstm-cmnt-btn">
            <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15">
          </a>
          <div class="cstm-cmnt-dropdn d-none position-absolute t-20 l-0 z-index-999 mn-w-120">
            <ul class="border px-3 bg-white border-r-5 py-2">
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Edit</a></li>
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Delete</a></li>
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-red">Hide</a></li>
              <li class="py-1 font-14"><a href="javascript:void(0)" class="hover-theme">Report</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
        <a href="javascript:void(0)" class="pr-3">Like</a>
        <a href="javascript:void(0)" class="pr-3">Reply</a>
        <p class="pr-3">6h</p>
      </div>

      <div class="ml-5 my-3">
        <div class="d-flex justify-content-start">
          <div class="border-r-25 bg-secondary clearfix" style="width:fit-content;">
            <div class="notif-box-one pt-1 float-left">
              <div class="profile-pic border w-h-30">
                <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
              </div>
            </div>
            <div class="notif-box-two px-2 pr-3 py-1 float-left">
              <div class="w-100">
                <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2">Claudie Gradisch</p>
                <span class="font-14 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
              </div>
            </div>
          </div>
        </div>
        <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
          <a href="javascript:void(0)" class="pr-3">Like</a>
          <a href="javascript:void(0)" class="pr-3">Reply</a>
          <p class="pr-3">6h</p>
        </div>
      </div>

      <div class="d-flex clearfix border-lt-theme mt-2 ml-5 bg-lt-blue py-1 px-3 rounded-25">
        <div class="notif-box-one rounded-t-l-10">
          <div class="profile-pic border w-h-22">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
          </div>
        </div>
        <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
          <textarea placeholder="Write a reply, petor" class="bg-lt-blue font-13 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none plchldr-text-theme overflow-moz-hide"></textarea>
          <div class="d-flex align-items-end" style="margin-top: -4px;">
            <div class="ml-1 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/home-icons/picture-img.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Add Picture</div>
            </div>
            <div class="ml-1 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/gif-comment.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Upload GIF</div>
            </div>
            <div class="ml-1 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/emoji-comment.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Emoji</div>
            </div>
            <div class="ml-2 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/camera-comment.svg" class="w-h-21">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Video Reply</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="bg-white d-flex border-bottom flex-row p-3">
    <div class="clearfix w-100">
      <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
        <div class="notif-box-one pt-1">
          <div class="profile-pic border w-h-30">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
          </div>
        </div>
        <div class="notif-box-two px-2 pr-3 py-1">
          <div class="w-100">
            <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2">Claudie Gradisch</p>
            <span class="font-14 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
          </div>
        </div>
      </div>
      <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
        <a href="javascript:void(0)" class="pr-3">Like</a>
        <a href="javascript:void(0)" class="pr-3">Reply</a>
        <p class="pr-3">6h</p>
      </div>

      <div class="d-flex clearfix mt-2 ml-5 bg-lt-blue py-2 px-3 rounded-25">
        <div class="notif-box-one rounded-t-l-10">
          <div class="profile-pic border w-h-22">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
          </div>
        </div>
        <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
          <textarea placeholder="Write a reply, petor" class="bg-lt-blue font-15 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none plchldr-text-theme overflow-moz-hide"></textarea>
          <div class="d-flex align-items-end">
                       <div class="ml-1 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/home-icons/picture-img.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Add Picture</div>
            </div>
            <div class="ml-1 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/gif-comment.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Upload GIF</div>
            </div>
            <div class="ml-1 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/emoji-comment.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Emoji</div>
            </div>
            <div class="ml-2 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/camera-comment.svg" class="w-h-21">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Video Reply</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="bg-white d-flex border-bottom flex-row p-3">
    <div class="clearfix w-100">
      <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
        <div class="notif-box-one pt-1">
          <div class="profile-pic border w-h-30">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
          </div>
        </div>
        <div class="notif-box-two px-2 pr-3 py-1">
          <div class="w-100">
            <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px d-inline-block mr-2">Claudie Gradisch</p>
            <span class="font-14 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
            <div class="my-2">
              <img src="<?php echo base_url() ?>img/cooking.jpg" class="w-100 border-r-10">
            </div>
          </div>
        </div>
      </div>
      <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
        <a href="javascript:void(0)" class="pr-3">Like</a>
        <a href="javascript:void(0)" class="pr-3">Reply</a>
        <p class="pr-3">6h</p>
      </div>


      <div class="d-flex clearfix mt-2 ml-5 border-lt-theme bg-lt-blue py-2 px-3 rounded-25">
        <div class="notif-box-one rounded-t-l-10">
          <div class="profile-pic border w-h-22">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
          </div>
        </div>
        <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
          <textarea placeholder="Write a reply, petor" class="bg-lt-blue font-15 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none plchldr-text-theme overflow-moz-hide"></textarea>
          <div class="d-flex align-items-end">
                        <div class="ml-1 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/home-icons/picture-img.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Add Picture</div>
            </div>
            <div class="ml-1 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/gif-comment.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Upload GIF</div>
            </div>
            <div class="ml-1 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/emoji-comment.svg" class="w-h-18">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Emoji</div>
            </div>
            <div class="ml-2 tooltip-hover position-relative">
              <img src="<?php echo base_url() ?>img/camera-comment.svg" class="w-h-21">
              <div class="position-absolute tooltip-inner tool-t w-mx-cntnt" style="top: -28px!important;">Video Reply</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="d-flex border-bottom flex-row p-3">
    <div class="clearfix w-100">
      <div class="d-flex clearfix bg-lt-blue py-2 px-3 rounded-25">
        <div class="notif-box-one rounded-t-l-10">
          <div class="profile-pic border w-h-22">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
          </div>
        </div>
        <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
          <textarea placeholder="Write your comment petor" class="bg-lt-blue font-15 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none plchldr-text-theme overflow-moz-hide"></textarea>
          <div class="d-flex align-items-end">
            <div class="ml-2">
              <img src="<?php echo base_url() ?>img/gif-comment.svg" class="w-h-18">
            </div>
            <div class="ml-2">
              <img src="<?php echo base_url() ?>img/img-comment.svg" class="w-h-18">
            </div>
            <div class="ml-2">
              <img src="<?php echo base_url() ?>img/emoji-comment.svg" class="w-h-18">
            </div>
            <div class="ml-2">
              <img src="<?php echo base_url() ?>img/camera-comment.svg" class="w-h-23">
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>


<!-- report user - start  -->

<div class="modal fade pr-0" id="report-to-user-popup" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered model-lg">
    <div class="modal-content border-radius-20 overflow-hidden">
      <div class="modal-body overflow-hidden px-0">
        <div class="container-fluid px-0">
          <h6 class="px-3">Why you want give feedback to this post?</h6>
          <button type="button" class="close text-dark t-5 r-10" data-dismiss="modal">&times;</button>
          <hr class="my-2">
          <div class="row px-3">
            <div class="col-md-6">
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Violence
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Nudity
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Spam
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Terrorism
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Incorrect offer Info
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Fake Account
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="col-md-6">
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Harassment
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> False News
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Hate Speech
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Suicide or Self-Injury
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Unauthroized Sales
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="position-relative c-pointer font-14 my-2">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#something-else"  data-dismiss="modal">Something Else
                  <i class="fa fa-angle-right font-20 va-bottom text-dark pl-2"></i>
                </a>
              </label>
            </div>
            <div class="form-group mt-2 mx-3 w-100">
              <textarea class="w-100 border pt-0 scroll-d-none px-3 py-2 message-box" placeholder="Please describe your issue" id="count-length"></textarea>
            </div>
          </div>
          <div class="d-flex justify-content-start font-14 align-items-center py-2 px-3 border-top border-bottom">
            <i class="fa fa-info-circle pr-3 text-secondary"></i>
            <div class="text-secondary">If someone is in immediate danger, call local emergency services, Don't wait.</div>
          </div>
          <input type="button" class="btn btn-primary mt-3 mr-3 bg-primary float-right font-14" value="Send">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pr-0" id="something-else" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered model-lg">
    <div class="modal-content border-radius-20 overflow-hidden">
      <div class="modal-body overflow-hidden px-0">
        <div class="container-fluid px-0">
          <h6 class="px-3">Search</h6>
          <button type="button" class="close text-dark t-5 r-10" data-dismiss="modal">&times;</button>
          <label class="position-relative w-100 border-top border-bottom py-2">
            <input type="search" class="border-0 w-100 pl-5 pr-3 focus-outline-none" placeholder="Search">
            <i class="fa fa-search position-absolute" style="left: 17px; top: 15px"></i>
          </label>
          <div class="px-3 py-1 mb-2" style="background:#edf4ff;">Examples</div>
          <div class="row px-3">
            <div class="col-md-12">
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Intellectual Property
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Fraud
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Mocking Victims
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Bullying
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Child Abuse
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Animal Abuse
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container-box w-100 position-relative c-pointer font-14 my-2"> Sexual Activity
                
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <div class="form-group mt-2">
                <textarea class="w-100 border pt-0 scroll-d-none px-3 py-2 message-box" placeholder="Please describe your issue" id="count-length"></textarea>
              </div>
            </div>
          </div>
          <hr>
          <input type="button" class="btn btn-primary mr-3 bg-primary float-right font-14" value="Send">
          <input type="button" class="btn btn-primary mr-3 bg-secondary border-0 text-theme float-right font-14" value="Back">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="add-slideshow-popup" role="dialog" style="z-index: 99999999!important;">
  <div class="modal-dialog modal-md d-flex align-items-center justify-content-center h-100 my-0" role="document" style="max-width: 550px!important;">
    <div class="modal-content border-r-10 py-2">
      <div class="modal-body p-0 text-center">
        <div class="profile-setting w-100">
          
          <div class="border-bottom text-left px-3 pb-2">Upload Pictures</div>

          <div>
            <a href="javascript:void(0)" class="d-flex border-l-hover-theme p-2 position-relative justify-content-start align-items-center bg-lt-blue-hover border-bottom">
              <!-- <input class="position-absolute w-100 t-0 l-0 b-0 opacity-0" type="file"> -->
              <div class="pl-1 text-left"><img src="<?php echo base_url()?>img/upload-photos-videos-copy.svg" class="w-55"></div>  
              <div class="w-70 ml--10px">
                <h6 class="text-theme font-14 text-left mb-0">Add photos from your Album</h6>
              </div>
            </a>
            <a href="javascript:void(0)" class="d-flex border-l-hover-theme p-2 position-relative justify-content-start align-items-center bg-lt-blue-hover">
              <input class="position-absolute w-100 t-0 l-0 b-0 opacity-0" name="cover_image" id="upload_cover_img"  type="file">

              <div class="pl-1 text-left"><img src="<?php echo base_url()?>img/upload-photos-videos-copy.svg" class="w-55"></div>  
              <div class="w-70 ml--10px">
                <h6 class="text-theme font-14 text-left mb-0">Upload Photos from your Computer</h6>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="move-to-trash" role="dialog">
  <div class="modal-dialog modal-md d-flex align-items-center justify-content-center h-100 my-0" role="document" style="max-width: 480px!important;">
    <div class="modal-content border-r-10">
      <div class="modal-body p-0">
        <div class="profile-setting w-100">
          <div class="bg-red d-flex p-3 rounded-l-r-5">
            <div class="pt-1 text-white">Move Picture to Trash</div>
          </div>
          <div class="p-3">
            <p class="font-14">Sure you want to move <span class="font-weight-bold">This Picture</span> to Trash?</p>
            <p class="font-14">Once you moved to Trash your picture is not visible anymore.</p>
          </div>
          <div class="d-flex justify-content-end pb-3 px-3">
            <button type="button" class="btn btn-primary bg-white text-dark border-danger">Cancel</button>
            <button type="button" class="btn btn-primary bg-red border-0 ml-2">Move to Trash</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 

<!-- report user popup - end -->




