<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Return Payment</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(''); ?>">Dash Board</a></li>
				<li class="active">View Return Payment</li>
			</ol>
		</div>
	</div>
	<?php include('messages.php') ?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Zone</label>
										<?php echo form_input(['name'=>'zoneTitle', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('zoneTitle').$data->zoneTitle]);?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Return Payment Type</label>
										<?php echo form_input(['name'=>'returnPaymentTypeTitle', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('returnPaymentTypeTitle').$data->returnPaymentTypeTitle]);?>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Student Name</label>
										<?php echo form_input(['name'=>'studentName', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('studentName').$data->studentName]);?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Amount</label>
										<?php echo form_input(['name'=>'returnPaymentAmount', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('returnPaymentAmount').$data->returnPaymentAmount]);?>
									</div>			
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'returnPaymentNote', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('returnPaymentNote').$data->returnPaymentNote]);?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<a href="<?php echo $this->agent->referrer() ?>" class="btn btn-danger"> Back</a>
								</div>
							</div>
						</div>
					</div>								
				</div>	
			</div>
		</div>
	</div>
<?php include('footer.php') ?>