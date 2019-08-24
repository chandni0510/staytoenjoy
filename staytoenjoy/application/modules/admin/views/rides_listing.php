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

          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>Name</th>
				          <th>User ID</th>
                  <th>Departure Point</th>
                  <th>Destination </th>
                  <th>City</th>
                  <th>Ride Start Date/Time</th>
                  <th>Ride End Date/Time</th>
                  <th>Distance</th>
                  <th>Action</th>
                </tr>
              </thead>


              <tbody>
              <?php if(!empty($rides_listing)){
              			foreach ($rides_listing as $rides){ ?>
              			<tr>
              			<td> <div class="avatar avatar-online va-inhrt mr-2">
                            <img src="<?php echo base_url() ;?>/admin_desigin/portraits/1.jpg" alt="..."><i class="avatar avatar-busy"></i></div>Mary Jhon</td>	
              			<td><?php echo $rides['user_id']; ?></td>
						<td><?php echo  $rides['rides_start']; ?></td>
              		    <td><?php echo  $rides['rides_destination']; ?></td>
              		    <td><?php echo  $rides['city']; ?></td>
              		    <td><?php echo  date('d/m/Y',strtotime($rides['ride_start_date'])) .'-'.date('h:m a',strtotime($rides['ride_start_time'])) ; ?></td>

              		  	 <td><?php echo  date('d/m/Y',strtotime($rides['ride_end_date'])) .'-'.date('h:m a',strtotime($rides['ride_end_time'])) ; ?></td>
				                  <td><?php echo  $rides['pipup_distance']; ?></td>
  						<td>

				<div class="btn-group more-btn mousepointer" role="group">
                 
                  <i class="fa fa-ellipsis-h"  id="exampleAnimationDropdown1"
                    data-toggle="dropdown" aria-expanded="false"></i>
                  <div class="dropdown-menu more-drop animate" aria-labelledby="exampleAnimationDropdown1" role="menu">                    
                             <a class="dropdown-item text-decor-none" href="<?php echo base_url('admin/ride_vechile/').$rides['user_id']."/".$rides['ride_sharing_id'];?>" role="menuitem">
                      <i class="icon wb-eye"></i> View</a>
					     <?php //echo base_url('admin/delete_user/').$user['user_id'];?>
                    <a class="dropdown-item text-decor-none" href="javascript:void(0)"  role="menuitem"><i class="icon wb-trash" onclick="//deleteComp(this,'<?php echo $rides['user_id']; ?>','<?php echo $rides['ride_sharing_id']; ?>')" ></i> Delete</a>
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