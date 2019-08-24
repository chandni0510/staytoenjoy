<div class="position-relative">
  <div class="position-absolute position-absolute l-0 r-0 b-0 t-0 z-index-999 p-0 bg-white d-none" id="hotel-inner-box">
    <div class="w-100 bg-white plr-15px clearfix border-bottom pb-3">
      <ul class="nav pt-3 nav-tabs d-flex justify-content-center text-center bg-white bg-white border-0 d-none"></ul>
      <ul class="nav nav-tabs d-flex justify-content-center text-center bg-white bg-white border-0">
        <li class="nav-item w-50 border rounded-t-l-5 active-bg-text-theme">
          <a class="nav-link font-14 border-0 text-dark" data-toggle="tab" href="#hotel-tabs">
            Hotels
          </a>
        </li>
        <li class="nav-item w-50 border rounded-r-b-5 active-bg-text-theme">
          <a class="nav-link px-0 font-14 border-0 text-dark bg-transparent" data-toggle="tab" href="#vacation-rentals">
            Vacation Rentals
          </a>
        </li>
      </ul>
    </div>
    <div class="tab-content pb-3 rounded-b-r-10 bg-white">
      <div class="tab-pane container overflow-auto scroll-design bg-white active" id="hotel-tabs">
        <div class="d-none position-absolute map-view border trans100" style="background-image: url('img/map-img.png');">
        </div>
        <div class="position-relative mysearch-box w-100 d-inline-block float-right my-3">
          <input class="form-control mysearch focus-none border-r-5 border-0 pr-2 border" type="text" id="serchBox" placeholder="Hamburg" style="background: #edf3ff; padding-left:30px;">
          <span class="position-absolute text-theme" style="left: 18px; top:5px; background: #edf3ff;">
            <i class="fa fa-map-marker"></i>
          </span>
        </div>
        <div class="row clearfix contactForm">
          <div class="col-md-12 mb-3">
            <div class="d-flex justify-content-between py-2 px-3 border-r-5 border">
              <div class="w-50 border-right">
                <img src="<?php echo base_url()?>img/calendar.svg" class="w-h-18 mt--4px">
                <span class="pl-2 font-12">So.,19.Mai</span>
              </div>
              <div class="w-50 pl-3 font-12">Mo.,20.Mai</div>
            </div>
          </div>

          <div class="col-md-12 mb-3">
            <div class="d-flex justify-content-center border-r-5 border">
              <div class="w-50 font-14 rounded-t-l-5 text-center py-2 active-bg-text-theme" data-toggle="modal" data-target="#guest-popup">Guests</div>
              <div class="w-50 font-14 border-left rounded-r-b-5 text-center py-2 active-bg-text-theme" data-toggle="modal" data-target="#rooms-popup">Rooms</div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group w-100">
              <input type="range" min="1" max="100" value="50" class="slider-range  w-100" id="myRange">
            </div>
          </div>

          <div class="col-md-6 text-center border-right">
            <div class="" data-toggle="modal" data-target="#more-filters-hotel">
              <i class="fa fa-bars text-theme pr-2 font-14"></i>
              <span class="font-14"> More Filter</span>
            </div>
          </div>
          <div class="col-md-6 text-center">
            <i class="fa fa-map-marker text-theme pr-2"></i>
            <span class="font-14" id="map-click"> View on Map</span>
          </div>
          <div class="col-md-12 border-top mt-3"></div>
        
          <div class="p-2">
            <?php 
              for ($x = 0; $x <= 4; $x++) {
            ?>
            <div class="d-flex mt-2 border border-r-10 hover-shadow overflow-hidden">
              <div class="w-60 position-relative">
                <img src="<?php echo base_url()?>img/barcelona.jpg" class="object-fit-cover w-100 h-100">
                <div class="position-absolute bg-white r-5 b-5 border-r-5 py-1 px-2 font-12">84 $</div>
              </div>
              <div class="w-100 py-2 px-1 bg-white position-relative">
                <div class="position-absolute r-5 t-5">
                  <div class="w-h-30px text-white bg-theme rounded-circle font-12" style="padding:6px 7px;">4.9</div>
                </div>
                <p class="text-theme font-14 pl-2 line-h-18 pr-4">Hotel Thomson</p>
                <p class="font-12 my-1 pl-2"><i class="fa fa-user"></i> Kostenloses WLAN</p>
                <div class="w-20 d-inline-block float-left">
                  <div class="profile-pic border-white-2 d-inline-block" style="width: 28px; height: 28px;">
                    <img src="<?php echo base_url()?>img/profile-img.jpg" class="w-100">
                  </div>
                </div>
                <div class="w-80 float-left">
                  <p class="d-inline-block font-12 pl-2">"Restaurant klasse alles sehr sauber</p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>

      <div class="tab-pane container overflow-auto scroll-design bg-white" id="vacation-rentals">
        <div class="d-none position-absolute map-view border trans100" style="background-image: url('img/map-img.png');">
        </div>
        <div class="position-relative mysearch-box w-100 d-inline-block float-right my-3">
          <input class="form-control mysearch focus-none border-r-5 border-0 pr-2 border" type="text" id="serchBox" placeholder="Hamburdddg" style="background: #edf3ff; padding-left:30px;">
          <span class="position-absolute text-theme" style="left: 18px; top:5px; background: #edf3ff;">
            <i class="fa fa-map-marker"></i>
          </span>
        </div>
        <div class="row clearfix contactForm">
          <div class="col-md-12 mb-3">
            <div class="d-flex justify-content-between py-2 px-3 border-r-5 border">
              <div class="w-50 border-right">
                <img src="<?php echo base_url()?>img/calendar.svg" class="w-h-18 mt--4px">
                <span class="pl-2 font-12">So.,19.Mai</span>
              </div>
              <div class="w-50 pl-3 font-12">Mo.,20.Mai</div>
            </div>
          </div>

          <div class="col-md-12 mb-3">
            <div class="d-flex justify-content-center border-r-5 border">
              <div class="w-50 font-14 rounded-t-l-5 text-center py-2 active-bg-text-theme" data-toggle="modal" data-target="#guest-vacation-popup">Guests</div>
              <div class="w-50 font-14 border-left rounded-r-b-5 text-center py-2 active-bg-text-theme" data-toggle="modal" data-target="#rooms-vacation-popup">Rooms</div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group w-100">
              <input type="range" min="1" max="100" value="50" class="slider-range  w-100" id="myRange">
            </div>
          </div>

          <div class="col-md-6 text-center border-right">
            <div class="" data-toggle="modal" data-target="#more-filters-hotel">
              <i class="fa fa-bars text-theme pr-2 font-14"></i>
              <span class="font-14"> More Filter</span>
            </div>
          </div>
          <div class="col-md-6 text-center">
            <i class="fa fa-map-marker text-theme pr-2"></i>
            <span class="font-14" id="map-click"> View on Map</span>
          </div>
          <div class="col-md-12 border-top mt-3"></div>
        
          <div class="p-2">
            <?php 
              for ($x = 0; $x <= 4; $x++) {
            ?>
            <div class="d-flex mt-2 border border-r-10 hover-shadow overflow-hidden">
              <div class="w-60 position-relative">
                <img src="<?php echo base_url()?>img/barcelona.jpg" class="object-fit-cover w-100 h-100">
                <div class="position-absolute bg-white r-5 b-5 border-r-5 py-1 px-2 font-12">84 $</div>
              </div>
              <div class="w-100 py-2 px-1 bg-white position-relative">
                <div class="position-absolute r-5 t-5">
                  <div class="w-h-30px text-white bg-theme rounded-circle font-12" style="padding:6px 7px;">4.9</div>
                </div>
                <p class="text-theme font-14 pl-2 line-h-18 pr-4">Hotel Thomson</p>
                <p class="font-12 my-1 pl-2"><i class="fa fa-user"></i> Kostenloses WLAN</p>
                <div class="w-20 d-inline-block float-left">
                  <div class="profile-pic border-white-2 d-inline-block" style="width: 28px; height: 28px;">
                    <img src="<?php echo base_url()?>img/profile-img.jpg" class="w-100">
                  </div>
                </div>
                <div class="w-80 float-left">
                  <p class="d-inline-block font-12 pl-2">"Restaurant klasse alles sehr sauber</p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container-fluid feed-explore-arrow position-relative">
  <div class="w-100">
    <div class="py-2">
      <p class="d-inline-block pt-1 text-dark font-14">Explore</p>
    </div>
    <div class="owl-carousel owl-theme owl-explore">
      <?php 
      for ($x = 0; $x <= 3; $x++) {
      ?>
      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Restaurants</div>
        </a>
      </div>

      <div class="item">
        <a href="javascript:void(0)" id="hotel-click">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Hotels</div>
        </a>
      </div>

      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Shops</div>
        </a>
      </div>
      <?php } ?>
    </div>
    <div class="border-bottom clearfix mb-3 pb-3">
      <div class="position-relative mysearch-box w-100 d-inline-block float-right">
        <input class="form-control mysearch focus-none border-r-5 border-0 pl-2 border" type="text" id="serchBox" placeholder="Search more" style="background: #edf3ff;">
        <span class="position-absolute text-theme" style="right: 13px; top:5px;">
          <i class="fa fa-search"></i>
        </span>
      </div>
    </div>
    <div class="my-2">
      <p class="d-inline-block pt-1 text-dark font-14">Trends</p>
    </div>
    <div class="owl-carousel owl-theme">
      <?php 
      for ($x = 0; $x <= 3; $x++) {
      ?>
      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Rubys Bar</div>
        </a>
      </div>

      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Livestyle</div>
        </a>
      </div>

      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Munic</div>
        </a>
      </div>
      <?php } ?>
    </div>
    <div class="border-bottom clearfix mb-3 pb-3">
      <div class="position-relative mysearch-box w-100 d-inline-block float-right">
        <input class="form-control mysearch focus-none border-r-5 border-0 pl-2 border" type="text" id="serchBox" placeholder="Search more" style="background: #edf3ff;">
        <span class="position-absolute text-theme" style="right: 13px; top:5px;">
          <i class="fa fa-search"></i>
        </span>
      </div>
    </div>
    <div class="my-2">
      <p class="d-inline-block pt-1 text-dark font-14">Discount & Vochers</p>
    </div>
    <div class="owl-carousel owl-theme">
      <?php 
      for ($x = 0; $x <= 3; $x++) {
      ?>
      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Restaurants</div>
        </a>
      </div>
      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Hotels</div>
        </a>
      </div>
      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Shops</div>
        </a>
      </div>
      <?php } ?>
    </div>
    <div class="border-bottom clearfix mb-3 pb-3">
      <div class="position-relative mysearch-box w-100 d-inline-block float-right">
        <input class="form-control mysearch focus-none border-r-5 border-0 pl-2 border" type="text" id="serchBox" placeholder="Search more" style="background: #edf3ff;">
        <span class="position-absolute text-theme" style="right: 13px; top:5px;">
          <i class="fa fa-search"></i>
        </span>
      </div>
    </div>
    <div class="my-2">
      <p class="d-inline-block pt-1 text-dark font-14">Package Tours</p>
    </div>
    <div class="owl-carousel owl-theme">
      <?php 
      for ($x = 0; $x <= 3; $x++) {
      ?>
      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">USA</div>
        </a>
      </div>

      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Italy</div>
        </a>
      </div>

      <div class="item">
        <a href="javascript:void(0)">
          <div class="bg-secondary w-h-80px position-relative border-r-5 overflow-hidden">
            <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="font-12 text-dark text-center pt-1">Germany</div>
        </a>
      </div>
      <?php } ?>
    </div>
    <div class="border-bottom clearfix mb-3 pb-3">
      <div class="position-relative mysearch-box w-100 d-inline-block float-right">
        <input class="form-control mysearch focus-none border-r-5 border-0 pl-2 border" type="text" id="serchBox" placeholder="Search more" style="background: #edf3ff;">
        <span class="position-absolute text-theme" style="right: 13px; top:5px;">
          <i class="fa fa-search"></i>
        </span>
      </div>
    </div>
  </div>
</div>

<div class="z-index-999999 modal fade" id="guest-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex align-items-center justify-content-center h-100 my-0" role="document">
    <div class="modal-content border-radius-20 overflow-hidden" style="max-width: 400px;">
      <div class="modal-body p-4 text-center overflow-hidden">
        <p class="text-dark font-20">Heading</p>
        <hr class="mb-4 mt-4">
        <div class="mt-30px d-flex justify-content-end align-items-center">
          <p class="font-20 text-dark d-inline-block">0 Adults</p>
          <div class="ml-auto">
            <button class="border text-light focus-outline-none bg-white rounded-circle mr-2 w-h-50px minus-click">-</button>
            <button class="border-black ml-auto focus-outline-none  bg-white rounded-circle text-muted bg-hover-theme plus-click w-h-50px">+</button>
          </div>
        </div>
        <div class="mt-30px d-flex justify-content-end align-items-center">
          <p class="font-20 text-dark d-inline-block">0 Children</p>
          <div class="ml-auto">
            <button class="border text-light focus-outline-none bg-white rounded-circle mr-2 w-h-50px">-</button>
            <button class="border-black ml-auto focus-outline-none  bg-white rounded-circle text-muted bg-hover-theme w-h-50px">+</button>
          </div>
        </div>
        <div class="mt-30px d-flex justify-content-start align-items-center">
          <p class="font-20 text-dark d-inline-block">0 Pets</p>
          <label class="switch ml-3 position-relative d-inline-block my-2">
            <input type="checkbox" checked="">
            <span class="slider round position-absolute c-pointer"></span>
          </label>
          <div class="ml-auto">
            <button class="border text-light focus-outline-none bg-white rounded-circle mr-2 w-h-50px">-</button>
            <button class="border-black ml-auto focus-outline-none  bg-white rounded-circle text-muted bg-hover-theme w-h-50px">+</button>
          </div>
        </div>
        <hr class="mb-4 mt-4">
        <div class="float-right">
          <input type="button" value="Apply" class="font-14 btn btn-primary bg-theme">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="z-index-999999 modal fade" id="rooms-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex align-items-center justify-content-center h-100 my-0" role="document">
    <div class="modal-content border-radius-20 overflow-hidden" style="max-width: 400px;">
      <div class="modal-body p-4 text-center overflow-hidden">
        <p class="text-dark font-20">Heading</p>
        <hr class="mb-4 mt-4">
        <div class="mt-30px d-flex justify-content-end align-items-center">
          <p class="font-20 text-dark d-inline-block">0 Rooms</p>
          <div class="ml-auto">
            <button class="border text-light focus-outline-none bg-white rounded-circle mr-2 w-h-50px minus-click">-</button>
            <button class="border-black ml-auto plus-click focus-outline-none bg-white rounded-circle text-muted text-theme-hover border-theme-hover w-h-50px">+</button>
          </div>
        </div>
        <hr class="mb-4 mt-4">
        <div class="scroll-design-blue" style="min-height:162px; max-height: 162px; overflow:auto;">
          <?php 
            for ($x = 0; $x <= 1; $x++) {
          ?>
          <div class="mb-30px d-flex justify-content-start align-items-center">
            <label class="container-box d-inline-block position-relative c-pointer font-20">Single Room
              <input type="checkbox" checked="checked">
              <span class="checkmark mt-1"></span>
            </label>
          </div>
          <div class="mb-30px d-flex justify-content-start align-items-center">
            <label class="container-box d-inline-block position-relative c-pointer font-20">Double Room
              <input type="checkbox" checked="checked">
              <span class="checkmark mt-1"></span>
            </label>
          </div>
          <div class="mb-30px d-flex justify-content-start align-items-center">
            <label class="container-box d-inline-block position-relative c-pointer font-20">Superior Room
              <input type="checkbox" checked="checked">
              <span class="checkmark mt-1"></span>
            </label>
          </div>
          <?php } ?>
        </div>
        <hr class="mb-4 mt-4">
        <div class="float-right">
          <input type="button" value="Apply" class="btn btn-primary bg-theme">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="z-index-999999 modal fade" id="guest-vacation-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex align-items-center justify-content-center h-100 my-0" role="document">
    <div class="modal-content border-radius-20 overflow-hidden" style="max-width: 400px;">
      <div class="modal-body p-4 text-center overflow-hidden">
        <p class="text-dark font-20">Heading</p>
        <hr class="mb-4 mt-4">
        <div class="mt-30px d-flex justify-content-end align-items-center">
          <p class="font-20 text-dark d-inline-block">0 Adults</p>
          <div class="ml-auto">
            <button class="border text-light focus-outline-none bg-white rounded-circle mr-2 w-h-50px minus-click">-</button>
            <button class="border-black ml-auto focus-outline-none  bg-white rounded-circle text-muted bg-hover-theme plus-click w-h-50px">+</button>
          </div>
        </div>
        <div class="mt-30px d-flex justify-content-end align-items-center">
          <p class="font-20 text-dark d-inline-block">0 Children</p>
          <div class="ml-auto">
            <button class="border text-light focus-outline-none bg-white rounded-circle mr-2 w-h-50px">-</button>
            <button class="border-black ml-auto focus-outline-none  bg-white rounded-circle text-muted bg-hover-theme w-h-50px">+</button>
          </div>
        </div>
        <div class="mt-30px d-flex justify-content-start align-items-center">
          <p class="font-20 text-dark d-inline-block">0 Pets</p>
          <label class="switch ml-3 position-relative d-inline-block my-2">
            <input type="checkbox" checked="">
            <span class="slider round position-absolute c-pointer"></span>
          </label>
          <div class="ml-auto">
            <button class="border text-light focus-outline-none bg-white rounded-circle mr-2 w-h-50px">-</button>
            <button class="border-black ml-auto focus-outline-none  bg-white rounded-circle text-muted bg-hover-theme w-h-50px">+</button>
          </div>
        </div>
        <hr class="mb-4 mt-4">
        <div class="float-right">
          <input type="button" value="Apply" class="font-14 btn btn-primary bg-theme">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="z-index-999999 modal fade" id="rooms-vacation-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex align-items-center justify-content-center h-100 my-0" role="document">
    <div class="modal-content border-radius-20 overflow-hidden" style="max-width: 400px;">
      <div class="modal-body p-4 text-center overflow-hidden">
        <p class="text-dark font-20">Heading</p>
        <hr class="mb-4 mt-4">
        <div class="mt-30px d-flex justify-content-end align-items-center">
          <p class="font-20 text-dark d-inline-block">Bedrooms</p>
          <div class="ml-auto">
            <button class="border text-light focus-outline-none bg-white rounded-circle mr-2 w-h-50px minus-click">-</button>
            <button class="border-black ml-auto plus-click focus-outline-none bg-white rounded-circle text-muted text-theme-hover border-theme-hover w-h-50px">+</button>
          </div>
        </div>
        <div class="mt-30px d-flex justify-content-end align-items-center">
          <p class="font-20 text-dark d-inline-block">Bathrooms</p>
          <div class="ml-auto">
            <button class="border text-light focus-outline-none bg-white rounded-circle mr-2 w-h-50px minus-click">-</button>
            <button class="border-black ml-auto plus-click focus-outline-none bg-white rounded-circle text-muted text-theme-hover border-theme-hover w-h-50px">+</button>
          </div>
        </div>
        <hr class="mb-4 mt-4">
        <div class="float-right">
          <input type="button" value="Apply" class="btn btn-primary bg-theme">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="z-index-999999 modal fade" id="more-filters-hotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex align-items-center justify-content-center h-100 my-0" role="document">
    <div class="modal-content border-radius-20 overflow-hidden" style="max-width: 400px;">
      <div class="modal-body p-4 text-center overflow-hidden" style="height: 548px;">

        <ul class="nav nav-tabs d-flex justify-content-center text-center bg-white pt-2 bg-white">
          <li class="nav-item">
            <a class="nav-link border-0 pr-5 border-bottom-blue h-50px active" data-toggle="tab" href="#amenities">
              <p class="font-14 text-dark">Amenities</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link border-0 border-bottom-blue h-50px" data-toggle="tab" href="#instant-booking">
              <p class="font-14 text-dark">Instant Booking</p>
            </a>
          </li>
        </ul>

        <div class="tab-content pb-3 rounded-b-r-10 bg-white">

          <div class="tab-pane container bg-white active" id="amenities">
            <div class="row mt-4">
              <div class="col-md-6 pr-2 mb-2">
                <div class="border border-r-5 py-1 active-pop-text-theme active">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/wifi-icon.svg" class="w-100 h-100">
                  </div>
                  <br><span class="font-12">Free Wifi</span>
                </div>
              </div>
              <div class="col-md-6 pl-2 mb-2">
                <div class="border border-r-5 py-1 active-pop-text-theme">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/fitness.svg" class="w-100 h-100">
                  </div>
                  <br><span class="font-12">Fitness Center</span>
                </div>
              </div>
              <div class="col-md-6 pr-2 mb-2">
                <div class="border border-r-5 py-1 active-pop-text-theme">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/breakfast-icon.svg" class="w-100 h-100">
                  </div>
                  <br><span class="font-12">Free Breakfast</span>
                </div>
              </div>
              <div class="col-md-6 pl-2 mb-2">
                <div class="border border-r-5 py-1 active-pop-text-theme">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/child-icon.svg" class="w-100 h-100">
                  </div>
                  <br><span class="font-12">Child Friendly</span>
                </div>
              </div>
              <div class="col-md-6 pr-2 mb-2">
                <div class="border border-r-5 py-1 active-pop-text-theme">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/parking-icon.svg" class="w-100 h-100">
                  </div>
                  <br><span class="font-12">Free Parking</span>
                </div>
              </div>
              <div class="col-md-6 pl-2 mb-2">
                <div class="border border-r-5 py-1 active-pop-text-theme">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/pet-feet-icon.svg" class="w-100 h-100">
                  </div>
                  <br><span class="font-12">Pets Allowed</span>
                </div>
              </div>
              <div class="col-md-6 pr-2 mb-2">
                <div class="border border-r-5 py-1 active-pop-text-theme">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/ac-icon.svg" class="w-100 h-100">
                  </div>
                  <br><span class="font-12">Air Conditioned</span>
                </div>
              </div>
              <div class="col-md-6 pl-2 mb-2">
                <div class="border border-r-5 py-1 active-pop-text-theme">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/pool-icon.svg" class="w-100 h-100">
                  </div>
                  <br><span class="font-12">Pool</span>
                </div>
              </div>
              <div class="col-md-6 pr-2 mb-2">
                <div class="border border-r-5 py-1 active-pop-text-theme">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/bar-icon.svg" class="w-100 h-100">
                  </div>
                  <br><span class="font-12">Bar</span>
                </div>
              </div>
              <div class="col-md-6 pl-2 mb-2">
                <div class="border border-r-5 py-1 active-pop-text-theme">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/restaurant-icon.svg" class="w-100 h-100">
                  </div>
                  <br><span class="font-12">Restaurant</span>
                </div>
              </div>
            </div>
            <hr class="mb-4 mt-4">
            <div class="float-right">
              <input type="button" value="Apply" class="btn btn-primary bg-theme">
            </div>
          </div>
          <div class="tab-pane container bg-white" id="instant-booking">
            <div class="row" style="margin-top: 150px;">
              <div class="offset-md-3 col-md-6 pr-2">
                <div class="border border-r-5 py-1 active-pop-text-theme active">
                  <div class="h-25px w-100 d-inline-block">
                    <img src="<?php echo base_url()?>img/wifi-icon.svg" class="w-100 h-100">
                  </div>
                  <br>Instant Booking
                </div>
              </div>
              
            </div>
            <hr class="mb-4" style="margin-top: 171px;">
            <div class="float-right">
              <input type="button" value="English" class="font-14 btn btn-primary bg-theme">
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
  