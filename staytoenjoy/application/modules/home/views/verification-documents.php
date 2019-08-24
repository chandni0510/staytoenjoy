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
                <h6 class="font-weight-bold text-dark my-3">Upload Company Documents</h6>
                <hr class="mt-4">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <ul class="list-s-none li-inline-b pl-0 mb-5 steps-line position-relative">
                      <li class="w-25 text-center position-relative z-index-99">
                        <a href="javascript:void(0)" class="bg-primary text-white border rounded-circle h-w-30-px d-flex align-items-center m-auto">
                          <span class="m-auto font-12">1</span>
                        </a>
                        <p class="m-auto font-12 pt-1 pb-3">New</p>
                      </li>
                      <li class="w-25 text-center position-relative z-index-99">
                        <a href="javascript:void(0)" class="bg-primary text-white border rounded-circle h-w-30-px d-flex align-items-center m-auto">
                          <span class="m-auto font-12">2</span>
                        </a>
                        <p class="m-auto font-12 pt-1 pb-3">Upload</p>
                      </li>
                      <li class="w-25 text-center position-relative z-index-99">
                        <a href="javascript:void(0)" class="bg-primary text-white border rounded-circle h-w-30-px d-flex align-items-center m-auto">
                          <span class="m-auto font-12">3</span>
                        </a>
                        <p class="m-auto font-12 pt-1 pb-3">Submit your documents</p>
                      </li>
                      <li class="w-25 text-center position-relative z-index-99">
                        <a href="javascript:void(0)" class="bg-primary text-white border rounded-circle h-w-30-px d-flex align-items-center m-auto">
                          <span class="m-auto font-12">4</span>
                        </a>
                        <p class="m-auto font-12 pt-1 pb-3">We verify your information</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-12 my-3">
                    <div class="border px-3 py-5" style="border-style: dashed!important; border-width: 2px!important;">
                      <div class="font-14 text-center">
                        <img src="<?php echo base_url('img/upload.svg')?>" class="w-12">
                        <p class="text-theme-blue pt-4">Drag &amp; Drop Files here and add Company Documents</p>
                        <p class="text-dark">Or</p>
                      </div>
                      <div class="custom-file px-3 text-center">
                        <label class="position-relative w-50 w-sm-100 bg-primary text-white py-2 rounded-20">
                          <input type="file" class="custom-file-input d-none" id="customFile">
                          <div>Browse form your Computer</div>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <ol class="d-flex pl-0 font-14 list-s-none">
                      <li>1</li>
                      <li class="pl-3"><img src="<?php echo base_url('img/windows.svg')?> "> Billing Statement</li>
                      <li class="ml-auto progress bg-success mn-w-150 h-3 mt-2">
                        <span class="progress-bar"></span>
                      </li>
                    </ol>
                  </div>
                  <div class="col-sm-6">
                    <ol class="d-flex pl-0 font-14 list-s-none">
                      <li>6.79kb</li>
                      <li class="text-theme-blue pl-3">... 1 day 1 hr 20min 22 sec ago</li>
                      <li class="ml-auto"><a href="javascript:void(0)" class=""><i class="fa fa-ellipsis-h pt-2"></i></a></li>
                    </ol>
                  </div>
                  <div class="col-sm-6">
                    <ol class="d-flex pl-0 font-14 list-s-none">
                      <li>2</li>
                      <li class="pl-3"><img src="<?php echo base_url('img/windows.svg'); ?>"> Billing Statement</li>
                      <li class="ml-auto progress bg-success mn-w-150 h-3 mt-2">
                        <span class="progress-bar"></span>
                      </li>
                    </ol>
                  </div>
                  <div class="col-sm-6">
                    <ol class="d-flex pl-0 font-14 list-s-none">
                      <li>6.79kb</li>
                      <li class="text-theme-blue pl-3">... 20 sec ago</li>
                      <li class="ml-auto"><a href="javascript:void(0)" class=""><i class="fa fa-ellipsis-h pt-2"></i></a></li>
                    </ol>
                  </div>
                </div>
                <hr class="my-4">
                <div class="row">
                  <div class="col-sm-12">
                    <input type="button" class="btn btn-primary bg-primary float-right font-14" value="Submit">
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-sm-12 px-0">
                    <table class="table font-14 table-hover">
                      <thead>
                        <tr>
                          <th class="text-secondary border-bottom-0">Sended Documents</th>
                          <th class="text-secondary border-bottom-0">Status</th>
                          <th class="text-secondary border-bottom-0">Notes</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="font-weight-bold text-secondary border-bottom-0">
                            <img src="<?php echo base_url('img/windows.svg'); ?>"> Billing Statement
                          </th>
                          <td class="text-secondary border-bottom-0 font-12">In progress...</td>
                          <td class="text-secondary border-bottom-0 font-12">
                            Please send us more informations about your company. 
                            <span class="text-danger">View Details</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold text-secondary border-bottom-0">
                            <img src="<?php echo base_url('img/windows.svg'); ?>"> Billing Statement
                          </th>
                          <td class="text-secondary border-bottom-0 font-12 text-success">
                            <img src="<?php echo base_url('img/check-green.svg'); ?>"> Verified
                          </td>
                          <td class="text-secondary border-bottom-0 font-12"></td>
                        </tr>
                      </tbody>
                    </table>

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

<?php include 'include/footer.php';?>
