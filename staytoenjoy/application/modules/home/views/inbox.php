<?php include 'include/header.php';?>

  <body class="shadow-none">
    
    <?php include 'include/after-login-header.php';?>
    
    <main role="main">

    <?php include 'include/blue-tab-header.php';?>

    <section class="content-sec bg-light-blue py-0 overflow-hidden" style="height: calc(100vh - 113px);">
      
      <div class="container-fluid bg-white h-100"><!--  mini-container -->
        <!-- Example row of columns -->
        <div class="row">
          
          <div class="col-lg-8 col-md-4 offset-lg-2">
            <!--<h1 class="mb-4 font-weight-normal">Settings</h1>-->
          </div>
        </div>

        <!-- Top header of search or collapse inbox text - start -->
        <div class="row border-bottom">
          <div class="w-15 px-0 text-secondary left-inbox-hide">
            <div class="bg-light-blue py-3 h-100 d-flex align-items-center font-14">
              <a href="javascript:void(0)" class="text-secondary py-2 px-3" id="left-inbox-clps"><i class="fa fa-bars"></i></a>
              <h4 class="m-0 pb-1 add-hide-me">Inbox</h4>
            </div>
          </div>
          <div class="w-25 text-secondary border-right">
            <div class="bg-white p-3 h-100 d-flex align-items-center font-14">
              <i class="fa fa-search"></i>
              <input type="search" placeholder="Search" class="border-0 p-2 pl-3 w-100 focus-none">
              <div class="dropdown hide-caret">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog pt-1 text-theme font-23"></i></a>
                <div class="white-bx-cst-shdow shadow-lg w-200px border-0 dropdown-menu mt-3">
                  <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)">Settings</a>
                  <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Mute</a>
                  <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Delete All</a>
                  <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Mark all as read</a>
                  <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Mark as Unread</a>
                  <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)">Active Contacts</a>
                  <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Message Requests</a>
                  <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Archived Threads</a>
                  <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)">Unread Threads</a>
                  <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Help</a>
                  <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Report a Problem</a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-30 px-0 text-secondary border-left">
            <div class="bg-white h-100 d-flex justify-content-around align-items-center font-14">
              <div class="dropdown">
                <img src="img/colors-img.svg" role="button" data-toggle="dropdown">
                <div class="dropdown-menu shadow-lg px-3 border-r-10 mt-3" style="width: 360px;">
                  <div class="d-block">Title</div>
                  <input type="text" placeholder="Add your title" class="w-100 p-2 my-2 border text-muted" style="border-radius: 5px;">
                  <hr class="bg-secondary">

                  <div class="w-100 d-block">
                    <div class="d-block mb-2">Add color label</div>
                    <div class="rounded-circle mb-2 bg-color-1 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                    <div class="rounded-circle mb-2 bg-color-2 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                    <div class="rounded-circle mb-2 bg-color-3 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                    <div class="rounded-circle mb-2 bg-color-4 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>

                    <div class="rounded-circle mb-2 bg-color-5 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                    <div class="rounded-circle mb-2 bg-color-6 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                    <div class="rounded-circle mb-2 bg-color-7 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                    <div class="rounded-circle mb-2 bg-color-8 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>

                    <div class="rounded-circle mb-2 bg-color-9 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                    <div class="rounded-circle mb-2 bg-color-10 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                    <div class="rounded-circle mb-2 bg-color-11 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                    <div class="rounded-circle mb-2 bg-color-12 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="height-1 w-100 d-block my-3"></div>
                  <input type="button" class="btn btn-primary bg-danger border font-12 py-1 px-3" value="Cancel">
                  <input type="button" class="btn btn-primary bg-primary float-right font-12 py-1 px-3" value="Apply">
                </div>
              </div>
              <label class="position-relative mb-0 mt-1 tooltip-hover">
                <img src="img/calendar-grey.svg" style="width: 22px;">
                
                <div class="position-absolute tooltip-inner" style="top: 25px;">Go to calander</div>
              </label>
              <label class="position-relative mb-0 tooltip-hover">
                <img src="img/spam-icon.svg">
                <div class="position-absolute tooltip-inner">Mark as Spam</div>
              </label>
              <label class="position-relative mb-0 tooltip-hover">
                <img src="img/star-inbox-icon.svg">
                <div class="position-absolute tooltip-inner">Important</div>
              </label>
              <label class="position-relative mb-0 tooltip-hover">
                <img src="img/envelope-inbox-icon.svg">
                <div class="position-absolute tooltip-inner">New Message</div>
              </label>
              <div class="px-2 py-1 mark-done-hover"> Mark as done <img src="img/check-inbox-icon.svg" class="pb-2px"></div>
            </div>
          </div>
          <div class="w-25 px-0 text-secondary ml-auto">
            <div class="bg-white h-100 d-flex justify-content-end align-items-center font-14 pr-5">
              <label class="position-relative mb-0 tooltip-hover">
                <img src="img/phone-inbox-icon.svg" style="width: 20px;">
                <div class="position-absolute tooltip-inner">Phone Call</div>
              </label>
              <label class="position-relative mb-0 tooltip-hover ml-30px pr-5">
                <img src="img/video-inbox-icon.svg" style="width: 25px;">
                <div class="position-absolute tooltip-inner">Video Call</div>
              </label>
            </div>
          </div>


        </div><!-- Top header of search or collapse inbox text - end -->

        <div class="row position-relative">
          <div class="w-15 px-0 bg-light-blue left-inbox-hide">
            <div class="overflow-auto scroll-design" style="max-height:calc(100vh - 184px)">
              <div class="d-flex py-4 px-3 hover-grey">
                <button class="btn btn-primary bg-theme m-auto border-0"><i class="fa fa-edit"></i>
                  <span class="add-hide-me">Create New</span>
                </button>
              </div>
              <div class="d-flex py-2 px-4 hover-grey line-left blue-line">
                <a href="javascript:void(0)" class="text-dark hide-me"><i class="fa fa-inbox pt-1"></i>
                  <div class="d-inline-block pl-2 font-14">Inbox</div>
                </a>
              </div>
              <div class="d-flex py-2 px-4 hover-grey line-left blue-line">
                <a href="javascript:void(0)" class="text-dark hide-me">
                  <img src="img/chat-black.svg" style="width: 20px; height: 20px">
                  <div class="d-inline-block pl-2 font-14">Chat</div>
                </a>
              </div>
              <div class="d-flex py-2 px-4 hover-grey line-left blue-line">
                <a href="javascript:void(0)" class="text-dark hide-me"><i class="fa fa-paper-plane pt-1"></i>
                  <div class="d-inline-block pl-2 font-14">Send</div>
                </a>
              </div>
              <div class="d-flex py-2 px-4 hover-grey line-left blue-line">
                <a href="javascript:void(0)" class="text-dark hide-me"><i class="fa fa-file pt-1"></i>
                  <div class="d-inline-block pl-2 font-14">Draft</div>
                </a>
              </div>
              <div class="d-flex py-2 px-4 hover-grey line-left blue-line">
                <a href="javascript:void(0)" class="text-dark hide-me"><i class="fa fa-envelope pt-1"></i>
                  <div class="d-inline-block pl-2 font-14">Unread</div>
                </a>
              </div>
              <div class="d-flex py-2 px-4 hover-grey line-left blue-line">
                <a href="javascript:void(0)" class="text-dark hide-me"><i class="fa fa-trash pt-1"></i>
                  <div class="d-inline-block pl-2 font-14">Trash</div>
                </a>
              </div>
              <div class="d-flex py-2 px-4 hover-grey line-left blue-line">
                <a href="javascript:void(0)" class="text-dark hide-me"><i class="fa fa-calendar pt-1"></i>
                  <div class="d-inline-block pl-2 font-14">Calender</div>
                </a>
              </div>
              <div class="d-flex py-2 px-4 hover-grey line-left blue-line">
                <a href="javascript:void(0)" class="text-dark hide-me"><i class="fa fa-home pt-1"></i>
                  <div class="d-inline-block pl-2 font-14">Automated Responses</div>
                </a>
              </div>
              <div class="d-flex py-2 px-4 hover-grey line-left blue-line">
                <a href="javascript:void(0)" class="text-dark hide-me"><i class="fa fa-user pt-1"></i>
                  <div class="d-inline-block pl-2 font-14">Your Profile</div>
                </a>
              </div>
              <div class="d-flex py-2 px-4 hover-grey line-left blue-line">
                <a href="javascript:void(0)" class="text-dark hide-me"><i class="fa fa-support pt-1"></i>
                  <div class="d-inline-block pl-2 font-14">Help Center</div>
                </a>
              </div>
            </div>
          </div>
          <div class="w-25 px-0">
            <div class="overflow-auto scroll-design" style="max-height:calc(100vh - 184px)">
            <?php 
              for ($x = 0; $x <= 5; $x++) {
            ?>
            <div class="bg-white">
              <div class="d-flex border-bottom font-14 py-2 px-3 my-0 hover-grey line-left" href="javascript:void(0)">
                <div class="notif-box-one">
                  <div class="profile-pic position-relative">
                    <img src="img/profile-img.jpg" class="w-100">
                    <div class="online-circle green position-absolute rounded-circle"></div>
                  </div>
                </div>
                <div class="notif-box-two pl-2 w-100">
                  <div class="w-100">
                    <p class="text-dark mb-0 d-inline-block font-weight-bold pt-2">Deepak K.</p>
                    <span class="text-secondary font-12 pt-2 float-right"><span class="text-theme">Thu</span> 7.30 pm</span>
                  </div>
                  <div class="w-100 mt--5px">
                    <span class="text-secondary font-12 w-100">liked your picture,
                      <span class="dropdown hide-caret">
                        <a href="javascript:void(0)" class="setting-hover pr-3 dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog float-right clearfix pt-2 text-dark"></i></a>
                        <div class="white-bx-cst-shdow shadow-lg w-200px border-0 dropdown-menu mt-3 z-index-99">
                          <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)">Mute</a>
                          <a class="dropdown-item font-14 border-bottom py-2 hover-red" href="javascript:void(0)">Delete</a>
                          <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Mark as Unread</a>
                          <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Something's Wrong</a>
                          <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)">Ignore Messages</a>
                          <a class="dropdown-item font-14 py-2 hover-red" href="javascript:void(0)">Block Messages</a>
                        </div>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
              <div class="d-flex border-bottom font-14 py-2 px-3 my-0 hover-grey line-left" href="javascript:void(0)">
                <div class="notif-box-one">
                  <div class="profile-pic position-relative">
                    <img src="img/profile-img.jpg" class="w-100">
                    <div class="online-circle red position-absolute rounded-circle"></div>
                  </div>
                </div>
                <div class="notif-box-two pl-2 w-100">
                  <div class="w-100">
                    <p class="text-dark mb-0 d-inline-block font-weight-bold pt-2">Deepak K.</p>
                    <span class="text-secondary font-12 pt-2 float-right"><span class="text-theme">Thu</span> 7.30 pm</span>
                  </div>
                  <div class="w-100 mt--5px">
                    <span class="text-secondary font-12">liked your picture,
                      <a href="javascript:void(0)" class="setting-hover pr-3"><i class="fa fa-cog float-right clearfix pt-2 text-dark"></i></a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            </div>
          </div>

          <div class="w-45 px-0 border-left" id="chat-inbox-hide">
            <div class="bg-white h-100 font-14 position-relative">

              <div class="h-100 p-3 overflow-auto scroll-design pr-5 chat" style="max-height: calc(100vh - 268px)">
                <?php
                  for ($x = 0; $x <= 10; $x++) {
                ?>
                <div class="d-flex border-r-25 mw-75 mb-3 bg-secondary clearfix" style="width:fit-content;">
                  <div class="notif-box-one">
                    <div class="profile-pic border">
                      <img src="img/profile-img.jpg" class="w-100">
                    </div>
                  </div>
                  <div class="notif-box-two px-3 py-2">
                    <div class="w-100">
                      <p class="text-theme-blue mb-0 d-inline-block font-weight-bold">Claudie Gradisch</p>
                      <span class="font-12 pl-2">thanks. I appriciate it very much</span>
                    </div>
                  </div>
                </div>

                <div class="d-flex border-r-25 mw-75 mb-3 bg-light-theme float-right clearfix mr-3">
                  <div class="notif-box-two px-3 py-2">
                    <div class="w-100">
                      <div class="font-12 pl-2 pt-1 text-white">thanks. I appriciate it very much</div>
                    </div>
                  </div>
                  
                </div>
                <?php } ?>
              </div>
              <div class="position-absolute w-100 l-0 b-0 p-3 border-top bg-white pr-5">
                <label class="position-relative w-100 pr-3">
                  <input type="text" placeholder="Type your text on here" class="border w-100 border-r-25 p-3 focus-outline-none px-5" style="padding-right: 35%!important;">
                  <div class="position-absolute l-25 t-20">
                    <a href="javascript:void(0)" class="text-dark">
                      <i class="fa fa-microphone"></i>
                    </a>
                  </div>
                  <div class="position-absolute t-10 r-30">
                    <a href="javascript:void(0)" class="text-dark">
                      <i class="fa fa-paperclip va-text-b pr-3 pt-2"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark">
                      <i class="fa fa-picture-o va-text-b pr-3"></i>
                    </a>
                    <button class="btn btn-primary bg-theme border-0 px-3 font-14">Send
                      <i class="fa fa-paper-plane pl-2"></i>
                    </button>
                  </div>
                </label>
              </div>
            </div>
          </div>


          <div class="position-absolute py-3 t-0 b-0 r-15p border-left border-right z-index-99 bg-white" id="rp-15">
            <a href="javascript:void(0)" class="text-warning pb-4 px-3 d-block" id="right-inbox-clps"><i class="fa fa-file-o"></i></a>
            <a href="javascript:void(0)" class="pb-4 px-3 d-block"><i class="fa fa-edit"></i></a>
            <a href="javascript:void(0)" class="text-dark pb-4 px-3 d-block"><i class="fa fa-plus"></i></a>
          </div>
          <div class="w-15 px-0 right-hide-me position-relative">

            <div class="bg-white h-100 font-14">
              <div class="d-flex justify-content-end align-items-center border-bottom p-3">
                <div class="mr-auto">Keep <br> <b> Notes </b></div>
                <a href="javascript:void(0)" class="pl-3"><i class="fa fa-search text-dark"></i></a>
                <a href="javascript:void(0)" class="pl-3">
                  <img src="img/share-icon.svg" class="w-18px share-icon text-dark">
                </a>
                <a href="javascript:void(0)" class="pl-3"><i class="fa fa-close text-dark"></i></a>
              </div>
              <div class="d-flex justify-content-start align-items-center pr-3 py-3 pl-2">
                <button class="btn btn-primary bg-white border-0 text-dark focus-none hover-grey" data-toggle="modal" data-target="#inbox-popup">
                  <i class="fa fa-plus text-dark pr-2"></i> Take a note...
                </button>
                <a href="javascript:void(0)" class="pl-3 ml-auto"><i class="fa fa-filter text-dark"></i></a>
              </div>
              <div class="border border-radius mx-3 border-r-10 py-2">
                <div class="d-flex justify-content-end align-items-center px-3 border-bottom">
                  <div class="w-75 text-left mr-auto font-13 pr-3 font-weight-bold text-theme">Latest Note</div>
                  <div class="dropdown hide-caret">
                    <a href="javascript:void(0)" class="btn btn-primary  bg-transparent border-0 dropdown-toggle focus-none" data-toggle="dropdown">
                      <i class="fa fa-ellipsis-h text-dark"></i>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item hover-theme" href="javascript:void(0)">Edit</a>
                      <a class="dropdown-item hover-theme" href="javascript:void(0)">Archive</a>
                      <a class="dropdown-item hover-red" href="javascript:void(0)">Delete</a>
                    </div>
                  </div>
                  <a href="javascript:void(0)" class="text-dark"><i class="fa fa-map-pin"></i></a>
                </div>
                <div class="p-3">
                  <div>Event</div>
                  <div>Here we display what...</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="inbox-popup" tabindex="-1" role="dialog">
          <div class="modal-dialog d-flex align-items-center justify-content-center h-100 my-0" role="document">
            <div class="modal-content border-radius-20">
              <div class="modal-body p-0 text-center">
                <div class="d-flex justify-content-end align-items-center px-3 mt-3 border-bottom">
                  <div class="w-75 text-left mr-auto text-theme">New</div>
                  <div class="dropdown hide-caret">
                    <a href="javascript:void(0)" class="btn btn-primary bg-transparent border-0 dropdown-toggle focus-none" data-toggle="dropdown">
                      <i class="fa fa-ellipsis-h text-dark"></i>
                    </a>
                    <div class="dropdown-menu" style="left: 108px!important;">
                      <a class="dropdown-item hover-theme" href="javascript:void(0)">Archive</a>
                      <a class="dropdown-item hover-red" href="javascript:void(0)">Delete</a>
                    </div>
                  </div>
                  <a href="javascript:void(0)" class="text-black-normal hover-theme"><i class="fa fa-map-pin"></i></a>
                </div>
                <div class="d-flex justify-content-end align-items-center px-3 mt-3">
                  <div class="w-100 text-left mr-auto"><input type="text" placeholder="Title" class="border-0 font-19 focus-none pr-3 w-100"></div>
                </div>
                <textarea class="w-100 border-0 focus-none px-3 scroll-d-none font-14 message-box" placeholder="Take a note..."></textarea>
                <div class="d-flex justify-content-end pr-3">
                  <div class="ml-auto font-13 mb-2">Bearbeitet: 11:48</div>
                </div>
                <hr class="mt-0">
                <div class="d-flex justify-content-start align-items-end p-3" style="height: 45px;">
                  <div class="d-inline-block dropdown hide-caret px-3">
                    <div class="dropdown-toggle position-relative" role="button" data-toggle="dropdown">
                      <a href="javascript:void(0)" class="text-black-normal hover-theme"><i class="fa fa-bell-o font-19"></i></a>
                      <div class="white-bx-cst-shdow border-0 dropdown-menu profile-tab-big mt-3">
                        <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)"> Remider:</a>
                        <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)">Later today<span class="float-right font-12">8:00 PM</span></a>
                        <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)">Tomorrow<span class="float-right font-12">8:00 AM</span></a>
                        <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)">Next week<span class="float-right font-12">Mon, 8:00 AM</span></a>
                        <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-clock-o pr-1"></i> Next week</a>
                        <a class="dropdown-item font-14 py-2 hover-theme" href="javascript:void(0)"><i class="fa fa-map-marker pr-2"></i> Pick place</a>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0)" class="text-black-normal hover-theme px-3">
                    <i class="fa fa-user-plus font-19"></i>
                  </a>
                  <div class="dropdown px-2">
                    <img src="img/colors-img.svg" class="mb-1" role="button" data-toggle="dropdown" aria-expanded="true">
                    <div class="dropdown-menu shadow-lg px-1 pb-3 border-r-10 mt-3 w-200px">
                      <div class="w-100 d-block">
                      <div class="d-block mb-4 font-16 border-bottom pb-2 text-center">Add Color Label</div>
                      <div class="rounded-circle mb-2 bg-color-1 d-inline-block w-h-22 text-white text-center font-12 pt-3px ml-3"><i class="fa fa-check text-white"></i></div>
                      <div class="rounded-circle mb-2 bg-color-2 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                      <div class="rounded-circle mb-2 bg-color-3 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                      <div class="rounded-circle mb-2 bg-color-4 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>

                      <div class="rounded-circle mb-2 bg-color-5 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                      <div class="rounded-circle mb-2 bg-color-6 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                      <div class="rounded-circle mb-2 bg-color-7 d-inline-block w-h-22 text-white text-center font-12 pt-3px ml-3"><i class="fa fa-check text-white"></i></div>
                      <div class="rounded-circle mb-2 bg-color-8 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>

                      <div class="rounded-circle mb-2 bg-color-9 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                      <div class="rounded-circle mb-2 bg-color-10 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                      <div class="rounded-circle mb-2 bg-color-11 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                      <div class="rounded-circle mb-2 bg-color-12 d-inline-block w-h-22 text-white text-center font-12 pt-3px"><i class="fa fa-check text-white"></i></div>
                      <div class="clearfix"></div>
                      </div>
                      <div class="height-1 w-100 d-block mt-3" style="margin-bottom: 12px!important;"></div>
                      <div class="text-center m-auto mb-2">
                        <input type="button" class="btn btn-primary bg-primary font-12 py-1 px-5 text-center m-auto" value="Apply">
                      </div>
                    </div>

                  </div>
                  <a href="javascript:void(0)" class="text-black-normal hover-theme px-3">
                    <i class="fa fa-picture-o font-19"></i>
                  </a>
                  <a href="javascript:void(0)" class="text-black-normal hover-theme px-3">
                    <i class="fa fa-download font-19"></i>
                  </a>
                  <a href="javascript:void(0)" class="text-black-normal hover-theme px-3">
                    <i class="fa fa-ellipsis-h font-19"></i>
                  </a>
                  <input type="button" value="done" class="btn btn-primary bg-theme ml-auto font-13 text-white border-0 focus-none">
                </div>
              </div>
            </div>
          </div>
        </div> 

        
        
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->

    </main> <!-- /main -->

    

    <!-- Bootstrap JavaScript start -->


