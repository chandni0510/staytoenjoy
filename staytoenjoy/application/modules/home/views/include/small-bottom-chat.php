<div class="small-bottom-chat shadow bg-white rounded-l-r-10">
  <div class="w-50 float-left bg-theme rounded-l-10 d-flex justify-content-start bg-theme text-white py-2 px-2 align-items-center left-click-clps">
    <div class="">
      <div class="profile-pic position-relative">
        <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
        <div class="online-circle red position-absolute rounded-circle"></div>
      </div>
    </div>
    <div class="pl-2 font-14">Peter Thomsen</div>
  </div>
  <div class="w-50 float-left bg-theme rounded-r-10 d-flex justify-content-start bg-theme text-white py-14 px-2 align-items-center">
    <div class="ml-auto">
      <a href="javascript:void(0)" class="text-white" id="expand-small-chat"><i class="fa fa-expand pr-2"></i></a>
    </div>
    <div class="ml-auto">
      <label class="position-relative tooltip-hover">
        <i class="fa fa-phone"></i>
        <div class="position-absolute tooltip-inner tool-t" style="left: -60px;">Start Phone Call</div>
      </label>
    </div>
    <div class="ml-auto">
      <label class="position-relative tooltip-hover ml-2">
        <i class="fa fa-video"></i>
        <div class="position-absolute tooltip-inner tool-t" style="left: -60px;">Start Video Call</div>
      </label>
    </div>
    <div class="ml-auto">
      <label class="position-relative tooltip-hover">
        <img src="<?php echo base_url() ?>img/user-plus.svg" class="w-h-25px" style="margin-top:-9px">
        <div class="position-absolute tooltip-inner tool-t" style="left: -60px;">Add Friends to Chat</div>
      </label>
    </div>
    <div class="ml-auto">
      <div class="dropdown d-inline-block">
        <label class="position-relative tooltip-hover">
          <i data-toggle="dropdown" class="fa fa-cog c-pointer"></i>
          <div class="position-absolute tooltip-inner tool-t" style="left: -60px;">Add Friends to Chat</div>
          <div class="dropdown-menu z-index-9999 font-14 mt-4 overflow-auto scroll-design-blue" style="margin-left: -144px!important; max-height: 210px;">
            <a class="dropdown-item px-3" href="javascript:void(0)">Chat sounds</a>
            <a class="dropdown-item px-3" href="javascript:void(0)">Emoji</a>
            <a class="dropdown-item px-3" href="javascript:void(0)">Block settings</a>
            <a class="dropdown-item px-3" href="javascript:void(0)">Advanced settings</a>
            <a class="dropdown-item px-3" href="javascript:void(0)">Collapse all Chat tabs</a>
            <a class="dropdown-item px-3" href="javascript:void(0)">Hide sidebar</a>
            <a class="dropdown-item px-3" href="javascript:void(0)">Turn off chat</a>
            <a class="dropdown-item px-3" href="javascript:void(0)">Turn off video/audio call</a>
            <a class="dropdown-item px-3" href="javascript:void(0)">Turn off post chats</a>
          </div>
        </label>
      </div>
    </div>
    <div class="ml-auto pl-1">
      <a href="javascript:void(0)" class="text-white small-chat-close"><i class="fa fa-close"></i></a>
    </div>


  </div>

  

  <div class="white-small-chat-box position-relative clearfix">
    <div class="chat-col-boxes p-2 scroll-design-blue overflow-auto">
      <?php 
        for ($x = 0; $x <= 10; $x++) {
      ?>
      <div class="mb-3 clearfix">
        <div class="d-flex border-r-25 mw-90 bg-secondary clearfix" style="width:fit-content;">
          <div class="notif-box-one pt-1">
            <div class="profile-pic border w-h-30">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
            </div>
          </div>
          <div class="notif-box-two px-2 pr-3 py-1">
            <div class="w-100">
              <p class="text-theme-blue mb-0 font-weight-bold font-13 h-10px">Claudie Gradisch</p>
              <span class="font-12 d-inline-block pt-8px line-h-15">thanks. I appriciate it very much</span>
            </div>
          </div>
        </div>
        <div class="font-10 text-secondary clearfix pl-3">10:17 am 9 feb 2018</div>
      </div>
      <div class="mb-3 clearfix">
        <div class="d-flex border-r-25 mw-85 bg-light-theme float-right clearfix">
          <div class="notif-box-two px-3 py-1">
            <div class="w-100 mt--3px">
              <div class="font-12 text-white d-inline-block">thanks. I appriciate it very much</div>
            </div>
          </div>
        </div>  
        <div class="font-10 text-secondary float-right clearfix pr-2">
          <i class="fa fa-check text-success pr-2"></i>10:17 am 9 feb 2018
        </div>
      </div>
      <?php } ?>
    </div>

    <div class="position-absolute w-100 l-0 b-0 border bg-secondary z-index-999" id="show-chat">
      <label class="position-relative w-100">
        <textarea type="text" placeholder="Type your text on here" class="w-100 focus-outline-none scroll-d-none pl-35px pr-5 pb-50px border-0 bg-secondary height20 font-12 message-box mn-80-px pt-3"></textarea>
        <div class="position-absolute border-top bg-white py-2 w-100 px-3 text-right pt-1 mt-1 l-0 r-0" style="bottom:7px;">
          <i class="fa fa-paperclip ml-2"></i>
          <i class="fa fa-picture-o ml-2"></i>
          <img src="<?php echo base_url() ?>img/imoji.svg" class="w-h-18 ml-2">
        </div>

        <div class="position-absolute l-15 t-10">
          <a href="javascript:void(0)" class="text-dark">
            <i class="fa fa-microphone pt-2"></i>
          </a>
        </div>
        <div class="position-absolute t-10 r-15">
          <button class="btn bg-transparent border-0 p-0 font-14 px-2 focus-none">
            <i class="fa fa-paper-plane text-theme"></i>
          </button>
        </div>
        <div class="position-absolute t-10 r-15 d-none">
          <button class="btn bg-transparent border-0 p-0 font-14 px-2  focus-none">
            <i class="fa fa-smile pt-2"></i>
          </button>
          <button class="btn bg-transparent border-0 p-0 font-14 px-2  focus-none">
            <i class="fa fa-picture-o pt-2"></i>
          </button>
          <button class="btn bg-transparent border-0 p-0 font-14 px-2  focus-none">
            <i class="fa fa-paperclip pt-2"></i>
          </button>
        </div>
      </label>
    </div>
  </div>
</div>