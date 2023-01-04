<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Receive Payment</h3>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
				<li class="active">Receive Payment</li>
			</ol>
	    </div>
   	</div>
   	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/insertReceivePayment', 'class="addReceivePayment-form"') ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_paymentZoneId" id="" class="form-control">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($infos as $info) {?>
												<option value="<?php echo $info->zoneID?>"><?php echo $info->zoneTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('zone_info_paymentZoneId'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Payment Type</label>
										<select name="payment_type_info_paymentTypeId" id="" class="form-control">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($values as $value) {?>
												<option value="<?php echo $value->paymentTypeInfoId?>"><?php echo $value->paymentTypeTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('payment_type_info_paymentTypeId'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Student Name</label>
										<select name="student_info_paymentStudentId" id="payment_std_ID" class="form-control forselect2">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($students as $student) {?>
												<option value="<?php echo $student->studentId?>">(<?php echo $student->stdIdNo?>) <?php echo $student->studentName?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('student_info_paymentStudentId'); ?></div>
									</div>	
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label> Due</label>
										<input type="text" class="form-control" id="stdBalanceID" disabled />
										
									</div>			
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label> Amount</label>
										<?php echo form_input(['name'=>'receivedPaymentAmount', 'class'=>'form-control','id'=>'','value'=>set_value('receivedPaymentAmount')]);?>
					    				<div class="errorClass"><?php echo form_error('receivedPaymentAmount'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'receivedPaymentNote', 'class'=>'form-control', 'rows'=>'3', 'value'=>set_value('receivedPaymentNote')]);?>
					    				<div class="errorClass"><?php echo form_error('receivedPaymentNote'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="checkbox">
										<label>
										  <input type="checkbox"> Send SMS
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary">Submit</button>
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