<script type="text/javascript">
  $(document).ready(function(){
    $('#left-inbox-clps').click(function() {
      $(".left-inbox-hide").toggleClass('w-15 w-5');
      $("#left-inbox-clps").toggleClass('m-auto');
      $(".left-inbox-hide .hide-me > div").toggleClass('d-inline-block d-none');
      $(".left-inbox-hide .hide-me").toggleClass('m-auto');
      $(".add-hide-me").toggleClass('d-none');
      $("#chat-inbox-hide").toggleClass('w-45 w-55');
      $('#right-inbox-clps').on('click', function(){
        $("#chat-inbox-hide").toggleClass('w-60 w-70');
      });
    });
    $(".message-box").on('input', function() {
      var scroll_height = $(".message-box").get(0).scrollHeight;
      $(".message-box").css('height', scroll_height + 'px');
    });
    $('#right-inbox-clps').click(function() {
      $(".right-hide-me").toggleClass('d-none');
      $("#rp-15").toggleClass('r-0 r-15p');
      $("#chat-inbox-hide").toggleClass('w-45 w-60');
      $('#left-inbox-clps').on('click', function(){
        $("#chat-inbox-hide").toggleClass('w-60 w-70');
        $(".right-hide-me").toggleClass('d-block');
      });
    });
  });
  
</script>

  </body>
</html>
