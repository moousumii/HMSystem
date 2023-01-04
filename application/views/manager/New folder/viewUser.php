<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View User Account</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View User Account</li>
         </ol>
      </div>
   	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/updateUser'); ?>
					<?php echo form_hidden('adminID',$info->adminID); ?>
					<div class="row">
						<div class="col-md-12 m-top-15">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <label>Name</label>
									    <input type="text" class="form-control removeDisabled" value="<?php echo $info->adminName ?>" name="adminName" required disabled >
										<div class="red-text"> <?php  echo form_error('adminName'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <label>Username</label>
									    <input type="text" class="form-control" value="<?php echo $info->adminUserID ?>" name="adminUserID" required disabled >
										<div class="red-text"> <?php  echo form_error('adminUserID'); ?></div>
									</div>
								</div>			
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label>Role</label>
									    <select class="form-control removeDisabled" name="admin_role_roleID" required disabled >
											<option value="<?php echo $info->admin_role_roleID ?>" selected disabled><?php echo $info->roleName ?></option>
											<option value="2">Admin</option>
											<option value="4">Manager</option>
										</select>
										<div class="red-text"> <?php  echo form_error('admin_role_roleID'); ?></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>Contact Number</label>
									    <input type="text" class="form-control removeDisabled" value="<?php echo $info->adminContact ?>" name="adminContact" required disabled >
										<div class="red-text"> <?php  echo form_error('adminContact'); ?></div>
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label>User Status</label>
									    <select class="form-control removeDisabled" name="adminStatus" required disabled >
											<option value="<?php echo $info->adminStatus ?>" selected disabled ><?php if($info->adminStatus==1) echo "Active"; else echo "InActive" ?> </option>
											<option value="1">Active</option>
											<option value="0">InActive</option>
										</select>
										<div class="red-text"> <?php  echo form_error('admin_role_roleID'); ?></div>
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									    <label>Note</label>
									    <textarea type="text" class="form-control removeDisabled" name="adminNote" disabled ><?php echo $info->adminNote ?></textarea>
										<div class="red-text"> <?php  echo form_error('adminNote'); ?></div>
									  </div>
								</div>		
							</div>
							<div class="row m-top-15">
								<div class="col-md-12">
									<button type="button" class="btn btn-primary" id="removeDisabledButton"><i class="fa fa-pencil"></i> Edit</button>
									<button type="submit" class="btn btn-success addDisabled hidden"><i class="fa fa-thumbs-up"></i> Save</button>
									<button type="button" class="btn btn-warning addDisabled hidden" id="addDisabledButton"><i class="fa fa-times"></i> Cancel</button>
									<button class="btn btn-danger" onclick="window.history.back();"><i class="fa fa-arrow-left"></i> Back</button>
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