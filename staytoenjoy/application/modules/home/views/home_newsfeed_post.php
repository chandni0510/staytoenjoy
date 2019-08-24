 <link rel="stylesheet" href="<?php echo base_url('css/owl.theme.default.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.min.css');?>">
  <div class="mb-4 profile-setting bg-white rounded-10 border" feed="<?php echo $insert_id;?>">
  <div class="border-bottom d-flex align-items-center p-3 rounded-t-r-10">
    <div class="profile-pic mr-2"> 
      <?php $users = individualUserDetails($user_id);
          if($session['session']->user_id == $user_id){
                $profileImage = "profileImage";
              }else{
                $profileImage = "";
              }
          if(!empty($users->user_img)){
             $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
          }else{
            $user_img =   base_url().'img/profile-img.jpg';
          } ?>

      <img src="<?php echo $user_img; ?>" class="w-100 h-100 <?php echo  $profileImage;?>">
    </div>
    <div class="pr-4 font-14">
      <a href="javascript:void(0)" class="font-weight-bold">
        <?php $user_detail = individualUserDetails($session['session']->user_id);
          echo $user_detail->first_name.' '.$user_detail->last_name; ?>
        
      </a>
      <img src="<?php echo base_url() ?>img/noun_dot.svg">
     <span class="text-secondary font-12"><?php echo date('F d',strtotime($newsfeeds[0]['creation']));?> at <?php echo date('h:i A',strtotime($newsfeeds[0]['creation']));?></span>
      <a href="javascript:void(0)"><i class="fa fa-user pl-2"></i></a>
    </div>
    <a href="javascript:void(0)" class="font-14 text-dark ml-auto">
      
       <div class="d-inline-block hide-caret bg-white position-relative ">
          <a href="javascript:void(0)" class="text-dark cstm-post-btn" cust-post-id="<?php echo $insert_id; ?>">
            <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15 c-pointer">
          </a>

      <div class="cust-post-<?php echo $insert_id; ?> d-none position-absolute t-20 l-0 z-index-999 mn-w-120">

        <div class="border px-3 bg-white border-r-5 py-2">
           <a class="px-3 font-14 hover-theme" href="javascript:void(0)">Save Post</a>
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

    </a>
  </div>
  <div class="hello bg-white border-bottom p-3">

 <?php 
 $count = 0;

 if(!empty($photos)){
     
     foreach($photos as $image){
      
         $count++; }}  ?>
         
        <?php if($count == 1){
             foreach($photos as $image){
                ?>
         <div class="pb-3" data-toggle="modal" data-target="#timeline-img-popup">
                     <img src="<?php echo base_url('uplaods/posts/'). $image['images'] ?>" class="w-100 border-r-10">
                 </div>
    
       <?php } } ?>
               
 <!-- <?php if($count > 1){ ?>
  <div class="owl-carousel owl-theme">
  <?php foreach($photos as $image){
       ?>

    <div class="item"><img src="<?php //echo base_url('uplaods/posts/'). $image['images'] ?>" class="w-100 border-r-10"></div>


       <?php   } ?>
       </div>
       <?php }?>
     -->
                 

    <div class="modal fade pr-0 bg-dark" id="timeline-img-popup" tabindex="-1">

      <div class="hello1 position-absolute t-0 r-0 l-0 b-0 bg-dark img-full-view d-none">
          <?php if(!empty($photo)){
            foreach($photo as $image){
           ?>
                <div class="pb-3" data-toggle="modal" data-target="#timeline-img-popup">
                     <img src="<?php echo base_url('uplaods/posts/'). $image['images'] ?>" class="w-100 border-r-10">
                 </div>
             <?php }} ?>


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
                      <?php $users = individualUserDetails($user_id);
                        if($session['session']->user_id == $user_id){
                              $profileImage = "profileImage";
                            }else{
                              $profileImage = "";
                            }
                        if(!empty($users->user_img)){
                           $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
                        }else{
                          $user_img =   base_url().'img/profile-img.jpg';
                        } ?>

                          <img src="<?php echo $user_img; ?>" class="w-100 h-100 <?php echo  $profileImage;?>">
            
                    </div>
                    <div class="pr-4 font-14">
                      <a href="javascript:void(0)" class="font-weight-bold">
                         <?php $user_detail = individualUserDetails($session['session']->user_id);
                           echo $user_detail->first_name.' '.$user_detail->last_name; ?>
                        </a>
                      <img src="<?php echo base_url() ?>img/noun_dot.svg">
                      <span class="text-secondary font-12"><?php echo date('F d',strtotime($newsfeeds[0]['creation']));?> at <?php echo date('h:i A',strtotime($newsfeeds[0]['creation']));?></span>
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
                    <p class="font-14 text-dark text-left"><?php echo $newsfeeds[0]['post_detail'];?></p>
                  </div>

                  <div id="demo" class="carousel mt-2 slide pl-3" style="padding-right: 35px;" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    
                    <!-- The slideshow -->

                    <div class="ggggggg carousel-inner border-r-10 mb-2" style="max-height: 400px;">
                      
                      <?php 
                             foreach($photos as $image){
                                ?>
                         <div class="carousel-item active">
                                     <img src="<?php echo base_url('uplaods/posts/'). $image['images'] ?>" class="w-100 h-100">
                                 </div>
                    
                       <?php } ?>
                    
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
                    <div class="clearfix">
                      <div class="d-flex justify-content-start">
                        <div class=" border-r-25 bg-secondary clearfix" style="width:fit-content;">
                          <div class="notif-box-one pt-1 float-left">
                            <div class="profile-pic border w-h-30">
                              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                            </div>
                          </div>
                          <div class="notif-box-two px-2 pr-3 py-1 float-left">
                            <div class="w-100">
                              <p class="text-theme-blue text-left mb-0 font-weight-bold font-14 h-10px">Claudie Gradisch</p>
                              <span class="font-14 d-inline-block text-left pt-8px line-h-15">thanks. I appriciate it very much</span>
                            </div>
                          </div>
                        </div>
                        <div class="bg-white ml-3 position-relative mt-2">
                          <a href="javascript:void(0)" class="text-dark cstm-cmnt-btn">
                            <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15">
                          </a>
                          <div class="cstm-cmnt-dropdn d-none position-absolute t-20 l-0 z-index-999 mn-w-120">
                            <ul class="border px-3 bg-white border-r-5 py-2 text-left">
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
                      <div class="d-flex mt-2 ml-5 clearfix" style="width:fit-content;">
                        <div class="notif-box-one bg-secondary rounded-t-l-10">
                          <div class="profile-pic border w-h-22">
                            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
                          </div>
                        </div>
                        <div class="notif-box-two bg-secondary rounded-r-b-10 mx-w-75 px-3">
                          <span class="font-14 d-inline-bloclk line-h-15">thanks. I appriciate it very much</span>
                        </div>
                        <div class="font-14 ml-2">
                          <label class="position-relative mb-0 mb--7">
                            <div href="javascript:void(0)" class="btn btn-primary bg-theme py-0 px-2 font-12 text-white">
                              <span class="pr-1">1</span>Reply
                            </div>
                          </label>
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
                            <p class="text-theme-blue mb-0 text-left font-weight-bold font-14 h-10px">Claudie Gradisch</p>
                            <span class="font-14 d-inline-block pt-8px line-h-15 text-left">thanks. I appriciate it very much</span>
                          </div>
                        </div>
                      </div>
                      <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
                        <a href="javascript:void(0)" class="pr-3">Like</a>
                        <a href="javascript:void(0)" class="pr-3">Reply</a>
                        <p class="pr-3">6h</p>
                      </div>
                      <div class="d-flex mt-2 ml-5 clearfix">
                        <div class="notif-box-one bg-secondary rounded-t-l-10">
                          <div class="profile-pic border w-h-22">
                            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
                          </div>
                        </div>
                        <div class="notif-box-two bg-secondary rounded-r-b-10 px-3 w-100 mr-5">
                          <textarea placeholder="Write a reply, Peter" class="font-14 border-0 bg-secondary message-box resize-none focus-outline-none w-100 scroll-d-none height20"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bg-white d-flex flex-row p-3">
                    <div class="clearfix w-100">
                      <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
                        <div class="notif-box-one pt-1">
                          <div class="profile-pic border w-h-30">
                            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                          </div>
                        </div>
                        <div class="notif-box-two px-2 pr-3 py-1">
                          <div class="w-100 text-left">
                            <p class="text-theme-blue mb-0 text-left font-weight-bold font-14 h-10px">Claudie Gradisch</p>
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

                      <div class="d-flex mt-2 ml-5 clearfix">
                        <div class="notif-box-one bg-secondary rounded-t-l-10">
                          <div class="profile-pic border w-h-22">
                            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
                          </div>
                        </div>
                        <div class="notif-box-two bg-secondary rounded-r-b-10 px-3 w-100 mr-5">
                          <textarea placeholder="Write a reply, petor" class="font-14 border-0 bg-secondary message-box resize-none focus-outline-none w-100 scroll-d-none height20"></textarea>
                        </div> 
                      </div>

                    </div>
                  </div>
                  <div class="bg-white position-absolute border-top w-100 d-flex border-bottom flex-row p-3 rounded-b-r-10">
                    <div class="clearfix w-100">
                      <div class="d-flex clearfix">
                        <div class="notif-box-one rounded-t-l-10">
                          <div class="profile-pic border w-h-22">

                            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
                          </div>
                        </div>
                        <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
                          <textarea placeholder="Write your comment petor" class="font-15 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none"></textarea>
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

    <p class="font-14 text-dark"><?php echo $newsfeeds[0]['post_detail'];?></p>
  </div>
  
  <div class="bg-white d-flex justify-content-start border-bottom px-3 py-2 position-relative">

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

    <div class="ml-auto">
      <a href="javascript:void(0)" class="mr-3">
        <span class="bg-secondary w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/comment-inner-icon.svg" class="w-h-18">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
      <a href="javascript:void(0)" class="mr-3">
        <span class="bg-secondary w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/share-img-icon.svg" class="w-h-18">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
      <a href="javascript:void(0)" class="mr-3">
        <span class="bg-secondary w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/thunder-icon.svg" class="w-h-22">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
      <a href="javascript:void(0)" class="">
        <span class="bg-secondary w-h-35px rounded-circle p-1">
          <img src="<?php echo base_url() ?>img/star-img-icon.svg" class="w-h-18">
        </span>
        <span class="font-12 pl-1">166</span>
      </a>
    </div>
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

  <!-- <div class="bg-white d-flex border-bottom flex-row p-3">
    <div class="clearfix">
      <div class="d-flex justify-content-start">
        <div class=" border-r-25 bg-secondary clearfix" style="width:fit-content;">
          <div class="notif-box-one pt-1 float-left">
            <div class="profile-pic border w-h-30">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
            </div>
          </div>
          <div class="notif-box-two px-2 pr-3 py-1 float-left">
            <div class="w-100">
              <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px">Claudie Gradisch</p>
              <span class="font-14 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
            </div>
          </div>
        </div>
        <div class="bg-white ml-3 position-relative mt-2">
          <a href="javascript:void(0)" class="text-dark cstm-cmnt-btn">
            <img src="<?php echo base_url() ?>img/dots-icon.svg" class="w-h-15">
          </a>
          <div class="cstm-cmnt-dropdn d-none position-absolute t-20 l-0 z-index-999 mn-w-120">
            <ul class="border px-3 bg-white border-r-5 py-2">
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
      <div class="d-flex mt-2 ml-5 clearfix" style="width:fit-content;">
        <div class="notif-box-one bg-secondary rounded-t-l-10">
          <div class="profile-pic border w-h-22">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
          </div>
        </div>
        <div class="notif-box-two bg-secondary rounded-r-b-10 mx-w-75 px-3">
          <span class="font-14 d-inline-bloclk line-h-15">thanks. I appriciate it very much</span>
        </div>
        <div class="font-14 ml-2">
          <label class="position-relative mb-0 mb--7">
            <div href="javascript:void(0)" class="btn btn-primary bg-theme py-0 px-2 font-12 text-white">
              <span class="pr-1">1</span>Reply
            </div>
          </label>
        </div>
      </div>
    </div>
  </div>
 -->
