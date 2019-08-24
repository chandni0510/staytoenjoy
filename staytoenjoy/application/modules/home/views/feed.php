<?php include 'include/header.php';?>

  <body class="shadow-none">
     
    <?php include 'include/after-login-header.php';?>  
    
    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="border-top pb-1 bg-light-blue">
        <div class="cover-photos-profile border-bottom">
          <img src="img/cover-photo.jpg">
        </div>
        <div class="container-fluid bg-white" style="box-shadow: 0px 2px 6px #ccc;">
          <div class="container">
            <div class="px-3 py-4">
              Profile
            </div>
          </div>
        </div>
      </div>
      

      <section class="content-sec bg-light-blue pt-0 h-100vh">
        <div class="container-fluid"><!--  mini-container -->
          <!-- Example row of columns -->
          <div class="row">
            
            <div class="col-lg-8 col-md-4 offset-lg-2">
              <!--<h1 class="mb-4 font-weight-normal">Settings</h1>-->
            </div>
          </div>
        </div>
        <div class="container-fluid position-relative">

          <div class="position-absolute l-0 t--5 bg-white p-3 w-20 d-flex border-t-3-theme h-full">sdfdsf</div>

          <div class="offset-w-32 position-absolute t-10 w-35 center-inbox-hide px-2">
            <div class="mb-4 profile-setting bg-white border rounded-10">
              <div class="bg-white border-bottom d-flex flex-row p-3 rounded-t-r-10">
                <div class="pr-4 font-14"><img src="img/img.svg"> Create your post</div>
                <div class="pr-4 font-14"><img src="img/img.svg"> Add Picuture or Video </div>
                <div class="pr-4 font-14"><img src="img/img.svg"> Go Live</div>
              </div>
              <div class="bg-white border-bottom d-flex flex-row p-3">
                <textarea class="w-100 border-0 focus-none scroll-d-none font-14 message-box" placeholder="Post here"></textarea>
              </div>
              <div class="bg-white d-flex flex-row p-3 rounded-b-r-10">
                <div class="pr-4 font-14"><img src="img/img.svg"> Picture/Video</div>
                <div class="pr-4 font-14"><img src="img/img.svg"> Tag Friends</div>
                <div class="pr-4 font-14"><img src="img/img.svg"> Feelings/Activities</div>
                <div class="pl-4 font-14 ml-auto">
                  <a href="javascript:void(0)" class="text-dark"><i class="fa fa-ellipsis-h"></i></a>
                  <a href="javascript:void(0)" class="text-dark"><i class="fa fa-ellipsis-h pl-4"></i></a>
                </div>
              </div>
            </div>
            <div class="mb-4 profile-setting bg-white rounded-10 border">
              <div class="bg-white border-bottom d-flex align-items-center p-3 rounded-t-r-10">
                <div class="profile-pic mr-2">
                  <img src="img/profile-img.jpg" class="w-100">
                </div>
                <div class="pr-4 font-14">
                  <a href="javascript:void(0)">Uta Ordemann</a> to <a href="javascript:void(0)"> Claudia Gradisch</a>
                  <img src="img/noun_dot.svg">
                  <span class="text-secondary font-12">February 22 at 3:36 PM</span>
                  <a href="javascript:void(0)"><i class="fa fa-user pl-2"></i></a>
                </div>
                <a href="javascript:void(0)" class="font-14 text-dark ml-auto">
                  <i class="fa fa-ellipsis-h c-pointer"></i>
                </a>
              </div>
              <div class="bg-white d-flex flex-row pt-3 px-3 pb-0">
                <div class="pr-4 font-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
              </div>
              <div class="bg-white border-bottom d-flex flex-row p-3">
                <div class="font-14"><a href="javascript:void(0)" class="text-theme">Like</a></div>
                <div class="font-14 ml-auto">
                  <label class="position-relative mb-0 tooltip-hover float-right mb--7">
                    <a href="javascript:void(0)" class="btn btn-primary bg-theme py-1 font-14 text-white" data-toggle="modal" data-target="#bio-edit"><i class="fa fa-globe pr-2"></i>Translate
                    </a>
                  </label>
                </div>
              </div>
              <div class="bg-white border-bottom d-flex justify-content-between p-3">
                <a href="javascript:void(0)" class="font-14 text-theme">
                  <img src="img/img.svg"> Comment <sapn class="text-secondary">166</span>
                </a>
                <a href="javascript:void(0)" class="font-14 text-theme">
                  <img src="img/img.svg"> Sahre <sapn class="text-secondary">166</span>
                </a>
                <a href="javascript:void(0)" class="font-14 text-theme"><img src="img/img.svg"> Follow Posting</a>
              </div>
              <div class="bg-white border-bottom d-flex justify-content-between p-3 rounded-b-r-10">
                <a href="javascript:void(0)" class="font-14 text-theme">
                  <img src="img/img.svg"> Comment <sapn class="text-secondary">166</span>
                </a>
                <a href="javascript:void(0)" class="font-14 text-theme">
                  <img src="img/img.svg"> Sahre <sapn class="text-secondary">166</span>
                </a>
                <a href="javascript:void(0)" class="font-14 text-theme"><img src="img/img.svg"> Follow Posting</a>
              </div>
            </div>
          </div>

          <div class="position-absolute r-0 t--5 bg-trans-white p-0 w-20 d-flex border-t-3-yellow">
            <?php include 'include/feed-right-chatbox.php';?>
          </div>

        </div>

        </div> <!-- /container -->
      </section> <!-- //content section end here  -->

    </main> <!-- /main -->

    

    <!-- Bootstrap JavaScript start -->


<script type="text/javascript">


$(".message-box").keydown(function(e) {
    while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
        $(this).height($(this).height()+1);
    };
});


$('a[href="#open-chat"]').click(function(){
  $("#show-chat").removeClass('d-none');
});
$('a[href="#your-contact"]').click(function(){
  $("#show-chat").addClass('d-none');
});

</script>

  </body>
</html>
