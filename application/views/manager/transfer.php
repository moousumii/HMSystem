<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Transfer</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">Transfer</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<?php echo form_open('manager/saveTransfer'); ?>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Select Student ID</label>
										<select name="studentId" id="transferStudentID" class="form-control forselect2" required >
											<option value="" selected disabled > Select an Option</option>
											<?php foreach($students as $student):?>
												<option value="<?php echo $student->studentId?>"><?php echo $student->stdIdNo ?> => <?php echo $student->studentName?></option>
											<?php endforeach; ?>
										</select>
										<input type="hidden" id="transferStudentSeatID" name="sSeatId" />
										
									</div>	
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Zone</label>
										<input type="text" class="form-control" name="" value="" id="transferZoneID" disabled>
										
									</div>			
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Seat No.</label>
										<input type="text" class="form-control transferSeatNumberID" value="" id="transferSeatNumberID" disabled>
										<input type="hidden" id="transferSeatID" name="transfer_seat_info_seat_id"   />
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Zone</label>
										<select name="" id="selectSeatZoneID" class="form-control" required >
											<option value="" selected disabled > Select an Option</option>						
											<?php foreach($zones as $zone) {?>
												<option value="<?php echo $zone->zoneID?>"><?php echo $zone->zoneTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('zone_info_zoneID'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Select New Seat</label>
										<select name="seat_info_seatId" id="studentSeatID" class="form-control" required >
											<option value="0" selected > Select an Option</option>	
										</select>
										<div class="errorClass"><?php echo form_error('seat_info_seatId'); ?></div>
									</div>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Monthly Rent</label>
										<input type="text" class="form-control" name="monthelyRent" value="" id="seatRentID" required >
										<input type="hidden" name="seatNumber" id="seatNumberID">
										<div class="errorClass"><?php echo form_error('monthelyRent'); ?></div>
									</div>		
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Additional Charge</label>
										<input type="text" class="form-control" name="additionalCharge" value="" id="transferAdditionalID" >
										
									</div>	
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Special Discount</label>
										<input type="text" class="form-control" name="specialDiscount" value="" id="transferDiscountID" >
									</div>		
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary"> Submit </button>
									<button type="reset" class="btn btn-danger"> Reset</button>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>								
				</div>	
			</div>
		</div>
	</div>
<?php include('footer.php') ?>