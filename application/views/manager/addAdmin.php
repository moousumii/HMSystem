<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Admin</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('manager/'); ?>">Dash Board</a></li>
				<li class="active">Add Admin</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/insertAdmin', 'class="addAdmin-form"')?>
					<?php echo form_hidden('admin_role_roleID',4); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>User ID</label>
										<?php echo form_input(['name'=>'adminUserID', 'class'=>'form-control','value'=>set_value('adminUserID')]);?>
					    				<div class="errorClass"><?php echo form_error('adminUserID'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Name</label>
										<?php echo form_input(['name'=>'adminName', 'class'=>'form-control','value'=>set_value('adminName')]);?>
					    				<div class="errorClass"><?php echo form_error('adminName'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Contact No</label>
										<?php echo form_input(['name'=>'adminContact', 'class'=>'form-control','value'=>set_value('adminContact')]);?>
					    				<div class="errorClass"><?php echo form_error('adminContact'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_zoneID" id="selectZoneID" class="form-control">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($values as $value) {?>
												<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('zone_info_zoneID'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Password</label>
										<?php echo form_input(['name'=>'adminPassword', 'class'=>'form-control','value'=>set_value('adminPassword')]);?>
					    				<div class="errorClass"><?php echo form_error('adminPassword'); ?></div>
									</div>	
								</div>
								<!--<div class="col-md-4">
									<div class="form-group">
										<label> Role</label>
										<select name="" id="" class="form-control">
											<option value="0" selected disabled > Select an Option</option>
											<option value="1">Super Admin</option>
											<option value="2">Admin</option>
											<option value="3">Manager</option>
										</select>
										<div class="errorClass"><?php //echo form_error('admin_role_roleID'); ?></div>
									</div>
								</div>-->
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'adminNote', 'class'=>'form-control', 'rows'=>'3','value'=>set_value('adminNote')]);?>
					    				<div class="errorClass"><?php echo form_error('adminNote'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Add </button>
									<button type="reset" 
									class="btn btn-danger"> <i class="fa fa-refresh"></i> Reset</button>
								</div>
							</div>
						</div>
					</div>	
					<?php echo form_close() ?>							
				</div>	
			</div>
		</div>
	</div>
<?php include('footer.php') ?>