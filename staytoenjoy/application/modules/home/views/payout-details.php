<?php include 'include/header.php';?>

    <main role="main">


   <div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="<?php echo base_url('home/company_setting')?>" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover active">Company Details</a></li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/company_tax')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Company Tax Informations</a></li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/verification_documents');?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Verification / Documents</a></li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/payout_details');?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Payout Details</a></li>
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
                <h6 class="font-weight-bold text-dark my-3">Payout Details <i class="fa fa-info-circle"></i></h6>
                <hr class="mt-4">
                <p class="text-secondary font-13">The monkey-rope is found in all whalers; but it was only in the Pequod that the monkey and his holder were ever tied together.</p>
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active text-dark font-12 mx-2 px-0" id="nav-home-tab" data-toggle="tab" href="#user-details"> User Details</a>
                    <a class="nav-item nav-link text-dark font-12 mx-2 px-0" id="nav-profile-tab" data-toggle="tab" href="#bank-details"> Bank Details</a>
                  </div>
                </nav>
                <div class="tab-content my-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="user-details">
                    <div class="contactForm">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">First Name <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Last Name <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Birth Date <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Email Address <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">City <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Postal Code <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Notionality <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Country of residence <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Occupation <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="bank-details">
                    <div class="contactForm">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Kontoinhaber <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Strasse / Nr. <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Ort <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">PLZ <i class="fa fa-lock"></i></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control font-14">
                        </div>
                      </div>
                      <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#iban">IBAN</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#gb">GB</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#us">US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#ca">CA</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#sonstige">SONSTIGE</a>
                        </li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content mt-4">
                        <div class="tab-pane container px-0 active" id="iban">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">IBAN
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">BIC
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3">
                              <input type="button" class="btn btn-primary bg-success border font-14" value="Speichern">
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane container px-0 fade" id="gb">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Account Number
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Sort Code
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3">
                              <input type="button" class="btn btn-primary bg-success border font-14" value="Speichern">
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane container px-0 fade" id="us">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Account Number
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">ABA
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14">
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane container px-0 fade" id="ca">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Bankname
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14" placeholder="Bankname">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Institution Number
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14" placeholder="Institution Number">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Institution Number
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14" placeholder="Institution Number">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Branchencode
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14" placeholder="Branchencode">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Account Number
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14">
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane container px-0 fade" id="sonstige">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Land
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9 position-relative">
                              <select class="form-control custom-arrow font-14">
                                <option>Afghanistan</option>
                                <option>Select</option>
                                <option>Select</option>
                              </select>
                              <img src="<?php echo base_url('img/down-arrow.png') ?>" class="position-absolute img-arrow">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">BIC
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14" placeholder="Bankname">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Account Number
                              <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control font-14" placeholder="Bankname">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <hr class="my-4">
              <div class="row">
                <div class="col">
                  <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">
                </div>
                <div class="col">
                  <input type="button" class="btn btn-primary bg-primary float-right font-14" value="Save">
                </div>
              </div>
              
            </div>
          </div>

          <div class="w-22 px-2">
            <?php include 'include/right-one-box.php';?>
          </div>
          
        </div>
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->

    </main> <!-- /main -->

    <!-- Bootstrap JavaScript start -->

<?php include 'include/footer.php';?>
