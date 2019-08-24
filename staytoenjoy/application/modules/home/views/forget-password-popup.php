<!DOCTYPE html>
<head>
  <title> Stay to enjoy </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/responsive.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.typekit.net/efj6wpg.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.carousel.min.css">
  	   <link rel="icon" href="<?php echo base_url() ?>img/logo.png" type="image/png" sizes="16x16">
  
  <!-- css files end here  -->
</head>
  <body> 
		<?php $id = $userdata->unique_id;   
			  $type = "";		   
			if (preg_match('/^[0-9]*$/', $id)) {		
				$type = "Mobile";				
				$label = '<label class="custom-control-label" for="customRadio5"> Text a code to my phone ending in '.$userdata->unique_id.'</label>';}
			else{
				$label = '<label class="custom-control-label" for="customRadio5"> Email a link to we '.$userdata->unique_id.'</label>';		$type = "Email";			
				}	
		?>
    <!-- Modal -->
<div class="modal fade" id="verify-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex align-items-center justify-content-center h-100 my-0" role="document">
    <div class="modal-content border-radius-20 overflow-hidden" style="max-width: 400px;">
     
      <div class="modal-body p-0 text-center overflow-hidden">
        <img src="<?php echo base_url() ?>img/263.jpg" class="w-100">
        <div class="text-center pb-3">
          <h4 class="mt-3">StayToEnjoy Verification Code</h4>
          <hr>
          <div class="varification-main">
              
            <p class="mb-0 text-dark">Enter this verfication code on your device to sign in.</p>
            <input type="text" maxlength="1" id="1" >
            <input type="text" maxlength="1" id="a">
            <input type="text" maxlength="1" id="b">
            <input type="text" maxlength="1" id="c" class="ml-5">
            <input type="text" maxlength="1" id="d">
            <input type="text" maxlength="1" id="e">
            <p class="exp-code pt-1 text-dark">Code expires in: 00:<span id="timer"></span></p>
          </div>
          <hr>
          <input type="button"  class="w-25 border-r-20 btn btn-theme text-white py-0 continue" value="Continue">
          <p class="mt-2 mb-0 text-dark">Didnt get the code? <span><a class="resend_code" href="#">Resend Code</a></span></p>
        </div>
      </div>
    </div>
  </div>
</div> 

    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" id="toggle-bg">
      <div class="container-fluid mini-container justify-content-normal">
      <a class="navbar-brand float-left" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>img/logo.svg" class="img-fluid"></a>
      <div class="d-inline-flex justify-content-center w-100 w-md-82">
          <h5 class="text-center"> Forget Your Password? </h5>
    </div>
    </div> <!-- //container  -->
    </nav> <!-- //nav end here  -->

    <main role="main">
    <div class="container-fluid mini-container position-relative">
      <div class="col-md-12 position-absolute back-arrow"> <a href="<?php echo base_url() ?>home/forget_password"><i class="fa fa-arrow-left"></i> <strong> Back </strong></a></div>
    </div>

    <section class="forgot-sec h-80 d-flex align-items-center justify-content-center position-relative">
      <div class="container-fluid mini-container">
        <!-- Example row of columns -->
        <div class="row">
        <div class="col-md-4 offset-md-4">
          <div>
          <h6 class="mb-3"> We found the following information associated with your account </h6>		 
		  			<!--
                <div class="custom-control custom-radio radio-color">
                  <input type="radio" class="custom-control-input" id="customRadio5" name="example4" checked="checked">

                </div> -->
                <div class="custom-control custom-radio radio-color">
                  <input type="radio" class="custom-control-input" id="customRadio6" <?php echo $userdata->unique_id;?> name="unique_id" checked="checked">					<?php echo $label ;?>     				
                </div>          
       
          <p class="text-left mb-2"> <button class="btn btn-danger border-radius-50 mt-3 verify-modal"  data-toggle="modal" data-target="#verify-modal" id="begin"> Continue</button></p>      
          <p><a href="" class="text-danger">I don't have access to any of these</a></p>
      </div>
      </div>
      </div> <!-- /row -->
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->
  

</main>
 <?php include "include/footer.php"; ?> 
 <script>

 var myTimer
 var timing = 61;
 var type = "<?php echo $type;?>";
 var user_id = "<?php echo $userdata->user_id;?>"; 
 var unique_id = "<?php echo $userdata->unique_id;?>"; 
 var code = "<?php echo $userdata->verify_code;?>"; 
 
 $('.verify-modal').on('click',function(){
  //var counter = 61; 	 
	// var x = setInterval(function(){ 
			// counter = counter - 1;  
			// if(counter >= 0 ){
				// $('span#timer').html(counter); 
			// }else{
				// clearInterval(x);
			// }
 // },1000);
 // console.log('test',x);
  
begin();
 

//on click  continue
 $.ajax({     
	 type: "POST", 
	 url:"<?php echo base_url()?>home/ajax_mail_send/",  	
	 data: {type:type,unique_id:unique_id,code:code},	
	 dataType: "text",  	
	 success: function(response){    	
		 if(response){      
		 //console.log(response);   
		 }
	 },     
	 error: function(){     
	   //alert("failure");            	 
	  }
	});
 })	 
 function begin() {
   
        myTimer = setInterval(function() {
        --timing;
	if(timing >=0 ){
			$('span#timer').html(timing);
		}else{
			   clearInterval(myTimer);
		       alert('Too late! Try again');	
			   resend_code(user_id);
			   location.reload();	
			}     
    }, 1000);
		
 }

 
 //on click sending password
  $('.continue').on('click',function(){	 
	var one1 = $('#1').val();
	var one2 = $('#a').val();
	var one3 = $('#b').val();
	var one4 = $('#c').val();
	var one5 = $('#d').val();
	var one6 = $('#e').val();
     
     var codes = one1+one2+one3+one4+one5+one6;
     var pass = "<?php echo $userdata->password;?>"; 
	 
	  
	 $.ajax({            
		 type: "POST",            
		 url:"<?php echo base_url()?>home/ajax_mail_send_two/",  	
		 data: {type:type,unique_id:unique_id,codes:codes,pass:pass,code:code},	
		 dataType: "text",  	
		 success: function(data){   
			 if(data){               		 
				 console.log(data);
					if(data == "true"){
						alert('Your Verified Successfully');	
						//resend_code(user_id)
						location.reload();	
					}
					if(data == "false"){
						alert('Code Not Match');	
						resend_code(user_id)
						 clearTimeout(myTimer);
						 timing = 61;	
						location.reload();	
					}
			   
				 }
		    },            
		error: function(){              	 
			//alert("failure");            	 
					 }        	 		 
	 });
  });
  
  function resend_code(user_id){
	  $.ajax({     
	 type: "POST", 
	 url:"<?php echo base_url()?>home/ajax_resend_code/",  	
	 data: {user_id:user_id},	
	 dataType: "text",  	
	 success: function(response){    	
		 if(response){      
		 console.log('res',response);   
		 }
	 },     
	 error: function(){     
	 //alert("failure");            	 
	  }
	});
	  
  }
  
  $('.resend_code').on('click',function(){
		resend_code(user_id);
		location.reload();	
  });
  
 
 
 </script> 
 