<?php include 'include/header.php';?>

    <main role="main">


    <div class="container-fluid bg-theme position-fixed z-index-99">
      <div class="container">
        <ul class="pl-0 mb-0 font-14 py-2">
          <li class="d-inline-block"><a href="javascript:void(0)" class="text-white px-2 mx-2 pl-0 pb-1 border-bottom-3-hover active">Add Payment Method</a></li>
          <li class="d-inline-block"><a href="trans-history.php" class="text-white px-2 mx-2 pb-1 border-bottom-3-hover">Transaction History</a></li>
        </ul>
      </div>
    </div>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      
    <section class="content-sec bg-light-blue pt-0">
      <div class="container-fluid"><!--  mini-container -->
        <!-- Example row of columns -->
        <div class="row">
          
          <div class="col-lg-8 col-md-4 offset-lg-2">
            <!--<h1 class="mb-4 font-weight-normal">Settings</h1>-->
          </div>
        </div>

        <div class="row mt-5">
          <div class="w-15 position-md-fixed px-0 h-100 left-inbox-hide">
            <?php include 'include/left-settings-tab.php';?>
          </div>

          <div class="w-63 offset-w-15 center-inbox-hide pr-2">
            <div class="border p-3 pb-4 mb-4 profile-setting bg-white border-r-10">
              
              <div class="contactForm">
                <h6 class="font-weight-bold text-dark my-3">Payment Method <i class="fa fa-info-circle"></i></h6>
                <hr class="mt-4">
                <p class="text-secondary font-13">The monkey-rope is found in all whalers; but it was only in the Pequod that the monkey and his holder were ever tied together.</p>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3">
                    <button type="button" class="border px-3 py-5 mt-2 bg-transparent c-pointer" data-toggle="modal" data-target="#myModal" style="border-style: dashed!important; border-width: 2px!important;">
                        <div class="border bg-secondary rounded-circle text-theme-blue w-h-50 m-auto pt-13px border"><i class="fa fa-plus"></i></div>
                        <p class="font-14 text-center text-theme-blue pt-2">Add New payment method</p>
                    </button>

                    <div class="modal" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content text-center pt-4 max-w-400 border-r-20">
                          <div class="model-header position-relative">
                            <button type="button" class="close text-dark" data-dismiss="modal" style="right: 10px; top:-20px;">×</button>
                            <h5 class="modal-title m-auto w-100 py-1 weight-5">Add Credit Card</h5>
                            <p class="text-secondary w-100 font-14">The monkey-rope is found in all whalers; but it</p>
                            <img src="<?php echo base_url('img/add-card-popup.svg')?>" class="w-100 pb-3">
                            <div class="d-flex justify-content-center pb-3 border-bottom">
                              <img src="<?php echo base_url('img/visa-icon.svg')?>" class="px-2">
                              <img src="<?php echo base_url('img/master-card-icon.svg')?>" class="px-2">
                              <img src="<?php echo base_url('img/amex-icon.svg')?>" class="px-2">
                              <img src="<?php echo base_url('img/credit-cards-icon.svg')?>" class="px-2">
                              <img src="<?php echo base_url('img/paypal-icon.svg')?>" class="px-2">
                              <img src="<?php echo base_url('>img/master-card.svg')?>" class="px-2">
                            </div>
                          </div>
                          <div class="modal-body">
                            <div class="form-group text-left">
                              <label class="font-14 font-weight-normal weight-5">Card Number</label>
                              <input type="password" class="form-control font-14" placeholder="Enter your card number">
                            </div>
                            <div class="form-group text-left">
                              <label class="font-14 font-weight-normal weight-5">Card Holder</label>
                              <input type="password" class="form-control font-14" placeholder="Enter your name">
                            </div>
                            <div class="form-group text-left">
                              <div class="row">
                                <div class="col-sm-8">
                                  <label class="font-14 font-weight-normal w-100 weight-5">Expiration Date</label>  
                                  <div class="position-relative">
                                    <select class="form-control custom-arrow font-14 w-50 float-left font-14">
                                      <option>01</option>
                                      <option>02</option>
                                    </select>
                                    <img src="img/down-arrow.png" class="position-absolute img-arrow">
                                  </div>
                                  <div class="position-relative">
                                    <select class="form-control custom-arrow font-14 w-50 float-left font-14">
                                      <option>2016</option>
                                      <option>2017</option>
                                    </select>
                                    <img src="img/down-arrow.png" class="position-absolute img-arrow">
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <label class="font-14 font-weight-normal weight-5">CVC</label>
                                  <input type="password" class="form-control font-14" placeholder="">
                                </div>
                                <div class="col-sm-12 border-top mt-3">
                                  <label class="switch position-relative d-inline-block my-3">
                                    <input type="checkbox" checked="">
                                    <span class="slider round position-absolute c-pointer"></span>
                                  </label>
                                  <label class="font-14 font-weight-normal text-secondary pl-2">Marks As Default Card</label>  
                                </div>
                                <div class="border-top w-100 pt-3 px-3">
                                  <input type="button" class="btn btn-primary bg-primary font-14 w-100 m-auto" value="Add Card">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <hr class="my-4">
                <h6 class="font-weight-bold text-dark mt-3 mb-4">Invoices Method <i class="fa fa-info-circle"></i></h6>
                <div class="row">
                  <div class="col-sm-12 px-0">
                    <div class="table-responsive overflow-x-inherit">
                      <table class="table font-14 table-hover">
                        <thead>
                          <tr>
                            <th class="text-secondary border-bottom-0">Invoice Name</th>
                            <th class="text-secondary border-bottom-0">Date</th>
                            <th class="text-secondary border-bottom-0">Price</th>
                            <th class="text-secondary border-bottom-0"></th>
                            <th class="text-secondary border-bottom-0"></th>
                            <th class="text-secondary border-bottom-0 text-right">Download</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-secondary border-bottom-0">Stay To Enjoy</td>
                            <td class="text-secondary border-bottom-0">
                              12.12.2017 <br>
                              <span class="font-12">ABIS 00001</span>
                            </td>
                            <td class="text-secondary border-bottom-0">
                              1.380.77 <br>
                              <span class="font-12">Invoice value</span>
                            </td>
                            <td class="text-secondary border-bottom-0">
                              1.247,16 <br>
                              <span class="font-12">After tax</span>
                            </td>
                            <td class="text-secondary border-bottom-0">
                              <button type="button" class="btn bg-secondary text-theme-blue rounded border-r-20 font-14">
                                <i class="fa fa-check pr-1"></i> Paid: 2017.07.01
                              </button>
                            </td>
                            <td class="text-secondary border-bottom-0 text-right">
                              <button type="button" class="btn bg-secondary text-theme-blue rounded border-r-20 font-14">PDF
                                <i class="fa fa-download pl-3"></i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-sm-12 pagination-cricle">
                    <ul class="pagination float-right mt-5 font-14">
                      <li class="page-item"><a class="page-link text-dark" href="javascript:void(0)"><</a></li>
                      <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                      <li class="page-item"><a class="page-link text-dark" href="javascript:void(0)">2</a></li>
                      <li class="page-item"><a class="page-link text-dark" href="javascript:void(0)">3</a></li>
                      <li class="page-item"><a class="page-link text-dark" href="javascript:void(0)">></a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="w-22 px-2">
            <?php include 'include/right-three-box.php';?>
          </div>
          
        </div>
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->

    </main> <!-- /main -->
