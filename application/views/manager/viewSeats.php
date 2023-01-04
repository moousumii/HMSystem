<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Seat</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Seat</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/updateSeat', 'class="seatDetails-form"') ?>
					<?php echo form_hidden('seatId', $data->seatId); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_zoneID" id="selectZoneID" class="form-control removeDis" disabled>
											<option value="<?php echo $data->zoneID ?>" selected> <?php echo $data->zoneTitle ; ?></option>
											<?php foreach($values as $value) {?>
												<option value="<?php echo $value->zoneID?>"><?php echo $value->zoneTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('zone_info_zoneID'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Building</label>
										<select name="building_info_seatBuildingId" id="selectBuldingID" class="form-control zoneClass removeDis" disabled required>
											<option value="<?php echo $data->buildingId ?>" class="removablebuilding" selected> <?php echo $data->buildingNumber ; ?></option>
											<option value=""></option>
											<?php foreach($others['buildings'] as $building) {?>
												<option value="<?php echo $building->buildingId?>" class="removablebuilding" ><?php echo $building->buildingNumber?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('building_info_seatBuildingId'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Floor</label>
										<select name="floor_info_seatFloorId" id="selectFloorID" class="form-control zoneClass buildingClass removeDis" disabled>
											<option value="<?php echo $data->floorId ?>" class="removablebuilding removableFloor" selected> <?php echo $data->floorNumber ; ?></option>
											<option value=""></option>
											<?php foreach($others['floors'] as $floor) {?>
												<option value="<?php echo $floor->floorId?>" class="removablebuilding removableFloor" ><?php echo $floor->floorNumber?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('floor_info_seatFloorId'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Unit</label>
										<select name="unit_info_seatUnitId" id="selectUnitID" class="form-control zoneClass buildingClass floorClass removeDis" disabled>
											<option value="<?php echo $data->unitId ?>" class="removablebuilding removableFloor removableUnit" selected> <?php echo $data->unitNumber ; ?></option>
											<option value=""></option>
											<?php foreach($others['units'] as $unit) {?>
												<option value="<?php echo $unit->unitId?>" class="removablebuilding removableFloor removableUnit" ><?php echo $unit->unitNumber?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('unit_info_seatUnitId'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Room</label>
										<select name="room_info_seatRoomId" id="selectRoomID" class="form-control zoneClass buildingClass floorClass removeDis" disabled>
											<option value="<?php echo $data->roomId ?>" class="removablebuilding removableFloor removableUnit removableRoom" selected> <?php echo $data->roomNumber ; ?></option>
											<?php foreach($others['rooms'] as $room) {?>
												<option value="<?php echo $room->roomId?>" class="removablebuilding removableFloor removableUnit removableRoom" ><?php echo $room->roomNumber?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('room_info_seatRoomId'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Seat Number</label>
										<?php echo form_input(['name'=>'seatNumber', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('seatNumber').$data->seatNumber]);?>
										<div class="errorClass"><?php echo form_error('seatNumber'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Seat Type</label>
										<select name="seat_type_info_seatSeatTypeId" id="seatTypeID" class="form-control removeDis" disabled>
											<option value="<?php echo $data->seatTypeId ?>" selected> <?php echo $data->seatTypeName ; ?></option>
											<?php foreach($seatTypes as $seatType) {?>
												<option value="<?php echo $seatType->seatTypeId?>"><?php echo $seatType->seatTypeName?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('seat_type_info_seatSeatTypeId'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Status</label>
										<select name="seat_status_info_seatSeatStausId" id="" class="form-control removeDis" disabled>
											<option value="<?php echo $data->seatStausId ?>" selected> <?php echo $data->seatStatusTitle ; ?></option>
											<?php foreach($seatStatus as $seatStatus) {?>
												<option value="<?php echo $seatStatus->seatStausId?>"><?php echo $seatStatus->seatStatusTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('seat_status_info_seatSeatStausId'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Rent</label>
										<input type="text" class="form-control seatRentAmount" value="<?php echo $data->seatRentAmount ?>" disabled />
										<div class="errorClass"><?php echo form_error('seat_type_info_seatRentAmount'); ?></div>
										<input type="hidden" class="seatRentAmount" name="seat_type_info_seatRentAmount" value="<?php echo $data->seatRentAmount ?>" />
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'seatNote', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('').$data->seatNote]);?>
						    			<div class="errorClass"><?php echo form_error('seatNote'); ?></div>
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