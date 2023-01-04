<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Zone</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">View Zone</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/updateZone', 'class="zoneDetails-form"')?>
					<?php echo form_hidden('zoneID',$data->zoneID); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Zone</label>
										<?php echo form_input(['name'=>'zoneTitle', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'required'=>'required', 'value'=>set_value('zoneTitle').$data->zoneTitle]);?>
						   				<div class="errorClass"><?php echo form_error('zoneTitle'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Status</label>
										<select name="zoneStatus" class="form-control removeDis" disabled required>				
											<option value="<?php echo $data->zoneStatus ?>" selected disabled><?php if($data->zoneStatus == 1) {echo 'Active';} else {echo "Inactive";}; ?></option>	
											<option value="1">Active</option>	
											<option value="2">Inactive</option>	
										</select>
								    	<div class="errorClass"><?php echo form_error('zoneStatus'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'zoneNote', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('').$data->zoneNote]);?>
										<div class="errorClass"><?php echo form_error('zoneNote'); ?></div>
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