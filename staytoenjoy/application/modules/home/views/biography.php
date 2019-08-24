<?php include 'include/header.php';?>

<main role="main">
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
              <form class="contactForm" method="post" action="<?php echo base_url()?>home/biography" id="biography_form" enctype='multipart/form-data'>             
              <div class="contactForm">
                <h6 class="font-weight-bold text-dark my-3">Your Bio
                  <label class="position-relative mb-0 tooltip-hover float-right mb--7">
                    <a href="javascript:void(0)" class="btn btn-primary bg-theme py-1 font-14 text-white" data-toggle="modal" data-target="#bio-edit">
                      Public <i class="fa fa-globe pl-2"></i>
                    </a>
                    <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Who shall see this?</div>
                  </label>
                </h6>
                <hr class="mt-4">
                   <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14">Your Bio</label>
                      <div class="col-sm-10">
                        <div class="form-group mb-0">
                          <textarea class="form-control font-14" placeholder="Type" rows="4"  value="<?php echo isset($bio[0]['user_bio']) ?$bio[0]['user_bio']:" "?>" name="user_bio"><?php echo isset($bio[0]['user_bio']) ? $bio[0]['user_bio']:" "?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px">Your Skills</label>
                      <div class="col-sm-10 position-relative">
                        <input type="text" class="form-control font-14" name="user_skill" value="<?php echo isset($bio[0]['user_skill']) ?$bio[0]['user_skill']:" ";?>" placeholder="Type">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label font-14 pt-10px pr-0">Your Experience</label>
                      <div class="col-sm-10">
                        <div class="border py-3 rounded container-fluid">
                          <div class="row">
                            <div class="col-sm-2">
                              <label class="col-form-label font-14 pt-10px">Company</label>
                            </div>
                            <div class="col-sm-10">
                              <input type="text" class="form-control mr-3 font-14" name="user_comp" value="" required="">
                            </div>
                          </div>
                          <div class="height10"></div>
                          <div class="row">
                            <div class="col-sm-2">
                              <label class="col-form-label font-14 pt-10px">Details</label>
                            </div>
                            <div class="col-sm-10">
                              <input type="text" class="form-control mr-3 font-14"name="user_comp_detail" value="" required="">
                            </div>
                          </div>
              
                       <div class="height10"></div>
                          <div class="row">
                            <div class="col-sm-2">
                              <label class="col-form-label font-14 pt-10px">Role</label>
                            </div>
                             <div class="col-sm-10">
                              <input type="text" class="form-control mr-3 font-14" name="user_role" value="">
                            </div>
                          </div>
                        <div class="height10"></div>
                        <div class="row">
                            <div class="col-sm-2">
                              <label class="col-form-label font-14 pt-10px">From</label>
                            </div>
                             <div class="col-sm-10" style="padding-left:15px;">
              
                          <div class-="col-md-12">
                          <div class="row">
                            <div class="col-sm-5">
                              <input type="text" class="form-control mr-3 font-14 datepicker" name="user_start_date"  value="">
                            </div>
                            <div class="col-sm-1 pl-0">
                              <label class="col-form-label font-14 pt-10px">To</label>
                            </div>
                            <div class="col-sm-5 pl-0">
        
                          <input type="text" class="form-control mr-3 font-14 datepicker"  name="user_end_date"  value="">
                            </div>
                            </div>
                            </div>
                            </div>
                          </div>
              
                          <div class="row">
                      <div class="height10 w-100"></div>
                             <div class="col-sm-6 offset-sm-2">
                              <div class="checkbox mt-2">
                                <label class="container-box d-inline-block mt-2 mr-2 position-relative c-pointer font-14 checkbox">Till Now
                                  <input type="checkbox"  name="till_now"  value="1" class="mr-2">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                    <div class="mt-2">
                      <a href="javascript:void(0)" class="mt-3 font-14 add_more">
                        <i class="fa fa-plus-circle pr-1 text-primary-blue"></i> Add More
                      </a>
                    </div>
                  </div>
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
                    <div class="d-inline-block float-right">
                      
                      <label class="position-relative mb-0 tooltip-hover">
                        <a href="javascript:void(0)" class="btn btn-primary bg-theme py-1 font-14 text-white" data-toggle="modal" data-target="#bio-edit">
                          Public <i class="fa fa-globe pl-2"></i>
                        </a>
                        <div class="position-absolute tooltip-inner mt-2" style="width: 142px;">Who shall see this?</div>
                      </label>
                      
                      <div class="dropdown hide-caret d-inline-block">
                        <a href="javascript:void(0)" data-toggle="dropdown">
                          <img src="<?php echo base_url('img/dots-icon.svg')?>" class="pl-3 w-30px">
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item hover-theme focus-none active-none bio_edit" href="javascript:void(0)" data-edit="<?php echo isset($value['bio_id']) ? $value['bio_id'] :""?>">
                            <i class="fa fa-edit pr-1"></i> Edit</a>
                          <a class="dropdown-item hover-red focus-none active-none" 
                           href="javascript:void(0)" data-toggle="modal" onclick="deleteBio(this,'<?php echo $value['bio_id']; ?>')" data-target="#trash-popup">
                          <i class="fa fa-trash pr-1"  style="cursor:pointer"></i> Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-form-label font-14 text-secondary">
                    <?php echo isset($value['user_comp_detail']) ? $value['user_comp_detail'] :""?>
                
                  </div>
                </div>
             
                <?php }

                }?>
                 </div>            
               </div> 
              <hr class="my-4">
              <div class="row">
                <div class="col">
                  <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">
                </div>
                <div class="col">
                  <input type="submit" class="btn btn-primary bg-primary float-right font-14" name="bio" value="Save">
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
      <?php include 'include/footer.php';?>

<script type="text/javascript">
  function deleteBio(t,bio_id){
    if (confirm('Are you sure you want to delete Experience?')) {
       url = "<?php echo base_url('home/biography_delete')?>";
        $.ajax({
          type:"POST",
          url: url,
          data: {bio_id:bio_id},
          dataType :"text",
          success: function(data)
          {   
                console.log('data',data);
             if(data == '1'){
                 $('div[div-id="'+bio_id+'"]').remove();
                }else{
                    alert('failure');
                }
          }
        });
    }else{
      return false;
    }
  }  
$(document).ready(function($){
   $('.add_more').on('click',function(e){
    var form = $('form').serialize();
  
        url = "<?php echo base_url('home/biography_ajax')?>";
        $.ajax({
          type:"POST",
          url: url,
          data: {form},
          dataType :"text",
          success: function(data)
          {   
            console.log('data',data);
            $('div.bio_divdata').prepend(data);
            $("input[name = 'user_comp']").val('');
            $("input[name = 'user_role']").val('');
            $("input[name = 'user_comp_detail']").val('');
            $("input[name = 'user_start_date']").val('');
            $("input[name = 'user_end_date']").val('');
            $("input[name = 'till_now']").val('');
           //  $('.add_more_div').append('<h6>'+data.user_role+'</h6>');   
          }
        });
          
       });


});
</script>
