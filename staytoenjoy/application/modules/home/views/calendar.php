<?php include 'include/header.php';?>

  <body class="shadow-none">
    
    <?php include 'include/after-login-header.php';?>
    
    <main role="main">

    <?php include 'include/blue-tab-header.php';?>


      <div class="caleder-header">
        <div class="container-fluid ">
          <div class="row align-items-center">
              <div class="w-20 px-2 my_callender">
                <a href="javascript:void(0)" class="text-secondary py-2 px-3" id="left-inbox-clps"><i class="fa fa-bars"></i></a>
                <h4 class="m-0 add-hide-me d-inline-block">My Calender</h4>
              </div>
              <div class="w-50 px-2 border-l-r data_part">
                <div class="d-flex flex-wrap justify-content-start w-100 align-items-center">
                    <div class="pl-3">
                        <button type="button" class="today_btn">Today</button>
                    </div>
                    <div class="d-flex pl-5">
                        <div class="clemder-navigation999">
                            <div class="btn-group  arrow_btn_part">
                                <button type="button" class="btn"><i class="fa fa-angle-left"></i></button>
                                <button type="button" class="btn"><i class="fa fa-angle-right"></i></button>
                            </div>
                            <p>Apr-May 2019</p>
                            <button type="button" class="today_btn week_btn">Week 18</button>
                        </div>
                    </div>
                    <div class="d-flex ml-auto pr-3">
                        <div class="cal-sett-imgs">
                            <ul>
                                <li>
                                    <a href="#" class="sel-yeatdaymonth sel-yeatdaymonth11" id="cahngeyear-open" style="display: none;">Month <i class="fa fa-angle-down"></i></a>
                                    <a href="#" class="sel-yeatdaymonth sel-yeatdaymonth11" style="" id="cahngeyear-open1">Week <i class="fa fa-angle-down"></i></a>
                                    <a href="#" class="sel-yeatdaymonth sel-yeatdaymonth11" style="display:none" id="cahngeyear-open2">Day <i class="fa fa-angle-down"></i></a>
                                    <a href="#" class="sel-yeatdaymonth sel-yeatdaymonth11" style="display:none" id="cahngeyear-open3">Year <i class="fa fa-angle-down"></i></a>
                                    <div id="cahngeyear">
                                        <div class="notificationsBody cahngeyearbody">
                                            <ul>
                                                <li><a href="#" id="show-daycal">DAY</a></li>
                                                <li><a href="#" id="show-weekcal">WEEK</a></li>
                                                <li><a href="#" id="show-yearcal">MONTH</a></li>
                                                <li><a href="#" id="show-monthcal">YEAR</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
              <div class="w-30 px-2">
                <ul class="d-flex align-items-center justify-content-end">
                  <li><a href="javascript:void(0)" class="text-secondary px-5 font-19"><i class="fa fa-search"></i></a></li>
                  <li><a href="javascript:void(0)" class="text-secondary px-5 font-19"><i class="fa fa-question-circle"></i></a></li>
                  <li><a href="javascript:void(0)" class="text-secondary px-5 font-19"><i class="fa fa-cog"></i></a></li>
                  <li><a href="javascript:void(0)" class="text-secondary px-5 font-19"><i class="fa fa-bell"></i></a></li>
                  <li><a href="javascript:void(0)" class="text-secondary px-5 font-19"><i class="fa fa-th"></i></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>







      <div class="claneder-main-section">
        <div class="wrapper11 d-flex flex-wrap position-relative">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="w-20 bg-white px-2 scroll-design left-inbox-hide">
          <div class="row">
            <div class="d-flex py-4 px-4 hover-grey w-100 border-bottom">
              <button class="btn btn-primary bg-theme m-auto"><i class="fa fa-edit"></i>
                <span class="add-hide-me">Create New</span>
              </button>
            </div>
            <div class="sidebar-cal sidebar_left">
                <div id="pb-calendar" class="pb-calendar">
                    <div class="top-frame">
                        <div class="year-month-frame"><span class="year">2019</span><span class="month">May</span></div>
                        <div class="control-frame">
                        <a href="javascript:void(0)" class="control-btn prev-btn">
                          <i class="icon fa fa-angle-left font-weight-bold"></i>
                        </a>
                        <a href="javascript:void(0)" class="control-btn next-btn">
                          <i class="icon fa fa-angle-right font-weight-bold"></i>
                        </a></div>
                    </div>
                    <div class="calendar-head-frame">
                        <div class="row row-dayname">
                            <div class="col col-dayname holiday pl-3">S</div>
                            <div class="col col-dayname">M</div>
                            <div class="col col-dayname">T</div>
                            <div class="col col-dayname">W</div>
                            <div class="col col-dayname">T</div>
                            <div class="col col-dayname">F</div>
                            <div class="col col-dayname">S</div>
                        </div>
                    </div>
                    <div class="calendar-body-frame">
                        <div class="row row-day">
                            <div class="col before-month holiday" data-day-yyyymmdd="20190428">28
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col before-month" data-day-yyyymmdd="20190429">29
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col before-month" data-day-yyyymmdd="20190430">30
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190501">01
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190502">02
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190503">03
                                <div class="schedule-dot-list"><span class="schedule-dot-item red" data-schedule-id="1"></span></div>
                            </div>
                            <div class="col  holiday" data-day-yyyymmdd="20190504">04
                                <div class="schedule-dot-list"></div>
                            </div>
                        </div>
                        <div class="row row-day">
                            <div class="col  holiday" data-day-yyyymmdd="20190505">05
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190506">06
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190507">07
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190508">08
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190509">09
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190510">10
                                <div class="schedule-dot-list"><span class="schedule-dot-item red" data-schedule-id="2"></span><span class="schedule-dot-item blue" data-schedule-id="3"></span></div>
                            </div>
                            <div class="col  holiday" data-day-yyyymmdd="20190511">11
                                <div class="schedule-dot-list"></div>
                            </div>
                        </div>
                        <div class="row row-day">
                            <div class="col  holiday" data-day-yyyymmdd="20190512">12
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190513">13
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190514">14
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190515">15
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190516">16
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190517">17
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col  holiday" data-day-yyyymmdd="20190518">18
                                <div class="schedule-dot-list"></div>
                            </div>
                        </div>
                        <div class="row row-day">
                            <div class="col  holiday" data-day-yyyymmdd="20190519">19
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190520">20
                                <div class="schedule-dot-list"><span class="schedule-dot-item red" data-schedule-id="4"></span><span class="schedule-dot-item blue" data-schedule-id="5"></span><span class="schedule-dot-item green" data-schedule-id="6"></span></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190521">21
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190522">22
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190523">23
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190524">24
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col  holiday" data-day-yyyymmdd="20190525">25
                                <div class="schedule-dot-list"></div>
                            </div>
                        </div>
                        <div class="row row-day">
                            <div class="col  holiday" data-day-yyyymmdd="20190526">26
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190527">27
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190528">28
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190529">29
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190530">30
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190531">31
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col after-month holiday" data-day-yyyymmdd="20190601">01
                                <div class="schedule-dot-list"></div>
                            </div>
                        </div>
                        <div class="row row-day">
                            <div class="col  holiday" data-day-yyyymmdd="20190526">26
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190527">27
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190528">28
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190529">29
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190530">30
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190531">31
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col after-month holiday" data-day-yyyymmdd="20190601">01
                                <div class="schedule-dot-list"></div>
                            </div>
                        </div>
                        <div class="row row-day">
                            <div class="col  holiday" data-day-yyyymmdd="20190526">26
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190527">27
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190528">28
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190529">29
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190530">30
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col " data-day-yyyymmdd="20190531">31
                                <div class="schedule-dot-list"></div>
                            </div>
                            <div class="col after-month holiday" data-day-yyyymmdd="20190601">01
                                <div class="schedule-dot-list"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="today_events sidebar_left">
                <div class="today_event_header">
                    <div class="d-flex flex-wrap align-items-center">
                        <h2 class="title text-theme font-16 mb-2 w-100">Your Agenda
                            <a href="javascript:void(0)"><i class="fa fa-search float-right pr-3 pt-1"></i></a>
                        </h2>
                        <h2 class="title text-secondary font-14">6 October :</h2>
                    </div>
                </div>
                <div class="events_content px-2 mt-4">
                    <div class="w-40 float-left border-r-5-orange mb-3">
                        <p class="font-16 text-theme mb-2">08:30 AM</p>
                        <p class="font-12 text-secondary">09:00 AM</p>
                    </div>
                    <div class="pl-4 w-60 float-left">
                        <p class="font-14 text-secondary mb-2">Marketing</p>
                        <p class="font-14 text-dark">3 categories of rocks</p>
                    </div>
                </div>
                <div class="events_content px-2 mt-3 clearfix">
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
            <div class="upcoming_events sidebar_left">
                <div class="upcoming_events_header">
                    <div class="d-flex flex-wrap align-items-center">

                    </div>
                </div>
            </div>
          </div>
        </nav>

        <!-- Page Content Holder -->
        <div class="w-65 px-2 bg-white" id="center-calendar">
          <div class="row">
            <div id="content">
              <div class="yearcalender-div w-100">
                <div class="table-responsive">
                  <table>
                    <thead>
                      <tr>
                        <td>
                          <a href="javascript:void(0);"><span class="timezone">Gmt</span><i class="fa fa-angle-down"></i>
                          </a>
                        </td>
                        <td class="active">
                            <p class="day">Sun</p>
                            <p class="date">28</p>
                        </td>
                        <td>
                            <p class="day">mon</p>
                            <p class="date">29</p>
                        </td>
                        <td>
                            <p class="day">tue</p>
                            <p class="date">30</p>
                        </td>
                        <td>
                            <p class="day">wed</p>
                            <p class="date">1</p>
                        </td>
                        <td>
                            <p class="day">thu</p>
                            <p class="date">2</p>
                        </td>
                        <td>
                            <p class="day">fri</p>
                            <p class="date">3</p>
                        </td>
                        <td>
                            <p class="day">sat</p>
                            <p class="date">4</p>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td rowspan="6">
                          <span class="time">10 am</span>
                          <span class="time">11 am</span>
                          <span class="time">12 am</span>
                          <span class="time">1 pm</span>
                          <span class="time">2 pm</span>
                          <span class="time">3 pm</span>
                          <span class="time">4 pm</span>
                          <span class="time">6 pm</span>
                          <span class="time">7 pm</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
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
                        <a class="dropdown-item font-14 border-bottom py-2 hover-theme" href="javascript:void(0)"> Reminder:</a>
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

      </div>
    </div>




    </main> <!-- /main -->

    

    <!-- Bootstrap JavaScript start -->


