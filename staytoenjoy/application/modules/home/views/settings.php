<?php include 'include/header.php';?>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" id="toggle-bg">
      <div class="container-fluid mini-container justify-cntnt-unst-sm direction-rtl-sm">
      <a class="navbar-brand mr-0" href="index.php"><img src="img/logo.svg" class="img-fluid"></a>
      <form class="my-2 my-lg-0 search-mob responsive d-none">
        <div class="position-relative">
          <input type="text" class="form-control" placeholder="Search for accomodation, shops, people and others">
          <a href="javascript:void(0)" class="back-icon d-none"><img src="img/arrow-left.png"></a>
        </div>
      </form>
      <span class="search-icon responsive mx-3"><i class="fa fa-search"></i></span>
      <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse direction-ltr-sm navbar-collapse" id="navbarsExampleDefault">

        <form class="my-2 my-lg-0 mr-auto w-100 search-desk ml-3 max-w-570">
          <div class="position-relative">
          <input class="form-control mysearch mr-sm-2" type="text" placeholder="Search for accomodation, shops, people and others" aria-label="Search">
          <span class="search-icon"><i class="fa fa-search"></i></span>
        </div>
        </form>

        <ul class="navbar-nav align-self-end desk-ul">
          <li class="nav-item active">
            <a class="nav-link" href="javascript:void(0)"> <span class="sr-only"></span></a>
          </li>
          <li class="nav-item position-relative pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="javascript:void(0)">  <img src="img/user.svg" style="width: 28px; height: 28px"> <span class="notify-circle">5</span> </a>
          </li>
          <li class="nav-item pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="javascript:void(0)"> <img src="img/msg.svg"> <span class="notify-circle">3</span> </a>
          </li>
          <li class="nav-item pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="javascript:void(0)"> <img src="img/chat.svg" style="width: 26px; height: 26px"> <span class="notify-circle">8</span> </a>
          </li>
          <li class="nav-item pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="javascript:void(0)"> <img src="img/calendar.svg"> <span class="notify-circle">9</span> </a>
          </li>
          <li class="nav-item pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="javascript:void(0)"> <img src="img/cart.svg" style="width: 26px; height: 26px"> <span class="notify-circle">9</span> </a>
          </li>
          <li class="nav-item pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="javascript:void(0)"> <img src="img/info.svg" style="width: 29px; height: 29px">  </a>
          </li>
          <li class="nav-item pl-2 pr-1 seprater position-relative">
            <a class="nav-link position-relative menu-icon" href="javascript:void(0)"> <img src="img/menu.png">  </a>
          </li>
          <li class="nav-item pl-1 pr-2 dropdown">
            <a class="nav-link position-relative menu-icon d-flex align-items-center dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown"> <img src="img/profile.png" style="width:28px; height:28px">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="javascript:void(0)">Settings</a>
          <a class="dropdown-item" href="javascript:void(0)">Logout</a>
        </div>
          </li>
            <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
        </ul>

        <ul class="navbar-nav align-self-end mr-auto mob-ul">
          <li class="nav-item active">
            <a class="nav-link" href="javascript:void(0)"> <span class="sr-only"></span></a>
          </li>
          <li class="nav-item seprater position-relative pl-2 pr-2">
            <a class="nav-link position-relative menu-icon" href="javascript:void(0)"> <img src="img/user.svg" style="width: 28px; height: 28px"> <strong> Friend Request </strong> </a>
            <span class="notify-circle notify-right">5</span>
          </li>
          <li class="nav-item position-relative pl-2 pr-2">
            <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="img/msg.svg"> <strong> Message </strong></a>
            <span class="notify-circle notify-right">3</span>
          </li>
          <li class="nav-item pl-2 pr-2 position-relative">
            <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="img/chat.svg" style="width: 26px; height: 26px"> <strong> Chat </strong> </a>
            <span class="notify-circle notify-right">8</span>
          </li>
          <li class="nav-item pl-2 pr-2 position-relative">
            <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="img/calendar.svg"> <strong> Calendar Date </strong> </a>
            <span class="notify-circle notify-right">9</span>
          </li>
          <li class="nav-item pl-2 pr-2 position-relative">
            <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="img/cart.svg" style="width: 26px; height: 26px"> <strong> Shopping Cart </strong> </a>
            <span class="notify-circle notify-right">9</span>
          </li>
          <li class="nav-item pl-2 pr-2 position-relative">
            <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="img/info.svg" style="width: 29px; height: 29px"> <strong> Help </strong> </a>
          </li>
          <li class="nav-item pl-2 pr-1 seprater position-relative">
            <a class="nav-link menu-icon" href="javascript:void(0)"> <img src="img/menu.png"><strong> Category </strong></a>
          </li>
          <li class="nav-item pl-1 pr-2 dropdown">
            <a class="nav-link position-relative menu-icon dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown"> <img src="img/profile.png" style="width:28px; height:28px"><strong> Profile </strong>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="javascript:void(0)">Settings</a>
          <a class="dropdown-item" href="javascript:void(0)">Logout</a>

        </div>
          </li>
            <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
        </ul>
      </div>

    </div> <!-- //container  -->
    </nav> <!-- //nav end here  -->

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      
    <section class="content-sec">
      <div class="container-fluid mini-container">
        <!-- Example row of columns -->
        <div class="row">

          <div class="col-md-8">

            <h1 class="pb-3">Settings</h1>

            <div class="row">
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="profile-settings.php">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/profile-setting-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Profile Settings</h6>
                      <p class="mb-0">Anzeige, Benachrichtigungen, Sound, Stromversorgung</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/account-setting-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Account Settings</h6>
                      <p class="mb-0">Bluetooth, Drucker, Maus</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/company-info-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Company Informations</h6>
                      <p class="mb-0">Android-Smartphone oder iPhone verknopfen</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/notification-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Notifications</h6>
                      <p class="mb-0">Deinstallieren, Standardwerte, optionale Funktionen</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/password-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Password</h6>
                      <p class="mb-0">Ihre Konten, E-Mail-Adresse, Synchronisieren, Arbeit, Familie</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/language-icon.svg" class="img-fluid mx-w-40" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Time & Language</h6>
                      <p class="mb-0">Spracherkennung, Region, Datum</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/payment-setting-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Payment Settings</h6>
                      <p class="mb-0">Cortana-Sprache, Berechtigungen,</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/privacy-settings-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Privacy Settings</h6>
                      <p class="mb-0">Position, Kamera</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/blocked-account.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Blocked Accounts</h6>
                      <p class="mb-0">Windows Update, Wiederherstellung, Sicherung</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/connected-app-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Connected Apps</h6>
                      <p class="mb-0">WLAN, Flugzeugmodus, VPN</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/factor-authentication.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">2 Factor Authentications</h6>
                      <p class="mb-0">Hinterground, Sperrbildschim,</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/calender-sync-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Calender Sync</h6>
                      <p class="mb-0">Spieleiste, DVR, Ubertragung, Spielmodus</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/pages-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Pages</h6>
                      <p class="mb-0">Cortana-Sprache Berechtigungen,</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/verification-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Verification Center</h6>
                      <p class="mb-0">Cortana-Sprache, Berechtigungen,</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/support-center-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Support Center</h6>
                      <p class="mb-0">Sprachausgabe, Bildschirmlupe, hoher Kontrast</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 mygutter">
                <a href="javascript:void(0)">
                  <div class="d-flex setting-box mn-h-auto p-3 flex-row">
                    <div>
                      <img src="img/report-center-icon.svg" class="img-fluid mx-w-36" alt="service image">
                    </div>
                    <div class="pl-3">
                      <h6 class="font-weight-normal mb-1 text-dark">Report Center</h6>
                      <p class="mb-0">Sprachausgabe, Bildschirmlupe, hoher Kontrast</p>
                    </div>
                  </div>
                </a>
              </div>

            </div>

          </div>
          
          <div class="col-md-4 mb-5">
            <img src="img/settings-img.svg" class="img-fluid mt-md-0" alt="banner image">
          </div>

        </div>
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->

    </main> <!-- /main -->

    <footer class="bg-secondary d-flex align-items-center">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
        <ul class="list-group d-inline ul-list">
          <li class="list-inline-item"><a href=""> About </a></li>
          <li class="list-inline-item"><a href=""> Help </a></li>
          <li class="list-inline-item"><a href=""> Center </a></li>
          <li class="list-inline-item"><a href=""> List Your Offer </a></li>
          <li class="list-inline-item"><a href=""> Booking </a></li>
          <li class="list-inline-item"><a href="terms.php"> Terms </a></li>
          <li class="list-inline-item"><a href=""> Privacy Policy </a></li>
          <li class="list-inline-item"><a href=""> Imprint </a></li>
          <li class="list-inline-item"><a href=""> Cookies </a></li>
          <li class="list-inline-item"><a href=""> Ads Info </a></li>
          <li class="list-inline-item"><a href=""> Advertise </a></li>
          <li class="list-inline-item"><a href=""> Business Pages  </a></li>
          <li class="list-inline-item"><a href=""> Profile </a></li>
          <li class="list-inline-item"><a href=""> Friends </a></li>
        </ul>
        <div class="drop-btn">
          <div class="dropdown d-inline">
            <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="modal" data-target="#modal"><img src="img/flag.png"> English
            <span class="caret"></span></button>
           </div>

           <div class="modal fade pr-0" id="modal">
            <div class="modal-dialog mw-100 h-100 m-0">
              <div class="modal-content rounded-0 mw-100 overflow-hidden h-100 h-auto-md" style="background: #3f4857;">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 text-right">
                      <a class="close-pop-btn" href="#"><img src="img/x.png" data-dismiss="modal"></a>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                      <img src="img/logo3.png">
                      <h3 class="text-white">CHOOSE YOUR COUNTRY</h3>
                      <p class="text-muted">Selecting a country may change the language and will deliver relevant content for your location.</p>
                    </div>
                    <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                      <div class="row border-right border-secondary">
                        <div class="col-md-6">
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/nederland.png">
                            <h6 class="d-inline-block text-white pl-3">nederland</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/united-state.png">
                            <h6 class="d-inline-block text-white pl-3">United State</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/espana.png">
                            <h6 class="d-inline-block text-white pl-3">Espana</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/belgique_belgie.png">
                            <h6 class="d-inline-block text-white pl-3">Belgique/Belgie</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/australia.png">
                            <h6 class="d-inline-block text-white pl-3">Australia</h6>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/united-kingdom.png">
                            <h6 class="d-inline-block text-white pl-3">United Kingdom</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/deutschland.png">
                            <h6 class="d-inline-block text-white pl-3">Deutschland</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/france.png">
                            <h6 class="d-inline-block text-white pl-3">France</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/canada.png">
                            <h6 class="d-inline-block text-white pl-3">Canada</h6>
                          </div>
                          <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2">
                            <img src="img/new-zealand.png">
                            <h6 class="d-inline-block text-white pl-3">New Zealand</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group contactForm">
                        <label class="text-muted">Dont`t see your country? check the full list below</label>
                        <select class="form-control custom-arrow bg-language border-secondary border-r-20">
                          <option class="bg-language">Choose your country </option>
                          <option class="text-dark">Nederland</option>
                          <option class="text-dark">United State</option>
                          <option class="text-dark">Espana</option>
                        </select>
                      </div>
                      <p class="text-muted pt-3">Is your country not listed? you can always view our website in plain english</p>
                      <div class="py-1 px-3 bg-language border-r-20 lang-circle mb-2 w-50">
                        <img src="img/united-kingdom.png">
                        <h6 class="d-inline-block text-white pl-3">English</h6>
                      </div>
                    </div>
                    <div class="offset-md-1 col-lg-6 col-sm-12 col-xs-12 mt-4">
                      <p class="text-muted">If you have questions,suggestion or complaints concerning our localisation efforts, <a href="javascript:void(0)" class="text-blue-btm"> you can always contact us. </a> We`d love to hear from you.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="dropdown d-inline">
            <button class="btn btn-outline-secondary dropdown-toggle" id="show-drop2" type="button" data-toggle="dropdown"><img src="img/flag.png"> USD
            <span class="caret"></span></button>
            <ul class="dropdown-menu drop-menu" id="drop2">
              <li id="1" class="bg-light px-2"><a href="#" class="text-dark font-12">USD <img src="img/flag.png" class="float-right"></a></li>
              <li id="2" class="bg-white px-2"><a href="#" class="text-dark font-12">INR <img src="img/canada.svg" class="float-right"></a></li>
            </ul>
          </div>
        </div>
      </div> <!-- col-12-->

        <div class="col-md-12">
          <p class="text-secondary text-lg-right font-12 pt-2 mb-0">Copyrights 2018 StayToEnjoy </p> 
        </div>

      </div>  <!-- //Row -->
      </div> <!-- //Container --> 
    </footer> <!-- //footer -->

    <!-- Bootstrap JavaScript start -->


<script type="text/javascript">
    $("#show-drop").click(function(){
  $("#drop1").toggleClass("show");

      $(function() {
  $(document).click(function (event) {
    $("#drop1").removeClass("show");

  });
});

});

  </script>

<script type="text/javascript">
    $("#show-drop2").click(function(){
      $("#drop2").toggleClass("show");

          $(function() {
  $(document).click(function (event) {
    $("#drop2").removeClass("show");

  });
});
      });
</script>

<script type="text/javascript">
    /*$("#toggle-bg").click(function(){
      $(".navbar").toggleClass("toggle-bg");
    });*/

    $(".search-icon.responsive").click(function(){
      $('.search-mob.responsive').toggleClass('d-none');
      $('.back-icon').toggleClass('d-none');
    });
</script>



  </body>
</html>
