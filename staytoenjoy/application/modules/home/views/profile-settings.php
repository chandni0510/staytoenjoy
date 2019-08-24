<?php include_once('include/header.php');?>
     <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="<?php echo base_url('home/profile_setting')?>" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover active">Profile Informations</a></li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/biography')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Biography</a></li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/interests')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Interests</a></li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/about_us')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">About Us</a></li>
        <li class="d-inline-block"><a href="<?php echo base_url('home/family_friends')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Family & Friends</a>
          </li>
          <li class="d-inline-block"><a href="<?php echo base_url('home/relationship')?>" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Relationship</a></li>
        </ul>
      </div>
    </div>

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
            <div class="p-3 pb-4 mb-4 profile-setting bg-white border-r-10 border">
              <form class="contactForm" method="post" action="<?php echo base_url()?>home/profile_setting" enctype='multipart/form-data'>
             <div class="contactForm">             
                <div class="d-flex justify-content-center align-items-center">
                  <div class="col-sm-5 text-left mb-4">
                    <h2 class="text-dark mt-0 mb-5 mb-sm-4">General Informations</h2>
                  </div>
                  <div class="col-sm-7">
                    <img src="<?php echo base_url('img/general-information-img.svg');?>" class="w-100">
                  </div>
                </div>
                <hr class="hr-color-grey mx-3">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-4 mb-4">
                      <div class="p-3 shadow border-r-10 border h-100">
                        <p class="text-theme border-bottom pb-2">Your Name
                          <a href="javascript:void(0)" class="float-right">
                            <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                          </a>
                        </p>
                        <div class="pt-2 text-dark position-relative dropdownhover w-100">
                        <select class="w-100 border-0 focus-none font-14 pt-2 custom-arrow" name="title">
                        <option value="">Title</option>
                          <option value="Dr.">Dr.</option>
                            <option value="Prof."> Prof.</option>
                              <option value="lng.">lng.</option>
                        </select>
                        <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-10">
                        </div>
                      <input type="text" <?php if(!empty($info->first_name)){ ?>
                          value="<?php echo $info->first_name;?>"
                        <?php } ?> class="border-0 focus-none pt-2" name="first_name" placeholder="First Name">
                      <input type="text" <?php if(!empty($info->last_name)){ ?> value="<?php echo $info->last_name; ?>" <?php } ?> class="border-0 focus-none pt-2" name="last_name" placeholder="Last Name">

                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="p-3 shadow border-r-10 border h-100">
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
                        <p class="text-theme border-bottom pb-2">Date of birth
                          <a href="javascript:void(0)" class="float-right">
                            <img src="<?php echo base_url('img/dots-icon.svg') ?>" class="w-15px">
                          </a>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                         <div class="position-relative">
                          <select class="border-0 focus-none custom-arrow font-14" name="day">
						       <option value="">Day</option>
                              <?php for($d=1; $d<=31; $d++) { ?>                
                                <option <?php if(!empty($dob[0]) && $dob[0] == $d ) {  ?> selected="
                                selected" <?php }?> value="<?php echo $d; ?>" > <?php echo $d;  ?></option>
                              <?php } ?>   
                          </select>
                           <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-0"> 
                          </div>
                         <div class="position-relative">
                          <select class="border-0  custom-arrow focus-none font-14" name="month">
						   <option value="">Month</option>
                              <?php for($m=0; $m<12; $m++) { ?>               
                              <option <?php if(!empty($dob[1]) && $dob[1] == $month[$m]) {  ?> selected="
                              selected" <?php }?> value="<?php echo $month[$m] ?>" > <?php echo $month[$m];  ?></option>
                              <?php } ?>
                          </select>
                        <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-0" style="right: -4px;"> 
                          </div>
                          <div class="position-relative">
                          <select class="border-0 focus-none custom-arrow font-14" name="year">
						     <option value="">Year</option>
                              <?php $year = date('Y');
                              for($y=1920; $y<=$year; $y++) { ?>                
                              <option <?php if(!empty($dob[2]) && $dob[2] == $y) {  ?> selected="
                              selected" <?php }?> value="<?php echo $y; ?>" > <?php echo $y;  ?></option>
                              <?php } ?>
                          </select>
                          <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-0" style="right: -4px;"> 
                         </div>
                        </div>
                        <div class="d-flex justify-content-between border-top align-items-center mt-3 pt-2">
                          <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14">Male

                            <input type="radio"  name="gender" checked="checked"  <?php if(!empty($info->gender) && $info->gender=="Male"){ ?> checked="checked" <?php } ?> value="Male">
                            <span class="checkmark"></span>
                          </label>
                          <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14 ">Female
                            <input type="radio"   name="gender" <?php if(!empty($info->gender) && $info->gender=="Female"){ ?> checked="checked" <?php } ?> value="Female">
                            <span class="checkmark"></span>
                          </label>
                          <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14 ">Other
                            <input type="radio"  name="gender" <?php if(!empty($info->gender)&& $info->gender=="Other"){ ?> checked="checked" <?php } ?> value="Other">
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
                          <input type="text" class="border-0 w-100 focus-none" name="email" value="<?php if(!empty($info->email)){ echo $info->email;} ?>" placeholder="Enter your email id">

                          <label class="position-relative mb-0 tooltip-hover pt-2">
                            <i class="fa fa-check-circle text-success font-16"></i>
                            <div class="position-absolute tooltip-inner tool-r">Successfully checked</div>
                          </label>
                          
                        </div>
                        <div class="d-flex pt-2 font-14">
                      
                           <input type="text" class="w-100 border-0 focus-none" name="landline" value="<?php if(!empty($info->landline)){ echo $info->landline;}?>" placeholder="Enter your Phone Number" >

                          <label class="position-relative mb-0 tooltip-hover pt-2">
                            <i class="fa fa-check-circle text-success font-16"></i>
                            <div class="position-absolute tooltip-inner tool-r">Successfully checked</div>
                          </label>
                        </div>
                        <div class="d-flex pt-2 font-14">
                    
                            <input type="text" class="w-100 border-0 focus-none" name="mobile" placeholder="Enter your Mobile Number" value="<?php if(!empty($info->mobile)){ echo $info->mobile;}?>">

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

                           <input type="text" class="w-25 border-0 focus-none pt-2" value="<?php if(!empty($info->city)){ echo $info->city;}?>" placeholder="City">

                         
                         <input type="text"  class="w-25 border-0 focus-none pt-2" name="zipcode" value="<?php if(!empty($info->zipcode)){ echo $info->zipcode;}?>" placeholder="Zip code">

                          <input type="text" class="w-25 border-0 focus-none pt-2" name="address1" value="<?php if(!empty($info->address1)){ echo $info->address1;}?>" placeholder="Adressline 1">

                          <input type="text" class="w-25 border-0 focus-none pt-2 text-right" name="street1" value="<?php if(!empty($info->street1)){ echo $info->street1;}?>"   placeholder="Street Nr.">

                        </div>
                        <div class="d-flex pt-3">
                            <input type="text" class="w-50 border-0 focus-none" name="address2" value="<?php if(!empty($info->address2)){ echo $info->address2;}?>"  placeholder="Adressline 2">

                           <input type="text"  class="w-25 border-0 focus-none"  name="street2" value="<?php if(!empty($info->street2)){ echo $info->street2;}?>"  placeholder="Street Nr.">
                         
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
						 <div class="d-flex pt-3 border-bottom">
                           <div class="position-relative w-100 dropdownhover">
						   <div id="country_name" class="custom-arrow" data-input-name="country"  data-selected-country="<?php if(!empty($info->country)){ echo $info->country;}?>" data-button-size="btn-block"  data-scrollable="true" data-scrollable-height="250px"> </div>
					  
									<img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-10"> 
                            </div>
                        </div>
                        <div class="d-flex py-3 font-14">
                          <div  class="position-relative w-100">
					
						   <select id ="stateid" class="w-100 border-0 custom-arrow focus-none pt-2" name="state" >
                                 <option value="">Select State</option>
                                <?php if(!empty($states)) {
                                    $s = "";
                                  foreach($states as $state){
                                    if($info->state == $state['state_name']){
                                      $s = "selected='selected'";
                                    }else{
                                      $s = "";
                                    }
                                    ?>
                                  <option <?php echo $s; ?> value="<?php echo $state['state_name'];?>"><?php echo $state['state_name'];?></option>
                                  <?php } }?>

                              </select> 
                            <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-10"></div>
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
                                  <div class="position-relative w-100 dropdownhover">
                         <select class="w-100 border-0 custom-arrow focus-none font-14 sepicker" name="user_lang"  data-width="fit" id="exampleFormControlSelect1" style="padding-left: 35px!important;">
                                          <option>Choose Language</option>
								<?php if(!empty($user_lang)) {
                                    $s = "";
                                  foreach($user_lang as $lang){
                                    if($info->user_lang == $lang['code']){
                                      $s = "selected='selected'";
                                    }else{
                                      $s = "";
                                    }
                                    ?>
                                  <option <?php echo $s; ?>  data-content='<span class="flag-icon flag-icon-<?php echo $lang['flag_code'];?>"></span> <?php echo $lang['name'];?>' value="<?php echo $lang['code'];?>"><?php echo $lang['name'];?></option>
                                  <?php } }?>
                                        </select>
                         <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-10"> 

                          </div>
                        </div>
                        <div class="d-flex pt-3">
              <div class="position-relative w-100 dropdownhover">

                              <select class="w-100 border-0 focus-none font-14 sepicker custom-arrow" name="lang" data-width="fit" id="exampleFormControlSelect1" style="padding-left: 35px!important;">
                              <option>Choose Website Language</option>
                              <option <?php if(!empty($info->lang) && $info->lang == "en" ) {  ?> selected="
                              selected" <?php }?>  data-content='<span class="flag-icon flag-icon-us"></span> English' value="en" >English</option>
                              <option <?php if(!empty($info->lang) && $info->lang == "fr" ) {  ?> selected="
                              selected" <?php }?> data-content='<span class="flag-icon flag-icon-fr"></span> French'  value="fr" >French</option>
                              <option <?php if(!empty($info->lang) && $info->lang == "ge" ) {  ?> selected="
                              selected" <?php }?> data-content='<span class="flag-icon flag-icon-de"></span> German'  value="ge" >German</option>
                              <option <?php if(!empty($info->lang) && $info->lang == "hi" ) {  ?> selected="
                              selected" <?php }?> value="hi"  data-content='<span class="flag-icon flag-icon-in"></span> Hindi' >Hindi</option>
                              <option <?php if(!empty($info->lang) && $info->lang == "ur" ) {  ?> selected="
                              selected" <?php }?> value="ur"  data-content='<span class="flag-icon flag-icon-pk"></span> Urdu' >Urdu</option>
                              </select>
                            <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-10"> 
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
                        <!--<div class="d-inline-block mr-2 mb-2 bg-theme border-r-20 mt-3 py-1 px-4 text-white position-relative hover-visible hover-dark">English
                          <a href="javascript:void(0)" class="hide d-inline-block font-10 text-white border-0 rounded-circle position-absolute w-15px h-15px pl-3px" style="top: 7px; right: 3px;"><i class="fa fa-close"></i></a>
                        </div> -->
							<?php if(!empty($info->added_lang))
							{
							$user_lng = explode(',', $info->added_lang); ?>
							<div class="box border-0 focus-none "  id="text-show">
							<ul id="demo2" data-name="demo2" class="border-0 w-100 p-0">
							<?php foreach($user_lng as $lang){ ?>
							<li data-value="<?php echo $lang ?>"><?php echo $lang;?></li> 
							<?php } ?>
							</ul> 
							</div>
							<?php }
							else { ?>
							
							<div class="box border-0 focus-none d-none" id="text-show">
							<ul id="demo2" data-name="demo2" class="border-0 w-100 p-0">
							</ul> 
							</div>
							<div style="margin-top:10px;">
							<a href="javascript:void(0)" id="language-click">
							  <i class="fa fa-plus text-theme"></i> <span class="text-dark">Add</span>
							</a>	
							</div>							
							<?php } ?>
							<input type="hidden" name="languages" id="lang" value="">
                   <!--     <input type="text" placeholder="Type Language" class="w-50 border-0 focus-none d-none" id="text-show"> -->
                        
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
                           <div class="position-relative w-100 dropdownhover">
                         
                    <div class="wrapper">
                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                     <div class="input-group-addon currency-symbol" style="margin-top:10px;">$</div>
                      <div class="input-group-addon currency-addon" style="width:calc(100% - 8px)!important;">

                        <select class="w-100 border-0 currency-selector custom-arrow focus-none font-14" id="exampleFormControlSelect1" name="user_currency">
                            <option <?php if(!empty($info->user_currency) && $info->user_currency == "GBP" ) {  ?> selected="
                            selected" <?php }?> value="GBP" data-symbol="£">GBP </option>
                            <option  <?php if(!empty($info->user_currency) && $info->user_currency == "USD" ) {  ?> selected="
                            selected" <?php }?> value="USD"  data-symbol="$"  >USD </option>
                            <option <?php if(!empty($info->user_currency) && $info->user_currency == "EUR" ) {  ?> selected="
                            selected" <?php }?> value="EUR" data-symbol="€" >EUR </option>
                            <option <?php if(!empty($info->user_currency) && $info->user_currency == "JPY" ) {  ?> selected="
                            selected" <?php }?> value="JPY" data-symbol="¥" >JPY </option>
                            </select>
                        <img src="<?php echo base_url('img/down-arrow.png') ?>" class="img-arrow position-absolute r-10"> 
                          </div>
                        </div>
                         </div>
                        </div>
                        </div>
                        <div class="d-flex pt-2">
                        
                           <input type="text" class="border-0 focus-none" placeholder="Add Country Tax Rate" name="user_tax_rate"  value="<?php echo isset($info->user_tax_rate) ? $info->user_tax_rate:NULL; ?>">
                        </div>
                        <div class="d-flex pt-2">
                           <input type="text" class="border-0 focus-none" placeholder="Add Tax Id" name="user_tax_id" value="<?php echo isset($info->user_tax_id) ? $info->user_tax_id :NULL;?>">

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
                   <input type="submit" class="btn btn-primary bg-primary float-right font-14 gettagval" name="user_data" value="Save">
                   
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="w-22 px-2">
            <?php include 'include/right-three-box.php';?>
          </div>
          
        </div>
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->

    </main> <!-- /main -->

<?php include_once('include/footer.php');?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>


<script type="text/javascript">

$(document).ready(function(){
	var availableTags = ["PHP"];
     $('.sepicker').selectpicker(); 
	// tagit 
	 $('#demo2').tagit({tagSource:availableTags});  
		 $(".gettagval").click(function()
		 {
		 var a =[];
		 $.each(  $("li.getvalue"), function(key,value) 
			{         
				var tag = $(this).find('div.tagit-label').text();
				console.log("tag",tag);
				a.push(tag);
			});
			$("#lang").val((a.join(',')));  			
		});


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