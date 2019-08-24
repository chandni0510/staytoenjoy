<div class="page-content container-fluid">
        <!-- Panel Basic -->
    <div class="panel">
        <div class="panel-body">
            <form id="exampleFullForm" autocomplete="off" method="post" action="<?php echo base_url('admin/admin_profile');?>">
              <div class="row row-lg">
                <div class="col-xl-6 form-horizontal">
                  <div class="form-group row">
                    <label class="col-xl-12 col-md-3 form-control-label">Username
                      <span class="required">*</span>
                    </label>
                    <div class=" col-xl-12 col-md-9">
                      <input type="text" class="form-control" name="username" 
                        value="<?php echo isset($admin_detail) ? $admin_detail->username : " " ?>" required="">
                    </div>
                  </div>
          			 <!-- <?php //print_r($admin_detail); ?> -->
                  <div class="form-group row">
                    <label class="col-xl-12 col-md-3 form-control-label">Email
                      <span class="required">*</span>
                    </label>
                    <div class="col-xl-12 col-md-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="icon wb-envelope" aria-hidden="true"></i>
                        </span>
                        <input type="email" class="form-control" name="email"  value="<?php echo isset($admin_detail) ? $admin_detail->email : " " ?>" required="">
                      </div>
                    </div>
                  </div>
 				<div class="form-group row">
                    <label class="col-xl-12 col-md-3 form-control-label">Birthday
                      <span class="required">*</span>
                    </label>
                    <div class="col-xl-12 col-md-9">
                      <input type="text" class="form-control" name="dateofbirth" placeholder="YYYY/MM/DD" value="<?php echo isset($admin_detail) ? $admin_detail->dateofbirth : " "; ?>"
                        required="" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-12 col-md-3 form-control-label">Password
                      <span class="required">*</span>
                    </label>
                    <div class="col-xl-12 col-md-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="icon wb-lock" aria-hidden="true"></i>
                        </span>
                        <input type="password" class="form-control" name="password" placeholder="Min length 8"
                          required="">
                      </div>
                    </div>
                  </div>
				<div class="form-group row">
                    <label class="col-xl-12 col-md-3 form-control-label">Skills
                      <span class="required">*</span>
                    </label>
                    <div class="col-xl-12 col-md-9">
                      <textarea class="form-control" name="description" rows="3" placeholder="Describe your skills"
                        required=""><?php echo isset($admin_detail) ? $admin_detail->description : ""; ?></textarea>
                    </div>
                  </div>
                </div>
                 <div class="col-xl-6 form-horizontal">
                  <div class="form-group row">
                    <label class="col-xl-12 col-md-3 form-control-label">Photo</label>
                    <div class="col-xl-12 col-md-9">
						<div class="example-wrap">
							<!-- <h4 class="example-title">You can add a default value</h4> -->
							<div class="example">
								<input type="file" id="input-file-now-custom-1" data-plugin="dropify" data-default-file="<?php echo base_url() ;?>/admin_desigin/photos/placeholder.png"/>
							</div>
						</div>
                    </div>
                  </div>
                 </div>
                <div class="form-group col-xl-12 text-left padding-top-m">
                  <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button>
                </div>
              </div>
            </form>
        </div>
    </div>
        <!-- End Panel Basic -->
 </div>