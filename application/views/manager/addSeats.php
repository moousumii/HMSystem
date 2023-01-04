<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Seat</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Seat</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/insertSeat', 'class="addSeat-form"') ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_zoneID" id="selectZoneID" class="form-control">
											<option value="" selected disabled > Select an Option</option>						
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
										<select name="building_info_seatBuildingId" id="selectBuldingID" class="form-control zoneClass">
											<option value="" selected disabled > Select an Option</option>
										</select>
										<div class="errorClass"><?php echo form_error('building_info_seatBuildingId'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Floor</label>
										<select name="floor_info_seatFloorId" id="selectFloorID" class="form-control zoneClass buildingClass">
											<option value="" selected disabled > Select an Option</option>	
										</select>
										<div class="errorClass"><?php echo form_error('floor_info_seatFloorId'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label> Unit</label>
										<select name="unit_info_seatUnitId" id="selectUnitID" class="form-control zoneClass buildingClass floorClass">
											<option value="" selected disabled > Select an Option</option>
										</select>
										<div class="errorClass"><?php echo form_error('unit_info_seatUnitId'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Room</label>
										<select name="room_info_seatRoomId" id="selectRoomID" class="form-control zoneClass buildingClass floorClass unitClass">
											<option value="" selected disabled > Select an Option</option>
										</select>
										<div class="errorClass"><?php echo form_error('room_info_seatRoomId'); ?></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Seat Number</label>
										<?php echo form_input(['name'=>'seatNumber', 'class'=>'form-control','value'=>set_value('seatNumber')]);?>
					    				<div class="errorClass"><?php echo form_error('seatNumber'); ?></div>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Seat Type</label>
										<select name="seat_type_info_seatSeatTypeId" id="seatTypeID" class="form-control">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($seatTypes as $seatType) {?>
												<option value="<?php echo $seatType->seatTypeId?>"><?php echo $seatType->seatTypeName?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('seat_type_info_seatSeatTypeId'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Rent</label>
										<!--<select name="seat_type_info_seatSeatTypeId" id="" class="form-control">
											<option value="0" selected disabled > Select an Option</option>						
											<?php //foreach($seatTypes as $seatType) {?>
												<option value="<?php //echo $seatType->seatTypeId?>"><?php //echo $seatType->seatRentAmount?></option>
											<?php //} ?>
										</select>-->
										
										<input type="text" class="form-control seatRentAmount" disabled />
										<div class="errorClass"><?php echo form_error('seat_type_info_seatSeatTypeId'); ?></div>
										<input type="hidden" class="seatRentAmount" name="seat_type_info_seatRentAmount" />
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'seatNote', 'class'=>'form-control', 'rows'=>'3','value'=>set_value('seatNote')]);?>
					    				<div class="errorClass"><?php echo form_error('seatNote'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Add</button>
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