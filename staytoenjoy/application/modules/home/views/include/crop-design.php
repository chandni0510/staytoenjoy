<div class="w-100 h-100 position-absolute text-white z-index-1 d-none" id="crop-popup">
  <div class="bg-secondary position-relative w-100 h-100 p-5 d-flex justify-content-center">
    <div class="p-5 text-dark align-self-center max-w-55">
      <div class="img-box mb-3">
        <img src="<?php echo base_url() ?>img/timeline/face-min.jpg" class="w-100 h-100">
      </div>
      <div class="bg-white border-r-20 border py-2 px-3 w-75 m-auto d-flex justify-content-around">
        <span>Size and ratio</span>
        <div class="w-h-22px"><img src="<?php echo base_url() ?>img/aspect-ratio.svg" class="w-100"></div>
        <div class="w-h-22px"><img src="<?php echo base_url() ?>img/reflect-left.svg" class="w-100"></div>
        <div class="w-h-22px"><img src="<?php echo base_url() ?>img/reflect-right.svg" class="w-100"></div>
        <div class="w-h-22px"><img src="<?php echo base_url() ?>img/rotate-left.svg" class="w-100"></div>
        <div class="w-h-22px"><img src="<?php echo base_url() ?>img/rotate-right.svg" class="w-100"></div>
      </div>
    </div>
    <div class="position-absolute t-0 l-0 b-0 bg-white text-dark px-3 border h-100 text-center pt-5">
        <a href="javascript:void(0)" class="text-dark my-4 d-block">
          <div class="box-inner-crop">
            <div class="w-h-25px m-auto">
              <img src="<?php echo base_url() ?>img/crop-icon.svg" class="w-100 img-norm">
              <img src="<?php echo base_url() ?>img/crop-icon-w.svg" class="w-100 img-hover">
            </div>
          </div>
          <p class="m-2 hover-theme font-14">Crop</p>
        </a>
        <a href="javascript:void(0)" class="text-dark my-4 d-block">
          <div class="box-inner-crop">
            <div class="w-h-25px m-auto">
              <img src="<?php echo base_url() ?>img/filters-icon.svg" class="w-100 img-norm">
              <img src="<?php echo base_url() ?>img/filters-icon-w.svg" class="w-100 img-hover">
            </div>
          </div>
          <p class="m-2 hover-theme font-14">Filters</p>
        </a>
        <a href="javascript:void(0)" class="text-dark my-4 d-block">
          <div class="box-inner-crop">
            <div class="w-h-25px m-auto">
              <img src="<?php echo base_url() ?>img/adjust-icon.svg" class="w-100 img-norm">
              <img src="<?php echo base_url() ?>img/adjust-icon-w.svg" class="w-100 img-hover">
            </div>
          </div>
          <p class="m-2 hover-theme font-14">Adjust</p>
        </a>
        <a href="javascript:void(0)" class="text-dark my-4 d-block">
          <div class="box-inner-crop">
            <div class="w-h-25px m-auto">
              <img src="<?php echo base_url() ?>img/scissor-icon.svg" class="w-100 img-norm">
              <img src="<?php echo base_url() ?>img/scissor-icon-w.svg" class="w-100 img-hover">
            </div>
          </div>
          <p class="m-2 hover-theme font-14">Cut Out</p>
        </a>
        <a href="javascript:void(0)" class="text-dark my-4 d-block">
          <div class="box-inner-crop">
            <div class="w-h-25px m-auto">
              <img src="<?php echo base_url() ?>img/text-icon.svg" class="w-100 img-norm">
              <img src="<?php echo base_url() ?>img/text-icon-w.svg" class="w-100 img-hover">
            </div>
          </div>
          <p class="m-2 hover-theme font-14">Text</p>
        </a>
    </div>
    <div class="position-absolute t-0 l-0 r-0 bg-white text-center text-dark py-3 border pl-5">Photos Studio
      <a href="javascript:void(0)" class="float-right mr-3 text-dark"><i class="fa fa-close hover-red" id="crop-popup-close"></i></a>
      <a href="javascript:void(0)" class="float-right mr-3 text-dark"><i class="fa fa-question-circle hover-theme"></i></a>
    </div>
    <div class="position-absolute b-0 l-0 r-0 bg-white text-dark py-3 px-4 border d-flex justify-content-left align-items-center">
      <a href="javascript:void(0)" class="mr-3 text-secondary"><i class="fa fa-rotate-left hover-theme"></i></a>
      <a href="javascript:void(0)" class="mr-3 text-secondary"><i class="fa fa-rotate-right hover-theme"></i></a>
      <a href="javascript:void(0)" class="mr-3 pl-3 text-secondary border-left border-secondary hover-theme">
        <i class="fa fa-refresh hover-theme"> Reset</i>
      </a>
      <input type="button" value="Cancel" class="btn btn-primary bg-white text-theme font-14 border-0 ml-auto">
      <input type="button" value="Save" class="btn btn-primary bg-theme font-14 ml-3">
    </div>
  </div>
</div>