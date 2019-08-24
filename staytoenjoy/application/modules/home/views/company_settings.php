<?php include 'include/header.php';?>

    <main role="main"> 

<div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="<?php echo base_url('home/company_setting')?>" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover active">


          Company Details</a></li>
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
            <div class="p-3 pb-4 mb-4 profile-setting bg-white border border-r-10">
              <div class="contactForm">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="col-sm-5 text-left mb-4 px-0"> 
                    <h2 class="text-dark mt-4 mb-sm-4 pt-3">Company Informations</h2>
                  </div>
                  <div class="col-sm-7">
                    <img src="<?php echo base_url('img/comapny-setting-img.svg')?>" class="w-100">
                  </div>
                </div>
                <hr class="hr-color-grey">
                <ul class="nav nav-tabs mb-4 justify-content-start scroll-horiztl" id="myTab" role="tablist">

                  <li class="nav-item">
                    <a class="nav-link text-dark px-0 mx-2" data-toggle="tab" href="#director-info">
                      Owner / Ceo / Director Informations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark pl-4 mx-2" data-toggle="tab" href="#company-info">
                      Company Informations</a>
                  </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                 
               <div class="tab-pane fade show active" id="director-info">
                  <form class="contactForm" method="post" action="<?php echo base_url() ?>home/company_setting">
                    <div class="d-flex mb-3 p-3 background-style">
                      <?php // print_r($cinfo);die;?>
                       <label class="" style="margin-top: -2px;">I am</label>
                       <label class="container-box d-inline-block ml-3 mr-2 position-relative c-pointer font-14">Comapny Owner
                        <input type="radio"  name="comp_owner1" <?php if(!empty($cinfo->comp_owner)&& $cinfo->comp_owner=="Company Owner"){ ?> checked="checked" <?php } ?> value="Company Owner">
                        <span class="checkmark"></span>
                      </label>
                       <label class="container-box d-inline-block ml-3 mr-2 position-relative c-pointer font-14">CEO / Director of the Company
                        <input type="radio"  name="comp_owner1" <?php if(!empty($cinfo->comp_owner)&& $cinfo->comp_owner=="CEO / Director of the Company"){ ?> checked="checked" <?php } ?> value="CEO / Director of the Company">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="container-fluid px-0">
                      <div class="row">
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Your Name
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>                           
                            <p class="pt-2 text-dark">Title</p>
                            <input type="text" placeholder="First Name" class="border-0 focus-none pt-2" name="first_name" value="<?php if(!empty($cinfo->first_name)){ echo $cinfo->first_name;}?>">
                            <input type="text" placeholder="Last Name" name="last_name" class="border-0 focus-none pt-2"  value="<?php if(!empty($cinfo->last_name)){ echo $cinfo->last_name;}?>">
                          </div>                       
                        </div>
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <?php if(!empty($cinfo->comp_owner_dob)){
                              $dob = explode(' ',$cinfo->comp_owner_dob); } 
                              $month = array(
                              'January', 
                              'February', 
                              'March', 
                              'April', 
                              'May', 
                              'June', 
                              'July', 
                              'August', 
                              'September', 
                              'October', 
                              'November', 
                              'December'
                              );

                            ?>
                            <p class="text-theme border-bottom pb-2">Date of birth
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex justify-content-between align-items-center mt-3 font-14">
                              <div class="position-relative">
                          <select class="border-0 focus-none custom-arrow font-14" name="day">
                              <?php for($d=1; $d<=31; $d++) { ?>                
                                <option <?php if(!empty($dob[0]) && $dob[0] == $d ) {  ?> selected="
                                selected" <?php }?> value="<?php echo $d; ?>" > <?php echo $d;  ?></option>
                              <?php } ?>   
                          </select>
                           <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-0"> 
                          </div>
                         <div class="position-relative">
                          <select class="border-0  custom-arrow focus-none font-14" name="month">
                              <?php for($m=0; $m<12; $m++) { ?>               
                              <option <?php if(!empty($dob[1]) && $dob[1] == $month[$m]) {  ?> selected="
                              selected" <?php }?> value="<?php echo $month[$m] ?>" > <?php echo $month[$m];  ?></option>
                              <?php } ?>
                          </select>
                        <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-0"> 
                          </div>
                          <div class="position-relative">
                          <select class="border-0 focus-none custom-arrow font-14" name="year">
                              <?php $year = date('Y');
                              for($y=1920; $y<=$year; $y++) { ?>                
                              <option <?php if(!empty($dob[2]) && $dob[2] == $y) {  ?> selected="
                              selected" <?php }?> value="<?php echo $y; ?>" > <?php echo $y;  ?></option>
                              <?php } ?>
                          </select>
                          <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-0"> 
                         </div>
                              
                             
                            </div>
                   

                          <div class="d-flex justify-content-between border-top align-items-center mt-3 pt-2">
                                  <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14">Male

                                    <input type="radio"  name="cgender" checked="checked"  <?php if(!empty($cinfo->comp_gender) && $cinfo->comp_gender=="Male"){ ?> checked="checked" <?php } ?> value="Male">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14 ">Female
                                    <input type="radio"   name="cgender" <?php if(!empty($cinfo->comp_gender) && $cinfo->comp_gender=="Female"){ ?> checked="checked" <?php } ?> value="Female">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14 ">Other
                                    <input type="radio"  name="cgender" <?php if(!empty($cinfo->comp_gender)&& $cinfo->comp_gender=="Other"){ ?> checked="checked" <?php } ?> value="Other">
                                    <span class="checkmark"></span>
                                  </label>
                              </div>  



                          </div>
                        </div>
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Contact
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex pt-2 font-14">
                              <input type="text" placeholder="Enter your email id" class="w-100 border-0 focus-none" name="cemail" value="<?php if(!empty($cinfo->email)){ echo $cinfo->email;}?>">
                              <label class="position-relative mb-0 tooltip-hover pt-2">
                                <i class="fa fa-check-circle text-success font-16"></i>
                                <div class="position-absolute tooltip-inner tool-r">Successfully checked</div>
                              </label>
                            </div>
                            <div class="d-flex pt-2 font-14">
                              <input type="text" placeholder="Enter your Phone Number"  name="cphone"class="w-100 border-0 focus-none"    value="<?php if(!empty($cinfo->phone_no)){ echo $cinfo->phone_no;}?>">
                              <label class="position-relative mb-0 tooltip-hover pt-2">
                                <i class="fa fa-check-circle text-success font-16"></i>
                                <div class="position-absolute tooltip-inner tool-r">Successfully checked</div>
                              </label>
                            </div>
                            <div class="d-flex pt-2 font-14">
                              <input type="text" placeholder="Enter your Mobile Number" class="w-100 border-0 focus-none" name="cmobile" value="<?php if(!empty($cinfo->mobile)){ echo $cinfo->mobile;}?>">
                              <label class="position-relative mb-0 tooltip-hover pt-2">
                                <i class="fa fa-exclamation-circle text-warning font-16"></i>
                                <div class="position-absolute tooltip-inner tool-r">Successfully checked</div>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Your Location
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex border-bottom pt-2 font-14 pb-3">
                              <input type="text"  name="city" placeholder="City" class="w-25 border-0 focus-none pt-2" value="<?php if(!empty($cinfo->comp_city)){ echo $cinfo->comp_city;}?>">
                              <input type="text" name="zip_code" placeholder="Zip code" class="w-25 border-0 focus-none pt-2"  value="<?php if(!empty($cinfo->comp_zipcode)){ echo $cinfo->comp_zipcode;}?>">  
                              <input type="text" placeholder="Adressline 1" name="address1" class="w-25 border-0 focus-none pt-2" 
                              value="<?php if(!empty($cinfo->comp_address1)){ echo $cinfo->comp_address1;}?>">

                              <input type="text" placeholder="Street Nr."  name="street_no" class="w-25 border-0 focus-none pt-2 text-right"  value="<?php if(!empty($cinfo->comp_street1)){ echo $cinfo->comp_street1;}?>">
                            </div>
                            <div class="d-flex pt-3">
                              <input type="text" placeholder="Adressline 2"  name="addressline2"class="w-25 border-0 focus-none" value="<?php if(!empty($cinfo->comp_address2)){ echo $cinfo->comp_address2;}?>">
                              <input type="text"  name="street_no2" placeholder="Street Nr." class="w-25 border-0 focus-none"  
                              value="<?php if(!empty($cinfo->comp_street2)){ echo $cinfo->comp_street2;}?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Your Location
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex border-bottom py-3 font-14">
                              <div><input type="text" class="w-25 border-0 focus-none pt-2" name="state" value="<?php if(!empty($cinfo->comp_state)){ echo $cinfo->comp_state;}?>" placeholder="Enter state">
                            <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow"></div>
                            </div>
                            <div class="d-flex pt-3">
                              <div class="font-14 position-absolute">
                                 <div id="country_name" class="custom-arrow" data-input-name="country"  data-selected-country="<?php if(!empty($cinfo->comp_country)){ echo $cinfo->comp_country;}?>" data-button-size="btn-block"  data-scrollable="true" data-scrollable-height="250px"> </div>
                                <img src="<?php echo base_url('img/down-arrow.png')?>" class="img-arrow position-absolute r-10"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Website Settings
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex border-bottom py-3 font-14">
                                  <div class="position-relative">
                         <select class="w-100 border-0 custom-arrow focus-none font-14 sepicker" name="user_lang"  data-width="fit" id="exampleFormControlSelect1" style="padding-left: 35px!important;">
                                          <option>Choose Language</option>
                              <option <?php if(!empty($cinfo->comp_lang) && $cinfo->comp_lang == "en" ) {  ?> selected="
                             selected" <?php }?> data-content='<span class="flag-icon flag-icon-us"></span> English' value="en" >English</option>
                                         <option <?php if(!empty($cinfo->comp_lang) && $cinfo->comp_lang == "fr" ) {  ?> selected="
                             selected" <?php }?> data-content='<span class="flag-icon flag-icon-fr"></span> French'  value="fr" >French</option>
                              <option <?php if(!empty($cinfo->comp_lang) && $cinfo->comp_lang == "ge" ) {  ?> selected="
                             selected" <?php }?> data-content='<span class="flag-icon flag-icon-de"></span> German' value="ge" >German</option>
                              <option <?php if(!empty($cinfo->comp_lang) && $cinfo->comp_lang == "hi" ) {  ?> selected="
                             selected" <?php }?> data-content='<span class="flag-icon flag-icon-in"></span> Hindi'  value="hi" >Hindi</option>
                              <option <?php if(!empty($cinfo->comp_lang) && $cinfo->comp_lang == "ur" ) {  ?> selected="
                             selected" <?php }?>  data-content='<span class="flag-icon flag-icon-pk"></span> Urdu' value="ur" >Urdu</option>
                                          
                                        </select>
                         <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-10"> 

                          </div>
                            </div>
                             <div class="d-flex pt-3">
                    <div class="position-relative">
                               <select class="w-100 border-0 focus-none font-14 sepicker custom-arrow" name="lang" data-width="fit" id="exampleFormControlSelect1" style="padding-left: 35px!important;">
                              <option>Choose Website Language</option>
                              <option <?php if(!empty($cinfo->comp_userlng) && $cinfo->comp_userlng == "en" ) {  ?> selected="
                              selected" <?php }?>  data-content='<span class="flag-icon flag-icon-us"></span> English' value="en" >English</option>
                              <option <?php if(!empty($cinfo->comp_userlng) &&$cinfo->comp_userlng == "fr" ) {  ?> selected="
                              selected" <?php }?> data-content='<span class="flag-icon flag-icon-fr"></span> French'  value="fr" >French</option>
                              <option <?php if(!empty($cinfo->comp_userlng) && $cinfo->comp_userlng == "ge" ) {  ?> selected="
                              selected" <?php }?> data-content='<span class="flag-icon flag-icon-de"></span> German'  value="ge" >German</option>
                              <option <?php if(!empty($cinfo->comp_userlng) && $cinfo->comp_userlng == "hi" ) {  ?> selected="
                              selected" <?php }?> value="hi"  data-content='<span class="flag-icon flag-icon-in"></span> Hindi' >Hindi</option>
                              <option <?php if(!empty($cinfo->comp_userlng) && $cinfo->comp_userlng == "ur" ) {  ?> selected="
                              selected" <?php }?> value="ur"  data-content='<span class="flag-icon flag-icon-pk"></span> Urdu' >Urdu</option>
                              </select>
                            <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-0"> 
                          </div>
              
                    </div>
                          </div>
                        </div>
                        <div class="col-md-4 mb-4 font-14">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Add languages you speak
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-inline-block mr-2 mb-2 bg-theme border-r-20 mt-3 py-1 px-4 text-white position-relative hover-visible hover-dark">English
                              <a href="javascript:void(0)" class="hide d-inline-block font-10 text-white border-0 rounded-circle position-absolute w-15px h-15px pl-3px" style="top: 7px; right: 3px;"><i class="fa fa-close"></i></a>
                            </div>
                            <input type="text" placeholder="Type Language" class="w-50 border-0 focus-none d-none" id="text-show">
                            <a href="javascript:void(0)" id="language-click">
                              <i class="fa fa-plus text-theme"></i> <span class="text-dark">Add</span>
                            </a>
                          </div>
                        </div>
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Finance Settings
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex pt-2 font-14">
                              <div>Default Currency <img src="img/down-arrow.png" class="img-arrow"></div>
                            </div>
                            <div class="d-flex pt-2">
                              <input type="text" name="tax_rate" placeholder="Add Country Tax Rate" class="border-0 focus-none"  value="<?php echo isset($cinfo->comp_tax_rate) ? $cinfo->comp_tax_rate:" "?>">
                            </div>
                            <div class="d-flex pt-2">
                              <input type="text" name="tax_id" placeholder="Add Tax Id" class=" border-0 focus-none"  value="<?php echo isset($cinfo->comp_tax_id) ? $cinfo->comp_tax_id:" "?>">
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
                        <input type="submit" class="btn btn-primary bg-primary float-right font-14" name="cinfo" value="Save">
                      </div>
                    </div>
                  </form>
                  </div>

                  <div class="tab-pane fade" id="company-info">
                   <form class="contactForm" method="post" action="<?php echo base_url() ?>home/company_setting">
                    <div class="container-fluid px-0">
                      <div class="row">
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Company Location
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <input type="text" placeholder="Type company name here" class="border-0 focus-none pt-2" name="compname" value="<?php if(!empty($cinfo->comp_cname)){ echo $cinfo->comp_cname;}?>">
                            <div class="mt-2 font-14">Legal Form <img src="img/down-arrow.png" class="img-arrow"></div>
                            <input type="text" placeholder="Type company registration number" class="border-0 focus-none pt-2" name="legalform" value="<?php if(!empty($cinfo->comp_legal_form)){ echo $cinfo->comp_legal_form;}?>">
                          </div>
                        </div>
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Founded
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <?php if(!empty($cinfo->comp_dob)){
                              $dob = explode(' ',$cinfo->comp_dob); } 
                              $month = array(
                              'January', 
                              'February', 
                              'March', 
                              'April', 
                              'May', 
                              'June', 
                              'July', 
                              'August', 
                              'September', 
                              'October', 
                              'November', 
                              'December'
                              );

                            ?>
                            <div class="d-flex justify-content-between align-items-center mt-3 font-14">
                              <div class="position-relative">
                          <select class="border-0 focus-none custom-arrow font-14" name="cday">
                              <?php for($d=1; $d<=31; $d++) { ?>                
                                <option <?php if(!empty($dob[0]) && $dob[0] == $d ) {  ?> selected="
                                selected" <?php }?> value="<?php echo $d; ?>" > <?php echo $d;  ?></option>
                              <?php } ?>   
                          </select>
                           <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-0"> 
                          </div>
                         <div class="position-relative">
                          <select class="border-0  custom-arrow focus-none font-14" name="cmonth">
                              <?php for($m=0; $m<12; $m++) { ?>               
                              <option <?php if(!empty($dob[1]) && $dob[1] == $month[$m]) {  ?> selected="
                              selected" <?php }?> value="<?php echo $month[$m] ?>" > <?php echo $month[$m];  ?></option>
                              <?php } ?>
                          </select>
                        <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-0"> 
                          </div>
                          <div class="position-relative">
                          <select class="border-0 focus-none custom-arrow font-14" name="cyear">
                              <?php $year = date('Y');
                              for($y=1920; $y<=$year; $y++) { ?>                
                              <option <?php if(!empty($dob[2]) && $dob[2] == $y) {  ?> selected="
                              selected" <?php }?> value="<?php echo $y; ?>" > <?php echo $y;  ?></option>
                              <?php } ?>
                          </select>
                          <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-0"> 
                         </div>
                            </div>
                            <div class="border-top mt-3 pt-2">
                              <input type="text" placeholder="Number of Employess" class="border-0 focus-none pt-2" name="compnemp" value="<?php if(!empty($cinfo->comp_noemp)){ echo $cinfo->comp_noemp;}?>">
                            </div>                         
                          </div>
                        </div>
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Finance Settings
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex flex-column align-self-center font-14">
                              <input type="text" placeholder="Comapny Tax Id" class="pt-2 w-100 border-0 focus-none" name="company_tax" value="<?php if(!empty($cinfo->company_tax_id)){ echo $cinfo->company_tax_id;}?>">
                              <input type="text" placeholder="Comapny Tax Rate" class="w-100 border-0 focus-none pt-2" name="company_tax_rate" value="<?php if(!empty($cinfo->company_tax_rate)){ echo $cinfo->company_tax_rate;}?>">
                              <div class="mt-2">
                                <div class="d-inline-block">Default Currency</div>
                                <div class="d-inline-block pl-4">USD <img src="img/down-arrow.png" class="img-arrow"></div>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                        <div class="col-md-8 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Company Location
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex border-bottom pt-2 font-14 pb-3">
                              <input type="text" placeholder="City" class="w-25 border-0 focus-none pt-2" name="comp_city" value="<?php if(!empty($cinfo->company_city)){ echo $cinfo->company_city;}?>">
                              <input type="text" placeholder="Zip code" class="w-25 border-0 focus-none pt-2" name="comp_zip" value="<?php if(!empty($cinfo->company_zip)){ echo $cinfo->company_zip;}?>">  
                              <input type="text" placeholder="Adressline 1" class="w-25 border-0 focus-none pt-2" name="comp_address1" value="<?php if(!empty($cinfo->company_address1)){ echo $cinfo->company_address1;}?>">  
                              <input type="text" placeholder="Street Nr." class="w-25 border-0 focus-none pt-2 text-right" name="comp_street1" value="<?php if(!empty($cinfo->company_street1)){ echo $cinfo->company_street1;}?>">
                            </div>
                            <div class="d-flex pt-3">
                              <input type="text" placeholder="Adressline 2" class="w-25 border-0 focus-none" name="comp_address2" value="<?php if(!empty($cinfo->company_address2)){ echo $cinfo->company_address2;}?>">
                              <input type="text" placeholder="Street Nr." class="w-25 border-0 focus-none" name="comp_street2" value="<?php if(!empty($cinfo->company_street2)){ echo $cinfo->company_street2;}?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Company Location
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex border-bottom py-3 font-14">
                              <div><input type="text" class="w-25 border-0 focus-none pt-2" name="cstate" value="<?php if(!empty($cinfo->company_state)){ echo $cinfo->company_state;}?>" placeholder="Enter state">
                          <img src="<?php echo base_url('img/down-arrow.png')?>" class="img-arrow"></div>
                            </div>
                            <div class="d-flex pt-3">
                              <div class="font-14 position-relative">

                                <div id="country_comp" class="custom-arrow" data-input-name="ccountry" data-selected-country="<?php if(!empty($cinfo->company_country)){ echo $cinfo->company_country;}?>" data-button-size="btn-block"  data-scrollable="true" data-scrollable-height="250px"> </div>


                                <img src="<?php echo base_url('img/down-arrow.png')?>" class="img-arrow position-absolute r-10"></div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Contact Informations
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex pt-2 font-14">
                              <input type="text" placeholder="Enter your email id" class="w-100 border-0 focus-none" name="cemail" value="<?php if(!empty($cinfo->comp_email)){ echo $cinfo->comp_email;}?>">
                              <label class="position-relative mb-0 tooltip-hover pt-2">
                                <i class="fa fa-check-circle text-success font-16"></i>
                                <div class="position-absolute tooltip-inner tool-r">Successfully checked</div>
                              </label>
                            </div>
                            <div class="d-flex pt-2 font-14">
                              <input type="text" placeholder="Enter your Phone Number" class="w-100 border-0 focus-none" name="cphone" value="<?php if(!empty($cinfo->comp_phone_no)){ echo $cinfo->comp_phone_no;}?>">
                              <label class="position-relative mb-0 tooltip-hover pt-2">
                                <i class="fa fa-check-circle text-success font-16"></i>
                                <div class="position-absolute tooltip-inner tool-r">Successfully checked</div>
                              </label>
                            </div>
                            <div class="d-flex pt-2 font-14">
                              <input type="text" placeholder="Enter your Mobile Number" class="w-100 border-0 focus-none" name="cmobile" value="<?php if(!empty($cinfo->comp_mobile)){ echo $cinfo->comp_mobile;}?>">
                              <label class="position-relative mb-0 tooltip-hover pt-2">
                                <i class="fa fa-exclamation-circle text-warning font-16"></i>
                                <div class="position-absolute tooltip-inner tool-r">Successfully checked</div>
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 mb-4">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Website & Timezone
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-flex py-3 border-bottom">
                              <input type="text" placeholder="Enter website" class="border-0 focus-none" name="cwebsite" value="<?php if(!empty($cinfo->comp_website)){ echo $cinfo->comp_website;}?>">
                            </div>
                            <div class="d-flex pt-3 font-14">
                              <div>Choose your Timezone <img src="img/down-arrow.png" class="img-arrow"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 mb-4 font-14">
                          <div class="p-3 shadow border-r-10 border h-100">
                            <p class="text-theme border-bottom pb-2">Add languages you speak
                              <a href="javascript:void(0)" class="float-right">
                                <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                              </a>
                            </p>
                            <div class="d-inline-block mr-2 mb-2 bg-theme border-r-20 mt-3 py-1 px-4 text-white position-relative hover-visible hover-dark">English
                              <a href="javascript:void(0)" class="hide d-inline-block font-10 text-white border-0 rounded-circle position-absolute w-15px h-15px pl-3px" style="top: 7px; right: 3px;"><i class="fa fa-close"></i></a>
                            </div>
                            <input type="text" placeholder="Type Language" class="w-50 border-0 focus-none d-none" id="text-show">
                            <a href="javascript:void(0)" id="language-click">
                              <i class="fa fa-plus text-theme"></i> <span class="text-dark">Add</span>
                            </a>
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
                          <input type="submit" class="btn btn-primary bg-primary float-right font-14" value="Save" name="tcinfo">
                        </div>
                      </div>
                  </div>
                </form>
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

    <!-- Bootstrap JavaScript start -->
    <script type="text/javascript">
$(document).ready(function(){
     $('.sepicker').selectpicker();    
});
function updateSymbol(e){
  var selected = $(".currency-selector option:selected");
  $(".currency-symbol").text(selected.data("symbol"))
  $(".currency-amount").prop("placeholder", selected.data("placeholder"))
  $('.currency-addon-fixed').text(selected.text())
}

$(".currency-selector").on("change", updateSymbol)

updateSymbol()
 
</script>

