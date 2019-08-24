 <?php include "include/login_register_header.php"; ?>
    <main role="main">
 <section class="content-sec" style="padding: 92px 0;">
    <div class="container-fluid mini-container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-6 mb-0">
            <h2>Welcome to StaytoEnjoy</h2>
            <p class="text-justify mb-5">A travel Shraing community to keep adventures - all in one place</p>
            <div class="d-flex align-items-center">
              <img src="<?php echo base_url() ?>img/login-img.svg" width="500" class="img-fluid" align="login-img">
            </div>

          </div> <!-- /col-md-6 -->
          <div class="col-md-6 mb-0">
            <h2 class="mb-4">Create Your Account</h2>
            <div class="d-md-flex justify-content-between">
              <button class="btn fb-btn border-radius-50">  <i class="fa fa-facebook"></i> <a href="https://www.facebook.com/staytoenjoy/" target="blank" class="text-white">Continue with Facebook </a></button>
             <button class="btn fb-btn twitter-btn border-radius-50">  <i class="fa fa-twitter"></i><a href="https://twitter.com/staytoenjoy?lang=de" target="blank" class="text-white"> Continue with Twitter </a></button>
               <button class="btn fb-btn google-btn border-radius-50"> <i class="fa fa-google-plus"></i> Continue with Google</button>
          </div>
		  
          <hr class="hr-seprater my-5">
        
        <div class="clearfix"></div>
	<form action="<?php echo base_url()?>home/register" method="post" role="form" class="contactForm" id="register_form">
		<div class="row">
        <div class="col-md-6">
          <div class="form-group">
             <input type="hidden" id="city" value="" name="city">
		 <input type="hidden" id="state" value="" name="state">
		  <input type="hidden" id="country" value="" name="country">
		 <input type="hidden" id="zipcode" value="" name="zipcode">
            <input type="text" name="first_name"  class="form-control inputfield error_msg"  placeholder="First Name">
              <?php echo form_error('first_name', '<span for="first_name" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="last_name" class="form-control inputfield error_msg" placeholder="Last Name">
              <?php echo form_error('last_name', '<span for="last_name" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="unique_id" class="form-control inputfield error_msg" placeholder="Email or phone number" >
                <?php echo form_error('unique_id', '<span for="unique_id" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
        <div class="col-md-12"><label> <strong> Birthday </strong></label></div>
        <div class="col-md-4">
          
          <div class="form-group">
            <select class="form-control custom-arrow error_msg" id="day" name="day">
                <option selected disabled value=""> Day </option>
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
            <select class="form-control custom-arrow error_msg" id="month"  name="month">
                <option selected disabled value=""> Month </option>
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
            <select class="form-control custom-arrow error_msg" id="year" name="year">
                <option selected disabled value=""> Year </option>
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
                  <input type="radio" class="custom-control-input" id="customRadio5" name="gender" value="Male" checked="checked">
                  <label class="custom-control-label" for="customRadio5"> Male </label>
                </div> &nbsp;

                <div class="custom-control custom-radio d-inline">
                  <input type="radio" class="custom-control-input" id="customRadio6" name="gender" value="Female">
                  <label class="custom-control-label" for="customRadio6"> Female   </label>
                </div> &nbsp;
				<div class="custom-control custom-radio d-inline">
                  <input type="radio" class="custom-control-input" id="customRadio7" name="gender" value="Other">
                  <label class="custom-control-label" for="customRadio7"> Other   </label>
                </div>
            </div>
        </div>
        <div class="col-md-12"><label> <strong> Choose Password </strong></label></div>
        <div class="col-md-12">
          
         <div class="form-group position-relative clearfix" id="divPassword">
            
  
            <input type="password" name="password"  class="form-control inputfield left error_msg" style="padding-right: 230px!important;" id="showPassword2"  placeholder="Password">    
			<span for="password" generated="true" class="error_msg"></span>
			<?php echo form_error('password', '<span for="password" generated="true" class="error_msg">', '</span>'); ?>
          <div class="password-meter left">
            <div class="password-strength"></div>
        </div>
            <span class="pwd-show top-30 position-absolute"> <a href="javascript:void(0)" onclick="showPass2();">Show</a></span>
          </div>

        </div>
		<div class="col-md-12">
          <div class="form-group">
            <input type="password" name="cpassword" id="cpassword" class="form-control inputfield error_msg" placeholder="Re-type Password">
			<span for="password" generated="true" class="error_msg1"></span>
             <?php echo form_error('cpassword', '<span for="cpassword" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
		
      
        <div class="col-md-12 mt-3 mb-3">
            <input name="submit" value="Signup" class="btn btn-danger border-radius-50 w-100 py-2 mb-3 reg_submit" type="submit">  
            <p class="small">by clicking on sugn up your are agree to out <a href=""> Terms and conditions.</a><a href=""> Terms of use, </a><a href=""> Privacy policy </a>. you may receive sms notifications emails, newsletter and updates. you acknowledge that sya stayto enjoy.</p>
        </div>
      </div>
	</form>
	<div class="modal" id="mymodalonsubmit">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="close text-dark r-10" id="close1" >&times;</button>
        <div class="modal-body bg-secondary">
          <div class="d-flex justify-content-center">
            <div class="px-3">
              <i class="fa fa-check-circle font-60"></i>
            </div>
            <div class="pl-3">
              <h6>Thanks for signing up!</h6>
              <p class="font-12 mb-md-5">Please check you email <span class="font-weight-bold text-theme">Activate account</span> in the message we just send to  <span class="font-weight-bold text-theme">jens@mailinator.com.</span> <span class="font-weight-bold text-success">resend email</span>
              </p>
              <p class="d-inline-block text-success font-12">Terms of Use</p>
              <p class="d-inline-block text-success font-12">Privacy Policy</p>
              <p class="d-inline-block text-dark font-12">© 2019 StayToEnjoy.All rights reserved.</p>
            </div>
          </div>
        </div>
        <!-- Modal footer -->
      </div>
    </div>
  </div>
		
 </div> <!-- /col-md-6 -->
      </div> <!-- /row -->
      </div> <!-- /container -->
</section> <!-- //content section end here  -->
</main>
  <?php include "include/footer.php"; ?>
    <script type="text/javascript">
$(document).ready(function($){
$.ajax({
			type: "GET",
			url:"https://api.ipdata.co/?api-key=88c3ef97f7162b1f0419c08a7e3d38a6d894fa3fcdd8c5e3aabb33ca",
		//	data: {},
			success: function(data){
				var city = $('#city').val(data.city);
				var state = $('#state').val(data.region);
				var country = $('#country').val(data.country_code);
				var zipcode = $('#zipcode').val(data.postal);
			},
			error: function(){
				alert("failure");
			}
		});
  $("form#register_form").validate({
    rules: {
      first_name:{
        required: true,
        },
      last_name: {
        required: true,        
      }, 

     unique_id:{
        required: true,
       // email: true 
        },
		 day:{
        required: true,
       // email: true 
        },
		 month:{
        required: true,
       // email: true 
        },
		 year:{
        required: true,
       // email: true 
        },
      password : { 
        required: true,
        minlength : 6,
        },
      cpassword : {
        required: true,
        minlength : 6,
        equalTo : "#showPassword2",
        }      
    },
    messages: {
      first_name: {
       required:"Please Enter First Name",                                     
      },
      last_name:{
        required: "Please Enter a last Name",
      
      },
      unique_id: {
       required:"Please Enter Email or phone No.",                                     
      },
      password:{
        required: "Please Enter a Password",
      },
       cpassword:{
        required: "Please Enter a Confirm Password"
      }       
    },
errorPlacement: function(error, element) {
    element.attr("placeholder",error.text());
},
   submitHandler: function(form,e) {
            //e.preventDefault();			
            mymodalonsubmit();

		      form.submit();

              // return false;
  } 
  });
  
  function mymodalonsubmit(){
   
       	$('#mymodalonsubmit').modal();
   setTimeout(function() {
       $('#mymodalonsubmit').modal('hide');
       
   }, 6000);
  }
  $('#close1').on('click',function(){
      console.log('hii', $('form#register_form').submit());
        $('form#register_form').submit();
  })
  
 $(".inputfield").on('change',function () {
       var pass = $('#showPassword2').val();
	   var cpass = $('#cpassword').val();
  if ($(this).val() == ''){
        $(this).css('border-color', '#ff4c52');
  } 
  else if($(this).val() != ""){
		  if(pass.length < 8){
			  $('span.error_msg').html('The Password must be at least 8 characters in length.');
		  }			
		  else{
			  $('span.error_msg').html('');
		  } 
		  if(cpass != ""){
			  if(pass != cpass){
				   $('span.error_msg1').html('The Confirm Password does not match.');
			  } 
			  else{
			  $('span.error_msg1').html('');
		        } 
		  }else{
			  $('span.error_msg').html('');
		  }	 	  		  
	      $(this).css('border-color', '#11c26d');	  
	  }
	   
    });
	
	
  		
			// /^
  // (?=.*\d)          // should contain at least one digit
  // (?=.*[a-z])       // should contain at least one lower case
  // (?=.*[A-Z])       // should contain at least one upper case
  // [a-zA-Z0-9]{8,}   // should contain at least 8 from the mentioned characters
// $/
	
     $('#divPassword').PasswordMeter({
 
vars: {

  passwordBoxId: '',

  strength: 0,

  symbols: ['~', '`', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '|', '\\', '[', '{', ']', '}', ':', ';', '\'', '"', ',', '<', '.', '>', '/', '?'],

  alphaCount: 2,

  numberCount: 3,

  symbolCount: 2,

  length: 8

},

options: {

  color0: '#000',

  color25: '#ff6a00',

  color50: '#f7d722',

  color75: '#b6ff00',

  color100: '#6bc246'

}


   });
   
    // $('button.close').on('click',function(form,e) {
			  // console.log('sddsfdsf')
			// // form.submit();
			 // document.getElementById("register_form").submit();// Form submission
			// });

});


  </script>


  
    
