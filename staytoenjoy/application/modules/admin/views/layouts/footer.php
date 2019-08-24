<!-- Footer -->
<footer class="site-footer">
    <div class="site-footer-legal">© Copyrights StayToEnjoy 2019. All RIGHT RESERVED.
        <a href="<?php echo base_url(); ?>"></a>
    </div>
    <!-- <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div> -->
</footer>
<!-- Core  -->
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/popper-js/umd/popper.min.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/bootstrap/bootstrap.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/animsition/animsition.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

<!-- Plugins -->
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/switchery/switchery.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/intro-js/intro.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/screenfull/screenfull.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/chartist/chartist.min.js"></script>

<script src="<?php echo base_url() ;?>/admin_desigin/vendor/aspieprogress/jquery-asPieProgress.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>

<!-- Scripts -->
<script src="<?php echo base_url() ;?>/admin_desigin/js/Component.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Base.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Config.js"></script>

<script src="<?php echo base_url() ;?>/admin_desigin/js/Section/Menubar.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Section/GridMenu.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Section/Sidebar.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Section/PageAside.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin/menu.js"></script>

<script src="<?php echo base_url() ;?>/admin_desigin/js/config/colors.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/config/tour.js"></script>
<script>
    Config.set('assets', '<?php echo base_url() ;?>admin_desigin/');
</script>

<!-- Page -->
<script src="<?php echo base_url() ;?>/admin_desigin/js/Site.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin/asscrollable.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin/slidepanel.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin/switchery.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/js/Plugin/aspieprogress.js"></script>

<script src="<?php echo base_url() ;?>/admin_desigin/js/ecommerce.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- datatable -->
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/datatables.net/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/datatables.net-responsive/dataTables.responsive.js"></script>

<script src="<?php echo base_url() ;?>/admin_desigin/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/datatables.net-buttons/buttons.html5.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/datatables.net-buttons/buttons.flash.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/datatables.net-buttons/buttons.print.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/datatables.net-buttons/buttons.colVis.js"></script>
<script src="<?php echo base_url() ;?>/admin_desigin/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>

<!-- validation-->
<script src="<?php echo base_url() ;?>admin_desigin/vendor/formvalidation/formValidation.min.js"></script>
<script src="<?php echo base_url() ;?>admin_desigin/vendor/formvalidation/framework/bootstrap4.min.js"></script>
<script src="<?php echo base_url() ;?>admin_desigin/js/validation.js"></script>
<script src="<?php echo base_url();?>js/jquery.flagstrap.js"></script>




<script src="<?php echo base_url();?>admin_desigin/vendor/dropify/dropify.min.js"></script>



<!-- SHOW TOASTR NOTIFIVATION -->
<?php if ($this->session->flashdata('flash_message') != ""):?>

    <script type="text/javascript">
        toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
    </script>

    <?php endif;?>

        <?php if ($this->session->flashdata('error_message') != ""):?>

            <script type="text/javascript">
                toastr.error('<?php echo $this->session->flashdata("error_message");?>');
            </script>

            <?php endif;?>

                <script type="text/javascript">
function deleteUser(t,user_id){

    if (confirm('Are you sure you want to delete user?')) {
        $.ajax({
            type: "POST",     
            url:"<?php echo base_url('admin/delete_user');?>",
            data:{user_id:user_id},
            success: function(data){
                if(data == 'true'){
                    $(t).closest('tr').remove();
                }else{
                    alert('failure');
                }

            }
        });
    } else { 
	return false;
  
    }
}
 //showPassword1
function showPass(){

  var x = document.getElementById("showPassword");
  if (x.type == "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

}
//showPassword2
function showPass2(){

  var x = document.getElementById("showPassword2");
  if (x.type == "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

}
function deleteComp(t,user_id,company_id){

    if (confirm('Are you sure you want to delete Comapny ?')) {
        $.ajax({
            type: "POST",     
            url:"<?php echo base_url('admin/delete_company');?>",
            data:{user_id:user_id,company_id:company_id},
            success: function(data){
                if(data == 'true'){
                    $(t).closest('tr').remove();
                }else{
                    alert('failure');
                }

            }
        });
    } else { 
	return false;
  
    }
}
$(document).ready(function($) {
    console.log("ready!");
    var checkboxvalue;
    var closedata;
    $('input[type="checkbox"]').click(function() {
        if ($(this).is(":checked")) {
            $('#exampleModalPrimary').modal();
            checkboxvalue = '0';
    		//$(this).attr("checked","checked");	
            $('h4.modal-title').text('Activate User');
            $('div.modal-body').html('<p>Are you sure you want to Activate this user ?</p>');
    		
        } 
    	else if ($(this).is(":not(:checked)")) {
            $('#exampleModalPrimary').modal();
            checkboxvalue = '1';
    			// $(this).removeAttr("checked");
    		
            $('h4.modal-title').text('Deactivate User');
            $('div.modal-body').html('<p>Are you sure you want to Deactivate this user ?</p>');
        } 
    	var element = $(this);
    	var current_element = $(this).attr('data');
        
    	  $('.savedata').on('click',function(){
    		console.log(current_element);
    		var status = checkboxvalue;
    		url = "<?php echo base_url('admin/update_status')?>";
    		$.ajax({
    		  type:"POST",
    		  url: url,
    		  data: {user_id:current_element,status:status},
    		  success: function(data)
    		  {   
    				if(checkboxvalue =='1'){
    					  element.removeAttr("checked");
    				}else{
    					  element.attr("checked","checked");	
    				}
    		  }
    		});
    		  
    	  });
    	   $('#dataclose').on('click',function(){    
    			var data = element.attr('status');
    			if(data == 0){
    				 element.attr("checked","checked");	
    				 
    			}else if(data == 1){
    				element.removeAttr("checked");
    			}
    		  $('#exampleModalPrimary').modal('hide');
    	   });
    	    
    	
    });

    $('#country_name').flagStrap();
 $('.dropify').dropify();

      
});
</script>