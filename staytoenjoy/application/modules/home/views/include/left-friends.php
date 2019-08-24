<div class="container-fluid">
  <div class="mx-h-160 overflow-hidden mt-3 border-r-5 position-relative">
    <img src="<?php echo base_url()?>img/group-picture.png" class="w-100 object-fit-cover">
    <div class="position-absolute l-0 b-0 p-1 d-flex w-100 align-items-center" style="background: #00000052;">
      <div class="w-40px d-inline-block">
        <img src="<?php echo base_url()?>img/groups-img.svg" class="w-100">
      </div>
      <p class="font-12 text-white d-inline-block font-weight-bold pl-1" style="line-height: 14px; height: fit-content;">Stay connected with your friends</p>
    </div>
  </div>
  <div class="clearfix pt-3">
    <div class="position-relative border-bottom pb-3 mysearch-box w-100 d-inline-block float-right">
      <input class="form-control mysearch focus-none border-r-5 border-0 pl-2 border" type="text" id="serchBox" placeholder="Search more" style="background: #edf3ff;">
      <span class="position-absolute text-theme" style="right: 13px; top:5px;">
          <i class="fa fa-search"></i>
      </span>
    </div>
  </div>


  <h6 class="mt-3 mb-2 font-14">222 Friends</h6>
  <?php 
      for ($x = 0; $x <= 2; $x++) {
    ?>
  <div class="row mt-2 px-2">
    <div class="col-md-4 mygutter px-0p5">
      <div class="bg-secondary h-90px position-relative box">
        <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover border-r-5">
        <div class="position-absolute b-0 l-0 r-0 text-white text-center bg-lt-dark font-12 p-1 font-weight-bold">2 new posts</div>
        <div class="position-absolute border-r-5 visible-hover bg-white text-dark border z-index-1 w-390 shadow-md t-90">
          <?php include 'friends-profiles-secondhover.php';?>
        </div>
      </div>
      <div class="text-theme text-center font-12">Peter</div>
    </div>
    <div class="col-md-4 mygutter px-0p5">
      <div class="bg-secondary h-90px position-relative box">
        <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover border-r-5">
        <div class="position-absolute b-0 l-0 r-0 text-white text-center bg-lt-dark font-12 p-1 font-weight-bold">Upload video</div>
        <div class="position-absolute border-r-5 visible-hover bg-white text-dark border z-index-1 w-390 shadow t-90">
          <?php include 'friends-profiles-onhover.php';?>
        </div>
      </div>
      <div class="text-theme text-center font-12">Peter</div>
    </div>

    <div class="col-md-4 mygutter px-0p5">
      <div class="bg-secondary h-90px position-relative box">
        <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover border-r-5">
        <div class="position-absolute b-0 l-0 r-0 text-white text-center bg-lt-dark font-12 p-1 font-weight-bold">Discount today</div>
        <div class="position-absolute border-r-5 visible-hover bg-white text-dark border z-index-1 w-390 shadow t-90">
          <?php include 'friends-profiles-secondhover.php';?>
        </div>
      </div>
      <div class="text-theme text-center font-12">Peter</div>
    </div>
  </div>
  <?php } ?>
  <div class="pt-3 font-12 text-center">
    <p class="">See what you have in common with your friends</p>
    <button class="btn btn-primary py-0 h-20px font-12 px-2 mt-2">View more</button>
  </div>
</div>