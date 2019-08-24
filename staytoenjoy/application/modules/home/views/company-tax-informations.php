<?php include 'include/header.php';?>

    <?php //include 'include/after-login-header.php';?>
    
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
              <form  method="post" action="<?php echo base_url() ?>home/company_tax">
              <div class="contactForm">
               
                <h6 class="font-weight-bold text-dark my-3">Add Company Tax Informations</h6>
                <hr class="mt-4">
          
                   
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14">Add Tax Type</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Add Tax Type" name="comp_tax_type" value="<?php echo isset($cinfo->comp_tax_type) ? $cinfo->comp_tax_type:" "?>">
                        <img src="<?php echo base_url()?>img/check-icon.svg" class="position-absolute check-icon pt-1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px pr-0">Add Your Country Tax Rate</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Add Tax Type" name="comp_tax_rate"  value="<?php echo isset($cinfo->comp_tax_rate) ? $cinfo->comp_tax_rate:" "?>">
                        <img src="<?php echo base_url()?>img/check-icon.svg" class="position-absolute check-icon pt-1">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label font-14 pt-10px pr-0">Add Your Company Tax ID</label>
                      <div class="col-sm-9 position-relative">
                        <input type="text" class="form-control font-14" placeholder="Add Tax Type" name="comp_tax_id" value="<?php echo isset($cinfo->comp_tax_id) ? $cinfo->comp_tax_id:" "?>">
                        <img src="<?php echo base_url()?>img/check-icon.svg" class="position-absolute check-icon pt-1">
                      </div>
                    </div>
        
              </div>
              
              <hr class="my-4">
              <div class="row">
                <div class="col">
                  <input type="button" class="btn btn-primary bg-danger border font-14" value="Cancel">
                </div>
                <div class="col">
                  <input  type="submit"  class="btn btn-primary bg-primary float-right font-14" name="add_tax" value="Save">
                </div>
              </div>
            </form>
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
