<?php include 'include/header.php';?>

  <body>
    <!-- Modal -->
<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog video-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body video-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always"></iframe>
</div>
        
      </div>
    </div>
  </div>
</div> 

    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-register" id="toggle-bg">
      <div class="container-fluid mini-container justify-cntnt-unst-sm direction-rtl-sm">
      <a class="navbar-brand ml-auto mr-0" href="index.php"><img src="img/logo.svg" class="img-fluid"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        <ul class="navbar-nav align-self-end mr-auto w-100 justify-content-end desk-ul">
          <li class="nav-item position-relative pl-2 pr-2">
            <input type="text" name="" class="form-control py-1" placeholder="Email or phone">
          </li>
          <li class="nav-item pl-1 pr-1">
            <div class="position-relative">
            <input type="password" name="" class="form-control py-1" placeholder="Password">
            <span class="pwd-show position-absolute"> <a href="">Show</a></span> 
            </div>
            <p class="small mt-0 text-right font-12"><a href="forget-password.php" class="text-dark"> <strong>Forgot Password?</strong></a>  </p>
          </li>
          <li class="nav-item pl-2 pr-3 mt-1">
            <button class="btn btn-danger login-btn border-radius-50">Login</button> 
          </li>
          <li class="nav-item pl-1 pr-1"> or
            <a class="nav-link position-relative social-icon px-1" href="#"> <i class="fa fa-facebook"></i> </a>
            <a class="nav-link position-relative social-icon px-1" href="#"> <i class="fa fa-twitter"></i> </a>
            <a class="nav-link position-relative social-icon px-1" href="#"> <i class="fa fa-google-plus"></i></a>
          </li>

        </ul>

        <ul class="navbar-nav mr-auto mob-ul pr-0">
          <li class="mt-3">
            <form action="/action_page.php">
              <div class="form-group mb-2">
                <input type="email" placeholder="Email or Phone" class="form-control text-left" id="email">
              </div>
              <div class="form-group">
                <div class="position-relative">
                  <input type="password" placeholder="password" class="form-control text-left" id="pwd">
                  <span class="pwd-show position-absolute pt-1"> <a href="javascript:void(0)">Show</a></span> 
                </div>
                <p class="small text-left mt-0 pt-2 direction-ltr-sm font-12"><a href="forget-password.php" class="text-dark"> <strong>Forgot Password ?</strong></a>  </p>
              </div>
              <button class="btn btn-danger login-btn border-radius-50">Login</button> 
            </form>
            <hr class="hr-seprater my-4">
            <div class="direction-ltr-sm d-flex justify-content-around">
              <a class="nav-link position-relative social-icon px-1" href="javascript:void(0)">
                <i class="fa fa-facebook"></i>
              </a>
              <a class="nav-link position-relative social-icon px-1" href="javascript:void(0)">
                <i class="fa fa-twitter"></i>
              </a>
              <a class="nav-link position-relative social-icon px-1" href="javascript:void(0)">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </li>
        </ul>

      </div>

    </div> <!-- //container  -->
    </nav> <!-- //nav end here  -->

    <main role="main" class="bg-white">
    <section class="content-sec">
      <div class="container-fluid mini-container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-6 mb-0">
            <h2 class="mb-1">Thanks for visit StayToEnjoy  </h2>
            <p class="text-justify mb-5">A travel Shraing community to keep adventures - all in one place</p>
            
            <h2 class="mb-4"> Recent Logins </h2>
              <div class="float-left">
                <a href="" class="profile-img" style="background: transparent!important;">
                  <div class="position-relative">
                  <center><img src="img/profile-img.jpg" alt="profile-img"></center>
                  <span class="notify">2</span>
                  <p class="text-center mt-2"> Jens </p>  
                  </div>
                </a>
              </div>
              <div class="float-left ml-3">
                <a href="" class="profile-img" style="background: transparent!important;">
                  <div class="position-relative">
                  <center><div class="create-circle"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></div></center>
                  <p class="text-center mt-2"> Create a listing </p>
                  </div>
                </a>
              </div>
              
          </div> <!-- /col-md-6 -->
          <div class="col-md-6 mb-0">
            <h2 class="mb-1">Create Your Account</h2>
            <p class="small"> And be a part of community and get suggestions for your next stay! </p>
            <div class="d-md-flex justify-content-between">
              <button class="btn fb-btn border-radius-50"> <i class="fa fa-facebook"></i> Continue with Facebook </button>
              <button class="btn fb-btn twitter-btn border-radius-50"> <i class="fa fa-twitter"></i> Continue with Twitter </button>
              <button class="btn fb-btn google-btn border-radius-50"> <i class="fa fa-google-plus"></i> Continue with Google</button>
          </div>
          <hr class="hr-seprater my-5">
        
        <div class="clearfix"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="" class="form-control" placeholder="First Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="" class="form-control" placeholder="Last Name">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="" class="form-control" placeholder="Email or phone number">
          </div>
        </div>
        <div class="col-md-12"><label> <strong> Birthday </strong></label></div>
        <div class="col-md-4">
          
          <div class="form-group">
            <select class="form-control custom-arrow" id="day">
                <option selected disabled> Day </option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
            </select>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <select class="form-control custom-arrow" id="month">
                <option selected disabled> Month </option>
                <option>January</option>
                <option>february</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>Augest</option>
                <option>Sepetember</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
            </select>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <select class="form-control custom-arrow" id="year">
                <option selected disabled> Year </option>
                <option>1920</option>
                <option>1921</option>
                <option>1922</option>
                <option>1923</option>
                <option>1924</option>
                <option>1925</option>
                <option>1926</option>
                <option>1927</option>
                <option>1928</option>
                <option>1929</option>
                <option>1930</option>
                <option>1931</option>
                <option>1932</option>
                <option>1933</option>
                <option>1934</option>
                <option>1935</option>
                <option>1936</option>
                <option>1937</option>
                <option>1938</option>
                <option>1939</option>
                <option>1940</option>
                <option>1941</option>
                <option>1942</option>
                <option>1943</option>
                <option>1944</option>
                <option>1945</option>
                <option>1946</option>
                <option>1947</option>
                <option>1948</option>
                <option>1949</option>
                <option>1950</option>
                <option>1951</option>
                <option>1952</option>
                <option>1953</option>
                <option>1954</option>
                <option>1955</option>
                <option>1956</option>
                <option>1957</option>
                <option>1958</option>
                <option>1959</option>
                <option>1960</option>
                <option>1961</option>
                <option>1962</option>
                <option>1963</option>
                <option>1964</option>
                <option>1965</option>
                <option>1966</option>
                <option>1967</option>
                <option>1968</option>
                <option>1969</option>
                <option>1970</option>
                <option>1981</option>
                <option>1982</option>
                <option>1983</option>
                <option>1984</option>
                <option>1985</option>
                <option>1986</option>
                <option>1987</option>
                <option>1988</option>
                <option>1989</option>
                <option>1990</option>
                <option>1991</option>
                <option>1992</option>
                <option>1993</option>
                <option>1994</option>
                <option>1995</option>
                <option>1996</option>
                <option>1997</option>
                <option>1998</option>
                <option>1999</option>
                <option>2000</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>

            </select>
          </div>
        </div>

        <div class="col-md-12"> 
          <div class="form-group">
                <div class="custom-control custom-radio radio-color d-inline">
                  <input type="radio" class="custom-control-input" id="customRadio5" name="example4" checked="checked">
                  <label class="custom-control-label" for="customRadio5"> Male </label>
                </div> &nbsp;

                <div class="custom-control custom-radio d-inline">
                  <input type="radio" class="custom-control-input" id="customRadio6" name="example4">
                  <label class="custom-control-label" for="customRadio6"> Female   </label>
                </div>
            </div>
        </div>
        <div class="col-md-12"><label> <strong> Choose Password </strong></label></div>
        <div class="col-md-6">
          <div class="form-group position-relative">
            <input type="password" name="" class="form-control" placeholder="Password">
            <span class="pwd-show top-30 position-absolute"> <a href="">Show</a></span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="password" name="" class="form-control" placeholder="Re-type Password">
          </div>
        </div>
        <div class="col-md-12 mt-3 mb-3">
            <button class="btn btn-danger border-radius-50 w-100 py-2 mb-3" type="submit"> Signup </button>
            <p class="small">by clicking on sugn up your are agree to out <a href=""> Terms and conditions.</a><a href=""> Terms of use, </a><a href=""> Privacy policy </a>. you may receive sms notifications emails, newsletter and updates. you acknowledge that sya stayto enjoy.</p>
        </div>
      </div>
        </form>
        </div> <!-- /col-md-6 -->
      </div> <!-- /row -->
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->
  

</main>
    <footer class="p-0 position-relative">

      <?php include 'include/footer-design.php';?>

    </footer> <!-- //footer -->

    <!-- Bootstrap JavaScript start -->


<script type="text/javascript">
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
    });
</script>

<script type="text/javascript">
  /*$("#toggle-bg").click(function(){
      $(".navbar").toggleClass("toggle-bg");
  });*/
</script>

<!-- carousel fun -->
<script type="text/javascript">
  
$('#carouselExample').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


  $('#carouselExample').carousel({ 
                interval: 2000
        });


  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').php(title);        
        content.php($(this).php());
        $(".modal-profile").modal({show:true});
    });

  });
</script>
  </body>
</html>
