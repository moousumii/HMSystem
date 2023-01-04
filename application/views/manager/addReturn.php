<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">Add Return</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">Add Return</li>
         </ol>
      </div>
   	</div>
   	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php echo form_open('manager/insertReturnPayment', 'class="addReturnPayment-form"') ?>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Zone</label>
										<select name="zone_info_returnPaymentZoneId" id="" class="form-control">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($infos as $info) {?>
												<option value="<?php echo $info->zoneID?>"><?php echo $info->zoneTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('zone_info_returnPaymentZoneId'); ?></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Return Payment Type</label>
										<select name="return_payment_type_info_returnPaymentTypeId" id="" class="form-control">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($values as $value) {?>
												<option value="<?php echo $value->returnPaymentTypeInfoId?>"><?php echo $value->returnPaymentTypeTitle?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('return_payment_type_info_returnPaymentTypeId'); ?></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Student Name</label>
										<select name="student_info_returnPaymentStudentId" id="" class="form-control forselect2">
											<option value="0" selected disabled > Select an Option</option>						
											<?php foreach($students as $student) {?>
												<option value="<?php echo $student->studentId?>">(<?php echo $student->stdIdNo?>) <?php echo $student->studentName?></option>
											<?php } ?>
										</select>
										<div class="errorClass"><?php echo form_error('student_info_returnPaymentStudentId'); ?></div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Amount</label>
										<?php echo form_input(['name'=>'returnPaymentAmount', 'class'=>'form-control','value'=>set_value('returnPaymentAmount')]);?>
					    				<div class="errorClass"><?php echo form_error('returnPaymentAmount'); ?></div>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'returnPaymentNote', 'class'=>'form-control', 'rows'=>'3', 'value'=>set_value('returnPaymentNote')]);?>
					    				<div class="errorClass"><?php echo form_error('returnPaymentNote'); ?></div>
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