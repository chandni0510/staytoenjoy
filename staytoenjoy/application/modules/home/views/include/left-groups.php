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
	<div class="w-100">
		<h6 class="font-14 px-3">Suggested Pages</h6>
		
		<div class="container-fluid">
			<div class="row border-bottom hover-shadow border m-0 border-r-5 mt-3">
		        <div class="col-md-4 mygutter px-0">
		          <a href="javascript:void(0)" class="bg-secondary h-90px position-relative d-flex rounded-t-l-5 overflow-hidden">
		            <div class="bg-light-blue h-100 w-100 d-flex align-items-center justify-content-center">
		              <i class="fa fa-plus text-theme font-20"></i>
		            </div>
		          </a>
		        </div>
		        <div class="col-md-8 mygutter px-2 py-1 d-flex align-items-left flex-column justify-content-center">
		            <h6 class="mb-1 text-theme font-14">Create your Group</h6>
		            <p class="font-13">Share your own Videos and tell the community what moves you.</p>
		        </div>
		    </div>

		    <?php for ($x = 0; $x <= 1; $x++) { ?>

			<div class="row border-bottom hover-shadow border m-0 border-r-5 mt-3">
			    <div class="col-md-4 mygutter px-0">
			      <div class="bg-secondary h-90px position-relative">
			        <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover rounded-t-l-5">
			      </div>
			    </div>
			    <div class="col-md-8 mygutter px-2 py-1 d-flex align-items-left flex-column justify-content-center">
		      		<h6 class="mb-1 text-theme font-14">Connecting Human Angels</h6>
		      		<p class="font-12">29k Members 10 posts a day</p>
	      			<div class="images-group mt-1">
	      				<div class="border">
				          <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
				        </div>
				        <div class="border">
				          <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
				        </div>
				        <div class="border">
				          <img src="<?php echo base_url()?>img/barcelona.jpg" class="w-100 h-100 object-fit-cover">
				        </div>
				        <span class="font-12 text-secondary">17 friends are members</span>
	      			</div>
			    </div>
		  	</div>

		  	<?php } ?>
		  	
		</div>
		
	</div>

	<div class="pt-2 px-3 d-flex border-top mt-3">
      <div class="ml-auto">
          <a href="javascript:void(0)" class="font-12 pl-2">Refresh</a>
          <a href="javascript:void(0)" class="font-12 pl-2">View All</a>
      </div>
    </div>

</div>