<!--   <div class="bg-white d-flex border-bottom flex-row p-3">
    <div class="clearfix w-100">
      <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
        <div class="notif-box-one pt-1">
          <div class="profile-pic border w-h-30">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
          </div>
        </div>
        <div class="notif-box-two px-2 pr-3 py-1">
          <div class="w-100">
            <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px">Claudie Gradisch</p>
            <span class="font-14 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
          </div>
        </div>
      </div>
      <div class="font-12 d-flex justify-content-start text-secondary pl-3 mt-1">
        <a href="javascript:void(0)" class="pr-3">Like</a>
        <a href="javascript:void(0)" class="pr-3">Reply</a>
        <p class="pr-3">6h</p>
      </div>
      <div class="d-flex mt-2 ml-5 clearfix">
        <div class="notif-box-one bg-secondary rounded-t-l-10">
          <div class="profile-pic border w-h-22">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
          </div>
        </div>
        <div class="notif-box-two bg-secondary rounded-r-b-10 px-3 w-100 mr-5">
          <textarea placeholder="Write a reply, petor" class="font-14 border-0 bg-secondary message-box resize-none focus-outline-none w-100 scroll-d-none height20"></textarea>
        </div>
      </div>
    </div>
  </div> -->

  <div class="bg-white d-flex border-bottom flex-row p-3">
    <div class="comment_box clearfix w-100">
      <!-- <div class="d-flex border-r-25 bg-secondary clearfix" style="width:fit-content;">
        <div class="notif-box-one pt-1">
          <div class="profile-pic border w-h-30">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
          </div>
        </div>
        <div class="notif-box-two px-2 pr-3 py-1">
          <div class="w-100">
            <p class="text-theme-blue mb-0 font-weight-bold font-14 h-10px">Claudie Gradisch</p>
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
      <div class="d-flex mt-2 ml-5 clearfix">
        <div class="notif-box-one bg-secondary rounded-t-l-10">
          <div class="profile-pic border w-h-22">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100" style="margin-top: -5px;">
          </div>
        </div>
        <div class="notif-box-two bg-secondary rounded-r-b-10 px-3 w-100 mr-5">
          <textarea placeholder="Write a reply, petor" class="font-14 border-0 bg-secondary message-box resize-none focus-outline-none w-100 scroll-d-none height20"></textarea>
        </div>
      </div> -->
    </div>
  </div>

  <div class="d-flex border-bottom flex-row p-3">
    <div class="clearfix w-100">
      <div class="d-flex clearfix">
        <div class="notif-box-one rounded-t-l-10">
          <div class="profile-pic border w-h-22">
             <?php $users = individualUserDetails($user_id);
          if($session['session']->user_id == $user_id){
                $profileImage = "profileImage";
              }else{
                $profileImage = "";
              }
          if(!empty($users->user_img)){
             $user_img =   base_url().'/uplaods/profile/'.$users->user_img;
          }else{
            $user_img =   base_url().'img/profile-img.jpg';
          } ?>

            <img src="<?php echo $user_img; ?>" class="w-100 h-100 <?php echo  $profileImage;?>" style="margin-top: -5px;">
            
          </div>
        </div>
        <div class="notif-box-two rounded-r-b-10 pl-2 w-100 d-flex">
        <textarea placeholder="Write your comment petor" class="font-15 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none post_comments" name="comments"></textarea>
       
        <!-- <button class="btn btn-primary bg-theme border-0 px-3 py-1 font-12 comments_send">Send</button> -->
          <!-- <textarea placeholder="Write your comment petor" class="font-15 border-0 pl-2 w-100 d-inline-block height20 focus-outline-none message-box resize-none scroll-d-none"></textarea>
 -->
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

<script src="<?php echo base_url('js/jquery.min.js');?>"></script>

<script src="<?php echo base_url('js/owl.carousel.min.js');?>"></script>
 <script>
     
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
            items:1
        },
        1000:{
            items:1
        }
    }
})
     $('.post_comments').on('keypress',function(e) {
    if(e.which == 13) {
   
   var commnets_data =  $('.post_comments').val();
   var user_id =  <?php echo isset($session['session'])? $session['session']->user_id :""?>;
   var post_id = $('div.post_divdata').find('div.profile-setting').attr('feed');
   
   if(commnets_data == "undefined" && commnets_data ==""){
       alert('Please enter the commnents');
   }else{
         url = "<?php echo base_url('home/add_post_comment')?>";
          $.ajax({
          type:"POST",
          url: url,
          data: {commnets_data:commnets_data,user_id:user_id,post_id:post_id},
        
          cache: false,
        
          success: function(data)
          {   

            console.log(data);
                 $('div.comment_box').append(data);
                 $('.post_comments').val(' ');
              
          }
        });
    return false;

     }
      
    }
   
   
   

});
 </script>


