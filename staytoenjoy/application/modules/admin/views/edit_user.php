<div class="page-content container-fluid">
        <!-- Panel Basic -->
    <div class="panel">
        <div class="panel-body">
		
		<!-- col-lg-7 offset-lg-2 col-md-6 col-sm-8 offset-md-2 mygutter-->
		 <div class="col-md-12 mygutter">
            <div class="shadow p-3 pb-5 mb-4 profile-setting bg-white rounded-10 mb-95" style="min-height: 1156px;">
        
              <ul class="nav nav-tabs mb-4 justify-content-between" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active text-dark font-12 px-2" data-toggle="tab" href="#profile-info">
                    <img src="<?php echo base_url()?>img/profile-info-icon.svg"> Profile Informations</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark font-12 px-2" data-toggle="tab" href="#biographer">
                    <img src="<?php echo base_url()?>img/biographer-icon.svg"> Biography</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark font-12 px-2" data-toggle="tab" href="#interests">
                    <img src="<?php echo base_url()?>img/interests-icon.svg"> Interests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark font-12 px-2" data-toggle="tab" href="#about-me">
                    <img src="<?php echo base_url()?>img/about-me-icon.svg"> About Me</meter></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark font-12 px-2" data-toggle="tab" href="#family-friends">
                    <img src="<?php echo base_url()?>img/family-friends-icon.svg"> Family Friends</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark font-12 px-2" data-toggle="tab" href="#relationship">
                    <img src="<?php echo base_url()?>img/relationship-icon.svg"> Relationship</a>
                </li>
               <!--  <li class="nav-item">
                  <a class="nav-link text-dark font-12 px-2" data-toggle="tab" href="#photo-videos">
                    <img src="<?php //echo base_url()?>img/photo-videos-icon.svg"> Photo Videos</a>
                </li> -->
              </ul>

              <div class="tab-content px-2" id="myTabContent">
                <div class="tab-pane fade show active" id="profile-info">
	
              <form class="contactForm" method="post" action="<?php echo base_url('admin/edit_user/').$info->user_id;?>" enctype='multipart/form-data'>
                    <h6 class="font-weight-bold text-dark my-3 mb-4 pb-2">General information</h6>
					 <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14">Profile Image</label>
                      <div class="col-sm-10 position-relative">
						<?php
						  $image = "";
						  if(isset($info->user_img)) {
							$image =  base_url('uplaods/profile/').$info->user_img;
						  }else{
			
							$image =  base_url('uplaods/profile/transparent-user.png');
						  }
						  ?>
    
						<img src="<?php  echo $image;?>" height="100" width="100">
                                   
                      </div>
                    </div>
					
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14">First Name</label>
                      <div class="col-sm-10 position-relative">
                        <input type="text" <?php if(!empty($info->first_name)){ ?>
							value="<?php echo $info->first_name;?>"
						<?php } ?> class="form-control font-14" name="first_name" placeholder="First Name" readonly>
      
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Last Name</label>
                      <div class="col-sm-10 position-relative">
                        <input type="text" <?php if(!empty($info->last_name)){ ?> value="<?php echo $info->last_name; ?>" <?php } ?> class="form-control font-14" name="last_name" placeholder="Last Name" readonly>
                     
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">I'm</label>
                      <div class="col-sm-4 position-relative" >
                        <select class="form-control custom-arrow font-14" name="gender" readonly>
                          <option  <?php if(!empty($info->gender) && $info->gender=="Male"){ ?> selected="selected" <?php } ?> value="Male">Male</option>
                          <option <?php if(!empty($info->gender) && $info->gender=="Female"){ ?> selected="selected" <?php } ?> value="Female">Female</option>
                          <option  <?php if(!empty($info->gender)&& $info->gender=="Other"){ ?> selected="selected" <?php } ?> value="Other">Other</option>
                        </select>
                       
                      </div>
                      <div class="col-sm-6 pt-2">
                      <!--   <a href="javascript:void(0)" class="font-14">We use the only for statics</a> -->
                      </div>
                    </div>
		      <?php if(!empty($info->dateofbirth)){
			  $dob = explode(' ',$info->dateofbirth); } 
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
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Birth Date</label>
                      <div class="col-sm-4 position-relative">
                        <select class="form-control custom-arrow font-14" name="day" readonly>
						<?php for($d=1; $d<=31; $d++) { ?>								
							<option <?php if(!empty($dob[0]) && $dob[0] == $d ) {  ?> selected="
							selected" <?php }?> value="<?php echo $d; ?>" > <?php echo $d;  ?></option>
						<?php } ?>                        </select>
                       
                      </div>
                      <div class="col-sm-3 position-relative">
                        <select class="form-control custom-arrow font-14" name="month" readonly>
						<?php for($m=0; $m<12; $m++) { ?>								
					     <option <?php if(!empty($dob[1]) && $dob[1] == $month[$m]) {  ?> selected="
						 selected" <?php }?> value="<?php echo $month[$m] ?>" > <?php echo $month[$m];  ?></option>
						<?php } ?>
                        </select>
                     
                      </div>
                      <div class="col-sm-3 position-relative">
                        <select class="form-control custom-arrow font-14" name="year" readonly>
                        <?php $year = date('Y');
						  for($y=1920; $y<=$year; $y++) { ?>								
					     <option <?php if(!empty($dob[2]) && $dob[2] == $y) {  ?> selected="
						 selected" <?php }?> value="<?php echo $y; ?>" > <?php echo $y;  ?></option>
						<?php } ?>
                        </select>
                   
                      </div>
                    </div>
			  
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Adressline 1*</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control font-14" name="address1" value="<?php if(!empty($info->address1)){ echo $info->address1;}?>" placeholder="e.g. type your street" readonly>
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control font-14" name="street1" value="<?php if(!empty($info->street1)){ echo $info->street1;}?>"  placeholder="Street No." readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Adressline 2*</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control font-14" name="address2" value="<?php if(!empty($info->address2)){ echo $info->address2;}?>"  placeholder="e.g. type your street" readonly>
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control font-14" name="street2" value="<?php if(!empty($info->street2)){ echo $info->street2;}?>"  placeholder="Street No." readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Your Location</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control font-14 pt-10px" value="<?php if(!empty($info->city)){ echo $info->city;}?>" placeholder="Type your City" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">State</label>
                      <div class="col-sm-10 position-relative">
					   <input type="text" class="form-control font-14" name="state" value="<?php if(!empty($info->state)){ echo $info->state;}?>" placeholder="Enter state" readonly>
                        <!--<select class="form-control custom-arrow font-14" name="state">
                        
                          <option <?php if(!empty($info->state)){ ?> selected="selected" <?php } ?> value="<?php echo $info->state;?>"><?php echo $info->state;?></option>
                         
                        </select>    <img src="img/down-arrow.png" class="position-absolute img-arrow">-->
                     
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label pt-10px font-14 pr-0" style="letter-spacing: -0.48px;">Zip Code / Country</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control font-14" name="zipcode" value="<?php if(!empty($info->zipcode)){ echo $info->zipcode;}?>" placeholder="Enter zip code" readonly>
                      </div>
                      <div class="col-sm-6 position-relative">
					  
					<!--  <div id="country_name" data-input-name="country" data-selected-country="<?php if(!empty($info->country)){ echo $info->country;}?>" data-button-size="btn-block"  data-scrollable="true" data-scrollable-height="250px" readonly> </div>  -->
					 <select class="form-control custom-arrow font-14" data-show-subtext="true" name="country" style="padding-left: 35px!important;" readonly>
            
              <option class="pl-0" style="padding-left: 0px!important;">Choose your Country</option>
              <?php if(!empty($country)){ 

              foreach($country as $con){
                 if($con['iso'] == $info->country){
                  $s = "selected='selected'";
                 }else{
                  $s="";
                 }
              ?>
                      <option value="<?php echo $con['name'];?>" <?php echo $s; ?> style="background-image:url('../../country/<?php echo $con['country_image'] ?>');">  <?php echo $con['name'];?> </option>
                
              <?php  } }?>
		  </select>
                <!--
                     
                    
                         
                        <img src="<?php echo base_url()?>img/down-arrow.png" class="position-absolute img-arrow">
                        </select> -->
						
	
                      
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Email</label>
                      <div class="col-sm-10 position-relative">
                        <input type="text" class="form-control font-14" name="email" value="<?php if(!empty($info->email)){ echo $info->email;} ?>" placeholder="Enter your email id" readonly>
                      </div>
                    </div>
                     <!--<div class="form-group row mb-0">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Confirm Email</label>
                      <div class="col-sm-10 position-relative">
                        <input type="text" class="form-control font-14">
                        
                      </div>
                    </div>
                   <div class="form-group row">
                      <div class="col-sm-3 offset-sm-2 position-relative pt-2">
                        <p class="font-14 mb-0">Email not confirmed <i class="fa fa-info-circle text-dark"></i></p>
                      </div>
                      <div class="col-sm-3 text-left font-14">
                        <p class="text-theme-blue pt-10px ">Confirm Your Email</p>
                      </div>
                      <div class="col-sm-4 float-right pt-2">
                        <input type="button" class="font-14 shadow py-0 btn btn-primary bg-primary float-right" value="Save Changes">
                      </div>
                    </div> -->

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0">Phone Number</label>
                      <div class="col-sm-10 position-relative">
                        <input type="text" class="form-control font-14" name="landline" value="<?php if(!empty($info->landline)){ echo $info->landline;}?>"  readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Mobile Number</label>
                      <div class="col-sm-10 position-relative">
                        <input type="text" class="form-control font-14" name="mobile" value="<?php if(!empty($info->mobile)){ echo $info->mobile;}?>" readonly>
                       
                      </div>
                    </div>
                    <!-- <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2 font-14">
                        <a href="javascript:void(0)">+ Add Phone Number</a>
                      </div>
                    </div>-->

                    <h6 class="font-weight-bold text-dark my-3 mt-5 mb-4 pb-2">Language Settings</h6>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Your Language</label>
                      <div class="col-sm-4 position-relative">
                        <select class="form-control custom-arrow font-14" name="user_lang" id="exampleFormControlSelect1" style="padding-left: 35px!important;" readonly>
                      
						  <option <?php if(!empty($info->user_lang) && $info->user_lang == "en" ) {  ?> selected="
						 selected" <?php }?> value="en" >English</option>
                         <option <?php if(!empty($info->user_lang) && $info->user_lang == "fr" ) {  ?> selected="
						 selected" <?php }?> value="fr" >French</option>
						  <option <?php if(!empty($info->user_lang) && $info->user_lang == "ge" ) {  ?> selected="
						 selected" <?php }?> value="ge" >German</option>
						  <option <?php if(!empty($info->user_lang) && $info->user_lang == "hi" ) {  ?> selected="
						 selected" <?php }?> value="hi" >Hindi</option>
						  <option <?php if(!empty($info->user_lang) && $info->user_lang == "ur" ) {  ?> selected="
						 selected" <?php }?> value="ur" >Urdu</option>
                          
                        </select>
         
                   
                      </div>
                    </div>
                     <!-- <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Add Language</label>
                    <div class="col-sm-10 position-relative pt-10px font-14">
                        <input type="text" class="w-25 form-control font-14 d-none mr-3" name="lang" placeholder="Enter language">
                        <a href="javascript:void(0)" class="add-lang">+ Add language</a>
                      </div> 
                    </div>-->
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-0" style="letter-spacing: -0.03px;">Website Language</label>
                      <div class="col-sm-4 position-relative">
					  
                        <select class="form-control custom-arrow font-14" name="lang" id="exampleFormControlSelect1" style="padding-left: 35px!important;" readonly>
                          <option>-choose-</option>
                           <option <?php if(!empty($info->lang) && $info->lang == "en" ) {  ?> selected="
						 selected" <?php }?> value="en" >English</option>
                         <option <?php if(!empty($info->lang) && $info->lang == "fr" ) {  ?> selected="
						 selected" <?php }?> value="fr" >French</option>
						  <option <?php if(!empty($info->lang) && $info->lang == "ge" ) {  ?> selected="
						 selected" <?php }?> value="ge" >German</option>
						  <option <?php if(!empty($info->lang) && $info->lang == "hi" ) {  ?> selected="
						 selected" <?php }?> value="hi" >Hindi</option>
						  <option <?php if(!empty($info->lang) && $info->lang == "ur" ) {  ?> selected="
						 selected" <?php }?> value="ur" >Urdu</option>
                        </select>
                       
                       
                      </div>
                    </div>


                    <h6 class="font-weight-bold text-dark my-3 mt-5 mb-4 pb-2">Finance Settings</h6>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0">Default Currency</label>
                      <div class="col-sm-4 position-relative">
                        <select class="form-control custom-arrow font-14" id="exampleFormControlSelect1" name="user_currency" style="padding-left: 35px!important;" readonly>
                          <option <?php if(!empty($info->user_currency) && $info->user_currency == "GBP" ) {  ?> selected="
						 selected" <?php }?> value="GBP" >GBP</option>
                          <option  <?php if(!empty($info->user_currency) && $info->user_currency == "USD" ) {  ?> selected="
						 selected" <?php }?> value="USD" >USD</option>
                          <option <?php if(!empty($info->user_currency) && $info->user_currency == "EUR" ) {  ?> selected="
						 selected" <?php }?> value="EUR" >EUR</option>
                          <option <?php if(!empty($info->user_currency) && $info->user_currency == "JPY" ) {  ?> selected="
						 selected" <?php }?> value="JPY" >JPY</option>
                        </select>
                     
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-0">Country Tax Rate</label>
                      <div class="col-sm-4 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Add &" name="user_tax_rate"  value="<?php echo isset($info->user_tax_rate) ? $info->user_tax_rate:" ";?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Tax ID</label>
                      <div class="col-sm-4 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Add" name="user_tax_id" value="<?php echo isset($info->user_tax_id) ? $info->user_tax_id:" ";?>" readonly>
                      </div>
                    </div>
                   <!--  <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pr-0">Your Residence</label>
                      <div class="col-sm-4 position-relative">
                        <select class="form-control custom-arrow font-14" id="exampleFormControlSelect1" name="user_residence">
                          <option value="0">-choose-</option>
                          <option  <?php if(!empty($info->user_residence) && $info->user_residence == "I'm EU Resident" ) {  ?> selected="
						 selected" <?php }?> value="I'm EU Resident" >I'm EU Resident</option>
                          <option  <?php if(!empty($info->user_residence) && $info->user_residence == "I'm NON - EU Resident" ) {  ?> selected="
						 selected" <?php }?> value="I'm NON - EU Resident" >I'm NON - EU Resident</option>
                        </select>

                      </div>
                    </div> -->

                    <hr class="my-4">
                    <!--<div class="row">-->
                    <!--  <div class="col-sm-6">-->
                    <!--    <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">-->
                    <!--  </div>-->
                    <!--  <div class="col-sm-6">-->
                    <!--    <input type="submit" class="btn btn-primary bg-primary float-right font-14" name="user_data" value="Save">-->
                    <!--  </div>-->
                    <!--</div>-->
                    
                  </form>
                
				
				</div>
				
	<div class="tab-pane fade" id="biographer">
                      <form class="contactForm" method="post" action="<?php echo base_url('admin/edit_user/').$info->user_id;?>" enctype='multipart/form-data'>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14">Your Bio</label>
                      <div class="col-sm-10"> 
                        <div class="form-group mb-0">
                          <textarea readonly class="form-control font-14" placeholder="Type" rows="4"  value="<?php echo isset($bio[0]['user_bio']) ? $bio[0]['user_bio']:" "?>" name="user_bio"> <?php echo isset($bio[0]['user_bio']) ?$bio[0]['user_bio']:" "?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Your Skills</label>
                      <div class="col-sm-10 position-relative">
                        <input type="text" class="form-control font-14" name="user_skill" value="<?php echo isset($bio[0]['user_skill']) ? $bio[0]['user_skill'] :" ";?>" placeholder="Type" readonly>
                      </div>
                    </div>
  
                 <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0">Your Experience</label>
                   </div>        
             <div class="bio_divdata">
                <?php if(!empty($bio)){

                  foreach ($bio as $value) { ?>
 
                <div class="form-group add_more_div row mt-4" div-id="<?php echo $value['bio_id'] ?>">
                  <div class="col-sm-7 col-form-label font-14 pb-0">
                    <h6 class="mb-1 user_role font-14"><?php echo isset($value['user_role']) ? $value['user_role']:""?></h6>
                    <p class="mb-0 font-14 text-secondary"><?php echo isset($value['user_comp']) ? $value['user_comp'] :""?></p>
                  </div>
                  <div class="col-sm-5 col-form-label font-14 pt-10px">
                    <span class="font-14 text-secondary">

                      <?php if(!empty($value['user_start_date'])){
                        echo date('M Y',strtotime($value['user_start_date']));
                      }else{
                        echo "";      
                      }?> to 
                      <?php if(isset($value['till_now']) && $value['till_now']=="1" ){
                        echo "Current";
                      }else{
                     echo  date('M Y',strtotime($value['user_end_date'])); } ?>
                    </span>
                   
                  </div>
                  <div class="col-sm-12 col-form-label font-14 text-secondary">
                    <?php echo isset($value['user_comp_detail']) ? $value['user_comp_detail'] :""?>
                
                  </div>
                </div>
             
                <?php }

                }?>
                 </div>            
       
              <hr class="my-4">
             
				<!--<div class="row">-->
				<!--  <div class="col-sm-6">-->
				<!--	<input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">-->
				<!--  </div>-->
				<!--  <div class="col-sm-6">-->
				<!--	<input type="submit" class="btn btn-primary bg-primary float-right font-14" name="bio" value="Save">-->
				<!--  </div>-->
				<!--</div>-->
			 </form> 
		</div>
			    
          
			   <div class="tab-pane fade" id="interests">
                  <form class="contactForm">
                    <h6 class="font-weight-bold text-dark my-3">Selected interests</h6>
                    <hr class="mt-4">
                   
                    <div class="form-group row select-intrst">
              
                      <div class="col-sm-6 pr-0">
                            <ul>
                        <?php if(!empty($interests)){
                                foreach ($interests as $key => $value){
                          ?>
                          <li style="padding:5px;"> <?php echo $value['interest_cat_name']; ?></li>
                      
                        <?php } } ?>
                        </ul>
                      </div>
         
            
                    </div>
                    
                  </form>
                </div>
              
			  <div class="tab-pane fade" id="about-me">
              <form class="contactForm" method="post" action="<?php echo base_url('admin/edit_user/').$info->user_id;?>" enctype='multipart/form-data'>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14">Tell something about you</label>
                      <div class="col-sm-10">
                        <div class="form-group mb-0">
                          <textarea class="form-control font-14" placeholder="Type" rows="4" name="user_about"  readonly value="<?php echo isset($about->user_about) ? $about->user_about : " " ;?>"><?php echo isset($about->user_about) ? $about->user_about : " " ;?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                     <label class="col-sm-2 col-form-label font-14">My life motto</label>
                      <div class="col-sm-10">
                        <div class="form-group mb-0">
                          <textarea readonly class="form-control font-14" placeholder="Type" name="user_motto" rows="4" value="<?php echo isset($about->user_motto) ? $about->user_motto : " " ;?>"><?php echo isset($about->user_motto) ? $about->user_motto : " " ;?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                     <label class="col-sm-2 col-form-label font-14">My Hobbied</label>
                      <div class="col-sm-10">
                        <div class="form-group mb-0">
                          <textarea readonly class="form-control font-14" placeholder="Type" name="user_hobbies" value="<?php echo isset($about->user_hobbies) ? $about->user_hobbies : " " ;?>" rows="4"><?php echo isset($about->user_hobbies) ? $about->user_hobbies : " " ;?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pr-0">Define Hobbies</label>
                      <div class="col-sm-10 mb-3">
                        <input  readonly type="text" class="form-control font-14" placeholder="Type" name="user_define_hobbies" value="<?php echo isset($about->user_define_hobbies) ? $about->user_define_hobbies : " " ;?>">
                        <div class="border px-3 py-5 mt-2" style="border-style: dashed!important; border-width: 2px!important;">
                          <div class="font-14">
            						  <?php if(isset($about->user_hobbies_upload)) {?>
            							<img src="<?php echo base_url();?>img/<?php echo $about->user_hobbies_upload; ?>" height="100" width="100">
            							<?php }else{?>
                                        <img src="<?php echo base_url()?>img/upload.svg" class="w-12">
            							<?php } ?>
                         
                          </div>
                        
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14">Favorite Books</label>
                      <div class="col-sm-10">
                        <div class="form-group mb-0">
                          <textarea class="form-control font-14" placeholder="Type" name="user_fav_book" readonly value="<?php echo isset($about->user_fav_book) ? $about->user_fav_book : " " ;?>" rows="4"><?php echo isset($about->user_fav_book) ? $about->user_fav_book : " " ;?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2 mb-3">
                        <div class="border px-3 py-5 mt-2" style="border-style: dashed!important; border-width: 2px!important;">
                          <div class="font-14">
                          <?php if(isset($about->user_book_upload)) {?>
              							<img src="<?php echo base_url();?>img/<?php echo $about->user_book_upload; ?>" height="100" width="100">
              							<?php } else{?>
              							  <img src="<?php echo base_url()?>img/upload.svg" class="w-12">
              							<?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14">Favorite Writes</label>
                      <div class="col-sm-10">
                        <div class="form-group mb-0">
                          <textarea  readonly class="form-control font-14" placeholder="Type" rows="4" name="user_fav_writes" value="<?php echo isset($about->user_fav_writes) ? $about->user_fav_writes : " " ;?>"><?php echo isset($about->user_fav_writes) ? $about->user_fav_writes : " " ;?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2 mb-3">
                        <div class="border px-3 py-5 mt-2" style="border-style: dashed!important; border-width: 2px!important;">
                          <div class="font-14">
                            <?php if(isset($about->user_writes_upload)) {?>
              							<img src="<?php echo base_url();?>img/<?php echo $about->user_writes_upload; ?>" height="100" width="100">
              							<?php }else{?>
              							<img src="<?php echo base_url()?>img/upload.svg" class="w-12">
              							<?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14">Your Favorite Club</label>
                      <div class="col-sm-10">
                        <div class="form-group mb-0">
                          <textarea readonly name="user_fav_club" class="form-control font-14" value="<?php echo isset($about->user_fav_club) ? $about->user_fav_club : " " ;?>"  placeholder="Type" rows="4"><?php echo isset($about->user_fav_club) ? $about->user_fav_club : " " ;?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2 mb-3">
                        <div class="border px-3 py-5 mt-2" style="border-style: dashed!important; border-width: 2px!important;">
                          <div class="font-14">
                            <?php if(isset($about->user_club_upload)) {?>
              							<img src="<?php echo base_url();?>img/<?php echo $about->user_club_upload; ?>" height="100" width="100">
              							<?php }else{?>
              							<img src="<?php echo base_url()?>img/upload.svg" class="w-12">
              							<?php } ?>
                            
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14">Other Interests</label>
                      <div class="col-sm-10">
                        <div class="form-group mb-0">
                          <textarea readonly class="form-control font-14" placeholder="Type" name="user_other_interest" value="<?php echo isset($about->user_other_interest) ? $about->user_other_interest : " " ;?>" rows="4"><?php echo isset($about->user_other_interest) ? $about->user_other_interest : " " ;?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2 mb-3">
                        <div class="border px-3 py-5 mt-2" style="border-style: dashed!important; border-width: 2px!important;">
                          <div class="font-14">
                          <?php if(isset($about->user_othert_upload)) {?>
              							<img src="<?php echo base_url();?>img/<?php echo $about->user_othert_upload; ?>" height="100" width="100">
              							<?php }else{?>
              							  <img src="<?php echo base_url()?>img/upload.svg" class="w-12">
              							<?php } ?>
                           
                          </div>
                        
                        </div>
                      </div>
                    </div>

                    <hr class="my-4">
                    <!--<div class="row">-->
                    <!--  <div class="col-sm-6">-->
                    <!--    <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">-->
                    <!--  </div>-->
                    <!--  <div class="col-sm-6">-->
                    <!--    <input type="submit" class="btn btn-primary bg-primary float-right font-14" name="about" value="Save">-->
                    <!--  </div>-->
                    <!--</div>-->
                  </form>
        </div>

     
        <div class="tab-pane fade" id="family-friends">
          <form class="contactForm">
            <h6 class="font-weight-bold text-dark my-3">Family & Friends
            </h6>
            <hr class="mt-4">
            <div class="form-group row select-intrst">
              <div class="col-md-12 ">
                 <div class="text-theme-blue py-4 font-14">Family Members</div>
                   
                   
                <?php   if(!empty($family_fr)){
                 foreach ($family_fr as $family) {
                   if(!empty($family['family_image'])){
                 ?>
                 <div class="w-100">
               <div class="col-md-3 ">
                  <img src="<?php echo base_url('uplaods/famliy_friends/').$family['family_image']; ?>">
                </div>
                   </div> 
              <?php } } }?>
               
            
              </div>
            </div>
             <div class="form-group row select-intrst">
              <div class="col-sm-12 ">
                <div class="text-theme-blue py-4 font-14">Friends</div>
                  <?php   if(!empty($family_fr)){
                 foreach ($family_fr as $family) {
                   if(!empty($family['fr_image'])){
                 ?>
                <div class="w-100">
                 <img src="<?php echo base_url('uplaods/famliy_friends/').$family['fr_image']; ?>">
                </div>
                  <?php } } }?>
              </div>
              </div>
            <hr class="my-4">
          </form>
        </div>

        <div class="tab-pane fade" id="relationship">
              <div class="contactForm">
                <h6 class="font-weight-bold text-dark my-3">Relationship
                </h6>
                <hr class="mt-4">
                <div class="form-group row select-intrst">
                  <div class="col-sm-12">
                    <div class="text-theme-blue py-4 font-14">Uploaded Pictures</div>
                    <div class="w-100">
                      <img src="<?php echo base_url('img/family-img.svg') ?>">
                    </div>
                  </div>
                </div>
              </div>
        </div>
              <!--   <div class="tab-pane fade" id="photo-videos">Photo Videos</div> -->
              </div>
        </div>
		
		</div>
    </div>
        <!-- End Panel Basic -->
 </div>