<div class="w-100">
	<div class="mx-h-160 overflow-hidden mt-3 mx-3 border-r-5 position-relative">
		<img src="<?php echo base_url()?>img/group-picture.png" class="w-100 object-fit-cover">
		<div class="position-absolute l-0 b-0 p-1 d-flex w-100" style="background: #00000052;">
			<div class="w-40px d-inline-block">
				<img src="<?php echo base_url()?>img/groups-img.svg" class="w-100">
			</div>
			<p class="font-12 text-white d-inline-block font-weight-bold pt-1 pl-1" style="line-height: 14px; height: fit-content;">How you find and join people with <br> your interests</p>
		</div>
	</div>
	<div class="clearfix p-3">
		<div class="position-relative border-bottom pb-3 mysearch-box w-100 d-inline-block float-right">
			<input class="form-control mysearch focus-none border-r-5 border-0 pl-2 border" type="text" id="serchBox" placeholder="Search more" style="background: #edf3ff;">
			<span class="position-absolute text-theme" style="right: 13px; top:5px;">
		  		<i class="fa fa-search"></i>
			</span>
		</div>
	</div>
	<div class="w-100 px-3">
		<h6 class="font-14">News for you</h6>
		<div class="container-fluid px-0">

			<?php for ($x = 0; $x <= 2; $x++) { ?>

			<div class="row mb-2 px-3 border-bottom pb-3">
				<div class="d-flex mt-2 border border-r-10 hover-shadow overflow-hidden">
	              <div class="w-60">
	                <img src="<?php echo base_url()?>img/barcelona.jpg" class="object-fit-cover w-100 h-100">
	              </div>
	              <div class="w-100 py-2 pl-2 pr-1 bg-white">
	                <h6 class="mb-1 font-14">White House Wanted USS John McCain 'Out of Sight'</h6>
	                <p class="font-12">For Next <img src="<?php echo base_url()?>img/noun_dot.svg"> 3 hours ago</p>
	                <div class="images-group ml-0">
	      				<a href="javascript:void(0)" class="font-14 text-theme">
	      					<img src="<?php echo base_url()?>img/newspaper-icon.svg" class="w-h-15 va-text-b mr-2">View full coverage
	      				</a>
	      			</div>
	              </div>
	            </div>
		  	</div>

		  	<?php } ?>

		</div>
	</div>

</div>