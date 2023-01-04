<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Room</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">Add Room</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/insertRoom', 'class="addRoom-form"') ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
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
								<div class="col-md-4">
									<div class="form-group">
										<label> Building No</label>
										<select name="building_info_roomBuildingId" id="selectBuldingID" class="form-control zoneClass">
											<option value="0" selected disabled > Select an Option</option>				
										</select>
										<div class="errorClass"><?php echo form_error('building_info_roomBuildingId'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Floor No</label>
										<select name="floor_info_roomFloorId" id="selectFloorID" class="form-control zoneClass buildingClass">
											<option value="" selected disabled > Select an Option</option>			
										</select>
										<div class="errorClass"><?php echo form_error('floor_info_roomFloorId'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Unit No</label>
										<select name="unit_info_roomUnitId" id="selectUnitID" class="form-control zoneClass buildingClass floorClass">
											<option value="" selected disabled > Select an Option</option>			
										</select>
										<div class="errorClass"><?php echo form_error('unit_info_roomUnitId'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Room No</label>
										<?php echo form_input(['name'=>'roomNumber', 'class'=>'form-control','value'=>set_value('roomNumber')]);?>
					    				<div class="errorClass"><?php echo form_error('roomNumber'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'roomNote', 'class'=>'form-control', 'rows'=>'3','value'=>set_value('roomNote')]);?>
					    				<div class="errorClass"><?php echo form_error('roomNote'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Add </button>
									<button type="reset" class="btn btn-danger"> <i class="fa fa-refresh"></i> Reset</button>
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