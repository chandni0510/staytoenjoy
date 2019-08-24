<?php include 'include/header.php';?>
    
    <main role="main">


    <div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="<?php echo base_url('home/payment_detail')?>" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover">Add Payment Method</a></li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/trans_history');?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover active">Transaction History</a></li>
        </ul>
      </div>
    </div>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      
    <section class="content-sec bg-light-blue pt-0">
      <div class="container-fluid"><!--  mini-container -->
        <!-- Example row of columns -->
        <div class="row">
          
          <div class="col-lg-8 col-md-4 offset-lg-2">
            <!--<h1 class="mb-4 font-weight-normal">Settings</h1>-->
          </div>
        </div>

        <div class="row mt-5">
          <div class="w-15 position-md-fixed px-0 h-100 left-inbox-hide">
            <?php include 'include/left-settings-tab.php';?>
          </div>

          <div class="w-63 offset-w-15 center-inbox-hide pr-2">
            <div class="border p-3 pb-4 mb-4 profile-setting bg-white border-r-10">
              
              <div class="contactForm">
                <h6 class="font-weight-bold text-dark mt-3">Transaction History <i class="fa fa-info-circle"></i></h6>
                <hr class="mt-4">
                <p class="text-secondary font-13">The monkey-rope is found in all whalers; but it was only in the Pequod that the monkey and his holder were ever tied together.</p>
                <nav class="mt-3">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active text-dark font-12 mx-2 px-0" data-toggle="tab" href="#complt-trans"> Completed Transactions</a>
                    <a class="nav-item nav-link text-dark font-12 mx-2 px-0" data-toggle="tab" href="#future-trans"> Future Transactions</a>
                    <a class="nav-item nav-link text-dark font-12 mx-2 px-0" data-toggle="tab" href="#gross-erning"> Gross Earning</a>
                  </div>
                </nav>
                <div class="tab-content my-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="complt-trans">
                    <div class="contactForm">
                      <div class="form-group row mt-4">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                          <h5 class="text-white mt-3 d-inline-block bg-primary border-r-10 w-100 text-center p-3">Paid Out: $45435,99 </h5>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                          <h5 class="box-text text-dark mt-3 d-inline-block bg-white border-r-10 w-100 text-center p-3"><i class="fa fa-bar-chart text-success"></i> 9 % More sales </h5>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                          <h5 class="box-text text-dark mt-3 d-inline-block bg-white border-r-10 w-100 text-center p-3"><i class="fa fa-bar-chart text-success"></i> 9 % More sales </h5>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-lg-3 col-md-4 col-sm-6 position-relative pr-1">
                          <select class="form-control custom-arrow font-14">
                            <option>All payment method</option>
                            <option>All payment method</option>
                          </select>
                          <img src="img/down-arrow.png" class="position-absolute img-arrow r-10">
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 position-relative pr-1 pl-3 pl-md-1">
                          <select class="form-control custom-arrow font-14">
                            <option>All listing</option>
                            <option>All listing</option>
                          </select>
                          <img src="img/down-arrow.png" class="position-absolute img-arrow r-10">
                        </div>
                        <div class="col-lg-2 col-md-2 position-relative col-sm-6 pr-1 pl-lg-1 pl-md-1 pl-xs-5">
                          <select class="form-control custom-arrow font-14" style="padding-left: 10px!important;">
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                          </select>
                          <img src="img/down-arrow.png" class="position-absolute img-arrow r-10">
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 position-relative pr-1 pl-lg-1 pl-md-3 pl-sm-3 pr-0">
                          <select class="form-control custom-arrow font-14">
                            <option>From: Jan</option>
                            <option>From: Feb</option>
                            <option>From: March</option>
                            <option>From: April</option>
                            <option>From: May</option>
                            <option>From: June</option>
                            <option>From: July</option>
                            <option>From: Sep</option>
                            <option>From: Oct</option>
                            <option>From: Nov</option>
                            <option>From: Dec</option>
                          </select>
                          <img src="img/down-arrow.png" class="position-absolute img-arrow r-10">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 position-relative pr-1 pr-lg-3 pr-md-1 pr-sm-1 pl-3 pl-md-1">
                          <select class="form-control custom-arrow font-14">
                            <option>To: Jan</option>
                            <option>To: Feb</option>
                            <option>To: March</option>
                            <option>To: April</option>
                            <option>To: May</option>
                            <option>To: June</option>
                            <option>To: July</option>
                            <option>To: Sep</option>
                            <option>To: Oct</option>
                            <option>To: Nov</option>
                            <option>To: Dec</option>
                          </select>
                          <img src="img/down-arrow.png" class="position-absolute img-arrow">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 offset-sm-6 text-right position-relative font-14 text-theme-blue c-pointer">
                          Download CSV / Excel <i class="fa fa-download pl-3"></i>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 px-0">
                          <div class="table-responsive overflow-x-inherit">
                            <table class="table font-14 table-hover">
                              <thead>
                                <tr>
                                  <th class="text-secondary border-bottom-0">Date</th>
                                  <th class="text-secondary border-bottom-0">Type</th>
                                  <th class="text-secondary border-bottom-0">Details</th>
                                  <th class="text-secondary border-bottom-0 text-right">Paid Out</th>
                                  <th class="text-secondary border-bottom-0 text-right">Amount</th>
                                  <th class="text-secondary border-bottom-0 text-right"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-secondary border-bottom-0">12.12.2017 <i class="fa fa-help"></i></td>
                                  <td class="text-secondary border-bottom-0">Payout</td>
                                  <td class="text-secondary border-bottom-0">Transfer to Account *****123 (USD)</td>
                                  <td class="text-secondary border-bottom-0"></td>
                                  <td class="text-secondary border-bottom-0 text-danger text-right">$82.00</td>
                                  <td class="text-secondary border-bottom-0 text-right"><i class="fa fa-trash"></i></td>
                                </tr>
                                <tr>
                                  <td class="text-secondary border-bottom-0">12.12.2017 <i class="fa fa-help"></i></td>
                                  <td class="text-secondary border-bottom-0">Payout</td>
                                  <td class="text-secondary border-bottom-0">Transfer to Account *****123 (USD)</td>
                                  <td class="text-secondary border-bottom-0 text-success text-right">$82.00</td>
                                  <td class="text-secondary border-bottom-0"></td>
                                  <td class="text-secondary border-bottom-0 text-right"><i class="fa fa-trash"></i></td>
                                </tr>
                                <tr>
                                  <td class="text-secondary border-bottom-0">12.12.2017 <i class="fa fa-help"></i></td>
                                  <td class="text-secondary border-bottom-0">Payout</td>
                                  <td class="text-secondary border-bottom-0">Transfer to Account *****123 (USD)</td>
                                  <td class="text-secondary border-bottom-0"></td>
                                  <td class="text-secondary border-bottom-0 text-danger text-right">$82.00</td>
                                  <td class="text-secondary border-bottom-0 text-right"><i class="fa fa-trash"></i></td>
                                </tr>
                                <tr>
                                  <td class="text-secondary border-bottom-0">12.12.2017 <i class="fa fa-help"></i></td>
                                  <td class="text-secondary border-bottom-0">Payout</td>
                                  <td class="text-secondary border-bottom-0">Transfer to Account *****123 (USD)</td>
                                  <td class="text-secondary border-bottom-0 text-success text-right">$82.00</td>
                                  <td class="text-secondary border-bottom-0"></td>
                                  <td class="text-secondary border-bottom-0 text-right"><i class="fa fa-trash"></i></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-sm-12 pagination-cricle">
                          <ul class="pagination float-right mt-5 font-14">
                            <li class="page-item"><a class="page-link text-dark" href="javascript:void(0)"><</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="javascript:void(0)">></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="future-trans">
                    <div class="contactForm">
                      <div class="form-group row mt-4">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                          <h5 class="text-white mt-3 d-inline-block bg-primary border-r-10 w-100 text-center p-3">Pending Out: $454 </h5>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-sm-12 px-0">
                          <div class="table-responsive table-hover overflow-x-inherit">
                            <table class="table font-14">
                              <thead>
                                <tr>
                                  <th class="text-secondary border-bottom-0">Date</th>
                                  <th class="text-secondary border-bottom-0">Type</th>
                                  <th class="text-secondary border-bottom-0">Details</th>
                                  <th class="text-secondary border-bottom-0">Paid to</th>
                                  <th class="text-secondary border-bottom-0 text-right">Amount</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-secondary border-bottom-0 w-13">13-06-17</td>
                                  <td class="text-secondary border-bottom-0">Resevation</td>
                                  <td class="text-secondary border-bottom-0">Sep 23-25, 2016 <span class="text-theme-blue">ABCDX</span> Jacob Bart beds and spa</td>
                                  <td class="text-secondary border-bottom-0">
                                    <div class="dropdown">
                                      <button type="button" class="btn bg-secondary text-theme-blue rounded border-r-20 font-14 text-secondary dropdown-toggle" data-toggle="dropdown">Default</button>
                                    </div>
                                  </td>
                                  <td class="text-secondary border-bottom-0 text-right">$67.88</td>
                                </tr>
                                <tr>
                                  <td class="text-secondary border-bottom-0 w-13">13-06-17</td>
                                  <td class="text-secondary border-bottom-0">Resevation</td>
                                  <td class="text-secondary border-bottom-0">Sep 23-25, 2016 <span class="text-theme-blue">ABCDX</span> Jacob Bart beds and spa</td>
                                  <td class="text-secondary border-bottom-0">
                                    <div class="dropdown">
                                      <button type="button" class="btn bg-secondary text-theme-blue rounded border-r-20 font-14 text-secondary dropdown-toggle" data-toggle="dropdown">Default</button>
                                    </div>
                                  </td>
                                  <td class="text-secondary border-bottom-0 text-right">$67.88</td>
                                </tr>
                                <tr>
                                  <td class="text-secondary border-bottom-0 w-13">13-06-17</td>
                                  <td class="text-secondary border-bottom-0">Resevation</td>
                                  <td class="text-secondary border-bottom-0">Sep 23-25, 2016 <span class="text-theme-blue">ABCDX</span> Jacob Bart beds and spa</td>
                                  <td class="text-secondary border-bottom-0">
                                    <div class="dropdown">
                                      <button type="button" class="btn bg-secondary text-theme-blue rounded border-r-20 font-14 text-secondary dropdown-toggle" data-toggle="dropdown">Default</button>
                                    </div>
                                  </td>
                                  <td class="text-secondary border-bottom-0 text-right">$67.88</td>
                                </tr>
                                <tr>
                                  <td class="text-secondary border-bottom-0 w-13">13-06-17</td>
                                  <td class="text-secondary border-bottom-0">Resevation</td>
                                  <td class="text-secondary border-bottom-0">Sep 23-25, 2016 <span class="text-theme-blue">ABCDX</span> Jacob Bart beds and spa</td>
                                  <td class="text-secondary border-bottom-0">
                                    <div class="dropdown">
                                      <button type="button" class="btn bg-secondary text-theme-blue rounded border-r-20 font-14 text-secondary dropdown-toggle" data-toggle="dropdown">Default</button>
                                    </div>
                                  </td>
                                  <td class="text-secondary border-bottom-0 text-right">$67.88</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="gross-erning">
                    <div class="contactForm">
                      <div class="form-group row mt-4">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                          <h5 class="text-white mt-3 d-inline-block bg-primary border-r-10 w-100 text-center p-3">Gross Earnings </h5>
                        </div>
                      </div>

                      <div class="form-group row mt-4">
                        <div class="col-sm-4 position-relative">
                          <select class="form-control custom-arrow font-14">
                            <option>2017</option>
                            <option>2018</option>
                          </select>
                          <img src="img/down-arrow.png" class="position-absolute img-arrow">
                        </div>
                        <div class="col-sm-4 position-relative">
                          <select class="form-control custom-arrow font-14">
                            <option>From: January</option>
                            <option>From: February</option>
                          </select>
                          <img src="img/down-arrow.png" class="position-absolute img-arrow">
                        </div>
                        <div class="col-sm-4 position-relative">
                          <select class="form-control custom-arrow font-14">
                            <option>To: November</option>
                            <option>To: December</option>
                          </select>
                          <img src="img/down-arrow.png" class="position-absolute img-arrow">
                        </div>
                      </div>

                      <div class="row mt-4">
                        <div class="col-sm-12 px-0">
                          <div class="table-responsive overflow-x-inherit">
                            <table class="table font-14 table-hover">
                            <thead>
                              <tr>
                                <th class="text-secondary border-bottom-0">Date</th>
                                <th class="text-secondary border-bottom-0">Type</th>
                                <th class="text-secondary border-bottom-0">Details</th>
                                <th class="text-secondary border-bottom-0">Gross Earnings
                                  <i class="fa fa-info-circle"></i>
                                </th>
                                <th class="text-secondary border-bottom-0 text-right">Occupancy Taxes 
                                  <i class="fa fa-info-circle"></i>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-secondary border-bottom-0">13-06-17</td>
                                <td class="text-secondary border-bottom-0">Payout</td>
                                <td class="text-secondary border-bottom-0">March 12-15, 2017
                                  <span class="text-theme-blue">AFGTYU</span>
                                </td>
                                <td class="text-secondary border-bottom-0">$12.00</td>
                                <td class="text-secondary border-bottom-0 text-right">$67.88</td>
                              </tr>
                              <tr>
                                <td class="text-secondary border-bottom-0">13-06-17</td>
                                <td class="text-secondary border-bottom-0">Payout</td>
                                <td class="text-secondary border-bottom-0">March 12-15, 2017
                                  <span class="text-theme-blue">AFGTYU</span>
                                </td>
                                <td class="text-secondary border-bottom-0">$12.00</td>
                                <td class="text-secondary border-bottom-0 text-right">$67.88</td>
                              </tr>
                              <tr>
                                <td class="text-secondary border-bottom-0">13-06-17</td>
                                <td class="text-secondary border-bottom-0">Payout</td>
                                <td class="text-secondary border-bottom-0">March 12-15, 2017
                                  <span class="text-theme-blue">AFGTYU</span>
                                </td>
                                <td class="text-secondary border-bottom-0">$12.00</td>
                                <td class="text-secondary border-bottom-0 text-right">$67.88</td>
                              </tr>
                              <tr>
                                <td class="text-secondary border-bottom-0">13-06-17</td>
                                <td class="text-secondary border-bottom-0">Payout</td>
                                <td class="text-secondary border-bottom-0">March 12-15, 2017
                                  <span class="text-theme-blue">AFGTYU</span>
                                </td>
                                <td class="text-secondary border-bottom-0">$12.00</td>
                                <td class="text-secondary border-bottom-0 text-right">$67.88</td>
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

            </div>
          </div>

          <div class="w-22 px-2">
            <div class="p-3 mb-4 profile-setting bg-white rounded-10 border">
              <div class="position-relative m-auto mx-w-120">
                <div class="m-auto profile-img p-3">
                  <img src="img/profile-img.svg" class="w-100 h-100 rounded-0">
                  <div class="position-absolute bg-theme icon">
                    <img src="img/pencil-icon.svg" class="w-h-15">
                  </div>
                  <div class="position-absolute camera-icon font-25 d-flex justify-content-center align-items-center t-0 r-0 b-0" style="background: #0000008f; border-radius: 50%; width: 100px; height: 96px; left: 10px;">
                    <i class="fa fa-camera text-white"></i>
                  </div>
                </div>
              </div>

              <h6 class="text-dark font-weight-normal text-center mt-2">Jens Behrmann</h6>
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
                    <img src="img/photo-videos-profile-icon.svg">
                    <h6 class="font-12 text-theme-blue mt-1">222 Friends</h6>
                  </div>
                  <div class="col px-0">
                    <img src="img/photo-videos-profile-icon.svg">
                    <h6 class="font-12 text-theme-blue mt-1">222 Photos & Videos</h6>
                  </div>
                  <div class="col px-0">
                    <img src="img/marketing-icon.svg">
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
          </div>
          
        </div>
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->

    </main> <!-- /main -->
 <?php include 'include/footer.php';?>

    <!-- Bootstrap JavaScript start -->
