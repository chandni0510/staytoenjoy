<link rel="stylesheet" href="<?php echo base_url() ;?>/admin/admin_desigin/css/modals.css">
					<!-- Modal -->
                    <div class="modal fade modal-primary" id="exampleModalPrimary" aria-hidden="true"
                      aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title"></h4>
                          </div>
                          <div class="modal-body" style="font-size: 17px;">
                           
                          </div>

                          <div class="modal-footer">
                            <input type="button" class="btn btn-default" id="dataclose" data-dismiss="modal" name="dataclose" value="Close">
                            <input type="button" value="Save" name="savedata" class="btn btn-primary Save savedata" data-dismiss="modal">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal -->

<div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
          <!-- <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Basic</h3>
          </header> -->
		   <a href="<?php echo base_url('admin/register');?>"><input type="button" value="Add User" name="add_user" class="btn btn-primary"></a>
		   <br>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>Name</th>
				  <th>ID</th>
                  <th>Email</th>
                  <th>Mobile Number</th>
                  <th>Gender</th>
                  <th>Birthday</th>
                  <th>Status</th>       
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php if(!empty($users)){
              			foreach ($users as $user){ ?>
              			<tr>
              			<td > <div class="avatar avatar-online va-inhrt mr-2">
                             <?php if(isset($user['user_img'])) {
								$image =  base_url('uplaods/profile/').$user['user_img'];
							  }else{
				
								$image =  base_url('uplaods/profile/transparent-user.png');
							  }
							  ?>
						<img src="<?php echo  $image;?>" alt="..."><i class="avatar avatar-busy"></i></div><?php echo  $user['first_name'].' '. $user['last_name']?> </td>	
              			<td><?php echo  "HR-".rand(100000,999999); ?></td>
						<td><?php echo  $user['email']; ?></td>
              		    <td><?php echo  $user['mobile']; ?></td>
              		    <td><?php echo  $user['gender']; ?></td>
              		    <td><?php echo  date('d/m/Y',strtotime($user['dateofbirth'])); ?></td>
              		  	<td> <label class="switch position-relative d-inline-block my-2 ">
                            <input data="<?php echo $user['user_id'];?>" status="<?php echo $user['status'];?>" class="status_checks" type="checkbox" <?php if($user['status'] =='0') { echo "checked='checked'"; } ?>  value="1">
                            <span class="slider round position-absolute c-pointer"></span>
                          </label> </td>         
						<!--    <i data="<?php //echo $user['user_id'];?>" class="status_checks btn
  						<?php //echo ($user['status']) == '0'?
  						//'btn-success': 'btn-danger'?>  btn-sm btn-round "><?php //echo ($user['status']) =='0' ? 'Active' : 'Inactive'?>
 						</i> -->
						
				
  						<td>

				<div class="btn-group more-btn mousepointer" role="group">
                  <!-- <button type="button" class="btn btn-default dropdown-toggle" id="exampleAnimationDropdown1"
                    data-toggle="dropdown" aria-expanded="false"> -->
                   
                <!--     <i class="icon wb-grid-9" aria-hidden="true"></i> -->
                 <!--  </button> -->

                  <i class="fa fa-ellipsis-h"  id="exampleAnimationDropdown1"
                    data-toggle="dropdown" aria-expanded="false"></i>
                  <div class="dropdown-menu more-drop animate" aria-labelledby="exampleAnimationDropdown1" role="menu">
                    <!--  <a class="dropdown-item text-decor-none" href="#" target="blank" role="menuitem">
                      <i class="icon wb-eye"></i> View</a> -->
                    <a class="dropdown-item text-decor-none" href="<?php echo base_url('admin/edit_user/').$user['user_id'];?>" role="menuitem">
                      <i class="icon wb-eye"></i> View</a>
					  <?php //echo base_url('admin/delete_user/').$user['user_id'];?>
                    <a class="dropdown-item text-decor-none" href="javascript:void(0)"  role="menuitem"><i class="icon wb-trash" onclick="deleteUser(this,'<?php echo $user['user_id']; ?>')" ></i> Delete</a>
                  </div>
                </div>
              </td>
  						</tr>

               <?php } 
           				} ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Basic -->
</div>