<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Admin</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">View Admin</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/updateAdmin', 'class="adminDetails-form"')?>
					<?php echo form_hidden('adminID',$data->adminID); ?>
					<?php //echo $data->adminID?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Name</label>
										<?php echo form_input(['name'=>'adminName', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('adminName').$data->adminName]);?>
					    				<div class="errorClass"><?php echo form_error('adminName'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Contact No</label>
										<?php echo form_input(['name'=>'adminContact', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('adminContact').$data->adminContact]);?>
					    				<div class="errorClass"><?php echo form_error('adminContact'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_zoneID" id="selectZoneID" class="form-control removeDis" disabled>
											<option value="<?php echo $data->zoneID ?>" selected ><?php echo $data->zoneTitle ; ?></option>
											<?php foreach($values as $value) {?>
												<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('zone_info_zoneID'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Status</label>
										<select name="adminStatus" id="" class="form-control removeDis" disabled>
											<option value="<?php echo $data->adminStatus ?>" selected><?php if($data->adminStatus == 1) {echo 'Active';} else {echo 'Inactive';}; ?></option>	
											<option value="1">Active</option>	
											<option value="2">Inactive</option>	
										</select>
										<div class="errorClass"><?php echo form_error('adminStatus'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'adminNote', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('').$data->adminNote]);?>
										<div class="errorClass"><?php echo form_error('adminNote'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<a type="button" class="btn btn-primary" id="removeDisabled"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

									<button type="submit" class="btn btn-success hidden hiddenButton"><i class="fa fa-check-square-o" aria-hidden="true"></i> Save</button>

									<a class="btn btn-danger hidden hiddenButton" id="addDisabled" ><i class="fa fa-reply-all" aria-hidden="true"></i>  Cancel</a>
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