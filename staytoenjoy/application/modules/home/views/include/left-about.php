<div class="text-theme container-fluid">
	<ul class="w-100 pt-3 left-main-section border-bottom">
		<li class="pb-2">
			<div class="text-dark d-block">
				<div class="d-flex align-items-center">
					<div class="w-35px d-inline-block">
						<img src="<?php echo base_url() ?>/img/map-timeline-pin.svg" class="w-100">
					</div>
					 <?php
					   $users = individualUserDetails($session['session']->user_id);
					   if(!empty($users->country)){
					   	$country = "Germany";//getCountrybyiso($users->country);
					   }else{
					   	$country = ""; }?>

					<div class="w-100 pl-2 font-14 box hover-theme"><?php echo $country;?>
	                   
	                </div>
				</div>
			</div>
		</li>
		<li class="pb-2">
			<div class="text-dark d-block">
				<div class="d-flex align-items-center">
					<div class="w-35px d-inline-block">
						<img src="<?php echo base_url() ?>/img/work-timeline-icon.svg" class="w-100">
					</div>
					<div class="w-100 pl-2 font-14 box hover-theme">CEO at StayToEnjoy
	                   
	                </div>
				</div>
			</div>
		</li>
		<li class="pb-2">
			<div class="text-dark d-block">
				<div class="d-flex align-items-center">
					<div class="w-35px d-inline-block">
						<img src="<?php echo base_url() ?>/img/hobbies-timeline-icon.svg" class="w-100">
					</div>
					<div class="w-100 pl-2 font-14 box hover-theme">Hobbies
	                    
	                </div>
				</div>
			</div>
		</li>
		<li class="pb-2">
			<div class="text-dark d-block">
				<div class="d-flex align-items-center">
					<div class="w-35px d-inline-block">
						<img src="<?php echo base_url() ?>/img/relationship-timeline-icon.svg" class="w-100">
						<!--<img src="<?php echo base_url() ?>/img/married-timeline-icon.svg" class="w-100">
						<img src="<?php echo base_url() ?>/img/single-timeline-icon.svg" class="w-100">-->
					</div>
					<div class="w-100 pl-2 font-14 box hover-theme">In a relationship
	                  
	                </div>
				</div>
			</div>
		</li>
		<li class="pb-2">
			<div class="text-dark d-block">
				<div class="d-flex align-items-center">
					<div class="w-35px d-inline-block">
						<img src="<?php echo base_url() ?>/img/verified-timelnie-date.svg" class="w-100">
					</div>

					   <?php
					   $users = individualUserDetails($session['session']->user_id);
					   if(!empty($users->creation)){
					   	$date = date('F Y',strtotime($users->creation));
					   }else{
					   	 $date = ""; }?>

					<div class="w-100 pl-2 font-14 box hover-theme">Join <?php echo $date;?>
	                   
	                </div>
				</div>
			</div>
		</li>
		<li class="pb-2">
			<div class="text-dark d-block">
				<div class="d-flex align-items-center">
					<div class="w-35px d-inline-block">
						<img src="<?php echo base_url() ?>/img/lang-timeline-icon.svg" class="w-100">
					</div>
					<div class="w-100 pl-2 font-14 box hover-theme">English, France, German
	                  
	                </div>
				</div>
			</div>
		</li>
	</ul>
	<div class="pt-3 d-flex justify-content-between">
		<a href="javascript:void(0)">
	      <span class="bg-secondary w-h-35px rounded-circle p-1">
	        <img src="<?php echo base_url() ?>img/comment-inner-icon.svg" class="w-h-18">
	      </span>
	      <span class="font-12 pl-1">1</span>
	    </a>
	    <a href="javascript:void(0)">
	      <span class="bg-secondary w-h-35px rounded-circle p-1">
	        <img src="<?php echo base_url() ?>img/thunder-icon.svg" class="w-h-18">
	      </span>
	      <span class="font-12 pl-1">74</span>
	    </a>
	    <a href="javascript:void(0)">
	      <span class="bg-secondary w-h-35px rounded-circle p-1">
	        <img src="<?php echo base_url() ?>img/share-img-icon.svg" class="w-h-18">
	      </span>
	      <span class="font-12 pl-1">2</span>
	    </a>
	    <a href="javascript:void(0)">
	      <span class="bg-secondary w-h-35px rounded-circle p-1">
	        <img src="<?php echo base_url() ?>img/star-img-icon.svg" class="w-h-18">
	      </span>
	      <span class="font-12 pl-1">2</span>
	    </a>
	</div>
</div>
