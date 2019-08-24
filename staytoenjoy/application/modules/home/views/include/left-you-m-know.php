<div class="container-fluid">
      
      <?php for ($x = 0; $x <= 2; $x++) { ?>

      <div class="row px-3 pt-3">
        <div class="border border-r-10 p-2 hover-shadow w-100">
          <div class="w-20 float-left">
            <div href="javascript:void(0)" class="bg-secondary rounded-circle overflow-hidden w-h-40 d-flex overflow-hidden">
              <img src="<?php echo base_url()?>img/profile-img.jpg" class="w-100">
            </div>
          </div>
          <div class="w-80 float-left pr-1 d-flex align-items-left flex-column justify-content-center">
            <h6 class="mb-0 text-theme font-14">John Kameron
                <span class="text-secondary font-14">4,970 friends</span>
            </h6>
            <h6 class="mb-0 mt-1 text-secondary font-12">
                <img src="<?php echo base_url()?>img/work-timeline.svg" class="w-h-15 mr-1" style="margin-top: -4px;"> Tour Guide,
                <span class="text-secondary font-12">Hamburg, Germany</span>
            </h6>
            <h6 class="mb-0 mt-1 text-secondary font-12">22 Mutual Friends</h6>
            <div class="w-100 mt-2 text-right">
                <button class="btn btn-primary shadow-none bg-theme text-white border-0 font-11 pt-3px pb-4px px-2 hover-dark">Add as Friend</button>
                <button class="btn btn-primary shadow-none bg-white text-success ml-2 border font-11 pt-3px pb-4px px-2 hover-bg-lt-green">Follow</button>
            </div>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>
    <div class="pt-2 px-3 d-flex border-top mt-3">
      <div class="">
          <a href="javascript:void(0)" class="font-12">
          <img src="<?php echo base_url()?>img/work-timeline-icon.svg" class="w-h-25px va-top"> Find people you know</a>
      </div>
      <div class="ml-auto">
          <a href="javascript:void(0)" class="font-12 pl-2">Refresh</a>
          <a href="javascript:void(0)" class="font-12 pl-2">View All</a>
      </div>
    </div>