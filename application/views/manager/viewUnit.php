<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Unit</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">View unit</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/updateUnit', 'class="unitDetails-form"') ?>
					<?php echo form_hidden('unitId', $data->unitId); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_zoneID" id="selectZoneID" class="form-control removeDis" disabled>
											<option value="<?php echo $data->zoneID ?>" selected > <?php echo $data->zoneTitle ; ?></option>
											<?php foreach($values as $value) {?>
												<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('zone_info_zoneID'); ?></div>
										<input type="hidden" value="<?php echo $data->zoneID ?>" name="oldZone" />
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Building No</label>
										<select name="building_info_unitBuildingId" id="selectBuldingID" class="form-control zoneClass removeDis" disabled>
											<option value="<?php echo $data->buildingId ?>" class="removablebuilding" selected> <?php echo $data->buildingNumber ; ?></option>
											<option value=""></option>
											<?php foreach($buildings as $building) {?>
												<option value="<?php echo $building->buildingId?>" class="removablebuilding"><?php echo $building->buildingNumber?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('building_info_unitBuildingId'); ?></div>
										<input type="hidden" name="oldBuilding" value="<?php echo $data->buildingId?>" />
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Floor No</label>
										<select name="floor_info_unitFloorId" id="selectFloorID" class="form-control zoneClass buildingClass removeDis" disabled>
											<option value="<?php echo $data->floorId ?>" class="removablebuilding removableFloor" selected> <?php echo $data->floorNumber ; ?></option>
											<?php foreach($floors as $floor) {?>
												<option value="<?php echo $floor->floorId?>" class="removablebuilding removableFloor" ><?php echo $floor->floorNumber?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('floor_info_unitFloorId'); ?></div>
										<input type="hidden" value="<?php echo $data->floorId; ?>" name="oldFloor" />
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Unit No.</label>
										<?php echo form_input(['name'=>'unitNumber', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('unitNumber').$data->unitNumber]);?>
					    				<div class="errorClass"><?php echo form_error('unitNumber'); ?></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>No. of Room</label>
										<?php echo form_input(['name'=>'unitTotalNumberRoom', 'class'=>'form-control ', 'disabled'=>'disabled', 'value'=>set_value('unitTotalNumberRoom').$data->unitTotalNumberRoom]);?>
					    				<div class="errorClass"><?php echo form_error('unitTotalNumberRoom'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Status</label>
										<select name="unitStatus" id="" class="form-control removeDis" disabled>
											<option value="<?php echo $data->unitStatus ?>" selected><?php if($data->unitStatus == 1) {echo 'Active';} else {echo 'Inactive';}; ?></option>	
											<option value="1">Active</option>	
											<option value="2">Inactive</option>	
										</select>
										<div class="errorClass"><?php echo form_error('unitStatus'); ?></div>
										<input type="hidden" value="<?php echo $data->floorStatus; ?>" name="oldStatus" />
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'unitNote', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('').$data->unitNote]);?>
										<div class="errorClass"><?php echo form_error('unitNote'); ?></div>
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