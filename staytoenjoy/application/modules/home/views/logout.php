 <?php include "include/login_register_header.php"; ?>
  <script src="https://www.creativethoughtsinfo.com/CTCC/staytoenjoy/js/jquery.min.js"></script>
      <script>
    function accessCookie(cookieName)
        {
          var name = cookieName + "=";
          var allCookieArray = document.cookie.split(';');
          for(var i=0; i<allCookieArray.length; i++)
          {
            var temp = allCookieArray[i].trim();
            if (temp.indexOf(name)==0)
            return temp.substring(name.length,temp.length);
          }
          return "";
        }
    
       
    
    var savedsession = accessCookie("savedlogin");
     $.get("home/ajax_get_profile/"+savedsession, function(data, status){
        obj = JSON.parse(data);
 

  $("#savedusername").html(obj.first_name+' '+obj.last_name);
  
  // $("#saveduserimage").html('<img src="<?php echo base_url() ?>img/transparent-user.png" alt="profile-img">');
  console.log(obj.user_img);
  if(obj.user_img == null){
    
    $("#saveduserimage").html('<img src="<?php echo base_url() ?>img/transparent-user.png" alt="profile-img">');
  }else{
  $("#saveduserimage").html('<img src="<?php echo base_url() ?>uplaods/profile/'+obj.user_img+'" alt="profile-img">'); 
  }
  
   $("#savedlink").attr("href", "http://www.creativethoughtsinfo.com/CTCC/staytoenjoy/home/savedlogin/"+obj.user_id);
   
  /*{"user_id":"3","user_img":null,"lang":"en","sigin_type":"0","first_name":"Mary","last_name":"Jhons","unique_id":"test@mailinator.com","password":"MTIzNDU2","dateofbirth":"5 June 1928","gender":"Male","token":"49267","status":"0","company_id":"1","creation":"2019-03-13 20:04:43","modified":null,"verify_code":"823292","address1":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","street1":"12","address2":"Lorem Ipsum is simply dummy","street2":"12","city":"Indore","state":"MP","country":"IN","zipcode":"452001","email":"test@mailinator.com","landline":"2450001","mobile":"7894561233","user_lang":"en","user_currency":"USD","user_tax_rate":" 10","user_tax_id":" 7558785","user_residence":"I'm EU Resident"}*/
  });
      
      
      
      </script>
    <main role="main">
    <section class="content-sec" style="padding: 92px 0;">
      <div class="container-fluid mini-container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-6 mb-0">
            <h2 class="mb-1">Thanks for visit StayToEnjoy  </h2>
            <p class="text-justify mb-5">A travel Shraing community to keep adventures - all in one place</p>
            
            <h2 class="mb-4"> Recent Logins </h2>
              <div class="float-left "  >
                <a id="savedlink" href="" class="profile-img recentlogin" style="background:transparent!important;">
                  <div class="position-relative">
                  <center id="saveduserimage"><img src="<?php echo base_url() ?>img/profile-img.jpg" alt="profile-img"></center>
                  <span class="notify">2</span>
                  <p class="text-center mt-2" id="savedusername"> Jens </p>  
                  </div>
                </a>
              </div>
              <div class="float-left ml-3">
                <a href="" class="profile-img recentlogin" style="background:transparent!important;">
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
            <br>
            <div class="d-md-flex justify-content-between">
            <button class="btn fb-btn border-radius-50">  <i class="fa fa-facebook"></i> <a href="https://www.facebook.com/staytoenjoy/" target="blank" class="text-white">Continue with Facebook </a></button>
             <button class="btn fb-btn twitter-btn border-radius-50">  <i class="fa fa-twitter"></i><a href="https://twitter.com/staytoenjoy?lang=de" target="blank" class="text-white"> Continue with Twitter </a></button>
               <button class="btn fb-btn google-btn border-radius-50"> <i class="fa fa-google-plus"></i> Continue with Google</button>
          </div>
          <hr class="hr-seprater my-5">
        
        <div class="clearfix"></div>
   <form action="<?php echo base_url()?>home/register" method="post" role="form" class="contactForm" id="register_form2">
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
           
            <input type="text" name="first_name"  class="form-control inputfield"  placeholder="First Name">
              <?php echo form_error('first_name', '<span for="first_name" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="last_name" class="form-control inputfield" placeholder="Last Name">
              <?php echo form_error('last_name', '<span for="last_name" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="unique_id" class="form-control inputfield" placeholder="Email or phone number" >
                <?php echo form_error('unique_id', '<span for="unique_id" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
        <div class="col-md-12"><label> <strong> Birthday </strong></label></div>
        <div class="col-md-4">
          
          <div class="form-group">
            <select class="form-control custom-arrow" id="day" name="day">
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
            <select class="form-control custom-arrow" id="month"  name="month">
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
            <select class="form-control custom-arrow" id="year" name="year">
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
        <div class="col-md-6">
          <div class="form-group position-relative">
            <input type="password" name="password" class="form-control inputfield" id="showPassword2" placeholder="Password">    <?php echo form_error('password', '<span for="password" generated="true" class="error_msg">', '</span>'); ?>
	
            <span class="pwd-show top-30 position-absolute"> <a href="javascript:void(0)" onclick="showPass2();">Show</a></span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="password" name="cpassword" class="form-control inputfield" placeholder="Re-type Password">
             <?php echo form_error('cpassword', '<span for="cpassword" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
        <div class="col-md-12 mt-3 mb-3">
            <input name="submit" value="Signup" class="btn btn-danger border-radius-50 w-100 py-2 mb-3 reg_submit" type="submit">  
            <p class="small">by clicking on sugn up your are agree to out <a href=""> Terms and conditions.</a><a href=""> Terms of use, </a><a href=""> Privacy policy </a>. you may receive sms notifications emails, newsletter and updates. you acknowledge that sya stayto enjoy.</p>
        </div>
      </div>
        </form>
		
	
	   </div> <!-- /col-md-6 -->
      </div> <!-- /row -->
      </div> <!-- /container -->
   </section> <!-- //content section end here  -->
  

</main>
<?php include "include/footer.php";?>
    <script type="text/javascript">
$(document).ready(function($){
  $("form#register_form2").validate({
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
   // submitHandler:submit(); 
  })  

     $(".inputfield").on('change',function () {

      if ($(this).val() == '')
        $(this).css('border-color', '#ff4c52');
      else
        $(this).css('border-color', '#11c26d');
    });
});

  </script>