<script type="text/javascript">
  $(document).ready(function(){
    $('#left-inbox-clps').click(function() {
      $('#sidebar').toggleClass('d-none');
      $("#center-calendar").toggleClass('w-65 w-80');
      $('#right-inbox-clps').on('click', function(){
        $("#center-calendar").toggleClass('w-80 w-100');
      });
    });
    
    $('#right-inbox-clps').click(function() {
      $(".right-hide-me").toggleClass('d-none');
      $("#center-calendar").toggleClass('w-65 w-80');
      $("#rp-15").toggleClass('r-0 r-15p');
      $('#left-inbox-clps').on('click', function(){
        $("#center-calendar").toggleClass('w-80 w-100');
      });
    });
  });
  
</script>

<script>
  $(document).ready(function(){
    $(".sel-yeatdaymonth11").click(function(event) {
      event.preventDefault();
            $("#cahngeyear").fadeToggle(300);
            return false;
        });
  });
</script>

<!-- <script>
  $("#pb-calendar").pb_calendar();
</script> -->

<script type="text/javascript">
jQuery(document).ready(function(){

  var current_yyyymm_ = moment().format("YYYYMM");

  $("#pb-calendar").pb_calendar({
    schedule_list : function(callback_, yyyymm_){
      var temp_schedule_list_ = {};

      temp_schedule_list_[current_yyyymm_+"03"] = [
        {'ID' : 1, style : "red"}
      ];

      temp_schedule_list_[current_yyyymm_+"10"] = [
        {'ID' : 2, style : "red"},
        {'ID' : 3, style : "blue"},
      ];

      temp_schedule_list_[current_yyyymm_+"20"] = [
        {'ID' : 4, style : "red"},
        {'ID' : 5, style : "blue"},
        {'ID' : 6, style : "green"},
      ];
      callback_(temp_schedule_list_);
    },
    schedule_dot_item_render : function(dot_item_el_, schedule_data_){
      dot_item_el_.addClass(schedule_data_['style'], true);
      return dot_item_el_;
    }
  });
});

$(".message-box").keydown(function(e) {
    while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
        $(this).height($(this).height()+1);
    };
});

</script>

  </body>
</html>
