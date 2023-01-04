<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Seat Type</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Seat Type</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/updateSeatType', 'class="SeatTypeDetails-form"')?>
					<?php echo form_hidden('seatTypeId',$data->seatTypeId); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Seat Type Name</label>
										<?php echo form_input(['name'=>'seatTypeName', 'class'=>'form-control removeDis ','required'=>'required', 'disabled'=>'disabled', 'value'=>set_value('seatTypeName').$data->seatTypeName]);?>
										<div class="errorClass"><?php echo form_error('seatTypeName'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Status</label>
										<select name="seatTypeStatus" class="form-control removeDis" disabled required>				
											<option value="<?php echo $data->seatTypeStatus ?>" selected disabled><?php if($data->seatTypeStatus == 1) {echo 'Active';} else {echo "Inactive";}; ?></option>	
											<option value="1">Active</option>	
											<option value="2">Inactive</option>	
										</select>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Seat Rent</label>
										<?php echo form_input(['name'=>'rentAmount', 'class'=>'form-control removeDis ','required'=>'required', 'disabled'=>'disabled', 'value'=>set_value('rentAmount').$data->rentAmount]);?>
										<div class="errorClass"><?php echo form_error('rentAmount'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Profit</label>
										<?php echo form_input(['name'=>'profit', 'class'=>'form-control removeDis ','required'=>'required', 'disabled'=>'disabled', 'value'=>set_value('profit').$data->profit]);?>
										<div class="errorClass"><?php echo form_error('profit'); ?></div>
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