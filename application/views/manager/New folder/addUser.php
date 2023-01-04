<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add User</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add User</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/storeUser'); ?>
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Name</label>
									    <input type="text" class="form-control" name="adminName" required >
										<div class="red-text"> <?php  echo form_error('adminName'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Username</label>
									    <input type="text" class="form-control" name="adminUserID" required >
										<div class="red-text"> <?php  echo form_error('adminUserID'); ?></div>
									</div>
								</div>			
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Role</label>
									    <select class="form-control" name="admin_role_roleID" required >
											<option value="">Select</option>
											<option value="2">Admin</option>
											<option value="4">Manager</option>
										</select>
										<div class="red-text"> <?php  echo form_error('admin_role_roleID'); ?></div>
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Contact Number</label>
									    <input type="text" class="form-control" name="adminContact" required  >
										<div class="red-text"> <?php  echo form_error('adminContact'); ?></div>
									  </div>
								</div>		
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Password</label>
									    <input type="password" class="form-control" name="adminPassword" required  >
										<div class="red-text"> <?php  echo form_error('adminPassword'); ?></div>
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Retype Password</label>
									    <input type="password" class="form-control" name="confirmPass" required  >
										<div class="red-text"> <?php  echo form_error('confirmPass'); ?></div>
									  </div>
								</div>		
							</div>	
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Note</label>
									    <textarea type="text" class="form-control" name="adminNote" ></textarea>
										<div class="red-text"> <?php  echo form_error('adminNote'); ?></div>
									  </div>
								</div>		
							</div>
							<div class="row m-top-15">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Done</button>
									<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
								</div>	
							</div>
						</div>
					</div>	
					<?php echo form_close(); ?>
				</div>	
			</div>
		</div>
	</div>

<?php include('footer.php') ?>