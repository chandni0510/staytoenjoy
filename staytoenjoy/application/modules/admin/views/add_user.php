<div class="page-content container-fluid">
        <!-- Panel Basic -->
    <div class="panel">
        <div class="panel-body">
        <form action="<?php echo base_url()?>admin/register" method="post" role="form" class="contactForm" enctype="multipart/form-data">
          <div class="row">
       <div class="col-md-8">
        <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="first_name" class="form-control" placeholder="First Name">
              <?php echo form_error('first_name', '<span for="first_name" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
              <?php echo form_error('last_name', '<span for="last_name" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
        

        <div class="col-md-4">
          <div class="form-group">
            <input type="text" name="unique_id" class="form-control" placeholder="Email or phone number" >
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
                  <input type="radio" class="" id="customRadio5" name="gender" value="Male" checked="checked">
                  <label class="custom-control-label" for="customRadio5"> Male </label>
                </div> &nbsp;

                <div class="custom-control custom-radio d-inline">
                  <input type="radio" class="" id="customRadio6" name="gender" value="Female">
                  <label class="custom-control-label" for="customRadio6"> Female   </label>
                </div> &nbsp;
				<div class="custom-control custom-radio d-inline">
                  <input type="radio" class="" id="customRadio7" name="gender" value="Other">
                  <label class="custom-control-label" for="customRadio7"> Other   </label>
                </div>
            </div>
        </div>
        
    <div class="col-md-12"><label> <strong> Select User Role </strong></label></div>
        <div class="col-md-4">
          <div class="form-group">
            <select class="form-control custom-arrow font-14" id="" name="user_role">
                <?php if(!empty($user_role)){ 
                    foreach($user_role as $role){ ?>
                    <option  value="<?php echo $role['role_id']?>" ><?php echo $role['name']?></option> 
                <?php  } } ?>
                   
            </select>
           
              <?php echo form_error('user_role', '<span for="user_roleuser_role" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
        <div class="col-md-12"><label> <strong> Choose Password </strong></label></div>
        <div class="col-md-4">
          <div class="form-group position-relative">
            <input type="password" name="password" class="form-control " id="showPassword2" placeholder="Password">    <?php echo form_error('password', '<span for="password" generated="true" class="error_msg">', '</span>'); ?>
	
            <!-- <span class="pwd-show top-30 position-absolute"> <a href="javascript:void(0)" onclick="showPass2();">Show</a></span> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="password" name="cpassword" class="form-control" placeholder="Re-type Password">
             <?php echo form_error('cpassword', '<span for="cpassword" generated="true" class="error_msg">', '</span>'); ?>
          </div>
        </div>
       
      </div>
  </div>
    <div class="col-md-4">
                <div class="example-wrap">
                  <div class="example mt-0">
                    <input type="file" id="input-file-now-custom-1"  name="filefoto" class="dropify"
                    /> 
                   <label> <strong>Profile Image</strong></label>
                  </div>
                </div>
                <!-- End Example Default Value data-plugin="dropify" data-default-file="<?php// echo base_url('admin_desigin/photos/placeholder.png')?> -->
              </div>
         <div class="col-md-12 mt-3 mb-3">
            <button class="btn btn-danger border-radius-50 w-100 py-2 mb-3" type="submit"> Signup </button>
    
        </div>
</div>
        </form>
       
	
		</div>
    </div>
        <!-- End Panel Basic -->
 </div>