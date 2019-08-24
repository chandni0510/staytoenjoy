<div class="container-fluid">
  <h6 class="mt-3 mb-2 font-14 d-inline-block">222 Pictures</h6>
  <img src="<?php echo base_url()?>img/noun_dot.svg">
  <h6 class="mt-3 mb-2 font-14 d-inline-block">5 Alubms</h6>
  <?php for ($x = 0; $x <= 2; $x++) { ?>
  <div class="row mt-1 px-2">
    <div class="col-md-4 mygutter px-0p5">
      <div class="bg-secondary h-90px position-relative box">
        <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover border-r-5">
      </div>
    </div>
    <div class="col-md-4 mygutter px-0p5">
      <div class="bg-secondary h-90px position-relative box">
        <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover border-r-5">
      </div>
    </div>

    <div class="col-md-4 mygutter px-0p5">
      <div class="bg-secondary h-90px position-relative box">
        <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover border-r-5">
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="pt-2 text-center">
      <a href="javascript:void(0)" class="font-12 pl-2">View All</a>
  </div>
</div>