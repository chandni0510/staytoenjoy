<div class="page-content container-fluid">
        <!-- Panel Basic -->
    <div class="panel">
        <div class="panel-body">
		
		<!-- col-lg-7 offset-lg-2 col-md-6 col-sm-8 offset-md-2 mygutter-->
          <div class="col-md-12 mygutter">
		  
            <div class="white-bx-cst-shdow p-3 pb-4 mb-4 profile-setting bg-white rounded-10">
          
              <a href="javascript:void(0)" class="bars-btn d-none d-lg-inline-block float-right">
                <i class="fa fa-bars font-14 float-right pt-10px text-dark"></i>
              </a>
              <hr>
              <ul class="nav nav-tabs mb-4 justify-content-start scroll-horiztl" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active text-dark font-12 px-0 mx-2" data-toggle="tab" href="#company-details">
                    <img src="<?php echo base_url()?>img/notification.svg"> Company Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark font-12 px-0 mx-2" data-toggle="tab" href="#tax-info">
                    <img src="<?php echo base_url()?>img/block-acc.svg"> Company Tax Informations</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark font-12 px-0 mx-2" data-toggle="tab" href="#verify-documents">
                    <img src="<?php echo base_url()?>img/privacy.svg"> Verification / Documents</a>
                </li>
                <!--<li class="nav-item">-->
                <!--  <a class="nav-link text-dark font-12 px-0 mx-2" data-toggle="tab" href="#payout-details">-->
                <!--    <img src="<?php echo base_url()?>img/privacy.svg"> Payout Details</a>-->
                <!--</li>-->
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="company-details">
                  <form class="contactForm" method="post" action="<?php echo base_url('admin/company_setting/').$cinfo->user_id; ?>">
                    <h6 class="font-weight-bold text-dark mt-3 mb-2 mb-sm-4">Company Informations</h6>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14">Company Name</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" name="cname" placeholder="Type company name here" value="<?php echo isset($cinfo->comp_name) ? $cinfo->comp_name:" "?>" readonly>
                       
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">Legal form</label>
                      <div class="col-sm-9 position-relative">
                        <select class="form-control custom-arrow font-14" name="clegal" readonly>
                          <option>--choose the legel form of this companyty--</option>
                          <option value="select" <?php echo isset($cinfo->comp_legal_form) && $cinfo->comp_legal_form=='select' ?'selected =selected':''?>>Select</option>
                          <option value="select1" <?php echo isset($cinfo->comp_legal_form) && $cinfo->comp_legal_form =='select1' ?'selected =selected':''?>>Select1</option>
                        </select>
                       
                      </div>
                    </div>
                    <?php if(!empty($cinfo->comp_founded)){
                              $comp_founded = explode('-',$cinfo->comp_founded); } 
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
						<div class="form-group row">
							<label class="col-sm-3 col-form-label font-14 pt-10px">Founded</label>
							<div class="col-sm-3 position-relative">
							  <select class="form-control custom-arrow font-14" name="cdate" readonly>
							<?php for($d=1; $d<=31; $d++) { ?>  
							<option <?php if(!empty($comp_founded[0]) && $comp_founded[0] == $d ) { ?> selected="
							  selected" <?php }?> value="<?php echo $d; ?>" > <?php echo $d; ?></option>
						  <?php } ?> </select>
							
						   </div>
						<div class="col-sm-3 position-relative">
						  <select class="form-control custom-arrow font-14" name="cmonth" readonly>
						<?php for($m=0; $m<12; $m++) { ?> 
						<option <?php if(!empty($comp_founded[1]) && $comp_founded[1] == $month[$m]) { ?> selected="
						selected" <?php }?> value="<?php echo $month[$m] ?>" > <?php echo $month[$m]; ?></option>
					  <?php } ?>
					</select>
					
						</div>
					  <div class="col-sm-3 position-relative">
					<select class="form-control custom-arrow font-14" name="cyear" readonly>
					<?php $year = date('Y');
					for($y=1920; $y<=$year; $y++) { ?>  
					<option <?php if(!empty($comp_founded[2]) && $comp_founded[2] == $y) { ?> selected="
					selected" <?php }?> value="<?php echo $y; ?>" > <?php echo $y; ?></option>
					<?php } ?>
				</select>
			
			</div>
				</div>   
                <!--    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">Founded</label>
                      <div class="col-sm-4 position-relative">
                        <select class="form-control custom-arrow font-14" name="cmonth">
                          <option value="1" <?php echo isset($cinfo->comp_founded) && $cinfo->comp_founded=='select' ?'selected =selected':''?> >Month</option>
                          <option value="2">Month</option>
                        </select>
                        <img src="<?php echo base_url()?>img/down-arrow.png" class="position-absolute img-arrow">
                      </div>
                      <div class="col-sm-2 position-relative">
                        <select class="form-control custom-arrow font-14" name="cdate">
                          <option value="1">Date</option>
                          <option value="2">Date</option>
                        </select>
                        <img src="<?php echo base_url()?>img/down-arrow.png" class="position-absolute img-arrow">
                      </div>
                      <div class="col-sm-3 position-relative">
                        <select class="form-control custom-arrow font-14" name="cyear">
                          <option>Year</option>
                          <option>Year</option>
                        </select>
                        <img src="<?php echo base_url()?>img/down-arrow.png" class="position-absolute img-arrow">
                      </div>
                    </div> -->
					
					
					
					
					
					
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-0">Company Registration number</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Type company registration number" name="creg_no" value="<?php echo isset($cinfo->comp_reg_no) ? $cinfo->comp_reg_no:" "?>" readonly>
                      
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-0">Company owner or CEO/Managing Director</label>
                      <div class="col-sm-5 position-relative">
					  <?php $exp ="";
					  if(!empty($cinfo->comp_owner)){
						  $exp = explode('-',$cinfo->comp_owner);						 
					  }?>
                        <input type="text" class="form-control font-14" placeholder="Type company registration number" name="cowner1" value="<?php echo isset($exp[0]) ? $exp[0]:" "?>" readonly>
                      
                      </div>
                      <div class="col-sm-4 position-relative">
                        <input type="text" class="form-control font-14" name="cowner2" value="<?php echo isset($exp[1]) ? $exp[1]:" "?>" readonly>
                   
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">I'm</label>
                      <div class="col-sm-4 position-relative">
                        <select class="form-control custom-arrow font-14" name="cgender" readonly>
                          <option value="Male" <?php echo isset($cinfo->comp_gender) && $cinfo->comp_gender=="Male"?'selected =selected':''?>>Male</option>
                          <option value="Female" <?php echo isset($cinfo->comp_gender) && $cinfo->comp_gender=="Female"?'selected =selected':''?>>Female</option>
                          <option value="Other" <?php echo isset($cinfo->comp_gender)&& $cinfo->comp_gender=="Other"?'selected =selected':''?>>Other</option>
                        </select>
                      
                      </div>
                    </div>
                    <?php if(!empty($cinfo->comp_dob)){
                              $dob = explode('-',$cinfo->comp_dob); } 
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
                    <div class="form-group row">
                <label class="col-sm-3 col-form-label font-14 pt-10px">Birth Date</label>
                <div class="col-sm-3 position-relative">
                  <select class="form-control custom-arrow font-14" name="day" readonly>
                <?php for($d=1; $d<=31; $d++) { ?>  
                <option <?php if(!empty($dob[0]) && $dob[0] == $d ) { ?> selected="
                  selected" <?php }?> value="<?php echo $d; ?>" > <?php echo $d; ?></option>
              <?php } ?> </select>
               
               </div>
            <div class="col-sm-3 position-relative">
              <select class="form-control custom-arrow font-14" name="month" readonly>
            <?php for($m=0; $m<12; $m++) { ?> 
            <option <?php if(!empty($dob[1]) && $dob[1] == $month[$m]) { ?> selected="
            selected" <?php }?> value="<?php echo $month[$m] ?>" > <?php echo $month[$m]; ?></option>
          <?php } ?>
        </select>
      
      </div>
					  <div class="col-sm-3 position-relative">
					<select class="form-control custom-arrow font-14" name="year" readonly>
					<?php $year = date('Y');
					for($y=1920; $y<=$year; $y++) { ?>  
					<option <?php if(!empty($dob[2]) && $dob[2] == $y) { ?> selected="
					selected" <?php }?> value="<?php echo $y; ?>" > <?php echo $y; ?></option>
					<?php } ?>
				</select>
			
			</div>
				</div>   
				
                    <h6 class="font-weight-bold text-dark my-3 mt-5 mb-4 pb-2">Company Location</h6>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">Addressline 1*</label>
                      <div class="col-sm-6 position-relative">
                        <input type="text" class="form-control font-14" placeholder="e.g. type your street" name="address1" value="<?php echo isset($cinfo->comp_address1) ? $cinfo->comp_address1:" "?>" readonly>
                      </div>
                      <div class="col-sm-3 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Street Nr." name="street1" value="<?php echo isset($cinfo->comp_street1) ? $cinfo->comp_street1:" "?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">Addressline 2*</label>
                      <div class="col-sm-6 position-relative">
                        <input type="text" class="form-control font-14" placeholder="e.g. type your street" name="address2" value="<?php echo isset($cinfo->comp_address2) ? $cinfo->comp_address2:" "?>" readonly>
                      </div>
                      <div class="col-sm-3 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Street Nr." name="street2" value="<?php echo isset($cinfo->comp_street2) ? $cinfo->comp_street2:" "?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">Your Location</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Type your city" name="location"  value="<?php echo isset($cinfo->comp_city) ? $cinfo->comp_city:" "?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">State</label>
                      <div class="col-sm-9 position-relative">
                         <input type="text" class="form-control font-14" placeholder="Type your city" name="state"  value="<?php echo isset($cinfo->comp_state) ? $cinfo->comp_state:" "?>" readonly>
                     
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label pt-10px font-14 pr-0" style="letter-spacing: -0.48px;">Zip Code / Country</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control font-14" placeholder="Enter zip code" name="czip_code" value="<?php echo isset($cinfo->comp_zipcode) ? $cinfo->comp_zipcode:" "?>" readonly >
                      </div>
                      <div class="col-sm-5 position-relative">
                         <select class="form-control custom-arrow font-14" data-show-subtext="true" name="country" style="padding-left: 35px!important;" readonly>
            
                        <option class="pl-0" style="padding-left: 0px!important;">Choose your Country</option>
                        <?php if(!empty($country)){ 

                        foreach($country as $con){
                           if($con['iso'] == $cinfo->comp_country){
                            $s = "selected='selected'";
                           }else{
                            $s="";
                           }
                        ?>
                      <option value="<?php echo $con['name'];?>" <?php echo $s; ?> style="background-image:url('../../country/<?php echo $con['country_image'] ?>');">  <?php echo $con['name'];?> </option>
                
                        <?php  } } ?>
                        </select>
                       <!--  <div id="country_name" data-input-name="ccountry" data-selected-country="<?php //if(!empty($cinfo->comp_country)){ echo $cinfo->comp_country;}?>" data-button-size="btn-block" data-scrollable="true" data-scrollable-height="250px" >
                        </div> -->
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">Phone Number</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" name="cphone" value="<?php echo isset($cinfo->comp_phone_no) ? $cinfo->comp_phone_no:" "?>" readonly>
                      </div>
                    </div>
                 
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">Email Address</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Enter your email id" name="cemail" value="<?php echo isset($cinfo->comp_email) ? $cinfo->comp_email:" "?>" readonly>
                     
                      </div>
                    </div>
                    <!-- <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">Add New Email Address</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Enter your email id" name="cnemail" value="<?php //echo isset($cinfo->comp_new_email) ? $cinfo->comp_new_email:" "?>">
                       
                      </div>
                    </div> -->
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">Website</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" name="website" value="<?php echo isset($cinfo->comp_website) ? $cinfo->comp_website:" "?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px">Time Zone</label>
                      <div class="col-sm-9 position-relative">
                        <select class="form-control custom-arrow font-14" id="exampleFormControlSelect1" name="timezone" readonly>
                          <option>-choose-</option>
                          <option value="I'm EU Resident"  <?php echo isset($cinfo->comp_timezone) && $cinfo->comp_timezone=="I'm EU Resident"?'selected =selected':''?> >I'm EU Resident</option>
                          <option value="I'm NON - EU Resident" <?php echo isset($cinfo->comp_timezone) && $cinfo->comp_timezone=="I'm NON - EU Resident"?'selected =selected':''?>>I'm NON - EU Resident</option>
                        </select>
                   
                      </div>
                    </div>
					<hr class="my-4">
                <!-- div class="row">
                  <div class="col">
                    <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">
                  </div>
                  <div class="col">
                    <input type="submit" class="btn btn-primary bg-primary float-right font-14" name="cinfo" value="Save">
                  </div>
                </div> -->
                </form>
                  </div>
                  
              
                <div class="tab-pane fade" id="tax-info">
                 <form class="contactForm" method="post" action="<?php echo base_url('admin/company_setting/').$cinfo->user_id;?>">
				  
                    <h6 class="text-dark my-4">Add Company Tax Informations</h6>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14">Add Tax Type</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Add Tax Type" name="comp_tax_type" value="<?php echo isset($cinfo->comp_tax_type) ? $cinfo->comp_tax_type:" "?>" readonly>
                       
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px pr-0">Add Your Country Tax Rate</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Add Tax Type" name="comp_tax_rate"  value="<?php echo isset($cinfo->comp_tax_rate) ? $cinfo->comp_tax_rate:" "?>" readonly>
                    
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px pr-0">Add Your Company Tax ID</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Add Tax Type" name="comp_tax_id" value="<?php echo isset($cinfo->comp_tax_id) ? $cinfo->comp_tax_id:" "?>" readonly>
                     
                      </div>
                    </div>
                 
                		<hr class="my-4">
               <!--  <div class="row">
                  <div class="col">
                    <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">
                  </div>
                  <div class="col">
                    <input type="submit" class="btn btn-primary bg-primary float-right font-14" name="add_tax" value="Save">
                  </div>
                </div> -->
                </form>
				</div>
                
				
				
				
				<div class="tab-pane fade" id="verify-documents">
                 <div class="contactForm">
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
                                <img src="<?php echo base_url()?>img/windows.svg"> Billing Statement
                              </th>
                              <td class="text-secondary border-bottom-0 font-12">In progress...</td>
                              <td class="text-secondary border-bottom-0 font-12">
                                Please send us more informations about your company. 
                                <span class="text-danger">View Details</span>
                              </td>
                            </tr>
                            <tr>
                              <td class="font-weight-bold text-secondary border-bottom-0">
                                <img src="<?php echo base_url()?>img/windows.svg"> Billing Statement
                              </th>
                              <td class="text-secondary border-bottom-0 font-12 text-success">
                                <img src="<?php echo base_url()?>img/check-green.svg"> Verified
                              </td>
                              <td class="text-secondary border-bottom-0 font-12"></td>
                            </tr>
                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
				           		<hr class="my-4">
             <!--    <div class="row">
                  <div class="col">
                    <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">
                  </div>
                  <div class="col">
                    <input type="submit" class="btn btn-primary bg-primary float-right font-14" value="Save">
                  </div>
                </div> -->
                </div>
                <!--<div class="tab-pane fade" id="payout-details">-->
                <!--  <div class="contactForm">-->
                <!--    <h6 class="font-weight-bold text-dark mt-3">Payout Details <i class="fa fa-info-circle"></i></h6>-->
                <!--    <p class="text-secondary font-13">The monkey-rope is found in all whalers; but it was only in the Pequod that the monkey and his holder were ever tied together.</p>-->
                <!--    <nav>-->
                <!--      <div class="nav nav-tabs" id="nav-tab" role="tablist">-->
                <!--        <a class="nav-item nav-link active text-dark font-12 mx-2 px-0" id="nav-home-tab" data-toggle="tab" href="#user-details"> User Details</a>-->
                <!--        <a class="nav-item nav-link text-dark font-12 mx-2 px-0" id="nav-profile-tab" data-toggle="tab" href="#bank-details"> Bank Details</a>-->
                <!--      </div>-->
                <!--    </nav>-->
                <!--    <div class="tab-content my-3" id="nav-tabContent">-->
                <!--      <div class="tab-pane fade show active" id="user-details">-->
                <!--        <div class="contactForm">-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">First Name <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Last Name <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Birth Date <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Email Address <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">City <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Postal Code <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Notionality <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Country of residence <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Occupation <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--      <div class="tab-pane fade" id="bank-details">-->
                <!--        <div class="contactForm">-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Kontoinhaber <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Strasse / Nr. <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Ort <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="form-group row">-->
                <!--            <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">PLZ <i class="fa fa-lock"></i></label>-->
                <!--            <div class="col-sm-9">-->
                <!--              <input type="text" class="form-control font-14">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <ul class="nav nav-tabs">-->
                <!--            <li class="nav-item">-->
                <!--              <a class="nav-link active" data-toggle="tab" href="#iban">IBAN</a>-->
                <!--            </li>-->
                <!--            <li class="nav-item">-->
                <!--              <a class="nav-link" data-toggle="tab" href="#gb">GB</a>-->
                <!--            </li>-->
                <!--            <li class="nav-item">-->
                <!--              <a class="nav-link" data-toggle="tab" href="#us">US</a>-->
                <!--            </li>-->
                <!--            <li class="nav-item">-->
                <!--              <a class="nav-link" data-toggle="tab" href="#ca">CA</a>-->
                <!--            </li>-->
                <!--            <li class="nav-item">-->
                <!--              <a class="nav-link" data-toggle="tab" href="#sonstige">SONSTIGE</a>-->
                <!--            </li>-->
                <!--          </ul>-->
                          <!-- Tab panes -->
                <!--          <div class="tab-content mt-4">-->
                <!--            <div class="tab-pane container px-0 active" id="iban">-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">IBAN-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">BIC-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <div class="col-sm-9 offset-sm-3">-->
                <!--                  <input type="button" class="btn btn-primary bg-success border font-14" value="Speichern">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--            </div>-->
                <!--            <div class="tab-pane container px-0 fade" id="gb">-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Account Number-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Sort Code-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <div class="col-sm-9 offset-sm-3">-->
                <!--                  <input type="button" class="btn btn-primary bg-success border font-14" value="Speichern">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--            </div>-->
                <!--            <div class="tab-pane container px-0 fade" id="us">-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Account Number-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">ABA-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--            </div>-->
                <!--            <div class="tab-pane container px-0 fade" id="ca">-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Bankname-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14" placeholder="Bankname">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Institution Number-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14" placeholder="Institution Number">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Institution Number-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14" placeholder="Institution Number">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Branchencode-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14" placeholder="Branchencode">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Account Number-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--            </div>-->
                <!--            <div class="tab-pane container px-0 fade" id="sonstige">-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Land-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9 position-relative">-->
                <!--                  <select class="form-control custom-arrow font-14">-->
                <!--                    <option>Afghanistan</option>-->
                <!--                    <option>Select</option>-->
                <!--                    <option>Select</option>-->
                <!--                  </select>-->
                               
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">BIC-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14" placeholder="Bankname">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--              <div class="form-group row">-->
                <!--                <label class="col-sm-3 col-form-label font-14 pt-10px text-left text-sm-right">Account Number-->
                <!--                  <i class="fa fa-lock"></i>-->
                <!--                </label>-->
                <!--                <div class="col-sm-9">-->
                <!--                  <input type="text" class="form-control font-14" placeholder="Bankname">-->
                <!--                </div>-->
                <!--              </div>-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
				           	<!--	<hr class="my-4">-->
                <!--<div class="row">-->
                <!--  <div class="col">-->
                <!--    <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">-->
                <!--  </div>-->
                <!--  <div class="col">-->
                <!--    <input type="submit" class="btn btn-primary bg-primary float-right font-14" value="Save">-->
                <!--  </div>-->
                <!--</div>-->
                <!--</div>-->
              </div>
			   </div>
            </div>
		
		</div>
    </div>
        <!-- End Panel Basic -->
 </div>