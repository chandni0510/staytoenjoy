<?php include "include/header.php"; ?>

<script>

document.cookie = "savedlogin =<?php echo $session['session']->user_id;?>; expires=Thu, 21 Aug 2045 20:00:00 UTC"

</script>
    <main role="main">

    <section class="content-sec">

      <div class="container-fluid mini-container">

        <!-- Example row of columns -->

        <div class="row">

          <div class="col-md-12 mb-3">

            <h2>Welcome to StayToEnjoy!</h2>

            <p class="ml3 text-justify"><strong>A Social media booking community to keep your adventures all in the page </strong></p>

          </div>

      </div>

      </div> <!-- /container -->

   </section> <!-- //content section end here  -->



   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-12">

          <h3> What are you looking for? </h3>

        </div>

      </div>

    </div>

  </section>

   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-one owl-carousel owl-theme">

        <div class="m-0">  

          <div class="position-relative">

          <img src="<?php echo base_url() ?>img/home.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Experiences </h5>

        </a> 

        </div>

        

        <div class="m-0">  

          <div class="position-relative">

          <img src="<?php echo base_url() ?>img/home.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Tour Guides </h5>

        </a> 

        </div>

        <div class="m-0">  

          <div class="position-relative">

          <img src="<?php echo base_url() ?>img/home.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Restaurants </h5>

        </a> 

        </div>

        <div class="m-0">  

          <div class="position-relative">

          <img src="<?php echo base_url() ?>img/home.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Delivery Service </h5>

        </a> 

        </div>

        <div class="m-0">  

          <div class="position-relative">

          <img src="<?php echo base_url() ?>img/home.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Beauty 7 Spa </h5>

        </a> 

        </div>

        <div class="m-0">  

          <div class="position-relative">

          <img src="<?php echo base_url() ?>img/home.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Hair Cut </h5>

        </a> 

        </div>

        <div class="m-0">  

          <div class="position-relative">

          <img src="<?php echo base_url() ?>img/home.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Food Tour </h5>

        </a> 

        </div>

        <div class="m-0">  

          <div class="position-relative">

          <img src="<?php echo base_url() ?>img/home.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Others </h5>

        </a> 

        </div>

      </div>

        </div>

       </div>

     </div>

   </section> <!-- looking for sec --> 



   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-12">

          <h3> Recent activity </h3>

        </div>

      </div>

    </div>

  </section>

   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

        <p class="mt-2 mb-0">

        <a href="javascript:void(0)" class="btn btn-primary">Continue search</a>

        </p>

      </div>

      

        </div>

        </div> <!-- item end -->





       <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status text-primary"> Closed </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

        <p class="mt-2 mb-0">

        <a href="javascript:void(0)" class="btn btn-primary">Continue search</a>

        </p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

        <p class="mt-2 mb-0">

        <a href="javascript:void(0)" class="btn btn-primary">Continue search</a>

        </p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house.jpg" class="img-fluid">

          <div class="online offline"> Offline </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

        <p class="mt-2 mb-0">

        <a href="javascript:void(0)" class="btn btn-primary">Continue search</a>

        </p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status text-primary"> Closed </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

        <p class="mt-2 mb-0">

        <a href="javascript:void(0)" class="btn btn-primary">Continue search</a>

        </p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

        <p class="mt-2 mb-0">

        <a href="javascript:void(0)" class="btn btn-primary">Continue search</a>

        </p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house.jpg" class="img-fluid">

          <div class="online offline"> Offline </div>

          <div class="post-status text-primary"> Closed </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

        <p class="mt-2 mb-0">

        <a href="javascript:void(0)" class="btn btn-primary">Continue search</a>

        </p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

        <p class="mt-2 mb-0">

        <a href="javascript:void(0)" class="btn btn-primary">Continue search</a>

        </p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

        <p class="mt-2 mb-0">

        <a href="javascript:void(0)" class="btn btn-primary">Continue search</a>

        </p>

      </div>

        </div>

        </div> <!-- item end -->

      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Recent activity sec --> 





   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Homes </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search homes" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>

   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house2.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->





       <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house2.jpg" class="img-fluid">

          <div class="online offline"> Offline </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house2.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house2.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house2.jpg" class="img-fluid">

          <div class="online offline"> Offline </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="<?php echo base_url() ?>img/house2.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Villa American Eagle </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> Cape coral, USA </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2"> 2 BH Apartment </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 1 BA </li>

          <li class="list-inline-item pl-1"> Sleeps 5 </li>

        </ul>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->



      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Discover Homes sec --> 







   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Destinations </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search destinations" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>

   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/discover.jpg" class="img-fluid">

          <h2 class="overflow-text position-absolute d-flex align-items-center justify-content-center text-white text-center"> Spain </h2> 

        </div>        

      </div>

        </div>



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/discover.jpg" class="img-fluid">

          <h2 class="overflow-text position-absolute d-flex align-items-center justify-content-center text-white text-center"> Spain </h2> 

        </div>        

      </div>

        </div>



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/discover.jpg" class="img-fluid">

          <h2 class="overflow-text position-absolute d-flex align-items-center justify-content-center text-white text-center"> Spain </h2> 

        </div>        

      </div>

        </div>



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/discover.jpg" class="img-fluid">

          <h2 class="overflow-text position-absolute d-flex align-items-center justify-content-center text-white text-center"> Spain </h2> 

        </div>        

      </div>

        </div>



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/discover.jpg" class="img-fluid">

          <h2 class="overflow-text position-absolute d-flex align-items-center justify-content-center text-white text-center"> Spain </h2> 

        </div>        

      </div>

        </div>



        </div> <!-- item end -->

      </div>

      </div>

        </div>

   </section>  <!-- Discover Homes sec --> 









   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Ride </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search ride" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>

   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/car.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>



      <div class="card-body">

          <h5 class="mb-1"> Jim Rakhate </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Frieday 01 july - 6:00 pm </p>

        <p class="step-color mb-0"> Oldenburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Hamburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Kiel</p>

        <p class="mb-0"> <strong>3</strong> Available seats  </p>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>



        </div>

        </div> <!-- item end -->





        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/car.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jim Rakhate </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Frieday 01 july - 6:00 pm </p>

        <p class="step-color mb-0"> Oldenburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Hamburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Kiel</p>

        <p class="mb-0"> <strong>3</strong> Available seats  </p>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->





        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/car.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status text-primary"> Closed </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jim Rakhate </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Frieday 01 july - 6:00 pm </p>

        <p class="step-color mb-0"> Oldenburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Hamburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Kiel</p>

        <p class="mb-0"> <strong>3</strong> Available seats  </p>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>



        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/car.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jim Rakhate </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Frieday 01 july - 6:00 pm </p>

        <p class="step-color mb-0"> Oldenburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Hamburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Kiel</p>

        <p class="mb-0"> <strong>3</strong> Available seats  </p>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>



        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/car.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jim Rakhate </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Frieday 01 july - 6:00 pm </p>

        <p class="step-color mb-0"> Oldenburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Hamburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Kiel</p>

        <p class="mb-0"> <strong>3</strong> Available seats  </p>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>



        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/car.jpg" class="img-fluid">

          <div class="online"> Online </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jim Rakhate </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Frieday 01 july - 6:00 pm </p>

        <p class="step-color mb-0"> Oldenburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Hamburg <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Kiel</p>

        <p class="mb-0"> <strong>3</strong> Available seats  </p>

        <h4 class="text-primary mb-2 d-inline"> $199</h4> 

        <p class="d-inline">per night <i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->       

      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Discover ride sec --> 







    <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Experiences</h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search experiences " aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>

   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">

        <div class="m-0">  

          <div class="card-box">

          <div class="position-relative">

          <img src="img/nightlife.jpg" class="img-fluid">

          </div>

          

        <a href="">

          <h5 class="mt-2 mb-0"> Nightlife </h5>

        </a> 

        </div>

        </div> <!-- item end here -->



        <div class="m-0">  

           <div class="card-box">

          <div class="position-relative">

          <img src="img/nightlife.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Art Walk </h5>

        </a> 

      </div>

        </div> <!-- item end here -->







        <div class="m-0">  

          <div class="card-box">

          <div class="position-relative">

          <img src="img/nightlife.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Music </h5>

        </a> 

      </div>

        </div> <!-- item end here -->





        <div class="m-0">  

          <div class="card-box">

          <div class="position-relative">

          <img src="img/nightlife.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Art &amp; Design </h5>

        </a> 

      </div>

        </div> <!-- item end here -->





        <div class="m-0">

        <div class="card-box">  

          <div class="position-relative">

          <img src="img/nightlife.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> History </h5>

        </a>

        </div> 

        </div> <!-- item end here -->



        <div class="m-0">

        <div class="card-box">  

          <div class="position-relative">

          <img src="img/nightlife.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Beauty 7 Spa  </h5>

        </a>

        </div> 

        </div> <!-- item end here -->



        <div class="m-0">

        <div class="card-box">  

          <div class="position-relative">

          <img src="img/nightlife.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Hair Cut </h5>

        </a>

        </div> 

        </div> <!-- item end here -->



        <div class="m-0">

        <div class="card-box">  

          <div class="position-relative">

          <img src="img/nightlife.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Food Tour </h5>

        </a>

        </div> 

        </div> <!-- item end here -->



        <div class="m-0">

        <div class="card-box">  

          <div class="position-relative">

          <img src="img/nightlife.jpg" class="img-fluid">

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Others </h5>

        </a>

        </div> 

        </div> <!-- item end here -->        

       

      </div>

        </div>

       </div>

     </div>

   </section> <!-- discover experience sec --> 









   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Videos</h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search videos " aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

          </div>

          </form>

        </div>

      </div>

    </div>

  </section>

   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">

        <div class="m-0"> 

        <div class="card-box"> 

          <div class="position-relative">

          <img src="img/art.jpg" class="img-fluid">

          <div class="img-overlay video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#video-modal">

            <center> <img src="img/play.png"> </center>

          </div>

          <div class="video-overlay position-absolute d-flex">

              <p class="px-2 mb-2"> <a  class="text-white" href=""><i class="fa fa-heart"></i> 120 </a></p>

              <p class="px-2 mb-2"> <a class="text-white" href=""><i class="fa fa-comment"></i> 60</a> </p>

              <p class="px-2 mb-2"> <a class="text-white" href=""><i class="fa fa-share"></i> 12</a> </p>

          </div>

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Art &amp; Design </h5>

        </a>

        </div> 

        </div> <!-- item end here -->



        <div class="m-0">

        <div class="card-box">  

          <div class="position-relative">

          <img src="img/art.jpg" class="img-fluid">

          <div class="img-overlay video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#video-modal">

            <center> <img src="img/play.png"> </center>

          </div>

          <div class="video-overlay position-absolute d-flex">

              <p class="px-2 mb-2"> <a  class="text-white" href=""><i class="fa fa-heart"></i> 120 </a></p>

              <p class="px-2 mb-2"> <a class="text-white" href=""><i class="fa fa-comment"></i> 60</a> </p>

              <p class="px-2 mb-2"> <a class="text-white" href=""><i class="fa fa-share"></i> 12</a> </p>

          </div>

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Art &amp;; Design </h5>

        </a>

        </div> 

        </div> <!-- item end here -->



        <div class="m-0">

        <div class="card-box">  

          <div class="position-relative">

          <img src="img/art.jpg" class="img-fluid">

          <div class="img-overlay video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#video-modal">

            <center> <img src="img/play.png"> </center>

          </div>

          <div class="video-overlay position-absolute d-flex">

              <p class="px-2 mb-2"> <a  class="text-white" href=""><i class="fa fa-heart"></i> 120 </a></p>

              <p class="px-2 mb-2"> <a class="text-white" href=""><i class="fa fa-comment"></i> 60</a> </p>

              <p class="px-2 mb-2"> <a class="text-white" href=""><i class="fa fa-share"></i> 12</a> </p>

          </div>

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Art &amp; Design </h5>

        </a>

        </div> 

        </div> <!-- item end here -->



        <div class="m-0">

        <div class="card-box">  

          <div class="position-relative">

          <img src="img/art.jpg" class="img-fluid">

          <div class="img-overlay video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#video-modal">

            <center> <img src="img/play.png"> </center>

          </div>

          <div class="video-overlay position-absolute d-flex">

              <p class="px-2 mb-2"> <a  class="text-white" href=""><i class="fa fa-heart"></i> 120 </a></p>

              <p class="px-2 mb-2"> <a class="text-white" href=""><i class="fa fa-comment"></i> 60</a> </p>

              <p class="px-2 mb-2"> <a class="text-white" href=""><i class="fa fa-share"></i> 12</a> </p>

          </div>

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Art &amp; Design </h5>

        </a>

        </div> 

        </div> <!-- item end here -->



        <div class="m-0">

        <div class="card-box">  

          <div class="position-relative">

          <img src="img/art.jpg" class="img-fluid">

          <div class="img-overlay video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#video-modal">

            <center> <img src="img/play.png"> </center>

          </div>

          <div class="video-overlay position-absolute d-flex">

              <p class="px-2 mb-2"> <a  class="text-white" href=""><i class="fa fa-heart"></i> 120 </a></p>

              <p class="px-2 mb-2"> <a class="text-white" href=""><i class="fa fa-comment"></i> 60</a> </p>

              <p class="px-2 mb-2"> <a class="text-white" href=""><i class="fa fa-share"></i> 12</a> </p>

          </div>

        </div>

        <a href="">

          <h5 class="mt-2 mb-0"> Art &amp; Design </h5>

        </a>

        </div> 

        </div> <!-- item end here -->

        

       

      </div>

        </div>

       </div>

     </div>

   </section> <!-- looking for sec --> 







   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Experiences in Barcelona </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search experiences" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/barcelona.jpg" class="img-fluid">

          <div class="online"> Online </div>

        </div>



      <div class="card-body">

          <h5 class="mb-1"> Culture Walk </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> <strong> Discovering Mojutec Hill </strong> </p>

        <ul class="list-inline list-ul mb-2">

          <li class="list-inline-item m-0 pr-2"> $26 per person </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 3 Hours </li>

          <li class="list-inline-item pl-1"> Max 10 </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/barcelona.jpg" class="img-fluid">

          <div class="online"> Online </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Culture Walk </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> <strong> Discovering Mojutec Hill </strong> </p>

        <ul class="list-inline list-ul mb-2">

          <li class="list-inline-item m-0 pr-2"> $26 per person </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 3 Hours </li>

          <li class="list-inline-item pl-1"> Max 10 </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/barcelona.jpg" class="img-fluid">

          <div class="online"> Online </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Culture Walk </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> <strong> Discovering Mojutec Hill </strong> </p>

        <ul class="list-inline list-ul mb-2">

          <li class="list-inline-item m-0 pr-2"> $26 per person </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 3 Hours </li>

          <li class="list-inline-item pl-1"> Max 10 </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/barcelona.jpg" class="img-fluid">

          <div class="online"> Online </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Culture Walk </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> <strong> Discovering Mojutec Hill </strong> </p>

        <ul class="list-inline list-ul mb-2">

          <li class="list-inline-item m-0 pr-2"> $26 per person </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 3 Hours </li>

          <li class="list-inline-item pl-1"> Max 10 </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/barcelona.jpg" class="img-fluid">

          <div class="online"> Online </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Culture Walk </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> <strong> Discovering Mojutec Hill </strong> </p>

        <ul class="list-inline list-ul mb-2">

          <li class="list-inline-item m-0 pr-2"> $26 per person </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 3 Hours </li>

          <li class="list-inline-item pl-1"> Max 10 </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



     

      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Barcelona Homes sec --> 







   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Experiences in Lisbon </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search experiences" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/lisbone.jpg" class="img-fluid">

          <div class="online"> Online </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1">  Food Testing </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> <strong>  Lisbons best flavour  </strong> </p>

        <ul class="list-inline list-ul mb-2">

          <li class="list-inline-item m-0 pr-2"> $26 per person </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 3 Hours </li>

          <li class="list-inline-item pl-1"> Max 10 </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/lisbone.jpg" class="img-fluid">

          <div class="online"> Online </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1">  Food Testing </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> <strong>  Lisbons best flavour  </strong> </p>

        <ul class="list-inline list-ul mb-2">

          <li class="list-inline-item m-0 pr-2"> $26 per person </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 3 Hours </li>

          <li class="list-inline-item pl-1"> Max 10 </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/lisbone.jpg" class="img-fluid">

          <div class="online"> Online </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1">  Food Testing </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> <strong>  Lisbons best flavour  </strong> </p>

        <ul class="list-inline list-ul mb-2">

          <li class="list-inline-item m-0 pr-2"> $26 per person </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 3 Hours </li>

          <li class="list-inline-item pl-1"> Max 10 </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/lisbone.jpg" class="img-fluid">

          <div class="online"> Online </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1">  Food Testing </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> <strong>  Lisbons best flavour  </strong> </p>

        <ul class="list-inline list-ul mb-2">

          <li class="list-inline-item m-0 pr-2"> $26 per person </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 3 Hours </li>

          <li class="list-inline-item pl-1"> Max 10 </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/lisbone.jpg" class="img-fluid">

          <div class="online"> Online </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1">  Food Testing </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.2</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 123</span>

        </p>

        <p class="card-text mb-0"> <strong>  Lisbons best flavour  </strong> </p>

        <ul class="list-inline list-ul mb-2">

          <li class="list-inline-item m-0 pr-2"> $26 per person </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 3 Hours </li>

          <li class="list-inline-item pl-1"> Max 10 </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->

     

      </div>

        </div>

       </div>

     </div>

   </section>  <!-- discover in lisbone sec --> 







   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Beauty &amp; Spa </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search spa" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/spa.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jeny's beauty Salon </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Oldenburg, germany</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>



        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/spa.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jeny's beauty Salon </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Oldenburg, germany</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/spa.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jeny's beauty Salon </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Oldenburg, germany</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/spa.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jeny's beauty Salon </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Oldenburg, germany</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/spa.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jeny's beauty Salon </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Oldenburg, germany</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Beauty and spa sec --> 







   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3>Beauty &amp; Spa in London </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search spa in London" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/spa-london.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jeny's beauty Salon </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Oldenburg, germany</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

        </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/spa-london.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jeny's beauty Salon </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Oldenburg, germany</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/spa-london.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jeny's beauty Salon </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Oldenburg, germany</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/spa-london.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jeny's beauty Salon </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Oldenburg, germany</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/spa-london.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Jeny's beauty Salon </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Oldenburg, germany</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Beauty and Spa in London sec --> 







   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3>Discover Restaurants </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search restaurants" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/restaurent.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>



      <div class="card-body">

          <h5 class="mb-1"> Restaurants finger food </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Oldenburg, germany </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Italian, Italien style Pizza</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>



        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/restaurent.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Restaurants finger food </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Oldenburg, germany </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Italian, Italien style Pizza</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/restaurent.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Restaurants finger food </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Oldenburg, germany </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Italian, Italien style Pizza</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/restaurent.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Restaurants finger food </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Oldenburg, germany </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Italian, Italien style Pizza</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/restaurent.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Restaurants finger food </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.8</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 80</span>

        </p>

        <p class="card-text mb-0"> Oldenburg, germany </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> Italian, Italien style Pizza</li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Restaurant sec --> 





   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Restaurants in Munic </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search restaurants in Munic" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/munic.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Restaurants finger food </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

        <p class="card-text mb-0"> Italian, Italien style Pizza </p>

      </div>



        </div>

        </div> <!-- item end -->



       <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/munic.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Restaurants finger food </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

        <p class="card-text mb-0"> Italian, Italien style Pizza </p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/munic.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Restaurants finger food </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

        <p class="card-text mb-0"> Italian, Italien style Pizza </p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/munic.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Restaurants finger food </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

        <p class="card-text mb-0"> Italian, Italien style Pizza </p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/munic.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Restaurants finger food </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

        <p class="card-text mb-0"> Italian, Italien style Pizza </p>

      </div>

        </div>

        </div> <!-- item end -->



      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Restaurant sec --> 









   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Food Delivery Service </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search delivery service" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/delivery.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

      <div class="card-body">

          <h5 class="mb-1"> Ginos fast Food  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->





        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/delivery.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Ginos fast Food  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/delivery.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

       <div class="card-body">

          <h5 class="mb-1"> Ginos fast Food  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/delivery.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Ginos fast Food  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/delivery.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Ginos fast Food  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->

       

      </div>

        </div>

       </div>

     </div>

   </section>  <!-- delivery service sec --> 







   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Food Delivery Service in Milano </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search delivery service in milano" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/milano.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Ginos fast Food  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->





        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/milano.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Ginos fast Food  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/milano.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Ginos fast Food  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/milano.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Ginos fast Food  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/milano.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Ginos fast Food  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Wellness, Body treatment </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> Oldenburg, germany </li>

          <li class="list-inline-item m-0 pr-2 pl-1 text-primary"> Closed Now</li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->

       

      </div>

        </div>

       </div>

     </div>

   </section>  <!-- delivery service sec --> 







   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Package Tours </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search package tours" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/dubai.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>



      <div class="card-body">

          <h5 class="mb-1"> Dazziling Dubai Gateaway  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Dubai City, Dubai, Vereinigte arabishce Emirate </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> 7 days </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 2 Pers </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Breakfast </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Studio </li>

        </ul>

      </div>



        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/dubai.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Dazziling Dubai Gateaway  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Dubai City, Dubai, Vereinigte arabishce Emirate </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> 7 days </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 2 Pers </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Breakfast </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Studio </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/dubai.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Dazziling Dubai Gateaway  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Dubai City, Dubai, Vereinigte arabishce Emirate </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> 7 days </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 2 Pers </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Breakfast </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Studio </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/dubai.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Dazziling Dubai Gateaway  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Dubai City, Dubai, Vereinigte arabishce Emirate </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> 7 days </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 2 Pers </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Breakfast </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Studio </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/dubai.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Dazziling Dubai Gateaway  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Dubai City, Dubai, Vereinigte arabishce Emirate </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> 7 days </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 2 Pers </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Breakfast </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Studio </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->

       

      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Package Tours sec --> 





   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Package Tours in Germany  </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search tours in germany" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/germany.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Dazziling Dubai Gateaway  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Dubai City, Dubai, Vereinigte arabishce Emirate </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> 7 days </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 2 Pers </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Breakfast </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Studio </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/germany.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Dazziling Dubai Gateaway  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Dubai City, Dubai, Vereinigte arabishce Emirate </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> 7 days </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 2 Pers </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Breakfast </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Studio </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/germany.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Dazziling Dubai Gateaway  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Dubai City, Dubai, Vereinigte arabishce Emirate </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> 7 days </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 2 Pers </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Breakfast </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Studio </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/germany.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Dazziling Dubai Gateaway  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Dubai City, Dubai, Vereinigte arabishce Emirate </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> 7 days </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 2 Pers </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Breakfast </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Studio </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/germany.jpg" class="img-fluid">

          <div class="online"> Online </div>

           <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Dazziling Dubai Gateaway  </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Dubai City, Dubai, Vereinigte arabishce Emirate </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-0"> 7 days </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> 2 Pers </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Breakfast </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> Studio </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->

       

      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Package Tours in germany sec --> 







   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Shops</h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search shops" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>

   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/iphone.jpg" class="img-fluid">

          <div class="post-status"> New </div>

        </div>



      <div class="card-body">

          <h5 class="mb-1"> Apple Iphone 8 64GB/ 256GB  </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0">Space Grau / Gold NEU </p>

        <p class="card-text mb-0"> Sofort koufen </p>

        <p class="card-text mb-0"> <strong> Kostenloser Versland </strong> </p>

        <h4 class="text-primary mb-2 d-inline"> $49</h4> 

        <p class="d-inline"><i class="fa fa-bolt"></i></p>

      </div>



        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/iphone.jpg" class="img-fluid">

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Apple Iphone 8 64GB/ 256GB  </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0">Space Grau / Gold NEU </p>

        <p class="card-text mb-0"> Sofort koufen </p>

        <p class="card-text mb-0"> <strong> Kostenloser Versland </strong> </p>

        <h4 class="text-primary mb-2 d-inline"> $49</h4> 

        <p class="d-inline"><i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/iphone.jpg" class="img-fluid">

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Apple Iphone 8 64GB/ 256GB  </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0">Space Grau / Gold NEU </p>

        <p class="card-text mb-0"> Sofort koufen </p>

        <p class="card-text mb-0"> <strong> Kostenloser Versland </strong> </p>

        <h4 class="text-primary mb-2 d-inline"> $49</h4> 

        <p class="d-inline"><i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/iphone.jpg" class="img-fluid">

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Apple Iphone 8 64GB/ 256GB  </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0">Space Grau / Gold NEU </p>

        <p class="card-text mb-0"> Sofort koufen </p>

        <p class="card-text mb-0"> <strong> Kostenloser Versland </strong> </p>

        <h4 class="text-primary mb-2 d-inline"> $49</h4> 

        <p class="d-inline"><i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/iphone.jpg" class="img-fluid">

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Apple Iphone 8 64GB/ 256GB  </h5>

           <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0">Space Grau / Gold NEU </p>

        <p class="card-text mb-0"> Sofort koufen </p>

        <p class="card-text mb-0"> <strong> Kostenloser Versland </strong> </p>

        <h4 class="text-primary mb-2 d-inline"> $49</h4> 

        <p class="d-inline"><i class="fa fa-bolt"></i></p>

      </div>

        </div>

        </div> <!-- item end -->



      </div>

        </div>

       </div>

     </div>

   </section>  <!-- discover sops sec --> 





   <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Shop Near You </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search shops" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/shop.jpg" class="img-fluid">

          <div class="logo-overlay"> <img src="img/logo.png" class="img-fluid"> </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> SpreekKamer De Hollandia </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> <i class="fa fa-map-marker" aria-hidden="true"></i> Mangaanstraat 25, 2544DV Haag </p>

        <p class="card-text mb-0"> <strong> TV, Electronic, Computre </strong> </p>

        <hr>

         <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">

        <div class="carousel-inner row w-100 mx-auto" role="listbox">

            <div class="carousel-item col-md-4 p-1  active">

               <div class="panel panel-default">

                  <div class="panel-thumbnail">

                    <a href="javascript:void(0)" title="image 1" class="thumb">

                      <img class="img-fluid mx-auto d-block" src="img/discover.jpg" alt="slide 1">

                    </a>

                  </div>

                </div>

            </div>

            <div class="carousel-item col-md-4 p-1">

               <div class="panel panel-default">

                  <div class="panel-thumbnail">

                    <a href="javascript:void(0)" title="image 3" class="thumb">

                     <img class="img-fluid mx-auto d-block" src="img/discover.jpg" alt="slide 2">

                    </a>

                  </div>

                </div>

            </div>

            <div class="carousel-item col-md-4 p-1">

               <div class="panel panel-default">

                  <div class="panel-thumbnail">

                    <a href="javascript:void(0)" title="image 4" class="thumb">

                     <img class="img-fluid mx-auto d-block" src="img/discover.jpg" alt="slide 3">

                    </a>

                  </div>

                </div>

            </div>

            

        </div>



    </div>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/shop.jpg" class="img-fluid">

          <div class="logo-overlay"> <img src="img/logo.png" class="img-fluid"> </div>

        </div>

        <div class="card-body">

         <h5 class="mb-1"> SpreekKamer De Hollandia </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> <i class="fa fa-map-marker" aria-hidden="true"></i> Mangaanstraat 25, 2544DV Haag </p>

        <p class="card-text mb-0"> <strong> TV, Electronic, Computre </strong> </p>

        <hr>



         <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">

        <div class="carousel-inner row w-100 mx-auto" role="listbox">

            <div class="carousel-item col-md-4 p-1  active">

               <div class="panel panel-default">

                  <div class="panel-thumbnail">

                    <a href="javascript:void(0)" title="image 1" class="thumb">

                      <img class="img-fluid mx-auto d-block" src="img/discover.jpg" alt="slide 1">

                    </a>

                  </div>

                </div>

            </div>

            <div class="carousel-item col-md-4 p-1">

               <div class="panel panel-default">

                  <div class="panel-thumbnail">

                    <a href="javascript:void(0)" title="image 3" class="thumb">

                     <img class="img-fluid mx-auto d-block" src="img/discover.jpg" alt="slide 2">

                    </a>

                  </div>

                </div>

            </div>

            <div class="carousel-item col-md-4 p-1">

               <div class="panel panel-default">

                  <div class="panel-thumbnail">

                    <a href="javascript:void(0)" title="image 4" class="thumb">

                     <img class="img-fluid mx-auto d-block" src="img/discover.jpg" alt="slide 3">

                    </a>

                  </div>

                </div>

            </div>

            

        </div>



    </div>

      </div>

        </div>

        </div> <!-- item end -->

        



      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Discover Shop Near You sec --> 





    <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Events </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search events" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/cooking.jpg" class="img-fluid">

          <div class="online"> Sunday, 27 May </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Cooking Show with fransic </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Oldenburg, Germany  </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-clock-o" aria-hidden="true"></i> 3-4 Hrs </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-user-plus" aria-hidden="true"></i> Max. 10 </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-male" aria-hidden="true"></i> For Kids  </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/cooking.jpg" class="img-fluid">

          <div class="online"> Sunday, 27 May </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Cooking Show with fransic </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Oldenburg, Germany  </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-clock-o" aria-hidden="true"></i> 3-4 Hrs </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-user-plus" aria-hidden="true"></i> Max. 10 </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-male" aria-hidden="true"></i> For Kids  </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/cooking.jpg" class="img-fluid">

          <div class="online"> Sunday, 27 May </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

          <h5 class="mb-1"> Cooking Show with fransic </h5>

          <p class="mb-0"> 

          <span class="rate-circle">4.9</span>

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star"></i> 

          <i class="fa fa-star text-muted"></i> 

          <i class="fa fa-star text-muted"></i> 

          <span class=""><i class="fa fa-user"></i> 60</span>

        </p>

        <p class="card-text mb-0"> Oldenburg, Germany  </p>

        <ul class="list-inline list-ul mb-0">

          <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-clock-o" aria-hidden="true"></i> 3-4 Hrs </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-user-plus" aria-hidden="true"></i> Max. 10 </li>

          <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-male" aria-hidden="true"></i> For Kids  </li>

        </ul>

      </div>

        </div>

        </div> <!-- item end -->

       

      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Package Tours sec --> 







    <section class="bg-grey sec-heading mb-2">

     <div class="container-fluid mini-container">

       <div class="row">

        <div class="col-md-9">

          <h3> Discover Events Near You </h3>

        </div>

        <div class="col-md-3">

          <form>

            <div class="position-relative">

          <input class="form-control mysearch search-bg w-100 mr-sm-2" type="text" placeholder="Search events near you" aria-label="Search">

          <span class="search-icon"><i class="fa fa-search"></i></span>

        </div>

          </form>

        </div>

      </div>

    </div>

  </section>



   <section class="content-box">

     <div class="container-fluid mini-container">

        <div class="row">

        <div class="col-md-12">

          <div class="owl-two owl-carousel owl-theme">



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/music.jpg" class="img-fluid">

          <div class="online"> Saturday, 2 March </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

            <h5 class="mb-1"> Music Night </h5>

            <p class="mb-0"> 

            <span class="rate-circle">4.9</span>

            <i class="fa fa-star"></i> 

            <i class="fa fa-star"></i> 

            <i class="fa fa-star"></i> 

            <i class="fa fa-star text-muted"></i> 

            <i class="fa fa-star text-muted"></i> 

            <span class=""><i class="fa fa-user"></i> 60</span>

          </p>

          <p class="card-text mb-0"> Oldenburg, Germany  </p>

          <ul class="list-inline list-ul mb-0">

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-clock-o" aria-hidden="true"></i> 3-4 Hrs </li>

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-user-plus" aria-hidden="true"></i> Max. 10 </li>

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-male" aria-hidden="true"></i> For Kids  </li>

          </ul>

        </div>



        </div>

        </div> <!-- item end -->



        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/music.jpg" class="img-fluid">

          <div class="online"> Saturday, 2 March </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

            <h5 class="mb-1"> Music Night </h5>

            <p class="mb-0"> 

            <span class="rate-circle">4.9</span>

            <i class="fa fa-star"></i> 

            <i class="fa fa-star"></i> 

            <i class="fa fa-star"></i> 

            <i class="fa fa-star text-muted"></i> 

            <i class="fa fa-star text-muted"></i> 

            <span class=""><i class="fa fa-user"></i> 60</span>

          </p>

          <p class="card-text mb-0"> Oldenburg, Germany  </p>

          <ul class="list-inline list-ul mb-0">

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-clock-o" aria-hidden="true"></i> 3-4 Hrs </li>

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-user-plus" aria-hidden="true"></i> Max. 10 </li>

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-male" aria-hidden="true"></i> For Kids  </li>

          </ul>

        </div>

        </div>

        </div> <!-- item end -->

        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/music.jpg" class="img-fluid">

          <div class="online"> Saturday, 2 March </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

            <h5 class="mb-1"> Music Night </h5>

            <p class="mb-0"> 

            <span class="rate-circle">4.9</span>

            <i class="fa fa-star"></i> 

            <i class="fa fa-star"></i> 

            <i class="fa fa-star"></i> 

            <i class="fa fa-star text-muted"></i> 

            <i class="fa fa-star text-muted"></i> 

            <span class=""><i class="fa fa-user"></i> 60</span>

          </p>

          <p class="card-text mb-0"> Oldenburg, Germany  </p>

          <ul class="list-inline list-ul mb-0">

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-clock-o" aria-hidden="true"></i> 3-4 Hrs </li>

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-user-plus" aria-hidden="true"></i> Max. 10 </li>

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-male" aria-hidden="true"></i> For Kids  </li>

          </ul>

        </div>

        </div>

        </div> <!-- item end -->

        <div class="m-0">  

          <div class="card">

          <div class="position-relative h-220 overflow-hidden">

          <img src="img/music.jpg" class="img-fluid">

          <div class="online"> Saturday, 2 March </div>

          <div class="post-status"> New </div>

        </div>

        <div class="card-body">

            <h5 class="mb-1"> Music Night </h5>

            <p class="mb-0"> 

            <span class="rate-circle">4.9</span>

            <i class="fa fa-star"></i> 

            <i class="fa fa-star"></i> 

            <i class="fa fa-star"></i> 

            <i class="fa fa-star text-muted"></i> 

            <i class="fa fa-star text-muted"></i> 

            <span class=""><i class="fa fa-user"></i> 60</span>

          </p>

          <p class="card-text mb-0"> Oldenburg, Germany  </p>

          <ul class="list-inline list-ul mb-0">

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-clock-o" aria-hidden="true"></i> 3-4 Hrs </li>

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-user-plus" aria-hidden="true"></i> Max. 10 </li>

            <li class="list-inline-item m-0 pr-2 pl-1"> <i class="fa fa-male" aria-hidden="true"></i> For Kids  </li>

          </ul>

        </div>

        </div>

        </div> <!-- item end -->



       

      </div>

        </div>

       </div>

     </div>

   </section>  <!-- Package Tours sec --> 





</main>

<?php include "include/footer.php"; ?>

