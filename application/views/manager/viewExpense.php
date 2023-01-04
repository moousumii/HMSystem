<?php include('header.php') ?>
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-header">View Expense</h3>
		</div>
	</div>
	<div class="row">
      <div class="col-md-12">
         <ol class="breadcrumb">
            <li><a href="<?php echo base_url('manager/');?>">Dash Board</a> </li>
            <li class="active">View Expense</li>
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
								<div class="col-md-4">
									<div class="form-group">
										<label> Zone</label>
										<?php echo form_input(['name'=>'zoneTitle', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('zoneTitle').$data->zoneTitle]);?>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Expanse Field</label>
										<?php echo form_input(['name'=>'fieldTitle', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('fieldTitle').$data->fieldTitle]);?>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label> Amount</label>
										<?php echo form_input(['name'=>'expenseAmount', 'class'=>'form-control removeDis ', 'disabled'=>'disabled', 'value'=>set_value('expenseAmount').$data->expenseAmount]);?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Details</label>
										<?php echo form_textarea(['name'=>'expenseDetails', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('expenseDetails').$data->expenseDetails]);?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Note</label>
										<?php echo form_textarea(['name'=>'expenseNote', 'class'=>'form-control removeDis', 
						    			'disabled'=>'disabled', 'rows'=>'3', 'value'=>set_value('expenseNote').$data->expenseNote]);?>
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