<div class="w-100">
  <ul class="nav nav-tabs d-flex justify-content-around text-center pt-2 bg-white rounded-l-r-5">
    <li class="nav-item">
      <a class="nav-link border-0 border-bottom-blue h-50px active" data-toggle="tab" href="#your-contact" id="contact-box-click">
        <img src="<?php echo base_url() ?>img/contact-chat.svg" class="w-h-35px">
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link border-0 border-bottom-blue h-50px" data-toggle="tab" href="#calendar" id="calendar-click">
        <img src="<?php echo base_url() ?>img/calendar.svg" class="w-h-22px">
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link border-bottom border-0 bg-transparent h-50px" data-toggle="tab" id="collapse-right-chat">
        <i class="fa fa-bars text-theme font-20 pt-1"></i>
      </a>
    </li>
  </ul>
  
  <div class="tab-content position-relative">

    <div class="position-absolute w-100 l-0 b-0 p-3 border bg-secondary z-index-999 d-none" id="show-chat">
      <label class="position-relative w-100">
        <textarea type="text" placeholder="Type your text on here" class="border w-100 border-r-25 focus-outline-none scroll-d-none pl-35px pr-5 pb-50px height20 font-12 message-box mn-80-px pt-3"></textarea>
        <div class="position-absolute border-top bg-white py-2 w-90 pt-1 mt-1" style="bottom:7px; left: 15px;">
          <i class="fa fa-paperclip pr-3"></i>
          <i class="fa fa-picture-o pr-3"></i>
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

    <div class="tab-pane container active px-0 h-550 scroll-design" id="your-contact">

      <?php 
        for ($x = 0; $x <= 4; $x++) {
      ?>  
        
      <div class="d-flex font-14 p-2 border-l-hover-theme position-relative chat-profile-btn">
        <div class="notif-box-one">
          <div class="profile-pic position-relative border-white-2" style="width: 40px; height: 40px;">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
            <div class="online-circle red position-absolute rounded-circle"></div>
          </div>
        </div>
        <div class="notif-box-two px-2">
          <div class="w-100">
            <p class="text-dark mb-0 d-inline-block font-14 pt-2">Julia Jones, <span class="font-12">Beauty & Spa</span></p>
          </div>
        </div>
        <div class="notif-box-three ml-auto pr-0 hide-caret pt-10px">
          <div class="dropdown-toggle">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>img/dots-icon.svg" style="width: 16px;">
            </a>
            <div class="dropdown-menu white-bx-cst-shdow font-14" style="left:-170px;">
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mute</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mark as read</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Remove</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Turn off Notifications</a>
            </div>
          </div>
        </div>
        <?php include 'hover-chat-profile-first.php';?> 
      </div>

      <div class="d-flex font-14 p-2 border-l-hover-theme position-relative" href="javascript:void(0)">
        <div class="notif-box-one">
          <div class="profile-pic position-relative border-white-2" style="width: 40px; height: 40px;">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
            <div class="online-circle green position-absolute rounded-circle"></div>
          </div>
        </div>
        <div class="notif-box-two px-2">
          <div class="w-100">
            <p class="text-dark mb-0 d-inline-block font-14 pt-2">Peter Thomsen, <span class="font-12">Designer</span></p>
          </div>
        </div>
        <div class="notif-box-three ml-auto pr-0 hide-caret pt-10px">
          <div class="dropdown-toggle">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>img/dots-icon.svg" style="width: 16px;">
            </a>
            <div class="dropdown-menu white-bx-cst-shdow font-14" style="left:-170px;">
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mute</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mark as read</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Remove</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Turn off Notifications</a>
            </div>
          </div>
        </div>
        <?php include 'hover-chat-profile-second.php';?>
      </div>

      <div class="d-flex font-14 p-2 border-l-hover-theme position-relative" href="javascript:void(0)">
        <div class="notif-box-one">
          <div class="profile-pic position-relative border-white-2" style="width: 40px; height: 40px;">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
            <div class="online-circle yellow position-absolute rounded-circle"></div>
          </div>
        </div>
        <div class="notif-box-two px-2">
          <div class="w-100">
            <p class="text-dark mb-0 d-inline-block font-14 pt-2">Peter Thomsen, <span class="font-12">Designer</span></p>
          </div>
        </div>
        <div class="notif-box-three ml-auto pr-0 hide-caret pt-10px">
          <div class="dropdown-toggle">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>img/dots-icon.svg" style="width: 16px;">
            </a>
            <div class="dropdown-menu white-bx-cst-shdow font-14" style="left:-170px;">
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mute</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mark as read</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Remove</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Turn off Notifications</a>
            </div>
          </div>
        </div>
        <?php include 'hover-chat-profile-first.php';?> 
      </div>

      <div class="d-flex font-14 p-2 border-l-hover-theme position-relative" href="javascript:void(0)">
        <div class="notif-box-one">
          <div class="profile-pic position-relative border-white-2" style="width: 40px; height: 40px;">
            <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
            <div class="online-circle grey position-absolute rounded-circle"></div>
          </div>
        </div>
        <div class="notif-box-two px-2">
          <div class="w-100">
            <p class="text-dark mb-0 d-inline-block font-14 pt-2">Peter Thomsen, <span class="font-12">Designer</span></p>
          </div>
        </div>
        <div class="notif-box-three ml-auto pr-0 hide-caret pt-10px">
          <div class="dropdown-toggle">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>img/dots-icon.svg" style="width: 16px;">
            </a>
            <div class="dropdown-menu white-bx-cst-shdow font-14" style="left:-170px;">
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mute</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Mark as read</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Remove</a>
              <a class="dropdown-item border-trans-hover hover-grey" href="javascript:void(0)">Turn off Notifications</a>
            </div>
          </div>
        </div>
        <?php include 'hover-chat-profile-second.php';?>
      </div>

      <?php } ?>

    </div>

    <div class="tab-pane container fade h-550 overflow-auto scroll-design px-0 bg-white" id="calendar">


      <div class="bg-white" id="calendar-inputs">

        <div class="d-flex p-3 border-bottom">
          <div class="text-theme pt-2">
            <a href="javascript:void(0)">Mon, May 13
              <i class="fa fa-caret-down"></i>
            </a>
          </div>
          <div class="ml-auto">
            <a class="nav-link position-relative menu-icon bg-secondary rounded-circle w-h-35px pl-2 pt-1" href="calendar.php">
              <img src="<?php echo base_url() ?>img/calendar.svg" class="w-h-22px">
              <span class="notify-circle" style="right: -3px;">9</span>
            </a>
          </div>
        </div>

        <ul class="nav nav-tabs px-3 d-flex justify-content-between" style="flex-wrap: nowrap;" role="tablist" id="tabcalendar">
          <li class="nav-item">
            <a class="nav-link text-dark font-12 px-0 border-bottom-3-hover border-0 active" data-toggle="tab" href="#events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark font-12 px-0 border-bottom-3-hover border-0" data-toggle="tab" href="#appointment">Appointment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark font-12 px-0 border-bottom-3-hover border-0" data-toggle="tab" href="#reminder">Reminder</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark font-12 px-0 border-bottom-3-hover border-0" data-toggle="tab" href="#tasks">Task</a>
          </li>
        </ul>

        <div class="position-absolute t-100 l-0 r-0 b-0 bg-white z-index-999 border-top d-none" id="show-me-calendar">
          <div class="d-flex border-bottom p-3">
            <div class="text-theme">Today
              <a href="javascript:void(0)" class="text-dark pl-3">
                <i class="fa fa-angle-left font-20"></i>
              </a>
              <a href="javascript:void(0)" class="text-dark pl-3">
                <i class="fa fa-angle-right font-20"></i>
              </a>
            </div>
            <div class="ml-auto">
              <a href="javascript:void(0)" class="text-dark">
                <i class="fa fa-ellipsis-v"></i>
              </a>
            </div>
          </div>
          <div class="table-responsive overflow-auto scroll-design" style="max-height: 392px;">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td class="w-20 font-10 pt-3 text-right">GMT+02</td>
                  <td class=""></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">8 AM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">9 AM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">10 AM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">11 AM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">12 PM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">1 PM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">2 PM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">3 PM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">4 PM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">5 PM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">6 PM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">7 PM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">8 PM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
                <tr>
                  <td class="w-20 font-10 pt-4 pr-2 text-right">9 PM</td>
                  <td class="border-bottom calendar-clicks"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


        <div class="white-bx-cst-shdow border-0 profile-tab-big mt-3 d-none" id="calendar-show">
          <p class="pl-4 font-20 text-dark border-bottom bg-light-blue py-2">Reminder</p>
          <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)">Later today<span class="float-right font-12">8:00 PM</span></a>
          <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)">Tomorrow<span class="float-right font-12">8:00 AM</span></a>
          <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)">Next week<span class="float-right font-12">Mon, 8:00 AM</span></a>
          <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-clock-o pr-1"></i> Next week</a>
          <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-map-marker pr-2"></i> Pick place</a>
        </div>

        <div class="bg-white z-index-999 d-none py-2 border shadow" id="box-add-custom">
          <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
            <div class="profile-pic position-relative">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
              <div class="online-circle red position-absolute rounded-circle"></div>
            </div>
            <div class="pl-2">
              <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
              <span class="text-secondary pl-2 font-12">Hamburg </span>
            </div>
          </div>
          <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
            <div class="profile-pic position-relative">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
              <div class="online-circle red position-absolute rounded-circle"></div>
            </div>
            <div class="pl-2">
              <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
              <span class="text-secondary pl-2 font-12">Hamburg </span>
            </div>
          </div>
          <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
            <div class="profile-pic position-relative">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
              <div class="online-circle red position-absolute rounded-circle"></div>
            </div>
            <div class="pl-2">
              <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
              <span class="text-secondary pl-2 font-12">Hamburg </span>
            </div>
          </div>                
        </div>
        <div class="bg-white z-index-999 d-none py-2 border shadow" id="box-select-services">
          <div class="position-relative mysearch-box w-100 d-inline-block float-right px-3">
            <input class="form-control mysearch focus-none border-r-5 border-0 pl-2 border" type="text" id="serchBox" placeholder="Search more" style="background: #edf3ff;">
            <span class="position-absolute text-theme" style="right: 32px; top:5px;">
              <i class="fa fa-search"></i>
            </span>
          </div>
          <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
            <div class="profile-pic position-relative">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
              <div class="online-circle red position-absolute rounded-circle"></div>
            </div>
            <div class="pl-2">
              <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
              <span class="text-secondary pl-2 font-12">Hamburg </span>
            </div>
          </div>
          <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
            <div class="profile-pic position-relative">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
              <div class="online-circle red position-absolute rounded-circle"></div>
            </div>
            <div class="pl-2">
              <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
              <span class="text-secondary pl-2 font-12">Hamburg </span>
            </div>
          </div>
          <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
            <div class="profile-pic position-relative">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
              <div class="online-circle red position-absolute rounded-circle"></div>
            </div>
            <div class="pl-2">
              <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
              <span class="text-secondary pl-2 font-12">Hamburg </span>
            </div>
          </div>                
        </div>
        <div class="bg-white z-index-999 d-none py-2 border shadow" id="box-add-employee">
          <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
            <div class="profile-pic position-relative">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
              <div class="online-circle red position-absolute rounded-circle"></div>
            </div>
            <div class="pl-2">
              <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
              <span class="text-secondary pl-2 font-12">Hamburg </span>
            </div>
          </div>
          <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
            <div class="profile-pic position-relative">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
              <div class="online-circle red position-absolute rounded-circle"></div>
            </div>
            <div class="pl-2">
              <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
              <span class="text-secondary pl-2 font-12">Hamburg </span>
            </div>
          </div>
          <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
            <div class="profile-pic position-relative">
              <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
              <div class="online-circle red position-absolute rounded-circle"></div>
            </div>
            <div class="pl-2">
              <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
              <span class="text-secondary pl-2 font-12">Hamburg </span>
            </div>
          </div>                
        </div>


        <!-- Tab panes -->
        <div class="tab-content">
          <div id="events" class="container tab-pane active py-4 overflow-auto scroll-design" style="max-height: 445px;">
            <div class="w-100 text-left mr-auto mb-4">
              <input type="text" placeholder="Add Title" class="border-0 font-20 focus-none border-bttm-onhvoer pr-3 w-100" maxlength="30">
            </div>
            <div class="d-flex justify-content-start mt-2">
              <p class="font-12 mt-2 w-40px">Starts</p>
              <div class="bg-light-blue mb-2 py-1 px-2 mr-1 rounded-5">
                <span class="font-12 text-theme">May 15, 2019</span>
                <span class="font-12 text-theme pl-3">1:30am</span>
              </div>
            </div>
            <div class="d-flex justify-content-start mt-2">
              <p class="font-12 mt-2 w-40px">Ends</p>
              <div class="bg-light-blue mb-2 py-1 px-2 mr-1 rounded-5">
                <span class="font-12 text-theme">May 15, 2019</span>
                <span class="font-12 text-theme pl-3">2:30am</span>
              </div>
            </div>

            <div class="d-flex justify-content-start">
              <label class="container-box d-inline-block mt-3 mr-2 position-relative c-pointer font-14 ml-5px" style="padding-left: 36px;">All days
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="d-inline-block hide-caret ml-5px mt-3">
              <div class="position-relative">
                <a href="javascript:void(0)" class="text-black-normal hover-theme" id="bell-in-calendar">
                  <i class="fa fa-bell-o font-19"></i>
                </a>
              </div>
            </div>

            <div class="w-100 text-left mr-auto mb-4 mt-4 position-relative">
              <input type="text" placeholder="Add Guests" class="border-0 font-20 focus-none border-bttm-onhvoer guests-input pr-3 w-100" maxlength="30">

              <div class="bg-white box-guests py-2 border shadow">
                <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
                  <div class="profile-pic position-relative">
                    <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                    <div class="online-circle red position-absolute rounded-circle"></div>
                  </div>
                  <div class="pl-2">
                    <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
                    <span class="text-secondary pl-2 font-12">Hamburg </span>
                  </div>
                </div>
                <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
                  <div class="profile-pic position-relative">
                    <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                    <div class="online-circle red position-absolute rounded-circle"></div>
                  </div>
                  <div class="pl-2">
                    <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
                    <span class="text-secondary pl-2 font-12">Hamburg </span>
                  </div>
                </div>
                <div class="py-2 px-3 clearfix d-flex border-bottom hover-grey">
                  <div class="profile-pic position-relative">
                    <img src="<?php echo base_url() ?>img/profile-img.jpg" class="w-100">
                    <div class="online-circle red position-absolute rounded-circle"></div>
                  </div>
                  <div class="pl-2">
                    <p class="text-dark mb-0 font-14 pl-2">Daniel Bowman, Tour Guide</p>
                    <span class="text-secondary pl-2 font-12">Hamburg </span>
                  </div>
                </div>                
              </div>
            </div>

            <div class="w-100 text-left mr-auto mb-4 mt-4">
              <input type="text" placeholder="Add Notes" class="border-0 font-20 focus-none border-bttm-onhvoer pr-3 w-100" maxlength="30">
            </div>

            <div class="row mt-3">
              <div class="col">
                <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">
              </div>
              <div class="col">
                <input type="button" class="btn btn-primary bg-primary float-right font-14" value="Save">
              </div>
            </div>
          </div>

          <div id="appointment" class="container tab-pane py-4 overflow-auto scroll-design" style="max-height: 445px;">

            <div class="w-100 text-left mr-auto mb-4 position-relative">
              <div class="profile-pic position-absolute l-0" style="top: 7px; background: #c9daf7;">
                <img src="<?php echo base_url() ?>img/profile-img.svg" class="w-100 h-100">
              </div>
              <input type="text" placeholder="Customer Name (required)" class="border-0 font-14 focus-none border-bttm-onhvoer pr-3 w-100 pl-5 py-3" id="add-custom-input">
            </div>

            <div class="w-100 text-left mr-auto mb-4 position-relative">
              <div class="profile-pic position-absolute l-0" style="top: 7px; background: #c9daf7;">
                <img src="<?php echo base_url() ?>img/profile-img.svg" class="w-100 h-100">
              </div>
              <input type="text" placeholder="Select Services" class="border-0 font-14 focus-none border-bttm-onhvoer pr-3 w-100 pl-5 py-3" id="select-services">
            </div>

            <div class="w-100 text-left mr-auto mb-4 position-relative">
              <div class="profile-pic position-absolute l-0" style="top: 7px; background: #c9daf7;">
                <img src="<?php echo base_url() ?>img/profile-img.svg" class="w-100 h-100">
              </div>
              <input type="text" placeholder="Add Employee (required)" class="border-0 font-14 focus-none border-bttm-onhvoer pr-3 w-100 pl-5 py-3" id="add-employee">
            </div>


            <div class="d-flex justify-content-start mt-2">
              <p class="font-12 mt-2 w-40px">Starts</p>
              <div class="bg-light-blue mb-2 py-1 px-2 mr-1 rounded-5">
                <span class="font-12 text-theme">May 15, 2019</span>
                <span class="font-12 text-theme pl-3">1:30am</span>
              </div>
            </div>
            <div class="d-flex justify-content-start mt-2">
              <p class="font-12 mt-2 w-40px">Ends</p>
              <div class="bg-light-blue mb-2 py-1 px-2 mr-1 rounded-5">
                <span class="font-12 text-theme">May 15, 2019</span>
                <span class="font-12 text-theme pl-3">2:30am</span>
              </div>
            </div>

            <div class="d-inline-block hide-caret ml-5px mt-3 w-100">
              <div class="position-relative">
                <a href="javascript:void(0)" class="text-black-normal hover-theme" id="bell-in-calendar">
                  <i class="fa fa-bell-o font-19"></i>
                </a>
              </div>
            </div>

            <div class="d-inline-block hide-caret ml-5px mt-2 w-100">
              <div class="position-relative">
                <a href="javascript:void(0)" class="pr-2 text-black-normal hover-theme" id="bell-in-calendar">
                  <img src="<?php echo base_url() ?>img/location-img.svg" class="w-h-22">
                </a> Location
              </div>
            </div>

            <div class="w-100 text-left mr-auto mb-4 position-relative mt-3">
              <div class="profile-pic position-absolute l-0" style="top: 7px; background: #c9daf7;">
                <img src="<?php echo base_url() ?>img/description-icon.svg" class="w-100 h-100">
              </div>
              <input type="text" placeholder="Add Description" class="border-0 font-14 focus-none border-bttm-onhvoer pr-3 w-100 pl-5 py-3" id="add-employee">
            </div>

            <div class="w-100 text-left mr-auto mb-4 mt-4">
              <input type="text" placeholder="Add Notes" class="border-0 font-20 focus-none border-bttm-onhvoer pr-3 w-100" maxlength="30">
            </div>

            <div class="row mt-3">
              <div class="col">
                <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">
              </div>
              <div class="col">
                <input type="button" class="btn btn-primary bg-primary float-right font-14" value="Save">
              </div>
            </div>
          </div>

          <div id="reminder" class="container tab-pane fade"><br>
            
            <div class="today_events sidebar_left m-0 w-100 p-0">
                
                <div class="today_event_header">
                  <div class="d-flex flex-wrap align-items-center">
                      <h2 class="title text-theme font-16 mb-2 w-100 pl-0">Your Agendaa</h2>
                      <div class="position-relative mysearch-box w-100 d-inline-block float-right">
                        <input class="form-control mb-4 mysearch focus-none border-r-5 border-0 pl-2 border" type="text" id="serchBox" placeholder="Search more" style="background: #edf3ff;">
                        <span class="position-absolute text-theme" style="right: 13px; top:5px;">
                          <i class="fa fa-search"></i>
                        </span>
                      </div>
                      <h2 class="title text-secondary font-14 pl-0">6 October :</h2>
                  </div>
                </div>

                <div class="events_content mt-3">
                    <div class="w-40 float-left border-r-5-orange mb-3">
                        <p class="font-16 text-theme mb-2">08:30 AM</p>
                        <p class="font-12 text-secondary">09:00 AM</p>
                    </div>
                    <div class="pl-4 w-60 float-left">
                        <p class="font-14 text-secondary mb-2">Marketing</p>
                        <p class="font-14 text-dark">3 categories of rocks</p>
                    </div>
                </div>
                <div class="events_content my-3 clearfix pl-0">
                    <div class="w-40 float-left border-r-5-theme">
                        <p class="font-16 text-theme mb-2">08:30 AM</p>
                        <p class="font-12 text-secondary">09:00 AM</p>
                    </div>
                    <div class="pl-4 w-60 float-left">
                        <p class="font-14 text-secondary mb-2">Marketing</p>
                        <p class="font-14 text-dark">3 categories of rocks</p>
                    </div>
                </div>
            </div>

          </div>

          <div id="tasks" class="tab-pane fade">
            <div class="d-flex border-bottom p-3">
              <div class="text-theme">Today
                <a href="javascript:void(0)" class="text-dark pl-3">
                  <i class="fa fa-angle-left font-20"></i>
                </a>
                <a href="javascript:void(0)" class="text-dark pl-3">
                  <i class="fa fa-angle-right font-20"></i>
                </a>
              </div>
              <div class="ml-auto">
                <a href="javascript:void(0)" class="text-dark">
                  <i class="fa fa-ellipsis-v"></i>
                </a>
              </div>
            </div>


            <div class="table-responsive overflow-auto scroll-design" style="max-height: 392px;">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td class="w-20 font-10 pt-3 text-right">GMT+02</td>
                    <td class=""></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">8 AM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">9 AM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">10 AM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">11 AM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">12 PM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">1 PM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">2 PM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">3 PM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">4 PM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">5 PM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">6 PM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">7 PM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">8 PM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                  <tr>
                    <td class="w-20 font-10 pt-4 pr-2 text-right">9 PM</td>
                    <td class="border-bottom calendar-clicks"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>      
    </div>

  </div>
</div>

