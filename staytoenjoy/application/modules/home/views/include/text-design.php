<div class="w-100 h-100 position-absolute z-index-1 d-none" id="text-popup">
  <div class="bg-secondary position-relative w-100 h-100 d-flex justify-content-center">
    <div class="w-80 float-left p-3">
      <div class="text-center">Add Text</div>
      <div class="w-75 m-auto py-4">
        <img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="w-100">
        <div class="mt-3 text-center">Your text will be visible on here</div>
      </div>
    </div>
    <div class="w-20 float-left bg-white p-3">
      <p class="text-center font-14 text-dark">Text
        <span class="float-right text-right" id="text-popup-close">
          <i class="fa fa-close hover-red"></i>
        </span>
      </p>
      <textarea placeholder="You can type your text on here" class="border-0 border-theme w-100 my-3 py-2 px-3 border-r-5 resize-none"></textarea>
      <div class="border-top pt-3">Layout</div>
      <div class="d-flex">
        <a href="javascritp:void(0)" class="w-100 text-center p-2"><img src="<?php echo base_url() ?>img/arrow-switch-big.svg" class="w-100"></a>
        <a href="javascritp:void(0)" class="w-100 text-center p-2"><img src="<?php echo base_url() ?>img/arrow-switch-top.svg" class="w-100"></a>
        <a href="javascritp:void(0)" class="w-100 text-center p-2"><img src="<?php echo base_url() ?>img/arrow-switch-left.svg" class="w-100"></a>
      </div>
      <div class="d-flex">
        <a href="javascritp:void(0)" class="w-100 text-center p-2"><img src="<?php echo base_url() ?>img/arrow-switch-small.svg" class="w-100"></a>
        <a href="javascritp:void(0)" class="w-100 text-center p-2"><img src="<?php echo base_url() ?>img/arrow-switch-bottom.svg" class="w-100"></a>
        <a href="javascritp:void(0)" class="w-100 text-center p-2"><img src="<?php echo base_url() ?>img/arrow-switch-right.svg" class="w-100"></a>
      </div>
      <div class="d-flex align-items-center h-100 mt-5">
        <input type="button" value="Cancel" class="btn btn-primary bg-red border-0 font-14 h-fit-content">
        <input type="button" value="Done" class="btn btn-primary bg-theme font-14 ml-auto h-fit-content">
      </div>
    </div>
  </div>
</div>