<?php include 'include/footer.php'?>
    <!-- Bootstrap JavaScript start -->


<script type="text/javascript">
  $("#left-inbox-clps").click(function(){
    $(this).toggleClass('pl-4');
    $(".left-inbox-hide").toggleClass('w-15 w-5');
    $(".left-inbox-hide .hide-me > div").toggleClass('d-inline-block d-none');
    $(".add-hide-me").toggleClass('d-none');
    $(".left-inbox-hide .hide-me").toggleClass('m-auto');
    $(".center-inbox-hide").toggleClass('w-63 w-73');
    $(".center-inbox-hide").toggleClass('offset-w-15 offset-w-5');
  });


    $("#show-drop").click(function(){
  $("#drop1").toggleClass("show");

      $(function() {
  $(document).click(function (event) {
    $("#drop1").removeClass("show");

  });
});

});

  </script>

<script type="text/javascript">
    $("#show-drop2").click(function(){
      $("#drop2").toggleClass("show");

          $(function() {
  $(document).click(function (event) {
    $("#drop2").removeClass("show");

  });
});
      });
</script>

<script type="text/javascript">
    /*$("#toggle-bg").click(function(){
      $(".navbar").toggleClass("toggle-bg");
    });*/

    $(".img-hover").hover(function(){
      $(this).toggleClass('z-index-999');
    });


    $(".search-icon.responsive").click(function(){
      $('.search-mob.responsive').toggleClass('d-none');
      $('.back-icon').toggleClass('d-none');
    });

    $(".bx-2-vrify").click(function(){
        $(this).siblings('.bx-hide').toggleClass('d-none');
        $(this).find('i').toggleClass('fa-minus');
        $(this).find('i').toggleClass('fa-plus');
    });
    $(".bars-btn").click(function(){
      $('.bx-hide').toggleClass('d-none');
    });
    $(".add-phone").click(function(){
        $('.number-box').toggleClass('d-none');
    });
    $(".add-lang").click(function(){
        $(this).siblings('input').toggleClass('d-none');
        $(this).siblings('input').toggleClass('d-inline-block');
    });

</script>

  </body>
</html>
