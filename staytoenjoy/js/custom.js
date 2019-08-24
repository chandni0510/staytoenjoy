
$(document).ready(function(){


  $('.owl-one').owlCarousel({
    loop:true,
    margin:15,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true,
            dots:false
        },
        600:{
            items:4,
            nav:false,
            dots:false
        },
        1000:{
            items:8,
            nav:true,
            loop:true,
            dots:false

        }
    }
})
    $('.owl-two').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            dots:false
        },
        600:{
            items:2,
            nav:false,
            dots:false
        },
        1000:{
            items:5,
            nav:true,
            loop:true,
            dots:false

        }
    }
})

    $('.owl-three').owlCarousel({
    loop:true,
    margin:15,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            nav:true,
            dots:false
        },
        600:{
            items:3,
            nav:false,
            dots:false
        },
        1000:{
            items:3,
            nav:true,
            loop:true,
            dots:false

        }
    }
})


});

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#video-modal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" ); 
})
  
  
// stop playing the youtube video when I close the modal
$('#video-modal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 

$("#notif-click").click(function(){
  $(this).hide();
});


$("#mdsfsdf").click(function(){
  $(this).addClass('sdf');
});    

// owl carousal fun end here

// newsfeed page - js - start //



// newsfeed page - js - end //

