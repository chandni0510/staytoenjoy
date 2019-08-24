<div class="page-content container-fluid">
        <!-- Panel Basic -->
    <div class="panel">
        <div class="panel-body">
    
    <!-- col-lg-7 offset-lg-2 col-md-6 col-sm-8 offset-md-2 mygutter-->
     <div class="col-md-12 mygutter">
            <div class="shadow p-3 pb-5 mb-4 profile-setting bg-white rounded-10 mb-95" style="min-height: 1156px;">
        
              <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active text-dark font-12 px-2" data-toggle="tab" href="#biographer">
                   Rides Detail</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark font-12 px-2" data-toggle="tab" href="#interests">
                    Driver Detail</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark font-12 px-2" data-toggle="tab" href="#profile-info">
                  User Detail</a>
                </li>            
              </ul>
<div class="tab-content px-2" id="myTabContent">
             <div class="tab-pane fade show active" id="biographer">
                      <form class="contactForm" method="post" action="<?php echo base_url('admin/edit_user/').$info->user_id;?>" enctype='multipart/form-data'>
                  <h4 class="font-weight-bold text-dark my-3 mb-4 pb-2">Rides Detail</h4>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 font-weight-bold">Ride ID</label>
                      <div class="col-sm-10"> 
                        <div class="form-group mb-0">
                           <p><?php echo $rides_listing[0]['ride_sharing_id'] ?></p>
                          
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px font-weight-bold">Departure Point</label>
                      <div class="col-sm-10 position-relative">
                        <p><?php echo $rides_listing[0]['rides_start'] ?></p>
                      </div>
                    </div>
  
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Destination Point</label>
                       <div class="col-sm-10 position-relative">
                        <p><?php echo $rides_listing[0]['rides_destination'] ?></p>
                      </div>
                   </div>        
                    
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Ride Start Date/Time</label>
                       <div class="col-sm-10 position-relative">
                         <p><?php echo date('M d Y',strtotime($rides_listing[0]['ride_start_date']))." at ".date('H i a',strtotime($rides_listing[0]['ride_start_time'])); ?></p>
                      </div>
                   </div> 

                   <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Ride End Date/Time</label>
                       <div class="col-sm-10 position-relative">
                         <p><?php echo date('M d Y',strtotime($rides_listing[0]['ride_end_date']))." at ".date('H i a',strtotime($rides_listing[0]['ride_end_time'])); ?></p>
                      </div>
                   </div>     

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Pipup Distance</label>
                       <div class="col-sm-10 position-relative">
                              <p><?php echo $rides_listing[0]['pipup_distance'];?></p>
                      </div>
                   </div>   
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Ride Detail</label>
                       <div class="col-sm-10 position-relative">
                            <p><?php echo $rides_listing[0]['ride_sharing_detail'];?></p>
                      </div>
                   </div> 
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Ride Status</label>
                       <div class="col-sm-10 position-relative">
                           <p><?php 
                            if($rides_listing[0]['ride_sharing_status'] == 1){
                                echo "Active";
                            }else{
                                echo "Deactive";
                            }

                          ?></p>
                      </div>
                   </div>   
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Ride Creation</label>
                       <div class="col-sm-10 position-relative">

                           <p> <?php echo date('M d Y',strtotime($rides_listing[0]['ride_sharing_creation'])); ?></p>
                      </div>
                   </div>   
                      
              <hr class="my-4">
    
       </form> 
    </div>
          
          
   <div class="tab-pane fade" id="interests">
                  <form class="contactForm">
				 
                    <h4 class="font-weight-bold text-dark my-3">Driver Detail</h4>
                    <hr class="mt-4">
<div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 font-weight-bold">Driver Name</label>
                      <div class="col-sm-10"> 
                        <div class="form-group mb-0">
                           <p><?php echo $ride_driver[0]['driver_name'] ?></p>
                          
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px font-weight-bold">Driver Email</label>
                      <div class="col-sm-10 position-relative">
                        <p><?php echo $ride_driver[0]['driver_email'] ?></p>
                      </div>
                    </div>
  
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Driver Mobile</label>
                       <div class="col-sm-10 position-relative">
                        <p><?php echo $ride_driver[0]['driver_mob'] ?></p>
                      </div>
                   </div>        
                    
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Driver Location</label>
                       <div class="col-sm-10 position-relative">
                       <p>latitude-<?php echo $ride_driver[0]['latitude'] ?></p>
					   <p>longtitude-<?php echo $ride_driver[0]['longtitude'] ?></p>
					   <p>Address-<?php echo $ride_driver[0]['location'] ?></p>
                      </div>
                   </div> 

                   <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Vehicle Image</label>
                       <div class="col-sm-10 position-relative">

							<img src="<?php  echo  base_url('uplaods/rides/car.jpg');?>" height="100" width="100">
                   
                      </div>
                   </div>     

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Vechile inspection</label>
                       <div class="col-sm-10 position-relative">
                              <p><?php echo $ride_driver[0]['vechile_inspection'];?></p>
                      </div>
                   </div>   
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Current Location</label>
                       <div class="col-sm-10 position-relative">
                            <p><?php echo $ride_driver[0]['location']; ?></p>
                      </div>
                   </div> 
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0 font-weight-bold">Driver Status</label>
                       <div class="col-sm-10 position-relative">
                           <p><?php 
                            if($ride_driver[0]['driver_status'] == 1){
                                echo "Active";
                            }else{
                                echo "Deactive";
                            }

                          ?></p>
                      </div>
                   </div>   
                   
                    
                  </form>
                </div>


    
                <div class="tab-pane fade" id="profile-info">
  
              <form class="contactForm" method="post" action="<?php echo base_url('admin/edit_user/').$info->user_id;?>" enctype='multipart/form-data'>
                    <h6 class="font-weight-bold text-dark my-3 mb-4 pb-2">User Information</h6>

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
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Location</label>
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

                 
                    <hr class="my-4">
        
                  </form>
                
        
               </div>

              <!--   <div class="tab-pane fade" id="photo-videos">Photo Videos</div> -->
              </div>
        </div>
    
    </div>
    </div>
        <!-- End Panel Basic -->
 </div>

















